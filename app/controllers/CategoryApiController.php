<?php

class CategoryApiController extends \BaseController {


	public function __construct(CategoryService $categoryService){
		$this->categoryService = $categoryService;
	}

	public function getIndex()
	{
		$with = ['parent'];

		$colFilter = [
			'name',
		];

		$relateColFilter = [
			'parent' => [
				'name'
			]
		];

		return  $this->categoryService->getPagination("Category",Input::all(),$colFilter,$relateColFilter,$with);

	}

	public function getView($id){

		$category = Category::find($id);
		return $category;

	}

	public function getEdit($id){
		return $this->getView($id);
	}

	public function postSave(){

		if (Input::has('id')) {

			$id = Input::get('id');
			$category = Category::find($id);
			$category->update(Input::except(['parent']));
			$category->save();

			$mainCategoryId = Input::get('parent.id');
			$mainCategory = MainCategory::find($mainCategoryId);

			$category->parent()->associate($mainCategory)->save();


			return $category;
		}else{

			$category = Category::updateOrCreate(Input::except(['parent']));
			$mainCategoryId = Input::get('parent.id');
			return [$mainCategoryId];
			$mainCategory = MainCategory::find($mainCategoryId);
			$category->parent()->associate($mainCategory)->save();

			return $category;
		}




	}

	public function postDelete(){
		if(Input::has('id')){
			$id = Input::get('id');
			$cat = Category::find($id);

			$this->categoryService->delete($cat);

			return [true];

		}else {

			return [false];

		}
	}


}
