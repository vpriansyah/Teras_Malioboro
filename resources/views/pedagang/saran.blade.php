@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')
<!-- Bootstrap CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                    @foreach($saran as $faq)
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{$faq->subject}}
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-parent="#accordionFlushExample">
                            <div class="accordion-body">{{$faq->jawaban}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <br><br>

                    <!-- Form -->
                    <form action="/action_page.php">
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Jenis Aduan</label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Klik untuk pilih</option>
                            <option value="Publik">Publik</option>
                            <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="form-label">Kategori Aduan</label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>Klik untuk pilih</option>
                            <option value="Publik">Umum</option>
                            <option value="Private">Keuangan</option>
                            <option value="Private">Pungli</option>
                            <option value="Private">Teknik</option>
                            <option value="Private">Kondisi Gedung</option>
                            <option value="Private">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Saran dan Aduan</label>
                            <textarea type="password" class="form-control" id="pwd" placeholder="Masukkan saran dan aduan anda" name="pswd"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- Form End-->

                </div>
            </div>
        </div>
    </section>
    <!-- Row End -->
</div>

@endsection