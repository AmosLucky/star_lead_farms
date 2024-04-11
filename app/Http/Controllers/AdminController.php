<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Packages;
use Auth;
use App\Models\Transactions;



class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $packages = Packages::all();
        $deposits = Transactions::where("type","deposit")->get()->sum('amount');
        $transactions  = Transactions::where("type","deposit")->orderBy('id', 'DESC')->get();
        $referral_bonuses = Transactions::where("type","deposit")->get()->sum('amount');

        
        return view('admin.index',compact("users","deposits","referral_bonuses","packages","transactions"));
    }

    public static function getUserName($id){
        $user = User::find($id);

        return $user->name;
    }

    public function transactions()
    {
        //
        $transactions = Transactions::orderBy('id', 'DESC')->get();

        return view('admin.transactions',compact("transactions"));
    }

    public function users()
    {
        //
        $users = User::orderBy('id', 'DESC')->get();

        return view('admin.users',compact("users"));
    }
}
