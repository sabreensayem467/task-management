@extends('dashboard.layout')
@section('title','select role')
@section('content')

        <h5>Select Role</h5>  
    </div> 
    <div class="app-content style-2">
        <div class="tf-container">
            <ul class="mt-24">
                <li class="box-select-role act-suggest">
                    <div class="box-icon w-36">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M8.33333 13.75L10 11.25M10 11.25L11.6667 13.75M10 11.25V9.58333M10 9.58333L12.5 8.75M10 9.58333L7.5 8.75M17.5 10C17.5 14.1421 14.1421 17.5 10 17.5C5.85786 17.5 2.5 14.1421 2.5 10C2.5 5.85786 5.85786 2.5 10 2.5C14.1421 2.5 17.5 5.85786 17.5 10ZM10.4167 6.25C10.4167 6.48012 10.2301 6.66667 10 6.66667C9.76988 6.66667 9.58333 6.48012 9.58333 6.25C9.58333 6.01988 9.76988 5.83333 10 5.83333C10.2301 5.83333 10.4167 6.01988 10.4167 6.25Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>   
                    </div>
                    <div class="content">
                        <div class="body-4 fw-bold">Full Access</div>
                        <p class="body-2 text-black-5">Can edit and share with others</p>
                    </div>
                </li>
                <li class="mt-20 box-select-role act-suggest active">
                    <div class="box-icon w-36">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.49967 5.83325H4.99967C4.55765 5.83325 4.13372 6.00885 3.82116 6.32141C3.5086 6.63397 3.33301 7.05789 3.33301 7.49992V14.9999C3.33301 15.4419 3.5086 15.8659 3.82116 16.1784C4.13372 16.491 4.55765 16.6666 4.99967 16.6666H12.4997C12.9417 16.6666 13.3656 16.491 13.6782 16.1784C13.9907 15.8659 14.1663 15.4419 14.1663 14.9999V12.4999" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 12.5H10L17.0833 5.41669C17.4149 5.08517 17.6011 4.63553 17.6011 4.16669C17.6011 3.69785 17.4149 3.24821 17.0833 2.91669C16.7518 2.58517 16.3022 2.39893 15.8333 2.39893C15.3645 2.39893 14.9149 2.58517 14.5833 2.91669L7.5 10V12.5Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.333 4.1665L15.833 6.6665" stroke="#31394F" stroke-width="1.07143" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="content">
                        <div class="body-4 fw-bold">Can Edit</div>
                        <p class="body-2 text-black-5">Can edit, but not share with others</p>
                    </div>                      
                </li>
                <li class="mt-20 box-select-role act-suggest">
                    <div class="box-icon w-36">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M9.99968 16.6665L7.49967 14.1665H5.83301C5.16997 14.1665 4.53408 13.9031 4.06524 13.4343C3.5964 12.9654 3.33301 12.3295 3.33301 11.6665V6.6665C3.33301 6.00346 3.5964 5.36758 4.06524 4.89874C4.53408 4.4299 5.16997 4.1665 5.83301 4.1665H14.1663C14.8294 4.1665 15.4653 4.4299 15.9341 4.89874C16.403 5.36758 16.6663 6.00346 16.6663 6.6665V11.6665C16.6663 12.3295 16.403 12.9654 15.9341 13.4343C15.4653 13.9031 14.8294 14.1665 14.1663 14.1665H12.4997L9.99968 16.6665Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.6665 7.5H13.3332" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.6665 10.8333H11.6665" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>        
                    </div>
                    <div class="content">
                        <div class="body-4 fw-bold">Can Comment</div>
                        <p class="body-2 text-black-5">Can view and comment, not edit</p>
                    </div>
                </li>
                <li class="mt-20 box-select-role act-suggest">
                    <div class="box-icon w-36">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.8">
                            <path d="M10.0002 11.6666C10.9206 11.6666 11.6668 10.9204 11.6668 9.99992C11.6668 9.07944 10.9206 8.33325 10.0002 8.33325C9.07969 8.33325 8.3335 9.07944 8.3335 9.99992C8.3335 10.9204 9.07969 11.6666 10.0002 11.6666Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.0003 15.8332C6.66699 15.8332 3.88949 13.889 1.66699 9.99984C3.88949 6.11067 6.66699 4.1665 10.0003 4.1665C13.3337 4.1665 16.1112 6.11067 18.3337 9.99984C17.9837 10.6132 17.6187 11.1782 17.2412 11.694" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.5 15.8332L14.1667 17.4998L17.5 14.1665" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>        
                    </div>
                    <div class="content">
                        <div class="body-4 fw-bold">Can View</div>
                        <p class="body-2 text-black-5">Cannot edit and share with others</p>
                    </div>
                </li>
            </ul>
            
            
            <div class="footer-fixed button">
                <a href="project-details.html" class="tf-btn primary">Done</a>
            </div>
        </div>

    </div>

    @endsection