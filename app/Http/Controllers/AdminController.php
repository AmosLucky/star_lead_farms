<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\User;
use App\Models\Packages;
use Auth;
use App\Models\Transactions;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;




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

    public function addmember(Request $request){

       $packages =  Packages::all();

    //    return redirect()->back()->with(['msg' => 'successul']);

       return view('admin.adduser',compact('packages'));

    }


    public function createUser(Request $request){


        $validator = Validator::make($request->all(),[
           
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'string','min:11', 'max:255', 'unique:users'],
            'referrer' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if($validator->fails()){

            return redirect()->back()->with([ "error"=>$validator->messages()->all()[0]]);
          
           
        }

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'username' => $request['username'],
            'phone_number' => $request['phone_number'],
            'referrer' => $request['referrer'],
            'password' => Hash::make($request['password'],
            
        
        ),
        ]);
        $user->uid = ("slf".$user->id);

        $package = Packages::find($request->packageId);

        // print_r($package);
        // return;

    

            $user->paid = 1;
            $user->package_id = $package->id;
            $user->points = $user->points + $package ->pv;

        $user->update();


        Transactions::create(["user_id"=>$user->id,
                                  "amount"=>$package->price,
                                  "package_id"=>$request->packageId,
                                  "pv"=>$package->pv,
                                  "type"=>"deposit"]);


            app(UserController::class)->settleReferrers($user->referrer,($package->referral_bonus/2),$user->id);

 
         return redirect()->back()->with(['msg' => 'successul']);
 
        //return view('admin.adduser',compact('packages'));
 
     }
}
