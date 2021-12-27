-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2021 pada 15.02
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `nomor_induk` int(8) NOT NULL,
  `nisn` int(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_siswa`, `jk`, `kelas`, `nomor_induk`, `nisn`, `alamat`, `foto`) VALUES
(711, 'Aditya Saepul Pratama', 'L', '7A', 0, 88613427, 'Baleendah', 'orang.png'),
(713, 'Alya Anggraini', 'P', '7A', 0, 95555179, 'Baleendah', 'orang.png'),
(721, 'Abdul Rayhan Dealova', 'L', '7B', 0, 93396229, 'Baleendah', 'orang.png'),
(723, 'Amelia Putri', 'P', '7B', 0, 88241093, 'Baleendah', 'orang.png'),
(731, 'Abi Mulyana', 'L', '7C', 0, 96933170, 'Baleendah', 'orang.png'),
(735, 'Asri Diandini', 'P', '7C', 0, 97938574, 'Baleendah', 'orang.png'),
(741, 'Abizar Sulaiman', 'L', '7D', 0, 85212761, 'Baleendah', 'orang.png'),
(748, 'Destiyana', 'P', '7D', 0, 8100369, 'Baleendah', 'orang.png'),
(751, 'Adi Haidar Prayoga', 'L', '7E', 0, 86549944, 'Baleendah', 'orang.png'),
(754, 'Aria Panimau', 'L', '7E', 0, 88206841, 'Baleendah', 'orang.png'),
(761, 'Aldy Fauzi Nugraha', 'L', '7F', 0, 83226996, 'Baleendah', 'orang.png'),
(763, 'Andini Febriyani', 'P', '7F', 0, 93666591, 'Baleendah', 'orang.png'),
(771, 'Abdul Ghani', 'L', '7G', 0, 84891384, 'Baleendah', 'orang.png'),
(776, 'Bunga Amelia', 'P', '7G', 0, 81940960, 'Baleendah', 'orang.png'),
(781, 'Agian Febry Rukmana', 'L', '7H', 0, 98120124, 'Baleendah', 'orang.png'),
(782, 'Alivia', 'P', '7H', 0, 84850095, 'Baleendah', 'orang.png'),
(785, 'Azril Rimal Pradana', 'L', '7H', 0, 64307852, 'Baleendah', 'orang.png'),
(791, 'Akram Alghony', 'L', '7I', 0, 93447512, 'Baleendah', 'orang.png'),
(1231, 'vinny', 'P', '7A', 1231, 0, 'Bandung', '137-e.jpg'),
(7101, 'Akmal Raisya Hayatul Haq', 'L', '7J', 0, 85285370, 'Baleendah', 'orang.png'),
(7102, 'Alpin Ramdani', 'L', '7J', 0, 83934675, 'Baleendah', 'orang.png'),
(7111, 'Emily Saputra', 'L', '7A', 0, 81496209, 'Baleendah', 'orang.png'),
(7114, 'Arif Rahman', 'L', '7K', 0, 83090686, 'Baleendah', 'orang.png'),
(7121, 'Nabila Indriani', 'P', '7A', 0, 94521220, 'Baleendah', 'orang.png'),
(7130, 'Sany Aprilia', 'P', '7A', 0, 95998840, 'Baleendah', 'orang.png'),
(7221, 'Radya Mahardika', 'L', '7B', 0, 97570433, 'Baleendah', 'orang.png'),
(7225, 'Razy Fauzan', 'L', '7B', 0, 98138995, 'Baleendah', 'orang.png'),
(7231, 'Siti Aisyah', 'P', '7B', 0, 83834978, 'Baleendah', 'orang.png'),
(7321, 'Nur Aisyah', 'P', '7C', 0, 88030028, 'Baleendah', 'orang.png'),
(7325, 'Reza Juliyana', 'L', '7C', 0, 85249303, 'Baleendah', 'orang.png'),
(7327, 'Rizky Aditya', 'L', '7C', 0, 83303104, 'Baleendah', 'orang.png'),
(7410, 'Fahmi Firdaus', 'L', '7D', 0, 89061236, 'Baleendah', 'orang.png'),
(7416, 'Lupi Prianti', 'P', '7D', 0, 86560270, 'Baleendah', 'orang.png'),
(7428, 'Rizky Andean', 'L', '7D', 0, 91188110, 'Baleendah', 'orang.png'),
(7510, 'Rasty', 'P', '7E', 0, 98281483, 'Baleendah', 'orang.png'),
(7516, 'Khanza Nova', 'P', '7E', 0, 98091500, 'Baleendah', 'orang.png'),
(7532, 'Yuditya Pratama', 'L', '7E', 0, 82829730, 'Baleendah', 'orang.png'),
(7623, 'Raka Saputra', 'L', '7F', 0, 82229672, 'Baleendah', 'orang.png'),
(7627, 'Rizqi Ripaldi', 'L', '7F', 0, 95544485, 'Baleendah', 'orang.png'),
(7632, 'Zahra Hanifa', 'P', '7F', 0, 81812941, 'Baleendah', 'orang.png'),
(7710, 'Fadil Fadilah', 'L', '7G', 0, 91312199, 'Baleendah', 'orang.png'),
(7711, 'Firli Nontin', 'P', '7G', 0, 87052417, 'Baleendah', 'orang.png'),
(7727, 'Ripal Setiawan', 'L', '7G', 0, 99335799, 'Baleendah', 'orang.png'),
(7825, 'Salwan Ramadan', 'L', '7H', 0, 83684754, 'Baleendah', 'orang.png'),
(7828, 'Tiara Renata', 'P', '7H', 0, 94608649, 'Baleendah', 'orang.png'),
(7915, 'Lingga Fairus', 'L', '7I', 0, 93127704, 'Baleendah', 'orang.png'),
(7925, 'Renata Saputri', 'P', '7I', 0, 83162555, 'Baleendah', 'orang.png'),
(7926, 'Rifky Ferdiana', 'L', '7I', 0, 82029985, 'Baleendah', 'orang.png'),
(7931, 'Willy Ferlyana', 'L', '7I', 0, 96256748, 'Baleendah', 'orang.png'),
(71022, 'Oscar Oya', 'L', '7J', 0, 9781765, 'Baleendah', 'orang.png'),
(71027, 'Rizal Maulana', 'L', '7J', 0, 89864984, 'Baleendah', 'orang.png'),
(71028, 'Safa Salsabila', 'P', '7J', 0, 99014230, 'Baleendah', 'orang.png'),
(71115, 'Kyo Nurichi', 'L', '7K', 0, 89170888, 'Baleendah', 'orang.png'),
(71122, 'Olivia Nur Azmi', 'P', '7K', 0, 83834067, 'Baleendah', 'orang.png'),
(71123, 'Aldi Ramadan', 'L', '7K', 0, 91668626, 'Baleendah', 'orang.png'),
(71129, 'Sevilla Vil', 'P', '7K', 0, 98961144, 'Baleendah', 'orang.png'),
(898989, 'linda', 'P', '8C', 898989, 0, 'bandung', 'orang.png'),
(12345676, 'vinny', 'P', '7A', 12345676, 0, 'Belgia', 'orang.png'),
(19201002, 'Abdul Rachma Syam', 'L', '9H', 19201002, 0, 'Baleendah', 'orang.png'),
(19201003, 'Abi Fachrie Hairaqy', 'L', '9G', 19201003, 0, 'Baleendah', 'orang.png'),
(19201004, 'Acep Arimansyah', 'L', '9A', 19201004, 0, 'Baleendah', 'orang.png'),
(19201006, 'Adinda Rahmi Syayidina', 'P', '9F', 19201006, 0, 'Baleendah', 'orang.png'),
(19201013, 'Agus Rahman', 'L', '9I', 19201013, 0, 'Baleendah', 'orang.png'),
(19201015, 'Agustina Nainggolan', 'P', '9G', 19201015, 0, 'Baleendah', '97-orang.png'),
(19201016, 'Ahmad Alawaludin', 'L', '9G', 19201016, 0, 'Baleendah', '887-orang.png'),
(19201020, 'Ainnul Mardiah', 'P', '9G', 19201020, 0, 'Baleendah', '334-orang.png'),
(19201021, 'Ainur Rahmawati', 'P', '9J', 19201021, 0, 'Baleendah', 'orang.png'),
(19201024, 'Akbar Maulana', 'L', '9D', 19201024, 0, 'Baleendah', 'orang.png'),
(19201027, 'Alfi Husna Rizki Ridho Tama', 'L', '9C', 19201027, 0, 'Baleendah', 'orang.png'),
(19201032, 'Allaena Meisca', 'P', '9B', 19201032, 0, 'Baleendah', '66-orang.png'),
(19201034, 'Alya Aulia Nurfauziah', 'P', '9E', 19201034, 0, 'Baleendah', 'orang.png'),
(19201035, 'Alya Nur Zahra', 'P', '9E', 19201035, 0, 'Baleendah', 'orang.png'),
(19201041, 'Amel Cahyani', 'P', '9A', 19201041, 0, 'Baleendah', '503-orang.png'),
(19201043, 'Andhika Nur Ramadan', 'L', '9J', 19201043, 0, 'Baleendah', '39-orang.png'),
(19201050, 'Anggi Regina', 'P', '9B', 19201050, 0, 'Baleendah', '264-orang.png'),
(19201053, 'Anggita', 'P', '9I', 19201053, 0, 'Baleendah', '40-orang.png'),
(19201060, 'Anjar Wiguna', 'L', '9K', 19201060, 0, 'Baleendah', 'orang.png'),
(19201063, 'Aprilia Praskila', 'P', '9F', 19201063, 0, 'Baleendah', '334-orang.png'),
(19201064, 'Aqila Syahla Syakira', 'P', '9G', 19201064, 0, 'Baleendah', 'orang.png'),
(19201072, 'Aulia Anisa Yuliyanti', 'P', '9A', 19201072, 0, 'Baleendah', 'orang.png'),
(19201078, 'Ayu Nuraina', 'P', '9C', 19201078, 0, 'Baleendah', 'orang.png'),
(19201081, 'Bagas Oktaf Ramadhan', 'L', '9F', 19201081, 0, 'Baleendah', 'orang.png'),
(19201083, 'Bambang Indra Gunawan', 'L', '9J', 19201083, 0, 'Baleendah', '73-orang.png'),
(19201085, 'Bela Selpiyani', 'P', '9I', 19201085, 0, 'Baleendah', 'orang.png'),
(19201087, 'Bintang Apriani', 'P', '9B', 19201087, 0, 'Baleendah', 'orang.png'),
(19201091, 'Bunga Serli Nabila', 'P', '9D', 19201091, 0, 'Baleendah', ''),
(19201104, 'Cipto Suherman', 'L', '9J', 19201104, 0, 'Baleendah', 'orang.png'),
(19201106, 'Daffa Pratama', 'L', '9E', 19201106, 0, 'Baleendah', 'orang.png'),
(19201107, 'Daffa Wisnu Wardhana', 'L', '9I', 19201107, 0, 'Baleendah', '327-orang.png'),
(19201108, 'Dani Yuniar', 'L', '9G', 19201108, 0, 'Baleendah', '326-orang.png'),
(19201116, 'Dea Shafa Aulia', 'P', '9C', 19201116, 0, 'Baleendah', 'orang.png'),
(19201117, 'Deliyana', 'P', '9D', 19201117, 0, 'Baleendah', 'orang.png'),
(19201132, 'Dimas Putra Berlian', 'L', '9C', 19201132, 0, 'Baleendah', 'orang.png'),
(19201135, 'Dimas Wahyu Prasetya', 'L', '9G', 19201135, 0, 'Baleendah', '191-orang.png'),
(19201144, 'Egi Permadi', 'L', '9G', 19201144, 0, 'Baleendah', '969-orang.png'),
(19201146, 'Endi Frizky', 'L', '9B', 19201146, 0, 'Baleendah', 'orang.png'),
(19201148, 'Erika Friska Riani', 'P', '9F', 19201148, 0, 'Baleendah', '135-orang.png'),
(19201153, 'Fachry Fauzan', 'L', '9D', 19201153, 0, 'Baleendah', 'orang.png'),
(19201158, 'Fajar Maulana', 'L', '9G', 19201158, 0, 'Baleendah', 'orang.png'),
(19201163, 'Farellino Nugraha Alamsyah', 'L', '9F', 19201163, 0, 'Baleendah', '824-orang.png'),
(19201164, 'Fatan Bagas Ardanar', 'L', '9F', 19201164, 0, 'Baleendah', '354-orang.png'),
(19201166, 'Fauzi Saepul Rohman', 'L', '9I', 19201166, 0, 'Baleendah', '461-orang.png'),
(19201171, 'Fika Firantika', 'P', '9F', 19201171, 0, 'Baleendah', 'orang.png'),
(19201174, 'Firas Ghazi Ardabil', 'L', '9G', 19201174, 0, 'Baleendah', '603-orang.png'),
(19201178, 'Freely Tiara Putri', 'P', '9D', 19201178, 0, 'Baleendah', 'orang.png'),
(19201180, 'Galih Aprialdi', 'L', '9B', 19201180, 0, 'Baleendah', 'orang.png'),
(19201183, 'Gustian Albani Saefulloh', 'L', '9F', 19201183, 0, 'Baleendah', '553-orang.png'),
(19201184, 'Haldi Heldiawan', 'L', '9F', 19201184, 0, 'Baleendah', '757-orang.png'),
(19201187, 'Herlina Permata Sari', 'P', '9H', 19201187, 0, 'Baleendah', 'orang.png'),
(19201191, 'Icha Chintani', 'P', '9K', 19201191, 0, 'Baleendah', 'orang.png'),
(19201195, 'Imas Siti Nuraeni', 'P', '9E', 19201195, 0, 'Baleendah', 'orang.png'),
(19201198, 'Indah Febryani', 'P', '9C', 19201198, 0, 'Baleendah', 'orang.png'),
(19201200, 'Indriani', 'P', '9B', 19201200, 0, 'Baleendah', '540-orang.png'),
(19201201, 'Indyra Fareza', 'P', '9I', 19201201, 0, 'Baleendah', '451-orang.png'),
(19201203, 'Intan Pertiwi', 'P', '9J', 19201203, 0, 'Baleendah', 'orang.png'),
(19201212, 'Jevino Sevik', 'L', '9C', 19201212, 0, 'Baleendah', 'orang.png'),
(19201215, 'Julius Mangi Uly', 'L', '9D', 19201215, 0, 'Baleendah', 'orang.png'),
(19201219, 'Keke Yulia', 'P', '9E', 19201219, 0, 'Baleendah', 'orang.png'),
(19201228, 'Krisna Adiansyah', 'L', '9E', 19201228, 0, 'Baleendah', 'orang.png'),
(19201232, 'Lesiana Yudistira', 'P', '9A', 19201232, 0, 'Baleendah', '143-orang.png'),
(19201235, 'Luthfi Fauzan Gustiandani', 'L', '9H', 19201235, 0, 'Baleendah', '734-orang.png'),
(19201241, 'Mas Ade Adrian', 'L', '9D', 19201241, 0, 'Baleendah', 'orang.png'),
(19201243, 'Mega Apriliani', 'P', '9G', 19201243, 0, 'Baleendah', '22-orang.png'),
(19201245, 'Mia Aulia Nuraeni', 'P', '9I', 19201245, 0, 'Baleendah', '682-orang.png'),
(19201246, 'Miranti Ardelia', 'P', '9H', 19201246, 0, 'Baleendah', '348-orang.png'),
(19201257, 'Mohamad Reyhant', 'L', '9J', 19201257, 0, 'Baleendah', '40-orang.png'),
(19201259, 'Mohamad Rizqi Aprilianto', 'L', '9I', 19201259, 0, 'Baleendah', '967-orang.png'),
(19201282, 'Muhammad Raihan', 'L', '9I', 19201282, 0, 'Baleendah', 'orang.png'),
(19201286, 'Mustakim Mulyadi', 'L', '9G', 19201286, 0, 'Baleendah', '212-orang.png'),
(19201289, 'Nabilla Aprillia', 'P', '9G', 19201289, 0, 'Baleendah', '123-orang.png'),
(19201291, 'Nabila Nur Aprilia', 'P', '9A', 19201291, 0, 'Baleendah', 'orang.png'),
(19201303, 'Natasya', 'P', '9D', 19201303, 0, 'Baleendah', 'orang.png'),
(19201304, 'Nauval Iham Permana', 'L', '9J', 19201304, 0, 'Baleendah', '425-orang.png'),
(19201306, 'Nayla Dwi Putri', 'P', '9J', 19201306, 0, 'Baleendah', '49-orang.png'),
(19201308, 'Nazwa Febrianti', 'P', '9I', 19201308, 0, 'Baleendah', '37-orang.png'),
(19201314, 'Nesta Aliya', 'P', '9G', 19201314, 0, 'Baleendah', 'orang.png'),
(19201319, 'Niko Triasa', 'L', '9J', 19201319, 0, 'Baleendah', 'orang.png'),
(19201325, 'Nuri Ramadhani', 'P', '9E', 19201325, 0, 'Baleendah', 'orang.png'),
(19201326, 'Nurul Miraj', 'P', '9H', 19201326, 0, 'Baleendah', '793-orang.png'),
(19201330, 'Oscar Genio', 'L', '9H', 19201330, 0, 'Baleendah', 'orang.png'),
(19201331, 'Pajar Arip Mulyana', 'L', '9I', 19201331, 0, 'Baleendah', '383-orang.png'),
(19201334, 'Parid Rangga', 'L', '9F', 19201334, 0, 'Baleendah', 'orang.png'),
(19201338, 'Putra Arya Pratama', 'L', '9I', 19201338, 0, 'Baleendah', '167-orang.png'),
(19201340, 'Puzi Lestari', 'P', '9J', 19201340, 0, 'Baleendah', 'orang.png'),
(19201344, 'Rafa Aditya Permana', 'L', '9H', 19201344, 0, 'Baleendah', '853-orang.png'),
(19201345, 'Rafi Fajar Gumelar', 'L', '9A', 19201345, 0, 'Baleendah', 'orang.png'),
(19201354, 'Ramdan Anugrah', 'L', '9A', 19201354, 0, 'Baleendah', '387-orang.png'),
(19201356, 'Randika', 'L', '9C', 19201356, 0, 'Baleendah', 'orang.png'),
(19201358, 'Rangga Rivansyah', 'L', '9H', 19201358, 0, 'Baleendah', '425-orang.png'),
(19201359, 'Rani Rohaeni', 'P', '9K', 19201359, 0, 'Baleendah', 'orang.png'),
(19201366, 'Renata Mutiara', 'P', '9H', 19201366, 0, 'Baleendah', 'orang.png'),
(19201370, 'Restia Oktaviani', 'P', '9B', 19201370, 0, 'Baleendah', 'orang.png'),
(19201372, 'Reva Regita', 'P', '9C', 19201372, 0, 'Baleendah', 'orang.png'),
(19201373, 'Reva Rizkiani', 'P', '9B', 19201373, 0, 'Baleendah', '56-orang.png'),
(19201374, 'Revalina Feriska', 'P', '9A', 19201374, 0, 'Baleendah', '173-orang.png'),
(19201375, 'Revan Aliyansyah Fadillah', 'L', '9J', 19201375, 0, 'Baleendah', 'orang.png'),
(19201377, 'Rezky Maulana', 'L', '9F', 19201377, 0, 'Baleendah', 'orang.png'),
(19201378, 'Rhasya Evangelista', 'P', '9E', 19201378, 0, 'Baleendah', 'orang.png'),
(19201380, 'Rian Ariana', 'L', '9K', 19201380, 0, 'Baleendah', 'orang.png'),
(19201382, 'Rida Silviana', 'P', '9J', 19201382, 0, 'Baleendah', 'orang.png'),
(19201386, 'Ridwan Kurniawan', 'L', '9J', 19201386, 0, 'Baleendah', 'orang.png'),
(19201392, 'Rima Noviani', 'P', '9D', 19201392, 0, 'Baleendah', 'orang.png'),
(19201395, 'Riri Handayani', 'P', '9E', 19201395, 0, 'Baleendah', 'orang.png'),
(19201399, 'Risa Aulia', 'P', '9B', 19201399, 0, 'Baleendah', '246-orang.png'),
(19201404, 'Rizki Dwi Saputra', 'L', '9J', 19201404, 0, 'Baleendah', 'orang.png'),
(19201408, 'Saeful Ferdian', 'L', '9I', 19201408, 0, 'Baleendah', 'orang.png'),
(19201409, 'Safitri Nuraini', 'P', '9H', 19201409, 0, 'Baleendah', 'orang.png'),
(19201412, 'Salsa Apriliani', 'P', '9H', 19201412, 0, 'Baleendah', 'orang.png'),
(19201420, 'Sandi Sopian', 'L', '9K', 19201420, 0, 'Baleendah', 'orang.png'),
(19201424, 'Sarah Aprilia', 'P', '9G', 19201424, 0, 'Baleendah', 'orang.png'),
(19201428, 'Seli Delanti', 'P', '9B', 19201428, 0, 'Baleendah', '940-orang.png'),
(19201433, 'Seni Noviani', 'P', '9E', 19201433, 0, 'Baleendah', 'orang.png'),
(19201434, 'Shabilah Syakinah', 'P', '9C', 19201434, 0, 'Baleendah', 'orang.png'),
(19201443, 'Sindi Wiranti', 'P', '9I', 19201443, 0, 'Baleendah', 'orang.png'),
(19201445, 'Soleh', 'L', '9E', 19201445, 0, 'Baleendah', 'orang.png'),
(19201450, 'Sri Yanti', 'P', '9D', 19201450, 0, 'Baleendah', 'orang.png'),
(19201453, 'Suci Patimah', 'P', '9G', 19201453, 0, 'Baleendah', 'orang.png'),
(19201456, 'Syahla Naera Pioris', 'P', '9F', 19201456, 0, 'Baleendah', 'orang.png'),
(19201462, 'Teguh Fandiistyo', 'L', '9G', 19201462, 0, 'Baleendah', 'orang.png'),
(19201467, 'Tiara Widyanti', 'P', '9H', 19201467, 0, 'Baleendah', 'orang.png'),
(19201469, 'Tria Astra Geni', 'P', '9C', 19201469, 0, 'Baleendah', 'orang.png'),
(19201472, 'Umi Lestari', 'P', '9J', 19201472, 0, 'Baleendah', 'orang.png'),
(19201476, 'Wafi Rizqulloh', 'L', '9H', 19201476, 0, 'Baleendah', 'orang.png'),
(19201481, 'Wildan Mandala Putra', 'L', '9F', 19201481, 0, 'Baleendah', 'orang.png'),
(19201483, 'Wilvia', 'P', '9D', 19201483, 0, 'Baleendah', 'orang.png'),
(19201484, 'Wina', 'P', '9J', 19201484, 0, 'Baleendah', 'orang.png'),
(19201489, 'Wulan Sarinengsih', 'P', '9E', 19201489, 0, 'Baleendah', 'orang.png'),
(19201491, 'Yuki Fauzi Rahadian', 'L', '9B', 19201491, 0, 'Baleendah', 'orang.png'),
(19201499, 'Zahran Raifal Hadil', 'L', '9I', 19201499, 0, 'Baleendah', 'orang.png'),
(19201502, 'Zenit Permana', 'L', '9A', 19201502, 0, 'Baleendah', '246-orang.png'),
(19201503, 'Zhilvani Azzuar', 'P', '9E', 19201503, 0, 'Baleendah', 'orang.png'),
(19201505, 'Zidan Zaneta Ramadhan', 'L', '9J', 19201505, 0, 'Baleendah', 'orang.png'),
(20211002, 'Adiraditya Ramadhan', 'L', '8A', 20211002, 75372677, 'Baleendah', 'orang.png'),
(20211003, 'Adit Pradita Ramadhan', 'L', '8J', 20211003, 87553921, 'Baleendah', 'orang.png'),
(20211005, 'Aditya Dirgantara', 'L', '8B', 20211005, 72990339, 'Baleendah', 'orang.png'),
(20211006, 'Aditya Fadli Maula', 'L', '8I', 20211006, 71071492, 'Baleendah', 'orang.png'),
(20211007, 'Afgan Alghifari', 'L', '8H', 20211007, 82335322, 'Baleendah', 'orang.png'),
(20211009, 'Agis Praditia', 'L', '8C', 20211009, 83278147, 'Baleendah', 'orang.png'),
(20211011, 'Agung Hariri', 'L', '8D', 20211011, 77903720, 'Baleendah', 'orang.png'),
(20211012, 'Agung Mulya Rahman', 'L', '8F', 20211012, 89002610, 'Baleendah', 'orang.png'),
(20211015, 'Aidil', 'L', '8G', 20211015, 71980224, 'Baleendah', 'orang.png'),
(20211022, 'Alia Siti Hazar', 'P', '8C', 20211022, 84027883, 'Baleendah', 'orang.png'),
(20211027, 'Alisa Putri', 'P', '8A', 20211027, 85145402, 'Baleendah', 'orang.png'),
(20211030, 'Alsya Nur Alisya', 'P', '8G', 20211030, 82078341, 'Baleendah', 'orang.png'),
(20211033, 'Amelia Azahra', 'P', '8H', 20211033, 87674813, 'Baleendah', 'orang.png'),
(20211044, 'Asifa Meliyani', 'P', '8D', 20211044, 63390400, 'Baleendah', 'orang.png'),
(20211057, 'Aulia Satya Pratama', 'L', '8E', 20211057, 85724782, 'Baleendah', 'orang.png'),
(20211060, 'Azira Salsabila', 'P', '8B', 20211060, 87030369, 'Baleendah', 'orang.png'),
(20211068, 'Cahaya Berliani', 'P', '8K', 20211068, 84865637, 'Baleendah', 'orang.png'),
(20211071, 'Carlen Felicia Dalinar', 'P', '8J', 20211071, 84888931, 'Baleendah', 'orang.png'),
(20211077, 'Cici Sahara', 'P', '8C', 20211077, 72667712, 'Baleendah', 'orang.png'),
(20211084, 'Destia', 'P', '8J', 20211084, 78816158, 'Baleendah', 'orang.png'),
(20211086, 'Devina Larasati', 'P', '8I', 20211086, 82470000, 'Baleendah', 'orang.png'),
(20211089, 'Elena Cahya Puteri', 'P', '8D', 20211089, 87123419, 'Baleendah', 'orang.png'),
(20211090, 'Dina', 'P', '8F', 20211090, 72721307, 'Baleendah', 'orang.png'),
(20211092, 'Dini', 'P', '8A', 20211092, 71814520, 'Baleendah', 'orang.png'),
(20211093, 'Dini Apriyanti', 'P', '8E', 20211093, 85230071, 'Baleendah', 'orang.png'),
(20211097, 'Egi Ginanjar', 'L', '8H', 20211097, 87963538, 'Baleendah', 'orang.png'),
(20211099, 'Fadil Fahmiludin', 'L', '8D', 20211099, 67698408, 'Baleendah', 'orang.png'),
(20211106, 'Ervin Malik', 'L', '8B', 20211106, 82168333, 'Baleendah', 'orang.png'),
(20211127, 'Fitri Dewi', 'P', '8B', 20211127, 57141279, 'Baleendah', 'orang.png'),
(20211130, 'Frisa Pahera', 'P', '8C', 20211130, 61664880, 'Baleendah', 'orang.png'),
(20211133, 'Galih Afriansyah', 'L', '8K', 20211133, 88876177, 'Baleendah', 'orang.png'),
(20211136, 'Hamidah', 'P', '8J', 20211136, 84505291, 'Baleendah', 'orang.png'),
(20211142, 'Irfansyah', 'L', '8D', 20211142, 78840756, 'Baleendah', 'orang.png'),
(20211143, 'Ikhsan Ariq', 'L', '8F', 20211143, 71104457, 'Baleendah', 'orang.png'),
(20211145, 'Ilham Lesmana', 'L', '8A', 20211145, 83494439, 'Baleendah', 'orang.png'),
(20211148, 'Indra Saputra', 'L', '8G', 20211148, 72259165, 'Baleendah', 'orang.png'),
(20211151, 'Intan Nur Azizah', 'P', '8H', 20211151, 85068594, 'Baleendah', 'orang.png'),
(20211152, 'Iqbal Febrian', 'L', '8C', 20211152, 87444265, 'Baleendah', 'orang.png'),
(20211164, 'Kamila', 'P', '8F', 20211164, 73741227, 'Baleendah', 'orang.png'),
(20211173, 'Kiki Taufik', 'L', '8I', 20211173, 74218321, 'Baleendah', 'orang.png'),
(20211176, 'Marsela Novianti', 'P', '8D', 20211176, 78247983, 'Baleendah', 'orang.png'),
(20211189, 'Meiky Radit Alfajri', 'L', '8E', 20211189, 75122590, 'Baleendah', 'orang.png'),
(20211200, 'Muhamad Alfiansyah', 'L', '8C', 20211200, 79280017, 'Baleendah', 'orang.png'),
(20211204, 'Muhamad Sopyan', 'L', '8A', 20211204, 89026174, 'Baleendah', 'orang.png'),
(20211219, 'Nafisa Zachrie Ismail', 'P', '8I', 20211219, 72535291, 'Baleendah', 'orang.png'),
(20211230, 'Neng Ayu Nurmayanti', 'P', '8H', 20211230, 85310816, 'Baleendah', 'orang.png'),
(20211238, 'Oksa Muhammad Naufal', 'L', '8E', 20211238, 86595007, 'Baleendah', 'orang.png'),
(20211241, 'Pebbri Yanti', 'P', '8G', 20211241, 73298649, 'Baleendah', 'orang.png'),
(20211242, 'Perdiansyah', 'L', '8B', 20211242, 76047537, 'Baleendah', 'orang.png'),
(20211244, 'Putri Dwi Anggraeni', 'P', '8H', 20211244, 77409337, 'Baleendah', 'orang.png'),
(20211247, 'Putri Sri Rahayu', 'P', '8K', 20211247, 82985472, 'Baleendah', 'orang.png'),
(20211250, 'Raditya', 'L', '8I', 20211250, 81642114, 'Baleendah', 'orang.png'),
(20211253, 'Rafi Muhaidin', 'L', '8H', 20211253, 84248174, 'Baleendah', 'orang.png'),
(20211261, 'Randi', 'L', '8J', 20211261, 83486203, 'Baleendah', 'orang.png'),
(20211273, 'Ria Amelia', 'P', '8E', 20211273, 78316997, 'Baleendah', 'orang.png'),
(20211275, 'Rifa Afrah Nursyamsiyah', 'P', '8I', 20211275, 83975097, 'Baleendah', 'orang.png'),
(20211277, 'Rifki Anugrah Putra', 'L', '8G', 20211277, 61400454, 'Baleendah', 'orang.png'),
(20211285, 'Risma Febrianti', 'P', '8I', 20211285, 72952862, 'Baleendah', 'orang.png'),
(20211290, 'Rizki Ramdani', 'L', '8K', 20211290, 73175941, 'Baleendah', 'orang.png'),
(20211300, 'Salsabilah', 'P', '8F', 20211300, 71472541, 'Baleendah', 'orang.png'),
(20211323, 'Tiarani Olivia ', 'P', '8K', 20211323, 85151746, 'Baleendah', 'orang.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(7) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `jumlah`, `gambar`) VALUES
(94001, 'Matematika kls 7', 'Abdur Rahman Asari', 'Kemendikbud', 2016, 449, '737-7.1.jpg'),
(94551, 'Bahasa Indonesia kls 7', 'Titik Harsiati', 'Kemendikbud', 2016, 448, '634-7.2.jpg'),
(94901, 'Bahasa Inggris kls 7', 'Siti Wachidah', 'Kemendikbud', 2016, 449, '484-7.3.png'),
(95351, 'PKN kls 7', 'Lukman Surya Saputra', 'Kemendikbud', 2016, 450, '795-7.4.jpg'),
(95801, 'IPS kls 7', 'Iwan Setiawan', 'Kemendikbud', 2016, 450, '948-7.5.jpeg'),
(96251, 'IPA kls 7', 'Wahono Widodo', 'Kemendikbud', 2016, 450, '631-7.6.jpg'),
(96701, 'PAI kls 7', 'Muhammad Ahsan', 'Kemendikbud', 2016, 450, '788-7.7.jpg'),
(97151, 'Prakarya kls 7', 'Suci Paresti', 'Kemendikbud', 2016, 450, '360-7.8.jpg'),
(97601, 'PJOK kls 7', 'Muhajir', 'Kemendikbud', 2016, 450, '703-7.9.jpg'),
(98051, 'Seni Budaya kls 7', 'Eko Purnomo', 'Kemendikbud', 2016, 450, '702-7.10.jpg'),
(98502, 'We All Speak English', 'Erna Fitriani', 'Gading Inti Prima ', 2014, 0, '101-12.jpg'),
(98555, 'Seni Kerajinan Sulam', 'Soedjono, B.Sc', 'Angkasa', 2014, 0, '277-65.jpg'),
(98582, 'Aku Tahu Tentang Cara Hidup Sehat', 'Dra. Endyah M', 'Duta Graha', 2015, 0, '483-559.jpeg'),
(98869, 'Rahasia Sehari-hari', 'Hans Jurgen Press', 'Angkasa', 2014, 1, '448-723.jpg'),
(98872, 'Mengenal Lingkungan', 'Sesya Gianti', 'Graha Bandung', 2014, 0, '470-295.jpeg'),
(98875, 'Mengenal Teknologi', 'Arfan Mutaqin', 'Graha Bandung ', 2014, 1, '613-298.jpg'),
(925831, 'Air dan Kegunaannya', 'Ivan Masdudin', 'Kenanga Pustaka', 2010, 10, '560-1559.jpeg'),
(927178, 'Wanda Basa Sunda kls 8', 'Setiadi Rukmana', 'Thursina Media', 2017, 0, '227-8.1824.jpg'),
(929971, 'PKN kls 8', 'Lukman Surya Saputra', 'Kemendikbud', 2017, 127, '353-8.1924.jpg'),
(930018, 'Bahasa Inggris kls 8', 'Siti Wachidah', 'Kemendikbud', 2017, 127, '426-8.1925.png'),
(930049, 'Bahasa Indonesia kls 8', 'E. Kosasih', 'Kemendikbud', 2017, 127, '500-8.1926.jpg'),
(930139, 'Matematika smt 1 kls 8', 'Abdur Rahman Asari', 'Kemendikbud', 2017, 127, '745-8.1927.jpg'),
(930196, 'IPA smt 1 kls 8', 'Siti Zubaidah', 'Kemendikbud', 2016, 127, '246-8.1928.jpg'),
(930246, 'IPS kls 8', 'Mukmin', 'Kemendikbud', 2017, 127, '77-8.1929.jpg'),
(930315, 'PJOK kls 8', 'Roji dan Eva Yulianti', 'Kemendikbud', 2017, 127, '556-8.1930.png'),
(930382, 'Prakarya smt 1 kls 8', 'Suci Paresti', 'Kemendikbud', 2017, 127, '887-8.1931.jpg'),
(930408, 'PAI kls 8', 'Muhammad Ahsan', 'Kemendikbud', 2017, 127, '774-8.1932.jpg'),
(930475, 'Seni Budaya kls 8', 'Eko Purnomo', 'Kemendikbud', 2017, 127, '652-8.1933.jpg'),
(930549, 'Matematika smt 2 kls 8', 'Abdur Rahman Asari', 'Kemendikbud', 2017, 127, '255-8.1934.png'),
(930587, 'IPA smt 2 kls 8', 'Siti Zubaidah', 'Kemendikbud', 2017, 127, '359-8.1935.jpg'),
(930616, 'Prakarya smt 2 kls 8', 'Suci Paresti', 'Kemendikbud', 2017, 127, '376-8.1936.jpg'),
(932062, 'Selayang Pandang Gunung Lawu', 'Suryo Domas Sri PB', 'Mediatama', 2001, 1, '378-2114.jpg'),
(932065, 'PAI kls 9', 'Muhammad Ahsan', 'Kemendikbud', 2018, 137, '393-9.2117.jpg'),
(932202, 'PKN kls 9', 'Ai Tin Sumartini', 'Kemendikbud', 2018, 137, '89-9.2118.jpg'),
(932339, 'Bahasa Indonesia kls 9', 'Agus Trianto', 'Kemendikbud', 2018, 137, '756-9.2119.jpg'),
(932476, 'Bahasa Inggris kls 9', 'Siti Wachidah', 'Kemendikbud', 2018, 137, '304-9.2120.jpeg'),
(932613, 'PJOK kls 9', 'Suherman', 'Kemendikbud', 2018, 137, '44-9.2121.png'),
(932750, 'IPA smt 1 kls 9', 'Siti Zubaidah', 'Kemendikbud', 2018, 137, '560-9.2122.png'),
(932887, 'IPS kls 9', 'Iwan Setiawan', 'Kemendikbud', 2018, 137, '461-9.2123.png'),
(933024, 'Matematika kls 9', 'Subchan Winarni', 'Kemendikbud', 2018, 137, '240-9.2124.jpg'),
(933161, 'Seni Budaya kls 9', 'Milasari, Heru Subagio', 'Kemendikbud', 2018, 137, '466-9.2125.jpeg'),
(933298, 'Prakarya smt 1 kls 9', 'Dewi Sri Handayani', 'Kemendikbud', 2018, 137, '221-9.2126.png'),
(933572, 'IPA smt 2 kls 9', 'Siti Zubaidah', 'Kemendikbud', 2018, 137, '210-9.2128.png'),
(933709, 'Prakarya smt 2 kls 9', 'Dewi Sri Handayani', 'Kemendikbud', 2018, 137, '279-9.2129.jpg'),
(936254, 'Selayang Pandang DKI Jakarta', 'Moh. Rofii Adjie Sayekti', 'Intan Pariwara', 2008, 2, '469-2185.jpeg'),
(936770, 'Meraih Untung Memelihara Ikan Koi', 'Agus dan Adi Asmara', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936771, 'Peluang Usaha Budidaya Lobster Air Tawar', 'Ir. Hidayatul M', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936772, 'Peluang Usaha Budidaya Udang Galah', 'Ir. Hidayatul M', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936773, 'Pembuatan Pupuk Kompos dari Limbah Rumah', 'Lafran Habibi', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936774, 'Usaha Penggemukan Sapi Pedaging Secara I', 'drh Rukmana', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936775, 'Berkreasi Dengan Rotan', 'Soedjono', 'Remaja Rosdakarya', 2015, 1, 'b.jpeg'),
(936776, 'Perkakas dan Bahan Teknik Otomotif', 'Soedjono', 'Angkasa', 2014, 1, 'b.jpeg'),
(936777, 'Servis Kulkas dan Pendingin Ruangan', 'Abdul Rani', 'Bimantara Alugoda Sejahtera', 2015, 1, 'b.jpeg'),
(936778, 'Servis Radio, Perekam Suara, TV dan VCD', 'Ado Vebriando', 'Bimantara Alugoda Sejahtera', 2015, 1, 'b.jpeg'),
(936779, 'Generasi Berprestasi', 'Lufti Avianto', 'Bina Sarana Pustaka', 2015, 1, 'b.jpeg'),
(936780, 'Generasi Peduli', 'Lufti Avianto', 'Bina Sarana Pustaka', 2015, 1, 'b.jpeg'),
(936781, 'Generasi Penuh Persahabatan', 'Lufti Avianto', 'Bina Sarana Pustaka', 2015, 1, 'b.jpeg'),
(936782, 'Mendulang Prestasi Bersama Abon', 'N.E. Buditjahjono, S.Pd', 'Cipta Anugrah', 2015, 1, 'b.jpeg'),
(936783, 'Semua Orang Bisa Sukses Berwirausaha', 'Siti Nurhasanah', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936784, 'Peluang Usaha Tanpa Modal', 'Budi Sulistiyo', 'Era Adicitra Intermedia', 2015, 1, 'b.jpeg'),
(936785, 'Tanda Lahir Keberuntungan', 'Andri Saptono', 'Selaksa Publishing', 2015, 1, 'b.jpeg'),
(936786, 'Mengenal Perangkat Lunak Komputer', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936787, 'Mari Mengenal Komputer', 'Zamrud Tualeka', 'Mitra Aksara Panaitan', 2014, 1, 'b.jpeg'),
(936788, 'Membuat Pemancar Sendiri', 'Soedjono', 'Remaja Rosdakarya', 2015, 0, 'b.jpeg'),
(936789, 'Seri Pertukangan Las Listrik', 'Soedjono', 'Remaja Rosdakarya', 2015, 1, 'b.jpeg'),
(936790, 'Mengenal dan Memanfaatkan Internet', 'Tedi Rustendi', 'Sarana Panca Karya Nusa', 2014, 1, 'b.jpeg'),
(936791, 'Speaking English At Home And School', 'Erna Fitrini', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936792, 'English Everywhere', 'Erna Fitrini', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936793, 'I Love English', 'Erna Fitrini', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936794, 'Always English', 'Erna Fitrini', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936795, 'English Is Cool', 'Erna Fitrini', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936796, 'English Is Fun', 'Erna Fitrini', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936797, 'The Mouse Deer Cheats The Farmer', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936798, 'The Mmouse Deer And His Magic Flute', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936799, 'Bob\'s Pranks ', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936800, 'The Fish And The Tortoise', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936801, 'Baby Squirrel Learnt A Lesson', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936802, 'The Goat\'s Secret', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936803, 'The Rhino\'s Best Friend', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936804, 'The Tears Of A Giant Turtle', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936805, 'The Tadpoles Look For Their', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936806, 'The Crane And The Fox', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936807, 'The Ox And The Flea', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936808, 'The Crab And The Fox', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936809, 'The Axe And The Two Travellers', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936810, 'The Snake And The Man', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936811, 'The Bear And The Fox', 'Didik Djunaedi', 'Gading Inti Prima', 2014, 1, 'b.jpeg'),
(936812, 'Closer To Words All About Words', 'Yuyun Yuningsih, S.Pd', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936813, 'English At School At Home', 'Reni Agustin P, S.Pd', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936814, 'Happy With English', 'Yuyun Yuningsih, S.Pd', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936815, 'Lets Understand English', 'Reni Agustin P, S.Pd', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936816, 'Indonesia Folktales', 'Ahmad Tommy H', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936817, 'Indonesia Heroes Stories', 'Ahmad Tommy H', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936818, 'Mahir Menulis Paragraf Bahasa Inggris', 'Ayu Rini', 'Pustaka Mina', 2015, 1, 'b.jpeg'),
(936819, 'Matematika Pada Zaman Purba', 'Badrul Komar', 'Angkasa', 2014, 1, 'b.jpeg'),
(936820, 'Sahabat Pintarku Belajar Trigonometri', 'Muslikhah, S.Pd', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936821, 'Mengenal Bilanga', 'Reza Saputra', 'Graha Bandung Kencana', 2014, 1, 'b.jpeg'),
(936822, 'Mengenal Pecahan', 'Imam Rajasa', 'Graha Bandung Kencana', 2014, 1, 'b.jpeg'),
(936823, 'Mengenal Pengukur', 'Laila Nurhasanah', 'Graha Bandung Kencana', 2014, 1, 'b.jpeg'),
(936824, 'Mengenal Bangun Datar', 'Andini Juliana', 'Graha Bandung Kencana', 2014, 1, 'b.jpeg'),
(936825, 'Mengenal Bangun Ruang', 'Dewi Ismaliyah', 'Graha Bandung Kencana', 2014, 1, 'b.jpeg'),
(936826, 'Mengenal Statistika', 'Sofyan Kertawijaya', 'Graha Bandung Kencana', 2014, 1, 'b.jpeg'),
(936827, 'Ayo Mengukur Berat', 'Alanna Faradiani', 'Graha Ilmu Mulya', 2014, 1, 'b.jpeg'),
(936828, 'Ayo Mengukur Jarak', 'Alanna Faradiani', 'Graha Ilmu Mulya', 2014, 1, 'b.jpeg'),
(936829, 'Ayo Mengukur Kelajuan', 'Alanna Faradiani', 'Graha Ilmu Mulya', 2014, 1, 'b.jpeg'),
(936830, 'Ayo Mengukur Luas', 'Alanna Faradiani', 'Graha Ilmu Mulya', 2014, 1, 'b.jpeg'),
(936831, 'Ayo Mengukur Tinggi', 'Alanna Faradiani', 'Graha Ilmu Mulya', 2014, 1, 'b.jpeg'),
(936832, 'Ayo Mengukur Volume', 'Alanna Faradiani', 'Graha Ilmu Mulya', 2014, 1, 'b.jpeg'),
(936833, 'Mari Belajar Aplikasi Geometri', 'Sulaiman, S.Si', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936834, 'Mengenal Aritmetika Sosial', 'Sulaiman, S.Si', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936868, 'Dasar-Dasar Senam', 'John dan Mary Jean T', 'Angkasa', 2014, 1, 'b.jpeg'),
(936869, 'Aku Tahu Tentang Cara Hidup Sehat', 'Dra. Endyah M', 'Duta Graha Pustaka', 2015, 1, 'b.jpeg'),
(936870, 'Sepak Bola', 'Ina Hasanah', 'Indahjaya Adipratama', 2014, 1, 'b.jpeg'),
(936871, 'Binaraga', 'S. Ahmad Yudoyono', 'Indahjaya Adipratama', 2014, 1, 'b.jpeg'),
(936872, 'Futsal', 'R. Aulia Narti', 'Indahjaya Adipratama', 2014, 1, 'b.jpeg'),
(936873, 'Karate', 'Muhammad Rhadian', 'Indahjaya Adipratama', 2014, 1, 'b.jpeg'),
(936874, 'Kungfu (Wu Shu)', 'Adika Rohmat Putra', 'Indahjaya Adipratama', 2014, 1, 'b.jpeg'),
(936875, 'Ayo Mengenal Capoeira', 'Hendra Wisesa', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936876, 'Mahir Bermain Sepak Bola', 'Drs. Sugiarto, M.M', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936877, 'Mempersiapkan Pemain Basket Berprestasi', 'Sutrisno, S.Pd', 'Musi Perkasa Utama', 2014, 1, 'b.jpeg'),
(936878, 'Mempersiapkan Pemain Sepak Bola Berprest', 'Sutrisno, S.Pd', 'Musi Perkasa Utama', 2014, 1, 'b.jpeg'),
(936879, 'Mempersiapkan Pemain Sepak Bola Berprest', 'Sutrisno, S.Pd', 'Musi Perkasa Utama', 2014, 1, 'b.jpeg'),
(936880, 'Mempersiapkan Pemain Voli Berprestasi', 'Sutrisno, S.Pd', 'Musi Perkasa Utama', 2014, 1, 'b.jpeg'),
(936881, 'Mempersiapkan Perenang Berprestasi', 'Sutrisno, S.Pd', 'Musi Perkasa Utama', 2014, 1, 'b.jpeg'),
(936882, 'Tanaman Obat Tradisional jilid 1', 'Sopandi', 'Sarana Panca Karya Nusa', 2014, 1, 'b.jpeg'),
(936883, 'Tanaman Obat Tradisional jilid 2', 'Sopandi', 'Sarana Panca Karya Nusa', 2014, 1, 'b.jpeg'),
(936893, 'Proses Pembuatan Jamur Merang', 'Mujiman dan Ahmad S', 'Arta Sarana Media', 2015, 1, 'b.jpeg'),
(936894, 'Daur Ulang Limbah', 'Farida', 'Iranti Mitra Utama', 2015, 1, 'b.jpeg'),
(936895, 'Mina Kangkung di Lahan Sempit', 'MR. Kurniawan', 'Karunia', 2015, 1, 'b.jpeg'),
(936896, 'Aksesoris dari Bahan Bekas', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936897, 'Aneka Kreasi dari Bambu', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936898, 'Aneka Kreasi dari Botol', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936899, 'Aneka Kreasi dari Kotak Kemasan', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936900, 'Aneka Kreasi dari Lembar Busa', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936901, 'Membuat Aneka Pigura', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936902, 'Pernak Pernik Sederhana', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936903, 'Aneka Keterampilan dari Ketupat Kertas', 'Ayu Rini', 'Pustaka Mina', 2015, 1, 'b.jpeg'),
(936904, 'Cara Efektif Memberantas Tikus Sawah', 'Ir. Budi Samadi', 'Pustaka Mina', 2015, 1, 'b.jpeg'),
(936905, 'Kreasi Topeng Kertas', 'Ayu Rini', 'Pustaka Mina', 2015, 1, 'b.jpeg'),
(936906, 'Art Paper Kreasi Unik Buatan Sendiri', 'Suci S', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936907, 'Bertanam Tanaman Buah Dalam Pot', 'Singgih Sastradiharja', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936908, 'Berternak Ayam Petelur Secara Intensif', 'drh Rukmana', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936909, 'Kompor Briket Batu Bara', 'Adi Asmara dan Igo', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936910, 'Membuat Kerajinan dari Kayu', 'Soedjono, B.Sc', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936911, 'Peluang Usaha Budidaya Lobster Air Tawar', 'Ir. Hidayatul M', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936912, 'Peluang Usaha Budidaya Udang Galah', 'Ir. Hidayatul M', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936913, 'Pembuatan Pupuk Kompos dari Limbah Rumah', 'Lafran Habibi', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936914, 'Usaha Penggemukan Sapi Pedaging Secara I', 'drh Rukmana', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936915, 'Berkreasi dengan Rotan', 'Soedjono', 'Remaja Rosdakarya', 2015, 1, 'b.jpeg'),
(936916, 'Simanis Berambut Merah', 'Endang Sri Sulistyarini', 'Arta Sarana Media', 2015, 1, 'b.jpeg'),
(936917, 'Usaha Melestarikan Penyu', 'Noverta', 'Karunia', 2015, 1, 'b.jpeg'),
(936918, 'Meraih Untung Memelihara Ikan Koi', 'Agus dan Adi Asmara', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936919, 'Perkakas dan Bahan Teknik Otomotif', 'Soedjono', 'Angkasa', 2014, 1, 'b.jpeg'),
(936920, 'Servis Kulkas dan Pendingin Ruangan', 'Abdul Rani', 'Bimantara Alugoda Sejahtera', 2015, 1, 'b.jpeg'),
(936921, 'Servis radio, Perekam Suara, TV dan VCD', 'Ado Vebriando', 'Bimantara Alugoda Sejahtera', 2015, 1, 'b.jpeg'),
(936922, 'Generasi Berprestasi', 'Lufti Avianto', 'Bina Sarana Pustaka', 2015, 1, 'b.jpeg'),
(936923, 'Generasi Peduli', 'Lufti Avianto', 'Bina Sarana Pustaka', 2015, 1, 'b.jpeg'),
(936924, 'Generasi Penuh Persahabatan', 'Lufti Avianto', 'Bina Sarana Pustaka', 2015, 1, 'b.jpeg'),
(936925, 'Mendulang Prestasi Bersama Abon', 'N.E. Buditjahjono, S.Pd', 'Cipta Anugrah', 2015, 1, 'b.jpeg'),
(936926, 'Semua Orang Bisa Sukses Berwirausaha', 'Siti Nurhasanah', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(936927, 'Tanda Lahir Keberuntungan', 'Andri Saptono', 'Selaksa Publishing', 2015, 1, 'b.jpeg'),
(936928, 'Mengenal Perangkat Lunak Komputer', 'Bagas Shinugi', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(936929, 'Mari Mengenal Komputer', 'Zamrud Tualeka', 'Mitra Aksara Panaitan', 2014, 1, 'b.jpeg'),
(936930, 'Membuat Pemancar Sendiri', 'Soedjono', 'Remaja Rosdakarya', 2015, 1, 'b.jpeg'),
(936931, 'Seri Pertukangan Las Listrik', 'Soedjono', 'Remaja Rosdakarya', 2015, 1, 'b.jpeg'),
(936932, 'Mengenal dan Memanfaatkan Internet', 'Tedi Rustendi', 'Sarana Panca Karya Nusa', 2014, 1, 'b.jpeg'),
(936933, 'Memimpin Diri dan Meraih Prestasi', 'Bambang Qomaruzzaman', 'Simbiosa Rekatama Media', 2015, 1, 'b.jpeg'),
(936934, 'Tunjukkan Siapa Dirimu', 'Bambang Qomaruzzaman', 'Simbiosa Rekatama Media', 2015, 1, 'b.jpeg'),
(936935, 'Perencanaan Usaha Mie Basah', 'Tian ', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936936, 'Reparasi Motor Bensin dan Diesel', 'Soedjono', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936937, 'Terampil Berdiskusi dan Berdebat', 'Prof. DR. M Atar Semi', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(936938, 'Jiwa Kesatria', 'Didi Sumardi', 'Graha Bandung Kencana', 2015, 1, 'b.jpeg'),
(936939, 'Peluang Usaha Tanpa Modal', 'Budi Sulistiyo', 'Era Adicitra Intermedia', 2015, 1, 'b.jpeg'),
(936940, 'Mari Mengenal Lembar Kerja Ms Excel', 'Zamrud Tualeka', 'Mitra Aksara Panaitan', 2014, 1, 'b.jpeg'),
(936941, 'Pameran Seni', 'M. Edwin Iskandar', 'Sarana Panca Karya Nusa', 2016, 3, 'b.jpeg'),
(936942, 'Kapal Terbang Wright', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936943, 'Kisah Penjelajah', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936944, 'Gua Misterius', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936945, 'Jagoan Cilik', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936946, 'Perlombaan Jelajah Alam', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936947, 'Penangkal Petir Istimewa', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936948, 'My Memorable Experience Abroad', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936949, 'Rupa dan Bentuk Misterius', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936950, 'Peduli Lingkungan Melalui Tulisan', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936951, 'Petualngan Mengukur Benda', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936952, 'Mother\'s Birthday Present', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936953, 'Teka Teki Kaki Bukit Kupu', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936954, 'A Puzzling Letter', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936955, 'Mengungkap Kotak Misterius', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936956, 'Pelangi dan Sepeda Baru', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936957, 'Membangun Jembatan', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936958, 'Menelusuri Jejak Sejarah Hindu-Budha', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936959, 'Berkunjung Kemasyarakat Beragam Adat Ist', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936960, 'The Kites That Saved Us', 'S. Hidayat', 'Sandiarta Sukses', 2016, 3, 'b.jpeg'),
(936961, 'Singsingamangaraja XII (1848-1907)', 'S. Hidayat & Tedi R', 'Sarana Panca Karya Nusa', 2016, 3, 'b.jpeg'),
(936962, 'Jendral Sudirman (1916-1950)', 'S. Hidayat & Tedi R', 'Sarana Panca Karya Nusa', 2016, 3, 'b.jpeg'),
(936963, 'Pangeran Antasari (1797-1862)', 'S. Hidayat & Tedi R', 'Sarana Panca Karya Nusa', 2016, 3, 'b.jpeg'),
(936964, 'Kerjasama Polisi dan Masyarakat dalam Me', 'Yodi Kurniadi', 'Sarana Panca Karya Nusa', 2016, 3, 'b.jpeg'),
(936965, 'Perubahan Kebiasaan', 'Yodi Kurniadi', 'Sarana Panca Karya Nusa', 2016, 3, 'b.jpeg'),
(936966, 'Soichiro Honda', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936967, 'John Davison Rockefeller', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936968, 'Chung Ju Yung', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936969, 'Mutiara Biru', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936970, 'Richard and Maurice Mc. Donald', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936971, 'Ray Kroc', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936972, 'Walt Disney', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936973, 'Conrad Nicholson Hilton', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936974, 'Henry Ford', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936975, 'Thomas Watson', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936976, 'William Edward Boeing 1', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936977, 'William Edward Boeing 2', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936978, 'Steven Spielberg', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936979, 'Aristotle Onassis', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936980, 'Michael Marks dan Thomas Spencer', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936981, 'Levi Strauss', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936982, 'Johns Pemberton dan Asa Candler', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936983, 'Seisi Kato', 'G Wu', 'Wortel Books Publishing', 2016, 3, 'b.jpeg'),
(936984, 'Al Akhlaq Lil Banin', 'Umar bin Ahmad Barjak', 'Albana', 2014, 1, 'b.jpeg'),
(936985, 'Hadits Al Arbain An Nawawiyyah', 'Al Imam Yahya', 'Albana', 2014, 1, 'b.jpeg'),
(936986, 'Matan Al Ajurumiyyah', 'Abu Abdillah Muhammad', 'Albana', 2014, 1, 'b.jpeg'),
(936987, 'Mengikuti Jejak Rosululloh', 'Zaenuri Siroj', 'Albana', 2014, 1, 'b.jpeg'),
(936988, 'Qishas Al Miraj', 'Najmudin Al Ghaity', 'Albana', 2014, 1, 'b.jpeg'),
(936989, 'Kajian Tentang Adzan', 'Al Imam Al Hafizh', 'Albana', 2014, 1, 'b.jpeg'),
(936990, 'Kajian Tentang Keutamaan Bersuci', 'Al Imam Al Hafizh', 'Albana', 2014, 1, 'b.jpeg'),
(936991, 'Kajian Tentang Shalat Berjamaah', 'Al Imam Al Hafizh', 'Albana', 2014, 1, 'b.jpeg'),
(936992, 'Antara Halal dan Haram', 'F. M Nashshar', 'Angkasa', 2014, 1, 'b.jpeg'),
(936993, 'Antara Zakat, Infak dan Shadaqoh', 'Abu Arkam Kamil A', 'Angkasa', 2014, 1, 'b.jpeg'),
(936994, 'Mencegah Lalai dengan Zikir', 'Deny Riana', 'Angkasa', 2014, 1, 'b.jpeg'),
(936995, 'Pelajaran Tajwid Praktis', 'Payungan Samosir', 'Angkasa', 2014, 1, 'b.jpeg'),
(936996, 'Peristiwa Menjelang Rosulullah Wafat', 'Em. Saidi Dahlan', 'Bintang', 2015, 1, 'b.jpeg'),
(936997, 'Gemar Membaca dan Menulis Huruf Hijaiyya', 'Ian Kusrin', 'Bintang Books', 2014, 1, 'b.jpeg'),
(936998, 'Mengenal Zakat Mal', 'Dewi Astuti', 'Imperial Bhakti Utama', 2014, 1, 'b.jpeg'),
(936999, 'Khalifah Utsman', 'Arief Rizal', 'Jaya Abadi', 2014, 1, 'b.jpeg'),
(937000, 'Salman Al Farisi Pencari Kebenaran', 'S. Hidayat', 'Jaya Abadi', 2014, 1, 'b.jpeg'),
(937001, '100 Hadits Qudsi', 'M Fahmi Hadi', 'Megag Jaya', 2014, 1, 'b.jpeg'),
(937002, 'Kajian Tentang Akhlaq', 'Syekh Hasyim Asyari', 'Megag Jaya', 2014, 1, 'b.jpeg'),
(937003, 'Kajian Tentang Fiqih', 'Muhammad bin Abdil Q', 'Megag Jaya', 2014, 1, 'b.jpeg'),
(937004, 'Mukjizat Nabi-Nabi dalam Al Quran', 'Aris Rachman', 'Megag Jaya', 2014, 1, 'b.jpeg'),
(937005, 'Abdullah Bin Mas\'ud', 'Dinar Setiawan', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937006, 'Antara Akikah dan Kurban', 'Hetti Restianti', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937007, 'Belajar dari Para Nabi dan Rosul 1', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937008, 'Belajar dari Para Nabi dan Rosul 2', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937009, 'Belajar dari Para Nabi dan Rosul 3', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937010, 'Belajar dari Para Nabi dan Rosul 4', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937011, 'Belajar dari Para Nabi dan Rosul 5', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937012, 'Imran Bin Hushain', 'Fajar Dinar', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937013, 'Khabab Bin Arats', 'A. Setiawan', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937014, 'Mengenal Asmaul Husna', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937015, 'Qais Bin Sa\'ad', 'Dinar Setiawan', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937016, 'Said Bin Amir', 'Fajar Dinar', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937017, 'Thalhah Bin Ubaidillah', 'Fajar Dinar', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937018, 'Umeir Bin Wahab', 'A. Setiawan', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937019, 'Zaid Bin Tsabit', 'Tubagus Fajar', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937020, 'Zubair Bin Awwam', 'Tubagus Fajar', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937021, 'Aku Ingin Paham Bhineka Tunggal Ika', 'Edi Warsidi', 'Angkasa', 2014, 1, 'b.jpeg'),
(937022, 'Etika Bertetangga', 'Abu Azka ibn Abbas', 'Titian Ilmu', 2014, 1, 'b.jpeg'),
(937023, 'Korupsi Subur Negara Hancur', 'Dinar Setiawan', 'Angkasa', 2014, 1, 'b.jpeg'),
(937024, 'Membangun Prestasi Untuk Bangsa', 'Akhmad Zamroni', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(937025, 'Usaha Pembelaan Negara Melalui Nasionali', 'Agus Moelyanto', 'Era Pustaka Utama', 2015, 1, 'b.jpeg'),
(937026, 'Kehidupan Berwarga Negara', 'Andriyati', 'Mediantara Semesta', 2015, 1, 'b.jpeg'),
(937027, 'Menciptakan Kerukunan dalam Kehidupan Be', 'Sri Noviana', 'Sandiarta Sukses', 2015, 1, 'b.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pinjam`
--

CREATE TABLE `detail_pinjam` (
  `id_detailpinjam` int(11) NOT NULL,
  `id_buku` int(7) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `jumlah` int(1) NOT NULL,
  `id_pinjam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pinjam`
--

INSERT INTO `detail_pinjam` (`id_detailpinjam`, `id_buku`, `judul_buku`, `jumlah`, `id_pinjam`) VALUES
(40, 925831, 'Air dan Kegunaannya', 2, 418),
(41, 925831, 'Air dan Kegunaannya', 2, 419),
(42, 925831, 'Air dan Kegunaannya', 2, 420),
(46, 98872, 'Mengenal Lingkungan', 1, 423),
(47, 98872, 'Mengenal Lingkungan', 1, 425),
(52, 936787, 'Mari Mengenal Komputer', 1, 430),
(53, 936788, 'Membuat Pemancar Sendiri', 1, 430),
(54, 98582, 'Aku Tahu Tentang Cara Hidup Sehat', 1, 431),
(55, 925831, 'Air dan Kegunaannya', 1, 432),
(56, 98502, 'We All Speak English', 1, 433),
(57, 927178, 'Wanda Basa Sunda kls 8', 1, 433);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(10) NOT NULL,
  `id_anggota` int(5) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_anggota`, `nama_siswa`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(418, 711, 'Aditya Saepul Pratama', '2021-12-16', '2021-12-21', 'return'),
(419, 711, 'Aditya Saepul Pratama', '2021-12-16', '2021-12-21', 'return'),
(420, 748, 'Destiyana', '2021-12-16', '2021-12-21', 'return'),
(423, 7416, 'Lupi Prianti', '2021-12-16', '2021-12-21', 'return'),
(425, 711, 'Aditya Saepul Pratama', '2021-12-19', '2021-12-24', 'pinjam'),
(430, 7632, 'Zahra Hanifa', '2021-12-20', '2021-12-25', 'return'),
(431, 19201106, 'Daffa Pratama', '2021-12-22', '2021-12-27', 'pinjam'),
(432, 19201107, 'Daffa Wisnu Wardhana', '2021-12-22', '2021-12-27', 'pinjam'),
(433, 20211089, 'Elena Cahya Puteri', '2021-12-22', '2021-12-27', 'pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembali` int(10) NOT NULL,
  `tgl_dikembalikan` date DEFAULT NULL,
  `id_pinjam` int(10) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_kembali`, `tgl_dikembalikan`, `id_pinjam`, `keterangan`) VALUES
(349, '2021-12-19', 42, 'baik'),
(350, '2021-12-20', 41, 'baik'),
(351, '2021-12-20', 46, 'hilang'),
(352, '2021-12-20', 52, 'rusak'),
(353, '2021-12-20', 53, 'hilang'),
(354, '2021-12-20', 40, 'rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(41) NOT NULL,
  `level` enum('kepala','admin') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(3, 'Admin', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'admin', ''),
(6, 'Kepala Perpus', 'kepala perpus', 'a54ba86f71708bfccaba03c609cbe5c142b75b9e', 'kepala', ''),
(258, 'Petugas Perpus', 'petugas perpus', 'aa027e41edc3372c35646eb382168ecd7092de7a', 'admin', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD PRIMARY KEY (`id_detailpinjam`),
  ADD KEY `id_pinjam` (`id_pinjam`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembali`),
  ADD KEY `id_pinjam` (`id_pinjam`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123123124;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=937028;

--
-- AUTO_INCREMENT untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  MODIFY `id_detailpinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=434;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id_kembali` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35466011;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
  ADD CONSTRAINT `detail_pinjam_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `peminjaman` (`id_pinjam`),
  ADD CONSTRAINT `detail_pinjam_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Ketidakleluasaan untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD CONSTRAINT `pengembalian_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `detail_pinjam` (`id_detailpinjam`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
