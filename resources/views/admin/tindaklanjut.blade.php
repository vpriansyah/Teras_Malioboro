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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahtindaklanjut">
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
            @foreach ($tindaklanjut as $tl)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $tl->Judul }}</td>
                <td>{{ $tl->Deskripsi }}</td>
                <td><img width="30%" src="{{ asset('storage/' . $tl->Foto) }}"></td>
                <td>
                    <button data-bs-toggle="modal" data-bs-target="#editTindakLanjut{{ $tl->id_tindaklanjut }}"
                        class="btn btn-outline-success btn-sm"><i class="fa-solid fa-pencil"></i></button>
                    <a href="/admin/tindaklanjut/destroy/{{ $tl->id_tindaklanjut }}"
                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                        class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="tambahtindaklanjut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">TAMBAH TINDAK LANJUT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/admin/tindaklanjut/store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="Judul" class="form-label">Judul</label>
                            <textarea class="form-control" id="Judul" name="Judul"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="Deskripsi" name="Deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="Foto" class="form-label">Foto</label>
                            <input class="form-control" type="file" id="Foto" name="Foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($tindaklanjut as $tl)
    <div class="modal fade" id="editTindakLanjut{{ $tl->id_tindaklanjut }}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="editFAQ" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">EDIT TINDAK LANJUT</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/admin/tindaklanjut/update/{{ $tl->id_tindaklanjut }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="pertanyaan" class="form-label">Pertanyaan</label>
                            <textarea class="form-control" id="updateJudul" name="updateJudul" value={{ old('Judul',
                                $tl->Judul ) }}>{{ $tl->Judul }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="jawaban" class="form-label">Jawaban</label>
                            <textarea class="form-control" id="updateDeskripsi" name="updateDeskripsi" value={{
                                old('deskripsi', $tl->Deskripsi) }}>{{ $tl->Deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    @endsection
