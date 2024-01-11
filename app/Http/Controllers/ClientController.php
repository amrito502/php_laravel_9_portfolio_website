<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function client(){
        $clients = Client::all();
        return view('admin.client.admin_client',compact('clients'));
    }
    public function add_client(){
        return view('admin.client.add_client');
    }
    public function store_client(Request $request){
        $request->validate([
            'name'=>'required',
            'client_pro'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $Client = new Client;
        $Client->id = $request->Client;
        $Client->name = $request->name;
        $Client->client_pro = $request->client_pro;
        $Client->description = $request->description;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/client',$filename);
            $Client->image = $filename;

        }
        $Client->save();
        return redirect()->back()->with('message','Client Say successfully Created');
    }

    public function change_status(Client $client)
    {
        if($client->status==1){
            $client->update(['status'=>0]);
        }else{
            $client->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status Change successfully');
    }

    public function edit_client($id){
        $client = Client::findOrFail($id);
        return view('admin.client.edit_client', compact('client'));
    }
    public function update_client(Request $request, $id){
        $client = Client::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'client_pro'=>'required',
            'description'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/client/'.$client->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/client',$imageName);
        }else{
            $imageName = $client->image;
        }

        Client::where('id',$id)->update([
            'name'=>$request->name,
            'client_pro'=>$request->client_pro,
            'description'=>$request->description,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Client successfully Updated');
    }

    public function delete_client($id){
        $client = Client::findOrFail($id);
        $deleteOldImage =  'images/client/'.$client->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $client->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','client successfully Deleted');
    }

}
