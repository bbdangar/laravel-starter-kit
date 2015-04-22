<?php namespace Kit\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class KitServiceProvider extends ServiceProvider {
	/**
	 * The Artisan commands provided by starter kit.
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
	public function boot(Router $router)
	{
		$router->group(['namespace' => 'Kit\Http\Controllers'], function($router)
		{
			require __DIR__.'/../Http/routes.php';
		});

		// Register Views
		$this->loadViewsFrom(__DIR__.'/../../resources/views', 'kit');

		// Register the application command
		$this->commands($this->commands);

		// Publish the Resources
		# Migrations
		$this->publishes([
	    	__DIR__.'/../../database/migrations/' => database_path('/migrations')
		], 'migrations');

		# Seeders
		$this->publishes([
	    	__DIR__.'/../../database/seeds/' => database_path('/seeds')
		], 'seeds');
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