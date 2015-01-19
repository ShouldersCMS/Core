<?php 

Menu::make('AdminNav', function($menu)
{
	$menu->add('Dashboard', array('url' => 'admin', 'icon' => 'fa fa-dashboard'));
});


Route::get('admin', function()
{
	if (Auth::check()) {
		$user = User::find(Auth::user()->id);
		return View::make('shoulderscms::AdminLTE.index', ['user' => $user]);
	}
	return View::make('shoulderscms::AdminLTE.login');
});

Route::post('admin', function()
{
	if (Auth::attempt(array(
			'username' => Input::get('username'), 
			'password' => Input::get('password')
	))) {

	}
	return Redirect::to('admin');
});


Route::any('logout', array('uses' => 'Shoulderscms\Shoulderscms\controllers\basicController@logout'));
Route::any('login', array('uses' => 'Shoulderscms\Shoulderscms\controllers\basicController@login'));