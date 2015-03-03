<?php namespace App\Repositories\User;

use App\Contexts\Context;
use App\Repositories\TenantRepository;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\User\UserRepository;

class EloquentUserRepository extends TenantRepository implements UserRepository {

	/**
	 * @var Model
	 */
	protected $model;

	/**
	 * @var Context
	 */
	protected $scope;

	/**
	 * Construct
	 *
	 * @param App\Contexts\Context $scope
	 * @param Illuminate\Database\Eloquent\Model $model
	 */
	public function __construct(Model $model, Context $scope)
	{
		$this->model = $model;

		$this->scope = $scope;
	}

	/**
	 * Return all users
	 *
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all(array $with = [])
	{
		return $this->allThroughColumn($with);
	}

	/**
	 * Return a single user
	 *
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function find($id, array $with = [])
	{
		return $this->findThroughColumn($id, $with);
	}

	/**
	 * Get Results by Page
	 *
	 * @param int $page
	 * @param int $limit
	 * @param array $with
	 * @return StdClass Object with $items and $totalItems for pagination
	 */
	public function getByPage($page = 1, $limit = 10, $with = [])
	{
		return $this->getByPageThroughColumn($page, $limit, $with);
	}

	/**
	 * Search for a single result by key and value
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function getFirstBy($key, $value, array $with = [])
	{
		return $this->getFirstByThroughColumn($key, $value, $with);
	}

	/**
	 * Search for many results by key and value
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getManyBy($key, $value, array $with = [])
	{
		return $this->getManyByThroughColumn($key, $value, $with);
	}

	/**
	 * Make a new instance of the entity to query on
	 *
	 * @param array $with
	 */
	public function make(array $with = [])
	{
		return $this->model->with($with);
	}
}
