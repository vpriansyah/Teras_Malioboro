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
                    <a href="{{ url('publik/galeri2') }}?kat_dagangan=0" style="text-decoration: none">
                      <div class="iq-blog iq-blog-box">
                        Semua
                      </div>
                    </a>
                  </div>
                  @foreach ($kat_brg as $kat)
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 iq-pb-10">
                    <a href="{{ url('publik/galeri2') }}?kat_dagangan={{ $kat->id }}" style="text-decoration: none">
                      <div class="iq-blog iq-blog-box">
                        {{ $kat->nama }}
                      </div>
                    </a>
                  </div>
                  @endforeach
                </div>
                <hr>
                <div class="iq-pt-10">
                  <form action="galeri2">
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
                      href="{{ url('publik/galeri2') }}?lokasi_teras=0&lokasi_gedung=0&lokasi_lantai=0"
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

    <!--card galeri-->
    <div class="container">
      <div class="row justify-content-md-center">
        @foreach ($data_pkl as $data)
        {{--
        <?php if ($data != null) {?> --}}
        <div class="col-lg-3 justify-content-center col-md-4 col-sm-6 col-6 iq-mtb-15 d-flex align-items-stretch">
          <a href="{{ url('publik/galeri-data') }}/{{ $data->id }}" style="text-decoration: none">
            <div class="iq-blog iq-ptb-30 iq-pr-30 iq-pl-30">
              <div class="m-auto justify-content-center">
                @php
                $foto = $data->foto_lapak;
                if ($data->foto_lapak == null) $foto = 'notfound.jpg';
                @endphp
                <div class="card m-auto border-0 justify-content-center" style="
                                background: url({!! asset('images/Publik_Galeri/' . $foto . '') !!});
                                background-size:cover;
                                background-position: center;
                                max-width:150px;
                                min-width: 100px;
                                max-height:150px;
                                min-height: 100px;
                              ">
                </div>
                <center>
                  <h5 class="iq-tw-6 iq-pb-10">{{ $data->nama_lengkap }}</h5>
                </center>
                <center>{{ $data->dagangan }}</center>
                <p>{{ $data->operasional }}<br>
                  Jam Buka: {{ $data->operasional_jam_buka }}.00 -
                  {{ $data->operasional_jam_tutup }}.00</p>
              </div>
            </div>
          </a>
        </div>
        {{--
        <?php } else { ?>
        <h5>Data tidak ditemukan</h5>
        <?php } ?> --}}
        @endforeach
        <!---->
      </div>
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
        let lok = "{{ url('publik/galeri2') }}";

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
        let lok = "{{ url('publik/galeri2') }}";

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
        let lok = "{{ url('publik/galeri2') }}";

        $('#cari_lokasi').html("<a type='button' href='" + lok + "?lokasi_teras=" + id_teras + "&lokasi_gedung=" + id_gedung + "&lokasi_lantai=" + id_lantai + "' class='btn btn-outline-success my-2 my-sm-0'><i class='fas fa-search'></i>Cari Lokasi</a>");
      })
    })

  });
</script>
@endsection