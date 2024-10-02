@extends('dashboard.layout')
@section('title','edit profile')
@section('content')
        <h5>Edit Profile</h5>  
    </div> 
    <div class="app-content style-3">
        <div class="tf-container">
            <form action="https://themesflat.co/html/taskose/taskose/profile.html" class="mt-24">
                <fieldset class="input-icon mt-20">
                    <span class="icon icon-user"></span>
                    <input type="text" value="Jonathan" class="form-control">
                </fieldset>
                <fieldset class="input-icon mt-15">
                    <span class="icon icon-mail"></span>
                    <input type="text" value="jonathansmith@gmail.com" class="form-control">
                </fieldset>
                <button class="mt-24">Save</button>
            </form>
        </div>

    </div>

   @endsection