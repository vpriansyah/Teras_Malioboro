@extends('publik.layouts.layanan')

@section('content')
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Aduan & saran</h2>
                    </div>
                    <form action="/publik/tambah" method="post">
                        {{ csrf_field() }}
                        <div class="form-group iq-pt-10">
                            <label>Jenis</label>
                            <select class="form-control" name="jenis" id="combo1">
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Nama Pengadu</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required/>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required/>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Nomor WhatsApp</label>
                            <input type="text" name="no_hp" onkeypress="return hanyaAngka(event)" class="form-control"
                                placeholder="Masukan Nomor WhatsApp" />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Saran / Aduan</label>
                            <textarea name="saran_aduan" class="form-control" rows="5" placeholder="Masukan saran dan aduan anda" required></textarea>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Kategori Aduan</label>
                            <select class="form-control" name="kategori" id="combo1">
                                <option value="umum">Umum</option>
                                <option value="keuangan">Keuangan</option>
                                <option value="pungli">Pungli</option>
                                <option value="teknik">Teknik</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input name="waktu" type="hidden" value="<?php echo date('Y-m-d h:i:s'); ?>">
                        </div>
                        <div class="form-group iq-pt-10">
                            <center>
                                <div>
                                    <input id="submit" name="submit" type="submit" value="Kirim"
                                        class="rounded-pill btn btn-success btn-tambah" onsubmit="return validateForm();"
                                        onclick="return validateForm();">
                                </div>
                            </center>
                        </div>
                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                    return false;
                                return true;
                            }
                        </script>
                    </form>
                </div>
                </body>
            </div>
        </div>
        </div>  
        <script>
            $('.btn-tambah').click(function() {
                            swal("Hello world!");

                        });
        </script>
    </section>
@endsection
