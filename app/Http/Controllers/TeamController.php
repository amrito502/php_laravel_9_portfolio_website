<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
     // =======show-team-start==========
     public function team(){
        $teams = Team::all();
        return view('admin.team.team',compact('teams'));
    }
    // =======show-team-end==========

    // =========add-about=========
    public function add_team(){
        return view('admin.team.add_team');
    }
     // ============start-store-team==============
     public function store_team(Request $request){
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'linkedin'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $Team = new Team;
        $Team->id = $request->Team;
        $Team->name = $request->name;
        $Team->title = $request->title;
        $Team->facebook = $request->facebook;
        $Team->twitter = $request->twitter;
        $Team->instagram = $request->instagram;
        $Team->linkedin = $request->linkedin;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/team',$filename);
            $Team->image = $filename;
        }
        $Team->save();
        return redirect()->back()->with('message','Team Member successfully Created');

        
    }

    // ===============end-store-team===========

    // =============start-change_status===========
    public function change_status(Team $team)
    {
        if($team->status==1){
            $team->update(['status'=>0]);
        }else{
            $team->update(['status'=>1]);
        }
        return redirect()->back()->with('message','Status Change successfully');
    }
    // =============end-change_status===========

    // =============start-team-update===========
     // ============edit-team==============
     public function edit_team($id){
        $team = Team::findOrFail($id);
        return view('admin.team.edit_team', compact('team'));
    }
    // =========update-team======
    public function update_team(Request $request, $id){
        $team = Team::findOrFail($id);
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'linkedin'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/team/'.$team->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/team',$imageName);
        }else{
            $imageName = $team->image;
        }

        Team::where('id',$id)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'instagram'=>$request->instagram,
            'linkedin'=>$request->linkedin,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Team Members successfully Updated');
    }
    // =============end-team-update===========

      // ===========start-delete-team===============
      public function delete_team($id){
        $team = Team::findOrFail($id);
        $deleteOldImage =  'images/team/'.$team->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $team->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Team Members successfully deleted');
    }
      // ===========end-delete-team===============

}
