<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

      DB::table('user_types')->delete();
       $this->call('UserTypeTableSeeder');
       
       DB::table('company_fields')->delete();
       $this->call('CompanyFieldTableSeeder');

       DB::table('job_types')->delete();
       $this->call('JobTypeTableSeeder');

       DB::table('companies')->delete();
       $this->call('CompanyTableSeeder');

       DB::table('users')->delete();
       $this->call('UserTableSeeder');

       DB::table('info_types')->delete();
       $this->call('InfoTypeTableSeeder');

       DB::table('personal_infos')->delete();
       $this->call('PersonalInfoTableSeeder');

       DB::table('posts')->delete();
       $this->call('PostTableSeeder');

        DB::table('wishlists')->delete();
       $this->call('WishlistTableSeeder');

        DB::table('application_infos')->delete();
       $this->call('ApplicationInfoTableSeeder');

        DB::table('application_statuses')->delete();
       $this->call('ApplicationStatusTableSeeder');

       DB::table('applications')->delete();
       $this->call('ApplicationTableSeeder');

       DB::table('notifications')->delete();
       $this->call('NotificationTableSeeder');
        Model::reguard();
    }
}
