<?php

class UserApiController extends \BaseController {

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getIndex() {
//        $page = $this->getPage();
//        $dataFilter = $this->getDataFilter();
//        $orderFilter = $this->getOrderByFilter();
//        $with = ['role'];
//
//        $datatable = $this->userService->getPagination($page,20,['role'],$dataFilter,$orderFilter);
//
//        return $datatable;

        $with = ['parent'];

        $colFilter = [
            "username",
            "avatar",
            "email",
            "title",
            "firstname",
            "lastname" ,
            "organization"
        ];

        $relateColFilter = [
            'role' => [
                'name'
            ]
        ];

        return  $this->userService->getPagination("User",Input::all(),$colFilter,$relateColFilter,$with);


    }

    public function getDataFilter() {
        if (Input::has('filter')) {
            $filter = Input::get('filter');

            $dataFilter = [
                "username" => $filter,
                "avatar" => $filter,
                "email" => $filter,
                "title" => $filter,
                "firstname" => $filter,
                "lastname" => $filter,
                "organization" => $filter
            ];

        } else {
            $dataFilter = [];
        }

        return $dataFilter;
    }

    public function getView($id) {
        $user = User::find($id);
        return $user;
    }

    public  function getEdit($id) {
        return $this->getView($id);
    }

    public function postSave() {
        if (Input::has('id')) {
            $id = Input::get('id');
            $user = User::find($id);
            $user->update(Input::except(['role']));
            $user->save();

            $roleId = Input::get('role.id');
            $role = Role::find($roleId);

            $user->role()->associate($role)->save();

            return $user;
        } else {
            $user = User::updateOrCreate(Input::except(['role']));
            $roleId = Input::get('role.id');
            return [$roleId];

            $role = Role::find($roleId);
            $user->role()->associate($role)->save();

            return $user;
        }
    }

    public function postDelete() {
        if(Input::has('id')) {
            $id = Input::get('id');
            $user = User::find($id);

            $this->userService->delete($user);

            return [true];
        } else {
            return [false];
        }
    }

}