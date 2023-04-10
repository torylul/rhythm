<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('structures')->insert([
            [
                'group_id' => 1,
                'user_id' => 1,
            ],
            [
                'group_id' => 1,
                'user_id' => 2,
            ],
            [
                'group_id' => 1,
                'user_id' => 3,
            ],
            [
                'group_id' => 1,
                'user_id' => 4,
            ],
            [
                'group_id' => 2,
                'user_id' => 5,
            ],
            [
                'group_id' => 2,
                'user_id' => 6,
            ],
            [
                'group_id' => 3,
                'user_id' => 7,
            ],
            [
                'group_id' => 3,
                'user_id' => 8,
            ],
            [
                'group_id' => 3,
                'user_id' => 9,
            ],
        ]);
    }
}
