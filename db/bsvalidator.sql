/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.25 : Database - bsvalidator
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bsvalidator` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bsvalidator`;

/*Table structure for table `test` */

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(250) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `zip` varchar(250) DEFAULT NULL,
  `country` varchar(250) DEFAULT NULL,
  `sex` varchar(250) DEFAULT NULL,
  `date_of_birth` varchar(250) DEFAULT NULL,
  `Address` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `test` */

insert  into `test`(`id`,`first_name`,`last_name`,`email`,`phone`,`password`,`zip`,`country`,`sex`,`date_of_birth`,`Address`) values (1,'abdul ','mozid','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','BD','1','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(2,'abdul ','mozid','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','BD','1','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(3,'abdul ','mozid','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','BD','1','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(4,'towhidul','islam','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','BD','1','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(5,'taijul islam','jony','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(6,'Sarmin ','Sultana','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(7,'Firoz ','kobir','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(8,'Bulbul ','Islam','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(9,'Israt Jahan','Tania','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(10,'Hafiza ','Rima','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(11,'Chaitali ','Rahman','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(12,'Chaitali ','Rahman','ma.mozid26@gmai.com','01761835001','abc123','dfsdf','DZ','0','2016-09-30','West Rajabazar, Dhanmondi, Dhaka'),(13,'Firoz ','Kobir','firoz@gmail.com','01761835001','abc123','fkdjfk','CX','0','2017-02-17','CX'),(14,'abdul ','jony','ma.mozid26@gmail.com','01761835001','abc123','6300','FJ','0','2017-02-23','Framgate, Dhaka'),(15,'Jony ','Ahmed','Ma.mozid26@gmail.com','01724113318','10111994','6300','MO','0','2017-02-17',''),(29,'fsdf','fsdfsdf','sdfsdffj@Wfjkdjs','01761835001','','','BD','','',''),(30,'abdul ','mozid','ma.mozid@gmail.com','01761835001','abc123','fddsfsdf','AG','1','2016-10-14','Baliadanga Chaiai nawabganj.'),(31,'Neezam ','Ahmed','neezam@gmail.com','01761835001','abc123','6300','BD','1','2016-10-12','Uttora, Dhaka'),(32,'Tusha ','Rahman','tusha@gmail.com','01724113318','abc123','6300','AZ','F','2016-10-14','Hello every body......'),(33,'taijul islam','mozid','dfdsfsd@kfjdk.com','01724113318','abc123','6300','AU','M','2016-10-22','fsdfsdfsdfsdf'),(34,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(35,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(36,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(37,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(38,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(39,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(40,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','abc123','6300','AW','M','2016-10-20','uikuiruweiru'),(41,'ABDUL MZOID','FJKDFJKJF','fkdj@kfjd.com','01724113318','abc123','6300','AZ','M','2016-10-04','sdsdsadd'),(42,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01761835001','10111994','6300','BD','M','2016-10-11','hujhjhj'),(43,'ABDUL MZOID','FJKDFJKJF','ma.mozid26@gmail.com','01724113318','abc123','fddsfsdf','BD','M','2016-11-10','fdfsfsdf'),(44,'taijul islam','fdf','ma.mozid26@gmail.com','01761835001','abc123','6300','AQ','M','2016-11-10','fdsf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
