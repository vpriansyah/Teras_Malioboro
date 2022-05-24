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
            <div class="card">
                <div class="card-body" id="calendar"></div>
            </div>
        </div>

        <div id="popup">
            <div class="modal" tabindex="-1" id="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js'></script>
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
                        right: 'dayGridMonth,listWeek'
                    },
                    timeZone: 'Asia/Jakarta',
                    initialView: 'dayGridMonth',
                    defaultDate: 'today',
                    navLinks: true,
                    selectable: false,
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
                                color: '#28a745',
                                textColor: 'white',
                            },
                        @endforeach
                    ],
                    selectOverlap: function(event) {
                        return event.rendering === 'background';
                    },
                    // eventClick: function(event) {
                    //     // var modal = document.getElementById("modal").innerHTML;
                    //     // document.write(modal);
                    // },
                    dateClick: function() {
                        // alert('a day has been clicked!');
                    }
                });

                calendar.render();
            });
        </script>

    </section>
@endsection
