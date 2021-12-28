<?php

namespace App\Http\Controllers;

use App\Library\CommonFunction;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Banner::paginate(5);
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.banner.index',compact('banners'),$data)->with('count',1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.banner.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image'=>'required',
            'type'=>'required',
        ]);

        $banner=new Banner();
        $banner->name=$request['name'];
        $banner->description=$request['description'];
        $banner->type=$request['type'];

        if($image = $request->file('image')){
            $destinationPath = 'banner/';
            $catImage = $image->getClientOriginalName();
            $image->move($destinationPath, $catImage);
            $banner['image'] = "$catImage";
        }
        $banner->save();
        return redirect()->route('banners.index')->with('status','Banner added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner=Banner::findOrFail($id);
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.banner.show',compact('banner'),$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner=Banner::findOrFail($id);
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.banner.edit',compact('banner'),$data);
        
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
        // dd($request->file('image'));
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            // 'image'=>'required',
        ]);

        $banner= Banner::findOrFail($id);
        $banner->name=$request['name'];
        $banner->description=$request['description'];

        if ($image = $request->file('image')) {
            $image_path = public_path('banner/' . $banner->image);
            
            if(file_exists($image_path)){
                unlink($image_path);
            } 
            $destinationPath = 'banner/';
            $profileImage = $image->getClientOriginalName();
            $image->move($destinationPath, $profileImage);
            $banner['image'] = "$profileImage";
        }else{
            unset($banner['image']);
        }
        $banner->update();
        return redirect('/admin/banners')->with('status', 'Banner has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $image_path = public_path('banner/' . $banner->image);
        $banner->delete();
        unlink($image_path);
        return redirect()->route('banners.index')->with('status', 'Banner has been deleted successfully');
    }
}
