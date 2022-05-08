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
                        <h5 class="iq-font-black iq-mtb-20">Halaman ini berisi informasi penting yang ditujukan kepada
                        para pedagang Teras Malioboro 1 dan Teras Malioboro 2</h5>
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
                <input class="form-control me-2" type="text" placeholder="Cari...">
                <button class="btn btn-success" type="button">Cari</button>
            </form>
        </div>
    </div>

    <div class="container justify-content-end">
        <div class="card" style="width:max">
        <br>
            <img class="mx-auto d-block" src="{!! asset('images/festival_bakpia.jpg') !!}" alt="Card image" style="width:50%">
            <div class="card-body">
                <h4 class="card-title">Festival Bakpia di Teras Malioboro 5-8 Mei 2022</h4>
                <p class="card-text">5 Mei 2022</p>
                <p class="card-text">Kepala Divisi Pengembangan Bisnis, Balai Layanan Bisnis UMKM Diskop UKM DIY, 
                Luki Antoro mengatakan, event ini bermula dari keluhan pedagang di lantai tiga. Mereka menganggap 
                lapaknya sepi pengunjung.
                Selain itu, dari hasil riset sederhana yang dilakukan pihaknya, menunjukkan bahwa sebagian besar 
                partisipan di media sosial belum mengetahui keberadaan sentra oleh-oleh di lantai tiga Teras Malioboro.
                "Maka kami mengemas kegiatan seperti ini. Kami ingin menegaskan di Teras Malioboro 1 ada pusat 
                oleh-oleh dan lokasinya di lantai tiga. Kami selenggarakan di halaman untuk memantik agar orang-orang 
                datang terus nanti dari sini bisa diarahkan ke atas (lantai 3)," ucapnya.
                Pemda DIY juga berkomitmen menjadikan Teras Malioboro sebagai ikon baru di kawasan premium Kota Yogya. 
                Mengingat lokasi ini memiliki berbagai potensi. Mulai dari produk kerajinan, fashion, seni lukis, 
                batu, mulia, hingga kuliner tersajikan di tempat itu.
                Tak menutup kemungkinan, pihaknya akan mengadakan festival lain dengan tema berbeda dalam rangka 
                mempromosikan Teras Malioboro 1 kepada khalayak luas.</p>
            </div>
        </div>
        <br><br>
        <div class="card" style="width:max">
        <br>
            <img class="mx-auto d-block" src="{!! asset('images/gojekteras.jpg') !!}" alt="Card image" style="width:50%">
            <div class="card-body">
                <h4 class="card-title">Gojek Luncurkan Kerjasama Teras Malioboro dan SiBakul 2022</h4>
                <p class="card-text">27 Maret 2022</p>
                <p class="card-text">Gojek, super app terdepan di Asia Tenggara semakin mengokohkan komitmennya dalam 
                mengembangkan pelaku UMKM lokal dalam rangka pemulihan ekonomi DIY serta memudahkan masyarakat serta 
                pelaku UMKM dengan layanan berbasis digital. Menggandeng Dinas Koperasi dan UKM (KUKM)DIY, Gojek 
                mendukung operasional pelaku UMKM di Teras Malioboro berbagai produk dan layanan dalam ekosistemnya 
                dengan mengedepankan pemanfaatan teknologi yang tetap melestarikan kearifan lokal.
                
                Kontribusi Gojek di Teras Malioboro merupakan bentuk dukungan atas upaya pemulihan perekonomian daerah 
                melalui kebangkitan sektor pariwisata dengan multiplier effect bagi UMKM di DIY pada Jumat (25/3/2022). 
                Hal ini sejalan dengan upaya Gojek sebagai salah satu kontributor utama digital ekonomi di Indonesia 
                dalam mendorong UMKM untuk semakin berkembang melalui ekosistemnya yang komprehensif.</p>
            </div>
        </div>
        <br><br>
        <div class="card" style="width:max">
        <br>
            <img class="mx-auto d-block" src="{!! asset('images/peresmian_teras.jpg') !!}" alt="Card image" style="width:50%">
            <div class="card-body">
                <h4 class="card-title">Peresmian Teras Malioboro 1 & 2</h4>
                <p class="card-text">26 Januari 2022</p>
                <p class="card-text">Relokasi Pedagang Kaki Lima (PKL) Malioboro ke Teras Malioboro Satu dan Teras 
                Malioboro Dua didukung APBD, Pemerintah Daerah Istimewa Yogyakarta (DIY) tidak akan menarik pajak selama 
                satu tahun anggaran. "Saya tadi sudah utarakan didukung oleh APBD. Kami dalam waktu satu tahun anggran 
                ini tidak akan menarik pajak apapun, kepada para pedagang yang pindah dalam waktu satu tahun anggaran," 
                ujar Gubernur DIY Sri Sultan Hamengku Buwono X, setelah meresmikan Teras Malioboro Satu, Rabu (26/1/2022).</p>
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
                                <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                            </ul>
                            <div>
                                <div>
                                </div>
            </section>
        </div>
    </div>
    <!-- Banner End -->
@endsection
