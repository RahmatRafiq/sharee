<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Penulis;
use App\Models\Tags;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {

        $artikel = Artikel::all();
        $tentangkami = TentangKami::first();
        $tags = Tags::all();
        return view('backend.artikel.index',compact( 'tentangkami', 'tags', 'artikel'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        $tags = Tags::all();
        $tentangkami = TentangKami::first();

        return view('backend.artikel.create', compact('penulis', 'kategori', 'tentangkami', 'tags'));
    }

    public function store(Request $request)
    {

        $data_saved = array(
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'penulis_id' => $request->penulis_id,
            'body' => $request->body,
            'slug' => Str::slug($request->judul),
            'user_id' => Auth::id(),
            'views' => 0,
            'is_active' => $request->is_active,
            'tags_id' => $request->tags_id,
            'gambar_artikel' => $request->file('gambar_artikel')->store('artikel'),
        );

        Artikel::create($data_saved);
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasi Disimpan']);
    }

    public function edit($id)
    {
        $artikel = Artikel::find($id);
        $kategori = Kategori::all();
        $penulis = Penulis::all();
        $tags = Tags::all();
        $tentangkami = TentangKami::first();

        return view('backend.artikel.edit',compact('artikel','penulis', 'kategori', 'tentangkami', 'tags'));

    }

    public function update(Request $request, $id)
    {
        $data_saved = array(
            'judul' => $request->judul,
            'kategori_id' => $request->kategori_id,
            'penulis_id' => $request->penulis_id,
            'body' => $request->body,
            'slug' => Str::slug($request->judul),
            'user_id' => Auth::id(),
            'views' => 0,
            'tags_id' => $request->tags_id,
            'is_active' => $request->is_active,

        );

        $artikel = Artikel::find($id);

        if ($request->hasFile('gambar_artikel')) {
            if ($artikel->gambar_artikel) {
                Storage::delete($artikel->gambar_artikel);
            }
            $gambar_artikel = $request->file('gambar_artikel')->store('artikel');
            $data_saved['gambar_artikel'] = $gambar_artikel;
        }

        $artikel->update($data_saved);

        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasil Disimpan']);

    }

    public function destroy($id)
    {
        $artikel = Artikel::find($id);

        Storage::delete($artikel->gambar_artikel);

        $artikel->delete();

        return redirect()->back();
    }
}
