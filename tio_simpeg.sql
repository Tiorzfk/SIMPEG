-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Apr 2015 pada 10.55
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tio_simpeg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_gaji_pokok`
--

CREATE TABLE IF NOT EXISTS `tb_data_gaji_pokok` (
  `id_gaji_pokok` int(50) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(50) NOT NULL,
  `id_golongan` int(50) NOT NULL,
  `nomor_sk` varchar(100) NOT NULL,
  `tanggal_sk` varchar(100) NOT NULL,
  `dasar_perubahan` varchar(100) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `masa_kerja` varchar(50) NOT NULL,
  `pejabat_menetapkan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_gaji_pokok`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `tb_data_gaji_pokok`
--

INSERT INTO `tb_data_gaji_pokok` (`id_gaji_pokok`, `id_pegawai`, `id_golongan`, `nomor_sk`, `tanggal_sk`, `dasar_perubahan`, `gaji_pokok`, `tanggal_mulai`, `tanggal_selesai`, `masa_kerja`, `pejabat_menetapkan`) VALUES
(11, 5, 13, '401733', '12/12/1212', 'oa', '10', '32/12/1212', '33/33/3333', '12 bulan', 'sah'),
(10, 6, 11, '123', '11/11/1111', 'asd', '1028', '22/22/2222', '33/33/3333', '90 tahun', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_keluarga`
--

CREATE TABLE IF NOT EXISTS `tb_data_keluarga` (
  `id_data_keluarga` int(50) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(50) NOT NULL,
  `nama_anggota_keluarga` varchar(150) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `status_kawin` varchar(50) NOT NULL,
  `tanggal_nikah` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_data_keluarga`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tb_data_keluarga`
--

INSERT INTO `tb_data_keluarga` (`id_data_keluarga`, `id_pegawai`, `nama_anggota_keluarga`, `tanggal_lahir`, `status_kawin`, `tanggal_nikah`, `uraian`, `pekerjaan`) VALUES
(9, 5, 'Dadi', '19/02/1988', 'Kawin', '19/02/1990', 'Tes', 'Ngopi'),
(8, 6, 'Yaya', '11/11/1111', 'kawin', '22/22/2222', 'asd', 'nyuci');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_data_pegawai` (
  `id_pegawai` int(10) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) NOT NULL,
  `no_kartu_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `usia` varchar(5) NOT NULL,
  `id_status_pegawai` varchar(50) NOT NULL,
  `kartu_akses_pegawai` varchar(20) NOT NULL,
  `tanggal_pengangkatan_cpns` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_npwp` varchar(30) NOT NULL,
  `id_golongan` int(10) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_data_pegawai`
--

INSERT INTO `tb_data_pegawai` (`id_pegawai`, `nip`, `no_kartu_pegawai`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `usia`, `id_status_pegawai`, `kartu_akses_pegawai`, `tanggal_pengangkatan_cpns`, `alamat`, `no_npwp`, `id_golongan`, `foto`) VALUES
(5, '111 111 111 111 111 ', '111', 'asd', 'bandung', '11/11/1111', 'Laki-Laki', 'Islam', '1', '2', 'a1', '11/11/1111', 'as', '122 112', 15, '1030317333-20150304-105133.jpg'),
(6, '222 222 222 222 222 ', 'asd2', 'Nesson', 'Bandung', '19/02/1997', 'Laki-Laki', 'Budha', '20', '3', 'asd3', '29/12/2003', 'asd', '331 231', 19, '445963786-20150304-150323.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_riwayat_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_data_riwayat_jabatan` (
  `id_riwayat_jabatan` int(50) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `penempatan` varchar(50) NOT NULL,
  `id_jabatan` int(50) NOT NULL,
  `id_unit_kerja` int(50) NOT NULL,
  `uraian` text NOT NULL,
  `id_eselon` int(50) NOT NULL,
  `tmt_eselon` varchar(50) NOT NULL,
  `nomor_sk` varchar(50) NOT NULL,
  `tanggal_sk` varchar(50) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  PRIMARY KEY (`id_riwayat_jabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tb_data_riwayat_jabatan`
--

INSERT INTO `tb_data_riwayat_jabatan` (`id_riwayat_jabatan`, `id_pegawai`, `status`, `penempatan`, `id_jabatan`, `id_unit_kerja`, `uraian`, `id_eselon`, `tmt_eselon`, `nomor_sk`, `tanggal_sk`, `tanggal_mulai`, `tanggal_selesai`, `lokasi`) VALUES
(7, 6, 'PNS', 'PUSAT', 2347, 31, 'STAF SEKSI SULAWESI UTARA DAN GORONTALO, SUBDIT WILAYAH TIMUR IV, DIREKTORAT JALAN DAN JEMBATAN WILAYAH TIMUR, DIREKTORAT JENDERAL BINA MARGA, DEP PU', 27, '-', '40173', '12/31/2312', '12/31/2312', '12/31/2312', 'JABAR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `id_login` int(5) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `id_pegawai`, `username`, `password`, `nama_lengkap`, `foto`, `status`) VALUES
(1, 1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Tioreza Febrian', 'user-2.jpg', 'administrator'),
(5, 6, 'nesson', '00e8a04d22193307e6293d4f7a91289e', 'Liam Neeson', 'a3.jpg', 'pegawai'),
(6, 5, 'asd', '7815696ecbf1c96e6894b779456d330e', 'Assalamualaikum', 'a1.jpg', 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_eselon`
--

CREATE TABLE IF NOT EXISTS `tb_master_eselon` (
  `id_eselon` int(50) NOT NULL AUTO_INCREMENT,
  `nama_eselon` varchar(150) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_eselon`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `tb_master_eselon`
--

INSERT INTO `tb_master_eselon` (`id_eselon`, `nama_eselon`, `level`) VALUES
(23, 'I.a', '1'),
(24, 'I.b', '2'),
(25, 'II.a', '3'),
(26, 'II.b', '4'),
(27, 'III.a', '5'),
(28, 'III.b', '6'),
(29, 'IV.a', '7'),
(30, 'IV.b', '8'),
(31, 'V', '9'),
(32, '-', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_golongan`
--

CREATE TABLE IF NOT EXISTS `tb_master_golongan` (
  `id_golongan` int(50) NOT NULL AUTO_INCREMENT,
  `golongan` varchar(100) NOT NULL,
  `uraian` text NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_golongan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `tb_master_golongan`
--

INSERT INTO `tb_master_golongan` (`id_golongan`, `golongan`, `uraian`, `level`) VALUES
(4, 'CPNS', 'CALON PEGAWAI NEGERI SIPIL', '18'),
(5, 'I/A', 'JURU MUDA', '17'),
(6, 'I/B', 'JURU MUDA TINGKAT I', '16'),
(7, 'I/C', 'JURU', '15'),
(8, 'I/D', 'JURU TINGKAT I', '14'),
(9, 'II/A', 'PENGATUR MUDA', '13'),
(10, 'II/B', 'PENGATUR MUDA TK IPENGATUR MUDA TK I', '12'),
(11, 'II/C', 'Pengatur', '11'),
(12, 'II/D', 'PENGATUR TINGKAT I', '10'),
(13, 'III/A', 'PENATA MUDA', '9'),
(14, 'III/B', 'PENATA MUDA TINGKAT I', '8'),
(15, 'III/C', 'PENATA', '7'),
(16, 'III/D', 'PENATA TINGKAT I', '6'),
(17, 'IV/A', 'PEMBINA', '5'),
(18, 'IV/B', 'PEMBINA TINGKAT I', '4'),
(19, 'IV/C', 'PEMBINA UTAMA MUDA', '3'),
(20, 'IV/D', 'PEMBINA UTAMA MADYA', '2'),
(21, '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_master_jabatan` (
  `id_jabatan` int(50) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2350 ;

--
-- Dumping data untuk tabel `tb_master_jabatan`
--

INSERT INTO `tb_master_jabatan` (`id_jabatan`, `nama_jabatan`, `level`) VALUES
(2344, '-', '-'),
(2345, 'STAF', '0'),
(2346, '.BALAI BESAR PELAKSANAAN JALAN NASIONAL VI  DIREKTORAT JENDERAL BINA MARGA, DEP PU', '.BALAI BESAR PELAKSANAAN JALAN NASIONAL VI  DIREKT'),
(2347, 'KEPALA SATKER PELAKSANAAN JALAN NASIONAL PROVINSI GORONTALO', 'KEPALA SATKER'),
(2348, 'STAF', 'STAF'),
(2349, 'KEPALA SATKER PELAKSANAAN JALAN NASIONAL PROVINSI SULAWESI UTARA', 'KEPALA SATKER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_status_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_master_status_pegawai` (
  `id_status_pegawai` int(5) NOT NULL AUTO_INCREMENT,
  `nama_status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tb_master_status_pegawai`
--

INSERT INTO `tb_master_status_pegawai` (`id_status_pegawai`, `nama_status`) VALUES
(1, 'MENINGGAL DUNIA'),
(2, 'HONORER'),
(3, 'CPNS PUSAT'),
(4, 'CPNS DAERAH'),
(5, 'PNS PUSAT'),
(6, 'PNS DAERAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_master_unit_kerja`
--

CREATE TABLE IF NOT EXISTS `tb_master_unit_kerja` (
  `id_unit_kerja` int(50) NOT NULL AUTO_INCREMENT,
  `nama_unit_kerja` varchar(150) NOT NULL,
  `eselon` varchar(50) NOT NULL,
  `parent_unit` varchar(50) NOT NULL,
  PRIMARY KEY (`id_unit_kerja`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=239 ;

--
-- Dumping data untuk tabel `tb_master_unit_kerja`
--

INSERT INTO `tb_master_unit_kerja` (`id_unit_kerja`, `nama_unit_kerja`, `eselon`, `parent_unit`) VALUES
(1, 'DIREKTORAT JENDERAL BINA MARGA', 'I.a', ''),
(2, 'SEKRETARIAT DIREKTORAT JENDERAL BINA MARGA', 'II.a', 'DIREKTORAT JENDERAL BINA MARGA'),
(31, 'BALAI PELAKSANAAN JALAN NASIONAL XI, DITJEN BINA MARGA', 'III.b', 'DIREKTORAT JENDERAL BINA MARGA'),
(32, 'SUB BAGIAN TATA USAHA, BPJN XI, DITJEN BINA MARGA', 'IV.a', 'BALAI PELAKSANAAN JALAN NASIONAL XI, DITJEN BINA M'),
(33, 'SEKSI PERENCANAAN DAN PELAKSANA, BPJN XI, DITJEN BINA MARGA', 'IV.a', 'BALAI PELAKSANAAN JALAN NASIONAL XI, DITJEN BINA M'),
(34, 'SEKSI PENGENDALIAN SISTEM, PELAKSANAAN, PENGUJIAN DAN PERALATAN, BPJN XI, DITJEN BINA MARGA', 'IV.a', 'BALAI PELAKSANAAN JALAN NASIONAL XI, DITJEN BINA M');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
