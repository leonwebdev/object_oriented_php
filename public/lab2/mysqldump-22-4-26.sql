-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: capstone
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` char(7) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `subscribe_to_newsletter` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Leon','Johnson','98 Market Ave','Winnipeg','R3B 0W2','Manitoba','Canada','4315546020','leonjohnson377@gmail.com','Asdf123!',1,0,'2022-04-08 22:08:48','2022-04-08 22:08:48'),(2,'Leon','Johnson','98 Market Ave','Winnipeg','R3B 0W2','Manitoba','Canada','4315546020','leonjohnson377@gmail.com','Asdf123!',1,0,'2022-04-08 22:10:16','2022-04-08 22:10:16'),(3,'Leosssn','Johsssnson','98 Mssssarket Ave','Winnipegssss','R3B 0W2','Manistoba','Cansada','4315546020','leonssssjohnson377@gmail.com','Asdf123!',1,0,'2022-04-08 22:11:05','2022-04-08 22:11:05'),(4,'Leosssn','Johsssnson','98 Mssssarket Ave','Winnipegssss','R3B 0W2','Manistoba','Cansada','4315546020','leonssssjohnson377@gmail.com','Asdf123!',1,0,'2022-04-08 22:12:12','2022-04-08 22:12:12'),(5,'Leosssn','Johsssnson','98 Mssssarket Ave','Winnipegssss','R3B 0W2','Manistoba','Cansada','4315546020','leonssssjohnson377@gmail.com','Asdf123!',1,0,'2022-04-08 22:22:46','2022-04-08 22:22:46'),(6,'Leosssn','Johsssnson','98 Mssssarket Ave','Winnipegssss','R3B 0W2','Manistoba','Cansada','4315546020','leonssssjohnson377@gmail.com','Asdf123!',1,0,'2022-04-08 22:26:16','2022-04-08 22:26:16'),(7,'wqer','werw','werwq','werwq','w2w2w2','asdf','asdf','123.123.1235','asf@sadf.cvf','ZXCzxc123!',0,0,'2022-04-09 00:19:07','2022-04-09 00:19:07'),(8,'xd','asf','sdfsad','sadfasdf','a3d3f4','jyk','yuki','123-789-4512','yu@yujm.asd','QWEqwe123!',0,0,'2022-04-09 00:23:20','2022-04-09 00:23:20'),(9,'nyn','yhnm','ynyhn','yyu','f4r4w3','xz','ff','789-924-8455','dsadf@sdf.sdf','HJKhjk123?',0,0,'2022-04-09 14:29:46','2022-04-09 14:29:46'),(10,'nyn','yhnmddd','ynyhn','yyu','f4r4w3','xz','ff','789-924-8455','dsadf@sdf.sdf','HJKhjk123?',1,0,'2022-04-09 14:30:34','2022-04-09 14:30:34'),(11,'wer','weraa','aaa','adsf','d2w2e3','zxc','dfg','456-984-5112','sdf@sfdf.sdf','ASDasd123!',0,0,'2022-04-09 17:38:32','2022-04-09 17:38:32'),(12,'Lorem','POST','POST','POST','A8A8D8','POST','POST','123-123-4569','eee@ww.dd','$2y$10$GxiRWZx7/yvwwyFMfhq9eepUFoYyXyqLbriYAFHe0WLkrHM5q.g7e',0,0,'2022-04-23 01:09:43','2022-04-23 01:09:43'),(13,'JJ','JJ','JJ','JJ','Y7U8I9','JJ','JJ','123-456-9854','eee@ss.sa','$2y$10$CzFDhf/7C2bFB0fg62cTBuFCPMezrKUG.CShKxIXzgG3MdL.ta4Cu',0,0,'2022-04-23 01:15:11','2022-04-23 01:15:11'),(14,'KK','KK','KK','KK','D8D7D6','KK','KK','123-456-9854','eee@ww.dd','$2y$10$qLBrguoDv40/5kjfLC9WEup80Evshg2Wvhg8rWP3IlURiQMcAAn4y',0,0,'2022-04-23 01:25:13','2022-04-23 01:25:13'),(15,'MM','MM','MM','MM','M2M3M4','MM','MM','159-852-9844','QQ@EDE.XX','$2y$10$U6qQFoEiVww8wn.ElVodk.47ErvrbNiQQAJykgvs.4AXpQdbL2A/m',0,0,'2022-04-23 01:29:45','2022-04-23 01:29:45'),(16,'KK','KK','KK','KK','D8D7D6','KK','KK','123-123-4569','QQ@EDE.XX','$2y$10$x2TtF5CMbedz6ptdKPxqM.gnDH.UeS102EA3oDMoa6nqw8RS59PmK',0,0,'2022-04-23 01:34:33','2022-04-23 01:34:33'),(17,'JJ','JJ','JJ','JJ','A8A8D8','JJ','JJ','123-123-4569','eee@ss.sa','$2y$10$N8BXF16dDu0AEM1aDICW6.drTAJocUaVOdgXISsfJBMOWlgwN7ZLq',0,0,'2022-04-23 01:42:12','2022-04-23 01:42:12'),(18,'KK','JJ','JJ','KK','D8D7D6','POST','POST','123-123-4569','eee@ww.dd','$2y$10$ldonelnVGHBL/7tlrGvCnuJubENzzZ6YtqogkOTRREWCV48I9BtDW',0,0,'2022-04-23 01:54:37','2022-04-23 01:54:37'),(19,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$nmGFUW0VA53xlifXz/.hsO/Xn5gb0Llg1juo4Us/Zy4lnKqsDRpMy',0,0,'2022-04-23 01:59:23','2022-04-23 01:59:23'),(20,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$0Dvq75YPyYrHYX6TBQMM.eMMKugt8c/xKdcMP5k79KIymF/FAKe26',0,0,'2022-04-23 02:09:34','2022-04-23 02:09:34'),(21,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$tmOGVelBgmA8FA2OiPqI6./sYFmhR5cSLSIu5BY6nMpCks/AxN.1K',0,0,'2022-04-23 02:11:08','2022-04-23 02:11:08'),(22,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$snH23dWQtujG3dp/tyq1SuLNgn4EjdqSLUDNYVPBPJJ1KOG0L.E8u',0,0,'2022-04-23 02:12:59','2022-04-23 02:12:59'),(23,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$E9jBoUD9Ir.oFhq76Q/lFuX7IAsYfiLa5bBuElKPqrwiQFYpz52aS',0,0,'2022-04-23 02:27:06','2022-04-23 02:27:06'),(24,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$P5yevObf6cgpl7/adjjfW.fOdhmeu0yH0n1QaTfI1rYNl5nUtOfRW',1,0,'2022-04-23 02:32:59','2022-04-23 02:32:59'),(25,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zz','$2y$10$aFfoc2T8.H2FJsmMr3g/VOCI0db4Y/a4VZ6wwrzlmx4eePvcZQd2.',0,0,'2022-04-23 02:38:06','2022-04-23 02:38:06'),(26,'LL','LL','LL','LL','L0L9J7','LL','LL','123-985-5541','ll@ss.zzg','$2y$10$3M43wPOH4psur2zpH5ZZ4.sAJCBaVaV9uza4DiGDPl0jNocZ.TvM2',0,0,'2022-04-23 03:09:46','2022-04-23 03:09:46'),(27,'UU','UU','UU','UU','u8u8u8','UU','UU','123-985-4521','asf@sadf.cvfddd','$2y$10$KO0k3faKpGNvrEtP2bIveunjj5inPATMK2N4R04oi02xHvtarrddG',0,0,'2022-04-23 03:13:48','2022-04-23 03:13:48'),(28,'JKJK','JK','JK','JK','k0k9k9','JK','JK','123-456-8552','yu@yujm.asds','$2y$10$4Q7GE.8gv9O/j4iBDME.KeZvYcGI0s0CLsUFUzx8XBlACbRpacjuu',0,0,'2022-04-23 03:20:43','2022-04-23 03:20:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-26 14:23:48
