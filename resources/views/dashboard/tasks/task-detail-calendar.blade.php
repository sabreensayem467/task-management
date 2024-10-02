@extends('dashboard.master2')
@section('title','Schedule')
@section('content')

        <h5>Schedule</h5>
        <div class="right">
            <a href="#" class="icon text-black-6"><i class="icon-search"></i></a>
        </div>
    </div>
    <div class="app-content">
        <div class="tf-container">
            <div class="mt-24 d-flex justify-content-between align-items-center">
                <a href="#" class="box-filter select-wrapper style-3">
                    <select class="tf-select">
                        <option>All Projects</option>
                        <option>Board</option>

                    </select>
                </a>
                <a href="#" class="box-filter type-1">
                    <span class="icon">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.6">
                                <path d="M12 8H4" stroke="#31394F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14 4H2" stroke="#31394F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M9.26921 12H6.60254" stroke="#31394F" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                        </svg>
                    </span>
                    Filter
                </a>
            </div>
            <div id='calendar' class="mt-28"></div>
            <ul class="mt-32 box-view-task">
                <li>
                    <div class="list-view-task style-2 line-bt2">
                        <input type="checkbox" id="task1" class="radio-check success" checked>
                        <label for="task1" class="content-task">
                            <div class="font-title-btn text-black-2 left">Define Problem with Client</div>
                            <ul class="list-stacked right">
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt3.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt4.jpg" alt="img">
                                    </div>
                                </li>

                                <li class="avt-list">
                                    <div class="avatar avt-24 round member type-1">
                                        3+
                                    </div>
                                </li>
                            </ul>
                        </label>

                    </div>
                </li>
                <li>
                    <div class="list-view-task style-2 line-bt2">
                        <input type="checkbox" id="task2" class="radio-check success" checked>
                        <label for="task2" class="content-task">
                            <div class="font-title-btn text-black-2 left">Create Wireframe</div>
                            <ul class="list-stacked right">
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt3.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt5.jpg" alt="img">
                                    </div>
                                </li>
                            </ul>
                        </label>

                    </div>
                </li>
                <li>
                    <div class="list-view-task style-2 line-bt2">
                        <input type="checkbox" id="task3" class="radio-check success" checked>
                        <label for="task3" class="content-task">
                            <div class="font-title-btn text-black-2 left">Login & Signup Module</div>
                            <ul class="list-stacked right">
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt10.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt9.jpg" alt="img">
                                    </div>
                                </li>

                                <li class="avt-list">
                                    <div class="avatar avt-24 round member type-3">
                                        2+
                                    </div>
                                </li>
                            </ul>
                        </label>

                    </div>
                </li>
                <li>
                    <div class="list-view-task style-2 line-bt2">
                        <input type="checkbox" id="task4" class="radio-check success">
                        <label for="task4" class="content-task">
                            <div class="font-title-btn text-black-2 left">Create Visual High Fidelity</div>
                            <ul class="list-stacked right">
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt3.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt12.jpg" alt="img">
                                    </div>
                                </li>
                                <li class="avt-list">
                                    <div class="avatar avt-24 round">
                                        <img src="images/avt/avt5.jpg" alt="img">
                                    </div>
                                </li>
                                
                            </ul>
                        </label>

                    </div>
                </li>
            </ul>
        </div>
    </div>

   @endsection
                    
<html>
    <body>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                selectable: true,
                firstDay: 1,
                dateClick: function (info) {
                    this.select(info.dateStr);
                }
            });
            calendar.render();
        });

    </script>
</body>


<!-- Mirrored from themesflat.co/html/taskose/taskose/task-detail-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:17 GMT -->
</html>