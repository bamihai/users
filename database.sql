DROP DATABASE IF EXISTS proiect_m;
CREATE DATABASE proiect_m;
USE proiect_m;
CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(20) NOT NULL,
	  password CHAR(40) NOT NULL
);
INSERT INTO users VALUES(NULL, "teo@mail.com", SHA("teo1234")),
                        (NULL, "antonio@mail.com", SHA("antonio1234"));


--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name_prod` varchar(100) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `color` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name_prod`, `detail`, `image`, `price`, `color`, `size`) VALUES
  (1, 'pantofi dama', 'piele intoarsa', '1.jpg', 90, 'Azuriu', '39'),
  (2, 'pantofi barbatesti', 'piele intoarsa', '2.jpg', 60, 'Rosu', '41')