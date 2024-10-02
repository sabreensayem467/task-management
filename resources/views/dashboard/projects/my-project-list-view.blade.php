@extends('dashboard.master2')
@section('title','my project')
@section('content')

        <h5>My Projects</h5>
        <div class="right">
            <a href="#" class="icon text-black-6"><i class="icon-search"></i></a>
            <a href="#" class="icon text-black-6"><i class="icon-more"></i></a>
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
                        <option>List</option>
                        <option>Board</option>

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
            <div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item mt-24">
                    <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <div class="title-task">
                            <h6 class="text-black-2">Backlog</h6>
                            <span class="num-task type-2">3</span>
                        </div>
                        <span class="icon-more text-black-5"></span>
        
                    </div>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="box-assign list-view-task">
                            <div class="h9 left text-black-5">Task Name</div>
                            <div class="h9 right text-black-5">Assign to</div>

                        </div>
                        <ul class="mt-20 box-view-task">
                            <li>
                                <a href="project-details.html" class="list-view-task line-bt2">
                                    <div class="font-title-btn text-black-2 left">Define Problem with Client</div>
                                    <ul class="list-stacked right">
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt6.jpg" alt="img">
                                            </div>
                                        </li>
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt7.jpg" alt="img">
                                            </div>
                                        </li>
                                        
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round member type-1">
                                                3+
                                            </div> 
                                        </li>
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="project-details.html" class="list-view-task line-bt2">
                                    <div class="font-title-btn text-black-2 left">Create Wireframe & User Flow</div>
                                    <ul class="list-stacked right">
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt6.jpg" alt="img">
                                            </div>
                                        </li>
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt7.jpg" alt="img">
                                            </div>
                                        </li>
                                       
                                    </ul>
                                </a>
                            </li>
                            <li>
                                <a href="project-details.html" class="list-view-task line-bt2">
                                    <div class="font-title-btn text-black-2 left">Visual High Fidelity</div>
                                    <ul class="list-stacked right">
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt6.jpg" alt="img">
                                            </div>
                                        </li>
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt7.jpg" alt="img">
                                            </div>
                                        </li>
                                        
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round member type-2">
                                                AR
                                            </div> 
                                        </li>
                                    </ul>
                                </a>
                            </li>
                        </ul>
                  </div>
                </div>
                <div class="accordion-item mt-32">
                    <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                        <div class="title-task">
                            <h6 class="text-black-2">To Do</h6>
                            <span class="num-task type-1">2</span>
                        </div>
                        <span class="icon-more text-black-5"></span>
        
                    </div>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="box-assign list-view-task">
                            <div class="h9 left text-black-5">Task Name</div>
                            <div class="h9 right text-black-5">Assign to</div>

                        </div>
                        <ul class="mt-20 box-view-task">
                            <li>
                                <a href="project-details.html" class="list-view-task line-bt2">
                                    <div class="font-title-btn text-black-2 left">Brainstorming</div>
                                    <ul class="list-stacked right">
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt6.jpg" alt="img">
                                            </div>
                                        </li>
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt7.jpg" alt="img">
                                            </div>
                                        </li>
                                        
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round member type-3">
                                                3+
                                            </div> 
                                        </li>
                                    </ul>
                                </a>
                            </li>   
                        </ul>
                    </div>
                </div>
                <div class="accordion-item mt-32">
                    <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                        <div class="title-task">
                            <h6 class="text-black-2">Completed</h6>
                            <span class="num-task type-3">1</span>
                        </div>
                        <span class="icon-more text-black-5"></span>
        
                    </div>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="box-assign list-view-task">
                            <div class="h9 left text-black-5">Task Name</div>
                            <div class="h9 right text-black-5">Assign to</div>

                        </div>
                        <ul class="mt-20 box-view-task">
                            <li>
                                <a href="project-details.html" class="list-view-task line-bt2">
                                    <div class="font-title-btn text-black-2 left">Define Problem with Client</div>
                                    <ul class="list-stacked right">
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt6.jpg" alt="img">
                                            </div>
                                        </li>
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round">
                                                <img src="images/avt/avt7.jpg" alt="img">
                                            </div>
                                        </li>
                                        
                                        <li class="avt-list">
                                            <div class="avatar avt-24 round member type-1">
                                                3+
                                            </div> 
                                        </li>
                                    </ul>
                                </a>
                            </li>   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
   