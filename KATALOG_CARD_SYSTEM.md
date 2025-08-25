# Katalog Card System - FazTech

## Overview

Sistem katalog telah diubah dari filter button menjadi 6 card box yang interaktif. Setiap card mewakili satu kategori produk, dan ketika diklik akan menampilkan semua produk dalam kategori tersebut.

## Perubahan yang Dilakukan

### 1. **Menghapus Filter Button System**

- Menghapus filter button kategori yang sebelumnya
- Menghapus sistem filter real-time
- Menghapus tombol "Lihat Produk Selengkapnya"

### 2. **Implementasi Card Box System**

- **6 Card Box**: CCTV, Finger Print, Barrier Gate, Fiber Optic, HDD, Access Control
- **Interactive Cards**: Setiap card dapat diklik untuk melihat produk dalam kategori
- **Visual Design**: Setiap card memiliki icon, warna, dan deskripsi yang unik

## Card Box Details

### 1. **CCTV Card**

- **Icon**: `ri-camera-line`
- **Color**: Blue gradient (`from-blue-500 to-blue-600`)
- **Description**: "Sistem kamera pengawas dan monitoring dengan teknologi terdepan untuk keamanan properti Anda."

### 2. **Finger Print Card**

- **Icon**: `ri-fingerprint-line`
- **Color**: Green gradient (`from-green-500 to-green-600`)
- **Description**: "Sistem akses dengan teknologi sidik jari untuk keamanan dan kemudahan akses."

### 3. **Barrier Gate Card**

- **Icon**: `ri-gate-line`
- **Color**: Purple gradient (`from-purple-500 to-purple-600`)
- **Description**: "Gerbang otomatis dan sistem parkir untuk mengontrol akses kendaraan."

### 4. **Fiber Optic Card**

- **Icon**: `ri-wifi-line`
- **Color**: Orange gradient (`from-orange-500 to-orange-600`)
- **Description**: "Kabel dan perangkat jaringan fiber optik untuk koneksi internet berkecepatan tinggi."

### 5. **HDD Card**

- **Icon**: `ri-hard-drive-line`
- **Color**: Red gradient (`from-red-500 to-red-600`)
- **Description**: "Hard disk drive untuk penyimpanan data dengan kapasitas besar dan keandalan tinggi."

### 6. **Access Control Card**

- **Icon**: `ri-lock-line`
- **Color**: Indigo gradient (`from-indigo-500 to-indigo-600`)
- **Description**: "Sistem kontrol akses dan keamanan untuk mengatur siapa yang dapat masuk ke area tertentu."

## User Flow

### 1. **Initial State**

- User melihat 6 card box katalog
- Setiap card menampilkan kategori dengan icon dan deskripsi
- Hover effects untuk interaktivitas

### 2. **Card Click**

- User mengklik salah satu card (misalnya CCTV)
- Card box katalog disembunyikan
- Container produk ditampilkan dengan judul kategori
- Semua produk dalam kategori tersebut ditampilkan

### 3. **Product Display**

- Grid produk dengan layout yang sama seperti sebelumnya
- Setiap produk memiliki gambar, nama, harga, dan tombol detail
- Quick action overlay untuk detail dan WhatsApp

### 4. **Back Navigation**

- Tombol "Kembali ke Katalog" untuk kembali ke card box
- Smooth scroll animation ke atas halaman

## Technical Implementation

### 1. **HTML Structure**

```html
<!-- Katalog Card Boxes -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
	<!-- CCTV Card -->
	<div
		class="katalog-card group bg-white rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 cursor-pointer"
		data-kategori="CCTV"
		data-aos="fade-up"
		data-aos-delay="100"
	>
		<div
			class="w-20 h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300"
		>
			<i class="ri-camera-line text-3xl text-white"></i>
		</div>
		<h3
			class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors"
		>
			CCTV
		</h3>
		<p class="text-gray-600 mb-6">
			Sistem kamera pengawas dan monitoring dengan teknologi terdepan untuk
			keamanan properti Anda.
		</p>
		<div class="flex items-center justify-between">
			<span class="text-sm text-gray-500">Klik untuk melihat produk</span>
			<i
				class="ri-arrow-right-line text-xl text-blue-500 group-hover:translate-x-2 transition-transform"
			></i>
		</div>
	</div>
	<!-- ... other cards ... -->
</div>

<!-- Produk Container (Hidden by default) -->
<div id="produkContainer" class="hidden">
	<!-- Back Button -->
	<div class="mb-8" data-aos="fade-up">
		<button
			id="backToKatalog"
			class="inline-flex items-center text-primary hover:text-primary/80 font-semibold transition-colors"
		>
			<i class="ri-arrow-left-line mr-2"></i>
			Kembali ke Katalog
		</button>
	</div>

	<!-- Category Title -->
	<div class="text-center mb-12" data-aos="fade-up" data-aos-delay="100">
		<h3 id="categoryTitle" class="text-3xl font-bold text-gray-900 mb-4"></h3>
		<div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
	</div>

	<!-- Products Grid -->
	<div
		id="productsGrid"
		class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8"
	>
		<!-- Products will be loaded here -->
	</div>
</div>
```

### 2. **JavaScript Logic**

```javascript
// Katalog Card Functionality
const katalogCards = document.querySelectorAll('.katalog-card');
const katalogContainer = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3');
const produkContainer = document.getElementById('produkContainer');
const backToKatalogBtn = document.getElementById('backToKatalog');
const categoryTitle = document.getElementById('categoryTitle');
const productsGrid = document.getElementById('productsGrid');

// Store all products data
const allProducts = <?= json_encode($produk_unggulan ?? []) ?>;

katalogCards.forEach(card => {
    card.addEventListener('click', function() {
        const selectedKategori = this.getAttribute('data-kategori');

        // Hide katalog cards
        katalogContainer.style.display = 'none';

        // Show products container
        produkContainer.classList.remove('hidden');

        // Set category title
        categoryTitle.textContent = selectedKategori;

        // Filter and display products
        const filteredProducts = allProducts.filter(product => product.kategori === selectedKategori);

        // Generate products HTML and display
        // ... product rendering logic ...

        // Scroll to top
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
```

## Features

### 1. **Visual Design**

- **Gradient Icons**: Setiap card memiliki icon dengan gradient warna yang unik
- **Hover Effects**: Scale animation pada icon dan card
- **Color Coding**: Setiap kategori memiliki warna yang berbeda
- **Smooth Transitions**: Animasi yang halus untuk semua interaksi

### 2. **User Experience**

- **Intuitive Navigation**: Klik card untuk melihat produk
- **Clear Visual Feedback**: Hover effects dan active states
- **Easy Back Navigation**: Tombol kembali yang jelas
- **Responsive Design**: Bekerja optimal di semua device

### 3. **Performance**

- **Client-side Filtering**: Filter dilakukan di browser
- **Dynamic Content**: Produk di-render secara dinamis
- **Smooth Animations**: Transisi yang tidak mengganggu

## Benefits

### 1. **Better Organization**

- Kategori yang jelas dan terpisah
- Visual hierarchy yang lebih baik
- Informasi yang lebih terstruktur

### 2. **Improved UX**

- Navigasi yang lebih intuitif
- Visual feedback yang jelas
- Pengalaman yang lebih engaging

### 3. **Mobile Friendly**

- Card layout yang responsive
- Touch-friendly interactions
- Optimal untuk mobile browsing

## File Modifications

### 1. **application/views/beranda/index.php**

- Replaced filter buttons with card boxes
- Added product container with back navigation
- Updated JavaScript for card interactions
- Removed old filter functionality

## Testing Scenarios

### 1. **Card Interactions**

- Click each card to verify category filtering
- Test hover effects and animations
- Verify back navigation functionality

### 2. **Product Display**

- Check if products are filtered correctly
- Verify product information display
- Test detail and WhatsApp buttons

### 3. **Responsive Design**

- Test on mobile, tablet, and desktop
- Verify card layout responsiveness
- Check touch interactions on mobile

### 4. **Empty States**

- Test when category has no products
- Verify empty state message
- Check navigation back to katalog

## Future Enhancements

### 1. **Advanced Features**

- Product count on each card
- Featured products preview
- Category descriptions with images

### 2. **Animation Improvements**

- Page transition animations
- Loading states for products
- Smooth scroll animations

### 3. **Additional Functionality**

- Search within categories
- Product comparison
- Wishlist functionality

## Troubleshooting

### 1. **Card Not Clickable**

- Check JavaScript event listeners
- Verify data-kategori attributes
- Test CSS pointer-events

### 2. **Products Not Loading**

- Check allProducts data structure
- Verify filter logic
- Test JSON encoding

### 3. **Back Navigation Issues**

- Check backToKatalogBtn element
- Verify display/hide logic
- Test scroll behavior

## Best Practices

### 1. **Accessibility**

- Proper ARIA labels for cards
- Keyboard navigation support
- Screen reader compatibility

### 2. **Performance**

- Optimize product data loading
- Efficient DOM manipulation
- Smooth animations

### 3. **Maintenance**

- Modular JavaScript code
- Clear naming conventions
- Comprehensive documentation
