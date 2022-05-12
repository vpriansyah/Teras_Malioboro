@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')
    <!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.2.0/css/ionicons.min.css" integrity="sha256-F3Xeb7IIFr1QsWD113kV2JXaEbjhsfpgrKkwZFGIA4E=" crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

<!-- details card section starts from here -->
</head>

<body>
     <div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="faq-search-wrap bg-teal-light-3">
                <div class="container">
                    <h1 class="display-5 text-white mb-20">Tindak Lanjut Saran dan Aduan.</h1>
                    <div class="form-group w-100 mb-0">
                        <div class="input-group">
                            <input class="form-control form-control-lg filled-input bg-white" placeholder="Search by keywords" type="text">
                            <div class="input-group-append">
                                <span class="input-group-text"><span class="feather-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <section class="details-card">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                    
                    </div>
                    <div class="card-desc">
                        <h3>Pedagang</h3>
                        <p>Pedagang Asongan Mengadu Tak Bisa Berjualan di Malioboro</p>
                            <a href="#" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/animals" alt="">
                        
                    </div>
                    <div class="card-desc">
                        <h3>Pedagang</h3>
                        <p>Lantai yang retak</p>
                            <a href="#" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/tech" alt="">
                        
                    </div>
                    <div class="card-desc">
                        <h3>Pedagang</h3>
                        <p>Pengunjung yang bruntal</p>
                            <a href="#" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- details card section starts from here -->
<!-- /Row -->
</div>
</body>
<style>
    body{
    background:#f5f5f6;
    margin-top:20px;
}
.faq-search-wrap {
    padding: 50px 0 60px;
}

.faq-search-wrap .form-group .form-control,
.faq-search-wrap .form-group .dd-handle {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
}

.faq-search-wrap .form-group .input-group-append {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10;
    pointer-events: none;
}

.faq-search-wrap .form-group .input-group-append .input-group-text {
    background: transparent;
    border: none;
}

.faq-search-wrap .form-group .input-group-append .input-group-text .feather-icon > svg {
    height: 18px;
    width: 18px;
}
.bg-teal-light-3 {
    background-color: #28a745 !important;
}
/* card details start  */
@import url('https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:400,400i,700,700i');
section{
    padding: 100px 0;
}
.details-card {
	background: #ecf0f1;
}

.card-content {
	background: #ffffff;
	border: 4px;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
}

.card-img img {
	width: 100%;
	height: auto;
	display: block;
}

.card-img span {
	position: absolute;
    top: 15%;
    left: 12%;
    background: #28a745;
    padding: 6px;
    color: #fff;
    font-size: 12px;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    -o-border-radius: 4px;
    transform: translate(-50%,-50%);
}
.card-img span h4{
        font-size: 12px;
        margin:0;
        padding:10px 5px;
         line-height: 0;
}
.card-desc {
	padding: 1.25rem;
}

.card-desc h3 {
	color: #000000;
    font-weight: 600;
    font-size: 1.5em;
    line-height: 1.3em;
    margin-top: 0;
    margin-bottom: 5px;
    padding: 0;
}

.card-desc p {
	color: #747373;
    font-size: 14px;
	font-weight: 400;
	font-size: 1em;
	line-height: 1.5;
	margin: 0px;
	margin-bottom: 20px;
	padding: 0;
	font-family: 'Raleway', sans-serif;
}
.btn-card{
	background-color: #28a745;
	color: #fff;
	box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
    padding: .84rem 2.14rem;
    font-size: .81rem;
    -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    -o-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    margin: 0;
    border: 0;
    -webkit-border-radius: .125rem;
    border-radius: .125rem;
    cursor: pointer;
    text-transform: uppercase;
    white-space: normal;
    word-wrap: break-word;
    color: #fff;
}
.btn-card:hover {
    background: rgb(243, 211, 4);
}
a.btn-card {
    text-decoration: none;
    color: #fff;
}
</style>
@endsection
