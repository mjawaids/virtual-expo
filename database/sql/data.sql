/*
SQLyog Community v12.3.3 (64 bit)
MySQL - 10.1.25-MariaDB : Database - virtual-expo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`virtual-expo` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Data for the table `analytics` */

insert  into `analytics`(`stand_id`,`visits`) values 
(12,2),
(15,4),
(14,2),
(13,7),
(16,6),
(17,4),
(10,2),
(1,2),
(7,3);

/*Data for the table `companies` */

insert  into `companies`(`id`,`name`,`logo`,`admin`,`email`,`phone`,`website`,`facebook`,`twitter`,`marketing_doc`,`created_at`,`updated_at`) values 
(1,'Microsoft','microsoft.png','Mike Tang','info@microsoft.com','1 12 1122112','http://www.microsoft.com','http://www.facebook.com/microsoft','@microsoft','docs/microsoft.pdf',NULL,NULL),
(2,'Apple','apple.png','Tim Tang','info@apple.com','1 12 1122412','http://www.apple.com','http://www.facebook.com/apple','@apple','docs/apple.pdf',NULL,NULL),
(3,'Google','google.png','Wang Tang','info@google.com','1 12 1122112','http://www.google.com','http://www.facebook.com/google','@google','docs/google.pdf',NULL,NULL),
(4,'AlifXpress','2XeLTFw5mEOveBlCeACy5g1XKiStb5QrSPvs9cZa.png','Ali','info@alifxpress.com','922112211221','http://www.alifxpress.com','http://www.facebook.com/alifxpress','@alifxpress','docs/8an2WeP2FgFEop9hibpNwe4ZrX9s7Z2gYyO8cLOB.pdf','2017-09-08 11:07:19','2017-09-08 11:07:19');

/*Data for the table `events` */

insert  into `events`(`id`,`name`,`location_id`,`start_date`,`end_date`,`created_at`,`updated_at`) values 
(1,'IT Expo',2,'2017-10-08','2017-10-12',NULL,NULL),
(2,'Electronics Expo',3,'2017-10-13','2017-10-15',NULL,NULL),
(3,'Industrial Exhibition',1,'2017-10-16','2017-10-20',NULL,NULL),
(4,'Electrical Seminar',1,'2017-09-07','2017-09-12',NULL,NULL),
(5,'Leather Expo',3,'2017-09-06','2017-09-09',NULL,NULL),
(6,'Fashion Show',2,'2017-08-08','2017-08-12',NULL,NULL),
(7,'Education Seminar',3,'2017-07-08','2017-07-12',NULL,NULL);

/*Data for the table `locations` */

insert  into `locations`(`id`,`name`,`latitude`,`longitude`,`address`,`created_at`,`updated_at`) values 
(1,'Expo Center','24.9015813','67.0736155','Gulshan, Karachi',NULL,NULL),
(2,'Pearl Continental','24.8473421','67.0234113','Saddar, Karachi',NULL,NULL),
(3,'Federation House','24.8147692','67.0240567','Clifton, Karachi',NULL,NULL);

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(8,'2014_10_12_000000_create_users_table',1),
(9,'2014_10_12_100000_create_password_resets_table',1),
(10,'2017_09_06_142216_create_events_table',1),
(11,'2017_09_06_143833_create_stands_table',1),
(12,'2017_09_06_144255_create_locations_table',1),
(13,'2017_09_06_144411_create_companies_table',1),
(14,'2017_09_08_012841_create_analytics_table',1);

/*Data for the table `password_resets` */

/*Data for the table `stands` */

insert  into `stands`(`id`,`name`,`price`,`picture`,`event_id`,`reserved`,`company_id`,`created_at`,`updated_at`) values 
(1,'Stand Alpha',300.00,'alpha.png',1,0,0,NULL,NULL),
(2,'Stand Beta',400.00,'beta.png',1,0,0,NULL,NULL),
(3,'Stand Gama',500.00,'gama.png',1,0,0,NULL,NULL),
(4,'Stand Alpha',300.00,'alpha.png',2,0,0,NULL,NULL),
(5,'Stand Beta',400.00,'beta.png',2,0,0,NULL,NULL),
(6,'Stand Gama',500.00,'gama.png',2,0,0,NULL,NULL),
(7,'Stand Alpha',300.00,'alpha.png',3,1,4,NULL,'2017-09-08 11:07:19'),
(8,'Stand Beta',400.00,'beta.png',3,0,0,NULL,NULL),
(9,'Stand Gama',500.00,'gama.png',3,0,0,NULL,NULL),
(10,'Stand Alpha',300.00,'alpha.png',4,1,1,NULL,NULL),
(11,'Stand Beta',400.00,'beta.png',4,1,2,NULL,NULL),
(12,'Stand Gama',500.00,'gama.png',4,1,3,NULL,NULL),
(13,'Stand Alpha',300.00,'alpha.png',5,1,2,NULL,NULL),
(14,'Stand Beta',400.00,'beta.png',5,1,3,NULL,NULL),
(15,'Stand Gama',500.00,'gama.png',5,1,1,NULL,NULL),
(16,'Stand Alpha',300.00,'alpha.png',6,1,3,NULL,NULL),
(17,'Stand Beta',400.00,'beta.png',6,1,1,NULL,NULL),
(18,'Stand Gama',500.00,'gama.png',6,1,2,NULL,NULL),
(19,'Stand Alpha',300.00,'alpha.png',7,1,3,NULL,NULL),
(20,'Stand Beta',400.00,'beta.png',7,1,2,NULL,NULL),
(21,'Stand Gama',500.00,'gama.png',7,1,1,NULL,NULL);

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Jawaid','mjawaid@gmail.com','$2y$10$BII/f6.WxHWADkjnWgX/ZuAAmPNQRPVyIaoCRr1L3n5yR0Uq/DV..','p7CmwouSwQqBF4K0Dwcp5hCo8Ur2GcSzBQDXsuuD9PgvFmK1is5zSdGvv76l',NULL,NULL),
(5,'Amira Jaskolski','terry.ron@example.net','$2y$10$hPBxIe7bqQoHKJCRoivQoOTBSfjnbukkzeFMec0xnV9qz97lPHes6','g4CaQj0lnG','2017-09-08 12:02:19','2017-09-08 12:02:19'),
(6,'Morris Cremin IV','hudson.amelia@example.com','$2y$10$EdgLOYHPPRo4COVYsf0cfenlxZShTNApUtjCyhhbEEYB297Eh4Qp2','XwLhuYy3g3','2017-09-08 12:02:48','2017-09-08 12:02:48'),
(7,'Gavin Kuphal','senger.tianna@example.net','$2y$10$.ceazEKJ3Kx3lBTcxJowLuq7ElgmdCZRbSs1UvSbMPkZtp68Hbtwq','E8LRglEsru','2017-09-08 12:03:08','2017-09-08 12:03:08'),
(8,'Sydney Schiller','paula.kuphal@example.net','$2y$10$yUBLRQHyHyx3zJ09MGp2Q.Rn82dFz919UViej0rycqdcfwwYz2b.m','Tt0znKH54R','2017-09-08 12:03:23','2017-09-08 12:03:23'),
(9,'Prof. Alejandra Towne','daniel.althea@example.org','$2y$10$PO80NGcCLnaa20tbWWZx5uw12CoCe.KUFd17uH1nOTLElaAKMMvrC','1GlpsVAnpB','2017-09-08 12:12:35','2017-09-08 12:12:35'),
(10,'Wilfrid Carter','delia34@example.org','$2y$10$ishhdaDf.LQUQCmz7r2fK.XfGVIQypoe0IcnNc49WmJsrcMf9Q.BG','UnzOAtajRF','2017-09-08 12:13:49','2017-09-08 12:13:49'),
(11,'Bonita Kulas','ziemann.thalia@example.com','$2y$10$yxCoBSVJo0P8gW6S.JnMZ.Ia2A2ltJvsPA8LvV93JOiaOwv3TNuVO','mubCE0lmop','2017-09-08 12:15:02','2017-09-08 12:15:02'),
(12,'Marcus Williamson','arenner@example.com','$2y$10$zoR76vRO8oukLjpxenWJD.NNsvxWU4ISo1KNgDKxF0MCMDQecpYJC','nhT5uPGZPS','2017-09-08 12:22:17','2017-09-08 12:22:17'),
(13,'Dr. Prince Hoppe','gregory.pollich@example.org','$2y$10$4V.GHY5ervcjIW8Qehd8IOnicTTiQsRIXSrwxB6tVdwMFO6HZ5MeW','VdJ5AxnI7g','2017-09-08 12:22:18','2017-09-08 12:22:18'),
(14,'Rogers Kertzmann','ernser.korbin@example.org','$2y$10$kMIGMXlwBhi9ZC5o22JW2u.ZI8rKxZAr12yV8N.LFhlYiEN51hYJy','UycjCb9xHR','2017-09-08 12:33:19','2017-09-08 12:33:19'),
(15,'Mrs. Clementina Hintz DDS','beatty.nya@example.org','$2y$10$E5zIQ2db7ReP.THMS3OQX.WkE.SVFfcnwaJHmoh0NQmaAftt6QBxG','v8QgP7CTbw','2017-09-08 12:33:20','2017-09-08 12:33:20'),
(16,'Cory Metz PhD','keeling.dagmar@example.com','$2y$10$a4nAs2uZt4gR6PPiX9Q8EuW.vl0z.ol0LBd6obur0pCJjPxeO/Mw.','Tha9uXodeg','2017-09-08 12:34:34','2017-09-08 12:34:34'),
(17,'Prof. Charles Dach','korbin.metz@example.org','$2y$10$lc2brDWgrifJjOMs1bLEcu4c6KycSFrinr/kqrf66JiuNS2hx6hU2','hS9OKIQlt0','2017-09-08 12:34:34','2017-09-08 12:34:34'),
(18,'Noemy Gleason','odeckow@example.com','$2y$10$zb1ReuCj5tShBpch/mr5YuUpnTMjKdfYFe50FK79ssyxCrnNG9y/6','pRHjTOvG49','2017-09-08 12:34:49','2017-09-08 12:34:49'),
(19,'Gaston Hand','adams.mozelle@example.org','$2y$10$/tymp9aWqJMJYKjkMMxqe.zLTDPNqN1SST.YLsVc/aVxj2jG9uutm','RUkCWlc5ny','2017-09-08 12:34:49','2017-09-08 12:34:49'),
(20,'Prof. Wellington Schmitt Sr.','viviane.willms@example.com','$2y$10$D/NmbJBCnmf38Z..XLmNYeoYKcFPmHNjBCTCRFpiv/P3AfISgJBqm','W8LCSNfffw','2017-09-08 12:34:59','2017-09-08 12:34:59'),
(21,'Verna Kuhic','rweimann@example.com','$2y$10$ioUMuPJpn9.AeEe248FahOwSnm0YhjyO1zY2MsPvBfUvQB23zUL8m','lo8Kmo6VHc','2017-09-08 12:34:59','2017-09-08 12:34:59'),
(22,'Dr. Kieran Dickens','mwalter@example.com','$2y$10$D.eIfOhMgw1OfV4MUWCS7uI2r1ezWlGrPvC3MNCeuQVU0xq3.Byq6','69HgyMjDqb','2017-09-08 12:37:11','2017-09-08 12:37:11'),
(23,'Bernard Schaefer','deron18@example.org','$2y$10$EiZR4yqWm.t7AVzzbllLnOhRRWJVIzIFyQQdVk/DM2BN5MSvdnPx6','gAo4uhiPEK','2017-09-08 12:37:11','2017-09-08 12:37:11'),
(24,'Dr. Keaton Rice','timothy67@example.com','$2y$10$wu6aQ4XKY0f8vjV7dBKEheI0mSKKCPzFq9Idg4yVeSqIr1wrMUA5C','gxbAjisB2C','2017-09-08 12:37:37','2017-09-08 12:37:37'),
(25,'Madison Anderson','emmitt27@example.net','$2y$10$GJihDrytDsLBsyrEJ1Vrwe3o/C3Pcwaza6W5mSdbL.JhlEkCeHTBW','Ppx9oiSr3C','2017-09-08 12:37:37','2017-09-08 12:37:37'),
(26,'Casimir Smitham','ifeest@example.org','$2y$10$V1HnWQfWL8CQm8uelo5eyueUeSshCInDMcbHCJktOIacVsn2UvQci','21scT8cHRF','2017-09-08 12:38:05','2017-09-08 12:38:05'),
(27,'Rodger Cummings V','mitchell.quincy@example.com','$2y$10$s.oKrR31Oe8DZwtrv87b0O3zyDlcEFIsP7hyDbzgNwcZlDmtm9XU6','8lZVPww87S','2017-09-08 12:38:06','2017-09-08 12:38:06'),
(28,'Brenden Cummerata','ally.davis@example.com','$2y$10$3yaFZIs..b1T//SAxHFhmOaBvuKS/mUb4O45VUo454cOtyviOgj9W','J3M5gSszHw','2017-09-08 12:38:44','2017-09-08 12:38:44'),
(29,'Avery Leannon','murray.judy@example.net','$2y$10$RtpZIPsbv6YG15J8k9XPf.MU9SGANaLC9CM9vTjMRURgiShf4BINm','0wP9S5p37Q','2017-09-08 12:38:44','2017-09-08 12:38:44'),
(30,'Nicholaus Berge','vicente.hayes@example.net','$2y$10$DcbOtuVOb0S43leGyF5SLeIwQgBheuiFBaa4ay0rX/g2axACSagMG','vwRoxN7U8P','2017-09-08 12:39:54','2017-09-08 12:39:54'),
(31,'Prof. Wilfredo Olson','holly.klein@example.net','$2y$10$aDeGE9orreowg2hAR19hA.aMgNr0vT83mbsfixICb9MmR0StlwQia','GZm1igVS5w','2017-09-08 12:39:54','2017-09-08 12:39:54'),
(32,'Tia Yost','xwalker@example.net','$2y$10$lWBZnzW58T7i7dr5BiheDuG0iGK72ldCPPp6HWfbAMjVeUn9X3DQS','J7S1kV1SKM','2017-09-08 12:46:08','2017-09-08 12:46:08'),
(33,'Sid Welch DVM','ibeatty@example.net','$2y$10$whctjnkimg6kdojpmpIHAuDIcH7nu1baqS2yRV.sUoQYNhBODgVlO','CIhNTiaIII','2017-09-08 12:46:08','2017-09-08 12:46:08');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
