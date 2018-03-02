<?php

namespace Gemtrust\Http\Controllers;

use Illuminate\Http\Request;
use Gemtrust\Message;
use Session;


class MessageController extends Controller
{
    //

	public function store(Request $request){


			$this->validate(request(),[

			'name' => 'required',
			'email' => 'required|email',
			'subject' => 'required',
			'message' => 'required',
			
			]);

		Message::create([

		 	'name' => $request->name,
		 	'email' => $request->email,
		 	'subject' => $request->subject,
		 	'message' => $request->message,

		 	]);

		 

		Session::flash('message', 'Message sent successfully!');
		return redirect('/');
		

	}

}
