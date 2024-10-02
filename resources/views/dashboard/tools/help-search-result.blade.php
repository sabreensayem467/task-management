@extends('dashboard.layout')
@section('title','help search result')
@section('content')


        <h5>Help Center</h5>  
    </div> 
    <div class="app-content style-3">
        <div class="tf-container">
            <div class="mt-24 search-box">
                <a href="search.html" class="icon-left icon-search"></a>
                <input type="text" class="search-field" placeholder="Find your task" value="nft website de">
            </div>
            <div class="box-result-help text-center">
                <div class="image">
                    <img src="images/background/help-result.jpg" alt="img">
                </div>
                <h5 class="text-black-2">No result for “Fintory”</h5>
                <p class="body-4 text-black-5 mt-12">Try to enter another keyword that related</p>
            </div>
        </div>

    </div>

  @endsection