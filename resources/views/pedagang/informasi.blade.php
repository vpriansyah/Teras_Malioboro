@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')

<!-- Banner -->
<!-- <section id="home" class="iq-banner-12 light-green-bg">
    <div class="container" id="home">
        <div class="banner-text text-left">
            <div class="row justify-content-between">
                <div class="col-md-6 align-self-center">
                    <h1><b class="iq-font-black iq-tw-4">Info Penting</b></h1><br>
                    <h5 class="iq-font-black iq-mtb-20">Halaman ini berisi informasi penting yang ditujukan kepada
                        para pedagang Teras Malioboro 1 dan Teras Malioboro 2</h5>
                    <br>
                    <h5 class="text-danger iq-mtb-20">*Laman ini khusus untuk pedagang.</h5><br>
                </div>

                <div id="carouselExampleIndicators" class="carousel slide col-lg-6" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{!! asset('images/tm1.png') !!}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{!! asset('images/tm2.png') !!}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{!! asset('images/kondisi.jpg') !!}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-objects">
        {{-- <span class="banner-objects-01" data-bottom="transform:translatey(50px)"
                    data-top="transform:translatey(-50px);">
                    <img src="images/03(2).png" alt="drive02">
                </span> --}}
        <span class="banner-objects-02 iq-fadebounce">
            <span class="iq-round"></span>
        </span>
    </div>
</section> -->

<div class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-success">
        <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Info Penting</h1>
        <p class="lead my-3">Info penting bertujuan untuk memberika informasi seputar teras malioboro kepada pedagang secara khusus.</p>
        </div>
    </div>
</div>
<!-- Banner End -->
<!-- Banner -->
<div class="navbar">
    <div class="container nav justify-content-end">
        <form class="d-flex" action="/search" method="get">
            <div class="input-group mb-3">
                <input class="form-control me-2" type="text" placeholder="Cari..." name="search">
                <button class="btn btn-success" type="submit">Cari</button>
        </form>
    </div>
</div>

@foreach($info_penting_pedagang as $info)

    <?php
    $isi = substr($info->isi, 0, 175); 
    ?>
    <div class="container justify-content-end">
        <div class="card shadow-sm p-3 mb-3 bg-body rounded" style="max-width:auto;">
            <div class="row g-0">
                <div class="col-md-4">
                @php
                $Foto = $info->foto;
                if ($info->foto == null) {
                    $Foto = 'notfound.jpg';
                }
            @endphp
                <img src="{!! asset('images/Publik_Galeri/' . $Foto . '') !!}" class="img-fluid rounded-start" style="height:200px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$info->judul}}</h5>
                        <p class="card-text"><small class="text-muted">{{$info->tanggal}}</small></p>
                        <p class="card-text">{{$isi}}</p>
                        <a href="{{ url('pedagang/moreinfo');}}/{{$info->id}}" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endforeach

  <ul class="pagination justify-content-center">
  {{ $info_penting_pedagang->links()}}
  </ul><br>

<!-- Banner End -->
@endsection