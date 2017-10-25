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
        $user = [
            'name' => 'User',
            'email' => 'user@mail.com',
            'password' => bcrypt('zubiri')
        ];

        $admin = [
            'name' => 'admin',
            'code' => 'ADMIN77K',
            'password' => bcrypt('zubiri')
        ];
        DB::table('users')->insert($user);
        DB::table('admins')->insert($admin);
    }
}
