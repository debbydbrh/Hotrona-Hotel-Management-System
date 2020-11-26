/*
SQLyog Community v13.1.1 (64 bit)
MySQL - 10.1.35-MariaDB : Database - hotrona_hotel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotrona_hotel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `hotrona_hotel`;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `stok_barang` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `item` */

insert  into `item`(`id`,`nama_barang`,`status`,`stok_barang`,`keterangan`,`created_at`,`updated_at`) values 
(1,'Handuk',1,4,'Baru',NULL,'2020-04-17 07:04:53'),
(4,'Sikat Gigi',1,9,'Baru','2020-04-17 08:17:04','2020-04-17 08:17:04'),
(5,'Selimut',NULL,6,'Baru','2020-06-12 06:47:51','2020-06-14 06:26:25'),
(6,'Sandal',NULL,1,'Baru','2020-06-14 00:02:45','2020-06-14 00:02:45');

/*Table structure for table `karyawan` */

DROP TABLE IF EXISTS `karyawan`;

CREATE TABLE `karyawan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` char(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id`,`user_id`,`nama`,`jenis_kelamin`,`alamat`,`no_hp`,`created_at`,`updated_at`) values 
(8,24,'Indira','Laki-laki','Jakarta','082377569822','2020-05-29 05:08:19','2020-06-14 00:12:06'),
(12,28,'Ratih','Perempuan','Surabaya','082377569822','2020-06-11 20:32:19','2020-06-11 20:32:19'),
(13,29,'Bintang','Laki-laki','Bandung','081233445566','2020-06-12 01:15:51','2020-06-12 01:15:51'),
(14,30,'Mega','Laki-laki','Surabaya','082377569822','2020-06-13 05:01:33','2020-06-13 05:01:33'),
(15,31,'Tessa','Perempuan','Bandung','082377569822','2020-06-13 05:02:17','2020-06-13 05:02:17');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2019_08_19_000000_create_failed_jobs_table',1),
(2,'2020_04_15_064501_create_room_table',1),
(3,'2020_04_15_064951_create_transaksi_table',1),
(4,'2020_04_15_065025_create_item_table',1),
(5,'2020_04_15_065422_create_pengumuman_table',1),
(6,'2020_04_15_065459_create_user_table',1),
(7,'2020_04_15_071008_create_transaksibarang_table',2),
(8,'2020_05_05_092003_update_user_table',3),
(9,'2020_05_05_093844_update_user_table2',4),
(10,'2020_05_06_043506_create_karyawan_table',5);

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_berakhir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengumuman` */

insert  into `pengumuman`(`id`,`judul`,`isi`,`status`,`tanggal_berakhir`,`created_at`,`updated_at`) values 
(1,'Rapat','Semua karyawan diharapkan untuk menghadiri rapat siang ini di ruang rapat','Aktif','2020-06-11',NULL,'2020-06-13 23:41:57'),
(7,'Barang Masuk','Barang telah diterima dengan baik oleh pihak resepsionis','Aktif','2020-06-13','2020-06-12 02:53:15','2020-06-13 23:41:41');

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `room_id` bigint(20) unsigned DEFAULT NULL,
  `nomor_kamar` int(11) NOT NULL,
  `nama_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(30) NOT NULL,
  `status` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_room` (`room_id`),
  CONSTRAINT `id_room` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `room` */

insert  into `room`(`id`,`room_id`,`nomor_kamar`,`nama_kamar`,`tipe_kamar`,`harga`,`status`,`keterangan`,`created_at`,`updated_at`) values 
(6,NULL,1,'Kamar01','Standard Room (STD)',500000,'Tersedia','Full AC','2020-05-29 04:40:07','2020-05-29 07:23:45'),
(7,NULL,2,'Kamar02','Standard Room (STD)',500000,'Tersedia','Full AC, Single Bed','2020-05-29 05:43:58','2020-05-29 07:18:38'),
(8,NULL,3,'Kamar03','Superior Room (SUP)',900000,'Tersedia','Full AC, Double Bed','2020-06-12 05:47:39','2020-06-12 05:47:39'),
(9,NULL,4,'Kamar04','Superior Room (SUP)',900000,'Tersedia','Full AC, Double Bed','2020-06-12 06:09:38','2020-06-12 06:09:38'),
(10,NULL,5,'Kamar05','Deluxe Room (DLX)',1000000,'Tersedia','Full AC, Double Bed, Living Room','2020-06-12 06:11:11','2020-06-12 06:11:11');

/*Table structure for table `transaksi` */

DROP TABLE IF EXISTS `transaksi`;

CREATE TABLE `transaksi` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik_pemesan` char(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pemesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `tanggal_check_in` date NOT NULL,
  `tanggal_check_out` date NOT NULL,
  `tipe_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_kamar` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksi` */

insert  into `transaksi`(`id`,`nik_pemesan`,`nama_pemesan`,`alamat`,`jumlah_kamar`,`tanggal_check_in`,`tanggal_check_out`,`tipe_kamar`,`harga_kamar`,`created_at`,`updated_at`) values 
(1,'1122334455987654','Helena','Medan',1,'2020-05-05','2020-05-10','Standard Room (STD)',500000.00,NULL,'2020-06-13 23:47:11'),
(2,'1234432156788765','Debora','Bandung',1,'2020-05-30','2020-05-31','Superior Room (SUP)',900000.00,'2020-05-29 04:23:13','2020-06-13 23:47:22'),
(3,'1234567890123456','Tesa','Medan',1,'2020-06-16','2020-06-18','Standard Room (STD)',500000.00,'2020-06-13 19:57:51','2020-06-13 19:57:51'),
(4,'0987896777554482','Yolanda','Surabaya',1,'2020-06-15','2020-06-17','Superior Room (SUP)',900000.00,'2020-06-13 23:52:39','2020-06-13 23:52:39');

/*Table structure for table `transaksibarang` */

DROP TABLE IF EXISTS `transaksibarang`;

CREATE TABLE `transaksibarang` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `tanggal_masuk_barang` date NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `transaksibarang` */

insert  into `transaksibarang`(`id`,`nama_barang`,`jumlah_barang`,`tanggal_masuk_barang`,`kategori`,`biaya`,`created_at`,`updated_at`) values 
(1,'Sikat Gigi',4,'2020-06-19','Baru',50000.00,'2020-06-13 05:18:22','2020-06-13 05:18:22'),
(2,'Selimut',2,'2020-06-11','Baru',100000.00,'2020-06-14 00:04:05','2020-06-14 00:04:05');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role`,`username`,`password`,`email`,`created_at`,`updated_at`,`remember_token`) values 
(1,'admin','Admin','$2y$10$KTIEXSlXz1NRp9h1f92ylu3z46HLub6SnbboI2Qo9xQge5NYagxXu','kelompok07@gmail.com','2020-05-05 10:39:22','2020-05-05 10:39:22','BEoamEwTxhtz3Syn37gaCemVSYKCbMSZbnX1Lk8DSGXiMUtVblTcxKpSAoEC'),
(24,'inventaris','Indira','$2y$10$23bKipYzZITJkin285x9BuEef8rkkWGsYveGBXHuOCe9c97vDSx2O','indira@gmail.com','2020-05-29 05:08:19','2020-05-29 05:08:19','6UEWBeIgplJLzVvMLhPnztZsqdBEOwVuLq7N8Hvnwogiiq1e9DDogQDrmEvP'),
(28,'resepsionis','Ratih','$2y$10$KWWK6n35OIz2NX/CwM5kXu2Vk0YHfBDO1aLxx08..LpUceFCWRc1i','ratih@gmail.com','2020-06-11 20:32:19','2020-06-11 20:32:19','tf6H65CFnBQJw11vYi5q3ClG2VDjDqn9OKDcI9zz3eBFEUdp3YD5UXBgtAhz'),
(29,'resepsionis','Bintang','$2y$10$k2lAzsGLb8A556mauNsa1u4kURvtdQS3utD.eYynTdDIa818RZe1y','bintang@gmail.com','2020-06-12 01:15:51','2020-06-12 01:15:51','LFOnT14oYj8PRFHXyPdJu85g9UcTNDyZW7rFDuxwJ1QQv5rGgSSziEVAVhTL'),
(30,'resepsionis','Mega','$2y$10$t1PBEqDjvE5B5tTzeJPaVOlSPY.9S4FkBCZf.Ze.iyD..wHSebtRK','mega@gmail.com','2020-06-13 05:01:33','2020-06-13 05:01:33','hg85EKnFVHunMlcE10kPnYC0GrBHO5o6nyH4R9Z0AEN6jyQOoJWDBLVegoYz'),
(31,'resepsionis','Tessa','$2y$10$yQr15jxQdtuUu72wuGeE6eTX4JAu1qZK0PjJSixB8BJEt0HqDxMLW','tessa@gmail.com','2020-06-13 05:02:16','2020-06-13 05:02:16','B1FrNZv4en7c60xMpHr0yP7xrU3TCTmjVDZuOiq9iLY03SoqCqBPHSsqNorb');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
