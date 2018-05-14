-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 09:54 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anterin`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `NO` int(100) NOT NULL,
  `no_resi` char(6) NOT NULL,
  `id_pengirim` char(6) NOT NULL,
  `id_penerima` char(6) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `berat_barang` int(11) NOT NULL,
  `ongkir` varchar(255) NOT NULL,
  `tanggal_pengiriman` varchar(255) NOT NULL,
  `jenis_layanan` varchar(255) NOT NULL,
  `status_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`NO`, `no_resi`, `id_pengirim`, `id_penerima`, `nama_barang`, `berat_barang`, `ongkir`, `tanggal_pengiriman`, `jenis_layanan`, `status_barang`) VALUES
(14, '222821', '459158', '932886', 'Handphone', 2, '60000', '13/05/2018', 'Regular', 'pending'),
(13, '309405', '404620', '109026', 'kunci', 10, '150000', '13/05/2018', 'Regular', 'pending'),
(17, '333484', '614840', '205895', 'Handphone', 3, '90000', '14/05/2018', 'Regular', 'pending'),
(11, '335730', '131941', '471041', '', 0, '0', '13/05/2018', '', 'pending'),
(9, '380757', '140490', '241597', '', 0, '0', '13/05/2018', '', 'pending'),
(15, '394970', '619353', '130744', 'Handphone', 3, '105000', '13/05/2018', 'Cepat', 'pending'),
(7, '439780', '166279', '199379', '', 0, '0', '13/05/2018', '', 'pending'),
(8, '516571', '556771', '828202', '', 0, '0', '13/05/2018', '', 'pending'),
(12, '583294', '359742', '231284', 'Handphone', 2, '60000', '13/05/2018', 'Regular', 'pending'),
(5, '611588', '390462', '914117', '', 0, '0', '13/05/2018', '', 'pending'),
(6, '678260', '731541', '260209', '', 0, '0', '13/05/2018', '', 'pending'),
(4, '708365', '159216', '346268', 'Handphone', 3, '90000', '13/05/2018', 'Regular', 'pending'),
(3, '753791', '191397', '189591', 'laptop', 2, '50000', '13/05/2018', 'Cepat', 'pending'),
(10, '848638', '403188', '506719', '', 0, '0', '13/05/2018', '', 'pending'),
(1, '899063', '146145', '367334', 'aa', 2, '60000', '12/05/2018', 'Regular', 'pending'),
(16, '904433', '838394', '303082', 'Manusia', 3, '90000', '13/05/2018', 'Regular', 'pending'),
(2, '959922', '102668', '162426', 'aa', 2, '60000', '12/05/2018', 'Regular', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_pengguna` varchar(255) NOT NULL,
  `feedback` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_pengguna`, `feedback`) VALUES
('159216', 10),
('191397', 5),
('359742', 10),
('404620', 5),
('614840', 10),
('619353', 5),
('838394', 10),
('952905', 5),
('958677', 10);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `kota_asal` varchar(255) NOT NULL,
  `kota_tujuan` varchar(255) NOT NULL,
  `biaya` varchar(255) NOT NULL,
  `jenis_layanan` varchar(255) NOT NULL,
  `id_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`kota_asal`, `kota_tujuan`, `biaya`, `jenis_layanan`, `id_harga`) VALUES
('Malang', 'Malang', '15000', 'Regular', 1),
('Malang', 'Surabaya', '20000', 'Regular', 2),
('Malang', 'Jakarta', '30000', 'Regular', 3),
('Surabaya', 'Surabaya', '15000', 'Regular', 4),
('Surabaya', 'Malang', '20000', 'Regular', 5),
('Surabaya', 'Jakarta', '30000', 'Regular', 6),
('Jakarta', 'Jakarta', '15000', 'Regular', 7),
('Jakarta', 'Malang', '30000', 'Regular', 8),
('Jakarta', 'Surabaya', '30000', 'Regular', 9),
('Malang', 'Malang', '20000', 'Cepat', 10),
('Malang', 'Surabaya', '25000', 'Cepat', 11),
('Malang', 'Jakarta', '35000', 'Cepat', 12),
('Surabaya', 'Surabaya', '20000', 'Cepat', 13),
('Surabaya', 'Malang', '25000', 'Cepat', 14),
('Surabaya', 'Jakarta', '35000', 'Cepat', 15),
('Jakarta', 'Jakarta', '20000', 'Cepat', 16),
('Jakarta', 'Malang', '35000', 'Cepat', 17),
('Jakarta', 'Suabaya', '35000', 'Cepat', 18);

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `idKurir` char(6) NOT NULL,
  `noResi` char(6) NOT NULL,
  `namaKurir` varchar(255) NOT NULL,
  `statusKurir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`idKurir`, `noResi`, `namaKurir`, `statusKurir`) VALUES
('1', '', 'Tony Stark', 'Available'),
('2', '', 'Peter Parker', 'Available'),
('3', '', 'Peter Quill', 'Avaliable'),
('4', '', 'Steve Rogers', 'Avaliable'),
('5', '', 'Bucky Barnes', 'Avaliable');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('julian', 'rahasia'),
('manager', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id_penerima` char(6) NOT NULL,
  `no_resi` char(6) NOT NULL,
  `namaPenerima` varchar(255) NOT NULL,
  `alamatPenerima` varchar(255) NOT NULL,
  `kodePosTujuan` varchar(5) NOT NULL,
  `kotaTujuan` varchar(255) NOT NULL,
  `provinsiTujuan` varchar(255) NOT NULL,
  `notelTujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `no_resi`, `namaPenerima`, `alamatPenerima`, `kodePosTujuan`, `kotaTujuan`, `provinsiTujuan`, `notelTujuan`) VALUES
('109026', '309405', 'hareh', 'malang jaya', '21212', 'DKI Jakarta', 'Surabaya', '1111'),
('130744', '394970', 'joel', 'asd', '65155', 'DKI Jakarta', 'Jakarta', '13131'),
('162426', '959922', 'ada', 'ada', '123', 'Jawa Barat', 'Malang', '123'),
('189591', '753791', 'nov', 'malang jaya', '15154', 'Jawa Timur', 'Malang', '01001'),
('199379', '439780', '', '', '', '', '', ''),
('205895', '333484', 'NOVITA', 'malang jaya', '123', 'DKI Jakarta', 'Jakarta', '08777817470'),
('231284', '583294', 'NOVITA', 'MAYJEND PANJAITAN', '65155', 'Jawa Timur', 'Malang', '08777817470'),
('241597', '380757', '', '', '', '', '', ''),
('260209', '678260', '', '', '', '', '', ''),
('303082', '904433', 'adad', '123', '65155', 'Jawa Timur', 'Surabaya', '08777817470'),
('346268', '708365', '123', 'MAYJEND PANJAITAN', '21212', 'DKI Jakarta', 'Jakarta', '13131'),
('367334', '899063', 'ada', 'ada', '123', 'Jawa Barat', 'Malang', '123'),
('471041', '335730', '', '', '', '', '', ''),
('506719', '848638', '', '', '', '', '', ''),
('687946', '317283', 'ada', 'ada', '123', 'Jawa Barat', 'Malang', '123'),
('828202', '516571', '', '', '', '', '', ''),
('914117', '611588', '', '', '', '', '', ''),
('932886', '222821', 'JUL', 'malang jaya', '21212', 'DKI Jakarta', 'Jakarta', '13131');

-- --------------------------------------------------------

--
-- Table structure for table `pengirim`
--

CREATE TABLE `pengirim` (
  `idPengirim` char(6) NOT NULL,
  `no_resi` char(6) NOT NULL,
  `namaPengirim` varchar(255) NOT NULL,
  `alamatPengirim` varchar(255) NOT NULL,
  `kodePosAsal` varchar(5) NOT NULL,
  `provinsiAsal` varchar(255) NOT NULL,
  `kotaAsal` varchar(255) NOT NULL,
  `notelAsal` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengirim`
--

INSERT INTO `pengirim` (`idPengirim`, `no_resi`, `namaPengirim`, `alamatPengirim`, `kodePosAsal`, `provinsiAsal`, `kotaAsal`, `notelAsal`) VALUES
('102668', '959922', 'a', 'a', '123', 'Jawa Barat', 'Jakarta', '123'),
('131941', '335730', '', '', '', '', '', ''),
('140490', '380757', '', '', '', '', '', ''),
('146145', '899063', 'a', 'a', '123', 'Jawa Barat', 'Jakarta', '123'),
('159216', '708365', 'ju', 'bogorara', '16155', 'Jawa Timur', 'Malang', '0231'),
('166279', '439780', '', '', '', '', '', ''),
('191397', '753791', 'julian', 'danau bogor', '16115', 'Jawa Timur', 'Surabaya', '0812345'),
('359742', '583294', 'TIMOTHY JULIAN', 'DANAU BOGOR RAYA', '16155', 'DKI Jakarta', 'Jakarta', '0812345'),
('390462', '611588', '', '', '', '', '', ''),
('403188', '848638', '', '', '', '', '', ''),
('404620', '309405', 'TIMOTHY JULIAN', 'ADAD', '123', 'Jawa Timur', 'Surabaya', '12333'),
('459158', '222821', 'TIMOTHY JULIAN', 'DANAU BOGOR RAYA', '16155', 'Jawa Timur', 'Surabaya', '1233'),
('556771', '516571', '', '', '', '', '', ''),
('614840', '333484', 'TIMOTHY JULIAN', 'DANAU BOGOR RAYA', '123', 'DKI Jakarta', 'Surabaya', '123'),
('619353', '394970', 'TIMOTHY JULIAN', 'DANAU BOGOR RAYA', '16155', 'Jawa Timur', 'Surabaya', '1233'),
('731541', '678260', '', '', '', '', '', ''),
('733726', '317283', 'a', 'a', '123', 'Jawa Barat', 'Jakarta', '123'),
('838394', '904433', 'juliannnnn', 'bogorara', '123', 'DKI Jakarta', 'Jakarta', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`no_resi`),
  ADD UNIQUE KEY `id_pengirim` (`id_pengirim`,`id_penerima`),
  ADD UNIQUE KEY `NO` (`NO`),
  ADD KEY `id_penerima` (`id_penerima`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`idKurir`),
  ADD KEY `noResi` (`noResi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id_penerima`),
  ADD UNIQUE KEY `no_resi` (`no_resi`);

--
-- Indexes for table `pengirim`
--
ALTER TABLE `pengirim`
  ADD PRIMARY KEY (`idPengirim`),
  ADD UNIQUE KEY `no_resi` (`no_resi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `NO` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_penerima`) REFERENCES `penerima` (`id_penerima`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_pengirim`) REFERENCES `pengirim` (`idPengirim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

