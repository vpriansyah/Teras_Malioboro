@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    <div class="card-body p-0">
        <div class="container">
            <form action="{{ route('profil.update', $data_pkl->id) }}" method="POST" > 
                
                @csrf
                @method('PUT')
                <br>
                <input type="text" class="form-control @error('id') is-invalid @enderror"
                                        id="id" aria-describedby="id" name="id"
                                        value="{{ $data_pkl->id }}" required hidden>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="{{ $data_pkl->nama_lengkap }}" required >
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nomor HP</label>
                    <input type="number" class="form-control" id="no_hp" name="no_hp" value="{{ $data_pkl->no_hp }}" required>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat_ktp" name="alamat_ktp" value="{{ $data_pkl->alamat_ktp }}" required>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Paguyuban</label>
                    <input type="text" class="form-control" id="paguyuban_id" name="paguyuban_id" value="{{ $data_pkl->paguyuban_id }}" required>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" value="{{ $data_pkl->nik }}" required>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No KK</label>
                    <input type="number" class="form-control" id="no_kk" name="no_kk" value="{{ $data_pkl->no_kk }}" required>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nomor NIB</label>
                    <input type="number" class="form-control" id="nomor_nib" name="nomor_nib" value="{{ $data_pkl->nomor_nib }}">
                  </div>
         
            <button class="btn btn-success" type="submit">Submit</button>
            <br>
            <br>
            </form>
    
        </div>
    </div>
    
</body>
</html>

@endsection