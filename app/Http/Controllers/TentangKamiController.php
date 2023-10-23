<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TentangKamiController extends Controller
{

    public function index()
    {
        $tentangkami = TentangKami::first();
        $tentang = TentangKami::all();
        return view('backend.tentang-kami.index', compact('tentang', 'tentangkami'));
    }

    public function create()
    {

        $tentang = TentangKami::all();
        $tentangkami = TentangKami::first();
        return view('backend.tentang-kami.create', compact('tentang', 'tentangkami'));
    }

    public function store(Request $request)
    {
        $data_saved = array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'slug' => Str::slug($request->judul),
            'gambar' => $request->file('gambar')->store('tentang'),
        );

        TentangKami::create($data_saved);
        return redirect()->route('artikel.index')->with(['success' => 'Data Berhasi Disimpan']);

    }

    public function edit($id)
    {
        $tentangkami = TentangKami::first();
        $tentang = TentangKami::find($id);
        return \view ('backend.tentang-kami.edit', compact('tentang', 'tentangkami'));

    }

    public function update(Request $request, $id)
    {
        $data_saved = array(
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'slug' => Str::slug($request->judul),
            'views' => 0,
            'is_active' => 1,
        );

        $tentang = TentangKami::find($id);

        if ($tentang->gambar_artikel) {
            Storage::delete($tentang->gambar);
        }

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('tentang');
            $data_saved['gambar'] = $gambar;
        }

        $tentang->update($data_saved);

        return redirect()->route('tentang-kami.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function destroy($id)
    {
        $tentang = TentangKami::find($id);
        if ($tentang->gambar) {
            Storage::delete($tentang->gambar);
        }
        $tentang->delete();
        return redirect()->route('tentang-kami.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
