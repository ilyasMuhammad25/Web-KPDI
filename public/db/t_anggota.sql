/*
SQLyog Community
MySQL - 10.4.19-MariaDB : Database - inlislite_v4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `t_anggota` */

DROP TABLE IF EXISTS `t_anggota`;

CREATE TABLE `t_anggota` (
  `id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `MemberNo` varchar(50) DEFAULT NULL,
  `IdentityNo` varchar(50) DEFAULT NULL,
  `PlaceOfBirth` varchar(50) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `AddressNow` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `InstitutionName` varchar(255) DEFAULT NULL,
  `InstitutionAddress` varchar(255) DEFAULT NULL,
  `InstitutionPhone` varchar(255) DEFAULT NULL,
  `MotherName` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `LoanReturnLateCount` int(11) DEFAULT NULL,
  `file_image` varchar(255) DEFAULT NULL,
  `NoHp` varchar(50) DEFAULT NULL,
  `Provincy` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `ProvincyNow` varchar(50) DEFAULT NULL,
  `CityNow` varchar(50) DEFAULT NULL,
  `Kecamatan` varchar(50) DEFAULT NULL,
  `KecamatanNow` varchar(50) DEFAULT NULL,
  `Kelurahan` varchar(50) DEFAULT NULL,
  `KelurahanNow` varchar(50) DEFAULT NULL,
  `RT` varchar(50) DEFAULT NULL,
  `RTNow` varchar(50) DEFAULT NULL,
  `RW` varchar(50) DEFAULT NULL,
  `RWNow` varchar(50) DEFAULT NULL,
  `TahunAjaran` varchar(50) DEFAULT NULL,
  `KeteranganLain` varchar(50) DEFAULT NULL,
  `IsLunasBiayaPendaftaran` bit(1) DEFAULT NULL,
  `BiayaPendaftaran` decimal(10,0) DEFAULT NULL,
  `TanggalBebasPustaka` datetime DEFAULT NULL,
  `sort` mediumint(8) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `active` tinyint(1) unsigned NOT NULL DEFAULT 1,
  `category_id` int(11) DEFAULT NULL,
  `ref_identitas` int(11) DEFAULT NULL,
  `ref_jeniskelamin` int(11) DEFAULT NULL,
  `ref_pendidikan` int(11) DEFAULT NULL,
  `ref_pekerjaan` int(11) DEFAULT NULL,
  `ref_jenisanggota` int(11) DEFAULT NULL,
  `ref_perkawinan` int(11) DEFAULT NULL,
  `ref_agama` int(11) DEFAULT NULL,
  `ref_unitkerja` int(11) DEFAULT NULL,
  `ref_fakultas` int(11) DEFAULT NULL,
  `ref_jurusan` int(11) DEFAULT NULL,
  `ref_Statusanggota` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `RegisterDate` datetime DEFAULT NULL,
  `EndDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `t_anggota` */

insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (9,'Keanggotaan','keanggotaan','202109130003','','','0000-00-00','',NULL,NULL,'perpusnas','','',NULL,'aulya@gmail.com',NULL,NULL,'','','',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,1,'2021-09-13 10:01:14','2021-09-13 17:19:02',NULL,'0000-00-00 00:00:00',NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (11,'Muhammad Ilyas Dalimar, S.Kom','muhammad-ilyas-dalimar-skom','202109130005','','','0000-00-00','',NULL,NULL,'','','',NULL,'',NULL,NULL,'','','',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2021-09-13 17:08:03','2021-09-13 17:10:39',NULL,'0000-00-00 00:00:00',NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (12,'Aulya Thamimy, S.Kom','aulya-thamimy-skom','202109130006','','','0000-00-00','Jl. Praja dalam f No.15 b. Kebayoran Lama',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,'','DKI Jakarta','','DKi jakarta','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-13 17:50:18','2021-09-13 17:50:18',NULL,NULL,NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (13,'dalimar Ilyas','dalimar-ilyas','202109130007','','medan','0000-00-00','Jl. Praja dalam f No.15 b. Kebayoran Lama1',NULL,NULL,'perpusnas','merdeka selatan','',NULL,'daliamrilyas@outlook.com',NULL,'1631542572_f1e646ec94914d6ce35c.jpg','08212222270','DKI Jakarta','','DKi jakarta','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-13 21:16:12','2021-09-13 21:16:12',NULL,NULL,NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (14,'dalimar ganteng','dalimar-ganteng','202109140008','','medan','0000-00-00','',NULL,NULL,'','','',NULL,'',NULL,NULL,'','','',NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,1,'2021-09-14 08:09:26','2021-09-14 08:15:44',NULL,'0000-00-00 00:00:00',NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (15,'dalimar Aulya','dalimar-aulya','202109140009','','Medan','0000-00-00','Jl. Praja dalam f No.15 b. Kebayoran Lama','',NULL,'','','',NULL,'',NULL,NULL,'','DKI Jakarta','','','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'',1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,13,NULL,NULL,NULL,1,NULL,'2021-09-14 08:23:19','2021-09-14 08:23:19',NULL,NULL,NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (16,'Arda Turan','arda-turan','202109140010','','','0000-00-00','',NULL,NULL,'','','',NULL,'aulya@gmail.com',NULL,NULL,'','','','','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-14 10:13:44','2021-09-14 10:13:44',NULL,NULL,NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (17,'dalimar','dalimar','202109140011','','','0000-00-00','',NULL,NULL,'','','',NULL,'',NULL,NULL,'','','','','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-14 15:21:02','2021-09-14 15:21:02',NULL,NULL,NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (18,'Aulya Thamimy55','aulya-thamimy55','202109140012','','','2021-09-05','',NULL,NULL,'','','',NULL,'',NULL,NULL,'','','','','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-14 15:27:25','2021-09-14 15:27:25',NULL,NULL,NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (19,'Didik Pribadi, S.Kom','didik-pribadi-skom','202109140013','','','2021-09-05','',NULL,NULL,'','','',NULL,'',NULL,NULL,'','','','','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-14 23:58:19','2021-09-14 23:58:19',NULL,'0000-00-00 00:00:00',NULL);
insert  into `t_anggota`(`id`,`name`,`slug`,`MemberNo`,`IdentityNo`,`PlaceOfBirth`,`DateOfBirth`,`Address`,`AddressNow`,`Phone`,`InstitutionName`,`InstitutionAddress`,`InstitutionPhone`,`MotherName`,`Email`,`LoanReturnLateCount`,`file_image`,`NoHp`,`Provincy`,`City`,`ProvincyNow`,`CityNow`,`Kecamatan`,`KecamatanNow`,`Kelurahan`,`KelurahanNow`,`RT`,`RTNow`,`RW`,`RWNow`,`TahunAjaran`,`KeteranganLain`,`IsLunasBiayaPendaftaran`,`BiayaPendaftaran`,`TanggalBebasPustaka`,`sort`,`description`,`active`,`category_id`,`ref_identitas`,`ref_jeniskelamin`,`ref_pendidikan`,`ref_pekerjaan`,`ref_jenisanggota`,`ref_perkawinan`,`ref_agama`,`ref_unitkerja`,`ref_fakultas`,`ref_jurusan`,`ref_Statusanggota`,`created_by`,`updated_by`,`created_at`,`updated_at`,`deleted_at`,`RegisterDate`,`EndDate`) values (21,'dalimar vcr','dalimar-vcr','202109200014','','medan','0000-00-00','','',NULL,'','','',NULL,'',NULL,NULL,'','','','','',NULL,NULL,NULL,NULL,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,13,NULL,NULL,NULL,1,NULL,'2021-09-20 12:54:24','2021-09-20 12:54:24',NULL,'0000-00-00 00:00:00',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
