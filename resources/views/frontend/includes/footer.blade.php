<div class="container-fluid fh5co_footer_bg pb-3">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container animate-box">
        <div class="row">

            <div class="col-12 col-md-4 col-lg-4">
                <div class="text-center">
                    @foreach ($tentangkami as $item)
                        <div class="footer_main_title py-3">Tentang kami</div>
                        <div class="footer_sub_about pb-3">
                            {!! $item->deskripsi !!}
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <div class="footer_main_title py-3">Most Viewed Posts</div>
                <ul class="footer_post_list">
                    @foreach ($beritaTerpopulerTahun as $item)
                        <li>
                            <div class="footer_makes_sub_font">{{ date_format($item->created_at, 'M d, Y') }}
                            </div>
                            <a href="#" class="footer_post">{{ $item->judul }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            @foreach ($tentangkami as $item)
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="footer_main_title py-3" style="color: white;">Hubungi kami di:</div>
                    <div class="footer_mediya_icon">
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->youtube }}" class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-youtube" style="color: white;"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="mailto:{{ $item->email }}" class="fh5co_display_table_footer">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"
                                        style="color: white;"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->twitter }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter" style="color: white;"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->facebook }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook" style="color: white;"></i>
                                </div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="{{ $item->instagram }}" class="fh5co_display_table_footer" target="_blank">
                                <div class="fh5co_verticle_middle"><i class="fa fa-instagram" style="color: white;"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="container-fluid fh5co_footer_right_reserved">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 py-4 Reserved">
                © 2023 All rights reserved. Backend by <a href="https://www.linkedin.com/in/rahmat-rafiq-079209247/"
                    title="Rahmat" target="_blank">Rahmat</a>.
            </div>
            <div class="col-12 col-md-6 py-4 Reserved">
                © Copyright 2018, All rights reserved. Design by
                <a href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">FreeHTML5.co</a>.
            </div>
        </div>
    </div>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
</div>
