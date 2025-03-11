<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriceController extends Controller
{
    public function index(Request $request)
    {
    $category = $request->query('category'); // Ambil filter kategori
    $search = $request->query('search'); // Ambil pencarian
    $sortColumn = $request->query('sort', 'nama'); // Default sorting by 'nama'
    $sortOrder = $request->query('order', 'asc'); // Default sorting order 'asc'

    $query = DB::table('prices');

    if ($category) {
        $query->where('category', $category);
    }

    if ($search) {
        $query->where('nama', 'like', "%{$search}%");
    }

    $prices = $query->orderBy($sortColumn, $sortOrder)->paginate(5);
    $categories = DB::table('prices')->select('category')->distinct()->pluck('category');

    return view('main.daftar-harga-laundry', compact('prices', 'categories'));
    }

}
