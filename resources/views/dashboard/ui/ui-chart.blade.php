@extends('dashboard.layout')
@section('title','chart')
@section('content')
        <h4>Chart</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-body">
                    <div id="donut-chart"></div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-body">
                    <div id="donut-chart2"></div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-body">
                    <div id="bar-chart"></div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-body">
                    <div id="area-chart"></div>
                </div>
            </div>
        </div>
    </div>
    
    

    
   
    <script type="text/javascript" src="{{asset('js/apexcharts.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chart-init.js')}}"></script>
    
    @endsection
