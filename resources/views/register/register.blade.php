<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAMODZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/logreg.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <h1 class="navbar-brand"><b>TRAMODZ</b></h1>
        </div>
    </nav>

    <div class="container mt-1">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="img/wlct01.png" class="rounded" alt="..." height="700" style="opacity: 0.5; margin-top: -1cm;">
                </div>
            </div>
            <div class="col-md-6 px-5">
                <div class="row px-5 py-5 my-5">
                    <div class="card register-card-bg">
                        <div class="card-body align-items-center">
                            <div class="py-3">
                                <h1 class="text-uppercase fw-bold fs-1 text-center text-pink">SIGN UP</h1>
                            </div>

                            <div class="py-2">
                                <form action="/register" method="POST">
                                    @csrf
                                    <div class="mb-2 py-1">
                                        <div class="px-3">
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-2 py-1">
                                        <div class="px-3">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-2 py-1">
                                        <div class="px-3">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-2 py-1">
                                        <div class="px-3">
                                            <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required placeholder="Confirm Password">

                                            @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-2 py-1">
                                        <div class="px-3">
                                            <button type="submit" class="btn btn-primary d-block w-100">
                                                {{ __('Sign Up') }}
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mb-2 py-1">
                                        <div class="px-3">
                                            <p class="text-center">Already have an account?<a href="/login" style="text-decoration:none"> Login</a></p>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>