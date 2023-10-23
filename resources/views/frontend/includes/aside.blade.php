<div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Kategori</div>
    </div>
    <div class="clearfix"></div>
    <div class="fh5co_tags_all">
        @foreach ($kategori as $item)
            <a href="{{ route('kategori', $item->slug) }}" class="fh5co_tagg">{{ $item->nama_kategori }}</a>
        @endforeach
    </div>
    <div>
        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Berita Terpopuler Bulan
            {{ now()->locale('id')->translatedFormat('F') }}</div>
    </div>
    <div class="row pb-3">
        @foreach ($artikelbulan as $item)
            <div class="col-5 align-self-center" style="margin-bottom: 20px;">
                <a href="{{ route('detail-artikel', $item->slug) }}">
                    <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img"
                        class="fh5co_most_trading" />
                </a>
            </div>
            <div class="col-7 paddding" style="margin-bottom: 20px;">
                <a href="{{ route('detail-artikel', $item->slug) }}">
                    <div class="most_fh5co_treding_font" style="color: black;">{{ $item->judul }}</div>
                    <div class="most_fh5co_treding_font_123" style="color: black;">
                        {{ date_format($item->created_at, 'd F, Y') }}</div>
                </a>
            </div>
        @endforeach
    </div>
</div>
