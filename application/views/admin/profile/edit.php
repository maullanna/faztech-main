<?php $this->load->view('templates/admin_header'); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
   <!-- Header Section -->
   <div class="flex justify-between items-center mb-8">
      <div>
         <h1 class="text-3xl font-bold text-gray-900">Edit Profile Perusahaan</h1>
         <p class="text-gray-600 mt-2">Edit informasi profile perusahaan yang sudah ada</p>
      </div>
      <a href="<?= base_url('admin/profile') ?>"
         class="bg-gray-500 hover:bg-gray-600 text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center">
         <i class="fas fa-arrow-left mr-2"></i>
         Kembali
      </a>
   </div>

   <!-- Flash Messages -->
   <?php if ($this->session->flashdata('error')): ?>
      <div class="bg-red-50 border-l-4 border-red-400 p-4 mb-6 rounded-lg">
         <div class="flex">
            <div class="flex-shrink-0">
               <i class="fas fa-exclamation-circle text-red-400 text-xl"></i>
            </div>
            <div class="ml-3">
               <p class="text-sm text-red-700">
                  <?= $this->session->flashdata('error') ?>
               </p>
            </div>
         </div>
      </div>
   <?php endif; ?>

   <!-- Status Info -->
   <div class="bg-blue-50 border-l-4 border-blue-400 p-4 mb-6 rounded-lg">
      <div class="flex">
         <div class="flex-shrink-0">
            <i class="fas fa-info-circle text-blue-400 text-xl"></i>
         </div>
         <div class="ml-3">
            <p class="text-sm text-blue-700">
               <strong>Status:</strong>
               <?php if ($profile->status == 'aktif'): ?>
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                     <i class="fas fa-check-circle mr-1"></i>
                     Aktif
                  </span>
                  - Profile ini sedang ditampilkan di website
               <?php else: ?>
                  <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                     <i class="fas fa-pause-circle mr-1"></i>
                     Tidak Aktif
                  </span>
                  - Profile ini tidak ditampilkan di website
               <?php endif; ?>
            </p>
         </div>
      </div>
   </div>

   <!-- Form Card -->
   <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
      <div class="px-6 py-4 border-b border-gray-200">
         <h3 class="text-lg font-semibold text-gray-900">Form Edit Profile Perusahaan</h3>
      </div>

      <div class="p-6">
         <?= form_open('admin/profile/edit/' . $profile->id, ['class' => 'space-y-6']) ?>

         <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Informasi Dasar -->
            <div class="space-y-6">
               <div class="bg-gray-50 rounded-lg p-4">
                  <h4 class="text-lg font-semibold text-secom-blue-dark mb-4 flex items-center">
                     <i class="fas fa-building mr-2"></i>
                     Informasi Dasar
                  </h4>

                  <div class="space-y-4">
                     <div>
                        <label for="nama_perusahaan" class="block text-sm font-medium text-gray-700 mb-2">
                           Nama Perusahaan <span class="text-red-500">*</span>
                        </label>
                        <input type="text"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('nama_perusahaan') ? 'border-red-500' : '' ?>"
                           id="nama_perusahaan" name="nama_perusahaan"
                           value="<?= set_value('nama_perusahaan', $profile->nama_perusahaan) ?>"
                           placeholder="Masukkan nama perusahaan" required>
                        <?= form_error('nama_perusahaan', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                     </div>

                     <div>
                        <label for="tahun_berdiri" class="block text-sm font-medium text-gray-700 mb-2">
                           Tahun Berdiri <span class="text-red-500">*</span>
                        </label>
                        <input type="number"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('tahun_berdiri') ? 'border-red-500' : '' ?>"
                           id="tahun_berdiri" name="tahun_berdiri"
                           value="<?= set_value('tahun_berdiri', $profile->tahun_berdiri) ?>"
                           min="1900" max="2030" required>
                        <?= form_error('tahun_berdiri', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                     </div>

                     <div class="grid grid-cols-2 gap-4">
                        <div>
                           <label for="jumlah_klien" class="block text-sm font-medium text-gray-700 mb-2">
                              Jumlah Klien <span class="text-red-500">*</span>
                           </label>
                           <input type="number"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('jumlah_klien') ? 'border-red-500' : '' ?>"
                              id="jumlah_klien" name="jumlah_klien"
                              value="<?= set_value('jumlah_klien', $profile->jumlah_klien) ?>"
                              min="0" required>
                           <?= form_error('jumlah_klien', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                        </div>

                        <div>
                           <label for="jumlah_proyek" class="block text-sm font-medium text-gray-700 mb-2">
                              Jumlah Proyek <span class="text-red-500">*</span>
                           </label>
                           <input type="number"
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('jumlah_proyek') ? 'border-red-500' : '' ?>"
                              id="jumlah_proyek" name="jumlah_proyek"
                              value="<?= set_value('jumlah_proyek', $profile->jumlah_proyek) ?>"
                              min="0" required>
                           <?= form_error('jumlah_proyek', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Informasi Kontak -->
            <div class="space-y-6">
               <div class="bg-gray-50 rounded-lg p-4">
                  <h4 class="text-lg font-semibold text-secom-blue-dark mb-4 flex items-center">
                     <i class="fas fa-address-book mr-2"></i>
                     Informasi Kontak
                  </h4>

                  <div class="space-y-4">
                     <div>
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">
                           Alamat
                        </label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200"
                           id="alamat" name="alamat" rows="3"
                           placeholder="Masukkan alamat perusahaan"><?= set_value('alamat', $profile->alamat) ?></textarea>
                     </div>

                     <div>
                        <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">
                           Telepon
                        </label>
                        <input type="text"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200"
                           id="telepon" name="telepon"
                           value="<?= set_value('telepon', $profile->telepon) ?>"
                           placeholder="+62 812-3456-7890">
                     </div>

                     <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                           Email
                        </label>
                        <input type="email"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200"
                           id="email" name="email"
                           value="<?= set_value('email', $profile->email) ?>"
                           placeholder="info@faztech.com">
                     </div>

                     <div>
                        <label for="website" class="block text-sm font-medium text-gray-700 mb-2">
                           Website
                        </label>
                        <input type="url"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200"
                           id="website" name="website"
                           value="<?= set_value('website', $profile->website) ?>"
                           placeholder="https://faztech.com">
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Deskripsi, Visi, Misi -->
         <div class="space-y-6">
            <div class="bg-gray-50 rounded-lg p-4">
               <h4 class="text-lg font-semibold text-secom-blue-dark mb-4 flex items-center">
                  <i class="fas fa-file-alt mr-2"></i>
                  Informasi Perusahaan
               </h4>

               <div class="space-y-4">
                  <div>
                     <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">
                        Deskripsi Perusahaan <span class="text-red-500">*</span>
                     </label>
                     <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('deskripsi') ? 'border-red-500' : '' ?>"
                        id="deskripsi" name="deskripsi" rows="4"
                        placeholder="Jelaskan tentang perusahaan, layanan, dan keunggulan" required><?= set_value('deskripsi', $profile->deskripsi) ?></textarea>
                     <p class="mt-1 text-sm text-gray-500">Jelaskan tentang perusahaan, layanan, dan keunggulan</p>
                     <?= form_error('deskripsi', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                  </div>

                  <div>
                     <label for="visi" class="block text-sm font-medium text-gray-700 mb-2">
                        Visi Perusahaan <span class="text-red-500">*</span>
                     </label>
                     <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('visi') ? 'border-red-500' : '' ?>"
                        id="visi" name="visi" rows="3"
                        placeholder="Masukkan visi perusahaan" required><?= set_value('visi', $profile->visi) ?></textarea>
                     <?= form_error('visi', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                  </div>

                  <div>
                     <label for="misi" class="block text-sm font-medium text-gray-700 mb-2">
                        Misi Perusahaan <span class="text-red-500">*</span>
                     </label>
                     <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-secom-blue-dark focus:border-secom-blue-dark transition-colors duration-200 <?= form_error('misi') ? 'border-red-500' : '' ?>"
                        id="misi" name="misi" rows="3"
                        placeholder="Masukkan misi perusahaan" required><?= set_value('misi', $profile->misi) ?></textarea>
                     <?= form_error('misi', '<p class="mt-1 text-sm text-red-600">', '</p>') ?>
                  </div>
               </div>
            </div>
         </div>

         <!-- Action Buttons -->
         <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
            <a href="<?= base_url('admin/profile') ?>"
               class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition-colors duration-200">
               <i class="fas fa-times mr-2"></i>
               Batal
            </a>
            <button type="submit"
               class="px-6 py-3 bg-secom-blue-dark hover:bg-secom-blue-light text-white rounded-lg font-medium transition-colors duration-200 flex items-center">
               <i class="fas fa-save mr-2"></i>
               Update Profile
            </button>
         </div>

         <?= form_close() ?>
      </div>
   </div>
</div>

<?php $this->load->view('templates/admin_footer'); ?>