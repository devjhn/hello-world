<?php

namespace IonDevCode\HelloWorld\Providers;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
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
		$this->app->bind('HelloWorld', function($app) {
			return new \HelloWorld\HelloWorld();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('HelloWorld');
	}
}
