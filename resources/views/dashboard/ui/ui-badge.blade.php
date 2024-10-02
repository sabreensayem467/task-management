@extends('dashboard.layout')
@section('title','badge')
@section('content')


        <h4>Badge</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Badges Size</h4>
                    <p class="mt-4 text-5">Default Button group style</p>
                </div>
                <div class="card-body mt-20 d-flex align-items-center gap-10">
                    <span class="badge primary badge-lg">Primary</span>
                    <span class="badge secondary badge-md">Secondary</span>
                    <span class="badge success badge-sm">Success</span>

                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Badges Light</h4>
                    <p class="mt-4 text-5">Default badges light style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="grid-2 gap-10">
                        <span class="badge light-primary badge-md">Primary</span>
                        <span class="badge secondary badge-md">Secondary</span>
                        <span class="badge light-success badge-md">Success</span>
                        <span class="badge light-danger badge-md">Danger</span>
                        <span class="badge light-warning badge-md">Warning</span>
                        <span class="badge light-info badge-md">Info</span>
                        <span class="badge light-badge badge-md">Light</span>
                        <span class="badge light-dark badge-md">Dark</span>
                    </div>
                    <div class="d-flex gap-10 flex-wrap mt-20">
                        <span class="badge badge-circle light-primary badge-md">1</span>
                        <span class="badge badge-circle secondary badge-md">2</span>
                        <span class="badge badge-circle light-success badge-md">3</span>
                        <span class="badge badge-circle light-danger badge-md">4</span>
                        <span class="badge badge-circle light-warning badge-md">5</span>
                        <span class="badge badge-circle light-info badge-md">6</span>
                        <span class="badge badge-circle light-badge badge-md">7</span>
                        <span class="badge badge-circle light-dark badge-md">8</span>
                    </div>

                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Badges</h4>
                    <p class="mt-4 text-5">Default badges light style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="d-flex gap-10 flex-wrap">
                        <span class="badge light-primary badge-md">Primary</span>
                        <span class="badge secondary badge-md">Secondary</span>
                        <span class="badge light-success badge-md">Success</span>
                        <span class="badge light-danger badge-md">Danger</span>
                        <span class="badge light-warning badge-md">Warning</span>
                        <span class="badge light-info badge-md">Info</span>
                        <span class="badge light-badge badge-md">Light</span>
                        <span class="badge light-dark badge-md">Dark</span>
                    </div>

                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Outline Circle Badge</h4>
                    <p class="mt-4 text-5">add <code>.badge-circle</code> to change the style</p>
                </div>
                <div class="card-body mt-20">
                    <div class="d-flex gap-10 flex-wrap">
                        <span class="badge badge-circle primary badge-md">1</span>
                        <span class="badge badge-circle secondary badge-md">2</span>
                        <span class="badge badge-circle success badge-md">3</span>
                        <span class="badge badge-circle danger badge-md">4</span>
                        <span class="badge badge-circle warning badge-md">5</span>
                        <span class="badge badge-circle info badge-md">6</span>
                        <span class="badge badge-circle light badge-md">7</span>
                        <span class="badge badge-circle dark badge-md">8</span>
                    </div>

                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Example Badges</h4>
                </div>
                <div class="card-body mt-20">
                    <div class="d-flex gap-10">
                        <a href="javascript:void(0);" class="tf-btn position-relative btn-lg primary">
                            Primary
                            <span class="badge danger">1</span>
                        </a>
                        <a href="javascript:void(0);" class="tf-btn position-relative btn-lg secondary">
                            Secondary
                            <span class="badge danger">1</span>

                        </a>

                    </div>

                </div>
            </div>
        </div>
    </div>
    
    @endsection

    