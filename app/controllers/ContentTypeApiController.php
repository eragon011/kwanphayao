<?php

class ContentTypeApiController extends \BaseController {

    public function getAll(){
        $types = [
            ["id" => "content", "title" =>"Content"],
            ["id" => "fist", "title" =>"Fist"],
            ["id" => "history", "title" =>"History"],
        ];

        return $types;
    }

}