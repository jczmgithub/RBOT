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
                'user_id' => 1,
                'modelo' => 'RBX1',
                'host' => '192.168.1.209'
            ],
            [
                'user_id' => 1,
                'modelo' => 'RBX2',
                'host' => '192.168.1.206'
            ],
        ];

        DB::table('robots')->insert($robots);
    }
}
