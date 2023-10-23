@extends('frontend.layouts.frontend')

@section('content')
    <html lang="en" class="no-js">

    <body class="single">

        <div id="fh5co-title-box"
            style="
                background-image: url('{{ asset('uploads/' . $artikel->gambar_artikel) }}');
                background-position: 50% 90.5px;
            "
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="page-title">
                <img src="{{ asset('images/person_1.jpg') }}" alt="Free HTML5 by FreeHTMl5.co" />
                <span>{{ $artikel->created_at->format('d M Y') }}</span>
                <div class="color_fff">
                    <h3 class="judul-artikel">{{ $artikel->judul }}</h3>
                </div>
            </div>
        </div>
        <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <p>
                            {!! $artikel->body !!}
                        </p>
                        <br>
                        <p>
                            <em>
                                Penulis: {{ $artikel->penulis->nama_penulis }}
                            </em>
                        </p>
                    </div>
                    @include('frontend.includes.aside')
                </div>
            </div>
        </div>
        @include('frontend.includes.js')
    </body>

    </html>
@endsection
