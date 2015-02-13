<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class CategoryService extends BaseService {

    public function all(){
        return Category::all();
    }



    public function getById($id){
        return Category::find($id);
    }

    public function save(Category $category){

        $category->save();
        return $category;

    }

    public function delete(Category $category){

        $mid = $category->parent()->first();
        if($mid != null){
            $mmid = $mid->id;
            $mainCat = MainCategory::find($mmid);
            $mainCat->categories()->detach($category->id);
        }
        $category->delete();

        return $category;
    }

}