<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerSection;
use App\Models\Profile;
use App\Models\AboutModel;
use App\Models\Services;
use App\Models\Team;
use App\Models\Client;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{
    public function index(){
        $BannerSection = BannerSection::all();
        $profile = Profile::all();
        $about = AboutModel::all();
        $service = Services::all();
        $teams = Team::all();
        $clients = Client::all();
        return view('frontend.index',compact('BannerSection','profile','about','service','teams','clients'));
    }

}
