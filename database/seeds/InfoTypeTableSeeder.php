<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\InfoType;
use Carbon\Carbon;

class InfoTypeTableSeeder extends Seeder {

	public function run()
	{
		InfoType::create(array(
			'name' 		=> 'Skill',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		InfoType::create(array(
			'name' 		=> 'Education',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		InfoType::create(array(
			'name' 		=> 'Experience',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}