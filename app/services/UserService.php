<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/12/2015 AD
 * Time: 12:21 PM
 */

class UserService extends BaseService {

    public function all(){
        return User::all();
    }

    public function getById($id){
        return User::find($id);
    }

    public function save(User $user){

        $user->save();
        return $user;

    }

    public function delete(User $user){

        $role = $user->role()->first();
        if($role != null){
            $role_id = $role->id;
            $role = Role::find($role_id);
            $role->users()->detach($user->id);
        }
        $user->delete();

        return $user;
    }

}