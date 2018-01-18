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
                'tarifas' => 3,
                'credito' => '1234000012340000',
                'confirmado' => 1
            ],
            [
                'name' => 'usuAdmin',
                'email' => 'admin@admin.com',
                'tarifas' => 1,
                'credito' => '1234000012341111',
                'password' => bcrypt('password'),
                'confirmado' => 1
            ],
            [
                'name' => 'usuUsu',
                'email' => 'usu@usu.com',
                'tarifas' => 2,
                'credito' => '1234000012342222',
                'password' => bcrypt('password'),
                'confirmado' => 1
            ],
            [
                'name' => 'User',
                'email' => 'user@mail.com',
                'tarifas' => 3,
                'credito' => '1234000012343333',
                'password' => bcrypt('zubiri'),
                'confirmado' => 1
            ],
        ];

        DB::table('users')->insert($users);
    }
}
