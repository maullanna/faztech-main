-- Check and Update Promo Data
-- Jalankan ini di phpMyAdmin untuk memastikan data promo sudah benar

USE `faztech`;

-- 1. Tampilkan data produk yang ada
SELECT id, nama_produk, kategori, harga, harga_promo, is_promo, promo_label, stok 
FROM `produk` 
ORDER BY id;

-- 2. Update produk CCTV 1 menjadi promo (jika belum)
UPDATE `produk` SET 
    `is_promo` = 1, 
    `harga_promo` = 4000000, 
    `promo_label` = 'Promo Spesial' 
WHERE `id` = 9;

-- 3. Tambah produk promo baru jika perlu
INSERT INTO `produk` (`nama_produk`, `kategori`, `harga`, `harga_promo`, `is_promo`, `promo_label`, `stok`, `deskripsi`) VALUES
('Paket CCTV 4 Channel Promo', 'CCTV', 3000000, 2500000, 1, 'Promo Spesial', 5, 'Paket CCTV 4 channel dengan harga promo'),
('Barrier Gate Otomatis', 'Access Control', 2000000, 1500000, 1, 'Hemat 25%', 3, 'Pintu otomatis dengan remote control');

-- 4. Tampilkan data setelah update
SELECT id, nama_produk, kategori, harga, harga_promo, is_promo, promo_label, stok 
FROM `produk` 
WHERE `is_promo` = 1; 