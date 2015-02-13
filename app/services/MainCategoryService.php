<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class MainCategoryService extends BaseService {

    public function all(){
        return MainCategory::all();
    }

    public function getById($id){
        return MainCategory::find($id);
    }

    public function save(MainCategory $mainCategory){

        $mainCategory->save();
        return $mainCategory;

    }

    public function delete(MainCategory $mainCategory){
        $mainCategory->categories()->sync([],true);
        $mainCategory->delete();
        return $mainCategory;
    }

}