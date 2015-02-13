<?php

class RoleApiController extends \BaseController {

    public function __construct(RoleService $roleService) {
        $this->roleService = $roleService;
    }

    public function getAll(){
        return $this->roleService->all();
    }

    public function getIndex() {
        $with = [];

        $colFilter = [
            'name',
            'description',
        ];

        $relateColFilter = [];

        return $this->roleService->getPagination("Role",Input::all(),$colFilter,$relateColFilter,$with);
    }

    public function getView($id) {
        return $this->roleService->getById($id);
    }

    public function getEdit($id) {
        return $this->getView($id);
    }

    public function postSave() {
        $validator = Validator::make(
            Input::all(),
            array('name' => 'required')
        );

        if ($validator->fails()) {
            return null;
        } else {
            if (Input::has('id')) {
                $id = Input::get('id');
                $role = Role::find($id);
                $role->update(Input::except([]));

                return $this->roleService->save($role);
            } else {
                $role = Role::findOrNew(Input::all([]));
                return $this->roleService->save($role);
            }
        }
    }

    public function postDelete() {
        if (Input::has('id')) {
            $id = Input::get('id');
            $role = Role::find('id');
            $this->roleService->delete($role);
            return [true];
        } else {
            return [false];
        }
    }

}