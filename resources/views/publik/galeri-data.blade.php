@extends('publik.layouts.layanan')

@section('content')
    @foreach ($data_pkl as $data_pkl)
        @php
            $foto = $data_pkl->foto_lapak;
            $nomor = $data_pkl->no_hp;
            if ($data_pkl->no_hp == null) {
                $nomor = '-';
            }
            if ($data_pkl->foto_lapak == null) {
                $foto = 'notfound.jpg';
            }
        @endphp

        <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-title-layanan text-center">
                            <h2 class="title iq-tw-6">Data Pedagang</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-sm-12">
                                <div class="card border-0 justify-content-center">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-flex" alt={{ $data_pkl->nama_lengkap }}>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="card border-0 justify-content-center">
                                    <div class="iq-plr-20 iq-pt-20">
                                        <h4 class="iq-tw-9 iq-plr-10">{{ $data_pkl->nama_lengkap }}</h4>
                                        <hr class="iq-pb-10 iq-mb-10">
                                        <table class="table table-borderless table-striped">
                                            {{-- <tr>
                                        <td>
                                            <h6>Pedagang</h6>
                                        </td>
                                        <td>
                                            <h6> : </h6>
                                        </td>
                                        <td>
                                            <h6>{{ $data_pkl->nama_lengkap }}</h6>
                                        </td>
                                    </tr> --}}
                                            <tr>
                                                <td>
                                                    <h7>Dagangan</h7>
                                                </td>
                                                <td>
                                                    <h7> : </h7>
                                                </td>
                                                <td colspan="2">
                                                    <h7>{{ $data_pkl->dagangan }}</h7>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h7>Nomor HP</h7>
                                                </td>
                                                <td>
                                                    <h7> : </h7>
                                                </td>
                                                <td>
                                                    <h7>{{ $nomor }}</h7>
                                                </td>
                                                <td align="right">
                                                    @php
                                                        $no_hp = ltrim($nomor, '0');
                                                    @endphp
                                                    @if ($data_pkl->no_hp == null)
                                                        <a href="https://api.whatsapp.com/send?phone=62{{ $no_hp }}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera."
                                                            type="button" class="btn btn-light btn disabled"
                                                            aria-disabled="true"
                                                            style="background-color: grey; border-color: grey"><i
                                                                class="fab fa-whatsapp" style="color: #FFFFFF"></i></a>
                                                    @else
                                                        <a href="https://api.whatsapp.com/send?phone=62{{ $no_hp }}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera."
                                                            type="button" class="btn btn-success"><i
                                                                class="fab fa-whatsapp"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @foreach ($linktree as $linktree)
                                                @php
                                                    $ig = $linktree->ig_username;
                                                    $shopee = $linktree->shopee_username;
                                                    $fb = $linktree->fb_nama;
                                                    $fb_link = $linktree->fb_link;
                                                    $tokped = $linktree->tokped_nama_toko;
                                                    $tokped_link = $linktree->tokped_username;
                                                @endphp
                                                <tr>
                                                    @if ($ig == null)
                                                        <!-- <a href="https://www.instagram.com/{{ $ig }}/" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey; border-color: grey ;color: #FFFFFF"> <i class="fab fa-instagram" style="color: #FFFFFF;"></i></a>  -->
                                                    @else
                                                        <td>
                                                            <h7>Instagram</h7>
                                                        </td>
                                                        <td>
                                                            <h7> : </h7>
                                                        </td>
                                                        <td>
                                                            <h7>{{ $ig }}</h7>
                                                        </td>
                                                        <td align="right">
                                                            <a href="https://www.instagram.com/{{ $ig }}/"
                                                                type="button" class="btn btn-light"
                                                                style="background-color: #E1306C; border-color: #E1306C ;color: #FFFFFF">
                                                                <i class="fab fa-instagram" style="color: #FFFFFF;"></i></a>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($shopee == null)
                                                        <!-- <a href="https://shopee.co.id/{{ $shopee }}" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey ; border-color: grey  ;color: #FFFFFF"> <i class="fa fa-shopping-cart" style="color: #FFFFFF;"></i></a>   -->
                                                    @else
                                                        <td>
                                                            <h7>Shopee</h7>
                                                        </td>
                                                        <td>
                                                            <h7> : </h7>
                                                        </td>
                                                        <td>
                                                            <h7>{{ $shopee }}</h7>
                                                        </td>
                                                        <td align="right">
                                                            <a href="https://shopee.co.id/{{ $shopee }}"
                                                                type="button" class="btn btn-light "
                                                                style="background-color: #FF6600 ; border-color: #FF6600  ;color: #FFFFFF">
                                                                <i class="fa fa-shopping-cart"
                                                                    style="color: #FFFFFF;"></i></a>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($fb_link == null)
                                                        <!-- <a href="{{ $fb_link }}" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey ; border-color: grey  ;color: #FFFFFF"> <i class="fa fa-facebook-official  " style="color: #FFFFFF;"></i></a>   -->
                                                    @else
                                                        <td>
                                                            <h7>Facebook</h7>
                                                        </td>
                                                        <td>
                                                            <h7> : </h7>
                                                        </td>
                                                        <td>
                                                            <h7>{{ $fb }}</h7>
                                                        </td>
                                                        <td align="right">
                                                            <a href="{{ $fb_link }}" type="button"
                                                                class="btn btn-light "
                                                                style="background-color: #29487d ; border-color: #29487d  ;color: #FFFFFF">
                                                                <i class="fa fa-facebook-official"
                                                                    style="color: #FFFFFF;"></i></a>
                                                        </td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    @if ($tokped_link == null)
                                                        <!-- <a href="{{ $fb_link }}" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey ; border-color: grey  ;color: #FFFFFF"> <i class="fa fa-facebook-official  " style="color: #FFFFFF;"></i></a>   -->
                                                    @else
                                                        <td>
                                                            <h7>Tokopedia</h7>
                                                        </td>
                                                        <td>
                                                            <h7> : </h7>
                                                        </td>
                                                        <td>
                                                            <h7>{{ $tokped }}</h7>
                                                        </td>
                                                        <td align="right">
                                                            <a href="https://www.tokopedia.com/{{ $tokped_link }}"
                                                                type="button" class="btn btn-light "
                                                                style="background-color: #32cd32 ; border-color: #32cd32  ;color: #FFFFFF">
                                                                <i class="fa fa-shopping-cart"
                                                                    style="color: #FFFFFF;"></i></a>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td>
                                                    <h7>Lokasi</h7>
                                                </td>
                                                <td>
                                                    <h7> : </h7>
                                                </td>
                                                <td colspan="2">
                                                    <h7>{{ $lokasi_teras->nama }} {{ $lokasi_gedung->nama }}
                                                        {{ $lokasi_lantai->nama }}, <br> Kios Nomor
                                                        {{ $lokasi_no_kios->nama }}</h7>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h7>Lokasi Lama</h7>
                                                </td>
                                                <td>
                                                    <h7> : </h7>
                                                </td>
                                                <td colspan="2">
                                                    <h7>{{ $data_pkl->lokasi_lama }}</h7>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="iq-pb-20">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    @endforeach

    <style>
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 600px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            /* height: 150px; */
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 60px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 80%;
            }
        }
    </style>

    <div class="container">
        <hr style="padding-top:33px;">
        <div class="heading-title-layanan text-center" style="padding-top:33px">
            <h2 class="title iq-tw-6">Barang Dagangan</h2>
        </div>
        <div class="row justify-content-md-center">
            @foreach ($barang as $barang)
                <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mt-10 d-flex align-items-stretch bg-transparent border-0"
                    style="width:50%;">
                    <a role="button" {{-- onclick="document.getElementById('modal01').style.display='block'" --}} {{-- data-toggle="modal" data-target="#barang" --}}>
                        <div class=" iq-blog text-left iq-pt-10 iq-pr-10 iq-pl-10">
                            <div class="justify-content-center align-items-center"
                                style="padding-top:5% ;width: 100%; /*min-height:250px;*/ height:80%; max-height:800px">
                                @php
                                    $foto = $barang->gambar;
                                    if ($barang->gambar == null) {
                                        $foto = 'notfound.jpg';
                                    }
                                @endphp
                                <div class="card m-auto justify-content-center bg-transparent border-0"
                                    style=" background-size:cover; background-position: center;padding-top: 15%; width:auto; max-width: 75%; height:75%; max-height:100px">
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" id="myImg" class="myImages"
                                        style="height:auto; max-height:175px; padding-top:5%;; width:auto;"
                                        alt={{ $barang->barang }}>
                                </div>
                                <div class="card justify-content-center bg-transparent border-0">
                                    <h5 class="iq-tw-6 text-center" style=" font-size: 100%; padding-top: 25%">
                                        {{ $barang->barang }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="iq-pt-20">
            <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
        </div>

        {{-- Modal Barang Dagangan --}}

        <div id="myModal" class="modal">
            <span class="close" aria-hidden="true">&times;</span>
            <img class="modal-content" id="img">
            <div id="caption"></div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            var img = document.getElementById("myImg");
            var images = document.getElementsByClassName('myImages');
            var modalImg = document.getElementById("img");
            var captionText = document.getElementById("caption");
            for (var i = 0; i < images.length; i++) {
                var img = images[i];
                // and attach our click listener for this image.
                img.onclick = function(evt) {
                    modal.style.display = "block";
                    modalImg.src = this.src;
                    captionText.innerHTML = this.alt;
                }
            }

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>

    </div>
    </section>
@endsection
