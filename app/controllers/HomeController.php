<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function getTest() {
        return View::make('home.test');
    }

    public function getTest2() {
        return View::make('test2');
    }

    public function getTest3() {
        return View::make('test3');
    }

    public function getTest5() {
        return View::make('test5');
    }

    public function getTest51() {
        return View::make('test51');
    }

    public function setupLayout() {
        $this->getBreadcrumb();
    }

    public function getBreadcrumb() {
        $activeSection = '';

        if (Request::path() == 'about') {
            $activeSection = "เกี่ยวกับสารานุกรมกว๊านพะเยา";
        } elseif (Request::path() == 'phayao') {
            $activeSection = "ข้อมูลทั่วไปกว๊านพะเยา";
        } elseif (Request::path() == 'ecology') {
            $activeSection = "นิเวศวิทยาและสิ่งแวดล้อม";
        } elseif (Request::path() == 'economy') {
            $activeSection = "เศรษฐกิจและการท่องเที่ยว";
        } elseif (Request::path() == 'nature') {
            $activeSection = "การจัดการทรัพยากรธรรมชาติ";
        } elseif (Request::path() == 'history') {
            $activeSection = "ประวัติศาสตร์และวัฒนธรรม";
        } elseif (Request::path() == 'register') {
            $activeSection = "ลงทะเบียน";
        }

        if($activeSection == '') {
            $showBreadcrumb = false;
        } else {
            $showBreadcrumb = true;
        }

        View::share('activeSection',$activeSection);
        View::share('showBreadcrumb',$showBreadcrumb);
    }

    public function getIndex() {
        return View::make('home.index');
    }

    public function getAbout() {
        return View::make('home.about');
    }

    public function getRegister() {
        return View::make('home.register');
    }

    public function getPhayao() {
        return View::make('home.phayao');
    }

    public function getEcology() {
        return View::make('home.ecology');
    }

    public function getEconomy() {
        return View::make('home.economy');
    }

    public function getNature() {
        return View::make('home.nature');
    }

    public function getHistory() {
        return View::make('home.history');
    }

}