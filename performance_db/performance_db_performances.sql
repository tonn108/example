-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: performance_db
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `performances`
--

DROP TABLE IF EXISTS `performances`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `performances` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `task_type` varchar(255) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `performances`
--

LOCK TABLES `performances` WRITE;
/*!40000 ALTER TABLE `performances` DISABLE KEYS */;
INSERT INTO `performances` VALUES (1,'Development','พัฒนาระบบ Login','2024-03-20 09:00:00','2024-03-20 12:00:00','เสร็จสิ้น','2024-11-25 09:24:26','2024-11-25 09:24:26'),(2,'Test','ทดสอบระบบรายงาน','2024-03-21 13:00:00','2024-03-21 16:30:00','กำลังดำเนินการ','2024-11-25 09:24:26','2024-11-25 09:24:26'),(3,'Development','แก้ไขบัคหน้าพิมพ์รายงาน','2024-03-22 10:00:00','2024-03-22 11:30:00','กำลังดำเนินการ','2024-11-25 09:24:26','2024-11-25 09:24:26'),(4,'Document','เขียนเอกสาร API Specification','2024-03-23 09:00:00','2024-03-23 17:00:00','เสร็จสิ้น','2024-11-25 09:24:26','2024-11-25 09:24:26'),(5,'Test','ทดสอบฟังก์ชัน Import/Export','2024-03-24 14:00:00','2024-03-24 15:30:00','กำลังดำเนินการ','2024-11-25 09:24:26','2024-11-25 09:24:26'),(6,'Development','test','2024-11-25 16:31:00','2024-11-25 16:32:00','กำลังดำเนินการ','2024-11-25 02:32:12','2024-11-25 02:36:29'),(8,'Development','สสสสสส','2024-11-25 19:01:00','2024-11-25 19:01:00','เสร็จสิ้น','2024-11-25 05:01:42','2024-11-25 05:02:37');
/*!40000 ALTER TABLE `performances` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-02 18:13:09
