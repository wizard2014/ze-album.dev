-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: dbname
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `album`
--

LOCK TABLES `album` WRITE;
/*!40000 ALTER TABLE `album` DISABLE KEYS */;
INSERT INTO `album` VALUES (1,'David Bowie','The Next Day (Deluxe Version)'),(2,'Bastille','Bad Blood'),(3,'Bruno Mars','Unorthodox Jukebox'),(4,'Emeli Sandé','Our Version of Events (Special Edition)'),(5,'Bon Jovi','What About Now (Deluxe Version)'),(6,'Justin Timberlake','The 20/20 Experience (Deluxe Version)'),(7,'Bastille','Bad Blood (The Extended Cut)'),(8,'P!nk','The Truth About Love'),(9,'Sound City - Real to Reel','Sound City - Real to Reel'),(10,'Jake Bugg','Jake Bugg'),(11,'Various Artists','The Trevor Nelson Collection'),(12,'David Bowie','The Next Day'),(13,'Mumford & Sons','Babel'),(14,'The Lumineers','The Lumineers'),(15,'Various Artists','Get Ur Freak On - R&B Anthems'),(16,'The 1975','Music For Cars EP'),(17,'Various Artists','Saturday Night Club Classics - Ministry of Sound'),(18,'Hurts','Exile (Deluxe)'),(19,'Various Artists','Mixmag - The Greatest Dance Tracks of All Time'),(20,'Ben Howard','Every Kingdom'),(21,'Stereophonics','Graffiti On the Train'),(22,'The Script','#3'),(23,'Stornoway','Tales from Terra Firma'),(24,'David Bowie','Hunky Dory (Remastered)'),(25,'Worship Central','Let It Be Known (Live)'),(26,'Ellie Goulding','Halcyon'),(27,'Various Artists','Dermot O\'Leary Presents the Saturday Sessions 2013'),(28,'Stereophonics','Graffiti On the Train (Deluxe Version)'),(29,'Dido','Girl Who Got Away (Deluxe)'),(30,'Hurts','Exile'),(31,'Bruno Mars','Doo-Wops & Hooligans'),(32,'Calvin Harris','18 Months'),(33,'Olly Murs','Right Place Right Time'),(34,'Alt-J (?)','An Awesome Wave'),(35,'One Direction','Take Me Home'),(36,'Various Artists','Pop Stars'),(37,'Various Artists','Now That\'s What I Call Music! 83'),(38,'John Grant','Pale Green Ghosts'),(39,'Paloma Faith','Fall to Grace'),(40,'Laura Mvula','Sing To the Moon (Deluxe)'),(41,'Duke Dumont','Need U (100%) [feat. A*M*E] - EP'),(42,'Watsky','Cardboard Castles'),(43,'Blondie','Blondie: Greatest Hits'),(44,'Foals','Holy Fire'),(45,'Maroon 5','Overexposed'),(46,'Bastille','Pompeii (Remixes) - EP'),(47,'Imagine Dragons','Hear Me - EP'),(48,'Various Artists','100 Hits: 80s Classics'),(49,'Various Artists','Les Misérables (Highlights From the Motion Picture Soundtrack)'),(50,'Mumford & Sons','Sigh No More'),(51,'Frank Ocean','Channel ORANGE'),(52,'Bon Jovi','What About Now'),(53,'Various Artists','BRIT Awards 2013'),(54,'Taylor Swift','Red'),(55,'Fleetwood Mac','Fleetwood Mac: Greatest Hits'),(56,'David Guetta','Nothing But the Beat Ultimate'),(57,'Various Artists','Clubbers Guide 2013 (Mixed By Danny Howard) - Ministry of Sound'),(58,'David Bowie','Best of Bowie'),(59,'Laura Mvula','Sing To the Moon'),(60,'ADELE','21'),(61,'Of Monsters and Men','My Head Is an Animal'),(62,'Rihanna','Unapologetic'),(63,'Various Artists','BBC Radio 1\'s Live Lounge - 2012'),(64,'Avicii & Nicky Romero','I Could Be the One (Avicii vs. Nicky Romero)'),(65,'The Streets','A Grand Don\'t Come for Free'),(66,'Tim McGraw','Two Lanes of Freedom'),(67,'Foo Fighters','Foo Fighters: Greatest Hits'),(68,'Various Artists','Now That\'s What I Call Running!'),(69,'Swedish House Mafia','Until Now'),(70,'The xx','Coexist'),(71,'Five','Five: Greatest Hits'),(72,'Jimi Hendrix','People, Hell & Angels'),(73,'Biffy Clyro','Opposites (Deluxe)'),(74,'The Smiths','The Sound of the Smiths'),(75,'The Saturdays','What About Us - EP'),(76,'Fleetwood Mac','Rumours'),(77,'Various Artists','The Big Reunion'),(78,'Various Artists','Anthems 90s - Ministry of Sound'),(79,'The Vaccines','Come of Age'),(80,'Nicole Scherzinger','Boomerang (Remixes) - EP'),(81,'Bob Marley','Legend (Bonus Track Version)'),(82,'Josh Groban','All That Echoes'),(83,'Blue','Best of Blue'),(84,'Ed Sheeran','+'),(85,'Olly Murs','In Case You Didn\'t Know (Deluxe Edition)'),(86,'Macklemore & Ryan Lewis','The Heist (Deluxe Edition)'),(87,'Various Artists','Defected Presents Most Rated Miami 2013'),(88,'Gorgon City','Real EP'),(89,'Mumford & Sons','Babel (Deluxe Version)'),(90,'Various Artists','The Music of Nashville: Season 1, Vol. 1 (Original Soundtrack)'),(91,'Various Artists','The Twilight Saga: Breaking Dawn, Pt. 2 (Original Motion Picture Soundtrack)'),(92,'Various Artists','Mum - The Ultimate Mothers Day Collection'),(93,'One Direction','Up All Night'),(94,'Bon Jovi','Bon Jovi Greatest Hits'),(95,'Agnetha Fältskog','A'),(96,'Fun.','Some Nights'),(97,'Justin Bieber','Believe Acoustic'),(98,'Atoms for Peace','Amok'),(99,'Justin Timberlake','Justified'),(100,'Passenger','All the Little Lights'),(101,'Kodaline','The High Hopes EP'),(102,'Lana Del Rey','Born to Die'),(103,'JAY Z & Kanye West','Watch the Throne (Deluxe Version)'),(104,'Biffy Clyro','Opposites'),(105,'Various Artists','Return of the 90s'),(106,'Gabrielle Aplin','Please Don\'t Say You Love Me - EP'),(107,'Various Artists','100 Hits - Driving Rock'),(108,'Jimi Hendrix','Experience Hendrix - The Best of Jimi Hendrix'),(109,'Various Artists','The Workout Mix 2013'),(110,'The 1975','Sex'),(111,'Chase & Status','No More Idols'),(112,'Rihanna','Unapologetic (Deluxe Version)'),(113,'The Killers','Battle Born'),(114,'Olly Murs','Right Place Right Time (Deluxe Edition)'),(115,'A$AP Rocky','LONG.LIVE.A$AP (Deluxe Version)'),(116,'Various Artists','Cooking Songs'),(117,'Haim','Forever - EP'),(118,'Lianne La Havas','Is Your Love Big Enough?'),(119,'Michael Bublé','To Be Loved'),(120,'Daughter','If You Leave'),(121,'The xx','xx'),(122,'Eminem','Curtain Call'),(123,'Kendrick Lamar','good kid, m.A.A.d city (Deluxe)'),(124,'Disclosure','The Face - EP'),(125,'Palma Violets','180'),(126,'Cody Simpson','Paradise'),(127,'Ed Sheeran','(Deluxe Version)'),(128,'Michael Bublé','Crazy Love (Hollywood Edition)'),(129,'Bon Jovi','Bon Jovi Greatest Hits - The Ultimate Collection'),(130,'Rita Ora','Ora'),(131,'g33k','Spabby'),(132,'Various Artists','Annie Mac Presents 2012'),(133,'David Bowie','The Platinum Collection'),(134,'Bridgit Mendler','Ready or Not (Remixes) - EP'),(135,'Dido','Girl Who Got Away'),(136,'Various Artists','Now That\'s What I Call Disney'),(137,'The 1975','Facedown - EP'),(138,'Kodaline','The Kodaline - EP'),(139,'Various Artists','100 Hits: Super 70s'),(140,'Fred V & Grafix','Goggles - EP'),(141,'Biffy Clyro','Only Revolutions (Deluxe Version)'),(142,'Train','California 37'),(143,'Ben Howard','Every Kingdom (Deluxe Edition)'),(144,'Various Artists','Motown Anthems'),(145,'Courteeners','ANNA'),(146,'Johnny Marr','The Messenger'),(147,'Rodriguez','Searching for Sugar Man'),(148,'Jessie Ware','Devotion'),(149,'Bruno Mars','Unorthodox Jukebox'),(150,'Various Artists','Call the Midwife (Music From the TV Series)');
/*!40000 ALTER TABLE `album` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-09 15:55:53
