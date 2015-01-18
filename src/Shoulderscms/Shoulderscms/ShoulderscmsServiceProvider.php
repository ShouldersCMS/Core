<?php namespace Shoulderscms\Shoulderscms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class ShoulderscmsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('shoulderscms/shoulderscms');
		include __DIR__.'/../../routes.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['menu'] = $this->app->share(function($app)
	    {
	        return new Menu;
	    });
		$this->app->booting(function()
		{
		  $loader = AliasLoader::getInstance();
		  $loader->alias('Menu', 'Shoulderscms\Shoulderscms\Facades\Menu');
		});
		
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
