<?php

/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 1/31/2015 AD
 * Time: 9:22 AM
 */
class MainCategory extends NeoEloquent implements IModel
{

    protected $connection = 'neo4j';

    protected $label = ['MainCategory', 'Classification'];

    protected $fillable = ['name', 'description'];

    public function categories()
    {
        return $this->hasMany("Category", "HAS_CATEGORY");
    }

    static function getDataFilter($filterString = null)
    {
        if ($filterString != null) {
            $filter = $filterString;

            $dataFilter = [
                "name" => $filter,
                "type" => $filter,
            ];

        } else {
            $dataFilter = [];
        }

        return $dataFilter;
    }

    static function getRelationFilter($filterString = null)
    {
        return null;
    }


}