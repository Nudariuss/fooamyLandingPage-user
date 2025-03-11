@extends('layout.master')
@section('title', 'Daftar Harga Laundry')
@section('content')

    @include('layout.navbar')

    <section class="daftar-harga-laundry container">
        <div class="container mt-4 p-0">
            <h1>Daftar Harga Laundry Fooamy</h1>
        </div>

        <!-- Harga Kiloan -->
        <div class="harga-kiloan mt-4">
            <h2>Harga Kiloan</h2>
            <div class="card p-4 shadow">
                <div class="d-flex align-items-center gap-3">
                    <div class="d-flex flex-column kiloan-awal">
                        <!-- Dropdown Jenis Cuci -->
                        <div class="custom-dropdown-container-kiloan">
                            <select id="jenisCuci" class="form-select custom-dropdown mb-2">
                                <option value="lipat">Cuci & Lipat</option>
                                <option value="gosok">Cuci Gosok</option>
                            </select>
                            <i class="fi fi-rr-angle-down dropdown-icon-kiloan"></i>
                        </div>

                        <!-- Input Berat -->
                        <label for="kiloanInput" class="fw-bold label-input">Input Berat</label>
                        <div class="input-group kiloan-input-group">
                            <input type="number" class="form-control kiloan-input text-start" value="1" id="kiloanInput" min="1">
                            <span class="input-group-text">Kg</span>
                        </div>

                        <!-- Button Estimasi -->
                        <button class="btn btn-primary mt-2 px-4" id="estimasiBtn">Estimasi</button>
                    </div>

                    <!-- Harga Express -->
                    <div class="d-flex flex-column align-items-start text-white flex-grow-1 card-express">
                        <p class="mb-1">Express</p>
                        <h3 id="totalHargaExpress">Rp 12.000</h3>
                    </div>

                    <!-- Harga Reguler -->
                    <div class="d-flex flex-column align-items-start text-white flex-grow-1 card-reguler">
                        <p class="mb-1">Reguler</p>
                        <h3 id="totalHargaReguler">Rp 8.500</h3>
                    </div>
                </div>

            </div>
        </div>

        <!-- Harga Satuan -->
        <div class="harga-satuan mt-5">
            <h2>Harga Satuan</h2>
            <div class="d-flex align-items-center gap-3">
                <!-- Form Select untuk Filter Kategori -->
                <div class="custom-dropdown-container">
                    <select class="form-select custom-dropdown" id="categoryFilter">
                        <option value="">Semua Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category }}" {{ request('category') == $category ? 'selected' : '' }}>
                                {{ ucfirst($category) }}
                            </option>
                        @endforeach
                    </select>
                    <i class="fi fi-rr-angle-down dropdown-icon"></i>
                </div>

                <form method="GET" action="{{ route('daftar-harga-laundry') }}">
                    <div class="input-group search-bar">
                        <span class="input-group-text"><i class="fi fi-rr-search search-icon"></i></span>
                        <input type="text" name="search" class="form-control search-input" placeholder="Search"
                            value="{{ request('search') }}" onkeypress="handleEnter(event)">
                    </div>
                </form>
            </div>

            <!-- Table Harga Satuan -->
            <div class="table-responsive mt-3">
                <table id="hargaSatuanTable" class="table harga-satuan-table">
                    <thead>
                        <tr>
                            <th class="nomor-table text-center">Nomor</th>
                            <th>
                                <div class="th-sortable">
                                    Nama
                                    <button class="sort-btn" data-column="nama" data-order="{{ request('sort') === 'nama' && request('order') === 'asc' ? 'desc' : 'asc' }}">
                                        <i class="fas {{ request('sort') === 'nama' ? (request('order') === 'asc' ? 'fa-sort-up' : 'fa-sort-down') : 'fa-sort' }}"></i>
                                    </button>
                                </div>
                            </th>
                            <th>
                                <div class="th-sortable">
                                    Kategori
                                    <button class="sort-btn" data-column="category" data-order="{{ request('sort') === 'category' && request('order') === 'asc' ? 'desc' : 'asc' }}">
                                        <i class="fas {{ request('sort') === 'category' ? (request('order') === 'asc' ? 'fa-sort-up' : 'fa-sort-down') : 'fa-sort' }}"></i>
                                    </button>
                                </div>
                            </th>
                            <th>
                                <div class="th-sortable">
                                    Express
                                    <button class="sort-btn" data-column="express" data-order="{{ request('sort') === 'express' && request('order') === 'asc' ? 'desc' : 'asc' }}">
                                        <i class="fas {{ request('sort') === 'express' ? (request('order') === 'asc' ? 'fa-sort-up' : 'fa-sort-down') : 'fa-sort' }}"></i>
                                    </button>
                                </div>
                            </th>
                            <th>
                                <div class="th-sortable">
                                    Reguler
                                    <button class="sort-btn" data-column="reguler" data-order="{{ request('sort') === 'reguler' && request('order') === 'asc' ? 'desc' : 'asc' }}">
                                        <i class="fas {{ request('sort') === 'reguler' ? (request('order') === 'asc' ? 'fa-sort-up' : 'fa-sort-down') : 'fa-sort' }}"></i>
                                    </button>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prices as $price)
                            <tr>
                                <td class="nomor-table text-center">
                                    {{ ($prices->currentPage() - 1) * $prices->perPage() + $loop->iteration }}</td>
                                <td>{{ $price->nama }}</td>
                                <td>{{ $price->category }}</td>
                                <td>Rp{{ number_format($price->express, 0, ',', '.') }}</td>
                                <td>Rp{{ number_format($price->reguler, 0, ',', '.') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="pagination-container mt-4">
                    {{ $prices->appends(request()->query())->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>

    @include('layout.download')
    @include('layout.wa-icon-fixed-bottom')

    <script src="{{ asset('js/daftar-harga.js') }}"></script>

@endsection
