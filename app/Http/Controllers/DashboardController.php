<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\TentangKami;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlahPenulis = Penulis::count(); // Menghitung jumlah penulis
        $jumlahArtikel = Artikel::count(); // Menghitung jumlah artikel
        $jumlahKategori = Kategori::count(); // Menghitung jumlah penulis
        $tentangkami = TentangKami::first();

        return view('backend.dashboard', compact
            ('jumlahPenulis', 'jumlahArtikel', 'jumlahKategori', 'tentangkami', ));

    }
}
