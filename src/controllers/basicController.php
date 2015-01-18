<?php namespace Shoulderscms\Shoulderscms\controllers;

/**
* A basic controller for the CMS
*/
use \Input;
use \Auth;
use \Redirect;
class basicController extends \BaseController
{
	
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