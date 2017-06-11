<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Carbon\Carbon;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$employer = DB::table('companies')->select('id')->where('companyName','ABC')->first()->id;
		$em = DB::table('user_types')->select('id')->where('name','Employer')->first()->id;
		$se = DB::table('user_types')->select('id')->where('name','Job Seeker')->first()->id;

		User::create(array(
			'username' 		=> 'employer1',
			'email'		=> 'employer@example.com',
			'password'	=> Hash::make('123456'),
			'firstName' 		=> 'Bill',
			'lastName' 		=> 'Chan',
			'gender' 		=> 'Male',
			'mobile' 		=> '12345678',
			'comp_id' 		=> $employer,
			'user_type' 	=> $em,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		User::create(array(
			'username' 		=> 'seeker1',
			'email'		=> 'seeker1@example.com',
			'password'	=> Hash::make('123456'),
			'firstName' 		=> 'Jian',
			'lastName' 		=> 'Wu',
			'gender' 		=> 'Male',
			'mobile' 		=> '12345678',
			'user_type' 	=> $se,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),

			));

		User::create(array(
			'username' 		=> 'seeker2',
			'email'		=> 'seeker2@example.com',
			'password'	=> Hash::make('123456'),
			'firstName' 		=> 'Tim',
			'lastName' 		=> 'Cook',
			'gender' 		=> 'Male',
			'mobile' 		=> '12345678',
			'user_type' 	=> $se,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),

			));
	}

}