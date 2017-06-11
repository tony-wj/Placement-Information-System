<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Post;
use Carbon\Carbon;

class PostTableSeeder extends Seeder {

      public function run()
      {
            $user = DB::table('users')->select('id')->where('username','employer1')->first()->id;
            $intern = DB::table('job_types')->select('id')->where('type','Intern')->first()->id;
            Post::create(array(
                  'startTime'             => Carbon::now()->addMonths(3),
                  'endTime' =>Carbon::now()->addMonths(6),
                  'name' =>'Accountant',
                  'description' =>'some decription about the job',
                  'location' =>'Hong Kong',
                  'vacancy' =>'2',
                  'salary' =>'10000',
                  'post_by' =>$user,
                  'job_type' =>$intern,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Post::create(array(
                  'startTime'             => Carbon::now()->addMonths(3),
                  'endTime' =>Carbon::now()->addMonths(6),
                  'name' =>'Engineer',
                  'description' =>'some decription about the job',
                  'location' =>'Hong Kong',
                  'vacancy' =>'2',
                  'salary' =>'10000',
                  'post_by' => $user,
                  'job_type' =>$intern,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Post::create(array(
                  'startTime'             => Carbon::now()->addMonths(3),
                  'endTime' =>Carbon::now()->addMonths(6),
                  'name' =>'Analyst',
                  'description' =>'some decription about the job',
                  'location' =>'Hong Kong',
                  'vacancy' =>'2',
                  'salary' =>'10000',
                  'post_by' => $user,
                  'job_type' =>$intern,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));
      }

}

