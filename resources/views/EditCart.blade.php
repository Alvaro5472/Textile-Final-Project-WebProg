@extends('template')

@section('contents')

<div class="container bcontent d-flex justify-content-center pt-5">
    <div class="card p-5 " style="width: 55rem;">
        <div class="d-flex justify-content-between no-gutters w-100">
            <div class="col-sm-4 card shadow-sm p-3 bg-white rounded" style="height: 300px; width: 300px;">
                <img src="{{asset('storage/'. $products->image_url)}}" width="100%", height="100%" alt="default">
            </div>
            <br><br>
            <div class="col-sm-7 card shadow-sm">
                <div class="card-body">
                    <h1 class="card-title fs-1"><b>{{$products->name}}</b></h1>
                    <h2 class="card-text">Rp. {{$products->price}}</h2>
                    <hr class="p-2">
                    <h3 class="card-text">Product Detail</h3>
                    <h3 class="card-text">{{$products->description}}</h3>

                    <div style="width: 100%; padding: 5px; border: 5px; background-color: gray">

                    </div>
                    <br>

                    <form action="/updatecart/{{$products->id}}" method="POST">
                        @csrf
                        <label for="quantity" class="fs-3">Quantity :</label>

                        <Div class="d-flex justify-content-between">
                            <div>
                                <input type="text" class="form-control @error('quantity') is-invalid @enderror"  id="quantity" name="quantity">
                                @error('quantity')
                                <div class="invalid-feedback fs-6">
                                    {{$message}}
                                </div>
                                @enderror
                                @if(session()->has('message'))
                                    <div class="text-green-600 text-success m-2 fs-5">{{session()->get('message')}}</div>
                                @endif
                            </div>

                            <div>
                                <button class= "btn btn-primary" style="width: 185px" type = "submit" value= "Update Cart">Update Cart</button>
                            </div>

                        </Div>

                    </form>

                    <br>

                    <div class="d-flex justify-content-center">

                        <a href="Home" class="btn btn-danger fs-5 " style="width: 100%">Back</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection
