<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SiBakul Jogja | Teras Malioboro</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('images/SiBakul.png') !!}" />

    <!-- <link rel="stylesheet" href="{!! asset('css/signin.css') !!}"> -->
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-3">

            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
            </div>
            @endif

            @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginErrors') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lable="Close"></button>
            </div>
            @endif

            <main class="form-signin pt-4">
                <div class="header">
                    <div class="header-body text-center">
                        <img src="{!! asset('images/Logo SiBakul.png') !!}" alt="logo-teras" width="250">
                        <img src="{!! asset('images/tulisan tm.png') !!}" alt="logo-teras" width="300">
                    </div>
                </div>
                <form action="{{ url('auth/login') }}" method="POST">
                    @csrf
                    <div class="card border-success mb-3 mt-5">
                        <div class="card-body">
                            <h5 class="card-title mb-3 text-success text-center">Please Login</h5>
                            <div class="form-input mb-3">
                                <input type="number" name="nik" class="form-control" id="nik" placeholder="No KTP atau NIK" required>
                            </div>
                            <div class="form-input mb-3">
                                <input type="password" name="lokasi_no_kios_id" class="form-control" id="lokasi_no_kios_id" placeholder="No Kios" required>
                            </div>

                            <button class="w-100 btn btn-success" type="submit" href="/pedagang">Login</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>