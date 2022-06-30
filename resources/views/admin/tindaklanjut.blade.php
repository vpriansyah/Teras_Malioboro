@include('pedagang.partials.navbar')
@section('content')
    @extends('pedagang.layouts.footer')

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="heading-title">
                    <h2 class="">Tindak Lanjut</h2>
                    <hr class="mx-auto" style="width: 20%">
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahFAQ">
                Tambah Tindak Lanjut
            </button>
        </div>

        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php $no = 1; @endphp
                @foreach ($tindaklanjut as $f)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $f->Judul }}</td>
                        <td>{{ $f->Deskripsi }}</td>
                        <td>{{ $f->Foto }}</td>
                        <td>
                            <a href="/admin/faq/edit/" data-bs-toggle="modal" data-bs-target="#editFAQ"
                                class="btn btn-outline-success btn-sm"><i class="fa-solid fa-pencil"></i></a>
                            <a href="/admin/faq/hapus/" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                                class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
