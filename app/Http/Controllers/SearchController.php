<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $artikel = Artikel::where('judul', 'like', '%' . $keyword . '%')
            ->orWhere('deskripsi', 'like', '%' . $keyword . '%')
            ->paginate(10);

        return view('frontend.detail.search', [
            'artikel' => $artikel,
            'keyword' => $keyword,
        ]);
    }

}
