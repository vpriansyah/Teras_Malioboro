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
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
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
                        <h5 class="title iq-tw-6">Form Saran Aduan</h5>
                        <form action="/pedagang/input/" method="post">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="nama"
                                    placeholder="Masukkan nama anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="jenis" class="form-label">Jenis Aduan</label>
                                <select class="form-select" aria-label="Default select example" name="jenis" required>
                                    <option selected>Klik untuk pilih</option>
                                    <option value="Publik">Publik</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori Aduan</label>
                                <select class="form-select" aria-label="Default select example" name="id_kategori"
                                    required>
                                    <option selected>Klik untuk pilih</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Pungli">Pungli</option>
                                    <option value="Teknik">Teknik</option>
                                    <option value="Kondisi Gedung">Kondisi Gedung</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                            <input type="hidden" name="status" id="status" value="1">
                            <div>
                            </div>
                            <div class="mb-3">
                                <label for="aduan" class="form-label">Saran dan Aduan</label>
                                <textarea type="text" class="form-control" name="saran_aduan" id="aduan" placeholder="Masukkan saran dan aduan anda"
                                    name="areasaran" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </form>
                        <!-- Form End-->
                    </div>
                </div>
        </section>
        <!-- Row End -->
    </div>
@endsection
