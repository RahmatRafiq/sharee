<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Tags;
use App\Models\TentangKami;

class DashboardController extends Controller
{
   
    public function index()
    {
        $jumlahPenulis = Penulis::count(); // Menghitung jumlah penulis
        $jumlahTags = Tags::all();
        $jumlahArtikel = Artikel::count(); // Menghitung jumlah artikel
        $jumlahKategori = Kategori::count(); // Menghitung jumlah penulis
        $tentangkami = TentangKami::first();

        return view('backend.dashboard', compact
            ('jumlahPenulis', 'jumlahTags', 'jumlahArtikel', 'jumlahKategori', 'tentangkami', ));

    }
}
