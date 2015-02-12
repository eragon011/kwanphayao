<?php

class UserApiController extends \BaseController {

    private function getPage() {
        if (Input::has('page')) {
            $page = Input::get('page');
        } else {
            $page = 1;
        }

        return $page;
    }

    private function getDataFilter() {
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

    private function getOrderByFiler() {
        if (Input::has('orderby')) {
            $orderBy = Input::get('orderby');
//            if (Input::get('order'))
        } else {
            $orderFilter = [];
        }

        return $orderFilter;
    }

    private function getIndex() {
        $page = $this->getPage();
        $dataFilter = $this->getDataFilter();

    }

}