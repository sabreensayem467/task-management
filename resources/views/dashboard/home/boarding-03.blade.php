@extends('dashboard.master')
@section('title','on boarding')
@section('content')


 
    <div class="boarding-section">
        
        <div class="banner-boarding-style-3">
            <img class="logo" src="images/logo/logo-1.png" alt="logo">
            <div class="title">Taskose</div>
            <p class="mt-12">Task Management App</p>
        </div>
        <div class="box-boarding-fixed">
            <div class="swiper tf-swiper-2" data-space-between="24" data-preview="1" data-tablet="1" data-desktop="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="content-boarding-sw">
                            <h1>Everything You Can Do in this App</h1>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat  est sit aliqua dolor do amet.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-boarding-sw">
                            <h1>Project Planning App for Everyone</h1>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat  est sit aliqua dolor do amet.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="content-boarding-sw">
                            <h1>Organize Your Task & Projects Easily</h1>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat  est sit aliqua dolor do amet.</p>
                        </div>
                    </div>
                    
                </div>
                <div class="swiper-pagination line-tes"></div>
    
    
            </div>

            <div class="mt-30 text-center">
                <a href="sign-up.html" class="tf-btn white">Sign Up</a>
                <a href="sign-in.html" class="tf-btn surface mt-20">Log In</a>

            </div>  
        </div>
    </div>
    

   @endsection