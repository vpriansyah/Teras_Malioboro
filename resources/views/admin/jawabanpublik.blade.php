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
                        <h2 class="title iq-tw-6">Jawaban Aduan & Saran Publik</h2>
                    </div>
                    <div class="card">
                        <h5 class="card-header">Saran & Aduan Pilihan</h5>
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                                <thead class="iq-tw-6 align-middle" style="font-size: 15px;" align="center">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Saran & Aduan</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle" align="center">
                                    @foreach($as_tampil as $tampil)
                                    <tr>
                                        <td>{{ $tampil->nama }}</td>
                                        <td>{{ $tampil->jenis }}</td>
                                        <td class="align-top" align="left" style="text-align: justify; text-justify: inter-word;">
                                            {{ $tampil->saran_aduan }}
                                        </td>
                                        <td class="align-top" align="left" style="text-align: justify; text-justify: inter-word;">
                                            {{ $tampil->jawaban }}
                                        </td>
                                        <td>
                                            <div style="padding: 1px">
                                                <button class="btn btn-outline-info" data-toggle="modal" style="width: 40px; height: 38px;"
                                                    data-target="#infoTampil{{$tampil->id}}"><i class="fa-solid fa-info"></i></button>
                                            </div>
                                            <div style="padding: 1px">
                                                <a href="{{ url('admin/jawabanpublik/sembunyi', $tampil->id_aduan_saran) }}" role="button"
                                                    class="btn btn-outline-danger" style="width: 40px; height: 38px;"
                                                    onclick="return confirm('Aduan Saran akan disembunyikan dari publik, apakah anda yakin?');">
                                                    <i style="font-size: 82%" class="fa-solid fa-eye-slash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $as_tampil->links() }}
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <h5 class="card-header">Jawaban Saran & Aduan</h5>
                        <div class="card-body">
                            <table class="table table-hover table-bordered">
                                <thead class="iq-tw-6 align-middle" style="font-size: 15px;" align="center">
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Saran & Aduan</th>
                                        <th scope="col">Jawaban</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle" align="center">
                                    @foreach($jawaban_publik as $jawaban)
                                    <tr>
                                        <td>{{ $jawaban->nama }}</td>
                                        <td>{{ $jawaban->jenis }}</td>
                                        <td class="align-top" align="left" style="text-align: justify; text-justify: inter-word;">
                                            {{ $jawaban->saran_aduan }}
                                        </td>
                                        <td class="align-top" align="left" style="text-align: justify; text-justify: inter-word;">
                                            {{ $jawaban->jawaban }}
                                        </td>
                                        <td class="align-top">
                                            <div style="padding: 1px">
                                                <button class="btn btn-outline-info" data-toggle="modal" style="width: 40px; height: 38px;"
                                                    data-target="#infoJawaban{{$jawaban->id}}"><i class="fa-solid fa-info"></i></button>
                                            </div>
                                            <div style="padding: 1px">
                                                <button class="btn btn-outline-warning" data-toggle="modal" style="width: 40px; height: 38px;"
                                                    data-target="#ubahJawaban{{$jawaban->id}}"><i class="fa-solid fa-pen-to-square"></i></button>
                                            </div>
                                            <div style="padding: 1px">
                                                <a href="{{ url('admin/jawabanpublik/tampil', $jawaban->id_aduan_saran) }}" role="button"
                                                    class="btn btn-outline-success" style="width: 40px; height: 38px;"
                                                    onclick="return confirm('Aduan Saran akan ditampilkan kepada publik, apakah anda yakin?');">
                                                    <i style="font-size: 82%" class="fa-solid fa-eye"></i>
                                                </a>       
                                            </div>
                                            <div style="padding: 1px">
                                                <a href="{{ url('admin/jawabanpublik/hapus', $jawaban->id) }}" role="button"
                                                    class="btn btn-outline-danger" style="width: 40px; height: 38px;"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus jawaban?');">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $jawaban_publik->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Modal info jawaban -->
@foreach ($as_tampil as $tampil)
<div class="modal fade" id="infoTampil{{$tampil->id}}" tabindex="-1" role="dialog" aria-labelledby="infoTampilModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoTampilModalLabel">Info Lengkap</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
                <div class="modal-body">
                    <table class="table table-borderless">
                        <tr>
                          <th scope="row">Kategori</th>
                          <td>:</td>
                          <td>{{ $tampil->jenis }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Nama</th>
                          <td>:</td>
                          <td>{{ $tampil->nama }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Email</th>
                          <td>:</td>
                          <td>{{ $tampil->email }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Nomor HP</th>
                          <td>:</td>
                          <td>
                              <?php if( $tampil->no_hp == null) {?>
                                  -
                              <?php } else {?>
                                  {{ $tampil->no_hp }}
                              <?php } ?>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">Aduan & Saran</th>
                          <td>:</td>
                          <td style="text-align: justify; text-justify: inter-word;">{{ $tampil->saran_aduan }}</td>
                        </tr>
                        <tr>
                          <th scope="row">Jawaban</th>
                          <td>:</td>
                          <td style="text-align: justify; text-justify: inter-word;">{{ $tampil->jawaban }}</td>
                        </tr>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="{{ url('admin/jawabanpublik/sembunyi', $tampil->id_aduan_saran) }}" role="button" class="btn btn-danger"
                        onclick="return confirm('Aduan Saran akan disembunyikan dari publik, apakah anda yakin?');">
                        Sembunyikan
                    </a>
                </div>
        </div>
    </div>
</div>
@endforeach

    <!-- Modal info jawaban -->
    @foreach ($jawaban_publik as $jawaban)
    <div class="modal fade" id="infoJawaban{{$jawaban->id}}" tabindex="-1" role="dialog" aria-labelledby="infoJawabanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoJawabanModalLabel">Info Lengkap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                    <div class="modal-body">
                        <table class="table table-borderless">
                            <tr>
                              <th scope="row">Kategori</th>
                              <td>:</td>
                              <td>{{ $jawaban->jenis }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Nama</th>
                              <td>:</td>
                              <td>{{ $jawaban->nama }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                              <td>:</td>
                              <td>{{ $jawaban->email }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Nomor HP</th>
                              <td>:</td>
                              <td>
                                  <?php if( $jawaban->no_hp == null) {?>
                                      -
                                  <?php } else {?>
                                      {{ $jawaban->no_hp }}
                                  <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Aduan & Saran</th>
                              <td>:</td>
                              <td style="text-align: justify; text-justify: inter-word;">{{ $jawaban->saran_aduan }}</td>
                            </tr>
                            <tr>
                              <th scope="row">Jawaban</th>
                              <td>:</td>
                              <td style="text-align: justify; text-justify: inter-word;">{{ $jawaban->jawaban }}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <button type="Button" class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#ubahJawaban{{$jawaban->id}}">Ubah Jawaban</button>
                                    <a href="{{ url('admin/jawabanpublik/hapus', $jawaban->id) }}" role="button" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus jawaban?');">
                                        Hapus Jawaban
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <a href="{{ url('admin/jawabanpublik/tampil', $jawaban->id_aduan_saran) }}" role="button" class="btn btn-success"
                            onclick="return confirm('Aduan Saran akan ditampilkan kepada publik, apakah anda yakin?');">
                            Tampilkan
                        </a>  
                    </div>
            </div>
        </div>
    </div>
    @endforeach

     <!-- Modal edit jawaban -->
     @foreach ($jawaban_publik as $jawaban)
     <div class="modal fade" id="ubahJawaban{{$jawaban->id}}" tabindex="-1" role="dialog" aria-labelledby="ubahJawabanModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="ubahJawabanModalLabel">Info Lengkap</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                 </div>
                 <form action="{{ url('admin/jawabanpublik/ubah', $jawaban->id) }}" method="POST" onsubmit="return confirm('Perubahan jawaban akan disimpan, apakah anda yakin?');">
                     @csrf
                     <div class="modal-body">
                         <table class="table table-borderless">
                             <tr>
                               <th scope="row">Kategori</th>
                               <td>:</td>
                               <td>{{ $jawaban->jenis }}</td>
                             </tr>
                             <tr>
                               <th scope="row">Nama</th>
                               <td>:</td>
                               <td>{{ $jawaban->nama }}</td>
                             </tr>
                             <tr>
                               <th scope="row">Email</th>
                               <td>:</td>
                               <td>{{ $jawaban->email }}</td>
                             </tr>
                             <tr>
                               <th scope="row">Nomor HP</th>
                               <td>:</td>
                               <td>
                                   <?php if( $jawaban->no_hp == null) {?>
                                       -
                                   <?php } else {?>
                                       {{ $jawaban->no_hp }}
                                   <?php } ?>
                               </td>
                             </tr>
                             <tr>
                               <th scope="row">Aduan & Saran</th>
                               <td>:</td>
                               <td style="text-align: justify; text-justify: inter-word;">{{ $jawaban->saran_aduan }}</td>
                             </tr>
                             <tr>
                               <th scope="row">Jawaban</th>
                               <td>:</td>
                               <td>
                                   <textarea class="form-control" name="jawaban" rows="3" placeholder="Isi jawaban..."
                                   style="text-align: justify; text-justify: inter-word;" required>{{ $jawaban->jawaban }}</textarea>
                               </td>
                             </tr>
                         </table>
                     </div>
 
                     <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                         <button type="submit" class="btn btn-warning">Ubah</button>
                         
                     </div>
                 </form>
             </div>
         </div>
     </div>
     @endforeach
@endsection
