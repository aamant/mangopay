<?php namespace Aamant\Mangopay;

require_once dirname(__FILE__) . '/../../MangoPaySDK/mangoPayApi.inc';

use Illuminate\Support\ServiceProvider;

class MangopayServiceProvider extends ServiceProvider {

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
		$this->package('aamant/mangopay');
	}

	public function register()
	{
		$this->app['mangopay'] = $this->app->share(function($app){
			return new MangoPayApi();
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('mangopay');
	}

}