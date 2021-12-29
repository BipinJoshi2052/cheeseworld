<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProductsController;
use App\Library\CommonFunction;
use App\Models\RoleUser;
use App\Models\User;
use Cookie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Request;
use Session;
use Socialite;
use Validator;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen.
    |
     */
    public $classCommonFunction;
    public $settingsData = array();
    public $recaptchaData = array();
    public $product;
    public $option;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('verifyLoginPage');
        $this->middleware('isAdminLogin')->only('goToAdminLoginPage');

        $this->classCommonFunction = new CommonFunction();
        $this->product = new ProductsController();
        $this->option = new OptionController();
    }

    /**
     *
     * Manage admin user cookie data
     *
     * @param null
     * @return response
     */
    public function goToAdminLoginPage()
    {
        $user_view = '';
        $pass_view = '';
        $recaptchaData = get_recaptcha_data();

        $this->classCommonFunction->set_admin_lang();

        if (Cookie::has('remember_me_data')) {
            $get_cookie = Cookie::get('remember_me_data');
            $cookie_parse = explode('#', $get_cookie);

            if (is_array($cookie_parse) && count($cookie_parse) > 0) {
                $userDetails = User::find($cookie_parse[0]);
                $password = bcrypt(base64_decode($cookie_parse[1]));

                if (Hash::check(base64_decode($cookie_parse[1]), $password) && Hash::check(base64_decode($cookie_parse[1]), $userDetails['password'])) {
                    $user_view = $userDetails['email'];
                    $pass_view = base64_decode($cookie_parse[1]);
                }
            }
        }

        $data = array(
            'user' => $user_view,
            'pass' => $pass_view,
            'is_enable_recaptcha' => $recaptchaData['enable_recaptcha_for_admin_login'],
        );

        return view('pages.auth.admin-login')->with('data', $data);
    }

    /**
     *
     * Manage frontend user cookie data
     *
     * @param null
     * @return response
     */
    public function goToFrontendLoginPage()
    {
        if (Session::has('shopist_frontend_user_id')) {
            return redirect()->route('user-account-page');
        }
        $user_view = '';
        $pass_view = '';
        $data = array();
        $recaptchaData = get_recaptcha_data();

        if (Cookie::has('frontend_remember_me_data')) {
            $get_cookie = Cookie::get('frontend_remember_me_data');
            $cookie_parse = explode('#', $get_cookie);

            if (is_array($cookie_parse) && count($cookie_parse) > 0) {
                $userDetails = User::find($cookie_parse[0]);
                $password = bcrypt(base64_decode($cookie_parse[1]));

                if (Hash::check(base64_decode($cookie_parse[1]), $password) && Hash::check(base64_decode($cookie_parse[1]), $userDetails['password'])) {
                    $user_view = $userDetails['name'];
                    $pass_view = base64_decode($cookie_parse[1]);
                }
            }
        }

        $login_data = array(
            'user' => $user_view,
            'pass' => $pass_view,
            'is_enable_recaptcha' => $recaptchaData['enable_recaptcha_for_user_login'],
        );

        $data = $this->classCommonFunction->get_dynamic_frontend_content_data();
        $data['frontend_login_data'] = $login_data;
        $data['settings_data'] = global_settings_data();

        return view('pages.auth.user-login')->with($data);
    }

    /**
     *
     * Manage admin login
     *
     * @param null
     * @return response
     */
    public function postAdminLogin()
    {
        if (Request::isMethod('post') && Session::token() == Request::Input('_token')) {
            $get_input = Request::all();

            $rules = [
                'admin_login_email' => 'required|email',
                'admin_login_password' => 'required',
            ];

            $messages = [
                'admin_login_email.required' => Lang::get('validation.email_required'),
                'admin_login_email.email' => Lang::get('validation.email_is_email'),
                'admin_login_password.required' => Lang::get('validation.password_required'),
            ];

            $recaptchaData = get_recaptcha_data();
            if ($recaptchaData['enable_recaptcha_for_admin_login'] == true) {
                $rules['g-recaptcha-response'] = 'required|captcha';
                $messages['g-recaptcha-response.required'] = Lang::get('validation.g_recaptcha_response_required');
            }

            $validator = Validator::make($get_input, $rules, $messages);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withInput(Request::except('admin_login_password'))
                    ->withErrors($validator);
            } else {
                $email = Request::Input('admin_login_email');
                $password = bcrypt(Request::Input('admin_login_password'));

                $userdata = ['email' => $email, 'user_status' => 1];

                $data = User::where($userdata)->first();

                if (!empty($data) && isset($data->password) && isset($data->id)) {
                    $get_user_role = get_user_details($data->id);

                    if (Hash::check(Request::Input('admin_login_password'), $password) && Hash::check(Request::Input('admin_login_password'), $data->password) && isset($get_user_role['user_role_slug']) && ($get_user_role['user_role_slug'] == 'administrator') || ($get_user_role['user_role_slug'] == 'vendor')) {

                        if (Session::has('shopist_admin_user_id')) {
                            Session::forget('shopist_admin_user_id');
                            Session::put('shopist_admin_user_id', $data->id);
                        } elseif (!Session::has('shopist_admin_user_id')) {
                            Session::put('shopist_admin_user_id', $data->id);
                        }

                        $remember = (Request::has('remember_me')) ? true : false;

                        if ($remember == true) {
                            $remember_data = '';
                            $remember_data = $data->id . '#' . base64_encode(Request::Input('admin_login_password'));

                            return redirect()->route('admin.dashboard')->withCookie(cookie()->forever('remember_me_data', $remember_data));
                        } elseif ($remember == false) {
                            if (Cookie::has('remember_me_data')) {
                                $cookie = Cookie::forget('remember_me_data');
                                return redirect()->route('admin.dashboard')->withCookie($cookie);
                            } else {
                                return redirect()->route('admin.dashboard');
                            }
                        }
                    } else {
                        Session::flash('error-message', Lang::get('admin.authentication_failed_msg'));
                        return redirect()->back();
                    }
                } else {
                    Session::flash('error-message', Lang::get('admin.authentication_failed_msg'));
                    return redirect()->back();
                }
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     *
     * Manage frontend login
     *
     * @param null
     * @return void
     */
    public function postFrontendLogin()
    {
        if (Request::isMethod('post') && Session::token() == Request::Input('_token')) {
            $inputData = Request::all();
            
            $rules = [
                'login_username' => 'required',
                'login_password' => 'required',
            ];
            
            $messages = [
                'login_username.required' => Lang::get('validation.user_name_required'),
                'login_password.required' => Lang::get('validation.password_required'),
            ];
            
            $recaptchaData = get_recaptcha_data();
            if ($recaptchaData['enable_recaptcha_for_user_login'] == true) {
                $rules['g-recaptcha-response'] = 'required|captcha';
                $messages['g-recaptcha-response.required'] = Lang::get('validation.g_recaptcha_response_required');
            }
            
            $validator = Validator::make($inputData, $rules, $messages);
            
            if ($validator->fails()) {
                return redirect()->back()
                ->withInput()
                ->withErrors($validator);
            } else {
                $username = Request::Input('login_username');
                $password = bcrypt(Request::Input('login_password'));
                $userdata = ['name' => $username, 'user_status' => 1];
                $data = User::where($userdata)->first();
                if (!empty($data) && isset($data->password) && isset($data->id)) {
                    $get_user_role = get_user_details($data->id);
                    
                    if (Hash::check(Request::Input('login_password'), $password) && Hash::check(Request::Input('login_password'), $data->password)) {
                        
                        if (Session::has('shopist_frontend_user_id')) {
                            Session::forget('shopist_frontend_user_id');
                            Session::put('shopist_frontend_user_id', $data->id);
                            Session::forget('shopist_frontend_user_name');
                            Session::put('shopist_frontend_user_name', $data->display_name);
                        } elseif (!Session::has('shopist_frontend_user_id')) {
                            Session::put('shopist_frontend_user_id', $data->id);
                            Session::put('shopist_frontend_user_name', $data->display_name);
                        }
                        
                        $remember = (Request::has('login_remember_me')) ? true : false;
                        
                        if ($remember == true) {
                            $cookieData = array();
                            $cookieData = $data->id . '#' . base64_encode(Request::Input('login_password'));
                            
                            return redirect()->route('user-account-page')->withCookie(cookie()->forever('frontend_remember_me_data', $cookieData));
                        } elseif ($remember == false) {
                            if (Cookie::has('frontend_remember_me_data')) {
                                $cookie = Cookie::forget('frontend_remember_me_data');
                                return redirect()->route('user-account-page')->withCookie($cookie);
                            } else {
                                return redirect()->route('user-account-page');
                            }
                        }
                    } else {
                        // Session::flash('error-message', Lang::get('admin.authentication_failed_msg'));
                        return redirect()->back()->with(notify("error", Lang::get('admin.authentication_failed_msg')));
                    }
                } else {
                    // Session::flash('error-message', Lang::get('admin.authentication_failed_msg'));
                    return redirect()->back()->with(notify("error", Lang::get('admin.authentication_failed_msg')));
                }
            }
        } else {
            return redirect()->back();
        }
    }

    /**
     *
     * logout
     *
     * @param null
     * @return response
     */
    public function logoutFromLogin()
    {
        if (Session::has('shopist_admin_user_id')) {
            Session::forget('shopist_admin_user_id');
            return redirect()->route('admin.login');
        }
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $userSocial = Socialite::driver($provider)->stateless()->user();
        $users = User::where(['email' => $userSocial->getEmail()])->first();
        if ($users) {
            if (Session::has('shopist_frontend_user_id')) {
                Session::forget('shopist_frontend_user_id');
                Session::put('shopist_frontend_user_id', $users->id);
                Session::forget('shopist_frontend_user_name');
                Session::put('shopist_frontend_user_name', $users->display_name);
            } else {
              Session::put('shopist_frontend_user_id', $users->id);
              Session::put('shopist_frontend_user_name', $users->display_name);
            }
            return redirect('/');
        } else {
            $user = new User();
            $user->display_name = $userSocial->getName();
            $user->name = $userSocial->getName();
            $user->email = $userSocial->getEmail();
            $user->user_photo_url = $userSocial->getAvatar();
            $user->user_status = 1;
            $user->password = Hash::make('123456789');
            $user->secret_key = Hash::make('1234');
            $user->provider_id = $userSocial->getId();
            $user->provider = $provider;
            $user->save();
//             $user = User::create([
//                 'display_name' => $userSocial->getName(),
//                 'name' => $userSocial->getName(),
//                 'email' => $userSocial->getEmail(),
//                 'user_photo_url' => $userSocial->getAvatar(),
//                 'status' => 1,
// //                'password'      => $userSocial->getPassword(),
//                 'password' => Hash::make('123456789'),
//                 'provider_id' => $userSocial->getId(),
//                 'provider' => $provider,
//             ]);
            $role_user = new RoleUser();
            $role_user->user_id = $user->id;
            $role_user->role_id = 2;
            $role_user->created_at = date('Y-m-d h:i:s');
            $role_user->updated_at = date('Y-m-d h:i:s');
            $role_user->save();
            if (Session::has('shopist_frontend_user_id')) {
                Session::forget('shopist_frontend_user_id');
                Session::put('shopist_frontend_user_id', $user->id);
                Session::forget('shopist_frontend_user_name');
                Session::put('shopist_frontend_user_name', $user->display_name);
            } else {
                Session::put('shopist_frontend_user_id', $user->id);
                Session::put('shopist_frontend_user_name', $user->display_name);
            }
            return redirect('/');
        }
    }
}
