@extends('dashboard.layout')
@section('title','reset password')
@section('content')



        <h5>Reset Password</h5>  
    </div> 


    <div class="app-content style-3 pb-32 signUp-area">
        <div class="tf-container">
            <form class="mt-24" action="https://themesflat.co/html/taskose/taskose/otp-code.html">
                <p class="body-6 text-black-5">Enter your email, we will send a verification code to email</p>
                <fieldset class="input-icon mt-28">
                    <span class="icon icon-mail"></span>
                    <input type="text" placeholder="Enter your email" class="form-control" value="jonathansmith@gmail.com">
                </fieldset>
                
                <div class="footer-fixed button">
                    <button class="mt-24 tf-btn primary">Send Link</button>
                </div>
            </form>
            
            
        </div>
    </div>


  @endsection