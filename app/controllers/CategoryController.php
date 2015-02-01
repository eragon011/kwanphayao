<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 1/31/2015 AD
 * Time: 9:25 AM
 */

class CategoryController extends BaseController {

    public function getIndex($page=1){
        if ($page <= 1) $page =1;
        $datatables = $this->myDataTable("Category",[],$page-1,10);
        return $datatables;
    }

}