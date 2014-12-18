--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) NOT NULL,
  `name` varchar(60) NOT NULL,
  `state` varchar(60) NOT NULL,
  `pass` varchar(225) NOT NULL,
  `phone` varchar(120) NOT NULL,
  `des` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `state`, `pass`, `phone`, `des`) VALUES
(1, '234234234@qq.com', 'towry', '普通', '343o43294823', '1823434923', 'jsdlfksdjfsdfsd'),
(2, 'towry@foxmail.com', 'tao', '普通', '23429382394', '13923423324', 'dsjflkjlfasdfsd');
