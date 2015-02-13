<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class RoleService extends BaseService {

    public function all(){
        return Role::all();
    }

    public function getPagination($page=0,$take=10,$with=[],$filter=[],$order = []){

        return $datatable = $this->myDataTable('Role', $page, $take,$with, $filter, $order);

    }

    public function getById($id){
        return Role::find($id);
    }

    public function save(array $input){


        if (isset($input['id'])) {
            $id = $input['id'];
            $role = Role::find($id);
            $role->update($input);
            $role->save();

            return $role;
        } else {
            $role = Role::findOrNew($input);
            $role->save();
            return $role;
        }

    }

    public function delete(array $input){

        if (isset($input['id'])) {
            $id = $input['id'];
            $role = Role::find($id);
            $role->delete();
            return [true];
        } else {
            return [false];
        }
    }

}