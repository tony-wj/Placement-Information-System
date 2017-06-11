<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\JobType;
use Carbon\Carbon;

class JobTypeTableSeeder extends Seeder {

	public function run()
	{
		JobType::create(array(
			'type' 		=> 'Full-time',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		JobType::create(array(
			'type' 		=> 'Part-time',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		JobType::create(array(
			'type' 		=> 'Intern',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}