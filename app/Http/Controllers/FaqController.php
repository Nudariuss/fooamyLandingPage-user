<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    public function index()
    {
        // Ambil data FAQ dari database
        $faqs = DB::table('faqs')->get();

        return view('main.faq', compact('faqs'));
    }
}
