<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            @foreach ($artkl->where('kategori.nama_kategori', 'kategori 1')->take(1) as $item)
                @if ($item->is_active)
                    <div class="fh5co_suceefh5co_height">
                        <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font">
                            <div class="">
                                <a href="{{ route('detail-artikel', $item->slug) }}" class="color_fff">
                                    <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                </a>
                            </div>
                            <div class="">
                                <a href="{{ route('detail-artikel', $item->slug) }}" class="fh5co_good_font">
                                    {{ $item->judul }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="col-md-6">
            <div class="row">
                @foreach ($artkl->take(4) as $item)
                    <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                        @if ($item->is_active)
                            <div class="fh5co_suceefh5co_height_2">
                                <img src="{{ asset('uploads/' . $item->gambar_artikel) }}" alt="img" />
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                    <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                            class="color_fff">
                                            <i
                                                class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $item->created_at->format('d M Y') }}
                                        </a></div>
                                    <div class=""><a href="{{ route('detail-artikel', $item->slug) }}"
                                            class="fh5co_good_font_2"> {{ $item->judul }} </a></div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
     