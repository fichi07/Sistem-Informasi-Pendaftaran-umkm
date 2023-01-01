-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for db_umkm
CREATE DATABASE IF NOT EXISTS `db_umkm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_umkm`;

-- Dumping structure for table db_umkm.akunuser
CREATE TABLE IF NOT EXISTS `akunuser` (
  `nama_lengkap` varchar(50) NOT NULL,
  `emailuser` varchar(50) NOT NULL,
  `passworduser` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`nama_lengkap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.akunuser: ~2 rows (approximately)
/*!40000 ALTER TABLE `akunuser` DISABLE KEYS */;
INSERT INTO `akunuser` (`nama_lengkap`, `emailuser`, `passworduser`, `status`) VALUES
	('Fitra', 'wahyufitrahc@gmail.com', '1234', 'admin'),
	('wahyu fitra', 'samvic1007@gmail.com', '123', 'user');
/*!40000 ALTER TABLE `akunuser` ENABLE KEYS */;

-- Dumping structure for table db_umkm.download
CREATE TABLE IF NOT EXISTS `download` (
  `id_down` int(100) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) NOT NULL DEFAULT '0',
  `nik` int(25) NOT NULL DEFAULT '0',
  `file` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_down`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.download: ~0 rows (approximately)
/*!40000 ALTER TABLE `download` DISABLE KEYS */;
INSERT INTO `download` (`id_down`, `nama_lengkap`, `nik`, `file`) VALUES
	(13, 'Wahyu Fitra', 19650039, '1. sertifikat.jpg');
/*!40000 ALTER TABLE `download` ENABLE KEYS */;

-- Dumping structure for table db_umkm.dusun
CREATE TABLE IF NOT EXISTS `dusun` (
  `id_dusun` int(50) NOT NULL AUTO_INCREMENT,
  `nama_dusun` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dusun`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.dusun: ~6 rows (approximately)
/*!40000 ALTER TABLE `dusun` DISABLE KEYS */;
INSERT INTO `dusun` (`id_dusun`, `nama_dusun`) VALUES
	(1, 'Campurejo'),
	(2, 'Kalirejo'),
	(3, 'Kauman'),
	(4, 'Mulyoagung'),
	(5, 'Pacul'),
	(6, 'Sukorejo'),
	(7, 'Semanding');
/*!40000 ALTER TABLE `dusun` ENABLE KEYS */;

-- Dumping structure for table db_umkm.jenisumkm
CREATE TABLE IF NOT EXISTS `jenisumkm` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenisUmkm` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.jenisumkm: ~6 rows (approximately)
/*!40000 ALTER TABLE `jenisumkm` DISABLE KEYS */;
INSERT INTO `jenisumkm` (`id_jenis`, `jenisUmkm`) VALUES
	(1, 'Usaha Kuliner'),
	(2, 'Usaha Fashion'),
	(3, 'Usaha Bidang Teknologi'),
	(4, 'Usaha Bidang Kosmetik'),
	(5, 'Usaha Bidang Otomotif'),
	(6, 'Usaha Cendera Mata'),
	(7, 'Usaha Agrobisnis');
/*!40000 ALTER TABLE `jenisumkm` ENABLE KEYS */;

-- Dumping structure for table db_umkm.kecamatan
CREATE TABLE IF NOT EXISTS `kecamatan` (
  `id_kecamatan` int(50) NOT NULL AUTO_INCREMENT,
  `namaKecamatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.kecamatan: ~8 rows (approximately)
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
INSERT INTO `kecamatan` (`id_kecamatan`, `namaKecamatan`) VALUES
	(1, 'Balen'),
	(2, 'Baureno'),
	(3, 'Bojonegoro'),
	(4, 'Bubulan'),
	(5, 'Dander'),
	(6, 'Gayam'),
	(7, 'Gondang'),
	(8, 'Kalitidu'),
	(9, 'Kanor'),
	(10, 'Kapas');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;

-- Dumping structure for table db_umkm.kelurahan
CREATE TABLE IF NOT EXISTS `kelurahan` (
  `id_kelurahan` int(100) NOT NULL AUTO_INCREMENT,
  `nama_klrhn` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id_kelurahan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.kelurahan: ~6 rows (approximately)
/*!40000 ALTER TABLE `kelurahan` DISABLE KEYS */;
INSERT INTO `kelurahan` (`id_kelurahan`, `nama_klrhn`) VALUES
	(1, 'Banjarejo'),
	(2, 'Jetak'),
	(3, 'Kadipaten'),
	(4, 'Karang Pacar'),
	(5, 'Kepatihan'),
	(6, 'Klangon'),
	(7, 'Sumbang');
/*!40000 ALTER TABLE `kelurahan` ENABLE KEYS */;

-- Dumping structure for table db_umkm.kodepos
CREATE TABLE IF NOT EXISTS `kodepos` (
  `id_kodepos` int(11) NOT NULL AUTO_INCREMENT,
  `noKodepos` varchar(50) DEFAULT '',
  PRIMARY KEY (`id_kodepos`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.kodepos: ~8 rows (approximately)
/*!40000 ALTER TABLE `kodepos` DISABLE KEYS */;
INSERT INTO `kodepos` (`id_kodepos`, `noKodepos`) VALUES
	(1, '62115'),
	(2, '62191'),
	(3, '62184'),
	(4, '62166'),
	(5, '62185'),
	(6, '62183'),
	(7, '62169'),
	(8, '62161'),
	(9, '62162'),
	(10, '62165');
/*!40000 ALTER TABLE `kodepos` ENABLE KEYS */;

-- Dumping structure for table db_umkm.registrasiumkm
CREATE TABLE IF NOT EXISTS `registrasiumkm` (
  `nik` int(25) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `alamat_usaha` varchar(50) DEFAULT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_Stu` int(11) NOT NULL,
  `id_kecamatan` int(50) NOT NULL,
  `id_kelurahan` int(100) NOT NULL,
  `id_dusun` int(50) NOT NULL,
  `id_kodepos` int(11) NOT NULL,
  `kontak_usaha` varchar(12) DEFAULT NULL,
  `status_pendaftaran` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`nik`),
  KEY `id_jenis` (`id_jenis`),
  KEY `id_kecamatan` (`id_kecamatan`),
  KEY `id_kelurahan` (`id_kelurahan`),
  KEY `id_dusun` (`id_dusun`),
  KEY `id_kodepos` (`id_kodepos`),
  KEY `id_Stu` (`id_Stu`),
  CONSTRAINT `FK_registrasiumkm_dusun` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id_dusun`),
  CONSTRAINT `FK_registrasiumkm_jenisumkm` FOREIGN KEY (`id_jenis`) REFERENCES `jenisumkm` (`id_jenis`),
  CONSTRAINT `FK_registrasiumkm_kecamatan` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`),
  CONSTRAINT `FK_registrasiumkm_kelurahan` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id_kelurahan`),
  CONSTRAINT `FK_registrasiumkm_kodepos` FOREIGN KEY (`id_kodepos`) REFERENCES `kodepos` (`id_kodepos`),
  CONSTRAINT `FK_registrasiumkm_statustempatusaha` FOREIGN KEY (`id_Stu`) REFERENCES `statustempatusaha` (`id_Stu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.registrasiumkm: ~1 rows (approximately)
/*!40000 ALTER TABLE `registrasiumkm` DISABLE KEYS */;
INSERT INTO `registrasiumkm` (`nik`, `nama_lengkap`, `nama_usaha`, `alamat_usaha`, `id_jenis`, `id_Stu`, `id_kecamatan`, `id_kelurahan`, `id_dusun`, `id_kodepos`, `kontak_usaha`, `status_pendaftaran`) VALUES
	(19650039, 'wahyu fitra', 'Ragnel Barbershop', 'JL. Monginsidi Gg Masjid', 2, 2, 9, 2, 5, 8, '089123875839', 'terverifikasi');
/*!40000 ALTER TABLE `registrasiumkm` ENABLE KEYS */;

-- Dumping structure for table db_umkm.statustempatusaha
CREATE TABLE IF NOT EXISTS `statustempatusaha` (
  `id_Stu` int(11) NOT NULL,
  `jenisSts` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_Stu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.statustempatusaha: ~2 rows (approximately)
/*!40000 ALTER TABLE `statustempatusaha` DISABLE KEYS */;
INSERT INTO `statustempatusaha` (`id_Stu`, `jenisSts`) VALUES
	(1, 'Sewa'),
	(2, 'Milik Sendiri');
/*!40000 ALTER TABLE `statustempatusaha` ENABLE KEYS */;

-- Dumping structure for table db_umkm.upload
CREATE TABLE IF NOT EXISTS `upload` (
  `file_foto` varchar(50) DEFAULT NULL,
  `file_ktp` varchar(50) DEFAULT NULL,
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(25) NOT NULL DEFAULT '0',
  `namaL` varchar(50) NOT NULL,
  PRIMARY KEY (`id_file`),
  KEY `nik` (`nik`),
  CONSTRAINT `FK_upload_registrasiumkm` FOREIGN KEY (`nik`) REFERENCES `registrasiumkm` (`nik`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- Dumping data for table db_umkm.upload: ~1 rows (approximately)
/*!40000 ALTER TABLE `upload` DISABLE KEYS */;
INSERT INTO `upload` (`file_foto`, `file_ktp`, `id_file`, `nik`, `namaL`) VALUES
	('1.png', '112.PNG', 59, 19650039, 'Wahyu Fitra');
/*!40000 ALTER TABLE `upload` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
