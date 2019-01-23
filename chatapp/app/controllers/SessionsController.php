<?php

class SessionsController extends \BaseController {

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$attempt = Auth::attempt( array('email' => $input['email'], 'password' => $input['password']) );
		$status = 'login';
		
		if($attempt) {
			return Redirect::to('/');
		} else {
			return Redirect::back()->with('message','Authentication failed');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		Session::flush();
		return Redirect::to('login');
	}


}
