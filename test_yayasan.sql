-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 05:45 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_yayasan`
--

-- --------------------------------------------------------

--
-- Table structure for table `asnaf`
--

CREATE TABLE `asnaf` (
  `asnaf_id` int(11) NOT NULL,
  `nama_pemohon` varchar(200) NOT NULL,
  `kad_pengenalan` varchar(200) NOT NULL,
  `jantina` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `daerah` varchar(200) NOT NULL,
  `poskod` varchar(200) NOT NULL,
  `bandar` varchar(200) NOT NULL,
  `negeri` varchar(200) NOT NULL,
  `no_bimbit` varchar(200) NOT NULL,
  `no_rumah` varchar(200) NOT NULL,
  `kesihatan` varchar(200) NOT NULL,
  `hurai` varchar(200) NOT NULL,
  `jawatan` varchar(200) NOT NULL,
  `sektor` varchar(200) NOT NULL,
  `jenis_pekerjaan` varchar(200) NOT NULL,
  `pendapatan` varchar(200) NOT NULL,
  `nama_pemegang` varchar(200) NOT NULL,
  `nama_bank` varchar(200) NOT NULL,
  `no_bank` varchar(200) NOT NULL,
  `as_date` date NOT NULL,
  `duit_asnaf` int(11) NOT NULL,
  `a_status` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asnaf`
--

INSERT INTO `asnaf` (`asnaf_id`, `nama_pemohon`, `kad_pengenalan`, `jantina`, `alamat`, `daerah`, `poskod`, `bandar`, `negeri`, `no_bimbit`, `no_rumah`, `kesihatan`, `hurai`, `jawatan`, `sektor`, `jenis_pekerjaan`, `pendapatan`, `nama_pemegang`, `nama_bank`, `no_bank`, `as_date`, `duit_asnaf`, `a_status`, `user_id`) VALUES
(1, 'lukmanhakim', '1234', 'Male', 'sp', 'sungai petani', '12345', 'sp', 'kedah', '0123456', '0123456897', 'Healthy', '-', 'ceo', 'Self-employed', 'asd', '213123', 'ahmad daisuki', 'asdas', '12312321', '2023-11-25', 0, 'Reject', 2),
(8, 'Ahmad Syami bin Ismahadi', '000223-10-2013', 'Male', 'no 6, jalan Au 5c/2, Lembah Keramat', 'kuala lumpur', '54200', 'kuala lumpur', 'selangor', '0196533694', '-', 'Healthy', '-', 'kerja sendiri (ayah)', 'Self-employed', 'businessman', 'RM2500 kebawah', 'Ahmad Syami bin Ismahadi', 'Bank Kerjasama Rakyat', '220465116300', '2022-01-19', 0, 'Successfull', 6),
(9, 'Aimie Hazwanie Binti Hisyam', '020328-07-0482', 'Female', 'No 3675, lorong 16/6, taman lagenda, 09400, padang serai', '-', '09400', 'kulim', 'kedah', '0139001014', '-', 'Healthy', '-', '-', 'Self-employed', 'berniaga', '800', 'Aimie Hazwanie Binti Hisyam', 'Bank Islam', '02011024452242', '2022-01-19', 0, 'In Process', 7),
(10, 'Amiruddin Qhadri Bin Ishak', '020817-02-0427', 'Male', 'Kg. Pida 5, Mukim Putat', '-', '06100', 'Kodiang', 'Kedah', '019-8080449', '-', 'Healthy', '-', '-', 'Self-employed', 'petani', 'RM 300', 'Amiruddin Qhadri Bin Ishak', 'Public Bank', '6941407206', '2022-01-19', 0, 'In Process', 8),
(11, 'Amirul Ikhwan Bin Azmain', '010626-14-0363', 'Male', 'Blok F-9-6 PPR Intan Baiduri, Taman Intan Baiduri', '-', '52100', 'kuala lumpur', 'Wilayah Persekutuan', '0172515662', '-', 'Healthy', '-', 'Mekanik', 'Private', '-', 'RM 1000', 'Amirul Ikhwan Bin Azmain', 'Bank Islam Malaysia', '14069020531912', '2022-01-19', 0, 'In Process', 9),
(12, 'Fatin Aqillah Binti Mohammad Adzuan', '020617-02-0692', 'Female', 'C11, Kampung Bukit Chepat, Mukim Air Putih', '-', '06700', 'Pendang', 'Kedah', '0167529320', '-', 'Healthy', '-', '-', 'Self-employed', 'Berniaga', 'RM 1500', 'Fatin Aqillah Binti Mohammad Adzuan', 'BSN', '0299541000456775', '2022-01-19', 0, 'In Process', 10),
(13, 'Fatin Hazirah Binti Mohd Mokhter', '020503-10-1232', 'Male', '180, Taman Sri Putra, Bakar Arang', '-', '08000', 'Sungai Petani', 'Kedah', '011 64071941', '-', 'Healthy', '-', '-', 'Self-employed', 'Pesara', 'RM 300', 'Fatin Hazirah Binti Mohd Mokhter', 'Bank Islam', '02114020203175', '2022-01-19', 0, 'In Process', 11),
(15, 'Haziqq Anas Bin Anuar', '011001-15-0099', 'Male', 'No 179, Jalan SM5A/20, Fasa 2D', '-', '32040', 'Seri Manjung', 'Perak', '0189506560', '05-6882285', 'Healthy', '-', '-', 'Self-employed', 'Tidak Bekerja', 'RM 0', 'Haziqq Anas Bin Anuar', 'Bank Islam Malaysia', '08059023800440', '2022-01-19', 0, 'In Process', 12),
(16, 'Haiqal Huda Bin Mohammad Azni', '010130-11-0101', 'Male', 'A8-05, BLOK A Glenview Villa Jalan 49 OFF, Jalan Kuari, Taman Pinggiran Cheras', '-', '56100', 'kuala lumpur', 'W. Persekutuan Kuala Lumpur', '011 2741 8095', '03-28579347', 'Goverment', '-', 'Peniaga- Pemilik', 'Self-employed', 'Peniaga Makanan', 'RM 1500', 'Haiqal Huda Bin Mohammad Azni', 'Maybank', '112241189616', '2022-01-19', 0, 'In Process', 13),
(17, 'Khairunnisa Auni Binti Mohd Sidik', '021003-02-0334', 'Female', 'No 56F, Kampung Banggol Penyengat', '-', '09700', 'Karangan', 'Kedah', '0184640523', '0195028265', 'Healthy', '-', 'Pemandu Lori', 'Private', '-', 'RM 1414.05', 'Khairunnisa Auni Binti Mohd Sidik', 'Bank Islam Malaysia', '02057027767736', '2022-01-19', 0, 'In Process', 14),
(18, 'Khalilah Binti Ahmad', '020203-02-0086', 'Female', 'NO 1003, PIDA 3, Kampung Manggol Bongor, Megat Dewa', '-', '06100', 'Kodiang', 'Kedah', '017-5549159', '012-4753180', 'Healthy', '-', '-', 'Self-employed', '-', 'RM 500', 'Khalilah Binti Ahmad', 'Bank Islam Malaysia', '02039025007506', '2022-01-19', 0, 'In Process', 15),
(19, 'Mashithah Binti Abdul Rahman', '001015-02-0990', 'Female', 'F21, Kampung Telok Jawa, Mukim Padang Hang', '-', '06570', 'Alor Setar', 'Kedah', '018-4660624', '04-4562000', 'Healthy', '-', 'Pekerja Am', 'Private', '-', 'RM 900', 'Mashithah Binti Abdul Rahman', 'Bank Islam Malaysia', '02105020311330', '2022-01-19', 0, 'In Process', 16),
(20, 'Mohammad Aminnuddin Bin Hasnan', '020424-07-1039', 'Male', 'Plot 17/18, Alor Merah, Sungai Dua, 13800, Butterworth, Pulau Pinang', '-', '13800', 'Butterworth', 'Pulau Pinang', '016-9710768', '-', 'Healthy', '-', '-', 'Self-employed', '-', '0', 'Mohammad Aminnuddin Bin Hasnan', 'CIMB Bank', '7625510711', '2022-01-19', 0, 'In Process', 17),
(21, 'Muhammad Akmal Nizam Bin Mazlan', '980321-07-5609', 'Male', '4756, Lorong 6, Kampung Lahar Tiang', '-', '13210', 'Kepala Batas', 'Pulau Pinang', '011 5570 8960', '04-576 2060', 'Healthy', '-', 'Pesawah', 'Self-employed', 'Pesawah', 'RM 1000.00', 'Muhammad Akmal Nizam Bin Mazlan', 'Bank Islam Malaysia', '07043026883681', '2022-01-19', 0, 'In Process', 18),
(22, 'Muhammad Danial Bin Mohd Azrul Affendi', '010813-07-0209', 'Male', '249, Jalan Padang, Kampung Pinang, Kamunting', '', '34600', 'taiping ', 'Perak', '018-2811430', '-', 'Healthy', '-', 'Pekebun', 'Self-employed', 'Pertanian', 'RM 500', 'Muhammad Danial Bin Mohd Azrul Affendi', 'Bank Islam Malaysia', '14-069-02-013142-2', '2022-01-19', 0, 'In Process', 19),
(23, 'Muhammad Adam Iman Bin Zuny Norazly', '011208-02-0865', 'Male', '5276, Bagan Berat, Telok Air Tawar', '-', '13050', 'Buuterworth', 'Pulau Pinang', '019-2614281', '019-4114281 (Ibu)', 'Healthy', '-', 'Estimator', 'Private', '-', 'RM 400', 'Muhammad Adam Iman Bin Zuny Norazly', 'BANK Rakyat', '220231440426', '2022-01-20', 0, 'In Process', 20),
(24, 'Muhammad Aidil Bin Suhaili', '000930-08-0263', 'Male', 'No 49, Jalan 22, Taman Sri Jelok', '-', '43000', 'Kajang ', 'Selangor', '017-6420621', '-', 'Healthy', '-', '-', 'Self-employed', 'Tidak Bekerja', '-', 'Muhammad Aidil Bin Suhaili', 'Bank Islam Malaysia', '12092023136180', '2022-01-20', 0, 'In Process', 21),
(25, 'Muhammad Amirul Hakim Bin Mohd Nurdin', '010128-02-1003', 'Male', 'No 1, Guar Chempedak', '-', '08800', 'Guar Chempedak', 'Kedah', '011 62423921', '-', 'Healthy', '-', '-', 'Self-employed', 'Peniaga Kedai Makan (Ibu)', 'RM 800', 'Muhammad Amirul Hakim Bin Mohd Nurdin', 'Bank Islam Malaysia', '02084020521575', '2022-01-20', 0, 'In Process', 22),
(26, 'Muhammad Arif Hakimi Bin Yusman', '020613-08-0823', 'Male', 'No 26, Lorong BMR, Jalan Sungai Kob, Karangan, Kedah', '-', '09700', 'Karangan', 'Kedah', '019-5366784', '017-5317041', 'Healthy', '-', 'Polis Bantuan', 'Private', '-', 'RM 200.00', 'Muhammad Arif Hakimi Bin Yusman', 'Bank Islam Malaysia', '02057027766965', '2022-01-20', 0, 'In Process', 23),
(27, 'Muhammad Danial Azrol Bin Noorazizan', '020106-02-0877', 'Male', 'No 51, Kampung Tanjung Setol, Jalan Masjid, Bukit Jenun, 06720, Pendang, Kedah', '-', '06720', 'Pendang ', 'Kedah', '011-62478803', '-', 'Healthy', '-', 'Bomba Dan Penyelamat Malaysia', 'Goverment', '-', 'RM 3000', 'Muhammad Danial Azrol Bin Noorazizan', 'Bank Islam Malaysia', '02084020593087', '2022-01-20', 0, 'In Process', 24),
(28, 'Muhammad Faris Zahidi Bin Mohd Fakhrey', '021116-02-0509', 'Male', 'no 14 D, Kampung Sukamari', '-', '06700', 'Pendang', 'Kedah', '013-8336273', '04-759 3954', 'Healthy', '-', '-', 'Self-employed', 'Berniaga', 'RM 1500', 'Muhammad Faris Zahidi Bin Mohd Fakhrey', 'Bank Islam Malaysia', '02-105-02-037754-0', '2022-01-20', 0, 'In Process', 25),
(29, 'Muhammad Haiqal Bin Jamil', '000523-02-0095', 'Male', '1786, Perkampungan Berapit, 1400, Bukit Mertajam, Pulau Pinang', '-', '14000', 'Bukit Mertajam', 'Pulau Pinang', '014-2491404', '-', 'Healthy', '-', 'Buruh Am (Bapa)', 'Private', '-', 'RM 200', 'Muhammad Haiqal Bin Jamil', 'Maybank', '107200003701', '2022-01-20', 0, 'In Process', 26),
(30, 'Muhammad Ikmal Bin Ismail', '010321-0230045', 'Male', '390 A, Kuarters Guru Sek Keb. Dulang, Dulang Kecil', '-', '06900', 'Yan', 'Kedah', '013-467 7197', '-', 'Healthy', '-', 'Bapa Oku Tidak Bekerja', 'Self-employed', 'Bapa Oku Tidak Bekerja', '-', 'Muhammad Ikmal Bin Ismail', 'Bank Islam', '02141022177199', '2022-01-20', 0, 'In Process', 27),
(32, 'Muhammad Izzat Aiman Bin Abdul Nasir', '021107-02-0443', 'Male', 'Perkampungan Lahar Buaya, Mukim Pengkalan Kundur', '-', '05400', 'Alor Setar', 'Kedah', '017-422 6076', '-', 'Healthy', '-', 'JuruTeknik', 'Private', '-', 'RM 1300', 'Muhammad Izzat Aiman Bin Abdul Nasir', 'Bank Islam Malaysia', '02105020384269', '2022-01-20', 0, 'In Process', 28),
(33, 'Muhammad Khaizal Bin Zulkifli', '020214-02-0049', 'Male', '36, Kampung Baru Tepi Laut, Ayer Hitam', '-', '06150', 'Jitra', 'Kedah', '017-5071532', '-', 'Healthy', '-', '-', 'Self-employed', 'petani', 'RM 500', 'Muhammad Khaizal Bin Zulkifli', 'Bank Islam Malaysia', '02039024905377', '2022-01-20', 0, 'In Process', 29),
(34, 'Muhammad Nur Iman Bin Md Saad', '000518-14-1159', 'Male', 'No 17, Jalan TPS 3/1, Taman Pelangi Semenyih', '-', '43500', 'Semenyih', 'Selangor', '017-3272542', '-', 'Healthy', '-', 'Pesara', 'Goverment', '-', 'RM 1145', 'Muhammad Nur Iman Bin Md Saad', 'Bank Islam Malaysia', '12195020236902', '2022-01-20', 0, 'In Process', 30),
(35, 'Muhammad Reezal Faris Bin Hamzah', '010609-02-0087', 'Male', 'No. 1B, Jalan Sungai Jagong, Sungai Layar', '-', '08000', 'Sungai Petani', 'Kedah', '019-5560510', '-', 'Healthy', '-', 'Operator Kilang', 'Private', '-', 'RM 1200', 'Muhammad Reezal Faris Bin Hamzah', 'Maybank', '152050571519', '2022-01-20', 0, 'In Process', 31),
(36, 'Muhammad Ridhwan Bin Khairul Anuar', '010118-02-0429', 'Male', 'No 10, Kampung Darat, Mukim Tebengau, Kuala Kedah', '-', '06600', 'Alor Setar', 'Kedah', '016-5707835', '016-6237562', 'Healthy', '-', '-', 'Self-employed', 'Pesawah', 'RM 500', 'Muhammad Ridhwan Bin Khairul Anuar', 'Bank Islam Malaysia', '02105020350412', '2022-01-20', 0, 'In Process', 32),
(37, 'Muhammad Shukri Bin Abdul Aziz', '011204-08-0491', 'Male', 'No 4A, Jalan Pecah Batu, Kampung Bongor', '-', '33320', 'Gerik', 'Perak', '016 4536143', '-', 'Healthy', '-', '-', 'Self-employed', 'Pembawa Lori', 'RM 0.00', 'Muhammad Shukri Bin Abdul Aziz', 'Bank Islam Malaysia', '02020029097967', '2022-01-20', 0, 'In Process', 33),
(38, 'Muhammad Syabil Naim Bin Samsuddin', '010703-02-0489', 'Male', '351, Jalan Perdana 8/9, Bandar Perdana, Sungai Petani, 08000, Kedah', '-', '08000', 'sungai petani', 'Kedah', '01140492624', '044370093', 'Healthy', '-', 'Pesara Tentera', 'Goverment', '-', '-', ' Muhammad Syabil Naim Bin Samsuddin', 'Bank Islam Malaysia', '02020029083626', '2022-01-20', 0, 'In Process', 34),
(39, 'Muhammad Syahmie Bin Sam', '010220-07-0481', 'Male', 'N-G-5, Pangsapuri Uda, Tanjung Tokong', '-', '10470', 'Georgetown', 'Pulau Pinang', '011-18690415', '-', 'Healthy', '-', '-', 'Self-employed', 'Pengasuh', 'RM 0.00', 'Muhammad Syahmie Bin Sam', 'Bank Islam Malaysia', '07025027103943', '2022-01-20', 0, 'In Process', 35),
(40, 'Munawwarah Binti Mat Isa ', '020531-02-0552', 'Female', 'Lot 6, Kampung Tepi Taman Gurun Jaya', '-', '08300', 'Gurun', 'Kedah', '016-4074612', '-', 'Healthy', '-', '-', 'Self-employed', 'suri rumah (ibu-persara terbitan)', 'RM 1000', 'Munawwarah Binti Mat Isa', 'Bank Islam Malaysia', '02-084-02-052524-9', '2022-01-20', 0, 'In Process', 36),
(41, 'Noor Syamimie Binti Muhamad Sofian Ang', '011225-07-0354', 'Female', 'No 568, Jalan Mutaiara 5/3, Taman Mutiara Sungai Kob', '-', '09700', 'Karangan', 'Kedah', '014-245-8006', '-', 'Healthy', '-', 'Guru Memandu', 'Private', '-', 'RM 1300', 'Noor Syamimie Binti Muhamad Sofian Ang', 'Bank Islam Malaysia', '02057022772260', '2022-01-20', 0, 'In Process', 37),
(42, 'Nor Azwani Binti Mohamad Zainal Abidin', '010129', 'Female', 'No.16 k, Parit Ali Kalang, Telok, Medan', '-', '34300', 'Bagan Serai', 'Perak', '0111-2144-9704', '-', 'Healthy', '-', '-', 'Self-employed', 'kerja kampung', 'RM 600', 'Nor Azwani Binti Mohamad Zainal Abidin', 'Bank Islam Malaysia', '080-7702-0389-311', '2022-01-20', 0, 'In Process', 38),
(43, 'Nor Saidatul Najwa Binti Sarifudin', '001027-10-0664', 'Female', 'No.28, Solok Setia 2C, Taman, Jalan Johan Setia', '-', '41200', 'Klang ', 'Selangor', '017-6629036', '', 'Healthy', '-', '-', 'Self-employed', 'Berniaga', 'RM 800', 'Nor Saidatul Najwa Binti Sarifudin', 'Bank Islam Malaysia', '1224-3020-2434-20', '2022-01-20', 0, 'In Process', 39),
(44, 'Nur Adriana Binti Zulkifli', '000608-02-0190', 'Female', 'No 3186, Lorong Serampai 9/1, Taman Ria Jaya', '-', '08000', 'sungai petani', 'Kedah', '011-40770492', '-', 'Healthy', '-', '-', 'Self-employed', 'Berniaga', 'RM 1000', 'Nur Adriana Binti Zulkifli', 'Bank Islam', '02020029052622', '2022-01-20', 0, 'In Process', 40),
(45, 'Nur Aina Binti Yahaya', '011115-02-0110', 'Female', 'No 30, Jalan JPS, Kampung Kuala Kuang', '-', '09200', 'Kupang', 'Kedah', '013-6115197', '-', 'Healthy', '-', 'Pesara Tentera', 'Healthy', '-', 'RM 500', 'Nur Aina Binti Yahaya', 'Bank Islam Malaysia', '02075025075066', '2022-01-20', 0, 'In Process', 41),
(46, 'Nur Aina Najihah Binti Mazlan', '000118-07-0662', 'Female', 'No 18, Lorong Guar Perahu Indah 7, TMN Guar Perahu Indah, Kubang Semang', '-', '14000', 'Bukit Mertajam', 'Pulau Pinang', '011-61445968', '-', 'Healthy', '-', 'Pembantu Keselamatan SIRIM Pulau Pinang', 'Goverment', '-', 'RM 300', 'Nur Aina Najihah Binti Mazlan', 'Bank Islam Malaysia', '07052024504249', '2022-01-20', 0, 'In Process', 42),
(47, 'Nur Azimin Binti Za&#039;Ba', '000815-02-0652', 'Female', 'No 8 Lorong Seri Penarak 01, Kampung Penarak, Mukim Kuah', '-', '07000', 'Langkawi', 'Kedah', '011-14336073', '-', 'Healthy', '-', '-', 'Self-employed', 'Meniaga Rempeyek', 'RM 800', 'Nur Azimin Binti Za&#039;Ba', 'Bank Islam Malaysia', '02066023716016', '2022-01-20', 0, 'In Process', 43),
(48, 'Nur Dalilah Binti Md Fazli', '020522-07-0216', 'Female', 'No 28, Lorong Lampam 3, Seberang Jaya, 13700, Perai, Pulau Pinang', '-', '13700', 'Perai', 'Pulau Pinang', '011-35640911', '-', 'Healthy', '-', 'Kerani (AMWAY)', 'Private', '-', 'RM 1000', 'Nur Dalilah Binti Md Fazli', 'Bank Islam Malaysia', '07016027423011', '2022-01-20', 0, 'In Process', 44),
(49, 'Nur Erisya Binti Mohd Ridzuan', '010310-03-0088', 'Female', 'A-10J, Kondominium Langat Jaya, Jalan Datok Alias', '-', '43200', 'Batu 9 Cheras', 'Selangor', '012-2375013', '-', 'Healthy', '-', 'Pekerja Kilang', 'Private', '-', 'RM 0', 'Nur Erisya Binti Mohd Ridzuan', 'BSN Bank', '02191-41-10001031-3', '2022-01-20', 0, 'In Process', 45),
(50, 'Nur Fadhlin Qistina Binti Yahya', '000122-01-1200', 'Female', 'F-327-E, Lot 469, KG Seberang Terus, Kota Kuala Muda', '-', '08500', 'Sungai Petani', 'Kedah', '019-9729273', '019-9729218', 'Healthy', '-', '-', 'Self-employed', 'Tidak Bekerja', '-', 'Nur Fadhlin Qistina Binti Yahya', 'Bank Islam Malaysia', '07-043-02-690669-5', '2022-01-20', 0, 'In Process', 46),
(51, 'Nur Farisha Idayu Binti Mohd Zamri', '020803-07-0546', 'Female', 'RMR Kampung Banai, Lorong Kelumpok, Jalan Wang Tepus', '-', '06000', 'Jitra', 'Kedah', '017-4128045', '-', 'Healthy', '-', 'Tukang Kebun Sekolah', 'Private', '-', 'RM 1200', 'Nur Farisha Idayu Binti Mohd Zamri', 'Bank Islam Malaysia', '02039025214093', '2022-01-20', 0, 'In Process', 47),
(52, 'Nur Fatehah Binti Shaharom', '011202-08-0242', 'Female', '003, Parit Kualoh, Sungai Kepar, Simpang Empat', '-', '34400', 'Semanggol', 'Perak', '010-3935284', '-', 'Healthy', '-', 'Fadilah Binti Kornain', 'Private', '-', 'RM 1000', 'Nur Fatehah Binti Shaharom', 'Bank Islam Malaysia', '08077020392614', '2022-01-20', 0, 'In Process', 48),
(53, 'Nur Hasyimah Binti Azhan', '000708-02-0892', 'Female', 'No 10 Medan Maju 3, Taman Haji Abdullah Fahim', '-', '13200', 'Kepala Batas', 'Pulau Pinang', '018-7877115', '-', 'Healthy', '-', 'Pensyarah', 'Goverment', '-', 'RM 1800', 'Nur Hasyimah Binti Azhan', 'Bank Islam Malaysia', '07043026884102', '2022-01-20', 0, 'In Process', 49),
(54, 'Nur Hazwani Nabihah Binti Jamil', '000725-07-0744', 'Female', '27, Jalan Jawi Jaya 5, Taman Jawi Jaya', '-', '14200', 'Sungai Jawi', 'Pulau Pinang', '011-17528876', '04-52822427', 'Healthy', '-', 'Pekerja Sekolah', 'Private', '-', 'RM 1100', 'Nur Hazwani Nabihah Binti Jamil', 'Bank Islam Malaysia', '08022020681076', '2022-01-20', 0, 'In Process', 50),
(55, 'Nur Irdina Izaati Binti Zulkifly', '011112-07-0294', 'Female', 'TS 1489, Jalan Sempadan Parit Kasa', '-', '14320', ' Nibong Tebal', 'Pulau Pinang', '019 3876102', '-', 'Healthy', '-', 'Pekerja Am MBSP', 'Healthy', '-', 'RM 1800', 'Nur Irdina Izaati Binti Zulkifly', 'Bank Islam Malaysia', '08022020718722', '2022-01-20', 0, 'In Process', 51),
(56, 'Nur Izzati Akmal Binti Zulkifli', '0110115-03-0346', 'Female', 'No281, Lorong 1/8, Taman Cekur Manis', '-', '09600', 'Lunas ', 'Kedah', '0184601897', '-', 'Healthy', '-', 'Pembantu Gerai', 'Private', '-', 'RM 300', 'Nur Izzati Akmal Binti Zulkifli', 'Bank Islam Malaysia', '02057022763413', '2022-01-20', 0, 'In Process', 52),
(57, 'Nur Madeehah Binti Khairuddin', '011124-07-0400', 'Female', '24, Persiaran Muhibbah, Taman B', '-', '14000', 'Bukit Mertajam', 'Pulau Pinang', '012-4313446', '-', 'Healthy', '-', 'Buruh Kilang', 'Private', '-', 'RM 1860', 'Nur Madeehah Binti Khairuddin', 'Bank Islam Malaysia', '07052024544647', '2022-01-20', 0, 'In Process', 53),
(58, 'Nur Saffarra Binti Mohd Razali', '000212-07-0554', 'Female', '1203, Permatang Janggus, Permatang Pauh', '-', '13500', 'Bukit Mertajam', 'Pulau Pinang', '017 5414180', '-', 'Healthy', '-', 'Guru Kafa', 'Private', '-', 'RM 800', 'Nur Saffarra Binti Mohd Razali', 'Bank Islam Malaysia', '07-016-02-739372-1', '2022-01-20', 0, 'In Process', 54),
(59, 'Nur Syafawati Binti Mahazir', '011108-02-0112', 'Female', '6076, Pantai Kamlon', '-', '13200', 'Kepala Batas', 'Pulau Pinang', '013 6354046', '-', 'Healthy', '-', '-', 'Self-employed', 'Pesawah', '-', 'Nur Syafawati Binti Mahazir', 'BSN', '0799541000136884', '2022-01-20', 0, 'In Process', 55),
(60, 'Nur Syahidatul Husna Binti Mohd Ilias', '2020604426', 'Female', 'Kampung Petai Kudung Gulau', '-', '08210', 'Sik', 'Kedah', '011 23241009', '-', 'Healthy', '-', '-', 'Self-employed', 'Pemandu Lori', 'RM 700.00', 'Nur Syahidatul Husna Binti Mohd Ilias', 'Bank Islam Malaysia', '02132020009182', '2022-01-20', 0, 'In Process', 56),
(61, 'Nur Zaitul Akmal Binti Romli', '020507-02-0050', 'Female', 'NO 41A, Kampung Changkat Nering', '-', '06700', 'Pendang', 'Kedah', '011-60710353', '-', 'Healthy', '-', '-', 'Self-employed', 'Beniaga', 'RM 1000', 'Nur Zaitul Akmal Binti Romli', 'Bank Islam Malaysia', '0201102447357', '2022-01-20', 0, 'In Process', 57),
(62, 'Nurhanis Nabilah Binti Roslan', '011212-02-0470', 'Female', 'Lot 29, Taman Nilam, JLN Datuk Kumbar, 05300,, Alor Setar, Kedah', '-', '05300', 'Alor Setar', 'Kedah', '013 7262452', '-', 'Healthy', '-', '-', 'Self-employed', 'Tidak Bekerja', '-', 'Nurhanis Nabilah Binti Roslan', 'Bank Islam Malaysia', '0201102448188', '2022-01-20', 0, 'In Process', 58),
(63, 'Nurilham Balqis Binti Sahidan', '010723-09-0062', 'Female', '189, Jalan Perlis', '-', '06100', 'Kodiang', 'Kedah', '011-11717712', '-', 'Healthy', '-', '-', 'Healthy', '-', 'RM 1000', 'Nurilham Balqis Binti Sahidan', 'Bank Islam Malaysia', '02039025192131', '2022-01-20', 0, 'In Process', 59),
(64, 'Nurnajwa Binti Ramli', '010703-07-0590', 'Female', 'Sblh 865-G, Mkm 13, Jln Sg. Nibong Kecil, Jln. Tun Dr, Awang', '-', '11900', 'Bayan Lepas', 'Pulau Pinang', '012 4832529', '-', 'Healthy', '-', 'Anggota Rela', 'Private', '-', 'RM 0.00', 'Nurnajwa Binti Ramli', 'Maybank', '157063981546', '2022-01-20', 0, 'In Process', 60),
(65, 'Nurrul Syaidatul Najwa Binti Hassan', '010512-08-1318', 'Female', 'No 69, Lot 13721, Kg Tersusun A.A.Tin', '-', '35600', 'Sungkai', 'Perak', '017-4834325', '-', 'Healthy', '-', '-', 'Self-employed', 'Pengawal Keselamatan', 'RM 1500', 'Nurrul Syaidatul Najwa Binti Hassan', 'Maybank', '158154399358', '2022-01-20', 0, 'In Process', 61),
(66, 'Nurul Amirah Binti Azhari', '020205-02-0020', 'Female', '427, Jalan Sentosa, Taman Seri Sentosa', '-', '09600', 'Lunas', 'Kedah', '016-6133789', '04-4843395', 'Healthy', '-', '-', 'Self-employed', 'Pemandu Van Sekolah', 'RM 300', 'Nurul Amirah Binti Azhari', 'Bank Islam Malaysia', '02057027767694', '2022-01-20', 0, 'In Process', 62),
(67, 'Nurul Anis Fatini Binti Zakaria', '020923-02-0340', 'Female', 'F268A, KG. Permatang Kedundong, Pinang Tunggal', '-', '08000', 'Sungai Petani', 'Kedah', '011-11094821', '-', 'Healthy', '-', 'Operator Kilang', 'Private', '-', 'RM 200', 'Nurul Anis Fatini Binti Zakaria', 'Bank Islam Malaysia', '02114020199740', '2022-01-20', 0, 'In Process', 63),
(69, 'Nurul Anisa Nasir', '010930-02-1238', 'Female', 'no 130, Kampung Kerunai', '-', '33310', 'Gerik', 'Perak', '010-5429658', '-', 'Healthy', '-', '-', 'Self-employed', 'Berniaga', 'RM 500', 'Nurul Anisa Nasir', 'Maybank', '158079848875', '2022-01-20', 0, 'In Process', 64),
(70, 'Nurul Aryani Binti Shuib', '010621-01-1482', 'Female', 'Kampung Kubang Yoi, Mukim Jeneri', '-', '08320', 'Sik', 'Kedah', '017 4673315', '-', 'Healthy', '-', 'Buruh Kasar', 'Self-employed', 'Penoreh Getah', 'RM 300', 'Nurul Aryani Binti Shuib', 'Bank Islam Malaysia', '02-132-02-001757-6', '2022-01-20', 0, 'In Process', 65),
(71, 'Nurul Asyiqin Binti Ahmad Tamiri', '021202-02-0118', 'Female', 'No 88, Rumah Kembar Batu 13, Bukit Besar, Kota Sarang Semut', '-', '06800', 'Alor Setar', 'Kedah', '0135537108', '-', 'Healthy', '-', 'Pesara', 'Goverment', '-', 'RM 2050.50', 'Nurul Asyiqin Binti Ahmad Tamiri', 'Bank Islam Malaysia', '02141022199458', '2022-01-20', 0, 'In Process', 66),
(72, 'Nurul Batrisyia Hazwani Binti Mohd Taufek', '020615-02-0074', 'Female', 'Kampung Cherok Tok Pendik, Mukim Gelong', '-', '06000', 'Jitra', 'Kedah', '011-20501740', '-', 'Healthy', '-', '-', 'Self-employed', 'Pemandu Lori', 'RM 1500', 'Nurul Batrisyia Hazwani Binti Mohd Taufek', 'Bank Rakyat', '22-022-182091-5', '2022-01-20', 0, 'In Process', 67),
(73, 'Nurul Husnina Binti Suhaili', '020123-02-0748', 'Female', 'Kampung Padang Setol, Mukim Pedu', '-', '06300', 'Kuala Nerang', 'Kedah', '014-2879128', '019 5631516', 'Healthy', '-', '-', 'Self-employed', 'Petani', 'RM 700.00', 'Nurul Husnina Binti Suhaili', 'Bank Islam Malaysia', '02-075-02-51594-7', '2022-01-20', 0, 'In Process', 68),
(74, 'Nurul Izzah Fakhida Binti Kamaruddin', '020415-02-0280', 'Female', 'No 730, Lorong mahkota 17/2, Taman Seri Mahkota', '-', '09000', 'Kulim', 'Kedah', '011- 58901597', '-', 'Healthy', '-', 'Pemandu Lori (RISDA)', 'Private', '-', 'RM 500', 'Nurul Izzah Fakhida Binti Kamaruddin', 'Bank Islam Malaysia', '02-057-02-272659-9', '2022-01-20', 0, 'In Process', 69),
(75, 'Nurul Nazifa Binti Rais', '021011-06-0264', 'Female', 'No 102 (2), Kampung Tanjung Mali, Mukim Kedawang, 07000, Langakawi, Kedah', '-', '07000', 'Langkawi', 'Kedah', '019-9667341', '-', 'Healthy', '-', '-', 'Self-employed', 'Pemandu Lori', 'RM 1500', 'Nurul Nazifa Binti Rais', 'Bank Islam Malaysia', '02-066-02-374852-4', '2022-01-20', 0, 'In Process', 70),
(76, 'Nurul Nazirah Binti Noor Mohd Azman', '011021-07-0088', 'Female', 'Blok J-3-24, Rumah Pangsa Padang Tembak, 11400, Ayer Itam, Pulau Pinang', '-', '11400', 'Ayer Itam', 'Pulau Pinang', '0124549677', '-', 'Healthy', '-', 'pesara', 'Statutory body', '-', 'RM 674.86', 'Nurul Nazirah Binti Noor Mohd Azman', 'CIMB Bank', '7626887613', '2022-01-20', 0, 'In Process', 71),
(77, 'Nurul Syafiqah Binti Azizan', '010602-08-0036', 'Female', 'No 42, Jalan Bukit Jana, RPT Bukit Jana, 34600, Kamunting, Perak', '-', '34600', 'kamunting', 'Perak', '016-6459202', '-', 'Healthy', '-', 'Suri Rumah', 'Self-employed', '-', 'RM 300', 'Nurul Syafiqah Binti Azizan', 'BSN Bank', '0899541000384170', '2022-01-20', 0, 'In Process', 72),
(78, 'Nurul Syahirah Binti Md Saad', '001101-02-0444', 'Female', 'No 41, Lorong Mutiara 1B/3, Sungai Kob', '-', '09700', 'Karangan', 'Kedah', '011-24148078', '-', 'Healthy', '-', 'Pemandu Forklift', 'Private', '-', 'RM 100', 'Nurul Syahirah Binti Md Saad', 'Bank Islam Malaysia', '02057022714713', '2022-01-20', 0, 'In Process', 73),
(79, 'Nurul Yasmin Binti Mohd Arif', '010126-02-0736', 'Female', 'No 47, Kampung Senggora, Mukim Bukit Raya', '-', '06660', 'Pendang ', 'Kedah', '011-25147030', '-', 'Healthy', '-', 'Pemandu H14', 'Healthy', '-', 'RM 2766.37', 'Nurul Yasmin Binti Mohd Arif', 'Bank Islam Malaysia', '02105020388829', '2022-01-20', 0, 'In Process', 74),
(80, 'Nuur Zulaika Binti Md Yazi', '020520-02-0602', 'Female', '150, Lorong 15, Kampung Kubang Eriang, Mukim Sungai Laka', '-', '06010', 'Changlun', 'Kedah', '011-33420449', '-', 'Healthy', '-', '-', 'Private', 'Pekerja Kafe UUM', 'RM 800', 'Nuur Zulaika Binti Md Yazi', 'Bank Islam Malaysia', '02-075-02-515065-3', '2022-01-20', 0, 'In Process', 75),
(81, 'Siti Nur Syuhadah Binti Mohd Zayadi', '021010-07-0356', 'Female', '10, Linjang Nelayan, Kuala SG Pinang', '-', '11010', 'Balik Pulau', 'Pulau Pinang', '010 20 0471', '-', 'Healthy', '-', 'Pembantu Tadbir', 'Goverment', '-', 'RM 300', 'Siti Nur Syuhadah Binti Mohd Zayadi', 'Bank Islam Malaysia', '07-034-02-477708-2', '2022-01-20', 0, 'In Process', 76),
(82, 'Siti Nurshahirah Bt Shahrul Nizam', '010424-02-0208', 'Female', 'G-4-4 Flat Taman Sri Gemilang, mukim Mergong', '-', '05150', 'Alor Setar', 'Kedah', '011-13135342', '-', 'Healthy', '-', 'penjual', 'Self-employed', 'berniaga', 'RM 800', 'Siti Nurshahirah Bt Shahrul Nizam', 'Bank Islam Malaysia', '02105020353437', '2022-01-20', 0, 'In Process', 77),
(83, 'Nurul Nabila Natasha Binti Anuar', '01080-02-0784', 'Female', 'A-12-01 Flat Desa Wawasan, Jalan Betek, 14000, Bukit Mertajam, Pulau Pinang', '-', '14000', 'Bukit Mertajam', 'Pulau Pinang', '017 5072708', '-', 'Healthy', '-', 'JuruTeknik', 'Private', '-', 'RM 2500.00', 'Nurul Nabila Natasha Binti Anuar', 'Bank Islam Malaysia', '07052024546141', '2022-01-20', 0, 'In Process', 78),
(84, 'Nurul Syazwani Binti Mohd Zullzaidi', '010529-03-0824', 'Female', '2114, Lorong Lagenda 516, Taman Lagenda, 09400, pAdang Serai, Kedah', '-', '09400', 'Padang Serai', 'Kedah', '011 31352030', '-', 'Healthy', '-', 'Operator Kilang', 'Private', '-', 'RM 800', 'Nurul Syazwani Binti Mohd Zullzaidi', 'Bank Islam Malaysia', '02057022768324', '2022-01-20', 0, 'In Process', 79),
(85, 'Nurul Izzati Binti Rosnizam', '010504-02-0216', 'Female', '549, Lorong 115B, Taman Semarak', '-', '08000', 'Sungai petani', 'Kedah', '011-51884062', '-', 'Healthy', '-', '-', 'Self-employed', 'Pesawah', 'RM 1000', 'Nurul Izzati Binti Rosnizam', 'Bank Islam Malaysia', '0211402075122', '2022-01-21', 0, 'In Process', 80);

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `kom_id` int(11) NOT NULL,
  `kom_nama` varchar(200) NOT NULL,
  `kom_noic` varchar(200) NOT NULL,
  `kom_jantina` varchar(200) NOT NULL,
  `kom_alamat` varchar(200) NOT NULL,
  `kom_poskod` varchar(200) NOT NULL,
  `kom_bandar` varchar(200) NOT NULL,
  `kom_negeri` varchar(200) NOT NULL,
  `kom_nobimbit` varchar(200) NOT NULL,
  `kom_norumah` varchar(200) NOT NULL,
  `kom_email` varchar(200) NOT NULL,
  `kom_ibubapa` varchar(200) NOT NULL,
  `kom_icibubapa` varchar(200) NOT NULL,
  `kom_gaji` varchar(200) NOT NULL,
  `nama_u` varchar(200) NOT NULL,
  `alamat_u` varchar(200) NOT NULL,
  `pengakuan` varchar(200) NOT NULL,
  `kom_date` date NOT NULL,
  `duit_kom` int(11) NOT NULL,
  `kom_status` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`kom_id`, `kom_nama`, `kom_noic`, `kom_jantina`, `kom_alamat`, `kom_poskod`, `kom_bandar`, `kom_negeri`, `kom_nobimbit`, `kom_norumah`, `kom_email`, `kom_ibubapa`, `kom_icibubapa`, `kom_gaji`, `nama_u`, `alamat_u`, `pengakuan`, `kom_date`, `duit_kom`, `kom_status`, `user_id`) VALUES
(1, 'lukmanhakim bin ahmad', '000000000', 'Male', 'NO 2076, LORONG 112, TAMAN RIA, 08000,', '08000', 'SUNGAI PETANI', 'Kedah', '0192463425', '123123', 'lukkim46@gmail.com', 'ahmad', '312312', '12312312', 'uitm', 'asdaweqew', 'I hereby acknowledge that I have provided correct and authentic information and information and YAYASAN SETIA BUDI reserves the right to refuse if the information and information provided is not true.', '2023-11-25', 0, 'Reject', 2),
(3, 'zaharin bin malik', '456789', 'Male', 'tanjung tokong', '0258711', 'sp', 'kedah', '025741', '012387', 'ali@gmail.com', 'malik noor', '9874521', '2800000', 'uitm', 'kedah', 'I hereby acknowledge that I have provided correct and authentic information and information and YAYASAN SETIA BUDI reserves the right to refuse if the information and information provided is not true.', '2022-12-07', 0, 'Successfull', 4),
(4, 'Mohammad nazmi bin rosli', '0000000000000000000000', 'Male', 'NO 2076, LORONG 112, TAMAN RIA, 08000,', '08000', 'SUNGAI PETANI', 'Kedah', '0192463425', '0192463425', 'lukkim46@gmail.com', 'asdasd', 'asdasd', '1000000', 'uitm', 'NO 2076, LORONG 112, TAMAN RIA, 08000,', 'I hereby acknowledge that I have provided correct and authentic information and information and YAYASAN SETIA BUDI reserves the right to refuse if the information and information provided is not true.', '2023-12-06', 0, 'In Process', 121),
(7, 'hafizam', '0784512963', 'Male', 'kedah', '03211', 'aloq staq', 'kedah', '0321654654', '0321654897', 'hafizam@gmail.com', 'zam', '03216468', '40000', 'uitm', 'uitm', 'I hereby acknowledge that I have provided correct and authentic information and information and YAYASAN SETIA BUDI reserves the right to refuse if the information and information provided is not true.', '2023-12-09', 0, 'In Process', 123);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `description`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggaraan`
--

CREATE TABLE `penyelenggaraan` (
  `pe_id` int(11) NOT NULL,
  `nama_masjid` varchar(200) NOT NULL,
  `mukim` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `status_tanah` varchar(200) NOT NULL,
  `no_lot` varchar(200) NOT NULL,
  `nama_mohon_servis` varchar(200) NOT NULL,
  `jawatan` varchar(200) NOT NULL,
  `no_fon` varchar(200) NOT NULL,
  `acc_masjid` varchar(200) NOT NULL,
  `nama_bank` varchar(200) NOT NULL,
  `nama_acc` varchar(200) NOT NULL,
  `pe_date` date NOT NULL,
  `duit_pe` int(11) NOT NULL,
  `pe_status` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyelenggaraan`
--

INSERT INTO `penyelenggaraan` (`pe_id`, `nama_masjid`, `mukim`, `alamat`, `status_tanah`, `no_lot`, `nama_mohon_servis`, `jawatan`, `no_fon`, `acc_masjid`, `nama_bank`, `nama_acc`, `pe_date`, `duit_pe`, `pe_status`, `user_id`) VALUES
(1, 'masjid aminah', 'sp', 'kedah', '123', '1234', 'ali', 'ceo', '1123123', '123123', 'maybank', 'ali', '2023-11-25', 0, 'Successfull', 2),
(7, 'Masjid Al-Bukhari', 'Kubang Pasu', 'Kg, Bukit, Mk Kubang Pasu, 06010, Changlon, Kedah', 'Wakaf', 'Lot 2505\r\n', 'Mohd Danil B Yob', 'Setiausaha Masjid Kg Bukit, Mk Kubang Pasu', '019-5470571', '220221232099', 'Bank Rakyat', '', '2022-01-22', 0, 'Reject', 81),
(8, 'Surau Taman Amansuria', 'Kuala Muda', 'Surau Taman Amansuria, Sungai Lalang, 08000, Sungai Petani, Kedah', 'wakaf', '', 'Abdul Mutalib Bin Karya', 'Pengerusi Masjid', '019-4475470', '02020010074893', 'Bank Islam Malaysia', '1. Abdul Mutalib Bin Kariya 2. Abdul Shukor Bin Sharif 3. Bastiar Bin Md Nor', '2022-01-22', 0, 'In Process', 82),
(9, 'Masjid Andalusia', 'Kuala Muda', 'Lorong BLM 1/1, Bandar Laguna Merbok, 08000, Sungai Petani Kedah', 'Majlis Agama Islam Kedah', 'PT 93040', 'Hj, Burhanuddin Bin Hj, Wahab', 'Pengerusi Masjid Andalusia', '019-4801980', '15400-1120631910', 'Al- Rajhi Bank', 'Masjid Andalusia Bandar Laguna Merbok', '2022-01-22', 0, 'In Process', 83),
(11, 'Abu Ubaidah Ibni Al- Jarrau Bandar Tasek Mutiara', 'Seberang Perai Selatan', 'Lorong 1, SS1, Bandar Tasek Mutiara, Simpang Ampat, 14120, Seberang Perai Selatan.', 'Wakaf Majlis Agama Islam P. Pinang', '', 'Mohd Anur B Hussim', 'Pengerusi Qaryah', '012 4443510', '557223106270', 'Maybank', 'Masjid Abu Ubaidah Ibni Al-Jarrah', '2022-01-22', 0, 'In Process', 84),
(12, 'Surau Sungai Air Itam', 'Seberang Perai Selatan, Mukim 10', 'Surau Sungai Air Itam, 14320, Nibong Tebal , SPS, Pulau Pinang', 'Wakaf MAINPP', '', 'Mohammad Yusoff Bin Bakar', 'Pengerusi Surau Sg Air Itam', '013 4004228', '08010009813729', 'Bank Muamalat', 'Surau Sungai Air Itam', '2022-01-22', 0, 'In Process', 85),
(13, 'Masjid Mukim Kemubu', 'Ketereh , Kemubu', 'Imam Tua Mukim Kemubu, 16450, ketereh, Kota Bharu, Kelantan', 'Wakaf', '', 'Jusoh Bin Yaacob', 'Imam Tua Penolong Pendaftar Nikah dan Rujuk Mukim Kemubu', '013-3177669\r\n', '03030000754714', 'Bank Muamalat', '', '2022-01-22', 0, 'In Process', 86),
(14, 'Surau Sek. Keb Kuala Perai', 'Butterworth Seberang Perai', 'Sek. Keb. Kuala Perai, Bagan Dalam, 12100, Buttworth, Seberang Perai Utara.', 'Kementerian Pendidikan Malaysia', '', 'Mohd Anur Hussin', 'Penolong Kanan Kokurikulum', '012- 4443510', '', '', '', '2022-01-22', 0, 'In Process', 87),
(15, 'Surau Kampung Guar Nanas', 'Kuala Muda, Gurun', 'D/A, Kampung Guar Nanas, 08300, Gurun, Kedah', 'wakaf', 'lot1276', 'Ahmad Bin Musa', 'Setiausaha', '019 4747139', '0208401004460', 'Bank Islam Malaysia', '1.Mohammad Zainol B Ahmad\r\n2.Ahmad B Musa\r\n3.Mohammad Nor B Bakar', '2022-01-22', 0, 'In Process', 88),
(16, 'Al-Madrasah Al-Ahmadiah Al-Ijtimaiah', 'SPT, Mukim 7', 'Pondok Padang Lalang, 14000, Bukit Mertajam, Pulau Pinang', '', '', 'Hamzah Bin Jaafar', 'Pengetua SMA Al-Ahmadiah Al-Ijtimaiah Pondok Padang Lalang', '019 4285164', '07052010010186', 'Bank Islam Malaysia', 'SMA Al-Ahmadiah Al-Ijtimaiah', '2022-01-22', 0, 'In Process', 89),
(17, 'Masjid Karlan Taman Seri Bayu', 'Kuala Muda, Bandar Sungai Lalang', 'Karlan Taman Seri Bayu, Surau Al-Muhsinin, Taman Seri Bayu,08000, Sungai Lalang, Sungai Petani, kedah', 'Tanah Wakaf Majlis Agama Kedah', 'HSD127897, PT3398, Seksyen 4 Bandar Sg, Lalang Sungai Lalang', 'Kamarudin Bin Othman', 'Setiausaha Kariah', '019-4445864', '552107615628', 'Maybank', 'Tabung Penbangunan Masjid Seri Bayu', '2022-01-24', 0, 'In Process', 90),
(18, 'Masjid Karlan Taman Seri Bayu', 'Kuala Muda, Bandar Sungai Lalang', 'Karlan Taman Seri Bayu, Surau Al-Muhsinin, Taman Seri Bayu,08000, Sungai Lalang, Sungai Petani, kedah', 'Tanah Wakaf Majlis Agama Kedah', 'HSD127897, PT3398, Seksyen 4 Bandar Sg, Lalang Sungai Lalang', 'Kamarudin Bin Othman', 'Setiausaha Kariah', '019-4445864', '552107615628', 'Maybank', 'Tabung Penbangunan Masjid Seri Bayu', '2022-01-24', 0, 'In Process', 90),
(19, 'Surau Ahmadiah Kampung Sungai Baru', 'Bujang', 'Surau Ahmadiah, Kampung Sungai Baru, 08100, Bujang, Kedah', '', '', 'Ahmad Fauzi Bin Rejab', 'Pengerusi Surau', '019-4781069', '02020020431212', 'Bank Islam', 'Ahmad Fauzi Bin Rejab', '2022-01-24', 0, 'In Process', 92),
(20, 'Masjid Jamek AS-Salam', 'Kubang Pasu, Mukim AG', 'Masjid Jamek As-Salam, Kg. Megat Dewa, Mukim AG, 06100, Kodiang, Kedah', 'Wakaf', 'Lot 1907', 'Haji Shukri B Samsudin', 'Pengerusi Pembangunan', '012-5601223', '02123010000926', 'Bank Islam', 'J/K Pembinaan Masjid Kariah Megat Dewa', '2022-01-24', 0, 'In Process', 93),
(21, 'Masjid Al-Muttaqin', 'Kubang Pasu, Mukim Naga', 'Masjid Al-Mutaqqin, Bandar Darulaman,06000, Jitra, Kedah', 'Wakaf', 'Lot PT755 (Petak 1)', 'Saidin Bin Idris', 'Setiausaha', '019-4471020', '106670006299', 'Affin Islamic Bank', 'Persatuan KhariaT Kematian Masjid Al-Mutaqqin', '2022-01-24', 0, 'In Process', 94),
(22, 'An-Najah SK Dato&#039; Wan Kemara', 'Kubang Pasu, Temin', 'SK Dato&#039; Wan Kemara, 06100, Changlun, Kedah', '', '', 'Mohd Nizam Bin Saidin', 'Guru Besar SK Dato&#039; Wan Kemara', '012-4587804', '3812579807', 'Public Islamic Bank', 'Surau An-Najah SK Dato&#039; Wan Kemara', '2022-01-24', 0, 'In Process', 95),
(23, 'Abidin Sungai Laka', 'Sungai Laka, Changlun', 'Kampung Masjid, Mukim Sungai Laka,06010, Changlun Kedah', 'Wakaf', 'lot 127', 'Abdul Razak Bin Mahmud', 'Pengerusi Masjid Abidin', '019-4466092', '5522-1901-0405', 'Maybank', 'Masjid Abidin Sungai Laka', '2022-01-24', 0, 'In Process', 96),
(24, 'Masjid Al-Mutaqqin Bandar Darulaman', 'Mukim Naga Daerah Kubang Pasu', '175B FLR, Jalan Mahsuri 6C, Taman Mahsuri Fasa 2C, Bandar Darulaman, 06000, Jitra, Kedah', 'Anugerah Kerajaan Negeri Kedah', '', 'Jamaludin Bin Sharif', 'Setiausaha', '017-4596162', '02039010013000', 'Bank Islam Malaysia', 'Masjid Al-Muttaqin Bandar Darulaman Jitra', '2022-01-24', 0, 'In Process', 97),
(25, 'Masjid Mukim Kerak Perak', 'Kapok, Kekak Patek', 'Masjid Mukim Kerak Patek, 16450, Kabok, Kota Bharu, Kelantan', 'wakaf', '', 'Abu Bakar Bin Omar', 'Imam Tua ', '013 9712519 ', '25302510000666', 'RHB Bank', 'JKK Agama Masjid Mukim Kerak Patek', '2022-01-26', 0, 'In Process', 98),
(26, 'Masjid Al-Rahman', 'Kor, Daerah, Beta', 'Masjid Mukim Kor, 16010, Kota Bharu', '', 'lot 1395, PT 242, LOT1145', 'Mohd Zainuddin Bin Ghani', 'Imam tua (pengerusi masjid)', '019 9918538', '03120010005103', 'Bank Islam Malaysia', 'J/kuasa Masjid Mukim Kor', '2022-01-26', 0, 'In Process', 99),
(27, 'Masjid Al Azhar Kampung Tebuk', 'Simpang Empat', 'Masjid Al Azhar, Kampong Tebuk,02700, Simpang Empat, Perlis', '', '', 'Sharudin Jaya', 'Bendahari', '016 4480052\r\n', '', '', '', '2022-01-26', 0, 'In Process', 100),
(28, 'Al Ubaidah Sematang Serdang', 'Sanglang Perlis', 'Kampong Sematang Serdang, 02700, Simpang Empat, Perlis', '', '2164', 'Remlee Ahmad', 'Setiausaha', '019 4547100', '', '', '', '2022-01-26', 0, 'In Process', 101),
(29, 'Taman Jali', 'utan Aji Kangar', 'no 7, Lrg, Langsat, Tmn. Jali, 01000, Kangar, Perlis', 'Rizab Kerajaan', '', 'Ahmad Shuhaimi Kassim', 'pengerusi JKKK', '019 4803971', '', '', '', '2022-01-26', 0, 'In Process', 102),
(30, 'Masjid Darul Ibadah Padang Besar', 'Kangar', 'Padang Besar, 01000, Kangar, Perlis', 'wakaf', '', '', '', '012 4442437', '', '', '', '2022-01-26', 0, 'In Process', 103),
(31, 'Masjid Al Mutaqqin Kg. Padang Besar Kurung Anai', 'Kurung Anai, Arau', 'Masjid Al Mutaqqin Kg. Padang Besar, Mukim Kurung Anai, 02600, Arau, Perlis', 'wakaf', '', 'Ibrahim Bin Ahmad', 'Imam masjid', '012 5928775', '', '', '', '2022-01-26', 0, 'In Process', 104),
(32, 'Masjid Saidina Abu Bakar Al Siddiq', 'kuala perlis', 'Masjid Saidina Abu Bakar Al Siddiq, Seberang Ramai, 02000, Kuala Perlis, Perlis', '', '', 'DR. Mohammad Dhiyaul Hamph Bin Fatah Yasiw', 'Imam/ pengerusi', '016 4423674', '', '', '', '2022-01-26', 0, 'In Process', 105),
(33, 'Surau Al-Islah', 'Simpat Empat', 'Sekolah Menengah Agama Al- Islahiyah, Bohor Mali, 02700, Simpang Empat, Perlis', 'wakaf', 'Dato&#039; HJ Talib Bin HJ Ali', 'pengerusi', '04-9807360/ 017 5796973/ 019 4449408', '', '', '', '', '2022-01-26', 0, 'In Process', 106),
(34, 'Al Sharani Behor Lateh', 'Kayang', 'Masjid Al Sharani, Taman Desa Kayang, Behor Lateh, 01000, Kangar, Perlis', 'wakaf MAIPS', '', 'Mustaffa Bin Muhammad', 'pengerusi', '012 4230122', '', '', '', '2022-01-26', 0, 'In Process', 107),
(35, 'Masjid Al Mustaqim', 'Seriab', ' KM 4, Jalan Tuanku Syed Putra, 01000, Kangar, Perlis', '', 'Lot no:111, GM332', 'Azemi Bin Salim', 'Pengerusi', '012 5260009', '', '', '', '2022-01-26', 0, 'In Process', 108),
(36, 'SMK Putra Kangar', 'Kangar', 'Jalan Padang Katong, 01000, Kangar, Perlis', 'wakaf', 'SMK Putra', 'Nardin Bakar', 'Pengetua', '012 4422566', '', '', '', '2022-01-26', 0, 'In Process', 109),
(37, 'Surau Seberang Ramai', 'KG. Tengah, Kuala Perlis', 'Surau Seberang Ramai, KG. Tengah, Kuala Perlis, Perlis', '', '', 'Arshad Abas ', 'Setiausaha', '011 55049445\r\n', '', '', '', '2022-01-26', 0, 'In Process', 110),
(38, 'Masjid Al-Rahmaniah Kuala Perlis', 'Kuala Perlis, Perlis', 'Taman Bidara 7, Kuala Perlis 02000, Kuala Perlis, Perlis', '', '', 'Hasan Hashim', 'Pengerusi', '012 4136452', '', '', '', '2022-01-26', 0, 'In Process', 111),
(39, 'Ma had Tahfiz Al Quran Al Imam An Nawawi', 'Abi', 'Lot 258-A, Kampung Abi Padang Machang, Jalan Abi Batas Paip, 01000, Kangar, Perlis', 'pertanian', '258', 'Muhammad Azmir Bin Azran', 'Timbalan Mudir', '019 5157255\r\n', '', '', '', '2022-01-26', 0, 'In Process', 112),
(40, 'Masjid Saidina Umar Al Khatab', 'Utan Aji kangar', 'KG. Anak Syed Alwi, 01000, Kangar, Perlis', 'wakaf', '', 'Mohd Iqbal Bin Mohd Shariff', 'Setiausaha', '017 6887907', '', '', '', '2022-01-26', 0, 'In Process', 113),
(41, 'Masjid Al Hashimi Long Boh', 'Tambun Tulang', 'Masjid Al Hashimi KG. Long Boh, Utan Ajt, 01000, Kangar, Perlis', 'wakaf', '', 'Pozilan Bin Jaya', 'Imam', '012 4871091', '', '', '', '2022-01-26', 0, 'In Process', 114),
(42, 'Masjid Jamek An-Nur', 'Kota Bharu, Kereteh', 'Masjid Jamek An-Nur, Kem Desa Pahlawan,16500, Kota Bahru, Kelantan', 'tanah kerajaan (MINDEF)', '', 'Mej Razali Bin Che Pa', 'Setiausaha', '019 5750072', '03045010018537', 'BIMB Calu Machang', 'JK Masjid Jamek An-Nur', '2022-01-26', 0, 'In Process', 115),
(43, 'Masjid Al Mutaqqin Mukim Kuala Paku', 'Ulu Kusial, Tanah Merah', 'Masjid Al Mutaqqin Mukim Kuala Paku, Rual Ipoh, 17500, Tanah Merah, Kelantan', 'Wakaf', 'lot 3897 dan 4346', 'Mohd Fahmi Bin Mohd Rashid', 'Imam Tua', '019 4740769', '03054010015093', 'Bank Islam Malaysia', 'Tetuan Masjid Al Mutaqqin Mukim Kuala Paku', '2022-01-26', 0, 'In Process', 116),
(44, 'Masjid Mukim Baroh Pial', 'Kangkong, Baroh Pial', 'Masjid Mukim Baroh Pial, 17200, Rantau Panjang, Kelantan', 'wakaf', '', 'Mohd Nazri Bin Adam', 'Imam Tua- Penolong Pendaftar Nikah Mukim', '013 9309301', '', '', '', '2022-01-26', 0, 'In Process', 117),
(45, 'Masjid Iktikap Al Taqwa', 'Baroh Pial', 'KG. Bendang Ikan, 17200, Pasir Mas, Kelantan', 'Wakaf', 'PT 843 Mukim Bukit Tunku Jajahan Pasir Mas', 'Mohd Asri Bin Yaacob', 'Pengerusi', '012 9456384', '3817062705', 'Public Bank', 'Cahaya Atiwal Enterprise', '2022-01-26', 0, 'In Process', 118),
(46, 'masjid aloq satq', 'aloq staq', 'kedah', 'waqaf', '654', 'zam', 'bilal', '0324654', '03213465', 'mayabnk', 'zam', '2023-12-09', 0, 'Reject', 123);

-- --------------------------------------------------------

--
-- Table structure for table `sumbangan`
--

CREATE TABLE `sumbangan` (
  `sum_id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ic` varchar(200) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `amount` int(11) NOT NULL,
  `donate_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sumbangan`
--

INSERT INTO `sumbangan` (`sum_id`, `nama`, `email`, `ic`, `phone_number`, `amount`, `donate_date`) VALUES
(12, 'ali', 'ali@gmail.com', '21312312', '12312312', 100, '2023-11-28'),
(13, 'amin', 'amin@gmail.com', '123123', '123123', 10000, '2023-11-28'),
(14, 'hakim', 'hakim@gmail.com', '654321', '65465498', 20, '2023-11-28'),
(15, 'ali', 'ali@gmail.com', '3324324', '213123', 123, '2023-11-28'),
(16, 'uitm', 'uitm@gmail.com', '6598', '64654', 5000, '2023-12-04'),
(17, 'man', 'man@gmail.com', '321047', '0258741', 3000, '2023-12-05'),
(18, 'nazmi', 'nazmi@gmail.com', '987456', '0147852', 1000, '2023-12-05'),
(19, 'qawi', 'wawi@gmail.com', '025487', '321654789', 500, '2023-12-05'),
(20, 'alif', 'alif@gmail.com', '0215487', '0323265', 50, '2023-12-05'),
(21, 'uitm', 'uitm@gov.edu.my', '22015856348', '0112345678', 20000, '2023-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `register_date` date NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `full_name`, `email`, `password`, `address`, `register_date`, `level_id`) VALUES
(1, 'admin', 'admin', 'admin@gmailcom', 'admin', 'admin', '2019-12-01', 1),
(2, 'lukman', 'lukmanhakim213123', 'lukman@gmail.com', 'lukman', 'kedah', '2023-11-25', 2),
(4, 'zaharin', 'zaharin bin malik', 'zaharin@gmail.com', '123', 'kampung pokok pisang', '2021-06-15', 2),
(5, 'faris', 'faris imadi', 'faris@gmail.com', 'faris', 'kepala batas', '2022-03-20', 2),
(6, 'syami', 'Ahmad Syami bin Ismahadi', '-', 'syami', 'No 6, jalan Au 5c/2, lembah keramat, 54200, kuala lumpur, selangor', '2023-01-10', 2),
(7, 'aimie', 'Aimie Hazwanie Binti Hisyam', '-', 'aimie', 'no 3675, lorong 16/6, taman lagenda, 09400, padang serai', '2021-08-25', 2),
(8, 'amiruddin', 'Amiruddin Qhadri Bin Ishak', '-', 'amiruddin', 'Kg. Pida 5, Mukim Putat, 06100, Kodiang, Kedah', '2022-11-05', 2),
(9, 'amirul', 'Amirul Ikhwan Bin Azmain', '-', 'amirul', 'Blok F-9-6 PPR Intan Baiduri, Taman Intan Baiduri, 52100, Kuala Lumpur, Wilayah Persekutuan', '2023-09-18', 2),
(10, 'fatin', 'Fatin Aqillah Binti Mohammad Adzuan', '-', 'fatin', 'C11, Kampung Bukit Chepat, Mukim Air Putih, 06700, Pendang, Kedah', '2021-04-30', 2),
(11, 'hazirah', 'Fatin Hazirah Binti Mokhter', '-', 'hazirah', '180, Taman Sri Putra, Bakar Arang, 08000, Sungai Petani, Kedah', '2022-07-12', 2),
(12, 'haziqq', 'Haziqq Anas Bin Anuar', '-', 'haziqq', 'no 179, Jalan SM5A/20, Fasa 2D, 32040, Seri manjung, Perak', '2023-05-08', 2),
(13, 'haiqal', 'Haiqal Huda Bin Mohammad Azni', '-', 'haiqal', 'A8-05, Blok A Glenview Villa, Jalan 49 off Jalan Kuari, Taman Pinggiran Cheras, 56100, Kuala Lumpur, W. Persekutuan Kual Lumpur', '2021-12-22', 2),
(14, 'auni', 'Khairunnisa Auni Binti Mohd Sidik', '-', 'auni', 'No 56F, Kampung Banggol Penyengat, 09700, Karangan, Kedah', '2021-02-18', 2),
(15, 'khalilah', 'Khalilah Binti Ahmad', '-', 'khalilah', 'No 1003, PIDA 3, Kampung Manggol Bongor, Megat Dewa, 06100, Koding, Kedah', '2022-09-05', 2),
(16, 'mashithah', 'Mashithah Binti Abdul Rahmad', '-', 'mashithah', 'F21, Kampung Telok Jawa Mukim Padang Hang, 06570, Alor setar, Kedah', '2023-04-12', 2),
(17, 'aminnuddin', 'Mohammad Aminnuddin Bin Hasnan', '-', 'aminnuddin', 'Plot 17/18, Alor Merah, Sungai Dua, 13800, Butterworth, Pulau Pinang', '2021-11-20', 2),
(18, 'akmal', 'Muhammad Akmal Nizam Bin Mazlan', '-', 'akmal', '4756, Lorong 6, Kampung Lahar Tiang, 13210, Kepala Batas, Pulau Pinang', '2022-07-08', 2),
(19, 'danial', 'Muhammad Danial Bin Mohd Azrul Affendi', '-', 'danial', '249, Jalan Padang, Kampung Pinang, Kamunting, 34600, Taiping, Perak', '2023-01-30', 2),
(20, 'adam', 'Muhammad Adam Iman Bin Zuny Norazly', '-', 'adam', '5276, Bagan Berat, Telok Air Tawar, 13050, Butterworth, Pulau Pinang', '2021-08-15', 2),
(21, 'aidil', 'Muhammad Aidil Bin Suhaili', '-', 'aidil', 'NO 49, Jalan 22. Taman Sri Jelok, 43000, Kajang, Selangor', '2022-05-22', 2),
(22, 'amirul_hakim', 'Muhammad Amirul Hakim Bin Mohd Nurdin', '-', 'amirul_hakim', 'no 1, Pekan Teroi, 08800, Guar Chempedak, Kedah', '2023-09-10', 2),
(23, 'arif', 'Muhammad Arif Hakimi Bin Yusman', '-', 'arif', 'no 26, Ladang BMR, Jalan Sungai Kob, Karangan, Kedah', '2021-04-05', 2),
(24, 'azrol', 'Muhammad Danial Azrol Bin Noorazizan', '-', 'azrol', 'no 51, Kampung Tanjung Setol, Jalan Masjid, Bukit Jenun, 06720, Pendang, Kedah', '2022-10-18', 2),
(25, 'faris_zahidi', 'Muhammad Faris Zahidi Bin Mohd Fakhrey', '-', 'faris_zahidi', 'no 14 D, Kampung Sukamari, 06700, Pendang, Kedah', '2023-06-27', 2),
(26, 'haiqal2', 'Muhammad Haiqal Bin Jamil', '-', 'haiqal2', '1786, perkampungan Berapit, 1400, Bukit Mertajam, Pulau Pinang', '2021-12-08', 2),
(27, 'ikmal', 'Muhammad Ikmal Bin Ismail', '-', 'ikmal', '390A, Kuaters Guru Sek Keb. Dulang, Dulang Kecil, 06900, Yan, Kedah', '2021-07-14', 2),
(28, 'izzat', 'Muhammad Izzat Aiman Bin Abdul Nasir', '-', 'izzat', 'Kampung Lahar Buaya, Mukim Pengkalan Kundur, 05400, Alor Setar, Kedah', '2022-04-28', 2),
(29, 'khaizal', 'Muhammad Khaizal Bin Zulkifli', '-', 'khaizal', '36, Kampung Baru Tepi Laut, Ayer Hitam, 06150, Jitra, Kedah', '2023-02-10', 2),
(30, 'iman', 'Muhammad Nur Iman Bin Md Saad', '-', 'iman', 'no 17, jalan TPS 3/1, Taman Pelangi Semenyih, 43500, Semenyih, Selangor', '2021-10-05', 2),
(31, 'reezal', 'Muhammad Reezal Faris Bin Hamzah', '-', 'reezal', 'No 1B, Jalan Sungai Jagong, Sungai Layar, 08000, Sungai Petani, Kedah', '2022-06-19', 2),
(32, 'ridhwan', 'Muhammad Ridhwan Bin Khairul Anuar', '-', 'ridhwan', 'no 10, Kampung, Darat Mukim Tebengau, Kuala Kedah, 06600, Alor Setar, Kedah', '2023-11-30', 2),
(33, 'shukri', 'Muhammad Shukri Bin Abdul Aziz', '-', 'shukri', 'No 4A, Jalan Pecah Batu, Kg Bongor, 33320, Gerik, Perak', '2021-03-08', 2),
(34, 'syabil', 'Muhammad Syabil Naim Bin Samsuddin', '-', 'syabil', '351, Jalan Perdana 8/9, Bandar Perdana, Sungai Petani, 08000, kedah', '2022-09-14', 2),
(35, 'syahmie', 'Muhammad Syahmie Bin Sam', '-', 'syahmie', 'N-G-5, Pangsapuri Uda, Tanjung Tokong, 10470, Georgetown, Pulau Pinang', '2023-06-07', 2),
(36, 'munawwarah', 'Munawwarah binti Mat Isa ', '-', 'munawwarah', 'Lot 6, Kampung Tepi Taman Gurun Jaya', '2021-12-15', 2),
(37, 'syamimie', 'Noor Syamimie Binti Muhamad Sofian Ang', '-', 'syamimie', 'No 568, Jalan Mutiara 5/3, Taman Mutiara Sungai Kob', '2021-05-10', 2),
(38, 'azwani', 'Nor Azwani Binti Mohamad Zainal Abidin', '-', 'azwani', 'No.16 k, Parit Ali Kalang, Telok, Medan', '2022-02-22', 2),
(39, 'saidatul', 'Nor Saidatul Najwa Binti Sarifudin', '-', 'saidatul', 'No.28, Solok Setia 2C, Taman Setia', '2023-08-15', 2),
(40, 'adriana', 'Nur Adriana Binti Zulkifli', '-', 'adriana', 'no 3186, Lorong Serampang 9/1, Taman ria Jaya, 08000, sungai petani, kedah', '2021-11-05', 2),
(41, 'aina', 'Nur Aina Binti Yahaya', '-', 'aina', 'No 30, Jalan JPS, Kampung Kuala Kuang, 09200, Kupang, Kedah', '2022-07-28', 2),
(42, 'najihah', 'Nur Aina Najihah Binti Mazlan', '-', 'najihah', 'no 18, Lorong Guar Perahu Indah 7, Taman Guar Perahu Indah, Kubang Semang, 14000, Bukit Mertajam, Pulau Pinang', '2023-04-10', 2),
(43, 'azimin', 'Nur Azimin Binti Za&#039;Ba', '-', 'azimin', 'no 8, Lorong Seri Penarak 01, Kampung Penarak, Mukim Kuah, 07000, Langkawi, Kedah', '2021-09-22', 2),
(44, 'dalilah', 'Nur Dalilah Farhana Bt Md Fazli', '-', 'dalilah', 'no28, Lorong Lampam 3, Seberang Jaya, 13700, Perai, Pulau Pinang', '2022-04-14', 2),
(45, 'erisya', 'Nur Erisya Elyana Binti Mohd Ridzuan', '-', 'erisya', 'A-10J Kondominium Langat Jaya, Jalan Datok Alias, 43200, Batu 9 Cheras, Selangor', '2023-01-18', 2),
(46, 'fadhlin', 'Nur Fadhlin Qistina Binti Yahya', '-', 'fadhlin', 'F-327-E, Lot 469, kg seberang terus, Kota Kuala Muda, 08500, sungai petani, kedah', '2021-06-27', 2),
(47, 'idayu', 'Nur Farisha Idayu Binti Mohd Zamri', '-', 'idayu', 'RMR Kampung Banai, Lorong Kelumpok, Jalan Wang Tepus, 06000, Jitra, Kedah', '2021-04-15', 2),
(48, 'fatehah', 'Nur Fatehah Binti Shaharom', '-', 'fatehah', '003, Parit Kualoh, Sungai Kepar, Simpang Empat, 34400, Semanggol, Perak', '2022-11-28', 2),
(49, 'hasyimah', 'Nur Hasyimah Binti Azhan', '-', 'hasyimah', 'No 10, Medan Maju 3, Taman Haji Abdullah Fahim, 13200, Kepala Batas, Pulau Pinang', '2023-03-10', 2),
(50, 'hazwani', 'Nur Hazwani Nabihah Binti Jamil', '-', 'hazwani', '27, Jalan Jawi Jaya 5, Taman Jawi Jaya, 14200, Sungai Jawi, Pulau Pinang', '2021-09-08', 2),
(51, 'irdina', 'Nur Irdina Izzati Binti Zulkifly', '-', 'irdina', 'TS 1489, jalan Sempadan Parit kasa, 14320, Nibong Tebale, pulau pinang', '2022-06-22', 2),
(52, 'izzati', 'Nur Izzati Akmal Binti Zulkifli', '-', 'izzati', 'no 281, lorong 1/8, taman cekur manis, 09600, luna, kedah', '2023-01-15', 2),
(53, 'madeehah', 'Nur Madeehah Binti Khairuddin', '-', 'madeehah', '24, persiaran muhibbah, taman B, 14000, bukit mertajam, pulau pinang', '2021-07-30', 2),
(54, 'saffarra', 'Nur Saffarra Binti Mohd Razali', '-', 'saffarra', '1203, permatang janggus, permatang pauh, 13500, buit mertajam, pulau pinang', '2022-04-10', 2),
(55, 'syafawati', 'Nur Syafawati Bt Mahazir', '-', 'syafawati', '6076, pantai kamlon, 13200, kepala batas, pulau pinang', '2023-09-18', 2),
(56, 'syahidatul', 'Nur Syahidatul Husna Binti Mohd Ilias', '-', 'syahidatul', 'kampung petai kudung gulau, 08120, sik, kedah', '2021-12-05', 2),
(57, 'zaitul', 'Nur Zaitul Akmal Binti Romli', '-', 'zaitul', 'no 41A, Kampung changkat nering, 06700, pendang, kedah', '2022-07-14', 2),
(58, 'nabilah', 'Nurhanis Nabilah Binti Roslan', '-', 'nabilah', 'lot 29, taman nilam, jln datuk kumbar, 05300, alor setar, kedah', '2023-04-27', 2),
(59, 'balqis', 'Nurilham Balqis Binti Sahidan', '-', 'balqis', '19, jalan perlis, 06100, kodiang, kedah', '2021-10-12', 2),
(60, 'najwa', 'Nurnajwa Binti Ramli', '-', 'najwa', 'sblh 865-G, mkm 13, jln sg. nibong kecil, jln tun dr, awang, 11900, bayan lepas, pulau pinang', '2022-03-08', 2),
(61, 'syaidatul', 'Nurrul Syaidatul Najwa Binti Hassan', '-', 'syaidatul', 'no 69, lot 13721, kg tersusun a.a. Tin, 35600, sungkai, perak', '2021-10-22', 2),
(62, 'amirah', 'Nurul Amirah Binti Azhari', '-', 'amirah', '427, jalan sentosa, taman seri sentosa, 09600, lunas, kedah', '2022-08-14', 2),
(63, 'anis', 'Nurul Anis Binti Zakaria', '-', 'anis', 'F268A, kg. permatang kedundong, pinang tunggal, 08000, sungai petani, kedah', '2023-05-05', 2),
(64, 'anisa', 'Nurul Anisa Nasir', '-', 'anisa', 'no 130, Kampung Kerunai, 33310, gerik, perak', '2021-12-18', 2),
(65, 'aryani', 'Nurul Aryani Binti Shuib', '-', 'aryani', 'kampung kubang yoi, mukim jeneri, 08320, sik, kedah', '2022-03-30', 2),
(66, 'asyiqin', 'Nurul Asyiqin Binti Ahmad Tamiri', '-', 'asyiqin', 'no 88, rumah kembar batu 13, bukit besar, kota sarang semut, 06800, alor setar, kedah', '2023-01-08', 2),
(67, 'batrisyia', 'Nurul Batrisyia Hazwani Binti Mohd Taufek', '-', 'batrisyia', 'Kampung cherok tok pendik, mukim gelong, 06000, jitra, kedah', '2021-09-12', 2),
(68, 'husnina', 'Nurul Husnina Binti Suhaili', '-', 'husnina', 'Kampung padang setol, Mukim pedu, 06300, kuala nerang, kedah', '2022-05-25', 2),
(69, 'izzah', 'Nurul Izzah Fakhida Bt Kamaruddin', '-', 'izzah', 'no 730, lorong mahkota 17/2, taman seri mahkota, 09000, kulim, kedah', '2023-02-12', 2),
(70, 'nazifa', 'Nurul Nazifa Binti Rais', '-', 'nazifa', 'no 102 (2), kampung tanjung mali, mukim kedawang, 07000, langkawi, kedah', '2021-11-02', 2),
(71, 'nazirah', 'Nurul Nazirah Binti Noor Mohd Azman', '-', 'nazirah', 'Blok J-3-24, rumah pangsa padang gembak, 11400, ayer itam, pulau pinang', '2022-04-30', 2),
(72, 'syafiqah', 'Nurul Syafiqah Binti Azizan', '-', 'syafiqah', 'no 42, jalan bukit jana, RPT bukit jana, 34600, kamunting, perak', '2023-07-15', 2),
(73, 'syahirah', 'Nurul Syahirah Binti Md Saad', '-', 'syahirah', 'no418, lorong  mutiara 1B/3, Taman Mutiara, sungai kob, 09700, karangan, kedah', '2021-08-08', 2),
(74, 'yasmin', 'Nurul Yasmin Binti Mohd Arif', '-', 'yasmin', 'No 47, Kampung Senggora, Mukim Bukit Raya, 06660, Pendang, Kedah', '2022-06-14', 2),
(75, 'zulaika', 'Nuur Zulaika Binti Md Yazi', '-', 'zulaika', '150, lorong 15, kampung kubang eriang, mukim sungai laka, 06010, changlun, kedah', '2023-04-18', 2),
(76, 'syuhadah', 'Siti Nur Syuhadah Bt Mohd Zayadi', '-', 'syuhadah', '10, linjang nelayan, kuala sg pinang, 11010, balik pulau, pulau pinang', '2021-12-30', 2),
(77, 'siti', 'Siti Nurshahirah Bt Shahrul Nizam', '-', 'siti', 'G-4-4 flat Tamn sri gemilang, mukim mergong, 05150, Alor setar, kedah', '2022-10-05', 2),
(78, 'nabila', 'Nurul Nabila Natasha Binti Anuar', '-', 'nabila', 'A-12-01 Flat desa wawasan, jalan betek, 14000, bukit mertajam, pulau pinang', '2023-03-22', 2),
(79, 'syazwani', 'Nurul Syazwani Binti Mohd Zullzaidi', '-', 'syazwani', '2114, lorong lagenda 516, taman lagenda, 09400, padang serai, kedah', '2021-05-18', 2),
(80, 'nurul', 'Nurul Izzati Binti Rosnizam', '-', 'nurul', '548, lorong 115B, taman semarak, 08000, sungai petani, kedah', '2022-01-10', 2),
(81, 'danil', 'Mohd Danil Bin Yob', '-', 'danil', '-', '2021-07-08', 2),
(82, 'mutalib', 'Abdul Mutalib Bin Karya', '-', 'mutalib', '-', '2022-04-15', 2),
(83, 'burhanuddin', 'Hj, Burhanuddin Hj, Wahab', '-', 'burhanuddin', '-', '2023-02-28', 2),
(84, 'anur', 'Mohd Anur B Hussin', '-', 'anur', '-', '2022-11-10', 2),
(85, 'yusoff', 'Mohammad Yusoff Bin Bakar', '-', 'yusoff', '-', '2021-09-20', 2),
(86, 'jusoh', 'Jusoh Bin Yaacob', '-', 'jusoh', '-', '2022-06-05', 2),
(87, 'dnur', 'Mohd Dnur Hussin', '-', 'dnur', '-', '2023-05-12', 2),
(88, 'ahmad', 'Ahmad Bin Musa', '-', 'ahmad', '-', '2021-12-01', 2),
(89, 'hamzah', 'Hamzah Bin Jaafar', '-', 'hamzah', '-', '2022-09-25', 2),
(90, 'kamarudin', 'Kmarudin Bin Othman', '-', 'kamarudin', '-', '2023-08-08', 2),
(91, 'hashim', 'Hashim Bin Ahmad', '-', 'hashim', '-', '2021-10-30', 2),
(92, 'fauzi', 'Ahmad Fauzi Bin Rejab', '-', 'fauzi', '-', '2022-02-15', 2),
(93, 'shukri2', 'Haji Shukri B Samsudin', '-', 'shukri2', '-', '2023-06-20', 2),
(94, 'saidin', 'Saidin Bin Idris', '-', 'saidin', '-', '2021-08-03', 2),
(95, 'nizam', 'Mohd Nizam Bin Saidin', '-', 'nizam', '-', '2022-03-18', 2),
(96, 'razak', 'Abdul Razak Bin Mahmud', '-', 'razak', '-', '2023-01-30', 2),
(97, 'jamaludin', 'Jamaludin Bin Sharif', '-', 'jamaludin', '-', '2021-12-12', 2),
(98, 'bakar', 'Abu Bakar Bin Omar', '-', 'bakar', '-', '2022-07-05', 2),
(99, 'zainuddin', 'Mohd Zainuddin Bin Ghani', '-', 'zainuddin', '-', '2023-04-10', 2),
(100, 'sharudin', 'Sharudin Jaya', '-', 'sharudin', '-', '2021-11-28', 2),
(101, 'remlee', 'Remlee Ahmad', '-', 'remlee', '-', '2022-08-12', 2),
(102, 'shuhaimi', 'Ahmad Shuhaimi Kassim', '-', 'shuhaimi', '-', '2023-03-25', 2),
(103, 'sufian', 'Mohd Sufian Bin Haji Muda', '-', 'sufian', '-', '2021-10-15', 2),
(104, 'ibrahim', 'Ibrahim Bin Ahmad', '-', 'ibrahim', '-', '2022-04-02', 2),
(105, 'mohammad', 'Mohammad Dhiyaul Hapmh Bin Fatah Yasiw', '-', 'mohammad', '-', '2023-07-18', 2),
(106, 'talib', 'Dato HJ Talib Bin HJ Ali', '-', 'talib', '-', '2021-12-08', 2),
(107, 'mustaffa', 'Mustaffa Bin Muhammad', '-', 'mustaffa', '-', '2022-06-22', 2),
(108, 'azemi', 'Azemi Bin Salim', '-', 'azemi', '-', '2023-05-07', 2),
(109, 'nardin', 'Nardin Bakar', '-', 'nardin', '-', '2021-11-30', 2),
(110, 'arshad', 'Arshad Abas', '-', 'arshad', '-', '2022-09-10', 2),
(111, 'hasan', 'Hasan Hashim', '-', 'hasan', '-', '2023-01-15', 2),
(112, 'azmir', 'Muhammad Azmir Bin Azran', '-', 'azmir', '-', '2021-09-05', 2),
(113, 'iqbal', 'Mohd Iqbal Bin Mohd Shariff', '-', 'iqbal', '-', '2022-03-18', 2),
(114, 'pozilan', 'Pozilan Bin Jaya', '-', 'pozilan', '-', '2023-06-02', 2),
(115, 'razali', 'Mej Razali Bin Che Pa', '-', 'razali', '-', '2021-08-20', 2),
(116, 'fahmi', 'Mohd Fahmi B Mohd Rashid', '-', 'fahmi', '-', '2022-05-12', 2),
(117, 'nazri', 'Mohd Nazri Bin Adam', '-', 'nazri', '-', '2023-04-01', 2),
(118, 'asri', 'Mohd Asri Bin Yaacob', '-', 'asri', '-', '2021-07-28', 2),
(121, 'nazmi133', 'mohammad nazmi', 'mohammadnazmi1666@gmail.com', 'Mo@147215', 'NO 2076, LORONG 112, TAMAN RIA, 08000,', '2023-12-06', 2),
(123, 'hafizam', 'hafizam zam', 'hafizam@gmail.com', 'hafizam', 'aloq staq\r\n', '2023-12-09', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asnaf`
--
ALTER TABLE `asnaf`
  ADD PRIMARY KEY (`asnaf_id`),
  ADD KEY `fk_asnaf_user_id` (`user_id`);

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`kom_id`),
  ADD KEY `fk_komputer_user_id` (`user_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `penyelenggaraan`
--
ALTER TABLE `penyelenggaraan`
  ADD PRIMARY KEY (`pe_id`),
  ADD KEY `fk_penyelenggaraan_user_id` (`user_id`);

--
-- Indexes for table `sumbangan`
--
ALTER TABLE `sumbangan`
  ADD PRIMARY KEY (`sum_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_level_level_id` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asnaf`
--
ALTER TABLE `asnaf`
  MODIFY `asnaf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `kom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyelenggaraan`
--
ALTER TABLE `penyelenggaraan`
  MODIFY `pe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sumbangan`
--
ALTER TABLE `sumbangan`
  MODIFY `sum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asnaf`
--
ALTER TABLE `asnaf`
  ADD CONSTRAINT `fk_asnaf_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komputer`
--
ALTER TABLE `komputer`
  ADD CONSTRAINT `fk_komputer_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penyelenggaraan`
--
ALTER TABLE `penyelenggaraan`
  ADD CONSTRAINT `fk_penyelenggaraan_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_level_level_id` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
