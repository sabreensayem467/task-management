@extends('dashboard.master2')
@section('title','my project')
@section('content')


    
        <h5>My Projects</h5>
        <div class="right">
            <a href="javascript:void(0);" class="icon text-black-6"><i class="icon-search"></i></a>
            <a href="javascript:void(0);" class="icon text-black-6"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="mt-24 d-flex justify-content-between align-items-center">
                <a href="#" class="box-filter select-wrapper">
                    <span class="icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                            <path d="M3.33325 3.33325H8.33325M11.6666 3.33325H16.6666M4.99992 6.66659H6.66659C7.58706 6.66659 8.33325 7.41278 8.33325 8.33325V14.9999C8.33325 15.9204 7.58706 16.6666 6.66659 16.6666H4.99992C4.07944 16.6666 3.33325 15.9204 3.33325 14.9999V8.33325C3.33325 7.41278 4.07944 6.66659 4.99992 6.66659ZM13.3333 6.66659H14.9999C15.9204 6.66659 16.6666 7.41278 16.6666 8.33325V9.99992C16.6666 10.9204 15.9204 11.6666 14.9999 11.6666H13.3333C12.4128 11.6666 11.6666 10.9204 11.6666 9.99992V8.33325C11.6666 7.41278 12.4128 6.66659 13.3333 6.66659Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>  
                    </span>
                    <select class="tf-select">
                        <option>Board</option>
                        <option>List</option>
                    </select>
                </a>
                <a href="#" class="box-filter type-1">
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                            <path d="M12 8H4" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 4H2" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.26921 12H6.60254" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>                            
                    </span>
                    Filter
                </a>
            </div>
            <div class="box-recent-project style-1 mt-32">
                <div class="top">
                    <div class="d-flex justify-content-between align-items-center gap-10">
                        <div class="box-icon w-34">
                            <i class="icon-game fs-18"></i>
                        </div>
                        <a href="project-details.html" class="h8 fw-bold flex-grow-1">Gaming Platform Website & Mobile Application</a>
                        <a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                </g>
                            </svg>                                        
                        </a>
                    </div>
                    <div class="mt-14 d-flex gap-8 meta-list">
                        <span class="meta-item"><i class="icon-calendar fs-12"></i> June 18, 2022</span>
                        <span class="meta-item"><i class="icon-chat2 fs-12"></i> 16</span>
                        <span class="meta-item"><i class="icon-link fs-12"></i> 09</span>
                        <ul class="list-stacked">
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt3.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt4.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt5.jpg" alt="img">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="project-details.html" class="d-block mt-14 box-image">
                    <img src="images/project/img1.jpg" alt="img">
                </a>
                <div class="bottom mt-8">  
                    <div class="box-progress">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-caption-2 text-black-5">Progress</span>
                            <span class="fw-6 text-caption-2">78%</span>
                        </div>
                        <div class="progress h-5">
                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="box-recent-project style-1 mt-16">
                <div class="top">
                    <div class="d-flex justify-content-between align-items-center gap-10">
                        <div class="box-icon type-1 w-34">
                            <i class="icon-game2 fs-18"></i>
                        </div>
                        <a href="project-details.html" class="h8 fw-bold flex-grow-1">Furniture Shop Website & Mobile Application</a>
                        <a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.334 2C19.723 2 22 4.378 22 7.916V16.084C22 19.622 19.723 22 16.333 22H7.665C4.276 22 2 19.622 2 16.084V7.916C2 4.378 4.276 2 7.665 2H16.334ZM16.334 3.5H7.665C5.135 3.5 3.5 5.233 3.5 7.916V16.084C3.5 18.767 5.135 20.5 7.665 20.5H16.333C18.864 20.5 20.5 18.767 20.5 16.084V7.916C20.5 5.233 18.864 3.5 16.334 3.5ZM15.9482 11.0137C16.5012 11.0137 16.9482 11.4607 16.9482 12.0137C16.9482 12.5667 16.5012 13.0137 15.9482 13.0137C15.3952 13.0137 14.9432 12.5667 14.9432 12.0137C14.9432 11.4607 15.3862 11.0137 15.9382 11.0137H15.9482ZM11.9385 11.0137C12.4915 11.0137 12.9385 11.4607 12.9385 12.0137C12.9385 12.5667 12.4915 13.0137 11.9385 13.0137C11.3855 13.0137 10.9345 12.5667 10.9345 12.0137C10.9345 11.4607 11.3765 11.0137 11.9295 11.0137H11.9385ZM7.9297 11.0137C8.4827 11.0137 8.9297 11.4607 8.9297 12.0137C8.9297 12.5667 8.4827 13.0137 7.9297 13.0137C7.3767 13.0137 6.9247 12.5667 6.9247 12.0137C6.9247 11.4607 7.3677 11.0137 7.9207 11.0137H7.9297Z" fill="#31394F"/>
                                </g>
                            </svg>                                        
                        </a>
                    </div>
                    <div class="mt-14 d-flex gap-8 meta-list">
                        <span class="meta-item"><i class="icon-calendar fs-12"></i> June 18, 2022</span>
                        <span class="meta-item"><i class="icon-chat2 fs-12"></i> 12</span>
                        <span class="meta-item"><i class="icon-link fs-12"></i> 07</span>
                        <ul class="list-stacked">
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt8.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt9.jpg" alt="img">
                                </div>
                            </li>
                            <li class="avt-list">
                                <div class="avatar avt-27 round">
                                    <img src="images/avt/avt10.jpg" alt="img">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="project-details.html" class="mt-14 box-image d-block">
                    <img src="images/project/img2.jpg" alt="img">
                </a>
                <div class="bottom mt-8">  
                    <div class="box-progress">
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="text-caption-2 text-black-5">Progress</span>
                            <span class="fw-6 text-caption-2">78%</span>
                        </div>
                        <div class="progress h-5">
                            <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

   @endsection