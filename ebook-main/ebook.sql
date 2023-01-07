-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 10:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(10) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `publisher` varchar(200) NOT NULL,
  `rating` int(30) NOT NULL,
  `price` int(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `bname`, `author`, `publisher`, `rating`, `price`, `category`, `url`) VALUES
(29, 'Harry Potter 1', 'J. K. Rowling', 'Smith Publishers', 4, 399, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/harry-potter-book-1.pdf'),
(30, 'Harry Potter And The Chamber of Secrets', 'J. K. Rowling', 'Smith Publishers', 5, 499, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/HP-chamber-of-secret.pdf'),
(31, 'Harry Potter And The Prisoner of Azkaban(3)', 'J. K. Rowling', 'Smith Publishers', 5, 599, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/Harry-potter-prison-of-azkaban.pdf'),
(32, 'Harry Potter And The Goblet of Fire(4)', 'J. K. Rowling', 'Smith Publishers', 4, 699, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/HP-goblet-of-fire.pdf'),
(33, 'Harry Potter And The Order of The Phoenix', 'J. K. Rowling', 'Smith Publishers', 2, 799, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/harry-potter-and-the-order-of-the-phoenix.pdf'),
(34, 'Harry Potter And The Half-blood Prince(6)', 'J. K. Rowling', 'Smith Publishers', 4, 899, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/HP-half-blood-prince.pdf'),
(35, 'Harry Potter and the Deathly Hallows', 'J. K. Rowling', 'Smith Publishers', 5, 999, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/Harry-Potter-and-the-Deathly-Hallows.pdf'),
(36, 'Harry Potter And The Cursed Child(8)', 'J. K. Rowling', 'Smith Publishers', 5, 1099, 'Fantasy', 'https://free.epubebooks.net/ebooks/books/Harry-Potter-Cursed-Child.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `uid` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `tid` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`uid`, `bid`, `tid`, `date`) VALUES
(2, 29, 711, '2022-02-01'),
(2, 30, 946, '2022-02-01'),
(2, 31, 462, '2022-02-01'),
(2, 32, 886, '2022-02-01'),
(6, 33, 634, '2022-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `mot` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `totalamt` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `mot`, `date`, `totalamt`) VALUES
(462, 'upi', '2022-02-01', '599'),
(634, 'upi', '2022-02-02', '799'),
(711, 'upi', '2022-02-01', '399'),
(886, 'upi', '2022-02-01', '699'),
(946, 'upi', '2022-02-01', '499');

-- --------------------------------------------------------

--
-- Table structure for table `userbooks`
--

CREATE TABLE `userbooks` (
  `uid` int(10) NOT NULL,
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userbooks`
--

INSERT INTO `userbooks` (`uid`, `bid`) VALUES
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(6, 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `phone` decimal(10,0) DEFAULT NULL,
  `pswd` varchar(50) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `phone`, `pswd`, `id`) VALUES
('admin', 'admin@ebook.com', '6969696969', 'admin', 1),
('anmol', 'anmolrk096322@gmail.com', '7892539801', 'anmol', 2),
('amogh', 'amogh@gmai;.com', '9999999999', 'amogh', 3),
('darshan', 'darshan@gmail.com', '9878987788', 'darshan', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`uid`,`bid`,`tid`),
  ADD KEY `fk_to_bid` (`bid`),
  ADD KEY `fk_to_tid` (`tid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userbooks`
--
ALTER TABLE `userbooks`
  ADD PRIMARY KEY (`uid`,`bid`),
  ADD KEY `bid_fk` (`bid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_to_bid` FOREIGN KEY (`bid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_to_tid` FOREIGN KEY (`tid`) REFERENCES `transaction` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_to_uid` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `userbooks`
--
ALTER TABLE `userbooks`
  ADD CONSTRAINT `bid_fk` FOREIGN KEY (`bid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE,
  ADD CONSTRAINT `uid_fk` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
