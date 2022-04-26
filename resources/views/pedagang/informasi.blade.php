@include('pedagang.partials.navbar')
@section('content')
    @extends('pedagang.layouts.footer')

    <!-- Banner -->
    <section id="home" class="iq-banner-12 light-green-bg">
        <div class="container" id="home">
            <div class="banner-text text-left">
                <div class="row justify-content-between">
                    <div class="col-md-6 align-self-center">
                        <h1><b class="iq-font-black iq-tw-4">Info Penting</b></h1><br>
                        <h5 class="iq-font-black iq-mtb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Facere commodi iure consequuntur possimus dolores minima ex dignissimos soluta at
                            perspiciatis corporis et, quo nemo culpa similique voluptas veritatis sapiente maiores?</h5>
                        <br>
                        <h5 class="text-danger iq-mtb-20">*Laman ini khusus untuk pedagang.</h5><br>
                    </div>

                    <div id="carouselExampleIndicators" class="carousel slide col-lg-6" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{!! asset('images/tm1.png') !!}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{!! asset('images/tm2.png') !!}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{!! asset('images/kondisi.jpg') !!}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-objects">
            {{-- <span class="banner-objects-01" data-bottom="transform:translatey(50px)"
                    data-top="transform:translatey(-50px);">
                    <img src="images/03(2).png" alt="drive02">
                </span> --}}
            <span class="banner-objects-02 iq-fadebounce">
                <span class="iq-round"></span>
            </span>
        </div>
    </section>
    <br><br><br>
    <!-- Banner End -->
    <!-- Banner -->
    <div class="navbar">
        <div class="container nav justify-content-end">
            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-success" type="button">Search</button>
            </form>
        </div>
    </div>

    <div class="container justify-content-end">
        <div class="card" style="width:max">
            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magnam
                    aperiam quam molestiae aliquam molestias in assumenda sed eum corrupti! Placeat harum dolores esse
                    vel dolore, voluptate nemo nisi aperiam.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <br>
        <div class="card" style="width:max">
            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magnam
                    aperiam quam molestiae aliquam molestias in assumenda sed eum corrupti! Placeat harum dolores esse
                    vel dolore, voluptate nemo nisi aperiam.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <br>
        <div class="card" style="width:max">
            <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">Lorem Ipsum</h4>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magnam
                    aperiam quam molestiae aliquam molestias in assumenda sed eum corrupti! Placeat harum dolores esse
                    vel dolore, voluptate nemo nisi aperiam.</p>
                <a href="#" class="btn btn-primary">See Profile</a>
            </div>
        </div>
        <div>
            <!-- Banner End -->
            <!-- Banner -->
            <section id="pagination" class="overview-block-ptb how-works">
                <div class="banner-text text-left">
                    <div class="row justify-content-between">
                        <div class="mx-auto">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                            <div>
                                <div>
                                </div>
            </section>
        </div>
    </div>
    <!-- Banner End -->
@endsection
