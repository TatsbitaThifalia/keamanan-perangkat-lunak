SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(123) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MEMORY AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `login` (`id`, `email`, `username`, `password`) VALUES
(7, 'admin@gmail.com', 'admin', 'admin'),
(6, 'member@gmail.com', 'member', 'member'),
(5, 'lunara@gmail.com', 'lunara', 'lunara');
COMMIT;