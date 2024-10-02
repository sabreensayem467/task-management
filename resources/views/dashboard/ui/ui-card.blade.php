@extends('dashboard.layout')
@section('title','card')
@section('content')
        <h4>Card</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h5 class="fw-7 card-title">Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-8 btn-showmore">Show more 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                            <path d="M10.625 12.5L13.125 10M13.125 10L10.625 7.5M13.125 10H6.875M17.5 10C17.5 10.9849 17.306 11.9602 16.9291 12.8701C16.5522 13.7801 15.9997 14.6069 15.3033 15.3033C14.6069 15.9997 13.7801 16.5522 12.8701 16.9291C11.9602 17.306 10.9849 17.5 10 17.5C9.01509 17.5 8.03982 17.306 7.12987 16.9291C6.21993 16.5522 5.39314 15.9997 4.6967 15.3033C4.00026 14.6069 3.44781 13.7801 3.0709 12.8701C2.69399 11.9602 2.5 10.9849 2.5 10C2.5 8.01088 3.29018 6.10322 4.6967 4.6967C6.10322 3.29018 8.01088 2.5 10 2.5C11.9891 2.5 13.8968 3.29018 15.3033 4.6967C16.7098 6.10322 17.5 8.01088 17.5 10Z" stroke="#C96A28" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-12 line-bt"> 
                    <h5 class="fw-7 card-title">Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md primary">Button</a>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-12 line-bt text-center"> 
                    <h5 class="fw-7 card-title">Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md primary">Button</a>
                </div>
            </div>  
            <div class="card mt-20">
                <div class="card-header pb-12 text-center"> 
                    <h5 class="fw-7 card-title">Special title treatment</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs custom-tab line-bt">
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link active">Active</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link">Link</a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link disabled">Disable</a></li>
                    </ul>
                    <p class="fw-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md primary">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-primary">
                <div class="card-header pb-12 line-bt2"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-primary">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-success">
                <div class="card-header pb-12 line-bt2"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-success">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-danger">
                <div class="card-header pb-12 line-bt3"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-danger">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-warning">
                <div class="card-header pb-12 line-bt2"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-warning">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-info">
                <div class="card-header pb-12 line-bt2"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-info">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-light">
                <div class="card-header pb-12 line-bt4"> 
                    <h5 class="fw-7 card-title">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-dark">
                <div class="card-header pb-12 line-bt2"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-dark">Button</a>
                </div>
            </div>
            <div class="card mt-20 bg-disabled">
                <div class="card-header pb-12 line-bt3"> 
                    <h5 class="fw-7 card-title text-white">Primary Card Title</h5>
                </div>
                <div class="card-body">
                    <p class="fw-5 mt-12 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus. Nullam faucibus nunc posuere tortor tempor finibus id posuere sem. Mauris eu nisi lobortis</p>
                    <a href="javascript:void(0);" class="mt-20 tf-btn btn-md bg-white text-primary">Button</a>
                </div>
            </div>
        </div>
    </div>
    
   @endsection 
    

   