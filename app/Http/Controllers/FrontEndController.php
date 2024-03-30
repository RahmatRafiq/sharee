<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Tags;
use App\Models\TentangKami;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{

    public function index()
    {
        $penulis = Penulis::all();
        $artikel = Artikel::latest()->where('is_active', true)->paginate(5); // Hanya ambil artikel yang statusnya Publish
        $artkl = Artikel::orderBy('created_at', 'desc')->get();
        $artikelbulan = Artikel::orderBy('views', 'desc')->whereMonth('created_at', now()->month)->take(7)->get();
        $kategori = Kategori::all();
        $tags = Tags::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        return view('frontend.layouts.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'artkl' => $artkl,
            'penulis' => $penulis,
            'ktgr' => $ktgr,
            'tags' => $tags,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
            'artikelbulan' => $artikelbulan,
            'beritaTerpopulerTahun' => $beritaTerpopulerTahun,
        ]);
    }


    public function show($slug)
    {
        $artikel = Artikel::where('slug', $slug)->first();
        $artikel->increment('views');
        $artikel->status = $artikel->is_active ? 'Publish' : 'Draft';
        $kategori = Kategori::all();
        $tags = Tags::all();
        $ktgr = Kategori::all();
        $tentangkami = TentangKami::all();
        $artikelbulan = Artikel::orderBy('views', 'desc')->whereMonth('created_at', now()->month)->take(7)->get();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();



        return view('frontend.detail.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'ktgr' => $ktgr,
            'tags' => $tags,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
            'artikelbulan' => $artikelbulan,
            'beritaTerpopulerTahun' => $beritaTerpopulerTahun,

        ]);
    }

    public function kategori($slug)
    {
        $tentangkami = TentangKami::all();
        $kategori = Kategori::where('slug', $slug)->firstOrFail();
        $ktgr = Kategori::all();
        $tags = Tags::all();
        $artikel = Artikel::where('kategori_id', $kategori->id)->get();
        $artkl = Artikel::where('kategori_id', $kategori->id)->orderBy('created_at', 'desc')->get();
        $penulis = Penulis::all();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        return view('frontend.detail.blog-kategori', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'penulis' => $penulis,
            'artkl' => $artkl,
            'ktgr' => $ktgr,
            'tags' => $tags,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
            'beritaTerpopulerTahun' => $beritaTerpopulerTahun,
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $artikel = Artikel::where('judul', 'like', '%' . $keyword . '%')
            ->orWhere('body', 'like', '%' . $keyword . '%')
            ->paginate();

        $kategori = Kategori::all();
        $ktgr = Kategori::all();
        $tags = Tags::all();
        $tentangkami = TentangKami::all();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        return view('frontend.detail.search', [
            'artikel' => $artikel,
            'keyword' => $keyword,
            'kategori' => $kategori,
            'ktgr' => $ktgr,
            'tags' => $tags,
            'tentangkami' => $tentangkami,
            'trendingArtikel' => $trendingArtikel,
            'beritaTerpopulerTahun' => $beritaTerpopulerTahun,
        ]);
    }

    public function about()
    {
        $tentangkami = TentangKami::all();
        $ktgr = Kategori::all();
        $tags = Tags::all();
        $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
            ->whereMonth('created_at', now()->month)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();
        $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
            ->orderBy('views', 'desc')
            ->take(3)
            ->get();

        return view('frontend.detail.about', [
            'tentangkami' => $tentangkami,
            'ktgr' => $ktgr,
            'tags' => $tags,
            'trendingArtikel' => $trendingArtikel,
            'beritaTerpopulerTahun' => $beritaTerpopulerTahun,
        ]);

    }
    // public function tags($slug){
    //     $tags = Tags::all();
    //     $artikel = Artikel::all();
    //     $ktgr = Kategori::all();
    //     $tentangkami = TentangKami::all();
    //     $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
    //         ->whereMonth('created_at', now()->month)
    //         ->orderBy('views', 'desc')
    //         ->take(5)
    //         ->get();
    //     $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
    //         ->orderBy('views', 'desc')
    //         ->take(3)
    //         ->get();

    //     return view('frontend.detail.blog-tags', [
    //         'tags' => $tags,
    //         'ktgr' => $ktgr,
    //         'artikel' => $artikel,
    //         'tentangkami' => $tentangkami,
    //         'trendingArtikel' => $trendingArtikel,
    //         'beritaTerpopulerTahun' => $beritaTerpopulerTahun,
    //     ]);
    // }

    public function tags($slug)
{
    $tag = Tags::where('slug', $slug)->firstOrFail();
    $artikel = $tag->artikel()->get();
    $ktgr = Kategori::all();
    $tentangkami = TentangKami::all();
    $trendingArtikel = Artikel::where('created_at', '>=', now()->startOfWeek())
        ->whereMonth('created_at', now()->month)
        ->orderBy('views', 'desc')
        ->take(5)
        ->get();
    $beritaTerpopulerTahun = Artikel::whereYear('created_at', now()->year)
        ->orderBy('views', 'desc')
        ->take(3)
        ->get();

    return view('frontend.detail.blog-tags', [
        'tag' => $tag,
        'artikel' => $artikel,
        'ktgr' => $ktgr,
        'tentangkami' => $tentangkami,
        'trendingArtikel' => $trendingArtikel,
        'beritaTerpopulerTahun' => $beritaTerpopulerTahun,
    ]);
}

}
