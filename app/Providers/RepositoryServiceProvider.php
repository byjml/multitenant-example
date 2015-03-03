<?php namespace App\Providers;

use App\User;
use App\Client;
use App\Project;
use Illuminate\Support\ServiceProvider;
use App\Repositories\User\EloquentUserRepository;
use App\Repositories\Client\EloquentClientRepository;
use App\Repositories\Project\EloquentProjectRepository;


class RepositoryServiceProvider extends ServiceProvider {

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('App\Repositories\Client\ClientRepository', function($app)
		{
			return new EloquentClientRepository(new Client);
		});

		$this->app->bind('App\Repositories\User\UserRepository', function($app)
		{
			return new EloquentUserRepository(new User);
		});

		$this->app->bind('App\Repositories\Project\ProjectRepository', function($app)
		{
			return new EloquentProjectRepository(new Project, $app['context']);
		});
	}

}
