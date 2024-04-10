<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Packages;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function successPayment(Request $request){

       

        try{

            $user = User::find(Auth::user()->id);
            $package = Packages::find($request->package_id);

            $user->paid = 1;
            $user->package_id = $request->package_id;
            $user->points = $package ->pv;

            $user->save();

            $referrer = User::where("uid",$user->referrer)->first();

            if($referrer != null){
                $ref_balance = $referrer->balance;
                $new_ref_balance = $ref_balance + ($package->referral_bonus/2);
                ///todo hisory

                $referrer->balance = $new_ref_balance;
                $referrer->update();



                  
             }




             return response()->json(array('status'=> "success",), 200);



      }catch(Exception $e){
        return response()->json(array('status'=> 500,"error"=>$e), 200);

      }

    }
}
