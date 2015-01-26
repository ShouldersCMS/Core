<?php namespace Shoulderscms\Shoulderscms\controllers;

use \View;
use Shoulderscms\Shoulderscms\Models\Users as Users;
use \Hash;
use \Input;
use \Redirect;

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = new Users;
		$users = $users->all();
		return View::make('shoulderscms::AdminLTE.users.index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = '';
		return View::make('shoulderscms::AdminLTE.users.create', ['user' => $user]);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new Users;
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->bio = Input::get('bio');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		return Redirect::to('admin/users');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = new Users;
		$user = $user->findOrFail($id);
		return View::make('shoulderscms::AdminLTE.users.create', ['user' => $user]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = new Users;
		$user = $user->findOrFail($id);
		$user->username = Input::get('username');
		$user->email = Input::get('email');
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->bio = Input::get('bio');
		$user->password = Hash::make(Input::get('password'));
		$user->save();
		return Redirect::to('admin/users');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = new Users;
		$user = $user->findOrFail($id);
		$user->delete();
		return Redirect::to('admin/users');
	}


}
