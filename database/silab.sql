-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Agu 2021 pada 15.25
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjadwal_mhs`
--

CREATE TABLE `tbjadwal_mhs` (
  `id_jadwal_mhs` int(11) NOT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `id_jadwal` int(11) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL,
  `prodi` varchar(254) DEFAULT NULL,
  `waktu` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbjadwal_mhs`
--

INSERT INTO `tbjadwal_mhs` (`id_jadwal_mhs`, `id_matkul`, `nim`, `id_jadwal`, `nidn`, `prodi`, `waktu`) VALUES
(21, 62, 2018420002, 9, 20192387, 'Teknik Informatika', '10:32:00'),
(31, 62, 1239888, 14, 2009126123, 'Teknik Informatika', '09:00:00'),
(33, 67, 2018420002, 14, 123123123, 'Teknik Informatika', '10:00:00'),
(34, 62, 1239888, 14, 2009126123, 'Teknik Informatika', '09:00:00'),
(35, 62, 1239888, 9, 2009126123, 'Teknik Informatika', '09:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id_admin` int(11) NOT NULL,
  `username` int(11) DEFAULT NULL,
  `pwd_admin` varchar(254) DEFAULT NULL,
  `nama_admin` varchar(254) DEFAULT NULL,
  `email_admin` varchar(254) DEFAULT NULL,
  `telp_admin` varchar(254) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbladmin`
--

INSERT INTO `tbladmin` (`id_admin`, `username`, `pwd_admin`, `nama_admin`, `email_admin`, `telp_admin`, `level`) VALUES
(1, 2018420065, '123123', 'Admin Y coba', 'adminoke@xx.com', '083857910202', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbldosen`
--

CREATE TABLE `tbldosen` (
  `nidn` int(11) NOT NULL,
  `pwd_dosen` varchar(254) NOT NULL,
  `nama_dosen` varchar(254) NOT NULL,
  `jenis_kelamin_dsn` varchar(254) NOT NULL,
  `email_dsn` varchar(254) NOT NULL,
  `telp_dsn` varchar(254) NOT NULL,
  `foto_dsn` varchar(254) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbldosen`
--

INSERT INTO `tbldosen` (`nidn`, `pwd_dosen`, `nama_dosen`, `jenis_kelamin_dsn`, `email_dsn`, `telp_dsn`, `foto_dsn`, `level`) VALUES
(20192387, '7409', '209128', 'Laki-laki', '12h3uh@m.com', '123223', 'userx.jpg', 2),
(123123123, '1231', 'Dosen coba 2', 'Perempuan', 'dosenoke2@xx.com', '123123\r\n', 'userx.jpg', 2),
(123456789, '6467', 'dosen coba', 'Laki-laki', 'dosencoba@k.com', '123123', '1628504791_0925f316fa7f64e06d10.png', 2),
(2009126123, '3498', 'dosen coba', 'Laki-laki', 'test2@gmcil.com', '123123123', 'userx.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbljadwal`
--

CREATE TABLE `tbljadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `prodi` varchar(254) DEFAULT NULL,
  `kelompok` int(11) DEFAULT NULL,
  `ruang` varchar(254) DEFAULT NULL,
  `tgl_pelak` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbljadwal`
--

INSERT INTO `tbljadwal` (`id_jadwal`, `id_matkul`, `nidn`, `tahun`, `prodi`, `kelompok`, `ruang`, `tgl_pelak`) VALUES
(9, 62, 20192387, 2021, 'Teknik Informatika', 2, 'Lab 2', '2021-08-13'),
(14, 62, 123123123, 2019, 'Teknik Informatika', 2, 'Lab 1', '2021-08-14'),
(17, NULL, NULL, NULL, 'Teknik Informatika', NULL, NULL, NULL),
(18, NULL, NULL, NULL, 'Teknik Informatika', NULL, NULL, NULL),
(19, NULL, NULL, NULL, 'Teknik Informatika', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmahasiswa`
--

CREATE TABLE `tblmahasiswa` (
  `nim` int(10) NOT NULL,
  `pwd_mhs` varchar(254) NOT NULL,
  `nama_mhs` varchar(254) NOT NULL,
  `jenis_kelamin_mhs` varchar(50) NOT NULL,
  `prodi` varchar(254) NOT NULL,
  `semester` int(2) NOT NULL,
  `kelas` varchar(254) NOT NULL,
  `email_mhs` varchar(254) NOT NULL,
  `telp_mhs` int(12) NOT NULL,
  `foto_mhs` varchar(254) NOT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblmahasiswa`
--

INSERT INTO `tblmahasiswa` (`nim`, `pwd_mhs`, `nama_mhs`, `jenis_kelamin_mhs`, `prodi`, `semester`, `kelas`, `email_mhs`, `telp_mhs`, `foto_mhs`, `level`) VALUES
(1239888, '7947', '2123', 'Laki-laki', 'Teknik Informatika', 2, 'Pagi', '123@k.com', 123123, 'userx.jpg', 1),
(2018420002, '4405', 'no 2', 'Laki-laki', 'Teknik Informatika', 2, 'Pagi', '2@2.com', 12, 'userx.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblmatkul`
--

CREATE TABLE `tblmatkul` (
  `id_matkul` int(11) NOT NULL,
  `nidn` int(20) NOT NULL,
  `matkul` varchar(254) DEFAULT NULL,
  `prodi` varchar(254) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  `kode_matkul` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblmatkul`
--

INSERT INTO `tblmatkul` (`id_matkul`, `nidn`, `matkul`, `prodi`, `sks`, `kode_matkul`) VALUES
(62, 123456789, 'Pemrograman Framework', 'Teknik Informatika', 99, 'CP110PF'),
(67, 20192387, '22', 'Teknik Informatika', 22, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblnilai`
--

CREATE TABLE `tblnilai` (
  `id_nilai` int(11) NOT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `nim` int(11) DEFAULT NULL,
  `nidn` int(11) DEFAULT NULL,
  `prodi` varchar(254) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `grade` varchar(254) DEFAULT NULL,
  `keterangan` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblnilai`
--

INSERT INTO `tblnilai` (`id_nilai`, `id_matkul`, `nim`, `nidn`, `prodi`, `nilai`, `grade`, `keterangan`) VALUES
(2, 62, NULL, 2009126123, 'Teknik Informatika', 85, 'A', 'Lulus'),
(4, 67, NULL, 2009126123, 'Teknik Informatika', 80, 'B', 'Lulus'),
(6, 67, NULL, 2009126123, 'Teknik Informatika', 87, 'A', 'Lulus'),
(7, 62, NULL, 2009126123, 'Teknik Informatika', 80, 'B', 'Lulus'),
(8, 62, NULL, 2009126123, 'Teknik Informatika', 90, 'A', 'Lulus'),
(9, 62, NULL, 2009126123, 'Teknik Informatika', 90, 'A', 'Lulus'),
(10, 62, 1239888, 2009126123, 'Teknik Informatika', 90, 'A', 'Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblpendaftaran`
--

CREATE TABLE `tblpendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `nim` int(11) DEFAULT NULL,
  `id_matkul` int(11) DEFAULT NULL,
  `prodi` varchar(254) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `nominal_bayar` int(11) DEFAULT NULL,
  `bukti_bayar` varchar(254) DEFAULT NULL,
  `ket_bayar` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tblpendaftaran`
--

INSERT INTO `tblpendaftaran` (`id_pendaftaran`, `nim`, `id_matkul`, `prodi`, `biaya`, `tgl_daftar`, `tgl_bayar`, `nominal_bayar`, `bukti_bayar`, `ket_bayar`) VALUES
(1, 2018420002, 62, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 150000, 'userx.jpg', 'Belum Validasi'),
(2, 2018420002, 67, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 0, 'userx.jpg', 'Belum Validasi'),
(6, 2018420002, 67, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 0, NULL, 'Belum Validasi'),
(8, 2018420002, 67, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 0, NULL, 'Belum Validasi'),
(9, 2018420002, 67, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 0, NULL, 'Belum Validasi'),
(10, 2018420002, 67, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 0, NULL, 'Belum Validasi'),
(16, 2018420002, 67, 'Teknik Informatika', 150000, '2021-08-14', '0000-00-00', 0, '1628939547_7b7dd35b36d5b6d2d885.jpg', 'Belum Validasi'),
(17, 2018420002, 62, 'Teknik Informatika', 150000, '2021-08-14', '2021-08-14', 200, '1628939991_ce718b50f0787c3d0110.png', 'Sudah Validasi'),
(18, 2018420002, 62, 'Teknik Informatika', 150000, '2021-08-15', '0000-00-00', 0, NULL, 'Belum Validasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpengumuman`
--

CREATE TABLE `tbpengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(254) DEFAULT NULL,
  `isi` varchar(254) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `penulis` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbpengumuman`
--

INSERT INTO `tbpengumuman` (`id_pengumuman`, `judul`, `isi`, `tanggal`, `waktu`, `penulis`) VALUES
(1, 'lorem ipsum 2', 'lorem 2', '2021-08-12', '06:00:00', 'Admin Y coba');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbjadwal_mhs`
--
ALTER TABLE `tbjadwal_mhs`
  ADD PRIMARY KEY (`id_jadwal_mhs`),
  ADD KEY `FK_Relationship_5` (`nim`),
  ADD KEY `FK_Relationship_6` (`id_jadwal`),
  ADD KEY `FK_Relationship_7` (`id_matkul`),
  ADD KEY `nidn` (`nidn`);

--
-- Indeks untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbldosen`
--
ALTER TABLE `tbldosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indeks untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `FK_Relationship_2` (`nidn`),
  ADD KEY `FK_Relationship_3` (`id_matkul`);

--
-- Indeks untuk tabel `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `tblmatkul`
--
ALTER TABLE `tblmatkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `FK_Relationship_10` (`nidn`);

--
-- Indeks untuk tabel `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `FK_Relationship_4` (`id_matkul`),
  ADD KEY `FK_Relationship_8` (`nim`),
  ADD KEY `nidn` (`nidn`);

--
-- Indeks untuk tabel `tblpendaftaran`
--
ALTER TABLE `tblpendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `FK_Relationship_11` (`id_matkul`),
  ADD KEY `FK_Relationship_9` (`nim`);

--
-- Indeks untuk tabel `tbpengumuman`
--
ALTER TABLE `tbpengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbjadwal_mhs`
--
ALTER TABLE `tbjadwal_mhs`
  MODIFY `id_jadwal_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbldosen`
--
ALTER TABLE `tbldosen`
  MODIFY `nidn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2009126124;

--
-- AUTO_INCREMENT untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT untuk tabel `tblmatkul`
--
ALTER TABLE `tblmatkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `tblnilai`
--
ALTER TABLE `tblnilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tblpendaftaran`
--
ALTER TABLE `tblpendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbpengumuman`
--
ALTER TABLE `tbpengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbjadwal_mhs`
--
ALTER TABLE `tbjadwal_mhs`
  ADD CONSTRAINT `FK_Relationship_5` FOREIGN KEY (`nim`) REFERENCES `tblmahasiswa` (`nim`),
  ADD CONSTRAINT `FK_Relationship_6` FOREIGN KEY (`id_jadwal`) REFERENCES `tbljadwal` (`id_jadwal`),
  ADD CONSTRAINT `FK_Relationship_7` FOREIGN KEY (`id_matkul`) REFERENCES `tblmatkul` (`id_matkul`),
  ADD CONSTRAINT `nidn` FOREIGN KEY (`nidn`) REFERENCES `tbldosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `tbljadwal`
--
ALTER TABLE `tbljadwal`
  ADD CONSTRAINT `FK_Relationship_2` FOREIGN KEY (`nidn`) REFERENCES `tbldosen` (`nidn`),
  ADD CONSTRAINT `FK_Relationship_3` FOREIGN KEY (`id_matkul`) REFERENCES `tblmatkul` (`id_matkul`);

--
-- Ketidakleluasaan untuk tabel `tblmatkul`
--
ALTER TABLE `tblmatkul`
  ADD CONSTRAINT `FK_Relationship_10` FOREIGN KEY (`nidn`) REFERENCES `tbldosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD CONSTRAINT `FK_Relationship_4` FOREIGN KEY (`id_matkul`) REFERENCES `tblmatkul` (`id_matkul`),
  ADD CONSTRAINT `FK_Relationship_8` FOREIGN KEY (`nim`) REFERENCES `tblmahasiswa` (`nim`),
  ADD CONSTRAINT `fknidn` FOREIGN KEY (`nidn`) REFERENCES `tbldosen` (`nidn`);

--
-- Ketidakleluasaan untuk tabel `tblpendaftaran`
--
ALTER TABLE `tblpendaftaran`
  ADD CONSTRAINT `FK_Relationship_11` FOREIGN KEY (`id_matkul`) REFERENCES `tblmatkul` (`id_matkul`),
  ADD CONSTRAINT `FK_Relationship_9` FOREIGN KEY (`nim`) REFERENCES `tblmahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
