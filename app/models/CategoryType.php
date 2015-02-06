<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 1/31/2015 AD
 * Time: 9:22 AM
 */

class CategoryType extends NeoEloquent {

    protected $connection = 'neo4j';

    protected $fillable = ['name','description'];

    public function categories(){
        return $this->belongsToMany("Category","HasType");
    }

}