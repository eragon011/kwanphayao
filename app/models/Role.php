<?php

class Role extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'roles';

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
	 * role name : UPPERCASE
	 *
	 * @var array
	 */
	protected $fillable = array('name', 'description');

	// --DEFINE RELATIONSHIPS--
	/**
	 * a Role model "has many" users.
	 *
	 * @var array
	 * @return object
	 */
	public function users() {
		return $this->hasMany('User');
	}

}