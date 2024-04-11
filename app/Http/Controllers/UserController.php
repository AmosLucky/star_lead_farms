<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Packages;
use Auth;
use App\Models\Transactions;


use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        //
        $user = User::find(Auth::user()->id);

        return view('dashboard.account',compact("user"));
    }


    public function successPayment(Request $request){

       

        try{

            $user = User::find(Auth::user()->id);
            $package = Packages::find($request->package_id);

            $user->paid = 1;
            $user->package_id = $request->package_id;
            $user->points = $user->points + $package ->pv;

            $user->save();

            Transactions::create(["user_id"=>$user->id,
                                  "amount"=>$package->price,
                                  "package_id"=>$request->package_id,
                                  "pv"=>$package->pv,
                                  "type"=>"deposit"]);
            

            $this->settleReferrers($user->referrer,($package->referral_bonus/2),$user->id);

            // $referrer = User::where("uid",$user->referrer)->first();

            // if($referrer != null){
            //     $ref_balance = $referrer->balance;
            //     $new_ref_balance = $ref_balance + ($package->referral_bonus/2);
            //     ///todo hisory





            //     $referrer->balance = $new_ref_balance;
            //     $referrer->update();



                  
            //  }




             return response()->json(array('status'=> "success",), 200);



      }catch(Exception $e){
        return response()->json(array('status'=> 500,"error"=>$e), 200);

      }

    }

    public function settleReferrers($currentrefUId,$referral_bonus,$referree){

      for($i = 0; $i < 4; $i++){

        $currentRef = User::where("uid",$currentrefUId)->first();

        //$currentRef = User::find($currentrefId)->first();
        if($currentRef != null){
          $ref_balance = $currentRef->referral_balance;
          if($i == 0){
            $amount = $referral_bonus;
          
          
          }else{
            $amount = 500;
            

          }

          $new_ref_balance = $ref_balance + ($amount);
          ///todo hisory

          Transactions::create(["user_id"=>$currentRef->id,
          "amount"=>$amount,
          "package_id"=>0,
          "pv"=>0,
          "type"=>"referral_bonus","referree"=>$referree]);

          





          $currentRef->referral_balance = $new_ref_balance;
          $currentRef->update();

          $currentrefUId = $currentRef->referrer;



            
       }



      }

    }

    public function updateprofile(Request $request){
      $user = User::find(Auth::user()->id);

      $user->name = $request->name;
      $user->phone_number = $request->phone_number;

      $user ->update();


      return redirect()->back()->with(['msg' => 'successul']);

    }


    public function updatepassword(Request $request){

      return redirect()->back()->with(['msg' => 'successul']);
      
    }

    public function referral(Request $request){
     
      $currenUid = Auth::user()->uid;

     

        $refs = User::where("referrer", $currenUid)->get();

        //($currentRef);

       
        

    

      return view('dashboard.referral', compact('refs'));

    }

    public function referrallink(Request $request){

      return view('dashboard.referral_link');

    }

    public function support(Request $request){

      return view('dashboard.support');

    }

    public static  function getRefsOfUser($uid){
      $currentUserRef = User::where("referrer", $uid)->get();

        //($currentRef);

        return  $currentUserRef;
    }
}
