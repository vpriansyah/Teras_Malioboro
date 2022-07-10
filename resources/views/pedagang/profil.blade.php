@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')
    <style>
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Profile Pedagang</title>
    </head>

    <body>
        <section class="iq-feature1 overview-block-nw grey-bg">
            <div class="container">
                <div class="col-lg-12 col-md-6 col-sm-12 iq-mtb-15">
                    <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">
                        <div class="content-blog iq-pr-50">
                            <h3 class="">{{ auth()->user()->username }}</h3>
                            <h5 class="text-success">Pedagang AKTIF</h5>
                        </div>
                    </div>
                </div>
                <div class="banner-objects">
                    {{-- <span class="banner-objects-01" data-bottom="transform:translatey(50px)"
                data-top="transform:translatey(-50px);">
                <img src="images/03(2).png" alt="drive02">
            </span> --}}
                    <span class="banner-objects-02 iq-fadebounce">
                        <span class="iq-round"></span>
                    </span>
                </div>
        </section>

        <section class="iq-feature1 overview-block-md grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">

                            <div>
                                <h5 class="mx-auto"><b>Profil Toko</b></h5>
                            </div>
                            <br>
                            <div class="col-lg-6 align-self-center">
                                <img class="iq-works-img"
                                    style="width: 370px; height: 250px; border-radius:10%; align-self-center;"
                                    src="{!! asset('images/fototoko.png') !!}" alt="">
                            </div>
                            <br>
                            <br>
                            <table>
                                <tr>
                                    <th style="width:5%"></th>
                                    <th style="width:40%"></th>
                                    <th style="width:10%"></th>
                                </tr>
                                @foreach ($data_pkl as $key => $data)
                                    <tr>
                                        <td></td>
                                        <td>Nama Toko</td>
                                        <td>:</td>
                                        <td>Toko Setia Abadi</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Jam Operasional</td>
                                        <td>:</td>
                                        <td>{{ $data->operasional_jam_buka }}.00 -
                                            {{ $data->operasional_jam_tutup }}.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Dagangan</td>
                                        <td>:</td>
                                        <td>{{ $data->dagangan }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>Lokasi no Kios</td>
                                        <td>:</td>
                                        <td>{{ $data->lokasi_no_kios_id }}</td>
                                    </tr>
                            </table>
                            <br>

                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-12 iq-mtb-15">
                        <div class="iq-blog text-left iq-ptb-30 iq-pr-30 iq-pl-30">

                            <div>
                                <h5 class="mx-auto"><b>Profil Pedagang</b></h5>
                            </div>
                            <br>
                            <table>
                                <tr>
                                    <th style="width: 10%"></th>
                                    <th style="width: 5%"></th>
                                    <th style="width: 5%"></th>
                                    <th style="width: 10%"></th>
                                </tr>


                                <tr>
                                    <td></td>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>Nomor HP</td>
                                    <td>:</td>
                                    <td>{{ $data->no_hp }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td>{{ $data->gender }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $data->alamat_ktp }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Paguyuban</td>
                                    <td>:</td>
                                    <td>{{ $data->paguyuban_id }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td>{{ $data->nik }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>No KK</td>
                                    <td>:</td>
                                    <td>{{ $data->no_kk }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Nomor NIB</td>
                                    <td>:</td>
                                    <td>{{ $data->nomor_nib }}</td>
                                </tr>

                            </table>
                            <br>
                            <center><a href="{{ url('profil/' . $data->id . '/edit') }}" class="btn btn-success">Edit</a>
                            </center>
                        </div>
                        <br>
                        <div class="alert alert-warning">
                            <strong>Warning ! </strong> Tidak boleh asal dalam mengedit data pedagang.
                        </div>
                    </div>

                </div>
                @endforeach
        </section>
        <br>
        <br>

        <div class="container">
            <div class="heading-title text-center">
                <h2 class="title iq-tw-6">Barang Dagangan</h2>
                <center><a href="{{ url('profil/' . $data->id . '/edit') }}" class="btn btn-primary" data-toggle="modal"
                        data-target="#tambahbarang">Tambahkan Barang</a>
                </center>

                {{-- Modal --}}

                <div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="container">
                                <div class="mb-3">
                                    <br>
                                    <form action="{{ url('/pedagang/profil/store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <input type="text" class="form-control id="id" aria-describedby="id"
                                            name="id_pedagang" value="{{ $data->id }}" required hidden>
                                        <label for="nama" class="form-label" style="text-align: left">Nama
                                            Barang</label>
                                        <input type="text" class="form-control" id="barang" name="barang" required>
                                        <br>
                                        <label for="upload" class="form-label" style="text-align: left">Upload
                                            Foto</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                                        <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row justify-content-md-center">
                @foreach ($barang_pedagang as $barang)
                    <div
                        class="card col-lg-4 justify-content-center col-md-4 col-sm-6 iq-mtb-15 d-flex align-items-stretch mx-auto">
                        <div class=" iq-blog text-left iq-ptb-15 iq-pr-10 iq-pl-10 d-flex ">
                            <div class="m-auto justify-content-center align-items-center"
                                style="width: 50%; min-height:275px; height:100%; max-height:800px">
                                @php
                                    $foto = $barang->gambar;
                                    if ($barang->gambar == null) {
                                        $foto = 'notfound.jpg';
                                    }
                                @endphp
                                <div class="card m-auto justify-content-center bg-transparent border-0"
                                    style="padding-top:30%; width:auto; max-width: 75%; height:25%; max-height:100px">
                                    <img src="{{ asset('storage/' . $foto) }}" class="d-block mw-100"
                                        style="height:auto; max-height:175px; padding-top:5%;; width:auto;"
                                        alt="''.$barang->gambar.''">
                                </div>
                                <div class="card m-auto justify-content-center bg-transparent border-0">
                                    <h3 class="iq-tw-6 iq-pb-5 mx-auto" style=" font-size: 150%; padding-top: 40%">
                                        {{ $barang->barang }}</h3>
                                    <p class="card-text">
                                        <center>Harga Menyesuaikan SiBakul Jogja</center>
                                    </p>

                                    <a href="https://sibakuljogja.jogjaprov.go.id/app/Beranda"
                                        class="btn btn-success">SiBakul Jogja</a>
                                    <br>
                                    {{-- <center><form action="/profil/barang/{{ $barang->id }}" method="POST">
                                        @method('delete')
                                        @csrf --}}
                                    {{-- <input type="hidden" name="_method" value="DELETE"> --}}
                                    {{-- <button class="btn btn-danger">Delete</button>
                                    </form></center> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <br>

    </body>

    </html>
@endsection
