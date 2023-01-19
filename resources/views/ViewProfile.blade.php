@extends('template')
@section('contents')
<link rel="stylesheet" href="style/viewProfile.css">
<div class="container" style="padding-top: 150px;">
    <div class="row d-flex justify-content-center">
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center">
                    <img src="{{asset('Images/ProfilePicture.png')}}" width="100" class="rounded-circle">
                </div>
                <div class="text-center mt-3">
                    <span class="bg-secondary p-1 px-4 rounded text-white">
                        @if(!$profile->isAdmin)
                            Member
                        @else
                            Admin
                        @endif
                    </span>
                    <h5 class="mt-2 mb-0">{{$profile->name}}</h5>
                    <div class="px-4 mt-1">
                        <p>Here are your profile data</p>
                        <p>Email: {{$profile->email}}</p>
                        <p>Address: {{$profile->address}}</p>
                        <p>Phone: {{$profile->phone}}</p>
                        @if(!$profile->isAdmin)
                            <p>Card Number: {{$profile->Card_Number}}</p>
                        @endif
                    </div>
                    <div class="buttons">
                        @can('member')
                        <a class="px-4 btn" href="/updateprofile">Edit Profile</a>
                        @endcan
                        <a class="btn px-4 ms-3" href="/updatepassword">Edit Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mb-4"></div>
@include('footerHome')
@endsection
