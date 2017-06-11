<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ApplicationInfo;
use Carbon\Carbon;

class ApplicationInfoTableSeeder extends Seeder {

      public function run()
      {
            ApplicationInfo::create(array(
                  'cover_letter' =>'CL1',
                  'resume' =>'cv1',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            ApplicationInfo::create(array(
                  'cover_letter' =>'CL2',
                  'resume' =>'cv2',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            ApplicationInfo::create(array(
                  'cover_letter' =>'CL3',
                  'resume' =>'cv3',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));
      }

}
