<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TagsController extends Controller
{

    public function index()
    {
        $tags = Tags::all();
        return view('backend.tags.index', compact('tags'));
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

        return redirect()->route('backend.tags.index')->with(['success' => 'Data Berhasil Disimpan']);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_tags' => 'required|min:2',
        ]);

        $tags = Tags::findOrFail($id);
        $tags->nama_tags = $request->nama_tags;
        $tags->slug = Str::slug($request->nama_tags);
        $tags->save();

        return redirect()->route('backend.tags.index')->with(['success' => 'Data Berhasil Diperbarui']);
    }

    public function destroy($id)
    {
        $tags = Tags::findOrFail($id);
        $tags->delete();

        return redirect()->route('backend.tags.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
