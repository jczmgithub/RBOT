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
        $users = [
            [
                'name' => 'A',
                'email' => 'a@a.a',
                'password' => bcrypt('a'),
                'confirmado' => 1
            ],
            [
                'name' => 'usuAdmin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
                'confirmado' => 1
            ],
            [
                'name' => 'usuUsu',
                'email' => 'usu@usu.com',
                'password' => bcrypt('password'),
                'confirmado' => 1
            ],
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'password' => bcrypt('zubiri'),
                'confirmado' => 1
            ],
        ];

        DB::table('users')->insert($users);
    }
}
