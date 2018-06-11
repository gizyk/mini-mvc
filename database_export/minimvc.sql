-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2018, 16:44
-- Wersja serwera: 10.1.22-MariaDB
-- Wersja PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `minimvc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pages`
--

INSERT INTO `pages` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum mollis arcu in consectetur. Ut luctus vitae turpis quis tincidunt. Etiam facilisis nisi eu nulla vestibulum eleifend. Proin id nulla dignissim, sollicitudin nunc eu, hendrerit erat. Donec rutrum accumsan purus, in viverra mi tincidunt in. Pellentesque suscipit orci condimentum est aliquet ornare. Etiam egestas tristique libero non luctus. In convallis erat ut placerat gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc luctus lorem in mollis aliquet. Nullam eget ex finibus, venenatis magna id, tristique orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum nulla nulla, et elementum est pellentesque at.', '2018-06-11 13:46:26', '2018-06-11 13:46:26'),
(2, 'Fusce at ex', 'Fusce at ex fringilla, aliquet eros porttitor, tincidunt quam. Donec consectetur quam augue, nec ullamcorper ipsum interdum sed. Suspendisse nec dolor mi. Pellentesque venenatis tortor a ipsum rutrum, rutrum auctor diam viverra. Donec tincidunt sit amet enim non ultrices. Nunc non ullamcorper ex. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;', '2018-06-11 13:56:03', '2018-06-11 13:56:03'),
(3, 'Aenean auctor arcu', 'Aenean auctor arcu id faucibus fringilla. Fusce et ante sem. Vestibulum commodo risus sit amet lacus tincidunt consequat. Etiam rutrum nisl purus, congue ornare orci hendrerit non. Donec hendrerit, dui laoreet gravida vehicula, leo lacus interdum massa, quis faucibus felis felis eu diam. Aenean pretium nunc nec interdum placerat. Duis ut sapien et felis viverra pellentesque. Donec id risus at quam sodales porttitor. Suspendisse a elit nunc.', '2018-06-11 13:56:22', '2018-06-11 13:56:22'),
(4, 'Mauris ornare tristique lectus', 'Mauris ornare tristique lectus, sed pulvinar dui aliquam a. Phasellus sed lobortis diam, id ornare ex. Duis sollicitudin ullamcorper consectetur. Ut nec vulputate sapien. Quisque nec elementum odio. Donec volutpat augue et turpis imperdiet cursus quis a eros. Nunc vulputate leo et nisl tincidunt, nec fringilla metus imperdiet. Ut sit amet leo tempus, ultricies felis nec, aliquam magna. Morbi blandit metus nec ante mollis mattis. Integer vestibulum quam urna, ut eleifend eros tincidunt id.', '2018-06-11 13:56:29', '2018-06-11 13:56:29'),
(5, 'Vivamus feugiat, diam non', 'Vivamus feugiat, diam non consectetur congue, tortor eros hendrerit tortor, et pharetra urna risus in lacus. Nulla pulvinar nulla sit amet quam dapibus vehicula. Etiam congue facilisis mauris, a tristique leo tempor quis. Nulla erat lacus, dapibus in semper quis, pretium at ante. Donec efficitur, nisi et vulputate finibus, lorem quam rutrum ex, id tincidunt neque justo non magna. Vivamus dictum faucibus aliquet. Integer bibendum arcu vel fermentum tristique. Praesent pulvinar leo ac felis tristique tincidunt. Donec convallis lacinia nisl, sed congue urna accumsan at. Pellentesque id tortor quis lacus lobortis rutrum. Nunc consequat, diam vitae scelerisque dapibus, risus dui volutpat turpis, eu luctus ipsum sem mattis lectus.', '2018-06-11 13:56:33', '2018-06-11 13:56:33'),
(6, 'About', 'About us Page body.', '2018-06-11 15:20:09', '2018-06-11 15:20:09'),
(7, 'Home', 'Welcome at Home Page', '2018-06-11 15:21:32', '2018-06-11 15:21:32');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
