<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ApplicationStatus;
use Carbon\Carbon;

class ApplicationStatusTableSeeder extends Seeder {
      public function run()
      {
            ApplicationStatus::create(array(
                  'status' =>'success',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            ApplicationStatus::create(array(
                  'status' =>'unsuccess',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            ApplicationStatus::create(array(
                  'status' =>'pending',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));
      }

}
