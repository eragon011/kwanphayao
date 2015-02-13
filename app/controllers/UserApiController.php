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


    public function getView($id) {
        $user = User::find($id);
        return $user;
    }

    public  function getEdit($id) {
        return $this->getView($id);
    }

    public function postSave() {

        return $this->userService->save(Input::all());
    }

    public function postDelete() {
        return $this->userService->delete(Input::all());

    }

}