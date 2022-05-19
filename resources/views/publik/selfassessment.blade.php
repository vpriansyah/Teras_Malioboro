@extends('publik.layouts.layanan')

@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="heading-title-layanan text-center">
          <h2 class="title iq-tw-6">Self Assessment</h2>
        </div>
      </div>
    </div>
    {{-- <center>
      <div class="card" style="width: 500px;">
        <div class="card-body">
          <h5 class="card-title iq-tw-6">Persyaratan</h5>
          <p class="card-text">
          <p>~ Wisatawan wajib sudah divaksinasi Covid-19, minimal dosis kedua</p>
          <p>~ Berusia di atas 12 tahun</p>
          <p>~ Menerapkan peraturan protokol kesehatan Cleanliness, Health, Safety, Environmental Sustainability (CHSE)
          </p>
          </p>
          <a href="{{ url('publik/scanner'); }}" type="button" class="btn btn-success btn-lg"> Setuju</a>
        </div>
      </div>
    </center> --}}
    <div class="row">
      <div class="col-lg-3 col-md-2 col-sm-1 col-0"></div>
      <div class="col-lg-6 col-md-8 col-sm-10 col-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title iq-tw-6 text-center">Persyaratan</h5>
            <hr>
            <div class="card-text iq-pt-10">
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-1">-</div>
                <div class="col-lg-11 col-md-11 col-sm-10 col-10">
                  Wisatawan wajib sudah divaksinasi Covid-19, minimal dosis kedua
                </div>
              </div>
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-1">-</div>
                <div class="col-lg-11 col-md-11 col-sm-10 col-10">
                  Berusia di atas 12 tahun
                </div>
              </div>
              <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-1">-</div>
                <div class="col-lg-11 col-md-11 col-sm-10 col-10">
                  Menerapkan peraturan protokol kesehatan Cleanliness, Health, Safety, Environmental Sustainability
                  (CHSE)
                </div>
              </div>
            </div>
            <hr class="iq-pt-10">
            <div class="iq-pt-10 text-center">
              <a href="{{ url('publik/scanner') }}" type="button" class="btn btn-success btn-lg">Setuju</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-2 col-sm-1 col-0"></div>
    </div>
  </div>
</section>
@endsection