<?php

class UserApiController extends \BaseController {

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    public function getIndex() {
        
        $with = ['role'];

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