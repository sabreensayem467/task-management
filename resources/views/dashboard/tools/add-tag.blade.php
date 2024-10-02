@extends('dashboard.layout')
@section('title','add tag')
@section('content')
        <h5>Create New Tag</h5>  
    </div> 
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mt-24">
                <h6 class="text-black-2">Write a Tag</h6>
                <input type="text" class="mt-16" placeholder="Great" value="Great">
            </div>
            <div class="mt-24">
                <h6 class="text-black-2">Pick Colors</h6>
                <ul class="box-pick-color mt-16">
                    <li><a href="javascript:void(0);" class="item color1 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color2 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color3 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color4 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color5 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color6 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color7 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color8 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item color9 act-suggest"></a></li>
                    <li><a href="javascript:void(0);" class="item add-color">
                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M33.0259 0C40.786 0 46 5.44726 46 13.554V32.446C46 40.5527 40.786 46 33.0259 46H12.9741C5.21405 46 0 40.5527 0 32.446V13.554C0 5.44726 5.21405 0 12.9741 0H33.0259ZM33.0259 3.2093H12.9741C7.04335 3.2093 3.2093 7.268 3.2093 13.554V32.446C3.2093 38.732 7.04335 42.7907 12.9741 42.7907H33.0259C38.9588 42.7907 42.7907 38.732 42.7907 32.446V13.554C42.7907 7.268 38.9588 3.2093 33.0259 3.2093ZM23 13.5375C23.8858 13.5375 24.6047 14.2564 24.6047 15.1421V21.374L30.8446 21.3744C31.7304 21.3744 32.4493 22.0933 32.4493 22.979C32.4493 23.8648 31.7304 24.5837 30.8446 24.5837L24.6047 24.5833V30.8185C24.6047 31.7043 23.8858 32.4232 23 32.4232C22.1142 32.4232 21.3953 31.7043 21.3953 30.8185V24.5833L15.1554 24.5837C14.2675 24.5837 13.5507 23.8648 13.5507 22.979C13.5507 22.0933 14.2675 21.3744 15.1554 21.3744L21.3953 21.374V15.1421C21.3953 14.2564 22.1142 13.5375 23 13.5375Z" fill="#7980FF"/>
                        </svg>
                    </a></li>
                </ul>
            </div>
            <div class="footer-fixed button">
                <a href="project-details.html" class="tf-btn primary">Done</a>
            </div>
        </div>

    </div>

   @endsection