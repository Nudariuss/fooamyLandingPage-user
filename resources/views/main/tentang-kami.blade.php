@extends('layout.master')
@section('title', 'Tentang Kami')
@section('content')
    @include('layout.navbar')

    <section class="tentang1">
        <div class="kenalan container">
            <div class="row mb-4">
                <h1>Kenalan Sama Fooamy Yuk</h1>
                <p>
                    Fooamy adalah layanan laundry modern yang mengutamakan kemudahan, kecepatan, dan kualitas terbaik
                    untuk pelanggan. Dengan sistem berbasis aplikasi dan layanan antar-jemput, Fooamy hadir sebagai solusi
                    praktis untuk
                    kebutuhan harianmu.
                </p>
                <p>
                    Kami membantu kamu mencuci pakaian lebih mudah tanpa membuang waktu. Dengan harga yang transparan,
                    kamu bisa menikmati layanan laundry yang profesional baik di aplikasi maupun secara langsung di outlet
                    kami.
                </p>
            </div>
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/img/tentangKami-bg1.jpg') }}" alt="Tentang Kami" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/img/sebastian-herrmann--5juQ_l5vmU-unsplash.jpg') }}" alt="Laundry"
                            class="img-fluid small-image">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="tentang2">
        <div class="dalamAngka container text-center">
            <h2>Fooamy Dalam Angka</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card-tentangKami">
                        <img src="{{ asset('assets/img/jumlahInstal.svg') }}" alt="Jumlah Install">
                        <h3 class="jumlah">00+</h3>
                        <p>Jumlah Install Aplikasi Kami</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card-tentangKami">
                        <img src="{{ asset('assets/img/jumlahLocketHQ.svg') }}" alt="Jumlah Loket">
                        <h3 class="jumlah">00+</h3>
                        <p>Jumlah Loket Dan HQ Kami</p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card-tentangKami">
                        <img src="{{ asset('assets/img/custPuas.svg') }}" alt="Customer Puas">
                        <h3 class="jumlah">00+</h3>
                        <p>Customer Yang Puas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tentang3">
        <div class="visiMisi container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Visi -->
                    <div class="visi mb-4">
                        <h2>Visi Fooamy</h2>
                        <p>
                            Menjadi layanan laundry digital terdepan yang mengutamakan kemudahan, kecepatan, dan kualitas
                            dalam setiap proses pencucian. Fooamy berkomitmen untuk menghadirkan layanan berbasis aplikasi
                            yang modern dan efisien, sehingga pelanggan dapat menikmati proses laundry yang lebih praktis,
                            transparan, dan terpercaya. Kami juga mendukung mitra loket dan HQ dengan sistem terintegrasi
                            yang meningkatkan efisiensi operasional serta memberikan keuntungan maksimal. Dengan inovasi
                            teknologi dan metode ramah lingkungan, Fooamy terus berkembang untuk menciptakan standar baru
                            dalam industri laundry digital yang berkualitas, berkelanjutan, dan dapat diandalkan.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Misi -->
                    <div class="misi">
                        <h2>Misi Fooamy</h2>
                        <p class="mb-4">
                            Fooamy menghadirkan layanan laundry modern berbasis aplikasi dengan proses end-to-end, mulai
                            dari pemesanan, penjemputan, pencucian, hingga pengantaran kembali untuk kemudahan pelanggan.
                        </p>
                        <p>
                            Kami mengintegrasikan sistem loket dan HQ guna meningkatkan efisiensi operasional serta
                            keuntungan mitra. Transparansi harga dan pelayanan profesional menjadi komitmen utama kami.
                        </p>
                        <p>
                            Fooamy terus berinovasi dengan teknologi terbaru dan menerapkan metode ramah lingkungan untuk
                            menciptakan layanan laundry berkualitas, berkelanjutan, dan dapat diandalkan.
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </section>

    @include('layout.download')
    @include('layout.wa-icon-fixed-bottom')
@endsection
