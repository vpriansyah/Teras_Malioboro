@extends('publik.layouts.layanan')

@section('content')
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Aduan & saran</h2>
                    </div>
                    <form action="simpan-aduan.php" method="post">
                        <div class="form-group">
                            <label>Nama Pengadu</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
                        </div>
                        <div class="form-group">
                            <label>Nomor WhatsApp</label>
                            <input type="number" name="no_hp" class="form-control" placeholder="Masukan Nomor WhatsApp" />
                        </div>
                        <div><input type="checkbox" name="nomor" value="nomor"> Kirim Tanggapan ke WhatsApp<br></div>
                        <div class="form-group">
                            <label>Saran / Aduan</label>
                            <textarea name="aduan" class="form-control" rows="5" placeholder="Masukan saran dan aduan anda"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Kategori Aduan</label>
                            <select class="form-control" name="combo1" id="combo1">
                                <option value="aduan 1">-Pilih Kategori Aduan-</option>
                                <option value="aduan 2">Umum</option>
                                <option value="aduan 3">Privat</option>
                                <option value="aduan 4">Apalagi yhak?</option>
                                <option value="aduan 5">dll ajha yups</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">3 + 3 = ?</label>
                            <div class="form-group">
                                <input type="hidden" name="captchaAnswer" id="captchaAnswer" value="6">
                                <input type="text" class="form-control" id="captcha" name="captcha"
                                    placeholder="Berapa hayooo">
                            </div>
                        </div>

                        <div class="form-group">
                            <center>
                                <div>
                                    <input id="submit" name="submit" type="submit" value="Kirim"
                                        class="rounded-pill btn btn-success" onsubmit="return validateForm();"
                                        onclick="return validateForm();">
                                </div>
                            </center>
                        </div>

                    </form>
                </div>
                </body>

            </div>
        </div>
        </div>
    </section>
@endsection
