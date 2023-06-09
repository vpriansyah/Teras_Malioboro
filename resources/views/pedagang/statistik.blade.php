@include('pedagang.partials.navbar')
@section('content')
    @extends('pedagang.layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
                                    <canvas id="pembelian" style="width:100%;max-width:100%"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card">
                                <h5 class="card-header">Pencarian Terfavorit</h5>
                                <div class="card-body">
                                    <canvas id="pencarian" style="width:100%;max-width:100%"></canvas>
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
        var pag_yValues = [20, 30, 50, 35, 60, 40, 65, 80, 60, 50, 40, 90];

        new Chart("kunjungan", {
            type: "line",
            data: {
                labels: pag_xValues,
                datasets: [{
                    // backgroundColor: "#1e7145",
                    borderColor: "#1e7145",
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

        var pxValues = ["Pakaian", "Blangkon", "Celana", "Aksesoris"];
        var pyValues = [55, 49, 44, 24];
        var p_barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
        ];

        new Chart("pembelian", {
            type: "pie",
            data: {
                labels: pxValues,
                datasets: [{
                    backgroundColor: p_barColors,
                    data: pyValues
                }]
            },
            // options: {
            //     title: {
            //         display: false,
            //     }
            // }
        });

        var sxValues = ["Pakaian", "Blangkon", "Celana", "Aksesoris"];
        var syValues = [20, 25, 30, 10];
        var s_barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
        ];

        new Chart("pencarian", {
            type: "pie",
            data: {
                labels: sxValues,
                datasets: [{
                    backgroundColor: s_barColors,
                    data: syValues
                }]
            },
            // options: {
            //     title: {
            //         display: false,
            //     }
            // }
        });
    </script>
@endsection
