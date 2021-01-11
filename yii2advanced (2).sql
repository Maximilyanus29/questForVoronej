-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 11 2021 г., 16:52
-- Версия сервера: 10.4.17-MariaDB
-- Версия PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Структура таблицы `band`
--

CREATE TABLE `band` (
  `id` smallint(6) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `band`
--

INSERT INTO `band` (`id`, `value`) VALUES
(2, 'C'),
(1, 'D'),
(3, 'D+'),
(4, 'L'),
(5, 'L+');

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` smallint(5) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Ресницы черные', 'Ресницы BARBARA Elegant микс черные eto pushka gonka'),
(2, 'Ресницы белые', 'Ресницы BARBARA Elegant микс ptktystРесницы BARBARA Elegant микс ptktystРесницы BARBARA Elegant микс ptktyst');

-- --------------------------------------------------------

--
-- Структура таблицы `length`
--

CREATE TABLE `length` (
  `id` smallint(6) NOT NULL,
  `value` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `length`
--

INSERT INTO `length` (`id`, `value`) VALUES
(10, '13-16'),
(13, '4-6'),
(2, '5-12'),
(8, '5-9'),
(11, '6-8'),
(4, '7-12'),
(7, '7-14'),
(9, '7-9'),
(12, '8-13'),
(6, '8-15');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1609333770),
('m130524_201442_init', 1609333772),
('m190124_110200_add_verification_token_column_to_user_table', 1609333772);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `article` varchar(30) NOT NULL,
  `length` smallint(6) NOT NULL,
  `band` smallint(6) NOT NULL,
  `thickness` smallint(6) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `article`, `length`, `band`, `thickness`, `price`, `quantity`, `parent_id`) VALUES
(4, 'fegrtfnges', 2, 1, 1, 1555, 0, 1),
(5, 'fegrtfnges', 2, 1, 1, 526, 115, 2),
(6, '215t32gv2', 2, 1, 1, 12351, 325, 4),
(7, 'wqfegr', 8, 1, 1, 1555, 0, 4),
(15, 'tthr', 13, 2, 2, 214, 2, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `product_parent`
--

CREATE TABLE `product_parent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `in_category` int(6) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_parent`
--

INSERT INTO `product_parent` (`id`, `name`, `in_category`, `brand`, `description`, `url`) VALUES
(1, 'Ресницы BARBARA Elegant микс черные', 1, 'waegsrhd', 'safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg safdgfhtdg ', 'waeg'),
(2, 'Ресницы BARBARA Elegant микс черные21', 2, 'egsrhdtdrgef', 'awfegsrhdtj', 'ghtjfd'),
(4, 'Ресницы Enigma мини-микс черные', 1, 'aegsrhdtn', 'Ресницы Enigma мини-микс черныеРесницы Enigma мини-микс черныеРесницы Enigma мини-микс черныеРесницы Enigma мини-микс черныеРесницы Enigma мини-микс черные', 'mini_mix_black');

-- --------------------------------------------------------

--
-- Структура таблицы `thickness`
--

CREATE TABLE `thickness` (
  `id` smallint(6) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `thickness`
--

INSERT INTO `thickness` (`id`, `value`) VALUES
(6, 0),
(10, 0.06),
(9, 0.07),
(11, 0.085),
(7, 0.1),
(8, 0.12),
(1, 1.12),
(2, 2.12);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'u_URLwNA-6zVHNAPO-vii56iQN5vdMFc', '$2y$13$fFPC4SB.yx6EoYfPZAxqTOuDI3hxauGyFSndDthDmWI153izRnI8C', NULL, 'admin@admin.admin', 10, 1609725245, 1609725245, 'PuOyxabHc85OLEPDABo_6Kw-paV2Jgu5_1609725245');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqe_value` (`value`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `length`
--
ALTER TABLE `length`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqe_value` (`value`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `thickness` (`thickness`),
  ADD KEY `band` (`band`),
  ADD KEY `length` (`length`);

--
-- Индексы таблицы `product_parent`
--
ALTER TABLE `product_parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_category` (`in_category`);

--
-- Индексы таблицы `thickness`
--
ALTER TABLE `thickness`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqe_value` (`value`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `band`
--
ALTER TABLE `band`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `length`
--
ALTER TABLE `length`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `product_parent`
--
ALTER TABLE `product_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `thickness`
--
ALTER TABLE `thickness`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `product_parent` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`thickness`) REFERENCES `thickness` (`id`),
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`band`) REFERENCES `band` (`id`),
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`length`) REFERENCES `length` (`id`);

--
-- Ограничения внешнего ключа таблицы `product_parent`
--
ALTER TABLE `product_parent`
  ADD CONSTRAINT `product_parent_ibfk_1` FOREIGN KEY (`in_category`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
