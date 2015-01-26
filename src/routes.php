<?php 

Menu::make('AdminNav', function($menu)
{
	$menu->add('Dashboard', array('url' => 'admin', 'icon' => 'fa fa-dashboard'));
});
Menu::get('AdminNav')->add('Users', array('url' => 'admin/users', 'icon' => 'fa fa-users', 'class' => 'test'))->data('order', 10);
Menu::get('AdminNav')->users->add('Create User', 'admin/users/create');
Menu::get('AdminNav')->users->add('Manage Users', 'admin/users');

Route::resource('admin/users', 'Shoulderscms\Shoulderscms\controllers\UsersController');

Route::get('admin', 'Shoulderscms\Shoulderscms\controllers\basicController@admin');
Route::post('admin', 'Shoulderscms\Shoulderscms\controlelrs\basicController@attempt');

Route::filter('admin', 'AdminFilter');
Route::when('admin/*', 'admin');


Route::any('logout', array('uses' => 'Shoulderscms\Shoulderscms\controllers\basicController@logout'));
Route::any('login', array('uses' => 'Shoulderscms\Shoulderscms\controllers\basicController@login'));