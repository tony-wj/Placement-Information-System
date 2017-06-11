<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Company;
use Carbon\Carbon;

class CompanyTableSeeder extends Seeder {

	public function run()
	{
		$construction = DB::table('company_fields')->select('id')->where('name','Construction')->first()->id;
		$finance = DB::table('company_fields')->select('id')->where('name','Finance')->first()->id;
		$consulting = DB::table('company_fields')->select('id')->where('name','Consulting')->first()->id;

		Company::create(array(
			'companyName' 		=> 'ABC',
			'website'   =>'abc.com',
			'field_id'  => $construction,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Company::create(array(
			'companyName' 		=> 'NNN',
			'website'   =>'nnn.com',
			'field_id'  => $finance,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));

		Company::create(array(
			'companyName' 		=> 'KOI',
			'website'   =>'koi.com',
			'field_id'  => $consulting,
			'created_at'=> Carbon::now(),
			'updated_at'=> Carbon::now(),
			));
	}

}
