@extends('dashboard.layout')
@section('title','dropdown')
@section('content')
        <h4>Dropdown</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Basic Dropdown</h4>
                    <p class="text-5 pb-20 mt-4">A dropdown menu is a toggleable menu that allows the user to choose one value from a predefined list</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Dropdown Divider</h4>
                    <p class="text-5 pb-20 mt-4">The <code>.dropdown-divider </code>class is used to separate links inside the dropdown menu with a thin horizontal border</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);">Link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Dropdown Header</h4>
                    <p class="text-5 pb-20 mt-4">The <code>.dropdown-header </code> class is used to add headers inside the dropdown menu</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown style-2">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu full">
                            <ul class="top">
                                <li>
                                    <h5 class="dropdown-header">Dropdown-header</h5>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 02</a> 
                                </li>
                            </ul>
                            <ul class="bottom">
                                <li>
                                    <h5 class="dropdown-header">Dropdown-header</h5>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="javascript:void(0);">Item 04</a> 
                                </li>
                            </ul>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Disable And Active Items</h4>
                    <p class="text-5 pb-20 mt-4">The <code>.active,.disable </code> class is used to add headers inside the dropdown menu</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown style-3">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Normal</a>
                            <a class="dropdown-item active" href="javascript:void(0);">Active</a>
                            <a class="dropdown-item disable" href="javascript:void(0);">Disable</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Align Right</h4>
                    <p class="text-5 pb-20 mt-4">
                        To right-align the dropdown, add the <code>.dropdown-menu-end</code>  class to the element with <code>.dropdown-menu</code> 
                    </p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropdown button
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Dropup</h4>
                    <p class="text-5 pb-20 mt-4">The <code>.dropup</code> class makes the dropdown menu expand upwards instead of downwards</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown dropup">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropup
                        </button>
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                    <div class="mt-20 dropdown dropup btn-group w-100">
                        <button type="button" class="tf-btn primary btn-md">
                            Split dropup
                        </button>
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle btn-split" data-bs-toggle="dropdown">
                        </button>
                        <div class="dropdown-menu full">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Dropright</h4>
                    <p class="text-5 pb-20 mt-4">Trigger dropdown menus at the right of the elements by adding <code>.dropend</code> to the parent element</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown dropend ">
                        <button type="button" class="w-auto gap-8 tf-btn primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropright
                        </button>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                    <div class="dropdown dropend btn-group mt-20">
                        <button type="button" class="tf-btn primary btn-md">
                            Split dropright
                        </button>
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle btn-split" data-bs-toggle="dropdown">
                        </button>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header line-bt"> 
                    <h4 class="fw-6">Dropstart</h4>
                    <p class="text-5 pb-20 mt-4">Trigger dropdown menus at the right of the elements by adding <code>.dropstart</code> to the parent element</p>
                </div>
                <div class="card-body mt-20">
                    <div class="dropdown dropstart d-flex justify-content-end">
                        <button type="button" class="w-auto tf-btn gap-8 primary btn-md dropdown-toggle" data-bs-toggle="dropdown">
                            Dropstart
                        </button>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                    </div>
                    <div class="dropdown dropstart btn-group mt-20 d-flex justify-content-end">
                        <button type="button" class="tf-btn primary btn-md dropdown-toggle btn-split w-auto" data-bs-toggle="dropdown">
                        </button>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="javascript:void(0);">Item 01</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 02</a>
                            <a class="dropdown-item" href="javascript:void(0);">Item 03</a>
                        </div>
                        <button type="button" class="tf-btn primary btn-md w-auto">
                            Split dropstart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

   @endsection