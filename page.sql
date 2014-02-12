-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 07 2014 г., 16:51
-- Версия сервера: 5.5.32
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `vege`
--

-- --------------------------------------------------------

--
-- Структура таблицы `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `p_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `p_uri` varchar(255) NOT NULL COMMENT 'url страницы (p_url) имеет вид parent_url/p_urigroup/p_uri',
  `p_title` varchar(255) NOT NULL COMMENT 'заголовок страницы',
  `p_content` text NOT NULL COMMENT 'текст страницы в формате html',
  `p_status` tinyint(3) unsigned NOT NULL COMMENT '0 - не опубликована, 1 - опубликована',
  `p_pid` int(10) unsigned DEFAULT NULL COMMENT 'id родительской страницы',
  `p_owner_name` varchar(255) DEFAULT NULL COMMENT 'название класса модели, к которой относится страница',
  `p_owner_id` int(10) unsigned DEFAULT NULL COMMENT 'id модели, к которой относится страница',
  `meta_title` varchar(255) DEFAULT NULL COMMENT 'метаданные, title',
  `meta_description` text COMMENT 'метаданные, description',
  `meta_keywords` text COMMENT 'метаданные, keywords',
  `p_css` text COMMENT 'блок стилей страницы',
  `p_js` text COMMENT 'блок javaScript кода страницы',
  `p_url` varchar(255) NOT NULL COMMENT 'url страницы (p_url) имеет вид parent_url/p_urigroup/p_uri',
  `p_layout` varchar(255) NOT NULL COMMENT 'layout страницы',
  `p_template` varchar(255) NOT NULL COMMENT 'view страницы',
  `p_created` datetime NOT NULL COMMENT 'дата создания страницы',
  `p_updated` datetime NOT NULL COMMENT 'дата последнего изменения страницы',
  PRIMARY KEY (`p_id`),
  KEY `p_pid` (`p_pid`),
  KEY `p_owner_id` (`p_owner_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `page`
--

INSERT INTO `page` (`p_id`, `p_uri`, `p_title`, `p_content`, `p_status`, `p_pid`, `p_owner_name`, `p_owner_id`, `meta_title`, `meta_description`, `meta_keywords`, `p_css`, `p_js`, `p_url`, `p_layout`, `p_template`, `p_created`, `p_updated`) VALUES
(1, 'dfgdfgdfg', 'dfgdfgdfg dfgdfgdfg', 'jkldsbhgf  sgljdfdfljgg dfjgkldfgjbdf dfljbgdfjgklbdf dfjgb dfjbgfdkjg dfgdfg', 1, NULL, NULL, NULL, '123', '1234', '123,1234', '', '', 'dfgdfg/dfgdfgdfg', '23', '34', '0000-00-00 00:00:00', '2014-02-04 20:20:23'),
(2, '1', '1', '1', 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '2', '2', '2', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '3', '3', '3', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '4', '4', '4', 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '5', '5', '5', 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '123', '1234235 34545 ', '34535 345345 34534', 1, 5, NULL, NULL, '', '', '', '', '', '123/123', 'column2.php', 'main.php', '2014-02-07 18:32:52', '0000-00-00 00:00:00'),
(8, 'werwer', 'dfgdfgdfg', 'dfgdfg dfg dfgdf dfgdf ', 1, 7, NULL, NULL, '234', '23465', '456456', 'werwer', 'werwer', '123/123/werwer/werwer', 'column2.php', 'main.php', '2014-02-07 18:37:42', '0000-00-00 00:00:00'),
(9, 'sdfsdf', 'sdfsdf', 'dfsdfsdf', 0, 0, NULL, NULL, '', '', '', '', '', 'sdfsdf', 'column2.php', 'main.php', '2014-02-07 18:38:04', '0000-00-00 00:00:00'),
(10, 'hi', 'hi all', '<h2>Hi!</h2>', 0, 9, NULL, NULL, '123', '123', '123', '.css{}', 'var js;', 'sdfsdf/hi', 'main', 'simple', '2014-02-07 19:31:20', '0000-00-00 00:00:00'),
(11, 'second', 'two', 'this is second page', 1, 9, NULL, NULL, '', '', '', '', '', 'sdfsdf/second', 'main', 'simple', '2014-02-07 19:50:32', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
