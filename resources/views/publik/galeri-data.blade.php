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
                                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-flex"
                                        alt="''.$data_pkl->foto_lapak.''">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 col-sm-12">
                                <div class="card border-0 justify-content-center">
                                  <div class="iq-plr-20 iq-pt-20">
                                    <h4 class="iq-tw-9 iq-plr-10">{{ $data_pkl->nama_lengkap }}</h4>
                                    <hr class="iq-pb-10 iq-mb-10">
                                    <table class="table table-borderless table-striped">
                                        {{-- <tr>
                                            <td><h6>Pedagang</h6></td>
                                            <td><h6> : </h6></td>
                                            <td><h6>{{ $data_pkl->nama_lengkap }}</h6></td>
                                        </tr> --}}
                                        <tr>
                                            <td><h7>Dagangan</h7></td>
                                            <td><h7> : </h7></td>
                                            <td colspan="2"><h7>{{ $data_pkl->dagangan }}</h7></td>
                                        </tr>
                                        <tr>
                                            <td><h7>Nomor HP</h7></td>
                                            <td><h7> : </h7></td>
                                            <td><h7>{{ $nomor }}</h7></td>
                                            <td align="right">
                                                @php
                                                $no_hp = ltrim($nomor, "0");
                                                @endphp
                                                @if ($data_pkl->no_hp == null)
                                                <a href="https://api.whatsapp.com/send?phone=62{{$no_hp}}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera." type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey; border-color: grey"><i class="fab fa-whatsapp" style="color: #FFFFFF"></i></a>
                                                 @else 
                                                <a href="https://api.whatsapp.com/send?phone=62{{$no_hp}}&text=Saya%20tertarik%20untuk%20membeli%20produk%20anda%20segera." type="button" class="btn btn-success" ><i class="fab fa-whatsapp"></i></a>  
                                                @endif 
                                            </td>
                                        </tr>
                                        @foreach($linktree as $linktree)
                                            @php
                                                $ig = $linktree->ig_username;
                                                $shopee = $linktree->shopee_username;
                                                $fb = $linktree->fb_nama;
                                                $fb_link = $linktree->fb_link;
                                                if ($ig == null) {
                                                    $ig = '-';
                                                }
                                                if ($shopee == null) {
                                                    $shopee = '-';
                                                }
                                                if ($fb == null) {
                                                    $fb = '-';
                                                }
                                            @endphp
                                        <tr>
                                            <td><h7>Instagram</h7></td>
                                            <td><h7> : </h7></td>
                                            <td><h7>{{ $ig }}</h7></td>
                                            <td align="right">
                                            @if ($ig == '-')
                                            <a href="https://www.instagram.com/{{$ig}}/" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey; border-color: grey ;color: #FFFFFF"> <i class="fab fa-instagram" style="color: #FFFFFF;"></i></a> 
                                            @else
                                            <a href="https://www.instagram.com/{{$ig}}/" type="button" class="btn btn-light" style="background-color: #E1306C; border-color: #E1306C ;color: #FFFFFF"> <i class="fab fa-instagram" style="color: #FFFFFF;"></i></a> 
                                            @endif
                                        </td>
                                        </tr>
                                        <tr>
                                            <td><h7>Shopee</h7></td>
                                            <td><h7> : </h7></td>                                                
                                            <td><h7>{{ $shopee }}</h7></td>
                                            <td align="right">
                                            @if ($shopee == '-')
                                            <a href="https://shopee.co.id/{{$shopee}}" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey ; border-color: grey  ;color: #FFFFFF"> <i class="fa fa-shopping-cart" style="color: #FFFFFF;"></i></a>  
                                            @else
                                            <a href="https://shopee.co.id/{{$shopee}}" type="button" class="btn btn-light " style="background-color: #FF6600 ; border-color: #FF6600  ;color: #FFFFFF"> <i class="fa fa-shopping-cart" style="color: #FFFFFF;"></i></a>  
                                            @endif
                                        </td>
                                        </tr> 
                                        <tr>
                                            <td><h7>Facebook</h7></td>
                                            <td><h7> : </h7></td>                                               
                                            <td><h7>{{ $fb }}</h7></td>
                                            <td align="right">
                                            @if ($fb_link == null)
                                            <a href="{{$fb_link}}" type="button" class="btn btn-light btn disabled" aria-disabled="true" style="background-color: grey ; border-color: grey  ;color: #FFFFFF"> <i class="fa fa-facebook-official  " style="color: #FFFFFF;"></i></a>  
                                            @else
                                            <a href="{{$fb_link}}" type="button" class="btn btn-light " style="background-color: #29487d ; border-color: #29487d  ;color: #FFFFFF"> <i class="fa fa-facebook-official" style="color: #FFFFFF;"></i></a>  
                                            @endif
                                        </td>
                                        </tr>
                                        @endforeach
                                        
                                        <tr>
                                            <td><h7>Lokasi</h7></td>
                                            <td><h7> : </h7></td>
                                            <td colspan="2"><h7>{{$lokasi_teras->nama}} {{$lokasi_gedung->nama}} {{$lokasi_lantai->nama}}, <br> kios nomor {{$lokasi_no_kios->nama}}</h7></td>
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
    
        
    <div class="container">
    <hr style="padding-top:33px;">
    <div class="heading-title-layanan text-center" style="padding-top:33px">
        <h2 class="title iq-tw-6">Barang Dagangan</h2>
    </div>
        <div class="row justify-content-md-center">
            @foreach($barang as $barang)
                <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex align-items-stretch bg-transparent border-0" style="width:50%;">
                <div class=" iq-blog text-left iq-ptb-15 iq-pr-10 iq-pl-10 d-flex ">
                <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:275px; height:100%; max-height:800px">
                    @php 
                        $foto = ($barang->gambar);
                        if ($barang->gambar == null) $foto= "notfound.jpg";                
                    @endphp
                <div class ="card m-auto justify-content-center bg-transparent border-0" style="padding-top:30%; width:auto; max-width: 75%; height:25%; max-height:100px" >
                    <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100" style="height:auto; max-height:175px; padding-top:5%;; width:auto;" alt="''.$barang->gambar.''">
                </div>
                <div class="card m-auto justify-content-center bg-transparent border-0" >                                         
                <h5 class="iq-tw-6 iq-pb-5 m-auto" style=" font-size: 100%; padding-top: 60%">{{$barang->barang}}</h5> 
                </div>
                </div>
                </div>
                </div>                                     
            @endforeach
            
        </div>

        <div class="iq-pt-20">
            <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
        </div>
    </div>
    
    </section>                                      
            
    
@endsection
