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


	protected function myDataTable($class,$with,$skip,$take){

		$list = $class::with($with)->take($take)->skip($skip)->get();

		$data = [
			"data" => $list,
			"skip" => $skip,
			"take" => $take,
			"count" => $list->count(),
			"total" => $class::all()->count()
		];

		return $data;
	}

}
