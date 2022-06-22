@include('pedagang.partials.navbar')
@section('content')
    @extends('pedagang.layouts.footer')

    <div class="container">
        <div class="heading-title text-center">
            <br>
            <br>
            <h2 class="title iq-tw-6">Saran Aduan</h2>
        </div>
        <div class="row justify-content-md-center">
            @foreach ($saran as $s)
                <div
                    class="card col-lg-3 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex align-items-stretch mx-auto">
                    <div class=" iq-blog text-left iq-ptb-15 iq-pr-10 iq-pl-10 d-flex ">
                        <div class="m-auto justify-content-center align-items-center"
                            style="width: 100%;  height:200px; max-height:800px">
                            <div class="card m-auto justify-content-center bg-transparent border-0">
                                <h3 class="iq-tw-6 iq-pb-5 m-auto" style=" font-size: 150%; padding-top: 10%">
                                    {{ $s->nama }}</h3>
                                <p class="card-text">
                                    <center>{{ $s->saran_aduan }}</center>
                                </p>
                                <a href="" class="btn btn-success">Feedback</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
