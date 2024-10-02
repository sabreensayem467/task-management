@extends('dashboard.layout')
@section('title','light gallery')
@section('content')

        <h4>Light Gallery</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Light Gallery 3 column</h4>    
                </div>
                <div class="card-body mt-20">
                    <div class="grid-3 gap-10" id="lightgallery3">
                       
                        <a class="lightgallery-box" href="images/store/store4.png">
                            <img src="images/store/store4.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store5.png">
                            <img src="images/store/store5.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store6.png">
                            <img src="images/store/store6.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store7.png">
                            <img src="images/store/store7.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store8.png">
                            <img src="images/store/store8.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store9.png">
                            <img src="images/store/store9.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store10.png">
                            <img src="images/store/store10.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store11.png">
                            <img src="images/store/store11.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store12.png">
                            <img src="images/store/store12.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Light Gallery 2 column</h4>    
                </div>
                <div class="card-body mt-20">
                    <div class="grid-2 gap-10" id="lightgallery2">
                      
                        <a class="lightgallery-box" href="images/store/store12.png">
                            <img src="images/store/store12.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store13.png">
                            <img src="images/store/store13.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store14.png">
                            <img src="images/store/store14.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store15.png">
                            <img src="images/store/store15.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store16.png">
                            <img src="images/store/store16.png" alt="image">
                        </a>
                        <a class="lightgallery-box" href="images/store/store17.png">
                            <img src="images/store/store17.png" alt="image">
                        </a>
                      
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>
    
    
    


    <script type="text/javascript" src="{{asset('js/lightgallery.umd.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lg-thumbnail.umd.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/lg-zoom.umd.js')}}"></script>
   
@endsection
    
    
