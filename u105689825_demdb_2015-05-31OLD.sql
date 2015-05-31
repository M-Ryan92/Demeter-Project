# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 185.28.20.10 (MySQL 5.1.71)
# Database: u105689825_demdb
# Generation Time: 2015-05-31 20:39:53 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table css
# ------------------------------------------------------------

DROP TABLE IF EXISTS `css`;

CREATE TABLE `css` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `filename` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `css` WRITE;
/*!40000 ALTER TABLE `css` DISABLE KEYS */;

INSERT INTO `css` (`id`, `updatedate`, `name`, `filename`)
VALUES
	(1,'2014-12-27 16:57:43','Basic Demeter css','webClient.css'),
	(3,'2014-12-28 01:37:15','Activiteit css','workshop.css');

/*!40000 ALTER TABLE `css` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fields`;

CREATE TABLE `fields` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tagname` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `rtf` tinyint(1) DEFAULT '0',
  `array` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `fields` WRITE;
/*!40000 ALTER TABLE `fields` DISABLE KEYS */;

INSERT INTO `fields` (`id`, `updatedate`, `name`, `tagname`, `rtf`, `array`)
VALUES
	(5,'2015-04-12 14:31:58','Homepagina tekstkopje titel','texttitle',0,0),
	(6,'2014-12-27 21:16:04','Homepagina tekstkopje','textcontent',0,0),
	(7,'2014-12-27 21:16:18','Homepagina tekstplaatje','textimg',0,0),
	(8,'2014-12-27 21:16:34','Homepagina Sliderplaatje','sliderimg',0,0),
	(9,'2015-04-05 14:40:48','Bedrijfspagina bedrijfsinformatie','companyinfo',1,0),
	(10,'2014-12-28 00:24:58','Voorstelpagina introductie','introduction',0,0),
	(11,'2014-12-28 00:30:49','Voorstelpagina opleidingen','education',0,0),
	(12,'2015-04-12 14:32:16','Hoofdtekst','maintext',1,0),
	(13,'2015-05-10 15:58:34','Normale tekst','infotext',1,0),
	(14,'2015-01-04 13:54:06','Activiteit informatie sidepanel label','infolabel',0,0),
	(15,'2015-05-10 16:00:32','Activiteit informatie sidepanel inhoud','infovalue',0,0),
	(16,'2015-05-10 15:22:52','Pagina Thumbnail ','thumbnail',0,0),
	(17,'2015-01-04 15:30:26','Natuurvoeding Stap titel','steptitle',0,0),
	(18,'2015-01-04 15:30:41','Natuurvoeding Stap text','steptext',0,0),
	(19,'2015-01-04 15:30:59','Natuurvoeding Stap details','stepdetail',0,0),
	(20,'2015-01-04 15:32:51','Natuurvoeding Motto','mottotext',0,0),
	(21,'2015-01-04 15:59:45','Text onderaan','lowertext',0,0),
	(22,'2015-01-04 16:34:37','Voorwaarden informatie','termsdetail',0,0),
	(23,'2015-01-04 17:14:51','Tarief Natuurvoeding Service Naam','natservice',0,0),
	(24,'2015-01-04 17:15:29','Tarief Natuurvoeding Duur','natduration',0,0),
	(25,'2015-01-04 17:15:48','Tarief Natuurvoeding Prijs','natprice',0,0),
	(26,'2015-01-04 17:17:29','Tarief Natuurvoeding Details','natdetail',0,0),
	(27,'2015-01-04 17:16:36','Tarief Activiteit Service Naam','actservice',0,0),
	(28,'2015-01-04 17:16:54','Tarief Activiteit Prijs','actprice',0,0),
	(29,'2015-01-04 17:17:04','Tarief Activiteit Duur','actduration',0,0),
	(31,'2015-04-12 14:13:35','Sportproduct Titel','producttitle',0,1),
	(32,'2015-04-12 14:13:36','Sportproduct Beschrijving','productdescription',0,1),
	(33,'2015-04-12 14:13:37','Sportproduct Afbeelding','productimg',0,1),
	(34,'2015-04-12 14:13:38','Sportproduct Link','productlink',0,1),
	(35,'2015-01-04 21:30:42','Page Image','pageimg',0,0),
	(36,'2015-01-04 21:30:10','Page Image link','pageimglink',0,0),
	(37,'2015-05-10 15:59:47','Page Image alt text','pageimgalt',0,0);

/*!40000 ALTER TABLE `fields` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table filledforms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `filledforms`;

CREATE TABLE `filledforms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Bericht',
  `pageurl` varchar(250) COLLATE utf8_unicode_ci DEFAULT '',
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `filledforms` WRITE;
/*!40000 ALTER TABLE `filledforms` DISABLE KEYS */;

INSERT INTO `filledforms` (`id`, `updatedate`, `type`, `pageurl`, `name`, `email`, `subject`, `message`)
VALUES
	(33,'2015-02-14 20:17:42','Bericht','home',NULL,'sdfghjggfe@hotmail.com',NULL,NULL),
	(35,'2015-02-14 20:18:21','Bericht','home',NULL,'dev@google.com',NULL,NULL),
	(17,'2015-01-25 15:16:36','Bericht','gezichtsmassage','michel tests','micheltest@dev.nl','Vraag','hallo\'tjuhs :) dit is een test');

/*!40000 ALTER TABLE `filledforms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table js
# ------------------------------------------------------------

DROP TABLE IF EXISTS `js`;

CREATE TABLE `js` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `filename` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `js` WRITE;
/*!40000 ALTER TABLE `js` DISABLE KEYS */;

INSERT INTO `js` (`id`, `updatedate`, `name`, `filename`)
VALUES
	(3,'2014-12-28 00:02:35','Nieuwsbrief inschrijving','newssubscription.js'),
	(4,'2014-12-28 01:34:39','Activiteit contact toggle','workshopcontact.js'),
	(5,'2015-01-04 22:02:37','Overlay carousel','overlaycaroussel.js'),
	(6,'2014-12-28 12:51:12','Formsubmit middels een ajax call','StandardFormSubmit.js'),
	(7,'2015-01-04 16:48:30','Tarieven js voor de dropdowns','tarief.js'),
	(8,'2015-01-04 21:17:25','OWL Library','resources/owl/owl.carousel.min.js'),
	(9,'2015-01-04 21:20:27','Homepage caroussel','homepagecaroussel.js');

/*!40000 ALTER TABLE `js` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menuitems
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menuitems`;

CREATE TABLE `menuitems` (
  `menuId` int(11) NOT NULL,
  `menuOrder` int(11) NOT NULL,
  `menuName` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pageRef` int(11) DEFAULT NULL,
  `parentMenu` int(11) DEFAULT NULL,
  PRIMARY KEY (`menuId`),
  UNIQUE KEY `menuId` (`menuId`),
  UNIQUE KEY `menuName` (`menuName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `menuitems` WRITE;
/*!40000 ALTER TABLE `menuitems` DISABLE KEYS */;

INSERT INTO `menuitems` (`menuId`, `menuOrder`, `menuName`, `pageRef`, `parentMenu`)
VALUES
	(1,0,'Home',1,NULL),
	(2,1,'Voeding',NULL,NULL),
	(3,0,'natuurVoeding',NULL,2),
	(4,1,'sportVoeding',NULL,2),
	(5,2,'Therapieën',NULL,NULL),
	(6,0,'Holistic Pulsing',NULL,5),
	(7,1,'Gezichtsmassage',NULL,5),
	(8,2,'Oorkaars-therapie',4,5),
	(9,3,'Ontzuren',NULL,5),
	(10,3,'activiteiten',NULL,NULL),
	(11,0,'Outdoor-training',NULL,10),
	(12,1,'Workshop: Ontzuren',NULL,10),
	(13,2,'Workshop: Holistic Pulsing``',NULL,10),
	(14,4,'Contact',5,NULL);

/*!40000 ALTER TABLE `menuitems` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menutables2
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menutables2`;

CREATE TABLE `menutables2` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `label` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NONE',
  `page` int(11) unsigned DEFAULT NULL,
  `submenu` int(10) unsigned DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `page` (`page`),
  KEY `submenu` (`submenu`),
  CONSTRAINT `menutables2_ibfk_1` FOREIGN KEY (`submenu`) REFERENCES `menutables2` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `menutables2_ibfk_2` FOREIGN KEY (`page`) REFERENCES `pages` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `menutables2` WRITE;
/*!40000 ALTER TABLE `menutables2` DISABLE KEYS */;

INSERT INTO `menutables2` (`id`, `updatedate`, `label`, `page`, `submenu`, `priority`)
VALUES
	(1,'2015-01-04 16:20:43','Home',5,NULL,0),
	(2,'2015-01-04 16:21:01','Voeding',NULL,NULL,1),
	(3,'2015-01-04 16:21:27','Therapieën',NULL,NULL,2),
	(4,'2015-01-04 16:22:14','Activiteiten',NULL,NULL,3),
	(5,'2015-01-04 16:22:30','Contact',25,NULL,4),
	(6,'2015-01-04 16:23:36','Natuurvoeding',27,2,0),
	(7,'2015-01-04 16:23:53','Sportvoeding',28,2,1),
	(8,'2015-01-04 16:24:38','Holistic Pulsing',13,3,0),
	(9,'2015-01-04 16:24:56','Gezichtsmassage',16,3,1),
	(10,'2015-01-04 16:25:12','Oorkaars-therapie',17,3,2),
	(11,'2015-01-04 16:25:27','Ontzuren',18,3,3),
	(12,'2015-01-04 16:25:51','Outdoor-training',19,4,0),
	(13,'2015-01-04 16:26:08','Workshop: Ontzuren',20,4,1),
	(14,'2015-01-04 16:26:28','Workshop: Holisitic Pulsing',21,4,2),
	(15,'2015-01-04 16:26:50','Workshop: Overgang en Voeding',22,4,3),
	(16,'2015-01-04 16:27:06','Workshop: Puur Gezond',23,4,4);

/*!40000 ALTER TABLE `menutables2` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pagetitle` varchar(250) COLLATE utf8_unicode_ci DEFAULT '',
  `pageurl` varchar(250) CHARACTER SET utf8 NOT NULL DEFAULT 'home',
  `metatitle` text COLLATE utf8_unicode_ci,
  `metakeywords` text COLLATE utf8_unicode_ci,
  `metadescription` text COLLATE utf8_unicode_ci,
  `template` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `template` (`template`),
  CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`template`) REFERENCES `templates` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;

INSERT INTO `pages` (`id`, `updatedate`, `pagetitle`, `pageurl`, `metatitle`, `metakeywords`, `metadescription`, `template`)
VALUES
	(5,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(6,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(8,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(10,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(13,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(16,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(17,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(18,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(19,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(20,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(21,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(22,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(23,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(25,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(26,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(27,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(28,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(104,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12),
	(106,'2015-05-31 20:36:38','Nieuwe Pagina567','new-page567','Nieuwe Pagina','Nieuw, Pagina','Dit is een nieuw aangemaakte pagina.',12);

/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages_templates_fields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages_templates_fields`;

CREATE TABLE `pages_templates_fields` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `page` int(11) unsigned NOT NULL,
  `template` int(11) unsigned NOT NULL,
  `field` int(11) unsigned NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `page` (`page`),
  KEY `template` (`template`),
  KEY `tfield` (`field`),
  CONSTRAINT `pages_templates_fields_ibfk_1` FOREIGN KEY (`page`) REFERENCES `pages` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `pages_templates_fields_ibfk_2` FOREIGN KEY (`template`) REFERENCES `templates` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `pages_templates_fields_ibfk_3` FOREIGN KEY (`field`) REFERENCES `fields` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `pages_templates_fields` WRITE;
/*!40000 ALTER TABLE `pages_templates_fields` DISABLE KEYS */;

INSERT INTO `pages_templates_fields` (`id`, `updatedate`, `page`, `template`, `field`, `value`)
VALUES
	(4,'2014-12-27 21:31:13',5,3,5,'Demeter Voeding en Welzijn'),
	(7,'2014-12-27 22:59:30',5,3,5,'Even voorstellen'),
	(8,'2014-12-28 00:22:05',8,5,9,'            <p>\n                <b>\n                    Om naar een zo goed mogelijke gezondheid te streven is het van belang dat lichaam en geest in balans zijn. \n                    Voeding, stressbeperking en beweging zijn drie belangrijke factoren voor een optimaal evenwicht.\n                </b>\n            </p>\n            <p>\n                Hippocrates, de grondlegger van onze hedendaagse geneeskunde, \n                wist heel lang geleden al dat het lichaam beschikt over een krachtig zelfgenezend vermogen. \n                Het lichaam bezit alle benodigde systemen voor regeneratie, verjonging en vitaliteit.\n            </p>\n            <p>\n                Gezonde voeding is de basis voor een gezond, vitaal en duurzaam leven. \n                Door een juiste voedselkeuze en de juiste bereidingstechnieken kunnen wij onze gezondheid ondersteunen en versterken.\n            </p>\n            <p>\n                Heb je wel eens een massage ondergaan, dan weet je hoe ontspannend dit kan werken. \n                Je laat alle stress varen en ervaart een compleet gevoel van welzijn. \n                Maar massage doet nog veel meer dan je alleen maar goed laten voelen. \n                Wetenschappelijk onderzoek toont aan dat massage zowel psychische als lichamelijke gezondheidsvoordelen biedt.\n            </p>\n            <p>\n                Een lichaam is gemaakt om te bewegen. Ook al weten we dat wel, we handelen er niet altijd naar. \n                Meer beweging heeft een positieve invloed op zowel lichaam en geest.  \n                Demeter Voeding & Welzijn verzorgt diverse outdoor trainingen op locatie in Purmerend \n                om cliënten te stimuleren op een ongedwongen manier in beweging te komen.\n            </p>\n            <p>\n                De synergie van het werken met al deze drie factoren kan meer opleveren dan de som der delen.\n                Om een voorbeeld te geven; als overgewicht is ontstaan door emotionele factoren, \n                helpt het aanleren van een gezond voedingspatroon een heel eind in de goede richting, maar haalt niet de oorzaak weg. \n                Met behulp van een massagetherapie als Holistic Pulsing kan gekeken worden naar de achterliggende emotie. \n                Als de emoties zijn verwerkt, is het veel makkelijker om de juiste balans  te vinden én vast te houden.\n            </p>\n            <p class=\"text-center\" style=\"font-size: 16px;\">\n                <i>\n                    <b>\n                        Niet je capaciteiten,  \n                        niet je doelen,<br>\n                        niet je plannen,<br>\n                        maar je dagelijkse activiteiten<br>\n                        bepalen of een verandering slaagt ! \n                    </b>\n                </i>\n            </p>'),
	(12,'2014-12-28 00:26:58',10,6,10,'<p><b>\n                    Mijn naam is Karin Papadopoulos-Broers, geboren in 1965, getrouwd, trotse moeder van drie zonen, \n                    met een passie voor gezonde voeding, koken en sport.\n                </b></p>\n            <p>\n                Op een bepaald moment in mijn leven, was ik de balans behoorlijk kwijt. \n                Door te focussen op gezonde voeding, het verwerken van emoties en beweging als ontspanning, \n                heb ik het evenwicht weer weten te vinden en ben er zelfs sterker uitgekomen. \n                Dit was voor mij de aanleiding diverse opleidingen en cursussen te gaan volgen op het gebied van voeding & welzijn. \n            </p>\n            <p>\n                Met de opgedane ervaringen en een grote mate van betrokkenheid, \n                wil ik graag anderen  ondersteunen in het vinden van de juiste balans tussen lichaam en geest!\n            </p>'),
	(13,'2014-12-28 00:31:26',10,6,11,'HBO Natuurvoedingsadviseur'),
	(14,'2014-12-28 00:31:53',10,6,11,'<span class=\"badge\">in progressie</span>\n                HBO Medische basiskennis'),
	(15,'2014-12-28 00:32:05',10,6,11,'Ontzuren en Ontslakken'),
	(16,'2014-12-28 00:32:18',10,6,11,'Holistic Pulsing'),
	(17,'2014-12-28 00:32:25',10,6,11,'Gezichtsmassage'),
	(18,'2014-12-28 00:34:10',10,6,11,'Handreflex therapie'),
	(19,'2014-12-28 00:34:24',10,6,11,'Oorreflex therapie'),
	(20,'2014-12-28 00:34:37',10,6,11,'Hotstone Massage'),
	(21,'2014-12-28 00:34:46',10,6,11,'Aromatherapie'),
	(22,'2014-12-28 00:34:58',10,6,11,'XCO Walking & Running'),
	(24,'2015-01-04 14:31:26',13,4,12,'Holistic Pulsing is een massagemethode, die je uitnodigt tot diepe ontspanning en loslaten. De gedachte achter de methode is eenvoudig : je lichaam dat voor een groot deel uit water bestaat, is een grote ritmische beweging. Bloed, adem, energie, het stroomt allemaal door je lichaam heen. Wanneer , om wat voor reden dan ook , de energie in je lichaam niet meer vrijuit kan stromen, valt dit te zien en te ervaren zodra je lichaam zachtjes wordt gewiegd. Het rustige, ritmische schudden dat de pulser op je overdraagt brengt de energie en het water in je lichaam in beweging en voert je naar je gevoelservaringen. De kracht van het pulsen ligt in de zachtheid en vriendelijkheid. Zachtjes, ritmisch schudden heeft bijna altijd een ontspannend effect. Juist vanuit die ontspanning kan in je lichaam een nieuw evenwicht ontstaan.'),
	(25,'2015-01-04 14:32:16',13,4,13,'<p>De basis van Holistic Pulsing bestaat uit ritmische beweging. Gedurende de hele sessie wordt het lichaam van de pulsee geheel of gedeeltelijk in ritmische beweging gehouden. Dit berust op het principe dat er leven is waar beweging is en dat overal waar beweging ophoudt stagnatie en verval optreden.\n            Onze pijnen en zorgen, onze ziekten en aandoeningen, onze angst en woede, hebben ertoe geleid dat we ons krampachtig samentrekken.\n            Wij hebben ons sinds onze babytijd stelselmatig vanuit ons lichaam teruggetrokken in ons hoofd. We zijn ons nog maar nauwelijks bewust van het feit dat we überhaupt een lichaam hebben, totdat we pijn ervaren.\n            Holistic Pulsing is een gemakkelijke en duidelijke manier om iemand te helpen zich bewust te worden van zijn blokkades.\n        </p>\n        <p>\n            De voortgaande pulsbeweging leidt ertoe dat de afvalstoffen in de lichaamscellen worden afgegeven aan de bloedstroom om via de nieren\n            en de blaas te worden afgescheiden. Holistic Pulsing reproduceert de genezende eigenschappen van water snel en rechtstreeks door\n            de doorstroming van onze lichaamsvochten te activeren en zo toxinen uit te scheiden en daardoor ons hele systeem te vitaliseren en\n            weer in evenwicht te brengen.\n        </p>\n        <p>Holistic Pulsing draait om de onvoorwaardelijke liefde,\n            die we ons lichaam al eeuwenlang hebben onthouden. Het eist niets, het forceert niets,\n            het vraagt om niets en het probeert zelf niets te veranderen- en dat alleen al is het begin van alle zachtmoedige wonderen\n            die zich bij Holistic Pulsing openbaren. Forceren leidt onveranderlijk tot datgene wat het probeert te elimineren.\n            Alles waar tegen we vechten maken we sterker en alles wat we accepteren maakt ons sterker.\n            Door zijn zachtheid kan Holistic Pulsing de hardnekkigste blokkades bereiken en laten verdwijnen.\n        </p>'),
	(26,'2015-01-04 14:33:46',13,4,14,'Prijs:'),
	(27,'2015-01-04 14:34:03',13,4,15,' 60,-'),
	(28,'2015-01-04 14:34:21',13,4,14,'Duur:'),
	(29,'2015-01-04 14:34:38',13,4,15,'Anderhalf uur'),
	(30,'2015-01-04 14:46:14',13,4,16,'holistic_pulsing.png'),
	(32,'2015-01-04 14:50:36',16,4,12,'Ontspannende gezichtsmassage met etherische oliën. \n<br>\n<br>\nDruk, druk, druk  een haastig leven, een drukke baan, volop spanning en stress, de aandacht voor onszelf vervaagt: het leven van de moderne tijd. Herken je dit? \nSteeds meer mensen realiseren zich dat we een gezonder en een meer ontspannen leven moeten gaan leiden. Gun je zelf eens een moment van rust met een ontspannende gezichtsmassage.'),
	(33,'2015-01-04 14:51:04',16,4,13,'Het gezicht weerspiegelt voortdurend onze gezondheid, emoties en wat we denken. Stress en spanning worden weerspiegeld door gefronste wenkbrauwen en rimpels rond de ogen, mond en kaaklijn. Een gezichtsmassage kan hoofdpijn, angst, uitputting en spanning wegnemen en ze vervangen door een gevoel van welbehagen. Het kalmeert de zenuwen, verbetert de bloedsomloop en geeft de huid een gezonde glans. Door de gezichtsmassage te combineren met handmassage, holistic pulsing en warme stenen ervaar je tijdens en na de behandeling een diepe ontspanning van lichaam en geest.'),
	(34,'2015-01-04 14:51:45',16,4,16,'Ontspannende gezichtsmassage.jpg'),
	(35,'2015-01-04 14:52:18',16,4,14,'Prijs:'),
	(36,'2015-01-04 14:52:35',16,4,15,' 35,-'),
	(37,'2015-01-04 14:52:46',16,4,14,'Duur:'),
	(38,'2015-01-04 14:52:58',16,4,15,'Ca 50min'),
	(41,'2015-01-04 14:55:45',17,4,12,'De oorkaars therapie is een warmtetherapie die het lichaam ontspant en de doorbloeding stimuleert en op zijn beurt weer belangrijk is voor de genezingsprocessen. Oorkaarsen werken lichaamszuiverend. Alle met het oor verbonden organen, zoals buitenkant trommelvlies, middenoor en evenwichtsorgaan, worden door de warmtewerking beïnvloed. Een lichte onderdruk (schouweffect) in de oorkaars en een trilling van de stijgende lucht te wijten aan de natuurlijke beweging van de vlam, geven een lichte massage van het trommelvlies. Dit brengt een intensief gevoel van aangename warmte teweeg en een \"bevrijdend\" aanvoelende drukregeling in oor-, voorhoofd- en bijholten gebied. Deze lichamelijke prikkel wordt bijna onmiddellijk na het aanwenden beschreven als een weldadig gevoel, pijn- en drukverminderend, vooral in hoofd en oorgebied. Spontaan kan dit ook een vrijere neusademhaling en een beter geurvermogen tot gevolg hebben, ook bij een tot dan toe verstopte neus.'),
	(42,'2015-01-04 14:56:26',17,4,13,'                    <p>\n                        Bovendien geeft deze ceremonie een heerlijk gevoel van ontspanning en geborgenheid.\n                        Door de directe werking van de kruiden op het zenuwstelsel van het limbische systeem is het mogelijk om meerdere klachten te behandelen, omdat het limbische systeem veel psychische en fysieke klachten beïnvloedt.\n                        Een aantal veel voorkomende klachten die je met ondersteuning van oorkaarsen kunt behandelen zijn:\n                    </p>\n                    <ul>\n                        <li>irritaties aan het oor, neus, voorhoofd en bijholten</li>\n                        <li>hooikoorts</li>\n                        <li>oordruk (dichtslaan van het oor)</li>\n                        <li>oorsuizen</li>\n                        <li>drukregulatie bij hoofdpijn</li>\n                        <li>migraine</li>\n                        <li>bijholteontstekingen</li>\n                        <li>verkoudheid en griep</li>\n                        <li>keelpijn, ontstoken amandelen</li>\n                        <li>doorbloedingsstoornissen van het oor</li>\n                        <li>hyperactiviteit</li>\n                        <li>stress</li>\n                        <li>nervositeit, angsten, depressies</li>\n                        <li>slapeloosheid</li>\n                        <li>vermoeidheid (ook psychisch)</li>\n                    </ul>\n\n                    <p>\n                        Bij het regelmatig gebruiken van oorkaarsen kunnen oude processen weer actief gemaakt worden en zo voorgoed uit het lichaam worden verbannen.\n                        In een aantal gevallen mag de oorkaars therapie niet worden toegepast:\n                    </p>\n                    <ul>\n                        <li>geperforeerd trommelvlies</li>\n                        <li>geïmplanteerde gehoorbeentjes</li>\n                        <li>ontsteking van het buitenoor en middenoor</li>\n                        <li>eczeem en schimmelinfecties in het oor</li>\n                        <li>epilepsie</li>\n                    </ul>\n                    <p>Raadpleeg bij twijfel altijd eerst een reguliere arts !</p>\n\n                    <p>\n                        De oorkaarsen (Biosun)\n                        De oorkaarsen waren honderden jaren geleden een veel voorkomend ritueel- en ceremonievoorwerp bij de natuurvolkeren uit Midden- en Noord Amerika, Indonesië, Azië. Als heilig en spiritueel onderdeel was het gebruik slechts aan een paar ingewijden, sjamanen en medicijnmannen voorbehouden. De oorkaars is een holle buis van 20 centimeter bestaand uit 100% linnen weefsel van de beste kwaliteit, dat wil zeggen niet met bestrijdingsmiddelen bespoten op het veld en niet chemisch behandelt bij de verwerking. Dit linnen weefsel is verwerkt met een mengsel van speciale indiaanse geneeskrachtige kruiden (salie, kamille en Sint-Janskruid) en zuivere bijenwas en honingextracten. Dit speciale mengsel is een origineel recept van de Hopi-indianen en wordt met de hand gerold in het linnen weefsel. De oorkaars is voorzien van een speciale filter, die voorkomt dat de bijenwas in het oor loopt.\n\n                    </p>'),
	(43,'2015-01-04 14:56:56',17,4,16,'oorkaarstherapie.jpg'),
	(44,'2015-01-04 14:57:18',17,4,14,'Prijs:'),
	(45,'2015-01-04 14:57:32',17,4,15,' 30,-'),
	(46,'2015-01-04 14:57:49',17,4,14,'Duur:'),
	(47,'2015-01-04 14:58:01',17,4,15,'Ca 40 min'),
	(48,'2015-01-04 15:01:25',18,4,12,'Onze huidige voedings- en eetgewoonten zijn funest voor het zuur-base-evenwicht van ons lichaam. Zij veroorzaken een te sterke verzuring van het organisme, waarmee de basis voor heel veel ziekten wordt gelegd. Voeg daarbij ook een teveel aan stress en een tekort aan bewegen en ontspanning toe, en je hebt het recept voor veel vrouwenkwaaltjes.'),
	(49,'2015-01-04 15:02:42',18,4,13,'                    <h4>Doe de ontzuringstest!</h4>\n                    <p>\n                        Het verbruik van vaste stoffen (mineralen) in ons lichaam is nodig om zuren en gifstoffen te neutraliseren,\n                        maar dit resulteert tezelfdertijd in een verlies van mineralen (bijv. kalk) als in een vergiftiging,\n                        veretsing (verbranden door zuren) en verslakking van ons lichaam.\n                        Het gelijktijdig gebeuren is wat men noemt civilisatose (of welvaartziekten).\n                    </p>\n                    <p>Heeft u last van 2 of meer van onderstaande verzuringen of vergiftingen,\n                        dan raden wij u aan om te ontzuren.\n                        Een gratis urinetest is mogelijk, zodat er een indicatie is van verzuring. <br>\n                        Doe de test:\n                    </p>\n                    <div class=\"col-md-6\">\n                        <ul>\n                            <li>Haaruitval</li>\n                            <li>Zweetvoeten</li>\n                            <li>Cellulitis</li>\n                            <li>Koude voeten</li>\n                            <li>Paradentose</li>\n                            <li>Hoofdpijn</li>\n                            <li>Acne</li>\n                            <li>Aangetaste amandelen</li>\n                            <li>Migraine</li>\n                            <li>Wit aangeslagen tong</li>\n                            <li>Cariës</li>\n                            <li>Verstopping</li>\n                            <li>Diarree</li>\n                            <li>Geen eetlust</li>\n                            <li>Vraatzucht</li>\n                            <li>Hyperactief</li>\n                            <li>Maagzuur</li>\n                            <li>Lusteloosheid</li>\n                            <li>Allergie</li>\n                            <li>Aambeien</li>\n                            <li>Arteriosclerose</li>\n                            <li>Hoge cholesterol</li>\n                            <li>Hoge bloeddruk</li>\n                        </ul>\n                    </div>\n                    <div class=\"col-md-6\">\n                        <ul>\n                            <li>Verstoring v/d bloedsomloop</li>\n                            <li>Spataderartritis</li>\n                            <li>Artrose</li>\n                            <li>Aandoening v/d tussenwervelschijven</li>\n                            <li>Reuma</li>\n                            <li>Jicht</li>\n                            <li>Kramp</li>\n                            <li>Spierspanning</li>\n                            <li>Osteoporose</li>\n                            <li>Hartinfarct</li>\n                            <li>Klierziektes</li>\n                            <li>Maag- en darmziektes</li>\n                            <li>Alvleesklierstoornissen</li>\n                            <li>Open been</li>\n                            <li>Leverbeschadiging</li>\n                            <li>Nier- en galstenen</li>\n                            <li>Parkinson</li>\n                            <li>Alzheimer</li>\n                            <li>Beroerte</li>\n                            <li>Grijze staar</li>\n                            <li>Groene staar</li>\n                            <li>Oorsuizingen</li>\n                            <li>Gehoorproblemen</li>\n                        </ul>\n</div>'),
	(50,'2015-01-04 15:03:13',18,4,16,'hart.jpg'),
	(51,'2015-01-04 15:03:32',18,4,14,'Prijs:'),
	(52,'2015-01-04 15:03:48',18,4,15,' 60,-'),
	(53,'2015-01-04 15:04:04',18,4,14,'Duur:'),
	(54,'2015-01-04 15:04:15',18,4,15,'Anderhalf uur'),
	(55,'2015-01-04 15:08:57',19,4,12,'Bewegen in de buitenlucht is gezonder dan in een sportschool. Dat blijkt uit een nieuwe Britse studie. Volgens wetenschappers heeft bewegen in de buitenlucht een positief effect op zowel de geestelijke als de lichamelijke gezondheid.'),
	(56,'2015-01-04 15:09:37',19,4,13,'                    <h4 style=\"font-weight: normal\">FitNJoy</h4>\n                    <span> Leuke outdoortraining gebruik makend van de\nmogelijkheden die het park biedt. In een ongedwongen en gezellige sfeer\nwerken we aan het opbouwen van de conditie en het versterken van de spieren,\nieder op zijn eigen niveau. Na afloop is er voor de liefhebber een kop thee\nop de parkeerplaats.</span>\n                           <h4 style=\"font-weight: normal\">XCO Walking &amp; Running</h4>\n                    <span> De XCO-training is een totaal training waarbij gebruik wordt gemaakt van een XCO-trainer. \n                        De XCO-Trainer, een buis gevuld met bewegende massa, zorgt ervoor dat je constant je natuurlijke korset aanspant. \n                        Je traint conditie, spieren en bindweefsel. \n                        De XCO-buizen geven bij het begin en het eind van iedere beweging een aanvullende belasting op de spier- en bindweefselstructuren van het hele lichaam. \n                        Dit bijzondere effect wordt de Reactive Impact genoemd en is de essentie van een XCO training. \n                        Hiermee onderscheidt de XCO-Trainer zich van gewichtsoefeningen en fitnessapparaten, waarbij dit effect niet optreedt.</span>\n                    <p style=\"text-decoration: underline;\">Bewegen moet plezier zijn op je eigen niveau en daar streven wij naar tijdens de trainingen !</p>\n\n                    <p>Wij verzamelen op de parkeerplaats van het Leeghwaterbad. <br>\n                        Er is geen slecht weer, alleen slechte kleding ! <br>\n                        Slechts bij gladheid en onweer vinden wij het niet verantwoord om op pad te gaan.</p>\n                    <table class=\"table\">\n                        <thead>\n                            <tr>\n                                <th>Dag</th>\n                                <th>Tijd</th>\n                                <th>Training</th>\n                                <th>Prijs</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Woensdag</td>\n                                <td>9.30-10.30 u.</td>\n                                <td>FitNJoy</td>\n                                <td> 3/keer</td>\n                            </tr>\n                            <tr>\n                                <td>Vrijdag</td>\n                                <td>9.00-10.00 u.</td>\n                                <td>XCO Walking &amp; Running</td>\n                                <td> 4/keer</td>\n                            </tr>\n                        </tbody>\n                    </table>'),
	(57,'2015-01-04 15:10:30',19,4,16,'outdoor.jpg'),
	(58,'2015-01-04 15:11:17',20,4,12,'Voeding, stress, medicijnen en overmatige spierbelasting produceren na verbranding zure afvalstoffen. Uw lichaam moet deze kwijt om de zuurgraad van het bloed op een constant niveau te houden. Door ons huidige voedingspatroon met veel dierlijke eiwitten, suikers, vetten, alcohol, koffie en frisdranken en door onze onregelmatige en vaak stressvolle levensstijl, produceert het lichaam veel zure afvalstoffen.'),
	(59,'2015-01-04 15:11:56',20,4,13,'              <p>\n                        Omdat het lichaam deze niet allemaal kan uitscheiden of neutraliseren, worden de zuren in de verschillende delen van het lichaam opgeslagen. \n                        Vooral na het veertigste levensjaar nemen de zure afzettingen in de gewrichten, het bindweefsel, de spieren en de bloedvaten in een snel tempo toe.\n                        Afhankelijk van de plaatsen in het lichaam waar de zuren zich ophopen, kunnen allerlei verzuringsklachten ontstaan, zoals bv overgewicht, \n                        spierpijnen, gewrichtspijnen, moeheid, huidklachten, schimmelinfecties en ontstekingen. \n                        Afhankelijk van de erfelijkheid en de levensstijl kan verzuring op een gegeven moment leiden tot het ontstaan van chronische aandoeningen zoals:\n                        jicht, artritis, osteoporose, hoge bloeddruk, fibromyalgie, diabetes, nierstenen, overgangsklachten etc.\n                    </p>\n                    <p>Tijdens de workshop kijken we verder naar het ontstaan van ontzuring, de gevolgen en wat je zelf kunt doen om te ontzuren.\n                    <br></p><h5>Kosten:  15, inclusief proefverpakking basisch zout (ontzuringsprodukt) en syllabus.</h5><p></p>\n'),
	(61,'2015-01-04 15:12:37',20,4,16,'hart.jpg'),
	(62,'2015-01-04 15:13:18',20,4,14,'Prijs:'),
	(63,'2015-01-04 15:13:36',20,4,15,' 15,-'),
	(64,'2015-01-04 15:14:03',20,4,14,'Duur:'),
	(65,'2015-01-04 15:14:26',20,4,15,'Anderhalf uur'),
	(66,'2015-01-04 15:14:54',21,4,12,'Holistic Pulsing is een massagemethode, die je uitnodigt tot diepe ontspanning en loslaten. De gedachte achter de methode is eenvoudig : je lichaam dat voor een groot deel uit water bestaat, is een grote ritmische beweging. Bloed, adem, energie, het stroomt allemaal door je lichaam heen. Wanneer , om wat voor reden dan ook , de energie in je lichaam niet meer vrijuit kan stromen, valt dit te zien en te ervaren zodra je lichaam zachtjes wordt gewiegd. Het rustige, ritmische schudden dat de pulser op je overdraagt brengt de energie en het water in je lichaam in beweging en voert je naar je gevoelservaringen. De kracht van het pulsen ligt in de zachtheid en vriendelijkheid. Zachtjes, ritmisch schudden heeft bijna altijd een ontspannend effect. Juist vanuit die ontspanning kan in je lichaam een nieuw evenwicht ontstaan.'),
	(67,'2015-01-04 15:15:29',21,4,13,'                    <p>\n                        Als je zelf wilt leren pulsen kun je in een workshop van een halve dag\nkennismaken met een aantal basistechnieken van Holistic Pulsing. Je leert te\npulsen vanuit een open fysieke en mentale houding. Daarnaast wordt aandacht\nbesteed aan het (leren) waarnemen en accepteren van wat er in je leeft, \nzonder dat er iets hoeft te veranderen. \nWe beginnen de workshop met wat lichaamswerk om meer in contact te komen met\nhet eigen lichaam. \nDaarna worden de pulstechnieken op elkaar geoefend. Het is mogelijk om in\neen tweede dagdeel nog wat meer technieken te leren, zodat je voldoende\nkennis hebt om een behandeling aan bekenden te geven. \n<br><br>De workshop is bedoeld voor 2 personen.</p>\n'),
	(68,'2015-01-04 15:16:12',21,4,16,'holistic_pulsing.png'),
	(69,'2015-01-04 15:16:32',21,4,14,'Prijs:'),
	(70,'2015-01-04 15:16:48',21,4,15,' 45,-'),
	(71,'2015-01-04 15:16:57',21,4,14,'Duur:'),
	(72,'2015-01-04 15:17:07',21,4,15,'Dagdeel'),
	(73,'2015-01-04 15:18:02',22,4,12,'In een leven zijn er diverse momenten van drastische veranderingen. Gewild of ongewild maken we die allemaal mee. Bij vrouwen is de menstruatiecyclus en de daarmee samenhangende vruchtbaarheid zo\'n periode van verandering. Over het algemeen wordt de eerste menstruatie makkelijker ontvangen dan het loslaten van dit proces. De overgang kenmerkt zich dan ook vaak als een periode van inzicht, maar ook als een periode van lichamelijke ongemakken.'),
	(74,'2015-01-04 15:18:15',22,4,13,'Tijdens deze workshop \'wandelen\' we in het kort door een vrouwenleven en kijken we naar het fysieke en emotionele proces voorafgaand aan en tijdens de overgang. We gaan dieper in op de hormonale veranderingen in het lichaam en wat voor overgangsverschijnselen daarbij kunnen optreden. De overgangsverschijnselen zijn positief te beïnvloeden met het juiste voedingspatroon. Om er voor te zorgen dat je als vrouw veilig en gezond de menopauze meemaakt, is het nodig daar op tijd aandacht aan te besteden.'),
	(75,'2015-01-04 15:18:40',22,4,16,'Overgang.jpg'),
	(76,'2015-01-04 15:20:51',22,4,14,'Prijs:'),
	(77,'2015-01-04 15:21:11',22,4,15,' 15,- inclusief syllabus'),
	(78,'2015-01-04 15:21:21',22,4,14,'Duur:'),
	(79,'2015-01-04 15:21:31',22,4,15,'Dagdeel'),
	(80,'2015-01-04 15:22:18',23,4,12,'PuurGezond eten staat voor écht eten. Eten zonder pakjes en zakjes, eten dat je gemakkelijk zelf bereidt en dat ook nog eens heel lekker smaakt. Genieten van de smaak van pure, onbewerkte producten. Lekker en gezond eten hoeft niet ingewikkeld te zijn!'),
	(81,'2015-01-04 15:22:43',23,4,13,'Wil je gezonder gaan eten, maar weet je niet zo goed hoe je dit moet aanpakken, dan is deze workshop echt iets voor jou! Aan de hand van de Puur Gezond voedingspiramide gaan we kijken hoe je een gezond en smakelijk voedingspatroon opbouwt.'),
	(82,'2015-01-04 15:22:50',23,4,16,'PuurGezond.jpg'),
	(83,'2015-01-04 15:25:31',23,4,14,'Prijs:\n<br>\ninclusief Puur gezond piramide (met 2 dagmenus)'),
	(84,'2015-01-04 15:25:24',23,4,15,' 10,-'),
	(85,'2015-01-04 15:24:45',23,4,14,'Duur:'),
	(86,'2015-01-04 15:24:54',23,4,15,'Dagdeel'),
	(87,'2015-01-04 15:34:07',27,11,12,'Goede voeding doet veel meer dan het lichaam voorzien van de brandstoffen die het nodig heeft voor de productie van energie en lichaamswarmte. Goede voeding bevat ook alle moleculen die direct of indirect worden gebruikt bij de vele regulatie-, verdedigings-, herstel en andere processen in het mechanisme.'),
	(88,'2015-01-04 15:35:24',27,11,16,'Natuurvoeding foto liggend.png'),
	(89,'2015-01-04 15:39:15',27,11,20,'Eten is een noodzaak,<br>\nmaar verstandig eten een kunst'),
	(90,'2015-01-04 15:41:06',27,11,13,'<p>Als ons lichaam goed functioneert, dan voelen we ons in het algemeen prettig en energiek. \n        We worden niet zo snel ziek, want het organisme kan zich met succes tegen uiteenlopende ziekteverwekkers verdedigen. \n        Ook beschikken we de hele dag door over voldoende energie voor werk en ontspanning. \n        Indien het lichaam toch wordt getroffen door een ziekte of verwonding, zal het zich in principe snel herstellen.</p>\n<p>In deze hectische tijd functioneert het lichaam van veel mensen echter niet optimaal.\n        Een belangrijke oorzaak voor een niet optimale gezondheidstoestand is een voortdurend tekortschietende voeding. \n        Uit onderzoek is naar voren gekomen dat veel voedingsstoffen in deze tijd onvoldoende in de dagelijkse voeding aanwezig zijn. \n        Dat is enerzijds een gevolg van de hedendaagse agrarische en industriële productiemethodes en anderzijds van de in deze tijd juist verhoogde behoefte aan uiteenlopende voedingsstoffen. \n        De enige doelmatige en effectieve methode om zeker te zijn dat men alle voedingsstoffen in voldoende mate naar binnen krijgt, \n        is een optimaal voedingspatroon en het gebruik van natuurlijke en biologisch geproduceerde voedingsmiddelen.</p>\n<h5>Een nieuwe natuurlijke voedingsaanpak brengt u weer in aanraking met de kracht uit de (eigen) natuur !</h5>'),
	(92,'2015-01-04 15:46:20',27,11,17,'Kennismaking'),
	(93,'2015-01-04 15:52:49',27,11,18,'Voor een eerste kennismaking kun je mij altijd bellen of <a href=\"#\" onclick=\"$(\'#form\').slideToggle()\">mailen</a>. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek.'),
	(94,'2015-01-04 15:46:35',27,11,19,NULL),
	(95,'2015-01-04 15:46:52',27,11,17,'Intakegesprek'),
	(96,'2015-01-04 15:47:06',27,11,18,'Tijdens de intake bespreken we aan de hand van de ingevulde vragenlijst je doelen, huidige voedingspatroon, bewegingspatroon en eventuele lichamelijke klachten. Afhankelijk van je doel, zal ik je meten en wegen. Aan het eind van het gesprek bespreken we de mogelijkheden voor een vervolgtraject op basis van je wensen. Via de mail ontvang je tevens een schriftelijk advies, afgestemd op je leefpatroon en doelen.'),
	(97,'2015-01-04 15:47:18',27,11,19,'Duur: Ca 60 min | Prijs:  60'),
	(98,'2015-01-04 15:57:52',27,11,17,'Vervolgconsulten'),
	(99,'2015-01-04 15:58:06',27,11,18,'Tijdens het vervolggesprek kijken we of je de gegeven adviezen hebt kunnen toepassen in je dagelijkse leven en waar nog eventuele knelpunten zijn. Is je doel afslanken dan meet en weeg ik je nogmaals en bekijken we aan de hand van ontwikkelingen in spiermassa of je op een gezonde wijze aan het afslanken bent. Afhankelijk van je wensen, krijg je aanvullend advies en informatie.'),
	(100,'2015-01-04 15:58:27',27,11,19,'Duur: Ca 60 min | Prijs:  60'),
	(101,'2015-01-04 15:58:41',27,11,17,'Pakket : Intakegesprek + 5 vervolgafspraken'),
	(102,'2015-01-04 15:58:53',27,11,18,'Als je graag wat intensievere begeleiding wil en een stok achter de deur is dit pakket een goede optie. Na het intakegesprek zien we elkaar dan in een voor jou prettige frequentie, waarbij je iedere keer wordt gemeten en gewogen om de voortgang inzichtelijk te maken.'),
	(103,'2015-01-04 15:59:00',27,11,19,'Duur: Intakegesprek - Ca 60 min, vervolgafspraken - Ca 30 min | Pakketprijs:  150\n'),
	(104,'2015-01-06 21:01:49',27,11,21,'    <p>\n        Via <a href=\"http://www.allesvanvitals.nl/\">www.allesvanvitals.nl</a> kunt u met de kortingscode demeter voedingssupplementen bestellen. <br>Voordelen voor cliënten van Demeter Voeding &amp; Welzijn :\n    </p><ul><li>5 % korting bij bestelling van 2 artikelen</li>\n        <li>10 % korting bij bestelling van 3 artikelen</li>\n        <li>2 % extra korting bij bestelling met de kortingscode</li>\n        <li>Geen verzendkosten</li></ul>'),
	(105,'2015-01-04 16:36:09',26,8,22,'Raadpleeg bij gezondheidsklachten altijd eerst een reguliere arts.'),
	(106,'2015-01-04 16:36:35',26,8,22,'Massage bij ziekten is mogelijk, maar dan alleen met toestemming van de behandelend arts.'),
	(107,'2015-01-04 16:36:49',26,8,22,'Medicijngebruik gaarne vooraf melden.'),
	(108,'2015-01-04 16:37:02',26,8,22,'Persoonlijke en medische gegevens worden nooit aan derden verstrekt en/of openbaar gemaakt.'),
	(109,'2015-01-04 16:37:20',26,8,22,'Contante betaling na consult/behandeling of via overschrijving binnen 7 dagen.'),
	(110,'2015-01-04 16:37:31',26,8,22,'Een afspraak afzeggen kan tot 24 uur van tevoren kosteloos.?Wanneer u binnen 24 uur afzegt, wordt de besproken tijd in rekening gebracht.'),
	(111,'2015-01-04 16:37:37',26,8,22,'Cadeaubonnen zijn niet in te wisselen voor contant geld.'),
	(112,'2015-01-04 16:37:51',26,8,22,'Demeter Voeding & Welzijn is niet verantwoordelijk voor beschadiging, verlies of diefstal van persoonlijke bezittingen.'),
	(113,'2015-01-04 16:37:59',26,8,22,'Demeter Voeding & Welzijn is niet verantwoordelijk voor letstel aan het lichaam ontstaan tijdens outdoor trainingen en/of behandelingen.'),
	(114,'2015-01-04 17:21:33',6,9,23,'Intakegesprek'),
	(115,'2015-01-04 17:22:06',6,9,24,'ca 60 minuten'),
	(116,'2015-01-04 17:22:23',6,9,25,' 60,-'),
	(117,'2015-01-04 17:22:49',6,9,26,'Tijdens de intake bespreken we aan de hand van de ingevulde vragenlijst je doelen, huidige voedingspatroon, bewegingspatroon en eventuele lichamelijke klachten. Afhankelijk van je doel, zal ik je meten en wegen. Aan het eind van het gesprek bespreken we de mogelijkheden voor een vervolgtraject op basis van je wensen. Via de mail ontvang je tevens een schriftelijk advies, afgestemd op je leefpatroon en doelen.'),
	(118,'2015-01-04 17:23:04',6,9,23,'Vervolgconsulten'),
	(119,'2015-01-04 17:23:16',6,9,24,'ca 30 minuten'),
	(120,'2015-01-04 17:23:31',6,9,25,' 30,-'),
	(121,'2015-01-04 17:23:46',6,9,26,'Tijdens het vervolggesprek kijken we of je de gegeven adviezen hebt kunnen toepassen in je dagelijkse leven en waar nog eventuele knelpunten zijn. Is je doel afslanken dan meet en weeg ik je nogmaals en bekijken we aan de hand van ontwikkelingen in spiermassa of je op een gezonde wijze aan het afslanken bent. Afhankelijk van je wensen, krijg je aanvullend advies en informatie.'),
	(122,'2015-01-04 17:24:00',6,9,23,'Pakket : Intakegesprek + 5 vervolgafspraken'),
	(123,'2015-01-04 17:24:15',6,9,24,'intakegesprek ca. 60 minuten, de vervolgafspraken ca. 30 minuten'),
	(124,'2015-01-04 17:24:31',6,9,25,'Pakketprijs:  150,-'),
	(125,'2015-01-04 17:24:45',6,9,26,'Als je graag wat intensievere begeleiding wil en een stok achter de deur is dit pakket een goede optie. Na het intakegesprek zien we elkaar dan in een voor jou prettige frequentie, waarbij je iedere keer wordt gemeten en gewogen om de voortgang inzichtelijk te maken.'),
	(126,'2015-01-04 17:25:15',6,9,27,'Holistic Pulsing'),
	(127,'2015-01-04 17:25:44',6,9,28,' 60,-'),
	(128,'2015-01-04 17:25:59',6,9,29,'ca 1 ½ uur'),
	(129,'2015-01-04 17:26:57',6,9,27,'Gezichtsmassage met handreflex en hotstones'),
	(130,'2015-01-04 17:27:24',6,9,28,' 35,-'),
	(131,'2015-01-04 17:27:34',6,9,27,'Oorkaarstherapie met oorreflex'),
	(132,'2015-01-04 17:27:48',6,9,28,' 30,-'),
	(133,'2015-01-04 17:37:51',6,9,29,'ca 50 min'),
	(134,'2015-01-04 17:28:14',6,9,27,'Workshop Introductie Holistic Pulsing 1 en 2'),
	(135,'2015-01-04 17:28:32',6,9,28,' 45,-'),
	(136,'2015-01-04 17:28:42',6,9,29,'dagdeel'),
	(137,'2015-01-04 17:28:53',6,9,27,'Workshop Gezonder door ontzuren'),
	(138,'2015-01-04 17:29:14',6,9,28,' 20,-'),
	(139,'2015-01-04 17:29:27',6,9,29,'ca 1 ½ uur'),
	(142,'2015-01-04 17:37:57',6,9,29,'ca 40 min'),
	(143,'2015-01-04 17:43:59',28,12,12,'Verschillende aspecten spelen een rol bij het neerzetten van goede prestaties. \n            <br />Naast inzet, training en talent speelt voeding een cruciale rol. \n            Als u uw lichaam niet voorziet van de juiste brandstof, \n            dan kan dit lichaam niet optimaal presteren en zullen de gewenste resultaten uitblijven.                           \n            <br /><br />Een auto rijdt ten slotte ook niet zonder benzine!'),
	(144,'2015-01-04 17:44:15',28,12,13,'(Top)sport vereist  specifieke voeding en niet altijd zijn de juiste voedingsstoffen uit de normale voeding te halen. \n        Daarom kan ik samen met u kijken wat uw wensen zijn, welke prestaties u wilt bereiken en welke voedingsstoffen u wel \n        en welke juist niet binnen moet krijgen. Op deze manier kunnen wij een programma samenstellen dat speciaal voor u op maat \n        is gemaakt, zodat u met de perfecte voeding en de juiste training het maximale uit uw lichaam kunt halen.'),
	(145,'2015-01-04 17:48:15',28,12,31,'H3O Pro'),
	(146,'2015-01-04 17:48:38',28,12,32,'Behoud van Hydratatie'),
	(147,'2015-01-04 17:49:01',28,12,33,'H3OPro.png'),
	(148,'2015-01-04 17:49:15',28,12,34,'http://www.coach4everybody.nl/producten/h3o-pro'),
	(149,'2015-01-04 17:49:40',28,12,31,'24 Formula 1 sport'),
	(150,'2015-01-04 17:50:02',28,12,32,'Een evenwichtige maaltijd voor sporters'),
	(151,'2015-01-04 17:50:16',28,12,33,'Herbalife24-Formula-1-Sport.jpg'),
	(152,'2015-01-04 17:50:29',28,12,34,'http://www.coach4everybody.nl/producten/herbalife24-formula-1-sport'),
	(153,'2015-01-04 17:50:45',28,12,31,'24 Prolong'),
	(154,'2015-01-04 17:51:02',28,12,32,'Drankmix met koolhydraat en eiwit'),
	(155,'2015-01-04 17:51:19',28,12,33,'Herbalife24-Prolong.png'),
	(156,'2015-01-04 17:51:34',28,12,34,'http://www.coach4everybody.nl/producten/herbalife24-prolong'),
	(157,'2015-01-04 17:51:59',28,12,31,'24 Rebuild strength'),
	(158,'2015-01-04 17:52:16',28,12,32,'Proteïnerijke hersteldrank'),
	(159,'2015-01-04 17:52:30',28,12,33,'Herbalife24-Rebuild Strength.png'),
	(160,'2015-01-04 17:52:53',28,12,34,'http://www.coach4everybody.nl/producten/herbalife24-rebuild-strength'),
	(161,'2015-01-04 17:53:10',28,12,31,'24 Rebuild endurance'),
	(162,'2015-01-04 17:53:23',28,12,32,'Hersteldrank met koolhydraten en proteïnen'),
	(163,'2015-01-04 17:53:35',28,12,33,'Herbalife24-Rebuild Endurance.png'),
	(164,'2015-01-04 17:53:49',28,12,34,'http://www.coach4everybody.nl/producten/herbalife24-rebuild-endurance'),
	(165,'2015-01-04 17:54:04',28,12,31,'24 Hydrate'),
	(166,'2015-01-04 17:54:22',28,12,32,'Hersteldrank met koolhydraten en proteïnen'),
	(167,'2015-01-04 17:55:18',28,12,33,'Herbalife24-Hydrate.png'),
	(168,'2015-01-04 17:55:32',28,12,34,'http://www.coach4everybody.nl/producten/herbalife24-hydrate'),
	(169,'2015-01-04 17:55:43',28,12,31,'Liftoff'),
	(170,'2015-01-04 17:55:57',28,12,32,'Bruisende sportdrank met sinaasappel- of limoensmaak'),
	(171,'2015-01-04 17:56:15',28,12,33,'Liftoff-Sinaasappel.png'),
	(172,'2015-01-04 17:56:22',28,12,34,'http://www.coach4everybody.nl/producten/liftoff-sinaasappel'),
	(173,'2015-01-04 17:56:34',28,12,31,'NRG'),
	(174,'2015-01-04 17:56:49',28,12,32,'Op guarana gebaseerd'),
	(175,'2015-01-04 17:57:03',28,12,33,'NRG-tabletten0.jpg'),
	(176,'2015-01-04 17:57:16',28,12,34,'http://www.coach4everybody.nl/producten/nrgtabletten'),
	(177,'2015-01-04 21:32:03',5,3,35,'slide1.png'),
	(178,'2015-01-04 21:32:16',5,3,36,'natuurvoeding'),
	(179,'2015-01-04 21:32:31',5,3,37,'Passie voor Puur'),
	(180,'2015-01-04 21:32:43',5,3,35,'slide2.png'),
	(181,'2015-01-04 21:33:21',5,3,36,'holistic-pulsing'),
	(182,'2015-01-04 21:33:16',5,3,37,'Loslaten'),
	(183,'2015-01-04 21:33:36',5,3,35,'slide3.png'),
	(184,'2015-01-04 21:33:54',5,3,36,'outdoor-training'),
	(185,'2015-01-04 21:34:05',5,3,37,'Kom in Beweging'),
	(186,'2015-01-04 22:27:43',13,4,35,'verzuren.png'),
	(187,'2015-01-04 22:28:10',13,4,37,'Lazy Owl Image'),
	(189,'2015-01-04 22:28:24',13,4,35,'verzuren.png'),
	(190,'2015-01-04 22:28:49',13,4,37,'Lazy Owl Image'),
	(335,'2015-05-31 18:20:52',104,12,12,'<p>asfsad</p>\r\n'),
	(336,'2015-05-31 18:20:52',104,12,13,'<p>ddwfaegsrbvsadnfmh</p>\r\n'),
	(337,'2015-05-31 18:20:52',104,12,31,'a'),
	(338,'2015-05-31 18:20:52',104,12,32,'a'),
	(339,'2015-05-31 18:20:52',104,12,33,'a.jpg'),
	(340,'2015-05-31 18:20:53',104,12,34,'www.google.com'),
	(341,'2015-05-31 18:57:08',106,12,31,'a'),
	(342,'2015-05-31 18:57:08',106,12,32,'a'),
	(343,'2015-05-31 18:57:08',106,12,33,'a.jpg'),
	(344,'2015-05-31 18:57:08',106,12,34,'www.google.com');

/*!40000 ALTER TABLE `pages_templates_fields` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table templates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `templates`;

CREATE TABLE `templates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `filename` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `css` int(11) unsigned DEFAULT NULL,
  `formrules` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `css` (`css`),
  CONSTRAINT `templates_ibfk_1` FOREIGN KEY (`css`) REFERENCES `css` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `templates` WRITE;
/*!40000 ALTER TABLE `templates` DISABLE KEYS */;

INSERT INTO `templates` (`id`, `updatetime`, `title`, `filename`, `css`, `formrules`)
VALUES
	(3,'2015-01-04 21:01:34','Homepage sjabloon','content/homepage.php',NULL,'pageurl;pageurl;required\ntype;Type;required\nemail;Email;required'),
	(4,'2015-01-04 20:23:58','Activiteit sjabloon','content/workshop.php',3,'pageurl;pageurl;required\nname;Naam;required\nemail;Email;required|valid_email\nsubject;Onderwerp;required\nmessage;Bericht;required|min_length[2]'),
	(5,'2014-12-28 00:08:48','Bedrijf sjabloon','content/bedrijf.php',NULL,NULL),
	(6,'2014-12-28 00:13:00','Voorstel sjabloon','content/voorstellen.php',NULL,NULL),
	(8,'2015-01-04 14:15:55','Algemene voorwaarden','content/voorwaarden.php',NULL,NULL),
	(9,'2015-01-04 14:24:17','Tarieven sjabloon','content/tarieven.php',NULL,NULL),
	(10,'2015-01-04 20:59:55','Contact sjabloon','content/contact.php',NULL,'pageurl;pageurl;required\nname;Naam;required\nemail;Email;required|valid_email\nmessage;Bericht;required'),
	(11,'2015-01-04 14:24:06','Natuurvoeding sjabloon','content/natuurvoeding.php',NULL,NULL),
	(12,'2015-01-04 14:24:43','Sportvoeding sjabloon','content/sportvoeding.php',NULL,NULL);

/*!40000 ALTER TABLE `templates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table templates_fields
# ------------------------------------------------------------

DROP TABLE IF EXISTS `templates_fields`;

CREATE TABLE `templates_fields` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `template` int(11) unsigned NOT NULL,
  `field` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `field` (`field`),
  KEY `template` (`template`),
  CONSTRAINT `templates_fields_ibfk_2` FOREIGN KEY (`template`) REFERENCES `templates` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `templates_fields_ibfk_3` FOREIGN KEY (`field`) REFERENCES `fields` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `templates_fields` WRITE;
/*!40000 ALTER TABLE `templates_fields` DISABLE KEYS */;

INSERT INTO `templates_fields` (`id`, `updatedate`, `template`, `field`)
VALUES
	(10,'2014-12-27 21:29:57',3,5),
	(11,'2014-12-27 21:30:21',3,6),
	(12,'2014-12-27 21:30:27',3,7),
	(13,'2014-12-27 21:30:34',3,8),
	(14,'2014-12-28 00:16:56',5,9),
	(15,'2014-12-28 00:25:14',6,10),
	(16,'2014-12-28 00:30:58',6,11),
	(18,'2015-01-04 13:55:09',4,12),
	(19,'2015-01-04 14:44:35',4,16),
	(20,'2015-01-04 14:44:57',4,13),
	(21,'2015-01-04 14:45:01',4,14),
	(22,'2015-01-04 14:45:06',4,15),
	(23,'2015-01-04 15:29:30',11,12),
	(24,'2015-01-04 15:29:39',11,13),
	(25,'2015-01-04 15:31:09',11,17),
	(26,'2015-01-04 15:31:16',11,18),
	(27,'2015-01-04 15:31:20',11,19),
	(30,'2015-01-04 15:32:16',11,16),
	(31,'2015-01-04 16:00:16',11,21),
	(32,'2015-01-04 16:00:24',4,21),
	(33,'2015-01-04 16:35:14',8,22),
	(34,'2015-01-04 17:19:43',9,23),
	(35,'2015-01-04 17:19:46',9,24),
	(36,'2015-01-04 17:19:53',9,25),
	(37,'2015-01-04 17:19:56',9,26),
	(38,'2015-01-04 17:20:00',9,27),
	(39,'2015-01-04 17:20:04',9,28),
	(40,'2015-01-04 17:20:08',9,29),
	(42,'2015-01-04 17:41:35',12,12),
	(43,'2015-01-04 17:41:39',12,13),
	(44,'2015-01-04 17:47:16',12,31),
	(45,'2015-01-04 17:47:21',12,32),
	(46,'2015-01-04 17:47:28',12,33),
	(47,'2015-01-04 17:47:32',12,34),
	(48,'2015-01-04 21:31:16',3,35),
	(49,'2015-01-04 21:31:20',3,36),
	(50,'2015-01-04 21:31:24',3,37),
	(52,'2015-01-04 22:25:50',4,35),
	(53,'2015-01-04 22:26:09',4,37);

/*!40000 ALTER TABLE `templates_fields` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table templates_js
# ------------------------------------------------------------

DROP TABLE IF EXISTS `templates_js`;

CREATE TABLE `templates_js` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `template` int(10) unsigned NOT NULL,
  `js` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `template` (`template`),
  KEY `js` (`js`),
  CONSTRAINT `templates_js_ibfk_1` FOREIGN KEY (`template`) REFERENCES `templates` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `templates_js_ibfk_2` FOREIGN KEY (`js`) REFERENCES `js` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `templates_js` WRITE;
/*!40000 ALTER TABLE `templates_js` DISABLE KEYS */;

INSERT INTO `templates_js` (`id`, `updatedate`, `template`, `js`)
VALUES
	(4,'2014-12-28 00:03:06',3,3),
	(5,'2014-12-28 01:36:02',4,4),
	(6,'2015-01-04 22:22:17',4,8),
	(7,'2014-12-28 12:50:08',4,6),
	(8,'2015-01-04 15:28:54',11,6),
	(9,'2015-01-04 16:49:37',9,7),
	(10,'2015-01-04 18:35:58',10,6),
	(11,'2015-01-04 21:17:40',3,8),
	(12,'2015-01-04 21:20:43',3,9),
	(14,'2015-01-04 22:22:22',4,5);

/*!40000 ALTER TABLE `templates_js` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `email` char(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `password` varchar(100) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `email`, `password`)
VALUES
	(1,'Teije','info@tvsloten.com','test'),
	(2,'Karin','karin@demetervoeding.nl','Demetervoeding01'),
	(3,'Michel','michel.dolstra@gmail.com','broodjeAAP');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table website
# ------------------------------------------------------------

DROP TABLE IF EXISTS `website`;

CREATE TABLE `website` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `updatedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `websitename` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `defaulttitle` text COLLATE utf8_unicode_ci,
  `defaultmetakeywords` text COLLATE utf8_unicode_ci,
  `defaultmetadescription` text COLLATE utf8_unicode_ci,
  `defaultcss` int(11) unsigned DEFAULT NULL,
  `websiteurl` text COLLATE utf8_unicode_ci,
  `favicon` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postalcode` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `secondphone` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contactemail` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebookurl` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kvk` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `btw` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `defaultcss` (`defaultcss`),
  CONSTRAINT `website_ibfk_1` FOREIGN KEY (`defaultcss`) REFERENCES `css` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `website` WRITE;
/*!40000 ALTER TABLE `website` DISABLE KEYS */;

INSERT INTO `website` (`id`, `updatedate`, `websitename`, `defaulttitle`, `defaultmetakeywords`, `defaultmetadescription`, `defaultcss`, `websiteurl`, `favicon`, `postalcode`, `address`, `phone`, `secondphone`, `contactemail`, `facebookurl`, `kvk`, `btw`)
VALUES
	(1,'2015-01-04 18:53:29','Demeter voeding en welzijn','Demeter Voeding en Welzijn|','demeter, demeter voeding en welzijn, voeding, gezond, lifestyle','Demeter voeding en welzijn is gespecialiseerd in het geven van tips over goede voeding en trainingen. Kom een langs voor een gesprek!',1,'http://www.demetervoeding.nl','favicon.ico','1444 VX Purmerend','Kievithof 2','06-25543640','0299-435748','info@demetervoeding.nl','https://nl-nl.facebook.com/pages/Demeter-Voeding-Welzijn/564168070261116','55141889','NL191428838B01');

/*!40000 ALTER TABLE `website` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table zforms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `zforms`;

CREATE TABLE `zforms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type` text COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `subject` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Geen pagina opgegeven',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `zforms` WRITE;
/*!40000 ALTER TABLE `zforms` DISABLE KEYS */;

INSERT INTO `zforms` (`id`, `type`, `date`, `email`, `name`, `message`, `subject`, `page`)
VALUES
	(28,'Bericht','2014-10-05 19:21:46','teije.van.sloten@willig.nl','Teije van Sloten','Dit is een test om het automatisch te mailen van een formulier te testen','Afspraak','Geen pagina opgegeven'),
	(29,'Bericht','2014-10-05 19:22:51','teije.van.sloten@hva.nl','Teije van Sloten','Hoi Karin,\r\n\r\nAls het goed is moet je nu een bericht ontvangen van mijn ingevulde formulier.\r\nDeze je vanaf nu dus voor elk formulier moeten ontvangen.\r\n\r\nMet vriendelijke groet,\r\n\r\nTeije van Sloten','Afspraak','Geen pagina opgegeven'),
	(30,'Bericht','2014-10-12 13:07:16','info@tvsloten.com','Teije van Sloten','Dit is een test om te kijken of het formulier correct wordt verstuurd.\r\n\r\nZodra er geen pagina wordt opgegeven zal dat aangegeven worden met \"Geen pagina opgegeven\".','Afspraak','Holistic pulsing'),
	(31,'Bericht','2014-10-12 13:10:23','info@tvsloten.com','Michel Dolstra','Dit is een 2de test om te kijken of er bij het verstuurde mailtje ook de pagina wordt mee verstuurd.','Afspraak','Holistic pulsing'),
	(32,'Bericht','2014-10-13 07:14:02','demetervoeding@kpnmail.nl','karin','test','Afspraak','Holistic pulsing');

/*!40000 ALTER TABLE `zforms` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
