<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'name' => 'mehdi fayech',
          'email' =>'mehdi@gmail.com',
          'password' =>Hash::make('12345'),
          'image' =>'man.jpg'
        ]);
    }
}
