@extends('publik.layouts.layanan')


@section('content')
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Agenda Teras</h2>
                        <h6 class="iq-pb-20">Halaman Agenda untuk menampilkan list kegiatan Teras Malioboro</h6>
                        <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#infoo">Info
                            Lengkap</button>
                    </div>
                </div>
            </div>
        </div>

        <head>
            <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
        </head>
        <!-- <div class="row mx-auto justify-content-center">
            <div class="col-lg-8">
                        <div id="calendar"></div>
                    </div>
            </div> -->
        <div class="row mx-auto justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        Kalender
                    </div>
                    <div class="card-body">
                        <div id='calendar'></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
                integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var today = new Date();
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    //plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],

                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,listWeek',
                    },
                    timeZone: 'Asia/Jakarta',
                    initialView: 'dayGridMonth',
                    defaultDate: today,
                    navLinks: true,
                    selecttable: true,
                    editable: false,
                    eventLimit: false,
                    eventDisplay: 'auto',
                    selectHelper: true,
                    events: [
                        @foreach ($info_agenda as $item)
                            {
                                id: '{{ $item->id }}',
                                title: '{{ $item->nama }}',
                                start: '{{ $item->tanggal }}',
                                end: '{{ $item->tanggal_akhir }}',
                                // url: '{{ url('#infoo ', $item->keterangan) }}',
                                color: '#28a745',
                            },
                        @endforeach
                    ],
                    selectOverlap: function(event) {
                        return event.rendering === 'background';

                    },
                    
                    //dateClick: function() {
                    //     // alert('a day has been clicked!');
                    //}
                });

                calendar.render();
            });
        </script>

        <style>
            @media screen and (max-width: 514px) {
                #isi-info {
                    font-size: 70%
                }

                #modalMdTitle {
                    font-size: 120%
                }
            }
        </style>

        {{-- Modal Informasi Agenda --}}
        <div class="modal fade" id="infoo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title iq-tw-6" id="modalMdTitle">Agenda Teras Malioboro</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modalError"></div>
                        <div id="modalMdContent"></div>
                        <div class="row">
                            <!-- <div class="col-12"> -->
                            <div class="container table-responsive">
                                <table class="table table-bordered table-hover">
                                    <!-- <thead> -->
                                    <tr id="isi-info" class="iq-tw-6">
                                        <th>Nama</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Jam</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <!-- </thead> -->
                                    <!-- <tbody> -->
                                    @foreach ($info_agenda as $item)
                                        @php
                                            // $jam = date($item->jam, "H:i");
                                            $jam = date('H:i', strtotime($item->jam));
                                        @endphp
                                        <tr id="isi-info">
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->tanggal }}</td>
                                            <td>{{ $item->tanggal_akhir }}</td>
                                            <td>{{ $jam }} </td>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                    @endforeach
                                    <!-- </tbody> -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal Informasi Penting END --}}


    </section>
@endsection
