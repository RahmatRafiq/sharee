<div class="container-fluid paddding mb-5">
    <div class="row mx-0">
        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
            @foreach ($artkl->where('kategori.nama_kategori', 'kategori 1')->take(1) as $item)
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
            @endforeach
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    @foreach ($artkl->where('kategori.nama_kategori', 'kategori 2')->take(1) as $item)
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
                    @endforeach
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    @foreach ($artkl->where('kategori.nama_kategori', 'kategori 3')->take(1) as $item)
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
                    @endforeach
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    @foreach ($artkl->where('kategori.nama_kategori', 'kategori 4')->take(1) as $item)
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
                    @endforeach
                </div>
                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                    @foreach ($artkl->where('kategori.nama_kategori', 'kategori 5')->take(1) as $item)
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
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
