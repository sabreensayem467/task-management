@extends('dashboard.layout')
@section('title','verify')
@section('content')


        <h5>Verification</h5>  
    </div>
    <div class="app-content style-3 verify-area pb-32">
        <div class="tf-container">
                <p class="mt-24 body-6 text-black-5">Enter your phone number, we will send a authentication code</p>

                <fieldset class="mt-20 input-icon drop-select dropdown">
                    <div class="inner-group-ip">
                        <select class="image-select">
                            <option data-thumbnail="{{asset('images/flags/eng.png')}}"></option>
                            <option data-thumbnail="{{asset('images/flags/germany2.png')}}"></option>
                            <option data-thumbnail="{{asset('images/flags/swedish.png')}}"></option>
                        </select>
                    </div>
                    <input type="number" placeholder="Enter your phone number" class="form-control">
                </fieldset>
                <a href="otp-code.html" class="tf-btn primary">Continue</a>
        </div>
    </div>

   @endsection