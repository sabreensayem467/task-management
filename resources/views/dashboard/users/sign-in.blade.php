@extends('dashboard.layout')
@section('title','login account')
@section('content')
    
        <h5>Sign In</h5>  
    </div> 


    <div class="app-content style-3 pb-32 signIn-area">
        <div class="tf-container">
            <form class="mt-24" method="post" action="{{route('login')}}">
                @csrf
                <p class="body-6 text-black-5">Give creadential to sign in your account</p>
                <fieldset class="input-icon mt-20">
                    <span class="icon icon-mail"></span>
                    <input type="text" placeholder="Type your email" class="form-control" name="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                </fieldset>
                <fieldset class="mt-16 input-icon">
                    <div class="box-view-hide">
                        <span class="icon icon-lock"></span>
                        <input type="password" placeholder="Type your password" class="form-control password-field" name="password" required=""  @error('password') is-invalid @enderror name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <div class="show-pass">
                            <span class="icon-pass icon-view"></span>
                            <span class="icon-pass icon-hide"></span>
                        </div>
                    </div>
                </fieldset>
                <div class="mt-16 d-flex justify-content-end">
                    <a href="{{route('forgot-pass')}}" class="h8 text-primary fw-5">Forgot Password?</a>
                </div>
                <button class="mt-48 tf-btn primary">Sign In</button>
            </form>
            <div class="auth-line body-6">or continue with</div>
            <div class="d-flex gap-16 justify-content-center">
                <a href="index.html" class="btn-social-icon">
                    <img class="img-icon" src="images/logo/fb.png" alt="img">
                </a>
                <a href="index.html" class="btn-social-icon">
                    <img class="img-icon" src="images/logo/google.png" alt="img">
                </a>
                <a href="index.html" class="btn-social-icon">
                    <img class="img-icon" src="images/logo/apple.png" alt="img">
                </a>
            </div>
            
            <p class="mt-70 text-center body-2 fw-5 text-black-5">Don’t have account?<a href="{{route('signup')}}" class="text-primary fw-7 body-2">sign Up</a></p>
        </div>
    </div>
      @endsection      