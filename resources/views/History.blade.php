@extends('template')

@section('contents')
<div style="margin-top: 150px;">
    <div class="text-center text-dark p-4 fs-1">
        <h1>Check What You've Bought!</h1>
    </div>
    @if(count($transaction))
    @foreach ($transaction as $t)
        <div class="m-3 bg-light text-dark t fs-3 ps-4 border border-dark rounded border border-2 container mx-auto">
        <b>Order Date: {{$t->transaction_date}}</b>
            @foreach ($t->details as $r)
                <div class="text">
                    @php $total += $r->quantity * $r->products->price @endphp
                    <div class="d-flex">
                        <div class = "image">
                            <img src="{{asset('storage/'.$r->products->image_url)}}" class="" id="img" width="100%", height="200px" alt="default">
                        </div>
                        <div class="me-5 ps-4">
                            <p>Name : {{$r->products->name}}</p>
                            <p>Quantity : {{$r->quantity}} pc(s)</p>
                            <p>Price :  Rp {{$english_format_number = number_format($r->products->price)}} </p>
                        </div>
                    </div>
                </div>
                <div class="border-top my-3"></div>
            @endforeach
            <div class="total" style="margin-left: 70%;">
                <b><p> Total Price: Rp {{$english_format_number = number_format($total)}}
                    @php $total = 0 @endphp
                <p></b>
            </div>
        </div>
    @endforeach
    @else
    <h3 class="text-center" style="margin-bottom: 150px; margin-top: 50px;">No Transactions Have Been Made </h3>
    @endif
    @include('footerHome')
</div>

@endsection
