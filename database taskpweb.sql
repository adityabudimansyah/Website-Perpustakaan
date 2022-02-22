-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2021 pada 12.58
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
-- Database: `taskpweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id_perpustakaan` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `kota_terbit` varchar(30) NOT NULL,
  `tebal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perpustakaan`
--

INSERT INTO `perpustakaan` (`id_perpustakaan`, `judul`, `penulis`, `penerbit`, `tanggal_terbit`, `kota_terbit`, `tebal`) VALUES
(19, 'Merasa Pintar Bodoh Saja Tak Punya', 'Rusdi Mathari', 'Mizan', '2010-02-11', 'Yogyakarta', '543  '),
(23, 'Pantai dan Kehidupannya', 'Edy Karsono', 'PT. INDAHJAYA Adipratama', '1996-07-18', 'Bandung', '234'),
(31, 'Surat Kecil Untuk Tuhan', 'Agnes Danovar', 'Inandra Published', '2008-02-08', 'Jakarta', '232'),
(34, 'Ngenest', 'Ernest Prakasa', 'Rak Buku', '2013-01-07', 'Jakarta', '232 '),
(36, 'Setengah Jalan', 'Ernest Prakasa', 'Benteng Pustaka', '2019-07-19', 'Tangerang', '400'),
(37, 'Sebuah Seni untuk Bersikap Bodo Amat', 'Mark Manson', 'Gramedia', '2005-02-20', 'Jakarta', '256'),
(38, 'Rapijali', 'Dee Lestari', 'Benteng Pustaka', '2021-02-24', 'Bekasi', '368'),
(39, 'Biologi untuk SMA & MA Kelas XII', 'Dra. Irnaningtyas', 'Erlangga', '2014-02-24', 'Cikarang', '468'),
(40, 'Why? Camera – Kamera', 'Yearimdang', 'Elex Media Komputindo', '2021-01-13', 'Bogor', '160'),
(41, 'Wingit', 'Sara Wijayanto', 'Elex Media Komputindo', '2020-12-16', 'Bandung', '256'),
(42, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', '2009-06-10', 'Bandung', '423'),
(43, 'Satwa Terancam Bahaya', 'Jen Green', 'Pakar Raya', '2006-02-16', 'Jakarta', '32'),
(44, 'Laskar Pelangi', 'Andrea Hirata', 'Benteng Pustaka', '2005-08-13', 'Yogyakarta', '529'),
(45, 'Sang Pemimpi', 'Andrea Hirata', 'Benteng Pustaka', '2008-05-30', 'Yogyakarta', '292'),
(46, 'The Life Plan ', 'Jen Green', 'Erlangga', '2012-09-10', 'Jakarta', '226  '),
(47, 'Madilog', 'Tan Malaka ', 'Narasi', '2017-11-23', 'Jakarta', '568'),
(48, 'Generasi Langgas (Millenials Indonesia)', 'Yoris Sebastian, Dilla Amran &', 'Gagas Media', '2016-10-28', 'Bogor', '568 '),
(49, 'Interesting Person', 'Heri “smile” Suchaeri', 'Real Books', '2015-11-19', 'Yogyakarta', '154'),
(50, 'Pemrograman WEB dengan HTML', 'Betha Sidik', 'Informatika', '2001-04-08', 'Karawang', '217'),
(51, 'Jangan Kuliah! Kalau Gak Sukses', 'Setia Furqon Kholid', 'Rumah Karya', '2015-03-04', 'Semarang', '191'),
(52, 'Teman Berjuang', 'Indra Sugiarto', 'Loveable x Bhumi Anoma', '2019-04-19', 'Solo', '183'),
(53, 'Dear Nathan', 'Erisca Febrianti', 'Best Media', '2016-04-30', 'Jakarta', '528'),
(54, 'Dilan 1990', 'Pidi Baiq', 'Pastel Books', '2016-05-16', 'Bandung', '332'),
(55, 'Cewek Smart', 'Ria Fariana', 'Gema Insani', '2008-11-10', 'Jakarta', '200'),
(56, 'Tips & Trik Jago Main Rubik', 'Wicaksono Had', 'Gradien Mediatama', '2019-08-17', 'Jakarta', '184'),
(57, 'TUILET', 'Oben Cedric', 'Gradien Mediatama', '2019-09-14', 'Jakarta', '187'),
(58, 'Perahu Kertas', 'Dewi Lestari ', 'Treudee Pustaka Sejati', '2010-03-28', 'Jakarta', '444'),
(59, '5 Cm', 'Dhonny Dhirgantoro', 'PT. Grasindo', '2005-02-01', 'Yogyakarta', '381'),
(65, 'Kambing Jantan', 'Raditya Dika', 'Gagas Media', '2005-03-03', 'Jakarta', '240');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'adit', '$2y$10$T0h1mqWifQAv56zJV/frsO/9fH4GADRFo2DU0Rb7fdFCAyWwAPRXK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id_perpustakaan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id_perpustakaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
