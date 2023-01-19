@extends('template')

@section('contents')
<div style="padding-top: 150px;">
    <div class="p-10">
        <h1 class="text-center mb-5"> Find your best clothes here! </h1>
    </div>
    <div class="container-sm d-flex flex-column flex-wrap gap-4 justify-content-center align-items-center">
        <div class="row gap-4 ms-4">
            @foreach ($Data as $d)
                <div class="card shadow-sm p-3 mb-3 bg-white rounded" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{asset('storage/'.$d->image_url)}}" class="" id="img" width="100%", height="200px" alt="default">
                        <h5 class="card-title mt-2"><b>{{$d->name}}</b></h5>
                        <p class="card-text"></p>Rp {{$english_format_number = number_format($d->price)}}</p>
                        <a href="{{url('Home/'.$d->name)}}" class="btn btn-primary">More Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{$Data->links() }}
    </div>
    @include('footerHome')
    @endsection

</div>
