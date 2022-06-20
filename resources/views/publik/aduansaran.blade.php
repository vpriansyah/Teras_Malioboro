@extends('publik.layouts.layanan')

@section('content')
    <script src="{!! asset('dist/sweetalert2.all.min.js') !!}"></script>

    {{-- Notifikasi --}}
    @if (Session::has('message'))
        {{-- <li>{!! session('message') !!}</li> --}}
        <script>
            Swal.fire({
                title: 'CAPTCHA',
                text: 'Hasil penjumlahan salah.',
                icon: 'error',
                confirmButtonText: 'Oke!'
            })
        </script>
    @endif
    
    <section class="iq-feature1 overview-block-ptb-25 grey-bg" id="layanan">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                    <div class="heading-title-layanan text-center">
                        <h2 class="title iq-tw-6">Aduan & saran</h2>
                    </div>
                    <form action="tambah" method="post">
                        {{ csrf_field() }}
                        <div class="form-group iq-pt-10">
                            <label>Jenis</label>
                            <font color='#ff0000'>*</font>
                            <select class="form-control" name="jenis" id="combo1">
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Nama Pengadu</label>
                            <font color='#ff0000'>*</font>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Email</label>
                            <font color='#ff0000'>*</font>
                            <input type="email" name="email" class="form-control" placeholder="Masukan Email" required />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Nomor WhatsApp</label>
                            <input type="text" name="no_hp" onkeypress="return hanyaAngka(event)" class="form-control"
                                placeholder="Masukan Nomor WhatsApp" />
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Saran / Aduan</label>
                            <font color='#ff0000'>*</font>
                            <textarea name="saran_aduan" class="form-control" rows="5" placeholder="Masukan saran dan aduan anda"
                                required></textarea>
                        </div>
                        <div class="form-group iq-pt-10">
                            <label>Kategori Aduan</label>
                            <font color='#ff0000'>*</font>
                            <select class="form-control" name="kategori" id="combo1">
                                @foreach ($kat_aduan as $kat)
                                <option value="{{ $kat->id }}">{{ $kat->jenis }}</option>
                                {{-- <option value="umum">Umum</option>
                                <option value="keuangan">Keuangan</option>
                                <option value="pungli">Pungli</option>
                                <option value="teknik">Teknik</option>
                                <option value="lainnya">Lainnya</option> --}}
                                @endforeach
                            </select>
                        </div>
                        <?php
                        // init variables
                        $min_number = 1;
                        $max_number = 32;
                        
                        // generating random numbers
                        $random_number1 = mt_rand($min_number, $max_number);
                        $random_number2 = mt_rand($min_number, $max_number);
                        ?>
                        <div class="form-group iq-pt-10">
                            <label>
                                <?php
                                echo $random_number1 . ' + ' . $random_number2 . ' = ';
                                ?>
                            </label>
                            <input type="text" name="captchaResult" class="form-control" size="2" maxlength="2"
                                onkeypress="return hanyaAngka(event)"/>
                        </div>
                        <div><a>(</a>
                            <font color='#ff0000'>*</font>) Tanda Tersebut Wajib Di isi :)
                        </div>
                        <div class="form-group">
                            <input name="tampil" type="hidden" value="false">
                            <input name="waktu" type="hidden" value="<?php echo date('Y-m-d h:i:s'); ?>">
                            <input name="firstNumber" type="hidden" value="<?php echo $random_number1; ?>" />
                            <input name="secondNumber" type="hidden" value="<?php echo $random_number2; ?>" />
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
                <script>
                        $details['title'];
                        $details['body'];
                </script>
                </body>
            </div>
        </div>
        </div>


    </section>
@endsection
