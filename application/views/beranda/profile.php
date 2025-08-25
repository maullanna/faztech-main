<?php $this->load->view('templates/header'); ?>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary to-primary/80 py-20">
   <div class="container mx-auto px-4">
      <div class="text-center" data-aos="fade-up">
         <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Profile Perusahaan</h1>
         <p class="text-white/90 text-lg max-w-2xl mx-auto">Mengenal lebih dekat <?= $profile->nama_perusahaan ?>, mitra terpercaya dalam solusi keamanan modern</p>
      </div>
   </div>
</section>

<!-- About Section -->
<section class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
         <!-- Content -->
         <div data-aos="fade-right">
            <div class="inline-flex items-center px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-6">
               <i class="ri-building-line mr-2"></i>Tentang <?= $profile->nama_perusahaan ?>
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Solusi Keamanan Terpercaya Sejak <?= $profile->tahun_berdiri ?></h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
               <?= $profile->deskripsi ?>
            </p>

            <!-- Stats -->
            <div class="grid grid-cols-2 gap-6">
               <div class="text-center p-4 bg-gray-50 rounded-lg">
                  <div class="text-2xl font-bold text-primary mb-1"><?= number_format($profile->jumlah_klien) ?>+</div>
                  <div class="text-sm text-gray-600">Klien Puas</div>
               </div>
               <div class="text-center p-4 bg-gray-50 rounded-lg">
                  <div class="text-2xl font-bold text-primary mb-1"><?= number_format($profile->jumlah_proyek) ?>+</div>
                  <div class="text-sm text-gray-600">Proyek Selesai</div>
               </div>
            </div>
         </div>

         <!-- Image -->
         <div data-aos="fade-left">
            <div class="relative">
               <div class="w-full h-96 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-2xl flex items-center justify-center">
                  <div class="text-center">
                     <i class="ri-shield-check-line text-6xl text-primary mb-4"></i>
                     <h3 class="text-xl font-bold text-gray-900">Keamanan Terjamin</h3>
                     <p class="text-gray-600">Dengan teknologi terkini</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Vision Mission Section -->
<section class="py-16 bg-gray-50">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Visi & Misi</h2>
         <div class="w-24 h-1 bg-primary mx-auto rounded-full"></div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
         <!-- Vision -->
         <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="100">
            <div class="w-16 h-16 bg-gradient-to-br from-primary to-primary/80 rounded-2xl flex items-center justify-center mb-6">
               <i class="ri-eye-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Visi</h3>
            <p class="text-gray-600 leading-relaxed">
               <?= $profile->visi ?>
            </p>
         </div>

         <!-- Mission -->
         <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
            <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary/80 rounded-2xl flex items-center justify-center mb-6">
               <i class="ri-target-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Misi</h3>
            <p class="text-gray-600 leading-relaxed">
               <?= $profile->misi ?>
            </p>
         </div>
      </div>
   </div>
</section>

<!-- Values Section -->
<section class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Nilai-Nilai Perusahaan</h2>
         <p class="text-gray-600 max-w-2xl mx-auto">Prinsip yang kami pegang dalam memberikan layanan terbaik kepada klien</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
         <!-- Quality -->
         <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="100">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-medal-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Kualitas</h3>
            <p class="text-sm text-gray-600">Produk dan layanan berkualitas tinggi</p>
         </div>

         <!-- Innovation -->
         <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="200">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-lightbulb-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Inovasi</h3>
            <p class="text-sm text-gray-600">Teknologi terkini dan solusi kreatif</p>
         </div>

         <!-- Trust -->
         <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="300">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-shield-check-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Kepercayaan</h3>
            <p class="text-sm text-gray-600">Membangun kepercayaan jangka panjang</p>
         </div>

         <!-- Service -->
         <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="400">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-customer-service-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Layanan</h3>
            <p class="text-sm text-gray-600">Layanan profesional dan responsif</p>
         </div>
      </div>
   </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-gray-50">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Tim Kami</h2>
         <p class="text-gray-600 max-w-2xl mx-auto">Tim ahli yang siap memberikan solusi terbaik untuk kebutuhan keamanan Anda</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
         <!-- Team Member 1 -->
         <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center" data-aos="fade-up" data-aos-delay="100">
            <div class="w-20 h-20 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-4">
               <i class="ri-user-line text-2xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Tim Teknisi</h3>
            <p class="text-sm text-gray-600 mb-4">Ahli instalasi dan maintenance</p>
            <div class="flex justify-center space-x-2">
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs">CCTV</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs">Access Control</span>
            </div>
         </div>

         <!-- Team Member 2 -->
         <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="w-20 h-20 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center mx-auto mb-4">
               <i class="ri-user-line text-2xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Tim Konsultan</h3>
            <p class="text-sm text-gray-600 mb-4">Spesialis solusi keamanan</p>
            <div class="flex justify-center space-x-2">
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs">Konsultasi</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs">Design</span>
            </div>
         </div>

         <!-- Team Member 3 -->
         <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="w-20 h-20 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-4">
               <i class="ri-user-line text-2xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Tim Support</h3>
            <p class="text-sm text-gray-600 mb-4">Layanan pelanggan 24/7</p>
            <div class="flex justify-center space-x-2">
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs">Support</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs">Maintenance</span>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Contact Information Section -->
<?php if ($profile->alamat || $profile->telepon || $profile->email || $profile->website): ?>
   <section class="py-16 bg-white">
      <div class="container mx-auto px-4">
         <div class="text-center mb-12" data-aos="fade-up">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Informasi Kontak</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Hubungi kami untuk konsultasi dan informasi lebih lanjut</p>
         </div>

         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php if ($profile->alamat): ?>
               <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="100">
                  <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
                     <i class="ri-map-pin-line text-xl text-white"></i>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Alamat</h3>
                  <p class="text-sm text-gray-600"><?= $profile->alamat ?></p>
               </div>
            <?php endif; ?>

            <?php if ($profile->telepon): ?>
               <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="200">
                  <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
                     <i class="ri-phone-line text-xl text-white"></i>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Telepon</h3>
                  <p class="text-sm text-gray-600"><?= $profile->telepon ?></p>
               </div>
            <?php endif; ?>

            <?php if ($profile->email): ?>
               <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="300">
                  <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
                     <i class="ri-mail-line text-xl text-white"></i>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Email</h3>
                  <p class="text-sm text-gray-600"><?= $profile->email ?></p>
               </div>
            <?php endif; ?>

            <?php if ($profile->website): ?>
               <div class="text-center p-6 bg-gray-50 rounded-xl hover:bg-primary/5 transition-colors" data-aos="fade-up" data-aos-delay="400">
                  <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
                     <i class="ri-global-line text-xl text-white"></i>
                  </div>
                  <h3 class="font-bold text-gray-900 mb-2">Website</h3>
                  <p class="text-sm text-gray-600"><?= $profile->website ?></p>
               </div>
            <?php endif; ?>
         </div>
      </div>
   </section>
<?php endif; ?>

<!-- Contact CTA Section -->
<section class="py-16 bg-primary">
   <div class="container mx-auto px-4">
      <div class="text-center" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-white mb-4">Siap Bekerja Sama?</h2>
         <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi keamanan terbaik untuk properti Anda
         </p>
         <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#kontak" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
               <i class="ri-phone-line mr-2"></i>Hubungi Kami
            </a>
            <a href="<?= base_url('produk') ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-colors">
               <i class="ri-eye-line mr-2"></i>Lihat Paket
            </a>
         </div>
      </div>
   </div>
</section>

<?php $this->load->view('templates/footer'); ?>