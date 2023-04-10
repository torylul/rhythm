<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            [
                'name' => 'Пн',
            ],
            [
                'name' => 'Вт',
            ],
            [
                'name' => 'Ср',
            ],
            [
                'name' => 'Чт',
            ],
            [
                'name' => 'Пт',
            ],
            [
                'name' => 'Сб',
            ],
            [
                'name' => 'Вс',
            ],
        ]);
    }
}
