<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class UserService extends BaseService {

    public function all(){
        return Content::all();
    }

    public function getById($id){
        return Content::find($id);
    }

    public function save(array $input){

        if (isset($input['id'])) {
            $id = $input['id'];
            $content = Content::find($id);
            $content->update(array_except($input,['category']));
            $content->save();

            $categoryId = $input['category']['id'];
            $category = Category::find($categoryId);

            $content->category()->associate($category)->save();

            return $content;
        } else {
            $content = Content::updateOrCreate(array_except($input,['category']));

            $categoryId = $input['category']['id'];

            $category = Category::find($categoryId);
            $content->category()->associate($category)->save();

            return $content;
        }

    }

    public function delete(array $input){

        if(isset($input['id'])) {
            $id = $input['id'];
            $content = User::find($id);

            $category = $content->category()->first();

            if($category != null){
                $category_id = $category->id;
                $category = Role::find($category_id);
                $category->users()->detach($content->id);
            }
            $content->delete();

            return [true];
        } else {
            return [false];
        }
    }

}