<?php

namespace Gemtrust\Http\Controllers;

use Illuminate\Http\Request;
use Gemtrust\User;
use Gemtrust\Generated_link;
use Gemtrust\Gem_id;
use Gemtrust\Grade;
use Gemtrust\Payment_request;
use Gemtrust\Backoffice;
use Session;

class DashboardController extends Controller
{
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
     * @return \Illuminate\Http\Response
     */


    public function dashboard()
        {
            
            return view('dashboard.dashboard');
        }






     //Generate Link method ------------------------------------------------------------------------------
    public function generate_links()
    {   

        //Get user_id
       $user = auth()->user()->id;
       $payments = Payment_request::where([['sender_id', $user],['package','1'], ['status', '1']])->get();
       $check = Generated_link::where([['user_id', $user],['package','1'], ['status','!=', '1']])->get();

        //find gemtrust_id from table using the users id 
           if(count($payments) > 4){

           if(!count($check ) > 0 ) {
            
             $gem_id  = trim((Gem_id::where('user_id', $user)->pluck('gem_id')),'][""');
                 $new_id = 1;
                 $num = 0;
                 
                while ( $num < 5) {  
                    Generated_link::create([
                        'user_id' => $user,
                        'links' =>  $gem_id.$new_id,
                        'package' => '1',
                        ]); 
                    
                    $num ++;
                    $new_id ++;
                }

               }
            }
                return view('dashboard.generate_links', compact('check'));
        }     
        //--------------------------------------------------------------------------------------------------

            
               



         //refferal method ------------------------------------------------------------------------------
          public function refferals(){

           $user = auth()->user()->id;
            
            $links = Generated_link::where([ ['user_id', $user], ['status',''], ['package', '1']])->pluck('links');
        
           function beneficiaries($gem_id){

                    $details = [];
                    $index = 0;
                for($i = 0; $i < count($gem_id); $i++){

                //select user_id where gemtrust_id matches beneficiraies value
                $user_id = Gem_id::where('gem_id', $gem_id[$i])->pluck('user_id');

                    if(count($user_id) > 0 ){
                //select the username and phone from table where it matches id
                   $details[$index] = User::where('id', $user_id)->get();
                   $index ++;
                    }

                }
                return $details;
            }

            //call beneficiaries function
            $details = beneficiaries($links);
            return view('dashboard.refferals', compact('details', 'links'));
         }
         //------------------------------------------------------------------------------





         //Grade level Method.............................................................
         public function grade_level(){

            $user = auth()->user()->id;

            $check = Payment_request::where([['sender_id', $user],['package', '1'], ['status', '1']])->get();

            if(count($check) == 5){
                Grade::where('user_id', $user)->update(['grade_level'=>1]);
            }

            $grade = trim((Grade::where([['user_id', $user], ['package', '1']])->pluck('grade_level')),'][""');
            
            return view('dashboard.grade_level',compact('grade'));
         }
         //-------------------------------------------------------------------------------------





         //Payouts method-----------------------------------------------------------------------
         public function payouts(){

            $user = auth()->user()->id;

            $payout = trim((Grade::where([['user_id', $user], ['package', '1']])->pluck('payouts')),'][""');
            
            return view('dashboard.payouts', compact('payout'));
         }
         //------------------------------------------------------------------------------------





         //Notifications method ----------------------------------------------------------------
         public function notifications(){
            $user = auth()->user()->id;
            $notifications = Payment_request::where([['reciever_id',$user],['status','0'],['package','1']])->pluck('sender_id');

            function beneficiaries($gem_id){

                    $details = [];
                    $index = 0;
                for($i = 0; $i < count($gem_id); $i++){

                //select user_id where gemtrust_id matches beneficiraies value
                

                    if(count($gem_id) > 0 ){
                //select the username and phone from table where it matches id
                   $details[$index] = User::where('id', $gem_id[$i])->get();
                   $index ++;
                    }

                }
                return $details;
            }


            $details = beneficiaries($notifications);

            return view('dashboard.notifications', compact('details'));
         }
         //----------------------------------------------------------------------------------------




         //Confirm request method -----------------------------------------------------------------
         public function confirm(Request $request){
            $user = auth()->user()->id;
            $sender = $request->get('sender');
            $notifications = Payment_request::where([['reciever_id', $user],['sender_id',$sender],['status','0'],['package','1']])->update(['status'=>1]);

            Grade::where([['user_id', $user],['package', '1']])->increment('payouts');

            

            Session::flash('confirm_accept', 'Confirmation was successful!');

            return redirect('/dashboard');
         }
         //---------------------------------------------------------------------------------------------------






        //Beneficiary method ------------------------------------------------------------------------------

         public function beneficiaries(){

        $user = auth()->user()->id;
       
        //find gemtrust_id from table using the users id 
        $gem_id = Gem_id::where('user_id', $user)->pluck('gem_id');

        //Split the string into an array
        $gem_id_raw = $gem_id[0];
        $gem_id =str_split($gem_id_raw);

        //Function to generate beneficiary numbers
         function gem($gem_id){
            $bene_index = 0;
            $num = 0;
            $gem_id2 = [];
            array_pop($gem_id);
            $gem_id2 = [];

            while ( $num < 4) {  
                $gem_id2[$bene_index] = implode("", $gem_id);
                array_pop($gem_id);
                $bene_index ++;
                $num ++;
            }
            return $gem_id2;
           }
        
           //Calling gem and passing the value to variable function
           $gem_id = gem($gem_id);
        

           function beneficiaries($gem_id){

                    $details = [];
                    $index = 0;
                for($i = 0; $i < count($gem_id); $i++){

                //select user_id where gemtrust_id matches beneficiraies value
                $user_id = Gem_id::where('gem_id', $gem_id[$i])->pluck('user_id');


                    if(count($user_id) > 0 ){

                        $user = auth()->user()->id;
                        $check = Payment_request::where([['sender_id', $user],['reciever_id', $user_id],['status','1'],['package','1']])->get();

                        if(!count($check) > 0){

                //select the username and phone from table where it matches id
                   $details[$index] = User::where('id', $user_id)->get();
                   $index ++;
                    }
                }

                }
                return $details;
            }

            //call beneficiaries function
            $details = beneficiaries($gem_id);

             $user = auth()->user()->id;

            $gemtrust = Backoffice::where([['sender_id', $user],['package', '1'],['status','1']])->get();

            return view('dashboard.beneficiaries', compact('details', 'gemtrust'));
         }
        //--------------------------------------------------------------------------------------------------





         //send confirmation request to beneficiary ------------------------------------------------------
         public function request(Request $request){
            $user = auth()->user()->id;
            $reciever = $request->get('reciever');

             $check = Payment_request::where([['sender_id', $user],['reciever_id', $reciever],['status','0'],['package','1']])->get();

             if(count($check) > 0 ){

                $name = trim((User::where('id', $reciever)->pluck('name')),'][""');
                Session::flash('confirm_request', 'Confirmation request sent to '.$name);
            return redirect('/dashboard');
            }

            else{

                Payment_request::create([

                        'sender_id' => $user,
                        'reciever_id' => $request->get('reciever'),
                        'status' => 0,
                        'package' => 1,

                    ]);
                }
                $name = trim((User::where('id', $reciever)->pluck('name')),'][""');
                Session::flash('confirm_request', 'Confirmation request sent to '.$name);
                return redirect('/dashboard');

             }
         //----------------------------------------------------------------------------------------------





         //Send confirmation request to Gemtrust Backoffice ----------------------------------------------
         public function gemtrust(Request $request){
            $user = auth()->user()->id;
            $check = Backoffice::where([['sender_id', $user],['package', '1'], ['status', '0']])->get();

            if(!count($check) > 0){
             Backoffice::create([
                'sender_id'=> $user,
                'package' => 1,
                'status' => 0,
                ]);
             Session::flash('confirm_request', 'Confirmation request sent!');
            }
            return redirect('/dashboard');
         }
         //-----------------------------------------------------------------------------------------------



         //dashboard display method ----------------------------------------------------------------------
         public function show(){

            $user = auth()->user()->id;
            $value = User::where('id', $user)->get();
            
            return view('dashboard.settings', compact('value'));
         }
         //-----------------------------------------------------------------------------------------------




         //settings method ------------------------------------------------------------------------------
         public function settings(Request $request){

            $user = auth()->user()->id;
            
            $users = User::find($user);
        $users->phone = $request ->get('phone');
        $users->account_no = $request ->get('account_no');
        $users->bank = $request ->get('bank');
        $users->address = $request ->get('address');
        $users->city = $request ->get('city');
        $users->state = $request ->get('state');
        $users->country = $request ->get('country');
        $users->occupation = $request ->get('occupation');

        $users->save();
            
            return redirect('dashboard');
         }
         //------------------------------------------------------------------------------------------




         //Message method Handles contact form -----------------------------------------------------
         public function message(){
            
            return view('dashboard.message');
         }
         //-----------------------------------------------------------------------------------------


       
}
