@extends('layout.master')
@section('title', 'Terms & Conditions')
@section('content')
    @include('layout.navbar')

    <section class="terms-condition">
        <div class="container terms-container my-5">
            <h1 class="fw-bold mb-4">Syarat dan Ketentuan</h1>

            <div class="terms-content">
                <h3 class="fw-bold">Pendahuluan</h3>
                <p>
                    Selamat datang di Fooamy! Dengan menggunakan layanan kami, Anda setuju untuk mematuhi syarat dan
                    ketentuan berikut.
                </p>

                <h3 class="fw-bold mt-4">Layanan</h3>
                <p>
                    Fooamy menyediakan layanan laundry dengan berbagai pilihan, termasuk cuci biasa, setrika, dan
                    antar-jemput. Kami berusaha memberikan layanan terbaik dengan standar kebersihan tinggi.
                </p>

                <h3 class="fw-bold mt-4">Pemesanan dan Pembayaran</h3>
                <ul>
                    <li>Pelanggan dapat memesan layanan melalui aplikasi Fooamy atau langsung ke lokasi kami.</li>
                    <li>Pembayaran dapat dilakukan secara tunai atau non-tunai melalui aplikasi.</li>
                    <li>Fooamy berhak menolak pesanan jika terdapat kendala operasional.</li>
                </ul>

                <h3 class="fw-bold mt-4">Pengambilan dan Pengantaran</h3>
                <ul>
                    <li>Layanan antar-jemput tersedia di area yang telah ditentukan.</li>
                    <li>Pelanggan bertanggung jawab atas keakuratan alamat dan waktu penjemputan/pengantaran.</li>
                    <li>Keterlambatan pengantaran dapat terjadi karena faktor eksternal seperti cuaca dan lalu lintas.</li>
                </ul>

                <h3 class="fw-bold mt-4">Tanggung Jawab dan Klaim</h3>
                <ul>
                    <li>Fooamy tidak bertanggung jawab atas kehilangan atau kerusakan akibat kelalaian pelanggan.</li>
                    <li>Klaim kerusakan harus diajukan dalam waktu 24 jam setelah pengembalian laundry.</li>
                    <li>Maksimal penggantian yang diberikan adalah 5x biaya layanan yang dibayarkan.</li>
                </ul>

                <h3 class="fw-bold mt-4">Kebijakan Pembatalan</h3>
                <ul>
                    <li>Pembatalan dapat dilakukan sebelum proses pencucian dimulai.</li>
                    <li>Tidak ada pengembalian dana untuk pesanan yang dibatalkan.</li>
                </ul>

                <h3 class="fw-bold mt-4">Privasi dan Data Pengguna</h3>
                <ul>
                    <li>Fooamy berkomitmen menjaga privasi pelanggan.</li>
                    <li>Data pelanggan hanya digunakan untuk kepentingan layanan dan tidak akan dibagikan ke pihak ketiga
                        tanpa izin.</li>
                </ul>

                <h3 class="fw-bold mt-4">Perubahan Syarat & Ketentuan</h3>
                <p>
                    Fooamy berhak mengubah ketentuan ini sewaktu-waktu. Perubahan akan diinformasikan melalui aplikasi atau
                    situs web resmi.
                </p>

                <p class="mt-3">
                    Dengan menggunakan layanan Fooamy, Anda menyetujui seluruh syarat dan ketentuan yang berlaku. Jika ada
                    pertanyaan, silakan hubungi layanan pelanggan kami. Terima kasih telah memilih Fooamy!
                </p>
            </div>
        </div>
    </section>
    @include('layout.wa-icon-fixed-bottom')
@endsection
