@include('pedagang.partials.navbar')
@section('content')
    @extends('pedagang.layouts.footer')
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container-fluid">
        <!-- Row -->
        <section class="iq-feature1 overview-block-ptb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12 ">
                        <div class="text-center">
                            <h1 class="title iq-tw-6">Saran & Aduan</h1>
                        </div>
                        <br><br>
                        <h5 class="title iq-tw-6">FAQ</h5>
                        @foreach ($saran as $faq)
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-heading{{ $faq->id_faq }}">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                            data-target="#flush-collapse{{ $faq->id_faq }}" aria-expanded="false"
                                            aria-controls="flush-collapse{{ $faq->id_faq }}">
                                            {{ $faq->subject }}
                                        </button>
                                    </h2>
                                    <div id="flush-collapse{{ $faq->id_faq }}" class="accordion-collapse collapse"
                                        aria-labelledby="flush-heading{{ $faq->id_faq }}"
                                        data-parent="#accordionFlushExample">
                                        <div class="accordion-body">{{ $faq->jawaban }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <br><br><br>

                        <!-- Form -->
                        <div class="border p-4 rounded rounded-lg shadow-md">
                            <h5 class="title iq-tw-6">Form Saran Aduan</h5>
                            <form action="/pedagang/input/" method="post">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                    <label for="nama" class="form-label text-body">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control border border-success"
                                        id="nama" placeholder="Masukkan nama anda">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis" class="form-label text-body">Jenis Aduan</label>
                                    <select class="form-select border border-success " aria-label="Default select example"
                                        name="jenis" required>
                                        <option selected>Klik untuk pilih</option>
                                        <option value="Publik">Publik</option>
                                        <option value="Private">Private</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kategori" class="form-label text-body">Kategori Aduan</label>
                                    <select class="form-select border border-success" aria-label="Default select example"
                                        name="id_kategori" required>
                                        <option selected>Klik untuk pilih</option>
                                        <option value="Umum">Umum</option>
                                        <option value="Keuangan">Keuangan</option>
                                        <option value="Pungli">Pungli</option>
                                        <option value="Teknik">Teknik</option>
                                        <option value="Kondisi Gedung">Kondisi Gedung</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="aduan" class="form-label text-body">Saran dan Aduan</label>
                                    <textarea type="text" class="form-control border border-success" name="saran_aduan" id="aduan"
                                        placeholder="Masukkan saran dan aduan anda" name="areasaran" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Kirim</button>
                            </form>
                        </div>
                        <!-- Form End-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false"
                                    data-dots="true" data-items="3" data-items-laptop="3" data-items-tab="2"
                                    data-items-mobile="1" data-items-mobile-sm="1" data-margin="30">
                                    <div class="card mt-4 align-items-center rounded rounded-lg" style="width: 18rem;">
                                        <div class="card-body shadow-sm rounded rounded-lg border-success border">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and make
                                                up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                    <div class="card mt-4 align-items-center rounded rounded-lg" style="width: 18rem;">
                                        <div class="card-body shadow rounded rounded-lg border-success border">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                    <div class="card mt-4 align-items-center rounded rounded-lg" style="width: 18rem;">
                                        <div class="card-body shadow rounded rounded-lg border-success border">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                    <div class="card mt-4 align-items-center rounded rounded-lg" style="width: 18rem;">
                                        <div class="card-body shadow rounded rounded-lg border-success border">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                    <div class="card mt-4 align-items-center rounded rounded-lg" style="width: 18rem;">
                                        <div class="card-body shadow rounded rounded-lg border-success border">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                    <div class="card mt-4 align-items-center rounded rounded-lg" style="width: 18rem;">
                                        <div class="card-body shadow rounded rounded-lg border-success border">
                                            <h5 class="card-title">Card title</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                            <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p>
                                            <a href="#" class="card-link">Card link</a>
                                            <a href="#" class="card-link">Another link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- Row End -->
    </div>
@endsection
