@extends('dashboard.layout')
@section('title','input')
@section('content')
        <h4>Input</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Input With Group Icon</h4>
                </div>
                <div class="card-body">
                    <form>
                        <fieldset class="mt-20 input-icon">
                            <span class="icon icon-user"></span>
                            <input type="text" placeholder="Enter your name" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-icon">
                            <span class="icon icon-mail"></span>
                            <input type="text" placeholder="Enter your email address" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-icon">
                            <div class="box-view-hide">
                                <span class="icon icon-lock"></span>
                                <input type="password" placeholder="Enter your password" class="form-control password-field">
                                <span class="show-pass">
                                    <i class="icon-pass icon-view"></i>
                                    <i class="icon-pass icon-hide"></i>
                                </span>
                            </div>
                        </fieldset>
                        
                        <fieldset class="mt-20 input-icon drop-select">
                            <div class="inner-group-ip">
                                <select class="image-select">
                                    <option data-thumbnail="images/flags/eng.png"></option>
                                    <option data-thumbnail="images/flags/france.png"></option>
                                    <option data-thumbnail="images/flags/swedish.png"></option>
                                </select>
                            </div>
                            <input type="number" placeholder="Enter your phone number" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-icon">
                            <span class="icon icon-calendar"></span>
                            <input type="date" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-upload up-lg">
                            <span class="icon icon-upload2"></span>
                            <input type="file" class="upload-file">
                        </fieldset>
                        <fieldset class="mt-20 input-icon">
                            <textarea class="form-control ip-textarea" placeholder="Write your review"></textarea>
                        </fieldset>
                        <button class="mt-20 tf-btn primary">Button</button>
                    </form>

                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Input Fill</h4>
                </div>
                <div class="card-body">
                    <form>
                        <fieldset class="mt-20 input-fill">
                            <label>Your name</label>
                            <input type="text" placeholder="Enter your name" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email address" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Password</label>
                            <div class="box-view-hide">
                                <input type="password" placeholder="Enter your password" class="form-control password-field2">
                                <span class="show-pass2">
                                    <i class="icon-pass icon-view"></i>
                                    <i class="icon-pass icon-hide"></i>
                                </span>
                            </div>
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Website</label>
                            <input type="text" placeholder="Website" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter your phone number" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Birthday</label>
                            <input type="date" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-upload">
                            <span class="icon icon-upload2"></span>
                            <input type="file" class="upload-file">
                        </fieldset>
                        <fieldset class="mt-20 input-fill">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Write your review"></textarea>
                        </fieldset>
                        <button class="mt-20 tf-btn primary">Button</button>
                    </form>



                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Input Stroke</h4>
                </div>
                <div class="card-body">
                    <form>
                        <fieldset class="mt-20 input-stroke">
                            <label>Your name</label>
                            <input type="text" placeholder="Enter your name" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-stroke">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email address" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-stroke">
                            <label>Password</label>
                            <div class="box-view-hide">
                                <input type="password" placeholder="Enter your password" class="form-control password-field3">
                                <span class="show-pass3">
                                    <i class="icon-pass icon-view"></i>
                                    <i class="icon-pass icon-hide"></i>
                                </span>
                            </div>
                        </fieldset>
                        <fieldset class="mt-20 input-stroke">
                            <label>Website</label>
                            <input type="text" placeholder="Website" class="form-control">
                        </fieldset>
                        <fieldset class="mt-26 input-stroke">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter your phone number" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-stroke">
                            <label>Birthday</label>
                            <input type="date" class="form-control">
                        </fieldset>
                        <fieldset class="mt-26 input-upload">
                            <span class="icon icon-upload2"></span>
                            <input type="file" class="upload-file">
                        </fieldset>
                        <fieldset class="mt-20 input-stroke">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Write your review"></textarea>
                        </fieldset>
                        <button class="mt-20 tf-btn primary">Button</button>
                    </form>



                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Input line</h4>
                </div>
                <div class="card-body">
                    <form>
                        <fieldset class="mt-20 input-line">
                            <label>Your name</label>
                            <input type="text" placeholder="Enter your name" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-line">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email address" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-line">
                            <label>Password</label>
                            <div class="box-view-hide">
                                <input type="password" placeholder="Enter your password" class="form-control password-field4">
                                <span class="show-pass4">
                                    <i class="icon-pass icon-view"></i>
                                    <i class="icon-pass icon-hide"></i>
                                </span>
                            </div>
                        </fieldset>
                        <fieldset class="mt-20 input-line">
                            <label>Website</label>
                            <input type="text" placeholder="Website" class="form-control">
                        </fieldset>
                        <fieldset class="mt-26 input-line">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter your phone number" class="form-control">
                        </fieldset>
                        <fieldset class="mt-20 input-line">
                            <label>Birthday</label>
                            <input type="date" class="form-control">
                        </fieldset>
                        <fieldset class="mt-26 input-upload">
                            <span class="icon icon-upload2"></span>
                            <input type="file" class="upload-file">
                        </fieldset>
                        <fieldset class="mt-20 input-line">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Write your review"></textarea>
                        </fieldset>
                        <button class="mt-20 tf-btn primary">Button</button>
                    </form>



                </div>
            </div>   
        </div>
    </div>
    @endsection
    

   