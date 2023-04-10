<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('halls')->insert([
            [
                'name' => 'Зал №1',
                'image' => 'https://idei.club/uploads/posts/2022-07/1658512619_2-idei-club-p-krasivii-tantsevalnii-zal-interer-krasivo-2.jpg',
                'description' => 'Высокие потолки, кондиционеры, большие окна, зеркала. Мы сделали все, чтобы тебе было максимально комфортно заниматься.',
            ],
            [
                'name' => 'Зал №2',
                'image' => 'https://altay-pol.ru/wp-content/uploads/d/f/f/dff9dce05ea55254a7ade9e344832f73.jpeg',
                'description' => 'Высокие потолки, кондиционеры, большие окна, зеркала. Мы сделали все, чтобы тебе было максимально комфортно заниматься.',
            ],
            [
                'name' => 'Зал №3',
                'image' => 'https://ogorodniku.com/uploads/posts/2023-01/1672970058_ogorodniku-com-p-zal-dlya-tantsev-foto-79.jpg',
                'description' => 'Высокие потолки, кондиционеры, большие окна, зеркала. Мы сделали все, чтобы тебе было максимально комфортно заниматься.',
            ],
        ]);
    }
}
