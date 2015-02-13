<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 1/31/2015 AD
 * Time: 9:22 AM
 */

class Category extends NeoEloquent implements IModel {

    protected $connection = 'neo4j';

    protected $label = ['Category','Classification'];

    protected $guarded = ['parent'];

    protected $fillable = ['name','description'];

    public function parent(){
        return $this->belongsTo('MainCategory','HAS_CATEGORY');
    }


    public static function getDataFilter($filterString = null){
        if ($filterString != null){
            $filter = $filterString;

            $dataFilter = [
                "name" => $filter,
            ];

        }else {
            $dataFilter = [];
        }

        return $dataFilter;
    }

    public static function getRelationFilter($filterString = null){
        if ($filterString != null){
            $filter = $filterString;

            $dataFilter = [
                "parent" => [
                    "name" => $filter
                ]
            ];

        }else {
            $dataFilter = [];
        }

        return $dataFilter;
    }

}