@extends('dashboard.layout')
@section('title','help search')
@section('content')


        <h5>Help Center</h5>  
    </div> 
    <div class="app-content style-3">
        <div class="tf-container">
            <div class="mt-24 search-box">
                <a href="help-search-result.html" class="icon-left icon-search"></a>
                <input type="text" class="search-field" placeholder="Find your task" value="nft website de">
            </div>
            <ul class="pt-28 pb-24">
                <li>
                    <a href="#" class="d-flex align-items-center gap-16">
                        <div class="font-title-btn flex-grow-1">Get started</div>
                        <div class="box-icon w-20">
                            <i class="icon-arr-r fs-14"></i>
                        </div>
                    </a>
                </li>
                <li class="mt-24">
                    <a href="#" class="d-flex align-items-center gap-16">
                        <div class="font-title-btn flex-grow-1">How to Create Project</div>
                        <div class="box-icon w-20">
                            <i class="icon-arr-r fs-14"></i>
                        </div>
                    </a>
                </li>
                <li class="mt-24">
                    <a href="#" class="d-flex align-items-center gap-16">
                        <div class="font-title-btn flex-grow-1">How to Create Task</div>
                        <div class="box-icon w-20">
                            <i class="icon-arr-r fs-14"></i>
                        </div>
                    </a>
                </li>
                <li class="mt-24">
                    <a href="#" class="d-flex align-items-center gap-16">
                        <div class="font-title-btn flex-grow-1">Close Account</div>
                        <div class="box-icon w-20">
                            <i class="icon-arr-r fs-14"></i>
                        </div>
                    </a>
                </li>
            </ul>
        </div>

    </div>
@endsection