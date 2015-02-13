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

    public function save(array $input){
        if(isset($input['id'])){
            $id = $input['id'];
            $category = Category::find($id);
            $category->update($input);
            $category->save();

            $mainCategoryId = $input['parent']['id'];
            $mainCategory = MainCategory::find($mainCategoryId);

            $category->parent()->associate($mainCategory)->save();


            return $category;
        }else {

            $parent = $input['parent'];

            $category = Category::firstOrNew(array_except($input,['parent']));
            $category->save();
            $mainCategoryId = $parent['id'];

            $mainCategory = MainCategory::find($mainCategoryId);
            $category->parent()->associate($mainCategory)->save();

            return $category;

        }
    }

    public function delete(array $input){

        $category = Category::find($input['id']);

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