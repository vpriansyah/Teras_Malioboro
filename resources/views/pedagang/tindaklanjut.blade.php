@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')


<!-- details card section starts from here -->

<main>

  <section class="container py-5 text-center text-white rounded bg-success">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Tindak Lanjut</h1>
        <p class="lead">Tindak lanjut merupakan halaman yang dikhususkan untuk pedagang dalam menerima informasi mengenai tindak lanjut yang telah direalisasikan dari halaman aduan dan saran</p>
      </div>
    </div>
  </section>



  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($tindak_lanjut as $tindak)
        <div class="col">
          <div class="card shadow-sm">
          @php
                $foto = $tindak->Foto;
                if ($tindak->Foto == null) {
                    $foto = 'notfound.jpg';
                }
            @endphp
            <img width="100%" height="225px" src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" alt="">
            <div class="card-body">
              <h5>{{$tindak->Judul}}</h5>
              <p class="card-text">{{$tindak->Deskripsi}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-success">View</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>

@endsection

