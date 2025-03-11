@extends('layout.master')
@section('title', 'Home')
@section('content')
    @include('layout.navbar')

    <section class="karir">
        <div class="container karir-container my-5 py-5">
            <!-- Title -->
            <h1 class="karir-title mb-4">Kerja Bareng Fooamy Yuk</h1>

            <!-- Filter Buttons -->
            <div class="filter-buttons mb-5">
                <button class="btn btn-all filter-btn active" data-filter="all">All</button>
                <button class="btn filter-btn" data-filter="courier">Courier Agent</button>
                <button class="btn filter-btn" data-filter="developer">Developer</button>
            </div>

            <!-- Job Cards -->
            <div class="job-cards">
                <a href="/karir/full-stack-web-developer">
                    <div class="job-card">
                        <h2 class="job-title">Full Stack Web Developer</h2>
                        <p class="job-date">10 Januari 2025</p>
                    </div>
                </a>
                <div class="job-card">
                    <h2 class="job-title">Kurir Agen</h2>
                    <p class="job-date">22 Februari 2025</p>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination-container text-center mt-5">
                <nav aria-label="Pagination">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item disabled">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>

    @include('layout.download')
    @include('layout.wa-icon-fixed-bottom')
@endsection
