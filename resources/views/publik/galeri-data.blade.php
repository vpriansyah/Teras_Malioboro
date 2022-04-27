@extends('publik.layouts.layanan')

@section('content')

    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="heading-title-layanan text-center">
              <h2 class="title iq-tw-6">Data Pedagang</h2>
              <strong>Nama Pedagang: {{$data_pkl->nama_lengkap}}</strong> 
            </br>
              <strong>Dagangan: {{$data_pkl->dagangan}}</strong>
              
            </div>
          </div>
        </div>
      </div>
    </section>

  
@endsection