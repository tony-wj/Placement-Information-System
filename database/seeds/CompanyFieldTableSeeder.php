<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\CompanyField;
use Carbon\Carbon;

class CompanyFieldTableSeeder extends Seeder {

	public function run()
	{
		CompanyField::create(array(
			'name' 		=> 'Construction',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		CompanyField::create(array(
			'name' 		=> 'Finance',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		CompanyField::create(array(
			'name' 		=> 'Consulting',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}