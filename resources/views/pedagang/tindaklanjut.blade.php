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
    </div>
<<<<<<< Updated upstream
    </div>
=======
<!-- details card section starts from here -->
<!-- /Row -->
</div>
>>>>>>> Stashed changes

<!-- @foreach($tindak_lanjut as $tindak)
    <?php
    $Deskripsi = substr($tindak->Deskripsi, 0, 127); 
    ?>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$tindak->Judul}}</h5>
                        <p class="card-text">{{$tindak->Deskripsi}}</p>
                        <a href="" class="btn btn-success">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
@endforeach -->

<div class="container">
    <div class="heading-title text-center">
        <h2 class="title iq-tw-6"></h2>
    </div>
    <div class="row justify-content-md-center">
        @foreach ($tindak_lanjut as $tindak)
            <div class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex align-items-stretch mx-auto"
                style="width:50%;">
                <div class=" iq-blog text-left iq-ptb-15 iq-pr-10 iq-pl-10 d-flex ">
                    <div class="m-auto justify-content-center align-items-center"
                        style="width: 100%; min-height:275px; height:auto; max-height:1000px">
                        @php
                            $foto = $tindak->Foto;
                            if ($tindak->Foto == null) {
                                $foto = 'notfound.jpg';
                            }
                        @endphp
                        <div class="card m-auto justify-content-center bg-transparent border-0"
                            style="padding-top:30%; width:auto; max-width: 75%; height:25%; max-height:100px">
                            <img src="{!! asset('images/Publik_Galeri/' . $foto . '') !!}" class="d-block mw-100"
                                style="height:auto; max-height:300px; padding-top:5%;; width:auto;"
                                alt="''.$tindak->Foto.''">
                        </div>
                        <div class="card m-auto bg-transparent border-0">
                            <h3 class="" style=" font-size: 150%; padding-top: 40%">
                                {{ $tindak->Judul }}</h3>
                            <p class="card-text" style="height:50px; overflow:hidden;">
                                {{$Deskripsi}}
                            </p>
                        </div>
                        <a href="javascript:void(1);" class="readmore-btn btn btn-success">Selengkapnya</a>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                        <script>
                        $(".readmore-btn").on('click', function(){
                            $(this).parent().toggleClass("showContent");
                        });
                        </script>
                    </div>
                </div>
            </div>
<<<<<<< Updated upstream
            </div>
</section>
@endforeach
=======
        @endforeach
    </div>
</div>
>>>>>>> Stashed changes

<div class="container justify-content-between">
    <div class="mx-auto d-block">
        {{ $tindak_lanjut->links()}}
    </div>
</div>

</body>
@endsection
