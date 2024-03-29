<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $tentangkami = TentangKami::first();
        return view('backend.kategori.index', compact('kategori', 'tentangkami'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
        ]);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori,
            'slug' => Str::slug($request->nama_kategori),
        ]);

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function edit($id)
    {
        $tentangkami = TentangKami::first();
        $kategori = Kategori::find($id);
        return \view('backend.kategori.edit', compact('kategori', 'tentangkami'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kategori' => 'required|min:2',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->slug = Str::slug($request->nama_kategori);
        $kategori->save();

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
