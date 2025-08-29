<?php $this->load->view('templates/header'); ?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
   <!-- Background Image -->
   <div class="absolute inset-0 z-0">
      <div class="w-full h-full bg-cover bg-center" style="background-image: url('<?= base_url('assets/img/hikvision1.jpg') ?>');"></div>
      <!-- Overlay gradient -->
      <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-transparent"></div>
   </div>

   <!-- Hero Content -->
   <div class="container mx-auto px-6 py-12 z-10 relative">
      <div class="max-w-xl text-white">
         <div data-aos="fade-up" data-aos-duration="800">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
               Inovasi Keamanan <span class="text-primary">Terpercaya</span> untuk Bisnis & Rumah Anda
            </h1>
            <p class="text-lg text-gray-300 mb-8 max-w-lg">
               Lindungi aset berharga Anda dengan solusi keamanan modern kami — CCTV, Barrier Gate, Fiber Optic, HDD, dan Access Control.
               Semua paket kami menggunakan produk <strong>original bergaransi resmi</strong> dan dipasang oleh teknisi berpengalaman.
            </p>
            <div class="flex flex-wrap gap-4">
               <a href="<?= base_url('produk') ?>"
                  class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary/90 transform hover:-translate-y-1 transition-all duration-300 shadow-lg shadow-primary/30">
                  <i class="ri-gift-fill mr-2 ri-lg"></i>
                  Lihat Paket Promo
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Services Section -->
<section id="tentang" class="py-20 bg-gray-50 overflow-hidden relative">
   <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-primary/5 to-transparent"></div>

   <!-- Floating circles decoration -->
   <div class="absolute top-10 right-10 w-32 h-32 bg-primary/5 rounded-full animate-pulse"></div>
   <div class="absolute bottom-20 left-20 w-20 h-20 bg-secondary/10 rounded-full animate-bounce"></div>

   <div class="container mx-auto px-4 relative">
      <!-- Header -->
      <div class="text-center mb-16" data-aos="fade-up">
         <h2 class="text-4xl font-bold text-gray-900">
            Mengapa <span class="text-primary">FazTech</span> adalah Pilihan Terbaik?
         </h2>
         <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
         <p class="text-gray-600 max-w-2xl mx-auto mt-4">
            Lindungi bisnis dan aset Anda tanpa repot — dari konsultasi, instalasi, hingga perawatan,
            semua kami tangani dengan cepat, aman, dan profesional.
         </p>
      </div>

      <!-- Services Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
         <!-- Service 1: Konsultasi -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-primary via-primary to-secondary rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-primary/25 group-hover:shadow-xl group-hover:shadow-primary/40">
               <i class="ri-user-star-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Konsultasi Gratis</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Tim ahli kami siap memberikan konsultasi mendalam untuk merancang sistem keamanan yang tepat sesuai kebutuhan properti Anda.</p>
            </div>
         </div>

         <!-- Service 2: Instalasi -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 via-transparent to-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-secondary via-secondary to-primary rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-secondary/25 group-hover:shadow-xl group-hover:shadow-secondary/40">
               <i class="ri-tools-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-secondary transition-colors duration-300">Instalasi Profesional</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Teknisi berpengalaman melakukan pemasangan dengan standar internasional, memastikan sistem bekerja optimal dan tahan lama.</p>
            </div>
         </div>

         <!-- Service 3: Monitoring -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-primary via-primary to-secondary rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-primary/25 group-hover:shadow-xl group-hover:shadow-primary/40">
               <i class="ri-shield-check-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Paket Berkualitas & Bergaransi</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Kami menghadirkan paket CCTV dengan teknologi terbaru, kualitas terjamin, dan garansi resmi, memberikan Anda rasa aman jangka panjang.</p>
            </div>
         </div>

         <!-- Service 4: Maintenance -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 via-transparent to-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-secondary via-secondary to-primary rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-secondary/25 group-hover:shadow-xl group-hover:shadow-secondary/40">
               <i class="ri-money-dollar-circle-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-secondary transition-colors duration-300">Harga Terjangkau</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Kami percaya bahwa sistem keamanan yang handal tidak harus mahal. FazTech menghadirkan paket-paket berkualitas tinggi dengan teknologi terkini.</p>
            </div>
         </div>

         <!-- Service 5: Upgrade -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-primary/5 via-transparent to-secondary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-primary/10 to-secondary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-primary via-primary to-secondary rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-primary/25 group-hover:shadow-xl group-hover:shadow-primary/40">
               <i class="ri-arrow-up-circle-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-primary transition-colors duration-300">Inovasi Teknologi Terbaru</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Kami selalu menghadirkan solusi CCTV dengan teknologi terkini yang dirancang untuk memenuhi kebutuhan keamanan baik untuk rumah maupun bisnis.</p>
            </div>
         </div>

         <!-- Service 6: Layanan Cepat -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="600">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-secondary/5 via-transparent to-primary/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-secondary/10 to-primary/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-secondary via-secondary to-primary rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-secondary/25 group-hover:shadow-xl group-hover:shadow-secondary/40">
               <i class="ri-timer-flash-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-secondary transition-colors duration-300">Layanan Cepat</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Waktu Anda sangat berharga, dan kami memahaminya. Setiap permintaan dan kendala Anda akan ditangani dengan respon cepat dan pelayanan yang sigap.</p>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Paket Kami Section -->
<section class="py-24 bg-white overflow-hidden relative">
   <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-primary/5 to-transparent"></div>

   <!-- Floating circles decoration -->
   <div class="absolute top-20 right-20 w-24 h-24 bg-primary/10 rounded-full animate-pulse"></div>
   <div class="absolute bottom-32 left-32 w-16 h-16 bg-secondary/10 rounded-full animate-bounce"></div>

   <div class="container mx-auto px-4 relative">
      <!-- Header -->
      <div class="text-center mb-16" data-aos="fade-up">
         <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-3">KATALOG LENGKAP</span>
         <h2 class="text-4xl font-bold text-gray-900">Paket Kami</h2>
         <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
         <p class="text-gray-600 max-w-2xl mx-auto mt-4">
            Pilih kategori yang sesuai dengan kebutuhan keamanan Anda. Setiap kategori berisi berbagai paket dengan teknologi terbaru dan harga terbaik.
         </p>
      </div>

      <!-- Katalog Card Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         <!-- CCTV Card -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="100">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-blue-500/5 via-transparent to-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-blue-500/10 to-blue-600/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-blue-500/25 group-hover:shadow-xl group-hover:shadow-blue-500/40">
               <i class="ri-camera-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors duration-300">CCTV</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Sistem kamera pengawas dengan resolusi tinggi, night vision, dan monitoring 24/7 untuk keamanan properti Anda.</p>

               <!-- Features List -->
               <div class="space-y-3 mb-6">
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-blue-500 mr-3"></i>
                     <span class="text-sm">HD & 4K Resolution</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-blue-500 mr-3"></i>
                     <span class="text-sm">Night Vision</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-blue-500 mr-3"></i>
                     <span class="text-sm">Motion Detection</span>
                  </div>
               </div>

               <!-- Action Button -->
               <a href="<?= base_url('kategori/cctv') ?>" class="inline-flex items-center bg-blue-500 text-white px-6 py-3 rounded-xl hover:bg-blue-600 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                  <span>Lihat Paket</span>
                  <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
               </a>
            </div>
         </div>

         <!-- Access Control Card -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="200">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-green-500/5 via-transparent to-green-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-green-500/10 to-green-600/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-green-500 via-green-600 to-green-700 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-green-500/25 group-hover:shadow-xl group-hover:shadow-green-500/40">
               <i class="ri-fingerprint-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">Access Control</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Sistem kontrol akses modern dengan fingerprint, card reader, dan PIN untuk keamanan maksimal.</p>

               <!-- Features List -->
               <div class="space-y-3 mb-6">
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-green-500 mr-3"></i>
                     <span class="text-sm">Fingerprint Scanner</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-green-500 mr-3"></i>
                     <span class="text-sm">Card & PIN Access</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-green-500 mr-3"></i>
                     <span class="text-sm">Time-based Access</span>
                  </div>
               </div>

               <!-- Action Button -->
               <a href="<?= base_url('kategori/access-control') ?>" class="inline-flex items-center bg-green-500 text-white px-6 py-3 rounded-xl hover:bg-green-600 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                  <span>Lihat Paket</span>
                  <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
               </a>
            </div>
         </div>

         <!-- Barrier Gate Card -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="300">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-orange-500/5 via-transparent to-orange-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-orange-500/10 to-orange-600/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-orange-500/25 group-hover:shadow-xl group-hover:shadow-orange-500/40">
               <i class="ri-gate-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors duration-300">Barrier Gate</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Sistem gate otomatis dengan sensor keamanan dan kontrol akses terintegrasi untuk area parkir.</p>

               <!-- Features List -->
               <div class="space-y-3 mb-6">
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-orange-500 mr-3"></i>
                     <span class="text-sm">Auto Open/Close</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-orange-500 mr-3"></i>
                     <span class="text-sm">Safety Sensors</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-orange-500 mr-3"></i>
                     <span class="text-sm">Remote Control</span>
                  </div>
               </div>

               <!-- Action Button -->
               <a href="<?= base_url('kategori/barrier-gate') ?>" class="inline-flex items-center bg-orange-500 text-white px-6 py-3 rounded-xl hover:bg-orange-600 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                  <span>Lihat Paket</span>
                  <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
               </a>
            </div>
         </div>

         <!-- Internet Dedicated Card -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="400">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-purple-500/5 via-transparent to-purple-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-purple-500/10 to-purple-600/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-purple-500 via-purple-600 to-purple-700 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-purple-500/25 group-hover:shadow-xl group-hover:shadow-purple-500/40">
               <i class="ri-router-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors duration-300">Internet Dedicated</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Solusi internet berdedikasi dengan bandwidth tinggi dan stabilitas maksimal untuk bisnis.</p>

               <!-- Features List -->
               <div class="space-y-3 mb-6">
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-purple-500 mr-3"></i>
                     <span class="text-sm">High Bandwidth</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-purple-500 mr-3"></i>
                     <span class="text-sm">99.9% Uptime</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-purple-500 mr-3"></i>
                     <span class="text-sm">24/7 Support</span>
                  </div>
               </div>

               <!-- Action Button -->
               <a href="<?= base_url('kategori/internet-dedicated') ?>" class="inline-flex items-center bg-purple-500 text-white px-6 py-3 rounded-xl hover:bg-purple-600 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                  <span>Lihat Paket</span>
                  <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
               </a>
            </div>
         </div>

         <!-- Smart Solution Card -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="500">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-teal-500/5 via-transparent to-teal-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-teal-500/10 to-teal-600/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-teal-500 via-teal-600 to-teal-700 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-teal-500/25 group-hover:shadow-xl group-hover:shadow-teal-500/40">
               <i class="ri-cpu-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors duration-300">Smart Solution</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Solusi pintar terintegrasi dengan AI dan IoT untuk keamanan dan otomasi properti modern.</p>

               <!-- Features List -->
               <div class="space-y-3 mb-6">
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-teal-500 mr-3"></i>
                     <span class="text-sm">AI Integration</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-teal-500 mr-3"></i>
                     <span class="text-sm">IoT Connected</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-teal-500 mr-3"></i>
                     <span class="text-sm">Smart Automation</span>
                  </div>
               </div>

               <!-- Action Button -->
               <a href="<?= base_url('kategori/smart-solution') ?>" class="inline-flex items-center bg-teal-500 text-white px-6 py-3 rounded-xl hover:bg-teal-600 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                  <span>Lihat Paket</span>
                  <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
               </a>
            </div>
         </div>

         <!-- Gallery Card -->
         <div class="group relative bg-gradient-to-br from-white via-white to-gray-50/50 rounded-3xl p-8 shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-3 border border-gray-100/50 overflow-hidden" data-aos="fade-up" data-aos-delay="600">
            <!-- Premium Background Pattern -->
            <div class="absolute inset-0 bg-gradient-to-br from-pink-500/5 via-transparent to-pink-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
            <div class="absolute top-0 right-0 w-32 h-32 bg-gradient-to-br from-pink-500/10 to-pink-600/10 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-700"></div>

            <!-- Icon Container -->
            <div class="relative z-10 w-20 h-20 bg-gradient-to-br from-pink-500 via-pink-600 to-pink-700 rounded-3xl flex items-center justify-center mb-6 group-hover:scale-110 transition-all duration-500 shadow-lg shadow-pink-500/25 group-hover:shadow-xl group-hover:shadow-pink-500/40">
               <i class="ri-gallery-line text-3xl text-white group-hover:rotate-12 transition-transform duration-500"></i>
            </div>

            <!-- Content -->
            <div class="relative z-10">
               <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-pink-600 transition-colors duration-300">Gallery</h3>
               <p class="text-gray-600 mb-6 leading-relaxed">Portfolio lengkap proyek-proyek keamanan yang telah kami selesaikan dengan sukses.</p>

               <!-- Features List -->
               <div class="space-y-3 mb-6">
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-pink-500 mr-3"></i>
                     <span class="text-sm">Project Showcase</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-pink-500 mr-3"></i>
                     <span class="text-sm">Before & After</span>
                  </div>
                  <div class="flex items-center text-gray-700">
                     <i class="ri-check-line text-pink-500 mr-3"></i>
                     <span class="text-sm">Case Studies</span>
                  </div>
               </div>

               <!-- Action Button -->
               <a href="<?= base_url('kategori/gallery') ?>" class="inline-flex items-center bg-pink-500 text-white px-6 py-3 rounded-xl hover:bg-pink-600 transform hover:scale-105 transition-all duration-300 font-semibold shadow-lg hover:shadow-xl">
                  <span>Lihat Portfolio</span>
                  <i class="ri-arrow-right-line ml-2 group-hover:translate-x-1 transition-transform duration-300"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Featured Products Section -->
<section class="py-24 bg-gray-50">
   <div class="container mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up">
         <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-3">PAKET UNGGULAN</span>
         <h2 class="text-4xl font-bold text-gray-900">Paket Terpopuler</h2>
         <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
         <p class="text-gray-600 max-w-2xl mx-auto mt-4">Pilihan paket terbaik yang paling diminati oleh pelanggan kami</p>
      </div>
      <!-- Featured Products Grid -->
      <?php if (!empty($produk_unggulan)) : ?>
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php foreach ($produk_unggulan as $index => $item): ?>
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
                        <div class="bg-gray-50 rounded-xl p-4">
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
                           class="w-full bg-green-500 text-white py-4 px-6 rounded-xl hover:bg-green-600 transition-all duration-200 font-semibold text-lg flex items-center justify-center shadow-lg hover:shadow-xl transform hover:scale-105">
                           <i class="ri-whatsapp-line mr-3 text-xl"></i>
                           Order Now
                        </button>
                     </div>
                  </div>
               </div>
            <?php endforeach; ?>
         </div>

         <!-- Lihat Semua Fitur Section -->
         <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="200">
            <a href="<?= base_url('produk') ?>" class="inline-flex items-center space-x-2 text-primary text-lg font-semibold hover:underline transition-all duration-200">
               <span>Lihat Semua Fitur</span>
               <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 17l8-8m0 0h-6m6 0v6" />
               </svg>
            </a>
         </div>
   </div>
<?php else : ?>
   <!-- Empty State -->
   <div class="text-center py-16" data-aos="fade-up">
      <div class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-6">
         <i class="ri-package-line text-4xl text-gray-400"></i>
      </div>
      <h3 class="text-2xl font-bold text-gray-900 mb-4">Belum Ada Paket Unggulan</h3>
      <p class="text-gray-600 mb-8 max-w-md mx-auto">Saat ini belum tersedia paket unggulan. Silakan hubungi kami untuk informasi lebih lanjut.</p>
      <a href="<?= base_url('kontak') ?>" class="inline-flex items-center bg-primary text-white px-6 py-3 rounded-lg hover:bg-primary/90 transition-colors font-semibold">
         <i class="ri-customer-service-line mr-2"></i>
         Hubungi Kami
      </a>
   </div>
<?php endif; ?>
</div>
</section>

<!-- Testimoni Section dengan Card Modular -->
<section id="testimoni" class="py-24 bg-gray-50 overflow-hidden">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-3">Testimoni</span>
         <h2 class="text-4xl font-bold text-gray-900">Apa Kata Mereka</h2>
         <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
         <p class="text-gray-600 max-w-2xl mx-auto mt-4">Lihat bagaimana sistem keamanan kami membantu pelanggan merasa aman dan tenang</p>
      </div>
      <?php if (empty($testimoni_terbaru)): ?>
         <div class="text-center py-12">
            <div class="flex flex-col items-center">
               <i class="ri-chat-smile-line ri-4x text-gray-300 mb-4"></i>
               <p class="text-gray-500">Belum ada testimoni saat ini.</p>
               <p class="text-sm text-gray-400 mt-2">Jadilah yang pertama memberikan ulasan</p>
            </div>
         </div>
      <?php else: ?>
         <!-- Testimoni Infinite Scroll -->
         <div class="relative" data-aos="fade-up" data-aos-delay="200">
            <!-- Gradient overlay left -->
            <div class="absolute left-0 top-0 w-20 h-full bg-gradient-to-r from-gray-50 to-transparent z-10"></div>

            <!-- Gradient overlay right -->
            <div class="absolute right-0 top-0 w-20 h-full bg-gradient-to-l from-gray-50 to-transparent z-10"></div>

            <!-- Testimoni Container -->
            <div class="overflow-hidden p-4 sm:p-6 lg:p-8">
               <div class="testimoni-scroll flex space-x-4 sm:space-x-6 lg:space-x-8 items-stretch animate-testimoni-scroll">
                  <?php foreach ($testimoni_terbaru as $testimoni): ?>
                     <div class="flex-shrink-0 w-72 sm:w-80 lg:w-80">
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 lg:p-8 h-full flex flex-col hover:cursor-pointer transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-primary/5 group">
                           <!-- Quote Icon -->
                           <div class="text-primary/20 group-hover:text-primary/30 mb-3 sm:mb-4 transition-all duration-300">
                              <i class="ri-double-quotes-l text-2xl sm:text-3xl lg:ri-3x"></i>
                           </div>
                           <!-- Testimoni Text -->
                           <p class="text-sm sm:text-base text-gray-700 group-hover:text-gray-800 italic mb-4 sm:mb-6 flex-grow transition-all duration-300 leading-relaxed">"<?= $testimoni->deskripsi ?>"</p>
                           <!-- Rating -->
                           <div class="flex items-center mb-3 sm:mb-4">
                              <?php for ($i = 1; $i <= 5; $i++): ?>
                                 <?php if ($i <= $testimoni->rating): ?>
                                    <i class="ri-star-fill text-yellow-400 group-hover:text-yellow-500 transition-all duration-300 group-hover:scale-110 text-sm sm:text-base"></i>
                                 <?php else: ?>
                                    <i class="ri-star-line text-gray-300 group-hover:text-gray-400 transition-all duration-300 text-sm sm:text-base"></i>
                                 <?php endif; ?>
                              <?php endfor; ?>
                           </div>
                           <!-- Author -->
                           <div class="flex items-center">
                              <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full overflow-hidden mr-3 sm:mr-4 group-hover:scale-110 transition-all duration-300 group-hover:shadow-lg">
                                 <?php if (!empty($testimoni->gambar)): ?>
                                    <img src="<?= base_url('uploads/testimonials/' . $testimoni->gambar) ?>"
                                       alt="<?= $testimoni->nama ?>"
                                       class="w-full h-full object-cover group-hover:brightness-110 transition-all duration-300">
                                 <?php else: ?>
                                    <div class="w-full h-full flex items-center justify-center bg-gray-200 rounded-full group-hover:bg-primary/10 transition-all duration-300">
                                       <i class="ri-user-line text-gray-400 group-hover:text-primary transition-all duration-300 text-sm sm:text-base"></i>
                                    </div>
                                 <?php endif; ?>
                              </div>
                              <div>
                                 <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors duration-300 text-sm sm:text-base"><?= $testimoni->nama ?></h4>
                                 <p class="text-xs sm:text-sm text-gray-600 group-hover:text-gray-700 transition-all duration-300"><?= $testimoni->jabatan ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; ?>
                  
                  <!-- Duplicate testimonials for seamless loop -->
                  <?php foreach ($testimoni_terbaru as $testimoni): ?>
                     <div class="flex-shrink-0 w-72 sm:w-80 lg:w-80">
                        <div class="bg-white rounded-xl shadow-lg p-4 sm:p-6 lg:p-8 h-full flex flex-col hover:cursor-pointer transform transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:shadow-primary/10 hover:-translate-y-2 hover:bg-gradient-to-br hover:from-white hover:to-primary/5 group">
                           <!-- Quote Icon -->
                           <div class="text-primary/20 group-hover:text-primary/30 mb-3 sm:mb-4 transition-all duration-300">
                              <i class="ri-double-quotes-l text-2xl sm:text-3xl lg:ri-3x"></i>
                           </div>
                           <!-- Testimoni Text -->
                           <p class="text-sm sm:text-base text-gray-700 group-hover:text-gray-800 italic mb-4 sm:mb-6 flex-grow transition-all duration-300 leading-relaxed">"<?= $testimoni->deskripsi ?>"</p>
                           <!-- Rating -->
                           <div class="flex items-center mb-3 sm:mb-4">
                              <?php for ($i = 1; $i <= 5; $i++): ?>
                                 <?php if ($i <= $testimoni->rating): ?>
                                    <i class="ri-star-fill text-yellow-400 group-hover:text-yellow-500 transition-all duration-300 group-hover:scale-110 text-sm sm:text-base"></i>
                                 <?php else: ?>
                                    <i class="ri-star-line text-gray-300 group-hover:text-gray-400 transition-all duration-300 text-sm sm:text-base"></i>
                                 <?php endif; ?>
                              <?php endfor; ?>
                           </div>
                           <!-- Author -->
                           <div class="flex items-center">
                              <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full overflow-hidden mr-3 sm:mr-4 group-hover:scale-110 transition-all duration-300 group-hover:shadow-lg">
                                 <?php if (!empty($testimoni->gambar)): ?>
                                    <img src="<?= base_url('uploads/testimonials/' . $testimoni->gambar) ?>"
                                       alt="<?= $testimoni->nama ?>"
                                       class="w-full h-full object-cover group-hover:brightness-110 transition-all duration-300">
                                 <?php else: ?>
                                    <div class="w-full h-full flex items-center justify-center bg-gray-200 rounded-full group-hover:bg-primary/10 transition-all duration-300">
                                       <i class="ri-user-line text-gray-400 group-hover:text-primary transition-all duration-300 text-sm sm:text-base"></i>
                                    </div>
                                 <?php endif; ?>
                              </div>
                              <div>
                                 <h4 class="font-bold text-gray-900 group-hover:text-primary transition-colors duration-300 text-sm sm:text-base"><?= $testimoni->nama ?></h4>
                                 <p class="text-xs sm:text-sm text-gray-600 group-hover:text-gray-700 transition-all duration-300"><?= $testimoni->jabatan ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
      <?php endif; ?>
   </div>
</section>

<!-- Trusted Partners Section dengan Auto Scroll -->
<section class="py-16 bg-white relative overflow-hidden">
   <div class="container mx-auto px-4">
      <!-- Auto Scrolling Logos -->
      <div class="relative" data-aos="fade-up" data-aos-delay="200">
         <!-- Gradient overlay left -->
         <div class="absolute left-0 top-0 w-20 h-full bg-gradient-to-r from-white to-transparent z-10"></div>

         <!-- Gradient overlay right -->
         <div class="absolute right-0 top-0 w-20 h-full bg-gradient-to-l from-white to-transparent z-10"></div>

         <!-- Scrolling container -->
         <div class="overflow-hidden pb-4">
            <div class="logos-scroll flex space-x-16 items-center animate-scroll-infinite">
               <!-- Logo 1 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 1"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-blue-500 to-blue-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 1</span>
                  </div>
               </div>

               <!-- Logo 2 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 2"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-green-500 to-green-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 2</span>
                  </div>
               </div>

               <!-- Logo 3 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 3"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-purple-500 to-purple-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 3</span>
                  </div>
               </div>

               <!-- Logo 4 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 4"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-balck-500 to-black-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 4</span>
                  </div>
               </div>

               <!-- Logo 5 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 5"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-indigo-500 to-indigo-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 5</span>
                  </div>
               </div>

               <!-- Logo 6 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 6"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-orange-500 to-orange-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 6</span>
                  </div>
               </div>

               <!-- Logo 7 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 7"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-teal-500 to-teal-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 7</span>
                  </div>
               </div>

               <!-- Logo 8 -->
               <div class="flex-shrink-0 w-36 h-20 flex items-center justify-center bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow group cursor-pointer">
                  <img src="<?= base_url('assets/img/cli1.webp') ?>"
                     alt="Client 8"
                     class="max-w-28 max-h-14 object-contain filter grayscale group-hover:grayscale-0 transition-all duration-300"
                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                  <div class="hidden w-28 h-14 bg-gradient-to-r from-pink-500 to-pink-600 rounded flex items-center justify-center">
                     <span class="text-white font-bold text-xs">CLIENT 8</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- FAQ Section dengan Accordion -->
<section id="kontak" class="py-24 bg-white">
   <div class="container mx-auto px-4">
      <div class="text-center mb-16" data-aos="fade-up">
         <span class="inline-block px-3 py-1 bg-primary/10 text-primary rounded-full text-sm font-semibold mb-3">FAQ & KONTAK</span>
         <h2 class="text-4xl font-bold text-gray-900">Pertanyaan Umum & Hubungi Kami</h2>
         <div class="w-24 h-1 bg-primary mx-auto mt-4 rounded-full"></div>
         <p class="text-gray-600 max-w-2xl mx-auto mt-4">Temukan jawaban atas pertanyaan yang sering diajukan atau hubungi kami langsung</p>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12" data-aos="fade-up" data-aos-delay="100">
         <!-- FAQ Section - Left Column -->
         <div>
            <div class="mb-8">
               <h3 class="text-2xl font-bold text-gray-900 mb-4">Pertanyaan yang Sering Diajukan</h3>
               <p class="text-gray-600">Berikut adalah jawaban untuk pertanyaan-pertanyaan umum tentang layanan keamanan kami</p>
            </div>

            <div class="space-y-4" id="accordionFaq">
               <!-- FAQ Item 1 -->
               <div class="border border-gray-200 rounded-xl overflow-hidden">
                  <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-colors faq-button" data-target="faq1">
                     <span class="font-bold text-gray-900">Berapa lama waktu instalasi sistem CCTV?</span>
                     <i class="ri-arrow-down-s-line ri-lg text-primary transition-transform"></i>
                  </button>
                  <div class="bg-gray-50 px-5 overflow-hidden transition-all duration-300 max-h-0 faq-content" id="faq1">
                     <div class="py-5 text-gray-700">
                        Waktu instalasi bervariasi tergantung pada ukuran properti dan kompleksitas sistem. Untuk rumah kecil hingga menengah, instalasi biasanya memakan waktu 1-2 hari. Untuk bisnis atau properti yang lebih besar, mungkin memerlukan 2-5 hari. Tim kami akan memberikan estimasi waktu yang lebih akurat setelah survei lokasi.
                     </div>
                  </div>
               </div>

               <!-- FAQ Item 2 -->
               <div class="border border-gray-200 rounded-xl overflow-hidden">
                  <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-colors faq-button" data-target="faq2">
                     <span class="font-bold text-gray-900">Apakah sistem CCTV dapat diakses dari jarak jauh?</span>
                     <i class="ri-arrow-down-s-line ri-lg text-primary transition-transform"></i>
                  </button>
                  <div class="bg-gray-50 px-5 overflow-hidden transition-all duration-300 max-h-0 faq-content" id="faq2">
                     <div class="py-5 text-gray-700">
                        Ya, semua sistem CCTV modern yang kami tawarkan dapat diakses dari jarak jauh melalui smartphone, tablet, atau komputer. Anda dapat memantau properti Anda kapan saja dan di mana saja melalui aplikasi khusus dengan koneksi internet. Fitur ini memungkinkan Anda untuk melihat feed langsung, memutar rekaman, dan menerima notifikasi ketika ada gerakan yang terdeteksi.
                     </div>
                  </div>
               </div>

               <!-- FAQ Item 3 -->
               <div class="border border-gray-200 rounded-xl overflow-hidden">
                  <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-colors faq-button" data-target="faq3">
                     <span class="font-bold text-gray-900">Apa saja paket layanan maintenance yang tersedia?</span>
                     <i class="ri-arrow-down-s-line ri-lg text-primary transition-transform"></i>
                  </button>
                  <div class="bg-gray-50 px-5 overflow-hidden transition-all duration-300 max-h-0 faq-content" id="faq3">
                     <div class="py-5 text-gray-700">
                        Kami menawarkan beberapa paket maintenance, mulai dari pemeriksaan rutin bulanan hingga paket premium dengan dukungan 24/7 dan waktu respons cepat. Paket dasar mencakup pemeriksaan perangkat keras, pembersihan kamera, dan pembaruan perangkat lunak. Paket yang lebih tinggi mencakup penggantian komponen, cadangan cloud, dan dukungan prioritas. Semua paket dapat disesuaikan dengan kebutuhan spesifik Anda.
                     </div>
                  </div>
               </div>

               <!-- FAQ Item 4 -->
               <div class="border border-gray-200 rounded-xl overflow-hidden">
                  <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-colors faq-button" data-target="faq4">
                     <span class="font-bold text-gray-900">Berapa lama rekaman CCTV dapat disimpan?</span>
                     <i class="ri-arrow-down-s-line ri-lg text-primary transition-transform"></i>
                  </button>
                  <div class="bg-gray-50 px-5 overflow-hidden transition-all duration-300 max-h-0 faq-content" id="faq4">
                     <div class="py-5 text-gray-700">
                        Masa penyimpanan rekaman tergantung pada kapasitas hard drive DVR/NVR, jumlah kamera, resolusi rekaman, dan pengaturan rekaman (terus-menerus atau berdasarkan gerakan). Sistem standar biasanya dapat menyimpan rekaman 7-30 hari. Kami juga menawarkan solusi penyimpanan cloud yang dapat menyimpan rekaman lebih lama. Tim teknis kami dapat membantu Anda menentukan solusi penyimpanan terbaik berdasarkan kebutuhan Anda.
                     </div>
                  </div>
               </div>

               <!-- FAQ Item 5 -->
               <div class="border border-gray-200 rounded-xl overflow-hidden">
                  <button class="w-full flex justify-between items-center p-5 text-left bg-white hover:bg-gray-50 transition-colors faq-button" data-target="faq5">
                     <span class="font-bold text-gray-900">Apakah sistem keamanan dapat diintegrasikan dengan smart home?</span>
                     <i class="ri-arrow-down-s-line ri-lg text-primary transition-transform"></i>
                  </button>
                  <div class="bg-gray-50 px-5 overflow-hidden transition-all duration-300 max-h-0 faq-content" id="faq5">
                     <div class="py-5 text-gray-700">
                        Ya, banyak sistem keamanan modern kami yang dapat diintegrasikan dengan platform smart home seperti Google Home, Amazon Alexa, atau Apple HomeKit. Integrasi ini memungkinkan Anda mengontrol sistem keamanan dengan perintah suara, mengotomatiskan perangkat berdasarkan aktivitas keamanan, dan menciptakan pengalaman rumah pintar yang lebih terpadu. Konsultan kami dapat membantu Anda memilih sistem yang kompatibel dengan ekosistem smart home Anda.
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Contact Form Section - Right Column -->
         <div>
            <div class="mb-8">
               <h3 class="text-2xl font-bold text-gray-900 mb-4">Hubungi Kami Sekarang</h3>
               <p class="text-gray-600">Lindungi lokasi Anda sekarang! Silahkan isi form di bawah ini, kami akan segera menghubungi Anda.</p>
            </div>

            <div class="bg-gradient-to-br from-gray-50 via-blue-50 to-gray-100 rounded-2xl shadow-xl p-8">
               <?= form_open('beranda/kirim_kontak', ['class' => 'space-y-6', 'id' => 'kontakForm']) ?>
               <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                     <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama</label>
                     <input type="text" id="nama" name="nama" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all duration-200 bg-gray-50 hover:bg-white"
                        placeholder="Masukkan nama Anda">
                  </div>

                  <div>
                     <label for="telepon" class="block text-sm font-semibold text-gray-700 mb-2">Telepon</label>
                     <div class="flex">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-xl">+62</span>
                        <input type="tel" id="telepon" name="telepon" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-r-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all duration-200 bg-gray-50 hover:bg-white"
                           placeholder="812345678">
                     </div>
                  </div>
               </div>

               <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <div>
                     <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                     <input type="email" id="email" name="email" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all duration-200 bg-gray-50 hover:bg-white"
                        placeholder="nama@email.com">
                  </div>

                  <div>
                     <label for="jenis_properti" class="block text-sm font-semibold text-gray-700 mb-2">Jenis Properti</label>
                     <select id="jenis_properti" name="jenis_properti" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all duration-200 bg-gray-50 hover:bg-white">
                        <option value="">-- Pilih Properti --</option>
                        <option value="Rumah Tinggal">Rumah Tinggal</option>
                        <option value="Apartemen">Apartemen</option>
                        <option value="Kantor">Kantor</option>
                        <option value="Toko/Ruko">Toko/Ruko</option>
                        <option value="Gudang">Gudang</option>
                        <option value="Pabrik">Pabrik</option>
                        <option value="Lainnya">Lainnya</option>
                     </select>
                  </div>
               </div>

               <div>
                  <label for="catatan" class="block text-sm font-semibold text-gray-700 mb-2">Catatan</label>
                  <textarea id="catatan" name="catatan" rows="4"
                     class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent outline-none transition-all duration-200 bg-gray-50 hover:bg-white resize-none"
                     placeholder="Ceritakan kebutuhan keamanan Anda, berapa titik CCTV yang diinginkan, atau pertanyaan lainnya..."></textarea>
               </div>

               <div class="flex items-center justify-center">
                  <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>
               </div>

               <button type="submit"
                  class="w-full bg-primary text-white py-4 px-8 rounded-xl font-semibold text-lg hover:from-blue-600 hover:to-primary transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center space-x-2">
                  <i class="ri-send-plane-fill"></i>
                  <span>Kirim Sekarang</span>
               </button>
               <?= form_close() ?>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Modal Detail Produk dengan Desain Modern -->
<div id="modalDetailProduk" class="fixed inset-0 flex items-center justify-center z-50 hidden">
   <div class="absolute inset-0 bg-black bg-opacity-50 backdrop-blur-sm" id="modalOverlay"></div>

   <div class="bg-white rounded-2xl w-full max-w-4xl mx-4 relative z-10 overflow-hidden" id="modalContent">
      <button class="absolute top-4 right-4 z-20 bg-white rounded-full p-2 shadow-md text-gray-600 hover:text-primary transition-colors" id="closeModal">
         <i class="ri-close-line ri-xl"></i>
      </button>

      <div class="flex flex-col md:flex-row">
         <div class="w-full md:w-1/2 bg-gray-100 p-6 md:p-8 relative">
            <div id="produkGambarModal" class="w-full h-64 md:h-80 flex items-center justify-center">
               <!-- Gambar produk akan ditampilkan di sini -->
            </div>

            <!-- Badge -->
            <div id="produkKategoriModal" class="absolute top-8 left-8 bg-primary text-white text-xs font-bold uppercase px-3 py-1 rounded-full shadow-md">
               <!-- Kategori -->
            </div>
         </div>

         <div class="w-full md:w-1/2 p-6 md:p-8">
            <div class="h-full flex flex-col">
               <h3 id="produkNamaModal" class="text-2xl font-bold text-gray-900 mb-2"><!-- Nama produk --></h3>



               <div class="bg-gray-100 rounded-xl p-4 mb-6">
                  <p class="text-3xl font-bold text-primary" id="produkHargaModal"><!-- Harga --></p>
                  <p class="text-xs text-gray-500 mt-1">Harga sudah termasuk pajak</p>
               </div>

               <div class="mb-6 flex-grow">
                  <h4 class="text-lg font-medium mb-3">Deskripsi</h4>
                  <div id="produkDeskripsiModal" class="text-gray-700 prose"><!-- Deskripsi --></div>
               </div>

               <div class="flex flex-col space-y-3">
                  <a href="#" id="produkBeliBtn" class="inline-block bg-green-500 text-white px-6 py-3 rounded-xl hover:bg-green-600 transition text-center w-full font-medium">
                     Order Now
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Load Footer Template -->
<?php $this->load->view('templates/footer'); ?>

<!-- Script untuk carousel hero -->
<script>
   document.addEventListener('DOMContentLoaded', function() {
      // Carousel functionality - only if elements exist
      const slides = document.querySelectorAll('.carousel-slide');
      const indicators = document.querySelectorAll('.carousel-indicator');
      
      if (slides.length > 0 && indicators.length > 0) {
         let currentIndex = 0;
         const interval = 5000;

         function showSlide(index) {
            slides.forEach(slide => {
               slide.classList.add('opacity-0');
            });

            indicators.forEach(indicator => {
               indicator.classList.remove('active');
               indicator.classList.remove('bg-white/70');
               indicator.classList.add('bg-white/30');
            });

            slides[index].classList.remove('opacity-0');

            indicators[index].classList.add('active');
            indicators[index].classList.remove('bg-white/30');
            indicators[index].classList.add('bg-white/70');

            // Update current index
            currentIndex = index;
         }

         indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
               showSlide(index);
               resetTimer();
            });
         });

         let timer = setInterval(nextSlide, interval);

         function nextSlide() {
            let nextIndex = (currentIndex + 1) % slides.length;
            showSlide(nextIndex);
         }

         function resetTimer() {
            clearInterval(timer);
            timer = setInterval(nextSlide, interval);
         }

         showSlide(0);
      }

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

      const faqButtons = document.querySelectorAll('.faq-button');

      faqButtons.forEach(button => {
         button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const targetContent = document.getElementById(targetId);
            const arrow = this.querySelector('i');

            faqButtons.forEach(otherButton => {
               if (otherButton !== this) {
                  const otherTargetId = otherButton.getAttribute('data-target');
                  const otherContent = document.getElementById(otherTargetId);
                  const otherArrow = otherButton.querySelector('i');

                  otherContent.style.maxHeight = '0px';
                  otherContent.classList.remove('open');

                  otherArrow.style.transform = 'rotate(0deg)';
               }
            });

            if (targetContent.classList.contains('open')) {
               targetContent.style.maxHeight = '0px';
               targetContent.classList.remove('open');
               arrow.style.transform = 'rotate(0deg)';
            } else {
               targetContent.style.maxHeight = targetContent.scrollHeight + 'px';
               targetContent.classList.add('open');
               arrow.style.transform = 'rotate(180deg)';
            }
         });
      });

      // Modal functionality untuk detail produk
      const modal = document.getElementById('modalDetailProduk');
      const modalOverlay = document.getElementById('modalOverlay');
      const closeModal = document.getElementById('closeModal');
      const detailButtons = document.querySelectorAll('.detail-btn');

      // Open modal
      detailButtons.forEach(button => {
         button.addEventListener('click', function(e) {
            e.preventDefault();
            const produkId = this.getAttribute('data-id');

            // Fetch product details via AJAX
            fetch(`<?= base_url('beranda/detail_produk/') ?>${produkId}`)
               .then(response => response.json())
               .then(data => {
                  if (data.error) {
                     alert('Produk tidak ditemukan');
                     return;
                  }

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
                  const whatsappMessage = encodeURIComponent(`Halo admin, saya tertarik dengan produk: ${data.nama_produk} dengan harga Rp ${new Intl.NumberFormat('id-ID').format(data.harga)}`);

                  document.getElementById('produkBeliBtn').href = `https://wa.me/6285694743168?text=${whatsappMessage}`;

                  // Show modal
                  modal.classList.remove('hidden');
                  document.body.style.overflow = 'hidden';
               })
               .catch(error => {
                  console.error('Error:', error);
                  alert('Terjadi kesalahan saat memuat detail produk');
               });
         });
      });

      // Close modal
      function closeModalFunction() {
         modal.classList.add('hidden');
         document.body.style.overflow = 'auto';
      }

      if (closeModal) {
         closeModal.addEventListener('click', closeModalFunction);
      }

      if (modalOverlay) {
         modalOverlay.addEventListener('click', closeModalFunction);
      }

      // Close modal with Escape key
      document.addEventListener('keydown', function(e) {
         if (e.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
            closeModalFunction();
         }
      });

      // Initialize infinite scroll for partners
      const logosContainer = document.querySelector('.logos-scroll');
      if (logosContainer) {
         // Clone all logos and append them for seamless loop
         const originalLogos = logosContainer.innerHTML;
         logosContainer.innerHTML = originalLogos + originalLogos;
      }

      // Initialize infinite scroll for testimonials
      const testimoniContainer = document.querySelector('.testimoni-scroll');
      if (testimoniContainer) {
         // Clone all testimonials and prepend them for left-to-right scroll
         const originalTestimoni = testimoniContainer.innerHTML;
         testimoniContainer.innerHTML = originalTestimoni + originalTestimoni;
      }
   });
</script>