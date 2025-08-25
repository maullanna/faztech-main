-- Fix Database Structure for FazTech - Sesuai ERD
-- Jalankan SQL ini langsung di MySQL (phpMyAdmin, HeidiSQL, atau command line)

-- 1. Buat database jika belum ada
CREATE DATABASE IF NOT EXISTS `faztech` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `faztech`;

-- 2. Buat tabel produk dengan kolom promo yang lengkap (sesuai ERD)
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `harga_promo` decimal(10,2) NULL,
  `is_promo` tinyint(1) DEFAULT 0,
  `promo_label` varchar(100) NULL,
  `stok` int(11) DEFAULT 0,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_diperbarui` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 3. Buat tabel users (sesuai ERD)
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kata_sandi` varchar(255) NOT NULL,
  `peran` enum('admin','user') NOT NULL DEFAULT 'user',
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_diperbarui` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 4. Buat tabel kontak_form (sesuai ERD)
CREATE TABLE IF NOT EXISTS `kontak_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_properti` varchar(50) NOT NULL,
  `catatan` text,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 5. Buat tabel testimoni (sesuai ERD)
CREATE TABLE IF NOT EXISTS `testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `rating` int(1) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_diperbarui` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 6. Buat tabel profile_perusahaan (sesuai ERD)
CREATE TABLE IF NOT EXISTS `profile_perusahaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(200) NOT NULL,
  `deskripsi` text,
  `visi` text,
  `misi` text,
  `tahun_berdiri` int(4),
  `jumlah_klien` int(11) DEFAULT 0,
  `jumlah_proyek` int(11) DEFAULT 0,
  `alamat` text,
  `telepon` varchar(20),
  `email` varchar(100),
  `website` varchar(200),
  `status` varchar(50) DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 7. Buat tabel portfolio (sesuai ERD)
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 8. Buat tabel pekerjaan (sesuai ERD)
CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tanggal_dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 9. Insert data sample
INSERT INTO `produk` (`nama_produk`, `kategori`, `harga`, `harga_promo`, `is_promo`, `promo_label`, `stok`, `deskripsi`) VALUES
('Paket CCTV 4 Channel', 'CCTV', 2500000, 2000000, 1, 'Promo Spesial', 5, 'Paket CCTV 4 channel dengan kamera HD, DVR, dan kabel'),
('Paket CCTV 8 Channel', 'CCTV', 3500000, NULL, 0, NULL, 3, 'Paket CCTV 8 channel dengan kamera Full HD, DVR, dan kabel'),
('Barrier Gate Otomatis', 'Access Control', 1500000, 1200000, 1, 'Hemat 20%', 2, 'Pintu otomatis dengan remote control dan sensor');

INSERT INTO `users` (`nama_lengkap`, `email`, `kata_sandi`, `peran`) VALUES
('Administrator', 'admin@faztech.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin');

INSERT INTO `testimoni` (`nama`, `jabatan`, `rating`, `deskripsi`) VALUES
('Budi Santoso', 'CEO PT Maju Bersama', 5, 'Pelayanan sangat memuaskan, teknisi profesional dan hasil instalasi rapi'),
('Siti Nurhaliza', 'Manager Keamanan', 5, 'Harga terjangkau dengan kualitas terbaik, sangat puas dengan layanan FazTech');

INSERT INTO `profile_perusahaan` (`nama_perusahaan`, `deskripsi`, `visi`, `misi`, `tahun_berdiri`, `jumlah_klien`, `jumlah_proyek`, `alamat`, `telepon`, `email`) VALUES
('FazTech', 'Solusi Keamanan Terpercaya untuk Bisnis & Rumah Anda', 'Menjadi pemimpin dalam solusi keamanan teknologi di Indonesia', 'Memberikan layanan keamanan berkualitas tinggi dengan harga terjangkau', 2020, 150, 300, 'Jl. Contoh No. 123, Jakarta', '+62 812-3456-7890', 'info@faztech.com');

-- 10. Tampilkan struktur tabel
SHOW TABLES;
DESCRIBE `produk`;
DESCRIBE `testimoni`;
DESCRIBE `profile_perusahaan`; 


-- Tambah produk promo baru
INSERT INTO `produk` (`nama_produk`, `kategori`, `harga`, `harga_promo`, `is_promo`, `promo_label`, `stok`, `deskripsi`) VALUES
('Paket CCTV 4 Channel Promo', 'CCTV', 5000000, 4000000, 1, 'Promo Spesial', 5, 'Paket CCTV 4 channel dengan harga promo');