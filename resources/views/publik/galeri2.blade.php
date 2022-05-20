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
                    <a href="{{ url('publik/galeri2') }}" style="text-decoration: none">
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
                  <select class="form-select" name="jenis" id="combo1">
                    <option value="!null">Semua</option>
                    @foreach ($lokasi_teras as $teras)
                    <option value="{{ $teras->id }}">{{ $teras->nama }}</option>
                    @endforeach
                  </select>

                  <label class="iq-pt-10">Lokasi Gedung</label>
                  <select class="form-select" name="jenis" id="combo1">
                    <option value="!null">Semua</option>
                    @foreach ($lokasi_gedung as $gedung)
                    <option value="{{ $gedung->id }}">{{ $gedung->nama }}</option>
                    @endforeach
                  </select>

                  <label class="iq-pt-10">Lokasi Lantai</label>
                  <select class="form-select" name="jenis" id="combo1">
                    <option value="!null">Semua</option>
                    @foreach ($lokasi_lantai as $lantai)
                    <option value="{{ $lantai->id }}">{{ $lantai->nama }}</option>
                    @endforeach
                  </select>

                  <div class="iq-pt-20">
                    <button class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-search"></i> Cari
                      Lokasi</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---->

    {{--
    <!--dropdown lokasi-->
    <div class="form-group iq-pt-10">
      <div class="row">
        <div class="col-lg-4 col-mb-6 col-sm-6">
          <label>Teras</label>
          <select class="form-control" name="jenis" id="combo1">
            <option value="!null">Semua</option>
            @foreach ($lokasi_teras as $teras)
            <option value="{{$teras->id}}">{{$teras->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-lg-4 col-mb-6 col-sm-6">
          <label>Gedung</label>
          <select class="form-control" name="jenis" id="combo1">
            <option value="!null">Semua</option>
            @foreach ($lokasi_gedung as $gedung)
            <option value="{{$gedung->id}}">{{$gedung->nama}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-lg-4 col-mb-6 col-sm-6">
          <label>lantai</label>
          <select class="form-control" name="jenis" id="combo1">
            <option value="!null">Semua</option>
            @foreach ($lokasi_lantai as $lantai)
            <option value="{{$lantai->id}}">{{$lantai->nama}}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
    <!----> --}}

    <!--card galeri-->
    <div class="container">
      <div class="row justify-content-md-center">
        @foreach ($data_pkl as $data)
        {{-- <?php if ($data != null) {?> --}}
          <div class="col-lg-3 justify-content-center col-md-4 col-sm-6 col-6 iq-mtb-15 d-flex align-items-stretch">
            <a href="{{ url('publik/galeri-data') }}/{{ $data->id }}" style="text-decoration: none">
              <div class="iq-blog iq-ptb-30 iq-pr-30 iq-pl-30">
                <div class="m-auto justify-content-center">
                  @php
                  $foto = $data->foto_lapak;
                  if ($data->foto_lapak == null)  $foto = 'notfound.jpg';
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
        {{-- <?php } else { ?>
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
@endsection