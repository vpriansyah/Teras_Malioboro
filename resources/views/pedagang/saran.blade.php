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
                                aria-labelledby="flush-heading{{ $faq->id_faq }}" data-parent="#accordionFlushExample">
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
                            @foreach ($data_pkl as $data)
                            <div class="mb-3">
                                <input type="hidden" name="pedagang_id" id="pedagang_id"
                                    class="form-control border border-success" id="pedagang_id" value={{ $data->id }}>
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <label for="jenis" class="form-label text-body">Jenis Aduan</label>
                                <select class="form-select border border-success " aria-label="Default select example"
                                    name="jenis_aduan" required>
                                    <option selected>Klik untuk pilih</option>
                                    <option value="Publik">Publik</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label text-body">Kategori Aduan</label>
                                <select class="form-select border border-success" aria-label="Default select example"
                                    name="kategori_id" required>
                                    <option selected>Klik untuk pilih</option>
                                    @foreach ($kategori as $kat)
                                    <option value={{ $kat->id }}>{{ $kat->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="aduan" class="form-label text-body">Saran dan Aduan</label>
                                <textarea type="text" class="form-control border border-success" name="saran_aduan"
                                    id="aduan" placeholder="Masukkan saran dan aduan anda" name="areasaran" rows="5"
                                    required></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="status" id="status"
                                    class="form-control border border-success" value="1">
                            </div>
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
</div>
                </section>
                    <!-- Form End-->
                    <br>
                    
                    <section id="pilihan" class="overview-block-ptb grey-bg iq-blog">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="heading-title">
                                        <h2 class="">Feedback Admin</h2>
                                        <hr class="mx-auto" style="width: 20%">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true"
                                        data-items="2" data-items-laptop="2" data-items-tab="2" data-items-mobile="1"
                                        data-items-mobile-sm="1" data-margin="30">
                                        @foreach ($aduan as $a)
                                        <div class="item">
                                            <div class="iq-blog-box">
                                                <div class="iq-blog-detail">
                                                    <div class="blog-title">
                                                        <h5 class="iq-tw-6 iq-mb-10"><b>{{ $a->nama_lengkap }}</b></h5>
                                                    </div>
                                                    <div class="iq-blog-meta">
                                                        <div class="blog-title">
                                                            <h7 class="iq-tw-6 iq-mb-10">Kartegori</h7>
                                                        </div>
                                                        <p>{{ $a->jenis }}</p>
                                                    </div>
                                                    <div class="iq-blog-meta">
                                                        <div class="blog-title">
                                                            <h7>Saran dan Aduan</h7>
                                                        </div>
                                                        <p class="iq-tw-6 iq-mb-10">{{ $a->saran_aduan }}</p>
                                                    </div>
                                                    <div class="iq-blog-meta">
                                                        <div class="blog-title">
                                                            <h7 class="iq-tw-6 iq-mb-10">Feedback Admin</h7>
                                                        </div>
                                                        <p>{{ $a->isi_feedback }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </section>

        
@endsection
