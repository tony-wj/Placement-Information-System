<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Notification;
use Carbon\Carbon;

class NotificationTableSeeder extends Seeder {

      public function run()
      {
            $receiver1 = DB::table('users')->select('id')->where('username','seeker1')->first()->id;
            $receiver2 = DB::table('users')->select('id')->where('username','seeker2')->first()->id;
            $sender = DB::table('users')->select('id')->where('username','employer1')->first()->id;

            Notification::create(array(
                  'receiver_id' =>$receiver1,
                  'sender_id' =>$sender,
                  'content' =>'The content of notification',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Notification::create(array(
                  'receiver_id' =>$receiver1,
                  'sender_id' =>$sender,
                  'content' =>'The content of notification',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Notification::create(array(
                  'receiver_id' =>$receiver2,
                  'sender_id' =>$sender,
                  'content' =>'The content of notification',
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

      }

}
