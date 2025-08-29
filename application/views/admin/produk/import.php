<?php
$this->load->view('templates/admin_header');
?>

<div class="flex-1 p-6">
    <div class="bg-white rounded-lg shadow-md">
        <div class="p-6 border-b border-gray-200">
            <div class="flex justify-between items-center">
                <h3 class="text-xl font-semibold text-gray-800">Import Produk dari File</h3>
                <a href="<?= base_url('admin/produk') ?>"
                    class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600 transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i>Kembali
                </a>
            </div>
        </div>

        <div class="p-6">
            <!-- Info Section -->
            <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <i class="fas fa-info-circle text-blue-400"></i>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-blue-800">Informasi Import</h3>
                        <div class="mt-2 text-sm text-blue-700">
                            <ul class="list-disc list-inside space-y-1">
                                <li>File yang didukung: CSV, XLS, XLSX</li>
                                <li>Maksimal ukuran file: 5MB</li>
                                <li>Format kolom harus sesuai dengan template yang disediakan</li>
                                <li>Gambar akan diupload secara terpisah ke folder uploads/products/</li>
                                <li>Pastikan nama file gambar sesuai dengan yang ada di kolom gambar</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contoh Format Tabel -->
            <div class="bg-green-50 border border-green-200 rounded-lg p-4 mb-6">
                                 <div class="flex items-center mb-4">
                     <i class="fas fa-table text-green-500 mr-3"></i>
                     <div>
                         <h3 class="text-sm font-medium text-green-800">Contoh Format Tabel (9 Field)</h3>
                         <p class="text-sm text-green-700">Berikut adalah contoh format data yang benar untuk import produk dengan 9 field utama</p>
                     </div>
                 </div>
                
                <!-- Contoh Tabel -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                                                 <thead class="bg-green-100">
                             <tr>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">nama_produk</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">kategori</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">harga</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">kualitas</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">garansi</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">instalasi</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">support</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">maintenance</th>
                                 <th class="px-3 py-2 text-left text-xs font-medium text-green-800 uppercase tracking-wider border-b">deskripsi</th>

                             </tr>
                         </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                                                         <tr class="hover:bg-gray-50">
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Paket CCTV Premium</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">CCTV</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">5000000</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Kualitas Premium</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Garansi Resmi</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Instalasi Gratis</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Support 24/7</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Maintenance Berkala</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Paket CCTV lengkap dengan 8 kamera HD</td>

                             </tr>
                                                         <tr class="hover:bg-gray-50">
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Access Control Basic</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Access Control</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">2000000</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Kualitas Standard</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Garansi 1 Tahun</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Instalasi Berbayar</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Support 8 Jam</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Maintenance Berbayar</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Sistem kontrol akses fingerprint</td>

                             </tr>
                                                         <tr class="hover:bg-gray-50">
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Barrier Gate Auto</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Barrier Gate</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">3000000</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Kualitas Premium</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Garansi Resmi</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Instalasi Gratis</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Support 16 Jam</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Maintenance Berkala</td>
                                 <td class="px-3 py-2 text-xs text-gray-900 border-b">Barrier gate otomatis dengan remote</td>

                             </tr>
                        </tbody>
                    </table>
                </div>
                
                                 <!-- Informasi Kolom -->
                 <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4 text-xs text-gray-600">
                     <div>
                         <h4 class="font-medium text-green-800 mb-2">Kolom Wajib (4 field):</h4>
                         <ul class="space-y-1">
                             <li>• <strong>nama_produk</strong> - Nama produk/paket</li>
                             <li>• <strong>kategori</strong> - Kategori produk</li>
                             <li>• <strong>harga</strong> - Harga dalam angka (tanpa koma)</li>
                             <li>• <strong>deskripsi</strong> - Deskripsi produk</li>
                         </ul>
                     </div>
                     <div>
                         <h4 class="font-medium text-green-800 mb-2">Kolom Opsional (5 field):</h4>
                         <ul class="space-y-1">
                             <li>• <strong>kualitas</strong> - Kualitas produk</li>
                             <li>• <strong>garansi</strong> - Jenis garansi</li>
                             <li>• <strong>instalasi</strong> - Layanan instalasi</li>
                             <li>• <strong>support</strong> - Layanan support</li>
                             <li>• <strong>maintenance</strong> - Layanan maintenance</li>
                         </ul>
                     </div>
                 </div>
                
                <!-- Kategori yang Didukung -->
                <div class="mt-4 p-3 bg-blue-50 border border-blue-200 rounded-lg">
                    <h4 class="font-medium text-blue-800 mb-2 text-xs">Kategori yang Didukung:</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">CCTV</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Access Control</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Barrier Gate</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Internet Dedicated</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Smart Solution</span>
                        <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full">Gallery</span>
                    </div>
                </div>
                
                <!-- Tips Penggunaan -->
                <div class="mt-4 p-3 bg-yellow-50 border border-yellow-200 rounded-lg">
                    <h4 class="font-medium text-yellow-800 mb-2 text-xs">Tips Penggunaan:</h4>
                    <ul class="text-xs text-yellow-700 space-y-1">
                        <li>• Gunakan format CSV dengan header sesuai contoh di atas</li>
                        <li>• Pastikan kolom wajib terisi (nama_produk, kategori, harga, deskripsi)</li>
                        <li>• Harga gunakan angka tanpa koma atau titik ribuan</li>
                        
                        <li>• Jika ada gambar, upload file gambar terlebih dahulu</li>
                    </ul>
                </div>
                
                <!-- File Contoh -->
                <div class="mt-4 p-3 bg-purple-50 border border-purple-200 rounded-lg">
                    <h4 class="font-medium text-purple-800 mb-2 text-xs">File Contoh CSV:</h4>
                    <p class="text-xs text-purple-700 mb-2">Anda dapat menggunakan file contoh yang sudah disediakan:</p>
                                         <div class="bg-white p-3 border border-purple-200 rounded text-xs font-mono text-purple-800">
                         <div class="mb-2"><strong>Header:</strong> nama_produk,kategori,harga,kualitas,garansi,instalasi,support,maintenance,deskripsi</div>
                         <div class="mb-2"><strong>Contoh Data:</strong> Paket CCTV Premium,CCTV,5000000,Kualitas Premium,Garansi Resmi,Instalasi Gratis,Support 24/7,Maintenance Berkala,Paket CCTV lengkap dengan 8 kamera HD</div>
                     </div>
                    <p class="text-xs text-purple-600 mt-2">Copy format di atas ke Excel/Google Sheets, lalu simpan sebagai CSV</p>
                </div>
            </div>

            <!-- Upload Form -->
            <?= form_open_multipart('admin/produk/process_import', ['class' => 'space-y-6']) ?>
            
            <div>
                <label for="import_file" class="block text-sm font-medium text-gray-700 mb-2">
                    File Import <span class="text-red-500">*</span>
                </label>
                <div class="flex items-center space-x-4">
                    <input type="file" id="import_file" name="import_file"
                        class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-secom-blue-light file:text-white hover:file:bg-secom-blue-dark"
                        accept=".csv,.xls,.xlsx" required>
                    <span class="text-xs text-gray-500">Max: 5MB</span>
                </div>
                <p class="text-xs text-gray-500 mt-1">Pilih file CSV, XLS, atau XLSX yang berisi data produk</p>
            </div>

                         <!-- Image Upload Section -->
             <div class="border-t border-gray-200 pt-6">
                 <h4 class="text-lg font-medium text-gray-900 mb-4">Upload Gambar Produk <span class="text-red-500">*</span></h4>
                 <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-4">
                     <div class="flex">
                         <div class="flex-shrink-0">
                             <i class="fas fa-info-circle text-blue-400"></i>
                         </div>
                         <div class="ml-3">
                             <h3 class="text-sm font-medium text-blue-800">Cara Upload Gambar:</h3>
                             <div class="mt-2 text-sm text-blue-700">
                                 <ul class="list-disc list-inside space-y-1">
                                     <li><strong>Upload 1 foto:</strong> Semua produk akan menggunakan foto yang sama</li>
                                     <li><strong>Upload 4 foto:</strong> Setiap produk akan menggunakan foto yang berbeda (sesuai urutan)</li>
                                     <li><strong>Foto wajib diupload</strong> untuk setiap import produk</li>
                                     <li>Format: JPG, PNG, GIF (maksimal 2MB per file)</li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                 </div>
                 
                 <div>
                     <label for="product_images" class="block text-sm font-medium text-gray-700 mb-2">
                         File Gambar Produk <span class="text-red-500">*</span>
                     </label>
                     <input type="file" id="product_images" name="product_images[]" multiple required
                         class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-secom-blue-light file:text-white hover:file:bg-secom-blue-dark"
                         accept="image/*">
                     <p class="text-xs text-gray-500 mt-1">Upload gambar produk yang akan digunakan. <strong>Wajib diisi!</strong> Maksimal 2MB per file.</p>
                 </div>
             </div>

            <!-- Import Options -->
            <div class="border-t border-gray-200 pt-6">
                <h4 class="text-lg font-medium text-gray-900 mb-4">Opsi Import</h4>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="skip_duplicates" name="skip_duplicates" value="1" 
                                   class="mr-2 rounded border-gray-300 text-secom-blue-dark focus:ring-secom-blue-light" checked>
                            <span class="text-sm font-medium text-gray-700">Skip Duplikat</span>
                        </label>
                        <p class="text-xs text-gray-500 mt-1">Lewati produk dengan nama yang sama</p>
                    </div>

                    <div>
                        <label class="flex items-center">
                            <input type="checkbox" id="update_existing" name="update_existing" value="1" 
                                   class="mr-2 rounded border-gray-300 text-secom-blue-dark focus:ring-secom-blue-light">
                            <span class="text-sm font-medium text-gray-700">Update Existing</span>
                        </label>
                        <p class="text-xs text-gray-500 mt-1">Update produk yang sudah ada berdasarkan nama</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-end space-x-4">
                <a href="<?= base_url('admin/produk') ?>"
                    class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition-colors duration-200">
                    Batal
                </a>
                <button type="submit"
                    class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition-colors duration-200">
                    <i class="fas fa-upload mr-2"></i>Import Produk
                </button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fileInput = document.getElementById('import_file');
    const imageInput = document.getElementById('product_images');
    
    // File size validation
    fileInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const maxSize = 5 * 1024 * 1024; // 5MB
            if (file.size > maxSize) {
                alert('Ukuran file terlalu besar. Maksimal 5MB.');
                this.value = '';
            }
        }
    });
    
    // Image file validation
    imageInput.addEventListener('change', function() {
        const files = this.files;
        const maxSize = 2 * 1024 * 1024; // 2MB
        
        for (let i = 0; i < files.length; i++) {
            if (files[i].size > maxSize) {
                alert(`File ${files[i].name} terlalu besar. Maksimal 2MB per file.`);
                this.value = '';
                break;
            }
        }
    });
});
</script>

<?php
$this->load->view('templates/admin_footer');
?>
