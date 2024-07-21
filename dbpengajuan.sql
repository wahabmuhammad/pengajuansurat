-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2024 pada 02.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpengajuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_04_29_153617_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datadiri`
--

CREATE TABLE `tb_datadiri` (
  `id` int(11) NOT NULL,
  `nik` bigint(12) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') DEFAULT 'Perempuan',
  `status` enum('Belum kawin','Sudah kawin') DEFAULT 'Belum kawin',
  `email` text DEFAULT NULL,
  `nohp` bigint(20) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `desa` varchar(255) DEFAULT NULL,
  `rt_rw` varchar(255) DEFAULT NULL,
  `keperluan` text DEFAULT NULL,
  `user_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_datadiri`
--

INSERT INTO `tb_datadiri` (`id`, `nik`, `nama`, `jeniskelamin`, `status`, `email`, `nohp`, `kabupaten`, `kecamatan`, `desa`, `rt_rw`, `keperluan`, `user_fk`) VALUES
(4, 4566, 'Ggvb', 'Perempuan', 'Sudah kawin', 'hhhjh@gmail.com', 45677, 'Jgghj', 'Fvvbhcc', 'Vbbjuh', 'Fguu', NULL, 9),
(8, 331900000000000, 'Muhammad Abdul Wahab, S.Kom', 'Perempuan', 'Belum kawin', 'ww@gmail.com', 111111, 'jpr', 'jpr', 'scnd', 'scnd', NULL, 6),
(9, 331900000000000, 'Muhammad Abdul Wahab', 'Perempuan', 'Belum kawin', 'www@gmail.com', 1111111, 'sdn', 'sdn', 'kds', 'scnd', NULL, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapengajuan`
--

CREATE TABLE `tb_datapengajuan` (
  `id_data` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_datadiri` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `id_respon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ketentuan`
--

CREATE TABLE `tb_ketentuan` (
  `id_ketentuan` int(11) NOT NULL,
  `nama_layanan` varchar(255) DEFAULT NULL,
  `ketentuan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_ketentuan`
--

INSERT INTO `tb_ketentuan` (`id_ketentuan`, `nama_layanan`, `ketentuan`) VALUES
(1, 'Surat Keterangan Usaha', '1. SURAT PENGANTAR RT/RW\n2. FOTOCOPY KTP-el\n3. FOTOCOPY KK\n4. ALAMAT USAHA\n5. FOTOCOPY TANDA LUNAS PBB (TAHUN 2021)'),
(2, 'Pembuatan Akta Kelahiran', '1. Surat Kelahiran dari Bidan/Rumah Sakit\n2. Surat Nikah (Fotocopy dan Asli)\n3. Fotocopy KTP Orangtua\n4. Fotocopy Kartu Keluarga\n5. Fotocopy Akte Kelahiran Anak ke-2 (apabila ingin mengurus akte kelahiran anak ke-1)'),
(3, 'Pembuatan Akta Kematian', '1.   Surat Keterangan Kematian Asli\n\n2.   KTP dan KK asli almarhum\n\n3.   KTP asli pasangan almarhum (jika ada pasangan yang masih hidup)\n\n4.   Pelapor harus ahli waris langsung almarhum usia min 21th /sudahmenikah/dikuasakan\n\n5.   KTP dan KK pelapor'),
(4, 'Pembuatan Surat Nikah\n', '1. Surat Pengantar RT/RW\n2. Fotocopy Kartu Tanda Penduduk (calon suami dan istri) .\n3. Fotocopy Kartu Keluarga (calon suami dan istri).\n4. Fotocopy Akta Lahir (calon suami dan istri) .\n5. Fotocopy Ijazah Terakhir (calon suami dan istri)\n6. Pas Foto 2×3 sebanyak 4 lembar (calon suami dan istri) .\n7. Pas Foto 4×6 sebanyak 2 lembar (calon suami dan istri) .\n8. Surat pernyataan belum pernah menikah, yang di tandatangani oleh Calon Pengantin dan Pengurus RT/RW, formulir ini bisa di dapat dari Kelurahan atau RT/TW setempat.\n9. Surat pernyataan persetujuan orang tua / wali yang di tandatangani oleh Orang Tua, Saksi dan Pengurus RT/RW, formulir(N1-N4) ini juga bisa di dapat dari Kelurahan atau RT/RW setempat'),
(5, 'Pengajuan BLT', '1. Fotokopi KTP yang masih berlaku.\n2. Fotokopi Kartu Keluarga.\n3. Surat Keterangan Tidak Mampu (SKTM)\n5. Bukti penghasilan atau\n6. surat keterangan dari RT/RW setempat.'),
(6, 'Pengurusan Keterangan Tidak Mampu (SKTM)\n', '1. Surat Pengantar RT/RW\n2. Foto Copy E-ktp elektronik (KTP)\n3. Foto Copy Kartu Keluarga (KK)\n4. Kartu identitas warga miskin dan formulir verifikasi warga miskin'),
(7, 'Surat Keramaian', '1. Surat Pengantar Ka.RT diketahui Ka.RW\n2. Surat Permohonan\n3. Foto Copy Identitas Penanggung Jawab\n4. Surat Izin dari Pemilik Tempat / Lokasi\n5. Surat Pernyataan yang disediakan oleh Polsek.'),
(8, 'Surat Domisili\n', '1. Surat pengantar RT dan RW yang ditandatangani\n2. Kartu Keluarga (KK) asli dan fotokopi\n3. KTP asli dan fotokopi\n4. Siapkan pas foto 3 – 5 lembar ukuran 3×4'),
(9, 'Surat Izin Mendirikan Bangunan', '1. Surat RT dan RW yang ditandatangani \n2. Foto copy KTP, PBB Tahun berjalan dan sertifikat tanah disahkan BPN.\n3. Surat keterangan membangun dari desa / kelurahan.\n4. Gambar situasi / sketsa lokasi.\n5. Gambar teknis.\n6. Meterai 10.000\n7. UKL-UPL untuk proyek 500ha.'),
(10, 'Pembuatan Kartu Keluarga ', '1. F1.01 dari Desa\n2. Dokumen Pendukung (Ijasah, Akta Lahir, Buku Nikah atau Dokumen yang diterbitkan oleh lembaga lain)\n3. Pembuatan Kartu Keluarga . (Pisah KK karena menikah)\n4. Kartu Keluarga asli masing-masing pasangan (suami dan istri)\n5. Surat Keterangan Pindah Domisili dari Desa (jika suami/istri berbeda domisili)\n6. eKTP asli\n7. Fotocopy Buku Nikah/Akta Perkawinan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `id_ketentuan` int(11) DEFAULT NULL,
  `info_tambahan` text DEFAULT NULL,
  `dokumentambahan` text DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `id_ketentuan`, `info_tambahan`, `dokumentambahan`, `id_user`) VALUES
(2, 4, NULL, '1719149819_Billing Farmasi AHMAD THOHAR.pdf', '12'),
(3, 6, NULL, '1719153875_Billing Farmasi  NADIA NAILA HUSNAH.pdf', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_respon`
--

CREATE TABLE `tb_respon` (
  `id_respon` int(11) NOT NULL,
  `tanggapan` text NOT NULL,
  `status` enum('SUDAH DITANGANI','SEDANG DI PROSES','SELESAI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `email`, `password`, `hak_akses`) VALUES
(7, 'bachtiarrz321@gmail.com', '$2y$12$Bt/RRdRiOC8zWIptypYH8e0k7S/ikuidhvsFAWm1kC/PWh2L5xijy', 'user'),
(9, 'budiono@gmail.com', '$2y$12$zh4ZT6CRArdD8Sd023DiYeRgZx3FkexsNUMHCwDvL0wdn8tHqfhU.', 'user'),
(11, 'yasmin@gmail.com', '$2y$12$D/9fOhOJzg7r.K7IvPSJ2epct0du2fFK1TFr1mUb4yYxmG3llgY4q', 'admin'),
(12, 'wahabmuhammad95@gmail.com', '$2y$12$PMtZ7by2DlOPubdrGiowDO50jn07JvYJQyvklctGIbLvGgXpd5Jpu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_datadiri`
--
ALTER TABLE `tb_datadiri`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_datapengajuan`
--
ALTER TABLE `tb_datapengajuan`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tb_ketentuan`
--
ALTER TABLE `tb_ketentuan`
  ADD PRIMARY KEY (`id_ketentuan`);

--
-- Indeks untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indeks untuk tabel `tb_respon`
--
ALTER TABLE `tb_respon`
  ADD PRIMARY KEY (`id_respon`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_datadiri`
--
ALTER TABLE `tb_datadiri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_datapengajuan`
--
ALTER TABLE `tb_datapengajuan`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_ketentuan`
--
ALTER TABLE `tb_ketentuan`
  MODIFY `id_ketentuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
