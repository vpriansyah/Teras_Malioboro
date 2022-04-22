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

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{!! asset('css/signin.css') !!}" rel="stylesheet">
</head>

<body>
    <main class="form-signin">
        <form>
            <div class="header">
                <div class="header-body text-center mb-5">
                    <img src="{!! asset('images/LOGO_TERAS_HITAM.png') !!}" alt="logo-teras" width="150" height="100">
                </div>
            </div>
            <div class="card border-success mb-3 text-center" style="max-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title mb-3 text-success">Please sign in</h5>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>

                    <div class="d-grid gap-2">
                        <a class="btn btn-lg btn-success" type="submit" href="/pedagang">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>