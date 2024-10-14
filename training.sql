-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2024 at 12:56 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@example.com', '123-456-7890', '123 Main St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(2, 'Jane Smith', 'jane@example.com', '987-654-3210', '456 Oak St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(3, 'Alice Johnson', 'alice@example.com', '555-123-4567', '789 Pine St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(4, 'Bob Williams', 'bob@example.com', '444-567-8912', '101 Maple St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(5, 'Charlie Brown', 'charlie@example.com', '222-987-6543', '202 Birch St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(6, 'Daisy Miller', 'daisy@example.com', '333-222-1111', '303 Cedar St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(7, 'Eve Davis', 'eve@example.com', '777-888-9999', '404 Elm St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(8, 'Frank Harris', 'frank@example.com', '111-333-5555', '505 Spruce St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(9, 'Grace Lee', 'grace@example.com', '666-777-8888', '606 Walnut St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(10, 'Hank Taylor', 'hank@example.com', '999-000-1111', '707 Chestnut St', '2024-10-12 06:51:25', '2024-10-12 06:51:25'),
(11, 'Ivy Green', 'ivy@example.com', '321-654-9870', '808 Palm St', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(12, 'Jack Hill', 'jack@example.com', '234-567-8901', '909 Cedar Ave', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(13, 'Kate Miller', 'kate@example.com', '890-123-4560', '101 Poplar St', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(14, 'Liam Clark', 'liam@example.com', '345-678-9012', '202 Willow St', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(15, 'Mia Evans', 'mia@example.com', '123-678-5432', '303 Magnolia Blvd', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(16, 'Noah Parker', 'noah@example.com', '987-234-8765', '404 Laurel St', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(17, 'Olivia White', 'olivia@example.com', '234-876-4321', '505 Redwood Dr', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(18, 'Paul Brown', 'paul@example.com', '654-789-1234', '606 Maple Ave', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(19, 'Quincy Smith', 'quincy@example.com', '987-654-3212', '707 Birch Rd', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(20, 'Rachel Adams', 'rachel@example.com', '345-678-2341', '808 Pine Ln', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(21, 'Sam Foster', 'sam@example.com', '789-012-3456', '909 Spruce Blvd', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(22, 'Tina Carter', 'tina@example.com', '456-789-0123', '101 Chestnut Ct', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(23, 'Umar Davis', 'umar@example.com', '321-123-6547', '202 Maple Grove', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(24, 'Vera Lewis', 'vera@example.com', '789-567-2341', '303 Oak Meadow', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(25, 'Will Scott', 'will@example.com', '987-987-1230', '404 Pinecrest Dr', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(26, 'Xena Gray', 'xena@example.com', '234-432-6789', '505 Birchwood', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(27, 'Yara Brooks', 'yara@example.com', '654-321-9874', '606 Cedar Glen', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(28, 'Zack Martin', 'zack@example.com', '876-123-2345', '707 Redwood Park', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(29, 'Adam Young', 'adam@example.com', '234-567-8910', '808 Willow Ln', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(30, 'Bella Hayes', 'bella@example.com', '987-654-2301', '909 Maple Ridge', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(31, 'Caleb Hughes', 'caleb@example.com', '123-234-4567', '101 Oak Hill', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(32, 'Diana Knight', 'diana@example.com', '345-678-8901', '202 Spruce Way', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(33, 'Ethan Reed', 'ethan@example.com', '678-789-2345', '303 Laurel Bend', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(34, 'Faith Harper', 'faith@example.com', '432-321-6780', '404 Chestnut St', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(35, 'George Lane', 'george@example.com', '890-567-1234', '505 Willow Wood', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(36, 'Hannah Cole', 'hannah@example.com', '765-432-1098', '606 Maple Brook', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(37, 'Isaac Ross', 'isaac@example.com', '567-890-1234', '707 Cedar Valley', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(38, 'Julia Webb', 'julia@example.com', '345-789-5670', '808 Pine Corner', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(39, 'Kevin Stone', 'kevin@example.com', '789-123-6543', '909 Birch Way', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(40, 'Linda Walsh', 'linda@example.com', '654-234-5678', '101 Oakview', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(41, 'Mark Blake', 'mark@example.com', '876-543-2109', '202 Redwood Path', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(42, 'Nina Kim', 'nina@example.com', '543-678-2345', '303 Maple Crest', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(43, 'Oscar Nash', 'oscar@example.com', '321-987-4321', '404 Laurel Grove', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(44, 'Penny Long', 'penny@example.com', '654-789-9876', '505 Cedar Park', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(45, 'Quinn Nash', 'quinn@example.com', '789-012-8901', '606 Pinehurst Dr', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(46, 'Rita Lowe', 'rita@example.com', '432-567-8765', '707 Willow Run', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(47, 'Steve Fox', 'steve@example.com', '234-567-8901', '808 Maple Walk', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(48, 'Tara Hale', 'tara@example.com', '890-345-6789', '909 Birch Pond', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(49, 'Uma Hill', 'uma@example.com', '567-432-1234', '101 Pine View', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(50, 'Victor Ray', 'victor@example.com', '678-543-2345', '202 Oak Bend', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(51, 'Wendy Lee', 'wendy@example.com', '123-456-7890', '303 Cedar Hill', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(52, 'Xander Hill', 'xander@example.com', '789-012-5678', '404 Willow Path', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(53, 'Yvonne King', 'yvonne@example.com', '890-123-3456', '505 Birch Bend', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(54, 'Zara Moore', 'zara@example.com', '654-987-1234', '606 Pine Knoll', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(55, 'Aaron Clark', 'aaron@example.com', '987-654-3210', '707 Maple Field', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(56, 'Brenda Fox', 'brenda@example.com', '123-456-6789', '808 Cedar Hill', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(57, 'Carl Martin', 'carl@example.com', '890-567-2345', '909 Oakview', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(58, 'Daphne Reed', 'daphne@example.com', '567-890-3456', '101 Laurel Way', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(59, 'Edward Wells', 'edward@example.com', '345-678-5678', '202 Pine Hollow', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(60, 'Fiona Harris', 'fiona@example.com', '432-987-6543', '303 Cedar Lane', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(61, 'Gavin White', 'gavin@example.com', '789-345-6789', '404 Oak Path', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(62, 'Helen Scott', 'helen@example.com', '654-789-0123', '505 Maple Field', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(63, 'Iris Neal', 'iris@example.com', '321-678-9876', '606 Willow Way', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(64, 'Jake Brown', 'jake@example.com', '234-123-4567', '707 Birch Walk', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(65, 'Karen Young', 'karen@example.com', '890-456-7891', '808 Cedar Trail', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(66, 'Lana West', 'lana@example.com', '567-321-8765', '909 Pinecrest', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(67, 'Mike Brown', 'mike@example.com', '345-789-0123', '101 Maple Dr', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(68, 'Nancy Ford', 'nancy@example.com', '789-654-2345', '202 Oak Meadow', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(69, 'Olga Price', 'olga@example.com', '654-567-8901', '303 Pine Ridge', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(70, 'Peter Knight', 'peter@example.com', '987-432-1234', '404 Cedar Brook', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(71, 'Quincy Miles', 'quincy.m@example.com', '234-567-2345', '505 Willow Ridge', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(72, 'Rose Ford', 'rose@example.com', '123-678-4567', '606 Oak Grove', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(73, 'Shane Cole', 'shane@example.com', '456-789-6789', '707 Maple Walk', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(74, 'Tom Black', 'tom@example.com', '890-321-5678', '808 Cedar Blvd', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(75, 'Ursula Blake', 'ursula@example.com', '321-567-8901', '909 Pine Hill', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(76, 'Vince Hall', 'vince@example.com', '654-890-2345', '101 Maple Glen', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(77, 'Walt King', 'walt@example.com', '123-654-7890', '202 Oak Corner', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(78, 'Xena Waters', 'xena.w@example.com', '432-123-7890', '303 Willow Ave', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(79, 'Yuri Novak', 'yuri@example.com', '789-456-0123', '404 Cedar Park', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(80, 'Zoe Clark', 'zoe@example.com', '567-890-2345', '505 Maple Hill', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(81, 'Alex Green', 'alex.g@example.com', '321-876-5432', '606 Pine Run', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(82, 'Beth White', 'beth.w@example.com', '654-321-2345', '707 Oak Bend', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(83, 'Cody Harris', 'cody.h@example.com', '890-567-8901', '808 Cedar Path', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(84, 'Dylan Cole', 'dylan.c@example.com', '234-567-8901', '909 Maple Grove', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(85, 'Eve Mills', 'eve.m@example.com', '123-456-7890', '101 Pine Ridge', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(86, 'Frank Lee', 'frank.l@example.com', '654-789-1234', '202 Cedar Walk', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(87, 'Gail Ross', 'gail.r@example.com', '345-678-9012', '303 Oak Hill', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(88, 'Henry Scott', 'henry.s@example.com', '789-012-3456', '404 Willow Run', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(89, 'Irene Ray', 'irene.r@example.com', '432-567-8901', '505 Maple Park', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(90, 'Jason Moore', 'jason.m@example.com', '567-890-2345', '606 Pine Valley', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(91, 'Kelly Ward', 'kelly.w@example.com', '890-123-4567', '707 Cedar Grove', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(92, 'Leo Brooks', 'leo.b@example.com', '321-654-9876', '808 Oak Path', '2024-10-12 06:52:28', '2024-10-12 06:52:28'),
(93, 'Mona Gray', 'mona.g@example.com', '567-234-8765', '909 Maple Valley', '2024-10-12 06:52:28', '2024-10-12 06:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `amount`, `status`) VALUES
(1, 1, '2024-09-01', 150.75, 'Completed'),
(2, 1, '2024-09-05', 99.99, 'Pending'),
(3, 2, '2024-08-20', 200.50, 'Completed'),
(4, 3, '2024-09-10', 120.00, 'Canceled'),
(5, 3, '2024-09-11', 175.25, 'Completed'),
(6, 4, '2024-09-12', 80.00, 'Pending'),
(7, 5, '2024-08-28', 450.00, 'Completed'),
(8, 5, '2024-09-02', 230.10, 'Completed'),
(9, 6, '2024-09-15', 310.40, 'Pending'),
(10, 7, '2024-09-05', 145.20, 'Completed'),
(11, 8, '2024-09-07', 90.00, 'Canceled'),
(12, 9, '2024-09-14', 320.60, 'Completed'),
(13, 10, '2024-09-08', 199.99, 'Pending'),
(14, 10, '2024-09-09', 50.00, 'Completed'),
(15, 11, '2024-09-01', 75.50, 'Pending'),
(16, 12, '2024-08-25', 340.30, 'Completed'),
(17, 13, '2024-09-03', 120.10, 'Pending'),
(18, 14, '2024-09-02', 230.00, 'Completed'),
(19, 15, '2024-09-06', 150.75, 'Canceled'),
(20, 16, '2024-09-10', 250.80, 'Completed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
