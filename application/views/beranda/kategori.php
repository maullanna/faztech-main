<?php $this->load->view('templates/header'); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary to-primary/80 py-20">
    <div class="container mx-auto px-4">
        <div class="text-center" data-aos="fade-up">
            <nav class="flex justify-center mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="<?= base_url() ?>" class="inline-flex items-center text-white/80 hover:text-white transition-colors">
                            <i class="ri-home-line mr-2"></i>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="ri-arrow-right-s-line text-white/60 mx-2"></i>
                            <span class="text-white font-medium">Kategori</span>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="ri-arrow-right-s-line text-white/60 mx-2"></i>
                            <span class="text-white font-semibold"><?= $kategori ?></span>
                        </div>
                    </li>
                </ol>
            </nav>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Paket <?= $kategori ?></h1>
            <p class="text-white/90 text-lg max-w-2xl mx-auto">Temukan solusi <?= strtolower($kategori) ?> terbaik untuk kebutuhan keamanan Anda</p>
        </div>
    </div>
</section>

<!-- Paket Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12" data-aos="fade-up">
            <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-4">
                <i class="ri-package-line mr-2"></i>
                <?= $total_produk ?> Paket Tersedia
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Semua Paket <?= $kategori ?></h2>
            <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
        </div>

        <!-- Paket Grid -->
        <?php if (!empty($produk)) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                <?php foreach ($produk as $item) : ?>
                    <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden" data-aos="fade-up">
                        <!-- Header dengan Gradient -->
                        <div class="bg-gradient-to-br from-primary to-primary/80 text-white p-6 text-center relative overflow-hidden">
                            <!-- Background Pattern -->
                            <div class="absolute inset-0 opacity-10">
                                <div class="absolute top-2 right-2 w-16 h-16 bg-white rounded-full"></div>
                                <div class="absolute bottom-2 left-2 w-8 h-8 bg-white rounded-full"></div>
                            </div>

                            <!-- Package Name -->
                            <h3 class="text-xl font-bold mb-2 relative z-10"><?= $item->nama_produk ?></h3>

                            <!-- Brand/Logo -->
                            <div class="flex items-center justify-center mb-4 relative z-10">
                                <div class="bg-white/20 backdrop-blur-sm rounded-lg px-3 py-1">
                                    <span class="text-sm font-semibold">FazTech</span>
                                </div>
                            </div>

                            <!-- Price -->
                            <div class="relative z-10">
                                <div class="text-3xl font-bold mb-1">Rp <?= number_format($item->harga, 0, ',', '.') ?></div>
                                <div class="text-sm opacity-90">Paket Lengkap</div>
                            </div>
                        </div>

                        <!-- Benefits Section -->
                        <div class="p-6">
                            <!-- Features List -->
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

                            <!-- Service Info -->
                            <div class="bg-gray-50 rounded-lg p-4 mb-6">
                                <div class="text-center">
                                    <i class="ri-tools-line text-primary text-xl mb-2"></i>
                                    <p class="text-sm text-gray-600 font-medium">Paket Terima Beres + Instalasi</p>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="space-y-3">
                                <button onclick="showDetailModal(<?= $item->id ?>)"
                                    class="w-full bg-primary text-white py-3 px-4 rounded-lg hover:bg-primary/90 transition-colors font-semibold flex items-center justify-center">
                                    <i class="ri-eye-line mr-2"></i>
                                    Lihat Detail
                                </button>
                                <button onclick="generateWhatsAppLink('<?= $item->nama_produk ?>', <?= $item->harga ?>)"
                                    class="w-full bg-green-500 text-white py-3 px-4 rounded-lg hover:bg-green-600 transition-colors font-semibold flex items-center justify-center">
                                    <i class="ri-whatsapp-line mr-2"></i>
                                    Order Sekarang
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <!-- Empty State -->
            <div class="text-center py-16" data-aos="fade-up">
                <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="ri-package-line text-4xl text-gray-400"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Belum Ada Paket <?= $kategori ?></h3>
                <p class="text-gray-600 mb-8 max-w-md mx-auto">Saat ini belum tersedia paket untuk kategori <?= $kategori ?>. Silakan hubungi kami untuk informasi lebih lanjut.</p>
                <a href="<?= base_url('kontak') ?>" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors font-semibold">
                    <i class="ri-customer-service-line mr-2"></i>
                    Hubungi Kami
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Back to Katalog Button -->
<section class="py-8 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <a href="<?= base_url() ?>#produk" class="inline-flex items-center text-primary hover:text-primary/80 font-semibold transition-colors">
                <i class="ri-arrow-left-line mr-2"></i>
                Kembali ke Katalog
            </a>
        </div>
    </div>
</section>

<!-- Detail Modal -->
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

<script>
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

    // Close modal when clicking outside
    document.getElementById('detailModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeDetailModal();
        }
    });
</script>

<?php $this->load->view('templates/footer'); ?>