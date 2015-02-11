<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	private  function  getPage(){
		if (Input::has('page')){
			$page = Input::get('page');
		}else {
			$page=1;
		}

		return $page;
	}

	private function getDataFilter(){
		if (Input::has('filter')){
			$filter = Input::get('filter');

			$dataFilter = [
				"name" => $filter,
				"type" => $filter
			];

		}else {
			$dataFilter = [];
		}

		return $dataFilter;
	}

	private function getOrderByFilter(){
		if(Input::has('orderby')){
			$orderBy = Input::get('orderby');
			if(Input::has('orderType')){
				$orderType = Input::get('orderType');
			}else {
				$orderType = "asc";
			}

			$orderFilter = [
				$orderBy => $orderType
			];
		}else {
			$orderFilter = [];
		}

		return $orderFilter;
	}

	public function getIndex()
	{
		$page = $this->getPage();
		$dataFilter = $this->getDataFilter();
		$orderFilter = $this->getOrderByFilter();

		$datatable = $this->myDataTable('Category',['parent'],$page,20,$dataFilter,$orderFilter);
		return $datatable;
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

			$mid = $cat->parent()->first();
			if($mid != null){
				$mmid = $mid->id;
				$mainCat = MainCategory::find($mmid);
				$mainCat->categories()->detach($id);
			}
			$cat->delete();

			return [true];

		}else {

			return [false];

		}
	}


}
