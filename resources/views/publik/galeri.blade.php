@extends('publik.layouts.layanan')

@section('content')
<h1>Galeri</h1>

<section class="iq-feature1 overview-block-ptb grey-bg" id="layanan">
    <div class="container">
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