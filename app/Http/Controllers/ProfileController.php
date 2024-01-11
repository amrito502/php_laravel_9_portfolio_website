<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function profile(){
        $Profile = Profile::all();
        return view('admin.profile.profile',compact('Profile'));
    }

    public function add_profile(){
        return view('admin.profile.add_profile');
    }

    public function store_profile(Request $request){
        $request->validate([
            'name'=>'required',
            'prof'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'about_desc'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'linkedin'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $Profile = new Profile;
        $Profile->id = $request->Profile;
        $Profile->name = $request->name;
        $Profile->prof = $request->prof;
        $Profile->phone = $request->phone;
        $Profile->email = $request->email;
        $Profile->address = $request->address;
        $Profile->about_desc = $request->about_desc;
        $Profile->facebook = $request->facebook;
        $Profile->twitter = $request->twitter;
        $Profile->instagram = $request->instagram;
        $Profile->linkedin = $request->linkedin;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/profile',$filename);
            $Profile->image = $filename;

        }
        $Profile->save();
        return redirect()->back()->with('message','Profile successfully Created');
    }

    public function edit_profile($id){
        $profile = Profile::findOrFail($id);
        return view('admin.profile.edit_profile',compact('profile'));
    }

    public function update_profile(Request $request, $id){
        $profile = Profile::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'prof'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'about_desc'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'linkedin'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/profile/'.$profile->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/profile',$imageName);
        }else{
            $imageName = $profile->image;
        }

        Profile::where('id',$id)->update([
            'name'=>$request->name,
            'prof'=>$request->prof,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'about_desc'=>$request->about_desc,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Profile successfully Updated');
    }

    public function delete_profile($id){
        $profile = Profile::findOrFail($id);
        $deleteOldImage =  'images/profile/'.$profile->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $profile->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Profile successfully Updated');
    }
}
