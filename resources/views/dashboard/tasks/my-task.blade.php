

@extends('dashboard.master2')
@section('title','my task ')
@section('content')
        <h5>My Task</h5>
        <div class="right">
            <a href="#" class="icon text-black-6"><i class="icon-search"></i></a>
            <div class="dropdown">
                <span class="icon dropdown-toggle dropdown-backdrop" data-bs-toggle="dropdown" aria-haspopup="true"><i class="icon-more text-black-6"></i></span>
                <div class="dropdown-menu dropdown-setting-task">
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.50016 4.83325H3.00016C2.55814 4.83325 2.13421 5.00885 1.82165 5.32141C1.50909 5.63397 1.3335 6.05789 1.3335 6.49992V13.9999C1.3335 14.4419 1.50909 14.8659 1.82165 15.1784C2.13421 15.491 2.55814 15.6666 3.00016 15.6666H10.5002C10.9422 15.6666 11.3661 15.491 11.6787 15.1784C11.9912 14.8659 12.1668 14.4419 12.1668 13.9999V11.4999" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.5 11.5H8L15.0833 4.41669C15.4149 4.08517 15.6011 3.63553 15.6011 3.16669C15.6011 2.69785 15.4149 2.24821 15.0833 1.91669C14.7518 1.58517 14.3022 1.39893 13.8333 1.39893C13.3645 1.39893 12.9149 1.58517 12.5833 1.91669L5.5 9.00003V11.5Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.3335 3.16675L13.8335 5.66675" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Edit Section Name
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.9">
                            <path d="M15.0003 6.66675H8.33366C7.41318 6.66675 6.66699 7.41294 6.66699 8.33341V15.0001C6.66699 15.9206 7.41318 16.6667 8.33366 16.6667H15.0003C15.9208 16.6667 16.667 15.9206 16.667 15.0001V8.33341C16.667 7.41294 15.9208 6.66675 15.0003 6.66675Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.3335 6.66659V4.99992C13.3335 4.55789 13.1579 4.13397 12.8453 3.82141C12.5328 3.50885 12.1089 3.33325 11.6668 3.33325H5.00016C4.55814 3.33325 4.13421 3.50885 3.82165 3.82141C3.50909 4.13397 3.3335 4.55789 3.3335 4.99992V11.6666C3.3335 12.1086 3.50909 12.5325 3.82165 12.8451C4.13421 13.1577 4.55814 13.3333 5.00016 13.3333H6.66683" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        Duplicate task  
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.9">
                            <path d="M8.3335 10.8332C8.69137 11.3117 9.14796 11.7075 9.67229 11.994C10.1966 12.2805 10.7764 12.4508 11.3724 12.4935C11.9683 12.5362 12.5665 12.4502 13.1263 12.2414C13.6861 12.0326 14.1944 11.7058 14.6168 11.2832L17.1168 8.78322C17.8758 7.99738 18.2958 6.94487 18.2863 5.85238C18.2768 4.7599 17.8386 3.71485 17.0661 2.94231C16.2935 2.16978 15.2485 1.73157 14.156 1.72208C13.0635 1.71259 12.011 2.13256 11.2252 2.89156L9.79183 4.31656" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.6668 9.16653C11.309 8.68809 10.8524 8.29221 10.328 8.00575C9.80371 7.71928 9.22391 7.54893 8.62796 7.50625C8.032 7.46357 7.43384 7.54956 6.87404 7.75838C6.31425 7.9672 5.8059 8.29397 5.3835 8.71653L2.8835 11.2165C2.12451 12.0024 1.70453 13.0549 1.71402 14.1474C1.72352 15.2399 2.16172 16.2849 2.93426 17.0574C3.70679 17.83 4.75184 18.2682 5.84433 18.2777C6.93681 18.2872 7.98932 17.8672 8.77517 17.1082L10.2002 15.6832" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                         Copy link to task
                    </a>
                    <a class="dropdown-item" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.9">
                            <path d="M10 17.5C14.1421 17.5 17.5 14.1421 17.5 10C17.5 5.85786 14.1421 2.5 10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 14.1421 5.85786 17.5 10 17.5Z" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 9.99992L9.16667 11.6666L12.5 8.33325" stroke="#31394F" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                        Complete subtask
                    </a>
                    <a class="dropdown-item text-danger" href="javascript:void(0);">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 5H4.16667H17.5" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.6665 5.00008V3.33341C6.6665 2.89139 6.8421 2.46746 7.15466 2.1549C7.46722 1.84234 7.89114 1.66675 8.33317 1.66675H11.6665C12.1085 1.66675 12.5325 1.84234 12.845 2.1549C13.1576 2.46746 13.3332 2.89139 13.3332 3.33341V5.00008M15.8332 5.00008V16.6667C15.8332 17.1088 15.6576 17.5327 15.345 17.8453C15.0325 18.1578 14.6085 18.3334 14.1665 18.3334H5.83317C5.39114 18.3334 4.96722 18.1578 4.65466 17.8453C4.3421 17.5327 4.1665 17.1088 4.1665 16.6667V5.00008H15.8332Z" stroke="#F05A5A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Delete section
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="mt-24">
                <div class="tab-slide wrapper-tab-task">
                    <ul class="nav nav-tabs task-tab" role="tablist" >
                        <li class="item-slide-effect"></li>
                        <li class="nav-item active" role="presentation">   
                            <button class="nav-link active"  data-bs-toggle="tab" data-bs-target="#allTask">All Tasks</button>
                        </li>
                        <li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" data-bs-target="#progress">In Progress</button>
						</li>
                        <li class="nav-item" role="presentation">
							<button class="nav-link" data-bs-toggle="tab" data-bs-target="#completed">Completed</button>
						</li>
                        
                    </ul>
                </div>
                <div class="tab-content">
					<div class="tab-pane fade active show" id="allTask" role="tabpanel">
						<div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-28">
                                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Today Tasks</h6>
                                        <span class="num-task type-1">3</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                    
                                </div>
                              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task1" class="radio-check success" checked>
                                        <label for="task1" class="content-task">
                                            <div class="font-title-btn text-black-2">Define Problem with Client</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 12:30 PM - 02:00 PM</p>
                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task2" class="radio-check success">
                                        <label for="task2" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Wireframe and User Flow</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task3" class="radio-check success">
                                        <label for="task3" class="content-task">
                                            <div class="font-title-btn text-black-2">Project set up & Brief</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 04:30 PM - 06:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="accordion-item mt-28">
                                <div class="pb-20 accordion-button header-task" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Next Tasks</h6>
                                        <span class="num-task type-2">9</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                                </div>
                              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task4" class="radio-check success">
                                        <label for="task4" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual Low Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Monday, 12:00 PM - 02:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task5" class="radio-check success">
                                        <label for="task5" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual High Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                           
                        </div>
					</div>
					<div class="tab-pane fade" id="progress" role="tabpanel">
						<div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-28">
                                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true" aria-controls="panelsStayOpen-collapseThree">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Today Tasks</h6>
                                        <span class="num-task type-1">3</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                    
                                </div>
                              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThee">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task6" class="radio-check success" checked>
                                        <label for="task6" class="content-task">
                                            <div class="font-title-btn text-black-2">Define Problem with Client</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 12:30 PM - 02:00 PM</p>
                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task7" class="radio-check success">
                                        <label for="task7" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Wireframe and User Flow</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task8" class="radio-check success">
                                        <label for="task8" class="content-task">
                                            <div class="font-title-btn text-black-2">Project set up & Brief</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 04:30 PM - 06:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="accordion-item mt-28">
                                <div class="pb-20 accordion-button header-task" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Next Tasks</h6>
                                        <span class="num-task type-2">9</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                                </div>
                              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFour">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task9" class="radio-check success">
                                        <label for="task9" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual Low Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Monday, 12:00 PM - 02:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task10" class="radio-check success">
                                        <label for="task10" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual High Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                           
                        </div>
					</div>
                    <div class="tab-pane fade" id="completed" role="tabpanel">
						<div class="accordion wrap-task-accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item mt-28">
                                <div class="pb-20 header-task accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="true" aria-controls="panelsStayOpen-collapseFive">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Today Tasks</h6>
                                        <span class="num-task type-1">3</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                    
                                </div>
                              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingFive">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task11" class="radio-check success" checked>
                                        <label for="task11" class="content-task">
                                            <div class="font-title-btn text-black-2">Define Problem with Client</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 12:30 PM - 02:00 PM</p>
                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task12" class="radio-check success">
                                        <label for="task12" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Wireframe and User Flow</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task13" class="radio-check success">
                                        <label for="task13" class="content-task">
                                            <div class="font-title-btn text-black-2">Project set up & Brief</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 04:30 PM - 06:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="accordion-item mt-28">
                                <div class="pb-20 accordion-button header-task" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                    <div class="title-task">
                                        <h6 class="text-black-2">Next Tasks</h6>
                                        <span class="num-task type-2">9</span>
                                    </div>
                                    <span class="icon-more text-black-5"></span>
                                </div>
                              <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingSix">
                                <ul>
                                    <li class="list-task-item">
                                        <input type="checkbox" id="task14" class="radio-check success">
                                        <label for="task14" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual Low Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Monday, 12:00 PM - 02:00 PM</p>

                                        </label>
                                    </li>
                                    <li class="list-task-item mt-12">
                                        <input type="checkbox" id="task15" class="radio-check success">
                                        <label for="task15" class="content-task">
                                            <div class="font-title-btn text-black-2">Create Visual High Fidelity</div>
                                            <p class="mt-10 body-4 text-black-5 fw-5">Saturday, 02:30 PM - 04:00 PM</p>

                                        </label>
                                    </li>
                                </ul>
                              </div>
                            </div>
                           
                        </div>
					</div>
				</div>
            </div>
        </div>
    </div>

 @endsection