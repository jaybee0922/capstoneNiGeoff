-- CREATE DATABASE IF NOT EXISTS `registration__db`;
-- USE `registration__db`;

-- CREATE TABLE IF NOT EXISTS `registrationDB` (
--   `id` INT NOT NULL AUTO_INCREMENT,
--   `firstname` VARCHAR(50) NOT NULL,
--   `lastname` VARCHAR(50) NOT NULL,
--   `age` INT NOT NULL,
--   `username` VARCHAR(50) NOT NULL,
--   `password` VARCHAR(255) NOT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- INSERT INTO `registrationDB` (`id`, `username`, `password`, `firstname`, `lastname`, `age`) VALUES
-- (1, 'admin', 'admin', 'John', 'Doe', 25);

CREATE DATABASE IF NOT EXISTS `registration__db`;
USE `registration__db`;

CREATE TABLE IF NOT EXISTS `registrationDB` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(50) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `age` INT NOT NULL,
  `number` INT NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
