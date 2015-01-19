# Shoulderscms
Currently a very early version of a CMS built on top of Laravel. Also uses Admin LTE as the backend theme.

## Getting Started
This is not production ready...so use at your own risk. This is a very early release.

* install Laravel like you normally would.
* Add the following to the require block in your composer.json file
```php
"shoulderscms/shoulderscms": "dev-master"
```
* Do composer update in terminal
* Add the following to your `app/app.php` under service providers:
```php
'providers' => [
    'Shoulderscms\Shoulderscms\ShoulderscmsServiceProvider',
	'Lavary\Menu\ServiceProvider',
	'Jaybizzle\Safeurl\SafeurlServiceProvider',
]
```
* Add the following to your `app/app.php` under aliases:
```php
'aliases' => [
	'Menu'				=> 'Shoulderscms\Shoulderscms\Facades\Menu',
	'Safeurl'           => 'Jaybizzle\Safeurl\Facades\Safeurl',
]
```
* For some reason there is an error currently in the Menu package. Open vendor/lavary/laravel-menu/src/Lavary/Menu/Menu.php and comment out line 63
* Update your app/config/local/database.php file to reflect your local DB with proper host, database, username, password credentials.
* Run package migrations by running the following in terminal:
	`php artisan migrate --package=shoulderscms/shoulderscms`
* assuming you have set everything up correctly, you should be able to go to /admin and see the login screen. Use the console to set up a new user using the `php artisan create-user` command. You will be prompted for all the necessary fields.