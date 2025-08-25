<?php
$this->load->view('templates/admin_header');
?>

<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Katalog Paket</h2>
        <a href="<?= base_url('admin/produk/tambah') ?>"
            class="bg-secom-blue-dark text-white px-4 py-2 rounded-lg hover:bg-secom-blue-light transition-colors duration-200">
            <i class="fas fa-plus mr-2"></i>Tambah Paket
        </a>
    </div>

    <?php if ($this->session->flashdata('sukses')): ?>
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            <?= $this->session->flashdata('sukses') ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <?= $this->session->flashdata('error') ?>
        </div>
    <?php endif; ?>

    <!-- Table View untuk Paket -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gradient-to-r from-secom-blue-dark to-secom-blue-light text-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">Paket</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">Kategori</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">Harga</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-wider">Fitur Utama</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php if (!empty($produk)): ?>
                        <?php foreach ($produk as $item): ?>
                            <tr class="hover:bg-gray-50 transition-colors duration-200">
                                <!-- Package Name & Brand -->
                                <td class="px-6 py-4">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-secom-blue-dark to-secom-blue-light rounded-lg flex items-center justify-center">
                                            <i class="fas fa-box text-white text-lg"></i>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900"><?= $item->nama_produk ?></div>
                                            <div class="text-sm text-secom-blue-dark font-semibold">FazTech</div>
                                        </div>
                                    </div>
                                </td>

                                <!-- Category -->
                                <td class="px-6 py-4">
                                    <span class="inline-flex px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                        <?= $item->kategori ?>
                                    </span>
                                </td>

                                <!-- Price -->
                                <td class="px-6 py-4">
                                    <?php if ($item->is_promo && $item->harga_promo): ?>
                                        <div class="text-lg font-bold text-red-600">Rp <?= number_format($item->harga_promo, 0, ',', '.') ?></div>
                                        <div class="text-sm text-gray-400 line-through">Rp <?= number_format($item->harga, 0, ',', '.') ?></div>
                                        <div class="text-xs bg-yellow-500/20 text-yellow-700 px-2 py-1 rounded-full mt-1">
                                            <?= $item->promo_label ?: 'Promo Spesial' ?>
                                        </div>
                                    <?php else: ?>
                                        <div class="text-lg font-bold text-gray-900">Rp <?= number_format($item->harga, 0, ',', '.') ?></div>
                                        <div class="text-sm text-gray-500">Paket Lengkap</div>
                                    <?php endif; ?>
                                </td>

                                <!-- Fitur Utama -->
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900 space-y-2">
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span class="font-medium"><?= $item->kualitas ?? 'Kualitas Premium' ?></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span class="font-medium"><?= $item->garansi ?? 'Garansi Resmi' ?></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span class="font-medium"><?= $item->instalasi ?? 'Instalasi Gratis' ?></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span class="font-medium"><?= $item->support ?? 'Support 24/7' ?></span>
                                        </div>
                                        <div class="flex items-center">
                                            <i class="fas fa-check text-green-500 mr-2"></i>
                                            <span class="font-medium"><?= $item->maintenance ?? 'Maintenance Berkala' ?></span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Action -->
                                <td class="px-6 py-4 text-center">
                                    <div class="flex space-x-2 justify-center">
                                        <a href="<?= base_url('admin/produk/edit/' . $item->id) ?>"
                                            class="inline-flex items-center px-3 py-2 bg-secom-blue-dark text-white text-sm font-medium rounded-lg hover:bg-secom-blue-light transition-colors duration-200">
                                            <i class="fas fa-edit mr-1"></i>
                                            Edit
                                        </a>
                                        <a href="<?= base_url('admin/produk/hapus/' . $item->id) ?>"
                                            class="inline-flex items-center px-3 py-2 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition-colors duration-200"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">
                                            <i class="fas fa-trash mr-1"></i>
                                            Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Empty State -->
                        <tr>
                            <td colspan="5" class="px-6 py-16 text-center">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-box-open text-4xl mb-4 text-gray-300"></i>
                                    <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada paket</h3>
                                    <p class="text-gray-500 mb-4">Mulai dengan menambahkan paket pertama Anda</p>
                                    <a href="<?= base_url('admin/produk/tambah') ?>"
                                        class="bg-secom-blue-dark text-white px-6 py-3 rounded-lg hover:bg-secom-blue-light transition-colors duration-200">
                                        <i class="fas fa-plus mr-2"></i>Tambah paket pertama
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Table Footer -->
        <?php if (!empty($produk)): ?>
            <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                <div class="flex items-center justify-between text-sm text-gray-600">
                    <div class="flex items-center">
                        <i class="fas fa-star text-secom-blue-dark mr-2"></i>
                        <span>Semua paket dengan kualitas premium dan garansi resmi</span>
                    </div>
                    <div class="text-right">
                        <span class="font-medium">Total: <?= count($produk) ?> paket</span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
$this->load->view('templates/admin_footer');
?>