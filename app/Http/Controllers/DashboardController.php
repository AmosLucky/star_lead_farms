<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Packages;
use Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
      //
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numRef = User::where("referrer","slf".Auth::user()->id)->get()->count();
        
        return view('dashboard.index',compact("numRef"));
    }

    public function packages()
    {
        $packages = Packages::all();

        //print_r($packages);
       
        
        
        return view('dashboard.packages',compact("packages"));
    }
}
