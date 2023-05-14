-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 14 2023 г., 18:47
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `uslugi`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Account`
--

CREATE TABLE `Account` (
  `Account_id` int NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Order_Name` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Account`
--

INSERT INTO `Account` (`Account_id`, `Name`, `Surname`, `Email`, `Phone`, `Password`, `Order_Name`) VALUES
(1, 'Руслан', 'Галимзянов', 'rus@mail.ri', '89524065695', '123', 'Подключение гребенки отопления; Установка экрана под ванну; Установка душевого поддона'),
(2, 'Alexey', 'Baboshkin', 'bab@mai.ri', '89635477533', '00', 'Установка и ремонт унитазов; Установка и ремонт бачка унитаза; Установка мойки на кухню'),
(4, 'Михаил', 'Тихомиров', '111@mail.r', '895612312311', '00', 'Замена замков; Установка дверных ручек'),
(34, 'Egor', 'Chetkarev', 'chet@mail.ru', '79501627838', '22', 'Замена замков; Установка дверных ручек'),
(37, '11111', '11', '1@1.r', '11', '1', 'Замена замков; Установка дверных ручек');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`Account_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Account`
--
ALTER TABLE `Account`
  MODIFY `Account_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
