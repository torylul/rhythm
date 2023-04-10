<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [
                'name' => 'Kitty',
                'count' => 4,
                'coach_id' => 1,
            ],
            [
                'name' => 'Moon',
                'count' => 3,
                'coach_id' => 2,
            ],
            [
                'name' => 'Light',
                'count' => 2,
                'coach_id' => 3,
            ],
        ]);
    }
}
