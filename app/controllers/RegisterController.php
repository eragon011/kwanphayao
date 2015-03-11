<?php

class RegisterController extends HomeController {

    public function getBasicRegister() {
        return View::make('register.basic');
    }

    public function getProfileRegister() {
        return View::make('register.profile');
    }

    public function getAccountRegister() {
        return View::make('register.account');
    }

    public function doBasicRegister() {


    }

    public function doProfileRegister() {

    }

    public function doAccountRegister() {

    }

}