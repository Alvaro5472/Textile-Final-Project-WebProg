<?php
    use App\Models\Category;
    $category = Category::all();
?>
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
<img class="bg-image" style="height: 105%;" src="{{asset('Images/BackgroundAdd.jpg')}}">
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-3 fw-semibold">Add Clothes</h5>
                    <form method="POST" action="/AddItem" enctype="multipart/form-data">
                    @csrf
                        <div class="input-group mb-3">
                            <input type="file" class="form-control @error('image_url') is-invalid @enderror"  id="image_url" name="image_url">
                            <label class="input-group-text" for="inputGroupFile02">Upload Image</label>
                            @error('image_url')
                                <div class="invalid-feedback fs-6">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="(5-20 letters)">
                            <label for="floatingInput" style="color:gray;">Name</label>
                            @error('name')
                                <div class="invalid-feedback fs-6">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                            <div class="input-group mb-3">
                                <select class="form-select" id="inputGroupSelect02" name="categoryID">
                                <option selected>Choose...</option>
                                    @foreach ($category as $c)
                                    <option value={{$c->id}}>{{$c->category_name}}</option>
                                    @endforeach
                                </select>
                                <label class="input-group-text" for="inputGroupSelect02">Choose Category</label>
                            </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="(min 5 letters)">
                            <label for="floatingInput" style="color:gray;">Price</label>
                                @error('price')
                                <div class="invalid-feedback fs-6">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control @error('description') is-invalid @enderror"  id="description" name="description" placeholder="(min 5 letters)">
                            <label for="floatingInput" style="color:gray;">Description</label>
                                @error('description')
                                    <div class="invalid-feedback fs-6">
                                        {{$message}}
                                    </div>
                                @enderror
                        </div>
                        <div class="d-grid mb-3">
                            <button class="btn btn-button text-uppercase fw-bold" style="background-color: #D7E436 !important; cursor:pointer;" type="submit">Confirm</button>
                        </div>
                        <div class="d-grid mb-3">
                            <a href="/Home" class="btn btn-button btn-outline-dark text-uppercase fw-bold" style="cursor:pointer;">Back</a>
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
