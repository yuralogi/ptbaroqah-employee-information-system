-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table db_karyawan.tbl_gaji
CREATE TABLE IF NOT EXISTS `tbl_gaji` (
  `id_gaji` int NOT NULL,
  `bonus_manager` int DEFAULT NULL,
  `bonus_supervisor` int DEFAULT NULL,
  `bonus_staff` int DEFAULT NULL,
  `pph` int DEFAULT NULL,
  PRIMARY KEY (`id_gaji`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_karyawan.tbl_gaji: ~1 rows (lebih kurang)
INSERT INTO `tbl_gaji` (`id_gaji`, `bonus_manager`, `bonus_supervisor`, `bonus_staff`, `pph`) VALUES
	(1, 50, 50, 30, 5);

-- membuang struktur untuk table db_karyawan.tbl_karyawan
CREATE TABLE IF NOT EXISTS `tbl_karyawan` (
  `id_karyawan` int NOT NULL AUTO_INCREMENT,
  `nik_karyawan` varchar(50) NOT NULL DEFAULT '',
  `nama_karyawan` varchar(35) DEFAULT NULL,
  `alamat_karyawan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_tlp` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jabatan_karyawan` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gaji_pokok` int NOT NULL,
  PRIMARY KEY (`id_karyawan`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_karyawan.tbl_karyawan: ~14 rows (lebih kurang)
INSERT INTO `tbl_karyawan` (`id_karyawan`, `nik_karyawan`, `nama_karyawan`, `alamat_karyawan`, `no_tlp`, `jabatan_karyawan`, `gaji_pokok`) VALUES
	(13, '1173092398000011', 'Ridwan Hanif', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 35', '083890300871', 'Manager', 12000000),
	(14, '1173952785820005', 'Ahmad Jaelani', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 35', '083890380870', 'Manager', 12000000),
	(15, '1173094358000012', 'Raden fatah ', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 34', '081990878090', 'Manager', 12000000),
	(16, '1174094358000002', 'Syahrul Ramadhan', 'Jl. Raya Menceng no. 45', '0819900525355', 'Manager', 12000000),
	(17, '1174347388000012', 'Iqbal Kurniawan', 'Jl. Tegal Alur no.02', '083893345871', 'Manager', 12000000),
	(18, '1173345617300004', 'Ikhsan Malik', 'Jl. Kayu Besar Luar no. 3', '08389035458', 'Supervisor', 8000000),
	(19, '1173567633400004', 'Wahyu Alamsyah', 'Jl. Cengkareng Indah no. 56', '089602546845', 'Supervisor', 8500000),
	(20, '1174565515950001', 'Wisnu Darma Utomo', 'Jl. Bangun Nusa Indah no. 77', '089690300871', 'Supervisor', 7500000),
	(21, '1176034586000011', 'Harun Yahya', 'Jl. Bima Menceng no. 3', '081996357841', 'Staff', 5000000),
	(22, '1175678919358001', 'Gina Fitria', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 2', '083845695845', 'Staff', 6500000),
	(23, '1179053343400001', 'Panji Laksana Prima ', 'Jl. Cengkareng Indah no. 20', '0856231315458', 'Staff', 7500000),
	(24, '1186256560000002', 'Dina Amparan Sajadah', 'Jl. Ciledug Raya no. 7', '0896356458748', 'Staff', 3000000),
	(25, '1175622045780001', 'Gian Respaty', 'Jl. Raden Patah no.89', '0896546852148', 'Staff', 4500000),
	(26, '1175067899000003', 'Tegar Hari Laknoso', 'Jl. Rajeg Raya no.6', '0896354648468', 'Staff', 5000000);

-- membuang struktur untuk table db_karyawan.tbl_karyawan_rekap
CREATE TABLE IF NOT EXISTS `tbl_karyawan_rekap` (
  `id_rekap` int NOT NULL AUTO_INCREMENT,
  `nik_karyawan` varchar(50) DEFAULT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `alamat_karyawan` varchar(50) DEFAULT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `jabatan_karyawan` varchar(50) DEFAULT NULL,
  `gaji_pokok` int DEFAULT NULL,
  `gaji_total` int DEFAULT NULL,
  `waktu_rekap` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_rekap`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_karyawan.tbl_karyawan_rekap: ~15 rows (lebih kurang)
INSERT INTO `tbl_karyawan_rekap` (`id_rekap`, `nik_karyawan`, `nama_karyawan`, `alamat_karyawan`, `no_tlp`, `jabatan_karyawan`, `gaji_pokok`, `gaji_total`, `waktu_rekap`) VALUES
	(1, '1173092398000011', 'Ridwan Hanif', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 35', '083890300871', 'Manager', 12000000, 17400000, '2023-06'),
	(2, '1173952785820005', 'Ahmad Jaelani', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 35', '083890380870', 'Manager', 12000000, 17400000, '2023-06'),
	(3, '1173094358000012', 'Raden fatah ', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 34', '081990878090', 'Manager', 12000000, 17400000, '2023-06'),
	(4, '1174094358000002', 'Syahrul Ramadhan', 'Jl. Raya Menceng no. 45', '0819900525355', 'Manager', 12000000, 17400000, '2023-06'),
	(5, '1174347388000012', 'Iqbal Kurniawan', 'Jl. Tegal Alur no.02', '083893345871', 'Manager', 12000000, 17400000, '2023-06'),
	(6, '1173345617300004', 'Ikhsan Malik', 'Jl. Kayu Besar Luar no. 3', '08389035458', 'Supervisor', 8000000, 11600000, '2023-06'),
	(7, '1173567633400004', 'Wahyu Alamsyah', 'Jl. Cengkareng Indah no. 56', '089602546845', 'Supervisor', 8500000, 12325000, '2023-06'),
	(8, '1174565515950001', 'Wisnu Darma Utomo', 'Jl. Bangun Nusa Indah no. 77', '089690300871', 'Supervisor', 7500000, 10875000, '2023-06'),
	(9, '1176034586000011', 'Harun Yahya', 'Jl. Bima Menceng no. 3', '081996357841', 'Staff', 5000000, 6250000, '2023-06'),
	(10, '1175678919358001', 'Gina Fitria', 'Jl. Daan Mogot Km 21 Komplek Batu Ceper no. 2', '083845695845', 'Staff', 6500000, 8125000, '2023-06'),
	(11, '1179053343400001', 'Panji Laksana Prima ', 'Jl. Cengkareng Indah no. 20', '0856231315458', 'Staff', 7500000, 9375000, '2023-06'),
	(12, '1186256560000002', 'Dina Amparan Sajadah', 'Jl. Ciledug Raya no. 7', '0896356458748', 'Staff', 3000000, 3750000, '2023-06'),
	(13, '1175622045780001', 'Gian Respaty', 'Jl. Raden Patah no.89', '0896546852148', 'Staff', 3000000, 3750000, '2023-06'),
	(14, '1175067899000003', 'Tegar Hari Laknoso', 'Jl. Rajeg Raya no.6', '0896354648468', 'Staff', 5000000, 6250000, '2023-06'),
	(15, '1779654299000012', 'Naufal Bernando', 'Jl. Poris Poglar no.78', '0896789807227', 'Staff', 8000000, 10000000, '2023-06');

-- membuang struktur untuk table db_karyawan.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `role_user` varchar(10) DEFAULT NULL,
  `name_user` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Membuang data untuk tabel db_karyawan.tbl_user: ~2 rows (lebih kurang)
INSERT INTO `tbl_user` (`id_user`, `role_user`, `name_user`, `username`, `password`) VALUES
	(1, 'admin', 'Staff HRD', 'admin@ptbaroqah.com', '$2y$10$xK2wtlSKNuewcVq8Oz7xBeMoao60XYWK/1.d/wy3fE8Boon1Es/UW'),
	(2, 'guest', 'Ridwan HRD', 'ridwan@ptbaroqah.com', '$2y$10$xK2wtlSKNuewcVq8Oz7xBeMoao60XYWK/1.d/wy3fE8Boon1Es/UW');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
