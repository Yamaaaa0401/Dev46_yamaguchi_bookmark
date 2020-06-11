-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2020 at 01:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gs_bookmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `gs_bm_table`
--

CREATE TABLE `gs_bm_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `title`, `url`, `comment`, `indate`) VALUES
(1, 'お気入りの本', 'myfavorite@book.jp', 'これが最初のブックマーク', '2020-06-08 14:15:44'),
(5, 'ちいさなくれよん', 'https://honto.jp/netstore/pd-book_02321852.html?cid=ip_ec_toku_15_1_10_f_04', 'ちいさなコメント', '2020-06-08 15:25:18'),
(6, 'ごんぎつね', 'https://honto.jp/netstore/pd-book_02216664.html?cid=ip_ec_toku_15_1_10_f_03', 'ごんー', '2020-06-08 15:28:36'),
(7, 'ちいさなくれよん', 'https://honto.jp/netstore/pd-book_02321852.html?cid=ip_ec_toku_15_1_10_f_04', '', '2020-06-11 11:18:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
