<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CrabTech IoT - Solusi IoT cerdas untuk budidaya kepiting bakau di Batam. Monitoring real-time sensor pH, suhu, dan sistem SLO/RAS. Laporan UTS Tech-Startup.">
    <meta name="keywords" content="IoT, kepiting bakau, budidaya, sensor, pH, suhu, SLO, RAS, CrabTech, Batam, UTS, startup">
    <meta name="author" content="CrabTech IoT">

    <title>CrabTech IoT | Solusi Cerdas Budidaya Kepiting Bakau - UTS Tech Startup</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'cyber-dark': '#0a0f1a',
                        'cyber-mid': '#0d1526',
                        'cyber-light': '#111c30',
                        'cyber-border': '#1a2a45',
                        'cyan-primary': '#00e5ff',
                        'cyan-glow': '#00b8d4',
                        'neon-magenta': '#d400ff',
                        'neon-green': '#00ff88',
                        'neon-yellow': '#ffe600',
                        'text-dim': '#8892b0',
                        'text-light': '#ccd6f6',
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'mono': ['JetBrains Mono', 'Fira Code', 'monospace'],
                    },
                    animation: {
                        'glow-pulse': 'glowPulse 2s ease-in-out infinite alternate',
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        glowPulse: {
                            '0%': { boxShadow: '0 0 5px #00e5ff, 0 0 20px rgba(0,229,255,0.3)' },
                            '100%': { boxShadow: '0 0 20px #00e5ff, 0 0 60px rgba(0,229,255,0.6)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                    },
                },
            },
        }
    </script>

    <style>
        html { scroll-behavior: smooth; }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0a0f1a; }
        ::-webkit-scrollbar-thumb { background: #00e5ff; border-radius: 3px; }
        .neon-text-cyan { text-shadow: 0 0 7px rgba(0, 229, 255, 0.8), 0 0 20px rgba(0, 229, 255, 0.4); }
        .neon-text-magenta { text-shadow: 0 0 7px rgba(212, 0, 255, 0.8), 0 0 20px rgba(212, 0, 255, 0.4); }
        .neon-text-green { text-shadow: 0 0 7px rgba(0, 255, 136, 0.8), 0 0 20px rgba(0, 255, 136, 0.4); }
        .neon-border-cyan {
            border: 1px solid rgba(0, 229, 255, 0.4);
            box-shadow: 0 0 10px rgba(0, 229, 255, 0.15), inset 0 0 10px rgba(0, 229, 255, 0.05);
            transition: all 0.3s ease;
        }
        .neon-border-cyan:hover {
            border-color: rgba(0, 229, 255, 0.8);
            box-shadow: 0 0 25px rgba(0, 229, 255, 0.35), inset 0 0 15px rgba(0, 229, 255, 0.1);
        }
        .neon-border-magenta {
            border: 1px solid rgba(212, 0, 255, 0.4);
            box-shadow: 0 0 10px rgba(212, 0, 255, 0.15);
            transition: all 0.3s ease;
        }
        .neon-border-magenta:hover {
            border-color: rgba(212, 0, 255, 0.8);
            box-shadow: 0 0 25px rgba(212, 0, 255, 0.35);
        }
        .hero-bg-overlay {
            background: linear-gradient(180deg, rgba(10,15,26,0.85) 0%, rgba(10,15,26,0.95) 100%),
            repeating-linear-gradient(0deg, transparent, transparent 2px, rgba(0,229,255,0.03) 2px, rgba(0,229,255,0.03) 4px),
            repeating-linear-gradient(90deg, transparent, transparent 2px, rgba(0,229,255,0.03) 2px, rgba(0,229,255,0.03) 4px);
        }
        .grid-bg-pattern {
            background-image: linear-gradient(rgba(0,229,255,0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0,229,255,0.04) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .card-hover-lift {
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .card-hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 30px rgba(0,229,255,0.2);
        }
        .pulse-dot { animation: pulseDot 2s ease-in-out infinite; }
        @keyframes pulseDot {
            0%, 100% { opacity: 1; box-shadow: 0 0 0 0 rgba(0,255,136,0.7); }
            50% { opacity: 0.6; box-shadow: 0 0 0 12px rgba(0,255,136,0); }
        }
        .fade-in-section {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .fade-in-section.visible { opacity: 1; transform: translateY(0); }
    </style>
</head>

<body class="bg-cyber-dark text-text-light font-sans antialiased">

<nav class="fixed top-0 left-0 right-0 z-50 bg-cyber-dark/85 backdrop-blur-lg border-b border-cyber-border/60 transition-all duration-300" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <a href="#beranda" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-cyan-primary to-neon-magenta flex items-center justify-center font-bold text-cyber-dark text-sm group-hover:animate-glow-pulse">🦀</div>
                <span class="text-xl lg:text-2xl font-bold tracking-tight">
                    <span class="text-cyan-primary neon-text-cyan">Crab</span><span class="text-white">Tech</span>
                    <span class="text-xs text-neon-green font-mono ml-1">IoT</span>
                </span>
            </a>
            <div class="hidden lg:flex items-center gap-8">
                <a href="#beranda" class="text-text-dim hover:text-cyan-primary transition-colors duration-200 text-sm font-medium">Beranda</a>
                <a href="#fitur" class="text-text-dim hover:text-cyan-primary transition-colors duration-200 text-sm font-medium">Fitur</a>
                <a href="#teknologi" class="text-text-dim hover:text-cyan-primary transition-colors duration-200 text-sm font-medium">Teknologi</a>
                <a href="#kontak" class="text-text-dim hover:text-cyan-primary transition-colors duration-200 text-sm font-medium">Kontak</a>
                <a href="#harga" class="ml-4 px-5 py-2.5 bg-cyan-primary text-cyber-dark font-semibold rounded-lg text-sm hover:bg-cyan-glow hover:shadow-[0_0_25px_rgba(0,229,255,0.5)] transition-all">Mulai Sekarang</a>
            </div>
            <button id="mobileMenuBtn" class="lg:hidden text-text-light p-2 rounded-md hover:bg-cyber-light" aria-label="Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
        <div id="mobileMenu" class="lg:hidden hidden pb-4 border-t border-cyber-border/50 mt-2">
            <div class="flex flex-col gap-2 pt-4">
                <a href="#beranda" class="px-4 py-3 text-text-dim hover:text-cyan-primary hover:bg-cyber-light rounded-lg mobile-link">Beranda</a>
                <a href="#fitur" class="px-4 py-3 text-text-dim hover:text-cyan-primary hover:bg-cyber-light rounded-lg mobile-link">Fitur</a>
                <a href="#teknologi" class="px-4 py-3 text-text-dim hover:text-cyan-primary hover:bg-cyber-light rounded-lg mobile-link">Teknologi</a>
                <a href="#kontak" class="px-4 py-3 text-text-dim hover:text-cyan-primary hover:bg-cyber-light rounded-lg mobile-link">Kontak</a>
                <a href="#harga" class="px-4 py-3 bg-cyan-primary text-cyber-dark font-semibold rounded-lg text-center mobile-link">Mulai Sekarang</a>
            </div>
        </div>
    </div>
</nav>
<div class="h-16 lg:h-20"></div>

<section id="beranda" class="relative min-h-[90vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-gradient-to-br from-[#0a1628] via-[#0d1f3c] to-[#0a0f1a] hero-bg-overlay"></div>
        <div class="absolute inset-0 grid-bg-pattern opacity-40"></div>
        <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-cyan-primary/10 rounded-full blur-[120px] animate-float"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-neon-magenta/8 rounded-full blur-[150px] animate-float" style="animation-delay: 1.5s;"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-32">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 lg:space-y-8">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-cyan-primary/40 bg-cyber-mid/80 backdrop-blur-sm">
                    <span class="w-2 h-2 rounded-full bg-neon-green pulse-dot"></span>
                    <span class="text-xs font-mono text-cyan-primary uppercase tracking-wider">🚀 UTS Tech-Startup Project</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight">
                    <span class="text-white">Solusi</span>
                    <span class="text-cyan-primary neon-text-cyan"> IoT Cerdas</span><br/>
                    <span class="text-white">untuk</span>
                    <span class="text-neon-magenta neon-text-magenta"> Kepiting Bakau</span>
                </h1>
                <p class="text-lg lg:text-xl text-text-dim leading-relaxed max-w-xl">
                    CrabTech IoT menghadirkan sistem monitoring <span class="text-cyan-primary font-semibold">real-time 24/7</span> berbasis sensor pH dan suhu, serta otomatisasi filtrasi SLO/RAS. Berdasarkan observasi di Batam, sistem kami mampu menekan angka kematian kepiting hingga <span class="text-neon-green font-bold">70%</span> dan meningkatkan produktivitas tambak.
                </p>
                <div class="flex flex-wrap gap-4">
                    <a href="#harga" class="px-8 py-4 bg-gradient-to-r from-cyan-primary to-cyan-glow text-cyber-dark font-bold rounded-lg text-lg hover:shadow-[0_0_40px_rgba(0,229,255,0.6)] hover:scale-105 transition-all inline-flex items-center gap-2">
                        🚀 Mulai Sekarang
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/></svg>
                    </a>
                    <a href="#teknologi" class="px-8 py-4 border-2 border-cyan-primary/50 text-cyan-primary font-semibold rounded-lg text-lg hover:bg-cyan-primary/10 transition-all inline-flex items-center gap-2">📡 Pelajari Teknologi</a>
                </div>
                <div class="flex gap-6 lg:gap-10 pt-6">
                    <div><span class="text-3xl font-bold text-neon-green neon-text-green">70%</span><p class="text-sm text-text-dim">Kurangi Kematian</p></div>
                    <div><span class="text-3xl font-bold text-cyan-primary neon-text-cyan">24/7</span><p class="text-sm text-text-dim">Monitoring Real-Time</p></div>
                    <div><span class="text-3xl font-bold text-neon-magenta neon-text-magenta">3x</span><p class="text-sm text-text-dim">Hasil Panen</p></div>
                </div>
            </div>
            <div class="hidden lg:flex justify-center items-center">
                <div class="relative w-full max-w-md aspect-square">
                    <div class="w-full h-full rounded-2xl bg-cyber-mid neon-border-cyan flex items-center justify-center overflow-hidden">
                        <div class="text-center p-8">
                            <div class="text-7xl mb-4">🦀</div>
                            <div class="text-xs font-mono text-cyan-primary mb-2">DASHBOARD IoT</div>
                            <div class="w-full h-2 bg-cyber-border rounded-full overflow-hidden mb-3"><div class="h-full w-3/4 bg-gradient-to-r from-neon-green to-cyan-primary rounded-full animate-pulse"></div></div>
                            <div class="grid grid-cols-2 gap-2 text-left text-xs font-mono text-text-dim">
                                <span>pH: <span class="text-neon-green">7.8</span></span>
                                <span>Suhu: <span class="text-cyan-primary">28°C</span></span>
                                <span>DO: <span class="text-neon-green">5.2</span></span>
                                <span>SLO: <span class="text-cyan-primary">Aktif</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="absolute -top-3 -left-3 w-8 h-8 border-t-2 border-l-2 border-cyan-primary"></div>
                    <div class="absolute -bottom-3 -right-3 w-8 h-8 border-b-2 border-r-2 border-neon-magenta"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="fitur" class="py-20 lg:py-28 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 lg:mb-20">
            <span class="text-xs font-mono text-neon-magenta uppercase tracking-[0.3em]">Pain & Relief</span>
            <h2 class="text-3xl lg:text-5xl font-bold mt-3 mb-4">
                <span class="text-white">Masalah Nyata di</span>
                <span class="text-neon-magenta neon-text-magenta"> Batam</span>
            </h2>
            <p class="text-text-dim max-w-2xl mx-auto">Berdasarkan wawancara dengan pembudidaya di Batam dan data Dinas Perikanan, tingkat kematian kepiting bakau mencapai 45-60% akibat kualitas air yang tidak terpantau.</p>
        </div>
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            <div class="space-y-6">
                <div class="flex items-center gap-3 mb-6"><span class="text-3xl">⚠️</span><h3 class="text-2xl font-bold text-white">Problem</h3></div>
                <div class="p-6 rounded-xl bg-cyber-mid border-l-4 border-red-500/60 card-hover-lift">
                    <h4 class="font-bold text-white mb-2">🦀 Tingkat Kematian Tinggi</h4>
                    <p class="text-text-dim text-sm">Data observasi: 5 dari 8 tambak di Batam mengalami kematian massal minimal 2 kali per siklus. Fluktuasi pH (6.2-9.1) dan suhu (24-33°C) tidak terdeteksi dini.</p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-mid border-l-4 border-orange-500/60 card-hover-lift">
                    <h4 class="font-bold text-white mb-2">📉 Monitoring Manual & Tidak Akurat</h4>
                    <p class="text-text-dim text-sm">Pembudidaya hanya mengecek air 1-2 kali/hari menggunakan kertas lakmus. Tidak ada pencatatan riwayat, sehingga sulit menganalisis penyebab kematian.</p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-mid border-l-4 border-yellow-500/60 card-hover-lift">
                    <h4 class="font-bold text-white mb-2">💸 Biaya Operasional Boros</h4>
                    <p class="text-text-dim text-sm">Pompa filtrasi berjalan terus-menerus tanpa penyesuaian kebutuhan. Biaya listrik mencapai 30% dari total operasional, belum termasuk tenaga kerja tambahan.</p>
                </div>
            </div>
            <div class="space-y-6">
                <div class="flex items-center gap-3 mb-6"><span class="text-3xl">✅</span><h3 class="text-2xl font-bold text-neon-green neon-text-green">Solusi CrabTech</h3></div>
                <div class="p-6 rounded-xl bg-cyber-mid border-l-4 border-neon-green/60 card-hover-lift">
                    <h4 class="font-bold text-white mb-2">🤖 Monitoring Real-Time 24/7</h4>
                    <p class="text-text-dim text-sm">Sensor pH (E-201-C) dan suhu (DS18B20) mengirim data setiap 5 menit ke cloud. Notifikasi WhatsApp langsung jika parameter di luar ambang batas aman (pH 7.5-8.5, suhu 26-30°C).</p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-mid border-l-4 border-cyan-primary/60 card-hover-lift">
                    <h4 class="font-bold text-white mb-2">📊 Dashboard & Analitik Cerdas</h4>
                    <p class="text-text-dim text-sm">Data historis disimpan di cloud, dilengkapi grafik tren dan prediksi berbasis AI sederhana (edge computing) untuk memberikan rekomendasi waktu panen dan peringatan dini.</p>
                </div>
                <div class="p-6 rounded-xl bg-cyber-mid border-l-4 border-neon-magenta/60 card-hover-lift">
                    <h4 class="font-bold text-white mb-2">⚡ Otomatisasi SLO/RAS</h4>
                    <p class="text-text-dim text-sm">Sistem Solid-Liquid Separator (SLO) dan Recirculating Aquaculture System (RAS) diaktifkan otomatis berdasarkan pembacaan sensor. Menghemat energi hingga 35%.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-16 lg:py-24 bg-cyber-mid/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-xs font-mono text-cyan-primary uppercase tracking-[0.3em]">Validasi Pelanggan</span>
            <h2 class="text-3xl lg:text-4xl font-bold mt-3 mb-4">
                <span class="text-white">Apa Kata</span>
                <span class="text-cyan-primary neon-text-cyan"> Pembudidaya?</span>
            </h2>
            <p class="text-text-dim max-w-2xl mx-auto">Hasil wawancara dengan 3 calon pengguna potensial di Batam menunjukkan kebutuhan mendesak akan sistem monitoring otomatis.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8">
            <div class="p-6 rounded-2xl bg-cyber-dark neon-border-cyan card-hover-lift">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-cyan-primary/20 flex items-center justify-center text-2xl">👨‍🌾</div>
                    <div>
                        <h4 class="font-bold text-white">Pak Rahmat</h4>
                        <p class="text-xs text-text-dim">Pemilik Tambak Nongsa, Batam</p>
                    </div>
                </div>
                <p class="text-text-dim text-sm italic">"Setiap musim hujan, pH air turun drastis dan kepiting banyak yang mati. Saya butuh alat yang bisa kasih tahu saya lebih awal, bahkan saat saya di rumah. Alat ini sangat menjanjikan."</p>
                <div class="mt-3 text-neon-green text-xs font-mono">✓ Validasi: Masalah kematian akibat pH</div>
            </div>
            <div class="p-6 rounded-2xl bg-cyber-dark neon-border-cyan card-hover-lift">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-neon-magenta/20 flex items-center justify-center text-2xl">👩‍🔬</div>
                    <div>
                        <h4 class="font-bold text-white">Ibu Sari</h4>
                        <p class="text-xs text-text-dim">Peneliti Akuakultur, Batam</p>
                    </div>
                </div>
                <p class="text-text-dim text-sm italic">"Data kualitas air yang tercatat terus-menerus akan sangat membantu riset kami. Sistem otomatis seperti ini bisa menjadi standar baru budidaya kepiting modern."</p>
                <div class="mt-3 text-neon-green text-xs font-mono">✓ Validasi: Kebutuhan data riset</div>
            </div>
            <div class="p-6 rounded-2xl bg-cyber-dark neon-border-cyan card-hover-lift">
                <div class="flex items-center gap-4 mb-4">
                    <div class="w-12 h-12 rounded-full bg-neon-green/20 flex items-center justify-center text-2xl">👨‍💼</div>
                    <div>
                        <h4 class="font-bold text-white">Bang Dodi</h4>
                        <p class="text-xs text-text-dim">Pengusaha Tambak Muda, Batam</p>
                    </div>
                </div>
                <p class="text-text-dim text-sm italic">"Saya ingin tambak saya lebih modern dan efisien. Kalau ada alat yang bisa ngurangin biaya listrik dan tenaga kerja, saya pasti beli. Apalagi bisa dipantau lewat HP."</p>
                <div class="mt-3 text-neon-green text-xs font-mono">✓ Validasi: Efisiensi biaya & akses mobile</div>
            </div>
        </div>
    </div>
</section>

<section id="teknologi" class="py-20 lg:py-28 bg-cyber-mid/40 relative">
    <div class="absolute inset-0 grid-bg-pattern opacity-30"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 lg:mb-20">
            <span class="text-xs font-mono text-cyan-primary uppercase tracking-[0.3em]">Spesifikasi Teknis</span>
            <h2 class="text-3xl lg:text-5xl font-bold mt-3 mb-4">
                <span class="text-white">Teknologi</span>
                <span class="text-cyan-primary neon-text-cyan"> Presisi</span>
            </h2>
            <p class="text-text-dim max-w-2xl mx-auto">Dibangun dengan komponen industri berkualitas tinggi, dikendalikan oleh ESP32 dan terhubung ke platform cloud.</p>
        </div>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            <div class="p-8 rounded-2xl bg-cyber-dark neon-border-cyan text-center card-hover-lift group">
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-cyan-primary/10 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform duration-300">🧪</div>
                <h3 class="text-xl font-bold text-white mb-3">Sensor pH E-201-C</h3>
                <p class="text-text-dim text-sm leading-relaxed">Akurasi ±0.1 pH, rentang 0-14. Dikombinasikan dengan modul ADS1115 16-bit ADC untuk pembacaan presisi di air payau. Kalibrasi otomatis via software.</p>
                <div class="mt-4 pt-4 border-t border-cyber-border/50"><span class="text-xs font-mono text-cyan-primary">Accuracy: ±0.1 | Response: <1s</span></div>
            </div>
            <div class="p-8 rounded-2xl bg-cyber-dark neon-border-cyan text-center card-hover-lift group">
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-neon-magenta/10 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform duration-300">🌡️</div>
                <h3 class="text-xl font-bold text-white mb-3">DS18B20 Waterproof</h3>
                <p class="text-text-dim text-sm leading-relaxed">Sensor suhu digital 1-Wire, akurasi ±0.5°C, rentang -55°C hingga 125°C. Tahan air dan korosi, ideal untuk lingkungan tambak.</p>
                <div class="mt-4 pt-4 border-t border-cyber-border/50"><span class="text-xs font-mono text-neon-magenta">Resolution: 12-bit | Cable: 3m</span></div>
            </div>
            <div class="p-8 rounded-2xl bg-cyber-dark neon-border-cyan text-center card-hover-lift group sm:col-span-2 lg:col-span-1">
                <div class="w-16 h-16 mx-auto mb-5 rounded-full bg-neon-green/10 flex items-center justify-center text-4xl group-hover:scale-110 transition-transform duration-300">🔄</div>
                <h3 class="text-xl font-bold text-white mb-3">Sistem SLO/RAS</h3>
                <p class="text-text-dim text-sm leading-relaxed">Solid-Liquid Separator dengan auto-backwash dan Recirculating Aquaculture System. Dikendalikan relay oleh ESP32 berdasarkan parameter pH/suhu.</p>
                <div class="mt-4 pt-4 border-t border-cyber-border/50"><span class="text-xs font-mono text-neon-green">Flow Rate: 2000L/h | Power: 45W</span></div>
            </div>
        </div>
        <div class="mt-16 p-8 rounded-2xl bg-cyber-dark/60 border border-cyber-border/40 text-center">
            <p class="text-sm font-mono text-text-dim mb-4">🔗 DIAGRAM BLOK SISTEM</p>
            <div class="flex flex-wrap justify-center items-center gap-4 lg:gap-8 text-sm font-mono">
                <span class="px-4 py-2 rounded-lg bg-cyber-mid text-cyan-primary">📡 Sensor</span>
                <span class="text-2xl text-neon-magenta">→</span>
                <span class="px-4 py-2 rounded-lg bg-cyber-mid text-neon-magenta">🔌 ESP32</span>
                <span class="text-2xl text-neon-magenta">→</span>
                <span class="px-4 py-2 rounded-lg bg-cyber-mid text-cyan-primary">☁️ Cloud MQTT</span>
                <span class="text-2xl text-neon-magenta">→</span>
                <span class="px-4 py-2 rounded-lg bg-cyber-mid text-neon-green">📊 Dashboard</span>
            </div>
        </div>
    </div>
</section>

<section class="py-20 lg:py-28 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 lg:mb-20">
            <span class="text-xs font-mono text-neon-yellow uppercase tracking-[0.3em]">Business Model Canvas</span>
            <h2 class="text-3xl lg:text-5xl font-bold mt-3 mb-4">
                <span class="text-white">Model Bisnis</span>
                <span class="text-neon-yellow neon-text-green"> CrabTech IoT</span>
            </h2>
            <p class="text-text-dim max-w-2xl mx-auto">Ringkasan 9 blok BMC yang telah divalidasi melalui wawancara dan observasi pasar di Batam.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-5">
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">01</span>
                <h4 class="font-bold text-white text-sm mb-2">👥 Customer Segments</h4>
                <p class="text-text-dim text-xs">Pembudidaya kepiting bakau skala kecil-menengah di Batam dan Kepri, peneliti akuakultur, serta startup perikanan modern.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-magenta card-hover-lift lg:row-span-2">
                <span class="text-xs font-mono text-neon-magenta block mb-2">02 ⭐</span>
                <h4 class="font-bold text-white text-sm mb-2">💎 Value Propositions</h4>
                <p class="text-text-dim text-xs">Monitoring 24/7, notifikasi dini, AI prediction, otomatisasi filtrasi, penurunan mortalitas 70%, dashboard mobile-friendly.</p>
                <ul class="mt-3 space-y-1 text-xs text-cyan-primary"><li>• Real-time alert</li><li>• Hemat listrik 35%</li><li>• Data historis cloud</li></ul>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">03</span>
                <h4 class="font-bold text-white text-sm mb-2">📢 Channels</h4>
                <p class="text-text-dim text-xs">Website, media sosial, workshop Dinas Perikanan, pameran teknologi, dan direct sales ke komunitas tambak.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">04</span>
                <h4 class="font-bold text-white text-sm mb-2">🤝 Customer Relationships</h4>
                <p class="text-text-dim text-xs">Dukungan teknis 24/7 via WhatsApp, garansi 1 tahun, pelatihan instalasi, dan forum komunitas online.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">05</span>
                <h4 class="font-bold text-white text-sm mb-2">💰 Revenue Streams</h4>
                <p class="text-text-dim text-xs">Penjualan perangkat hardware (Rp 2.5-7.5jt), biaya langganan dashboard cloud (Rp 150rb/bln), jasa instalasi & konsultasi.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">06</span>
                <h4 class="font-bold text-white text-sm mb-2">🔑 Key Resources</h4>
                <p class="text-text-dim text-xs">Tim engineer IoT, sensor & mikrokontroler, platform cloud, IP kalibrasi, jaringan distribusi sparepart.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">07</span>
                <h4 class="font-bold text-white text-sm mb-2">⚙️ Key Activities</h4>
                <p class="text-text-dim text-xs">R&D sensor, pengembangan software dashboard, manufaktur & perakitan, pemasaran, dan dukungan purna jual.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">08</span>
                <h4 class="font-bold text-white text-sm mb-2">🤝 Key Partners</h4>
                <p class="text-text-dim text-xs">Supplier elektronik, Dinas Perikanan Batam, Politeknik Negeri Batam, komunitas pembudidaya, investor.</p>
            </div>
            <div class="p-5 rounded-xl bg-cyber-mid neon-border-cyan card-hover-lift">
                <span class="text-xs font-mono text-neon-green block mb-2">09</span>
                <h4 class="font-bold text-white text-sm mb-2">💸 Cost Structure</h4>
                <p class="text-text-dim text-xs">Produksi hardware, cloud hosting, gaji tim, marketing, logistik, dan maintenance server.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 lg:py-28 bg-cyber-mid/40 relative">
    <div class="absolute inset-0 grid-bg-pattern opacity-30"></div>
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-xs font-mono text-cyan-primary uppercase tracking-[0.3em]">Analisis Kompetitor</span>
            <h2 class="text-3xl lg:text-5xl font-bold mt-3 mb-4">
                <span class="text-white">Kenapa</span>
                <span class="text-cyan-primary neon-text-cyan"> CrabTech IoT?</span>
            </h2>
            <p class="text-text-dim max-w-2xl mx-auto">Perbandingan fitur dengan metode budidaya konvensional yang umum digunakan di Batam.</p>
        </div>
        <div class="overflow-x-auto rounded-2xl neon-border-cyan">
            <table class="w-full text-left border-collapse min-w-[600px]">
                <thead>
                    <tr class="bg-cyber-dark/80">
                        <th class="p-4 lg:p-5 text-sm font-bold text-white border-b border-cyber-border/50">Fitur</th>
                        <th class="p-4 lg:p-5 text-sm font-bold text-neon-magenta border-b border-cyber-border/50 text-center">🔴 Konvensional</th>
                        <th class="p-4 lg:p-5 text-sm font-bold text-neon-green border-b border-cyber-border/50 text-center">🟢 CrabTech IoT</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-text-dim">
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 border-b border-cyber-border/30 font-medium text-white">Monitoring pH</td><td class="p-4 lg:p-5 border-b text-center">Manual 1-2x/hari</td><td class="p-4 lg:p-5 border-b text-center text-neon-green font-semibold">✅ Otomatis / 5 menit</td></tr>
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 border-b border-cyber-border/30 font-medium text-white">Monitoring Suhu</td><td class="p-4 lg:p-5 border-b text-center">Termometer air raksa</td><td class="p-4 lg:p-5 border-b text-center text-neon-green font-semibold">✅ Sensor digital presisi</td></tr>
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 border-b border-cyber-border/30 font-medium text-white">Notifikasi Bahaya</td><td class="p-4 lg:p-5 border-b text-center">❌ Tidak ada</td><td class="p-4 lg:p-5 border-b text-center text-neon-green font-semibold">✅ WhatsApp & Dashboard</td></tr>
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 border-b border-cyber-border/30 font-medium text-white">Data Historis</td><td class="p-4 lg:p-5 border-b text-center">Catatan kertas</td><td class="p-4 lg:p-5 border-b text-center text-neon-green font-semibold">✅ Cloud unlimited</td></tr>
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 border-b border-cyber-border/30 font-medium text-white">Filtrasi Otomatis</td><td class="p-4 lg:p-5 border-b text-center">Timer manual</td><td class="p-4 lg:p-5 border-b text-center text-neon-green font-semibold">✅ Sensor-based otomatis</td></tr>
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 border-b border-cyber-border/30 font-medium text-white">Analitik AI</td><td class="p-4 lg:p-5 border-b text-center">❌ Tidak ada</td><td class="p-4 lg:p-5 border-b text-center text-neon-green font-semibold">✅ Prediksi & rekomendasi</td></tr>
                    <tr class="hover:bg-cyber-light/30"><td class="p-4 lg:p-5 font-medium text-white">Biaya Operasional</td><td class="p-4 lg:p-5 text-center">Tinggi</td><td class="p-4 lg:p-5 text-center text-neon-green font-semibold">✅ Hemat hingga 35%</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="harga" class="py-20 lg:py-28 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 lg:mb-20">
            <span class="text-xs font-mono text-neon-green uppercase tracking-[0.3em]">Rencana Monetisasi</span>
            <h2 class="text-3xl lg:text-5xl font-bold mt-3 mb-4">
                <span class="text-white">Paket</span>
                <span class="text-neon-green neon-text-green"> Harga</span>
            </h2>
            <p class="text-text-dim max-w-2xl mx-auto">Model bisnis: Hardware sale + Subscription cloud dashboard. Pilih paket sesuai skala tambak Anda.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-6 lg:gap-8 max-w-5xl mx-auto">
            <div class="rounded-2xl bg-cyber-mid p-8 border border-cyber-border/40 card-hover-lift relative flex flex-col">
                <span class="text-xs font-mono text-cyan-primary uppercase tracking-wider mb-3">Starter</span>
                <h3 class="text-2xl font-bold text-white mb-2">Basic</h3>
                <p class="text-text-dim text-sm mb-6">1-2 kolam</p>
                <div class="mb-6"><span class="text-4xl font-extrabold text-white">Rp 2.5</span><span class="text-text-dim text-sm">jt</span><span class="text-text-dim text-xs block">/ perangkat (one-time)</span></div>
                <ul class="space-y-3 text-sm text-text-dim flex-1">
                    <li>✅ 1 Unit Sensor (pH+Suhu)</li><li>✅ Dashboard Basic</li><li>✅ Notifikasi WA</li><li>❌ Analitik AI</li>
                </ul>
                <a href="#kontak" class="mt-8 block text-center py-3 px-6 border-2 border-cyan-primary/50 text-cyan-primary font-semibold rounded-lg hover:bg-cyan-primary/10 transition-all">Pilih Paket</a>
            </div>
            <div class="rounded-2xl bg-cyber-mid p-8 border-2 border-neon-magenta card-hover-lift relative flex flex-col neon-border-magenta -mt-4 lg:-mt-6 lg:scale-105 z-10">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-neon-magenta text-white text-xs font-bold px-5 py-1.5 rounded-full">⭐ POPULER</div>
                <span class="text-xs font-mono text-neon-magenta uppercase tracking-wider mb-3 mt-2">Professional</span>
                <h3 class="text-2xl font-bold text-white mb-2">Pro</h3>
                <p class="text-text-dim text-sm mb-6">3-10 kolam</p>
                <div class="mb-6"><span class="text-4xl font-extrabold text-neon-magenta">Rp 7.5</span><span class="text-text-dim text-sm">jt</span></div>
                <ul class="space-y-3 text-sm text-text-dim flex-1">
                    <li>✅ 3 Unit Sensor</li><li>✅ Dashboard Pro + AI</li><li>✅ Notifikasi WA & Email</li><li>✅ Otomatisasi SLO/RAS</li>
                </ul>
                <a href="#kontak" class="mt-8 block text-center py-3 px-6 bg-gradient-to-r from-neon-magenta to-purple-600 text-white font-bold rounded-lg hover:shadow-[0_0_30px_rgba(212,0,255,0.5)] transition-all">Pilih Pro</a>
            </div>
            <div class="rounded-2xl bg-cyber-mid p-8 border border-cyber-border/40 card-hover-lift relative flex flex-col">
                <span class="text-xs font-mono text-neon-yellow uppercase tracking-wider mb-3">Enterprise</span>
                <h3 class="text-2xl font-bold text-white mb-2">Custom</h3>
                <p class="text-text-dim text-sm mb-6">>10 kolam</p>
                <div class="mb-6"><span class="text-4xl font-extrabold text-neon-yellow">Custom</span></div>
                <ul class="space-y-3 text-sm text-text-dim flex-1">
                    <li>✅ Unlimited Sensor</li><li>✅ Dashboard Enterprise</li><li>✅ Dedicated Support</li><li>✅ SLA Guaranteed</li>
                </ul>
                <a href="#kontak" class="mt-8 block text-center py-3 px-6 border-2 border-neon-yellow/50 text-neon-yellow font-semibold rounded-lg hover:bg-neon-yellow/10 transition-all">Hubungi Kami</a>
            </div>
        </div>
        <div class="mt-12 text-center">
            <p class="text-text-dim text-sm">💡 Model <span class="text-cyan-primary font-semibold">Subscription Cloud Dashboard</span> mulai <span class="text-neon-green font-bold">Rp 150rb/bulan</span>. <a href="#kontak" class="text-cyan-primary underline hover:text-cyan-glow">Konsultasi gratis</a>.</p>
        </div>
    </div>
</section>

<footer id="kontak" class="bg-cyber-dark border-t border-cyber-border/50 pt-16 lg:pt-20 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-3 gap-10 mb-12">
            <div>
                <a href="#beranda" class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-cyan-primary to-neon-magenta flex items-center justify-center font-bold text-cyber-dark text-sm">🦀</div>
                    <span class="text-xl font-bold"><span class="text-cyan-primary neon-text-cyan">Crab</span><span class="text-white">Tech</span><span class="text-xs text-neon-green font-mono ml-1">IoT</span></span>
                </a>
                <p class="text-text-dim text-sm leading-relaxed mb-4">Startup IoT asal Batam, fokus pada solusi budidaya kepiting bakau cerdas. Proyek UTS Teknik Komputer.</p>
                <p class="text-text-dim text-sm flex items-center gap-2">📍 <span>Batam, Kepulauan Riau, Indonesia</span></p>
            </div>
            <div>
                <h4 class="font-bold text-white mb-4">Navigasi</h4>
                <ul class="space-y-2 text-sm text-text-dim">
                    <li><a href="#beranda" class="hover:text-cyan-primary transition-colors">Beranda</a></li>
                    <li><a href="#fitur" class="hover:text-cyan-primary transition-colors">Fitur</a></li>
                    <li><a href="#teknologi" class="hover:text-cyan-primary transition-colors">Teknologi</a></li>
                    <li><a href="#harga" class="hover:text-cyan-primary transition-colors">Harga</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-white mb-4">Hubungi Kami</h4>
                <ul class="space-y-3 text-sm text-text-dim">
                    <li class="flex items-center gap-2">📧 <a href="mailto:info@crabtech.id" class="hover:text-cyan-primary transition-colors">info@crabtech.id</a></li>
                    <li class="flex items-center gap-2">📞 <span>+62 812-3456-7890</span></li>
                    <li class="flex items-center gap-2">📍 <span>Batam, Indonesia</span></li>
                </ul>
                <div class="flex gap-4 mt-5">
                    <a href="#" class="w-10 h-10 rounded-full bg-cyber-mid border border-cyber-border/50 flex items-center justify-center text-text-dim hover:text-cyan-primary hover:border-cyan-primary transition-all" aria-label="Instagram"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 ..."/></svg></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-cyber-mid border border-cyber-border/50 flex items-center justify-center text-text-dim hover:text-cyan-primary hover:border-cyan-primary transition-all" aria-label="LinkedIn"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569..."/></svg></a>
                    <a href="#" class="w-10 h-10 rounded-full bg-cyber-mid border border-cyber-border/50 flex items-center justify-center text-text-dim hover:text-cyan-primary hover:border-cyan-primary transition-all" aria-label="YouTube"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016..."/></svg></a>
                </div>
            </div>
        </div>
        <hr class="border-cyber-border/40 mb-8">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-text-dim">
            <p>&copy; <?php echo date('Y'); ?> <span class="text-cyan-primary">CrabTech IoT</span>. All rights reserved. Made with ❤️ in Batam, Indonesia.</p>
            <div class="flex gap-4"><a href="#" class="hover:text-cyan-primary transition-colors">Privacy Policy</a><a href="#" class="hover:text-cyan-primary transition-colors">Terms of Service</a></div>
        </div>
    </div>
</footer>

<script>
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    mobileMenuBtn.addEventListener('click', () => { mobileMenu.classList.toggle('hidden'); });
    mobileLinks.forEach(link => { link.addEventListener('click', () => { mobileMenu.classList.add('hidden'); }); });

    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 20) navbar.classList.add('shadow-2xl', 'shadow-cyber-dark/80');
        else navbar.classList.remove('shadow-2xl', 'shadow-cyber-dark/80');
    });

    // Intersection Observer untuk animasi fade-in
    const fadeSections = document.querySelectorAll('.fade-in-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); } });
    }, { threshold: 0.15 });
    document.querySelectorAll('#fitur > div, #teknologi > div, section[id] > div > div:first-child, .card-hover-lift').forEach(el => {
        if (!el.classList.contains('fade-in-section')) { el.classList.add('fade-in-section'); observer.observe(el); }
    });
    console.log('🦀 CrabTech IoT - UTS Tech Startup Landing Page Ready.');
</script>
</body>
</html>