<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>

                @foreach ($artikel->take(4) as $item)
                <div class="row pb-4">
                    <a href="{{ route('detail-artikel', $item->slug) }}" class="col-md-5">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="" />
                            </div>
                            <div></div>
                        </div>
                    </a>
                    <div class="col-md-7 animate-box">
                        <a href="{{ route('detail-artikel', $item->slug) }}"
                            class="fh5co_magna py-2">{{ $item->judul }}</a>
                        <br>
                        <a href="{{ route('detail-artikel', $item->slug) }}"
                            class="fh5co_mini_time py-3">{{ $item->penulis->nama_penulis }} -
                            {{ $item->created_at->format('d M Y') }}</a>
                        <div class="fh5co_consectetur">
                            <p>
                                {{ Illuminate\Support\Str::limit(strip_tags($item->body), 200) }}
                            </p>
                        </div>
                        @if (property_exists($item, 'status'))
                        <div class="status-badge">{{ $item->status }}</div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @include('frontend.includes.aside')
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                @if ($artikel->currentPage() > 1)
                <a href="{{ $artikel->previousPageUrl() }}" class="btn_mange_pagging"><i
                        class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                @endif
                @foreach ($artikel as $key => $item)
                <a href="{{ $artikel->url($key + 1) }}"
                    class="btn_pagging {{ $artikel->currentPage() == $key + 1 ? 'active' : '' }}">{{ $key + 1 }}</a>
                @endforeach
                @if ($artikel->hasMorePages())
                <a href="{{ $artikel->nextPageUrl() }}" class="btn_mange_pagging">Next <i
                        class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;</a>
                @endif
            </div>
        </div>
    </div>
</div>
