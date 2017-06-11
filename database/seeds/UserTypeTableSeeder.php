<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\UserType;
use Carbon\Carbon;

class UserTypeTableSeeder extends Seeder {

	public function run()
	{
		UserType::create(array(
			'name' 		=> 'Employer',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		UserType::create(array(
			'name' 		=> 'Job Seeker',
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}