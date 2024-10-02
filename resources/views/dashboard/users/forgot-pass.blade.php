@extends('dashboard.layout')
@section('title','reset password')
@section('content')

        <h5>Reset Password</h5>  
    </div> 


    <div class="app-content style-3">
        <div class="tf-container">
            <p class="mt-24 body-6 text-black-5">Enter your email, we will send a verification code to email</p>
            <ul class="mt-28">
                <li><a href="{{route('forgot-pass-mail')}}" class="box-choose-type-pass act-suggest">
                    <div class="box-icon w-36">
                        <i class="icon icon-mail"></i>
                    </div>
                    <div class="content">
                        <div class="body-4 text-black-2">Email</div>
                        <p class="text-caption-2 text-black-5">**************@gmail.com</p>
                    </div>
                </a></li>
                <li class="mt-16"><a href="{{route('forgot-pass-phone')}}" class="box-choose-type-pass act-suggest">
                    <div class="box-icon w-36">
                        <i class="icon icon-phone"></i>
                    </div>
                    <div class="content">
                        <div class="body-4 text-black-2">Phone Number</div>
                        <p class="text-caption-2 text-black-5">**** **** **** 0120</p>
                    </div>
                </a></li>
            </ul>
           
        </div>
    </div>


   @endsection