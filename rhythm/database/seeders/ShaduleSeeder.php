<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShaduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shadules')->insert([
            [
                'time_start' => new \DateTime('2023-01-23 16:00:00'),
                'time_end' => new \DateTime('2023-01-23 17:00:00'),
                'group_id' => 1,
                'day_id' => 1,
                'hall_id' => 1,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 17:00:00'),
                'time_end' => new \DateTime('2023-01-23 18:00:00'),
                'group_id' => 2,
                'day_id' => 1,
                'hall_id' => 1,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 18:00:00'),
                'time_end' => new \DateTime('2023-01-23 19:00:00'),
                'group_id' => 1,
                'day_id' => 2,
                'hall_id' => 2,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 18:00:00'),
                'time_end' => new \DateTime('2023-01-23 19:00:00'),
                'group_id' => 1,
                'day_id' => 3,
                'hall_id' => 1,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 16:00:00'),
                'time_end' => new \DateTime('2023-01-23 17:00:00'),
                'group_id' => 1,
                'day_id' => 4,
                'hall_id' => 3,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 17:00:00'),
                'time_end' => new \DateTime('2023-01-23 18:00:00'),
                'group_id' => 3,
                'day_id' => 5,
                'hall_id' => 1,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 18:00:00'),
                'time_end' => new \DateTime('2023-01-23 19:00:00'),
                'group_id' => 2,
                'day_id' => 5,
                'hall_id' => 2,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 18:00:00'),
                'time_end' => new \DateTime('2023-01-23 19:00:00'),
                'group_id' => 1,
                'day_id' => 6,
                'hall_id' => 2,
            ],
            [
                'time_start' => new \DateTime('2023-01-23 18:00:00'),
                'time_end' => new \DateTime('2023-01-23 19:00:00'),
                'group_id' => 3,
                'day_id' => 6,
                'hall_id' => 2,
            ],
        ]);
    }
}
