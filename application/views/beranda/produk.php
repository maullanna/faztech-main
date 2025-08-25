<style>
    /* Additional styles for better UX */
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }

    /* Custom scrollbar for modal */
    .prose {
        max-height: 200px;
        overflow-y: auto;
    }

    .prose::-webkit-scrollbar {
        width: 4px;
    }

    .prose::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 2px;
    }

    .prose::-webkit-scrollbar-thumb {
        background: #c1c1c1;
        border-radius: 2px;
    }

    .prose::-webkit-scrollbar-thumb:hover {
        background: #a1a1a1;
    }

    /* Modal responsive improvements */
    #modalDetailProduk .prose {
        scrollbar-width: thin;
        scrollbar-color: #c1c1c1 #f1f1f1;
    }

    /* Ensure modal content doesn't exceed viewport on mobile */
    @media (max-width: 768px) {
        #modalContent {
            margin: 1rem;
            max-height: calc(100vh - 2rem);
        }

        /* Make description scrollable on mobile with longer max-height */
        #produkDeskripsiModal {
            max-height: 150px !important;
        }
    }

    /* Modal loading state styles */
    #modalLoading {
        transition: opacity 0.3s ease-out;
    }

    #modalLoading.hidden {
        opacity: 0;
        pointer-events: none;
    }

    /* Add skeleton loading for product cards */
    .product-skeleton {
        background: #fff;
        border-radius: 0.75rem;
        overflow: hidden;
        position: relative;
    }

    .product-skeleton::after {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        transform: translateX(-100%);
        background-image: linear-gradient(90deg,
                rgba(255, 255, 255, 0) 0,
                rgba(255, 255, 255, 0.2) 20%,
                rgba(255, 255, 255, 0.5) 60%,
                rgba(255, 255, 255, 0));
        animation: shimmer 2s infinite;
    }

    @keyframes shimmer {
        100% {
            transform: translateX(100%);
        }
    }
</style>

<?php $this->load->view('templates/header'); ?>

<!-- Flash Messages -->
<?php if ($this->session->flashdata('sukses')): ?>
    <div class="fixed top-20 left-1/2 transform -translate-x-1/2 z-50 mt-4">
        <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-lg flex items-center">
            <i class="ri-checkbox-circle-line mr-3 text-lg"></i>
            <span><?= $this->session->flashdata('sukses') ?></span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-green-700 hover:text-green-900">
                <i class="ri-close-line"></i>
            </button>
        </div>
    </div>
<?php endif; ?>

<?php if ($this->session->flashdata('error')): ?>
    <div class="fixed top-20 left-1/2 transform -translate-x-1/2 z-50 mt-4">
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg shadow-lg flex items-center">
            <i class="ri-error-warning-line mr-3 text-lg"></i>
            <span><?= $this->session->flashdata('error') ?></span>
            <button onclick="this.parentElement.parentElement.remove()" class="ml-4 text-red-700 hover:text-red-900">
                <i class="ri-close-line"></i>
            </button>
        </div>
    </div>
<?php endif; ?>
<!-- Hero Section untuk Halaman Paket -->
<section class="py-24 bg-gradient-to-br from-primary/10 via-blue-50 to-gray-100 relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-10 right-10 w-64 h-64 bg-primary/5 rounded-full filter blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-48 h-48 bg-blue-500/5 rounded-full filter blur-3xl"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-primary/3 to-secondary/3 rounded-full filter blur-3xl"></div>
    </div>

    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center mb-12" data-aos="fade-up">
          

            <h1 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                <span class="text-primary">Solusi Keamanan</span><br>
                <span class="text-2xl md:text-4xl text-gray-700">Terbaik untuk Rumah & Bisnis Anda</span>
            </h1>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg md:text-xl leading-relaxed mb-8">
            Temukan paket CCTV modern yang dirancang khusus untuk menjaga orang-orang dan aset berharga Anda.
                <span class="font-medium">Teknologi AI terdepan</span>, garansi resmi 100%, dan didukung tim teknisi bersertifikasi 
                yang siap melindungi properti Anda 24/7.
            </p>

            <!-- Trust Indicators -->
            <div class="flex flex-wrap justify-center items-center gap-8 mt-10">
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fas fa-shield-alt text-primary text-xl"></i>
                    <span class="font-medium">Garansi Resmi</span>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fas fa-tools text-primary text-xl"></i>
                    <span class="font-medium">Instalasi Profesional</span>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fas fa-headset text-primary text-xl"></i>
                    <span class="font-medium">Support 24/7</span>
                </div>
                <div class="flex items-center space-x-2 text-gray-600">
                    <i class="fas fa-truck text-primary text-xl"></i>
                    <span class="font-medium">Gratis Survey Lokasi</span>
                </div>
            </div>

            <!-- Stats -->
            <div class="flex justify-center items-center space-x-12 mt-12">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary"><?= $total_semua_produk ?></div>
                    <div class="text-sm text-gray-600">Paket Tersedia</div>
                </div>
                <div class="w-px h-16 bg-gray-300"></div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary"><?= count($kategori_produk) ?></div>
                    <div class="text-sm text-gray-600">Kategori</div>
                </div>
                <div class="w-px h-16 bg-gray-300"></div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-primary">100%</div>
                    <div class="text-sm text-gray-600">Original</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter dan Pencarian Section -->
<section class="py-8 bg-white border-b border-gray-200 sticky top-16 z-30 shadow-sm backdrop-blur-sm bg-white/95">
    <div class="container mx-auto px-4">
        <form method="GET" action="<?= base_url('produk') ?>" class="flex flex-col md:flex-row gap-4 items-start md:items-center md:justify-between">
            <!-- Search Bar -->
            <div class="w-full md:flex-1 md:max-w-md">
                <div class="relative group">
                    <input type="text" name="search"
                        value="<?= htmlspecialchars($kata_kunci) ?>"
                        placeholder="Cari paket keamanan yang sesuai kebutuhan..."
                        class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-2xl focus:ring-4 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-300 bg-gray-50 hover:bg-white group-hover:border-primary/50">
                    <i class="ri-search-line absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-primary transition-colors text-lg"></i>
                </div>
            </div>
            
            <!-- Filter Controls -->
            <div class="flex flex-col sm:flex-row md:flex-row gap-3 sm:gap-4 w-full md:w-auto md:flex-wrap md:items-center">
                <!-- Kategori Filter -->
                <div class="relative w-full sm:flex-1 md:w-auto group">
                    <select name="kategori"
                        class="appearance-none bg-white border-2 border-gray-200 rounded-2xl px-5 py-4 pr-10 focus:ring-4 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-300 w-full md:min-w-[180px] group-hover:border-primary/50">
                        <option value="">Semua Kategori</option>
                        <?php foreach ($kategori_produk as $kategori): ?>
                            <option value="<?= $kategori->kategori ?>" <?= ($kategori_terpilih == $kategori->kategori) ? 'selected' : '' ?>>
                                <?= $kategori->kategori ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <i class="ri-arrow-down-s-line absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-primary transition-colors pointer-events-none text-lg"></i>
                </div>

                <!-- Urutan Filter -->
                <div class="relative w-full sm:flex-1 md:w-auto group">
                    <select name="urutan"
                        class="appearance-none bg-white border-2 border-gray-200 rounded-2xl px-5 py-4 pr-10 focus:ring-4 focus:ring-primary/20 focus:border-primary outline-none transition-all duration-300 w-full md:min-w-[180px] group-hover:border-primary/50">
                        <option value="terbaru" <?= ($urutan_terpilih == 'terbaru') ? 'selected' : '' ?>>Terbaru</option>
                        <option value="terlama" <?= ($urutan_terpilih == 'terlama') ? 'selected' : '' ?>>Terlama</option>
                        <option value="nama_asc" <?= ($urutan_terpilih == 'nama_asc') ? 'selected' : '' ?>>Nama A-Z</option>
                        <option value="nama_desc" <?= ($urutan_terpilih == 'nama_desc') ? 'selected' : '' ?>>Nama Z-A</option>
                        <option value="harga_asc" <?= ($urutan_terpilih == 'harga_asc') ? 'selected' : '' ?>>Harga Terendah</option>
                        <option value="harga_desc" <?= ($urutan_terpilih == 'harga_desc') ? 'selected' : '' ?>>Harga Tertinggi</option>
                    </select>
                    <i class="ri-arrow-down-s-line absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-primary transition-colors pointer-events-none text-lg"></i>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="bg-gradient-to-r from-primary to-primary/90 text-white px-8 py-4 rounded-2xl hover:from-primary/90 hover:to-primary transition-all duration-300 font-semibold flex items-center justify-center w-full sm:w-auto md:w-auto shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="ri-search-line mr-3 text-lg"></i>
                    Cari Paket
                </button>

                <!-- Reset Button -->
                <a href="<?= base_url('produk') ?>"
                    class="border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-2xl hover:border-primary hover:text-primary hover:bg-primary/5 transition-all duration-300 font-semibold flex items-center justify-center w-full sm:w-auto md:w-auto">
                    <i class="ri-refresh-line mr-3 text-lg"></i>
                    Reset
                </a>
            </div>
        </form>

        <!-- Result Info -->
        <div class="mt-6 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-3 text-sm text-gray-600">
            <div class="flex flex-wrap items-center gap-3">
                <?php if (!empty($kata_kunci) || !empty($kategori_terpilih)): ?>
                    <span class="font-medium">Menampilkan hasil untuk:</span>
                    <?php if (!empty($kata_kunci)): ?>
                        <span class="bg-primary/10 text-primary px-3 py-2 rounded-xl font-medium border border-primary/20">"<?= htmlspecialchars($kata_kunci) ?>"</span>
                    <?php endif; ?>
                    <?php if (!empty($kategori_terpilih)): ?>
                        <span class="bg-blue-100 text-blue-700 px-3 py-2 rounded-xl font-medium border border-blue-200"><?= $kategori_terpilih ?></span>
                    <?php endif; ?>
                <?php else: ?>
                    <span class="text-gray-500">Menampilkan semua paket keamanan</span>
                <?php endif; ?>
            </div>
            <div class="text-right sm:text-left">
                <span class="font-bold text-lg text-primary"><?= $total_produk ?></span>
                <span class="text-gray-600"> paket ditemukan</span>
            </div>
        </div>
    </div>
</section>

<!-- Daftar Paket Section -->
<section class="py-16 bg-gradient-to-br from-gray-50 via-white to-gray-50/50">
    <div class="container mx-auto px-4">
        <?php if (empty($produk)): ?>
            <!-- No Products Found -->
            <div class="text-center py-24">
                <div class="flex flex-col items-center">
                    <div class="w-32 h-32 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center mb-8">
                        <i class="ri-search-line text-6xl text-gray-400"></i>
                    </div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-4">Tidak Ada Paket Ditemukan</h3>
                    <p class="text-gray-600 mb-8 max-w-lg text-lg leading-relaxed">
                        Maaf, tidak ada paket yang sesuai dengan kriteria pencarian Anda.
                        Coba ubah kata kunci atau filter yang digunakan.
                    </p>
                    <a href="<?= base_url('produk') ?>"
                        class="bg-gradient-to-r from-primary to-primary/90 text-white px-8 py-4 rounded-2xl hover:from-primary/90 hover:to-primary transition-colors font-semibold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        <i class="ri-refresh-line mr-3"></i>
                        Lihat Semua Paket
                    </a>
                </div>
            </div>
        <?php else: ?>
            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <?php foreach ($produk as $index => $item): ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden relative flex flex-col h-full"
                        data-aos="fade-up"
                        data-aos-delay="<?= 100 + ($index * 50) ?>">
                        <!-- Package Name Section (Above Image) -->
                        <div class="p-4 bg-gradient-to-r from-primary to-primary/80 text-white text-center">
                            <h3 class="text-xl font-bold" style="font-family: 'DM Sans', sans-serif;">
                                <?= $item->nama_produk ?>
                            </h3>
                        </div>

                        <!-- Image Section -->
                        <div class="relative overflow-hidden">
                            <!-- Product Image -->
                            <div class="w-full h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                <?php if (!empty($item->gambar)): ?>
                                    <img src="<?= base_url('uploads/products/' . $item->gambar) ?>"
                                        alt="<?= $item->nama_produk ?>"
                                        class="w-full h-full object-contain">
                                <?php else: ?>
                                    <div class="text-center text-gray-400">
                                        <i class="ri-image-line text-4xl mb-2"></i>
                                        <p class="text-sm">No Image</p>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Promo Badge on Image -->
                            <?php if ($item->is_promo && $item->harga_promo): ?>
                                <div class="absolute top-3 right-3 z-20">
                                    <div class="bg-yellow-500 text-yellow-900 px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                        <?= $item->promo_label ?: 'PROMO' ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Package Info Section -->
                        <div class="p-6 bg-white">
                            <!-- Price -->
                            <div class="text-left mb-4" style="font-family: 'DM Sans', sans-serif;">
                                <?php if ($item->is_promo && $item->harga_promo): ?>
                                    <div class="text-3xl font-bold text-black-600 mb-2">Rp <?= number_format($item->harga_promo, 0, ',', '.') ?></div>
                                    <div class="text-base text-gray-500 line-through">Rp <?= number_format($item->harga, 0, ',', '.') ?></div>
                                <?php else: ?>
                                    <div class="text-3xl font-bold text-gray-900 mb-1">Rp <?= number_format($item->harga, 0, ',', '.') ?></div>
                                    <div class="text-sm text-gray-500">Paket Lengkap</div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="p-8 flex flex-col flex-1" style="font-family: 'DM Sans', sans-serif;">
                            <!-- Core Features -->
                            <div class="mb-6">
                                <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                                    Fitur Utama
                                </h4>
                                <div class="space-y-3">
                                    <?php if (!empty($item->kualitas)): ?>
                                        <div class="flex items-center text-gray-700">
                                            <i class="fas fa-check text-green-500 mr-3 text-lg"></i>
                                            <span class="text-sm"><?= $item->kualitas ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($item->garansi)): ?>
                                        <div class="flex items-center text-gray-700">
                                            <i class="fas fa-check text-green-500 mr-3 text-lg"></i>
                                            <span class="text-sm"><?= $item->garansi ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($item->instalasi)): ?>
                                        <div class="flex items-center text-gray-700">
                                            <i class="fas fa-check text-green-500 mr-3 text-lg"></i>
                                            <span class="text-sm"><?= $item->instalasi ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($item->support)): ?>
                                        <div class="flex items-center text-gray-700">
                                            <i class="fas fa-check text-green-500 mr-3 text-lg"></i>
                                            <span class="text-sm"><?= $item->support ?></span>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($item->maintenance)): ?>
                                        <div class="flex items-center text-gray-700">
                                            <i class="fas fa-check text-green-500 mr-3 text-lg"></i>
                                            <span class="text-sm"><?= $item->maintenance ?></span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <!-- Service Info -->
                            <div class="mb-6">
                                <div class="bg-gradient-to-r from-gray-50 to-blue-50 rounded-xl p-4 border border-blue-100">
                                    <div class="text-center">
                                        <p class="text-sm text-gray-700 font-medium">Paket Terima Beres + Instalasi</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Spacer to push button to bottom -->
                            <div class="flex-grow"></div>

                            <!-- Action Button -->
                            <div class="text-center mt-6">
                                <button onclick="generateWhatsAppLink('<?= $item->nama_produk ?>', <?= ($item->is_promo && $item->harga_promo) ? $item->harga_promo : $item->harga ?>)"
                                    class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-4 px-6 rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-200 font-semibold text-lg flex items-center justify-center shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                                    <i class="ri-whatsapp-line mr-3 text-xl"></i>
                                    Order Now
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <?php if ($total_pages > 1): ?>
                <div class="mt-16">
                    <?= $pagination_links ?>

                    <!-- Page Info -->
                    <div class="text-center mt-4 text-sm text-gray-600">
                        Halaman <?= $current_page ?> dari <?= $total_pages ?>
                        (<?= ($current_page - 1) * 12 + 1 ?>-<?= min($current_page * 12, $total_produk) ?> dari <?= $total_produk ?> paket)
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</section>
<div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-start mb-6">
                    <h3 id="modalTitle" class="text-2xl font-bold text-gray-900"></h3>
                    <button onclick="closeDetailModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <i class="ri-close-line text-2xl"></i>
                    </button>
                </div>
                <div id="modalContent">
                    <!-- Content will be loaded here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Load Footer Template -->
<?php $this->load->view('templates/footer'); ?>

<!-- JavaScript untuk Modal dan Interaksi -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-hide flash messages after 5 seconds
        setTimeout(function() {
            const flashMessages = document.querySelectorAll('[class*="fixed top-20"]');
            flashMessages.forEach(function(message) {
                message.style.opacity = '0';
                message.style.transform = 'translate(-50%, -100%)';
                setTimeout(function() {
                    message.remove();
                }, 300);
            });
        }, 5000);

        // Modal functionality
        const modal = document.getElementById('modalDetailProduk');
        const modalOverlay = document.getElementById('modalOverlay');
        const closeModal = document.getElementById('closeModal');
        const detailButtons = document.querySelectorAll('.detail-btn');
        const modalLoading = document.getElementById('modalLoading');

        // Open modal with loading state
        detailButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const produkId = this.getAttribute('data-id');

                // Show modal with loading state
                modal.classList.remove('hidden');
                modalLoading.classList.remove('hidden');
                document.body.style.overflow = 'hidden';

                // Fetch product details via AJAX
                fetch(`<?= base_url('beranda/detail_produk/') ?>${produkId}`)
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert('Paket tidak ditemukan');
                            closeModalFunction();
                            return;
                        }

                        // Hide loading after data is loaded
                        modalLoading.classList.add('hidden');

                        // Populate modal with product data
                        document.getElementById('produkNamaModal').textContent = data.nama_produk;
                        document.getElementById('produkKategoriModal').textContent = data.kategori;
                        document.getElementById('produkHargaModal').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(data.harga);
                        document.getElementById('produkDeskripsiModal').innerHTML = data.deskripsi;


                        // Product image
                        const gambarContainer = document.getElementById('produkGambarModal');
                        if (data.gambar) {
                            gambarContainer.innerHTML = `<img src="<?= base_url('uploads/products/') ?>${data.gambar}" alt="${data.nama_produk}" class="w-full h-full object-cover rounded-lg">`;
                        } else {
                            gambarContainer.innerHTML = '<div class="w-full h-full flex items-center justify-center bg-gray-200 rounded-lg"><i class="ri-image-line ri-4x text-gray-400"></i></div>';
                        }

                        // WhatsApp button
                        const whatsappMessage = encodeURIComponent(`Halo admin, saya tertarik dengan paket: ${data.nama_produk} dengan harga Rp ${new Intl.NumberFormat('id-ID').format(data.harga)}`);
                        document.getElementById('produkBeliBtn').href = `https://wa.me/6285694743168?text=${whatsappMessage}`;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat memuat detail paket');
                        closeModalFunction();
                    });
            });
        });

        // Close modal
        function closeModalFunction() {
            modal.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        closeModal.addEventListener('click', closeModalFunction);
        modalOverlay.addEventListener('click', closeModalFunction);

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModalFunction();
            }
        });

        // Add loading state for form submission
        const filterForm = document.querySelector('form[action="<?= base_url('produk') ?>"]');
        if (filterForm) {
            filterForm.addEventListener('submit', function() {
                showLoading();
            });
        }

        // Add loading state for pagination links
        const paginationLinks = document.querySelectorAll('.pagination a');
        paginationLinks.forEach(link => {
            link.addEventListener('click', function() {
                showLoading();
            });
        });
    });

    // Detail Modal Functions
    function showDetailModal(id) {
        // Show loading
        document.getElementById('modalTitle').textContent = 'Loading...';
        document.getElementById('modalContent').innerHTML = '<div class="text-center py-8"><i class="ri-loader-4-line animate-spin text-2xl text-primary"></i></div>';
        document.getElementById('detailModal').classList.remove('hidden');

        // Fetch product detail
        fetch(`<?= base_url('beranda/detail_produk/') ?>${id}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('modalTitle').textContent = data.produk.nama_produk;
                    document.getElementById('modalContent').innerHTML = data.html;
                } else {
                    document.getElementById('modalTitle').textContent = 'Error';
                    document.getElementById('modalContent').innerHTML = '<p class="text-red-500">Gagal memuat detail produk</p>';
                }
            })
            .catch(error => {
                document.getElementById('modalTitle').textContent = 'Error';
                document.getElementById('modalContent').innerHTML = '<p class="text-red-500">Terjadi kesalahan</p>';
            });
    }

    function closeDetailModal() {
        document.getElementById('detailModal').classList.add('hidden');
    }

    // WhatsApp Link Function
    function generateWhatsAppLink(namaProduk, harga) {
        const message = `Halo FazTech! Saya tertarik dengan paket ${namaProduk} dengan harga Rp ${harga.toLocaleString('id-ID')}. Mohon informasi lebih lanjut.`;
        const whatsappUrl = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
        window.open(whatsappUrl, '_blank');
    }
</script>