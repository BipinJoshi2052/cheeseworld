<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\CommonFunction;
use App\Slider;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners=Slider::paginate(5);
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.slider.index',compact('banners'),$data)->with('count',1);
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
        
        return view('pages.admin.slider.create',$data);
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
        ]);

        $banner=new Slider();
        $banner->name=$request['name'];
        $banner->description=$request['description'];
        $banner->link=$request['link'];

        if($image = $request->file('image')){
            $destinationPath = 'banner/';
            $catImage = time().$image->getClientOriginalName();
            $image->move($destinationPath, $catImage);
            $banner['image'] = "$catImage";
        }
        $banner->save();
        return redirect()->route('sliders.index')->with('status','Slider added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banner=Slider::findOrFail($id);
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.slider.show',compact('banner'),$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner=Slider::findOrFail($id);
        $data = array();
   
        $common_obj  = new CommonFunction();
        $data = $common_obj->commonDataForAllPages();

        $is_vendor = is_vendor_login(); 
        $sidebar['is_vendor_login'] = $is_vendor;
        $data['sidebar_data'] = $sidebar;
        
        return view('pages.admin.slider.edit',compact('banner'),$data);
        
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

        $banner= Slider::findOrFail($id);
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
        return redirect('/admin/sliders')->with('status', 'Slider has been updated successfully');
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
