-- admin account info ----------------------------------------
CREATE DATABASE IF NOT EXISTS `admin_acc`;
USE `admin_acc`;

CREATE TABLE IF NOT EXISTS `adminAcc` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `adminAcc` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$/co1YqtkfjbhEd9yZH1qxuScI7Hs2nbSqHJKBajlqt.sZPcqGGYhK');


-- create reservations info -----------------------------------
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `guest` VARCHAR(50) NOT NULL,
  `trans_date` VARCHAR(255) NOT NULL,
  `check_in` VARCHAR(255) NOT NULL,
  `check_out` VARCHAR(255) NOT NULL,
  `room_type` VARCHAR(255) NOT NULL,
  `room_qty` int NOT NULL,
  `assigned_room` VARCHAR(255) NOT NULL,
  `status` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `reservations` (`id`, `guest`, `trans_date`, `check_in`, `check_out`
, `room_type`, `room_qty`, `assigned_room`, `status`) VALUES
(1, 'admin warp', '2023-11-21', '2023-11-22', '2023-11-25', 'Standard', '2', '401', 'pending');
    


-- create Roomsinfo  -------------------------------
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `img` VARCHAR(50) NOT NULL,
  `accomodation` VARCHAR(255) NOT NULL,
  `avail_rooms` VARCHAR(255) NOT NULL,
  `room_from` VARCHAR(255) NOT NULL,
  `room_to` VARCHAR(255) NOT NULL,
  `price` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- create client user info -=----------------------------------
CREATE TABLE IF NOT EXISTS `client_users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(50) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `age` INT NOT NULL,
  `number` INT NOT NULL,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
