@extends('dashboard.layout')
@section('title','progress bar')
@section('content')

        <h4>Progress Bar</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Default Progress Bars</h4>
                    <p class="text-5 mt-4">Default Progress Bars</p>   
                </div>
                <div class="card-body mt-20">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Striped Progress Bar</h4>
                    <p class="text-5 mt-4">add <code>.progress-bar-striped</code> to change the style</p>   
                </div>
                <div class="card-body mt-20">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Striped Progress Bar</h4>
                    <p class="text-5 mt-4">add <code>.bg-primary, .bg-danger, .bg-info</code> to change the style</p>   
                </div>
                <div class="card-body mt-20">
                    <div class="mt-20 progress h-2">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress h-4">
                        <div class="progress-bar success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress h-6">
                        <div class="progress-bar danger" role="progressbar" style="width: 55%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress h-8">
                        <div class="progress-bar warning" role="progressbar" style="width: 36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress h-10">
                        <div class="progress-bar dark" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar liner-primary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Skill Bars</h4>
                    <p class="text-5 mt-4">add <code>.progress-animated </code> to change the style</p>   
                </div>
                <div class="card-body">
                    <div class="mt-20">
                        <p class="text-black fw-bold d-flex justify-content-between align-items-center">Figma <span class="fw-4">90%</span></p>
                        <div class="mt-10 progress">
                            <div class="progress-bar progress-animated" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-20">
                            <p class="text-black fw-bold d-flex justify-content-between align-items-center">Typography <span class="fw-4">70%</span></p>
                            <div class="mt-10 progress">
                                <div class="progress-bar warning progress-animated" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mt-20">
                            <p class="text-black fw-bold d-flex justify-content-between align-items-center">3D Maya <span class="fw-4">30%</span></p>
                            <div class="mt-10 progress">
                                <div class="progress-bar success progress-animated" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Colored Progress Bar</h4>
                    <p class="text-5 mt-4">add <code>.bg-primary, .bg-danger, .bg-info</code> to change the style</p>   
                </div>
                <div class="card-body mt-20">
                    <div class="mt-20 progress">
                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar success" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar danger" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar warning" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar info" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar dark" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="mt-20 progress">
                        <div class="progress-bar liner-primary" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    

    
    <script type="text/javascript" src="{{asset('js/bootstrap-touchspin.min.js')}}"></script>
   @endsection

    
    
