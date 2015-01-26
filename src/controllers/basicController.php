<?php namespace Shoulderscms\Shoulderscms\controllers;

/**
* A basic controller for the CMS
*/
use \Input;
use \Auth;
use \Redirect;
use \View;
use \User;
class basicController extends \BaseController
{
	public function admin()
	{
		if (Auth::check()) {
			$user = User::find(Auth::user()->id);
			return View::make('shoulderscms::AdminLTE.index', ['user' => $user]);
		}
		return View::make('shoulderscms::AdminLTE.login');
	}

	public function attempt()
	{
		if (Auth::attempt(array(
			'username' => Input::get('username'), 
			'password' => Input::get('password')
		))) {

		}
		return Redirect::to('admin');
	}
	
	public function login()
	{
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{
		    return Redirect::to('admin');
		}
		return Redirect::to('admin');
	}
	
	public function logout()
	{
		Auth::logout();
		return Redirect::to('admin');
	}
}