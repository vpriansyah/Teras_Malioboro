@extends('publik.layouts.layanan')

@section('content')
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
                            <script></script>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Paguyuban Pedagang</h5>
                        <div class="card-body">
                            <canvas id="paguyuban" style="width:100%;max-width:100%;min-height:190px"></canvas>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 iq-pb-30">
                            <div class="card">
                                <h5 class="card-header">Lokasi Pedagang</h5>
                                <div class="card-body">
                                    <canvas id="lokasi_pedagang" style="width:100%;max-width:100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Kategori Dagangan</h5>
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
        //Chart Jenis Kelamin
        var jk_xValues = ['Laki-laki', 'Perempuan'];
        var jk_yValues = [{{ $data['laki'] }}, {{ $data['perempuan'] }}];
        var jk_barColors = [
            "#b91d47",
            "#1e7145"
        ];

        new Chart("jk", {
            type: 'pie',
            responsive: true,
            data: {
                labels: jk_xValues,
                datasets: [{
                    backgroundColor: jk_barColors,
                    data: jk_yValues
                }]
            },
            // options: {
            //     title: {
            //         display: true,
            //         text: "Pedagang per Jenis Kelamin"
            //     }
            // }
        });

        //Chart Paguyuban
        var pag_xValues = ["PPKLY 37", "PEMALNI", "MATARAM", "PADMA", "SENOPATI", "PERWAKILAN", "HANDAYANI", "SOSROKUSUMO",
            "TITIK NOL", "PPMS", "PAPELA"
        ];
        var pag_yValues = [
            {{ $data['PPKLY 37'] }},
            {{ $data['PEMALNI'] }},
            {{ $data['MATARAM'] }},
            {{ $data['PADMA'] }},
            {{ $data['SENOPATI'] }},
            {{ $data['PERWAKILAN'] }},
            {{ $data['HANDAYANI'] }},
            {{ $data['SOSROKUSUMO'] }},
            {{ $data['TITIK NOL'] }},
            {{ $data['PPMS'] }},
            {{ $data['PAPELA'] }}
        ];

        new Chart("paguyuban", {
            type: "horizontalBar",
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

        //Chart Lokasi Pedagang
        var lp_xValues = ["Gedung A", "Gedung B", "Gedung C", "Gedung D", "Selasar"];
        var lp_yValues = [
            {{ $data['Gedung A'] }},
            {{ $data['Gedung B'] }},
            {{ $data['Gedung C'] }},
            {{ $data['Gedung D'] }},
            {{ $data['Selasar'] }}
        ];

        new Chart("lokasi_pedagang", {
            type: "bar",
            data: {
                labels: lp_xValues,
                datasets: [{
                    backgroundColor: "#1e7145",
                    data: lp_yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                // title: {
                //     display: true,
                //     text: "Pedagang per Lokasi Gedung"
                // }
            }
        });

        //Chart Kategori Dagangan
        var kd_xValues = ["Aksesoris Fashion", "Pakaian", "Food Court", "Oleh-oleh", "Jasa dan Lain-lain"];
        var kd_yValues = [
            {{ $data['Aksesoris Fashion'] }},
            {{ $data['Pakaian'] }},
            {{ $data['Food Court'] }},
            {{ $data['Oleh-oleh'] }},
            {{ $data['Jasa dan Lain-lain'] }}
        ];

        new Chart("kategori_dagangan", {
            type: "horizontalBar",
            data: {
                labels: kd_xValues,
                datasets: [{
                    backgroundColor: "#1e7145",
                    data: kd_yValues
                }]
            },
            options: {
                legend: {
                    display: false
                },
                // title: {
                //     display: true,
                //     text: "Pedagang per Kategori Dagangan"
                // }
            }
        });
    </script>
@endsection
