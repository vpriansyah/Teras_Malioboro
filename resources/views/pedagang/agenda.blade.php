@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css"
        integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <body>
        <div class="container-fluid">
            <!-- Row -->
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="faq-search-wrap">
                        <div class="container">
                            <div class="navbar">
                                <div class="container nav justify-content-end">
                                    <form class="d-flex" action="/search" method="get">
                                        <div class="input-group mb-3">
                                            <input class="form-control me-2" type="text" placeholder="Cari..." name="search">
                                            <button class="btn btn-success" type="submit">Cari</button>
                                    </form>
                                </div>
                            </div>
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
                                <img src="https://placeimg.com/380/230/nature" alt="">

                            </div>
                            <div class="card-desc">
                                <h3>Hari Buruh</h3>
                                <p>Lorem ipsum dolor sit amet cons/p>
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
                                <h3>Hari Idul Fitri</h3>
                                <p>Lorem ipsum dolor sit amet cons</p>
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
                                <h3>Hari Idul Adha</h3>
                                <p>Lorem ipsum dolor sit amet cons</p>
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
                                <h3>Hari Pendidikan</h3>
                                <p>Lorem ipsum dolor sit amet cons</p>
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
                                <h3>Hari Imlek</h3>
                                <p>Lorem ipsum dolor sit amet cons</p>
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
                                <h3>Hari Natal</h3>
                                <p>Lorem ipsum dolor sit amet cons</p>
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
