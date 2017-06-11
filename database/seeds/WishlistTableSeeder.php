<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Wishlist;
use Carbon\Carbon;

class WishlistTableSeeder extends Seeder {

      public function run()
      {
            $user = DB::table('users')->select('id')->where('username','seeker1')->first()->id;
            $post1 = DB::table('posts')->select('id')->where('name','Accountant')->first()->id;
            $post2 = DB::table('posts')->select('id')->where('name','Engineer')->first()->id;
            $post3 = DB::table('posts')->select('id')->where('name','Analyst')->first()->id;
            Wishlist::create(array(
                  'user_id' =>$user,
                  'post_id' =>$post1,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Wishlist::create(array(
                  'user_id' =>$user,
                  'post_id' =>$post2,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));

            Wishlist::create(array(
                  'user_id' =>$user,
                  'post_id' =>$post3,
                  'created_at'=> Carbon::now(),
                  'updated_at'=> Carbon::now(),
                  ));
      }

}
