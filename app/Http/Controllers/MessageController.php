<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Brian2694\Toastr\Facades\Toastr;

class MessageController extends Controller
{
    public function contact(){
        return view('frontend.contact');
    }  

    
    public function store_message(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);

        $Message = new Message;
        $Message->id = $request->Message;
        $Message->name = $request->name;
        $Message->email = $request->email;
        $Message->message = $request->message;
        $Message->save();
        // Session::flash('msg','Message successfully Send');
        
        return redirect()->back()->with('message','Message successfully Send');
    }

    public function message(){
        $messages = Message::all();
        return view('admin.message.message',compact('messages'));
    }
    public function message_view(){
        $messages = Message::all();
        return view('admin.message.view_message',compact('messages'));
    }

    public function delete_message($id){
        $message = Message::findOrFail($id);
        $message->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Message successfully Deleted');
    }

}