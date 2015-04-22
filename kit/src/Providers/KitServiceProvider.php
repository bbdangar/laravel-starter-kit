<?php namespace Kit\Providers;

use Illuminate\Support\ServiceProvider;

class KitServiceProvider extends ServiceProvider {
	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'Kit\Console\Commands\AppInstallCommand',
	];

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
		$this->commands($this->commands);
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
