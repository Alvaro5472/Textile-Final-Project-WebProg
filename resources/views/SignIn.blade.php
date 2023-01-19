<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/form.css">
    <title>Textile</title>
</head>
<body>
@if(session()->has('success')){
    <div class="notif">
        {{session('success')}}
    </div>
}
@endif
@if(session()->has('loginError')){
    <div class="notif">
        {{session('loginError')}}
    </div>
}
@endif

<img class="bg-image" style="height: 104%;" src="{{asset('Images/BackgroundRegis.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5" style="padding-bottom: 175px;">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-3 fw-semibold">Login</h5>
                        <form method="POST" action="/SignIn">
                        @csrf
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" style="color:gray;">Email</label>
                                @error('email')
                                    <div class="invalid-feedback fs-5">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword" style="color:gray;">Password</label>
                                @error('password')
                                    <div class="invalid-feedback fs-5">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        <div class="form-check mb-3">
                            <input name="check" class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                            <label class="form-check-label" for="rememberPasswordCheck">Remember me</label>
                        </div>
                            <div class="d-grid">
                                <button class="btn btn-button text-uppercase fw-bold" style="background-color: #D7E436; cursor:pointer;" type="submit">Login</button>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <p>Don't have an account? <a href="/SignUp" class="redirect">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- <div style="background-color: lightgray; height: 60rem;">

    <div class="d-flex justify-content-center pt-5">
        <div class="border border-dark rounded" style="background-color: pink; width: 33rem; height: 50rem; ">
            <div class="pt-5">
                <h1 class="d-flex justify-content-center">Sign In</h1>
            </div>

            <form method="POST" action="/SignIn">
                @csrf

                <div class="me-5 ms-5 pt-4">

                    <div class="form-group">
                        <label for="email" class="fs-4 mb-3">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid
                        @enderror" id="email" name="email" autofocus required>
                        @error('email')
                            <div class="invalid-feedback fs-5">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                    </div>

                    <div class="form-group">
                        <label for="password" class="fs-4 mb-3">Password</label>
                        <input type="password" class="form-control @error('email') is-invalid @enderror" placeholder="5-20 characters" id="password" name="password" required >
                        @error('password')
                            <div class="invalid-feedback fs-5">
                                {{$message}}
                            </div>
                        @enderror
                        <br>
                    </div>

                    <div class="ps-4">
                        <input type="checkbox" style="scale: 1.8; padding: 50px" id="check" name="check" value="check">
                        <label for="checkbox" class="fs-4 mb-3 ms-3" >Remember me</label>
                    </div>

                    <div class="mt-2">
                        <button style="cursor:pointer" type="submit" class="bg-danger form-control p-2 text-white">Sign In</button>
                    </div>

                    <div class="d-flex justify-content-center mt-5">
                        <br>
                        <h5>Not Registered yet? <a href="/SignUp" class = "redirect">Register Here</a></h5>
                    </div>

                </div>

            </form>

        </div>
    </div>
</div> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
