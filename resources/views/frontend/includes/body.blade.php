<body>
    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                @foreach ($trendingArtikel as $artikel)
                    <div class="item px-2">
                        <div class="fh5co_latest_trading_img_position_relative">
                            <div class="fh5co_latest_trading_img">
                                <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" alt=""
                                    class="fh5co_img_special_relative" />
                            </div>
                            <div class="fh5co_latest_trading_img_position_absolute"></div>
                            <div class="fh5co_latest_trading_img_position_absolute_1">
                                <a href="{{ route('detail-artikel', $artikel->slug) }}" class="text-white">
                                    {{ $artikel->judul }}
                                </a>
                                <div class="fh5co_latest_trading_date_and_name_color">
                                    {{ $artikel->penulis->nama_penulis }} - {{ $artikel->created_at->format('d M Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="container-fluid pb-4 pt-5">
            <div class="container animate-box">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Opini</div>
                </div>
                <div class="owl-carousel owl-theme" id="slider2">
                    @forelse ($artkl as $item)
                        @if ($item->kategori->nama_kategori === 'Opini')
                            <div class="item px-2">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img">
                                        <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="" />
                                    </div>
                                    <div>
                                        <a href="{{ route('detail-artikel', $item->slug) }}"
                                            class="d-block fh5co_small_post_heading">
                                            <span class="">{{ $item->judul }}</span>
                                        </a>
                                        <div class="c_g"><i
                                                class="fa fa-clock-o"></i>{{ $item->created_at->format('d M Y') }}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                        <div>
                            Data kosong
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</body>
