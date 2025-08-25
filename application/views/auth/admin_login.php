<!DOCTYPE html>
<html lang="id">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= $judul ?? 'Admin Login - FazTech' ?></title>

   <!-- Tailwind CSS -->
   <script src="https://cdn.tailwindcss.com"></script>
   <script>
      tailwind.config = {
         theme: {
            extend: {
               colors: {
                  primary: "#0ea5e9",
                  secondary: "#0c4a6e",
               }
            }
         }
      }
   </script>

   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Remix Icon -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet">

   <style>
      body {
         font-family: 'Inter', sans-serif;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
         font-family: 'Poppins', sans-serif;
      }

      /* 3D Cube Animation */
      .cube {
         position: absolute;
         width: 60px;
         height: 60px;
         background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
         border: 1px solid rgba(255, 255, 255, 0.2);
         border-radius: 8px;
         animation: float 6s ease-in-out infinite;
         transform-style: preserve-3d;
         backdrop-filter: blur(10px);
      }

      .cube-1 {
         top: 20%;
         left: 10%;
         animation-delay: 0s;
         transform: rotateX(45deg) rotateY(45deg);
      }

      .cube-2 {
         top: 60%;
         right: 15%;
         animation-delay: 1s;
         transform: rotateX(-30deg) rotateY(60deg);
      }

      .cube-3 {
         bottom: 30%;
         left: 20%;
         animation-delay: 2s;
         transform: rotateX(60deg) rotateY(-45deg);
      }

      .cube-4 {
         top: 40%;
         right: 30%;
         animation-delay: 3s;
         transform: rotateX(-45deg) rotateY(30deg);
      }

      .cube-5 {
         bottom: 20%;
         right: 10%;
         animation-delay: 4s;
         transform: rotateX(30deg) rotateY(-60deg);
      }

      /* 3D Sphere Animation */
      .sphere {
         position: absolute;
         border-radius: 50%;
         background: radial-gradient(circle, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
         border: 1px solid rgba(255, 255, 255, 0.3);
         animation: pulse 4s ease-in-out infinite;
      }

      .sphere-1 {
         width: 80px;
         height: 80px;
         top: 15%;
         right: 25%;
         animation-delay: 0s;
      }

      .sphere-2 {
         width: 120px;
         height: 120px;
         bottom: 15%;
         left: 15%;
         animation-delay: 1.5s;
      }

      .sphere-3 {
         width: 60px;
         height: 60px;
         top: 70%;
         right: 5%;
         animation-delay: 3s;
      }

      /* Geometric Shapes */
      .geometric-shape {
         position: absolute;
         background: linear-gradient(135deg, rgba(14, 165, 233, 0.3), rgba(12, 74, 110, 0.3));
         border: 1px solid rgba(255, 255, 255, 0.2);
         animation: rotate 8s linear infinite;
      }

      .shape-1 {
         width: 40px;
         height: 40px;
         top: 25%;
         left: 5%;
         clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
         animation-delay: 0s;
      }

      .shape-2 {
         width: 50px;
         height: 50px;
         bottom: 25%;
         right: 5%;
         clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
         animation-delay: 2s;
      }

      .shape-3 {
         width: 35px;
         height: 35px;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
         animation-delay: 4s;
      }

      /* Particle Effects */
      .particles {
         position: absolute;
         width: 100%;
         height: 100%;
      }

      .particle {
         position: absolute;
         width: 4px;
         height: 4px;
         background: rgba(255, 255, 255, 0.6);
         border-radius: 50%;
         animation: particle-float 10s linear infinite;
      }

      .particle:nth-child(1) {
         left: 10%;
         animation-delay: 0s;
      }

      .particle:nth-child(2) {
         left: 20%;
         animation-delay: 1s;
      }

      .particle:nth-child(3) {
         left: 30%;
         animation-delay: 2s;
      }

      .particle:nth-child(4) {
         left: 40%;
         animation-delay: 3s;
      }

      .particle:nth-child(5) {
         left: 50%;
         animation-delay: 4s;
      }

      .particle:nth-child(6) {
         left: 60%;
         animation-delay: 5s;
      }

      .particle:nth-child(7) {
         left: 70%;
         animation-delay: 6s;
      }

      .particle:nth-child(8) {
         left: 80%;
         animation-delay: 7s;
      }

      .particle:nth-child(9) {
         left: 90%;
         animation-delay: 8s;
      }

      .particle:nth-child(10) {
         left: 95%;
         animation-delay: 9s;
      }

      /* Gradient Orbs */
      .gradient-orb {
         position: absolute;
         border-radius: 50%;
         filter: blur(20px);
         animation: orb-float 12s ease-in-out infinite;
      }

      .orb-1 {
         width: 200px;
         height: 200px;
         background: radial-gradient(circle, rgba(14, 165, 233, 0.4), transparent);
         top: -100px;
         right: -100px;
         animation-delay: 0s;
      }

      .orb-2 {
         width: 150px;
         height: 150px;
         background: radial-gradient(circle, rgba(12, 74, 110, 0.4), transparent);
         bottom: -75px;
         left: -75px;
         animation-delay: 4s;
      }

      .orb-3 {
         width: 100px;
         height: 100px;
         background: radial-gradient(circle, rgba(59, 130, 246, 0.4), transparent);
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         animation-delay: 8s;
      }

      /* 3D Animations */
      @keyframes float {

         0%,
         100% {
            transform: translateY(0px) rotateX(45deg) rotateY(45deg);
         }

         50% {
            transform: translateY(-20px) rotateX(60deg) rotateY(60deg);
         }
      }

      @keyframes pulse {

         0%,
         100% {
            transform: scale(1);
            opacity: 0.7;
         }

         50% {
            transform: scale(1.1);
            opacity: 1;
         }
      }

      @keyframes rotate {
         0% {
            transform: rotate(0deg);
         }

         100% {
            transform: rotate(360deg);
         }
      }

      @keyframes particle-float {
         0% {
            transform: translateY(100vh);
            opacity: 0;
         }

         10% {
            opacity: 1;
         }

         90% {
            opacity: 1;
         }

         100% {
            transform: translateY(-100px);
            opacity: 0;
         }
      }

      @keyframes orb-float {

         0%,
         100% {
            transform: translate(0, 0) scale(1);
         }

         33% {
            transform: translate(30px, -30px) scale(1.1);
         }

         66% {
            transform: translate(-20px, 20px) scale(0.9);
         }
      }

      /* Enhanced Login Card */
      .login-card {
         backdrop-filter: blur(20px);
         background: rgba(255, 255, 255, 0.1);
         border: 1px solid rgba(255, 255, 255, 0.2);
         box-shadow: 0 25px 45px rgba(0, 0, 0, 0.3);
         transition: all 0.3s ease;
      }

      .login-card:hover {
         box-shadow: 0 30px 50px rgba(0, 0, 0, 0.4);
      }

      /* 3D Input Fields */
      .input-3d {
         background: rgba(255, 255, 255, 0.1);
         border: 1px solid rgba(255, 255, 255, 0.2);
         backdrop-filter: blur(10px);
         transition: all 0.3s ease;
      }

      .input-3d:focus {
         box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
         border-color: rgba(255, 255, 255, 0.5);
      }

      /* 3D Button */
      .btn-3d {
         background: linear-gradient(135deg, #0ea5e9, #0c4a6e);
         border: none;
         transition: all 0.3s ease;
         position: relative;
         overflow: hidden;
      }

      .btn-3d::before {
         content: '';
         position: absolute;
         top: 0;
         left: -100%;
         width: 100%;
         height: 100%;
         background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
         transition: left 0.5s;
      }

      .btn-3d:hover::before {
         left: 100%;
      }

      .btn-3d:hover {
         box-shadow: 0 15px 35px rgba(14, 165, 233, 0.4);
      }

      .btn-3d:active {
         box-shadow: 0 10px 25px rgba(14, 165, 233, 0.4);
      }

      /* Responsive Design */
      @media (max-width: 768px) {

         .cube,
         .sphere,
         .geometric-shape {
            display: none;
         }

         .gradient-orb {
            opacity: 0.5;
         }
      }
   </style>
</head>

<body class="bg-gradient-to-br from-blue-900 via-blue-800 to-primary min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
   <!-- 3D Background Elements -->
   <div class="absolute inset-0 overflow-hidden">
      <!-- Floating 3D Cubes -->
      <div class="cube cube-1"></div>
      <div class="cube cube-2"></div>
      <div class="cube cube-3"></div>
      <div class="cube cube-4"></div>
      <div class="cube cube-5"></div>

      <!-- Animated Spheres -->
      <div class="sphere sphere-1"></div>
      <div class="sphere sphere-2"></div>
      <div class="sphere sphere-3"></div>

      <!-- Geometric Shapes -->
      <div class="geometric-shape shape-1"></div>
      <div class="geometric-shape shape-2"></div>
      <div class="geometric-shape shape-3"></div>

      <!-- Particle Effects -->
      <div class="particles">
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
         <div class="particle"></div>
      </div>

      <!-- Gradient Orbs -->
      <div class="gradient-orb orb-1"></div>
      <div class="gradient-orb orb-2"></div>
      <div class="gradient-orb orb-3"></div>
   </div>

   <!-- Login Card -->
   <div class="relative z-10 w-full max-w-md">
      <!-- Logo Section -->
      <div class="text-center mb-8">
         <div class="inline-flex items-center justify-center w-16 h-16 bg-white/10 backdrop-blur-sm rounded-2xl mb-4">
            <img src="<?= base_url('assets/img/faztech.png') ?>" alt="FazTech Logo" class="w-10 h-10">
         </div>
         <h1 class="text-2xl font-bold text-white mb-2">FazTech</h1>
         <p class="text-white/70 text-sm">Administrator Panel</p>
      </div>

      <!-- Login Form -->
      <div class="login-card rounded-2xl p-8">
         <!-- Flash Messages -->
         <?php if ($this->session->flashdata('sukses')): ?>
            <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg shadow-lg">
               <div class="flex items-center">
                  <i class="ri-checkbox-circle-line mr-2"></i>
                  <span><?= $this->session->flashdata('sukses') ?></span>
               </div>
            </div>
         <?php endif; ?>

         <?php if ($this->session->flashdata('error')): ?>
            <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg shadow-lg">
               <div class="flex items-center">
                  <i class="ri-error-warning-line mr-2"></i>
                  <span><?= $this->session->flashdata('error') ?></span>
               </div>
            </div>
         <?php endif; ?>

         <h2 class="text-xl font-bold text-white mb-6 text-center">Masuk ke Dashboard</h2>

         <?= form_open('admin', ['class' => 'space-y-6']) ?>
         <div>
            <label for="email" class="block text-sm font-medium text-white/90 mb-2">Email</label>
            <div class="relative">
               <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="ri-mail-line text-white/50"></i>
               </div>
               <input type="email" id="email" name="email" required
                  class="input-3d w-full pl-10 pr-4 py-3 rounded-xl text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent"
                  placeholder="admin@faztech.com"
                  value="<?= set_value('email') ?>">
            </div>
            <?php if (form_error('email')): ?>
               <p class="mt-1 text-sm text-red-300"><?= form_error('email') ?></p>
            <?php endif; ?>
         </div>

         <div>
            <label for="kata_sandi" class="block text-sm font-medium text-white/90 mb-2">Kata Sandi</label>
            <div class="relative">
               <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                  <i class="ri-lock-line text-white/50"></i>
               </div>
               <input type="password" id="kata_sandi" name="kata_sandi" required
                  class="input-3d w-full pl-10 pr-12 py-3 rounded-xl text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-white/50 focus:border-transparent"
                  placeholder="••••••••">
               <button type="button" id="togglePassword" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                  <i class="ri-eye-line text-white/50 hover:text-white/70 transition-colors"></i>
               </button>
            </div>
            <?php if (form_error('kata_sandi')): ?>
               <p class="mt-1 text-sm text-red-300"><?= form_error('kata_sandi') ?></p>
            <?php endif; ?>
         </div>

         <button type="submit"
            class="btn-3d w-full text-white py-3 px-6 rounded-xl font-semibold">
            <i class="ri-login-box-line mr-2"></i>
            Masuk ke Dashboard
         </button>
         <?= form_close() ?>

         <!-- Back to Home -->
         <div class="mt-6 text-center">
            <a href="<?= base_url() ?>" class="text-white/70 hover:text-white transition-colors text-sm inline-flex items-center">
               <i class="ri-arrow-left-line mr-1"></i>
               Kembali ke Beranda
            </a>
         </div>
      </div>

      <!-- Security Notice -->
      <div class="mt-6 text-center">
         <p class="text-white/50 text-xs">
            <i class="ri-shield-check-line mr-1"></i>
            Akses terbatas untuk administrator
         </p>
      </div>
   </div>

   <script>
      // Toggle password visibility
      document.getElementById('togglePassword').addEventListener('click', function() {
         const passwordInput = document.getElementById('kata_sandi');
         const icon = this.querySelector('i');

         if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.className = 'ri-eye-off-line text-white/50 hover:text-white/70 transition-colors';
         } else {
            passwordInput.type = 'password';
            icon.className = 'ri-eye-line text-white/50 hover:text-white/70 transition-colors';
         }
      });
      // Auto-hide flash messages
      setTimeout(function() {
         const flashMessages = document.querySelectorAll('[class*="bg-green-100"], [class*="bg-red-100"]');
         flashMessages.forEach(function(message) {
            message.style.opacity = '0';
            setTimeout(function() {
               message.remove();
            }, 300);
         });
      }, 5000);
   </script>
</body>

</html>