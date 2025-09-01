<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Babipedia - Spesialis Daging Babi Berkualitas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #ec4899;
            --primary-dark: #db2777;
            --secondary: #fdf2f8;
            --text: #1f2937;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text);
            background: linear-gradient(to bottom, #fdf2f8, #fce7f3);
            min-height: 100vh;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
        }

        /* Animasi sederhana */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        /* Card style */
        .card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
        }

        /* Button styles */
        .btn {
            background: var(--primary);
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(236, 72, 153, 0.4);
        }

        /* Mobile menu */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .mobile-menu.open {
            max-height: 500px;
        }

        /* Active navigation */
        .nav-active {
            color: var(--primary);
            font-weight: 600;
        }
    </style>
</head>

<body class="antialiased">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-sm shadow-sm py-3 px-4">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <a href="#beranda" class="font-bold text-2xl text-pink-600">Babipedia</a>

            <div class="hidden md:flex gap-6 items-center">
                <a class="nav-link cursor-pointer hover:text-pink-600 transition-colors"
                    data-target="beranda">Beranda</a>
                <a class="nav-link cursor-pointer hover:text-pink-600 transition-colors" data-target="produk">Produk</a>
                <a class="nav-link cursor-pointer hover:text-pink-600 transition-colors" data-target="resep">Resep</a>
                <a class="nav-link cursor-pointer hover:text-pink-600 transition-colors"
                    data-target="tentang">Tentang</a>
                <a class="nav-link cursor-pointer hover:text-pink-600 transition-colors" data-target="kontak">Kontak</a>
                <button class="btn ml-3">Pesan Sekarang</button>
            </div>

            <button id="mobile-open" class="md:hidden text-2xl p-2 rounded-lg bg-pink-100 text-pink-600">
                ☰
            </button>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="mobile-menu md:hidden bg-white px-4">
            <div class="flex flex-col gap-3 py-4">
                <a class="nav-link py-2 hover:text-pink-600 transition-colors" data-target="beranda">Beranda</a>
                <a class="nav-link py-2 hover:text-pink-600 transition-colors" data-target="produk">Produk</a>
                <a class="nav-link py-2 hover:text-pink-600 transition-colors" data-target="resep">Resep</a>
                <a class="nav-link py-2 hover:text-pink-600 transition-colors" data-target="tentang">Tentang</a>
                <a class="nav-link py-2 hover:text-pink-600 transition-colors" data-target="kontak">Kontak</a>
                <button class="btn mt-2 w-full">Pesan Sekarang</button>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="pt-20">
        <!-- Beranda/Hero Section -->
        <section id="beranda" class="min-h-screen flex items-center justify-center py-12 px-4">
            <div class="max-w-4xl mx-auto text-center fade-in">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 text-pink-700">Spesialis Daging Babi Berkualitas</h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-2xl mx-auto">
                    Menyediakan daging babi segar dan olahan berkualitas tinggi untuk kebutuhan rumah tangga, acara
                    adat, dan perayaan.
                </p>
                <button class="btn text-lg px-8 py-3">Lihat Produk</button>

                <div class="mt-16 grid grid-cols-3 gap-8 max-w-2xl mx-auto">
                    <div>
                        <div class="text-2xl font-bold text-pink-600">20+</div>
                        <div class="text-sm text-gray-600">Jenis Potongan</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-pink-600">100%</div>
                        <div class="text-sm text-gray-600">Kualitas Terjamin</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-pink-600">5+</div>
                        <div class="text-sm text-gray-600">Tahun Pengalaman</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Produk Section -->
        <section id="produk" class="py-16 bg-white px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Produk Unggulan</h2>
                    <p class="text-gray-600 max-w-xl mx-auto">
                        Berbagai pilihan daging babi segar dan olahan dengan kualitas terbaik
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="card fade-in">
                        <h3 class="font-semibold text-xl mb-3">Daging Babi Muda</h3>
                        <p class="text-gray-600">Daging babi muda dengan tekstur lembut dan rasa yang gurih, perfect
                            untuk berbagai masakan tradisional.</p>
                        <div class="mt-4 text-pink-600 font-bold">Rp 85.000 / kg</div>
                        <a href="#" class="inline-block mt-4 text-pink-600 font-medium">Pesan Sekarang →</a>
                    </div>

                    <div class="card fade-in">
                        <h3 class="font-semibold text-xl mb-3">Daging Babi Untuk Nasi Tumpeng</h3>
                        <p class="text-gray-600">Khusus untuk acara syukuran dan perayaan, dengan potongan khusus untuk
                            nasi tumpeng.</p>
                        <div class="mt-4 text-pink-600 font-bold">Rp 120.000 / paket</div>
                        <a href="#" class="inline-block mt-4 text-pink-600 font-medium">Pesan Sekarang →</a>
                    </div>

                    <div class="card fade-in">
                        <h3 class="font-semibold text-xl mb-3">Daging Babi Fillet</h3>
                        <p class="text-gray-600">Potongan daging tanpa lemak dan tulang, cocok untuk steak, barbecue,
                            atau masakan modern.</p>
                        <div class="mt-4 text-pink-600 font-bold">Rp 95.000 / kg</div>
                        <a href="#" class="inline-block mt-4 text-pink-600 font-medium">Pesan Sekarang →</a>
                    </div>

                    <div class="card fade-in">
                        <h3 class="font-semibold text-xl mb-3">Olahan Daging Babi</h3>
                        <p class="text-gray-600">Sosis, bakso, dan ham dengan resep khusus Babipedia, tanpa pengawet dan
                            bahan kimia.</p>
                        <div class="mt-4 text-pink-600 font-bold">Mulai Rp 45.000</div>
                        <a href="#" class="inline-block mt-4 text-pink-600 font-medium">Pesan Sekarang →</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Resep Section -->
        <section id="resep" class="py-16 bg-pink-50 px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Resep & Inspirasi</h2>
                    <p class="text-gray-600 max-w-xl mx-auto">
                        Ide memasak dan resep spesial dengan daging babi
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="fade-in">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md p-6">
                            <h3 class="font-semibold text-xl mb-4">Nasi Tumpeng dengan Daging Babi</h3>
                            <p class="text-gray-600 mb-4">Cara menyiapkan nasi tumpeng syukuran dengan lauk daging babi
                                spesial.</p>
                            <ul class="list-disc list-inside text-gray-600 text-sm space-y-2 mb-4">
                                <li>Pilih daging babi muda untuk hasil terbaik</li>
                                <li>Marinate dengan bumbu tradisional minimal 2 jam</li>
                                <li>Panggang dengan suhu tepat untuk mendapatkan tekstur sempurna</li>
                            </ul>
                            <a href="#" class="text-pink-600 font-medium">Baca resep lengkap →</a>
                        </div>
                    </div>

                    <div class="fade-in">
                        <div class="bg-white rounded-2xl overflow-hidden shadow-md p-6">
                            <h3 class="font-semibold text-xl mb-4">Tips Memilih Daging Babi Berkualitas</h3>
                            <p class="text-gray-600 mb-4">Panduan memilih daging babi segar untuk masakan Anda.</p>
                            <ul class="list-disc list-inside text-gray-600 text-sm space-y-2 mb-4">
                                <li>Warna daging should be pink cerah, not pucat</li>
                                <li>Tekstur harus kenyal dan tidak lembek</li>
                                <li>Aroma segar, tidak berbau asam atau anyir</li>
                                <li>Lemak berwarna putih, tidak kekuningan</li>
                            </ul>
                            <a href="#" class="text-pink-600 font-medium">Pelajari lebih lanjut →</a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8 fade-in">
                    <button class="btn">Lihat Semua Resep</button>
                </div>
            </div>
        </section>

        <!-- Tentang Section -->
        <section id="tentang" class="py-16 bg-white px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 fade-in">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Tentang Babipedia</h2>
                    <p class="text-gray-600 max-w-xl mx-auto">
                        Mengapa memilih produk daging babi dari kami
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="fade-in">
                        <div class="bg-pink-100 rounded-2xl p-6 h-full">
                            <h3 class="font-semibold text-xl mb-4">Kualitas Terjamin</h3>
                            <p class="text-gray-600">Kami hanya menyediakan daging babi dengan kualitas terbaik,
                                dipilih melalui proses seleksi ketat untuk memastikan kesegaran dan cita rasa optimal.
                            </p>
                        </div>
                    </div>

                    <div class="fade-in">
                        <div class="bg-pink-100 rounded-2xl p-6 h-full">
                            <h3 class="font-semibold text-xl mb-4">Pengalaman Bertahun-tahun</h3>
                            <p class="text-gray-600">Dengan pengalaman lebih dari 5 tahun dalam industri daging babi,
                                kami memahami kebutuhan pelanggan dan menyediakan produk yang tepat.</p>
                        </div>
                    </div>

                    <div class="fade-in">
                        <div class="bg-pink-100 rounded-2xl p-6 h-full">
                            <h3 class="font-semibold text-xl mb-4">Layanan Lengkap</h3>
                            <p class="text-gray-600">Mulai dari daging segar, olahan, hingga konsultasi memasak, kami
                                menyediakan layanan lengkap untuk semua kebutuhan daging babi Anda.</p>
                        </div>
                    </div>

                    <div class="fade-in">
                        <div class="bg-pink-100 rounded-2xl p-6 h-full">
                            <h3 class="font-semibold text-xl mb-4">Untuk Semua Acara</h3>
                            <p class="text-gray-600">Produk kami cocok untuk konsumsi harian, acara adat, perayaan, dan
                                syukuran. Termasuk paket khusus untuk nasi tumpeng dan acara tradisional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontak Section -->
        <section id="kontak" class="py-16 bg-pink-50 px-4">
            <div class="max-w-3xl mx-auto text-center">
                <div class="mb-12 fade-in">
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Hubungi Kami</h2>
                    <p class="text-gray-600 max-w-xl mx-auto">
                        Pesan sekarang atau konsultasi kebutuhan daging babi Anda
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-8 text-left">
                    <div class="card fade-in">
                        <h3 class="font-semibold text-xl mb-4">Pemesanan</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="text-pink-600 mr-2">•</span> WhatsApp: 0812-3456-7890
                            </li>
                            <li class="flex items-center">
                                <span class="text-pink-600 mr-2">•</span> Telepon: (021) 1234-5678
                            </li>
                            <li class="flex items-center">
                                <span class="text-pink-600 mr-2">•</span> Email: order@babipedia.com
                            </li>
                        </ul>
                    </div>

                    <div class="card fade-in">
                        <h3 class="font-semibold text-xl mb-4">Layanan</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="text-pink-600 mr-2">•</span> Pengiriman cepat
                            </li>
                            <li class="flex items-center">
                                <span class="text-pink-600 mr-2">•</span> Konsultasi gratis
                            </li>
                            <li class="flex items-center">
                                <span class="text-pink-600 mr-2">•</span> Paket khusus acara
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card fade-in">
                    <h3 class="font-semibold text-xl mb-4">Kunjungi Lokasi Kami</h3>
                    <p class="text-gray-600 mb-4">Jl. Raya Babi No. 123, Jakarta Selatan</p>
                    <p class="text-gray-600 text-sm">Buka Senin - Sabtu: 08.00 - 17.00 WIB</p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-12 bg-white border-t border-gray-100 px-4">
            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 mb-8">
                    <div>
                        <a href="#beranda" class="font-bold text-2xl text-pink-600 block mb-4">Babipedia</a>
                        <p class="text-gray-600 text-sm">
                            Spesialis daging babi berkualitas untuk rumah tangga, acara adat, dan perayaan.
                        </p>
                    </div>

                    <div>
                        <h3 class="font-semibold mb-4">Tautan Cepat</h3>
                        <ul class="space-y-2">
                            <li><a href="#produk" class="text-gray-600 hover:text-pink-600 text-sm">Produk</a></li>
                            <li><a href="#resep" class="text-gray-600 hover:text-pink-600 text-sm">Resep</a></li>
                            <li><a href="#tentang" class="text-gray-600 hover:text-pink-600 text-sm">Tentang Kami</a>
                            </li>
                            <li><a href="#kontak" class="text-gray-600 hover:text-pink-600 text-sm">Kontak</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-semibold mb-4">Kontak</h3>
                        <ul class="space-y-2">
                            <li class="text-gray-600 text-sm">WhatsApp: 0812-3456-7890</li>
                            <li class="text-gray-600 text-sm">Telepon: (021) 1234-5678</li>
                            <li class="text-gray-600 text-sm">Email: info@babipedia.com</li>
                        </ul>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-200 text-center text-gray-500 text-sm">
                    © 2023 Babipedia — Spesialis Daging Babi Berkualitas
                </div>
            </div>
        </footer>
    </main>

    <script>
        // Mobile menu functionality
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileOpen = document.getElementById('mobile-open');

        mobileOpen.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
        });

        // Smooth scrolling
        const links = document.querySelectorAll('.nav-link');

        function scrollToId(id) {
            const el = document.getElementById(id);
            if (!el) return;
            const offsetTop = el.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }

        links.forEach((a) => {
            a.addEventListener('click', (e) => {
                e.preventDefault();
                const target = a.dataset.target;
                if (target) {
                    scrollToId(target);
                    mobileMenu.classList.remove('open');
                }
            });
        });

        // Add fade-in animation to elements when they come into view
        const fadeElements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, {
            threshold: 0.1
        });

        fadeElements.forEach(el => {
            el.style.opacity = 0;
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    </script>
</body>

</html>
