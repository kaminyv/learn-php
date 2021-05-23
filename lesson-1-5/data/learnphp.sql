-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2021 г., 15:30
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
-- База данных: `learnphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Спорт'),
(2, 'Политика');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `folder` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `size` int NOT NULL,
  `views` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `name`, `folder`, `size`, `views`) VALUES
(32, '01.jpg', 'images/', 111456, 2),
(33, '02.jpg', 'images/', 70076, 6),
(34, '03.jpg', 'images/', 70215, 0),
(35, '04.jpg', 'images/', 61733, 0),
(36, '05.jpg', 'images/', 160617, 0),
(37, '06.jpg', 'images/', 89871, 0),
(38, '07.jpg', 'images/', 99418, 0),
(39, '08.jpg', 'images/', 103775, 0),
(40, '09.jpg', 'images/', 81022, 0),
(41, '10.jpg', 'images/', 97127, 0),
(42, '11.jpg', 'images/', 98579, 0),
(43, '12.jpg', 'images/', 139286, 0),
(44, '13.jpg', 'images/', 113016, 0),
(45, '14.jpg', 'images/', 151814, 0),
(46, '15.jpg', 'images/', 112488, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'Роскомнадзор потребовал от Google снять ограничения с \"Улицы героев\"', 'МОСКВА, 7 мая — РИА Новости. Роскомнадзор потребовал от компании Google вернуть мобильное приложение \"Улица героев\" в Google Play, сообщило ведомство в Telegram-канале.\r\nЭта программа знакомит пользователей с биографиями героев Великой Отечественной войны, чьи имена носят улицы в разных городах России.\r\n\"Подчеркиваем, любые действия, направленные на замалчивание и искажение памяти о решающем вкладе советских солдат в победу над фашизмом и их героическом подвиге, совершенном в ходе Второй мировой войны, являются недопустимыми\", — говорится в письме Роскомнадзора.\r\nВ ведомстве подчеркнули, что действия Google нарушают ключевые принципы свободного распространения информации и беспрепятственного доступа к ней.\r\nРоскомнадзор потребовал объяснить причины введения ограничений и проинформировать о их снятии.'),
(2, 'СМИ: Белый дом отредактировал стенограмму с упоминанием Украины и НАТО', 'МОСКВА, 7 мая — РИА Новости. Белый дом внес изменения в официальную стенограмму заявления о поддержке Украины в вопросе вступления в НАТО, сообщает Fox News.\r\nНакануне представитель Белого дома Карин Жан-Пьер, комментируя возможность присоединения Киева к альянсу, заявила, что двери организации открыты для тех, кто выполнит все обязательства по вступлению.\r\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
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
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
