document.addEventListener('DOMContentLoaded', function () {
    // =================== HITUNG HARGA KILOAN ===================
    function hitungHarga() {
        let berat = parseFloat(document.getElementById('kiloanInput').value);
        let jenisCuci = document.getElementById('jenisCuci').value; // Ambil jenis cuci yang dipilih

        if (isNaN(berat) || berat < 1) {
            berat = 1;
        }

        // Struktur harga berdasarkan tabel
        const harga = {
            lipat: {
                reguler: [8500, 8000, 7500, 7000], // [1 kg, >=5 kg, >=10 kg, >10 kg]
                express: [12000, 11500, 10500, 10000]
            },
            gosok: {
                reguler: [10000, 9500, 9000, 8500], // [1 kg, >=5 kg, >=10 kg, >10 kg]
                express: [14000, 13500, 13000, 12000]
            }
        };

        let index = 0;
        if (berat >= 10) index = 3;
        else if (berat >= 5) index = 2;
        else if (berat > 1) index = 1;

        let totalReguler = berat * harga[jenisCuci].reguler[index];
        let totalExpress = berat * harga[jenisCuci].express[index];

        let formatRupiah = number => 'Rp ' + number.toLocaleString('id-ID');

        document.getElementById('totalHargaReguler').innerText = formatRupiah(totalReguler);
        document.getElementById('totalHargaExpress').innerText = formatRupiah(totalExpress);
    }

    document.getElementById('estimasiBtn').addEventListener('click', hitungHarga);
    document.getElementById('jenisCuci').addEventListener('change', hitungHarga);
});

document.addEventListener('DOMContentLoaded', function () {
    // =================== FILTER DROPDOWN KATEGORI ===================
    document.getElementById('categoryFilter').addEventListener('change', function () {
        let selectedCategory = this.value;
        let currentParams = new URLSearchParams(window.location.search);
        currentParams.set('category', selectedCategory);
        window.location.search = currentParams.toString();
    });

    // =================== SEARCH BAR ENTER EVENT ===================
    document.querySelector('.search-input').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            let searchText = this.value.trim();
            let currentParams = new URLSearchParams(window.location.search);
            currentParams.set('search', searchText);
            window.location.search = currentParams.toString();
        }
    });

    // =================== SORTING TABLE FUNCTION ===================
    document.querySelectorAll('.sort-btn').forEach(button => {
        button.addEventListener('click', function () {
            let column = this.getAttribute('data-column');
            let currentParams = new URLSearchParams(window.location.search);
            let currentOrder = currentParams.get('order') === 'asc' ? 'desc' : 'asc';

            console.log(`Sorting Column: ${column}, Order: ${currentOrder}`); // Debugging

            currentParams.set('sort', column);
            currentParams.set('order', currentOrder);

            window.location.search = currentParams.toString();
        });
    });

    // =================== PENOMORAN TETAP BERURUTAN SAAT SORTING ===================
    function updateTableNumbers() {
        let rows = document.querySelectorAll('#hargaSatuanTable tbody tr');
        rows.forEach((row, index) => {
            let nomorCell = row.querySelector('.nomor-table');
            if (nomorCell) {
                nomorCell.innerText = index + 1;
            }
        });
    }
    updateTableNumbers();
});
