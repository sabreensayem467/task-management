@extends('dashboard.master')
@section('title','on boarding')
@section('content')

 
    <div class="boarding-section">
        <div class="banner-boarding-section mt-16">
            <img src="images/background/boarding1.png" alt="boarding">
        </div>
        <div class="box-boarding-fixed">
            <div class="swiper tf-swiper-2" data-space-between="24" data-preview="1" data-tablet="1" data-desktop="1">
                <div class="swiper-wrapper">
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
                    <div class="swiper-slide">
                        <div class="content-boarding-sw">
                            <h1>Everything You Can Do in this App</h1>
                            <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat  est sit aliqua dolor do amet.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination line-tes"></div>
    
    
            </div>

            <div class="mt-30 text-center">
                <a href="boarding-03.html" class="tf-btn white inline">Get Started</a>
            </div>  
        </div>   
    </div>
    



    
    @endsection