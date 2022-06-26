@include('pedagang.partials.navbar')
@section('content')
@extends('pedagang.layouts.footer')
<div class="container mt-5 mb-3">
    <!-- Button trigger modal -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
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
                    <span class="badge text-bg-success">Edit</span>
                    <span class="badge text-bg-danger">Hapus</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">TAMBAH FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/admin/faq')}}" method="POST">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="mb-3">
                        <label for="jawaban" class="form-label">Jawaban</label>
                        <input type="text" class="form-control" id="jawaban" name="jawaban">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Pilih Status</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
                    </div>
                    @foreach ($operator as $op)
                    <div class="mb-3">
                        <label for="operator" class="form-label">Dibuat Oleh</label>
                        <input type="text" class="form-control" id="id_operator" name="id_operator" value={{ $op->id }}
                        disabled>
                    </div>
                    @endforeach
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection