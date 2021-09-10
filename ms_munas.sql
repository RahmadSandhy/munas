/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.17-MariaDB : Database - ms_munas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ms_munas` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ms_munas`;

/*Table structure for table `ms_provinsi` */

DROP TABLE IF EXISTS `ms_provinsi`;

CREATE TABLE `ms_provinsi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nama_singkat` varchar(100) NOT NULL,
  `ibu_kota_propinsi` varchar(100) NOT NULL,
  `id_prop` varchar(11) DEFAULT NULL COMMENT 'Untuk relasi ke ms_pii_wilayah',
  `is_active` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

/*Data for the table `ms_provinsi` */

insert  into `ms_provinsi`(`id`,`nama`,`nama_singkat`,`ibu_kota_propinsi`,`id_prop`,`is_active`,`created_by`,`updated_by`,`deleted_by`,`created_at`,`updated_at`,`deleted_at`) values 
(11,'ACEH','Aceh','Banda Aceh','01',1,0,NULL,NULL,NULL,NULL,NULL),
(12,'SUMATERA UTARA','Sumut','Medan','02',1,0,NULL,NULL,NULL,NULL,NULL),
(13,'SUMATERA BARAT','Sumbar','Padang','03',1,0,NULL,NULL,NULL,NULL,NULL),
(14,'RIAU','Riau','Pekanbaru','04',1,0,NULL,NULL,NULL,NULL,NULL),
(15,'JAMBI','Jambi','Jambi','05',1,0,NULL,NULL,NULL,NULL,NULL),
(16,'SUMATERA SELATAN','Sumsel','Palembang','06',1,0,NULL,NULL,NULL,NULL,NULL),
(17,'BENGKULU','Bengkulu','Bengkulu','07',1,0,NULL,NULL,NULL,NULL,NULL),
(18,'LAMPUNG','Lampung','Bandar Lampung','08',1,0,NULL,NULL,NULL,NULL,NULL),
(19,'KEP. BANGKA BELITUNG','Babel','Pangkal Pinang','30',1,0,NULL,NULL,NULL,NULL,NULL),
(21,'KEPULAUAN RIAU','Kepri','Tanjung Pinang','31',1,0,NULL,NULL,NULL,NULL,NULL),
(31,'DKI JAKARTA','DKI','Jakarta','09',1,0,NULL,NULL,NULL,NULL,NULL),
(32,'JAWA BARAT','Jabar','Bandung','10',1,0,NULL,NULL,NULL,NULL,NULL),
(33,'JAWA TENGAH','Jateng','Semarang','11',1,0,NULL,NULL,NULL,NULL,NULL),
(34,'DI YOGYAKARTA','DIY','Yogyakarta','12',1,0,NULL,NULL,NULL,NULL,NULL),
(35,'JAWA TIMUR','Jatim','Surabaya','13',1,0,NULL,NULL,NULL,NULL,NULL),
(36,'BANTEN','Banten','Serang','28',1,0,NULL,NULL,NULL,NULL,NULL),
(51,'BALI','Bali','Denpasar','22',1,0,NULL,NULL,NULL,NULL,NULL),
(52,'NUSA TENGGARA BARAT','NTB','Mataram','23',1,0,NULL,NULL,NULL,NULL,NULL),
(53,'NUSA TENGGARA TIMUR','NTT','Kupang','24',1,0,NULL,NULL,NULL,NULL,NULL),
(61,'KALIMANTAN BARAT','Kalbar','Pontianak','14',1,0,NULL,NULL,NULL,NULL,NULL),
(62,'KALIMANTAN TENGAH','Kalteng','Palangkaraya','15',1,0,NULL,NULL,NULL,NULL,NULL),
(63,'KALIMANTAN SELATAN','Kalsel','Banjarmasin','16',1,0,NULL,NULL,NULL,NULL,NULL),
(64,'KALIMANTAN TIMUR','Kaltim','Samarinda','17',1,0,NULL,NULL,NULL,NULL,NULL),
(65,'KALIMANTAN UTARA','Kaltara','Tanjung Selor','34',1,0,NULL,NULL,NULL,NULL,NULL),
(71,'SULAWESI UTARA','Sulut','Manado','18',1,0,NULL,NULL,NULL,NULL,NULL),
(72,'SULAWESI TENGAH','Sulteng','Palu','19',1,0,NULL,NULL,NULL,NULL,NULL),
(73,'SULAWESI SELATAN','Sulsel','Makassar','20',1,0,NULL,NULL,NULL,NULL,NULL),
(74,'SULAWESI TENGGARA','Sultra','Kendari','21',1,0,NULL,NULL,NULL,NULL,NULL),
(75,'GORONTALO','Gorontalo','Gorontalo','29',1,0,NULL,NULL,NULL,NULL,NULL),
(76,'SULAWESI BARAT','Sulbar','Mamuju','33',1,0,NULL,NULL,NULL,NULL,NULL),
(81,'MALUKU','Maluku','Ambon','25',1,0,NULL,NULL,NULL,NULL,NULL),
(82,'MALUKU UTARA','Malut','Ternate','27',1,0,NULL,NULL,NULL,NULL,NULL),
(91,'P A P U A','Papua','Jayapura','26',1,0,NULL,NULL,NULL,NULL,NULL),
(92,'PAPUA BARAT','Irjabar','Manokwari','32',1,0,NULL,NULL,NULL,NULL,NULL),
(99,'LUAR NEGERI','Luar Neger','Luar Negeri','99',1,0,NULL,NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
