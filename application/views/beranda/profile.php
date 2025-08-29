<?php $this->load->view('templates/header'); ?>

<!-- Anti-cache meta tags -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<style>
/* Custom CSS untuk efek hover yang menarik - Style Trudar CCTV */
.feature-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.feature-card::before {
    content: '' !important;
    position: absolute !important;
    top: 50% !important;
    left: 50% !important;
    width: 0 !important;
    height: 0 !important;
    background: linear-gradient(135deg, #60a5fa, #3b82f6, #2563eb) !important;
    border-radius: 0 !important;
    transform: translate(-50%, -50%) !important;
    transition: all 0.5s ease-out !important;
    z-index: 1 !important;
}

.feature-card:hover::before {
    width: 100% !important;
    height: 100% !important;
}

.feature-card .icon-container {
    position: relative;
    z-index: 2;
}

.feature-card:hover .icon-container {
    background: white !important;
    transform: scale(1.1);
}

.feature-card:hover .icon-container i {
    color: #3b82f6 !important;
}

.feature-card h3,
.feature-card p {
    position: relative;
    z-index: 2;
}

.feature-card:hover h3 {
    color: white !important;
    font-weight: 700 !important;
}

.feature-card:hover p {
    color: rgba(255, 255, 255, 0.95) !important;
    font-weight: 500 !important;
}

/* Efek zoom in yang smooth - Style Trudar CCTV */
.feature-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.feature-card:hover {
    transform: scale(1.02) translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* Animasi icon yang berputar sedikit */
.feature-card:hover .icon-container i {
    animation: iconBounce 0.6s ease;
}

@keyframes iconBounce {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

/* Efek glow pada hover - Style Trudar CCTV */
.feature-card:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* Responsive hover effects */
@media (hover: hover) {
    .feature-card:hover {
        transform: scale(1.02) translateY(-2px);
    }
}

@media (hover: none) {
    .feature-card:active {
        transform: scale(1.02);
    }
}

/* Service Card Hover Effects */
.service-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-card::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: linear-gradient(135deg, #60a5fa, #3b82f6, #2563eb);
    border-radius: 0;
    transform: translate(-50%, -50%);
    transition: all 0.5s ease-out;
    z-index: 1;
}

.service-card:hover::before {
    width: 100% !important;
    height: 100% !important;
}

.service-card .service-icon {
    position: relative;
    z-index: 2;
}

.service-card:hover .service-icon {
    background: white !important;
    transform: scale(1.1);
}

.service-card:hover .service-icon i {
    color: #3b82f6 !important;
}

.service-card h3,
.service-card p {
    position: relative;
    z-index: 2;
}

.service-card:hover h3 {
    color: white !important;
    font-weight: 700 !important;
}

.service-card:hover p {
    color: rgba(255, 255, 255, 0.95) !important;
    font-weight: 500 !important;
}

.service-card:hover span {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600 !important;
    border: 1px solid rgba(255, 255, 255, 0.3) !important;
}

/* Smooth transitions for service cards - Style Trudar CCTV */
.service-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.service-card:hover {
    transform: scale(1.02) translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* Icon animation for service cards */
.service-card:hover .service-icon i {
    animation: iconBounce 0.6s ease;
}

/* Memastikan semua elemen terlihat jelas saat hover */
.feature-card:hover *,
.service-card:hover * {
    position: relative;
    z-index: 2;
}

/* Efek tambahan untuk icon container saat hover */
.feature-card:hover .icon-container,
.service-card:hover .service-icon {
    background: white !important;
    transform: scale(1.1) !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
}

/* Efek untuk tag/label pada service card */
.service-card:hover .flex.flex-wrap.gap-2 span {
    background: rgba(255, 255, 255, 0.25) !important;
    color: white !important;
    font-weight: 600 !important;
    border: 1px solid rgba(255, 255, 255, 0.3) !important;
    backdrop-filter: blur(10px) !important;
}
</style>

<!-- Hero Section -->
<section class="bg-gradient-to-br from-primary to-primary/80 py-20">
   <div class="container mx-auto px-4">
      <div class="text-center" data-aos="fade-up">
         <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Profile Perusahaan</h1>
         <p class="text-white/90 text-lg max-w-2xl mx-auto">Mengenal lebih dekat FazTech Security Solutions, mitra terpercaya dalam solusi keamanan modern</p>
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
               <i class="ri-building-line mr-2"></i>Tentang FazTech
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-6">Solusi Keamanan Terpercaya Sejak 2018</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
               FazTech Security Solutions adalah perusahaan spesialis solusi keamanan modern yang menyediakan layanan CCTV, Barrier Gate, Fiber Optic, HDD, dan Access Control. Kami berkomitmen memberikan solusi keamanan terbaik dengan teknologi terkini dan layanan profesional yang didukung tim teknisi berpengalaman dan bersertifikasi.
            </p>

            <!-- Stats -->
            <div class="grid grid-cols-2 gap-6">
               <div class="text-center p-4 bg-gray-50 rounded-lg">
                  <div class="text-2xl font-bold text-primary mb-1">150+</div>
                  <div class="text-sm text-gray-600">Klien Puas</div>
               </div>
               <div class="text-center p-4 bg-gray-50 rounded-lg">
                  <div class="text-2xl font-bold text-primary mb-1">300+</div>
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
               Menjadi mitra terpercaya dalam solusi keamanan modern yang inovatif dan berkualitas tinggi, serta menjadi pemimpin pasar dalam industri keamanan di Indonesia.
            </p>
         </div>

         <!-- Mission -->
         <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="200">
            <div class="w-16 h-16 bg-gradient-to-br from-secondary to-secondary/80 rounded-2xl flex items-center justify-center mb-6">
               <i class="ri-target-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4">Misi</h3>
            <p class="text-gray-600 leading-relaxed">
               Memberikan layanan keamanan terbaik dengan teknologi terkini, didukung tim profesional dan komitmen kepuasan pelanggan, serta berkontribusi dalam menciptakan lingkungan yang aman dan nyaman.
            </p>
         </div>
      </div>
   </div>
</section>

<!-- Keunggulan Section -->
<section class="py-16 bg-white">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Keunggulan Kami</h2>
         <p class="text-gray-600 max-w-2xl mx-auto">Mengapa memilih FazTech sebagai mitra keamanan Anda</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
         <!-- Technology -->
         <div class="feature-card text-center p-6 bg-gray-50 rounded-xl transition-all duration-800 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-container w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4 transition-all duration-800">
               <i class="ri-cpu-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2 transition-colors duration-800">Teknologi Terdepan</h3>
            <p class="text-sm text-gray-600 transition-colors duration-800">AI, HD, dan teknologi keamanan terkini</p>
         </div>

         <!-- Certified Team -->
         <div class="feature-card text-center p-6 bg-gray-50 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-container w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4 transition-all duration-300">
               <i class="ri-medal-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2 transition-colors duration-300">Tim Bersertifikasi</h3>
            <p class="text-sm text-gray-600 transition-colors duration-300">Teknisi dengan sertifikasi resmi</p>
         </div>

         <!-- Warranty -->
         <div class="feature-card text-center p-6 bg-gray-50 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-container w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4 transition-all duration-300">
               <i class="ri-shield-check-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2 transition-colors duration-300">Garansi 100%</h3>
            <p class="text-sm text-gray-600 transition-colors duration-300">Garansi resmi dan terpercaya</p>
         </div>

         <!-- Support -->
         <div class="feature-card text-center p-6 bg-gray-50 rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-container w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4 transition-all duration-300">
               <i class="ri-customer-service-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2 transition-colors duration-300">Support 24/7</h3>
            <p class="text-sm text-gray-600 transition-colors duration-300">Layanan pelanggan setiap saat</p>
         </div>
      </div>
   </div>
</section>

<!-- Services Section -->
<section class="py-16 bg-gray-50">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Layanan Utama</h2>
         <p class="text-gray-600 max-w-2xl mx-auto">Solusi keamanan komprehensif untuk rumah dan bisnis Anda</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
         <!-- CCTV System -->
         <div class="service-card bg-white rounded-2xl p-6 shadow-lg transition-all duration-800 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="100">
            <div class="service-icon w-16 h-16 bg-gradient-to-br from-primary to-primary/80 rounded-2xl flex items-center justify-center mb-6 transition-all duration-800">
               <i class="ri-vidicon-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4 transition-colors duration-800">CCTV System</h3>
            <p class="text-gray-600 mb-4 transition-colors duration-800">Sistem kamera pengawas dengan teknologi HD dan AI untuk monitoring 24/7</p>
            <div class="flex flex-wrap gap-2">
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs transition-all duration-800">HD Quality</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs transition-all duration-800">AI Detection</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs transition-all duration-800">Night Vision</span>
            </div>
         </div>

         <!-- Access Control -->
         <div class="service-card bg-white rounded-2xl p-6 shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="200">
            <div class="service-icon w-16 h-16 bg-gradient-to-br from-secondary to-secondary/80 rounded-2xl flex items-center justify-center mb-6 transition-all duration-300">
               <i class="ri-key-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4 transition-colors duration-300">Access Control</h3>
            <p class="text-gray-600 mb-4 transition-colors duration-300">Sistem kontrol akses pintu dan area dengan teknologi fingerprint dan card</p>
            <div class="flex flex-wrap gap-2">
               <span class="px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs transition-all duration-300">Fingerprint</span>
               <span class="px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs transition-all duration-300">Card Access</span>
               <span class="px-3 py-1 bg-secondary/10 text-secondary rounded-full text-xs transition-all duration-300">PIN Code</span>
            </div>
         </div>

         <!-- Barrier Gate -->
         <div class="service-card bg-white rounded-2xl p-6 shadow-lg transition-all duration-300 transform hover:scale-105 hover:shadow-xl" data-aos="fade-up" data-aos-delay="300">
            <div class="service-icon w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-2xl flex items-center justify-center mb-6 transition-all duration-300">
               <i class="ri-shield-line text-2xl text-white"></i>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-4 transition-colors duration-300">Barrier Gate</h3>
            <p class="text-gray-600 mb-4 transition-colors duration-300">Sistem pembatas akses kendaraan dengan kontrol otomatis</p>
            <div class="flex flex-wrap gap-2">
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs transition-all duration-300">Auto Control</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs transition-all duration-300">Remote Access</span>
               <span class="px-3 py-1 bg-primary/10 text-primary rounded-full text-xs transition-all duration-300">Safety Sensor</span>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Team Section -->
<section class="py-16 bg-white">
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
<section class="py-16 bg-gray-50">
   <div class="container mx-auto px-4">
      <div class="text-center mb-12" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Informasi Kontak</h2>
         <p class="text-gray-600 max-w-2xl mx-auto">Hubungi kami untuk konsultasi dan informasi lebih lanjut</p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
         <!-- Address -->
         <div class="text-center p-6 bg-white rounded-xl hover:bg-primary/5 transition-colors shadow-lg" data-aos="fade-up" data-aos-delay="100">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-map-pin-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Alamat</h3>
            <p class="text-sm text-gray-600">Jl. Raya Utama No. 123, Jakarta Selatan, DKI Jakarta 12345</p>
         </div>

         <!-- Phone -->
         <div class="text-center p-6 bg-white rounded-xl hover:bg-primary/5 transition-colors shadow-lg" data-aos="fade-up" data-aos-delay="200">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-phone-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Telepon</h3>
            <p class="text-sm text-gray-600">021-555-0123</p>
         </div>

         <!-- Email -->
         <div class="text-center p-6 bg-white rounded-xl hover:bg-primary/5 transition-colors shadow-lg" data-aos="fade-up" data-aos-delay="300">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-mail-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Email</h3>
            <p class="text-sm text-gray-600">info@faztech.co.id</p>
         </div>

         <!-- Website -->
         <div class="text-center p-6 bg-white rounded-xl hover:bg-primary/5 transition-colors shadow-lg" data-aos="fade-up" data-aos-delay="400">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center mx-auto mb-4">
               <i class="ri-global-line text-xl text-white"></i>
            </div>
            <h3 class="font-bold text-gray-900 mb-2">Website</h3>
            <p class="text-sm text-gray-600">https://faztech.co.id</p>
         </div>
      </div>
   </div>
</section>

<!-- Contact CTA Section -->
<section class="py-16 bg-primary">
   <div class="container mx-auto px-4">
      <div class="text-center" data-aos="fade-up">
         <h2 class="text-3xl font-bold text-white mb-4">Siap Bekerja Sama?</h2>
         <p class="text-white/90 text-lg mb-8 max-w-2xl mx-auto">
            Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi keamanan terbaik untuk properti Anda
         </p>
         <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6281234567890" target="_blank" class="bg-white text-primary px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
               <i class="ri-whatsapp-line mr-2"></i>Hubungi WhatsApp
            </a>
            <a href="<?= base_url('produk') ?>" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-primary transition-colors">
               <i class="ri-eye-line mr-2"></i>Lihat Paket
            </a>
         </div>
      </div>
   </div>
</section>

<script>
// Debug: Pastikan CSS ter-load
console.log('Profile page CSS loaded - Version 1.1');
console.log('Feature cards:', document.querySelectorAll('.feature-card').length);
console.log('Service cards:', document.querySelectorAll('.service-card').length);

// Test hover effect
document.addEventListener('DOMContentLoaded', function() {
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        card.addEventListener('mouseenter', function() {
            console.log(`Hovering feature card ${index + 1}`);
        });
    });
});
</script>

<?php $this->load->view('templates/footer'); ?>