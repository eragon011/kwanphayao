<?php

class MainCategoryApiController extends \BaseController
{

    public function __construct(MainCategoryService $mainCategoryService){
        $this->mainCategoryService = $mainCategoryService;
    }

    public function getAll()
    {
        $categoryType = $this->mainCategoryService->all();
        return $categoryType;

    }

    public function getIndex()
    {
        $page = $this->getPage();
        $dataFilter = $this->getDataFilter();
        $orderFilter = $this->getOrderByFilter();
        $with = [];


        $datatable = $this->mainCategoryService->getPagination($page,10,$with,$dataFilter,$orderFilter);
        return $datatable;
    }

    public function getView($id)
    {
        return $this->mainCategoryService->getById($id);
    }

    public function getEdit($id)
    {
        return $this->mainCategoryService->getById($id);    }

    public function postSave()
    {

        $validator = Validator::make(
            Input::all(),
            array('name' => 'required')
        );


        if ($validator->fails()) {
            return null;
        } else {
            if (Input::has('id')) {
                $id = Input::get('id');
                $cateogry = MainCategory::find($id);
                $cateogry->update(Input::except([]));

                return $this->mainCategoryService->save($cateogry);
            } else {
                $cateogry = MainCategory::firstOrNew(Input::all([]));
                $cateogry->save();

                return $this->mainCategoryService->save($cateogry);
            }
        }


    }

    public function postDelete()
    {
        if (Input::has('id')) {
            $id = Input::get('id');
            $mainCategory = MainCategory::find($id);
            $this->mainCategoryService->delete($mainCategory);
            return [true];
        } else {
            return [false];
        }
    }


}
