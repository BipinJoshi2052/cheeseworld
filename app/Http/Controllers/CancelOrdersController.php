<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CancelOrder;
use App\Models\OrdersItem;
use App\Library\CommonFunction;
use Illuminate\Support\Carbon;
use App\Library\GetFunction;
use App\Models\User;
use App\Models\VendorOrder;

class CancelOrdersController extends Controller
{
    public $classCommonFunction;
    public $classGetFunction;
    public $carbonObject;
    
    public function __construct(){
      $this->classCommonFunction  =  new CommonFunction();
      $this->classGetFunction     =  new GetFunction();
      $this->carbonObject         =  new Carbon();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data = $this->classCommonFunction->commonDataForAllPages();
        // $get_shop_order_data = $this->getOrderList('all_order'); 
        
        // $currentPage = LengthAwarePaginator::resolveCurrentPage();
        // $col = new Collection( $get_shop_order_data );
        // $perPage = 10;
        // $currentPageSearchResults = $col->slice(($currentPage - 1) * $perPage, $perPage)->all();
        // $order_object = new LengthAwarePaginator($currentPageSearchResults, count($col), $perPage);
    
        // $order_object->setPath( route('admin.shop_orders_list') );
    
        // $data['orders_list_data']  =  $order_object;

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        $vendor_details=get_current_vendor_user_info();
        // dd($vendor_details);

        
        $details=$vendor_details['user_id'];
        // dd($details);
        $vendor_data=VendorOrder::where('vendor_id',$details)->get();
        
        $order_id = [];
        foreach($vendor_data as $vd){
          if(CancelOrder::where('order_id', $vd->order_id)->exists()){
            $order_id[] = $vd->order_id;
          }
          
        }
        // dd($order_id);
        // dd($vendor_data);
        $cancel_orders = CancelOrder::whereIn('order_id', (array)$order_id)->paginate(10);
        $data['cancel_orders'] = $cancel_orders;
        $data['vendor_data']=$vendor_data;
        
        $order=CancelOrder::orderBy('created_at','desc')->paginate(10);
        
        $data['order']=$order;

        return view('pages.admin.orders.cancel-order',compact('is_vendor'),$data)->with('count',1);
    }

}
