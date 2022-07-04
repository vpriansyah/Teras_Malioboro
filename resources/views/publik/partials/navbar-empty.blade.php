<header id="main-header" class="header-one">

    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            @auth
                <a class="navbar-brand" href="{{ url('admin') }}">
                    <img class="img-fluid logo_img" id="logo_img" src="{!! asset('images/tulisan tm.png') !!}"
                        style="width: auto; height: 1.5rem;">
                </a>
                <div style="height: 2.4rem"></div>
                <div class="btn-group ml-auto justify-content-end">
                    <a type="button" class="dropdown-toggle iq-pr-20 iq-tw-5" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fa-solid fa-user-large">&ensp;</i>{{ auth()->user()->username }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Profil</a>
                        <form action="{{url('/auth/logout')}}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <a class="navbar-brand" href="{{ url('publik') }}">
                    <img class="img-fluid logo_img" id="logo_img" src="{!! asset('images/tulisan tm.png') !!}"
                        style="width: auto; height: 1.5rem;">
                </a>
                {{-- <ul class="navbar-nav ml-auto justify-content-end">
                        <li class="d-flex" style="padding-left: 1.2rem">
                            <a href="{{ url('auth/login'); }}" class="btn btn-success pull-right">Masuk</a>
                        </li>
                    </ul> --}}
                {{-- <ul class="nav navbar-nav ml-auto justify-content-end" id='navbar-dropdown'>
                        <li class="dropdown">
                            <form class="navbar-form">
                                <button class="btn btn-success dropdown-toggle iq-pr-20" data-toggle="dropdown"
                                    aria-expanded="false">Masuk <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-menu-sm-right">
                                    <li><a class="dropdown-item" href="{{ url('auth/login') }}">Pedagang</a></li>
                                    <li><a class="dropdown-item" href="#">Operator</a></li>
                                    <li><a class="dropdown-item" href="#">Eksekutif</a></li>
                                </ul>
                            </form>
                        </li>
                    </ul> --}}
                <div class="btn-group ml-auto justify-content-end">
                    <button type="button" class="btn btn-success dropdown-toggle iq-pr-20" data-toggle="dropdown"
                        aria-expanded="false">
                        Masuk
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{ url('auth/login') }}">Pedagang</a>
                        <a class="dropdown-item" href="#">Operator</a>
                        <a class="dropdown-item" href="#">Eksekutif</a>
                    </div>
                </div>
            @endauth
        </nav>
    </div>
</header>
