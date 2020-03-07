<?php

use Illuminate\Database\Seeder;
use  App\User;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      User::create([
          'name' => 'admin',
          'email' => 'admin@haintt.com',
          'password' => bcrypt('123123')
      ]);
    }
}
