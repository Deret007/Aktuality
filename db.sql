CREATE TABLE IF NOT EXISTS `news` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `nadpis` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `datum` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;