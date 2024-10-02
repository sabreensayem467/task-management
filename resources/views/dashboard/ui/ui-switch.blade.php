@extends('dashboard.layout')
@section('title','switch')
@section('content')
        <h4>Switch</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Switch</h4>
                </div>
                <div class="card-body mt-20">
                    <fieldset class="fieldset-sw">
                        <input type="checkbox" class="tf-switch-check" id="switchCheckDefault"> 
                        <label for="switchCheckDefault" class="fw-5">Default Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw mt-10">
                        <input type="checkbox" class="tf-switch-check" id="switchChecked" checked> 
                        <label for="switchChecked" class="fw-5">Default Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw sw-disabled mt-10">
                        <input type="checkbox" class="tf-switch-check" id="switchDisabled" disabled> 
                        <label for="switchDisabled" class="fw-5">Disabled Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw sw-disabled mt-10">
                        <input type="checkbox" class="tf-switch-check" id="switchCheckedDisabled" checked disabled> 
                        <label for="switchCheckedDisabled" class="fw-5">Disabled Checked Switch</label>
                    </fieldset>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Switches Colors</h4>
                </div>
                <div class="card-body mt-20">
                    <fieldset class="fieldset-sw">
                        <input type="checkbox" class="tf-switch-check light" id="switchLight" checked> 
                        <label for="switchLight" class="fw-5">Light Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw mt-10">
                        <input type="checkbox" class="tf-switch-check success" id="switchSuccess" checked> 
                        <label for="switchSuccess" class="fw-5">Success Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw  mt-10">
                        <input type="checkbox" class="tf-switch-check warning" id="switchWarning" checked> 
                        <label for="switchWarning" class="fw-5">Warning Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw mt-10">
                        <input type="checkbox" class="tf-switch-check danger" id="switchDanger" checked> 
                        <label for="switchDanger" class="fw-5">Danger Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw mt-10">
                        <input type="checkbox" class="tf-switch-check info" id="switchInfo" checked> 
                        <label for="switchInfo" class="fw-5">Info Switch</label>
                    </fieldset>
                    <fieldset class="fieldset-sw mt-10">
                        <input type="checkbox" class="tf-switch-check dark" id="switchDark" checked> 
                        <label for="switchDark" class="fw-5">Dark Switch</label>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    
 @endsection  

    