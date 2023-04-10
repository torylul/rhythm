-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 10 2023 г., 14:45
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_rhythm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `ticket_id` bigint UNSIGNED NOT NULL,
  `status_id` bigint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `accounts`
--

INSERT INTO `accounts` (`id`, `created_at`, `updated_at`, `user_id`, `ticket_id`, `status_id`) VALUES
(1, '2023-03-20', '2023-03-22', 1, 1, 2),
(2, '2023-03-21', '2023-03-21', 1, 2, 1),
(3, '2023-03-21', '2023-03-21', 1, 3, 1),
(4, '2023-03-21', '2023-03-21', 2, 4, 1),
(5, '2023-03-21', '2023-03-21', 3, 2, 1),
(6, '2023-03-21', '2023-03-27', 4, 1, 1),
(7, '2023-03-21', '2023-03-27', 6, 1, 2),
(8, '2023-03-21', '2023-03-27', 7, 1, 2),
(9, '2023-03-21', '2023-03-21', 8, 1, 1),
(10, '2023-03-21', '2023-03-21', 9, 1, 1),
(11, '2023-03-21', '2023-03-21', 1, 4, 1),
(12, '2023-03-23', '2023-03-23', 7, 2, 1),
(13, '2023-03-27', '2023-03-27', 8, 2, 1),
(14, '2023-04-06', '2023-04-06', 12, 1, 1),
(15, '2023-04-06', '2023-04-06', 12, 4, 1),
(16, '2023-04-06', '2023-04-06', 12, 4, 1),
(17, '2023-04-09', '2023-04-09', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `account_dates`
--

CREATE TABLE `account_dates` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `account_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `account_dates`
--

INSERT INTO `account_dates` (`id`, `date`, `account_id`) VALUES
(1, '2023-03-21', 1),
(2, '2023-03-20', 1),
(3, '2023-03-22', 1),
(4, '2023-03-17', 1),
(6, '2023-03-18', 6),
(7, '2023-03-19', 6),
(8, '2023-03-20', 6),
(9, '2023-03-21', 6),
(10, '2023-03-16', 7),
(11, '2023-03-18', 7),
(12, '2023-03-20', 7),
(14, '2023-03-09', 8),
(15, '2023-03-11', 8),
(16, '2023-03-13', 8),
(18, '2023-03-18', 11),
(19, '2023-03-19', 11),
(20, '2023-03-22', 11),
(21, '2023-03-23', 11),
(22, '2023-03-24', 11),
(23, '2023-03-25', 11),
(24, '2023-03-26', 11),
(25, '2023-03-16', 11),
(26, '2023-03-14', 8),
(27, '2023-03-22', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@inbox.ru', '$2y$10$NCKqdijdJYir1JZCy871vOE7uPcl7PWgu4bsDNi36Mwj0ah.0vcMq');

-- --------------------------------------------------------

--
-- Структура таблицы `coaches`
--

CREATE TABLE `coaches` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `coaches`
--

INSERT INTO `coaches` (`id`, `name`, `surname`, `email`, `image`, `description`) VALUES
(1, 'Виктория', 'Сальваторе', 'salvic@gmail.com', 'http://127.0.0.1:8000/storage/coach//4biPxGp1r3otEhCWYzFQy0qTpRhM9NN8pxiOhlP3.png', 'Опыт занятий в различных стилях: k-pop cover dance, хип-хоп, джаз-фанк, эстрадный танец, вог и др.\r\n                Танцевальный опыт более 15 лет.\r\n                Опыт k-pop cover dance с 2011 г.\r\n                Опыт преподавания k-pop cover dance более 3ех лет.\r\n                Участие и победы в многочисленных танцевальных конкурсах и фестивалях СПб и Москвы, а также в участие в международных конкурсах K-pop Cover Dance Festival в составе k-pop cover dance команд.\r\n                Опыт выступлений на сцене, участия в съёмках клипов, создания образов и костюмов, детальные знания k-pop музыки, исполнителей и хореографии.'),
(2, 'София', 'Кузнецова', 'sjdaodopod@gmail.com', 'http://127.0.0.1:8000/storage/coach//HmZn36cFKr6Q1UMCv4cWy8uIrdRGdUqc4QUGeZsr.png', 'Танцевальный опыт более 10 лет в таких направлениях как: hip-hop, jazz-funk, high heels, strip, k-pop cover dance.\r\n                Победитель фестивалей в составе cover dance команд: ЭТО, K-pop Cover Battle, M.Ani.Fest, AniCon Festival.\r\n                Участник таких мероприятий как: KBEE 2018 Global, K-POP Cover Dance Festival, K-POP World Festival, Busan day, Big Asian fest, AVA Expo и др.\r\n                Участник подтанцовки для корейской реп-исполнительницы - Grazy Grace. Принимала участие в съемках индийского фильма студии Ramoji Film City в качестве приглашенного танцора.'),
(3, 'Александра', 'Попова', 'sadjald@gmail.com', 'http://127.0.0.1:8000/storage/coach//GVCXwa6zEhmU1HLs2utujDKV1Yct6oUQ1RBWJU5m.png', 'В k-pop cover dance с 2010 года.\r\n                Опыт преподавания k-pop с 2015 года.\r\n                Одна из трёх генералов команды X.EAST - двукратных победителей K-Pop Cover Dance Festival in Seoul, победителей в региональном отборе K-Pop World Festival, неоднократно входили в список финалистов и призёров множества российских фестивалей, стали обладателями награды от твиттера Most social group, а так же являлись приглашёнными участниками таких мероприятий как KBEE, FEEL KOREA и K-EXPO.\r\n                Также, кроме k-pop, получила образование по классу классическая хореография (балет), прокачивалась у ведущих мировых танцоров в жанре hip-hop etc.'),
(4, 'Екатерина', 'Ковалева', 'fdsjaklka@gmail.com', 'http://127.0.0.1:8000/storage/coach//d93gkZWD6moTedXTInAV82KrhXbwXPRhxHyJZRCc.png', 'Опыт занятий в различных стилях: k-pop cover dance, c-pop cover dance, хип-хоп, джаз-фанк, вог, поппинг.\r\n                Танцевальный опыт 5 лет.\r\n                Опыт k-pop cover dance с 2017г.\r\n                Опыт преподавания k-pop cover dance с 2019г.\r\n                Тренер и лидер танцевальной команды ASAP.\r\n                ГРАН-ПРИ CIBERMAF2022 + Выбор зрителей, Fire academy 2.0: 1 место в мужской номинации, Fire academy 3.0: 2 место в мужской номинации; На весеннем Idolcon2022 ASAP заняли 3 место в No Rules и взяли приз зрительских симпатий; Anicon 1 место в мужской номинации + приз зрительских симпатий; Участница: ЭТО2019, IdolCon2022, CoverLand2021 и разных многочисленных пати СПб.\r\n                Опыт выступлений на сцене и участия в съёмках клипов, а также танцевальных постановок 20+ человек, выступления на радио, на городских и студенческих мероприятиях(ночь музеев, взлетная полоса).'),
(5, 'Адель', 'Куликова', 'dfsjakas@gmail.com', 'http://127.0.0.1:8000/storage/coach//0FdOwY4HSrDdMvX4Dlmb6iGF2fw08lVVeGEIR83M.png', 'Ведущее направление - k-pop cover dance.\r\n                Опыт танца в различных стилях: k-pop cover dance, хип-хоп, ваакинг, брейкинг, джаз-фанк, локинг, крамп.\r\n                Танцевальный опыт более 15 лет.\r\n                Опыт k-pop cover dance с 2019 г.\r\n                Опыт преподавания танца более трех лет.\r\n                Опыт преподавания k-pop cover dance более двух лет.\r\n                Участие в многочисленных танцевальных конкурсах и фестивалях Санкт-Петербурга.'),
(6, 'Арина', 'Беляева', 'pldpldad@gmail.com', 'http://127.0.0.1:8000/storage/coach//0aYPmihjUU3CJHZLkmCrOq79yfEiLVPMOyeaz3eL.png', 'Опыт преподавания около 3 лет.\r\n                Ведущее направление: K-POP.\r\n                Танцевальный опыт K-POP хореографии около 10лет. Являюсь участником/хореографом в команде Gentlemans.\r\n                Большой опыт постановки номеров в различных стилях, полная подготовка номера от хорео до образов.\r\n                Обучалась актёрскому мастерству и различным танц. стилям: хип-хоп, контемп, джаз-фанк, локинг, папинг, к-поп каверденс.\r\n                Участник и призёр различных баттлов, пати и фестивалей СПБ, Новосибирска и др. городов Сибири.');

-- --------------------------------------------------------

--
-- Структура таблицы `days`
--

CREATE TABLE `days` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `days`
--

INSERT INTO `days` (`id`, `name`) VALUES
(1, 'Пн'),
(2, 'Вт'),
(3, 'Ср'),
(4, 'Чт'),
(5, 'Пт'),
(6, 'Сб'),
(7, 'Вс');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` decimal(10,0) DEFAULT '0',
  `coach_id` bigint UNSIGNED NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `count`, `coach_id`, `created_at`) VALUES
(1, 'Kitty', '4', 1, '2023-03-15'),
(2, 'Moon', '2', 2, '2023-03-15'),
(3, 'Light', '4', 3, '2023-03-15'),
(5, 'Cutie', '0', 4, '2023-03-23');

-- --------------------------------------------------------

--
-- Структура таблицы `halls`
--

CREATE TABLE `halls` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `halls`
--

INSERT INTO `halls` (`id`, `name`, `image`, `description`) VALUES
(1, 'Зал №1', 'https://idei.club/uploads/posts/2022-07/1658512619_2-idei-club-p-krasivii-tantsevalnii-zal-interer-krasivo-2.jpg', 'Высокие потолки, кондиционеры, большие окна, зеркала. Мы сделали все, чтобы тебе было максимально комфортно заниматься.'),
(2, 'Зал №2', 'https://altay-pol.ru/wp-content/uploads/d/f/f/dff9dce05ea55254a7ade9e344832f73.jpeg', 'Высокие потолки, кондиционеры, большие окна, зеркала. Мы сделали все, чтобы тебе было максимально комфортно заниматься.'),
(3, 'Зал №3', 'http://127.0.0.1:8000/storage/hall/Hj3HMko2T5yHRDAzqIhZd2nFSsXRjk0TZuRxKsuo.jpg', 'Высокие потолки, кондиционеры, большие окна, зеркала. Мы сделали все, чтобы тебе было максимально комфортно заниматься.');

-- --------------------------------------------------------

--
-- Структура таблицы `item_sections`
--

CREATE TABLE `item_sections` (
  `id` bigint UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `section_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `item_sections`
--

INSERT INTO `item_sections` (`id`, `item`, `description`, `section_id`) VALUES
(1, 'Как проходят занятия?', 'Каждое занятие в студии танцев RHYTHM начинается с тщательной разминки, после этого идет разбор новой хореографии и повторение пройденной. Танец разбивается на части, каждая из которых разбирается подробно под счёт. Сначала ученики репетируют под медленную музыку, затем темп ускоряется. После завершения разбора всех частей хореография отрабатывается целиком.', 1),
(2, 'Как оплачивать занятия?', 'Оплата происходит в самой студии танцев.', 1),
(3, 'Что будет, если пропустить занятие?', 'Занятие \"сгорит\".', 1),
(4, 'Сколько обычно уходит времени на изучение танца?', 'Обычно танцы полностью разучиваются за 1.5-2 месяца. Все зависит от сложности хореографии, среднего уровня подготовки учеников.', 1),
(5, 'С какого возраста можно заниматься в RHYTHM?', 'У нас нет ограничений по возрасту: все группы смешанных возрастов.', 1),
(6, 'Обучаем с любым уровнем подготовки', '', 2),
(7, 'Большой выбор групп на любой вкус', '', 2),
(8, 'Благоприятная атмосфера', '', 2),
(9, 'Студия в нескольких минутах от остановки', '', 2),
(10, 'https://youtu.be/fJXD-nbu48c', '', 3),
(11, 'https://youtu.be/Nu68Vj_VD2U', '', 3),
(12, 'https://youtu.be/RSnmjaXH8LE', '', 3),
(13, 'О направлении K-POP COVER DANCE', 'Танцы K-POP — одно из самых молодых хореографических направлений, сформировавшееся в начале XXI века. Современный K-POP COVER DANCE представляет собой симбиоз огромного количества стилей и жанров. На занятиях коллективы не ставят танец «с нуля», а копируют авторские выступления популярных исполнителей, стремясь полностью воспроизвести как движения, так и детали сценических образов — костюмы, аксессуары, макияж. С каждым годом число поклонников К-ПОП танцев растёт. Основным источником вдохновения для них служит творчество корейских и других азиатских групп.', 5),
(18, 'http://127.0.0.1:8000/storage/image_more/FgD6DLgnrl0wQymsiFnPiBws0lqCl4JQ7io5pfO1.webp', NULL, 6),
(19, 'Телефон: +7 (950) 320-32-42', NULL, 7),
(20, 'Адрес: г. Челябинск, ул. Горького, д. 38', NULL, 7);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(321, '2014_10_12_000000_create_users_table', 1),
(322, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(323, '2023_02_26_083733_create_coaches_table', 1),
(324, '2023_02_26_083858_create_days_table', 1),
(325, '2023_02_26_083922_create_halls_table', 1),
(326, '2023_02_26_084002_create_statuses_table', 1),
(327, '2023_02_26_084014_create_admins_table', 1),
(328, '2023_02_26_084110_create_tickets_table', 1),
(329, '2023_02_26_084130_create_accounts_table', 1),
(330, '2023_02_26_084140_create_account_dates_table', 1),
(331, '2023_02_26_084152_create_groups_table', 1),
(332, '2023_02_26_084216_create_shadules_table', 1),
(333, '2023_02_26_084238_create_structures_table', 1),
(334, '2023_02_27_133748_create_pages_table', 1),
(335, '2023_02_27_133806_create_sections_table', 1),
(336, '2023_02_27_133836_create_item_sections_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'Главная'),
(2, 'Прайс'),
(3, 'Расписание'),
(4, 'Команда'),
(5, 'Залы'),
(6, 'Вопрос-ответ'),
(7, 'Контакты');

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `name`, `page_id`) VALUES
(1, 'Часто задаваемые вопросы.', 6),
(2, 'Преимущества.', 1),
(3, 'Видео.', 1),
(4, 'Фотографии.', 1),
(5, 'О направлении.', 1),
(6, 'Фото в первом блоке.', 1),
(7, 'Контактная информация', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `shadules`
--

CREATE TABLE `shadules` (
  `id` bigint UNSIGNED NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `group_id` bigint UNSIGNED NOT NULL,
  `day_id` bigint UNSIGNED NOT NULL,
  `hall_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `shadules`
--

INSERT INTO `shadules` (`id`, `time_start`, `time_end`, `group_id`, `day_id`, `hall_id`) VALUES
(1, '16:00:00', '17:00:00', 1, 1, 2),
(2, '17:00:00', '18:00:00', 2, 1, 1),
(3, '18:00:00', '19:00:00', 1, 2, 2),
(4, '18:00:00', '19:00:00', 3, 3, 1),
(5, '16:00:00', '17:00:00', 1, 4, 3),
(6, '17:00:00', '18:00:00', 3, 5, 1),
(7, '18:00:00', '19:00:00', 2, 5, 2),
(9, '18:00:00', '19:00:00', 3, 6, 2),
(11, '17:00:00', '18:00:00', 2, 6, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Действителен'),
(2, 'Недействителен');

-- --------------------------------------------------------

--
-- Структура таблицы `structures`
--

CREATE TABLE `structures` (
  `id` bigint UNSIGNED NOT NULL,
  `group_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `structures`
--

INSERT INTO `structures` (`id`, `group_id`, `user_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(5, 2, 1),
(6, 2, 6),
(7, 3, 7),
(8, 3, 8),
(9, 3, 9),
(10, 3, 1),
(11, 1, 12);

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `count` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `price`, `count`, `description`) VALUES
(1, 'Абонемент №1', '600.00', 4, 'Абонемент на 4 занятия по 60 минут.'),
(2, 'Абонемент №2', '1200.00', 8, 'Абонемент на 8 занятий по 60 минут.'),
(3, 'Абонемент №3', '1800.00', 12, 'Абонемент на 12 занятий по 60 минут.'),
(4, 'Абонемент №4', '2400.00', 16, 'Абонемент на 16 занятий по 60 минут.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `number`, `password`) VALUES
(1, 'Виктория', 'Долгунина', 'dolgunina@inbox.ru', '89507250381', '$2y$10$iCAUC46GzGzyHQMhKWK3lOQmxH60GGh.B0YY6l84H5b3nagmbA/9i'),
(2, 'Арина', 'Давыдова', 'renren@inbox.ru', '89362745059', '$2y$10$CB95GAVnbIZigktFGJyOP.gdKsli3avpSH6AModXpBQSNMXrcsZpK'),
(3, 'Давид', 'Андреев', 'lonplat@gmail.com', '89434902717', '$2y$10$Dq2TXHhfo9TQD4wLv4RtquYLrPHGzqIPp4kNSMBaB/UOZbmmsIE56'),
(4, 'Ева', 'Королева', 'max00@inbox.ru', '89204728499', '$2y$10$n2698UJZDHTJbbrSNy/3Ee82IRhE7pxSsWEejSxcDLrDVFJ5XCqay'),
(5, 'Амина', 'Громова', 'amina@inbox.ru', '89304053849', '$2y$10$kXzLQkqTwRY6bEb01igSLOfd0wEqNo4Bh4eK8x/ES9fwaSHZ07vka'),
(6, 'Валерия', 'Фомина', 'jujuju@gmail.com', '89503759395', '$2y$10$H6iV9KZM/OSN1sGrJ4xcUOxmlLiWKYx2GGO3UVoVomsbNOwyT7Ldu'),
(7, 'Кира', 'Архипова', 'kirkira@gmail.com', '89502744930', '$2y$10$OnlA3Uu/FjoNDahkUIL8I..RLzUzDJzp3jP10rfMI17Td4SRy3.Xe'),
(8, 'Елизавета', 'Коршунова', 'eliza@gmail.com', '89529489302', '$2y$10$cAAbIBy8ue9FmXSW5oD8gurO3iWfVR23YBiKW.O6IaCE0I0/XkQoG'),
(9, 'Максим', 'Васильев', 'kuzkuz@inbox.ru', '89503578493', '$2y$10$OsyWcy0m19gatAR3iXGGneW2HJCGDFuT214bEEhgQvrFg9Dv1QdOu'),
(10, 'Александр', 'Морозов', 'kdlslfwud@gmail.com', '89502748490', '$2y$10$xqTW0jYBOvYp0cWXTMYdAe9bzAnXFweN84TYyI8D46O5yA.qzOAyu'),
(11, 'Виолета', 'Кузьмина', 'violet@inbox.ru', '89453628401', '$2y$10$T/CVWriuJfw.ASnjy7W.qe88co39QE8WRkzSv1Z1mP0a6Id4m9U2K'),
(12, 'Елена', 'Валеева', 'lnlnln@inbox.ru', '89506379911', '$2y$10$fSb0QWeKPfKQTFDg0qci4uuRse1ShrF28t8WOBl0s1DVsdthKgw.m');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accounts_user_id_foreign` (`user_id`),
  ADD KEY `accounts_ticket_id_foreign` (`ticket_id`),
  ADD KEY `accounts_status_id_foreign` (`status_id`);

--
-- Индексы таблицы `account_dates`
--
ALTER TABLE `account_dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_dates_account_id_foreign` (`account_id`);

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Индексы таблицы `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coaches_email_unique` (`email`);

--
-- Индексы таблицы `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_coach_id_foreign` (`coach_id`);

--
-- Индексы таблицы `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `item_sections`
--
ALTER TABLE `item_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_sections_section_id_foreign` (`section_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_page_id_foreign` (`page_id`);

--
-- Индексы таблицы `shadules`
--
ALTER TABLE `shadules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shadules_group_id_foreign` (`group_id`),
  ADD KEY `shadules_day_id_foreign` (`day_id`),
  ADD KEY `shadules_hall_id_foreign` (`hall_id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `structures_group_id_foreign` (`group_id`),
  ADD KEY `structures_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_number_unique` (`number`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `account_dates`
--
ALTER TABLE `account_dates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `days`
--
ALTER TABLE `days`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `halls`
--
ALTER TABLE `halls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `item_sections`
--
ALTER TABLE `item_sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `shadules`
--
ALTER TABLE `shadules`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `structures`
--
ALTER TABLE `structures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `accounts_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accounts_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `account_dates`
--
ALTER TABLE `account_dates`
  ADD CONSTRAINT `account_dates_account_id_foreign` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `coaches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `item_sections`
--
ALTER TABLE `item_sections`
  ADD CONSTRAINT `item_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `shadules`
--
ALTER TABLE `shadules`
  ADD CONSTRAINT `shadules_day_id_foreign` FOREIGN KEY (`day_id`) REFERENCES `days` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shadules_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shadules_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `structures`
--
ALTER TABLE `structures`
  ADD CONSTRAINT `structures_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `structures_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
