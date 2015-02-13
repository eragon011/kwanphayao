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

    public function save(array $input){

        if (isset($input['id'])) {
            $id = $input['id'];
            $cateogry = MainCategory::find($id);
            $cateogry->update($input);

            $cateogry->save();

            return $cateogry;
        } else {
            $cateogry = MainCategory::firstOrNew($input);
            $cateogry->save();

            return $cateogry;
        }

    }
    public function delete(array $input){
        if (Input::has('id')) {
            $id = Input::get('id');
            $mainCategory = MainCategory::find($id);
            $this->mainCategoryService->delete($mainCategory);
            return [true];
        } else {
            return [false];
        }
    }


}