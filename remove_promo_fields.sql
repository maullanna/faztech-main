-- Remove Promo Fields from Database
-- Jalankan ini di phpMyAdmin untuk menghapus semua field promo

USE `faztech`;

-- Hapus field promo dari tabel produk
ALTER TABLE `produk` 
DROP COLUMN `harga_promo`,
DROP COLUMN `is_promo`,
DROP COLUMN `promo_label`;

-- Tampilkan struktur tabel setelah penghapusan
DESCRIBE `produk`;

-- Tampilkan data produk untuk memastikan tidak ada error
SELECT id, nama_produk, kategori, harga, stok, deskripsi, gambar, tanggal_dibuat, tanggal_diperbarui 
FROM `produk` 
LIMIT 5; 