<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('style/welcome.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Textile</title>

    </head>
    <body style="background-image: url({{asset('Images/BackgroundStore.jpg')}}); background-size:cover;" >
        <div class = "navbar">
            <div class = "Title">
                <h1> Textile </h1>
            </div>
            <div class = "Authentication ">
                <div class = "SignIn">
                <a class="text-decoration-none fst-italic" href="/SignIn"><b>Login</b> </a>
                </div>
                <div class = "SignUp">
                <a class="text-decoration-none fst-italic" href="/SignUp"><b>Register</b> </a>
                </div>
            </div>
        </div>
        <div class = "main">
            <div class = "welcome">
                <h3 class="fw-semibold fst-italic">Online Clothes Store That Provides You with Various Clothes to Suit Your Various Activities</h3>
            </div>
        </div>

    </body>
    @include('footer')
</html>
