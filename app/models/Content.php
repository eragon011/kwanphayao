<?php

class Content extends AbstrctIModel {

	protected $connection = 'neo4j';

	protected $fillable = ['title', 'content'];

	public function category() {
		return $this->belongsTo("Category","HAS");
	}

}
