-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 03 2021 г., 19:53
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `good_id` int NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `good_id`, `session_id`) VALUES
(78, 1, 'bpm45eabopj941ghkonmti00fgf0d551'),
(82, 1, '521mjkfnoige3js5h3ilhgn7oo30l3a8');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Спорт'),
(2, 'Политика');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `id_image` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`, `id_image`) VALUES
(1, 'Вася', 'Привет', 0),
(2, 'Петя', 'Хороший сайт', 0),
(3, 'Евгения Арестова', 'Пока', 0),
(20, 'Евгения Арестова', '123', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int NOT NULL,
  `likes` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `image`, `name`, `description`, `price`, `likes`) VALUES
(1, 'matches.png', 'Спички', 'Отличные охотничьи спички.', 12, 22),
(2, 'metla.png', 'Метла', 'Метла хозяйственная пластиковая.', 23, 4),
(3, 'vedro-plastik.jpg', 'Ведро', 'Ведро синее усиленное.', 6, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `filename` text NOT NULL,
  `likes` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `filename`, `likes`) VALUES
(1, '01.jpg', 34),
(2, '02.jpg', 14),
(3, '03.jpg', 0),
(4, '04.jpg', 1),
(5, '05.jpg', 0),
(6, '06.jpg', 0),
(7, '07.jpg', 0),
(8, '08.jpg', 0),
(9, '09.jpg', 0),
(10, '10.jpg', 0),
(11, '11.jpg', 1),
(12, '12.jpg', 0),
(13, '13.jpg', 6),
(14, '14.jpg', 0),
(15, '15.jpg', 0),
(18, 'logo.png', 54),
(20, 'shop.png', 10),
(21, 'nastol.com.ua-46325.jpg', 1),
(22, 'nastol.com.ua-46325.jpg', 1),
(23, 'elsa_1.gif', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `category` int NOT NULL,
  `prev` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `category`, `prev`, `text`) VALUES
(1, 1, 'В МИД сообщили о \"разговоре на повышенных тонах\" на саммите в Париже', 'В МИД сообщили о \"разговоре на повышенных тонах\" на саммите в Париже\r\n14:51 13.12.2019 (обновлено: 19:37 13.12.2019)\r\n51231\r\nПрезидент России Владимир Путин, президент Франции Эммануэль Макрон и президент Украины Владимир Зеленский во время встречи в нормандском формате в Елисейском дворце\r\n© РИА Новости / Алексей Никольский\r\nПрезидент России Владимир Путин, президент Франции Эммануэль Макрон и президент Украины Владимир Зеленский во время встречи в \"нормандском формате\" в Елисейском дворце\r\nМОСКВА, 13 дек — РИА Новости. Разговор на саммите в Париже иногда велся на повышенных тонах, но Россия действовала эффективно, не дав изменить Минские соглашения, заявил замминистра иностранных дел Андрей Руденко.\r\n\"Какое-то время там были даже идеи серьезным образом переработать тот документ. <...> Но тем не менее твердость нашего лидера это все предотвратила\", — сказал он, выступая на площадке клуба \"Валдай\".\r\n\r\nПо словам замминистра, удалось добиться главного — подтверждения со стороны украинского президента Владимира Зеленского приверженности Минским соглашениям.\r\n\"Потому что те сигналы, которые он направлял до этого, когда он, с одной стороны, говорил, что он уважает Минск, с другой стороны — полностью отвергал некоторые его аспекты, все это наводило на очень неприятные выводы. Тем не менее в принятом документе говорится, что Минск является основой регулирования, и украинцы под этим подписались\", — подчеркнул Руденко.\r\nМинские соглашения\r\n9 декабря, 21:34\r\nМинские соглашения\r\nПервый за три года саммит лидеров стран \"нормандской четверки\" — России, Украины, Франции и Германии — завершился в Париже в ночь на вторник принятием совместного коммюнике и договоренностями встретиться через четыре месяца в Берлине, чтобы продолжить работу по урегулированию ситуации в Донбассе.\r\nВ документе подчеркнуто, что Минские соглашения остаются базисом для работы в \"нормандском формате\", предусмотрено разведение сил к концу марта в трех новых точках. Кроме того, лидеры \"нормандской четверки\" призвали обеспечить до конца года режим прекращения огня в регионе.'),
(5, 2, 'Источник 2 сообщил подробности нового контракта России и Турции по С-400', 'АНКАРА, 13 дек — РИА Новости. Новый контракт на поставку Анкаре российских систем ПВО С-400 предполагает их совместное производство и передачу технологий, сообщил источник РИА Новости в оборонной промышленности Турции.\r\nСобеседник агентства уточнил, что контракт с Россией состоит из двух частей. Первый полковой комплект уже поставили в Турцию, сейчас идет обучение, в апреле комплексы встанут на боевое дежурство.\r\nЗенитный ракетный комплекс С-400 \r\nВчера, 10:27\r\nВ МИД Турции оценили последствия от американских санкций из-за С-400\r\nОни поступили в Турцию полностью произведенными в России.\r\nПо словам источника, переговоры, которые идут относительно совместного производства, касаются второго комплекта C-400.\r\n\"Договор о его поставке подписан, переговоры касаются не покупки, а именно совместного производства и передачи технологий. Переговоры продолжаются уже продолжительное время, при этом не идет речи о том, что стороны не смогут договориться. Точной даты подписания договора о совместном производстве никто сейчас назвать не сможет, но это должно произойти до апреля будущего года\", — заключил собеседник агентства.\r\n\r\nПоставки С-400\r\nРоссия в 2019 году выполнила контракт на поставку Турции четырех дивизионов С-400 на сумму 2,5 миллиарда долларов. Соглашение предполагает также опцион на еще один полковой комплект.\r\nПоставки С-400 вызвали кризис в отношениях Турции с США.\r\nВашингтон требовал отказаться от сделки и приобрести американские комплексы Patriot, грозя задержать или вообще отменить продажу Турции новейших истребителей F-35, а также ввести санкции. Анкара отказалась идти на уступки.'),
(10, 1, 'Украина возобновила импорт электроэнергии из России, пишут СМИ', 'МОСКВА, 13 дек — РИА Новости. Украинские компании-трейдеры с 11 декабря возобновили поставки электроэнергии из России, пишут \"Украинские новости\".\r\nПо информации издания, если в среду было закуплено 480 тысяч киловатт-часов, то в пятницу уже 1268 тысяч киловатт-часов.\r\nЛинии электропередач в Киеве\r\n10 ноября, 23:21\r\nЛяшко заявил, что Украина прекратит закупать электроэнергию у России\r\nТакже возобновился импорт электроэнергии из Белоруссии.\r\nПоставки из России прекратились 5 декабря, а из Белоруссии — 2 декабря. Всего с начала месяца на Украину импортировали 10 700 тысяч киловатт-часов из России и 27 300 тысяч киловатт-часов из Белоруссии.\r\nИмпорт электроэнергии из России\r\nВ 2015 году Киев прекратил закупки электроэнергии из России. Импорт возобновили только в сентябре 2019 года.\r\nНовая модель рынка электроэнергии начала работать на Украине с 1 июля. Государство перестало быть единственным покупателем и продавцом, а цены стали независимыми.\r\nПри этом накануне Верховная рада отказалась отменить действие закона о запрете закупок электроэнергии из России по двусторонним договора');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `session_id`) VALUES
(12, 'dsd', '333', 'sejjte71rcmi1e2dh9dot26u1lo4niql'),
(13, '3233', '32323', 'sejjte71rcmi1e2dh9dot26u1lo4niql');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL,
  `role` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`, `role`) VALUES
(1, 'admin', '$2y$10$2qMwxKY7nxxiFZFBP4yzrePkz5WVzb9F7dKO2xux5.XLbPLXkmBEC', '5379996815e00ea06907290.80968029', 1),
(2, 'user', '$2y$10$2qMwxKY7nxxiFZFBP4yzrePkz5WVzb9F7dKO2xux5.XLbPLXkmBEC', '', 0),
(3, 'alex', '$2y$10$2qMwxKY7nxxiFZFBP4yzrePkz5WVzb9F7dKO2xux5.XLbPLXkmBEC', '', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
