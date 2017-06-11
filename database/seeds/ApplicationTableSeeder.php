<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Application;
use Carbon\Carbon;

class ApplicationTableSeeder extends Seeder {

      public function run()
      {
            $user = DB::table('users')->select('id')->where('username','seeker1')->first()->id;
            $post1 = DB::table('posts')->select('id')->where('name','Accountant')->first()->id;
            $post2 = DB::table('posts')->select('id')->where('name','Engineer')->first()->id;
            $post3 = DB::table('posts')->select('id')->where('name','Analyst')->first()->id;
            $info1 = DB::table('application_infos')->select('id')->where('cover_letter','CL1')->first()->id;
            $info2 = DB::table('application_infos')->select('id')->where('cover_letter','CL2')->first()->id;
            $info3 = DB::table('application_infos')->select('id')->where('cover_letter','CL3')->first()->id;
            $success = DB::table('application_statuses')->select('id')->where('status','success')->first()->id;
            $unsuccess = DB::table('application_statuses')->select('id')->where('status','unsuccess')->first()->id;
            
            Application::create(array(
                  'user_id' =>$user,
                  'post_id' =>$post1,
                  'status_id' =>$success,
                  'info_id' =>$info1,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Application::create(array(
                  'user_id' => $user,
                  'post_id' =>$post2,
                  'status_id' =>$success,
                  'info_id' =>$info2,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Application::create(array(
                  'user_id' => $user,
                  'post_id' =>$post3,
                  'status_id' =>$success,
                  'info_id' =>$info3,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));
      }

}
