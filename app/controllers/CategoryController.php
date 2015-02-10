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

		$datatable = $this->myDataTable('Category',[],$page,20,$dataFilter,$orderFilter);
		return $datatable;
	}

	public function getView($id){

		$category = Category::find($id);
		return $category;

	}

	public function postSave(){

//		$category = Category::updateOrCreate(Input::except([]));
//		return $category;

		return Input::get('categoryType');

	}


}
