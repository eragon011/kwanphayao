<?php

class Content extends NeoEloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'contents';

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
	protected $fillable = array('title', 'content');

	// --DEFINE RELATIONSHIPS--
	/**
	 * a Content model "belongs to" category.
	 *
	 * @var array
	 * @return object
	 */
	public function category() {
		return $this->belongsTo('Category');
	}

}