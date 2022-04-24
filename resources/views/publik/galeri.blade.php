@extends('publik.layouts.layanan')

@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Gallery</h2>
          </div>
        </div>
      </div>
      <div class="tab-v1">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Aksesoris Fashion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pakaian</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Food Court</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Oleh-oleh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Jasa dan Lain-lain</a>
          </li>
          <li>
          <form class="d-flex">
                <div class="input-group">                    
                    <input type="text" class="form-control" placeholder="Search">
                    <button type="button" class="btn btn-secondary"><i class="bi-search"></i></button>
                </div>
        </form>
          </li>
        </ul>
        
      </div>
      <div class="row justify-content-md-center">
        <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-15">
          <a href="">
            <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
              <div>
                <img class="mx-auto d-block" src="{!! asset('images/Autan.png')!!}" alt="Autan1" style="width: 100%;">
                <center> <h5 class="iq-tw-6 iq-pb-10">Autan Sachet</h5> </center>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-15">
          <a href="">
            <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
              <div>
              <img class="mx-auto d-block" src="{!! asset('images/Autan2.png')!!}" alt="Autan2" style="width: 100%; height: 150%;">
              <center> <h5 class="iq-tw-6 iq-pb-10">Autan Lotion</h5> </center>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 iq-mtb-15">
          <a href="">
            <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
              <div>
                <img class="mx-auto d-block" src="{!! asset('images/Baygon.png')!!}" alt="Baygon" style="width: 33%; height: 33%;">
                <center> <h5 class="iq-tw-6 iq-pb-10">Baygon 600 ml</h5> </center>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection