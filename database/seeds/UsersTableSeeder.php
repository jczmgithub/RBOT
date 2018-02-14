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
                'name' => 'JefeMain',
                'email' => 'a@a.a',
                'password' => bcrypt('a'),
                'tarifa' => 3,
                'credito' => '1234000012340000',
                'confirmado' => 1,
                'owner' => -1
            ],
            [
                'name' => 'Jefe 2',
                'email' => 'admin@admin.com',
                'tarifa' => 1,
                'credito' => '1234000012341111',
                'password' => bcrypt('password'),
                'confirmado' => 1,
                'owner' => -1
            ],
            [
                'name' => 'Jefe 3',
                'email' => 'usu@usu.com',
                'tarifa' => 2,
                'credito' => '1234000012342222',
                'password' => bcrypt('password'),
                'confirmado' => 1,
                'owner' => -1
            ],
            [
                'name' => 'Jefe 4',
                'email' => 'user@mail.com',
                'tarifa' => 3,
                'credito' => '1234000012343333',
                'password' => bcrypt('zubiri'),
                'confirmado' => 1,
                'owner' => -1
            ],
            [
                'name' => 'Usuario Prueba',
                'email' => 'usera1aa@mail.com',
                'tarifa' => 1,
                'credito' => '1234000012343333',
                'password' => bcrypt('zubiri'),
                'confirmado' => 1,
                'owner' => 1
            ],
            [
                'name' => 'Zubiri',
                'email' => 'zubiri@zubiri.com',
                'tarifa' => 1,
                'credito' => '1234000012343333',
                'password' => bcrypt('zubiri'),
                'confirmado' => 1,
                'owner' => -1
            ],
        ];

        DB::table('users')->insert($users);
    }
}
