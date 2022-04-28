@extends('publik.layouts.layanan')

@section('content')

    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="heading-title-layanan text-center">
              <h2 class="title iq-tw-6">Data Pedagang</h2>
                  @php 
                  $foto = ($data_pkl->foto_lapak);
                  $lantai = ($data_pkl->lokasi_lantai_id);
                  $no_kios = ($data_pkl->lokasi_no_kios_id);
                  $gedung = ($data_pkl->lokasi_gedung_id);
                  $teras = ($data_pkl->lokasi_teras_id);
                  if ($data_pkl->foto_lapak == null) $foto= "notfound.jpg";
                  switch  ($lantai) {
                    case ($data_pkl->lokasi_lantai_id == 111): 
                      $lantai= "Basement";
                      break;
                    case ($data_pkl->lokasi_lantai_id == 112): 
                      $lantai= "Lantai 1";
                      break; 
                    case ($data_pkl->lokasi_lantai_id == 113): 
                      $lantai= "Lantai 2";
                      break;
                    case ($data_pkl->lokasi_lantai_id == 121): 
                      $lantai= "Lantai 1";
                      break;
                    case ($data_pkl->lokasi_lantai_id == 122): 
                      $lantai= "Lantai 2";
                      break;
                  }

                  switch  ($teras) {
                    case ($data_pkl->lokasi_teras_id == 1): 
                      $teras= "Teras Malioboro 1";
                      break;
                    case ($data_pkl->lokasi_teras_id == 2): 
                      $teras= "Teras Malioboro 2";
                      break;
                  }

                  switch  ($gedung) {
                    case ($data_pkl->lokasi_gedung_id == 11): 
                      $gedung= "Gedung A";
                      break;
                    case ($data_pkl->lokasi_gedung_id == 12): 
                      $gedung= "Gedung B";
                      break;
                    case ($data_pkl->lokasi_gedung_id == 13): 
                      $gedung= "Gedung C";
                      break;
                    case ($data_pkl->lokasi_gedung_id == 14): 
                      $gedung= "Gedung D";
                      break;
                    case ($data_pkl->lokasi_gedung_id == 15): 
                      $gedung= "Selasar";
                      break;
                  }

                  @endphp
                  <center><img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block w-25" alt="''.$data_pkl->foto_lapak.''"></center>
              </br>
              <h4>Dagangan: {{$data_pkl->nama_lengkap}}</h4>
              </br>
              <h4>Dagangan: {{$data_pkl->dagangan}}</h4>
              </br>
              <h4>Nomor HP: {{$data_pkl->no_hp}}</h4>
              </br>
              <h4>Lokasi : {{$lantai}}, {{$gedung}}, {{$teras}}</h4>
              
            </div>
          </div>
        </div>
      </div>
    </section>

  
@endsection