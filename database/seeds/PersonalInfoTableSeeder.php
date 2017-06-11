<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PersonalInfo;
use Carbon\Carbon;

class PersonalInfoTableSeeder extends Seeder {

	public function run()
	{
		$user = DB::table('users')->select('id')->where('username','seeker1')->first()->id;
		$skill = DB::table('info_types')->select('id')->where('name','Skill')->first()->id;
		$experience = DB::table('info_types')->select('id')->where('name','Experience')->first()->id;
		$education = DB::table('info_types')->select('id')->where('name','Education')->first()->id;
		PersonalInfo::create(array(
			'name' => 'MircroSoft',
			'description' 		=> 'some description about skill',
			'user_id' =>$user,
			'type_id' =>$skill,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		PersonalInfo::create(array(
			'name' => 'BEng(IETM)',
			'description' 		=> 'some description about the degree',
			'user_id' =>$user,
			'type_id' =>$education,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		PersonalInfo::create(array(
			'name' => 'Part Time RA',
			'description' 		=> 'some description about the experience',
			'user_id' =>$user,
			'type_id' =>$experience,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}
