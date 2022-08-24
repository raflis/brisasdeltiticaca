-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: brisas
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `board_directors`
--

DROP TABLE IF EXISTS `board_directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `board_directors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_mini` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `board_directors`
--

LOCK TABLES `board_directors` WRITE;
/*!40000 ALTER TABLE `board_directors` DISABLE KEYS */;
INSERT INTO `board_directors` VALUES (1,'Delber Teran Dianderas','Presidente','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',1,'2022-06-18 01:24:31','2022-06-18 01:42:15'),(2,'Victor Condori Condori','Vicepresidente','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',2,'2022-06-18 01:24:31','2022-06-18 01:24:31'),(3,'Freddy Alberto Benavente Vargas','Tesorero','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',3,'2022-06-18 01:24:31','2022-06-18 01:24:31'),(4,'Jose Luis Hernandez Morales','Secretario General','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',4,'2022-06-18 01:26:55','2022-06-18 01:26:55'),(5,'Ruth Anatolia Fernandez Valdez','Vocal de Actividades Asociativas','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',5,'2022-06-18 01:27:52','2022-06-18 01:27:52'),(6,'Elizabeth Torres Torres','Vocal de Actividades Educativas','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',6,'2022-06-18 01:28:18','2022-06-18 01:28:18'),(7,'Frida Dalia Rodas Guillen','Vocal de Actividades Culturales','https://brisas.dennisormeno.com/storage/photos/2/Consejo/Colaborador.png','https://brisas.dennisormeno.com/storage/photos/2/Consejo/colaborador_mini.png',7,'2022-06-18 01:28:47','2022-06-18 01:28:47');
/*!40000 ALTER TABLE `board_directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Noches de Folklore','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/evento_categoria.jpg','<p>Bajo este concepto se ha dise&ntilde;ado un espect&aacute;culo compuesto por m&uacute;sica y danzas peruanas, &nbsp;cuidando la originalidad y los detalles a fin de que se convierta en un&nbsp; viaje imaginario &nbsp;por las diferentes regiones del Per&uacute;. Una propuesta &uacute;nica en la que la magia y el color de las danzas nacionales demuestran la calidez, la alegr&iacute;a y el arte de los peruanos. Un amplio escenario es el lugar donde m&aacute;s de 50 artistas presentan el mejor espect&aacute;culo de folklore peruano. Lo mejor del folklore peruano bajo el cielo de Lima.</p>','<p>Las mesas son de 8 (VIP) y 10 (preferencial) personas en el primer piso y de 8 y 6 personas en palco y mezzanine.<br />\r\nLas mesas pueden llegar a compartirse con otros grupos.</p>\r\n\r\n<ul>\r\n	<li>Aceptamos todas las tarjetas de cr&eacute;dito.</li>\r\n	<li>Todos nuestros precios incluyen los impuestos de ley.</li>\r\n	<li>Las reservas se hacen al momento de adquirir sus entradas.</li>\r\n	<li>Ventas Corporativas y de grupos con Factura se atienden en nuestras oficinas.</li>\r\n	<li>Para Mayor informaci&oacute;n escribanos al correo:&nbsp;<strong>ventas@brisasdeltiticaca.com</strong></li>\r\n</ul>','<p><img alt=\"\" src=\"https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/Noche_de_Folklore/zonas_noche_de_folflore.png\" style=\"height:250px; width:500px\" /></p>','<p><img alt=\"\" src=\"https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/Noche_de_Folklore/promocion_noche_de_folklore.png\" style=\"height:500px; width:500px\" /></p>','<ul>\r\n	<li>Vino/ Champagne S/ 60.00</li>\r\n	<li>Ron / Pisco / Vodka S/ 70.00</li>\r\n	<li>Whisky S/ 100.00</li>\r\n	<li>Derecho a filmaci&oacute;n S/ 250.00</li>\r\n</ul>','https://brisas.dennisormeno.com/storage/files/2/Noches_de_Folklore/carta.pdf',NULL,'2022-06-18 06:34:16'),(2,'Almuerzo Show','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/evento_categoria.jpg','<p>Gastronom&iacute;a y folklore se unen los viernes y s&aacute;bados a mediod&iacute;a. Deliciosos potajes t&iacute;picos y criollos se combinan a la perfecci&oacute;n con un abanico de hermosas danzas peruanas; adem&aacute;s de m&uacute;sica bailable con orquesta en vivo, ideal para disfrutarlo en familia o con amigos. Sin duda, una experiencia inolvidable.</p>\r\n\r\n<p><strong>Viernes y S&aacute;bados</strong></p>','<ul>\r\n	<li>El show de las danza y orquesta comienza a las 02:30 pm. a 04:30 pm. y de 04:30 pm. a 05:00 pm (m&uacute;sica de cabina).</li>\r\n	<li>Aforo reducido de acuerdo a la normativa vigente y protocolos de bioseguridad.</li>\r\n	<li>Las mesas son de 04 y 06 sillas, grupos familiares.</li>\r\n	<li>P&uacute;blico recomendado: Adultos, mayores de 18 a&ntilde;os.</li>\r\n	<li>Podr&aacute;n ingresar a partir de los 2 a&ntilde;os pagando su entrada, menores a esa edad podr&aacute;n ingresar acompa&ntilde;ados de un adulto que haya comprado su entrada.</li>\r\n	<li>Recuerda que los mayores de 18 a&ntilde;os deber&aacute;n presentar su cartilla de vacunaci&oacute;n con sus 3 dosis para ingresar a espacios cerrados.</li>\r\n	<li>Precios incluyen comisi&oacute;n ticketera e impuestos.</li>\r\n</ul>','<p><img alt=\"\" src=\"https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/Almuerzo_Show/zona_almuerzo_show.png\" style=\"height:250px; width:500px\" /></p>','<p><img alt=\"\" src=\"https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/Almuerzo_Show/promocion_almuerzo_show.png\" style=\"height:473px; width:500px\" /></p>','<ul>\r\n	<li>Vino/ Champagne S/ 30.00</li>\r\n	<li>Ron / Pisco / Vodka S/ 40.00</li>\r\n	<li>Whisky S/ 50.00</li>\r\n</ul>','https://brisas.dennisormeno.com/storage/files/2/Almuerzo_Show/carta.pdf',NULL,'2022-06-18 07:02:33'),(3,'Eventos especiales','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/evento_categoria.jpg','<p>Celebre con nosotros, en nuestra gran sede, fechas especiales (D&iacute;a de la Madre, D&iacute;a del Padre, Navidad, etc.), aniversarios empresariales e institucionales, lanzamientos comerciales, fiestas de fin de a&ntilde;o, entre otras, con un excelente espect&aacute;culo de danzas peruanas y orquesta show-bailable.</p>\r\n\r\n<p><strong>Presentaciones art&iacute;sticas:&nbsp;</strong>Si su empresa u organizaci&oacute;n desea que la visitemos para presentar un espect&aacute;culo de danzas peruanas y m&uacute;sica, escr&iacute;banos.</p>','a','a','a','a','a',NULL,'2022-06-18 06:58:21');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `events_category_id_foreign` (`category_id`),
  CONSTRAINT `events_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (1,1,'Nombre del evento para noches de folklore','nombre-del-evento-para-noches-de-folklore','2022-08-20 00:00:00','<p>Bajo este concepto se ha dise&ntilde;ado un espect&aacute;culo compuesto por m&uacute;sica y danzas peruanas, cuidando la originalidad y los detalles a fin de que se convierta en un viaje imaginario por las diferentes regiones del Per&uacute;. Una propuesta &uacute;nica en la que la magia y el color de las danzas nacionales demuestran la calidez, la alegr&iacute;a y el arte de los peruanos. Un amplio escenario es el lugar donde m&aacute;s de 50 artistas presentan el mejor espect&aacute;culo de folklore peruano. Lo mejor del folklore peruano bajo el cielo de Lima.<br />\r\n<br />\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Varius tristique proin ut sit eget posuere nec eros. Tincidunt enim tortor et nec platea. Dui phasellus aliquet egestas tortor nunc mauris parturient ut. Amet auctor vitae in et venenatis lacinia enim. Volutpat vulputate tellus nunc morbi vitae orci sem nec etiam. Eget massa auctor molestie tellus feugiat mattis ut platea faucibus.</p>','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image1.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image2.png','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_superior.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_inferior.png','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"3\"}]','https://www.joinnus.com/',1,'2022-07-31 14:07:16','2022-08-23 02:06:34'),(2,2,'Evento para un almuerzo show el fin de semana','evento-para-un-almuerzo-show-el-fin-de-semana','2022-08-06 00:00:00','<p>Bajo este concepto se ha dise&ntilde;ado un espect&aacute;culo compuesto por m&uacute;sica y danzas peruanas, cuidando la originalidad y los detalles a fin de que se convierta en un viaje imaginario por las diferentes regiones del Per&uacute;. Una propuesta &uacute;nica en la que la magia y el color de las danzas nacionales demuestran la calidez, la alegr&iacute;a y el arte de los peruanos. Un amplio escenario es el lugar donde m&aacute;s de 50 artistas presentan el mejor espect&aacute;culo de folklore peruano. Lo mejor del folklore peruano bajo el cielo de Lima.</p>','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image1.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image2.png','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_superior.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_inferior.png','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"3\"}]','https://www.joinnus.com/',1,'2022-07-31 14:32:33','2022-08-23 02:07:27'),(3,1,'Otro evento de prueba','otro-evento-de-prueba','2022-08-11 00:00:00','<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image1.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image2.png','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_superior.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_inferior.png','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"1\"}]','https://www.joinnus.com/',0,'2022-07-31 16:24:23','2022-08-23 02:06:10');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_06_17_164930_create_sliders_table',2),(7,'2022_06_17_171635_create_testimonials_table',3),(8,'2022_06_17_174526_create_posts_table',4),(9,'2022_06_17_182458_add_field_summary_to_posts_table',5),(10,'2022_06_17_195206_create_page_fields_table',6),(11,'2022_06_17_201430_create_board_directors_table',6),(12,'2022_06_17_203818_add_field_image_mini_to_board_directors_table',7),(13,'2022_06_17_214121_update_home_description_to_page_fields_table',8),(14,'2022_06_17_215024_update_history_text_to_page_fields_table',9),(15,'2022_06_17_223530_update_contact_schedule_to_page_fields_table',10),(17,'2022_06_17_225457_create_workshops_table',11),(18,'2022_06_18_004959_create_categories_table',12),(19,'2022_07_22_015826_create_zones_table',13),(20,'2022_07_28_190707_create_events_table',14),(21,'2022_07_31_001501_update_banner2_to_events_table',15),(22,'2022_08_22_112026_create_workshop_events_table',16),(23,'2022_08_22_210026_update_link_to_events_table',17),(25,'2022_08_22_212050_update_price_to_workshop_events_table',18),(27,'2022_08_23_000157_create_sales_table',19),(28,'2022_08_23_234751_update_membership_to_users_table',20),(31,'2022_08_24_001245_create_subscriptions_table',21),(32,'2022_08_24_015723_update_script_to_page_fields_table',22);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page_fields`
--

DROP TABLE IF EXISTS `page_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page_fields` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `home_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_items` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`home_items`)),
  `aboutus_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aboutus_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`aboutus_images`)),
  `history_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `events_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `events_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `events_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workshops_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workshops_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workshops_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workshops_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workshops_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`workshops_images`)),
  `blog_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_schedule1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_schedule1_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_schedule2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_schedule2_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `script` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page_fields`
--

LOCK TABLES `page_fields` WRITE;
/*!40000 ALTER TABLE `page_fields` DISABLE KEYS */;
INSERT INTO `page_fields` VALUES (1,'Puquina Q\'ocha','Inspirados en el antiguo nombre del Lago Titicaca, dimos vida a nuestro Salón Gastronómico Puquina Q’ocha, con la única consigna de rendir homenaje a la gastronomía puneña en Lima.','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Inicio/puquina.png','El Salón Gastrónomico Puquina Qocha es el ambiente ideal para deleitarse con lo mejor de la culinaria puneña y peruana a través de deliciosos potajes preparados con recetas e insumos originales. Es ya reconocido en la capital el tradicional Jueves de Chairo (plato típico de Puno) amenizado con música en vivo y los Martes de Trucha.','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Inicio\\/puquina_item1.png\",\"name\":\"Protocolos de Seguridad\",\"detail\":\"Estrictos protocolos de seguridad y salud\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Inicio\\/puquina_item2.png\",\"name\":\"Variedad de Platos\",\"detail\":\"\\u00a1Gran variedad de platos t\\u00edpicos y criollos!\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Inicio\\/puquina_item3.png\",\"name\":\"Delivery en 30 min\",\"detail\":\"Disfr\\u00fatelo tambi\\u00e9n en la comodidad de su hogar\",\"order\":\"3\"}]','Conócenos','NOSOTROS','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Nosotros/bg_nosotros.jpg','NUESTRA INSTITUCIÓN','<p>La Asociaci&oacute;n Cultural Brisas del Titicaca, es una organizaci&oacute;n sin fines de lucro con 60 a&ntilde;os dedicados a preservar, fomentar y difundir las diversas expresiones culturales de Puno y del Per&uacute;.<br />\r\n<br />\r\nNuestra labor ha sido reconocida a trav&eacute;s de numerosos galardones y distinciones a nivel nacional e internacional.<br />\r\n<br />\r\nSomos orgullosos embajadores culturales de la Marca Per&uacute;.</p>','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Nosotros\\/Nosotros_slide.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Nosotros\\/Nosotros_slide.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Nosotros\\/Nosotros_slide.png\",\"order\":\"3\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Nosotros\\/Nosotros_slide.png\",\"order\":\"4\"}]','NUESTRA INSTITUCIÓN','<h3>Nuestro viaje comienza all&aacute; por 1975</h3>\r\n\r\n<p>La Asociaci&oacute;n Cultural Brisas del Titicaca (ACBT), instituci&oacute;n emblem&aacute;tica de la cultura nacional, sustenta su &eacute;xito en la difusi&oacute;n permanente de la riqueza art&iacute;stica de las danzas pune&ntilde;as y la exquisitez de su m&uacute;sica. Todo esto es posible gracias al impulso realizado a conjuntos art&iacute;sticos como el Elenco de Danzas.<br />\r\n<br />\r\nDurante sus m&aacute;s de 59 a&ntilde;os de vida institucional, Brisas del Titicaca ha promovido actividades culturales de orden no solo musical y danc&iacute;stico, sino tambi&eacute;n literario, pict&oacute;rico, y artesanal. La labor educativa ha estado presente a trav&eacute;s de los talleres de danza y m&uacute;sica que trimestralmente albergan a mil alumnos, aproximadamente.<br />\r\n<br />\r\nAsimismo en medio siglo de existencia, esta instituci&oacute;n de ra&iacute;ces pune&ntilde;as ha llevado el folclore nacional a M&eacute;xico y Europa, adem&aacute;s ha alentado y acogido a todas las instituciones pune&ntilde;as que arribaron a Lima, como por ejemplo, el centenario conjunto de Sikuris de Ma&ntilde;azo, la APAFIT, entre otros.</p>','<p>Preservamos, fomentamos y difundimos las diversas expresiones culturales de Puno y el Per&uacute;, con alta satisfacci&oacute;n de nuestros grupos de inter&eacute;s, bas&aacute;ndonos en la gran vocaci&oacute;n de servicio, alta responsabilidad social de nuestros colaboradores y asociados, sum&aacute;ndonos al compromiso de aportar en el desarrollo cultural, social y econ&oacute;mico de la regi&oacute;n Puno.</p>','<p>En el 2023, seremos una organizaci&oacute;n eficiente y sostenible, reconocida a nivel nacional e internacional por su trabajo en la preservaci&oacute;n, fomento y difusi&oacute;n de la cultura pune&ntilde;a y tambi&eacute;n peruana y por la satisfacci&oacute;n y beneficios generados a todos sus grupos de inter&eacute;s.</p>','Asoción Cultural Brisas del Titicaca','EVENTOS BRISAS','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Eventos/bg_eventos.jpg','Por Puno, por la tradición y por el arte','TALLERES EDUCATIVOS','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Talleres/bg_talleres.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor risus, viverra molestie eget feugiat est. Accumsan, porta platea auctor laoreet vestibulum, ultricies nunc velit sapien. Laoreet aenean odio mi pellentesque egestas malesuada accumsan libero. Vel integer proin ultrices ultrices mattis vivamus. Tincidunt mauris, velit sollicitudin amet viverra nisl.<br />\r\n<br />\r\nPellentesque lorem nulla adipiscing velit egestas ipsum lacus odio. Amet mollis faucibus arcu id arcu etiam dis sapien. Aenean cursus turpis ligula in enim tortor faucibus. Facilisis tincidunt et volutpat pellentesque. Nec urna dui at egestas non risus, nulla risus, morbi. Leo nibh non mauris tempor, fusce sit mi. Arcu et eget curabitur semper. Tristique ipsum, sit viverra varius suspendisse et egestas.</p>','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Talleres\\/Taller_slider.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Talleres\\/Taller_slider.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Talleres\\/Taller_slider.png\",\"order\":\"3\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Paginas\\/Talleres\\/Taller_slider.png\",\"order\":\"4\"}]','Noticias','BLOG Y NOTICIAS','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Blog/bg_blog.jpg','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor risus, viverra molestie eget feugiat est. Accumsan, porta platea auctor laoreet vestibulum, ultricies nunc velit sapien. Laoreet aenean odio mi pellentesque egestas malesuada accumsan libero. Vel integer proin ultrices ultrices mattis vivamus. Tincidunt mauris, velit sollicitudin amet viverra nisl.<br />\r\n<br />\r\nPellentesque lorem nulla adipiscing velit egestas ipsum lacus odio. Amet mollis faucibus arcu id arcu etiam dis sapien. Aenean cursus turpis ligula in enim tortor faucibus. Facilisis tincidunt et volutpat pellentesque. Nec urna dui at egestas non risus, nulla risus, morbi. Leo nibh non mauris tempor, fusce sit mi. Arcu et eget curabitur semper. Tristique ipsum, sit viverra varius suspendisse et egestas.</p>','Escríbenos','CONTACTO','https://brisas.dennisormeno.com/storage/photos/2/Paginas/Contacto/bg_contacto.jpg','<iframe src=\"https://maps.google.com/maps?q=JR.%20H%C3%89ROES%20DE%20TARAPAC%C3%81%20168&#038;t=m&#038;z=18&#038;output=embed&#038;iwloc=near\" width=\"100%\" height=\"600\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>','(01) 748 3088','eventos@brisasdeltiticaca.com','Jr. Héroes de Tarapacá 169 - Lima','Martes - Jueves','1:00 pm - 12:30 am','Viernes - Domingo','1:00 pm - 1:30 am','https://www.facebook.com/brisasdeltiticacaperu','https://www.instagram.com/brisasdeltiticaca/','https://twitter.com/BrisasTiticaca','928915699','https://www.youtube.com/c/BrisasDelTiticacacom','<script>\r\nconsole.log(\'hola mundo\');\r\n</script>',123.00,NULL,'2022-08-24 07:05:59');
/*!40000 ALTER TABLE `page_fields` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_blog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Genialidades','genialidades','https://brisas.dennisormeno.com/storage/photos/2/Entradas/post1.jpg','https://brisas.dennisormeno.com/storage/photos/2/Entradas/post_blog.png','CALAVERAS, KUSILLOS, TARUQUITAS, HECHIZOS Y DEMÁS CHINA-DIABLURAS QUE SOLO EJERCE UN GENIO PUNEÑO.','<blockquote>\r\n<h3><strong>CALAVERAS, KUSILLOS, TARUQUITAS, HECHIZOS Y DEM&Aacute;S CHINA-DIABLURAS QUE SOLO EJERCE UN GENIO PUNE&Ntilde;O.</strong></h3>\r\n</blockquote>\r\n\r\n<p>Pedazos de gato en el suelo. Caminando con cuidado para que mi falda extendida hasta el piso no me hiciese caer, &iquest;qu&eacute; hubiese pasado si mi peque&ntilde;o cuerpecito rodaba por el suelo impregn&aacute;ndose de gato descuartizado?, quiz&aacute;s los ojos de ese gato se hubiesen quedado adheridos a m&iacute; y me hubiesen mirado por el resto de mi vida, como cuando Paz me mira, indiferente y abstra&iacute;da, loca felina de mi&eacute;rcoles. Yo solo quer&iacute;a que mis pies descalzos se posen sobre loza pura y que no<br />\r\nse les ocurra topar con ninguna materia c&aacute;rnica, ni piel entumecida, ni ﬂuido org&aacute;nico alguno. Total, a ese gato yo lo conoc&iacute;a.<br />\r\nDe todas las habitaciones de la casa, la suya era la mejor, un halo blanquecino e itinerante de misterio envolv&iacute;a ese cuarto. Merode&aacute;bamos a menudo por sus inmediaciones, esperando a que llegase el momento m&aacute;s apropiado para girar el pestillo. Esa puerta de madera blanca conduc&iacute;a al portal que separaba lo real de lo m&aacute;s real todav&iacute;a.</p>\r\n\r\n<p>Escarcha de colores dentro de frasquitos de vidrio que adoptaban mil formas caprichosas, semigatitos tejidos a crochet con barriguita prominente, moldes de yeso que retrataban la ﬁgura rechoncha de alg&uacute;n angelito renacentista, plumas pintadas de ocre, pedazos de organza, tocuyo, bayeta, lino, yute, tul, seda, chif&oacute;n, crep&eacute;, varas de bamb&uacute;, revistas vintage, pendientes, pulseras, gargantillas, aros de oro, plata, bronce, recubiertos de turmalinas, &aacute;gatas, amatistas, lapisl&aacute;zulis, tocados en alegor&iacute;as inﬁnitas, mimbre, espejitos de diversos tama&ntilde;os, rosas de miga de pan, pedazos de materia concomitante y m&aacute;scaras, muchas m&aacute;scaras.</p>\r\n\r\n<p>Hab&iacute;a entrado al cuarto de mi t&iacute;o Edmundo.</p>\r\n\r\n<p>Edmundo Torres, pune&ntilde;o, mascarero, actor, bailar&iacute;n, dise&ntilde;ador, performer, es, en suma, un artista completo.<br />\r\nLampa lo vio dar sus primeros pasos en medio de quietud po&eacute;tica y le mostr&oacute; en su iglesia sin torre &ldquo;La Pieta&rdquo; de Michelangelo, el cristo de cuero, las catacumbas y las calaveras colgadas que parecen narrar nuestra historia, amalgama de religiosidad, pugna y visi&oacute;n andina, porque las corrientes de pensamiento indigenista ﬂu&iacute;an tambi&eacute;n en el seno de nuestra familia. A orillas del lago, Gamaliel Churata, Ernestina e In&eacute;s Tresierra, Dante Nava, Gustavo S&aacute;nchez y Aurelio Mart&iacute;nez, tertuliando sin t&eacute;rmino despu&eacute;s de haber comido un plato de chu&ntilde;o lawa.</p>\r\n\r\n<p>Desde chico, la belleza le atra&iacute;a, ya sea aquella de los andenes de laja, geom&eacute;tricamente labrados en las laderas de Cuyo Cuyo o la de las tumbas del cementerio de Juliaca. Observador como pocos, hab&iacute;a d&iacute;as en que se la pasaba midiendo con cent&iacute;metro en mano los &aacute;ngulos de las piedras en los muros Incas junto a los que transcurr&iacute;an sus d&iacute;as en el Qosqo u organizando procesiones con maderitas y cuanto material pudiese convenirle, sus cuadernos de matem&aacute;ticas ostentaban ﬁguras estilizadas en lugar de n&uacute;meros y operaciones, esquemas de un futuro entonces incomprendido.</p>\r\n\r\n<p>M&aacute;s adelante, llegar&iacute;an tiempos de APAFIT, d&iacute;as de captar danzas junto al Dr. Cornejo Rossell&oacute;, jornadas de pinkillos y phuntillos plisados que se replegaban al en&eacute;rgico movimiento de rodillas como las aves que se repliegan para galantear en el pujllay de Santiago. &iquest;Habr&aacute; existido esqueleto m&aacute;s ovacionado y escalofriante, cuyos huesos crepitaban en la oscuridad al comp&aacute;s de bombos y zampo&ntilde;as? China-diabla en Ma&ntilde;azo, apurando el yeso para que calce la m&aacute;scara y se seque al aire, entre movimiento, picard&iacute;a y fervor.<br />\r\nSe form&oacute; en las Escuelas de Bellas Artes de Lima y Puno y en la Escuela Nacional de Arte Dram&aacute;tico, pero fue en Italia donde perfeccion&oacute; sus t&eacute;cnicas mascareras en la C&iacute;vica Scuola di Arte Drammatica de Milano. Actualmente radica en Berlin, donde participa vivamente de la actividad cultural de esta ciudad. All&iacute; ha forjado su taller, materia de inspiraci&oacute;n, entre otros aspectos de su carrera, de la pieza cinematogr&aacute;ﬁca &ldquo;Kusillo&rdquo;, elaborada por el cineasta mexicanopuertorrique&ntilde;o Miguel Villafa&ntilde;e, que se exhibi&oacute; como muestra itinerante del Festival de Cine de Lima el a&ntilde;o pasado.</p>\r\n\r\n<p>Edmundo es un genio pune&ntilde;o, hijo de nuestra tierra, orgullo de nuestra naci&oacute;n.</p>\r\n\r\n<p>Fuente: Revista Brisas</p>',1,'2022-06-17 23:21:29','2022-06-17 23:29:26'),(2,'Intiq’a Tejiendo la Lluvia','intiqa-tejiendo-la-lluvia','https://brisas.dennisormeno.com/storage/photos/2/Entradas/post2.jpg','https://brisas.dennisormeno.com/storage/photos/2/Entradas/post_blog.png','Mis viajes afortunados a la hermosa ciudad de Puno comenzaron desde muy joven, primero perteneciendo al elenco de danza del Club Departamental Puno, en el cual estuve cerca de 20 años y del cual guardo valiosos recuerdos, luego con la Universidad Nacional Mayor de San Marcos, y ﬁnalmente dirigiendo el elenco de Danza de Brisas del Titicaca.','<p>Mis viajes afortunados a la hermosa ciudad de Puno comenzaron desde muy&nbsp;joven, primero perteneciendo al elenco de danza del Club Departamental Puno, en el cual estuve cerca de 20 a&ntilde;os y del cual guardo valiosos recuerdos, luego con la Universidad Nacional Mayor de San Marcos, y ﬁnalmente dirigiendo el elenco de Danza de Brisas del Titicaca. Estas incursiones me llevaron a plantear el trabajo esc&eacute;nico inspirado en la Isla de Taquile.<br />\r\nEn el &uacute;ltimo viaje busqu&eacute; estar en la isla el d&iacute;a adecuado, donde se supon&iacute;a que ver&iacute;a una buena parte del folklore de Taquile. Esper&eacute; en la plaza central con algunos curiosos ha que algo sucediera, pero fue en vano &iquest;Me hab&iacute;a equivocado de d&iacute;a? &iquest;Mis informantes fallaron? &iquest;Yo fall&eacute;? Tantas preguntas asaltaron mi mente, la plaza en silencio, el lago c&oacute;mplice de este, y a lo lejos la cordillera fr&iacute;a brillaba mucho en el atardecer del sol que cubr&iacute;a la plaza. Cuando estaba en estas contemplaciones, de las cuatro esquinas de la plaza, con sonidos de sikus y pinkullos, las danzas comenzaron a aparecer, todas realizando un desplazamiento circular posesion&aacute;ndose del centro de la distribuci&oacute;n espacial, de los dioses tutelares de la isla; todo llego a un cl&iacute;max en la plaza, era fren&eacute;tico, intenso, cinco danzas distintas iban apareciendo y desapareciendo, hasta que as&iacute; como llegaron sorpresivamente, paulatinamente se fueron, y con ellas el sol, entonces la sombra cubri&oacute; inmediatamente toda la Plaza. Lo que vi ese d&iacute;a era lo m&aacute;s hermoso que una cultura tradicional me regalaba, solo me quedaba la contemplaci&oacute;n de este momento m&aacute;gico, ahora entiendo al se&ntilde;or Huata (ex Varoy) cuando me dec&iacute;a &ldquo;cuando veas el arco&iacute;ris no digas nada solo cierra la boca y mira.&rdquo;&nbsp;<strong>Composici&oacute;n Coreogr&aacute;ﬁca inspirada en la Isla de Taquile.</strong></p>\r\n\r\n<p><br />\r\nSi fuera tan sencillo decir que componer es dar forma a un conjunto de elementos, sensaciones o si componer se redujera a un conjugar de t&eacute;cnicas alcanzando un grado de dominio el trabajo art&iacute;stico, componer seria meramente mec&aacute;nico.<br />\r\nCitando a Plat&oacute;n qui&eacute;n reﬁere que no es el dominio de la m&eacute;trica lo que hace un buen poema sino la &laquo;posesi&oacute;n&raquo; de las musas, un estado de &laquo;demencia&raquo; transitoria claro est&aacute;.<br />\r\nComponer entra&ntilde;a un dominio de los materiales esc&eacute;nicos art&iacute;sticos, que nos conducen hacia una &ldquo;unidad creativa&rdquo;. Mencionare algunas preguntas que todo creador debe formularse: &iquest;Qu&eacute; es lo que quiero decir con todo esto? Y&nbsp;&iquest;C&oacute;mo lo quiero decir?</p>\r\n\r\n<p><strong>LA FAJA CALENDARIO</strong><br />\r\nPunto de partida para la creaci&oacute;n del gui&oacute;n esc&eacute;nico.<br />\r\nDespu&eacute;s de haber observado las danzas, los rituales la vida diaria del poblador, despu&eacute;s de haber le&iacute;do, de haber hecho pruebas e intentos esc&eacute;nicos, coreogr&aacute;ﬁcos diversos con los danzantes, el pregui&oacute;n estaba casi listo, este era la famosa Faja Calendario.<br />\r\n&iquest;Qu&eacute; es la faja calendario? Es un cintur&oacute;n ancho bordado con diversas simbolog&iacute;as que se teje por el rev&eacute;s, estos narran los acontecimientos ocurridos a una familia durante una campa&ntilde;a agr&iacute;cola (narra la historia de una familia en su a&ntilde;o).</p>\r\n\r\n<p style=\"text-align:center\"><img alt=\"\" src=\"https://brisas.punovive.com/wp-content/uploads/2017/06/taquile-faja.jpg\" style=\"height:165px; width:635px\" /></p>\r\n\r\n<p><strong>La Faja Calendario simbolog&iacute;a</strong></p>\r\n\r\n<ul>\r\n	<li>Tiempo representado: mes de noviembre.</li>\r\n	<li>Ideograma: Chaska y banderas.</li>\r\n	<li>Signiﬁcado: &ldquo;ya hemos renovado a las autoridades, este es el mes para suplicar por la lluvia&rdquo;.</li>\r\n	<li>Proceso compositivo (descripci&oacute;n de la escena pedir que venga la lluvia): El ritual en este mes consiste en que si no llov&iacute;a se colocasen 12 a 24 ranitas negras recogidas de la orilla del lago en una olla de barro con agua y comida en las zonas sagradas de la isla ellas llaman r&aacute;pido a la lluvia. As&iacute; tambi&eacute;n de la lectura de Cecilia Granadino, y de los relatos que me hizo el se&ntilde;or Huata (ex Varoy), extraje la imagen po&eacute;tica de que muchas veces en las noches a las mujeres de Taquile se les ha confundido con las ranas gigantes que suelen aparecerse.</li>\r\n</ul>\r\n\r\n<p><strong>Danza los Negritos para pedir por la lluvia:</strong></p>\r\n\r\n<p>Es una danza que seg&uacute;n la tradici&oacute;n dice que apreciando la forma y la calidad de la danza de la pareja, y de la m&uacute;sica que la anima, se puede predecir c&oacute;mo ser&aacute;n las pr&oacute;ximas cosechas y del devenir de la comunidad para el a&ntilde;o en curso. Estos negritos asociados a los periodos de rito para llamar a la lluvia, se les denomina los &laquo;cargados de lluvia&rdquo; lo cual sirvi&oacute; para este proceso compositivo.</p>\r\n\r\n<p>Escribe:<strong>&nbsp;Luz Guti&eacute;rrez Privat</strong></p>\r\n\r\n<p>Fuente:&nbsp;<a href=\"https://brisas.punovive.com/revista/brisas-revista-cultural-2016-02/\">Revista Brisas</a></p>',2,'2022-06-17 23:31:32','2022-06-18 00:02:18'),(3,'Jaltawi | Derroche de Elegancia en su Máxima Expresión en Brisas del Titicaca bajo el cielo de Lima','jaltawi-derroche-de-elegancia-en-su-maxima-expresion-en-brisas-del-titicaca-bajo-el-cielo-de-lima','https://brisas.dennisormeno.com/storage/photos/2/Entradas/post3.jpg','https://brisas.dennisormeno.com/storage/photos/2/Entradas/post_blog.png',' JALTAWI que significa “salta hacia adelante”, y así fue; gracias a la exigencia y respaldo del público hoy el grupo goza de una notoria popularidad, se ve reflejado en el tarareo y el baile de cada uno de los asistentes de la noche de ayer, que no faltaron los temas más emblemáticos de la agrupación como “Mira, Mira Miraflores”, “Vientos del Sur” y “Asunción” tales son sus primeras creaciones artísticas.','<p>Con esa calidad y elegancia musical&nbsp; que caracteriza a JALTAWI, la noche de ayer la agrupaci&oacute;n derrocho arte y fanatismo en &ldquo;&nbsp;<strong>NOCHES DE FLOKLORE DE LA ASOCIACION CULTURAL BRISAS DEL TITICACA</strong>&rdquo;, preservando y difundiendo el arte y la cultura en su m&aacute;xima expresi&oacute;n, marcando la diferencia al fiel estilo del rey moreno con &ldquo;Culpable&rdquo; tema lanzado en el 2020, as&iacute; como sus &eacute;xitos m&aacute;s aclamados como &ldquo;<strong>Laykamineros</strong>&rdquo;, &ldquo;La mujer perfecta&rdquo;, &eacute;xitos que hacen vibrar de emoci&oacute;n y dibujar estrellas en cielo lime&ntilde;o y sobre todo en los fan&aacute;ticos y asistentes.</p>\r\n\r\n<p>&nbsp;JALTAWI que significa &ldquo;salta hacia adelante&rdquo;, y as&iacute; fue; gracias a la exigencia y respaldo del p&uacute;blico hoy el grupo goza de una notoria popularidad, se ve reflejado en el tarareo y el baile de cada uno de los asistentes de la noche de ayer, que no faltaron los temas m&aacute;s emblem&aacute;ticos de la agrupaci&oacute;n como &ldquo;Mira, Mira Miraflores&rdquo;, &ldquo;Vientos del Sur&rdquo; y &ldquo;Asunci&oacute;n&rdquo; tales son sus primeras creaciones art&iacute;sticas.</p>\r\n\r\n<p>Desde Puno y para el mundo la agrupaci&oacute;n JALTAWI conformada por m&aacute;s de 13 m&uacute;sicos, a la cabeza de&nbsp;<strong><a href=\"https://web.facebook.com/christian.valenciatorres.58\" tabindex=\"0\">Christian Valencia Torres</a></strong>, vocalista desde los inicios de la agrupaci&oacute;n, acompa&ntilde;ado de una voz femenina para hacer el complemento de dulzura y carisma. La agrupaci&oacute;n fue reconocida por la Municipalidad Provincial de Puno, por su constante labor de promocionar la cultura altipl&aacute;nica, a trav&eacute;s de la m&uacute;sica latinoamericana que promete seguir por m&aacute;s.</p>',3,'2022-06-17 23:32:36','2022-06-17 23:32:36');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `operationType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effectiveBrand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`detail`)),
  `paid` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_user_id_foreign` (`user_id`),
  CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,1,'550','PEN','MyOrderId6305b640af9ef','2022-08-24 00:25:31','DEBIT','VISA','497010XXXXXX0055','PAID','{\"2\":{\"name\":\"Musica con brisas\",\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/image1.jpg\",\"event_date\":\"2022-09-06 00:00:00\",\"category\":\"Taller de M\\u00fasica\",\"url\":\"https:\\/\\/brisas.dennisormeno.com\\/taller\\/musica-con-brisas\\/2\",\"price\":250},\"1\":{\"name\":\"Danza nueva\",\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/image1.jpg\",\"event_date\":\"2022-08-25 00:00:00\",\"category\":\"Taller de Danza\",\"url\":\"https:\\/\\/brisas.dennisormeno.com\\/taller\\/danza-nueva\\/1\",\"price\":300}}',1,'Dennis','Ormeño','12345678','957291617','Mz F Lote 4 Defensores de Lima','raflisd@gmail.com','2022-08-24 05:25:31','2022-08-24 05:25:31');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_desktop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (1,'Lo mejor del Folklore peruano,','bajo el cielo de Lima...','https://brisas.dennisormeno.com/storage/photos/2/Sliders/slider.jpg','https://brisas.dennisormeno.com/storage/photos/2/Sliders/slider.jpg','Comprar aquí','https://www.google.com',1,'2022-06-17 22:07:38','2022-06-17 22:07:38'),(2,'Lorem ipsum primer título ...',NULL,'https://brisas.dennisormeno.com/storage/photos/2/Sliders/slider.jpg','https://brisas.dennisormeno.com/storage/photos/2/Sliders/slider.jpg',NULL,NULL,2,'2022-06-17 22:08:32','2022-06-17 22:08:40');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscriptions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` datetime NOT NULL,
  `operationType` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effectiveBrand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paid` int(11) NOT NULL,
  `paymentMethodToken` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscriptionId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_foreign` (`user_id`),
  CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
INSERT INTO `subscriptions` VALUES (1,1,'666','PEN','MyOrderId6305c6f7be4ba','2022-08-24 01:36:51','DEBIT','VISA','497010XXXXXX0055','CANCELLED','Membresia socio',1,'10ba711d998e45c1a44cd7c2264853c0','20220824nz5Sl2','Dennis','Ormeño','12345678','','Perú','raflisd@gmail.com','2022-08-24 06:36:51','2022-08-24 06:36:58'),(2,1,'666','PEN','MyOrderId6305c70ad3084','2022-08-24 01:37:22','DEBIT','VISA','497010XXXXXX0055','CANCELLED','Membresia socio',1,'a679797126a64abc991726e5dc35e16a','20220824rAnflL','Dennis','Ormeño','12345678','','Perú','raflisd@gmail.com','2022-08-24 06:37:22','2022-08-24 06:37:41'),(3,1,'666','PEN','MyOrderId6305c7eeaa0c0','2022-08-24 01:41:03','DEBIT','VISA','497010XXXXXX0055','CANCELLED','Membresia socio',1,'072da62fecfe4e19b7aaf4cf4a37b3b7','20220824rFsRXh','Dennis','Ormeño','12345678','','Perú','raflisd@gmail.com','2022-08-24 06:41:03','2022-08-24 06:52:10'),(4,1,'666','PEN','MyOrderId6305ca9b52ea8','2022-08-24 01:52:49','DEBIT','VISA','497010XXXXXX0055','CANCELLED','Membresia socio',1,'196ea7aad4f244c3a152b4a29fd5a719','20220824dsXTA1','Dennis','Ormeño','12345678','','Perú','raflisd@gmail.com','2022-08-24 06:52:49','2022-08-24 06:52:56'),(5,2,'123','PEN','MyOrderId6305ce4e7dd1f','2022-08-24 02:08:21','DEBIT','VISA','497010XXXXXX0055','PAID','Membresia socio',1,'4eed69d1c3244146a2ea54f55528f754','20220824hJ576E','Dennis','Ormeño','12345678','','Perú','admin@admin.com','2022-08-24 07:08:21','2022-08-24 07:08:21');
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Nombre de la persona 1','https://brisas.dennisormeno.com/storage/photos/2/Testimonios/Testimonio.png','<p>Todo! excelente ambiente, rica comida, buena atenci&oacute;n con todos los protocolos. Feliz de poder gozar y disfrutar de nuestras maravillosas danzas orgullo de mi Per&uacute;.</p>',5,1,'2022-06-17 22:21:04','2022-06-17 22:21:04'),(2,'Nombre de la persona 2','https://brisas.dennisormeno.com/storage/photos/2/Testimonios/descarga.jpg','<p>Todo! excelente ambiente, rica comida, buena atenci&oacute;n con todos los protocolos. Feliz de poder gozar y disfrutar de nuestras maravillosas danzas orgullo de mi Per&uacute;.</p>',4,2,'2022-06-17 22:24:01','2022-06-17 22:24:01'),(3,'Nombre de la persona 3','https://brisas.dennisormeno.com/storage/photos/2/Testimonios/Testimonio.png','<p>Todo! excelente ambiente, rica comida, buena atenci&oacute;n con todos los protocolos. Feliz de poder gozar y disfrutar de nuestras maravillosas danzas orgullo de mi Per&uacute;.</p>',5,3,'2022-06-17 22:21:04','2022-06-17 22:21:04'),(4,'Nombre de la persona 4','https://brisas.dennisormeno.com/storage/photos/2/Testimonios/descarga.jpg','<p>Todo! excelente ambiente, rica comida, buena atenci&oacute;n con todos los protocolos. Feliz de poder gozar y disfrutar de nuestras maravillosas danzas orgullo de mi Per&uacute;.</p>',5,4,'2022-06-17 22:24:01','2022-06-17 22:24:01');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` datetime NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Dennis','Ormeño','Perú','DNI','12345678','1991-06-06 00:00:00','Masculino',0,'descarga__1655437941.jpg','raflisd@gmail.com','cancelled',NULL,'$2y$10$QeMqgllxRnrXgCiBOAu/suEdPlCDBouyY.Vi9SRodpDqeRM.iKh8.','0teji0C5tjMICub2FlWKoi7iXCNn7UcicAbvhN3bH8hLuDrg5XOuLol9hsYy','2022-06-15 07:30:54','2022-08-24 06:52:56'),(2,0,'Dennis','Ormeño','Perú','DNI','12345678','1991-06-06 00:00:00','Masculino',1,'avatar.png','admin@admin.com','active',NULL,'$2y$10$AMetq3NRO2Q4Xa8pikqg3eviFwHU6cJISbFqnlAmH66ilM0i6X87e','OAH5cT7A0UUijctPcjnbPAfGaz1kJEuFLhgntzQSumCdORYvXV4BsnCbtTSV','2022-06-15 08:01:19','2022-08-24 07:08:21'),(3,1,'Dennis','Ormeño','Perú','DNI','12345678','2000-06-06 00:00:00','Masculino',1,'avatar.png','programacion@mymarketlogic.pe','',NULL,'$2y$10$FHuZbKArTONMSSJ/l8RR2eoivSeJJ8PyCLJgr7zDkNqxijboIZ31S',NULL,'2022-08-02 15:03:38','2022-08-02 15:03:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workshop_events`
--

DROP TABLE IF EXISTS `workshop_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workshop_events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `workshop_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `workshop_events_workshop_id_foreign` (`workshop_id`),
  CONSTRAINT `workshop_events_workshop_id_foreign` FOREIGN KEY (`workshop_id`) REFERENCES `workshops` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workshop_events`
--

LOCK TABLES `workshop_events` WRITE;
/*!40000 ALTER TABLE `workshop_events` DISABLE KEYS */;
INSERT INTO `workshop_events` VALUES (1,1,'Danza nueva','danza-nueva','2022-08-25 00:00:00','<p>loremp ipsum</p>','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image1.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image2.png','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_superior.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_inferior.png','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"3\"}]',300.00,'2022-08-22 17:37:05','2022-08-23 02:23:44'),(2,2,'Musica con brisas','musica-con-brisas','2022-09-06 00:00:00','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed hendrerit ex, sit amet bibendum magna. Aliquam molestie facilisis lorem, porta sagittis justo pharetra et. Nunc urna nunc, hendrerit at nibh in, vehicula facilisis lorem. Integer rutrum dolor purus, nec laoreet mauris fringilla quis. Suspendisse vulputate mi lorem, quis egestas justo maximus id. Donec non lacus mollis, mollis justo quis, laoreet mi. Ut tempus est turpis, at posuere dui porttitor nec.</p>\r\n\r\n<p>Donec vel dui dictum nibh posuere consequat. Fusce aliquet, erat sed interdum malesuada, felis ex imperdiet lacus, eget pretium enim felis eget ex. Nulla id molestie odio. Donec placerat lobortis faucibus. Aliquam lacinia et metus at hendrerit. Mauris molestie, leo malesuada aliquet sollicitudin, justo nibh lobortis lectus, ac tempus sapien nunc sit amet enim. Vivamus sit amet tempor est. Suspendisse ut pharetra magna, eu finibus justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales augue id arcu tincidunt aliquam. Sed eu bibendum erat, et blandit purus. Integer quis erat purus. In sed pellentesque justo. Quisque tortor erat, suscipit nec diam vel, suscipit molestie urna. Ut et leo efficitur, maximus ex ut, molestie augue. Sed quis elementum ex.</p>\r\n\r\n<p>Sed aliquet auctor felis quis sagittis. Quisque et dignissim leo. Proin id vestibulum nisl, nec finibus orci. Etiam mauris ante, varius a orci id, facilisis malesuada dui. Aenean quis sodales tellus, in laoreet massa. Donec aliquet posuere tempor. Phasellus molestie ultrices ante sit amet elementum. Donec imperdiet quam eros, et iaculis neque mattis sed. Aenean sit amet vehicula massa, a sagittis odio.</p>','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image1.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/image2.png','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_superior.jpg','https://brisas.dennisormeno.com/storage/photos/2/Eventos/AlmuerzoShow/Evento1/banner_inferior.png','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Eventos\\/AlmuerzoShow\\/Evento1\\/images_event.png\",\"order\":\"1\"}]',250.00,'2022-08-23 03:15:14','2022-08-23 03:15:14');
/*!40000 ALTER TABLE `workshop_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `workshops`
--

DROP TABLE IF EXISTS `workshops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `workshops` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `button_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `workshops`
--

LOCK TABLES `workshops` WRITE;
/*!40000 ALTER TABLE `workshops` DISABLE KEYS */;
INSERT INTO `workshops` VALUES (1,'Taller de Danza','https://brisas.dennisormeno.com/storage/photos/2/Talleres/img_talleres.jpg','<p>Bajo este concepto se ha dise&ntilde;ado un espect&aacute;culo compuesto por m&uacute;sica y danzas peruanas, cuidando la originalidad y los detalles a fin de que se convierta en un viaje imaginario por las diferentes regiones del Per&uacute;. Una propuesta &uacute;nica en la que la magia y el color de las danzas nacionales demuestran la calidez, la alegr&iacute;a y el arte de los peruanos. Un amplio escenario es el lugar donde m&aacute;s de 50 artistas presentan el mejor espect&aacute;culo de folklore peruano. Lo mejor del folklore peruano bajo el cielo de Lima.</p>','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"3\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"4\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"5\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"6\"}]','CICLO JULIO - SETIEMBRE','https://brisas.dennisormeno.com/storage/files/2/Talleres/Horario_III_Ciclo_Julio_Setiembre.pdf','Beneficios','<p>Clausura de taller en el escenario principal de la instituci&oacute;n. El alumno puede escoger dos danzas de su preferencia. Duraci&oacute;n de ciclo: 10 semanas, equivalente a 30 horas de clase. Duraci&oacute;n de clase: Tres horas por semana. El n&uacute;mero m&iacute;nimo de participantes por aula es de 12 alumnos.</p>','Costos','<p>Costo de ciclo: S/. 280 al contado.</p>\r\n\r\n<p>&iexcl;Super promo! S/. 230. V&aacute;lido para clases de Lunes a Viernes en el horario de 9:00 a.m. 12:00 m.<br />\r\nHorarios a escoger de lunes a domingo.</p>','Danzas','<p>Valicha, Movido T&iacute;pico, Festejo, Brujas de Cachiche, Tinkus, Diablada, Pacasito, Tobas, Huaylarsh, Morenada, Carnaval de Lamas, Afro, Machitas &ndash; Morenada, Carnaval de Arequipa, Carn. de Q&rsquo;achin (Cusco), Qashwa de Soltero, Contradanza, Zamacueca, Tondero, Carnaval de Arequipa, Lavanderas, Cuadro Criollo, Marinera Intermedio.</p>',NULL,NULL,NULL,NULL,NULL,NULL,1,'2022-06-18 04:31:19','2022-06-18 05:38:02'),(2,'Taller de Música','https://brisas.dennisormeno.com/storage/photos/2/Talleres/img_talleres.jpg','<p>Bajo este concepto se ha dise&ntilde;ado un espect&aacute;culo compuesto por m&uacute;sica y danzas peruanas, cuidando la originalidad y los detalles a fin de que se convierta en un viaje imaginario por las diferentes regiones del Per&uacute;.</p>','[{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"1\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"2\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"3\"},{\"image\":\"https:\\/\\/brisas.dennisormeno.com\\/storage\\/photos\\/2\\/Talleres\\/taller_slider.png\",\"order\":\"4\"}]','CICLO ABRIL - JUNIO','https://brisas.dennisormeno.com/storage/files/2/Talleres/Horario_III_Ciclo_Julio_Setiembre.pdf','Beneficios','<p>Clausura de taller en el escenario principal de la instituci&oacute;n. El alumno puede escoger dos danzas de su preferencia. Duraci&oacute;n de ciclo: 10 semanas, equivalente a 30 horas de clase. Duraci&oacute;n de clase: Tres horas por semana. El n&uacute;mero m&iacute;nimo de participantes por aula es de 10 alumnos.</p>','Costos','<p>Costo de ciclo: S/. 280 al contado.</p>\r\n\r\n<p>&iexcl;Super promo! S/. 230. V&aacute;lido para clases de Lunes a Viernes en el horario de 9:00 a.m. 12:00 m.<br />\r\nHorarios a escoger de lunes a domingo.</p>','Danzas','<p>Valicha, Movido T&iacute;pico, Festejo, Brujas de Cachiche, Tinkus, Diablada, Pacasito, Tobas, Huaylarsh, Morenada, Carnaval de Lamas, Afro, Machitas &ndash; Morenada, Carnaval de Arequipa, Carn. de Q&rsquo;achin (Cusco), Qashwa de Soltero, Contradanza, Zamacueca, Tondero, Carnaval de Arequipa, Lavanderas, Cuadro Criollo, Marinera Intermedio.</p>',NULL,NULL,NULL,NULL,NULL,NULL,2,'2022-06-18 05:29:50','2022-06-18 05:38:09');
/*!40000 ALTER TABLE `workshops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zones`
--

DROP TABLE IF EXISTS `zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zones` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zones`
--

LOCK TABLES `zones` WRITE;
/*!40000 ALTER TABLE `zones` DISABLE KEYS */;
INSERT INTO `zones` VALUES (1,'Aymara',49.00,'0,176,240',NULL,NULL),(2,'Quechua',70.00,'226, 107, 10',NULL,NULL),(3,'Uros',85.00,'146, 208, 80',NULL,NULL);
/*!40000 ALTER TABLE `zones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-08-24  2:29:30
