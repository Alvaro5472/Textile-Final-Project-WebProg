@extends('template')

@section('contents')
{{-- <link rel="stylesheet" href="style/background.css"> --}}
<div style="padding-top: 150px;">
    <h1 class="text-center p-4">My Cart</h1>
</div>

@if(count($cartitems))
<div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center">
    <div class="row row-cols-3 gap-5">
        @foreach ($cartitems as $d)
            <div class="card shadow-sm p-3 mb-5 bg-whitesmoke rounded" style="width: 20rem;">
                <div class="card-body">
                    <img src="{{asset('storage/'. $d->products->image_url)}}" class="" id="img" width="100%", height="200px" alt="default">
                    <h5 class="card-title mt-2"><b>{{$d->products->name}}</b></h5>
                    <p class="card-text"></p>Rp {{$english_format_number = number_format($d->products->price)}}</p>
                    <p class="date">Qty: {{$d->quantity}}</p>
                    @php $total += $d->quantity * $d->products->price @endphp
                    @php $qty += $d->quantity @endphp
                    <form action="/CartDelete/{{$d->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class = "btn btn-primary" type="button" onclick="window.location.href='/EditCart/{{$d->products->id}}'" >Edit Cart</button>
                        <button class = "btn btn-danger" type="submit">Remove from Cart</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="d-flex justify-content-end m-5">
    <div class="d-flex justify-content-end fs-4 me-5">
            Total Price: {{$english_format_number = number_format($total)}}
            <button class= "btn btn-primary ms-5" onclick="window.location.href='/Checkout'">Check Out({{$qty}})</button>
    </div>
</div>
@else
    <div>
        <h2 class="text-center" style="padding-top: 125px; padding-bottom: 127.5px;">No items added to the cart</h2>
    </div>
@endif
@include('footerHome')

@endsection
