@extends('dashboard.layout')
@section('title','stepper')
@section('content')
        <h4>stepper</h4> 
    </div>

    <div class="app-content style-3">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Default Steppers</h4>
                </div>
                <div class="card-body mt-20">
                        <div class="tf-stepper">
                            <label class="fw-normal">Default Stepper</label>
                            <input class="stepper" type="text" value="0">
                        </div>
                        <div class="tf-stepper mt-30 primary">
                            <label>Default Stepper</label>
                            <input class="stepper" type="text" value="0">
                        </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Default Steppers</h4>
                </div>
                <div class="card-body mt-20">
                    <div class="tf-stepper round-1">
                        <label class="fw-normal">Default Stepper</label>
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper round-1 mt-30 primary">
                        <label>Default Stepper</label>
                        <input class="stepper" type="text" value="0">
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Different Color Steppers</h4>
                </div>
                <div class="card-body mt-20">
                    <div class="tf-stepper round-1 primary">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 primary">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 round-1 success">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 success">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 round-1 danger">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 danger">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 round-1 info">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 info">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 round-1 dark">
                        <input class="stepper" type="text" value="0">
                    </div>
                    <div class="tf-stepper mt-20 dark">
                        <input class="stepper" type="text" value="0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    


    <script type="text/javascript" src="{{asset('js/bootstrap-touchspin.min.js')}}"></script>
   @endsection
    
