-- -------------------------------------------------------------
-- TablePlus 3.12.2(358)
--
-- https://tableplus.com/
--
-- Database: trinatha
-- Generation Time: 2021-01-23 9:56:59.7690 PM
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
  `kode_alat` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_alat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deleted` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `operator` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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
  `keterangan` text,
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
('out-6001a34c4aa66', 'SOP21010003', 'vendor-5fda38c01d45e', '0', 'alat-5fd72ea60ceb9', 'user-60018197ab507'),
('out-6001d589b7247', 'SOP21010005', 'vendor-5fda38c01d45e', '1', 'alatnjasdkb', 'user-60018197ab507'),
('out-6001d5a6a49d2', 'SOP21010006', 'vendor-5fda38c01d45e', '1', 'alat-5fd72ea60ceb9', 'user-60018197ab507'),
('out-6002fc0dc2030', 'SOP21010004', 'vendor-5fda38c01d45e', '1', 'alat-5fd72ea60ceb9', 'user-60018197ab507');

INSERT INTO `penerimaan` (`id_penerimaan`, `kode_transaksi`, `id_vendor`, `no_surat_jalan`, `id_user`) VALUES
('in-6002eb621429a', 'SI21010001', 'vendor-5fda38c01d45e', '85UrvQnqwK', 'user-60018197ab507'),
('in-6002eb7542638', 'SI21010002', 'vendor-da32bad', 'dhWPzt2KgO', 'user-60018197ab507'),
('in-6002eb8452167', 'SI21010003', 'vendor-5fda38c01d45e', 'eM5klE7v9U', 'user-60018197ab507');

INSERT INTO `pengambilan` (`id_pengambilan`, `kode_transaksi`, `id_alat`, `jam`, `id_user`, `keterangan`) VALUES
('out-6001d28f7f494', 'SO21010003', 'alat-5fd72ea60ceb9', '00:35', 'user-60018197ab507', 'apa kek'),
('out-6001d53205237', 'SO21010004', 'alatiuhhd', '00:47', 'user-60018197ab507', NULL),
('out-60027f9d3c5ed', 'SO21010009', 'alat-5fd72ea60ceb9', '12:53', 'user-60018197ab507', 'untuk penambangan di tangerang'),
('out-6002db0242e19', 'SO21010011', 'alat-5fd72ea60ceb9', '19:24', 'user-60018197ab507', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem'),
('out-6002deb8f0ab9', 'SO21010013', 'alat-5fd72ea60ceb9', '19:39', 'user-60018197ab507', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem'),
('out-60030169e7602', 'SO21010006', 'alat-5fd72ea60ceb9', '22:08', 'user-60018197ab507', 'Lorem Ipsum is simply '),
('out-600301770d2c3', 'SO21010007', 'alatnjasdkb', '22:08', 'user-60018197ab507', 'Lorem Ipsum is simply '),
('out-600442ff1cf35', 'SO21010008', 'alat-6001723c78c1c', '21:00', 'user-60018197ab507', 'untuk penambangan'),
('out-6004430b4d766', 'SO21010009', 'alat-5fd72ea60ceb9', '21:00', 'user-60018197ab507', 'untuk penambangan'),
('out-6004cdae1dcbf', 'SO21010010', 'alatiuhhd', '06:52', 'user-60018197ab507', 'untuk penambangan'),
('out-600c3906c4b10', 'SO21010011', 'alat-6001723c78c1c', '21:56', 'user-600c266d67e74', 'untuk penambangan');

INSERT INTO `pengembalian` (`id_pengembalian`, `kode_transaksi`, `id_peminjaman`, `id_user`) VALUES
('out-6001d645b3119', 'SIP21010007', 'out-6001d589b7247', 'user-60018197ab507'),
('out-6001d73a65722', 'SIP21010008', 'out-6001d5a6a49d2', 'user-60018197ab507'),
('out-6002d4411d141', 'SIP21010009', 'out-6001d5a6a49d2', 'user-60018197ab507'),
('out-6002fc48ea115', 'SIP21010005', 'out-6002fc0dc2030', 'user-60018197ab507');

INSERT INTO `solar` (`id_transaksi`, `kode_transaksi`, `jenis_transaksi`, `tangki`, `solar_in`, `solar_out`, `deleted`, `tanggal`, `no_urut`) VALUES
('tr-6002eb6212ac1', 'SI21010001', 'penerimaan', '5000', '1500', '0', '0', '2021-01-16', '1'),
('tr-6002eb75409f5', 'SI21010002', 'penerimaan', '5000', '1200', '0', '0', '2021-01-16', '2'),
('tr-6002eb84519a7', 'SI21010003', 'penerimaan', '5000', '500', '0', '0', '2021-01-16', '3'),
('tr-6002fc0dafd05', 'SOP21010004', 'peminjaman', '5000', '0', '200', '0', '2021-01-16', '4'),
('tr-6002fc48e4066', 'SIP21010005', 'pengembalian', '8000', '200', '0', '0', '2021-01-16', '5'),
('tr-60030169d7210', 'SO21010006', 'pengambilan', '5000', '0', '200', '0', '2021-01-16', '6'),
('tr-600301770c30b', 'SO21010007', 'pengambilan', '5000', '0', '550', '0', '2021-01-16', '7'),
('tr-600442ff078c2', 'SO21010008', 'pengambilan', '5000', '0', '550', '0', '2021-01-17', '8'),
('tr-6004430b4c18c', 'SO21010009', 'pengambilan', '5000', '0', '200', '0', '2021-01-17', '9'),
('tr-6004cdae086ea', 'SO21010010', 'pengambilan', '5000', '0', '200', '0', '2021-01-18', '10'),
('tr-600c3906b8da3', 'SO21010011', 'pengambilan', '5000', '0', '200', '0', '2021-01-23', '11');

INSERT INTO `user` (`id_user`, `nik`, `nama_user`, `telepon`, `email`, `role`, `username`, `password`, `deleted`) VALUES
('user-60018197ab507', '46899', 'ade rahmat nurdiyana', '087776451664', 'nurdiyana.ade@gmail.com', '1', 'aderahmatn', '21232f297a57a5a743894a0e4a801fc3', '0'),
('user-600c266d67e74', '469922', 'leni', '081117266156', 'leni@gmail.com', '2', 'leni', '21232f297a57a5a743894a0e4a801fc3', '0'),
('user-600c283145235', '469928', 'agus', '081117266786', 'agus@gmail.com', '3', 'agus', '21232f297a57a5a743894a0e4a801fc3', '0');

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