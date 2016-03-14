<?php

class MyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return View::make('welcome');
	}
	public function forgetpassword()
	{
		return View::make('forgetpassword');
	}
	public function signup()
	{
		return View::make('signup');
	}
	public function signin()
	{
		return View::make('login');
	}
	public function create()
	{
		$input=Input::all();
		$user= new User;
		$user->name=$input['username'];
		$user->email=$input['user-email'];
		$user->password=Hash::make($input['password']);
//		echo $user->name;
//		echo $user->email;
//		echo $user->password;
		$user->save();



	}
	public function login()
	{
		return "Sign In User";
	}
	public function resetpassword()
	{
		return "Password Reset";
	}




	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
