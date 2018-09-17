/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.34-MariaDB : Database - db_mhs_do
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mhs_do` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_mhs_do`;

/*Table structure for table `tbl_matkul` */

DROP TABLE IF EXISTS `tbl_matkul`;

CREATE TABLE `tbl_matkul` (
  `kd_matkul` varchar(10) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`kd_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_matkul` */

/*Table structure for table `tbl_mhs` */

DROP TABLE IF EXISTS `tbl_mhs`;

CREATE TABLE `tbl_mhs` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(70) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `alamat` text,
  `univ_id` int(3) DEFAULT NULL,
  `prod_id` int(3) DEFAULT NULL,
  `id_user` int(3) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_mhs` */

/*Table structure for table `tbl_prod` */

DROP TABLE IF EXISTS `tbl_prod`;

CREATE TABLE `tbl_prod` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_prod` */

/*Table structure for table `tbl_setting` */

DROP TABLE IF EXISTS `tbl_setting`;

CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(90) DEFAULT NULL,
  `motto` varchar(150) DEFAULT NULL,
  `alamat` text,
  `website` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `copyright` varchar(50) DEFAULT NULL,
  `ico` text,
  `logo` text,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_setting` */

insert  into `tbl_setting`(`id`,`nama`,`motto`,`alamat`,`website`,`email`,`copyright`,`ico`,`logo`,`reg_date`,`upd_date`) values (1,'adrian','belajar tidak mengenal umur','jakarta pusat','readrian.com','adrian@gmail.com','gombezindo','logo.png','logo.png','2018-09-16 17:51:58',NULL);

/*Table structure for table `tbl_tugas` */

DROP TABLE IF EXISTS `tbl_tugas`;

CREATE TABLE `tbl_tugas` (
  `task_code` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `univ_id` int(3) DEFAULT NULL,
  `prod_id` int(3) DEFAULT NULL,
  `start_period` datetime DEFAULT NULL,
  `end_period` datetime DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`task_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_tugas` */

/*Table structure for table `tbl_tugas_det` */

DROP TABLE IF EXISTS `tbl_tugas_det`;

CREATE TABLE `tbl_tugas_det` (
  `id_tgs` int(11) NOT NULL AUTO_INCREMENT,
  `task_code` varchar(20) DEFAULT NULL,
  `nim` varchar(50) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `file` text,
  `noted` text,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_tgs`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_tugas_det` */

/*Table structure for table `tbl_univ` */

DROP TABLE IF EXISTS `tbl_univ`;

CREATE TABLE `tbl_univ` (
  `univ_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  PRIMARY KEY (`univ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_univ` */

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `upd_date` datetime DEFAULT NULL,
  `admin` int(3) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id_user`,`nim`,`username`,`password`,`reg_date`,`upd_date`,`admin`) values (1,'1122334455','admin','0192023a7bbd73250516f069df18b500','2018-09-16 18:05:16',NULL,212);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
