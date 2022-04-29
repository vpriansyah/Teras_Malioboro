@extends('publik.layouts.layanan')

@section('content')
    {{-- @foreach ($data as $data) --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="heading-title-layanan text-center">
                            <h2 class="title iq-tw-6">Data Statistik</h2>
                        </div>
                        <div class="card">
                            <h5 class="card-header">Pedagang per jenis kelamin</h5>
                            <div class="card-body">
                                <canvas id="jk" style="width:100%;max-width:500px"></canvas>
                                <script type="text/javascript">
                                    var xValues = ['Laki-laki', 'Perempuan'];
                                    var yValues = [{{ $data["laki"] }}, {{ $data["perempuan"] }}];
                                    var barColors = [
                                        "#b91d47",
                                        "#1e7145"
                                    ];

                                    new Chart("jk", {
                                        type: "pie",
                                        data: {
                                            labels: xValues,
                                            datasets: [{
                                                backgroundColor: barColors,
                                                data: yValues
                                            }]
                                        },
                                        // options: {
                                        //     title: {
                                        //         display: true,
                                        //         text: "Pedagang per Jenis Kelamin"
                                        //     }
                                        // }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    {{-- @endforeach --}}
@endsection
