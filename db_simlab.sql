/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_simlab

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-23 16:02:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tb_group
-- ----------------------------
DROP TABLE IF EXISTS `tb_group`;
CREATE TABLE `tb_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_code` varchar(20) DEFAULT NULL,
  `group_description` varchar(200) DEFAULT NULL,
  `status_active` varchar(10) DEFAULT NULL,
  `user_created` varchar(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_modified` varchar(20) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `group_code` (`group_code`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_group
-- ----------------------------
INSERT INTO `tb_group` VALUES ('1', 'System Admin', 'system administrator', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('2', 'PPC', 'petugas penerima contoh uji', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('3', 'Lab', 'analis lab', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('4', 'Penyelia', 'Penyelia Lab', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('5', 'Kelayakan', 'Anggota Tim Kelayakan', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('6', 'Management', 'MT/MM/MP', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('7', 'Admin Lab', 'Administrasi', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('8', 'Pemohon', 'pemohon', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');
INSERT INTO `tb_group` VALUES ('9', 'Report', 'Report', 'active', '113', '0000-00-00 00:00:00', '113', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for tb_pemohon
-- ----------------------------
DROP TABLE IF EXISTS `tb_pemohon`;
CREATE TABLE `tb_pemohon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `alamat` text,
  `telepon` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `contact_person` varchar(100) NOT NULL,
  `nomor_contact_person` varchar(200) NOT NULL,
  `status_active` varchar(10) DEFAULT NULL,
  `user_created` varchar(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_modified` varchar(20) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_pemohon
-- ----------------------------
INSERT INTO `tb_pemohon` VALUES ('1', 'makassar@bkipm.kkp.go.id', 'Balai Besar KIPM Makassar', 'UPT BKIPM', 'Jl. Dakota No. 24 Sudiang Raya - Makassar', '(0411) 874793', '(0411) 855766', '', '', 'active', 'rinomasril', '2015-01-14 10:05:00', null, null);
INSERT INTO `tb_pemohon` VALUES ('2', 'priok@bkipm.kkp.go.id', 'Balai KIPM Kelas I Jakarta II', 'UPT BKIPM', 'Jln. Enggano Raya No. 16 Tanjung Priok, Jakarta - Utara', '021-43910470', '021-43903659', '', '', 'active', 'rino', '2015-01-06 10:07:26', null, null);
INSERT INTO `tb_pemohon` VALUES ('3', 'selaparang@bkipm.kkp.go.id', 'Balai KIPM Kelas II Mataram', 'UPT BKIPM', 'Jl. Adi Sucipto, Kec. Ampenan Mataram Nusa Tenggara Barat', '(0370) 6194701 - 6194601', '(0370) 6194703', '', '', 'active', 'rino', '2015-01-06 10:57:52', null, null);
INSERT INTO `tb_pemohon` VALUES ('4', 'jakarta1@bkipm.kkp.go.id', 'Balai Besar KIPM Jakarta I', 'UPT BKIPM', 'Gedung Karantina Pertanian Bandara Soekarno-Hatta, Tangerang 19120, Banten.', '(021) 5507932, 55915059', '(021) 5506738', '', '', 'active', 'rino', '2015-01-07 11:48:47', null, null);
INSERT INTO `tb_pemohon` VALUES ('5', 'dasimahazzahra@yahoo.co.id', 'Neneng Dasimah', 'Perorangan', 'Kp. Muara gembong RT. 001/RW. 004 Desa Pantai Sederhana Kec. Muara Gembong Kab. Bekasi', '085715981983', '-', '', '', 'active', 'rino', '2015-01-07 13:02:01', null, null);
INSERT INTO `tb_pemohon` VALUES ('6', 'munaadi.munaadi@cpp.co.id', 'PT. Central Proteina Prima', 'Perusahaan', 'Jl. Pulau Pinang V no. 01 Kawasan Industri Medan-II', '(061)-6871752', '(061)-6871752', '', '', 'active', 'rino', '2015-01-11 11:17:30', null, null);
INSERT INTO `tb_pemohon` VALUES ('7', 'buski@bkipm.kkp.go.id', 'Laboratorium Balai Uji Standar KIPM', 'UPT BKIPM', 'Jl. Harapan I No. 1A Setu Cipayung Jakarta Timur', '(021)-8451378', '(021)-8448523', '', '', 'active', 'rino', '2015-01-07 08:57:01', null, null);
INSERT INTO `tb_pemohon` VALUES ('8', 'mamuju@bkipm.kkp.go.id', 'Stasiun KIPM Kelas II Mamuju', 'UPT BKIPM', 'Jl.Martadinata,Lorong Nelayan,Pelabuhan Ferry Simboro Mamuju - Sulawesi Barat.', '(0246) 22434', '(0246) 22434', '', '', 'active', 'rino', '2015-01-14 10:25:12', null, null);
INSERT INTO `tb_pemohon` VALUES ('9', 'bandung@bkipm.kkp.go.id', 'Stasiun KIPM Kelas II Bandung', 'UPT BKIPM', 'Jl. Ciawitali No. 44 Kota Cimahi – Jawa Barat', '(022) 6649004', '(022) 6649004', '', '', 'active', 'rino', '2015-01-14 10:57:48', null, null);
INSERT INTO `tb_pemohon` VALUES ('10', 'seawprld@yahoo.com', 'PT. Sea World Indonesia', 'Perusahaan', 'Taman Impian Jaya Ancol, jl.Lodan Timur No.7 Jakarta 14430', '021 6410080', '021 6410079', '', '', 'active', 'rino', '2015-01-22 09:06:24', null, null);
INSERT INTO `tb_pemohon` VALUES ('11', 'stellamustika.ap@gmail.com', 'Stella Mustika A. P', 'Perorangan', 'UNIVERSITAS AIRLANGGA Kampus C Mulyorejo Surabaya', '081234141080', '-', '', '', 'active', 'rino', '2015-01-24 08:23:41', null, null);
INSERT INTO `tb_pemohon` VALUES ('12', 'emilclassy@gmail.com', 'Emil Wahdi', 'Perorangan', 'Perumahan Tatia Asri JB 19 Cijujung Sukaraja Bogor', '08128456525', '08128456525', '', '', 'active', 'muhammad', '2015-02-02 13:56:05', null, null);
INSERT INTO `tb_pemohon` VALUES ('13', 'bkijuanda@yahoo.co.id', 'Balai KIPM Kelas I Surabaya I', 'UPT BKIPM', 'Jl. Raya Bandar Udara Ir. H. Juanda No. 23 - Sidoarjo 61254 - Jawa Timur', '+6231 - 8688099 / 8688118 / 8678471', '+6231 - 8688099 / 8688118 / 8678471', '', '', 'active', 'muhammad', '2015-02-02 14:38:22', null, null);
INSERT INTO `tb_pemohon` VALUES ('14', 'medan1@bkipm.kkp.go.id', 'Balai KIPM Kelas I Medan I', 'UPT BKIPM', 'Jl. Karantina Ikan Desa Aras Kabu, Kecamatan Beringin Deli Serdang 20552', '061 77158315', '061 77158315', '', '', 'active', 'rino', '2015-02-11 13:53:37', null, null);
INSERT INTO `tb_pemohon` VALUES ('15', 'vivajaya_int@yahoo.co.id', 'PT Vivajaya Internasional', 'Perusahaan', 'Jl. Patriot Gg. Alfalah No 89 RT 001 RW 021 Jaka Sampurna Bekasi \r\nJawa Barat 17145', '021 8854117', '021 8850027', '', '', 'active', 'rino', '2015-02-12 10:32:47', null, null);
INSERT INTO `tb_pemohon` VALUES ('16', 'ski2cirebon@yahoo.co.id', 'Stasiun KIPM Kelas II Cirebon', 'UPT BKIPM', 'Jl. Cideng Indah No.236A Kedawung Cirebon', '0231 248857', '0231 248857', '', '', 'active', 'rino', '2015-02-12 14:31:35', null, null);
INSERT INTO `tb_pemohon` VALUES ('17', 'akreditasi_monitoring@yahoo.com', 'Pusat Sertifikasi Mutu KHP - bkipm', 'Instansi', 'jl. Medan Merdeka timur No 16\r\nJakarta Pusat', '021 3500149', '021 3500149', '', '', 'active', 'rino', '2015-02-13 16:02:12', null, null);
INSERT INTO `tb_pemohon` VALUES ('18', 'nurvitha29ayu@yahoo.co.id', 'Dinas kelautan dan Perikanan Provinsi Kalimantan Barat', 'Instansi', 'Jl. Sutan Sahrir No. 16 PO BOX 17\r\nPontianak 78116', '(0561) 732521', '(0561) 766073', '', '', 'active', 'muhammad', '2015-02-16 10:26:48', null, null);
INSERT INTO `tb_pemohon` VALUES ('19', 'banten@bkipm.kkp.go.id', 'Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Kelas II Merak', 'Instansi', 'Jl. Raya Tol Merak KM 01 No. 01 Pelabuhan Penyebrangan Merak-Banten', '0254 - 573286 / 573309', '0254 -573286', '', '', 'active', 'muhammad', '2015-02-17 10:44:05', null, null);
INSERT INTO `tb_pemohon` VALUES ('20', 'nibung@bkipm.kkp.go.id', 'Stasiun KIPM Kelas II Tanjung Balai Asahan', 'UPT BKIPM', 'Jl. Pelabuhan Besar Teluk Nibung - Tanjung Balai Asahan P.O.BOX.03 Sumatera Utara 21332', '0623 95004', '0623 95004', '', '', 'active', 'rino', '2015-02-23 08:59:11', null, null);
INSERT INTO `tb_pemohon` VALUES ('21', 'pontianak@bkipm.kkp.go.id', 'Stasiun KIPM Kelas I Pontianak', 'UPT BKIPM', 'Jl. Arteri Supadio KM. 18 Pontianak 78391', '0561 725427', '0561 725421', '', '', 'active', 'rino', '2015-02-23 09:15:22', null, null);
INSERT INTO `tb_pemohon` VALUES ('22', 'bali@bkipm.kkp.go.id', 'Balai KIPM Kelas I Denpasar', 'UPT BKIPM', 'Jl. SunsetRoad No. 777, Kuta - Badung _ Bali 80361', '0361 8061116', '0361 8477427', '', '', 'active', 'rino', '2015-02-23 09:29:00', null, null);
INSERT INTO `tb_pemohon` VALUES ('23', 'noviana@yahoo.com', 'Noviana Dewi', 'Perorangan', 'Jl. Enggano Raya No.16 Tanjung Priok', '021 43910470', '021 43903659', '', '', 'active', 'rino', '2015-02-26 14:18:17', null, null);
INSERT INTO `tb_pemohon` VALUES ('24', 'ski2lampung@yahoo.co.id', 'Stasiun KIPM Kelas I Lampung', 'UPT BKIPM', 'Jl. Jawa no.5 Pelabuhan Laut Panjang Bandar Lampung 35241-A', '0721 32487', '0721 32487', '', '', 'active', 'rino', '2015-03-02 14:35:10', null, null);
INSERT INTO `tb_pemohon` VALUES ('25', 'ski_kdi@yahoo.com', 'Stasiun KIPM Kelas I Kendari', 'UPT BKIPM', 'Jl. Wolter Monginsidi No. 82A-Ranomeeto Kendari', '0401 3196383', '0401 3196383', '', '', 'active', 'rino', '2015-03-03 08:48:15', null, null);
INSERT INTO `tb_pemohon` VALUES ('26', 'entikong@bkipm.go.id', 'Stasiun KIPM Kelas I Entikong', 'UPT BKIPM', 'Jl. Raya Entikong Km.0 Entikong, Kec. Entikong, Kab. Sanggau KALBAR 78557', '0564 31845', '0564 31846', '', '', 'active', 'rino', '2015-03-03 10:01:23', null, null);
INSERT INTO `tb_pemohon` VALUES ('27', 'ski2_jogja@yahoo.com', 'Stasiun KIPM Kelas I Yogyakarta', 'UPT BKIPM', 'Jl. Kenanga No.26 Maguwoharjo, Depok, Sleman, Yogyakarta', '0274 489390', '0274 489390', '', '', 'active', 'rino', '2015-03-05 09:24:13', null, null);
INSERT INTO `tb_pemohon` VALUES ('28', 'devy140911065@yahoo.com', 'Devy Rahmawati Putri', 'Perorangan', 'Jl. Kalimas baru no 86 surabaya', '081703316113', '0313283886', '', '', 'active', 'rino', '2015-03-09 09:16:58', null, null);
INSERT INTO `tb_pemohon` VALUES ('29', 'ski-banten@bkipm.kkp.go.id', 'Stasiun KIPM Kelas II Merak', 'UPT BKIPM', 'Jl. Raya Tol Merak Km 01 No.01 Pelabuhan Penyebrangan Merak-Banten', '0254 573286', '0254 573286', '', '', 'active', 'rino', '2015-03-09 10:08:53', null, null);
INSERT INTO `tb_pemohon` VALUES ('30', 'doddy_ito@consultant.com', 'Doddy Ito', 'Perorangan', 'Jl. Bambu Kuning Selatan No. 21 RT 01/02 Kelurahan Bambu Apus, Kecamatan Cipayung, Jakarta Timur', '02198196939', '02198196939', '', '', 'active', 'muhammad', '2015-03-10 13:43:34', null, null);
INSERT INTO `tb_pemohon` VALUES ('31', 'staninfo_bblbatam@yahoo.com', 'Balai Perikanan Budidaya Laut Batam', 'Instansi', 'Jl.Raya Barelang, Jembatan III Pulau Setoko - Batam 60-Sekupang', '0778 7027623', '0778 7027624', '', '', 'active', 'rino', '2015-03-18 13:33:55', null, null);
INSERT INTO `tb_pemohon` VALUES ('32', 'pangkalpinang@bkipm.kkp.go.id', 'Stasiun KIPM Kelas I Pangkalpinang', 'UPT BKIPM', 'Jl. Soekarno Hatta Bandara Depati Amir Pangkalpinang', '0717 434756', '0717 434756', '', '', 'active', 'rino', '2015-03-23 08:41:55', null, null);
INSERT INTO `tb_pemohon` VALUES ('33', 'ski_sorong@yahoo.co.id', 'Stasiun KIPM Kelas II Sorong', 'UPT BKIPM', 'Jl. A.Yani - Kuda Laut (Kompleks Pelabuhan Perikanan Pantai) Sorong', '0951 325671', '.951 332522', '', '', 'active', 'rino', '2015-03-25 08:33:54', null, null);
INSERT INTO `tb_pemohon` VALUES ('34', 'kikansamrat@yahoo.com', 'Balai KIPM Kelas II Manado', 'UPT BKIPM', 'Jalan Baru Tugu Adipura Paniki Bawah Manado', '0431 814628', '0431 814628', '', '', 'active', 'rino', '2015-03-25 08:54:00', null, null);
INSERT INTO `tb_pemohon` VALUES ('35', 'bbp2hp@bbp2hp.p2hp.kkp.go.id', 'Balai Besar Pengujian Penerapan Hasil Perikanan', 'Instansi', 'Jl. Raya Setu No. 70 Kel. Setu Kec.Cipayung Jakarta Timur 13880', '02184998429', '02184999360', '', '', 'active', 'muhammad', '2015-03-25 13:26:51', null, null);
INSERT INTO `tb_pemohon` VALUES ('36', 'labbbapstbd@gmail.com', 'Balai Perikanan Budidaya Air Payau Situbondo', 'Instansi', 'Jl. Raya Pecaron PO.BOX 5 Panarukan Situbondo68351', '0338673328', '0338390299', '', '', 'active', 'muhammad', '2015-03-26 12:48:07', null, null);
INSERT INTO `tb_pemohon` VALUES ('37', 'achmaduswah@gmail.com', 'Tuntun/Heri', 'Perorangan', 'Jl. Mini III RT 12/03 Bambu Apus Jakarta Timur', '081310135490', '081310135490', '', '', 'active', 'muhammad', '2015-03-27 08:27:43', null, null);
INSERT INTO `tb_pemohon` VALUES ('38', 'belawan@bkipm.kkp.go.id', 'Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Kelas I Medan II', 'Instansi', 'Jl. Pelabuhan Perikanan Samudra Gabion Belawan 20414', '061 6945753', '061 6942676', '', '', 'active', 'muhammad', '2015-03-31 10:46:57', null, null);
INSERT INTO `tb_pemohon` VALUES ('39', 'febbie.kurnia@ymail.com', 'Magang UNPAD', 'Lain-lain', 'Jl. Raya Bandung Sumedang KM 21, Jatinangor 40600', '022 - 87701519', '022 - 87701518', '', '', 'active', 'muhammad', '2015-04-07 09:39:47', null, null);
INSERT INTO `tb_pemohon` VALUES ('40', 'fatiyaulfa@ymail.com', 'Magang UNPAD', 'Lain-lain', 'Jl. Raya Bandung Sumedang KM 21, Jatinangor 40600', '022 - 87701519', '022 - 87701518', '', '', 'active', 'muhammad', '2015-04-07 10:25:35', null, null);
INSERT INTO `tb_pemohon` VALUES ('41', 'febbiekurnia@ymail.com', 'Febby Arry Kurniawati Unpad', 'Perorangan', 'Jl. Raya Bandung Sumedang KM 21, Jatinangor 40600', '022 - 87701519', '022 - 87701518', '', '', 'active', 'muhammad', '2015-04-07 11:20:09', null, null);
INSERT INTO `tb_pemohon` VALUES ('42', 'fatiya.ulfa@ymail.com', 'Fatiya Ulfa Dwi Amelia Unpad', 'Perorangan', 'Jl. Raya Bandung Sumedang KM 21, Jatinangor 40600', '022 - 87701519', '022 - 87701518', '', '', 'active', 'muhammad', '2015-04-07 11:43:40', null, null);
INSERT INTO `tb_pemohon` VALUES ('43', 'etampubolon72@yahoo.com', 'CV. Karunia Abadi Semesta', 'Perusahaan', 'Jl. Bina Marga No. 58 Ceger Jakarta Timur', '081296714521', '-', '', '', 'active', 'muhammad', '2015-04-20 11:47:31', null, null);
INSERT INTO `tb_pemohon` VALUES ('44', 'adamposters@yahoo.com', 'Adam Harun', 'Perorangan', 'Desa Langgen Sari Kec. Blanakan , Kab. Subang', '082320786861', '082320786861', '', '', 'active', 'rino', '2015-04-22 07:41:36', null, null);
INSERT INTO `tb_pemohon` VALUES ('45', 'lbsiim@yahoo.com', 'PT. Corona Prajitna', 'Perusahaan', 'Jl. Gedong Panjang No.68 A Jakarta Utara', '021 66602126', '021 6696105', '', '', 'active', 'rino', '2015-04-22 13:50:49', null, null);
INSERT INTO `tb_pemohon` VALUES ('46', 'tanjungpinang@bkipm.kkp.go.id', 'Stasiun KIPM Kelas II Tanjungpinang', 'UPT BKIPM', 'Jl. Yos Sudarso, Batu Hitam Tanjungpinang', '0771 314172', '0771 313552', '', '', 'active', 'rino', '2015-04-23 09:12:27', null, null);
INSERT INTO `tb_pemohon` VALUES ('47', 'ski.hangnadim@gmail.com', 'Stasiun KIPM Kelas I Batam', 'UPT BKIPM', 'Jl. M. Nahar. Batam Centre,  Kota Batam, Kepulauan Riau 29464', '0778 - 470320', '0778 - 470321', '', '', 'active', 'muhammad', '2015-05-04 10:33:14', null, null);
INSERT INTO `tb_pemohon` VALUES ('48', 'skissk2_pku@yahoo.co.id', 'Stasiun KIPM Kelas I Pekanbaru', 'UPT BKIPM', 'Jalan Rawa Indah Pekanbaru', '0761 - 674626', '0761 - 763358', '', '', 'active', 'muhammad', '2015-05-05 09:32:59', null, null);
INSERT INTO `tb_pemohon` VALUES ('49', 'skiluwukbanggai@gmail.com', 'Stasiun Kelas II Luwukbanggai', 'UPT BKIPM', 'Jl. Gunung Tompotika No. 20 Luwuk, Kab. Banggai Sulawesi Tengah, Kode Pos 94714', '0461-324671', '0461-325483', '', '', 'active', 'muhammad', '2015-05-07 11:49:14', null, null);
INSERT INTO `tb_pemohon` VALUES ('50', 'bbpbl.lampung@gmail.com', 'Balai Besar Perikanan Budidaya Laut (BBPBL) Lampung', 'Instansi', 'Jalan Yos Sudarso, Desa Hanura, Padang Cermin, Pesawaran 35454', '0721 - 4001379', '0721 - 4001110', '', '', 'active', 'muhammad', '2015-05-11 13:19:31', null, null);
INSERT INTO `tb_pemohon` VALUES ('51', 'lppmhpgorontalo@yahoo.com', 'Balai Pengendalian dan Pengujian Mutu Hasil Perikanan (BPPMHP) Gorontalo', 'Instansi', 'Jl. Brigjen Piola Isa No. 126 Kel. Wongkaditi Kota Utara, Gorontalo 96122', '0435 - 831601', '-', '', '', 'active', 'muhammad', '2015-05-19 14:02:45', null, null);
INSERT INTO `tb_pemohon` VALUES ('52', 'bkismb2@gmail.com', 'Balai KIPM Kelas II Palembang', 'UPT BKIPM', 'Jl. Akses Bandara Int’l SMB II Palemban', '0711 - 7080089', '0711 - 385027', '', '', 'active', 'muhammad', '2015-05-19 14:22:05', null, null);
INSERT INTO `tb_pemohon` VALUES ('53', 'info.bppi@kkp.go.id', 'Balai Penelitian Pemuliaan Ikan', 'Instansi', 'Jalan Raya 2 Sukamandi KM 99 Pantura - Subang, Jawa Barat 41263', '0260 520500', '0260 520662', '', '', 'active', 'rino', '2015-06-03 09:50:56', null, null);
INSERT INTO `tb_pemohon` VALUES ('54', 'bbpbapjpr@gmail.com', 'Balai Besar Perikanan Budidaya Air Payau Jepara', 'Instansi', 'Jl. Cik Lanang Bulu Jepara 59418', '0291 591125', '0291 591724', '', '', 'active', 'rino', '2015-06-08 09:43:15', null, null);
INSERT INTO `tb_pemohon` VALUES ('55', 'vitis_febriani@yahoo.com', 'VItis', 'Perorangan', 'Jl. Sangkar Mas Kupang NTT', '081339353700', '081339353700', '', '', 'active', 'rino', '2015-06-11 14:09:08', null, null);
INSERT INTO `tb_pemohon` VALUES ('56', 'bima@bkipm.kkp.go.id', 'Stasiun KIPM Kelas II Bima', 'UPT BKIPM', 'Jl. Sultan Salahuddin, Palibelo, Bima, Nusa Tenggara Barat 84173', '0374 647256', '0374 81588', '', '', 'active', 'rino', '2015-06-16 10:22:25', null, null);
INSERT INTO `tb_pemohon` VALUES ('57', 'aheirina@yahoo.com', 'Anna Heirina', 'Perorangan', 'Jl. Palembang- Prabumulih KM.32 Indralaya (01) 30662', '082186799696', '082186799696', '', '', 'active', 'rino', '2015-06-16 10:48:31', null, null);
INSERT INTO `tb_pemohon` VALUES ('58', 'heppi.0707@gmail.com', 'Heppi Maryati', 'Perorangan', 'Gramapuri Tamansari Blok G6 No.10\r\nCibitung Bekasi', '081314418387', '-', '', '', 'active', 'rino', '2015-06-22 09:13:07', null, null);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `status_active` varchar(10) DEFAULT NULL,
  `user_created` varchar(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_modified` varchar(20) DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('2', 'mp1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('3', 'mm1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('4', 'mt1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('5', 'nekro1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('6', 'lab1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, 'SystemAdmin', '2015-01-23 12:17:28');
INSERT INTO `tb_user` VALUES ('7', 'penyelia1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('8', 'verifikasi1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('9', 'ma1', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('10', 'SystemAdmin', 'e69ed9fedd9b3b458257e81b344ce592', null, 'active', '', null, 'SystemAdmin', '2015-01-23 12:06:10');
INSERT INTO `tb_user` VALUES ('11', 'info@perikanan.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('12', 'MP-01', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('13', 'herald@123.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'inactive', '', null, 'SystemAdmin', '2015-01-23 12:09:48');
INSERT INTO `tb_user` VALUES ('14', 'budi@123.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'inactive', '', null, 'SystemAdmin', '2015-01-20 14:41:27');
INSERT INTO `tb_user` VALUES ('15', 'nama@pemohon.web', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('16', 'asd@asd.asd', '827ccb0eea8a706c4c34a16891f84e7b', null, 'inactive', 'ppc1', '2014-09-23 00:00:00', 'SystemAdmin', '2015-01-20 14:41:32');
INSERT INTO `tb_user` VALUES ('17', 'rezky@123.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'ppc1', '2014-09-25 14:09:42', '', null);
INSERT INTO `tb_user` VALUES ('18', 'sulistia', 'b6034e2aec7cf857f86ec2322eee1180', 'Sulistia Trikora Astuti', 'active', 'herald@123.com', '2014-10-02 15:56:10', 'sulistia', '2015-02-11 08:58:46');
INSERT INTO `tb_user` VALUES ('19', 'emei', '803f1b26f5be9366f2d33e38bd5a5715', 'Emei Widyastuti', 'active', 'herald@123.com', '2014-10-02 15:57:53', 'emei', '2015-02-05 08:39:11');
INSERT INTO `tb_user` VALUES ('20', 'rizkyamalia', '3af38a90540cf848b6c05a9dbe60256b', 'Rizky Amalia Rahman', 'active', 'herald@123.com', '2014-10-02 15:58:17', 'rizkyamalia', '2015-02-11 08:01:02');
INSERT INTO `tb_user` VALUES ('21', 'haririyah', '827ccb0eea8a706c4c34a16891f84e7b', 'Haririyah', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('22', 'adenurdin', '827ccb0eea8a706c4c34a16891f84e7b', 'Ade Nurdin', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('23', 'khumaira', '827ccb0eea8a706c4c34a16891f84e7b', 'Khumaira Puspasari', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('24', 'slamet', '843b0107288bada66092b3a2e430d6a0', 'Slamet Andriyanto', 'active', '', null, 'slamet', '2015-01-26 13:34:40');
INSERT INTO `tb_user` VALUES ('25', 'insariani', '827ccb0eea8a706c4c34a16891f84e7b', 'Insariani', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('27', 'firma', '827ccb0eea8a706c4c34a16891f84e7b', 'Firma', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('28', 'sari', 'db48bd64bb443bee7a5922264a796ec5', 'Sari Utami Hidayati', 'active', '', null, 'sari', '2015-02-11 08:58:12');
INSERT INTO `tb_user` VALUES ('29', 'ardiani', '827ccb0eea8a706c4c34a16891f84e7b', 'Ardiani', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('30', 'saratiara', '827ccb0eea8a706c4c34a16891f84e7b', 'Sara Tiara Karusha', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('31', 'heppi', 'ec4211597b08b6e04edd1b1c4bae2718', 'Heppi Maryati', 'active', '', null, 'heppi', '2015-02-03 11:03:56');
INSERT INTO `tb_user` VALUES ('32', 'salendra', '827ccb0eea8a706c4c34a16891f84e7b', 'Salendra Agung Nugroho', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('33', 'tatik', '90b9862ab2682aa8af72195bc217f598', 'Tatik Sumirah', 'active', '', null, 'tatik', '2015-02-12 08:28:20');
INSERT INTO `tb_user` VALUES ('34', 'chusnul', '827ccb0eea8a706c4c34a16891f84e7b', 'Chusnul Chotimah', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('35', 'tina', '827ccb0eea8a706c4c34a16891f84e7b', 'Tina Yunia Asri', 'active', '', null, 'SystemAdmin', '2015-02-05 08:54:17');
INSERT INTO `tb_user` VALUES ('36', 'freddy', '827ccb0eea8a706c4c34a16891f84e7b', 'Freddy Riatmono', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('37', 'ronald', '827ccb0eea8a706c4c34a16891f84e7b', 'Ronald Nainggolan', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('38', 'sigit', '827ccb0eea8a706c4c34a16891f84e7b', 'Sigit Hendra Irawan Purnomo', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('39', 'rini', '827ccb0eea8a706c4c34a16891f84e7b', 'Rini Widyawati', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('40', 'trisniaty', '827ccb0eea8a706c4c34a16891f84e7b', 'Trisniaty Trikora Astuti', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('41', 'zakiyah', 'a4967055760f4af13d87d29f7667a90d', 'Zakiyah Widowati', 'active', '', null, 'zakiyah', '2015-02-03 09:44:13');
INSERT INTO `tb_user` VALUES ('42', 'tony', '827ccb0eea8a706c4c34a16891f84e7b', 'Tony Silaban', 'active', '', null, 'tony', '2015-04-20 07:22:30');
INSERT INTO `tb_user` VALUES ('43', 'sitti', 'ae3889c8d6cb168bfc3588fcb6413553', 'Sitti Rahmawati', 'active', '', null, 'sitti', '2015-02-12 11:04:17');
INSERT INTO `tb_user` VALUES ('44', 'dita', 'ee4a744ad3056989e8da0938459c3a56', 'Dita Rustianti', 'active', '', null, 'dita', '2015-03-12 10:05:37');
INSERT INTO `tb_user` VALUES ('45', 'hasriani', '827ccb0eea8a706c4c34a16891f84e7b', 'Hasriani', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('46', 'iswadi', '94845a3ed9806f1cef14973830dd8c39', 'Iswadi Idris', 'active', '', null, 'iswadi', '2015-01-21 14:13:47');
INSERT INTO `tb_user` VALUES ('47', 'rino', '9e3a133ebb3177bfbe61a9b6ada723bc', 'Rino Masril', 'active', '', null, 'rino', '2015-01-26 13:46:15');
INSERT INTO `tb_user` VALUES ('48', 'wadis', '827ccb0eea8a706c4c34a16891f84e7b', 'Wadis', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('49', 'muhammad', '9e3a133ebb3177bfbe61a9b6ada723bc', 'Muhammad', 'active', '', null, 'muhammad', '2015-02-02 15:11:31');
INSERT INTO `tb_user` VALUES ('50', 'reza', '827ccb0eea8a706c4c34a16891f84e7b', 'Reza Armando Triputra ', 'active', '', null, '', null);
INSERT INTO `tb_user` VALUES ('51', 'hutomo', '827ccb0eea8a706c4c34a16891f84e7b', 'Hutomo Widiatmojo', 'active', null, null, null, null);
INSERT INTO `tb_user` VALUES ('52', 'makassar@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-14 10:05:00', null, null);
INSERT INTO `tb_user` VALUES ('53', 'priok@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-14 10:07:26', null, null);
INSERT INTO `tb_user` VALUES ('54', 'selaparang@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-06 10:57:52', null, null);
INSERT INTO `tb_user` VALUES ('55', 'jakarta1@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-07 11:48:47', null, null);
INSERT INTO `tb_user` VALUES ('56', 'dasimahazzahra@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-07 13:02:01', null, null);
INSERT INTO `tb_user` VALUES ('57', 'munaadi.munaadi@cpp.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-11 11:17:31', null, null);
INSERT INTO `tb_user` VALUES ('58', 'buski@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-07 08:57:01', null, null);
INSERT INTO `tb_user` VALUES ('59', 'mamuju@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-14 10:25:12', null, null);
INSERT INTO `tb_user` VALUES ('60', 'bandung@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-14 10:57:48', null, null);
INSERT INTO `tb_user` VALUES ('61', 'seawprld@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-22 09:06:24', null, null);
INSERT INTO `tb_user` VALUES ('62', 'nurlaila', '827ccb0eea8a706c4c34a16891f84e7b', 'Nurlaila', 'active', 'SystemAdmin', '2015-01-26 13:36:21', null, null);
INSERT INTO `tb_user` VALUES ('63', 'stellamustika.ap@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-01-24 08:23:41', null, null);
INSERT INTO `tb_user` VALUES ('64', 'emilclassy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-02-02 13:56:05', null, null);
INSERT INTO `tb_user` VALUES ('65', 'bkijuanda@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-02-02 14:38:22', null, null);
INSERT INTO `tb_user` VALUES ('67', 'medan1@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-11 13:53:38', null, null);
INSERT INTO `tb_user` VALUES ('68', 'vivajaya_int@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-12 10:32:47', null, null);
INSERT INTO `tb_user` VALUES ('69', 'ski2cirebon@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-12 14:31:35', null, null);
INSERT INTO `tb_user` VALUES ('70', 'akreditasi_monitoring@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-13 16:02:12', null, null);
INSERT INTO `tb_user` VALUES ('71', 'nurvitha29ayu@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-02-16 10:26:48', null, null);
INSERT INTO `tb_user` VALUES ('72', 'banten@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-02-17 10:44:05', null, null);
INSERT INTO `tb_user` VALUES ('73', 'nibung@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-23 08:59:12', null, null);
INSERT INTO `tb_user` VALUES ('74', 'pontianak@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-23 09:15:22', null, null);
INSERT INTO `tb_user` VALUES ('75', 'bali@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-23 09:29:00', null, null);
INSERT INTO `tb_user` VALUES ('76', 'noviana@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-02-26 14:18:17', null, null);
INSERT INTO `tb_user` VALUES ('77', 'ski2lampung@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-02 14:35:10', null, null);
INSERT INTO `tb_user` VALUES ('78', 'ski_kdi@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-03 08:48:15', null, null);
INSERT INTO `tb_user` VALUES ('79', 'entikong@bkipm.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-03 10:01:23', null, null);
INSERT INTO `tb_user` VALUES ('80', 'ski2_jogja@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-05 09:24:14', null, null);
INSERT INTO `tb_user` VALUES ('81', 'devy140911065@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-09 09:16:58', null, null);
INSERT INTO `tb_user` VALUES ('82', 'ski-banten@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-09 10:08:53', null, null);
INSERT INTO `tb_user` VALUES ('83', 'doddy_ito@consultant.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-03-10 13:43:34', null, null);
INSERT INTO `tb_user` VALUES ('84', 'ekanurdian', '827ccb0eea8a706c4c34a16891f84e7b', 'Eka Nurdian', 'active', 'SystemAdmin', '2015-03-16 14:29:07', null, null);
INSERT INTO `tb_user` VALUES ('85', 'staninfo_bblbatam@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-18 13:33:55', null, null);
INSERT INTO `tb_user` VALUES ('86', 'pangkalpinang@bkipm.kkp.go.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-23 08:41:55', null, null);
INSERT INTO `tb_user` VALUES ('87', 'ski_sorong@yahoo.co.id', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-25 08:33:54', null, null);
INSERT INTO `tb_user` VALUES ('88', 'kikansamrat@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'rino', '2015-03-25 08:54:01', null, null);
INSERT INTO `tb_user` VALUES ('90', 'labbbapstbd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-03-26 12:48:07', null, null);
INSERT INTO `tb_user` VALUES ('91', 'achmaduswah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-03-27 08:27:43', null, null);
INSERT INTO `tb_user` VALUES ('94', 'fatiyaulfa@ymail.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-04-07 10:25:36', null, null);
INSERT INTO `tb_user` VALUES ('97', 'etampubolon72@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b', null, 'active', 'muhammad', '2015-04-20 11:47:31', null, null);
INSERT INTO `tb_user` VALUES ('113', 'firdausk', '017eef8839e5a0bd21ab422195ee6164', 'Kingking Firdaus', 'active', 'firdausk', '2015-06-22 09:13:07', 'SystemAdmin', '2015-02-05 08:54:17');
