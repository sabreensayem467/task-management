@extends('dashboard.layout')
@section('title','button group')
@section('content')
        <h4>Button Group</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Button Group</h4>
                    <p class="text-5 mt-4">Default Button group style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="btn-group w-100">
                        <button type="button" class="tf-btn btn-lg primary round-14">Left</button>
                        <button type="button" class="tf-btn btn-lg primary round-14">Middle</button>
                        <button type="button" class="tf-btn btn-lg primary round-14">Right</button>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Button Toolbar</h4>
                    <p class="text-5 mt-4">Default Button toolbar style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="btn-group grid-4">
                        <button type="button" class="tf-btn btn-md primary round-14">1</button>
                        <button type="button" class="tf-btn btn-md primary round-14">2</button>
                        <button type="button" class="tf-btn btn-md primary round-14">3</button>
                        <button type="button" class="tf-btn btn-md primary round-14">4</button>
                    </div>
                    <div class="btn-group mt-10 grid-4">
                        <button type="button" class="tf-btn btn-md primary round-14">5</button>
                        <button type="button" class="tf-btn btn-md primary round-14">6</button>
                        <button type="button" class="tf-btn btn-md primary round-14">7</button>
                    </div>
                    <div class="btn-group mt-10 grid-4">
                        <button type="button" class="tf-btn btn-md primary round-14">8</button>
                        
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Button Sizing</h4>
                    <p class="text-5 mt-4">Default button size style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="btn-group w-100">
                        <button type="button" class="tf-btn btn-lg primary round-14">Left</button>
                        <button type="button" class="tf-btn btn-lg primary round-14">Middle</button>
                        <button type="button" class="tf-btn btn-lg primary round-14">Right</button>
                    </div>
                    <div class="btn-group mt-10 w-100">
                        <button type="button" class="tf-btn btn-md primary round-14">Left</button>
                        <button type="button" class="tf-btn btn-md primary round-14">Middle</button>
                        <button type="button" class="tf-btn btn-md primary round-14">Right</button>
                    </div>
                    <div class="btn-group mt-10 w-100">
                        <button type="button" class="tf-btn btn-sm primary round-14">Left</button>
                        <button type="button" class="tf-btn btn-sm primary round-14">Middle</button>
                        <button type="button" class="tf-btn btn-sm primary round-14">Right</button>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Button Nesting</h4>
                    <p class="text-5 mt-4">Default button nesting style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown w-100 btn-group mt-20">
                        <button type="button" class="tf-btn primary btn-md">
                            1
                        </button>
                        <button type="button" class="tf-btn primary btn-md">
                            2
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle btn-dropdown" data-bs-toggle="dropdown">
                            Dropdown
                        </button>
                     
                        
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Vertical Variation</h4>
                    <p class="text-5 mt-4">Default button vertical variation style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="btn-group-vertical">
                        <button type="button" class="tf-btn btn-lg primary round-14">Item 01</button>
                        <button type="button" class="tf-btn btn-lg primary round-14">Item 02</button>
                        <button type="button" class="tf-btn btn-lg primary round-14">Item 03</button>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Vertical Dropdown Variation</h4>
                    <p class="text-5 mt-4">Default button vertical variation style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="btn-group-vertical">
                        <button type="button" class="tf-btn primary btn-md round-14">Item 01</button>
                        <button type="button" class="tf-btn primary btn-md round-14">Item 02</button>
                        <button type="button" class="tf-btn primary btn-md round-14">Item 03</button>
                        
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle btn-dropdown" data-bs-toggle="dropdown">
                            Dropdown
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                        <button type="button" class="tf-btn primary btn-md round-14">Item 04</button>
                        <button type="button" class="tf-btn primary btn-md round-14">Item 05</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

   @endsection