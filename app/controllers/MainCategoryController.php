<?php

class MainCategoryController extends \BaseController {

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
				"description" => $filter
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

	public function getAll(){

		$categoryType = MainCategory::all();
		return $categoryType;

	}

	public function getIndex()
	{
		$page = $this->getPage();
		$dataFilter = $this->getDataFilter();
		$orderFilter = $this->getOrderByFilter();

		$datatable = $this->myDataTable('MainCategory',[],$page,20,$dataFilter,$orderFilter);
		return $datatable;
	}

	public function getView($id){
		$category = MainCategory::find($id);
		return $category;
	}

	public function getEdit($id){
		return $this->getView($id);
	}

	public function postSave(){

		if(Input::has('id')){
			$id = Input::get('id');
			$cateogry = MainCategory::find($id);
			$cateogry->update(Input::except([]));
			$cateogry->save();

			return $cateogry;
		}else {
			$cateogry = MainCategory::firstOrNew(Input::all([]));
			$cateogry->save();

			return $cateogry;
		}

	}

	public function postDelete(){
		if(Input::has('id')){
			$id = Input::get('id');
			$categoryType = MainCategory::find($id);
			$categoryType->delete();
			return [true];
		}else {
			return [false];
		}
	}


}
