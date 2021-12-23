<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Library\CommonFunction;

class ContactController extends Controller
{
    public $common_obj;
    public function __construct()
    {
        $this->common_obj = new CommonFunction();
    }
    public function index()
    {
        $data = array();
   
        $data = $this->common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        $data['contacts'] = Contact::latest()->paginate(10);
        return view('pages.admin.contacts', $data)->with('count',1);
    } 

    public function delete($id)
    {
        Contact::destroy($id);
        return redirect()->back()->with('success-message', 'Contact deleted successfully');
    }
}
