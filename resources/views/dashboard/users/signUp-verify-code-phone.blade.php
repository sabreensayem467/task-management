@extends('dashboard.layout')
@section('title','verify')
@section('content')

        <h5>Verify Code</h5>  
    </div>
    <div class="app-content style-3">
        <div class="tf-container">
                <p class="mt-24 body-6 text-black-5">Please enter the code we just sent to email</p>
                <p class="body-6 fw-5">(+1) 234 567 XXX</p>

                <div class="digit-group mt-35">
                    <input class="form-control" required type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" value="7">
                    <input class="form-control" required type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2">
                    <input class="form-control" required type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3">
                    <input class="form-control" required type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4">
                </div>
                <p class="d-flex justify-content-center mt-32 text-center text-black-5 body-6">Resend code in&nbsp;<span class="fw-7 text-primary js-countdown" data-timer="60" data-labels=" :  ,  : , : , "></span></p>
                <a href="{{route('verify')}}" class="mt-60 tf-btn primary">Continue</a>
        </div>
    </div>


   @endsection>
   