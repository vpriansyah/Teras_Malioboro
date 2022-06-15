@extends('publik.layouts.layanan')

@section('content')
<?php
$peta1 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
$peta2 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%202%20Jl.%20Malioboro%20No.56,%20Suryatmajan,%20Kec.%20Danurejan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055212+(Teras%20Malioboro%202)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
$tm1 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%201%20Jl.%20Margo%20Mulyo,%20Ngupasan,%20Kec.%20Gondomanan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055122+(Teras%20Malioboro%201)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
$tm2 = '<iframe class="map" src="https://maps.google.com/maps?width=100%25&amp;hl=en&amp;q=Teras%20Malioboro%202%20Jl.%20Malioboro%20No.56,%20Suryatmajan,%20Kec.%20Danurejan,%20Kota%20Yogyakarta,%20Daerah%20Istimewa%20Yogyakarta%2055212+(Teras%20Malioboro%202)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" style="border:0" allowfullscreen></iframe>';
?>

    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Peta Interaktif</h2>
                        {{-- <p>Lorem Ipsum is simply dummy text ever sincehar the 1500s, when an unknownshil printer took a galley of
                            type and scrambled it to make a type specimen book.It has survived not only five centuries.</p> --}}
                    </div>
                    <style>
                        @media screen and (min-width: 767px) {
                          .footer-info{
                            height: 100%;
                            padding: 30%;
                          }
                        }
                        @media screen and (max-width: 766px) {
                          .footer-info{
                            height: 150%;
                            padding: 5%;
                          }
                        }
                      </style>
                    <div>
                        {{-- <div class="footer-info" style="width: 100%;"> --}}
                            <div class="embed-responsive embed-responsive-16by9">
                            <?= $peta1 ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
