<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;


class BlogController extends Controller
{
    public function blog(){
        $Blog = Blog::all();
        return view('admin.blog.admin_blog',compact('Blog'));
    }

    public function add_blog(){
        return view('admin.blog.add_blog');
    }

    public function store_blog(Request $request){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $Blog = new Blog;
        $Blog->id = $request->Blog;
        $Blog->title = $request->title;
        $Blog->name = $request->name;
        $Blog->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/blog',$filename);
            $Blog->image = $filename;

        }
        $Blog->save();
        return redirect()->back()->with('message','Blog successfully Created');
    }

      public function change_status(Blog $blog)
    {
        if($blog->status==1){
            $blog->update(['status'=>0]);
        }else{
            $blog->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status Change successfully');
    }

    public function edit_blog($id){
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit_blog', compact('blog'));
    }

    public function update_blog(Request $request, $id){
        $blog = Blog::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'name'=>'required',
            'description'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/blog/'.$blog->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/blog',$imageName);
        }else{
            $imageName = $blog->image;
        }

        Blog::where('id',$id)->update([
            'title'=>$request->title,
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Blog successfully Updated');
    }

    public function delete_blog($id){
        $blog = Blog::findOrFail($id);
        $deleteOldImage =  'images/blog/'.$blog->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $blog->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Blog successfully Deleted');
    }
}
