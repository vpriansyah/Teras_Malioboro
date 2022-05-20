<header id="main-header" class="header-one">

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="{{ url('publik') }}">
        <img class="img-fluid logo_img" id="logo_img" src="{!! asset('images/tulisan tm.png') !!}"
          style="width: auto; height: 1.5rem;">
      </a>
        <ul class="navbar-nav ml-auto justify-content-end">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvasFilter" role="button" aria-controls="offcanvasFilter"><i class="fas fa-filter"></i>Filter</a>
          </li>
        </ul>
        {{-- <div class="d-flex">
          <a href="{{ url('auth/login') }}" class="btn btn-success pull-right">Masuk</a>
        </div> --}}
    </nav>
  </div>

</header>

{{-- <header id="main-header" class="header-one">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ url('publik'); }}">
            <img class="img-fluid logo_img" id="logo_img" src="{!! asset('images/tulisan tm.png')!!}"
              style="width: auto; height: 1.5rem;">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ion-navicon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto justify-content-end">
              <li class="nav-item">
                <a class="nav-link" href="#">Semua</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Aksesoris Fashion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pakaian</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Food Court</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Oleh-oleh</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Jasa dan Lain-lain</a>
              </li>
              <form class="form-inline my-2 my-lg-0 ml-auto" action="cari" value="search">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search..."
                  aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" onsubmit="return validateForm();"
                  onclick="return validateForm();" type="submit"><i class="fas fa-search"></i></button>
              </form>
            </ul>
            <div class="d-flex" style="padding-left: 1.2rem">
              <a href="{{ url('auth/login'); }}" class="btn btn-success pull-right">Masuk</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header> --}}