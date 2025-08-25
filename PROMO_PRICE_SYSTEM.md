# Sistem Harga Promo FazTech

## 📋 **Overview**

Sistem harga promo yang terintegrasi antara dashboard admin dan halaman produk untuk menampilkan harga asli dan harga promo yang menarik client.

## 🗄️ **Database Structure**

### **Table: produk**

```sql
-- Field baru yang ditambahkan
ALTER TABLE produk ADD COLUMN harga_promo DECIMAL(15,2) NULL AFTER harga;
ALTER TABLE produk ADD COLUMN is_promo BOOLEAN DEFAULT FALSE AFTER harga_promo;
ALTER TABLE produk ADD COLUMN promo_label VARCHAR(100) NULL AFTER is_promo;
```

### **Field Description:**

- `harga_promo`: Harga promo (opsional)
- `is_promo`: Status aktif/tidak aktif promo (boolean)
- `promo_label`: Label untuk promo (contoh: "Promo Spesial", "Diskon 20%")

## 🎯 **Fitur yang Tersedia**

### **1. Dashboard Admin**

- **Form Tambah Produk**: Field untuk mengatur harga promo
- **Form Edit Produk**: Update harga promo yang sudah ada
- **Toggle Promo**: Checkbox untuk aktifkan/nonaktifkan promo
- **Preview Harga**: Tampilan harga asli vs harga promo

### **2. Halaman Produk (Frontend)**

- **Harga Promo**: Ditampilkan dengan warna hijau dan ukuran besar
- **Harga Asli**: Dicoret (strikethrough) untuk menunjukkan diskon
- **Label Promo**: Badge kuning dengan teks promo
- **Tombol Order**: Menggunakan harga promo jika tersedia

### **3. Model & Logic**

- **Auto-calculation**: Harga display otomatis menggunakan harga promo jika aktif
- **Fallback**: Jika tidak ada promo, gunakan harga asli
- **Validation**: Harga promo tidak boleh lebih tinggi dari harga asli

## 🚀 **Cara Penggunaan**

### **Admin - Menambah Produk dengan Promo:**

1. Buka dashboard admin → Produk → Tambah Paket
2. Isi field wajib (nama, kategori, harga asli, stok, deskripsi)
3. Centang "Aktifkan Harga Promo"
4. Masukkan harga promo (harus lebih rendah dari harga asli)
5. Masukkan label promo (opsional)
6. Simpan produk

### **Admin - Edit Produk Promo:**

1. Buka dashboard admin → Produk → Edit
2. Ubah field yang diperlukan
3. Toggle promo on/off sesuai kebutuhan
4. Update harga promo atau label
5. Simpan perubahan

### **Frontend - Tampilan Produk:**

- **Dengan Promo**: Harga promo hijau + harga asli tercoret + badge promo
- **Tanpa Promo**: Harga asli normal + teks "Paket Lengkap"

## 🎨 **UI/UX Features**

### **Color Scheme:**

- **Harga Promo**: `text-green-300` (hijau terang)
- **Harga Asli**: `line-through opacity-75` (tercoret, transparan)
- **Badge Promo**: `bg-yellow-500/20 text-yellow-200` (kuning transparan)

### **Responsive Design:**

- **Mobile**: Layout stack, harga promo tetap mudah dibaca
- **Desktop**: Grid layout, informasi promo lengkap
- **Tablet**: Hybrid layout yang optimal

### **Interactive Elements:**

- **Hover Effects**: Shadow dan transform pada card
- **Toggle Animation**: Smooth show/hide promo fields
- **Form Validation**: Real-time feedback untuk input

## 🔧 **Technical Implementation**

### **Model Updates:**

```php
// Produk_model.php
public function ambil_produk_unggulan($limit = 8)
{
    $this->db->select('*,
        CASE
            WHEN is_promo = 1 AND harga_promo IS NOT NULL
            THEN harga_promo
            ELSE harga
        END as harga_display,
        CASE
            WHEN is_promo = 1 AND harga_promo IS NOT NULL
            THEN harga
            ELSE NULL
        END as harga_asli');
    // ... rest of the method
}
```

### **View Updates:**

```php
<!-- Conditional Price Display -->
<?php if ($item->is_promo && $item->harga_promo): ?>
    <div class="text-3xl font-bold mb-1 text-green-300">
        Rp <?= number_format($item->harga_promo, 0, ',', '.') ?>
    </div>
    <div class="text-sm opacity-75 line-through">
        Rp <?= number_format($item->harga, 0, ',', '.') ?>
    </div>
    <div class="text-xs bg-yellow-500/20 text-yellow-200 px-2 py-1 rounded-full mt-1">
        <?= $item->promo_label ?: 'Promo Spesial' ?>
    </div>
<?php else: ?>
    <div class="text-3xl font-bold mb-1">
        Rp <?= number_format($item->harga, 0, ',', '.') ?>
    </div>
    <div class="text-sm opacity-90">Paket Lengkap</div>
<?php endif; ?>
```

### **JavaScript Features:**

```javascript
// Toggle Promo Fields
document.addEventListener("DOMContentLoaded", function () {
	const isPromoCheckbox = document.getElementById("is_promo");
	const promoFields = document.getElementById("promo_fields");

	function togglePromoFields() {
		if (isPromoCheckbox.checked) {
			promoFields.classList.remove("hidden");
		} else {
			promoFields.classList.add("hidden");
		}
	}

	isPromoCheckbox.addEventListener("change", togglePromoFields);
	togglePromoFields(); // Initialize
});
```

## 📱 **Mobile Optimization**

### **Touch-Friendly:**

- **Checkbox Size**: `h-4 w-4` untuk mudah di-tap
- **Button Spacing**: `space-y-3` untuk mencegah mis-tap
- **Form Fields**: Padding yang cukup untuk mobile input

### **Performance:**

- **Lazy Loading**: Hanya load promo fields saat diperlukan
- **Conditional Rendering**: Harga promo hanya render jika ada
- **Optimized Queries**: Single query dengan CASE statement

## 🔒 **Security & Validation**

### **Input Validation:**

- **Harga Promo**: Harus numerik dan positif
- **Harga Asli**: Required field dengan validasi
- **Label Promo**: Max 100 karakter, sanitized input

### **Data Integrity:**

- **Foreign Key**: Relasi dengan tabel produk
- **Constraint**: Harga promo ≤ harga asli
- **Audit Trail**: Timestamp untuk perubahan

## 🚀 **Deployment Steps**

### **1. Database Migration:**

```bash
# Jalankan SQL migration
mysql -u username -p database_name < database/add_promo_price_field.sql
```

### **2. File Updates:**

- ✅ `application/models/Produk_model.php`
- ✅ `application/views/admin/produk/tambah.php`
- ✅ `application/views/admin/produk/edit.php`
- ✅ `application/views/admin/produk/index.php`
- ✅ `application/views/beranda/index.php`
- ✅ `application/views/beranda/produk.php`

### **3. Testing:**

- Test form tambah produk dengan promo
- Test form edit produk promo
- Test tampilan frontend dengan dan tanpa promo
- Test responsive design di berbagai device

## 📊 **Monitoring & Analytics**

### **Metrics to Track:**

- **Conversion Rate**: Produk dengan promo vs tanpa promo
- **User Engagement**: Click rate pada produk promo
- **Revenue Impact**: Peningkatan penjualan produk promo

### **Admin Dashboard:**

- **Promo Status**: Overview produk yang sedang promo
- **Performance**: Efektivitas setiap promo
- **Inventory**: Stok produk promo

## 🔮 **Future Enhancements**

### **Planned Features:**

- **Scheduled Promos**: Promo dengan tanggal mulai/berakhir
- **Bulk Promo**: Set promo untuk multiple produk
- **Promo Analytics**: Detailed reporting dan insights
- **Customer Segmentation**: Promo berdasarkan user behavior

### **Integration Possibilities:**

- **Email Marketing**: Auto-notification untuk promo
- **Social Media**: Share promo ke platform sosial
- **SMS Gateway**: Notifikasi promo via SMS
- **Push Notification**: Real-time promo alerts

## 📞 **Support & Maintenance**

### **Common Issues:**

- **Promo tidak muncul**: Check `is_promo` dan `harga_promo` field
- **Harga salah**: Verify database values dan model logic
- **UI broken**: Check CSS classes dan responsive breakpoints

### **Maintenance Tasks:**

- **Regular Backup**: Database backup sebelum update
- **Performance Check**: Monitor query performance
- **Security Audit**: Regular security review
- **User Training**: Admin training untuk fitur baru

---

**Dibuat oleh:** FazTech Development Team  
**Versi:** 1.0.0  
**Tanggal:** January 2024  
**Status:** Production Ready ✅
