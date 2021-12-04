<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    public function run(){
      DB::table('users')->insert([
       'email'     => 'admin@admin.com',
       'password'  => bcrypt('admin'),
       'role'      => 1
     ]);
   }
}
