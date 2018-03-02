<?php

namespace Gemtrust\Http\Controllers;

use Illuminate\Http\Request;
use Gemtrust\User;
use Gemtrust\Generated_link;
use Gemtrust\Gem_id;
use Gemtrust\Grade;

use Session;
use Auth;


class RegisterController extends Controller
{
    //

	public function show(){


		return view('auth.register');
	}







	public function post(Request $request){

		//Check if the link is available
		if(!$request->session()->has('link')){
			Session::flash('refferal', 'You must have a refferal link to register!');
			return redirect('/');
		}
		$link = $request->session()->get('link');
		$package = $request->session()->get('package');
		$data = Gem_id::where([['gem_id', $link], ['package', $package]])->get();

		if(count($data) > 0){
		Session::flash('expired', 'The link is expired or invalid please request for a new refferal link!');
		return view('welcome');
	}
	else
	{
		$this->validate(request(),[

			'name' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6|confirmed',
			'phone' => 'required|regex:/(0)[0-9]{10}/',
			'account_no' => 'required|regex:/[0-9]{10}/',
			'bank' => 'required',
			'dob' => 'required',
			'address' => 'required|max:80',
			'city' => 'required',
			'state' => 'required',
			'country' => 'required',
			'occupation' => 'required',


			]);


		$user = User::create([

			'name' => $request->name,
			'email' => $request->email,
			'password' => bcrypt($request->password),
			'phone' => $request->phone,
			'account_no' => $request->account_no,
			'bank' => $request->bank,
			'dob' => $request->dob,
			'address' => $request->address,
			'city' => $request->city,
			'state' => $request->state,
			'country' =>$request->country,
			'occupation' => $request->occupation,

			]);


			auth()->login($user);

		 $id = auth()->user()->id;

		 Gem_id::create([

		 	'user_id' => $id,
		 	'gem_id' => $request->links,
		 	'package' => $request->package,

		 	]);

		 Grade::create([

		 	'user_id' => $id,
		 	'package' => $request->package,

		 	]);

		 $link = $request->session()->get('link');

		 Generated_link::where('links', $link)->update(['status'=> 1]);

		Session::flash('account_success', 'Registration was successful!');
		
		

		//redirect to dashboard
		return redirect('/dashboard');
		}

	}
		
	
}
