<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'content'];

	/**
	 * Project belongs to one user
	 * 
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	/**
	 * Project belongs to one client
	 * 
	 * @return \Illuminate\Database\Eloquent\Model
	 */
	public function client()
	{
		return $this->belongsTo('App\Client');
	}
}
