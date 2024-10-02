<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/html/taskose/taskose/create-task.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="{{asset('fonts/fonts.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('fonts/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('css/styles.css')}}"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('images/logo/168.png')}}" />
    <link rel="apple-touch-icon-precomposed" href="{{asset('images/logo/168.png')}}" />

    <title>@yield('title')</title>
</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        <div class="logo-img">
            <img src="{{asset('images/logo/logo-2.png')}}" alt="logo">
        </div>
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
    <div class="header fixed-top line-bt">
        <div class="left">
          <a href="{{asset('javascript:void(0);')}}" class="icon back-btn"><i class="icon-back"></i></a>
        </div>
    @yield('content')
    <div class="menubar-footer footer-fixed">
        <ul class="inner-bar">
            <li>
                <a href="index.html">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.75 3C1.75 2.30964 2.30964 1.75 3 1.75H9C9.69036 1.75 10.25 2.30964 10.25 3V11C10.25 11.6904 9.69036 12.25 9 12.25H3C2.30964 12.25 1.75 11.6904 1.75 11V3Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M13.75 3C13.75 2.30964 14.3096 1.75 15 1.75H21C21.6904 1.75 22.25 2.30964 22.25 3V7C22.25 7.69036 21.6904 8.25 21 8.25H15C14.3096 8.25 13.75 7.69036 13.75 7V3Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M1.75 17C1.75 16.3096 2.30964 15.75 3 15.75H9C9.69036 15.75 10.25 16.3096 10.25 17V21C10.25 21.6904 9.69036 22.25 9 22.25H3C2.30964 22.25 1.75 21.6904 1.75 21V17Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M13.75 13C13.75 12.3096 14.3096 11.75 15 11.75H21C21.6904 11.75 22.25 12.3096 22.25 13V21C22.25 21.6904 21.6904 22.25 21 22.25H15C14.3096 22.25 13.75 21.6904 13.75 21V13Z" fill="white" stroke="#31394F" stroke-width="1.5"/>
                    </svg>                        
                </a>
            </li>
            <li class="active"><a href="my-project-list-view.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 6.22222V3.05556C19 2.7756 18.8784 2.50712 18.662 2.30917C18.4457 2.11121 18.1522 2 17.8462 2H5.15385C4.84783 2 4.55434 2.11121 4.33795 2.30917C4.12156 2.50712 4 2.7756 4 3.05556V19.9444C4 20.2244 4.12156 20.4929 4.33795 20.6908C4.55434 20.8888 4.84783 21 5.15385 21H14.3846H17.4167C18.2911 21 19 20.2911 19 19.4167V19.4167V17.8333" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3 8H5M3 12H5M3 16H5" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M19.0918 9.006L12.7983 13.5624L12.1729 16.4843L15.144 16.8024L21.4375 12.246C21.676 12.0734 21.8429 11.8225 21.9015 11.5485C21.9601 11.2745 21.9057 10.9999 21.7502 10.7851L20.5773 9.16509C20.4218 8.95026 20.1779 8.81281 19.8993 8.78298C19.6207 8.75314 19.3303 8.83337 19.0918 9.006Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
                </a>
            </li>
            <li class="action-add-task"><a href="#createProject" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom"><i class="icon-add"></i></a></li>
            <li><a href="inbox.html">
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.4876 3.36093 14.891 4 16.1272L3 21L7.8728 20C9.10904 20.6391 10.5124 21 12 21Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <rect x="7.5" y="12" width="0.01" height="0.01" stroke="#464D61" stroke-opacity="0.7" stroke-width="2" stroke-linejoin="round"/>
                    <rect x="12" y="12" width="0.01" height="0.01" stroke="#464D61" stroke-opacity="0.7" stroke-width="2" stroke-linejoin="round"/>
                    <rect x="16.5" y="12" width="0.01" height="0.01" stroke="#464D61" stroke-opacity="0.7" stroke-width="2" stroke-linejoin="round"/>
                    <circle cx="19.1592" cy="6.10767" r="4.5" fill="#F05A5A" stroke="white"/>
                </svg>                    
                </a>
            </li>
            <li><a href="profile.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 8C17 8.98891 16.7068 9.95561 16.1573 10.7779C15.6079 11.6001 14.827 12.241 13.9134 12.6194C12.9998 12.9978 11.9945 13.0969 11.0245 12.9039C10.0546 12.711 9.16373 12.2348 8.46447 11.5355C7.7652 10.8363 7.289 9.94536 7.09607 8.97545C6.90315 8.00555 7.00216 7.00021 7.3806 6.08658C7.75904 5.17295 8.3999 4.39206 9.22215 3.84265C10.0444 3.29324 11.0111 3 12 3C13.3261 3 14.5979 3.52678 15.5355 4.46447C16.4732 5.40215 17 6.67392 17 8ZM13 13H11C9.14348 13 7.36301 13.7375 6.05025 15.0503C4.7375 16.363 4 18.1435 4 20V20C4 20.2652 4.10536 20.5196 4.29289 20.7071C4.48043 20.8946 4.73478 21 5 21H19C19.2652 21 19.5196 20.8946 19.7071 20.7071C19.8946 20.5196 20 20.2652 20 20C20 18.1435 19.2625 16.363 17.9497 15.0503C16.637 13.7375 14.8565 13 13 13V13Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
                </a>
            </li>
        </ul>
         
    </div>

    <!-- create project -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="createProject" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header style-1">
          <h5 class="offcanvas-title" id="offcanvasBottomLabel">Create Project</h5>
          <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        </div>
        <div class="offcanvas-body pb-32">
            <input type="text" placeholder="Project Name">
            <div class="mt-24">
                <h5 class="text-black-2">Layout</h5>
                <ul class="grid-2 gap-20 mt-16">
                    <li class="layout-project act-suggest active">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.84426 3.04199C7.15926 3.04199 7.41462 3.29735 7.41462 3.61235V6.27403H10.0763C10.3913 6.27403 10.6467 6.5294 10.6467 6.84439C10.6467 7.15938 10.3913 7.41475 10.0763 7.41475H7.41462V10.0764C7.41462 10.3914 7.15926 10.6468 6.84426 10.6468C6.52927 10.6468 6.27391 10.3914 6.27391 10.0764V7.41475H3.61223C3.29723 7.41475 3.04187 7.15938 3.04187 6.84439C3.04187 6.5294 3.29723 6.27403 3.61223 6.27403H6.27391V3.61235C6.27391 3.29735 6.52927 3.04199 6.84426 3.04199Z" fill="#31394F"/>
                            <path d="M0 2.47156C0 1.10655 1.10655 0 2.47156 0H11.2171C12.582 0 13.6886 1.10655 13.6886 2.47156V11.2171C13.6886 12.582 12.582 13.6886 11.2171 13.6886H2.47156C1.10655 13.6886 0 12.582 0 11.2171V2.47156ZM2.47156 1.14072C1.73655 1.14072 1.14072 1.73655 1.14072 2.47156V11.2171C1.14072 11.9521 1.73655 12.5479 2.47156 12.5479H11.2171C11.9521 12.5479 12.5479 11.9521 12.5479 11.2171V2.47156C12.5479 1.73655 11.9521 1.14072 11.2171 1.14072H2.47156Z" fill="#31394F"/>
                            </svg>
                            
                        <span class="h9">List</span>                            
                    </li>
                    <li class="layout-project act-suggest">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M3.33337 3.33325H8.33337M11.6667 3.33325H16.6667M5.00004 6.66659H6.66671C7.58718 6.66659 8.33337 7.41278 8.33337 8.33325V14.9999C8.33337 15.9204 7.58718 16.6666 6.66671 16.6666H5.00004C4.07957 16.6666 3.33337 15.9204 3.33337 14.9999V8.33325C3.33337 7.41278 4.07957 6.66659 5.00004 6.66659ZM13.3334 6.66659H15C15.9205 6.66659 16.6667 7.41278 16.6667 8.33325V9.99992C16.6667 10.9204 15.9205 11.6666 15 11.6666H13.3334C12.4129 11.6666 11.6667 10.9204 11.6667 9.99992V8.33325C11.6667 7.41278 12.4129 6.66659 13.3334 6.66659Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        <span class="h9">Board</span>  
                    </li>
                </ul>
            </div>
            <div class="mt-24">
                <h5 class="text-black-2">Visibility</h5>
                
                <div class="dropdown mt-16">
                    <div class="dropdown-toggle drop-select-visibility" data-bs-toggle="dropdown">
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.8">
                                    <path d="M2.5 17.5V15.8333C2.5 14.9493 2.85119 14.1014 3.47631 13.4763C4.10143 12.8512 4.94928 12.5 5.83333 12.5H9.16667C10.0507 12.5 10.8986 12.8512 11.5237 13.4763C12.1488 14.1014 12.5 14.9493 12.5 15.8333V17.5M13.3333 2.60834C14.0503 2.79192 14.6859 3.20892 15.1397 3.7936C15.5935 4.37827 15.8399 5.09736 15.8399 5.8375C15.8399 6.57765 15.5935 7.29674 15.1397 7.88141C14.6859 8.46609 14.0503 8.88309 13.3333 9.06667M17.5 17.5V15.8334C17.4958 15.0977 17.2483 14.384 16.7961 13.8037C16.3439 13.2234 15.7124 12.8089 15 12.625M10.8333 5.83333C10.8333 7.67428 9.34095 9.16667 7.5 9.16667C5.65905 9.16667 4.16667 7.67428 4.16667 5.83333C4.16667 3.99238 5.65905 2.5 7.5 2.5C9.34095 2.5 10.8333 3.99238 10.8333 5.83333Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>                              
                            </span>
                            <div class="title-visibility text-val-drop">Public</div>
                    </div>
                    <div class="dropdown-menu dropdown-visibility full">
                            <div class="dropdown-item val-drop act-suggest2 active">
                                <div class="title-visibility title-drop">Public</div>
                            </div>
                            <div class="dropdown-item val-drop act-suggest2">
                                <div class="title-visibility title-drop">Private</div>
                            </div>
                            
                    </div>
                </div>

                
            </div>
            <div class="mt-24">
                <a href="invite-colleagues.html" class="tf-btn outline-btn-primary style-1 gap-8">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.84426 6.04199C10.1593 6.04199 10.4146 6.29735 10.4146 6.61235V9.27403H13.0763C13.3913 9.27403 13.6467 9.5294 13.6467 9.84439C13.6467 10.1594 13.3913 10.4147 13.0763 10.4147H10.4146V13.0764C10.4146 13.3914 10.1593 13.6468 9.84426 13.6468C9.52927 13.6468 9.27391 13.3914 9.27391 13.0764V10.4147H6.61223C6.29723 10.4147 6.04187 10.1594 6.04187 9.84439C6.04187 9.5294 6.29723 9.27403 6.61223 9.27403H9.27391V6.61235C9.27391 6.29735 9.52927 6.04199 9.84426 6.04199Z" fill="#7980FF"/>
                        <path d="M3 5.47156C3 4.10655 4.10655 3 5.47156 3H14.2171C15.582 3 16.6886 4.10655 16.6886 5.47156V14.2171C16.6886 15.582 15.582 16.6886 14.2171 16.6886H5.47156C4.10655 16.6886 3 15.582 3 14.2171V5.47156ZM5.47156 4.14072C4.73655 4.14072 4.14072 4.73655 4.14072 5.47156V14.2171C4.14072 14.9521 4.73655 15.5479 5.47156 15.5479H14.2171C14.9521 15.5479 15.5479 14.9521 15.5479 14.2171V5.47156C15.5479 4.73655 14.9521 4.14072 14.2171 4.14072H5.47156Z" fill="#7980FF"/>
                    </svg>
                    Add Member
                </a>
                <a href="create-task.html" class="mt-35 tf-btn primary">Create Project</a>
            </div>
        </div>
    </div>

        
   
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/calendar-custom.js')}}"></script>
    
    <script>

        
           





    </script>

  


</body>

<!-- Mirrored from themesflat.co/html/taskose/taskose/create-task.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:21 GMT -->
</html>