<?php

class Content extends AbstrctIModel {


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
	protected $fillable = ['title', 'content'];

	public function category() {
		return $this->belongsTo("Category","HAS");
	}

}