-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: jeffsstore
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idproduto` int NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` decimal(8,2) NOT NULL,
  `precofinal` decimal(8,2) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idproduto`),
  UNIQUE KEY `imagem_UNIQUE` (`imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'notebook','Notebook Dell Pentium Gold 4GB 500GB Tela 15.6” Windows 10 Inspiron',3499.00,3099.00,'imagens/produtos/notebook-dell.png'),(2,'notebook','Notebook Positivo Quad Core 2GB 32GB SSD Tela 14” Windows 10 Motion Gray',2399.00,1999.00,'imagens/produtos/notebook-positivo.png'),(3,'notebook','Notebook Samsung Intel® Dual-Core 4GB 16BG Tela 11.6\'\' Google Chrome OS Chromebook',2399.00,1999.00,'imagens/produtos/notebook-samsung.png'),(4,'teclado','Teclado Gamer Multilaser TC243 Multimídia Slim Preto/Verde',59.90,44.90,'imagens/produtos/teclado-multilaser.png'),(5,'teclado','Teclado Gamer ELG Enemy Membrana Tripla - Preto',149.90,129.90,'imagens/produtos/teclado-elg.png'),(6,'impressora','Multifuncional Tanque de Tinta Canon Mega Tank G3110 Wireless',1299.00,999.00,'imagens/produtos/impressora-canon.png'),(7,'impressora','Multifuncional Tanque de Tinta Epson EcoTank L3110',1199.00,1099.00,'imagens/produtos/impressora-epson.png'),(8,'impressora','Impressora Multifuncional HP 2776 DeskJet Ink Advantage',538.00,499.00,'imagens/produtos/impressora-hp.png'),(9,'tablet','iPad 7 Apple 32GB, Tela Retina 10,2\", Wi-Fi, 4G, Bluetooth, Câmera de 8 MP e Processador A10 Fusion',4299.00,3999.00,'imagens/produtos/tablet-apple.png'),(10,'tablet','Tablet Samsung Galaxy Tab S6 64GB, 4GB RAM, Tela Imersiva de 10.4\" 4G e Android 10',2999.00,2599.00,'imagens/produtos/tablet-samsung.png'),(11,'mouse','Mouse Óptico WM126 Sem Fio Preto - Dell',119.00,109.00,'imagens/produtos/mouse-dell.png'),(12,'mouse','Mouse Óptico Multilaser Classic MO179 - Preto',14.90,10.90,'imagens/produtos/mouse-multilaser.png');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-26 20:40:16
