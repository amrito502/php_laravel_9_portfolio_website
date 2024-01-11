<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    public function services(){
        $services = Services::all();
        return view('admin.services.admin_services',compact('services'));
    }
    // ===============================
    public function add_services(){
        return view('admin.services.add_services');
    }
    // ============start-store-about==============
    public function store_services(Request $request){
        $request->validate([
            'target'=>'required',
            'name'=>'required',
            'title'=>'required',
            'item_1'=>'required',
            'item_2'=>'required',
            'item_3'=>'required',
            'item_4'=>'required',
            'item_5'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $Services = new Services;
        $Services->id = $request->Services;
        $Services->target = $request->target;
        $Services->name = $request->name;
        $Services->title = $request->title;
        $Services->item_1 = $request->item_1;
        $Services->item_2 = $request->item_2;
        $Services->item_3 = $request->item_3;
        $Services->item_4 = $request->item_4;
        $Services->item_5 = $request->item_5;
        $Services->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/services',$filename);
            $Services->image = $filename;

        }
        $Services->save();
        return redirect()->back()->with('message','Services successfully Created');

        
    }

    // ===============end-store-about===========
    public function change_status(Services $services)
    {
        if($services->status==1){
            $services->update(['status'=>0]);
        }else{
            $services->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status Change successfully');
    }

    public function edit_services($id){
        $service = Services::findOrFail($id);
        return view('admin.services.edit_services', compact('service'));
    }

    public function update_services(Request $request, $id){
        $services = Services::findOrFail($id);
        $request->validate([
            'target'=>'required',
            'name'=>'required',
            'title'=>'required',
            'item_1'=>'required',
            'item_2'=>'required',
            'item_3'=>'required',
            'item_4'=>'required',
            'item_5'=>'required',
            'description'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/services/'.$services->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/services',$imageName);
        }else{
            $imageName = $services->image;
        }

        Services::where('id',$id)->update([
            'target'=>$request->target,
            'name'=>$request->name,
            'title'=>$request->title,
            'item_1'=>$request->item_1,
            'item_2'=>$request->item_2,
            'item_3'=>$request->item_3,
            'item_4'=>$request->item_4,
            'item_5'=>$request->item_5,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Team Members successfully Updated');
    }
    public function delete_services($id){
        $services = Services::findOrFail($id);
        $deleteOldImage =  'images/services/'.$services->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $services->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Services successfully deleted');
}
}