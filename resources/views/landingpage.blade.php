<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violet Network - Helpdesk System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            overflow-x: hidden;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: #667eea;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            padding: 2rem;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveBackground 20s linear infinite;
        }

        @keyframes moveBackground {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 1;
            max-width: 800px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 0.8s ease;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            animation: fadeInUp 0.8s ease 0.2s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
            animation: fadeInUp 0.8s ease 0.4s both;
        }

        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: white;
            color: #667eea;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: white;
            color: #667eea;
        }

        .features {
            padding: 5rem 5%;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #667eea;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        .how-it-works {
            padding: 5rem 5%;
            background: white;
        }

        .steps {
            display: flex;
            justify-content: space-around;
            max-width: 1200px;
            margin: 0 auto;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .step {
            text-align: center;
            flex: 1;
            min-width: 200px;
        }

        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 1rem;
        }

        .step h3 {
            margin-bottom: 0.5rem;
            color: #333;
        }

        .step p {
            color: #666;
        }

        .cta-section {
            padding: 5rem 5%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            text-align: center;
            color: white;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta-section p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        footer {
            background: #2c3e50;
            color: white;
            padding: 2rem 5%;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .nav-links {
                display: none;
            }

            .section-title {
                font-size: 2rem;
            }

            .cta-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">🎫 Violet Network</div>
        <ul class="nav-links">
            <li><a href="#home">Beranda</a></li>
            <li><a href="#features">Fitur</a></li>
            <li><a href="#how">Cara Kerja</a></li>
            <li><a href="#contact">Kontak</a></li>
            <li><a href="{{ 'login' }}">Login</a></li>
        </ul>
    </nav>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Solusi Helpdesk Modern untuk Layanan Internet Anda</h1>
            <p>Kelola gangguan jaringan dengan mudah, cepat, dan efisien menggunakan sistem ticket berbasis AI</p>
            <div class="cta-buttons">
                <a href="#" class="btn btn-primary">Buat Tiket</a>
                <a href="#features" class="btn btn-secondary">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </section>

    <section class="features" id="features">
        <h2 class="section-title">Fitur Unggulan</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🎯</div>
                <h3>Manajemen Ticket Otomatis</h3>
                <p>Sistem pencatatan dan pelacakan ticket gangguan yang terorganisir dengan baik</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🧠</div>
                <h3>AI-Powered Solutions</h3>
                <p>Rekomendasi solusi otomatis menggunakan TF-IDF dan Cosine Similarity</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📚</div>
                <h3>Knowledge Base Dinamis</h3>
                <p>Basis pengetahuan yang terus belajar dari setiap penanganan gangguan</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Respons Cepat</h3>
                <p>Notifikasi real-time dan dashboard monitoring untuk penanganan yang lebih cepat</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">👥</div>
                <h3>Multi-Role Access</h3>
                <p>Akses berbeda untuk Admin, Teknisi, dan Pelanggan dengan hak yang sesuai</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Analitik Lengkap</h3>
                <p>Laporan dan statistik untuk evaluasi kinerja layanan</p>
            </div>
        </div>
    </section>

    <section class="how-it-works" id="how">
        <h2 class="section-title">Cara Kerja</h2>
        <div class="steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Buat Ticket</h3>
                <p>Pelanggan melaporkan gangguan melalui sistem</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Assignment Otomatis</h3>
                <p>Admin menugaskan ke teknisi yang sesuai</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Penanganan Cerdas</h3>
                <p>Teknisi mendapat rekomendasi solusi dari AI</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Selesai & Dokumentasi</h3>
                <p>Solusi tersimpan untuk pembelajaran sistem</p>
            </div>
        </div>
    </section>

    <section class="cta-section" id="contact">
        <h2>Siap Meningkatkan Layanan Anda?</h2>
        <p>Bergabunglah dengan Violet Network dan rasakan perbedaannya</p>
        <div class="cta-buttons">
            <a href="#" class="btn btn-primary">Hubungi Kami</a>
            <a href="#" class="btn btn-secondary">Demo Gratis</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Violet Network Helpdesk System. Dikembangkan dengan ❤️ untuk layanan yang lebih baik.</p>
    </footer>
</body>
</html>