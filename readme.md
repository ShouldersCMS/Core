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
```php
php artisan migrate --package=shoulderscms/shoulderscms
```
* Publish the package assets
```php
php artisan asset:publish shoulderscms/shoulderscms
```
* Remove the base `app/routes.php` file. Or just delete the route inside. Otherwise the homepage will only show the default Laravel screen.
* assuming you have set everything up correctly, you should be able to go to /admin and see the login screen. Use the console to set up a new user using the `php artisan create-user` command. You will be prompted for all the necessary fields.

> Note: If you are using Homestead, you may have to be SSHed into your Homestead machine in order for it to be able to write to your DB.
