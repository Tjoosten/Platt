-- MySQL dump 10.13  Distrib 5.5.52, for Win64 (x86)
--
-- Host: localhost    Database: activsme_petitions
-- ------------------------------------------------------
-- Server version	5.5.52

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
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('m0jdk816mnnfkguv64j5it0qq95d5ci6','::1',1479061934,'__ci_last_regenerate|i:1479061644;'),('iatj0a1qobsk5p5rtrjnqfofe5l0bd1e','::1',1479061965,'__ci_last_regenerate|i:1479061964;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"new\";s:7:\"message\";s:3:\"new\";}message|s:31:\"The signature has been inserted\";'),('s8mjdhi0mm5r2e9285smcgk2m7o4uqpt','::1',1479062849,'__ci_last_regenerate|i:1479062798;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:31:\"The signature has been inserted\";'),('v1klnmubilbflpbvs526pg271c02tu67','::1',1479063202,'__ci_last_regenerate|i:1479063110;'),('3sosgah3c06u60bvppgdemu912quh63n','::1',1479064117,'__ci_last_regenerate|i:1479064116;'),('akm4ut1r35fmkg37339gapd5n88d74ji','::1',1479065389,'__ci_last_regenerate|i:1479065108;'),('j7e54tsqdu7ee2do994m5m6op7rbmhhs','::1',1479065593,'__ci_last_regenerate|i:1479065418;'),('q7dsr66ultlamvre8dcn00uak2vuc1ot','::1',1479066103,'__ci_last_regenerate|i:1479065808;'),('lcfij4eos61gckqmr23c5u15qk0ijek6','::1',1479067081,'__ci_last_regenerate|i:1479066977;'),('8mgrtm367jf0ga7fsckvf8a8bpkr7f9n','::1',1479069198,'__ci_last_regenerate|i:1479068918;'),('jt2p4a51mjtkabvsfkfibc1h444vl171','::1',1479069420,'__ci_last_regenerate|i:1479069219;'),('3u33o40gadqsl93hf1vk9gsnmga0cqlt','::1',1479077415,'__ci_last_regenerate|i:1479077197;'),('q2ac973cqso9pu04qlhi4r7qefcfl24g','::1',1479346338,'__ci_last_regenerate|i:1479346118;'),('jq39t1p1h4tr0d6id770irlb1poh26m6','::1',1479346838,'__ci_last_regenerate|i:1479346765;'),('e62h37gro1ro68v7f5uokha17gmeqejq','::1',1479347320,'__ci_last_regenerate|i:1479347286;'),('2v3eul9ahi5q95gve7ok7156o7m52u04','::1',1479420727,'__ci_last_regenerate|i:1479420572;'),('3tc1ndd5q16eqk8r0hf41v3ntp7h72em','::1',1479420997,'__ci_last_regenerate|i:1479420996;'),('b36ripqpdgoe0s32hg086ertjtsnil23','::1',1479422725,'__ci_last_regenerate|i:1479422645;'),('4om1gl09idnqla69c8of9350otqj0o1r','::1',1479425374,'__ci_last_regenerate|i:1479425101;'),('k776u3vrm2cv94h724ot057eco4g04ao','::1',1479425720,'__ci_last_regenerate|i:1479425481;'),('sd3ragbkf6bud8dhe8lttj415103duq1','::1',1479425852,'__ci_last_regenerate|i:1479425806;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:31:\"The signature has been deleted.\";'),('5pu9pc7laml4b64dg5h74kj6gn0p07nf','::1',1479426325,'__ci_last_regenerate|i:1479426141;'),('8b8r8fotrf6m4g6cabvobue53b27druf','::1',1479426499,'__ci_last_regenerate|i:1479426453;'),('g0ddrsfnurb6vssl8csoa2mkrbbpmgob','::1',1479429074,'__ci_last_regenerate|i:1479427101;'),('o907d02hv8k12gn9ajrp10dpt5vbm93v','::1',1479429076,'__ci_last_regenerate|i:1479429075;'),('rir742q2uf3uetttgn65h8kut2uttl6a','::1',1479429265,'__ci_last_regenerate|i:1479429089;'),('gt8q9pa37l9r9k3417ek4cs78huminni','::1',1479433169,'__ci_last_regenerate|i:1479433053;'),('0ce65hqbips68fciot9oj3o6sar6lo9u','::1',1479433432,'__ci_last_regenerate|i:1479433405;'),('73mtp9cds9sqlpgs6vnr34enl5dlooj0','::1',1479433998,'__ci_last_regenerate|i:1479433732;'),('6pvp2g2csj1rqn8fdrqogfpn4mopq9j7','::1',1479434230,'__ci_last_regenerate|i:1479434075;'),('fq8qcp3h1kmke7ap3ae44jgmn7ivsild','::1',1479434720,'__ci_last_regenerate|i:1479434719;'),('qtpbh2dir5ebaqjj12s7ej3tbk1js8j0','::1',1479435229,'__ci_last_regenerate|i:1479435046;'),('67b9tdbg4fm0utvff9c2tvp4oq2pue29','::1',1479435618,'__ci_last_regenerate|i:1479435617;'),('e1fapp6fmh5le45ja2h021ukn24mus6r','::1',1479435621,'__ci_last_regenerate|i:1479435620;'),('neoskvoaq8mppa90r16bevoggbga9llr','::1',1479435623,'__ci_last_regenerate|i:1479435622;'),('i5lpgkk1k1tmeo9ehca8cvkibe28sha5','::1',1479435625,'__ci_last_regenerate|i:1479435624;'),('kearfm49ucbo555lftit9illurvvh6c9','::1',1479435627,'__ci_last_regenerate|i:1479435626;'),('h165acean26rhlkfqb2rc7d1mkiqq6g8','::1',1479435640,'__ci_last_regenerate|i:1479435628;'),('12iork7kr4scqi4rltbctpe3mn9tjgrl','::1',1479436164,'__ci_last_regenerate|i:1479436163;'),('eb6cbhq5fdnlip3o77ed2vp4h2ret83o','::1',1479437217,'__ci_last_regenerate|i:1479436949;class|s:18:\"alert alert-danger\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:52:\"Wij konden u ticket niet registreren in het systeem.\";'),('7m3tqoe8kr5mv3rveeilcmpmd2i60bmk','::1',1479437336,'__ci_last_regenerate|i:1479437283;class|s:19:\"alert alert-success\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:64:\"uw ticket is aangemaakt in het systeem. Bedankt voor het melden.\";'),('9uk23605ufqqn8e7gff0tm2h1pn7jvid','::1',1479437714,'__ci_last_regenerate|i:1479437708;'),('fms0qb2nluq7mnfv54ef8ercehktjris','::1',1479490329,'__ci_last_regenerate|i:1479490207;'),('afsvj35s55dkk5c8dn9duqku8iav3sr5','::1',1479490615,'__ci_last_regenerate|i:1479490613;'),('10clgo4rpn5p5ap06jtqp34csu34qf0t','::1',1479491348,'__ci_last_regenerate|i:1479491057;'),('ii2fl5699g0spcq50utgsrict01qdiuv','::1',1479491474,'__ci_last_regenerate|i:1479491381;'),('rem6bccq6pj9451esqpuj10clmpfsptk','::1',1479493394,'__ci_last_regenerate|i:1479493118;'),('ukdf3tanh9o1el6q3b4ao3nau0j4b855','::1',1479493460,'__ci_last_regenerate|i:1479493440;'),('ddbjke81ql1sa2p5mic311jv8r01ugn9','::1',1479493965,'__ci_last_regenerate|i:1479493963;'),('mde1klmqra229qj4qo3l2b2sese6rae6','::1',1479494562,'__ci_last_regenerate|i:1479494430;'),('mtig47p98pppfvpqj7s1qrfqbj43v5bb','::1',1479494758,'__ci_last_regenerate|i:1479494756;'),('drcm0g58blsc2cednf3cpee5dqdkmbo9','::1',1479506011,'__ci_last_regenerate|i:1479506009;'),('hkrhletjjloamt73jc9hdlvp7u1009k2','::1',1479506042,'__ci_last_regenerate|i:1479506012;'),('eq4qubejecg7h03fure63s9ah8aae7ui','::1',1479506797,'__ci_last_regenerate|i:1479506715;'),('1fqt5dukn3onaatbnm68foone26skq6m','::1',1479508296,'__ci_last_regenerate|i:1479508294;'),('3ialroq6ppojbt7b8cj3mu4ptssf59a8','::1',1479509104,'__ci_last_regenerate|i:1479508825;'),('cmhqhkctquqdt1ic96dnsira95dvba1j','::1',1479509227,'__ci_last_regenerate|i:1479509154;'),('umqnt094k4p7e42lpvgv6sj8d4qmkhbq','::1',1479511765,'__ci_last_regenerate|i:1479511510;'),('jgfbbhuv0qgl75nsnj0m2dnvhv95us3n','::1',1479511813,'__ci_last_regenerate|i:1479511811;'),('r5uee23h9bi07nhh8hma1g6vibv1rbts','::1',1479512429,'__ci_last_regenerate|i:1479512317;'),('pus6d8l5m31qfifqsuja3thno2s0d3lf','::1',1479514278,'__ci_last_regenerate|i:1479513997;class|s:18:\"alert alert-danger\";__ci_vars|a:2:{s:5:\"class\";s:3:\"old\";s:7:\"message\";s:3:\"old\";}message|s:41:\"Wij konden uw zoekopdracht niet verwerken\";'),('nke7ve1e00g7dvou6ll50va3gbl214o3','::1',1479514413,'__ci_last_regenerate|i:1479514411;'),('dlp8v709lgju4nie1fabcgcntadb20qp','::1',1479515223,'__ci_last_regenerate|i:1479515013;'),('mvi3ekh5pj5h4c3shgovbc58etlqpbc0','::1',1479515641,'__ci_last_regenerate|i:1479515531;'),('v91drmurmlfmnjrtcvghq4519jgigfg5','::1',1479516017,'__ci_last_regenerate|i:1479515959;'),('5ng8isvsjjq6hinm0om2q0rbl71tto0a','::1',1479516344,'__ci_last_regenerate|i:1479516343;'),('te5h0nq49av2cn4vp4fisvehibnpbuu9','::1',1479597154,'__ci_last_regenerate|i:1479597153;'),('nd38llaa3bbupv2olbub2q6iec3k4rhr','::1',1479597213,'__ci_last_regenerate|i:1479597155;');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labels`
--

DROP TABLE IF EXISTS `labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `labels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labels`
--

LOCK TABLES `labels` WRITE;
/*!40000 ALTER TABLE `labels` DISABLE KEYS */;
INSERT INTO `labels` VALUES (1,'Typ fourt');
/*!40000 ALTER TABLE `labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `signatures`
--

DROP TABLE IF EXISTS `signatures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `signatures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birth_date` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `signatures`
--

LOCK TABLES `signatures` WRITE;
/*!40000 ALTER TABLE `signatures` DISABLE KEYS */;
/*!40000 ALTER TABLE `signatures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tickets`
--

DROP TABLE IF EXISTS `tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `email` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tickets`
--

LOCK TABLES `tickets` WRITE;
/*!40000 ALTER TABLE `tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `tickets` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-20 19:36:11
