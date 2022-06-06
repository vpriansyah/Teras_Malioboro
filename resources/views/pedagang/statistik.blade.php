@include('pedagang.partials.navbar')
@section('content')
    @extends('pedagang.layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <br>
                    <div class="card">
                        <h5 class="card-header">Statistik Pengunjung</h5>
                        <div class="card-body">
                            <canvas id="kunjungan" style="width:100%;max-width:100%;min-height:190px"></canvas>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 iq-pb-30">
                            <div class="card">
                                <h5 class="card-header">Pembelian terbanyak</h5>
                                <div class="card-body">
                                    <canvas id="lokasi_pedagang" style="width:100%;max-width:100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Pencarian Terfavorit</h5>
                                <div class="card-body">
                                    <canvas id="kategori_dagangan" style="width:100%;max-width:100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        //Chart Pengunjung
        var pag_xValues = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus",
            "September", "Oktober", "November", "Desember"
        ];
        var pag_yValues = [
            {{ $data['Januari'] }},
            {{ $data['Februari'] }},
            {{ $data['Maret'] }},
            {{ $data['April'] }},
            {{ $data['Mei'] }},
            {{ $data['Juni'] }},
            {{ $data['Juli'] }},
            {{ $data['Agustus'] }},
            {{ $data['September'] }},
            {{ $data['Oktober'] }},
            {{ $data['November'] }}
            {{ $data['Desember'] }}
        ];

        new Chart("kunjungan", {
            type: "line",
            data: {
                labels: pag_xValues,
                datasets: [{
                    backgroundColor: "#1e7145",
                    data: pag_yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                // title: {
                //     display: true,
                //     text: "Pedagang per Paguyuban"
                // }
            }
        });
    </script>
@endsection
