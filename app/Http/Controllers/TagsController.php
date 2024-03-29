<?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Tags;
// use App\Models\TentangKami;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;

// class TagsController extends Controller
// {

//     public function index()
//     {
//         $tags = Tags::all();
//         $tentangkami = TentangKami::first();
//         return view('backend.tags.index', compact('tags', 'tentangkami'));
//     }

//     public function store(Request $request)
//     {
//         $this->validate($request, [
//             'nama_tags' => 'required|min:2',
//         ]);

//         $tags = Tags::create([
//             'nama_tags' => $request->nama_tags,
//             'slug' => Str::slug($request->nama_tags),
//         ]);
//         return redirect()->route('tags.index')->with(['success' => 'Data Berhasil Disimpan']);
//     }

//     public function update(Request $request, $id)
//     {
//         $this->validate($request, [
//             'nama_tags' => 'required|min:2',
//         ]);

//         $tags = Tags::findOrFail($id);
//         $tags->nama_tags = $request->nama_tags;
//         $tags->slug = Str::slug($request->nama_tags);
//         $tags->save();

//         return redirect()->route('tags.index')->with(['success' => 'Data Berhasil Diperbarui']);
//     }

//     public function destroy($id)
//     {
//         $tags = Tags::findOrFail($id);
//         $tags->delete();

//         return redirect()->route('tags.index')->with(['success' => 'Data Berhasil Dihapus']);
//     }
// }

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController extends Controller
{

    public function index()
    {
        $tags = Tags::all();
        $tentangkami = TentangKami::first();
        return view('backend.tags.index', compact('tags', 'tentangkami'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_tags' => 'required|min:2',
        ]);

        $tags = Tags::create([
            'nama_tags' => $request->nama_tags,
            'slug' => Str::slug($request->nama_tags),
        ]);
        return redirect()->route('tags.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'edit_nama_tags' => 'required|min:2',
        ]);

        $tags = Tags::findOrFail($id);
        $tags->nama_tags = $request->edit_nama_tags;
        $tags->slug = Str::slug($request->edit_nama_tags);
        $tags->save();

        return redirect()->route('tags.index')->with(['success' => 'Data Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $tags = Tags::findOrFail($id);
        $tags->delete();

        return redirect()->route('tags.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
