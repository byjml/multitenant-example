<?php namespace App\Providers;

use App\Contexts\ClientContext;
use Illuminate\Support\ServiceProvider;

class ContextServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app['context'] = $this->app->share(function($app)
		{
			return new ClientContext;
		});

		$this->app->bind('App\Contexts\Context', function($app)
		{
			return $app['context'];
		});
	}

}
