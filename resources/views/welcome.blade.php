<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Babipedia – Info Babi, Artikel, & Direktori Peternak</title>
    <meta name="description"
        content="Babipedia: artikel edukasi babi, ras, perawatan, pakan, dan direktori peternak di Indonesia." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0b0c10;
            /* dark charcoal */
            --card: #111218;
            --muted: #1a1c24;
            --text: #e6e8eb;
            --sub: #aeb4bf;
            --brand: #ff5470;
            /* accent */
            --brand-2: #5ce1e6;
            /* secondary accent */
            --ring: rgba(92, 225, 230, .45);
            --radius: 20px;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, #0b0c10 0%, #0d1017 100%);
            color: var(--text);
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, 'Helvetica Neue', Arial, 'Apple Color Emoji', 'Segoe UI Emoji';
        }

        a {
            color: inherit;
            text-decoration: none
        }

        img {
            max-width: 100%;
            display: block
        }

        .container {
            width: min(1200px, 92%);
            margin-inline: auto
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            background: var(--brand);
            color: #fff;
            padding: .8rem 1.1rem;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: .2s transform ease, .2s box-shadow ease;
            box-shadow: 0 8px 30px rgba(255, 84, 112, .25)
        }

        .btn:hover {
            transform: translateY(-2px)
        }

        .btn.alt {
            background: transparent;
            border: 1px solid #2a2e39;
            color: var(--text)
        }

        .tag {
            display: inline-block;
            padding: .25rem .6rem;
            border: 1px solid #2a2e39;
            border-radius: 999px;
            color: var(--sub);
            font-size: .8rem
        }

        /* NAVBAR */
        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(11, 12, 16, .5);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(255, 255, 255, .05)
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 0
        }

        .brand {
            display: flex;
            align-items: center;
            gap: .7rem;
            font-weight: 700
        }

        .brand-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--brand), var(--brand-2));
            box-shadow: 0 0 0 6px rgba(92, 225, 230, .1)
        }

        .nav-links {
            display: flex;
            gap: 1.2rem
        }

        .nav-links a {
            color: var(--sub);
            font-weight: 600
        }

        .nav-cta {
            display: flex;
            gap: .8rem;
            align-items: center
        }

        .hamburger {
            display: none;
            background: transparent;
            border: 0;
            color: var(--text);
            font-size: 1.6rem
        }

        /* MOBILE MENU */
        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
            background: var(--card);
            border: 1px solid #232736;
            border-radius: 12px;
            margin-top: .6rem
        }

        /* HERO */
        .hero {
            padding: 64px 0 32px
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 28px;
            align-items: center
        }

        .headline {
            font-size: clamp(28px, 4vw, 44px);
            line-height: 1.12;
            margin: 0 0 10px
        }

        .subhead {
            color: var(--sub);
            font-size: clamp(14px, 1.7vw, 18px);
            margin: 0 0 22px
        }

        .hero-card {
            background: radial-gradient(80% 120% at 0% 0%, rgba(92, 225, 230, .15) 0%, rgba(17, 18, 24, 1) 60%);
            border: 1px solid #232736;
            border-radius: var(--radius);
            padding: 22px
        }

        /* SEARCH */
        .search {
            display: flex;
            gap: .6rem;
            background: var(--card);
            border: 1px solid #232736;
            border-radius: 14px;
            padding: .5rem
        }

        .search input {
            flex: 1;
            background: transparent;
            border: 0;
            outline: 0;
            color: var(--text);
            font-size: 1rem;
            padding: .6rem
        }

        /* CARDS */
        .section {
            padding: 34px 0
        }

        .section-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 16px
        }

        .section h2 {
            font-size: 1.6rem;
            margin: 0
        }

        .grid {
            display: grid;
            gap: 16px
        }

        .grid.cards-3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .grid.cards-4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .card {
            background: var(--card);
            border: 1px solid #232736;
            border-radius: 16px;
            overflow: hidden;
            transition: .2s transform ease, .2s box-shadow ease
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .35)
        }

        .card .body {
            padding: 14px
        }

        .meta {
            display: flex;
            gap: .6rem;
            align-items: center;
            color: var(--sub);
            font-size: .9rem
        }

        .title {
            margin: .4rem 0 .2rem;
            font-size: 1.05rem
        }

        .excerpt {
            color: var(--sub);
            font-size: .95rem;
            line-height: 1.5
        }

        /* LISTS */
        .list {
            display: grid;
            gap: 10px
        }

        .list a {
            display: flex;
            gap: .8rem;
            align-items: center;
            padding: 10px 12px;
            background: var(--muted);
            border: 1px solid #232736;
            border-radius: 12px;
            color: var(--text)
        }

        .list a:hover {
            border-color: #2f3444
        }

        /* BREEDERS */
        .breeder {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--brand), var(--brand-2))
        }

        /* CTA BANNER */
        .cta {
            margin-top: 16px;
            background: linear-gradient(135deg, rgba(92, 225, 230, .16), rgba(255, 84, 112, .12));
            border: 1px solid #233041;
            border-radius: 18px;
            padding: 16px
        }

        /* FOOTER */
        footer {
            margin-top: 40px;
            border-top: 1px solid #232736;
            padding: 26px 0;
            color: var(--sub)
        }

        /* RESPONSIVE */
        @media (max-width: 980px) {
            .hero-grid {
                grid-template-columns: 1fr
            }

            .nav-links {
                display: none
            }

            .hamburger {
                display: block
            }

            .grid.cards-3 {
                grid-template-columns: repeat(2, 1fr)
            }

            .grid.cards-4 {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media (max-width: 560px) {

            .grid.cards-3,
            .grid.cards-4 {
                grid-template-columns: 1fr
            }

            .section-head {
                flex-direction: column;
                gap: .6rem;
                align-items: flex-start
            }
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="nav">
        <div class="container nav-inner">
            <a class="brand" href="#">
                <span class="brand-dot"></span>
                <span>Babipedia</span>
            </a>
            <div class="nav-links" id="navLinks">
                <a href="#artikel">Artikel</a>
                <a href="#ras">Ras</a>
                <a href="#pakan">Pakan</a>
                <a href="#peternak">Direktori Peternak</a>
                <a href="#tentang">Tentang</a>
            </div>
            <div class="nav-cta">
                <a class="btn alt" href="#cari">Cari</a>
                <button class="hamburger" id="hamburger" aria-label="Buka menu">☰</button>
            </div>
        </div>
        <div class="container">
            <div class="mobile-menu" id="mobileMenu">
                <a href="#artikel">Artikel</a>
                <a href="#ras">Ras</a>
                <a href="#pakan">Pakan</a>
                <a href="#peternak">Direktori Peternak</a>
                <a href="#tentang">Tentang</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero container">
        <div class="hero-grid">
            <div>
                <div class="tag">Edukasi & Direktori</div>
                <h1 class="headline">Semua tentang babi di satu tempat: edukasi, ras, perawatan, dan direktori peternak.
                </h1>
                <p class="subhead">Bangun pengetahuan peternakan babi dari dasar hingga mahir. Temukan artikel
                    tepercaya, panduan pakan, kesehatan, dan hubungi peternak terdekat.</p>
                <form class="search" id="cari">
                    <input type="search" placeholder="Cari artikel, ras, pakan…" aria-label="Cari" />
                    <button type="submit" class="btn">Cari</button>
                </form>
                <div class="cta">
                    <strong>Baru di Babipedia?</strong> Mulai dari <a href="#artikel"
                        style="text-decoration:underline">Panduan Dasar</a> atau lihat <a href="#peternak"
                        style="text-decoration:underline">Direktori Peternak</a>.
                </div>
            </div>
            <div class="hero-card">
                <img src="https://images.unsplash.com/photo-1550630997-cd98f5f6f97a?q=80&w=1400&auto=format&fit=crop"
                    alt="Ilustrasi peternakan babi" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover" />
                <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:10px">
                    <div class="card" style="padding:12px;text-align:center">
                        <div class="title">50+ Artikel</div>
                        <div class="subhead">Perawatan • Pakan</div>
                    </div>
                    <div class="card" style="padding:12px;text-align:center">
                        <div class="title">15 Ras</div>
                        <div class="subhead">Ciri • Kebutuhan</div>
                    </div>
                    <div class="card" style="padding:12px;text-align:center">
                        <div class="title">Direktori</div>
                        <div class="subhead">Peternak Lokal</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ARTIKEL TERBARU -->
    <section class="section container" id="artikel">
        <div class="section-head">
            <h2>Artikel Terbaru</h2>
            <a class="btn alt" href="#">Lihat semua</a>
        </div>
        <div class="grid cards-3">
            <!-- Card 1 -->
            <article class="card">
                <img src="https://images.unsplash.com/photo-1540317580389-5dd6f6ffa8e2?q=80&w=1200&auto=format&fit=crop"
                    alt="Pakan babi" style="aspect-ratio:16/10;object-fit:cover" />
                <div class="body">
                    <div class="meta"><span class="tag">Pakan</span><span>•</span><span>5 menit baca</span></div>
                    <h3 class="title">Menyusun Ransum Pakan Efisien untuk Pertumbuhan</h3>
                    <p class="excerpt">Prinsip FCR, komposisi bahan pakan lokal, dan tips penghematan biaya tanpa
                        mengorbankan performa.</p>
                </div>
            </article>
            <!-- Card 2 -->
            <article class="card">
                <img src="https://images.unsplash.com/photo-1616778953657-4c0a5677a5ce?q=80&w=1200&auto=format&fit=crop"
                    alt="Kesehatan babi" style="aspect-ratio:16/10;object-fit:cover" />
                <div class="body">
                    <div class="meta"><span class="tag">Kesehatan</span><span>•</span><span>7 menit baca</span>
                    </div>
                    <h3 class="title">Deteksi Dini Penyakit Umum pada Babi</h3>
                    <p class="excerpt">Kenali gejala respirasi, pencernaan, dan langkah biosekuriti sederhana yang bisa
                        Anda terapkan.</p>
                </div>
            </article>
            <!-- Card 3 -->
            <article class="card">
                <img src="https://images.unsplash.com/photo-1596098293363-61b7483b8f3a?q=80&w=1200&auto=format&fit=crop"
                    alt="Kandang babi" style="aspect-ratio:16/10;object-fit:cover" />
                <div class="body">
                    <div class="meta"><span class="tag">Manajemen</span><span>•</span><span>6 menit baca</span>
                    </div>
                    <h3 class="title">Desain Kandang Nyaman: Ventilasi & Kebersihan</h3>
                    <p class="excerpt">Tata letak kandang, aliran udara, serta rutinitas pembersihan agar ternak sehat
                        dan produktif.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- RAS / KATEGORI -->
    <section class="section container" id="ras">
        <div class="section-head">
            <h2>Ras & Kategori</h2>
            <a class="btn alt" href="#">Lihat semua ras</a>
        </div>
        <div class="grid cards-4">
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1554324525-3fdfb5d7b3ec?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Landrace" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Landrace</h3>
                    <div class="meta">Ras Eropa • Pertumbuhan cepat</div>
                </div>
            </a>
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1563273811-5a5f96365e49?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Duroc" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Duroc</h3>
                    <div class="meta">Kualitas daging • Tahan</div>
                </div>
            </a>
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1585506942812-5cfabea0bf1a?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Yorkshire" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Yorkshire</h3>
                    <div class="meta">Produktivitas induk</div>
                </div>
            </a>
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1514924013411-cbf25faa35bb?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Hampshire" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Hampshire</h3>
                    <div class="meta">Feed conversion baik</div>
                </div>
            </a>
        </div>
    </section>

    <!-- DIREKTORI PETERNAK -->
    <section class="section container" id="peternak">
        <div class="section-head">
            <h2>Direktori Peternak</h2>
            <a class="btn alt" href="#">Ajukan listing</a>
        </div>
        <div class="grid cards-3">
            <div class="card">
                <div class="body breeder">
                    <div class="avatar"></div>
                    <div>
                        <div class="title">Suka Maju Farm</div>
                        <div class="meta">Sunggal, Medan • 0812-xxxx-xxxx</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body breeder">
                    <div class="avatar"></div>
                    <div>
                        <div class="title">Harapan Jaya</div>
                        <div class="meta">Kab. Bandung • 0821-xxxx-xxxx</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body breeder">
                    <div class="avatar"></div>
                    <div>
                        <div class="title">Ternak Sejahtera</div>
                        <div class="meta">Sidoarjo • 0852-xxxx-xxxx</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="section container" id="newsletter">
        <div class="card" style="padding:18px;display:grid;gap:10px">
            <div class="section-head" style="margin:0">
                <h2 style="margin:0">Dapatkan update artikel</h2>
                <span class="tag">Gratis</span>
            </div>
            <form class="search" onsubmit="event.preventDefault(); alert('Terima kasih!');">
                <input type="email" placeholder="Email kamu" required />
                <button class="btn" type="submit">Langganan</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container" style="display:grid;gap:14px">
            <div style="display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap">
                <div class="brand"><span class="brand-dot"></span><span>Babipedia</span></div>
                <div style="display:flex;gap:1rem;color:var(--sub)">
                    <a href="#tentang">Tentang</a>
                    <a href="#kontak">Kontak</a>
                    <a href="#kebijakan">Kebijakan</a>
                </div>
            </div>
            <small>© <span id="year"></span> Babipedia. Konten bersifat edukasi. Gunakan sebagai referensi, bukan
                pengganti konsultasi dokter hewan.</small>
        </div>
    </footer>

    <script>
        // Tahun dinamis di footer
        document.getElementById('year').textContent = new Date().getFullYear();

        // Toggle mobile menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        hamburger?.addEventListener('click', () => {
            const show = mobileMenu.style.display === 'flex';
            mobileMenu.style.display = show ? 'none' : 'flex';
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const id = a.getAttribute('href').slice(1);
                const el = document.getElementById(id);
                if (el) {
                    e.preventDefault();
                    window.scrollTo({
                        top: el.getBoundingClientRect().top + window.scrollY - 70,
                        behavior: 'smooth'
                    });
                    if (mobileMenu.style.display === 'flex') mobileMenu.style.display = 'none';
                }
            })
        });
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Babipedia – Info Babi, Artikel, & Direktori Peternak</title>
    <meta name="description"
        content="Babipedia: artikel edukasi babi, ras, perawatan, pakan, dan direktori peternak di Indonesia." />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0b0c10;
            /* dark charcoal */
            --card: #111218;
            --muted: #1a1c24;
            --text: #e6e8eb;
            --sub: #aeb4bf;
            --brand: #ff5470;
            /* accent */
            --brand-2: #5ce1e6;
            /* secondary accent */
            --ring: rgba(92, 225, 230, .45);
            --radius: 20px;
        }

        * {
            box-sizing: border-box
        }

        html,
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, #0b0c10 0%, #0d1017 100%);
            color: var(--text);
            font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, 'Helvetica Neue', Arial, 'Apple Color Emoji', 'Segoe UI Emoji';
        }

        a {
            color: inherit;
            text-decoration: none
        }

        img {
            max-width: 100%;
            display: block
        }

        .container {
            width: min(1200px, 92%);
            margin-inline: auto
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .6rem;
            background: var(--brand);
            color: #fff;
            padding: .8rem 1.1rem;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: .2s transform ease, .2s box-shadow ease;
            box-shadow: 0 8px 30px rgba(255, 84, 112, .25)
        }

        .btn:hover {
            transform: translateY(-2px)
        }

        .btn.alt {
            background: transparent;
            border: 1px solid #2a2e39;
            color: var(--text)
        }

        .tag {
            display: inline-block;
            padding: .25rem .6rem;
            border: 1px solid #2a2e39;
            border-radius: 999px;
            color: var(--sub);
            font-size: .8rem
        }

        /* NAVBAR */
        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(11, 12, 16, .5);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(255, 255, 255, .05)
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 0
        }

        .brand {
            display: flex;
            align-items: center;
            gap: .7rem;
            font-weight: 700
        }

        .brand-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--brand), var(--brand-2));
            box-shadow: 0 0 0 6px rgba(92, 225, 230, .1)
        }

        .nav-links {
            display: flex;
            gap: 1.2rem
        }

        .nav-links a {
            color: var(--sub);
            font-weight: 600
        }

        .nav-cta {
            display: flex;
            gap: .8rem;
            align-items: center
        }

        .hamburger {
            display: none;
            background: transparent;
            border: 0;
            color: var(--text);
            font-size: 1.6rem
        }

        /* MOBILE MENU */
        .mobile-menu {
            display: none;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
            background: var(--card);
            border: 1px solid #232736;
            border-radius: 12px;
            margin-top: .6rem
        }

        /* HERO */
        .hero {
            padding: 64px 0 32px
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 28px;
            align-items: center
        }

        .headline {
            font-size: clamp(28px, 4vw, 44px);
            line-height: 1.12;
            margin: 0 0 10px
        }

        .subhead {
            color: var(--sub);
            font-size: clamp(14px, 1.7vw, 18px);
            margin: 0 0 22px
        }

        .hero-card {
            background: radial-gradient(80% 120% at 0% 0%, rgba(92, 225, 230, .15) 0%, rgba(17, 18, 24, 1) 60%);
            border: 1px solid #232736;
            border-radius: var(--radius);
            padding: 22px
        }

        /* SEARCH */
        .search {
            display: flex;
            gap: .6rem;
            background: var(--card);
            border: 1px solid #232736;
            border-radius: 14px;
            padding: .5rem
        }

        .search input {
            flex: 1;
            background: transparent;
            border: 0;
            outline: 0;
            color: var(--text);
            font-size: 1rem;
            padding: .6rem
        }

        /* CARDS */
        .section {
            padding: 34px 0
        }

        .section-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            margin-bottom: 16px
        }

        .section h2 {
            font-size: 1.6rem;
            margin: 0
        }

        .grid {
            display: grid;
            gap: 16px
        }

        .grid.cards-3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .grid.cards-4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .card {
            background: var(--card);
            border: 1px solid #232736;
            border-radius: 16px;
            overflow: hidden;
            transition: .2s transform ease, .2s box-shadow ease
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, .35)
        }

        .card .body {
            padding: 14px
        }

        .meta {
            display: flex;
            gap: .6rem;
            align-items: center;
            color: var(--sub);
            font-size: .9rem
        }

        .title {
            margin: .4rem 0 .2rem;
            font-size: 1.05rem
        }

        .excerpt {
            color: var(--sub);
            font-size: .95rem;
            line-height: 1.5
        }

        /* LISTS */
        .list {
            display: grid;
            gap: 10px
        }

        .list a {
            display: flex;
            gap: .8rem;
            align-items: center;
            padding: 10px 12px;
            background: var(--muted);
            border: 1px solid #232736;
            border-radius: 12px;
            color: var(--text)
        }

        .list a:hover {
            border-color: #2f3444
        }

        /* BREEDERS */
        .breeder {
            display: flex;
            gap: 12px;
            align-items: center
        }

        .avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--brand), var(--brand-2))
        }

        /* CTA BANNER */
        .cta {
            margin-top: 16px;
            background: linear-gradient(135deg, rgba(92, 225, 230, .16), rgba(255, 84, 112, .12));
            border: 1px solid #233041;
            border-radius: 18px;
            padding: 16px
        }

        /* FOOTER */
        footer {
            margin-top: 40px;
            border-top: 1px solid #232736;
            padding: 26px 0;
            color: var(--sub)
        }

        /* RESPONSIVE */
        @media (max-width: 980px) {
            .hero-grid {
                grid-template-columns: 1fr
            }

            .nav-links {
                display: none
            }

            .hamburger {
                display: block
            }

            .grid.cards-3 {
                grid-template-columns: repeat(2, 1fr)
            }

            .grid.cards-4 {
                grid-template-columns: repeat(2, 1fr)
            }
        }

        @media (max-width: 560px) {

            .grid.cards-3,
            .grid.cards-4 {
                grid-template-columns: 1fr
            }

            .section-head {
                flex-direction: column;
                gap: .6rem;
                align-items: flex-start
            }
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="nav">
        <div class="container nav-inner">
            <a class="brand" href="#">
                <span class="brand-dot"></span>
                <span>Babipedia</span>
            </a>
            <div class="nav-links" id="navLinks">
                <a href="#artikel">Artikel</a>
                <a href="#ras">Ras</a>
                <a href="#pakan">Pakan</a>
                <a href="#peternak">Direktori Peternak</a>
                <a href="#tentang">Tentang</a>
            </div>
            <div class="nav-cta">
                <a class="btn alt" href="#cari">Cari</a>
                <button class="hamburger" id="hamburger" aria-label="Buka menu">☰</button>
            </div>
        </div>
        <div class="container">
            <div class="mobile-menu" id="mobileMenu">
                <a href="#artikel">Artikel</a>
                <a href="#ras">Ras</a>
                <a href="#pakan">Pakan</a>
                <a href="#peternak">Direktori Peternak</a>
                <a href="#tentang">Tentang</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="hero container">
        <div class="hero-grid">
            <div>
                <div class="tag">Edukasi & Direktori</div>
                <h1 class="headline">Semua tentang babi di satu tempat: edukasi, ras, perawatan, dan direktori
                    peternak.</h1>
                <p class="subhead">Bangun pengetahuan peternakan babi dari dasar hingga mahir. Temukan artikel
                    tepercaya, panduan pakan, kesehatan, dan hubungi peternak terdekat.</p>
                <form class="search" id="cari">
                    <input type="search" placeholder="Cari artikel, ras, pakan…" aria-label="Cari" />
                    <button type="submit" class="btn">Cari</button>
                </form>
                <div class="cta">
                    <strong>Baru di Babipedia?</strong> Mulai dari <a href="#artikel"
                        style="text-decoration:underline">Panduan Dasar</a> atau lihat <a href="#peternak"
                        style="text-decoration:underline">Direktori Peternak</a>.
                </div>
            </div>
            <div class="hero-card">
                <img src="https://images.unsplash.com/photo-1550630997-cd98f5f6f97a?q=80&w=1400&auto=format&fit=crop"
                    alt="Ilustrasi peternakan babi" style="border-radius:14px;aspect-ratio:16/10;object-fit:cover" />
                <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-top:10px">
                    <div class="card" style="padding:12px;text-align:center">
                        <div class="title">50+ Artikel</div>
                        <div class="subhead">Perawatan • Pakan</div>
                    </div>
                    <div class="card" style="padding:12px;text-align:center">
                        <div class="title">15 Ras</div>
                        <div class="subhead">Ciri • Kebutuhan</div>
                    </div>
                    <div class="card" style="padding:12px;text-align:center">
                        <div class="title">Direktori</div>
                        <div class="subhead">Peternak Lokal</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ARTIKEL TERBARU -->
    <section class="section container" id="artikel">
        <div class="section-head">
            <h2>Artikel Terbaru</h2>
            <a class="btn alt" href="#">Lihat semua</a>
        </div>
        <div class="grid cards-3">
            <!-- Card 1 -->
            <article class="card">
                <img src="https://images.unsplash.com/photo-1540317580389-5dd6f6ffa8e2?q=80&w=1200&auto=format&fit=crop"
                    alt="Pakan babi" style="aspect-ratio:16/10;object-fit:cover" />
                <div class="body">
                    <div class="meta"><span class="tag">Pakan</span><span>•</span><span>5 menit baca</span></div>
                    <h3 class="title">Menyusun Ransum Pakan Efisien untuk Pertumbuhan</h3>
                    <p class="excerpt">Prinsip FCR, komposisi bahan pakan lokal, dan tips penghematan biaya tanpa
                        mengorbankan performa.</p>
                </div>
            </article>
            <!-- Card 2 -->
            <article class="card">
                <img src="https://images.unsplash.com/photo-1616778953657-4c0a5677a5ce?q=80&w=1200&auto=format&fit=crop"
                    alt="Kesehatan babi" style="aspect-ratio:16/10;object-fit:cover" />
                <div class="body">
                    <div class="meta"><span class="tag">Kesehatan</span><span>•</span><span>7 menit baca</span>
                    </div>
                    <h3 class="title">Deteksi Dini Penyakit Umum pada Babi</h3>
                    <p class="excerpt">Kenali gejala respirasi, pencernaan, dan langkah biosekuriti sederhana yang bisa
                        Anda terapkan.</p>
                </div>
            </article>
            <!-- Card 3 -->
            <article class="card">
                <img src="https://images.unsplash.com/photo-1596098293363-61b7483b8f3a?q=80&w=1200&auto=format&fit=crop"
                    alt="Kandang babi" style="aspect-ratio:16/10;object-fit:cover" />
                <div class="body">
                    <div class="meta"><span class="tag">Manajemen</span><span>•</span><span>6 menit baca</span>
                    </div>
                    <h3 class="title">Desain Kandang Nyaman: Ventilasi & Kebersihan</h3>
                    <p class="excerpt">Tata letak kandang, aliran udara, serta rutinitas pembersihan agar ternak sehat
                        dan produktif.</p>
                </div>
            </article>
        </div>
    </section>

    <!-- RAS / KATEGORI -->
    <section class="section container" id="ras">
        <div class="section-head">
            <h2>Ras & Kategori</h2>
            <a class="btn alt" href="#">Lihat semua ras</a>
        </div>
        <div class="grid cards-4">
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1554324525-3fdfb5d7b3ec?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Landrace" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Landrace</h3>
                    <div class="meta">Ras Eropa • Pertumbuhan cepat</div>
                </div>
            </a>
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1563273811-5a5f96365e49?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Duroc" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Duroc</h3>
                    <div class="meta">Kualitas daging • Tahan</div>
                </div>
            </a>
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1585506942812-5cfabea0bf1a?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Yorkshire" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Yorkshire</h3>
                    <div class="meta">Produktivitas induk</div>
                </div>
            </a>
            <a class="card" href="#">
                <img src="https://images.unsplash.com/photo-1514924013411-cbf25faa35bb?q=80&w=1200&auto=format&fit=crop"
                    alt="Ras Hampshire" style="aspect-ratio:4/3;object-fit:cover" />
                <div class="body">
                    <h3 class="title">Hampshire</h3>
                    <div class="meta">Feed conversion baik</div>
                </div>
            </a>
        </div>
    </section>

    <!-- DIREKTORI PETERNAK -->
    <section class="section container" id="peternak">
        <div class="section-head">
            <h2>Direktori Peternak</h2>
            <a class="btn alt" href="#">Ajukan listing</a>
        </div>
        <div class="grid cards-3">
            <div class="card">
                <div class="body breeder">
                    <div class="avatar"></div>
                    <div>
                        <div class="title">Suka Maju Farm</div>
                        <div class="meta">Sunggal, Medan • 0812-xxxx-xxxx</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body breeder">
                    <div class="avatar"></div>
                    <div>
                        <div class="title">Harapan Jaya</div>
                        <div class="meta">Kab. Bandung • 0821-xxxx-xxxx</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="body breeder">
                    <div class="avatar"></div>
                    <div>
                        <div class="title">Ternak Sejahtera</div>
                        <div class="meta">Sidoarjo • 0852-xxxx-xxxx</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="section container" id="newsletter">
        <div class="card" style="padding:18px;display:grid;gap:10px">
            <div class="section-head" style="margin:0">
                <h2 style="margin:0">Dapatkan update artikel</h2>
                <span class="tag">Gratis</span>
            </div>
            <form class="search" onsubmit="event.preventDefault(); alert('Terima kasih!');">
                <input type="email" placeholder="Email kamu" required />
                <button class="btn" type="submit">Langganan</button>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="container" style="display:grid;gap:14px">
            <div style="display:flex;justify-content:space-between;gap:12px;flex-wrap:wrap">
                <div class="brand"><span class="brand-dot"></span><span>Babipedia</span></div>
                <div style="display:flex;gap:1rem;color:var(--sub)">
                    <a href="#tentang">Tentang</a>
                    <a href="#kontak">Kontak</a>
                    <a href="#kebijakan">Kebijakan</a>
                </div>
            </div>
            <small>© <span id="year"></span> Babipedia. Konten bersifat edukasi. Gunakan sebagai referensi, bukan
                pengganti konsultasi dokter hewan.</small>
        </div>
    </footer>

    <script>
        // Tahun dinamis di footer
        document.getElementById('year').textContent = new Date().getFullYear();

        // Toggle mobile menu
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        hamburger?.addEventListener('click', () => {
            const show = mobileMenu.style.display === 'flex';
            mobileMenu.style.display = show ? 'none' : 'flex';
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const id = a.getAttribute('href').slice(1);
                const el = document.getElementById(id);
                if (el) {
                    e.preventDefault();
                    window.scrollTo({
                        top: el.getBoundingClientRect().top + window.scrollY - 70,
                        behavior: 'smooth'
                    });
                    if (mobileMenu.style.display === 'flex') mobileMenu.style.display = 'none';
                }
            })
        });
    </script>
</body>

</html>
