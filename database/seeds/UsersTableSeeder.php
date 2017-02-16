<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  public function run()
    {
        DB::table('users')->insert([
            'name' => 'wagagt',
            'email' => 'wagagt@gmail.com',
            'password' => bcrypt('wagapass'),
        ]);
    }
}
