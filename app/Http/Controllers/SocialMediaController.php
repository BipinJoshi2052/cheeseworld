<?php

namespace App\Http\Controllers;

use App\Library\CommonFunction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SocialMediaController extends Controller
{
    private $page = "pages.admin.settings.";
    public $classCommonFunction;

    public function __construct()
    {
        $this->classCommonFunction = new CommonFunction();
    }
    public function getSocialForm()
    {

        // \putenv('FACEBOOK_CLIENT_ID=64584');
        // file_put_contents(app()->environmentFilePath(), str_replace(
        //     'FACEBOOK_CLIENT_ID=s', 'FACEBOOK_CLIENT_ID=64584', file_get_contents(app()->environmentFilePath())
        // ));
        $data = array();
        $data = $this->classCommonFunction->commonDataForAllPages();
        // $data['user_role_list_data'] = get_available_user_roles();
        // $data['settings_data'] = $this->option->getSettingsData();

        $is_vendor = is_vendor_login();
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        return view($this->page . "social-form", $data);
    }

    public function saveClientIds(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'FACEBOOK_CLIENT_ID' => ['nullable', 'required_with:FACEBOOK_SECRET_KEY'],
            'FACEBOOK_SECRET_KEY' => ['nullable', 'required_with:FACEBOOK_CLIENT_ID'],
            'GOOGLE_CLIENT_ID' => ['nullable', 'required_with:GOOGLE_SECRET_KEY'],
            'GOOGLE_SECRET_KEY' => ['nullable', 'required_with:GOOGLE_CLIENT_ID'],
        ], [
            'FACEBOOK_CLIENT_ID.required_with' => 'Facebook client id is required when Facebook secret key is present',
            'FACEBOOK_SECRET_KEY.required_with' => 'Facebook secret key is required when Facebook client id is present',
            'GOOGLE_CLIENT_ID.required_with' => 'Google client id is required when Google secret key is present',
            'GOOGLE_SECRET_KEY.required_with' => 'Google secret key is required when Google client id is present',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($validator->passes()) {
            $datas = [];
            $vardatas = [];
            foreach ($request->types as $key => $type) {
                if ($request->$type != null) {
                    $datas[$type] = '"' . $request->$type . '"';
                    // \putenv('"'.$type.'='.$request->$type.'"');
                }

            }
            // dd($datas);

        }
        // Artisan::call('config:cache');
        // Artisan::call('config:clear');
        Session::flash("success-message", "Social Login Settings updated successfully");
        return redirect()->route('admin.socialform');

    }

    protected function changeEnv($data = array())
    {
        if (count($data) > 0) {

            $env = file_get_contents(base_path() . '/.env');

            $env = preg_split('/\s+/', $env);

            foreach ((array) $data as $key => $value) {

                foreach ($env as $env_key => $env_value) {

                    $entry = explode("=", $env_value, 2);

                    if ($entry[0] == $key) {
                        $env[$env_key] = $key . "=" . $value;
                    } else {
                        $env[$env_key] = $env_value;
                    }
                }
            }

            $env = implode("\n", $env);

            file_put_contents(base_path() . '/.env', $env);

            return true;
        } else {
            return false;
        }
    }

    private function setEnv($key, $value)
    {
        // dd($value);
        // $value = '"' . trim($value) . '"';
        file_put_contents(app()->environmentFilePath(), str_replace(
            $key . '=' . env($key),
            $key . '=' . $value,
            file_get_contents(app()->environmentFilePath())
        ));
    }

    private function updateDotEnv($key, $newValue, $delim = '')
    {

        $path = base_path('.env');
        // get old value from current env
        $oldValue = env($key);

        // was there any change?
        if ($oldValue === $newValue) {
            return;
        }

        // rewrite file content with changed data
        if (file_exists($path)) {
            // replace current value with new value
            file_put_contents(
                $path, str_replace(
                    $key . '=' . $delim . $oldValue . $delim,
                    $key . '=' . $delim . $newValue . $delim,
                    file_get_contents($path)
                )
            );
        }
    }

    private function __overWriteEnvFile($type, $val)
    {
        // dd('"'.$type.'='.$val.'"');
        // dd('"'.$type.'"'.'='.'"'.$val.'"');

        // getenv("FACEBOOK_CLIENT_NAME");
        // putenv("FACEBOOK_CLIENT_NAME = efdfdfdfdfd");
        // putenv($type);
        // shell_exec("unset ".$type);
        $path = base_path('.env');

        if (file_exists($path)) {
            $val = '"' . trim($val) . '"';

            if (strpos(file_get_contents($path), $type) >= 0) {
                // if (is_numeric(strpos(file_get_contents($path), $type)) && strpos(file_get_contents($path), $type) >= 0) {
                // dd('elo');
                // \putenv('"'.$type.'='.$val.'"');
                // file_put_contents($path, str_replace(
                //     $type . '=' . env($type),
                //     $type . '=' . $val,
                //     file_get_contents($path)
                // ));
                // file_put_contents($path, str_replace(
                //     $type . '="' . env($type) . '"', $type . '=' . $val, file_get_contents($path)
                // ));
            } else {
                file_put_contents($path, file_get_contents($path) . "\r\n" . $type . '=' . $val);
            }
        }
    }
}
