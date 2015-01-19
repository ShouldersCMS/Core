# Shoulderscms
Currently a very early version of a CMS built on top of Laravel. Also uses Admin LTE as the backend theme.

## Getting Started
This is not production ready...so use at your own risk. This is a very early release.

1. install Laravel like you normally would.
2. Add the following to your composer.json file
3. Do composer update in terminal
4. Add the following to your app/app.php under service providers:
```php
'providers' => [
    'Shoulderscms\Shoulderscms\ShoulderscmsServiceProvider',
	'Lavary\Menu\ServiceProvider',
	'Jaybizzle\Safeurl\SafeurlServiceProvider',
]
```
5. Add the following to your app/app.php under aliases:
```php
'aliases' => [
	'Menu'				=> 'Shoulderscms\Shoulderscms\Facades\Menu',
	'Safeurl'           => 'Jaybizzle\Safeurl\Facades\Safeurl',
]
```
6. For some reason there is an error currently in the Menu package. Open vendor/lavary/laravel-menu/src/Lavary/Menu/Menu.php and comment out line 63
7. Update your app/config/local/database.php file to reflect your local DB with proper host, database, username, password credentials.
8. Run package migrations by running the following in terminal:
	php artisan migrate --package=shoulderscms/shoulderscms
9. assuming you have set everything up correctly, you should be able to go to /admin and see the login screen. At the moment there is not a way to set up a user...but that will be the next step.