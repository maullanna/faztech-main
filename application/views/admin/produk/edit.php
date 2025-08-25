<?php
$this->load->view('templates/admin_header');
?>

<div class="flex-1 p-6">
    <div class="bg-white rounded-lg shadow-md">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-semibold text-gray-800">Edit Paket: <?= $produk->nama_produk ?></h3>
                <a href="<?= base_url('admin/produk') ?>"
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali
                </a>
            </div>
        </div>

        <div class="p-6">
            <?= form_open_multipart('admin/produk/edit/' . $produk->id, ['class' => 'space-y-6']) ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Paket <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama_produk" name="nama_produk"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                        placeholder="Masukkan nama paket"
                        value="<?= set_value('nama_produk', $produk->nama_produk) ?>" required>
                    <?= form_error('nama_produk', '<p class="text-red-500 text-sm mt-1">', '</p>') ?>
                </div>

                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-700 mb-2">
                        Kategori <span class="text-red-500">*</span>
                    </label>
                    <select id="kategori" name="kategori"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none" required>
                        <option value="">Pilih Kategori</option>
                        <option value="CCTV" <?= set_select('kategori', 'CCTV', $produk->kategori == 'CCTV') ?>>CCTV</option>
                        <option value="Access Control" <?= set_select('kategori', 'Access Control', $produk->kategori == 'Access Control') ?>>Access Control</option>
                        <option value="Barrier Gate" <?= set_select('kategori', 'Barrier Gate', $produk->kategori == 'Barrier Gate') ?>>Barrier Gate</option>
                        <option value="Internet Dedicated" <?= set_select('kategori', 'Internet Dedicated', $produk->kategori == 'Internet Dedicated') ?>>Internet Dedicated</option>
                        <option value="Smart Solution" <?= set_select('kategori', 'Smart Solution', $produk->kategori == 'Smart Solution') ?>>Smart Solution</option>
                        <option value="Gallery" <?= set_select('kategori', 'Gallery', $produk->kategori == 'Gallery') ?>>Gallery</option>
                    </select>
                    <?= form_error('kategori', '<p class="text-red-500 text-sm mt-1">', '</p>') ?>
                </div>

                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700 mb-2">
                        Harga (Rp) <span class="text-red-500">*</span>
                    </label>
                    <input type="number" id="harga" name="harga"
                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                        placeholder="0" min="0" step="1000"
                        value="<?= set_value('harga', $produk->harga) ?>" required>
                    <?= form_error('harga', '<p class="text-red-500 text-sm mt-1">', '</p>') ?>
                </div>
            </div>

            <!-- Fitur Utama Section -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Fitur Utama Paket</h4>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="kualitas" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-check text-green-500 mr-2"></i>Kualitas
                        </label>
                        <input type="text" id="kualitas" name="kualitas"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                            placeholder="Kualitas Premium"
                            value="<?= set_value('kualitas', $produk->kualitas) ?>">
                        <p class="text-xs text-gray-500 mt-1">Contoh: Kualitas Premium, Kualitas Standard, dll</p>
                    </div>

                    <div>
                        <label for="garansi" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-check text-green-500 mr-2"></i>Garansi
                        </label>
                        <input type="text" id="garansi" name="garansi"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                            placeholder="Garansi Resmi"
                            value="<?= set_value('garansi', $produk->garansi) ?>">
                        <p class="text-xs text-gray-500 mt-1">Contoh: Garansi Resmi, Garansi 1 Tahun, dll</p>
                    </div>

                    <div>
                        <label for="instalasi" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-check text-green-500 mr-2"></i>Instalasi
                        </label>
                        <input type="text" id="instalasi" name="instalasi"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                            placeholder="Instalasi Gratis"
                            value="<?= set_value('instalasi', $produk->instalasi) ?>">
                        <p class="text-xs text-gray-500 mt-1">Contoh: Instalasi Gratis, Instalasi Berbayar, dll</p>
                    </div>

                    <div>
                        <label for="support" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-check text-green-500 mr-2"></i>Support
                        </label>
                        <input type="text" id="support" name="support"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                            placeholder="Support 24/7"
                            value="<?= set_value('support', $produk->support) ?>">
                        <p class="text-xs text-gray-500 mt-1">Contoh: Support 24/7, Support 8 Jam, dll</p>
                    </div>

                    <div>
                        <label for="maintenance" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="fas fa-check text-green-500 mr-2"></i>Maintenance
                        </label>
                        <input type="text" id="maintenance" name="maintenance"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                            placeholder="Maintenance Berkala"
                            value="<?= set_value('maintenance', $produk->maintenance) ?>">
                        <p class="text-xs text-gray-500 mt-1">Contoh: Maintenance Berkala, Maintenance Gratis, dll</p>
                    </div>
                </div>
            </div>

            <!-- Promo Section -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Pengaturan Promo</h4>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="is_promo" name="is_promo" value="1"
                                <?= ($produk->is_promo ?? 0) ? 'checked' : '' ?>
                                class="mr-2 rounded border-gray-300 text-secom-blue-light focus:ring-secom-blue-light"
                                onchange="togglePromoFields()">
                            <span class="text-sm font-medium text-gray-700">Aktifkan Promo</span>
                        </label>
                        <p class="text-xs text-gray-500 mt-1">Centang untuk mengaktifkan harga promo</p>
                    </div>

                    <div>
                        <label for="promo_label" class="block text-sm font-medium text-gray-700 mb-2">
                            <i class="ri-check-line text-green-500 mr-2"></i>Label Promo
                        </label>
                        <input type="text" id="promo_label" name="promo_label"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                            placeholder="Promo Spesial"
                            value="<?= set_value('promo_label', $produk->promo_label ?? 'Promo Spesial') ?>">
                        <p class="text-xs text-gray-500 mt-1">Contoh: Promo Spesial, Diskon 50%, dll</p>
                    </div>
                </div>

                <div id="promo_price_fields" class="<?= ($produk->is_promo ?? 0) ? '' : 'hidden' ?> mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="harga_promo" class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="ri-check-line text-green-500 mr-2"></i>Harga Promo (Rp)
                            </label>
                            <input type="number" id="harga_promo" name="harga_promo"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                                placeholder="0"
                                value="<?= set_value('harga_promo', $produk->harga_promo) ?>">
                            <p class="text-xs text-gray-500 mt-1">Harga setelah diskon/promo</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">
                    Deskripsi <span class="text-red-500">*</span>
                </label>
                <textarea id="deskripsi" name="deskripsi" rows="4"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-light focus:border-transparent outline-none"
                    placeholder="Masukkan deskripsi paket" required><?= set_value('deskripsi', $produk->deskripsi) ?></textarea>
                <?= form_error('deskripsi', '<p class="text-red-500 text-sm mt-1">', '</p>') ?>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">
                    Gambar Paket
                </label>

                <!-- Current Image -->
                <?php if ($produk->gambar && file_exists('./uploads/products/' . $produk->gambar)): ?>
                    <div class="mb-4">
                        <p class="text-sm text-gray-600 mb-2">Gambar Saat Ini:</p>
                        <div class="w-32 h-32 bg-secom-gray rounded-lg overflow-hidden">
                            <img src="<?= base_url('uploads/products/' . $produk->gambar) ?>"
                                alt="<?= $produk->nama_produk ?>"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                <?php endif; ?>

                <!-- New Image Upload -->
                <div class="flex items-center space-x-4">
                    <input type="file" id="gambar" name="gambar"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-secom-blue-light file:text-white hover:file:bg-secom-blue-dark"
                        accept="image/*">
                    <span class="text-xs text-gray-500">Max: 2MB (JPG, PNG, GIF)</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Kosongkan jika tidak ingin mengubah gambar</p>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="<?= base_url('admin/produk') ?>"
                    class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition-colors duration-200">
                    Batal
                </a>
                <button type="submit"
                    class="bg-secom-blue-dark text-white px-6 py-3 rounded-lg hover:bg-secom-blue-light transition-colors duration-200">
                    <i class="fas fa-save mr-2"></i>Update Paket
                </button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    function togglePromoFields() {
        const isPromo = document.getElementById('is_promo').checked;
        const promoFields = document.getElementById('promo_price_fields');

        if (isPromo) {
            promoFields.classList.remove('hidden');
        } else {
            promoFields.classList.add('hidden');
        }
    }
</script>

<?php
$this->load->view('templates/admin_footer');
?>