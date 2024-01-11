<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\AboutModel;
use App\Models\Services;
use App\Models\Blog;
use App\Models\NewComment;
use App\Models\Client;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    public function about(){
        $AboutModel = AboutModel::all();
        $teams = Team::all();
        return view('frontend.about',compact('AboutModel','teams'));
    }
    public function services(){
        $services = Services::all();
        return view('frontend.services',compact('services'));
    }
   
    public function services_view($id){
        $service = Services::findOrFail($id);
        return view('frontend.view_service',compact('service'));
    }
   
    public function portfolio(){
        $Portfolio = Portfolio::all();
        return view('frontend.portfolio',compact('Portfolio'));
    }
    public function view_portfolio($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('frontend.view_portfolio',compact('portfolio'));
    }
    public function team_members(){
        $teams = Team::all();
        $clients = Client::all();
        return view('frontend.team_members',compact('teams','clients'));
    }
    public function blog(){
        $Blog = Blog::all();
        return view('frontend.blog',compact('Blog'));
    }
    public function view_blog($id){
        $blog = Blog::findOrFail($id);
        return view('frontend.view_blog', compact('blog'));
    }
    
    // public function contact(){
    //     return view('frontend.contact');
    // }
  
}
