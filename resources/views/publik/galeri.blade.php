@extends('publik.layouts.galeri-layout')
@section('content')
<!-- Header -->
@include('publik.partials.navbar-galeri')
<!-- Header End -->

<!-- Content -->
<section id="content" class="iq-banner-12 light-bg">
  <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Galeri</h2>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFilter"
              aria-labelledby="offcanvasFilterLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasFilterLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 iq-pb-10">
                    <label>Kategori Dagangan</label>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 iq-pb-10">
                    <a href="{{ url('publik/galeri') }}?kat_dagangan=0" style="text-decoration: none">
                      <div class="iq-blog iq-blog-box">
                        Semua
                      </div>
                    </a>
                  </div>
                  @foreach ($kat_brg as $kat)
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 iq-pb-10">
                    <a href="{{ url('publik/galeri') }}?kat_dagangan={{ $kat->id }}" style="text-decoration: none">
                      <div class="iq-blog iq-blog-box">
                        {{ $kat->nama }}
                      </div>
                    </a>
                  </div>
                  @endforeach
                </div>
                <hr>
                <div class="iq-pt-10">
                  <form action="galeri">
                    @if (request('kat_dagangan'))
                    <input type="hidden" name="kat_dagangan" value="{{ request('kat_dagangan') }}">
                    @endif
                    @if (request('lokasi_teras'))
                    <input type="hidden" name="lokasi_teras" value="{{ request('lokasi_teras') }}">
                    @endif
                    @if (request('lokasi_gedung'))
                    <input type="hidden" name="lokasi_gedung" value="{{ request('lokasi_gedung') }}">
                    @endif
                    @if (request('lokasi_lantai'))
                    <input type="hidden" name="lokasi_lantai" value="{{ request('lokasi_lantai') }}">
                    @endif
                    <div class="input-group mb-3" style="padding-top: 5px">
                      <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                      <button class="btn btn-success" type="submit" onsubmit="return validateForm();"
                        onclick="return validateForm();"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                </div>
                <hr>
                <div>
                  <label class="iq-pt-10">Lokasi Teras</label>
                  <select class="form-select" name="teras" id="teras">
                    <option value="0">Semua</option>
                    @foreach ($lokasi_teras as $teras)
                    <option value="{{ $teras->id }}">{{ $teras->nama }}</option>
                    @endforeach
                  </select>

                  <label class="iq-pt-10">Lokasi Gedung</label>
                  <div id="gedung">
                    <select class="form-select" name="gedung" id="lokasi_gedung" disabled>
                      <option value="0">Semua</option>
                    </select>
                  </div>

                  <label class="iq-pt-10">Lokasi Lantai</label>
                  <div id="lantai">
                    <select class="form-select" name="lantai" id="lokasi_lantai" disabled>
                      <option value="0">Semua</option>
                    </select>
                  </div>
                  
                  <div class="iq-pt-20" id="cari_lokasi">
                    <a type="button"
                      href="{{ url('publik/galeri') }}?lokasi_teras=0&lokasi_gedung=0&lokasi_lantai=0"
                      class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-search"></i>Cari Lokasi</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---->

    <!--echo filters-->
    <div class="row" style="width:80%; padding-left:10%; padding-bottom:2%">
      
      <div class="col-lg-3 col-md-4 col-sm-6 col-6" style="padding-right:1%; font-weight:bold; width:auto">Filter:</div>

      @if(isset($fil_jenis))
        <div class="card col-lg-3 col-md-4 col-sm-6 col-6" style="width:auto">
          <p><span style="font-weight:bold">Kategori : </span>{{$fil_jenis}}</p>
        </div>
        
          @else
        <div class="card col-lg-3 col-md-4 col-sm-6 col-6" style="width:auto;">
            Semua Kategori Dagangan
        </div>
      @endif

      @php
        $gedung = "semua gedung";
          if(isset($fil_loc_g)){
            $gedung = $fil_loc_g;
          }
        $lantai = "semua lantai";
          if(isset($fil_loc_l)){
            $lantai = "lantai " + $fil_loc_l;
          }
      @endphp
      @if(isset($fil_loc_t))
        <div class="card col-lg-3 col-md-4 col-sm-6 col-6" style="width:auto">
          <p><span style="font-weight:bold">Lokasi = </span>{{$fil_loc_t}}, {{$gedung}}, {{$lantai}}</p>
        </div>
        @else
        <div class="card col-lg-3 col-md-4 col-sm-6 col-6" style="width:auto">
          Semua Lokasi
        </div>
      @endif

      @if(isset($fil_kata))
      <div class="card col-lg-3 col-md-4 col-sm-6 col-6" style="width:auto">
        <p><span style="font-weight:bold">Kata kunci = </span>{{$fil_kata}}</p>
      </div>
      @endif 
    </div>
    <!---->

    <!--card galeri-->
    <div class="container">
      <div class="row justify-content-center">              
        @if(count($id_data) > 0)
          @foreach ($data_pkl as $data)
          <div class="card col-lg-3 col-md-4 col-sm-6 col-6 iq-mtb-10 d-flex bg-transparent border-0"style=" padding-left:2%; padding-right:2%; min-width:25%; max-width: 50%; max-height:100%">
            <a href="{{ url('publik/galeri-data') }}/{{ $data->id }}" style="text-decoration: none">
              <div class="iq-blog text-left iq-pt-30 d-flex  ">
                <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:250px; height:100%; max-height:800px">
                  @php
                  $foto = $data->foto_lapak;
                  if ($data->foto_lapak == null) $foto = 'notfound.jpg';
                  @endphp
                  <div class="card m-auto justify-content-center bg-transparent border-0" 
                  style="
                                  background: url({!! asset('images/Publik_Galeri/' . $foto . '') !!});
                                  background-size:cover;
                                  background-position: center;
                                  padding-top:30%; 
                                  width:auto; 
                                  min-width:100%;
                                  max-width: 150%; 
                                  min-height:100%;
                                  max-height:150%;
                                  max-width: 160px;
                                  min-width: 105px;
                                  max-height:150px;
                                  min-height: 100px; 

                                ">
                  </div>
                  <div class="card m-auto justify-content-center bg-transparent border-0"> 
                  <h5 class="text-center iq-tw-6 iq-pb-5" style="font-size: 80%; margin-left:10%; margin-right:10%;">{{$data->nama_lengkap}}</h5> 
                  
                  <p class='text-center m-auto' style="font-size: 75%;">{{$data->dagangan}}
                  <p style="padding-left: 16%; padding-right:3%; font-size: 75%;">{{$data->operasional}}<br>
                          Jam Buka: {{$data->operasional_jam_buka}}.00 - {{$data->operasional_jam_tutup}}.00</p>
                  </div>
                </div>
              </div>
            </a>
          </div>  
          @endforeach
    
        @else 
          <p class="text-center" style="padding-top: 5%; font-weight: bold; padding-bottom:5%">Data tidak ditemukan</p>
          <!--<div class="iq-pt-20">
            <button type="button" class="btn btn-danger" onclick="history.back();">Kembali</button>
          </div>-->
        @endif
      </div>
    <!---->
      <div class="row mx-auto justify-content-center">
        {{ $data_pkl->links() }}
      </div>
    </div>
    </div>
  </section>
</section>
<!-- Content End -->

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
{{-- <script src="{{url('lokasi.js')}}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
  integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
<script src="{!! asset('js/jquery-3.4.1.min.js')!!}"></script>

<script>
  $(function () {
    $.ajaxSetup({
      headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    $(function() {
      $('#teras').on('change', function() {
        let id_teras = $('#teras').val();
        let lok = "{{ url('publik/galeri') }}";

        $.ajax({
          type : 'POST',
          dataType: "html",
          url : "getgedung",
          data : {id_teras:id_teras},
          cache : false,

          success: function(msg) {
            $('#gedung').html(msg);
            $('#lantai').html("<select class='form-select' name='lantai' id='lokasi_lantai' disabled><option value='0'>Semua</option></select>");
            $('#cari_lokasi').html("<a type='button' href='" + lok + "?lokasi_teras=" + id_teras + "&lokasi_gedung=0&lokasi_lantai=0' class='btn btn-outline-success my-2 my-sm-0'><i class='fas fa-search'></i>Cari Lokasi</a>");
          },

          error: function(data){
            console.log('error: ', data)
          },

        })
      })
    })

    $(function() {
      $('#gedung').on('change', function() {
        let id_teras = $('#teras').val();
        let id_gedung = $('#lokasi_gedung').val();
        let lok = "{{ url('publik/galeri') }}";

        $.ajax({
          type : 'POST',
          dataType: "html",
          url : "getlantai",
          data : {id_gedung:id_gedung},
          cache : false,

          success: function(msg) {
            $('#lantai').html(msg);
            $('#cari_lokasi').html("<a type='button' href='" + lok + "?lokasi_teras=" + id_teras + "&lokasi_gedung=" + id_gedung + "&lokasi_lantai=0' class='btn btn-outline-success my-2 my-sm-0'><i class='fas fa-search'></i>Cari Lokasi</a>");
          },

          error: function(data){
            console.log('error: ', data)
          },

        })
      })
    })

    $(function() {
      $('#lantai').on('change', function() {
        let id_teras = $('#teras').val();
        let id_gedung = $('#lokasi_gedung').val();
        let id_lantai = $('#lokasi_lantai').val();
        let lok = "{{ url('publik/galeri') }}";

        $('#cari_lokasi').html("<a type='button' href='" + lok + "?lokasi_teras=" + id_teras + "&lokasi_gedung=" + id_gedung + "&lokasi_lantai=" + id_lantai + "' class='btn btn-outline-success my-2 my-sm-0'><i class='fas fa-search'></i>Cari Lokasi</a>");
      })
    })

  });
</script>
@endsection