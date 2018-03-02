<?php

namespace Gemtrust\Http\Controllers;

use Illuminate\Http\Request;
use Gemtrust\User;
use Session;
use Auth;

class LoginController extends Controller
{
    //



	public function __constructor(){
		$this->middleware('guest', ['except' => 'logout']);
	}




	public function show(){

		return view('auth.login');
	}




	public function post(Request $request){

		if(Auth()->attempt(['email'=>$request->get('email'), 'password' =>$request->get('password')])){

		return redirect()->route('dashboard');

		}else{
			Session::flash('login_error', 'Invalid Email or Password!');
			return view('auth.login');
		}

	}



	public function logout(){
		Auth::logout();
		return redirect('/');
	}



}
