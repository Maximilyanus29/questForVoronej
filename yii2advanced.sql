-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 30 2020 г., 04:17
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
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E');

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
('m000000_000000_base', 1609244954),
('m130524_201442_init', 1609244956),
('m140506_102106_rbac_init', 1609250705),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1609250705),
('m180523_151638_rbac_updates_indexes_without_prefix', 1609250705),
('m190124_110200_add_verification_token_column_to_user_table', 1609244956),
('m200409_110543_rbac_update_mssql_trigger', 1609250705),
('m201229_121543_category', 1609244988),
('m201229_122128_product', 1609245029);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `vendor_code` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `width` tinyint(1) NOT NULL,
  `height` tinyint(1) NOT NULL,
  `lenght` tinyint(1) NOT NULL,
  `on_warehouse` tinyint(1) NOT NULL,
  `in_category` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `vendor_code`, `price`, `width`, `height`, `lenght`, `on_warehouse`, `in_category`) VALUES
(1, '1', 122, 2, 3, 1, 1, 0),
(2, '2', 122, 2, 5, 1, 1, 0),
(3, 'QnH5yHwH8JUvcmS', 76116, 1, 3, 1, 0, 1),
(4, 'bsr5ncmKFOwF61v', 73725, 3, 5, 5, 1, 5),
(5, 'GAox34M2vNVGtuf', 28030, 0, 4, 5, 1, 1),
(6, 'PMvC-FtnXh7ZVrQ', 7656, 4, 2, 3, 1, 2),
(7, 'Wr3CCnd3yblWQJ3', 23814, 5, 2, 0, 1, 4),
(8, 'x9mP9jkmPy1wMzI', 88325, 2, 1, 1, 0, 0),
(9, '05bwDjSjXNH-JBw', 88987, 3, 3, 4, 0, 4),
(10, 'dFMazWJkA0-P7hC', 61505, 0, 1, 2, 0, 2),
(11, 'Un5ry0n1fkOXgrE', 48062, 5, 1, 5, 0, 4),
(12, 'W3F2thUaG58c8Zv', 55429, 4, 2, 5, 0, 1),
(13, '2wd2bPby1d976_j', 20818, 2, 3, 1, 0, 0),
(14, 'xvh6l94liwB-Oyj', 59482, 1, 5, 2, 1, 5),
(15, 'PpdnAf8Vy1TH2Te', 12915, 3, 1, 4, 0, 3),
(16, 'XeKO2gxU8yagfXI', 80044, 0, 4, 5, 1, 5),
(17, 'kBQBRrD3Dzwz5LK', 79860, 3, 5, 2, 1, 1),
(18, 'smj8b57PLzNvCC8', 51366, 3, 1, 1, 1, 3),
(19, '0nnhAaWUrPD8EDd', 20639, 0, 1, 5, 0, 0),
(20, '9O9fP9DZOZMmIgL', 97041, 3, 3, 3, 1, 1),
(21, 'vtqd9nrahCjDy0n', 72311, 3, 4, 3, 0, 0),
(22, 'sX8yk-z--lEb_of', 88826, 4, 5, 0, 0, 0),
(23, 'IaBzfkczULtiSUU', 37461, 5, 3, 0, 0, 5),
(24, 'ZhV8unRYNNrUPhb', 87442, 0, 5, 2, 0, 1),
(25, 'cab953eNItq9AqK', 78981, 3, 5, 4, 1, 0),
(26, 'v3B2EzsHt3JWuc_', 6940, 0, 0, 5, 0, 1),
(27, 'UIEx2ss8rrrWvqo', 1729, 2, 2, 5, 0, 5),
(28, 'FhJ2BwoZ5P5pLTl', 10519, 2, 5, 5, 1, 1),
(29, 'ShIz3_2kn_60R4c', 74899, 3, 4, 5, 1, 3),
(30, 'D_jLuRu3M0JQBnB', 95409, 3, 2, 5, 1, 1),
(31, 'MTiY_XhT_EB7djg', 21678, 3, 2, 4, 0, 2),
(32, 'EgguU3Y7lzPMbC1', 47612, 5, 0, 2, 0, 0),
(33, 'I2W5h0jdF9YKN9b', 17870, 1, 1, 0, 1, 5),
(34, 'FzqZqHIN0Po9mih', 86793, 5, 2, 4, 1, 3),
(35, 'kOgmYUSxheyagI6', 36688, 4, 4, 0, 0, 3),
(36, 'RxA8E8FBknRB6sc', 82341, 3, 3, 4, 0, 1),
(37, 'xxRzqclbEiedzNN', 63013, 1, 1, 2, 0, 3),
(38, 'MRNu-k7JFCY2ac3', 96647, 4, 2, 4, 1, 5),
(39, 'iRy1QsPJqmCkO41', 51260, 5, 3, 1, 1, 0),
(40, 'MTZCJM7eBshD7AE', 947, 1, 2, 0, 0, 3),
(41, 'iVRuAu_gfjRKClo', 86732, 4, 3, 5, 0, 1),
(42, 'H8_NjRW7hGkLqq4', 63625, 5, 1, 5, 1, 4),
(43, '_jdvCl36RLl1shR', 55361, 5, 4, 0, 1, 0),
(44, 'j51LPZf1dhQ9HVH', 58624, 2, 0, 1, 1, 4),
(45, '66kLS4ke6FggN3T', 7413, 1, 3, 5, 0, 1),
(46, 'JXqkdgRgOUnhKZT', 53209, 4, 3, 4, 1, 1),
(47, '31ffQrkhEP1MRjU', 89732, 5, 1, 4, 0, 1),
(48, 'SRFy7wmIWACZZBx', 51364, 2, 1, 4, 1, 1),
(49, 'rW73Fbodd_Hmcch', 77953, 5, 4, 4, 0, 5),
(50, 'xpy46NP4JfnHmma', 78483, 1, 2, 4, 1, 3),
(51, 'W_o3JiPplJzWVk6', 44463, 1, 3, 3, 1, 0),
(52, 'N5Ho24r6p2RJLry', 69665, 0, 2, 2, 0, 4),
(53, 'NoiaJ4KTEqHnW9S', 69701, 4, 2, 1, 0, 4),
(54, 'i4JyoLofnJZdfL0', 38557, 3, 1, 2, 1, 5),
(55, 'e3AGHGL9Pq98fPb', 60094, 1, 2, 3, 1, 5),
(56, 'szYz-SLoRuIqQG2', 69562, 4, 4, 1, 1, 0),
(57, 'NlEXm8f0fiG_-6R', 38150, 0, 4, 5, 1, 4),
(58, 'U2oxrSRMSuSsZ5L', 20407, 5, 4, 3, 0, 0),
(59, '4FMK8V0oSN_f1hw', 27257, 5, 2, 1, 1, 2),
(60, 'cmz9oNpU8glXJoL', 58536, 5, 3, 3, 1, 0),
(61, 'lIgS8YnAkaacEd-', 66091, 1, 0, 2, 1, 4),
(62, 'n5OFWxXbtsztqtY', 16134, 5, 2, 4, 0, 5),
(63, 'I_btB3SCSAbZ4ZJ', 98312, 0, 0, 2, 1, 0),
(64, 'ggk231j7FqLCx1K', 15040, 2, 0, 5, 1, 4),
(65, 'mBZRYsSeKUMjjnR', 92042, 3, 3, 0, 0, 3),
(66, '5hunX9IflCai4JI', 64371, 3, 2, 1, 0, 4),
(67, 'IGAqMoT0s-NM3qE', 64253, 4, 1, 2, 1, 2),
(68, 'sc4GGqNvh-5xur4', 24936, 4, 2, 4, 1, 4),
(69, 'lKYHmOi2PSfwT_6', 97315, 4, 1, 2, 1, 2),
(70, 'VZ_dZPaSgHLj9he', 56847, 4, 1, 0, 0, 4),
(71, 'IHH4j0cweU9e3Ub', 26279, 3, 3, 2, 1, 0),
(72, 'r59xZsYludNuSpa', 59455, 0, 2, 1, 1, 3),
(73, '0tDT1zDrzksMLS3', 46325, 2, 0, 2, 0, 3),
(74, 'US-Xmd55YBlofAO', 95856, 4, 5, 4, 0, 3),
(75, 'rIrYnND4yn5NFSv', 32397, 1, 3, 4, 1, 4),
(76, '2i_OWaALlJguyJE', 59579, 0, 3, 4, 0, 1),
(77, 'BizlIi0MKJ9t9-M', 16455, 5, 2, 5, 0, 5),
(78, 'dJYR2xw7ioziiCf', 45372, 4, 1, 0, 0, 0),
(79, 'fuSFgHXUtFiFzc5', 37201, 0, 4, 0, 0, 2),
(80, 'AqJqwLayrU0ukFb', 53555, 3, 1, 5, 1, 0),
(81, 'iyz40Nrg_WOQ0aL', 71547, 4, 4, 4, 0, 3),
(82, 'vLf-MDaZ0GItCjX', 14542, 3, 5, 1, 0, 0),
(83, 'pg76LDchabzttDJ', 64592, 4, 4, 3, 1, 5),
(84, 'eT5d0rIBpUoOUyP', 75058, 2, 3, 2, 1, 1),
(85, 'h3_6NtRPMSogxLC', 91164, 2, 3, 4, 1, 5),
(86, 'MLLXhryvrkX1_MQ', 72078, 3, 4, 0, 1, 5),
(87, '8AZpKPOc7-zbzim', 52880, 1, 2, 3, 0, 4),
(88, 'ub4OgZ6QGZBQYKr', 12823, 0, 4, 2, 0, 3),
(89, '8NePfdcQXjbGfT3', 89031, 3, 1, 0, 1, 3),
(90, 'JpuiZ5PwdCD8MKI', 60748, 5, 4, 3, 1, 4),
(91, 'y84nZT6O9MrLR78', 39623, 0, 2, 1, 1, 3),
(92, 'Bs85zB6RucBfxi7', 23271, 3, 5, 3, 0, 4),
(93, 'GpK9JBwYFvwnJha', 88532, 0, 3, 5, 1, 4),
(94, '93izxqRQ4ifMwph', 67021, 1, 2, 1, 0, 2),
(95, 'DTNWn_HrLR6AHvx', 54654, 2, 3, 4, 0, 4),
(96, 'emfv-ff2vxHLnXc', 79874, 5, 2, 1, 0, 1),
(97, 'QzL1JUNcc_gQ81X', 69378, 2, 2, 3, 1, 3),
(98, 'kagRYDBE32BhSOJ', 30010, 2, 0, 4, 1, 1),
(99, '27rCET6NM4gRJQj', 12911, 2, 3, 0, 1, 2),
(100, 'igBi-26jkc86LAE', 5899, 3, 3, 3, 1, 5),
(101, '_IhoN-CMuMRYLmX', 54876, 1, 4, 0, 0, 1),
(102, 'nBPqypSllCRFNAR', 9636, 0, 0, 0, 1, 4),
(103, 'hsekUYjTUVE-mjR', 88829, 1, 4, 0, 1, 2),
(104, '6Rz2Rufn6wm1fOe', 34495, 2, 2, 5, 0, 2),
(105, 'G6maqvRmqw-pNCQ', 67837, 1, 4, 0, 1, 5),
(106, 'x9MhcVGkKDfqkeP', 73337, 3, 1, 1, 0, 1),
(107, 'o_4YPajKJka0NHL', 1354, 2, 3, 2, 0, 0),
(108, 'q6ehITEOP1PJxTH', 13247, 3, 3, 3, 0, 0),
(109, 'aL8P0DrUSSagb6D', 72802, 1, 0, 5, 0, 0),
(110, 'RWOfA4bSHOUu1W6', 15488, 5, 5, 3, 0, 2),
(111, 'OFKKCpxAXaGRxMX', 71975, 4, 2, 0, 1, 1),
(112, 'L0EnoZX5d2AQ_l1', 46568, 3, 0, 0, 0, 2),
(113, 'w0eBz9zQvkPlHkz', 49073, 2, 0, 5, 1, 0),
(114, 'Xpwpkhpyti_AHt3', 61276, 2, 4, 2, 0, 1),
(115, '4D_9Dhg0Xp2nh1J', 80496, 3, 5, 0, 0, 1),
(116, 'ASS3FMsV7BMPXTy', 87169, 2, 1, 1, 0, 0),
(117, 'uEE9hl_RJsfM2_4', 97282, 0, 1, 0, 0, 5),
(118, 'KvjSuKWO9SQ5Ltu', 99979, 5, 3, 1, 1, 3),
(119, 'QFkYOS2ZXnI69pq', 86105, 4, 3, 0, 1, 1),
(120, '86tdeiJO7N0MCRR', 19064, 0, 0, 2, 1, 2),
(121, 'LXiIeqmhwNHsSVS', 68777, 2, 2, 0, 0, 4),
(122, 'hgHgpYzllwMMy2K', 62058, 5, 1, 1, 1, 2),
(123, 'IqKvlgo8_0yLKQj', 53941, 2, 1, 1, 1, 1),
(124, 'RbNMTbEJEKdx-1H', 88050, 0, 5, 4, 1, 1);

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
(4, 'admin', 'd1rDiQ6WYcJmW-ypC_g0NeQMV55MM59u', '$2y$13$aIDUnrBGMNvAEej.PbUqLu3MAkgDh1BXWK5N9aMtwJGny3SchNXRa', NULL, 'admin@admin.admin', 10, 1609248748, 1609248748, '_Q3HQRiIUOWIpC9Ao2zmwGHhryTEIPz8_1609248748');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  ADD UNIQUE KEY `vendor_code` (`vendor_code`);

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
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
