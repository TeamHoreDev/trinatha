-- -------------------------------------------------------------
-- TablePlus 3.12.0(354)
--
-- https://tableplus.com/
--
-- Database: trinatha
-- Generation Time: 2020-12-25 10:43:46.3790 AM
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
  PRIMARY KEY (`id_alat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `peminjaman` (
  `id_peminjaman` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_vendor` text,
  `status` text,
  PRIMARY KEY (`id_peminjaman`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `penerimaan` (
  `id_penerimaan` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_vendor` text,
  `no_surat_jalan` text,
  PRIMARY KEY (`id_penerimaan`),
  UNIQUE KEY `id_penerimaan` (`id_penerimaan`),
  UNIQUE KEY `id_penerimaan_2` (`id_penerimaan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `pengambilan` (
  `id_pengambilan` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_alat` text,
  `operator` text,
  `jam` text,
  PRIMARY KEY (`id_pengambilan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `pengembalian` (
  `id_pengembalian` varchar(255) NOT NULL,
  `kode_transaksi` text,
  `id_peminjaman` text,
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

INSERT INTO `alat` (`id_alat`, `kode_alat`, `nama_alat`, `deleted`) VALUES
('alat-5fd71ef80ed9a', 'sdasd', 'asdas', '1'),
('alat-5fd72071caef3', 'UArq9enXnG', 'FSlDzSCi2O', '1'),
('alat-5fd7261a21e52', '788', 'eskafator', '0'),
('alat-5fd726313f89e', '784', 'mobil', '1'),
('alat-5fd72ea60ceb9', '784', 'mobil', '0'),
('alatiuhhd', '890', 'truck gede', '0'),
('alatnjasdkb', '908', 'beko kolbeko', '0');

INSERT INTO `peminjaman` (`id_peminjaman`, `kode_transaksi`, `id_vendor`, `status`) VALUES
('out-5fdd32dbbee2a', '02191220022', 'vendor-5fda38c01d45e', '0'),
('out-5fdfc4bae6a83', '02211220026', 'vendor-5fda38c01d45e', '1');

INSERT INTO `penerimaan` (`id_penerimaan`, `kode_transaksi`, `id_vendor`, `no_surat_jalan`) VALUES
('in-5fda61587100a', '01171220001', 'vendor-da32bad', 'qVEsjry1qI'),
('in-5fda61677dbe9', '01171220002', 'vendor-5fda38c01d45e', 'eoxoJ0zCR9'),
('in-5fda623594797', '01171220003', 'vendor-5fda38c01d45e', 'Fsag1EYKD8'),
('in-5fda63e1b2958', '01171220004', 'vendor-5fda38c01d45e', 'ObP2SHew4M'),
('in-5fda644bb048d', '01171220005', 'vendor-da32bad', 'sTAhoNO9rW'),
('in-5fda64a73953b', '01171220006', 'vendor-da32bad', 'BZjhmXv6ww'),
('in-5fda665ca3612', '01171220007', 'vendor-da32bad', '3v0zARpsok'),
('in-5fda7683277b9', '01171220008', 'vendor-da32bad', 'y302OjKoMk'),
('in-5fda7b6b2432a', '01171220012', 'vendor-5fda38c01d45e', 'Fkwb016UoP');

INSERT INTO `pengambilan` (`id_pengambilan`, `kode_transaksi`, `id_alat`, `operator`, `jam`) VALUES
('out-5fdd347ce5f80', '02191220024', 'alatiuhhd', 'usaman', '10:04'),
('out-5fdd3492d912d', '02191220025', 'alatiuhhd', 'usaman', '18:00');

INSERT INTO `pengembalian` (`id_pengembalian`, `kode_transaksi`, `id_peminjaman`) VALUES
('out-5fdd32f0e85eb', '02191220023', 'out-5fdd32dbbee2a'),
('out-5fdfc4e85affe', '02211220027', 'out-5fdfc4bae6a83');

INSERT INTO `solar` (`id_transaksi`, `kode_transaksi`, `jenis_transaksi`, `tangki`, `solar_in`, `solar_out`, `deleted`, `tanggal`, `no_urut`, `stok`) VALUES
('tr-5fda61587b44f', '01171220001', 'penerimaan', '5000', '1500', '0', '0', '2020-12-04', '1', '1500'),
('tr-5fda61677e2da', '01171220002', 'penerimaan', '8000', '3000', '0', '0', '2020-12-04', '2', '3000'),
('tr-5fda6235951f3', '01171220003', 'penerimaan', '5000', '1000', '0', '0', '2020-12-04', '3', '2500'),
('tr-5fda63e1b3491', '01171220004', 'penerimaan', '5000', '500', '0', '0', '2020-12-04', '4', '3000'),
('tr-5fda646226658', '01171220005', 'penerimaan', '8000', '1000', '0', '0', '2020-12-04', '5', '4000'),
('tr-5fda64a739bb4', '01171220006', 'penerimaan', '8000', '500', '0', '1', '2020-12-04', '6', '4500'),
('tr-5fda665ca4048', '01171220007', 'penerimaan', '8000', '1000', '0', '0', '2020-12-04', '7', '5000'),
('tr-5fda768326ba1', '01171220008', 'penerimaan', '8000', '1000', '0', '0', '2020-12-04', '8', '6000'),
('tr-5fda7a1117388', '02171220009', 'pengambilan', '8000', '0', '200', '1', '2020-12-04', '9', '5800'),
('tr-5fda7b3ac752d', '02171220010', 'pengambilan', '8000', '0', '200', '1', '2020-12-04', '10', '5600'),
('tr-5fda7b4c4c496', '02171220011', 'pengambilan', '8000', '0', '200', '0', '2020-12-04', '11', '5600'),
('tr-5fda7b6b23cb5', '01171220012', 'penerimaan', '8000', '400', '0', '0', '2020-12-04', '12', '6000'),
('tr-5fda7c6757bb5', '02171220013', 'pengambilan', '8000', '0', '200', '1', '2020-12-04', '13', '5800'),
('tr-5fda806819fcf', '02171220014', 'pengambilan', '8000', '0', '300', '0', '2020-12-04', '14', '5700'),
('tr-5fda80b13f7a3', '02171220015', 'pengambilan', '8000', '0', '300', '1', '2020-12-04', '15', '5400'),
('tr-5fda80e028ec2', '02171220016', 'peminjaman', '8000', '0', '300', '1', '2020-12-04', '16', '5100'),
('tr-5fda8195ca56c', '02171220017', 'peminjaman', '8000', '0', '300', '0', '2020-12-04', '17', '5400'),
('tr-5fda83018c6a2', '02171220018', 'peminjaman', '8000', '0', '80', '0', '2020-12-04', '18', '5320'),
('tr-5fda840c5a5b9', '02171220019', 'peminjaman', '8000', '0', '80', '1', '2020-12-04', '19', '5240'),
('tr-5fda8416487e6', '02171220020', 'peminjaman', '8000', '0', '80', '1', '2020-12-04', '20', '5160'),
('tr-5fdd3232dda3b', '02191220021', 'peminjaman', '8000', '0', '80', '0', '2020-12-04', '21', '5240'),
('tr-5fdd32dbbe388', '02191220022', 'peminjaman', '8000', '0', '80', '1', '2020-12-04', '22', '5160'),
('tr-5fdd32f0e7c9f', '02191220023', 'pengembalian', '8000', '80', '0', '1', '2020-12-04', '23', '5240'),
('tr-5fdd347ce563a', '02191220024', 'pengambilan', '8000', '0', '80', '0', '2020-12-04', '24', '5080'),
('tr-5fdd3492d8985', '02191220025', 'pengambilan', '8000', '0', '80', '0', '2020-12-04', '25', '5000'),
('tr-5fdfc4bae4e40', '02211220026', 'peminjaman', '8000', '0', '80', '0', '2020-12-04', '26', '4920'),
('tr-5fdfc4e85a5e2', '02211220027', 'pengembalian', '8000', '80', '0', '0', '2020-12-04', '27', '5000');

INSERT INTO `user` (`id_user`, `nik`, `nama_user`, `telepon`, `email`, `role`, `username`, `password`, `deleted`) VALUES
('user-5fd72da4a34de', 'ddWWZxjO4J', 'S340UYBeXK', '0emwMFUzt8', 'tOHIwkNemW', 'Operational', 'CKPOq6mOJUczx', 'b3ccb5316022101ba2be58d921175046', '1'),
('user-5fd72f79e4a0c', '468999', 'N3lwJiSZVy', '168rtc2p8H', 'hk4Ow3AHYq', 'Operational', 'CKPOq6mOJUczxm', 'b3ccb5316022101ba2be58d921175046', '1'),
('user-5fd7333d236fc', '99878', 'leni agusmania', '08111273678', 'leni.agus@gmail.com', '2', 'leniagus', 'c3284d0f94606de1fd2af172aba15bf3', '0'),
('user-5fd7420fde5a4', '123452', 'aceng cahyono', '08212932211', 'aceng.cah@gmail.com', '3', 'aceng', 'c3284d0f94606de1fd2af172aba15bf3', '0'),
('user-5fda3407557f1', '468922', '9B3I5OBcVs', '2313123', 'Q8odI1x80O@fma.com', '2', 'sadad', 'b3ccb5316022101ba2be58d921175046', '0'),
('user-kdasdbh', '46899', 'ade rahmat nurdiyana', '087776451664', 'nurdiyana.ade@gmail.com', '1', 'aderahmatn', 'c3284d0f94606de1fd2af172aba15bf3', '0');

INSERT INTO `vendor` (`id_vendor`, `nama_vendor`, `telepon_vendor`, `deleted`, `alamat`, `pic_vendor`) VALUES
('vendor-5fda38c01d45e', 'PT Gisaka Network', '021992887', '0', 'sindangkasih, majalengka', 'asep nuncacah'),
('vendor-5fda3a3e93615', 'Cj5BCREc2j', '12121232', '1', 'Luxf7FL4Sn', 'xd7RHvCasT'),
('vendor-da32bad', 'PT Cingluh Permata Cemerlang', '0212993812', '0', 'cikupa, tangerang', 'maman');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;