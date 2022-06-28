@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-sm-12">
            <div class="heading-title">
                <h2 class="">FAQ</h2>
                <hr class="mx-auto" style="width: 20%">
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahFAQ">
            Tambah FAQ
        </button>
    </div>

    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Subject</th>
                <th scope="col">Jawaban</th>
                <th scope="col">Ditulis oleh</th>
                <th scope="col">Status</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach ($faq as $f)
            <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $f->subject }}</td>
                <td>{{ $f->jawaban }}</td>
                <td>{{ $f->nama }}</td>
                <td>{{ $f->status }}</td>
                <td>
                    <a href="/admin/faq/edit/{{ $f->id_faq }}" data-bs-toggle="modal"
                        data-bs-target="#editFAQ{{ $f->id_faq }}" class="btn btn-outline-success btn-sm">Edit</a>
                    <a href="/admin/faq/hapus/{{ $f->id_faq }}"
                        onclick="return confirm('Apakah Anda Yakin Menghapus Data?');"
                        class="btn btn-outline-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- Modal -->
<div class="modal fade" id="tambahFAQ" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">TAMBAH FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/admin/faq/simpan')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="subject" name="subject"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <textarea class="form-control" id="jawaban" name="jawaban"></textarea>
                    </div>
                    @foreach ($operator as $op)
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id_operator" name="id_operator" value={{ $op->id
                        }}>
                    </div>
                    @endforeach
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Pilih Status</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
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

@foreach ($faq as $f)
<div class="modal fade" id="editFAQ{{ $f->id_faq }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">EDIT FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('admin/faq/edit/', )}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="subject" name="subject" value={{ old('subject',
                            $f->subject ) }}>{{ $f->subject }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <textarea class="form-control" id="jawaban" name="jawaban" value={{ old('subject',
                            $f->jawaban) }}>{{ $f->jawaban }}</textarea>
                    </div>
                    @foreach ($operator as $op)
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id_operator" name="id_operator" value={{ $op->id
                        }}>
                    </div>
                    @endforeach
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option value={{ old('subject',$f->status) }}>{{ $f->status }}</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
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
</div>
@endsection