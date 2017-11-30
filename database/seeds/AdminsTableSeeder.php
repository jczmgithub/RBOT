<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'name' => 'A',
                'code' => 'a',
                'password' => bcrypt('a')
            ],
            [
                'name' => 'Zubiri',
                'code' => 'zubiri',
                'password' => bcrypt('zubiri')
            ],
            [
                'name' => 'admin',
                'code' => 'ADMIN77K',
                'password' => bcrypt('zubiri')
            ],
        ];

        DB::table('admins')->insert($admins);
    }
}
