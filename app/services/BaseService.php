<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class BaseService {

    protected function myDataTable($class,$page=1,$take=10,$with=[],$filter=[],$order = []){

        $skip = $page-1;
        $query = $class::with($with);


        foreach($filter as $key => $value){
            $query->orWhere($key,'=~',"(?i).*$value.*");
        }

        $total = $query->count();
        foreach($order as $key =>$value){
            $query->orderBy($key,$value);
        }
        $list = $query->skip($skip)->take($take)->get();

        $data = [
            "data" => $list,
            "skip" => $skip,
            "take" => $take,
            "count" => $list->count(),
            "total" => $total
        ];

        return $data;
    }

}