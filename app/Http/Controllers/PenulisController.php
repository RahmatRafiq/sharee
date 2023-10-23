<?php
namespace App\Http\Controllers;

use App\Models\Penulis;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenulisController extends Controller
{
    public function index()
    {
        $penulis = Penulis::all();
        $tentangkami = TentangKami::first();
        return view('backend.penulis.index', compact('penulis', 'tentangkami'));
    }

    public function create()
    {
        $tentangkami = TentangKami::first();

        return view('backend.penulis.create', compact('tentangkami'));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_penulis' => 'required|min:2',
        ]);
        Penulis::create([
            'nama_penulis' => $request->nama_penulis,
            'slug' => Str::slug($request->nama_penulis),
        ]);

        return redirect()->route('penulis.index')->with(['success' => 'Data Berhasi Disimpan']);

    }

    public function edit($id)
    {
        $tentangkami = TentangKami::first();
        $penulis = Penulis::find($id);
        return \view('backend.penulis.edit', compact('penulis', 'tentangkami'));

    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->nama_penulis);

        $penulis = Penulis::findOrFail($id);
        $penulis->update($data);

        return redirect()->route('penulis.index')->with(['success' => 'Data Berhasi Terupdate']);

    }

    public function destroy($id)
    {
        $penulis = Penulis::find($id);
        $penulis->delete();
        return redirect()->route('penulis.index')->with(['success' => 'Data Berhasi Dihapus']);
    }
}
