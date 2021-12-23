<?php

namespace App\Http\Controllers;

use App\Http\Controllers\OptionController;
use App\Library\CommonFunction;
use App\VendorType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VendorTypeController extends Controller
{
    public $option;
    public $classCommonFunction;

    public function __construct()
    {
        $this->option = new OptionController();
        $this->classCommonFunction = new CommonFunction();
    }

    public function index()
    {
        $data = array();

        $data = $this->classCommonFunction->commonDataForAllPages();

        if (is_vendor_login()) {
            $get_user_store_data = get_user_account_details_by_user_id(Session::get('shopist_admin_user_id'));
            $details = json_decode(array_shift($get_user_store_data)['details']);
            $data['payment_method_data'] = $details->payment_method;
        } else {
            $data['payment_method_data'] = $this->option->getPaymentMethodData();
        }

        $is_vendor = is_vendor_login();
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        $data['vendor_type'] = VendorType::first();

        return view('pages.admin.vendortype.vendor-type', $data);

    }

    public function updateVendorType(Request $request)
    {
        $vendor_type = VendorType::first();
        $vendor_type->update([
            'vendor_status' => $request->inputEnableMutliVendor ? 1 : 0,
        ]);
        Session::flash('success-message', 'Vendor type updated successfully');
        return redirect()->back();

    }
}
