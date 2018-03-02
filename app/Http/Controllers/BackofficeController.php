<?php

namespace Gemtrust\Http\Controllers;

use Illuminate\Http\Request;
use Gemtrust\Gem_id;
use Gemtrust\User;
use Gemtrust\Backoffice;
use Gemtrust\Message;
use Gemtrust\Payment_request;
use Session;

class BackofficeController extends Controller
{
    //



    public function __construct()
    {
        $this->middleware('auth');
    }





    //show backoffice method ----------------------------------------------------------------------
    public function index(){

        if(auth()->user()->is_admin == 1){

        	$gem_id = Backoffice::where('status', 0)->get();
        		$id = [];
        		$index = 0;
        	foreach ($gem_id as $key => $value) {
        		 $hold= $value->sender_id;
        		 $id[$index] = User::where('id', $hold)->get();
        		$index ++;
        	}


    	$users = User::all();
    	$total = Backoffice::all();
        $message = Message::all();

        	return view('backoffice.backoffice', compact('total', 'id', 'users', 'message'));
        }

        else{

        return redirect('/dashboard');
        }

    }
    //-----------------------------------------------------------------------------------------------





    //Display beneficiaries method --------------------------------------------------------------------
    public function beneficiary_details($id){

        if(auth()->user()->is_admin == 1){

    	//Get user_id
        $user = User::where('id',$id)->pluck('id');
       
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


                //select the username and phone from table where it matches id
                   $details[$index] = User::where('id', $user_id)->get();
                   $index ++;
                    
                }

                }
                return $details;
            }

            //call beneficiaries function
            $details = beneficiaries($gem_id);

            return view('backoffice.details', compact('details'));
                }
            else{

                    return redirect('/dashboard');
                }

        }
        //---------------------------------------------------------------------------------------------





        //Confirmation method ----------------------------------------------------------------------------
        public function confirm(Request $request){

        if(auth()->user()->is_admin == 1){

             $user = auth()->user()->id;
            $sender = $request->sender;
            $notifications = Backoffice::where([['sender_id', $sender],['status','0'],['package','1']])->update(['status'=>1,'createdBy'=>$user]);

            Payment_request::create([
                'sender_id' => $request->sender,
                'reciever_id' => '00000',
                'status' => '1',
                'package' =>'1',
                ]);

            Session::flash('confirm_backoffice', 'Confirmation was successful!');

            return redirect('/backoffice');
                }

                else{

            return redirect('/dashboard');
            }
         }
         //------------------------------------------------------------------------------------------





         //message display method -------------------------------------------------------------------
        public function message(){

            if(auth()->user()->is_admin == 1){
                $message = Message::all();

                return view('backoffice.message', compact('message'));
             }

             else{

                return redirect('/dashboard');
            }

       } 
       //---------------------------------------------------------------------------------------------




}