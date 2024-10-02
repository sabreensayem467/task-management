@extends('dashboard.master2')
@section('title','create new task')
@section('content')
   
        <h5>Create New Subtask</h5>
        <div class="right">
            <a href="{{asset('javascript:void(0);')}}" class="icon act-suggest"><i class="icon-check"></i></a>
            <a href="{{asset('javascript:void(0);')}}" class="icon"><i class="icon-more"></i></a>
        </div>
    </div>
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mt-24">
                <h6 class="text-black-2">Task Name</h6>
                <input type="text" placeholder="Wireframe for NFT Landing Page" class="mt-16" name="name_task">
            </div>
            <div class="mt-20">
                <h6 class="text-black-2">Timeline</h6>
                <div class="d-flex justify-content-between mt-16">
                    <div class="dropdown" >
                        <div class="timeline-item-date gap-12 dropdown-backdrop dropdown-start-date" data-bs-toggle="dropdown" aria-haspopup="true">
                            <div class="box-icon w-40 rounded-50">
                                <i class="icon icon-calendar"></i>
                            </div>
                            <div class="content">
                                <p class="text-caption-2 text-black-5">Start Date</p>
                                <div class="mt-2 body-4 fw-5 text-black-7 valDate-start">December 25</div>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-calendar">
                            <div id='calendar-start'></div>
                            <span id="btnCloseDropdown1" class="btn-close-drop"><i class="icon-close2"></i></span>
                            
                        </div>
                    </div>
                    <div class="dropdown">
                        <div class="timeline-item-date gap-12 dropdown-backdrop dropdown-due-date" data-bs-toggle="dropdown" aria-haspopup="true">
                            <div class="box-icon w-40 rounded-50">
                                <i class="icon icon-calendar"></i>
                            </div>
                            <div class="content">
                                <p class="text-caption-2 text-black-5">Due Date</p>
                                <div class="mt-2 body-4 fw-5 text-black-7 valDate-due">December 31</div>
                            </div>
                        </div>
                        <div class="dropdown-menu dropdown-calendar">
                            <div id='calendar-due'></div>
                            <span id="btnCloseDropdown2" class="btn-close-drop st2"><i class="icon-close2"></i></span>
                            
                        </div>
                    </div>
                    
                </div>

            </div>
            <div class="mt-24 list-desc-project-style2">
                <h6 class="left text-black-2">Description </h6>
                <div class="right h9 text-black-5">
                    <input type="text" placeholder="Add task description">
                </div>
            </div>
            <div class="mt-20 list-desc-project-style2">
                <h6 class="left text-black-2">Task Status </h6>
                <ul class="right d-flex gap-8">
                    <li>
                        <a href="javascript:void(0);" class="task-status style-2 type-1">To Do</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="task-status style-2 type-2">Ongoing</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="task-status style-2 type-3">Backlog</a>
                    </li>
                </ul>
            </div>
            <a href="add-tag.html" class="mt-20 d-flex align-items-center gap-8 h9 text-primary">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9572 0.666748C13.3752 0.666748 14.9998 2.36408 14.9998 4.89008V10.7767C14.9998 13.3027 13.3752 15.0001 10.9572 15.0001H4.70917C2.29117 15.0001 0.666504 13.3027 0.666504 10.7767V4.89008C0.666504 2.36408 2.29117 0.666748 4.70917 0.666748H10.9572ZM10.9572 1.66675H4.70917C2.86117 1.66675 1.6665 2.93141 1.6665 4.89008V10.7767C1.6665 12.7354 2.86117 14.0001 4.70917 14.0001H10.9572C12.8058 14.0001 13.9998 12.7354 13.9998 10.7767V4.89008C13.9998 2.93141 12.8058 1.66675 10.9572 1.66675ZM7.83317 4.88495C8.10917 4.88495 8.33317 5.10895 8.33317 5.38495V7.32675L10.2775 7.32688C10.5535 7.32688 10.7775 7.55088 10.7775 7.82688C10.7775 8.10288 10.5535 8.32688 10.2775 8.32688L8.33317 8.32675V10.2696C8.33317 10.5456 8.10917 10.7696 7.83317 10.7696C7.55717 10.7696 7.33317 10.5456 7.33317 10.2696V8.32675L5.38884 8.32688C5.11217 8.32688 4.88884 8.10288 4.88884 7.82688C4.88884 7.55088 5.11217 7.32688 5.38884 7.32688L7.33317 7.32675V5.38495C7.33317 5.10895 7.55717 4.88495 7.83317 4.88495Z" fill="#7980FF"/>
                </svg>
                    
                Subtask
            </a>
            <div class="mt-40">
                <div class="enter-task">
                    <ul class="box-left">
                        <li><a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 8H15.01" stroke="#31394F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17 4H7C5.34315 4 4 5.34315 4 7V17C4 18.6569 5.34315 20 7 20H17C18.6569 20 20 18.6569 20 17V7C20 5.34315 18.6569 4 17 4Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4 15L8 11C8.45606 10.5611 8.97339 10.3301 9.5 10.3301C10.0266 10.3301 10.5439 10.5611 11 11L16 16" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 14L15 13C15.4561 12.5611 15.9734 12.3301 16.5 12.3301C17.0266 12.3301 17.5439 12.5611 18 13L20 15" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                
                        </a></li>
                        <li><a href="javascript:void(0);">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.1665 11.9167C9.56017 12.443 10.0624 12.8785 10.6392 13.1936C11.2159 13.5087 11.8537 13.6961 12.5093 13.743C13.1648 13.79 13.8228 13.6954 14.4386 13.4657C15.0543 13.236 15.6135 12.8765 16.0782 12.4117L18.8282 9.66172C19.6631 8.79729 20.125 7.63953 20.1146 6.43779C20.1042 5.23606 19.6221 4.0865 18.7723 3.23671C17.9226 2.38693 16.773 1.9049 15.5713 1.89446C14.3695 1.88402 13.2118 2.34599 12.3473 3.18088L10.7707 4.74838" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.8335 10.0834C12.4399 9.55709 11.9376 9.12163 11.3608 8.80652C10.7841 8.4914 10.1463 8.30402 9.49075 8.25707C8.83521 8.21012 8.17723 8.30471 7.56145 8.53441C6.94567 8.76411 6.3865 9.12356 5.92185 9.58838L3.17185 12.3384C2.33696 13.2028 1.87498 14.3606 1.88543 15.5623C1.89587 16.764 2.37789 17.9136 3.22768 18.7634C4.07747 19.6132 5.22703 20.0952 6.42876 20.1056C7.6305 20.1161 8.78826 19.6541 9.65268 18.8192L11.2202 17.2517" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                
                        </a></li>
                        <li><a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 5V21" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19 5V14" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 5.00009C5.93464 4.08395 7.19124 3.5708 8.5 3.5708C9.80876 3.5708 11.0654 4.08395 12 5.00009C12.9346 5.91622 14.1912 6.42937 15.5 6.42937C16.8088 6.42937 18.0654 5.91622 19 5.00009" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M5 14.0001C5.93464 13.084 7.19124 12.5708 8.5 12.5708C9.80876 12.5708 11.0654 13.084 12 14.0001C12.9346 14.9162 14.1912 15.4294 15.5 15.4294C16.8088 15.4294 18.0654 14.9162 19 14.0001" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                
                        </a></li>
                        <li><a href="javascript:void(0);">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 20L9 17H7C6.20435 17 5.44129 16.6839 4.87868 16.1213C4.31607 15.5587 4 14.7956 4 14V8C4 7.20435 4.31607 6.44129 4.87868 5.87868C5.44129 5.31607 6.20435 5 7 5H17C17.7956 5 18.5587 5.31607 19.1213 5.87868C19.6839 6.44129 20 7.20435 20 8V14C20 14.7956 19.6839 15.5587 19.1213 16.1213C18.5587 16.6839 17.7956 17 17 17H15L12 20Z" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 9H16" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 13H14" stroke="#31394F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                
                        </a></li>
                    </ul>
                    <!-- <input type="text"> -->
                    <ul class="list-stacked right">
                        <li class="avt-list">
                            <div class="avatar avt-24 round">
                                <img src="images/avt/avt4.jpg" alt="img">
                            </div>
                        </li>
                        <li class="avt-list">
                            <div class="avatar avt-24 round">
                                <img src="images/avt/avt8.jpg" alt="img">
                            </div>
                        </li>
                        
                        <li class="avt-list">
                            <div class="avatar avt-24 round member type-4">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.72443 6.5625V0H3.83807V6.5625H2.72443ZM0 3.83807V2.72443H6.5625V3.83807H0Z" fill="white"/>
                                </svg>
                                    
                            </div> 
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-fixed button">
                <a href="project-details.html" class="tf-btn primary">Done</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{asset('js/fullcalendar.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/calendar-custom.js')}}"></script>
 <script>

        
           





    </script>

@endsection
    
    

   