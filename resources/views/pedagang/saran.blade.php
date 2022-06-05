@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')
<!-- Bootstrap CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="faq-search-wrap bg-teal-light-3 pt-3 pb-3">
                <div class="container">
                    <h1 class="display-5 text-white mb-2 text-center">Saran dan Aduan</h1>
                </div>
            </div>
            @foreach($saran as $faq)
            <div class="card mb-3 mt-5">
                <div class="card-body">
                    <h5 class="card-title">{{$faq->subject}}</h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection