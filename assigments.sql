--
-- БД: `phdsystem`
--

-- --------------------------------------------------------

--
-- Структура на таблица `assigments`
--

CREATE TABLE IF NOT EXISTS `assigments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
