@extends('frontend.layouts.frontend')

@section('content')
    <html lang="en" class="no-js">

    <body class="single ">
        <div class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        @forelse ($artkl as $item)
                            @if ($loop->first)
                                <div>
                                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">
                                        <h1>
                                            Berita
                                            {{ $item->kategori->nama_kategori }}
                                    </div>
                                    </h2>
                                </div>
                                <div class="row pb-4">
                            @endif

                            <a href="{{ route('detail-artikel', $item->slug) }}" class="col-md-4">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img">
                                        <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="" />
                                    </div>
                                    <div></div>
                                </div>
                                <div class="fh5co_magna py-2">{{ $item->judul }}</div>
                                <div class="fh5co_mini_time py-3">
                                    {{ $item->penulis->nama_penulis }} - {{ $item->created_at->format('d M Y') }}
                                </div>
                                <div class="fh5co_consectetur">
                                    <p>
                                        {{ Illuminate\Support\Str::limit(strip_tags($item->body), 100) }}
                                    </p>
                                </div>
                            </a>

                            @if ($loop->iteration % 3 == 0 || $loop->last)
                    </div>
                    @if (!$loop->last)
                        <div class="row pb-4">
                    @endif
                    @endif

                @empty
                    @if (isset($kategori))
                        <h2>Berita {{ $kategori->nama_kategori }} Kosong</h2>
                    @else
                        <h2>Berita Kategori yang Anda Pilih Kosong</h2>
                    @endif
                    @endforelse
                </div>
            </div>
        </div>
        @include('frontend.includes.js')
    </body>

    </html>
@endsection
