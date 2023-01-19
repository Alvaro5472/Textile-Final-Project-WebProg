<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style/form.css">
    <title>Textile</title>
</head>
<body>
    <img class="bg-image" style="height: 107%;"  src="{{asset('Images/BackgroundRegis.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-3 fw-semibold">Update Profile</h5>
                        <form method="POST" action="/updateprofile">
                            @method('put')
                            @csrf
                            <div class="form-floating mb-3">
                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingUsername"placeholder="Username">
                                <label for="floatingUsername" style="color:gray;">Name</label>
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
                            <div class="d-grid mb-3">
                                <button class="btn btn-button text-uppercase fw-bold" style="background-color: #D7E436; cursor:pointer;" type="submit">Confirm</button>
                            </div>
                            <div class="d-grid mb-3">
                                <a href="/Profile" class="btn btn-button btn-outline-dark text-uppercase fw-bold" style="cursor:pointer;">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
