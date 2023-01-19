<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Textile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/form.css">
</head>
<body>
    <img class="bg-image" style="height: 104%;" src="{{asset('Images/BackgroundRegis.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5" style="padding-bottom: 100px;">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-3 fw-semibold">Change Password</h5>
                        <form method="POST" action="/updatepassword/{{Auth::user()->id}}">
                        @method('put')
                        @csrf
                            <div class="form-floating mb-3">
                                <input name="old_password" type="password" class="form-control" id="floatingInput" placeholder="(5-20 letters)">
                                <label for="floatingInput" style="color:gray;">Old Password</label>
                                @error('old_password')
                                    <div class="invalid-feedback fs-5">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="new_password" type="password" class="form-control" id="floatingPassword" placeholder="(5-20 letters)">
                                <label for="floatingPassword" style="color:gray;">New Password</label>
                                @error('password')
                                    <div class="invalid-feedback fs-5">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
