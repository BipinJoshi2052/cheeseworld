<?php

namespace App\Http\Controllers\Frontend;

// use App\CancelOrder as AppCancelOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CancelOrder;
use App\Models\OrdersItem;
use App\Library\CommonFunction;
use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Auth;
// use App\Models\User;
// use Symfony\Component\HttpFoundation\Session\Session;

class CancelOrderController extends Controller
{

    public $classCommonFunction;
  public $carbonObject;

  public function __construct(){ 
    $this->classCommonFunction  =  new CommonFunction();
    $this->carbonObject         =  new Carbon();
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=CancelOrder::paginate(5);
        return view('pages.admin.orders.cancel-order',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd(Auth::user());
        // return view('pages.frontend.user-account.cancel-order');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cancel_order=new CancelOrder();
        $cancel_order->user_id=$request->user_id;
        $cancel_order->order_id=$request->order_id;
        $cancel_order->note=$request->note;
        $cancel_order->save();
        return redirect()->route('my-orders-page');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $userId = get_current_frontend_user_info();
        $order=OrdersItem::where('order_id',$id)->first();
        // dd($order);
        // return view('pages.frontend.user-account.user-account-pages',compact('order','userId'));
        $data = array();
    
        $data = $this->classCommonFunction->get_dynamic_frontend_content_data();
       
            
       
        $data['login_user_details'] =  get_current_frontend_user_info();
        $data['order'] = $order;
        $data['userId'] = $userId;
        
        return view('pages.frontend.user-account.user-account-pages', $data);
        // return view('pages.frontend.user-account.cancel-order',compact('order','userId'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
