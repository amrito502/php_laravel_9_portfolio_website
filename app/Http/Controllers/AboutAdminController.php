<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class AboutAdminController extends Controller
{
    // =======show-about-start==========
    public function about(){
        $AboutModel = AboutModel::all();
        return view('admin.about.about',compact('AboutModel'));
    }
    // =======show-about-end==========

    // =========add-about=========
    public function add_about(){
        return view('admin.about.add_about');
    }
     // ============start-store-about==============
     public function store_about(Request $request){
        $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $AboutModel = new AboutModel;
        $AboutModel->id = $request->AboutModel;
        $AboutModel->title = $request->title;
        $AboutModel->subtitle = $request->subtitle;
        $AboutModel->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/about',$filename);
            $AboutModel->image = $filename;

        }
        $AboutModel->save();
        return redirect()->back()->with('message','About Me successfully Created');

        
    }

    // ===============end-store-about===========

    // =============start-change_status===========
    public function change_status(AboutModel $aboutModel)
    {
        if($aboutModel->status==1){
            $aboutModel->update(['status'=>0]);
        }else{
            $aboutModel->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status Change successfully');
    }
    // =============end-change_status===========

    // =============start-about-update===========
     // ============edit-about==============
     public function edit_about($id){
        $about = AboutModel::findOrFail($id);
        return view('admin.about.edit_about', compact('about'));
    }
    // =========update-about======
    public function update_about(Request $request, $id){
        $about = AboutModel::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'subtitle'=>'required',
            'description'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/about/'.$about->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/about',$imageName);
        }else{
            $imageName = $about->image;
        }

        AboutModel::where('id',$id)->update([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Banner successfully Updated');
    }
    // =============end-about-update===========

      // ===========start-delete-about===============
      public function delete_about($id){
        $about = AboutModel::findOrFail($id);
        $deleteOldImage =  'images/about/'.$about->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $about->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','about successfully deleted');
    }
      // ===========end-delete-about===============

}
