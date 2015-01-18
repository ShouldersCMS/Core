<?php 

Menu::make('AdminNav', function($menu)
{
	$menu->add('Dashboard', array('url' => 'admin', 'icon' => 'fa fa-dashboard'));
});


Route::get('admin', function()
{
	if (Auth::check()) {
		$user = User::find(1);
		Auth::login($user);
		return View::make('shoulderscms::AdminLTE.index', ['user' => $user]);
	} 
	return View::make('shoulderscms::AdminLTE.login');
});
Route::get('test', function()
{
	return Menu::test();
});
// Route::any('login', function()
// {
// 	return Input::all();
// });

Route::any('logout', array('uses' => 'Shoulderscms\Shoulderscms\controllers\basicController@logout'));
Route::any('login', array('uses' => 'Shoulderscms\Shoulderscms\controllers\basicController@login'));