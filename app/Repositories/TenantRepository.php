<?php namespace App\Repositories;

use StdClass;
use Illuminate\Database\Eloquent\Builder;
use App\Repositories\AbstractRepository;

abstract class TenantRepository {

	/**
	 * Scope a query based upon a column name
	 *
	 * @param Illuminate\Database\Eloquent\Builder
	 * @return Illuminate\Database\Eloquent\Builder
	 */
	public function scopeColumn(Builder $model)
	{
		if($this->scope->has())
		{
			return $model->where($this->scope->column(), '=', $this->scope->id());
		}

		return $model;
	}

	/**
	 * Scope the query based upon a relationship
	 *
	 * @param Illuminate\Database\Eloquent\Builder
	 * @return Illuminate\Database\Eloquent\Builder
	 */
	public function scopeRelationship(Builder $model)
	{
		if($this->scope->has())
		{
			return $model->whereHas($this->scope->table(), function($q)
			{
				$q->where($this->scope->column(), '=', $this->scope->id());
			});
		}

		return $model;
	}

	/**
	 * Retrieve all entities through a scoped column
	 *
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function allThroughColumn(array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeColumn($entity)->get();
	}

	/**
	 * Retrieve all entities through a scoped relationship
	 *
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function allThroughRelationship(array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeRelationship($entity)->get();
	}

	/**
	 * Find a single entity through a scoped column
	 *
	 * @param int $id
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function findThroughColumn($id, array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeColumn($entity)->find($id);
	}

	/**
	 * Find a single entity through a scoped relationship
	 *
	 * @param int $id
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function findThroughRelationship($id, array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeRelationship($entity)->find($id);
	}

	/**
	 * Get Results by Page through scoped column
	 *
	 * @param int $page
	 * @param int $limit
	 * @param array $with
	 * @return StdClass Object with $items and $totalItems for pagination
	 */
	public function getByPageThroughColumn($page = 1, $limit = 10, $with = [])
	{
		$result             = new StdClass;
		$result->page       = $page;
		$result->limit      = $limit;
		$result->totalItems = 0;
		$result->items      = [];

		$query = $this->scopeColumn($this->make($with));

		$users = $query->skip($limit * ($page - 1))
									 ->take($limit)
									 ->get();

		$result->totalItems = $this->model->count();
		$result->items      = $users->all();

		return $result;
	}

	/**
	 * Get Results by Page through scoped relationship
	 *
	 * @param int $page
	 * @param int $limit
	 * @param array $with
	 * @return StdClass Object with $items and $totalItems for pagination
	 */
	public function getByPageThroughRelationship($page = 1, $limit = 10, $with = [])
	{
		$result             = new StdClass;
		$result->page       = $page;
		$result->limit      = $limit;
		$result->totalItems = 0;
		$result->items      = [];

		$query = $this->scopeRelationship($this->make($with));

		$users = $query->skip($limit * ($page - 1))
									 ->take($limit)
									 ->get();
 
		$result->totalItems = $this->model->count();
		$result->items      = $users->all();

		return $result;
	}

	/**
	 * Search for a single result by key and value through a scoped column
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function getFirstByThroughColumn($key, $value, array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeColumn($entity)->where($key, '=', $value)->first();
	}

	/**
	 * Search for a single result by key and value through a scoped relationship
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function getFirstByThroughRelationship($key, $value, array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeRelationship($entity)->where($key, '=', $value)->first();
	}

	/**
	 * Search for many results by key and value through a scoped column
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getManyByThroughColumn($key, $value, array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeColumn($entity)->where($key, '=', $value)->get();
	}

	/**
	 * Search for many results by key and value through a scoped relationship
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getManyByThroughRelationship($key, $value, array $with = [])
	{
		$entity = $this->make($with);

		return $this->scopeRelationship($entity)->where($key, '=', $value)->get();
	}

}