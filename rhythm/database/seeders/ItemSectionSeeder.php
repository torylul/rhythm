<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_sections')->insert([
            [
                'item' => 'Как проходят занятия?',
                'description' => 'Каждое занятие в студии танцев RHYTHM начинается с тщательной разминки, после этого идет разбор новой хореографии и повторение пройденной. Танец разбивается на части, каждая из которых разбирается подробно под счёт. Сначала ученики репетируют под медленную музыку, затем темп ускоряется. После завершения разбора всех частей хореография отрабатывается целиком.',
                'section_id' => 1,
            ],
            [
                'item' => 'Как оплачивать занятия?',
                'description' => 'Оплата происходит в самой студии танцев.',
                'section_id' => 1,
            ],
            [
                'item' => 'Что будет, если пропустить занятие?',
                'description' => 'Занятие "сгорит".',
                'section_id' => 1,
            ],
            [
                'item' => 'Сколько обычно уходит времени на изучение танца?',
                'description' => 'Обычно танцы полностью разучиваются за 1.5-2 месяца. Все зависит от сложности хореографии, среднего уровня подготовки учеников.',
                'section_id' => 1,
            ],
            [
                'item' => 'С какого возраста можно заниматься в RHYTHM?',
                'description' => 'У нас нет ограничений по возрасту: все группы смешанных возрастов.',
                'section_id' => 1,
            ],
            [
                'item' => 'Обучаем с любым уровнем подготовки',
                'description' => '',
                'section_id' => 2,
            ],
            [
                'item' => 'Большой выбор групп на любой вкус',
                'description' => '',
                'section_id' => 2,
            ],
            [
                'item' => 'Благоприятная атмосфера',
                'description' => '',
                'section_id' => 2,
            ],
            [
                'item' => 'Студия в нескольких минутах от остановки',
                'description' => '',
                'section_id' => 2,
            ],
            [
                'item' => 'https://youtu.be/fJXD-nbu48c',
                'description' => '',
                'section_id' => 3,
            ],
            [
                'item' => 'https://youtu.be/Nu68Vj_VD2U',
                'description' => '',
                'section_id' => 3,
            ],
            [
                'item' => 'https://youtu.be/RSnmjaXH8LE',
                'description' => '',
                'section_id' => 3,
            ],
            [
              'item' => 'О направлении K-POP COVER DANCE',
              'description' => 'Танцы K-POP — одно из самых молодых хореографических направлений, сформировавшееся в начале XXI века. Современный K-POP COVER DANCE представляет собой симбиоз огромного количества стилей и жанров. На занятиях коллективы не ставят танец «с нуля», а копируют авторские выступления популярных исполнителей, стремясь полностью воспроизвести как движения, так и детали сценических образов — костюмы, аксессуары, макияж. С каждым годом число поклонников К-ПОП танцев растёт. Основным источником вдохновения для них служит творчество корейских и других азиатских групп.',
              'section_id' => 5,
            ],
            [
                'item' => 'photo1.jpg',
                'description' => '',
                'section_id' => 4,
            ],
            [
                'item' => 'photo2.jpg',
                'description' => '',
                'section_id' => 4,
            ],
            [
                'item' => 'photo3.jpg',
                'description' => '',
                'section_id' => 4,
            ],
        ]);
    }
}
