-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lyrics_db
-- ------------------------------------------------------
-- Server version	8.0.35

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
-- Table structure for table `songs`
--

DROP TABLE IF EXISTS `songs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `songs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `lyrics` longtext NOT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `songs`
--

LOCK TABLES `songs` WRITE;
/*!40000 ALTER TABLE `songs` DISABLE KEYS */;
INSERT INTO `songs` VALUES (2,'All of me','John Legend','What would I do without your smart mouth?\r\nDrawing me in, and you kicking me out\r\nYou\'ve got my head spinning, no kidding, I can\'t pin you down\r\nWhat\'s going on in that beautiful mind?\r\nI\'m on your magical mystery ride\r\nAnd I\'m so dizzy, don\'t know what hit me, but I\'ll be alright\r\nMy head\'s under water\r\nBut I\'m breathing fine\r\nYou\'re crazy and I\'m out of my mind\r\n\'Cause all of me\r\nLoves all of you\r\nLove your curves and all your edges\r\nAll your perfect imperfections\r\nGive your all to me\r\nI\'ll give my all to you\r\nYou\'re my end and my beginning\r\nEven when I lose, I\'m winning\r\n\'Cause I give you all of me\r\nAnd you give me all of you, oh-oh\r\nHow many times do I have to tell you?\r\nEven when you\'re crying, you\'re beautiful too\r\nThe world is beating you down, I\'m around through every mood\r\nYou\'re my downfall, you\'re my muse\r\nMy worst distraction, my rhythm and blues\r\nI can\'t stop singing, it\'s ringing in my head for you\r\nMy head\'s under water\r\nBut I\'m breathing fine\r\nYou\'re crazy and I\'m out of my mind\r\n\'Cause all of me\r\nLoves all of you\r\nLove your curves and all your edges\r\nAll your perfect imperfections\r\nGive your all to me\r\nI\'ll give my all to you\r\nYou\'re my end and my beginning\r\nEven when I lose, I\'m winning\r\n\'Cause I give you all of me\r\nAnd you give me all of you, oh-oh\r\nGive me all of you, oh\r\nCards on the table, we\'re both showing hearts\r\nRisking it all, though it\'s hard\r\n\'Cause all of me\r\nLoves all of you\r\nLove your curves and all your edges\r\nAll your perfect imperfections\r\nGive your all to me\r\nI\'ll give my all to you\r\nYou\'re my end and my beginning\r\nEven when I lose, I\'m winning\r\n\'Cause I give you all of me\r\nAnd you give me all of you\r\nI give you all of me\r\nAnd you give me all of you, oh-oh','2024-01-13 08:50:31','2024-01-13 08:50:31');
/*!40000 ALTER TABLE `songs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-13 16:50:51
