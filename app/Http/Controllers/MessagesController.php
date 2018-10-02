<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller {

	public function submit( Request $request ) {
		//return $request->input( 'name' );
		$this->validate( $request, [
			'name'  => 'required',
			'email' => 'required',
		] );

		//Create a new message
		$message          = new Message;
		$message->name    = $request->input( 'name' );
		$message->email   = $request->input( 'email' );
		$message->message = $request->input( 'message' );
		//Save message
		$message->save();

		//Redirect
		return redirect( '/' );
	}
}
