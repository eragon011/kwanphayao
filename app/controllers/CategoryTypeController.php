<?php

class CategoryTypeController extends \BaseController {

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

	public function getIndex()
	{
		$page = $this->getPage();
		$dataFilter = $this->getDataFilter();
		$orderFilter = $this->getOrderByFilter();

		$datatable = $this->myDataTable('CategoryType',[],$page,20,$dataFilter,$orderFilter);
		return $datatable;
	}

	public function getView($id){
		$category = CategoryType::find($id);
		return $category;
	}

	public function getEdit($id){
		return $this->getView($id);
	}

	public function postSave(){

		if(Input::has('id')){
			$id = Input::get('id');
			$cateogry = CategoryType::find($id);
			$cateogry->update(Input::except([]));
			$cateogry->save();

			return $cateogry;
		}else {
			$cateogry = CategoryType::firstOrNew(Input::all([]));
			$cateogry->save();

			return $cateogry;
		}

	}


}
