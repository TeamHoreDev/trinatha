-- -------------------------------------------------------------
-- TablePlus 3.12.0(354)
--
-- https://tableplus.com/
--
-- Database: trinatha
-- Generation Time: 2021-01-15 9:49:26.8100 PM
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `alat` (
  `id_alat` varchar(255) NOT NULL,
  `kode_alat` text,
  `nama_alat` text,
  `deleted` text,
  `operator` text,
  PRIMARY KEY (`id_alat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_vendor` text,
  `status` text,
  `id_alat` text,
  `id_user` text,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `penerimaan` (
  `id_penerimaan` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_vendor` text,
  `no_surat_jalan` text,
  `id_user` text,
  PRIMARY KEY (`id_penerimaan`),
  UNIQUE KEY `id_penerimaan` (`id_penerimaan`),
  UNIQUE KEY `id_penerimaan_2` (`id_penerimaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `pengambilan` (
  `id_pengambilan` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_alat` text,
  `jam` text,
  `id_user` text,
  PRIMARY KEY (`id_pengambilan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_peminjaman` text,
  `id_user` text,
  PRIMARY KEY (`id_pengembalian`),
  UNIQUE KEY `id_pengembalian` (`id_pengembalian`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `solar` (
  `id_transaksi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `kode_transaksi` text,
  `jenis_transaksi` text,
  `tangki` text,
  `solar_in` int DEFAULT NULL,
  `solar_out` int DEFAULT NULL,
  `deleted` text,
  `tanggal` date DEFAULT NULL,
  `no_urut` int DEFAULT NULL,
  `stok` int DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  UNIQUE KEY `id_transaksi` (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `user` (
  `id_user` varchar(255) NOT NULL,
  `nik` text,
  `nama_user` text,
  `telepon` text,
  `email` text,
  `role` text,
  `username` text,
  `password` text,
  `deleted` text,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `vendor` (
  `id_vendor` varchar(255) NOT NULL,
  `nama_vendor` text,
  `telepon_vendor` text,
  `deleted` text,
  `alamat` text,
  `pic_vendor` text,
  PRIMARY KEY (`id_vendor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `alat` (`id_alat`, `kode_alat`, `nama_alat`, `deleted`, `operator`) VALUES
('alat-5fd71ef80ed9a', 'sdasd', 'asdas', '1', NULL),
('alat-5fd72071caef3', 'UArq9enXnG', 'FSlDzSCi2O', '1', NULL),
('alat-5fd7261a21e52', '789', 'eskafator', '0', 'asep'),
('alat-5fd726313f89e', '784', 'mobil', '1', NULL),
('alat-5fd72ea60ceb9', '784', 'mobil', '0', 'wawan'),
('alat-5feb24d078398', '784', 'mobil', '1', NULL),
('alat-6001723c78c1c', 'sa99', 'becak', '0', 'udin'),
('alatiuhhd', '890', 'truck gede', '0', 'agus'),
('alatnjasdkb', '908', 'beko kolbeko', '0', 'mahmud');

INSERT INTO `peminjaman` (`id_peminjaman`, `kode_transaksi`, `id_vendor`, `status`, `id_alat`, `id_user`) VALUES
('out-6001a34c4aa66', 'SOP21010003', 'vendor-5fda38c01d45e', '0', 'alat-5fd72ea60ceb9', 'user-60018197ab507');

INSERT INTO `user` (`id_user`, `nik`, `nama_user`, `telepon`, `email`, `role`, `username`, `password`, `deleted`) VALUES
('user-60018197ab507', '46899', 'ade rahmat ganteng banget', '087776451664', 'nurdiyana.ade@gmail.com', '1', 'aderahmatn', '21232f297a57a5a743894a0e4a801fc3', '0');

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `telepon_vendor`, `deleted`, `alamat`, `pic_vendor`) VALUES
('vendor-5fda38c01d45e', 'PT Gisaka Network', '021992887', '0', 'sindangkasih, majalengka', 'asep nuncacah'),
('vendor-5fda3a3e93615', 'Cj5BCREc2j', '12121232', '1', 'Luxf7FL4Sn', 'xd7RHvCasT'),
('vendor-5ff32044c05b0', '6vHxfuv0SP', '12121232', '0', 'mphwAkoBTH', 'yhgfx1Basa'),
('vendor-da32bad', 'PT Cingluh Permata Cemerlang', '0212993812', '0', 'cikupa, tangerang', 'maman');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;