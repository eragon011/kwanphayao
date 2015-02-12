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

    public function save(Role $role){

        $role->save();
        return $role;

    }

    public function delete(Role $role){

        $role->users()->sync([],true);
        $role->delete();

        return $role;
    }

}