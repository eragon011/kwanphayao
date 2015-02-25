<?php

class DatabaseSeeder extends Seeder {


	var $mainCategories;

	private function mainCategorySeeder(){

		$mainCategory = [
			[
				"name" => "ข้อมูลทั่วไปกว๊านพะเยา"
			],
			[
				"name" =>"นิเวศวิทยาและสิ่งแวดล้อม"
			],
			[
				"name" =>"เศรษฐกิจและการท่องเที่ยว"
			],
			[
				"name" =>"การจัดการทรัพยากรธรรมชาติ"
			],
			[
				"name" =>"ประวัติศาสตร์และวัฒนธรรม"
			]
		];

		$mainCategoryArray = [];

		foreach($mainCategory as $m){
			$mc = new MainCategory();
			$mc->fill($m);
			$mc->save();
			array_push($mainCategoryArray,$mc);
		}

		$this->mainCategories = $mainCategoryArray;

	}

	private function categorySeeder(){

		$c1 = Category::firstOrNew(["name"=>"ข้อมูลทั่วไป","content_type"=>"content"]);
		$c1->save();

		$c2 = Category::firstOrNew(["name"=>"พันธุ์ปลา","content_type"=>"fish"]);
		$c2->save();



		//relationship
		$m1 = $this->mainCategories[0];
		$c1->parent()->associate($m1)->save();

		$m2 = $this->mainCategories[1];
		$c2->parent()->associate($m2)->save();


	}

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->mainCategorySeeder();
		$this->categorySeeder();
	}

}
