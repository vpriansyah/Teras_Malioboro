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
                        
                              <!-- Input checkbox for readmore -->
                              <input type="checkbox" id="check-readmore">
                              <img src="https://img.okezone.com/content/2022/01/27/408/2538583/dear-traveler-jangan-lupa-ini-2-lokasi-baru-pkl-malioboro-QtpBuJnS7Y.jpg" alt="">
                              <h4 style="color: #000000;font-weight: 600;margin-top: 10px;margin-left: 30px">Lantai Retak</h4>
                              <p class="description">Meski baru sekitar seminggu diresmikan, ternyata sudah banyak masalah yang dikeluhkan oleh para pedagang di Teras Malioboro I. 
                                  Salah satu masalah yang paling dirisaukan pedagang adalah banyaknya retakan di lantai 3 Teras Malioboro I. 
                                  Retakan itu terdapat hampir di seluruh bagian lantai, terutama pada sambungan antarbagian lantai.</p>
                              <!-- Readmore button -->
                              <label for="check-readmore" class="button-readmore"></label>  
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <!-- Input checkbox for readmore -->
                        <input type="checkbox" id="check-readmore">
                        <img src="https://tripjogja.co.id/wp-content/uploads/2022/02/paket-wisata-jogja-by-tripjogja-376.jpg" alt="">
                        
                        <h4 style="color: #000000;font-weight: 600;margin-top: 10px;margin-left: 30px">Pedagang Kaki Lima</h4>
                        <p class="description">Meski banyak pedagang kaki lima yang masih enggan pindah berjualan di teras Malioboro 1 dan 2, 
                            namun Pemerintah Kota Yogyakarta menegaskan hanya memberikan batas waktu relokasi hingga tanggal 7 Februari mendatang.
                        </p>
                            <!-- Readmore button -->
                            <label for="check-readmore" class="button-readmore"></label>     
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                         <!-- Input checkbox for readmore -->
                         <input type="checkbox" id="check-readmore">
                         <img src="https://t-2.tstatic.net/jogja/foto/bank/images/Hampir-Dua-Pekan-Menempati-Teras-Malioboro-2-PKL-Sekarang-Nyari-Penglaris-Aja-Susah.jpg" alt="">
                         
                         <h4 style="color: #000000;font-weight: 600;margin-top: 10px;margin-left: 30px">Pedagang Mengeluh</h4>
                         <p class="description">Keluhan yang sama disampaikan oleh Rubiyanti (50) pedagang bakpia. Menurutnya sebelum direlokasi, jualan di bawah ramai. 
                             Lokasinya yang strategis membuat pembeli lebih mudah mengakses. Semetara untuk lokasi baru ini cukup jauh.
                         </p>
                             <!-- Readmore button -->
                             <label for="check-readmore" class="button-readmore"></label>  
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
