-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 04 月 08 日 09:51
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ae`
--

-- --------------------------------------------------------

--
-- 資料表結構 `data`
--

CREATE TABLE `data` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_class` varchar(255) NOT NULL,
  `d_img` varchar(255) NOT NULL,
  `d_link` varchar(255) NOT NULL,
  `d_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `data`
--

INSERT INTO `data` (`d_id`, `d_name`, `d_class`, `d_img`, `d_link`, `d_date`) VALUES
(1, '不散', '資三智', '不散.png', 'https://youtu.be/pIgpnspTKeY', '2019-04-08 07:38:16'),
(18, '來不及說再見', '資三智', '來不及說再見.png', 'https://www.youtube.com/watch?v=1VUmSAZY_SA3', '2019-04-08 07:38:16'),
(19, '情義相挺', '資三智', '情義相挺.png', '	https://youtu.be/Mr_PIKZ-7qA', '2019-04-08 07:38:16'),
(20, '當我們同在一起', '資三智', '當我們同在一起.png', 'https://youtu.be/dfEp6wHGMNE', '2019-04-08 07:38:16'),
(21, '讓彩虹更耀眼', '資三智', '讓彩虹更耀眼.png', 'https://www.youtube.com/watch?v=-0p6rl3WIZc', '2019-04-08 07:38:16'),
(22, '愛「耳」趴', '資三智', '愛「耳」趴.png', 'https://www.youtube.com/watch?v=KVUjGF7o3dc&feature=youtu.be', '2019-04-08 07:38:16'),
(23, '完美妝容唇釉', '資三智', '完美妝容唇釉.png', 'https://www.youtube.com/watch?v=5R0j2mowbuY&feature=youtu.be', '2019-04-08 07:38:16'),
(24, '有了小愛，生活無礙', '資三智', '有了小愛，生活無礙.png', 'https://www.youtube.com/watch?v=O1cmWR2KDmw&feature=youtu.be', '2019-04-08 07:38:16'),
(25, '智慧世代你我都在', '資三智', '智慧世代你我都在.png', 'https://www.youtube.com/watch?v=FLS6HKfKAZI&feature=youtu.be', '2019-04-08 07:38:16'),
(26, '手機人生', '資三智', '手機人生.png', 'https://www.youtube.com/watch?v=DORp-a7Z4yU&fbclid=IwAR3R5x9HKlGoIPH01B-G6vpdbH_N6ZPyCfVN6USlWPU6Q0aBSQgodd9e1zE', '2019-04-08 07:38:16'),
(27, '做自己', '資三智', '做自己.png', 'https://www.youtube.com/watch?v=bcyjMktEk4M&feature=youtu.be', '2019-04-08 07:38:16'),
(28, '我們都一樣', '資三智', '我們都一樣.png', 'https://youtu.be/Cw0TfEtln-4', '2019-04-08 07:38:16'),
(29, '同性協力，打抱不平', '資三智', '同性協力，打抱不平.png', 'https://youtu.be/LzEw7HTIyUY', '2019-04-08 07:38:16'),
(30, '勇敢做自己', '資三智', '勇敢做自己.png', 'https://www.youtube.com/watch?v=kMPARcYgEso&feature=youtu.be', '2019-04-08 07:38:16'),
(31, '每個樣子都是我', '資三智', '每個樣子都是我.png', 'https://www.youtube.com/watch?v=FzdycqUpCMs', '2019-04-08 07:38:16'),
(32, '自我介紹', '資三智', '03自我介紹.png', 'https://youtu.be/HJ4gr-hlLFY', '2019-04-08 07:38:16'),
(33, '不一樣的自我介紹', '資三智', '不一樣的自我介紹.png', 'https://youtu.be/DjuklVlqSR8', '2019-04-08 07:38:16'),
(34, '自我介紹', '資三智', '27自我介紹.png', 'https://youtu.be/dfEp6wHGMNE', '2019-04-08 07:38:16'),
(35, '平凡的我', '資三智', '平凡的我.png', 'https://youtu.be/NbqSYfD5p8U', '2019-04-08 07:38:16'),
(36, '我的未來不是夢', '資三智', '我的未來不是夢.png', 'https://youtu.be/insCs15BaAw', '2019-04-08 07:38:16');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- 在傾印的資料表使用自動增長(AUTO_INCREMENT)
--

--
-- 使用資料表自動增長(AUTO_INCREMENT) `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
