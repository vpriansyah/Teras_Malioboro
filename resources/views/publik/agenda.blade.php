@extends('publik.layouts.layanan')


@section('content')
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Agenda Teras</h2>
                        <h6 class="iq-pb-20">Halaman Agenda untuk menampilkan list kegiatan Teras Malioboro</h6>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="container table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <caption>Agenda Teras Malioboro</caption>

                <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Nama</th>
                </tr>

                @php $no=0 @endphp
                @foreach ($info_agenda as $item)
                    @php $no++ @endphp
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->nama }}</td>
                    </tr>
                @endforeach

            </table>


        </div>
        <div class="container">
        
        </div>-->
        <!-------------------- sdsa -->
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- bootstrap cdn  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- fullcalendar css  -->
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
            document.addEventListener('DOMContentLoaded', function () {
                var calendarEl = document.getElementById('calendar');
                var today = new Date();
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    //plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                    header: {
                        left: 'prevYear,prev,next,nextYear today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                    },
                    initialView: 'dayGridMonth',
                    defaultDate: today,
                    navLinks: false,
                    selecttable: true,
                    editable: false,
                    eventLimit: false,
                    events: [
                        @foreach($info_agenda as $item)
                      {
                      id    : '{{ $item->id}}',
                      title : '{{ $item->nama}}',
                      start : '{{ $item->tanggal}}',
                      end   : '{{ $item->tanggal_akhir}}'
                      //url   : '{{url ('<a data-toggle="modal" data-target="#infoo"></a>')}}',
                    
                      },

                @endforeach
                     ],
                    selectOverlap: function (event) {
                        return event.rendering === 'background';
                    }
                });
    
                calendar.render();
            });
        </script>
        

    <div class="modal fade" id="infoo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="infoo"></h4>
                  </div>
                  <div class="modal-body">
                      <div class="modalError"></div>
                      <div id="infooo"></div>
                      <div class="row" style="margin-top:10px">
                      <div class="col-lg-12">
                          <table class="table table-bordered table-hover">
                              <thead>
                                  <tr> 
                                      <th>Nama</th>
                                      <th>Tanggal Mulai</th>
                                      <th>Tanggal Berakhir</th>
                                      <th>Jam</th>
                                      <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($info_agenda as $item)
                                    <tr>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->tanggal }}</td>
                                        <td>{{ $item->tanggal_akhir }}</td>
                                        <td>{{ $item->jam }}</td>
                                        <td>{{ $item->keterangan }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>
                  <div class="row">
        
    </section>
@endsection
