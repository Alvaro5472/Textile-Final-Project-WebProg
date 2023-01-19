<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/form.css">
    <title>Textile</title>
</head>
<body>
    <img class="bg-image" style="height: 115%;"  src="{{asset('Images/BackgroundRegis.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-3 fw-semibold">Register</h5>
                        <form method="POST" action="/SignUp">
                        @csrf
                            <div class="form-floating mb-3">
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingUsername"placeholder="Username">
                                <label for="floatingUsername" style="color:gray;">Username</label>
                                @error('name')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput" style="color:gray;">Email</label>
                                @error('email')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword" style="color:gray;">Password</label>
                                @error('password')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" id="floatingPhone" placeholder="08123456789">
                                <label for="floatingPhone" style="color:gray;">Phone Number</label>
                                @error('phone')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="address" type="text" class="form-control @error('address') is-invalid @enderror" id="floatingAddress" placeholder="StreetExample">
                                <label for="floatingAddress" style="color:gray;">Address</label>
                                @error('address')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="Card_Number" type="text" class="form-control @error('Card_Number') is-invalid @enderror" id="floatingNumber" placeholder="16digits">
                                <label for="floatingNumber" style="color:gray;">Debit Card Number</label>
                                @error('Card_Number')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-button text-uppercase fw-bold" style="background-color: #D7E436; cursor:pointer;" type="submit">Register</button>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <p>Already have an account? <a href="/SignIn" class="redirect">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
