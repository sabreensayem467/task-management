
@extends('dashboard.layout')
@section('title','reset password')
@section('content')



   
        <h5>New Password</h5>  
    </div> 


    <div class="app-content style-3 pb-32 signUp-area">
        <div class="tf-container">
            <form class="mt-24" action="https://themesflat.co/html/taskose/taskose/successfully-02.html">
                <p class="body-6 text-black-5">Create a new password that is safe and easy to remember</p>
                <fieldset class="mt-32 input-icon">
                    <div class="box-view-hide">
                        <span class="icon icon-lock"></span>
                        <input type="password" placeholder="Enter New password" class="form-control password-field">
                        <div class="show-pass">
                            <span class="icon-pass icon-view"></span>
                            <span class="icon-pass icon-hide"></span>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="mt-16 input-icon">
                    <div class="box-view-hide">
                        <span class="icon icon-lock"></span>
                        <input type="password" placeholder="Confirm New password" class="form-control password-field2">
                        <div class="show-pass2">
                            <span class="icon-pass icon-view"></span>
                            <span class="icon-pass icon-hide"></span>
                        </div>
                    </div>
                </fieldset>
                <div class="footer-fixed button">
                    <button class="mt-24 tf-btn primary">Confirm New Password</button>

                </div>
            </form>
            
            
        </div>
    </div>


    @endsection