@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')



<div class="container">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-success">
        <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Info Penting</h1>
        <p class="lead my-3">Info penting bertujuan untuk memberika informasi seputar teras malioboro kepada pedagang secara khusus.</p>
        </div>
    </div>
</div>
<!-- Banner End -->
<!-- Banner -->
<div class="navbar">
    <div class="container nav justify-content-end">
        <form class="d-flex" action="/search" method="get">
            <div class="input-group mb-3">
                <input class="form-control me-2" type="text" placeholder="Cari..." name="search">
                <button class="btn btn-success" type="submit">Cari</button>
        </form>
    </div>
</div>

@foreach($info_penting_pedagang as $info)

    <?php
    $isi = substr($info->isi, 0, 175); 
    ?>
    <div class="container justify-content-end">
        <div class="card shadow-sm p-3 mb-3 bg-body rounded" style="max-width:auto;">
            <div class="row g-0">
                <div class="col-md-4">
                @php
                $Foto = $info->foto;
                if ($info->foto == null) {
                    $Foto = 'notfound.jpg';
                }
            @endphp
                <img src="{!! asset('images/Publik_Galeri/' . $Foto . '') !!}" class="img-fluid rounded-start" style="height:200px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$info->judul}}</h5>
                        <p class="card-text"><small class="text-muted">{{$info->tanggal}}</small></p>
                        <p class="card-text">{{$isi}}</p>
                        <a href="{{ url('pedagang/moreinfo');}}/{{$info->id}}" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endforeach

  <ul class="pagination justify-content-center">
  {{ $info_penting_pedagang->links()}}
  </ul><br>

<!-- Banner End -->
@endsection