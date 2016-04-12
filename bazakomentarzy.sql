-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 12 Kwi 2016, 18:42
-- Wersja serwera: 10.1.10-MariaDB
-- Wersja PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bazakomentarzy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `id` int(11) NOT NULL,
  `komentarz` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`id`, `komentarz`) VALUES
(1, 'Pierwszy komentarz.'),
(2, 'Pierwszy komentarz.'),
(3, 'Drugi komentarz.'),
(4, 'Drugi komentarz.'),
(5, 'Drugi komentarz.'),
(6, 'fasdf'),
(7, 'fasdf'),
(8, 'fasdf'),
(9, 'fasdf'),
(10, 'fasdf'),
(11, 'Kurdebele'),
(12, 'fsaeeeeee'),
(13, 'hiehuehuehue'),
(14, 'fsdfa'),
(15, 'rgregege'),
(16, 'vsdvdsvd'),
(17, 'vdrrrrr'),
(18, 'Rzeka wzdÅ‚uÅ¼ statku wrzaÅ‚a pienistemi smugami. DostrzegÅ‚ wÅ›rÃ³d zapadajÄ…cych ciemnoÅ›ci, Å¼e kuter miota siÄ™ na jednej linji z okrÄ™tem, jakby urzeczony przez prÄ…d i wiatr â€” ktÃ³re przez chwilÄ™ osadziÅ‚y go na miejscu. Jim usÅ‚yszaÅ‚ niewy'),
(19, 'Rzeka wzdÅ‚uÅ¼ statku wrzaÅ‚a pienistemi smugami. DostrzegÅ‚ wÅ›rÃ³d zapadajÄ…cych ciemnoÅ›ci, Å¼e kuter miota siÄ™ na jednej linji z okrÄ™tem, jakby urzeczony przez prÄ…d i wiatr â€” ktÃ³re przez chwilÄ™ osadziÅ‚y go na miejscu. '),
(20, 'Rzeka wzdÅ‚uÅ¼ statku wrzaÅ‚a pienistemi smugami. DostrzegÅ‚ wÅ›rÃ³d zapadajÄ…cych ciemnoÅ›ci, Å¼e kuter miota siÄ™ na jednej linji z okrÄ™tem, jakby urzeczony przez prÄ…d i wiatr â€” ktÃ³re przez chwilÄ™ osadziÅ‚y go na miejscu. Jim usÅ‚yszaÅ‚ niewy'),
(21, 'u wrzaÅ‚a pienistemi smugami. DostrzegÅ‚ wÅ›rÃ³d zapadajÄ…cych ciemnoÅ›ci, Å¼e kuter miota siÄ™ na jednej linji z okrÄ™tem, jakby urzeczony przez prÄ…d i wiatr â€” ktÃ³re przez chwilÄ™ osadziÅ‚y go na miejscu. Jim usÅ‚yszaÅ‚ niewyraÅºnie gÅ‚os wrzesz'),
(22, 'wefwfewdd'),
(23, 'wefwfewdd'),
(24, 'DodawaÄ‡ i czytaÄ‡ komentarze moÅ¼e tylko osoba zalogowana. Wszystkie komentarze trafiajÄ… do bazy danych. W przypadku braku komentarzy wyÅ›wietla siÄ™ informacja :0 komentarzy. WyÅ›wietlane jest ostatnich 5 komentarzy. Komentarz nie moÅ¼e przekroczy'),
(25, 'Komentarz nie moÅ¼e przekroczyÄ‡ 5000 znakÃ³w. PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki,'),
(26, 'PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki, i kominy fabryczne rozsiane po skraju okoliczn'),
(27, 'PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki, i kominy fabryczne rozsiane po skraju okoliczn'),
(28, 'PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki, i kominy fabryczne rozsiane po skraju okolicznej pÅ‚aszczyzny, wznoszÄ…ce siÄ™ prostopadle na tle brudnego nieba;'),
(29, 'PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki, i kominy fabryczne rozsiane po skraju okolicznej pÅ‚aszczyzny, wznoszÄ…ce siÄ™ prostopadle na tle brudnego nieba;'),
(30, 'PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki, i kominy fabryczne rozsiane po skraju okolicznej pÅ‚aszczyzny, wznoszÄ…ce siÄ™ prostopadle na tle brudnego nieba;'),
(31, 'PatrzyÅ‚ stamtÄ…d czÄ™sto wdÃ³Å‚ z pogardÄ… czÅ‚owieka, ktÃ³ry ma bÅ‚ysnÄ…Ä‡ odwagÄ… wÅ›rÃ³d niebezpieczeÅ„stw; ogarniaÅ‚ wzrokiem spokojnÄ… gromadÄ™ dachÃ³w, przeciÄ™tÄ… na dwoje brunatnym nurtem rzeki, i kominy fabryczne rozsiane po skraju okolicznej pÅ‚aszczyzny, wznoszÄ…ce siÄ™ prostopadle na tle brudnego nieba;'),
(32, 'Pisz pisz pisz'),
(33, 'ÅÄ…czy z bazÄ… zapisuje i wczytuje z niej poniÅ¼ej, ostatnich 7 pozycji. DostÄ™pne wyÅ‚Ä…cznie dla zalogowanych.'),
(34, 'vdrrrrr'),
(35, 'vdrrrrr'),
(36, ' Deszcz ciÄ…Å‚ ukoÅ›nemi pasmami, ktÃ³re to siekÅ‚y, to znikaÅ‚y, a od czasu do czasu odsÅ‚aniaÅ‚ siÄ™ na chwilÄ™ przed Jimem groÅºny widok kotÅ‚ujÄ…cego siÄ™ nurtu, drobny stateczek podrzucany falami, miotajÄ…cy siÄ™ wzdÅ‚uÅ¼ brzegu, nieruchome budynki wÅ›rÃ³d pÄ™dzÄ…cej mgÅ‚y, szerokie promy rozkoÅ‚ysane ciÄ™Å¼ko na kotwicy, obszerne pÅ‚ywajÄ…ce pomosty, ktÃ³re bujaÅ‚y siÄ™ w gÃ³rÄ™ i w dÃ³Å‚, przesÅ‚oniÄ™te bryzgami. KaÅ¼dy nastÄ™pny poryw wichru zdawaÅ‚ siÄ™ zmiataÄ‡ to wszystko. Powietrze byÅ‚o peÅ‚ne lecÄ…cej wody. CzuÅ‚o siÄ™ jakÄ…Å› dzikÄ… celowoÅ›Ä‡ w burzy, wÅ›ciekÅ‚Ä… zawziÄ™toÅ›Ä‡ w huku wiatru, w brutalnym zgieÅ‚ku ziemi i nieba; Jim miaÅ‚ wraÅ¼enie iÅ¼ to wszystko zwraca siÄ™ przeciw niemu i trwoga zaparÅ‚a mu oddech. StaÅ‚ bez ruchu.'),
(37, 'asdflfsadlkfjslafjljfeifjsfhosilgkxcnofieonfdklf'),
(38, 'joihgouhuhuhrrhuuururururururur'),
(39, 'wefewfwe\r\n'),
(40, 'efaefaeaesfffff'),
(41, 'efaefaeaesfffff'),
(42, 'efaefaeaesfffff'),
(43, 'efaefaeaesfffff'),
(44, 'gfhgfhgfhfhfghgfh'),
(45, 'gfhgfhgfhfhfghgfh'),
(46, 'weeeeee'),
(47, 'hhhhhhhhhhhhhhhh'),
(48, 'hhhhhhhhhhhhhhhh'),
(49, 'hhhhhhhhhhhhhhhh'),
(50, 'rfere'),
(51, 'afefe'),
(53, 'ewfw'),
(54, 'ttytytyt'),
(55, '<a href="logowanie.php">Logowanie</a>'),
(56, '&lt;a href=&quot;logowanie.php&quot;&gt;Logiwanie&lt;/a&gt;'),
(57, 'ÅÅšÄ†Å»Å¹Ä˜Ä˜Ä˜Ä™Å¼ÅºÅ›Ä‡Ä…'),
(58, 'https://duckduckgo.com/?t=lm&amp;q=header+location+bottom+of+page&amp;ia=qa'),
(59, 'dslakfj'),
(60, 'fsjleifse'),
(61, 'ewfwef'),
(62, 'ssss'),
(63, 'fdsfsfs'),
(64, 'fesfs'),
(65, 'foo'),
(66, 'ewfewfwe'),
(67, 'dsfsa'),
(68, 'wefwe'),
(69, 'asdf'),
(70, 'sdffeefe'),
(71, 'ljoijjjijppj'),
(72, 'thrthr'),
(74, 'fsdf'),
(75, 'sfds sdf  sdfsdf sdf sdf sdfsdf sdfsdf sdfsdf sdfsdfdsf sdfsdfs sdfsdfs sdfsdf sdfsdf ssdf sdfesdfsd fssdfsd  dsfsdfsdf  sdfsdfsdfsd sdfsdf'),
(76, 'asdf'),
(77, 'StawiaÅ‚ czoÅ‚o dzikim na podzwrotnikowych wybrzeÅ¼ach, uÅ›mierzaÅ‚ bunty na peÅ‚nem morzu, i w drobnem cz&oacute;Å‚enku wÅ›r&oacute;d oceanu budziÅ‚ ducha w zrozpaczonych ludziach &mdash; bÄ™dÄ…c zawsze wzorem obowiÄ…zkowoÅ›ci &mdash; niezÅ‚omny jak bohater z ksiÄ…Å¼ki. &thinsp;&mdash; CoÅ› siÄ™ tam staÅ‚o. ChodÅºcie no! &thinsp;SkoczyÅ‚ na r&oacute;wne nogi. ChÅ‚opcy wspinali siÄ™ po drabinach. Na g&oacute;rnym pokÅ‚adzie sÅ‚ychaÄ‡ byÅ‚o gwaÅ‚townÄ… bieganinÄ™ i krzyki, a gdy Jim wydostaÅ‚ siÄ™ przez lukÄ™, stanÄ…Å‚ jak wryty w oszoÅ‚omieniu. &thinsp;ByÅ‚ zmierzch zimowego dnia. Wicher wzmagaÅ‚ siÄ™ juÅ¼ od poÅ‚udnia, zatrzymujÄ…c ruch na rzece i dÄ…Å‚ teraz z siÅ‚Ä… huraganu; dorywcze jego wybuchy grzmiaÅ‚y jak salwy wielkich armat nad oceanem. Deszcz ciÄ…Å‚ ukoÅ›nemi pasmami, kt&oacute;re to siekÅ‚y, to znikaÅ‚y, a od czasu do czasu odsÅ‚aniaÅ‚ siÄ™ na chwilÄ™ przed Jimem groÅºny widok kotÅ‚ujÄ…cego siÄ™ nurtu, drobny stateczek podrzucany falami, miotajÄ…cy siÄ™ wzdÅ‚uÅ¼ brzegu, nieruchome budynki wÅ›r&oacute;d pÄ™dzÄ…cej mgÅ‚y, szerokie promy rozkoÅ‚ysane ciÄ™Å¼ko na kotwicy, obszerne pÅ‚ywajÄ…ce pomosty, kt&oacute;re bujaÅ‚y siÄ™ w g&oacute;rÄ™ i w d&oacute;Å‚, przesÅ‚oniÄ™te bryzgami. KaÅ¼dy nastÄ™pny poryw wichru zdawaÅ‚ siÄ™ zmiataÄ‡ to wszystko. Powietrze byÅ‚o peÅ‚ne lecÄ…cej wody. CzuÅ‚o siÄ™ jakÄ…Å› dzikÄ… celowoÅ›Ä‡ w burzy, wÅ›ciekÅ‚Ä… zawziÄ™toÅ›Ä‡ w huku wiatru, w brutalnym zgieÅ‚ku ziemi i nieba; Jim miaÅ‚ wraÅ¼enie iÅ¼ to wszystko zwraca siÄ™ przeciw niemu i trwoga zaparÅ‚a mu oddech. StaÅ‚ bez ruchu. ZdawaÅ‚o mu siÄ™ Å¼e go wir jakiÅ› porywa. &thinsp;PotrÄ…cano go. &bdquo;Kuter na wodÄ™!&ldquo; ChÅ‚opcy przebiegali koÅ‚o niego. PrzybrzeÅ¼ny statek, chcÄ…c siÄ™ schroniÄ‡ u lÄ…du, zderzyÅ‚ siÄ™ z zakotwiczonym szkunerem; jeden z instruktor&oacute;w okrÄ™tu byÅ‚ Å›wiadkiem tego wypadku. ChÅ‚opcy wÅ‚azili tÅ‚umnie na barjerÄ™, czepiali siÄ™ gromadnie Åº&oacute;rawik&oacute;w szalupowych. &bdquo;Zderzenie. TuÅ¼ przed nami. Pan Symons widziaÅ‚&ldquo;. '),
(78, '1234567890987654321234567890fggdfgdf'),
(79, 'asdfewf');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
