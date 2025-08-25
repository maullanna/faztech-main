<?php $this->load->view('templates/header'); ?>

<!-- Anti-cache meta tags -->
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

<style>
/* ===== DEVELOPMENT MODE CSS ===== */
/* Uncomment atau modify sesuai kebutuhan */

/* 1. BASIC LAYOUT STYLES */
:root {
    --primary-color: #3b82f6;
    --secondary-color: #8b5cf6;
    --accent-color: #06b6d4;
    --text-dark: #1f2937;
    --text-light: #6b7280;
    --bg-light: #f9fafb;
    --bg-white: #ffffff;
    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
}

/* 2. ENHANCED HERO SECTION */
.hero-section {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    position: relative;
    overflow: hidden;
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="50" cy="50" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
    opacity: 0.3;
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* 3. MODERN CARD DESIGNS */
.modern-card {
    background: var(--bg-white);
    border-radius: 20px;
    box-shadow: var(--shadow-md);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
}

.modern-card:hover {
    box-shadow: var(--shadow-xl);
    border-color: var(--primary-color);
}

/* 4. FEATURE CARDS WITH ENHANCED HOVER */
.feature-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 20px;
    box-shadow: var(--shadow-sm);
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    background: linear-gradient(145deg, #ffffff, #f8fafc);
}

.feature-card::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: linear-gradient(135deg, #667eea, #764ba2, #f093fb, #f5576c);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    z-index: 1;
}

.feature-card:hover::before {
    width: 600px;
    height: 600px;
}

.feature-card .icon-container {
    position: relative;
    z-index: 2;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 16px;
    padding: 16px;
    transition: all 0.4s ease;
}

.feature-card:hover .icon-container {
    background: white;
    box-shadow: var(--shadow-lg);
}

.feature-card:hover .icon-container i {
    color: var(--primary-color);
}

/* Keyframes iconFloat dihapus */

.feature-card h3,
.feature-card p {
    position: relative;
    z-index: 2;
    transition: all 0.4s ease;
}

.feature-card:hover h3 {
    color: white;
    font-weight: 700;
    transform: translateX(5px);
}

.feature-card:hover p {
    color: rgba(255, 255, 255, 0.95);
    font-weight: 500;
}

/* 5. SERVICE CARDS WITH MODERN DESIGN */
.service-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    border-radius: 20px;
    box-shadow: var(--shadow-sm);
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    background: linear-gradient(145deg, #ffffff, #f8fafc);
}

.service-card::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: linear-gradient(135deg, #667eea, #764ba2, #f093fb, #f5576c);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    z-index: 1;
}

.service-card:hover::before {
    width: 800px;
    height: 800px;
}

.service-card .service-icon {
    position: relative;
    z-index: 2;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    border-radius: 20px;
    padding: 20px;
    transition: all 0.4s ease;
}

.service-card:hover .service-icon {
    background: white;
    box-shadow: var(--shadow-lg);
}

.service-card:hover .service-icon i {
    color: var(--primary-color);
}

/* Keyframes iconPulse dihapus */

.service-card h3,
.service-card p,
.service-card span {
    position: relative;
    z-index: 2;
    transition: all 0.4s ease;
}

.service-card:hover h3 {
    color: white;
    font-weight: 700;
    transform: translateX(5px);
}

.service-card:hover p {
    color: rgba(255, 255, 255, 0.95);
    font-weight: 500;
}

.service-card:hover span {
    background: rgba(255, 255, 255, 0.25);
    color: white;
    font-weight: 600;
    border: 1px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
}

/* 6. CONTACT CARDS WITH FLOATING ANIMATION */
.contact-card {
    position: relative;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    border: 2px solid transparent;
    background: linear-gradient(145deg, #ffffff, #f8fafc);
    border-radius: 20px;
    box-shadow: var(--shadow-md);
}

.contact-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
    transition: left 0.8s ease;
}

.contact-card:hover::before {
    left: 100%;
}

.contact-card:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-xl);
}

.contact-card:hover .contact-icon {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.contact-card:hover .contact-icon i {
    /* Icon tetap diam, hanya berubah warna */
}

.contact-card:hover h3 {
    color: var(--primary-color);
    transform: translateX(5px);
}

.contact-card:hover p {
    color: var(--text-dark);
}

/* Floating animation dihapus - card tetap diam */
.contact-card {
    /* Card tetap diam, tidak ada animasi floating */
}

/* 7. RESPONSIVE DESIGN */
@media (max-width: 768px) {
    .hero-section {
        padding: 4rem 0;
    }
    
    .modern-card {
        border-radius: 16px;
    }
    
    .feature-card,
    .service-card,
    .contact-card {
        border-radius: 16px;
    }
}

/* 8. UTILITY CLASSES */
.text-gradient {
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.bg-glass {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.shadow-glow {
    box-shadow: 0 0 20px rgba(59, 130, 246, 0.3);
}

/* 9. ENHANCED CARD COVERAGE */
.service-card,
.feature-card,
.contact-card {
    position: relative;
    overflow: hidden;
}

.service-card::before,
.feature-card::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: linear-gradient(135deg, #667eea, #764ba2, #f093fb, #f5576c);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    z-index: 1;
    pointer-events: none;
}

.service-card:hover::before {
    width: 1000px;
    height: 1000px;
}

.feature-card:hover::before {
    width: 800px;
    height: 800px;
}

/* Ensure all text elements are above background */
.service-card *,
.feature-card *,
.contact-card * {
    position: relative;
    z-index: 2;
}

/* Enhanced hover effects for better coverage */
.service-card:hover,
.feature-card:hover {
    box-shadow: var(--shadow-xl);
}

.contact-card:hover {
    box-shadow: var(--shadow-xl);
}
</style>

<!-- Hero Section -->
<section class="hero-section py-24 relative">
    <div class="container mx-auto px-4">
        <div class="hero-content text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                Profile Perusahaan
            </h1>
            <p class="text-white/90 text-xl md:text-2xl max-w-4xl mx-auto leading-relaxed">
                Mengenal lebih dekat FazTech Security Solutions, mitra terpercaya dalam solusi keamanan modern
            </p>
            <div class="mt-8">
                <div class="inline-flex items-center px-6 py-3 bg-white/20 backdrop-blur-sm rounded-full text-white border border-white/30">
                    <i class="ri-shield-check-line mr-2 text-xl"></i>
                    <span class="font-semibold">Keamanan Terjamin 24/7</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-20 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div data-aos="fade-right">
                <div class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-primary/10 to-secondary/10 text-primary rounded-full text-sm font-semibold mb-8">
                    <i class="ri-building-line mr-3 text-lg"></i>Tentang FazTech
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-8 leading-tight">
                    Solusi Keamanan Terpercaya 
                    <span class="text-gradient">Sejak 2018</span>
                </h2>
                <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                    FazTech Security Solutions adalah perusahaan spesialis solusi keamanan modern yang menyediakan layanan CCTV, Barrier Gate, Fiber Optic, HDD, dan Access Control. Kami berkomitmen memberikan solusi keamanan terbaik dengan teknologi terkini dan layanan profesional yang didukung tim teknisi berpengalaman dan bersertifikasi.
                </p>

                <!-- Enhanced Stats -->
                <div class="grid grid-cols-2 gap-8">
                    <div class="text-center p-6 bg-gradient-to-br from-primary/5 to-secondary/5 rounded-2xl border border-primary/10">
                        <div class="text-3xl font-bold text-gradient mb-2">150+</div>
                        <div class="text-sm text-gray-600 font-medium">Klien Puas</div>
                    </div>
                    <div class="text-center p-6 bg-gradient-to-br from-secondary/5 to-accent/5 rounded-2xl border border-secondary/10">
                        <div class="text-3xl font-bold text-gradient mb-2">300+</div>
                        <div class="text-sm text-gray-600 font-medium">Proyek Selesai</div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Image -->
            <div data-aos="fade-left">
                <div class="relative">
                    <div class="w-full h-96 bg-gradient-to-br from-primary/20 to-secondary/20 rounded-3xl flex items-center justify-center relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-primary/10 to-secondary/10"></div>
                        <div class="relative z-10 text-center">
                            <div class="w-24 h-24 bg-gradient-to-br from-primary to-secondary rounded-3xl flex items-center justify-center mx-auto mb-6 shadow-glow">
                                <i class="ri-shield-check-line text-4xl text-white"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Keamanan Terjamin</h3>
                            <p class="text-gray-600">Dengan teknologi terkini</p>
                        </div>
                    </div>
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-accent rounded-full animate-pulse"></div>
                    <div class="absolute -bottom-4 -left-4 w-6 h-6 bg-secondary rounded-full animate-pulse" style="animation-delay: 1s;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Visi & Misi</h2>
            <div class="w-32 h-1 bg-gradient-to-r from-primary to-secondary mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Vision -->
            <div class="modern-card p-10 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary/80 rounded-3xl flex items-center justify-center mx-auto mb-8 shadow-glow">
                    <i class="ri-eye-line text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Visi</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Menjadi mitra terpercaya dalam solusi keamanan modern yang inovatif dan berkualitas tinggi, serta menjadi pemimpin pasar dalam industri keamanan di Indonesia.
                </p>
            </div>

            <!-- Mission -->
            <div class="modern-card p-10 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-br from-secondary to-secondary/80 rounded-3xl flex items-center justify-center mx-auto mb-8 shadow-glow">
                    <i class="ri-target-line text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6">Misi</h3>
                <p class="text-gray-600 leading-relaxed text-lg">
                    Memberikan layanan keamanan terbaik dengan teknologi terkini, didukung tim profesional dan komitmen kepuasan pelanggan, serta berkontribusi dalam menciptakan lingkungan yang aman dan nyaman.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Keunggulan Section -->
<section class="py-20 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Keunggulan Kami</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Mengapa memilih FazTech sebagai mitra keamanan Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Technology -->
            <div class="feature-card text-center p-8 relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="icon-container w-16 h-16 mx-auto mb-6 relative z-10">
                    <i class="ri-cpu-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg relative z-10">Teknologi Terdepan</h3>
                <p class="text-sm text-gray-600 relative z-10">AI, HD, dan teknologi keamanan terkini</p>
            </div>

            <!-- Certified Team -->
            <div class="feature-card text-center p-8 relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-container w-16 h-16 mx-auto mb-6 relative z-10">
                    <i class="ri-medal-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg relative z-10">Tim Bersertifikasi</h3>
                <p class="text-sm text-gray-600 relative z-10">Teknisi dengan sertifikasi resmi</p>
            </div>

            <!-- Warranty -->
            <div class="feature-card text-center p-8 relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-container w-16 h-16 mx-auto mb-6 relative z-10">
                    <i class="ri-shield-check-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg relative z-10">Garansi 100%</h3>
                <p class="text-sm text-gray-600 relative z-10">Garansi resmi dan terpercaya</p>
            </div>

            <!-- Support -->
            <div class="feature-card text-center p-8 relative overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-container w-16 h-16 mx-auto mb-6 relative z-10">
                    <i class="ri-customer-service-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg relative z-10">Support 24/7</h3>
                <p class="text-sm text-gray-600 relative z-10">Layanan pelanggan setiap saat</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Layanan Utama</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Solusi keamanan komprehensif untuk rumah dan bisnis Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <!-- CCTV System -->
            <div class="service-card bg-white rounded-3xl p-8 shadow-lg relative overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon w-20 h-20 mx-auto mb-8 relative z-10">
                    <i class="ri-vidicon-line text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6 relative z-10">CCTV System</h3>
                <p class="text-gray-600 mb-6 leading-relaxed relative z-10">Sistem kamera pengawas dengan teknologi HD dan AI untuk monitoring 24/7</p>
                <div class="flex flex-wrap gap-3 relative z-10">
                    <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">HD Quality</span>
                    <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">AI Detection</span>
                    <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">Night Vision</span>
                </div>
            </div>

            <!-- Access Control -->
            <div class="service-card bg-white rounded-3xl p-8 shadow-lg relative overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon w-20 h-20 mx-auto mb-8 relative z-10">
                    <i class="ri-key-line text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6 relative z-10">Access Control</h3>
                <p class="text-gray-600 mb-6 leading-relaxed relative z-10">Sistem kontrol akses pintu dan area dengan teknologi fingerprint dan card</p>
                <div class="flex flex-wrap gap-3 relative z-10">
                    <span class="px-4 py-2 bg-secondary/10 text-secondary rounded-full text-sm font-medium">Fingerprint</span>
                    <span class="px-4 py-2 bg-secondary/10 text-secondary rounded-full text-sm font-medium">Card Access</span>
                    <span class="px-4 py-2 bg-secondary/10 text-secondary rounded-full text-sm font-medium">PIN Code</span>
                </div>
            </div>

            <!-- Barrier Gate -->
            <div class="service-card bg-white rounded-3xl p-8 shadow-lg relative overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon w-20 h-20 mx-auto mb-8 relative z-10">
                    <i class="ri-shield-line text-3xl text-white"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-6 relative z-10">Barrier Gate</h3>
                <p class="text-gray-600 mb-6 leading-relaxed relative z-10">Sistem pembatas akses kendaraan dengan kontrol otomatis</p>
                <div class="flex flex-wrap gap-3 relative z-10">
                    <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Auto Control</span>
                    <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Remote Access</span>
                    <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Safety Sensor</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-white relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Tim Kami</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Tim ahli yang siap memberikan solusi terbaik untuk kebutuhan keamanan Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- Team Member 1 -->
            <div class="modern-card p-8 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-24 h-24 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6 shadow-glow">
                    <i class="ri-user-line text-3xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-3 text-xl">Tim Teknisi</h3>
                <p class="text-gray-600 mb-6">Ahli instalasi dan maintenance</p>
                <div class="flex justify-center space-x-3">
                    <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">CCTV</span>
                    <span class="px-4 py-2 bg-primary/10 text-primary rounded-full text-sm font-medium">Access Control</span>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="modern-card p-8 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-24 h-24 bg-gradient-to-br from-secondary to-primary rounded-full flex items-center justify-center mx-auto mb-6 shadow-glow">
                    <i class="ri-user-line text-3xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-3 text-xl">Tim Konsultan</h3>
                <p class="text-gray-600 mb-6">Spesialis solusi keamanan</p>
                <div class="flex justify-center space-x-3">
                    <span class="px-4 py-2 bg-secondary/10 text-secondary rounded-full text-sm font-medium">Konsultasi</span>
                    <span class="px-4 py-2 bg-secondary/10 text-secondary rounded-full text-sm font-medium">Design</span>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="modern-card p-8 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-24 h-24 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6 shadow-glow">
                    <i class="ri-user-line text-3xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-3 text-xl">Tim Support</h3>
                <p class="text-gray-600 mb-6">Layanan pelanggan 24/7</p>
                <div class="flex justify-center space-x-3">
                    <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Support</span>
                    <span class="px-4 py-2 bg-accent/10 text-accent rounded-full text-sm font-medium">Maintenance</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-gray-100 relative">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">Hubungi kami untuk konsultasi dan informasi lebih lanjut</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Address -->
            <div class="contact-card text-center p-8" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-icon w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="ri-map-pin-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg">Alamat</h3>
                <p class="text-sm text-gray-600">Jl. Raya Utama No. 123, Jakarta Selatan, DKI Jakarta 12345</p>
            </div>

            <!-- Phone -->
            <div class="contact-card text-center p-8" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-icon w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="ri-phone-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg">Telepon</h3>
                <p class="text-sm text-gray-600">021-555-0123</p>
            </div>

            <!-- Email -->
            <div class="contact-card text-center p-8" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-icon w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="ri-mail-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg">Email</h3>
                <p class="text-sm text-gray-600">info@faztech.co.id</p>
            </div>

            <!-- Website -->
            <div class="contact-card text-center p-8" data-aos="fade-up" data-aos-delay="400">
                <div class="contact-icon w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <i class="ri-global-line text-2xl text-white"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-4 text-lg">Website</h3>
                <p class="text-sm text-gray-600">https://faztech.co.id</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="py-20 bg-gradient-to-br from-primary to-secondary relative overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Siap Bekerja Sama?</h2>
            <p class="text-white/90 text-xl mb-10 max-w-3xl mx-auto leading-relaxed">
                Hubungi kami sekarang untuk konsultasi gratis dan dapatkan solusi keamanan terbaik untuk properti Anda
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <a href="https://wa.me/6281234567890" target="_blank" 
                                       class="bg-white text-primary px-10 py-4 rounded-2xl font-semibold hover:bg-gray-100 transition-all duration-300 shadow-lg">
                    <i class="ri-whatsapp-line mr-3 text-xl"></i>Hubungi WhatsApp
                </a>
                <a href="<?= base_url('produk') ?>" 
                                       class="border-2 border-white text-white px-10 py-4 rounded-2xl font-semibold hover:bg-white hover:text-primary transition-all duration-300">
                    <i class="ri-eye-line mr-3 text-xl"></i>Lihat Paket
                </a>
            </div>
        </div>
    </div>
</section>

<script>
// Debug: Pastikan CSS ter-load
console.log('Profile page CSS loaded - Development Mode v2.0');
console.log('Feature cards:', document.querySelectorAll('.feature-card').length);
console.log('Service cards:', document.querySelectorAll('.service-card').length);
console.log('Contact cards:', document.querySelectorAll('.contact-card').length);

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