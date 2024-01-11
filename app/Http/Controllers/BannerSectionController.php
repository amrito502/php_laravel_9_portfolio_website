<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerSection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class BannerSectionController extends Controller{

    // ================================
    public function banner(){
        $BannerSection = BannerSection::all();
        return view('admin.banner.hero',compact('BannerSection'));
    }
    // ==================================
    public function add_banner(){
        return view('admin.banner.add_hero');
    }
    // ============store-banner==============
    public function store_banner(Request $request){
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'pro'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $BannerSection = new BannerSection;
        $BannerSection->id = $request->BannerSection;
        $BannerSection->title = $request->title;
        $BannerSection->name = $request->name;
        $BannerSection->pro = $request->pro;
        $BannerSection->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/banner',$filename);
            $BannerSection->image = $filename;

        }
        $BannerSection->save();
        return redirect()->back()->with('message','Banner successfully Created');

        
    }

    // ===============end-store-banner===========
    public function change_status(BannerSection $bannerSection)
    {
        if($bannerSection->status==1){
            $bannerSection->update(['status'=>0]);
        }else{
            $bannerSection->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status Change successfully');
    }
     // ============edit-banner==============
     public function edit_banner($id){
        $banner = BannerSection::findOrFail($id);
        return view('admin.banner.edit_hero', compact('banner'));
    }
    // ===========start-update-banner=======
    public function update_banner(Request $request, $id){
        $banner = BannerSection::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'pro'=>'required',
            'description'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/banner/'.$banner->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/banner',$imageName);
        }else{
            $imageName = $banner->image;
        }

        BannerSection::where('id',$id)->update([
            'title'=>$request->title,
            'name'=>$request->name,
            'pro'=>$request->pro,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Banner successfully Updated');
    }
    // ===========end-update-banner=========

    // ===========delete-banner===============
    public function delete_banner($id){
        $banner = BannerSection::findOrFail($id);
        $deleteOldImage =  'images/products/'.$banner->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $banner->delete();

        Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Banner successfully Deleted');
    }

    }
   