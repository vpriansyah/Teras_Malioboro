@extends('publik.layouts.layanan')
@section('content')
<section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="heading-title-layanan text-center">
            <h2 class="title iq-tw-6">Galeri</h2>
          </div>
        </div>
      </div>
      <!--navbar-->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <button class= "navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ion-navicon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav justify-content-between">
              
              @php 
                $Nav = " ";
                if ($current == null) $Nav= 'active';                
              @endphp
              <li>
                <a class="nav-link {{$Nav}}" href="{{ url('publik/galeri');}}"> Semua </a>
              </li>
            @foreach($kat_brg as $kat)
              @php 
                $Nav = " ";
                if ($current == $kat->nama) $Nav= 'active';                
              @endphp
              <li class="nav-item">
                <a class="nav-link {{$Nav}}" href="{{ url('publik/galeri');}}/{{$kat->nama}} ">{{$kat->nama}}</a>
              </li>
              
            @endforeach
            </ul>
            <form class="form-inline my-2 my-lg-0 ml-auto" action="cari" value="search">
              <input class="form-control mr-sm-2" type="search" name="search" placeholder="Type any word..." aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" 
                      onsubmit="return validateForm();"
                      onclick="return validateForm();"
                      type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </div> 
  </div>
<hr>
<!---->

      <!--dropdown lokasi-->
<!--      <div class="form-group iq-pt-10">
        <div class="row">
          <div class="col-lg-4 col-mb-6 col-sm-6">
          <label>Teras</label>
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Teras
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('publik/galeri');}}">Semua</a>
              @foreach($lokasi_teras as $teras)
              @php 
                  $Drop = "";
                  $link = url()->current();
                  $value_teras = "$link/$teras->id";
                  if ($current == null) $value_teras = "$link/$teras->id";
                  
                  else{
                  $value_teras="$teras->id";
                  if ($teras->id == $current) {$Drop = "disabled"; $value_teras="#";};
                  }
                @endphp
                <a class="dropdown-item {{$Drop}}" href="{{$value_teras}}">{{$teras->nama}}</a>
              @endforeach
              </div>
            </div>
          </div>
          @php 
          
          @endphp
          <div class="col-lg-4 col-mb-6 col-sm-6">
          <label>Gedung</label>
            @php 
              $value_gedung = '';
              if($current == null) $value_gedung = 'disabled';
              if($current == '1') $value_gedung = '';
            @endphp
            <div class="btn-group" >
              <button type="button" class="btn dropdown-toggle {{$value_gedung}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href=''>Semua</a>
              @foreach($lokasi_gedung as $gedung)
                <a class="dropdown-item" href="{{ url('publik/galeri');}}/{{$gedung->id}}">{{$gedung->nama}}</a>
              @endforeach
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-mb-6 col-sm-6">
          <label>Lantai</label>
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href=''>Semua</a>
              @foreach($lokasi_lantai as $lantai)
                <a class="dropdown-item" href="{{ url('publik/galeri');}}/{{$lantai->id}}">{{$lantai->nama}}</a>
              @endforeach
              </div>
            </div>
          </div>

        </div>
      </div>-->

      <!--dropdown lokasi-->
      <div class="form-group iq-pt-10">
        <div class="row">
          <div class="col-lg-4 col-mb-6 col-sm-6">
              <label>Teras</label>
              <select class="form-control" name="jenis" id="combo1">
                <option value=null>Semua</option>        
              @foreach($lokasi_teras as $teras)
                <option value="{{$teras->id}}">{{$teras->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-4 col-mb-6 col-sm-6">
            <label>Gedung</label>
              <select class="form-control" name="jenis" id="combo1">   
                <option value=null>Semua</option>         
              @foreach($lokasi_gedung as $gedung)
                <option value="{{$gedung->id}}">{{$gedung->nama}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-lg-4 col-mb-6 col-sm-6">
            <label>lantai</label>
              <select class="form-control" name="jenis" id="combo1">
                <option value=null>Semua</option>            
              @foreach($lokasi_lantai as $lantai)
                <option value="{{$lantai->id}}">{{$lantai->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <!---->

      <!--card galeri-->
      <div class="container">
        <div class="row justify-content-md-center">
          @foreach($data_pkl as $data)
            <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex align-items-stretch bg-transparent border-0" style="width:50%;">
              <a href="{{ url('publik/galeri-data');}}/{{$data->id}}">
                <div class=" iq-blog text-left iq-ptb-15 iq-pr-10 iq-pl-10 d-flex ">
                  <div class="m-auto justify-content-center align-items-center" style="width: 100%; min-height:275px; height:100%; max-height:800px">
                    @php 
                      $foto = ($data->foto_lapak);
                      if ($data->foto_lapak == null) $foto= "notfound.jpg";                
                    @endphp
                    <div class ="card m-auto justify-content-center bg-transparent border-0" style="padding-top:30%; width: 75%; height:25%; max-height:100px" >
                     <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block w-100 " alt="''.$data->foto_lapak.''">
                    </div>
                    <div class="card m-auto justify-content-center bg-transparent border-0" style="padding-top:30%; padding-top:max(50px);"> 
                      <center> <h5 class="iq-tw-6 iq-pb-5" style=" font-size: 80%;">{{$data->nama_lengkap}}</h5> 
                      <center style=" font-size: 80%;">{{$data->dagangan}}
                      <p style=" font-size: 80%;">{{$data->operasional}}<br>
                         Jam Buka: {{$data->operasional_jam_buka}}.00 - {{$data->operasional_jam_tutup}}.00</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        <!---->
        </div>
        <div class="row mx-auto justify-content-center">
        {{$data_pkl->links()}}
        </div>
      </div>
    </div>
  </section>
@endsection