@extends('dashboard.layout')
@section('title','profile')
@section('content')
        <h5>Profile</h5>
        <div class="right">
            <a href="#language" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom" class="icon text-black-6"><i class="icon-settings"></i></a>
            <a href="{{asset('javascript:void(0);')}}" class="icon text-black-6"><i class="icon-search"></i></a>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="box-profile">
                <div class="avatar avt-100">
                    <img src="images/avt/avt1.jpg" alt="img">
                    <span class="icon" data-bs-target="#filterProfile" data-bs-toggle="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path d="M11.0525 1.66371H9.27168V1.48075C9.27168 0.663377 8.6083 0 7.79093 0H4.95875C4.14104 0 3.47799 0.663377 3.47799 1.48075V1.66371H1.69682C0.879112 1.66371 0.216064 2.32675 0.216064 3.14446V8.51926C0.216064 9.33663 0.879112 10 1.69682 10H11.0532C11.8709 10 12.5339 9.33663 12.5339 8.51926V3.14446C12.5333 2.32642 11.8702 1.66371 11.0525 1.66371ZM6.37434 8.46397C4.83173 8.46397 3.57737 7.20961 3.57737 5.667C3.57737 4.12471 4.83173 2.87002 6.37434 2.87002C7.91696 2.87002 9.17132 4.12439 9.17132 5.667C9.17132 7.20961 7.91663 8.46397 6.37434 8.46397ZM7.8551 5.667C7.8551 6.48273 7.1904 7.14775 6.37434 7.14775C5.55829 7.14775 4.89359 6.48273 4.89359 5.667C4.89359 4.85094 5.55829 4.18625 6.37434 4.18625C7.1904 4.18625 7.8551 4.85094 7.8551 5.667Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <div class="content text-center">
                    <h5>Jonathan Smith</h5>
                    <p class="mt-4 body-4 text-black-4">@seesion('email')</p>
                </div>
            </div>
            <a href="edit-profile.html" class="tf-btn primary">Edit Profile</a>
            <ul class="mt-32">
                <li class="list-view-item style-1 line-bt" data-bs-toggle="offcanvas" data-bs-target="#upgradePremium" aria-controls="offcanvasBottom">
                    <a href="javascript:void(0);" class="gap-20">
                            <div class="box-icon w-36 bg-grey-2 radius-12">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7667 1.04938C11.4776 0.444472 12.5224 0.444472 13.2333 1.04938C13.7356 1.47685 14.4235 1.61369 15.0512 1.411C15.9395 1.12419 16.9047 1.52398 17.33 2.35489C17.6305 2.94207 18.2137 3.33174 18.8712 3.3847C19.8016 3.45965 20.5403 4.19836 20.6153 5.12879C20.6683 5.78628 21.0579 6.36946 21.6451 6.67C22.476 7.0953 22.8758 8.06048 22.589 8.94876C22.3863 9.57647 22.5231 10.2644 22.9506 10.7667C23.5555 11.4776 23.5555 12.5224 22.9506 13.2333C22.5231 13.7356 22.3863 14.4235 22.589 15.0512C22.8758 15.9395 22.476 16.9047 21.6451 17.33C21.0579 17.6305 20.6683 18.2137 20.6153 18.8712C20.5403 19.8016 19.8016 20.5403 18.8712 20.6153C18.2137 20.6683 17.6305 21.0579 17.33 21.6451C16.9047 22.476 15.9395 22.8758 15.0512 22.589C14.4235 22.3863 13.7356 22.5231 13.2333 22.9506C12.5224 23.5555 11.4776 23.5555 10.7667 22.9506C10.2644 22.5231 9.57647 22.3863 8.94876 22.589C8.06048 22.8758 7.0953 22.476 6.67 21.6451C6.36946 21.0579 5.78628 20.6683 5.12879 20.6153C4.19837 20.5403 3.45965 19.8016 3.3847 18.8712C3.33174 18.2137 2.94207 17.6305 2.35489 17.33C1.52398 16.9047 1.12419 15.9395 1.411 15.0512C1.61369 14.4235 1.47685 13.7356 1.04938 13.2333C0.444472 12.5224 0.444472 11.4776 1.04938 10.7667C1.47685 10.2644 1.61369 9.57647 1.411 8.94876C1.12419 8.06048 1.52398 7.0953 2.35489 6.67C2.94207 6.36946 3.33174 5.78628 3.3847 5.12879C3.45965 4.19837 4.19837 3.45965 5.12879 3.3847C5.78628 3.33174 6.36946 2.94207 6.67 2.35489C7.0953 1.52398 8.06048 1.12419 8.94876 1.411C9.57647 1.61369 10.2644 1.47685 10.7667 1.04938Z" fill="#64BEF1"/>
                                    <circle cx="12" cy="12" r="8" fill="#7980FF"/>
                                    <path d="M12 4C14.1217 4 16.1566 4.84285 17.6569 6.34315C19.1571 7.84344 20 9.87827 20 12C20 14.1217 19.1571 16.1566 17.6569 17.6569C16.1566 19.1571 14.1217 20 12 20L12 12L12 4Z" fill="#0055DD"/>
                                    <path d="M14.8736 9H9.17241L8 11H16L14.8736 9Z" fill="white"/>
                                    <path d="M14.8736 9H12V11H16L14.8736 9Z" fill="#B2F5FF"/>
                                    <path d="M16 11H8L12 16L16 11Z" fill="#B2F5FF"/>
                                    <path d="M16 11H12V16L16 11Z" fill="#18E0FF"/>
                                </svg>     
                            </div>
                            <div class="font-title-btn text-black-2 title">
                                Upgrade to Premium
                            </div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-12"></i>
                            </div> 
                    </a>
                </li>
                <li class="list-view-item style-1 line-bt" data-bs-toggle="offcanvas" data-bs-target="#helpCenter" aria-controls="offcanvasRight">
                    <a href="javascript:void(0);" class="gap-20">
                            <div class="box-icon w-36 bg-grey-2 radius-12">
                                <i class="icon-life-buoy fs-20"></i>   
                            </div>
                            <div class="font-title-btn text-black-2 title">
                                Help Center
                            </div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-12"></i>
                            </div> 
                    </a>
                </li>
                <li class="list-view-item style-1 line-bt">
                    <a href="javascript:void(0);" class="gap-20">
                            <div class="box-icon w-36 bg-grey-2 radius-12">
                                <i class="icon-star fs-20"></i>    
                                    
                            </div>
                            <div class="font-title-btn text-black-2 title">
                                Rate the App
                            </div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-12"></i>
                            </div> 
                    </a>
                </li>
                <li class="list-view-item style-1 line-bt" data-bs-toggle="offcanvas" data-bs-target="#privacyPolicy" aria-controls="offcanvasRight">
                    <a href="javascript:void(0);" class="gap-20">
                            <div class="box-icon w-36 bg-grey-2 radius-12">
                                <i class="icon-view fs-20"></i>    
                            </div>
                            <div class="font-title-btn text-black-2 title">
                                Privacy Policy
                            </div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-12"></i>
                            </div> 
                    </a>
                </li>
                <li class="list-view-item style-1" data-bs-toggle="modal" data-bs-target="#logout">
                    <a href="javascript:void(0);" class="gap-20">
                            <div class="box-icon w-36 bg-grey-2 radius-12">
                                <i class="icon-log-out text-danger fs-20"></i>   
                            </div>
                            <div class="font-title-btn text-black-2 title text-danger">
                                Log out
                            </div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-12"></i>
                            </div> 
                    </a>
                </li>
            </ul>
        </div>

    </div>

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
            <li><a href="my-project-list-view.html">
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
            <li class="active"><a href="profile.html">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 8C17 8.98891 16.7068 9.95561 16.1573 10.7779C15.6079 11.6001 14.827 12.241 13.9134 12.6194C12.9998 12.9978 11.9945 13.0969 11.0245 12.9039C10.0546 12.711 9.16373 12.2348 8.46447 11.5355C7.7652 10.8363 7.289 9.94536 7.09607 8.97545C6.90315 8.00555 7.00216 7.00021 7.3806 6.08658C7.75904 5.17295 8.3999 4.39206 9.22215 3.84265C10.0444 3.29324 11.0111 3 12 3C13.3261 3 14.5979 3.52678 15.5355 4.46447C16.4732 5.40215 17 6.67392 17 8ZM13 13H11C9.14348 13 7.36301 13.7375 6.05025 15.0503C4.7375 16.363 4 18.1435 4 20V20C4 20.2652 4.10536 20.5196 4.29289 20.7071C4.48043 20.8946 4.73478 21 5 21H19C19.2652 21 19.5196 20.8946 19.7071 20.7071C19.8946 20.5196 20 20.2652 20 20C20 18.1435 19.2625 16.363 17.9497 15.0503C16.637 13.7375 14.8565 13 13 13V13Z" stroke="#464D61" stroke-opacity="0.7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
                </a>
            </li>
        </ul>
         
    </div>
        
    <!-- log out -->
    <div class="modal fade modalCenter" id="logout">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-notiCenter">
                <h5 class="title text-black-2 line-bt2">Are you sure, you want to log out?</h5>
                <a href="sign-in.html" class="text-danger font-title-btn d-block text-center line-bt2">Log Out</a>
                <a href="javascript:void(0);" class="text-black-5 font-title-btn d-block text-center" data-bs-dismiss="modal">Cancel</a>


          </div>
      </div>
    </div>
    <!-- language -->
    <div class="offcanvas offcanvas-bottom" id="language">
        <div class="offcanvas-header justify-content-center line-bt">
            <h5 class="flex-grow-1 text-center text-black-3">Change Language</h5>
            <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
          </div>
        <div class="overflow-auto pb-100 language">
            <div class="tf-container">
                <ul class="mt-8 pb-32">
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/indo.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">Indonesian</div> 
                        <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check active language-val">
                        <div class="img">
                            <img src="images/flags/eng.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">English (US)</div> 
                        <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/itali.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">Italy</div> 

                       <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/france.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">France</div> 

                        <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/germany2.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">Germany</div> 

                        <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/japan.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">Japanese</div> 

                        <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/swedish.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">Swedish</div> 

                        <i class="icon icon-check"></i> 
                    </li>
                    <li class="item-check language-val">
                        <div class="img">
                            <img src="images/flags/russian.png" alt="flats">
                        </div>
                        <div class="text-black-3 title">Russian</div> 

                        <i class="icon icon-check"></i> 
                    </li>
                </ul>
                <div class="footer-fixed button">
                    <a href="javascript:void(0);" class="tf-btn primary" data-bs-dismiss="offcanvas" aria-label="Close">Done</a>
                </div>
            </div>
            
  
        </div>
    </div>
    <!-- help center -->
    <div class="offcanvas offcanvas-end full" id="helpCenter">
        <div class="header fixed-top line-bt">
            <div class="left" data-bs-dismiss="offcanvas">
                <a href="javascript:void(0);" class="icon"><i class="icon-back"></i></a>
            </div>
            <h5>Help Center</h5>  
        </div> 
        <div class="overflow-auto app-content style-3 pb-32">
            <div class="tf-container">
                <div class="mt-24 search-box">
                    <a href="javascript:void(0);" class="icon-left icon-search"></a>
                    <input type="text" class="search-field" placeholder="Find your task">
                </div>
                <ul class="pt-28 pb-24 line-bt">
                    <li>
                        <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                            <div class="font-title-btn flex-grow-1">Get started</div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-14"></i>
                            </div>
                        </a>
                    </li>
                    <li class="mt-24">
                        <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                            <div class="font-title-btn flex-grow-1">How to Create Project</div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-14"></i>
                            </div>
                        </a>
                    </li>
                    <li class="mt-24">
                        <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                            <div class="font-title-btn flex-grow-1">How to Create Task</div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-14"></i>
                            </div>
                        </a>
                    </li>
                    <li class="mt-24" data-bs-toggle="offcanvas" data-bs-target="#closeAccount" aria-controls="offcanvasBottom">
                        <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                            <div class="font-title-btn flex-grow-1">Close Account</div>
                            <div class="box-icon w-20">
                                <i class="icon-arr-r fs-14"></i>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="pt-28 pb-24 line-bt">
                    <h6>Get more questions?</h6>
                    <p class="mt-8 body-2 text-black-5">You may also send a message to our customer support for further questions or information.</p>
                    <a href="javascript:void(0);" class="tf-btn outline-btn-primary mt-16">Get in touch with us</a>
                </div>
                <div class="pt-28">
                    <h6>Chat with Us</h6>
                    <p class="mt-8 body-2 text-black-5">We are here to assist you better via online chat.</p>
                    <a href="javascript:void(0);" class="tf-btn primary mt-24">Get in touch with us</a>
                </div>
                
            </div>
        </div>       
    </div>
    <!-- privacy policy -->
    <div class="offcanvas offcanvas-end full" id="privacyPolicy">
        <div class="header fixed-top line-bt">
            <div class="left" data-bs-dismiss="offcanvas">
                <a href="javascript:void(0);" class="icon"><i class="icon-back"></i></a>
            </div>
            <h5>Privacy Policy</h5>  
        </div> 
        <div class="overflow-auto app-content style-3 pb-24">
            <div class="tf-container">
                <p class="mt-24 body-2 text-black-4">Not everyone knows how to make a Privacy Policy agreement, especially with CCPA or GDPR or CalOPPA or PIPEDA or Australia's Privacy Act provisions. If you are not a lawyer or someone who is familiar to Privacy Policies, you will be clueless. Some people might even take advantage of you because of this. Some people may even extort money from you. These are some examples that we want to stop from happening to you. We will help you protect yourself by generating a Privacy Policy.</p>
                <p class="mt-24 body-2 text-black-4">Our Privacy Policy Generator can help you make sure that your business complies with the law. We are here to help you protect your business, yourself and your customers</p>
                <p class="mt-24 body-2 text-black-4">Fill in the blank spaces below and we will create a personalized website Privacy Policy for your business. No account registration required. Simply generate & download a Privacy Policy in seconds!</p>
                <p class="mt-24 body-2 text-black-4">If you are not a lawyer or someone who is familiar to Privacy Policies, you will be clueless. Some people might even take advantage of you because of this. Some people may even extort money from you. These are some examples that we want to stop from happening to you. We will help you protect yourself by generating a Privacy Policy.</p>
                <p class="mt-24 body-2 text-black-4">Our Privacy Policy Generator can help you make sure that your business complies with the law. We are here to help you protect your business, yourself and your customers.</p>
            </div>
        </div>       
    </div>

    <!-- upgrade premium -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="upgradePremium" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header style-1">
          <h5 class="offcanvas-title" id="offcanvasBottomLabel">Upgrade To Premium</h5>
          <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        </div>
        <div class="offcanvas-body pb-100">
            <p class="body-2 text-black-4">Get the premium feature and get the unlimited access to the app. Upgrade your account and get full access.</p>
            <ul class="pt-28 pb-24 line-bt">
                <li>
                    <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                        <div class="box-icon w-40 bg-grey-2 radius-12">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 16V8.00002C20.9996 7.6493 20.9071 7.30483 20.7315 7.00119C20.556 6.69754 20.3037 6.44539 20 6.27002L13 2.27002C12.696 2.09449 12.3511 2.00208 12 2.00208C11.6489 2.00208 11.304 2.09449 11 2.27002L4 6.27002C3.69626 6.44539 3.44398 6.69754 3.26846 7.00119C3.09294 7.30483 3.00036 7.6493 3 8.00002V16C3.00036 16.3508 3.09294 16.6952 3.26846 16.9989C3.44398 17.3025 3.69626 17.5547 4 17.73L11 21.73C11.304 21.9056 11.6489 21.998 12 21.998C12.3511 21.998 12.696 21.9056 13 21.73L20 17.73C20.3037 17.5547 20.556 17.3025 20.7315 16.9989C20.9071 16.6952 20.9996 16.3508 21 16Z" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.27002 6.95996L12 12.01L20.73 6.95996" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 22.08V12" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>   
                        </div>
                        <div class="flex-grow-1">
                            <div class="font-title-btn text-black-2">Unlimited Projects</div>
                            <p class="mt-4 text-caption-2 text-black-5">No limit projects</p>
                        </div>
                    </a>
                </li>
                <li class="mt-24">
                    <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                        <div class="box-icon w-40 bg-grey-2 radius-12">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88M21 21V19C20.9949 18.1172 20.6979 17.2608 20.1553 16.5644C19.6126 15.868 18.8548 15.3707 18 15.15M13 7C13 9.20914 11.2091 11 9 11C6.79086 11 5 9.20914 5 7C5 4.79086 6.79086 3 9 3C11.2091 3 13 4.79086 13 7ZM3 21V19C3 17.9391 3.42143 16.9217 4.17157 16.1716C4.92172 15.4214 5.93913 15 7 15H11C12.0609 15 13.0783 15.4214 13.8284 16.1716C14.5786 16.9217 15 17.9391 15 19V21H3Z" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>      
                        </div>
                        <div class="flex-grow-1">
                            <div class="font-title-btn text-black-2">Unlimited Members</div>
                            <p class="mt-4 text-caption-2 text-black-5">No limit member invitation</p>
                        </div>
                    </a>
                </li>
                <li class="mt-24">
                    <a href="javascript:void(0);" class="d-flex align-items-center gap-16">
                        <div class="box-icon w-40 bg-grey-2 radius-12">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17 8L12 3L7 8" stroke="#7980FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 3V15" stroke="#7980FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                  
                        </div>
                        <div class="flex-grow-1">
                            <div class="font-title-btn text-black-2">Unlimited file uploads</div>
                            <p class="mt-4 text-caption-2 text-black-5">No limit number of files and size</p>
                        </div>
                    </a>
                </li>
            </ul>
            <ul class="mt-30 pb-32">
                <li class="box-cart-select act-suggest bg-soft-grey radius-12">
                    <label for="cart1" class="flex-grow-1">
                        <div class="d-flex gap-4 font-title-btn">
                            1 Month Plan  <span class="fw-4">/ $ 6.99 only</span>
                        </div>
                        <p class="mt-8 text-caption-2 text-black-5">Billed monthly, Cancel anytime</p>
                    </label>
                    <input type="radio" name="radio" id="cart1" class="radio-check flex-shrink-0">
                </li>
                <li class="mt-16 box-cart-select act-suggest active bg-soft-grey radius-12">
                    <label for="cart2" class="flex-grow-1">
                        <div class="d-flex gap-4 font-title-btn">
                            1 Month Plan  <span class="fw-4">/ $ 6.99 only</span>
                        </div>
                        <p class="mt-8 text-caption-2 text-black-5">Billed monthly, Cancel anytime</p>
                    </label>
                    <input type="radio" name="radio" id="cart2" class="radio-check flex-shrink-0" checked>
                </li>
            </ul>
            <div class="footer-fixed button">
                <a href="javascript:void(0);" class="tf-btn primary" data-bs-dismiss="offcanvas">Start your 14-days trial</a>

            </div>
          
        </div>
    </div>
    <!-- close account -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="closeAccount" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-body">
            <h5>Close Account</h5>
            <p class="body-2 text-black-3 text-center">Dummy content lorem velit qui adipisicing sunt do reprehenderit ad laborum tempor ullamco malinentah exercitation..</p>
            <a href="#" class="mt-24 tf-btn danger" data-bs-dismiss="offcanvas" aria-label="Close">Close Account</a>
            <div class="font-title-btn mt-20 text-black-5 text-center" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</div>
        </div>
    </div>
    <!-- filter profile -->
    <div class="modal fade action-sheet" id="filterProfile">
        <div class="modal-dialog" role="document">
            <ul class="modal-boxContent bg-white radius-8">
                <li>
                    <a href="javascript:void(0);"  class="d-flex fw-7 justify-content-center p-16">Show Profile Picture</a>
                </li>
                <li>
                    <a href="javascript:void(0);"  class="line-top d-flex fw-7 justify-content-center p-16">New Photo Shoot</a>
                </li>
                <li>
                    <a href="javascript:void(0);"  class="line-top d-flex fw-7 justify-content-center p-16">Select Photo Form Device</a>
                </li>
                <li>
                    <a href="javascript:void(0);"  class="line-top d-flex fw-7 justify-content-center p-16">Choose An Existing Avatar</a>
                </li>
  
            </ul>
            <a href="javascript:void(0);" data-bs-dismiss="modal" class="mt-8 fw-6 text-danger d-flex justify-content-center p-12 bg-white radius-8">Dismiss</a>

        </div>
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
                    <li class="layout-project act-suggest2 active">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.84426 3.04199C7.15926 3.04199 7.41462 3.29735 7.41462 3.61235V6.27403H10.0763C10.3913 6.27403 10.6467 6.5294 10.6467 6.84439C10.6467 7.15938 10.3913 7.41475 10.0763 7.41475H7.41462V10.0764C7.41462 10.3914 7.15926 10.6468 6.84426 10.6468C6.52927 10.6468 6.27391 10.3914 6.27391 10.0764V7.41475H3.61223C3.29723 7.41475 3.04187 7.15938 3.04187 6.84439C3.04187 6.5294 3.29723 6.27403 3.61223 6.27403H6.27391V3.61235C6.27391 3.29735 6.52927 3.04199 6.84426 3.04199Z" fill="#31394F"/>
                            <path d="M0 2.47156C0 1.10655 1.10655 0 2.47156 0H11.2171C12.582 0 13.6886 1.10655 13.6886 2.47156V11.2171C13.6886 12.582 12.582 13.6886 11.2171 13.6886H2.47156C1.10655 13.6886 0 12.582 0 11.2171V2.47156ZM2.47156 1.14072C1.73655 1.14072 1.14072 1.73655 1.14072 2.47156V11.2171C1.14072 11.9521 1.73655 12.5479 2.47156 12.5479H11.2171C11.9521 12.5479 12.5479 11.9521 12.5479 11.2171V2.47156C12.5479 1.73655 11.9521 1.14072 11.2171 1.14072H2.47156Z" fill="#31394F"/>
                            </svg>
                            
                        <span class="h9">List</span>                            
                    </li>
                    <li class="layout-project act-suggest2">
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
                            <div class="dropdown-item val-drop act-suggest3 active">
                                <div class="title-visibility title-drop">Public</div>
                            </div>
                            <div class="dropdown-item val-drop act-suggest3">
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


   @endsection