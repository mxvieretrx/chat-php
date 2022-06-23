-- База данных: `e_chat`

-- Создание таблицы сообщений
CREATE TABLE `messages` (
  `id` int(5) NOT NULL auto_increment,
  `login` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=19 ;


-- Создание таблицы пользователей
CREATE TABLE `users` (
  `id` int(5) NOT NULL auto_increment,
  `login` varchar(200) NOT NULL,
  `password` varchar(400) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;