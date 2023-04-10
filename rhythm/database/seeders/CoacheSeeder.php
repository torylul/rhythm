<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coaches')->insert([
            [
                'name' => 'Виктория',
                'surname' => 'Сальватор',
                'email' => 'djnaml@gmail.com',
                'image' => 'https://i.pinimg.com/564x/c2/6f/b4/c26fb4d6f8145b745b24129b7dee55e7.jpg',
                'description' => 'Опыт занятий в различных стилях: k-pop cover dance, хип-хоп, джаз-фанк, эстрадный танец, вог и др.
                Танцевальный опыт более 15 лет.
                Опыт k-pop cover dance с 2011 г.
                Опыт преподавания k-pop cover dance более 3ех лет.
                Участие и победы в многочисленных танцевальных конкурсах и фестивалях СПб и Москвы, а также в участие в международных конкурсах K-pop Cover Dance Festival в составе k-pop cover dance команд.
                Опыт выступлений на сцене, участия в съёмках клипов, создания образов и костюмов, детальные знания k-pop музыки, исполнителей и хореографии.',
            ],
            [
                'name' => 'София',
                'surname' => 'Кузнецова',
                'email' => 'sjdaodopod@gmail.com',
                'image' => 'https://i.pinimg.com/564x/2c/a3/74/2ca374c8c386be1fccc8d4048be9c030.jpg',
                'description' => 'Танцевальный опыт более 10 лет в таких направлениях как: hip-hop, jazz-funk, high heels, strip, k-pop cover dance.
                Победитель фестивалей в составе cover dance команд: ЭТО, K-pop Cover Battle, M.Ani.Fest, AniCon Festival.
                Участник таких мероприятий как: KBEE 2018 Global, K-POP Cover Dance Festival, K-POP World Festival, Busan day, Big Asian fest, AVA Expo и др.
                Участник подтанцовки для корейской реп-исполнительницы - Grazy Grace. Принимала участие в съемках индийского фильма студии Ramoji Film City в качестве приглашенного танцора.',
            ],
            [
                'name' => 'Алексанра',
                'surname' => 'Попова',
                'email' => 'sadjald@gmail.com',
                'image' => 'https://i.pinimg.com/564x/ed/8e/76/ed8e7668d91c5e14d7e0200e6b8d6310.jpg',
                'description' => 'В k-pop cover dance с 2010 года.
                Опыт преподавания k-pop с 2015 года.
                Одна из трёх генералов команды X.EAST - двукратных победителей K-Pop Cover Dance Festival in Seoul, победителей в региональном отборе K-Pop World Festival, неоднократно входили в список финалистов и призёров множества российских фестивалей, стали обладателями награды от твиттера Most social group, а так же являлись приглашёнными участниками таких мероприятий как KBEE, FEEL KOREA и K-EXPO.
                Также, кроме k-pop, получила образование по классу классическая хореография (балет), прокачивалась у ведущих мировых танцоров в жанре hip-hop etc.',
            ],
            [
                'name' => 'Екатерина',
                'surname' => 'Ковалева',
                'email' => 'fdsjaklka@gmail.com',
                'image' => 'https://i.pinimg.com/564x/78/b9/b4/78b9b43446c6f2608fc5fe5790f875c0.jpg',
                'description' => 'Опыт занятий в различных стилях: k-pop cover dance, c-pop cover dance, хип-хоп, джаз-фанк, вог, поппинг.
                Танцевальный опыт 5 лет.
                Опыт k-pop cover dance с 2017г.
                Опыт преподавания k-pop cover dance с 2019г.
                Тренер и лидер танцевальной команды ASAP.
                ГРАН-ПРИ CIBERMAF2022 + Выбор зрителей, Fire academy 2.0: 1 место в мужской номинации, Fire academy 3.0: 2 место в мужской номинации; На весеннем Idolcon2022 ASAP заняли 3 место в No Rules и взяли приз зрительских симпатий; Anicon 1 место в мужской номинации + приз зрительских симпатий; Участница: ЭТО2019, IdolCon2022, CoverLand2021 и разных многочисленных пати СПб.
                Опыт выступлений на сцене и участия в съёмках клипов, а также танцевальных постановок 20+ человек, выступления на радио, на городских и студенческих мероприятиях(ночь музеев, взлетная полоса).',
            ],
            [
                'name' => 'Адель',
                'surname' => 'Куликова',
                'email' => 'dfsjakas@gmail.com',
                'image' => 'https://i.pinimg.com/564x/68/75/eb/6875eb6af36f9a93bfadb3533025792d.jpg',
                'description' => 'Ведущее направление - k-pop cover dance.
                Опыт танца в различных стилях: k-pop cover dance, хип-хоп, ваакинг, брейкинг, джаз-фанк, локинг, крамп.
                Танцевальный опыт более 15 лет.
                Опыт k-pop cover dance с 2019 г.
                Опыт преподавания танца более трех лет.
                Опыт преподавания k-pop cover dance более двух лет.
                Участие в многочисленных танцевальных конкурсах и фестивалях Санкт-Петербурга.',
            ],
            [
                'name' => 'Арина',
                'surname' => 'Беляева',
                'email' => 'pldpldad@gmail.com',
                'image' => 'https://i.pinimg.com/564x/87/b2/a7/87b2a7b29ccc3edf100dcf5ef1ec4adc.jpg',
                'description' => 'Опыт преподавания около 3 лет.
                Ведущее направление: K-POP.
                Танцевальный опыт K-POP хореографии около 10лет. Являюсь участником/хореографом в команде Gentlemans.
                Большой опыт постановки номеров в различных стилях, полная подготовка номера от хорео до образов.
                Обучалась актёрскому мастерству и различным танц. стилям: хип-хоп, контемп, джаз-фанк, локинг, папинг, к-поп каверденс.
                Участник и призёр различных баттлов, пати и фестивалей СПБ, Новосибирска и др. городов Сибири.',
            ],
        ]);
    }
}
