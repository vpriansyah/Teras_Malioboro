@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')


<!-- Banner -->
@foreach($info_penting_pedagang as $info)

<main class="container">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a class="text-success fw-bolder text-decoration-none" href="/pedagang/informasi">Informasi</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$info->judul}}</li>
            </ol>
        </nav>
  <div class="row g-5">
    <div class="col-md-8">
      <hr>
      <article class="blog-post">
        <h2 class="blog-post-title">{{$info->judul}}</h2>
        <p class="blog-post-meta">{{$info->tanggal}}</p>
        <hr>
        @php
            $Foto = $info->foto;
            if ($info->foto == null) {
                $Foto = 'notfound.jpg';
            }
        @endphp
        <img width="100%" src="{!! asset('images/Publik_Galeri/' . $Foto . '') !!}" class="img-thumbnail" alt="...">
        <hr>
        <p class="fw-bolder">Teras Malioboro - 
        <a class="fw-normal">{{$info->isi}}</a>
        </p>
      </article>
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Tentang</h4>
          <p class="mb-0">Info penting bertujuan untuk memberika informasi seputar teras malioboro kepada pedagang secara khusus.</p>
        </div>

        <!-- <div class="p-4">
          <h4 class="fst-italic">Info penting lainnya</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div> -->
      </div>
    </div>
  </div>
</main>
@endforeach

<!-- Banner End -->
@endsection