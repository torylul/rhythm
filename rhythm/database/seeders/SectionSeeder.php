<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            [
                'name' => 'Часто задаваемые вопросы.',
                'page_id' => 6,
            ],
            [
                'name' => 'Преимущества.',
                'page_id' => 1,
            ],
            [
                'name' => 'Видео.',
                'page_id' => 1,
            ],
            [
                'name' => 'Фотографии.',
                'page_id' => 1,
            ],
            [
                'name' => 'О направлении.',
                'page_id' => 1,
            ],
            [
                'name' => 'Фото в первом блоке.',
                'page_id' => 1,
            ],
        ]);
    }
}
