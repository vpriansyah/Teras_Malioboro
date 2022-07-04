@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')

<section id="pilihan" class="overview-block-ptb grey-bg iq-blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title">
                    <h2 class="">Saran Aduan</h2>
                    <hr class="mx-auto" style="width: 20%">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true"
                    data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1"
                    data-items-mobile-sm="1" data-margin="30">
                    @foreach ($saran as $s)
                    <div class="item">
                        <div class="iq-blog-box">
                            <div class="iq-blog-detail">
                                <div class="blog-title">
                                    <h5 class="iq-tw-6 iq-mb-10"><b>{{ $s->nama_lengkap }}</b></h5>
                                </div>
                                <div class="iq-blog-meta">
                                    <div class="blog-title">
                                        <h7 class="iq-tw-6 iq-mb-10">Kartegori</h7>
                                    </div>
                                    <p>{{ $s->jenis }}</p>
                                </div>
                                <div class="iq-blog-meta">
                                    <div class="blog-title">
                                        <h7>Saran dan Aduan</h7>
                                    </div>
                                    <p class="iq-tw-6 iq-mb-10">{{ $s->saran_aduan }}</p>
                                </div>
                                <div class="iq-blog-meta">
                                    <div class="blog-title">
                                        <h7>Status</h7>
                                    </div>
                                </div>
                                <div class="">
                                    <center><button class="btn btn-success" data-toggle="modal"
                                            data-target="#feedback{{ $s->id_saran }}">Feedback</button></center>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- @foreach ($feedback as $f)
                    <div class="iq-blog-meta">
                        <div class="blog-title">
                            <h7>Feedback</h7>
                        </div>
                        <p class="iq-tw-6 iq-mb-10">{{ $f->isi_feedback }}</p>
                    </div>
                    @endforeach --}}
                </div>
            </div>
        </div>
        <!-- Modal -->
        @foreach ($saran as $s)
        <div class="modal fade" id="feedback{{ $s->id_saran }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <form action="{{ url('/admin/saran/simpan') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="id" aria-describedby="id" name="saran_id"
                                value="{{ $s->id_saran }}" required>
                            <label for="Feedback">Feedback</label>
                            <input type="text" style="width: 100%" id="isi_feedback" name="isi_feedback" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
