<?php

class MainCategoryApiController extends \BaseController
{

    public function __construct(MainCategoryService $mainCategoryService, CategoryService $categoryService){
        $this->mainCategoryService = $mainCategoryService;
        $this->categoryService = $categoryService;
    }

    public function getAll()
    {
        $categoryType = $this->mainCategoryService->all();
        return $categoryType;

    }

    public function getIndex()
    {
        $with = [];

        $colFilter = [
            'name',
            'description',
        ];

        $relateColFilter = [];

        return $this->mainCategoryService->getPagination("MainCategory",Input::all(),$colFilter,$relateColFilter,$with);
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
            return $this->mainCategoryService->save(Input::all());
        }


    }

    public function postDelete($input)
    {
        return $this->mainCategoryService->delete(Input::all());
    }

    public function getCategories($id){
        return $this->mainCategoryService->getCategories($id);

    }

    public function postCreateCategory($id){

        $input = Input::all();
        $input['parent'] = MainCategory::find($id)->toArray();

        $this->categoryService->save($input);
    }


}
