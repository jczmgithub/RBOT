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
                'modelo' => 'RBX1',
                'host' => '192.168.1.209'
            ],
            [
                'modelo' => 'RBX2',
                'host' => '192.168.1.206'
            ],
            [
                'modelo' => 'RBX3',
                'host' => '192.168.1.203'
            ]
        ];

        DB::table('robots')->insert($robots);
    }
}
