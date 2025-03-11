@extends('layout.master')
@section('title', 'Privacy Policy')
@section('content')
    @include('layout.navbar')

    <section class="privacy-policy">
        <div class="container privacy-container my-5">
            <h1 class="fw-bold mb-4">Kebijakan Privasi</h1>

            <div class="privacy-content">
                <h3 class="fw-bold">Pengantar</h3>
                <p>
                    Fooamy berkomitmen untuk melindungi privasi pengguna. Kebijakan ini menjelaskan bagaimana kami
                    mengumpulkan, menggunakan, dan melindungi informasi pribadi Anda saat menggunakan layanan Fooamy.
                </p>

                <h3 class="fw-bold mt-4">Informasi yang Kami Kumpulkan</h3>
                <ul>
                    <li>Informasi Pribadi: Nama, alamat, nomor telepon, dan email saat mendaftar.</li>
                    <li>Informasi Transaksi: Detail pesanan, metode pembayaran, dan riwayat transaksi.</li>
                    <li>Informasi Perangkat: Data teknis dari perangkat yang digunakan, seperti alamat IP dan jenis browser.
                    </li>
                    <li>Informasi Lokasi: Jika diizinkan, kami dapat mengakses lokasi untuk layanan antar-jemput.</li>
                </ul>

                <h3 class="fw-bold mt-4">Penggunaan Informasi</h3>
                <p>
                    Informasi yang dikumpulkan digunakan untuk:
                </p>
                <ul>
                    <li>Memproses pesanan dan menyediakan layanan.</li>
                    <li>Menghubungi pengguna terkait pesanan atau promosi.</li>
                    <li>Meningkatkan kualitas layanan dan pengalaman pengguna.</li>
                    <li>Menjaga keamanan dan mencegah penipuan.</li>
                </ul>

                <h3 class="fw-bold mt-4">Perlindungan Data</h3>
                <p>
                    Fooamy menerapkan langkah-langkah keamanan untuk melindungi informasi pengguna dari akses, perubahan,
                    atau pengungkapan yang tidak sah.
                </p>

                <h3 class="fw-bold mt-4">Berbagi Informasi</h3>
                <p>
                    Kami tidak menjual atau membagikan informasi pribadi tanpa izin, kecuali:
                </p>
                <ul>
                    <li>Jika diwajibkan oleh hukum.</li>
                    <li>Untuk bekerja sama dengan penyedia layanan pihak ketiga guna mendukung operasional Fooamy.</li>
                </ul>

                <h3 class="fw-bold mt-4">Hak Pengguna</h3>
                <p>
                    Pengguna memiliki hak untuk:
                </p>
                <ul>
                    <li>Mengakses, memperbarui, atau menghapus informasi pribadi.</li>
                    <li>Menolak pengumpulan data tertentu.</li>
                    <li>Menarik persetujuan atas pengumpulan data tertentu.</li>
                </ul>

                <h3 class="fw-bold mt-4">Perubahan Kebijakan</h3>
                <p>
                    Fooamy dapat memperbarui kebijakan ini sewaktu-waktu. Pengguna akan diberitahu jika ada perubahan
                    signifikan.
                </p>

                <h3 class="fw-bold mt-4">Kontak</h3>
                <p>
                    Jika ada pertanyaan mengenai kebijakan ini, silakan hubungi kami melalui email: <a
                        href="mailto:support@fooamy.com" class="">support@fooamy.com</a>
                </p>
            </div>
        </div>
    </section>
    @include('layout.wa-icon-fixed-bottom')
@endsection
