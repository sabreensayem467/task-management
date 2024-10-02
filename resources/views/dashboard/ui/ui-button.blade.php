@extends('dashboard.layout')
@section('title','button')
@section('content')

        <h4>Button</h4> 
    </div>

    <div class="app-content style-3">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Default Avatar</h4>
                    <p class="mt-4 text-5">Default button style</p>
                </div>
                <div class="card-body mt-20 grid-2 gap-10">
                    <button class="tf-btn btn-lg primary">Primary</button>
                    <button class="tf-btn btn-lg secondary">Secondary</button>
                    <button class="tf-btn btn-lg success">Success</button>
                    <button class="tf-btn btn-lg danger">Danger</button>
                    <button class="tf-btn btn-lg warning">Warning</button>
                    <button class="tf-btn btn-lg info">Info</button>
                    <button class="tf-btn btn-lg light">Light</button>
                    <button class="tf-btn btn-lg dark">Dark</button>
                    <button class="tf-btn btn-lg disable">Disable</button>


                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Square Buttons</h4>
                    <p class="mt-4 text-5">add <code>.btn-square</code> to change the style</p>
                </div>
                <div class="card-body mt-20 grid-2 gap-10">
                    <button class="tf-btn btn-lg btn-square primary">Primary</button>
                    <button class="tf-btn btn-lg btn-square secondary">Secondary</button>
                    <button class="tf-btn btn-lg btn-square success">Success</button>
                    <button class="tf-btn btn-lg btn-square danger">Danger</button>
                    <button class="tf-btn btn-lg btn-square warning">Warning</button>
                    <button class="tf-btn btn-lg btn-square info">Info</button>
                    <button class="tf-btn btn-lg btn-square light">Light</button>
                    <button class="tf-btn btn-lg btn-square dark">Dark</button>
                    <button class="tf-btn btn-lg btn-square disable">Disable</button>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Buttons</h4>
                    <p class="mt-4 text-5">Button Light style</p>
                </div>
                <div class="card-body mt-20 grid-2 gap-10">
                    <button class="tf-btn btn-lg light-btn-primary">Primary</button>
                    <button class="tf-btn btn-lg secondary">Secondary</button>
                    <button class="tf-btn btn-lg light-btn-success">Success</button>
                    <button class="tf-btn btn-lg light-btn-danger">Danger</button>
                    <button class="tf-btn btn-lg light-btn-warning">Warning</button>
                    <button class="tf-btn btn-lg light-btn-info">Info</button>
                    <button class="tf-btn btn-lg light">Light</button>
                    <button class="tf-btn btn-lg light-btn-dark">Dark</button>
                    <button class="tf-btn btn-lg disable">Disable</button>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Outline Buttons</h4>
                    <p class="mt-4 text-5">Default outline button style</p>
                </div>
                <div class="card-body mt-20 grid-2 gap-10">
                    <button class="tf-btn btn-lg outline-btn-primary">Primary</button>
                    <button class="tf-btn btn-lg secondary">Secondary</button>
                    <button class="tf-btn btn-lg outline-btn-success">Success</button>
                    <button class="tf-btn btn-lg outline-btn-danger">Danger</button>
                    <button class="tf-btn btn-lg outline-btn-warning">Warning</button>
                    <button class="tf-btn btn-lg outline-btn-info">Info</button>
                    <button class="tf-btn btn-lg outline-btn-light">Light</button>
                    <button class="tf-btn btn-lg outline-btn-dark">Dark</button>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Button Sizes</h4>
                    <p class="mt-4 text-5">add <code>.btn-lg .btn-md .btn-sm</code> to change the style</p>
                </div>
                <div class="card-body mt-20">
                    <button class="mt-10 tf-btn btn-lg primary">Primary</button>
                    <button class="mt-10 tf-btn btn-md primary">Primary</button>
                    <button class="mt-10 tf-btn btn-sm primary">Primary</button>
                </div>
            </div>
        </div>
    </div>
    
    @endsection

   