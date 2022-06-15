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
<form method="POST" action="{{ url('profil/'.$model->id) }}">
<input type="hidden" name="_method" value="PATCH">
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>
Nama : <input type="text" name="nama">
<br>

<button type="submit">SIMPAN</button>

</form>

</body>
</html>

@endsection