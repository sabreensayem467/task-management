@extends('dashboard.master')
@section('title','chat detail')
@section('content')

    <div class="header-style2 style-2 fixed-top">
        <div class="left gap-8">
            <a href="javascript:void(0);" class="icon back-btn"><i class="icon-back"></i></a>
            <div class="d-flex align-items-center gap-16">
                <div class="avatar avt-48 avt-status">
                    <img src="images/avt/avt4.jpg" alt="avatar">
                    <span class="status"></span>
                </div>
                <div class="content">
                    <div class="font-title-btn text-black-2">Azalea Nirmala</div>
                    <p class="mt-4 text-caption-2 text-black-4">aza@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="right">
            <a href="javascript:void(0);" class="icon"><i class="icon-search"></i></a>
            <a href="#attachments" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom" class="icon"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="mh-full bg-surface">
        <div class="tf-container py-90">
            <div class="chat-area py-24">
                <div class="bubble bubble-me box-buble-me">
                    <div class="content">
                        <span class="time">08:50 AM</span>
                        <p class="start">Halo, bro</p>
                        <p class="end mt-2">kepriwe kie rawone ra mudun-mudun</p>
                    </div>    
                </div>
                <div class="bubble bubble-you">
                    <div class="content">
                        <span class="time">08:01 AM</span>
                        <p>hooh kie selak kaliren weteng inyong...</p>
                    </div>
                </div>
                <div class="bubble bubble-me box-buble-me">
                    <div class="content">
                        <span class="time">08:50 AM</span>
                        <p class="start">opo tak tuku bae</p>
                        <p class="middle mt-2">karuane inyong metu nyang pasar bae</p>
                        <p class="end mt-2">Njaluk duwite yoo</p>
                    </div>    
                </div>
                <div class="bubble bubble-you">
                    <div class="content">
                        <span class="time">08:01 AM</span>
                        <p>peeh ra modal koen cuk</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-chat bg-white">
        <div class="message-box">
            <div class="box-left">
                <a href="#attachments" data-bs-toggle="offcanvas" aria-controls="offcanvasBottom">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M19 9.77778V15.3333C19 17.1014 18.2625 18.7971 16.9497 20.0474C15.637 21.2976 13.8565 22 12 22C10.1435 22 8.36301 21.2976 7.05025 20.0474C5.7375 18.7971 5 17.1014 5 15.3333V6.44444C5 5.2657 5.49167 4.13524 6.36683 3.30175C7.242 2.46825 8.42899 2 9.66667 2V2C10.9043 2 12.0913 2.46825 12.9665 3.30175C13.8417 4.13524 14.3333 5.2657 14.3333 6.44444V15.3333C14.3333 15.9227 14.0875 16.4879 13.6499 16.9047C13.2123 17.3214 12.6188 17.5556 12 17.5556C11.3812 17.5556 10.7877 17.3214 10.3501 16.9047C9.9125 16.4879 9.66667 15.9227 9.66667 15.3333V6.44444" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>        
                </a>
                <a href="javascript:void(0);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <circle cx="12" cy="12" r="10" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M9 11C9 10.4477 8.55228 10 8 10C7.44772 10 7 10.4477 7 11" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M15 15C15 16.1046 13.6569 17 12 17C10.3431 17 9 16.1046 9 15" stroke="#31394F" stroke-width="1.5"/>
                        <path d="M17 11C17 10.4477 16.5523 10 16 10C15.4477 10 15 10.4477 15 11" stroke="#31394F" stroke-width="1.5"/>
                        </g>
                    </svg>          
                </a>
            </div>
            <input type="text" class="val-message" placeholder="Type message...">
            <a href="javascript:void(0);" class="btn-message">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1024_2974)">
                    <path d="M20.1666 1.83337L13.7499 20.1667L10.0833 11.9167L1.83325 8.25004L20.1666 1.83337Z" fill="#7980FF" stroke="#7980FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_1024_2974">
                    <rect width="22" height="22" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>  
            </a>
        </div>
        
            
            
           
            
    </div>

    <!-- Attachments -->
    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="attachments" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasBottomLabel">Attachments</h5>
          <span class="icon-close2 icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        </div>
        <div class="line-bt2 mx-20"></div>

        <div class="offcanvas-body pb-30">
            <div class="mt-20 pb-24 line-bt2">
                <div class="body-3 fw-5 text-black-4">LATEST PHOTOS</div>
                <div class="mt-16 d-flex gap-14">
                    <a href="javascript:void(0);" class="img-latest-chat">
                        <img src="images/project/latest1.jpg" alt="img-latest">
                    </a>
                    <a href="javascript:void(0);" class="img-latest-chat">
                        <img src="images/project/latest2.jpg" alt="img-latest">
                    </a>
                    <a href="javascript:void(0);" class="img-latest-chat">
                        <img src="images/project/latest3.jpg" alt="img-latest">
                    </a>

                </div>
            </div>
            <div class="mt-20">
                <div class="body-3 fw-5 text-black-4">OTHER FILES</div>
                <ul class="mt-15">
                    <li>
                        <a href="javascript:void(0);" class="wd-file-message">
                            <div class="box-icon w-36 type-1">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.7501 2.50049H5.50041C5.10261 2.50049 4.72109 2.65852 4.4398 2.9398C4.15852 3.22109 4.00049 3.60261 4.00049 4.00041V15.9998C4.00049 16.3976 4.15852 16.7791 4.4398 17.0604C4.72109 17.3417 5.10261 17.4997 5.50041 17.4997H14.4999C14.8977 17.4997 15.2792 17.3417 15.5605 17.0604C15.8418 16.7791 15.9999 16.3976 15.9999 15.9998V7.75021L10.7501 2.50049Z" stroke="#31394F" stroke-width="1.34993" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.7501 2.50049V7.75021H15.9998" stroke="#31394F" stroke-width="1.34993" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>   
                            </div>
                            <div class="body-4 text-black-2 fw-5 flex-grow-1">Project Brief v1.docx</div>
                            <span class="body-4 text-black-5 fw-5">132.5 KB</span>
                        </a>
                    </li>
                    <li class="mt-12">
                        <a href="javascript:void(0);" class="wd-file-message">
                            <div class="box-icon w-36 type-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6463 1.66687C11.6821 1.66687 11.7172 1.66988 11.7513 1.67567L11.8654 1.67637C12.0354 1.67637 12.1979 1.74554 12.3162 1.86804L16.5371 6.26554C16.6487 6.38137 16.7113 6.5372 16.7113 6.69804V14.3364C16.7262 16.4272 15.0979 18.1355 13.0037 18.2205L6.32122 18.2214H6.23039C4.18877 18.1752 2.55136 16.5241 2.50147 14.5024L2.50122 5.40887C2.54955 3.34137 4.25705 1.67637 6.30955 1.67637L11.5413 1.67567C11.5754 1.66988 11.6105 1.66687 11.6463 1.66687ZM11.0212 2.92604L6.31122 2.92637C4.93039 2.92637 3.78372 4.0447 3.75122 5.42387V14.3364C3.72039 15.7639 4.84539 16.9397 6.25872 16.9714H12.9787C14.3696 16.9139 15.4712 15.758 15.4613 14.3414L15.4612 7.48604L13.7863 7.48687C12.2613 7.4827 11.0213 6.23937 11.0213 4.71604L11.0212 2.92604ZM11.4906 12.1736C11.8356 12.1736 12.1156 12.4536 12.1156 12.7986C12.1156 13.1436 11.8356 13.4236 11.4906 13.4236H6.99064C6.64564 13.4236 6.36564 13.1436 6.36564 12.7986C6.36564 12.4536 6.64564 12.1736 6.99064 12.1736H11.4906ZM9.78655 9.04695C10.1316 9.04695 10.4116 9.32695 10.4116 9.67195C10.4116 10.017 10.1316 10.297 9.78655 10.297H6.98989C6.64489 10.297 6.36489 10.017 6.36489 9.67195C6.36489 9.32695 6.64489 9.04695 6.98989 9.04695H9.78655ZM12.2712 3.62687L12.2713 4.71604C12.2713 5.5527 12.9521 6.23437 13.788 6.23687L14.7762 6.23604L12.2712 3.62687Z" fill="#31394F"/>
                                </svg>                                   
                            </div>
                            <div class="body-4 text-black-2 fw-5 flex-grow-1">32 Excel Sheets</div>
                            <span class="body-4 text-black-5 fw-5">12.5 MB</span>
                        </a>
                    </li>
                    <li class="mt-12">
                        <a href="javascript:void(0);" class="wd-file-message">
                            <div class="box-icon w-36 type-4">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6465 1.66687C11.6823 1.66687 11.7175 1.6699 11.7517 1.67571L11.8643 1.67637C12.0343 1.67637 12.1968 1.74554 12.3151 1.86804L16.5368 6.26554C16.6476 6.38137 16.7102 6.5372 16.7102 6.69804V14.3564C16.7235 16.4472 15.0935 18.1464 12.9993 18.2214H6.21598C4.18245 18.1777 2.55156 16.5344 2.50128 14.5216L2.50098 5.40887C2.55014 3.34137 4.25681 1.67637 6.30848 1.67637L11.5412 1.67571C11.5755 1.6699 11.6106 1.66687 11.6465 1.66687ZM11.021 2.92604L6.31098 2.92637C4.93014 2.92637 3.78348 4.0447 3.75098 5.42387V14.3564C3.72098 15.7739 4.83764 16.9405 6.24181 16.9714H12.9776C14.3685 16.9214 15.4693 15.7739 15.4602 14.3605L15.4601 7.48604L13.7865 7.48687C12.2606 7.4827 11.0215 6.23937 11.0215 4.71604L11.021 2.92604ZM9.28548 7.63262C9.63048 7.63262 9.91048 7.91262 9.91048 8.25762L9.91014 11.776L10.7955 10.8876C11.0388 10.6426 11.4346 10.6426 11.6796 10.886C11.9238 11.1293 11.9246 11.5251 11.6813 11.7701L9.7488 13.7111C9.69978 13.7652 9.64143 13.8107 9.57628 13.8451C9.57047 13.8469 9.56521 13.8496 9.55991 13.8522C9.53567 13.8653 9.51004 13.8759 9.48362 13.8847C9.48104 13.8844 9.47852 13.8852 9.47599 13.886C9.41599 13.9064 9.35194 13.9168 9.28548 13.9168C9.22087 13.9168 9.15854 13.907 9.0999 13.8887C9.09068 13.8852 9.08086 13.882 9.07113 13.8784C9.05293 13.8724 9.03549 13.865 9.01847 13.857C9.0083 13.8517 8.99828 13.8467 8.9884 13.8414C8.96865 13.831 8.94929 13.8191 8.93066 13.8063C8.9243 13.8017 8.91799 13.7971 8.91176 13.7925C8.88493 13.7726 8.85981 13.7505 8.83659 13.7265L6.88798 11.7701C6.64464 11.5251 6.64548 11.1293 6.88964 10.886C7.13464 10.6426 7.53048 10.6426 7.77381 10.8876L8.66014 11.7777L8.66048 8.25762C8.66048 7.91262 8.94048 7.63262 9.28548 7.63262ZM12.271 3.62687L12.2715 4.71604C12.2715 5.5527 12.9515 6.23437 13.7881 6.23687L14.7751 6.23604L12.271 3.62687Z" fill="#31394F"/>
                                </svg>
                                                                      
                            </div>
                            <div class="body-4 text-black-2 fw-5 flex-grow-1">60 PDF presentations</div>
                            <span class="body-4 text-black-5 fw-5">28.5 MB</span>
                        </a>
                    </li>
                    <li class="mt-12">
                        <a href="javascript:void(0);" class="wd-file-message">
                            <div class="box-icon w-36 type-3">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.6649 5.9134C17.5785 5.56828 17.4026 5.25206 17.1549 4.99669C16.9072 4.74132 16.5965 4.55584 16.2541 4.45899C15.0033 4.15356 10.0002 4.15356 10.0002 4.15356C10.0002 4.15356 4.99699 4.15356 3.7462 4.48808C3.40386 4.58493 3.09315 4.77041 2.84544 5.02578C2.59773 5.28115 2.4218 5.59737 2.33542 5.94249C2.1065 7.21187 1.99453 8.49957 2.0009 9.78941C1.99274 11.089 2.10473 12.3865 2.33542 13.6654C2.43065 13.9998 2.61053 14.304 2.85766 14.5486C3.10479 14.7932 3.41082 14.9699 3.7462 15.0616C4.99699 15.3962 10.0002 15.3962 10.0002 15.3962C10.0002 15.3962 15.0033 15.3962 16.2541 15.0616C16.5965 14.9648 16.9072 14.7793 17.1549 14.5239C17.4026 14.2686 17.5785 13.9524 17.6649 13.6072C17.8921 12.3474 18.004 11.0695 17.9994 9.78941C18.0076 8.48986 17.8956 7.19234 17.6649 5.9134V5.9134Z" stroke="#31394F" stroke-width="1.30897" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.36377 12.1674L12.5452 9.78946L8.36377 7.4115V12.1674Z" stroke="#31394F" stroke-width="1.30897" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg> 
                            </div>
                            <div class="body-4 text-black-2 fw-5 flex-grow-1">Explanation Video.mp4</div>
                            <span class="body-4 text-black-5 fw-5">80 MB</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            
          
        </div>
    </div>
    
    @endsection