<?php

use Illuminate\Database\Seeder;

class UserRobotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRobot = [
            [
                'user_id' => 1,
                'robot_id' => 1
            ],
            [
                'user_id' => 1,
                'robot_id' => 2
            ],
            [
                'user_id' => 1,
                'robot_id' => 3
            ]

        ];

        DB::table('user_robot')->insert($userRobot);
    }
}
