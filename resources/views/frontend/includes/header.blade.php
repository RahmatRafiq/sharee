 <div class="container-fluid fh5co_header_bg">
     <div class="container">
         <div class="row">
             @foreach ($trendingArtikel->take(1) as $artikel)
                 <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                             class="fa fa-clock-o"></i> {{ $artikel->created_at->format('d M Y') }}</a>
                     <div class="d-inline-block fh5co_trading_posotion_relative"><a
                             href="{{ route('detail-artikel', $artikel->slug) }}" class="treding_btn">Trending</a>
                         <div class="fh5co_treding_position_absolute"></div>
                     </div>

                     <a href="{{ route('detail-artikel', $artikel->slug) }}" class="color_fff fh5co_mediya_setting">
                         {{ $artikel->judul }}</a>
                 </div>
             @endforeach
         </div>
     </div>
 </div>
 <div class="container-fluid">
     @foreach ($tentangkami as $tentang)
         <div class="container">
             <div class="row">
                 <a href="/" class="col-12 col-md-3 fh5co_padding_menu">
                     <div class="logo-container">
                         <img src="{{ asset('uploads/' . $tentang->gambar) }}" alt="img" class="logo-image">
                     </div>
                 </a>
                 <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                     @include('frontend.includes.search-form')
                 </div>
             </div>
         </div>
     @endforeach
 </div>
 <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
     <div class="container padding_786">
         <nav class="navbar navbar-toggleable-md navbar-light ">
             <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                 data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                 aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
             <a class="navbar-brand" href="#">
                 <br>
                 <br>
             </a>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav mr-auto">
                     <li class="nav-item ">
                         <a class="nav-link" href="/">
                             <b>
                                 Home
                             </b>
                             <span class="sr-only">
                                 (current)
                             </span>
                         </a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="{{ route('about') }}">
                             <b>
                                 About
                             </b>
                             <span class="sr-only">
                                 (current)
                             </span>
                         </a>
                     </li>
                     @foreach ($ktgr->take(6) as $ktgr)
                         <li class="nav-item">
                             <a class="nav-link" href="{{ route('kategori', $ktgr->slug) }}">{{ $ktgr->nama_kategori }}
                                 <span class="sr-only">(current)
                                 </span>
                             </a>
                         </li>
                     @endforeach
                 </ul>
             </div>
         </nav>
     </div>
 </div>
 <style>
     .logo-container {
         height: 40px;
         display: flex;
         align-items: center;
     }

     .logo-image {
         max-height: 100%;
         width: auto;
     }
 </style>
