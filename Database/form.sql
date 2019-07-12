/*
SQLyog Community Edition- MySQL GUI v6.56
MySQL - 5.5.20 : Database - form
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`form` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

LOCK TABLES `admin` WRITE;

insert  into `admin`(`id`,`username`,`email`,`password`,`address`,`dob`,`city`,`gender`,`image`,`status`) values (1,'Bhagirathi','asif@gmail.com','12345','new friends colony nurani nagar','1996-05-13','indore','male','',1),(2,'Shahid','shahid@gmail','1478','chandan nagar','1993-12-11','Ujjain','male','',1),(3,'dfsd','Admin@g','1234','sdafasda','1999-12-12','asdas','female','',0);

UNLOCK TABLES;

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `country_id` int(255) DEFAULT NULL,
  `state_id` int(255) DEFAULT NULL,
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1',
  UNIQUE KEY `city_id` (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `city` */

LOCK TABLES `city` WRITE;

insert  into `city`(`country_id`,`state_id`,`city_id`,`city_name`,`status`) values (2,1,1,'Indore',1),(7,2,2,'Buffalo',1),(2,5,4,'mumbai',1);

UNLOCK TABLES;

/*Table structure for table `country` */

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `country_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  UNIQUE KEY `country_id` (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `country` */

LOCK TABLES `country` WRITE;

insert  into `country`(`country_id`,`country_name`,`status`) values (1,'Srilanka',1),(2,'India',1),(3,'Pakistan',1),(4,'China',1),(5,'Japan',1),(6,'London',1),(7,'America',1),(9,'Austalia',1),(10,'russia',1);

UNLOCK TABLES;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

LOCK TABLES `login` WRITE;

insert  into `login`(`id`,`username`,`password`) values (1,'admin','admin');

UNLOCK TABLES;

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `country_id` int(255) DEFAULT NULL,
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  UNIQUE KEY `state_id` (`state_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `state` */

LOCK TABLES `state` WRITE;

insert  into `state`(`country_id`,`state_id`,`state_name`,`status`) values (2,1,'M.P',1),(7,2,'Newyork',1),(9,3,'new south wales',1),(2,5,'mahrastra',1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
