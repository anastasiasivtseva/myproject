-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2019 г., 05:31
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `nastya`
--
CREATE DATABASE IF NOT EXISTS `nastya` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `nastya`;

-- --------------------------------------------------------

--
-- Структура таблицы `cat`
--

CREATE TABLE `cat` (
  `id` int(10) NOT NULL,
  `cat_name` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cat`
--

INSERT INTO `cat` (`id`, `cat_name`) VALUES
(2, 'asdasd'),
(3, 'zxxczxc'),
(4, 'qweqweq');

-- --------------------------------------------------------

--
-- Структура таблицы `ig`
--

CREATE TABLE `ig` (
  `id` int(10) NOT NULL,
  `mail` varchar(355) NOT NULL,
  `name` varchar(355) NOT NULL,
  `login` varchar(355) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ig`
--

INSERT INTO `ig` (`id`, `mail`, `name`, `login`, `password`, `avatar`) VALUES
(9, 'svcvanastasia@mail.ru', 'xxx', 'xxx', 'xxx', 'pic/3.jpeg'),
(10, 'svcvanastasia@mail.ru', 'aaa', 'aaa', 'aaa', 'pic/4.jpeg'),
(15, 'qwerty2@mail.ru', 'qwertyu', 'dsad', 'asdasd', 'pic/2.png'),
(16, 'qwerty2@mail.ru', 'qwertyu', 'dsad', '123', 'pic/2.png'),
(17, 'qwerty@mail.ru', 'qwerty', 'ytrewq', 'qwerty123', 'pic/1.jpeg'),
(18, 'svcvanastasia@mail.ru', 'zxcv', 'zxcv', '1234', 'pic/6.jpeg'),
(19, 'svcvanastasia@mail.ru', 'zxcv', 'zxcv', '1234', 'pic/6.jpeg'),
(20, 'svcvanastasia@mail.ru', 'qwertyu', 'nanastv', '123', 'pic/1.jpeg'),
(21, 'qwerty123@mail.ru', '123', '1233', '123', 'pic/6.jpeg'),
(22, 'qwerty123@mail.ru', '123', '1233', '123', 'pic/6.jpeg');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `text` varchar(355) NOT NULL,
  `user_id` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `text`, `user_id`, `img`) VALUES
(6, 'zxczxczxc', '9', 'img/2.png'),
(7, 'aaaaaaaaaaaa', '10', 'img/3.jpg'),
(14, 'wwwwwwwwww', '16', 'img/1.jpg'),
(15, 'sssssssssssss', '17', 'img/2.png'),
(16, 'cccccccccccc', '16', 'img/4.jpg'),
(17, 'fsdfsdf', '18', 'img/avatar.jpg'),
(18, 'sss', '18', 'img/2.jpg'),
(19, 'sss', '18', 'img/2.jpg'),
(20, 'fsdfsdf', '20', 'img/images.jpg'),
(21, 'sss', '20', 'img/images.jpg'),
(22, 'asdzxc', '21', 'img/Grand_Theft_Auto_IV_cover.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tovari`
--

CREATE TABLE `tovari` (
  `id` int(10) NOT NULL,
  `tov_name` varchar(355) NOT NULL,
  `cat` varchar(355) NOT NULL,
  `tov_text` varchar(355) NOT NULL,
  `tov_img` varchar(355) NOT NULL,
  `price` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovari`
--

INSERT INTO `tovari` (`id`, `tov_name`, `cat`, `tov_text`, `tov_img`, `price`, `id_user`) VALUES
(1, 'zzzzz', '', 'sdfghjkl', 'img/', 2000, 2),
(4, 'asd', '', 'asdasd', 'img/', 2499, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(355) NOT NULL,
  `city` varchar(355) NOT NULL,
  `number` varchar(355) NOT NULL,
  `password` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `city`, `number`, `password`) VALUES
(1, 'asdasd', 'asd', '123123', '123'),
(2, 'qwerty', 'qwerty', '12345', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `text` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wishlist`
--

INSERT INTO `wishlist` (`id`, `date`, `text`, `img`, `status`) VALUES
(2, '2019-05-24', 'Proverkaggg', 'img/', 0),
(4, '2019-06-30', 'fsdfsdf', 'img/2.png', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ig`
--
ALTER TABLE `ig`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovari`
--
ALTER TABLE `tovari`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `ig`
--
ALTER TABLE `ig`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `tovari`
--
ALTER TABLE `tovari`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
