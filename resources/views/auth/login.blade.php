<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>SiBakul Jogja | Teras Malioboro</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{!! asset('images/SiBakul.png') !!}" />

    <!-- <link rel="stylesheet" href="{!! asset('css/signin.css') !!}"> -->
</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="header">
                <div class="header-body text-center">
                    <img src="{!! asset('images/Logo SiBakul.png') !!}" alt="logo-teras" width="250">
                    <img src="{!! asset('images/tulisan tm.png') !!}" alt="logo-teras" width="300">
                </div>
            </div>
            <div class="card border-success mb-3 mt-5">
                <h5 class="card-title mt-3 text-success text-center">Please Login</h5>
                <main class="form-signin">
                    <form action="/auth/login" method="POST">
                        @csrf
                        <div class="card-body">
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="form-input mb-3">
                                <input type="number" name="name" class="form-control" id="name"
                                    placeholder="No KTP atau NIK" autofocus required>
                            </div>
                            <div class="form-input mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="No Kios" required>
                            </div>
                            <button class="w-100 btn btn-success" type="submit">Login</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
