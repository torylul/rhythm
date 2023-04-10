<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'name' => 'Главная',
            ],
            [
                'name' => 'Прайс',
            ],
            [
                'name' => 'Расписание',
            ],
            [
                'name' => 'Команда',
            ],
            [
                'name' => 'Залы',
            ],
            [
                'name' => 'Вопрос-ответ',
            ],
            [
                'name' => 'Контакты',
            ],
        ]);
    }
}
