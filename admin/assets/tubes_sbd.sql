/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tubes_sbd

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-06-15 15:48:28
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `dosen_pengampu`
-- ----------------------------
DROP TABLE IF EXISTS `dosen_pengampu`;
CREATE TABLE `dosen_pengampu` (
  `NIP` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of dosen_pengampu
-- ----------------------------
INSERT INTO `dosen_pengampu` VALUES ('920100419930811201', 'Ani Anisyah, S.Pd., M.T.');
INSERT INTO `dosen_pengampu` VALUES ('197507072003121003', 'Dr. Yudi Wibisono, S.T., M.T.');

-- ----------------------------
-- Table structure for `mahasiswa`
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NIM` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `NIP` varchar(255) NOT NULL,
  `SKS_smtr` int(11) NOT NULL,
  `TTD_kaprodi` varchar(255) DEFAULT NULL,
  `hasil_pendaftaran` varchar(255) DEFAULT NULL,
  `id_pembimbing` varchar(255) DEFAULT NULL,
  `program` varchar(255) DEFAULT NULL,
  `konfersi_SKS_MBKM` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('23', '2105673', 'Naufal', 'Ilkom', '5', '920100419930811201', '20', '1', 'Lolos', '1Pb', 'Bangkit', '20');
INSERT INTO `mahasiswa` VALUES ('28', '2101011', 'Hilmy ', 'Ilkom', '5', '197507072003121003', '0', null, null, null, null, null);

-- ----------------------------
-- Table structure for `matkul`
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul` (
  `kode_matkul` varchar(255) NOT NULL,
  `nama_matkul` varchar(255) NOT NULL,
  `SKS_Mata_kuliah_yg_di_konfersi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO `matkul` VALUES ('IK501', 'Pengujian dan Pemeliharaan Perangkat Lunak', '2');
INSERT INTO `matkul` VALUES ('IK511', 'Rekayasa Aplikasi Kemaritiman', '2');
INSERT INTO `matkul` VALUES ('IK521', 'Service Computing Engineering', '2');
INSERT INTO `matkul` VALUES ('IK531', 'Game Application Development', '2');
INSERT INTO `matkul` VALUES ('IK541', 'Teknik Interfacing', '3');
INSERT INTO `matkul` VALUES ('IK551', 'Manajemen Kualitas Perangkat Lunak', '3');
INSERT INTO `matkul` VALUES ('IK561', 'Rekayasa Aplikasi Bisnis', '2');
INSERT INTO `matkul` VALUES ('IK571', 'Rekayasa Informasi', '3');
INSERT INTO `matkul` VALUES ('IK581', 'Software Quality Assurance', '2');
INSERT INTO `matkul` VALUES ('IK591', 'Teknik Kompilasi', '3');
INSERT INTO `matkul` VALUES ('IK502', 'Pengolahan Citra Digital', '2');
INSERT INTO `matkul` VALUES ('IK512', 'Intelligent Games', '2');
INSERT INTO `matkul` VALUES ('IK522', 'Pengolahan Bahasa Alami', '2');
INSERT INTO `matkul` VALUES ('IK532', 'Deep Learning', '3');
INSERT INTO `matkul` VALUES ('IK542', 'Computer Vision', '2');
INSERT INTO `matkul` VALUES ('IK552', 'Internet of Things', '2');
INSERT INTO `matkul` VALUES ('IK562', 'Kontrol dan Robotika', '3');
INSERT INTO `matkul` VALUES ('IK572', 'Expert System', '3');
INSERT INTO `matkul` VALUES ('IK582', 'Speech Recognition and Synthesis', '3');
INSERT INTO `matkul` VALUES ('IK503', 'Teknik Audio dan Video', '2');
INSERT INTO `matkul` VALUES ('IK513', 'Game Programming', '2');
INSERT INTO `matkul` VALUES ('IK523', 'Visual Communication Design', '2');
INSERT INTO `matkul` VALUES ('IK533', 'Audio and Video Manipulation', '2');
INSERT INTO `matkul` VALUES ('IK543', 'Multimedia Production', '3');
INSERT INTO `matkul` VALUES ('IK553', 'Sosial dan Inovasi Media', '2');
INSERT INTO `matkul` VALUES ('IK563', 'Teknik Animasi', '3');
INSERT INTO `matkul` VALUES ('IK573', 'Open Distance Learning', '3');
INSERT INTO `matkul` VALUES ('IK504', 'Mobile Networking', '2');
INSERT INTO `matkul` VALUES ('IK514', 'Teknologi Cloud', '2');
INSERT INTO `matkul` VALUES ('IK524', 'Administrasi Jaringan', '2');
INSERT INTO `matkul` VALUES ('IK534', 'Teknologi Nirkabel', '3');
INSERT INTO `matkul` VALUES ('IK544', 'Komputer Forensik', '2');
INSERT INTO `matkul` VALUES ('IK554', 'Desain Jaringan Telekomunikasi', '2');
INSERT INTO `matkul` VALUES ('IK564', 'Keamanan Sistem Informasi', '3');
INSERT INTO `matkul` VALUES ('IK574', 'Jaringan Komputer Lanjut', '3');
INSERT INTO `matkul` VALUES ('IK505', 'Data Mining and Warehouse', '3');
INSERT INTO `matkul` VALUES ('IK515', 'Computational Statistics', '2');
INSERT INTO `matkul` VALUES ('IK525', 'Sistem Pendukung Keputusan', '3');
INSERT INTO `matkul` VALUES ('IK535', 'Data Visualization', '2');
INSERT INTO `matkul` VALUES ('IK545', 'Big Data Platforms', '2');
INSERT INTO `matkul` VALUES ('IK555', 'Data Analysis', '2');
INSERT INTO `matkul` VALUES ('IK565', 'Time Series Data Analysis', '2');
INSERT INTO `matkul` VALUES ('IK575', 'Data Management', '2');
INSERT INTO `matkul` VALUES ('IK585', 'Financial Technology', '3');
INSERT INTO `matkul` VALUES ('IK506', 'Perencanaan Strategik Sistem Informasi', '3');
INSERT INTO `matkul` VALUES ('IK516', 'Arsitektur dan Integrasi Aplikasi Perusahaan', '2');
INSERT INTO `matkul` VALUES ('IK526', 'Sistem Informasi Akuntansi', '2');
INSERT INTO `matkul` VALUES ('IK536', 'Sistem Informasi Pendidikan', '3');
INSERT INTO `matkul` VALUES ('IK546', 'Audit Sistem Informasi', '2');
INSERT INTO `matkul` VALUES ('IK556', 'IT Infrastructure and Emerging Trends', '2');
INSERT INTO `matkul` VALUES ('IK566', 'Business Intelligence', '2');
INSERT INTO `matkul` VALUES ('IK576', 'Aplikasi Sistem Fungsi Bisnis', '2');
INSERT INTO `matkul` VALUES ('IK586', 'Sistem Informasi Geografis', '3');
INSERT INTO `matkul` VALUES ('IK590', 'Program Pengalaman Lapangan (PPL)', '4');
INSERT INTO `matkul` VALUES ('KU100', 'Pendidikan Agama Islam', '2');
INSERT INTO `matkul` VALUES ('KU101', 'Pendidikan Agama Kristen Protestan', '2');
INSERT INTO `matkul` VALUES ('KU102', 'Pendidikan Agama Kristen Katolik', '2');
INSERT INTO `matkul` VALUES ('KU103', 'Pendidikan Agama Hindu', '2');
INSERT INTO `matkul` VALUES ('KU104', 'Pendidikan Agama Budha', '2');
INSERT INTO `matkul` VALUES ('KU105', 'Pendidikan Kewarganegaraan', '2');
INSERT INTO `matkul` VALUES ('KU106', 'Pendidikan Bahasa Indonesia', '2');
INSERT INTO `matkul` VALUES ('KU109', 'Pendidikan Agama Khonghucu', '2');
INSERT INTO `matkul` VALUES ('KU108', 'Pendidikan Jasmani dan Olahraga*', '2');
INSERT INTO `matkul` VALUES ('KU110', 'Pendidikan Pancasila', '2');
INSERT INTO `matkul` VALUES ('KU119', 'Pendidikan Kesenian*', '2');
INSERT INTO `matkul` VALUES ('KU300', 'Seminar Pendidikan Agama Islam', '2');
INSERT INTO `matkul` VALUES ('KU301', 'Seminar Pendidikan Agama Kristen Protestan', '2');
INSERT INTO `matkul` VALUES ('KU302', 'Seminar Pendidikan Agama Kristen Katolik', '2');
INSERT INTO `matkul` VALUES ('KU303', 'Seminar Pendidikan Agama Hindu', '2');
INSERT INTO `matkul` VALUES ('KU304', 'Seminar Pendidikan Agama Budha', '2');
INSERT INTO `matkul` VALUES ('KU309', 'Seminar Pendidikan Agama Khonghucu', '2');
INSERT INTO `matkul` VALUES ('KU400', 'Kuliah Kerja Nyata (KKN)', '2');

-- ----------------------------
-- Table structure for `matkul_ampu`
-- ----------------------------
DROP TABLE IF EXISTS `matkul_ampu`;
CREATE TABLE `matkul_ampu` (
  `NIM` varchar(255) DEFAULT NULL,
  `kode_matkul` varchar(255) DEFAULT NULL,
  `SKS_Mata_kuliah_yg_di_konfersi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of matkul_ampu
-- ----------------------------
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU304', '2');
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU400', '2');
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU309', '2');
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU304', '2');
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU303', '2');
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU301', '2');
INSERT INTO `matkul_ampu` VALUES ('2105673', 'KU119', '2');
INSERT INTO `matkul_ampu` VALUES ('', '', '0');
INSERT INTO `matkul_ampu` VALUES ('', '', '0');
INSERT INTO `matkul_ampu` VALUES ('', '', '0');

-- ----------------------------
-- Table structure for `pembimbing_mbkm`
-- ----------------------------
DROP TABLE IF EXISTS `pembimbing_mbkm`;
CREATE TABLE `pembimbing_mbkm` (
  `id_pembimbing` varchar(255) NOT NULL,
  `nama_pembimbing` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pembimbing`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pembimbing_mbkm
-- ----------------------------
INSERT INTO `pembimbing_mbkm` VALUES ('1Pb', 'Rosa Ariani Sukamto, M.T.', 'Bangkit');
INSERT INTO `pembimbing_mbkm` VALUES ('1Pism', 'Dr. Rani Megasari, M.T.', 'Indonesian International Student Mobility Awards (IISMA)');
INSERT INTO `pembimbing_mbkm` VALUES ('1PK\r\n', 'Prof. Dr. Munir, M. IT.', 'PROYEK KEMANUSIAAN');
INSERT INTO `pembimbing_mbkm` VALUES ('1Pkkn\r\n', 'Dr. Lala Septem Riza, M.T.', 'kkn');
INSERT INTO `pembimbing_mbkm` VALUES ('1Pkm', 'Dr. Muhammad Nursalman, M.T.', 'Kampus mengajar');
INSERT INTO `pembimbing_mbkm` VALUES ('1Pm', 'Eddy Prasetyo Nugroho, M.T.', 'magang');
INSERT INTO `pembimbing_mbkm` VALUES ('1PMm', 'Dr. H. Enjang Ali Nurdin, M.Kom.\r\n', 'Pertukaran mahasiswa');
INSERT INTO `pembimbing_mbkm` VALUES ('1PP\r\n', 'Dr. Asep Wahyudin, M.T.', 'RISET ATAU PENELITIAN');
INSERT INTO `pembimbing_mbkm` VALUES ('1Ppm', 'Erna Piantari, S.Kom., M.T.', 'Pejuang Muda ');
INSERT INTO `pembimbing_mbkm` VALUES ('1PS\r\n', 'Yudi Ahmad Hambali, M.T.', 'STUDI INDEPENDEN');
INSERT INTO `pembimbing_mbkm` VALUES ('1Pw', 'Herbert Siregar, M.T.', 'wirausaha');
INSERT INTO `pembimbing_mbkm` VALUES ('2Pb', 'Drs. H. Eka Fitrajaya Rahman, M.T.', 'Bangkit');
INSERT INTO `pembimbing_mbkm` VALUES ('2Pism', 'Harsa Wara Prabawa, S.Si., M.Pd.', 'Indonesian International Student Mobility Awards (IISMA)');
INSERT INTO `pembimbing_mbkm` VALUES ('2PK\r\n', 'Nusuki Syari\'ati Fathimah, S.Pd., M.Pd.', 'PROYEK KEMANUSIAAN');
INSERT INTO `pembimbing_mbkm` VALUES ('2Pkkn', 'Enjun Junaeti, M.Si.', 'kkn');
INSERT INTO `pembimbing_mbkm` VALUES ('2Pkm', 'Rizky Rachman J., M.Kom.', 'Kampus mengajar');
INSERT INTO `pembimbing_mbkm` VALUES ('2Pm', 'Yaya Wihardi, S.Kom., M.Kom. .', 'magang');
INSERT INTO `pembimbing_mbkm` VALUES ('2PMm', 'Drs. H. Heri Sutarno, M.T.\r\n', 'Pertukaran mahasiswa\r\n');
INSERT INTO `pembimbing_mbkm` VALUES ('2PP\r\n', 'Rasim M.T', 'RISET ATAU PENELITIAN');
INSERT INTO `pembimbing_mbkm` VALUES ('2Ppm', 'Erlangga, M.T.', 'Pejuang Muda ');
INSERT INTO `pembimbing_mbkm` VALUES ('2PS', 'Jajang Kusnendar, M.T.', 'STUDI INDEPENDEN');
INSERT INTO `pembimbing_mbkm` VALUES ('2Pw', 'Dr. Wahyudin, M.T.', 'wirausaha');

-- ----------------------------
-- View structure for `data_mahasiswa`
-- ----------------------------
DROP VIEW IF EXISTS `data_mahasiswa`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_mahasiswa` AS (select `mahasiswa`.`id` AS `id`,`mahasiswa`.`NIM` AS `NIM`,`mahasiswa`.`nama_mhs` AS `nama_mhs`,`mahasiswa`.`jurusan` AS `jurusan`,`mahasiswa`.`semester` AS `semester`,`mahasiswa`.`SKS_smtr` AS `SKS_smtr`,`mahasiswa`.`TTD_kaprodi` AS `TTD_kaprodi`,`mahasiswa`.`hasil_pendaftaran` AS `hasil_pendaftaran`,`mahasiswa`.`id_pembimbing` AS `id_pembimbing`,`mahasiswa`.`program` AS `program`,`mahasiswa`.`konfersi_SKS_MBKM` AS `konfersi_SKS_MBKM` from `mahasiswa`);
