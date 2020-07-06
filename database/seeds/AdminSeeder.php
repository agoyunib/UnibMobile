<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => Hash::make('omwomw'),
            'role' => 'Admin',
            'status' => 'true',
            'created_at' => Carbon::now()
        ]);
    }
}
