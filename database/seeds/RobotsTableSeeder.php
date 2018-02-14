<?php

use Illuminate\Database\Seeder;

class RobotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $robots = [
            [
                'name' => 'Robot 1',
                'modelo' => 'RBX1',
                'host' => '192.168.1.209',
                'user_id' => 1
            ],
            [
                'name' => 'Robot 2',
                'modelo' => 'RBX2',
                'host' => '192.168.1.206',
                'user_id' => 1
            ],
            [
                'name' => 'Robot 3',
                'modelo' => 'RBX3',
                'host' => '192.168.1.203',
                'user_id' => 1
            ],
            [
                'name' => 'Robot Zubiri',
                'modelo' => 'ZUBIRI',
                'host' => '192.168.1.220',
                'user_id' => 51
            ]
        ];

        DB::table('robots')->insert($robots);
    }
}
