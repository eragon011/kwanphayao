<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}


	protected function myDataTable($class,$with,$skip=0,$take=10,$filter=[],$order = []){
		$skip = $skip-1;
		$query = $class::with($with);


		foreach($filter as $key => $value){
			$query->orWhere($key,'=~',"(?i).*$value.*");
		}

		$total = $query->count();
		foreach($order as $key =>$value){
			$query->orderBy($key,$value);
		}
		$list = $query->skip($skip)->take($take)->get();

		$data = [
			"data" => $list,
			"skip" => $skip,
			"take" => $take,
			"count" => $list->count(),
			"total" => $total
		];

		return $data;
	}

}
