@extends('frontend.layouts.frontend')
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta property="og:title" content="{{ isset($ogTitle) ? $ogTitle : 'Judul Default' }}">
<meta property="og:description" content="{{ isset($ogDescription) ? $ogDescription : 'Deskripsi Default' }}">
<meta property="og:image" content="{{ isset($ogImage) ? $ogImage : asset('uploads/' . $artikel->gambar_artikel) }}">

<title>
    Sharee.id
</title>
<link href="{{ asset('frontend/css/media_query.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
<link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
<link href="{{ asset('frontend/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
<!-- Bootstrap CSS -->
<link href="{{ asset('frontend/css/style_1.css') }}" rel="stylesheet" type="text/css" />
<!-- Modernizr JS -->
<script src="{{ asset('frontend/js/modernizr-3.5.0.min.js') }}"></script>


@section('content')
    <html lang="en" class="no-js">


<body class="single">
     
        <div class="container">
            <p>
                <br>
                Penulis: <b style="color: #2596be;">
                    {{ $artikel->penulis->nama_penulis }},
                </b>
            <span> Dipublish - {{ $artikel->created_at->format('d M Y') }}</span>
            </p>
              <h3 class="judul-artikel">{{ $artikel->judul }}</h3>
        </div>
        <br>
            <img src="{{ asset('uploads/' . $artikel->gambar_artikel) }}" class="img-fluid "  alt="..."
    style="object-fit: cover; width: 100%; height: auto; padding-left: 50px; padding-right: 50px;">
    



        <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <div class="share-buttons mt-3 mb-3">
                            <button class="btn btn-primary ml-2 mr-2" onclick="shareToInstagram()">
                                <i class="fa fa-instagram"></i>
                            </button>
                            <button class="btn btn-info ml-2 mr-2" onclick="shareToTwitter()">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button class="btn btn-success ml-2 mr-2" onclick="shareToWhatsApp()">
                                <i class="fa fa-whatsapp"></i>
                            </button>
                            <button class="btn btn-primary ml-2 mr-2" onclick="shareToFacebook()">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button class="btn btn-secondary ml-2 mr-2" onclick="copyLink()">
                                <i class="fa fa-share"></i>
                            </button>
                        </div>
            
                        <p>
                            {!! $artikel->body !!}
                        </p>
                        <br>
                       
                    </div>
                    @include('frontend.includes.aside')
                </div>
            </div>
        </div>
        @include('frontend.includes.js')
        <script>
            function shareToInstagram() {
                window.open('https://www.instagram.com/sharer.php?u={{ url()->current() }}', '_blank');
            }

            function shareToTwitter() {
                window.open('https://twitter.com/intent/tweet?text={{ url()->current() }}', '_blank');
            }

            function shareToWhatsApp() {
                window.open('https://api.whatsapp.com/send?text={{ url()->current() }}', '_blank');
            }

            function shareToFacebook() {
                window.open('https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}', '_blank');
            }

            function copyLink() {
                var dummy = document.createElement('input'),
                    text = window.location.href;

                document.body.appendChild(dummy);
                dummy.value = text;
                dummy.select();
                document.execCommand('copy');
                document.body.removeChild(dummy);
                alert('Link copied!');
            }
        </script>
    </body>

    </html>
@endsection
<!-- asdasdasd -->