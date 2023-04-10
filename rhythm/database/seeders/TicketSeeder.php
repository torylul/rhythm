<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'name' => 'Абонемент №1',
                'price' => '600',
                'count' => '4',
                'description' => 'Абонемент на 4 занятия по 60 минут.',
            ],
            [
                'name' => 'Абонемент №2',
                'price' => '1200',
                'count' => '8',
                'description' => 'Абонемент на 8 занятий по 60 минут.',
            ],
            [
                'name' => 'Абонемент №3',
                'price' => '1800',
                'count' => '12',
                'description' => 'Абонемент на 12 занятий по 60 минут.',
            ],
            [
                'name' => 'Абонемент №4',
                'price' => '2400',
                'count' => '16',
                'description' => 'Абонемент на 16 занятий по 60 минут.',
            ],
        ]);
    }
}
