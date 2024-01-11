<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function logo(){
        $Logo = Logo::all();
        return view('admin.logo.admin_logo',compact('Logo'));
    }
    public function add_logo(){
        return view('admin.logo.add_logo');
    }

    public function store_logo(Request $request){
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'image'=>'required',
        ]);


        $Logo = new Logo;
        $Logo->id = $request->Logo;
        $Logo->firstname = $request->firstname;
        $Logo->lastname = $request->lastname;


        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/logo',$filename);
            $Logo->image = $filename;

        }
        $Logo->save();
        return redirect()->back()->with('message','Logo successfully Created');
    }

    public function edit_logo($id){
        $logo = Logo::findOrFail($id);
        return view('admin.logo.edit_logo', compact('logo'));
    }

    public function update_logo(Request $request, $id){
        $logo = Logo::findOrFail($id);
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/logo/'.$logo->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/logo',$imageName);
        }else{
            $imageName = $logo->image;
        }

        Logo::where('id',$id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Logo successfully Updated');
    }

    public function delete_logo($id){
        $logo = Logo::findOrFail($id);
        $deleteOldImage =  'images/logo/'.$logo->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $logo->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Logo successfully Deleted');
    }

}
