-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019-04-10 05:58:12
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 7.1.24

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
  `d_people` varchar(255) NOT NULL,
  `d_category` varchar(255) NOT NULL,
  `d_class` varchar(255) NOT NULL,
  `d_img` varchar(255) NOT NULL,
  `d_link` varchar(255) NOT NULL,
  `d_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `data`
--

INSERT INTO `data` (`d_id`, `d_name`, `d_people`, `d_category`, `d_class`, `d_img`, `d_link`, `d_date`) VALUES
(1, '不散', '', '微電影', '資三智', '不散.png', 'https://youtu.be/pIgpnspTKeY', '2019-04-10 03:21:31'),
(18, '來不及說再見', '', '微電影', '資三智', '來不及說再見.png', 'https://www.youtube.com/watch?v=1VUmSAZY_SA3', '2019-04-10 03:21:38'),
(19, '情義相挺', '', '微電影', '資三智', '情義相挺.png', '	https://youtu.be/Mr_PIKZ-7qA', '2019-04-10 03:21:39'),
(20, '當我們同在一起', '', '微電影', '資三智', '當我們同在一起.png', 'https://youtu.be/dfEp6wHGMNE', '2019-04-10 03:21:41'),
(21, '讓彩虹更耀眼', '', '微電影', '資三智', '讓彩虹更耀眼.png', 'https://www.youtube.com/watch?v=-0p6rl3WIZc', '2019-04-10 03:21:45'),
(22, '愛「耳」趴', '', '直播行銷', '資三智', '愛「耳」趴.png', 'https://www.youtube.com/watch?v=KVUjGF7o3dc&feature=youtu.be', '2019-04-10 03:21:49'),
(23, '完美妝容唇釉', '', '直播行銷', '資三智', '完美妝容唇釉.png', 'https://www.youtube.com/watch?v=5R0j2mowbuY&feature=youtu.be', '2019-04-10 03:21:50'),
(24, '有了小愛，生活無礙', '', '直播行銷', '資三智', '有了小愛，生活無礙.png', 'https://www.youtube.com/watch?v=O1cmWR2KDmw&feature=youtu.be', '2019-04-10 03:21:53'),
(25, '智慧世代你我都在', '', '直播行銷', '資三智', '智慧世代你我都在.png', 'https://www.youtube.com/watch?v=FLS6HKfKAZI&feature=youtu.be', '2019-04-10 03:21:54'),
(26, '手機人生', '', '直播行銷', '資三智', '手機人生.png', 'https://www.youtube.com/watch?v=DORp-a7Z4yU&fbclid=IwAR3R5x9HKlGoIPH01B-G6vpdbH_N6ZPyCfVN6USlWPU6Q0aBSQgodd9e1zE', '2019-04-10 03:21:55'),
(27, '做自己', '', '性別平等', '資三智', '做自己.png', 'https://www.youtube.com/watch?v=bcyjMktEk4M&feature=youtu.be', '2019-04-10 03:22:00'),
(28, '我們都一樣', '', '性別平等', '資三智', '我們都一樣.png', 'https://youtu.be/Cw0TfEtln-4', '2019-04-10 03:22:02'),
(29, '同性協力，打抱不平', '', '性別平等', '資三智', '同性協力，打抱不平.png', 'https://youtu.be/LzEw7HTIyUY', '2019-04-10 03:22:04'),
(30, '勇敢做自己', '', '性別平等', '資三智', '勇敢做自己.png', 'https://www.youtube.com/watch?v=kMPARcYgEso&feature=youtu.be', '2019-04-10 03:22:06'),
(31, '每個樣子都是我', '', '自我介紹', '資三智', '每個樣子都是我.png', 'https://www.youtube.com/watch?v=FzdycqUpCMs', '2019-04-10 03:22:11'),
(32, '自我介紹', '', '自我介紹', '資三智', '03自我介紹.png', 'https://youtu.be/HJ4gr-hlLFY', '2019-04-10 03:22:13'),
(33, '不一樣的自我介紹', '', '自我介紹', '資三智', '不一樣的自我介紹.png', 'https://youtu.be/DjuklVlqSR8', '2019-04-10 03:22:14'),
(34, '自我介紹', '', '自我介紹', '資三智', '27自我介紹.png', 'https://youtu.be/dfEp6wHGMNE', '2019-04-10 03:22:15'),
(35, '平凡的我', '', '自我介紹', '資三智', '平凡的我.png', 'https://youtu.be/NbqSYfD5p8U', '2019-04-10 03:22:17'),
(36, '我的未來不是夢', '', '自我介紹', '資三智', '我的未來不是夢.png', 'https://youtu.be/insCs15BaAw', '2019-04-10 03:22:22'),
(37, 'High school life', '', '高中歲月', '資三智', 'HighShoollife.png', 'https://youtu.be/lhLxY1gW6Eg', '2019-04-10 03:22:31'),
(38, '我的青春日記', '', '高中歲月', '資三智', '我的青春日記.png', 'https://youtu.be/DKMX6ByDgw8', '2019-04-10 03:22:33'),
(39, '高中123', '', '高中歲月', '資三智', '高中123.png', 'https://youtu.be/6DVU5xYz4OY', '2019-04-10 03:22:34'),
(40, '致。青春', '', '高中歲月', '資三智', '致。青春.png', 'https://youtu.be/2z22E5rzImw', '2019-04-10 03:22:35'),
(41, '致資三智:三年的縮影', '', '高中歲月', '資三智', '致資三智-三年的縮影.png', 'https://youtu.be/6OHraSGem1c', '2019-04-10 03:22:37'),
(42, '時光機-我的高中三年', '', '高中歲月', '資三智', '時光機-我的高中三年.png', 'https://youtu.be/Nnn4lVLGLkk', '2019-04-10 03:23:51'),
(43, '高中歲月', '', '高中歲月', '資三智', '高中歲月.png', 'https://youtu.be/Hy2tzzS4lSI', '2019-04-10 03:26:43'),
(44, '高中回憶錄', '', '高中歲月', '資三智', '高中回憶錄.png', 'https://youtu.be/wPqzASMqZIA', '2019-04-10 03:26:44'),
(45, '情友獨鍾', '組員：王亭文、蔡雯妃、許詩涵、潘妮君、魏文妤', '微電影', '資三仁', '情友獨鍾.png', 'https://youtu.be/oGbDrAnWxa4', '2019-04-10 03:27:20'),
(46, '舞女，母女', '組員：王聖勳、吳冠緯、莊憲宗、張絮涵、顏嘉伶', '微電影', '資三仁', '舞女，母女.png', 'https://youtu.be/Ak6Ab0OIZGU', '2019-04-10 03:27:21'),
(47, '友情友義', '組員：李宗翰、林永泰、沈侑樺、葉家妤、詹文綺', '微電影', '資三仁', '友情友義.png', 'https://youtu.be/URS8KSW7qeo', '2019-04-10 03:27:22'),
(48, '友誼可貴', '組員：李芯萍、黃子綾、許琇璟', '微電影', '資三仁', '友誼可貴.png', 'https://youtu.be/1NnOUlk6v2s', '2019-04-10 03:27:24'),
(49, '誤會', '組員：黃鈺雯、林彥君、余竹萱、施昶志、胡曉萍', '微電影', '資三仁', '誤會.png', 'https://youtu.be/G7BVdjOyjtQ', '2019-04-10 03:27:27'),
(50, 'IPhone7 銷劇場', '組員：吳冠緯、張絮涵、顏嘉伶', '直播行銷', '資三仁', 'IPhone7 銷劇場.png', 'https://youtu.be/dqwXVniSUHw', '2019-04-10 03:27:34'),
(51, '讓我們為Ubike一『騎』行動', '組員：李芯萍、黃子綾、許琇璟', '直播行銷', '資三仁', '讓我們為Ubike一『騎』行動.png', 'https://youtu.be/xoEqAIEp5ns', '2019-04-10 03:27:35'),
(52, '壽司', '組員：葉家妤、沈侑樺、詹文綺', '直播行銷', '資三仁', '壽司.png', 'https://youtu.be/KTxoj6GghQo', '2019-04-10 03:27:36'),
(53, '性別不是唯一，尊重才是唯一', '組員：王聖勛、李宗翰、李芯萍、林永泰、黃鈺雯、莊憲宗', '性別平等', '資三仁', '性別不是唯一，尊重才是唯一.png', 'https://youtu.be/Bv18QUa72Ng', '2019-04-10 03:27:44'),
(54, '男孩女孩跨性別 各色各樣都特別', '組員：呂如玉、邱玉青、葉家妤、潘妮君、魏文妤', '性別平等', '資三仁', '男孩女孩跨性別 各色各樣都特別.png', 'https://youtu.be/u4lNPgIabMI', '2019-04-10 03:27:45'),
(55, '尊重的重要性', '組員：林彥君、余竹萱、施昶志、胡曉萍、顏建良、周怡君', '性別平等', '資三仁', '尊重的重要性.png', 'https://youtu.be/NA9wdSqt6R0', '2019-04-10 03:27:47'),
(56, '別為了性別影響親情', '組員：周奕凱、陳威諺、顏嘉伶、黃琬婷、張智翔、林明憲', '性別平等', '資三仁', '別為了性別影響親情.png', 'https://youtu.be/g-XEqiTHgWw', '2019-04-10 03:27:48'),
(57, '自我介紹-王聖勛', '組員：王聖勛', '自我介紹', '資三仁', '自我介紹-王聖勛.png', 'https://youtu.be/ApQ7aRaQdq4', '2019-04-10 03:27:53'),
(58, '自我介紹-沈侑樺', '組員：沈侑樺', '自我介紹', '資三仁', '自我介紹-沈侑樺.png', 'https://youtu.be/Qa71uxH9pok', '2019-04-10 03:27:55'),
(59, '自我介紹-張絮涵', '組員：張絮涵', '自我介紹', '資三仁', '自我介紹-張絮涵.png', 'https://youtu.be/Sr88g7qvajQ', '2019-04-10 03:27:56'),
(60, '自我介紹-黃琬婷', '組員：黃琬婷', '自我介紹', '資三仁', '自我介紹-黃琬婷.png', 'https://youtu.be/Zz0cZickKMw', '2019-04-10 03:27:57'),
(61, '高中歲月-蔡雯妃', '組員：蔡雯妃', '高中歲月', '資三仁', '高中歲月-蔡雯妃.png', 'https://youtu.be/WKbf20VOijI', '2019-04-10 03:28:04'),
(62, '高中歲月-沈侑樺', '組員：沈侑樺', '高中歲月', '資三仁', '高中歲月-沈侑樺.png', 'https://youtu.be/Rc1emSyZMJA', '2019-04-10 03:28:06'),
(63, '高中歲月-周奕凱', '組員：周奕凱', '高中歲月', '資三仁', '高中歲月-周奕凱.png', 'https://youtu.be/8VLYnJ6dT9Y', '2019-04-10 03:28:05'),
(64, '高中歲月-黃琬婷', '組員：黃琬婷', '高中歲月', '資三仁', '高中歲月-黃琬婷.png', 'https://youtu.be/zAFQL6E22_g', '2019-04-10 03:28:08'),
(65, '高中歲月-李芯萍', '組員：李芯萍', '高中歲月', '資三仁', '高中歲月-李芯萍.png', 'https://youtu.be/ZXBYz6Ch9rM', '2019-04-10 03:28:09');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`d_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `data`
--
ALTER TABLE `data`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
