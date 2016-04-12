-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 12 Kwi 2016, 18:44
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rejestgambit`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gambittabela`
--

CREATE TABLE `gambittabela` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(20) NOT NULL,
  `emailusera` varchar(50) NOT NULL,
  `loginusera` varchar(30) NOT NULL,
  `userhaslo` varchar(50) NOT NULL,
  `datawpisu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `gambittabela`
--

INSERT INTO `gambittabela` (`id`, `imie`, `nazwisko`, `emailusera`, `loginusera`, `userhaslo`, `datawpisu`) VALUES
(6, 'Jan', 'Kowalski', 'kowalski@gmail.com', 'kowalski', 'kowalkowal', '2016-03-27 19:27:18'),
(5, 'Randomowy', 'Ziomek', 'random@mail.pl', 'randomlogin', 'randompass', '2016-03-27 19:26:29'),
(7, 'Adam', 'Nowak', 'nowak@pp.com', 'loginnowaka', 'haslonowaka', '2016-03-27 19:28:38'),
(8, 'Kruca Fuks', 'Fux kruca', 'e@e', 'adodo', 'dodoa', '2016-03-27 19:29:32'),
(9, 'Nadal', 'DziaÅ‚a', 'czy@nie', 'nie', 'czynie', '2016-03-27 19:31:26'),
(10, 'BÅºdÅºwÄ…gwa', 'Å¹dÅºbÅ‚Ä…gÄ‡a', 'adf@sdf', 'adfee', 'adfee', '2016-03-27 19:36:12'),
(11, 'Å»Å¹xdÅºÄ‡?', 'Å»Å¹xdÅºÄ‡Å›', 'sdf@fsdrr', 'rrtt', 'ttrr', '2016-03-27 19:38:27'),
(12, 'Å¹dÅºbÅ‚o', 'asdfee', 'ter@fsd', 'gerg', 'erg', '2016-03-27 19:40:52'),
(13, 'Å»Å¹Ä˜ddÄ™', 'Ä™Ä™', 'ad@sd', 'Ä™Ä™', 'Ä™Ä™', '2016-03-27 19:44:22'),
(14, 'adfrrr', 'rrr', 'afdg@sdf', 'greer', 'erg', '2016-03-27 19:46:59'),
(15, 'To', 'sie', 'nie@moze', 'udac', 'tymtazem', '2016-03-27 20:54:45'),
(16, 'moze', 'tym', 'reze@m', 'bedzie', 'lepiej', '2016-03-27 20:58:46'),
(17, 'Kaftan', 'Bezpieczenstwa', 'asdf@sdagf', 'kaftan', 'tafkan', '2016-03-27 21:02:02'),
(18, 'gth', 'rth', 'rth@gdh', 'rth', 'rht', '2016-03-27 21:04:54'),
(19, 'gth', 'rth', 'rth@gdh', 'rth', 'rht', '2016-03-27 21:04:54'),
(20, 'teraz', 'chyba', 'wsi@zadz', 'ala', 'dobrze', '2016-03-27 21:05:57'),
(21, 'teraz', 'chyba', 'wsi@zadz', 'ala', 'dobrze', '2016-03-27 21:05:57'),
(22, 'hsdfh', 'trh', 'rtha@htr', 'rjty', 'ghtrhr', '2016-03-27 21:10:39'),
(23, 'hsdfh', 'trh', 'rtha@htr', 'rjty', 'ghtrhr', '2016-03-27 21:10:39'),
(24, 'moze', 'niebedzie', 'dodawa@cpodw', 'ujnie', 'wpisow', '2016-03-27 21:13:00'),
(25, 'fsdaf', 'reg', 'ger@ger', 'eg', 'erg', '2016-03-27 21:16:24'),
(26, 'fsdaf', 'reg', 'ger@ger', 'eg', 'erg', '2016-03-27 21:16:24'),
(27, 'gfg', 'ge', 'g@gre', 'erg', 'erg', '2016-03-27 21:18:49'),
(28, 'sdfsad', 'asf', 'wge@grw', 'gerer', 'wew', '2016-03-27 21:20:13'),
(29, 'adsfd', 'rgre', 'reg@gredf', 'bbbb', 'bbbb', '2016-03-27 21:21:21'),
(30, 'dziala', 'iwiecej', 'nie@tykac', 'palcem', 'ijuch', '2016-03-27 21:27:36'),
(31, 'sdf', 'ew', 'wef@fwef', 'wef', 'wef', '2016-03-27 21:52:31'),
(32, 'agdf', 'agda', 'sdg@dga', 'asd', 'asdg', '2016-03-27 22:28:41'),
(33, 'fgdsf', 'sfdgs', 'sfdg@fdg', 'sdfg', 'sdfg', '2016-03-27 22:40:15'),
(34, 'sdf', 'sdf', 'sdf@sdf', 'sdf', 'sdf', '2016-03-27 22:41:20'),
(35, 'Åili', 'ÅÄ…ka', 'df@dsf', 'jlk', 'asdgge', '2016-03-27 22:59:07'),
(36, '??ab??d??', 'adsf', 'adf@adg', 'rg', 'erg', '2016-03-27 23:04:50'),
(37, '??ab??d??', 'adfÅ‚Ä…Åº', 'asdf@saf', 'asdg', 'asdg', '2016-03-27 23:06:02'),
(38, '????d??', 'Å‚Ä…dÅºÄ‡Å›', 'ads@gda', 'agds', 'adsdsag', '2016-03-27 23:10:00'),
(39, 'Å‚Å‚Ä‡Ä‡Ä‡Å›Å›', 'Å‚Å‚Ä‡Ä‡Ä‡Å›Å›', 'sdf@sdf', 'Å‚Å‚Ä‡Ä‡Ä‡Å›Å›', 'Å‚Å‚Ä‡Ä‡Ä‡Å›Å›', '2016-03-27 23:17:09'),
(40, 'ÅÄ„Å¼ÅºÄ‡Å›', 'ÅÄ„Å¼ÅºÄ‡Å›', 'df@sdf', 'sdf', 'fseee', '2016-03-27 23:21:42'),
(41, 'ÅÄ„Å¼ÅºÄ‡Å›', 'ÅÄ„Å¼ÅºÄ‡Å›', 'sdf@sdg', 'sdf', 'sdf', '2016-03-27 23:23:25'),
(42, 'ÅÄ…Å¼ÅºÄ‡', 'ÅÄ…Å¼ÅºÄ‡', 'esf@sg', 'sdf', 'sdf', '2016-03-27 23:25:41'),
(43, 'ÅÄ…Å¼ÅºÄ‡', 'ÅÄ…Å¼ÅºÄ‡', 'sdf@sd', 'fdg', 'asdf', '2016-03-27 23:27:20'),
(44, 'Ä†Å»Ä…Å›Å¼', 'Ä†Å»Ä…Å›Å¼', 'sef@esfgs', 'wef', 'wgwe', '2016-03-27 23:30:12'),
(45, 'Ä†Å»Ä…Å›Å¼', 'Ä†Å»Ä…Å›Å¼', 'sdf@sf', 'sdf', 'sdf', '2016-03-27 23:35:37'),
(46, 'Ä†Å»Ä…Å›Å¼', 'Ä†Å»Ä…Å›Å¼', 'sdf@gds', 're', 'erg', '2016-03-27 23:37:04'),
(47, 'Å‚Ä…Ä‡Å¼', 'Å‚Ä…Ä‡Å¼', 'ADSF@sf', 'dfe', 'reg', '2016-03-27 23:41:45'),
(48, 'Å‚Ä…Ä‡Å¼', 'Å‚Ä…Ä‡Å¼', 'sdf@sf', 'sdfsdf', 'sfd', '2016-03-27 23:44:40'),
(49, 'Å‚Ä…Ä‡Å¼', 'Å‚Ä…Ä‡Å¼', 'sdf@sg', 'weg', 'weg', '2016-03-27 23:47:11'),
(50, 'Å‚Ä…fdsa', 'adfs', 'asdf@ag', 'asdf', 'adsf', '2016-03-28 00:09:18'),
(51, 'Å‚Ä…Ä‡vdsf', 'asdfa', 'sdf@dsg', 'asdf', 'asdf', '2016-03-28 00:10:40'),
(52, 'af', 'asf', 'asf@sfd', 'sdf', 'sdf', '2016-03-28 00:11:51'),
(53, 'asd', 'asdf@gdd', 'gds@sdf', 'afg', 'asdf', '2016-03-28 00:12:36'),
(54, 'adsf', 'asdf', 'adsf@age', 'rg', 'dgd', '2016-03-28 00:13:02'),
(55, 'Å‚Ä…Å¼df', 'adsf', 'adsf@sd', 'asd', 'asdf', '2016-03-28 00:20:52'),
(56, 'Å‚', 'asdf', 'asdf@sd', 'adsf', 'asdf', '2016-03-28 00:21:49'),
(57, 'sdf', 'łłsdf', 'sdf@sdf', 'sdf', 'asda', '2016-03-28 00:41:43'),
(58, 'Łabądź', 'Śćiążęź', 'sdf@sdf', 'sdf', 'sdf', '2016-03-28 00:42:49'),
(59, 'ŁĄćżźę', 'sdf', 'sdf@sfsd', 'bćżąg', 'Łągiew', '2016-03-28 00:44:44'),
(60, 'asdfłść', 'asdf', 'asdf@adg', 'asdf', 'dgads', '2016-03-28 15:06:33'),
(61, 'Dramałś', 'Drama', 'drama@dr.pl', 'dramat', 'dramat', '2016-03-30 17:42:05'),
(62, 'Łukasz', 'Łukaszewski', 'lukash@gmail.com', 'lukkas', 'haslolukkasa', '2016-03-30 18:21:15'),
(63, 'Antoni', 'Macierewicz', 'macierewi@cz.pl', 'macierewicz', 'macierewicz', '2016-03-30 20:16:32'),
(64, 'Jan94', 'Kowalski94', 'fs@fd.pl', 'jan94', 'janjan9494', '2016-04-03 16:14:10'),
(65, 'Krzysztof', 'Krawczyk', 'kraw@czyk.pl', 'krawczyk', 'krawczyk123', '2016-04-08 15:43:42');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `gambittabela`
--
ALTER TABLE `gambittabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `gambittabela`
--
ALTER TABLE `gambittabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
