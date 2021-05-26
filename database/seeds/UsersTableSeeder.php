<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher',
            'username' => 'Teacher',
            'email' => 'Teacher@example.com',
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'Student',
            'kelas' => 'TKJ 1',
            'tahun_masuk' => '2016',
            'username' => 'Student',
            'email' => 'Student@example.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
