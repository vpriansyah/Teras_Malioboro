<header id="main-header" class="dark">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('publik') }}">
                        <img class="img-fluid logo_img" id="logo_img" src="{!! asset('images/tulisan tm.png') !!}"
                            style="width: auto; height: 1.5rem;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ion-navicon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#iq-home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#layanan">Layanan</a>
                            </li>
                            {{-- <li class="nav-item dropdown"><a id="navbarDropdown1" href="#layanan" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    class="nav-link dropdown-toggle">
                                    Layanan</a>
                                <div aria-labelledby="navbarDropdown0" class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        Self Assesment
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Galeri
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Aduan dan Saran
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Agenda Teras
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        CCTV Teras
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        Data Statistik
                                    </a>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link" href="#peta">Peta</a>
                            </li> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="#tentang">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#kontak">Kontak</a>
                            </li>
                            <li>
                                <a></a>
                            </li>
                        </ul>
                        {{-- <div class="d-flex" style="padding-left: 1.2rem">
              <a href="{{ url('auth/login'); }}" class="btn btn-success pull-right">Masuk</a>
            </div> --}}
                        {{-- <div class="dropdown d-flex" style="padding-left: 1.2rem">
              <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMasuk" data-bs-toggle="dropdown" aria-expanded="true">
                Masuk
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMasuk">
                <li><a class="dropdown-item" href="{{ url('auth/login'); }}">Pedagang</a></li>
                <li><a class="dropdown-item" href="#">Operator</a></li>
                <li><a class="dropdown-item" href="#">Eksekutif</a></li>
              </ul>
            </div> --}}
                        <style>
                            @media screen and (max-width: 991px) {
                                #navbar-dropdown {
                                    padding-left: 1rem;
                                    padding-right: 75%;
                                    padding-top: 1rem;
                                    padding-bottom: 1rem;
                                }
                            }
                        </style>
                        <ul class="nav navbar-nav justify-content-end" id='navbar-dropdown'>
                            <li class="dropdown">
                                <!-- doesn't need to be a form element -->
                                <form class="navbar-form">
                                    <button class="btn btn-success dropdown-toggle iq-pr-20" data-toggle="dropdown"
                                        aria-expanded="false">Masuk <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="{{ url('auth/login') }}">Pedagang</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#">Operator</a></li>
                                        <li><a class="dropdown-item" href="#">Eksekutif</a></li>
                                    </ul>
                                </form>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
