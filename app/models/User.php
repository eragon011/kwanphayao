<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends NeoEloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database connection used by the model.
	 *
	 * @var string
	 */
	protected $connection = 'neo4j';

	// --MASS ASSIGNMENT--
	/**
	 * The attributes should be fillable to mass-assignment used by the model.
	 *
	 * @var array
	 */
	protected $fillable = array('username', 'avatar', 'email', 'title', 'firstname', 'lastname', 'organization');

	/**
	 * The attributes should be guarded to mass-assignment used by the model.
	 *
	 * @var array
	 */
	protected $guarded = array('password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	// --DEFINE RELATIONSHIPS--
	/**
	 * a User model "belongs to" role.
	 *
	 * @var array
	 * @return object
	 */
	public function role() {
		return $this->belongsTo('Role');
	}

	// --DEFINE ACTION--
	/**
	 * a User model "belongs to" role.
	 *
	 * @var array
	 */

}