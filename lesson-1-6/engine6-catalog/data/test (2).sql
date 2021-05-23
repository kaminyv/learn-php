-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 11 2021 г., 21:32
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'Админ', 'Не флудить!'),
(2, 'Юзер', 'Как дела?'),
(3, '111', '22'),
(4, 'Вася3', 'Новое сообщение'),
(5, 'Петя', 'Привет');

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `views` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name`, `views`) VALUES
(1, '01.jpg', 6),
(2, '02.jpg', 4),
(3, '03.jpg', 0),
(4, '04.jpg', 6),
(5, 'emb.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `idx` int NOT NULL,
  `filename` text NOT NULL,
  `likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`idx`, `filename`, `likes`) VALUES
(1, '01.jpg', 47),
(2, '02.jpg', 10),
(3, '03.jpg', 5),
(4, '04.jpg', 6),
(5, '05.jpg', 5),
(6, '06.jpg', 8),
(7, '07.jpg', 9),
(8, '08.jpg', 9),
(9, '09.jpg', 11),
(10, '10.jpg', 7);

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
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `idx` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
