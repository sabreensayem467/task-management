@extends('dashboard.layout')
@section('title','share task')
@section('content')

        <h5>Share Task</h5>  
    </div> 
    <div class="app-content style-2">
        <div class="tf-container">
            <div class="mt-24 box-ip">
                <input type="text" placeholder="Add people, emails or group">
                <a href="#" class="text-right">Invite</a>
            </div>
            <ul class="mt-26">
                <li class="d-flex justify-content-between align-items-center">
                    <label for="swCheck1" class="d-flex align-items-center gap-16">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.80001 9H24.2M1.80001 17H24.2M12.3333 1C10.0871 4.59948 8.89624 8.75715 8.89624 13C8.89624 17.2428 10.0871 21.4005 12.3333 25M13.6667 1C15.9129 4.59948 17.1037 8.75715 17.1037 13C17.1037 17.2428 15.9129 21.4005 13.6667 25M25 13C25 19.6274 19.6274 25 13 25C6.37258 25 1 19.6274 1 13C1 6.37258 6.37258 1 13 1C19.6274 1 25 6.37258 25 13Z" stroke="#7980FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="content">
                            <div class="font-title-btn">Share to web</div>
                            <p class="mt-4 text-black-5 body-2">Anyone with the link can view</p>
                        </div>
                            
                    </label>
                    <input type="checkbox" class="tf-switch-check" id="swCheck1" checked>
                </li>
                <li class="mt-22 d-flex justify-content-between align-items-center">
                    <label class="font-title-btn flex-grow-1" for="swCheck2">Allow editing</label>
                    <input type="checkbox" class="tf-switch-check" id="swCheck2">

                </li>
                <li class="mt-22 d-flex justify-content-between align-items-center">
                    <label class="font-title-btn flex-grow-1" for="swCheck3">Allow comments</label>
                    <input type="checkbox" class="tf-switch-check" id="swCheck3">
                </li>
                <li class="mt-22 d-flex justify-content-between align-items-center">
                    <label class="font-title-btn flex-grow-1" for="swCheck4">Allow duplicate as template</label>
                    <input type="checkbox" class="tf-switch-check" id="swCheck4">
                </li>
            </ul>
            
            
            <div class="footer-fixed button">
                <a href="invite-colleagues.html" class="tf-btn primary">Done</a>
            </div>
        </div>

    </div>

  @endsection