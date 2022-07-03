@extends('publik.layouts.layanan')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Aduan & Saran Publik</h2>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Jenis Aduan & Saran Publik</h5>
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                                <thead class="iq-tw-6 align-middle" style="font-size: 15px;" align="center">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Saran & Aduan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle" align="center">
                                    @foreach ($as_publik as $publik)
                                        <tr>
                                            <td>{{ $publik->nama }}</td>
                                            <td>{{ $publik->jenis }}</td>
                                            <td class="align-top" align="left"
                                                style="text-align: justify; text-justify: inter-word;">
                                                {{ $publik->saran_aduan }}
                                            </td>
                                            <td class="align-top">
                                                {{-- <div style="padding: 1px">
                                                    <a href="{{ url('admin/publik', $publik->id) }}" role="button"
                                                        class="btn btn-info" style="width: 40px; height: 38px;">
                                                        <i class="fa-solid fa-circle-info"></i>
                                                    </a>
                                                </div> --}}
                                                <div style="padding: 1px">
                                                    <button class="btn btn-outline-info" data-toggle="modal" style="width: 40px; height: 38px;"
                                                        data-target="#infoPublik{{$publik->id}}"><i class="fa-solid fa-info"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $as_publik->links() }}
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Jenis Aduan & Saran Privat</h5>
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                                <thead class="iq-tw-6 align-middle" style="font-size: 15px;" align="center">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Saran & Aduan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle" align="center">
                                    @foreach ($as_privat as $privat)
                                        <tr>
                                            <td>{{ $privat->nama }}</td>
                                            <td>{{ $privat->jenis }}</td>
                                            <td class="align-top" align="left"
                                                style="text-align: justify; text-justify: inter-word;">
                                                {{ $privat->saran_aduan }}
                                            </td>
                                            <td>
                                                {{-- <div style="padding: 1px">
                                                    <a href="{{ url('admin/privat', $privat->id) }}" role="button"
                                                        class="btn btn-info" style="width: 40px; height: 38px;">
                                                        <i class="fa-solid fa-circle-info"></i>
                                                    </a>
                                                </div> --}}
                                                <div style="padding: 1px">
                                                    <button class="btn btn-outline-info" data-toggle="modal" style="width: 40px; height: 38px;"
                                                        data-target="#infoPrivat{{$privat->id}}"><i class="fa-solid fa-info"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $as_privat->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    @foreach ($as_publik as $publik)
    <div class="modal fade" id="infoPublik{{$publik->id}}" tabindex="-1" role="dialog" aria-labelledby="infoPublikModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoPublikModalLabel">Info Lengkap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                <form action="{{ url('admin/aduansaranpublik/jawab') }}" method="POST" onsubmit="return confirm('Jawaban akan disimpan, apakah anda yakin?');">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="id_aduan_saran" value="{{ $publik->id }}">
                        <input type="hidden" class="form-control" name="id_users" value="{{ auth()->user()->id }}">
                        <table class="table table-borderless">
                            <tr>
                              <th scope="row">Kategori</th>
                              <td>:</td>
                              <td>{{ $publik->jenis }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Nama</th>
                              <td>:</td>
                              <td>{{ $publik->nama }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                              <td>:</td>
                              <td>{{ $publik->email }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Nomor HP</th>
                              <td>:</td>
                              <td>
                                  <?php if( $publik->no_hp == null) {?>
                                      -
                                  <?php } else {?>
                                      {{ $publik->no_hp }}
                                  <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Aduan & Saran</th>
                              <td>:</td>
                              <td style="text-align: justify; text-justify: inter-word;">{{ $publik->saran_aduan }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Jawaban</th>
                              <td>:</td>
                              <td>
                                  <textarea class="form-control" name="jawaban" rows="3" placeholder="Isi jawaban..."
                                  style="text-align: justify; text-justify: inter-word;" required></textarea>
                              </td>
                            </tr>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success" >Jawab</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($as_privat as $privat)
    <div class="modal fade" id="infoPrivat{{$privat->id}}" tabindex="-1" role="dialog" aria-labelledby="infoPrivatModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoPrivatModalLabel">Info Lengkap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                    <div class="modal-body">
                        <table class="table table-borderless">
                            <tr>
                              <th scope="row">Kategori</th>
                              <td>:</td>
                              <td>{{ $privat->jenis }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Nama</th>
                              <td>:</td>
                              <td>{{ $privat->nama }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                              <td>:</td>
                              <td>{{ $privat->email }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Nomor HP</th>
                              <td>:</td>
                              <td>
                                  <?php if( $privat->no_hp == null) {?>
                                      -
                                  <?php } else {?>
                                      {{ $privat->no_hp }}
                                  <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Aduan & Saran</th>
                              <td>:</td>
                              <td style="text-align: justify; text-justify: inter-word;">{{ $privat->saran_aduan }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
