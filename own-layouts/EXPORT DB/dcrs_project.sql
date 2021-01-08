-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 08 2021 г., 14:27
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dcrs_project`
--
CREATE DATABASE IF NOT EXISTS `dcrs_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dcrs_project`;

-- --------------------------------------------------------

--
-- Структура таблицы `book_room`
--

CREATE TABLE `book_room` (
  `IdBookRoom` int(11) NOT NULL,
  `ArrivalDate` date NOT NULL,
  `DepartDate` date NOT NULL,
  `StatusCode` int(11) NOT NULL,
  `IdMainClient` int(11) NOT NULL,
  `GroupSize` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book_room`
--

INSERT INTO `book_room` (`IdBookRoom`, `ArrivalDate`, `DepartDate`, `StatusCode`, `IdMainClient`, `GroupSize`) VALUES
(1, '2020-12-01', '2020-12-15', 5, 19, '2-2'),
(2, '2021-02-01', '2021-02-08', 1, 22, '2-2'),
(3, '2020-12-15', '2020-12-24', 5, 29, '1-1'),
(4, '2021-01-10', '2021-01-25', 4, 28, '1-1'),
(5, '2021-01-22', '2021-01-24', 3, 24, '1-1'),
(6, '2020-12-15', '2020-12-24', 5, 23, '2-2'),
(7, '2021-02-01', '2021-02-08', 1, 25, '2-2'),
(8, '2021-02-01', '2021-02-08', 1, 17, '2-2'),
(9, '2020-12-15', '2020-12-24', 5, 18, '2-1'),
(10, '2020-12-01', '2020-12-15', 5, 34, '1-1'),
(11, '2021-02-01', '2021-02-08', 1, 35, '1-1'),
(12, '2020-12-15', '2020-12-24', 4, 36, '1-1'),
(13, '2021-01-20', '2021-01-25', 2, 37, '1-1'),
(14, '2021-01-22', '2021-01-24', 3, 43, '1-1'),
(15, '2020-12-15', '2020-12-24', 5, 44, '1-1'),
(16, '2021-02-03', '2021-02-11', 2, 45, '1-1'),
(17, '2021-02-01', '2021-02-08', 1, 46, '1-1'),
(18, '2021-02-15', '2020-02-24', 1, 47, '2-1'),
(19, '2021-03-01', '2020-03-15', 1, 50, '1-1'),
(20, '2021-01-21', '2021-02-08', 3, 38, '2-2'),
(21, '2021-01-20', '2020-02-01', 3, 41, '2-3'),
(22, '2021-01-10', '2021-01-25', 4, 1, '2-2'),
(23, '2021-01-22', '2021-02-14', 3, 55, '2-2'),
(24, '2021-01-10', '2021-01-25', 4, 1, '2-2'),
(25, '2021-02-01', '2021-02-08', 1, 57, '2-2'),
(26, '2021-01-01', '2021-01-08', 5, 8, '2-3'),
(27, '2021-02-15', '2020-02-24', 1, 59, '2-2'),
(28, '2021-02-01', '2021-02-08', 3, 2, '2-2'),
(29, '2021-02-01', '2021-02-08', 3, 2, '2-2'),
(30, '2021-02-15', '2021-02-24', 1, 49, '3-3'),
(31, '2020-12-01', '2020-12-15', 5, 12, '3-3'),
(32, '2021-02-01', '2021-02-08', 1, 5, '3-3'),
(33, '2021-02-15', '2021-02-24', 1, 31, '3-3');

-- --------------------------------------------------------

--
-- Структура таблицы `client_hotel`
--

CREATE TABLE `client_hotel` (
  `IdClient` int(11) NOT NULL,
  `Surname` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Partonymic` varchar(25) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Passport` varchar(128) DEFAULT NULL,
  `Gender` enum('Мужской','Женский') NOT NULL,
  `IdBook` int(11) DEFAULT NULL,
  `login` varchar(32) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `client_hotel`
--

INSERT INTO `client_hotel` (`IdClient`, `Surname`, `Name`, `Partonymic`, `Birthday`, `Passport`, `Gender`, `IdBook`, `login`, `password`, `email`) VALUES
(1, 'Виноградов', 'Арсений', 'Леонидович', '1976-08-02', '1076 748272', 'Мужской', 22, 'Arseny1976', '850Arseny1948346', 'Vinogradov-Arseny@list.com'),
(2, 'Федорова', 'Кристина', 'Анатольевна', '1981-04-13', '6478 718465', 'Женский', 28, 'Fedorova598Kriss', 'Fedorova-Vinogradova501', 'Fedorova1981@inbox.ru'),
(3, 'Виноградова', 'Марина', 'Виталиевна', '1978-04-13', '6478 718465', 'Женский', 22, 'Vinogradova598Marina', 'Marina-Vinogradova501', 'Marina1978@inbox.ru'),
(4, 'Виноградов', 'Федор', 'Арсений', '2006-06-24', '2006 718465', 'Мужской', 24, NULL, NULL, 'Vinogradov2006@inbox.ru'),
(5, 'Ленин', 'Арсений', 'Петрович', '1945-07-09', '6545 561843', 'Мужской', 32, 'Real1945Lenin', 'LeninLive', 'LeninSeno@live.ru'),
(6, 'Виноградов', 'Виталий', 'Арсениевич', '2010-08-04', '3110 743247', 'Мужской', 24, NULL, NULL, NULL),
(7, 'Ленинa', 'Клара', 'Арсениевна', '1983-04-16', '3883 758334', 'Женский', 32, 'Klara477', 'Klara-884', 'Lenina872Klara@list.com'),
(8, 'Головинa', 'Анастасия', 'Викторовна', '1982-04-13', '6482 929252', 'Женский', 26, 'Golovina82', 'Golovina-Nasty1982', 'Golovina-Nasty1982@live.com'),
(9, 'Федоров', 'Артем', 'Николаевич', '2002-11-17', '5277 316072', 'Мужской', 29, NULL, NULL, 'Fedorov-artem@inbox.ru'),
(10, 'Федоров', 'Виталий', 'Николаевич', '2008-06-12', '3108 743233', 'Мужской', 29, NULL, NULL, NULL),
(11, 'Ленинa', 'Рина', 'Арсениевна', '1985-05-18', '3885 758334', 'Женский', 32, 'Rina477', 'Rina-884', 'Lenina872Rina@list.com'),
(12, 'Волков', 'Антон', 'Несторович', '1984-11-01', '3884 854095', 'Мужской', 31, 'German1984', 'German300-Volkov', '41German1984@mail.com'),
(13, 'Волковa', 'Василиса', 'Антоновна', '2009-11-03', '3809 233361', 'Женский', 31, NULL, NULL, NULL),
(14, 'Волковa', 'Эльвира', 'Антоновна', '2011-09-13', '3811 666870', 'Женский', 31, NULL, NULL, NULL),
(15, 'Федоров', 'Николай', 'Георгиевич', '1979-10-23', '7579 676888', 'Мужской', 28, 'Fedorov-Nikolay', '123456', 'Fedorov-Nikolay@inbox.ru'),
(16, 'Лебедевa', 'Майя', 'Вениаминовна', '2009-04-15', '749 612956', 'Женский', 2, 'Maya662', '', 'Lebedeva979Maya@inbox.ru'),
(17, 'Гавриловa', 'Анфиса', 'Ильяовна', '2004-10-01', '314 847069', 'Женский', 8, 'Anfisa2004', 'Anfisa+Anfisa-Gavrilova', 'Gavrilova944Anfisa@mail.com'),
(18, 'Барри', 'Харрис', '', '2014-04-29', '5314 831323', 'Мужской', 9, 'Barry491Harris', '', 'Barry-Harris2014@gmail.com'),
(19, 'Соловьев', 'Николай', 'Артемович', '1966-09-24', '3766 247534', 'Мужской', 1, 'Soloviev-Nikolay', 'Nikolay+Nikolay369', '515Nikolay1966@yandex.ru'),
(20, 'Барри', 'Лада', 'Артемовна', '1982-01-20', '9382 988783', 'Женский', 9, 'Lada-Perminova', 'Perminova-LadaLada622', 'Perminova-Lada@gmail.com'),
(21, 'Новиков', 'Игорь', 'Игориевич', '1966-10-25', '1066 854568', 'Мужской', 1, 'Igor978', 'Igor-236', 'Novikov-Igor1966@mail.com'),
(22, 'Лебедев', 'Вениамин', 'Трофимович', '1987-06-01', '3487 343460', 'Мужской', 2, 'Lebedev-venok', 'Lebedev-venok.1987', 'Lebedev-venok@list.com'),
(23, 'Эндрюс', 'Джемайма', '', '1971-05-27', '7471 601741', 'Женский', 6, 'Jemima-Andrews', 'Andrews_625', 'Andrews-Jemima@gmail.com'),
(24, 'Васильевa', 'Анна', 'Григориевна', '1996-01-19', '7396 252341', 'Женский', 5, 'Vassiliev-Anna1996', 'Vassiliev237Anna.1996', 'Vassiliev-Anna@list.com'),
(25, 'Паттерсон', 'Филлисия', '', '1985-09-21', '2785 298014', 'Женский', 7, 'Peterson96', '1985Phyllis729', 'PetersonPhyllis1985@gmail.com'),
(26, 'Паттерсон', 'Лео', '', '1980-04-27', '9380 122742', 'Мужской', 7, 'Leo1980', 'Leo459Leo585', 'Peterson-Leo1980@yandex.ru'),
(27, 'Гавриловa', 'Изольда', 'Ильяовна', '1974-01-15', '5774 407547', 'Женский', 8, 'Izolda-Semyonova', '', 'Semyonova168Izolda@inbox.ru'),
(28, 'Палаты', 'Стэнли', '', '1970-03-11', '2970 621162', 'Мужской', 4, 'Stanley1970', '', 'Stanley-Chambers@inbox.ru'),
(29, 'Краев', 'Тарас', 'Игнатович', '1990-07-18', '5490 546553', 'Мужской', 3, '223Taras1990', 'Taras+Kraev-Taras', 'Taras-Kraev@mail.com'),
(30, 'Дэвис', 'декан', '', '1975-07-09', '6575 561843', 'Мужской', 6, 'Davis144Dean', 'Dean+Dean-Davis', 'Dean-Davis@yandex.ru'),
(31, 'Печенька', 'Регина', 'Левовна', '1974-11-08', '4974 581729', 'Женский', 33, 'Regina270', '', 'Andreeva-Regina1974@inbox.ru'),
(32, 'Печенька', 'Владимир', 'Иммануилович', '1974-06-02', '7674 776894', 'Мужской', 33, '811Vladimir1974', '675Vladimir1974912', 'Vladimir1974@live.com'),
(33, 'Печенька', 'Изольда', 'Владимировна', '2009-11-23', '1309 291369', 'Женский', 33, NULL, NULL, 'Izolda-009@yandex.ru'),
(34, 'Морозовa', 'Регина', 'Богдановна', '1996-03-28', '6396 938997', 'Женский', 10, 'Morozova-Regina', 'Morozova_133', 'Regina877@mail.com'),
(35, 'Черноусов', 'Нестор', 'Геннадиевич', '1969-02-14', '6869 575821', 'Мужской', 11, 'Chernousov-Nestor', 'Chernousov_177', 'Chernousov-Nestor@live.com'),
(36, 'Орловa', 'Виктория', 'Антоновна', '1982-11-23', '1182 715643', 'Женский', 12, 'Viktoriya-Orlova', 'Viktoriya1982.1982', 'Orlova-Viktoriya1982@gmail.com'),
(37, 'Киселев', 'Марк', 'Ростиславович', '1960-11-11', '7960 236978', 'Мужской', 13, 'Kiselyov-Mark1960', 'Mark-Kiselyov1173', '978Mark1960@gmail.com'),
(38, 'Перминов', 'Валерий', 'Иммануилович', '1995-04-08', '3095 588121', 'Мужской', 20, 'Perminov-Valery1995', 'Valery+Valery516', 'Valery-Perminov@mail.com'),
(39, 'Перминовa', 'Раиса', 'Викторовна', '1996-10-02', '2596 848798', 'Женский', 20, 'Perminova-Raisa1996', '', '47Raisa1996@list.com'),
(40, 'Гусев', 'Олег', 'Давидович', '1984-08-23', '8984 943711', 'Мужской', 21, 'Gusev-Oleg', 'Oleg694-Gusev', 'Oleg-Gusev@yandex.ru'),
(41, 'Гусева', 'Линда', '', '1983-01-03', '2883 726265', 'Женский', 21, '984Linda1983', 'Morgan-Linda1983Linda780', 'Morgan-Linda1983@gmail.com'),
(42, 'Гусев', 'Алексей', 'Олегович', '2017-10-22', '8517 168752', 'Мужской', 21, NULL, NULL, NULL),
(43, 'Уилер', 'Монро', '', '1963-09-25', '6463 183852', 'Мужской', 14, 'Wheeler-Monroe', 'Monroe203Monroe340', 'Monroe-Wheeler@yandex.ru'),
(44, 'Бакли', 'Элейн', '', '1981-10-07', '3681 286995', 'Женский', 15, 'Elaine1981', 'Elaine1026-Buckley', 'Elaine594@gmail.com'),
(45, 'Васильев', 'Юлиан', 'Всеволодович', '1978-03-17', '2278 123724', 'Мужской', 16, 'Yulian1978', 'Vassiliev201Yulian.1978', 'Vassiliev-Yulian@gmail.com'),
(46, 'Дженнингс', 'Эллиот', '', '1998-09-19', '3298 247851', 'Мужской', 17, 'Elliot1998', 'Elliot+Elliot-Jennings', '602Elliot1998@gmail.com'),
(47, 'Николаевa', 'Оксана', 'Степановна', '1987-01-18', '5887 864496', 'Женский', 18, 'Oksana583', 'Oksana+Oksana317', 'Nikolaeva-Oksana@list.com'),
(48, 'Арутунян', 'Семен', 'Маркович', '2010-06-26', '8810 119425', 'Мужской', 18, NULL, NULL, NULL),
(49, 'Манн', 'Джамозина', '', '1996-07-01', '7396 554423', 'Женский', 30, 'Jamesina1996', 'Jamesina+Jamesina-Mann', 'Mann-Jamesina@live.com'),
(50, 'Степановa', 'Клавдия', 'Егоровна', '1961-01-06', '2761 171014', 'Женский', 19, 'Stepanova-Klavdiya', 'Klavdiya+975Klavdiya1961', 'Klavdiya-Stepanova@live.com'),
(51, 'Головин', 'Алексей', 'Игнатович', '2017-10-22', '8517 168752', 'Мужской', 26, NULL, NULL, NULL),
(52, 'Головин', 'Вадим', 'Артурович', '1978-07-04', '1678 427414', 'Мужской', 26, 'Golovin-Vadim', '944Vadim1978.1978', '141Vadim1978@list.com'),
(53, 'Манн', 'Остин', '', '2016-09-07', '9716 949671', 'Мужской', 30, NULL, NULL, NULL),
(54, 'Манн', 'Оскар', '', '1996-03-13', '5976 601878', 'Мужской', 30, 'Oscar1976', 'Mann236OscarOscar941', 'Mann-Oscar1976@gmail.com'),
(55, 'Соловьев', 'Вадим', 'Артурович', '1978-07-04', '1678 427414', 'Мужской', 23, 'Solovyov-Vadim', '944Vadim1978.1978', '141Vadim1978@list.com'),
(56, 'Федоров', 'Сергей', 'Николайович', '1973-10-27', '4373 491819', 'Мужской', 23, 'Sergei376', 'Sergei-1055', 'Sergei-Fyodorov@gmail.com'),
(57, 'Маслова', 'Инга', 'Александровна', '1988-09-15', '6288 468912', 'Женский', 25, 'Maslova892Inga', 'Maslova982Inga69', '677Inga1988@yandex.ru'),
(58, 'Маслов', 'Антон', 'Ярославович', '1986-05-19', '7986 864198', 'Мужской', 25, 'GAnton-Maslov', 'Maslov_370', 'Maslov-Anton@list.com'),
(59, 'Плетко', 'Дарья', 'Анатольевна', '1992-05-02', '6892 538164', 'Женский', 27, 'Delilah497', 'Delilah1992.1992', 'Delilah-Chambers@mail.com'),
(60, 'Ворнер', 'Шерил', '', '1991-07-15', '9191 358065', 'Женский', 27, 'Warren-Cheryl1991', 'Cheryl-WarrenCheryl1180', 'Warren-Cheryl1991@inbox.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `room`
--

CREATE TABLE `room` (
  `IdRoom` int(11) NOT NULL,
  `IdCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `room`
--

INSERT INTO `room` (`IdRoom`, `IdCategory`) VALUES
(500, 1),
(501, 1),
(502, 1),
(503, 1),
(504, 1),
(505, 1),
(506, 1),
(507, 1),
(508, 1),
(509, 1),
(605, 1),
(606, 1),
(607, 1),
(608, 1),
(609, 1),
(101, 2),
(102, 2),
(103, 2),
(104, 2),
(105, 2),
(201, 2),
(202, 2),
(203, 2),
(204, 2),
(205, 2),
(300, 2),
(306, 2),
(307, 2),
(308, 2),
(309, 2),
(400, 2),
(401, 2),
(402, 2),
(403, 2),
(404, 2),
(405, 2),
(406, 2),
(407, 2),
(408, 2),
(409, 2),
(301, 3),
(302, 3),
(303, 3),
(304, 3),
(305, 3),
(600, 4),
(601, 4),
(602, 4),
(603, 4),
(604, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `room_category`
--

CREATE TABLE `room_category` (
  `IdCategory` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `GuestNumber` int(11) NOT NULL,
  `Cost` int(11) NOT NULL,
  `Info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `room_category`
--

INSERT INTO `room_category` (`IdCategory`, `Name`, `GuestNumber`, `Cost`, `Info`) VALUES
(1, 'Одноместный', 1, 900, 'Мы рады предложить удобный и уютный одноместный номер. Хороший вариант для гордых одиночек и любителей комфорта. Находится на 5 и 6 этажах.'),
(2, 'Двухместный', 2, 1000, 'Мы рады предложить удобный и уютный двухместный номер. Хороший вариант для семейного отдыха и любителей комфорта.'),
(3, 'Трехместный', 3, 1500, 'Мы рады предложить удобный и уютный трехместный номер. Хороший вариант для семейного отдыха и любителей комфорта. Находится на 3 этаже.'),
(4, 'Люкс', 4, 2000, 'Мы рады предложить удобные и уютные двухэтажные номера категории \"люкс\" на 6 и 7 этажах. При неизменной роскоши каждого из люксов, каждый из них обладает неподражаемым дизайном.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book_room`
--
ALTER TABLE `book_room`
  ADD PRIMARY KEY (`IdBookRoom`),
  ADD KEY `IdMainClient` (`IdMainClient`);

--
-- Индексы таблицы `client_hotel`
--
ALTER TABLE `client_hotel`
  ADD PRIMARY KEY (`IdClient`);

--
-- Индексы таблицы `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`IdRoom`),
  ADD KEY `IdCategory` (`IdCategory`);

--
-- Индексы таблицы `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`IdCategory`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book_room`
--
ALTER TABLE `book_room`
  MODIFY `IdBookRoom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `client_hotel`
--
ALTER TABLE `client_hotel`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT для таблицы `room_category`
--
ALTER TABLE `room_category`
  MODIFY `IdCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `book_room`
--
ALTER TABLE `book_room`
  ADD CONSTRAINT `book_room_ibfk_1` FOREIGN KEY (`IdMainClient`) REFERENCES `client_hotel` (`IdClient`);

--
-- Ограничения внешнего ключа таблицы `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`IdCategory`) REFERENCES `room_category` (`IdCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
