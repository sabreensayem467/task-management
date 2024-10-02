@extends('dashboard.layout')
@section('title','EMPTY INBOX')
@section('content')

        <h5>Inbox</h5>
        <div class="right">
            <a href="#sidebarInbox" class="icon" data-bs-toggle="offcanvas" aria-controls="offcanvasRight">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.5">
                    <path d="M2.5 10H17.5" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 5H17.5" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 15H17.5" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </a>
           
        </div>  
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="box-empty-inbox">
                <img src="images/background/empty-task2.jpg" alt="empty-notification">
                <div class="mt-40">
                    <h5 class="text-black-2 text-center">You haven’t any message</h5>
                    <p class="mt-12 text-black-5 text-center px-4 body-2">Let us notify you and show the messages here for better communication.</p>
                </div>
                <a href="chat-contact.html" class="tf-btn primary">Start New Discussion</a>
            </div>
            
        </div>
    </div> 
    
    <div class="menubar-footer footer-fixed">
        <ul class="inner-bar">
            <li class="active">
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
            <li class="action-add-task"><a href="message.html"><i class="icon-add"></i></a></li>
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

    <div class="offcanvas offcanvas-end" id="sidebarInbox">
        <div class="offcanvas-header">
            <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
          </div> 
        <div class="content-sidebarRight pb-40">
            <ul>
                <li><a href="javascript:void(0);" class="menu-navlink-item active">
                    <span class="icon icon-inbox"></span>
                    <div class="font-title-btn flex-grow-1 title">Inbox</div>
                    <span class="num-inbox">01</span>
                </a></li>
                <li class="mt-5"><a href="javascript:void(0);" class="menu-navlink-item">
                    <span class="icon icon-star"></span>
                    <div class="font-title-btn flex-grow-1 title">Starred</div>
                </a></li>
                <li class="mt-5"><a href="message.html" class="menu-navlink-item">
                    <span class="icon icon-send"></span>
                    <div class="font-title-btn flex-grow-1 title">Sent</div>
                </a></li>
                <li class="mt-5"><a href="javascript:void(0);" class="menu-navlink-item">
                    <span class="icon icon-file"></span>
                    <div class="font-title-btn flex-grow-1 title">Draft</div>
                </a></li>
                <li class="mt-5"><a href="javascript:void(0);" class="menu-navlink-item">
                    <span class="icon icon-trash"></span>
                    <div class="font-title-btn flex-grow-1 title">Trash</div>
                </a></li>
            </ul>
            <div class="line-bt2 my-12 mx-20"></div>
            <div class="accordion sidebarRight-accordion">
                <div class="accordion-item">
                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        CATEGORIES
                    </div>
                    <ul id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <li><a href="javascript:void(0);" class="category-nav-item">
                            <span class="dot-danger"></span>
                            <div class="flex-grow-1 body-6 text-black-2">Works</div>
                            <span class="body-4 text-black-5 fw-5">2</span>
                        </a></li>
                        <li><a href="javascript:void(0);" class="category-nav-item">
                            <span class="dot-danger"></span>
                            <div class="flex-grow-1 body-6 text-black-2">Personal</div>
                            <span class="body-4 text-black-5 fw-5">34</span>

                        </a></li>
                        <li><a href="javascript:void(0);" class="category-nav-item">
                            <span class="dot-danger"></span>
                            <div class="flex-grow-1 body-6 text-black-2">Vacation</div>
                            <span class="body-4 text-black-5 fw-5">19</span>
                        </a></li>
                    </ul>
                </div>
            </div>
            <div class="line-bt2 my-12 mx-20"></div>
            <div class="accordion sidebarRight-accordion">
                <div class="accordion-item">
                    <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                        RECENT CHATS
                    </div>
                    <ul id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                        <li><a href="chat-contact.html" class="recent-nav-item style-1">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM12.9743 17V13H16.8974C18.2308 13 18.2308 11 16.8974 11H12.9743V7C12.9743 5.66667 10.9743 5.66667 10.9743 7V11H7.05127C5.71794 11 5.71794 13 7.05127 13H10.9743V17C10.9743 18.3333 12.9743 18.3333 12.9743 17Z" fill="#7980FF"/>
                                </svg>
                            </span>
                            <div class="font-title-btn text-primary flex-grow-1">Start New Chat</div>
                        </a></li>
                        <li><a href="chat-contact.html" class="recent-nav-item">
                            <div class="avatar avt-32">
                                <img src="images/avt/avt9.jpg" alt="avatar">
                            </div>
                            <div class="body-6 text-black-2 flex-grow-1">Beby Jovanca</div>
                            <span class="dot-status"></span>
                        </a></li>
                        <li><a href="chat-contact.html" class="recent-nav-item">
                            <div class="avatar avt-32">
                                <img src="images/avt/avt8.jpg" alt="avatar">
                            </div>
                            <div class="body-6 text-black-2 flex-grow-1">Bambang Sucat</div>
                            <span class="num-inbox">6</span>
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>       
    </div>
    
     
   @endsection