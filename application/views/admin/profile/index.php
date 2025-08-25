<?php $this->load->view('templates/admin_header'); ?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
   <!-- Header Section -->
   <div class="flex justify-between items-center mb-8">
      <div>
         <h1 class="text-3xl font-bold text-gray-900">Kelola Profile Perusahaan</h1>
         <p class="text-gray-600 mt-2">Kelola informasi profile perusahaan yang ditampilkan di website</p>
      </div>
      <a href="<?= base_url('admin/profile/tambah') ?>"
         class="bg-secom-blue-dark hover:bg-secom-blue-light text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-200 flex items-center">
         <i class="fas fa-plus mr-2"></i>
         Tambah Profile
      </a>
   </div>

   <!-- Flash Messages -->
   <?php if ($this->session->flashdata('sukses')): ?>
      <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-lg">
         <div class="flex">
            <div class="flex-shrink-0">
               <i class="fas fa-check-circle text-green-400 text-xl"></i>
            </div>
            <div class="ml-3">
               <p class="text-sm text-green-700">
                  <?= $this->session->flashdata('sukses') ?>
               </p>
            </div>
         </div>
      </div>
   <?php endif; ?>

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

   <!-- Stats Card -->
   <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 mb-8">
      <div class="flex items-center justify-between">
         <div class="flex items-center">
            <div class="w-12 h-12 bg-secom-blue-dark rounded-lg flex items-center justify-center">
               <i class="fas fa-building text-white text-xl"></i>
            </div>
            <div class="ml-4">
               <h3 class="text-lg font-semibold text-gray-900">Total Profile</h3>
               <p class="text-3xl font-bold text-secom-blue-dark"><?= $total_profile ?></p>
            </div>
         </div>
         <div class="text-right">
            <p class="text-sm text-gray-600">Profile Aktif</p>
            <p class="text-lg font-semibold text-green-600">
               <?php
               $aktif = 0;
               foreach ($profile as $p) {
                  if ($p->status == 'aktif') $aktif++;
               }
               echo $aktif;
               ?>
            </p>
         </div>
      </div>
   </div>

   <!-- Profile List -->
   <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
      <div class="px-6 py-4 border-b border-gray-200">
         <h3 class="text-lg font-semibold text-gray-900">Daftar Profile Perusahaan</h3>
      </div>

      <div class="p-6">
         <?php if (!empty($profile)): ?>
            <div class="overflow-x-auto">
               <table class="min-w-full divide-y divide-gray-200" id="dataTable">
                  <thead class="bg-gray-50">
                     <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Profile</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tahun</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statistik</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                     </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                     <?php foreach ($profile as $index => $item): ?>
                        <tr class="hover:bg-gray-50 transition-colors duration-200">
                           <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                              <?= $index + 1 ?>
                           </td>
                           <td class="px-6 py-4">
                              <div class="flex items-center">
                                 <div class="w-10 h-10 bg-secom-blue-dark rounded-lg flex items-center justify-center">
                                    <i class="fas fa-building text-white"></i>
                                 </div>
                                 <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900"><?= $item->nama_perusahaan ?></div>
                                    <div class="text-sm text-gray-500"><?= substr($item->deskripsi, 0, 80) ?>...</div>
                                 </div>
                              </div>
                           </td>
                           <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                              <?= $item->tahun_berdiri ?>
                           </td>
                           <td class="px-6 py-4 whitespace-nowrap">
                              <div class="text-sm text-gray-900">
                                 <div class="flex items-center space-x-4">
                                    <div>
                                       <span class="font-medium"><?= number_format($item->jumlah_klien) ?>+</span>
                                       <span class="text-gray-500 text-xs">Klien</span>
                                    </div>
                                    <div>
                                       <span class="font-medium"><?= number_format($item->jumlah_proyek) ?>+</span>
                                       <span class="text-gray-500 text-xs">Proyek</span>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="px-6 py-4 whitespace-nowrap">
                              <?php if ($item->status == 'aktif'): ?>
                                 <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Aktif
                                 </span>
                              <?php else: ?>
                                 <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    <i class="fas fa-pause-circle mr-1"></i>
                                    Tidak Aktif
                                 </span>
                              <?php endif; ?>
                           </td>
                           <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                              <?= date('d/m/Y H:i', strtotime($item->created_at)) ?>
                           </td>
                           <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                              <div class="flex items-center space-x-2">
                                 <a href="<?= base_url('admin/profile/edit/' . $item->id) ?>"
                                    class="text-secom-blue-dark hover:text-secom-blue-light transition-colors duration-200"
                                    title="Edit Profile">
                                    <i class="fas fa-edit text-lg"></i>
                                 </a>

                                 <?php if ($item->status != 'aktif'): ?>
                                    <a href="<?= base_url('admin/profile/set-aktif/' . $item->id) ?>"
                                       class="text-green-600 hover:text-green-700 transition-colors duration-200"
                                       title="Aktifkan Profile"
                                       onclick="return confirm('Aktifkan profile ini?')">
                                       <i class="fas fa-check-circle text-lg"></i>
                                    </a>
                                 <?php endif; ?>

                                 <a href="<?= base_url('admin/profile/hapus/' . $item->id) ?>"
                                    class="text-red-600 hover:text-red-700 transition-colors duration-200"
                                    title="Hapus Profile"
                                    onclick="return confirm('Yakin ingin menghapus profile ini?')">
                                    <i class="fas fa-trash text-lg"></i>
                                 </a>
                              </div>
                           </td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
            </div>
         <?php else: ?>
            <div class="text-center py-12">
               <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <i class="fas fa-building text-gray-400 text-3xl"></i>
               </div>
               <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada profile perusahaan</h3>
               <p class="text-gray-500 mb-6">Mulai dengan menambahkan profile perusahaan pertama untuk ditampilkan di website</p>
               <a href="<?= base_url('admin/profile/tambah') ?>"
                  class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-secom-blue-dark hover:bg-secom-blue-light transition-colors duration-200">
                  <i class="fas fa-plus mr-2"></i>
                  Tambah Profile Pertama
               </a>
            </div>
         <?php endif; ?>
      </div>
   </div>
</div>

<script>
   $(document).ready(function() {
      $('#dataTable').DataTable({
         "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Indonesian.json"
         },
         "pageLength": 10,
         "order": [
            [0, "asc"]
         ],
         "responsive": true
      });
   });
</script>

<?php $this->load->view('templates/admin_footer'); ?>