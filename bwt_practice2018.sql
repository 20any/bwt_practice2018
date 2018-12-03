/*
SQLyog Enterprise - MySQL GUI v7.13 
MySQL - 5.5.5-10.1.16-MariaDB : Database - bwt_practice2018
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`bwt_practice2018` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bwt_practice2018`;

/*Table structure for table `worker` */

DROP TABLE IF EXISTS `worker`;

CREATE TABLE `worker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `age` int(11) NOT NULL,
  `salary` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

/*Data for the table `worker` */

insert  into `worker`(`id`,`name`,`age`,`salary`) values (36,'John',23,10000),(37,'gf',40,500),(38,'gfddds',19,567);
insert  into `worker`(`id`,`name`,`age`,`salary`) values (36,'Karl',25,10000),(37,'fgff',40,500),(38,'sdsfd',19,567);
insert  into `worker`(`id`,`name`,`age`,`salary`) values (36,'Bill',23,10000),(37,'fgfg',40,500),(38,'kfgkfnkfg',19,567);
insert  into `worker`(`id`,`name`,`age`,`salary`) values (36,'Jane',30,10000),(37,'gfgf',40,500),(38,'fgfggf',19,567);
insert  into `worker`(`id`,`name`,`age`,`salary`) values (36,'Mike',26,10000),(37,'fdgf',40,500),(38,'ggfgfh',19,567);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
