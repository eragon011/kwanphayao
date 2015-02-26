<?php

class ContentTypeApiController extends \BaseController
{

    static $types = [
        ["id" => "content", "title" => "ข้อมูลทั่วไป"],
        ["id" => "fish", "title" => "พันธุ๋ลา"],
    ];

    public function getAll()
    {
        return $this->types;
    }

    public static function getTypes(){
        return ContentTypeApiController::$types;
    }

    public function getView($id){
        foreach (ContentTypeApiController::$types as $type) {
            if ($type['id'] == $id){
                return $type;
            }
        }
        return null;

    }

}