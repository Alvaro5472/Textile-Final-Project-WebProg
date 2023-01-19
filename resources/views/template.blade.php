<?php
    use App\Models\Category;
    $category = Category::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style/Header.css') }}" rel="stylesheet">
    <title>Textile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class ="navbar shadow fixed-top">
        <div class = "title" style="color: #D7E436">
            <h4 class="fst-italic fw-bold">Textile</h4>
        </div>
        <div class = "left">
            <div class="option">
                <div class="home">
                    <a href = "/Home" >Home</a>
                </div>
                <div class="search">
                    <a href = "/Search" >Search</a>
                </div>
                <div class=" category nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px">
                    Category
                </a>
                <ul class="dropdown-menu">
                    @foreach ($category as $c)
                    <li><a class="dropdown-item" href="/Category/{{$c->category_name}}">{{$c->category_name}}</a></li>
                    @endforeach
                </ul>
                </div>
                @can('member')
                <div class="cart">
                    <a href = "/Cart" >Cart</a>
                </div>
                <div class="history">
                    <a href = "/History" >History</a>
                </div>
                @endcan
                <div class="profile">
                    <a href = "/Profile" >Profile</a>
                </div>
            </div>
        </div>

        <div class = "right">
            @can('admin')
                <div class="buttonAdd me-3">
                    <a href="/AddItem" class="btn btn-lg fw-bold">Add Item </a>
                </div>
            @endcan

            <form action="/SignOut" method = "POST">
            @csrf
                <div class="btn-logout">
                    <button class="btn btn-lg fw-bold" style="background-color: #D7E436 !important; cursor:pointer;" type="submit">Log out</button>
                </div>
            </form>
        </div>
    </div>
    @yield('contents')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
