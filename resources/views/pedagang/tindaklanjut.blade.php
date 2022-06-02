@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

<!-- details card section starts from here -->
</head>

<body>
     <div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="faq-search-wrap bg-teal-light-3">
                <div class="container">
                    <h1 class="display-5 text-white mb-20">Tindak Lanjut Saran dan Aduan.</h1>
                    <div class="form-group w-100 mb-0">
                        <form action="/tindaklanjut/search" methot="GET">
                        <div class="input-group">
                            <input class="form-control form-control-lg filled-input bg-white" placeholder="Search by keywords" type="text">
                            <div class="input-group-append">
                                <span class="input-group-text"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <section class="details-card">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://kissparry.files.wordpress.com/2022/05/malioboro-2022-05-16-at-08.27.38a.jpeg?w=768" alt="">
                    
                    </div>
                    <div class="card-desc">
                        <h3>Pedagang</h3>
                        <p class="description">Pedagang Asongan Mengadu Tak Bisa Berjualan di Malioboro Teras Malioboro 1 dan Teras Malioboro 2 yang bentuknya seperti mall atau pasar adalah sebagai pengganti bagi pedagang kaki lima yang biasanya berjualan di atas trotoar jalan sepanjang Jl Malioboro, dengan begitu para pelancong bisa lebih nyaman.

Teras Malioboro 1 Jogja merupakan bekas Gedung Bioskop Indra dan Teras Malioboro 2 Jogja adalah bekas Kantor Dinas Pariwisata DIY. Teras Malioboro 1 dan 2 Jogja masih berada di kawasan Malioboro.</p>
                            <a href="#" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                        
                    </div>
                    <div class="card-desc">
                        <h3>Pedagang</h3>
                        <p>Lantai yang retak</p>
                            <a href="#" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/tech" alt="">
                        
                    </div>
                    <div class="card-desc">
                        <h3>Pedagang</h3>
                        <p>Pengunjung yang bruntal</p>
                            <a href="#" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details card section starts from here -->
<!-- /Row -->
</div>
</body>
@endsection
