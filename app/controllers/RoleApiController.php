<?php

class RoleApiController extends \BaseController {

    public function __construct(RoleService $roleService) {
        $this->roleService = $roleService;
    }

    public function getAll(){
        return $this->roleService->all();
    }

    public function getIndex() {
        $page = $this->getPage();
        $dataFilter = $this->getDataFilter();
        $orderFilter = $this->getOrderByFilter();
        $with = [];

        $datatable = $this->roleService->getPagination($page,10,$with,$dataFilter,$orderFilter);
        return $datatable;
    }

    public function getDataFilter() {
        if (Input::has('filter')) {
            $filter = Input::get('filter');

            $dataFilter = [
                "name" => $filter,
                "description" => $filter
            ];
        } else {
            $dataFilter = [];
        }

        return $dataFilter;
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