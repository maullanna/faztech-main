-- Tambahkan field baru untuk fitur tambahan
ALTER TABLE produk ADD COLUMN fitur_tambahan VARCHAR(255) NULL AFTER maintenance;

-- Update field yang mungkin NULL menjadi empty string
UPDATE produk SET kualitas = '' WHERE kualitas IS NULL;
UPDATE produk SET garansi = '' WHERE garansi IS NULL;
UPDATE produk SET instalasi = '' WHERE instalasi IS NULL;
UPDATE produk SET support = '' WHERE support IS NULL;
UPDATE produk SET maintenance = '' WHERE maintenance IS NULL;
UPDATE produk SET fitur_tambahan = '' WHERE fitur_tambahan IS NULL;
UPDATE produk SET promo_label = '' WHERE promo_label IS NULL;

-- Hapus field stok jika masih ada
-- ALTER TABLE produk DROP COLUMN IF EXISTS stok;

-- Periksa struktur tabel setelah update
DESCRIBE produk;

-- Tampilkan data yang ada
SELECT id, nama_produk, kualitas, garansi, instalasi, support, maintenance, fitur_tambahan FROM produk LIMIT 5; 