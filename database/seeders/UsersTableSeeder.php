<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
# added by Harshdeep 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Harshdeep S',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123')
        ]);
    }
}
