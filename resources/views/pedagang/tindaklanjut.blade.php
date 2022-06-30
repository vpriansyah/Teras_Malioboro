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
      <?php
      $desc = substr($tindak->Deskripsi, 0, 100); 
      ?>
      <?php
      $desc2 = substr($tindak->Deskripsi, 100, 10000); 
      ?>
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
              <div class="card-text">{{$desc}}</div>
              <div class="card-text collapse" id="demo{{$tindak->id_tindaklanjut}}">{{$desc2}}</div>
              <!-- <p class="card-text collapse" id="demo{{$tindak->id_tindaklanjut}}">{{$tindak->Deskripsi}}</p> -->
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button data-bs-target="#demo{{$tindak->id_tindaklanjut}}" class="readmore-btn btn btn-sm btn-success" data-bs-toggle="collapse">Baca Lengkap</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(".readmore-btn").on('click', function(){
  $(this).parent().toggleClass("gantiText");
  var replaceText = $(this).parent().hasClass("gantiText") ? "Baca Singkat" : "Baca Lengkap";
  $(this).text(replaceText);
});
</script>

</main>

@endsection

