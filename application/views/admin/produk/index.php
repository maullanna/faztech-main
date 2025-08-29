<?php
$this->load->view('templates/admin_header');
?>

<div class="flex-1 p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Katalog Paket</h2>
        <div class="flex space-x-3">
            <a href="<?= base_url('admin/produk/import') ?>"
                class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition-colors duration-200">
                <i class="fas fa-file-import mr-2"></i>Import Produk
            </a>
            <a href="<?= base_url('admin/produk/tambah') ?>"
                class="bg-secom-blue-dark text-white px-4 py-2 rounded-lg hover:bg-secom-blue-light transition-colors duration-200">
                <i class="fas fa-plus mr-2"></i>Tambah Paket
            </a>
        </div>
    </div>

    <!-- Filter Section -->
    <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
        <h3 class="text-lg font-semibold text-gray-800 mb-4">
            <i class="fas fa-filter mr-2 text-secom-blue-dark"></i>Filter Produk
        </h3>
        
        <form method="GET" action="<?= base_url('admin/produk') ?>" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <!-- Search Nama Produk -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Cari Nama Produk</label>
                <input type="text" name="search" value="<?= $active_filters['search'] ?? '' ?>" 
                       placeholder="Cari paket..." 
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-transparent">
            </div>
            
            <!-- Filter Kategori -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
                <select name="kategori" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-transparent">
                    <option value="">Semua Kategori</option>
                    <?php foreach ($kategori_list as $kat): ?>
                        <option value="<?= $kat ?>" <?= ($active_filters['kategori'] == $kat) ? 'selected' : '' ?>>
                            <?= $kat ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Filter Brand -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Brand</label>
                <select name="brand" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-transparent">
                    <option value="">Semua Brand</option>
                    <?php foreach ($brand_list as $brand): ?>
                        <option value="<?= $brand ?>" <?= ($active_filters['brand'] == $brand) ? 'selected' : '' ?>>
                            <?= $brand ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <!-- Filter Harga Minimum -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Harga Min</label>
                <input type="number" name="min_harga" value="<?= $active_filters['min_harga'] ?? '' ?>" 
                       placeholder="0" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-transparent">
            </div>
            
            <!-- Filter Harga Maximum -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Harga Max</label>
                <input type="number" name="max_harga" value="<?= $active_filters['max_harga'] ?? '' ?>" 
                       placeholder="99999999" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-transparent">
            </div>
            
            <!-- Filter Buttons -->
            <div class="md:col-span-2 lg:col-span-5 flex space-x-3">
                <button type="submit" class="bg-secom-blue-dark text-white px-6 py-2 rounded-lg hover:bg-secom-blue-light transition-colors duration-200">
                    <i class="fas fa-search mr-2"></i>Filter
                </button>
                <a href="<?= base_url('admin/produk') ?>" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition-colors duration-200">
                    <i class="fas fa-times mr-2"></i>Reset
                </a>
            </div>
        </form>
        
        <!-- Active Filters Display -->
        <?php if (!empty(array_filter($active_filters))): ?>
            <div class="mt-4 pt-4 border-t border-gray-200">
                <div class="flex items-center space-x-2">
                    <span class="text-sm font-medium text-gray-700">Filter Aktif:</span>
                    <?php foreach ($active_filters as $key => $value): ?>
                        <?php if (!empty($value)): ?>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-secom-blue-dark text-white">
                                <?= ucfirst($key) ?>: <?= $value ?>
                                <a href="<?= base_url('admin/produk?' . http_build_query(array_merge($active_filters, [$key => '']))) ?>" 
                                   class="ml-2 text-white hover:text-gray-200">
                                    <i class="fas fa-times"></i>
                                </a>
                            </span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
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
                        <?php if (!empty(array_filter($active_filters))): ?>
                            <span class="text-secom-blue-dark ml-2">(Hasil Filter)</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
$this->load->view('templates/admin_footer');
?>