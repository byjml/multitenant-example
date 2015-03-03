<?php namespace App\Repositories\Client;

interface ClientRepository {

	/**
	 * Return all results
	 *
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all(array $with = []);

	/**
	 * Return a single result
	 *
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function find($id, array $with = []);

	/**
	 * Get Results by Page
	 *
	 * @param int $page
	 * @param int $limit
	 * @param array $with
	 * @return StdClass Object with $items and $totalItems for pagination
	 */
	public function getByPage($page = 1, $limit = 10, $with = []);

	/**
	 * Search for a single result by key and value
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Model
	 */
	public function getFirstBy($key, $value, array $with = []);

	/**
	 * Search for many results by key and value
	 *
	 * @param string $key
	 * @param mixed $value
	 * @param array $with
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function getManyBy($key, $value, array $with = []);

	/**
	 * Make a new instance of the entity to query on
	 *
	 * @param array $with
	 */
	public function make(array $with = []);

}
