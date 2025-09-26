<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbel TK Ceria - Belajar Seru untuk Si Kecil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Comic Neue', cursive;
        }
        .title-font {
            font-family: 'Chewy', cursive;
        }
        .photo-frame {
            border: 12px solid #FFD700;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
            transform: rotate(-2deg);
            transition: all 0.3s ease;
        }
        .photo-frame:nth-child(even) {
            transform: rotate(2deg);
            border-color: #FF6B8B;
        }
        .photo-frame:nth-child(3) {
            border-color: #4CD7D0;
        }
        .photo-frame:nth-child(4) {
            border-color: #9C89B8;
        }
        .photo-frame:hover {
            transform: rotate(0deg) scale(1.05);
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body class="bg-gradient-to-b from-blue-100 to-pink-100 min-h-screen">
    <!-- Header -->
    <header class="bg-yellow-400 py-4 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mr-3 shadow-lg">
                    <span class="text-yellow-500 text-2xl font-bold">A</span>
                </div>
                <h1 class="title-font text-2xl text-white">Bimbel TK Ceria</h1>
            </div>
            <nav class="hidden md:block">
                <ul class="flex space-x-6">
                    <li><a href="#home" class="text-white hover:text-pink-600 font-bold">Home</a></li>
                    <li><a href="#tentang" class="text-white hover:text-pink-600 font-bold">Tentang</a></li>
                    <li><a href="#program" class="text-white hover:text-pink-600 font-bold">Program</a></li>
                    <li><a href="#galeri" class="text-white hover:text-pink-600 font-bold">Galeri</a></li>
                    <li><a href="#kontak" class="text-white hover:text-pink-600 font-bold">Kontak</a></li>
                </ul>
            </nav>
            <button class="md:hidden text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="py-12 md:py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h2 class="title-font text-4xl md:text-5xl text-blue-600 mb-4">Belajar Seru untuk Si Kecil</h2>
                <p class="text-gray-700 text-lg mb-6">Tempat dimana anak-anak belajar sambil bermain dengan metode yang menyenangkan dan edukatif.</p>
                <a href="#daftar" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-8 rounded-full shadow-lg inline-flex items-center floating">
                    Daftar Sekarang
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="md:w-1/2 relative">
                <div class="bg-yellow-300 rounded-full w-64 h-64 absolute -top-10 -left-10 opacity-50"></div>
                <div class="bg-blue-300 rounded-full w-48 h-48 absolute bottom-0 right-0 opacity-50"></div>
                <img src="https://placeholder-image-service.onrender.com/image/500x500?prompt=Happy%20children%20playing%20and%20learning%20in%20a%20colorful%20kindergarten%20classroom&id=5070d60a-43b1-4f4c-b17d-ab5d7d1274b0" alt="Anak-anak sedang belajar dan bermain di kelas TK yang colorful" class="relative z-10 rounded-2xl shadow-xl w-full max-w-md mx-auto">
            </div>
        </div>
    </section>

    <!-- Bingkai Foto Section -->
    <section id="galeri" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="title-font text-3xl text-center text-blue-600 mb-2">Momen Seru di Bimbel TK Ceria</h2>
            <p class="text-center text-gray-600 mb-10">Tangkapan kegiatan belajar mengajar yang menyenangkan</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Bingkai Foto 1 -->
                <div class="photo-frame bg-white p-2 rounded-lg">
                    <img src="https://placeholder-image-service.onrender.com/image/300x300?prompt=Children%20doing%20arts%20and%20crafts%20with%20colorful%20materials&id=5070d60a-43b1-4f4c-b17d-ab5d7d1274b0" alt="Anak-anak membuat kerajinan tangan dengan bahan warna-warni" class="w-full h-64 object-cover rounded">
                    <p class="text-center mt-3 font-bold text-pink-600">Kegiatan Seni</p>
                </div>
                
                <!-- Bingkai Foto 2 -->
                <div class="photo-frame bg-white p-2 rounded-lg">
                    <img src="https://placeholder-image-service.onrender.com/image/300x300?prompt=Group%20of%20kids%20playing%20educational%20games%20together&id=5070d60a-43b1-4f4c-b17d-ab5d7d1274b0" alt="Kelompok anak-anak bermain game edukatif bersama" class="w-full h-64 object-cover rounded">
                    <p class="text-center mt-3 font-bold text-blue-600">Permainan Edukatif</p>
                </div>
                
                <!-- Bingkai Foto 3 -->
                <div class="photo-frame bg-white p-2 rounded-lg">
                    <img src="https://placeholder-image-service.onrender.com/image/300x300?prompt=Teacher%20reading%20story%20to%20attentive%20children%20in%20circle&id=5070d60a-43b1-4f4c-b17d-ab5d7d1274b0" alt="Guru membacakan cerita untuk anak-anak yang sedang duduk melingkar" class="w-full h-64 object-cover rounded">
                    <p class="text-center mt-3 font-bold text-green-600">Story Time</p>
                </div>
                
                <!-- Bingkai Foto 4 -->
                <div class="photo-frame bg-white p-2 rounded-lg">
                    <img src="https://placeholder-image-service.onrender.com/image/300x300?prompt=Kids%20singing%20and%20dancing%20in%20a%20music%20class&id=5070d60a-43b1-4f4c-b17d-ab5d7d1274b0" alt="Anak-anak menyanyi dan menari dalam kelas musik" class="w-full h-64 object-cover rounded">
                    <p class="text-center mt-3 font-bold text-purple-600">Kelas Musik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="py-16 bg-gradient-to-r from-blue-100 to-pink-100">
        <div class="container mx-auto px-4">
            <h2 class="title-font text-3xl text-center text-blue-600 mb-2">Program Kami</h2>
            <p class="text-center text-gray-600 mb-10">Berbagai kegiatan menarik untuk perkembangan si kecil</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-2xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Baca Tulis Hitung</h3>
                    <p class="text-gray-600">Belajar membaca, menulis dan berhitung dengan metode fun learning</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-pink-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Seni & Kreativitas</h3>
                    <p class="text-gray-600">Mengembangkan kreativitas melalui seni, musik dan kerajinan tangan</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-400 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-3">Sosialisasi</h3>
                    <p class="text-gray-600">Melatih kemampuan sosialisasi dan kerja sama dalam kelompok</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pendaftaran Section -->
    <section id="daftar" class="py-16 bg-yellow-400">
        <div class="container mx-auto px-4 text-center">
            <h2 class="title-font text-3xl text-white mb-4">Daftarkan Si Kecil Sekarang!</h2>
            <p class="text-white text-lg mb-8 max-w-2xl mx-auto">Bergabunglah dengan Bimbel TK Ceria untuk pengalaman belajar yang menyenangkan dan bermakna bagi buah hati Anda.</p>
            
            <form class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg">
                <div class="mb-4">
                    <input type="text" placeholder="Nama Lengkap Anak" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Nama Orang Tua" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-4">
                    <input type="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-6">
                    <input type="tel" placeholder="Nomor Telepon" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-3 px-8 rounded-full shadow-lg w-full">
                    Daftar Sekarang
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <h2 class="title-font text-2xl mb-2">Bimbel TK Ceria</h2>
                    <p class="text-blue-200">Belajar Seru, Berkembang Optimal</p>
                </div>
                <div class="flex space-x-4">
                    <a href="#" class="bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </a>
                    <a href="#" class="bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </a>
                    <a href="#" class="bg-blue-500 w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="border-t border-blue-500 mt-8 pt-8 text-sm text-center text-blue-200">
                <p>© 2023 Bimbel TK Ceria. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>
