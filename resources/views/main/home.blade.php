@extends('layout.master')
@section('title', 'Home')
@section('content')

    @include('layout.navbar')
    <section class="home1">
        <div class="homepage-section">
            <div class="container d-flex flex-column justify-content-center align-items-center h-100 py-5">
                <div class="row text-center">
                    <!-- Logo -->
                    <div class="col-sm-5 text-end">
                        <img src="{{ asset('assets/img/home-logo.png') }}" alt="Home Logo" class="img-fluid"
                            style="max-width: 340px;">
                    </div>
                    <!-- Caption -->
                    <div class="col-sm-7 text-start">
                        <h1 class="text-white">Lebih Mudah Dengan Fooamy</h1>
                        <p class="text-white">Bersih Aja Gak Cukup</p>
                    </div>
                </div>
                <div class="row align-items-center mt-3">
                    <div class="d-flex justify-content-center gap-4">
                        <!-- Button Download -->
                        <a href="#download-section" class="btn-download">
                            <img src="{{ asset('assets/img/btn-download-home.svg') }}" alt="Download Button"
                                class="img-fluid">
                            <span class="btn-text">Download</span>
                        </a>
                        <!-- Button Lihat Daftar Harga -->
                        <a href="/daftar-harga-laundry" class="btn btn-outline-light">Lihat Daftar Harga</a>
                    </div>
                </div>
            </div>
            <!-- Wave Divider -->
            <div class="wave-divider">
                <img src="{{ asset('assets/img/wave-home1.svg') }}" alt="Wave Divider" class="img-fluid">
            </div>
        </div>
    </section>
    <section class="home2">
        <div class="layanan">

            <!-- Cards Section -->
            <div class="container">
                <!-- Title Section -->
                <div class="title-container position-relative mb-5 text-center">
                    <h1 class="layanan-title mb-3">Layanan Fooamy</h1>
                    <p class="layanan-caption">Fooamy Memiliki Beberapa Layanan Yang Bisa Kamu Gunakan</p>
                    <img src="{{ asset('assets/icon/bubble-title.svg') }}" alt="Bubble Decoration"
                        class="bubble-decoration">
                </div>
                <div class="row justify-content-center">
                    <!-- Card 1 -->
                    <div class="col-md-3 mb-4">
                        <div class="layanan-card card1">
                            <h3>Cuci Kiloan</h3>
                            <p>Praktis Dan Hemat! Cukup Timbang Pakaianmu, Kami Akan Mencucinya Dengan Bersih Dan Wangi.</p>
                            <img src="{{ asset('assets/icon/shirt-long-kiloan.svg') }}" alt="Cuci Kiloan Icon"
                                class="card-icon">
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-md-3 mb-4">
                        <div class="layanan-card card2">
                            <h3>Cuci Satuan</h3>
                            <p>Punya Pakaian Spesial? Kami Siap Merawatnya Dengan Penuh Perhatian Agar Tetap Bersih Dan
                                Awet.</p>
                            <img src="{{ asset('assets/icon/shirt-long-satuan.svg') }}" alt="Cuci Satuan Icon"
                                class="card-icon">
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-3 mb-4">
                        <div class="layanan-card card3">
                            <h3>Perawatan Pakaian</h3>
                            <p>Dari Selimut Hingga Jas, Kami Punya Perawatan Khusus Agar Tetap Bersih, Lembut, Dan Nyaman
                                Dipakai.</p>
                            <img src="{{ asset('assets/icon/shirt-long-clean.svg') }}" alt="Perawatan Icon"
                                class="card-icon">
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-3 mb-4">
                        <div class="layanan-card layanan-card-primary card4">
                            <h3>Pick-Up & Delivery</h3>
                            <p>Santai Di Rumah, Kami Yang Jemput Dan Antar Laundry-Mu! Praktis, Mudah, Dan Tanpa Ribet.</p>
                            <img src="{{ asset('assets/icon/shirt-long-driver.svg') }}" alt="Delivery Icon"
                                class="card-icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home3">
        <div class="pakaiFooamy">
            <div class="container d-flex justify-content-between align-items-center p-0">
                <!-- Left Side - Cards -->
                <div class="cards-container d-flex flex-wrap">
                    <!-- Card 1 -->
                    <div class="pakai-card card1">
                        <h3>Nikmati Waktu Luang Tanpa Ribet</h3>
                        <p>
                            Praktis Dan Hemat! Cukup Timbang Pakaianmu, Kami Akan Mencucinya Dengan Bersih Dan Wangi.
                        </p>
                    </div>
                    <!-- Card 2 -->
                    <div class="pakai-card card2">
                        <h3>Antar-Jemput, Biar Kami Yang Urus!</h3>
                        <p>
                            Pesan Laundry Dari Mana Saja Dan Kapan Saja. Fooamy Siap Menjemput Pakaianmu Dan Mengantarkannya
                            Kembali Dalam Keadaan Bersih Dan Wangi!
                        </p>
                    </div>
                    <!-- Card 3 -->
                    <div class="pakai-card card3">
                        <h3>Cucian Terpantau, Hasil Terjamin</h3>
                        <p>
                            Fooamy Memastikan Setiap Pakaian Dicuci Dengan Sistem Yang Terorganisir Dan Berkualitas.
                        </p>
                    </div>
                    <!-- Card 4 -->
                    <div class="pakai-card card4">
                        <h3>Hemat Waktu & Biaya</h3>
                        <p>
                            Bayar Lebih Mudah Dengan Metode Non-Tunai, Plus Nikmati Promo Menarik Yang Bikin Laundry Lebih
                            Hemat.
                        </p>
                    </div>
                </div>

                <!-- Right Side - Title -->
                <div class="pakai-title text-end">
                    <h1>Kenapa Harus Pakai Fooamy?</h1>
                    <p>Fooamy Bisa Bantu Kamu Dalam Berbagai Macam Hal Seperti</p>
                </div>
            </div>
        </div>
    </section>
    <section class="home4">
        <div class="caraKerja">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Background Bubble -->
                <img src="{{ asset('assets/img/bg-caraKerja.svg') }}" alt="Background Bubble" class="bubble-background">
                <div class="col-md-6">
                    <!-- Left Section - Title & Social Media -->
                    <div class="caraKerja-title">
                        <h1>Cara Kerja Fooamy</h1>
                        <p>Masih Penasaran ?, Kamu Bisa Cek Atau Hubungi Sosial Media Fooamy</p>
                        <div class="social-icons-home">
                            <a href="#" class="icon facebook">
                                <i class="fi fi-brands-facebook"></i>
                            </a>
                            <a href="#" class="icon instagram">
                                <i class="fi fi-brands-instagram"></i>
                            </a>
                            <a href="#" class="icon twitter">
                                <i class="fi fi-brands-twitter-alt"></i>
                            </a>
                            <a href="#" class="icon whatsapp">
                                <i class="fi fi-brands-whatsapp"></i>
                            </a>
                            <a href="#" class="icon youtube">
                                <i class="fi fi-brands-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Right Section - Cards -->
                    <div class="cards-container-carakerja d-flex flex-wrap">
                        <div class="caraKerja-card card2">
                            <h3>Buat Draft Pemesanan Untuk Proses Lebih Cepat</h3>
                            <p>Bagi Pengguna Aplikasi, Kamu Bisa Membuat Draft Pesanan Terlebih Dahulu. Saat Tiba Di Loket,
                                Cukup Scan QR Code Untuk Mempercepat Proses Input Pesanan.</p>
                            <span class="card-number">2</span>
                        </div>

                        <div class="caraKerja-card card1">
                            <h3>Pesan Lewat Aplikasi Atau Datang Langsung</h3>
                            <p>Gunakan Aplikasi Fooamy Untuk Memesan Layanan Atau Langsung Datang Ke Loket/HQ. Jika Kamu
                                Menggunakan Aplikasi, Data Pesanan Akan Otomatis Tersimpan Untuk Kemudahan Pelacakan.</p>
                            <span class="card-number">1</span>
                        </div>

                        <div class="caraKerja-card card4">
                            <h3>Ambil Atau Diantar Sesuai Pilihanmu</h3>
                            <p>Pesanan Bisa Diambil Sendiri Di Loket Atau Diantar Langsung Ke Rumahmu. Pembayaran Juga
                                Fleksibel, Bisa Dilakukan Saat Pemesanan Atau Saat Pengambilan.</p>
                            <span class="card-number">4</span>
                        </div>

                        <div class="caraKerja-card card3">
                            <h3>Proses Pencucian Dengan Kualitas Terjamin</h3>
                            <p>Pakaian Dicuci Dengan Mesin Berstandar Industri Dan Tenaga Profesional Untuk Memastikan
                                Kebersihan Serta Perawatan Terbaik.</p>
                            <span class="card-number">3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home5">
        <div class="segera-hadir-section"
            style="background-image: url('{{ asset('assets/img/segeraHadir.svg') }}'); background-size: cover; background-position: center;">
            <div class="container segera-hadir-container text-center">
                <h1 class="segera-hadir-title">Fooamy Segera Hadir di Jakarta dan Sekitarnya!</h1>
                <p class="segera-hadir-caption">
                    Pengalaman Laundry Modern Yang Lebih Praktis Dan Efisien Akan Segera Bisa Kamu Nikmati! Siap-Siap Untuk
                    Layanan Laundry Dengan Antar-Jemput, Pemantauan Proses Real-Time, Dan Kemudahan Dalam Genggamanmu!
                </p>
                <p class="segera-hadir-note">
                    Jangan Sampai Ketinggalan! Daftar Sekarang Dan Jadilah Yang Pertama Merasakan Revolusi Laundry Di
                    Kotamu!
                </p>
            </div>
        </div>
    </section>
    <section class="home6">
        <div class="testimoni-section">
            <div class="container text-center">
                <!-- Section Title -->
                <h1 class="testimoni-title mb-5">Apa Kata Mereka Tentang Fooamy?</h1>

                <!-- Testimoni Cards -->
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-6 mb-4 d-flex justify-content-end">
                        <div class="testimoni-card">
                            <!-- Header: Profil + Nama -->
                            <div class="testimoni-header">
                                <img src="{{ asset('assets/img/Fo.svg') }}" alt="Profile Picture" class="profile-icon">
                                <div>
                                    <h2 class="testimoni-name">Budi Santoso</h2>
                                </div>
                            </div>

                            <p class="testimoni-job">Software Developer - Bekasi</p>
                            <!-- Text -->
                            <p class="testimoni-text">
                                "Aplikasi Fooamy Sangat User-Friendly Dan Mudah Digunakan. Fitur Tracking Pesanan Membantu
                                Saya
                                Mengetahui Status Laundry Secara Real-Time. Integrasi Dengan Pembayaran Digital Juga
                                Memudahkan
                                Transaksi."
                            </p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-6 mb-4 d-flex justify-content-start">
                        <div class="testimoni-card">
                            <!-- Header: Profil + Nama -->
                            <div class="testimoni-header">
                                <img src="{{ asset('assets/img/Fo.svg') }}" alt="Profile Picture" class="profile-icon">
                                <div>
                                    <h2 class="testimoni-name">Anita Wijaya</h2>
                                </div>
                            </div>

                            <p class="testimoni-job">Manajer Operasional - Jakarta</p>
                            <!-- Text -->
                            <p class="testimoni-text">
                                "Konsep Fooamy sangat inovatif! Dengan sistem antar-jemput dan fitur draft pesanan,
                                pelanggan bisa menghemat banyak waktu. Saya yakin layanan ini akan berkembang pesat di
                                kota-kota besar."
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Card 3 -->
                    <div class="col-6 mb-4 d-flex justify-content-end">
                        <div class="testimoni-card">
                            <!-- Header: Profil + Nama -->
                            <div class="testimoni-header">
                                <img src="{{ asset('assets/img/Fo.svg') }}" alt="Profile Picture" class="profile-icon">
                                <div>
                                    <h2 class="testimoni-name">Rizal Permana</h2>
                                </div>
                            </div>

                            <p class="testimoni-job">Pengusaha - Bali</p>
                            <!-- Text -->
                            <p class="testimoni-text">
                                "Sebagai pebisnis, saya butuh layanan laundry yang cepat dan efisien. Fooamy menawarkan
                                solusi praktis dengan layanan berbasis aplikasi yang modern dan transparan."
                            </p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-6 mb-4 d-flex justify-content-start">
                        <div class="testimoni-card">
                            <!-- Header: Profil + Nama -->
                            <div class="testimoni-header">
                                <img src="{{ asset('assets/img/Fo.svg') }}" alt="Profile Picture" class="profile-icon">
                                <div>
                                    <h2 class="testimoni-name">Fitri Handayani</h2>
                                </div>
                            </div>

                            <p class="testimoni-job">Ibu Rumah Tangga - Bekasi</p>
                            <!-- Text -->
                            <p class="testimoni-text">
                                "Saya suka bagaimana Fooamy memberikan banyak pilihan layanan laundry. Mulai dari cuci
                                kiloan hingga satuan, semuanya bisa diatur dengan mudah di aplikasi. Sangat membantu!"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="download-section">
        @include('layout.download')
    </section>
    @include('layout.wa-icon-fixed-bottom')
@endsection
