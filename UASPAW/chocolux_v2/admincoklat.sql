-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2024 pada 04.36
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admincoklat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'Silver queen'),
(2, 'Dairy Milk'),
(3, 'Ferrero Rocher'),
(4, 'toblerone'),
(5, 'KitKat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `tanggal_pemesanan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('Pending','Terkirim','Selesai','Dibatalkan') DEFAULT 'Pending',
  `alamat_pengiriman` text NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `produk_id`, `nama`, `email`, `jumlah`, `total_harga`, `tanggal_pemesanan`, `status`, `alamat_pengiriman`, `metode_pembayaran`, `user_id`) VALUES
(1, 1, 'berlian wanna', 'berlian.wanna@gmail.com', 2, '28000.00', '2024-12-04 03:03:23', 'Selesai', 'bukit unsri', 'COD', 0),
(3, 1, 'Coklat Premium', 'user@example.com', 2, '150000.00', '2024-12-04 03:24:03', 'Selesai', 'Jl. Coklat No. 5', 'Transfer', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(1, 1, 'SilverQueen Almond Milk ', 14000, 'tEfFEPFPhMYmNxNYbppC.png', 'SilverQueen Almond Milk adalah produk coklat susu dengan isian dalam nya menggunakan kacang almond yang crunchy dan lezat serta premium,\r\nBerat Produk 55 gram, Exp Mei 2026', 'tersedia'),
(2, 1, ' SilverQueen ChunkyBar Beruang', 30000, 'wVGclaByLYjkhkiVHMSK.jpg', 'SilverQueen ChunkyBar Beruang adalah produk coklat susu dengan isian dalam nya menggunakan kacang mede yang enak dan lezat serta premium,\r\nBerat Produk 3pcs x 30gram, Exp Jan 2026', 'tersedia'),
(3, 1, 'SilverQueen Chasew / Mede', 11500, 'TgcAoxhbjSTJnLBWGOGV.png', 'Silverqueen Chasew / Mede adalah produk coklat dengan isian dalam nya menggunakan kacang mede yang enak dan lezat serta premium,\r\nBerat Produk 55 gram, Exp Jan 2026', 'tersedia'),
(4, 1, 'SilverQueen ChunkyBar Love', 26000, 'mAvyZVLscyXHcqZYahPE.png', 'SilverQueen ChunkyBar Love Spesial edisi valentine adalah produk coklat susu dengan isian dalam nya menggunakan kacang mede yang enak dan lezat serta premium,\r\nBerat Produk 3pcs x 30gram, Exp Feb 2026', 'tersedia'),
(5, 2, 'Cadbury Dairy Milk Roast Almond', 18000, 'HqhgadLDcqZwyaxhsYUH.png', 'Cadbury Dairy Milk Roast Almond adalah coklat susu dengan isian kacang almond yang garing dan enak,\r\nBerat produk 40gram, Exp Des 2025', 'tersedia'),
(6, 2, 'Cadbury Dairy Milk Bubbly', 25000, 'uCtibwEWDXwPMcRvgqMa.png', 'Cadbury Dairy Milk Bubbly adalah variasi coklat cadbury yang dibentuk seperti bubble dikombinasikan dengan soft creamy coklat,\r\nBerat produk 40gram, Exp Okt 2025', 'tersedia'),
(7, 2, 'Cadbury Dairy Milk Caramel Nibbles Sharebag', 30000, 'ReFGlyjrYnLbvFXMMGap.png', 'Cadbury Dairy Milk Caramel Nibbles adalah coklat cadbury yang dikombinasikan dengan rasa caramel yang legit dan enak kini hadir dengan kemasan share cocok untuk kumpul bersama teman atau kelurga,\r\nBerat produk 10pcs x 15gram, Exp Des 2025', 'tersedia'),
(8, 3, 'Ferrero Rocher Premiun Chocolate isi 24pcs', 195000, 'kuitpadJgoAbOdaeVoVF.png', 'Ferrero Rocher Premiun Chocolate adalah coklat hazelnut berkualitas tinggi ditambah crispy  wafer yang nikmat mampu menciptakan cita rasa coklat yang istimewa,\r\nBerat produk 24pcs x 12,5gram, Exp Ags 2026', 'tersedia'),
(9, 3, 'Ferrero Rocher Premiun Chocolate isi 16pcs', 110000, 'ZgpoDlJbESOedAHzpzmO.png', 'Ferrero Rocher Premiun Chocolate adalah coklat hazelnut berkualitas tinggi ditambah crispy  wafer yang nikmat mampu menciptakan cita rasa coklat yang istimewa,\r\nBerat produk 16pcs x 12,5gram, Exp Sep 2026', 'tersedia'),
(10, 3, 'Ferrero Rocher Premiun Chocolate Isi 3pcs', 24000, 'ACclViUtjbeNDwdhPlOZ.png', 'Ferrero Rocher Premiun Chocolate adalah coklat hazelnut berkualitas tinggi ditambah crispy  wafer yang nikmat mampu menciptakan cita rasa coklat yang istimewa,\r\nBerat produk 3pcs x 12,5gram, Exp Sep 2026', 'tersedia'),
(11, 4, 'Toblerone Milk Coklat', 30000, 'SwtcXWHrnjStSzVfRpKG.png', 'Toblerone Coklat Milk adalah coklat batangan yang dibuat oleh Kraft Foods Switzerland. Dikenal dengan bentuknya yang segitiga, melambangkan matterhorn di pegunungan alpen, kandungan selain coklat adalah nougat, almond dan madu.\r\nBerat Produk 100gram, Exp Jan 2027', 'tersedia'),
(12, 4, 'Toblerone Happy Heart Days', 33000, 'iozHUyDLbnORGcmDDzzK.png', 'Toblerone Happy Heart Days adalah coklat batangan yang dibuat oleh Kraft Foods Switzerland. Dikenal dengan bentuknya yang segitiga, melambangkan matterhorn di pegunungan alpen, kandungan selain coklat adalah nougat, stroberi dan madu.\r\nBerat Produk 100gram, Exp Juli 2026', 'tersedia'),
(13, 4, 'Toblerone Dark Coklat', 30000, 'xVCykZKLdhOyiBGLxgWT.png', 'Toblerone Dark Coklat adalah coklat batangan yang dibuat oleh Kraft Foods Switzerland. Dikenal dengan bentuknya yang segitiga, melambangkan matterhorn di pegunungan alpen, kandungan selain dark coklat adalah nougat dan madu.\r\nBerat Produk 100gram, Exp Juni 2026', 'tersedia'),
(14, 5, 'KItKat Coklat Wafer 4 Finger', 10000, 'JvfdEQZrWeWxSXYgrtBB.png', 'KItKat Coklat Wafer 4 Finger adalah perpauan antara coklat dan wafer yang renyah,\r\nBerat Produk 35gram, Exp Feb 2025', 'tersedia'),
(15, 5, 'KItKat White Coklat Wafer 4 Finger ', 13000, 'EVNJJChAapzVOsJhPyEe.png', 'KItKat White Coklat Wafer 4 Finger adalah perpaduan antara coklat putih dan wafer yang renyah,\r\nBerat Produk 36gram, Exp Mar 2025', 'tersedia'),
(16, 5, 'KItKat Caramel Coklat Bar', 9000, 'YZyfogAILcSETyHXDcoE.png', 'KItKat Caramel Coklat Bar adalah perpauan antara coklat, caramel, dan wafer yang renyah dan legit,\r\nBerat Produk 29gram, Exp Jun 2025', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'berlian', 'admin@gmail.com', '$2y$10$gol4SVNT.OFK8EgRaPbHHO57GeYzO.bMMXiqYMjR8bvSwVYxwgy.q'),
(3, 'putri', 'putri@gmail.com', '$2y$10$H1hXQNjd76fXLEE4tKldQuWl1n14sWsxpF6bOjlQUzPBTiN/QOvLO'),
(4, 'berlian', 'berlian@gmail.com', '$2y$10$G4onjqtEWbm/Z2jdZnF1q.6wnUXt3KRLdc2Q6K7CdSz5HGyMFDTsq'),
(5, 'berlian', 'berlian.wanna@gmail.com', '$2y$10$OVxmq3q/mjzVJsOSiaevIO1..H/0eVQL/U8nH.8DMJwaHS7EBLTIG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testi`
--

INSERT INTO `testi` (`id`, `name`, `phone`, `email`, `message`, `created_at`) VALUES
(4, 'Putri Aulia', '(+62) 812 7473 9797', 'putri.aulia@gmail.com', 'Coklatnya luar biasa! Tidak hanya enak, tapi juga memberikan pengalaman yang tak terlupakan. Setiap potongan adalah kebahagiaan.', '2024-10-16 14:57:39'),
(8, 'berlian', '(+62) 812 7473 9797', 'berlian.wanna@gmail.com', 'Coklat dari ChocoLux benar-benar memanjakan lidah! Rasanya yang kaya dan lembut membuat setiap gigitan menjadi momen istimewa.', '2024-10-16 15:02:23'),
(9, 'Annisa ', '(+62) 812 7473 9797', 'Annisa@gmail.com', 'Coklatnya luar biasa! Tidak hanya enak, tapi juga memberikan pengalaman yang tak terlupakan. Setiap potongan adalah kebahagiaan.', '2024-10-16 15:07:43'),
(11, 'berlian', '(+62) 812 7473 9797', 'berlian.wanna@gmail.com', 'Coklatnya luar biasa! Tidak hanya enak, tapi juga memberikan pengalaman yang tak terlupakan. Setiap potongan adalah kebahagiaan.', '2024-10-17 04:13:19'),
(12, 'berlian wanna', '08127365789', 'berlian.wanna@gmail.com', 'coklat nya enak sekali, datang nya cepat & masih padat tidak cair ', '2024-11-27 16:18:24'),
(13, 'berlian wanna', '08127365789', 'berlian.wanna@gmail.com', 'coklat nya enak sekali, datang nya cepat & masih padat tidak cair ', '2024-12-04 01:59:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `nama`, `email`, `password`) VALUES
(1, 'John Doe', 'john@example.com', 'hashed_password');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
