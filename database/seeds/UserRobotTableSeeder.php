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
                'robot_id' => 11
            ],
            [
                'user_id' => 1,
                'robot_id' => 21
            ],
            [
                'user_id' => 11,
                'robot_id' => 31
            ],
            [
                'user_id' => 51,
                'robot_id' => 31
            ]

        ];

        DB::table('user_robot')->insert($userRobot);
    }
}
