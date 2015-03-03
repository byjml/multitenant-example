<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'subdomain'];

	/**
	 * Client has many users
	 * 
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function users()
	{
		return $this->hasMany('App\User');
	}

	/**
	 * Client has many projects
	 * 
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function projects()
	{
		return $this->hasMany('App\Project');
	}

}
