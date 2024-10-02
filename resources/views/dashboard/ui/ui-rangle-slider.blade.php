@extends('dashboard.layout')
@section('title','rang sliders')
@section('content')

        <h4>Rang Sliders</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Basic Slider</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="basic-slider"></div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Slider Tooltip</h4>    
                </div>
                <div class="card-body mt-60 slider-tooltip-default">
                    <div id="slider-tooltip"></div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Slider Behaviour (Snap)</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="basic-slider-one"></div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Disabling A Slider</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="slider-disable"></div>
                    <label class="d-inline-flex align-items-center gap-10 mt-20 fw-5">
                        <input class="tf-checkbox" type="checkbox" id="checkbox-slider">
                        Disable slider
                    </label>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Changing the slider by key press</h4>    
                </div>
                <div class="card-body mt-60 slider-tooltip-default">
                    <div id="keypress-two-val"></div>
                    <div class="input-stroke mt-20">
                        <input type="text" id="ip-val-lower" class="form-control fw-normal">
                    </div>
                    <div class="input-stroke mt-10">
                        <input type="text" id="ip-val-upper" class="form-control fw-normal">
                    </div>
                    
                </div>
            </div>
            <div class="card mt-20 pb-60">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Soft Limits</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="limit-val"></div>
                
                </div>
            </div>
            <div class="card mt-20 pb-60">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Moving the slider by clicking pips</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="pips-val"></div>
                
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header pb-20 line-bt"> 
                    <h4 class="fw-6">Slider Direction</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="slider-dir"></div>
                    <div class="mt-20 field-dir fw-normal"></div>
                </div>
            </div>
        </div>
    </div>
    
    

   
    <script type="text/javascript" src="{{asset('js/nouislider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/rangle-slider.js')}}"></script>

@endsection
    
    
