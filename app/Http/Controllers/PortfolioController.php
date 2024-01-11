<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function portfolio(){
        $Portfolio = Portfolio::all();
        return view('admin.portfolio.admin_portfolio',compact('Portfolio'));
    }

    public function add_portfolio(){
        return view('admin.portfolio.add_portfolio');
    }

    public function store_portfolio(Request $request){
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'item_1'=>'required',
            'item_2'=>'required',
            'item_3'=>'required',
            'item_4'=>'required',
            'item_5'=>'required',
            'image'=>'required|mimes:png,jpg,jpeg',
        ]);


        $Portfolio = new Portfolio;
        $Portfolio->id = $request->Portfolio;
        $Portfolio->title = $request->title;
        $Portfolio->desc = $request->desc;
        $Portfolio->item_1 = $request->item_1;
        $Portfolio->item_2 = $request->item_2;
        $Portfolio->item_3 = $request->item_3;
        $Portfolio->item_4 = $request->item_4;
        $Portfolio->item_5 = $request->item_5;


        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/portfolio',$filename);
            $Portfolio->image = $filename;

        }
        $Portfolio->save();
        return redirect()->back()->with('message','Portfolio successfully Created');
    }

    public function edit_portfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit_portfolio', compact('portfolio'));
    }

    public function update_portfolio(Request $request, $id){
        $portfolio = Portfolio::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'desc'=>'required',
            'item_1'=>'required',
            'item_2'=>'required',
            'item_3'=>'required',
            'item_4'=>'required',
            'item_5'=>'required',
        ]);

        $imageName = '';
        $deleteOldImage =  'images/portfolio/'.$portfolio->image;
        if($image = $request->file('image')){
            if(file_exists($deleteOldImage)){
                file::delete($deleteOldImage);
            }
            $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $image->move('images/portfolio',$imageName);
        }else{
            $imageName = $portfolio->image;
        }

        Portfolio::where('id',$id)->update([
            'title'=>$request->title,
            'desc'=>$request->desc,
            'item_1'=>$request->item_1,
            'item_2'=>$request->item_2,
            'item_3'=>$request->item_3,
            'item_4'=>$request->item_4,
            'item_5'=>$request->item_5,
            'image'=>$imageName,
        ]);
        // Session::flash('msg','Product Update Success');
        return redirect()->back()->with('message','Profile successfully Updated');
    }

    public function delete_portfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        $deleteOldImage =  'images/portfolio/'.$portfolio->image;
        if(file_exists($deleteOldImage)){
            file::delete($deleteOldImage);
        }
        $portfolio->delete();

        // Session::flash('msg','Product Delete Success');
        return redirect()->back()->with('message','Portfolio successfully Deleted');
    }

}
