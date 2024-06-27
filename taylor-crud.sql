-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for taylor-crud
CREATE DATABASE IF NOT EXISTS `taylor-crud` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `taylor-crud`;

-- Dumping structure for table taylor-crud.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL,
  `customer_name` varchar(255) NOT NULL DEFAULT '',
  `products` varchar(255) NOT NULL DEFAULT '',
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table taylor-crud.orders: ~1 rows (approximately)
INSERT INTO `orders` (`id`, `customer_name`, `products`, `quantity`, `total`, `status`) VALUES
	(77968914, 'Mata Pelajaran A', 'Baju 2', 10, 100000, 'Pemesanan Berhasil');

-- Dumping structure for table taylor-crud.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(255) NOT NULL DEFAULT '',
  `price` int NOT NULL DEFAULT '0',
  `category` varchar(255) NOT NULL DEFAULT '0',
  `foto` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table taylor-crud.products: ~2 rows (approximately)
INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `foto`) VALUES
	(1754, 'Baju 1', 'Ini Baju 1', 10000, 'pakaianpria', 'julia-zyablova-A1oEyeLb2oE-unsplash.jpg'),
	(4099, 'Baju 2', 'Baju Wanita', 10000, 'pakaianwanita', 'candi cangkuang.jpeg');

-- Dumping structure for table taylor-crud.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Dumping data for table taylor-crud.user: ~2 rows (approximately)
INSERT INTO `user` (`id`, `name`, `username`, `password`, `level`) VALUES
	(159455, 'Mata Pelajaran A', 'username', '$2y$10$mYF80u.WlFRPubg6rNLMeeLp1xA1EladGpQcH3gDRU791fz/Xrngi', 'user'),
	(300259, 'Admin', 'admin', '$2y$10$I/zYPSsQL4G8RL4PudvQVOHIM8lUZODjs3G0hnm7D94UzSd17vGLe', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
