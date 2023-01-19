@extends('template')

@section('contents')
<link rel="stylesheet" href="style/productDetail.css">
    <div class="container bcontent d-flex justify-content-center pt-5" style="margin-top: 150px;">
        <div class="card p-4 " style="width: 55rem; background-color: #F7F7F7">
            <div class="d-flex justify-content-between no-gutters w-100">
                <div class="col-sm-4 card shadow-sm p-2 bg-white rounded" style="height: 300px; width: 300px;">
                    <img src="{{asset('storage/'. $products->image_url)}}" width="100%", height="100%" alt="default">
                </div>
                <br><br>
                <div class="col-sm-7 card shadow-sm">
                    <div class="card-body">
                        <h1 class="card-title fs-1"><b>{{$products->name}}</b></h1>
                        <h2 class="card-text"></p>Rp {{$english_format_number = number_format($products->price)}}</h2>
                        <hr>
                        <h3 class="card-text"><b>Product Detail</b></h3>
                        <h5 class="card-text">{{$products->description}}</h5>

                        <div style="width: 100%; padding: 5px; border: 5px; background-color: gray">

                        </div>
                        <br>

                        @can('member')
                            <form action="/AddCart/{{$products->id}}" method="POST">
                                @csrf
                                <label for="quantity" class="fs-3">QUANTITY :</label>
                                <div class="d-flex justify-content-between">
                                <div>
                                    <input type="text" class="form-control @error('quantity') is-invalid @enderror"  id="quantity" name="quantity">
                                    @error('quantity')
                                        <div class="invalid-feedback fs-5">
                                            {{$message}}
                                        </div>
                                    @enderror
                                    @if(session()->has('message'))
                                        <div class="text-green-600 m-2 fs-5 text-success">{{session()->get('message')}}</div>
                                    @endif
                                </div>

                                <div>
                                    <input class= "btn btn-success" style="width: 195px; color: white" type = "submit" value= "ADD TO CART">
                                </div>
                            </div>
                            </form>
                            <br>
                        @endcan

                        <div class="d-flex">
                            <a href="Home" class="btn btn-danger mr-3" style="width: 200px; color: white; font-size: 20px">BACK</a>

                            @can('admin')
                            <form action="/Products/{{$products->id}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class = "btn btn-danger" style="width:200px; color: white; font-size: 20px; margin-left:30px" type="submit">DELETE</button>
                            </form>
                            @endcan

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
