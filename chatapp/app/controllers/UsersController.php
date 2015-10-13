<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	$validator = Validator::make(Input::all(), User::$rules);

	if ($validator->passes()) {

			$user = new User;
			$user->nickname=Input::get('nickname');
			$user->firstname=Input::get('firstname');
			$user->lastname=Input::get('lastname');
			$user->password=Hash::make(Input::get('password'));
			$user->email=Input::get('email');
			$user->role=Input::get('role');
			$user->description=Input::get('description');
			$user->save();

			return Redirect::to('login')->with('message', 'Your account is successfully registered!');
	}

	else {
			return Redirect::back()->with('error', 'The following errors occurred')->withErrors($validator)->withInput();
	}




	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
