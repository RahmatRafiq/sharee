@extends('frontend.layouts.frontend')
@section('content')
    @foreach ($tentangkami as $tk)
        <div class="container-fluid  fh5co_fh5co_bg_contcat">
            <div class="container">
                <div class="container paddding">
                    <div class="row mx-0">
                        <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                            <h2>Tentang Kami</h2>
                            <p>
                                {!! $tk->deskripsi !!}
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-phone"></i></span> </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Call Us</span>
                            <span class="d-block c_g fh5co_contact_us_no_text">
                                <a href="tel:{{ $tk->telepon }}">{{ $tk->telepon }}</a>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-envelope"></i></span>
                            </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Have any questions?</span>
                            <span class="d-block c_g fh5co_contact_us_no_text">
                                <a href="mailto:{{ $tk->email }}">{{ $tk->email }}</a>
                            </span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="col-md-4 py-3">
                    <div class="row fh5co_contact_us_no_icon_difh5co_hover">
                        <div class="col-3 fh5co_contact_us_no_icon_difh5co_hover_1">
                            <div class="fh5co_contact_us_no_icon_div"> <span><i class="fa fa-map-marker"></i></span>
                            </div>
                        </div>
                        <div class="col-9 align-self-center fh5co_contact_us_no_icon_difh5co_hover_2">
                            <span class="c_g d-block">Address</span>
                            <span class="d-block c_g fh5co_contact_us_no_text">Jl. Prof. Abdurahman Basalamah No.101,
                                Karampuang, Kec. Panakkukang, Kota Makassar, Sulawesi Selatan 90231</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        </div>
        <div class="container-fluid mb-4">
            <div class="container">
                <div class="col-12 text-center contact_margin_svnit">
                    <div class="text-center fh5co_heading py-2">Contact Us</div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form class="row" id="fh5co_contact_form" action="mailto:{{ $tk->email }}" method="post"
                            enctype="text/plain">
                            <div class="col-12 py-3">
                                <input type="text" class="form-control fh5co_contact_text_box"
                                    placeholder="Enter Your Name" />
                            </div>
                            <div class="col-6 py-3">
                                <input type="text" class="form-control fh5co_contact_text_box" placeholder="E-mail" />
                            </div>
                            <div class="col-6 py-3">
                                <input type="text" class="form-control fh5co_contact_text_box" placeholder="Subject" />
                            </div>
                            <div class="col-12 py-3">
                                <textarea class="form-control fh5co_contacts_message" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12 py-3 text-center">
                                <button type="submit" class="btn contact_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 align-self-center">
                        <iframe src="{{ $tk->alamat }}" class="map_sss" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @include('frontend.includes.js')
@endsection
