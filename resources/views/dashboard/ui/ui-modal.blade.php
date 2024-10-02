@extends('dashboard.layout')
@section('title','model')
@section('content')

        <h4>Modal</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h3 class="fw-6">Modal basic</h3>
                </div>
                <div class="card-body mt-20">
                    <button type="button" class="tf-btn btn-md primary" data-bs-target="#modalBasic" data-bs-toggle="modal">Modal Basic</button>
                    <button type="button" class="mt-16 tf-btn btn-md primary" data-bs-target="#modalLong" data-bs-toggle="modal">Long Content Modal</button>
                    <button type="button" class="mt-16 tf-btn btn-md primary" data-bs-target="#modalCenter" data-bs-toggle="modal">Modal Centered</button>
                    <button type="button" class="mt-16 tf-btn btn-md primary" data-bs-target="#modalSmall" data-bs-toggle="modal">Modal Small</button>



                </div>
            </div>
           
        </div>
    </div>
    
    


    <div class="modal fade" id="modalBasic">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-16">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title fw-6">Basic Modal</h4>
                   
                </div>
                <div class="modal-body fw-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus.</div>
                <div class="d-flex gap-16 mt-20">
                    <button type="button" class="tf-btn secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="tf-btn primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalLong">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-16">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title fw-6">Long content modal</h4>
                   
                </div>
                <div class="modal-body">
                    <p class="fw-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus.</p>
                    <p class="fw-5 mt-8">
                        Mauris consectetur, lacus sit amet malesuada convallis, quam erat laoreet turpis, eget dapibus magna erat et turpis. Quisque malesuada nunc justo, laoreet egestas orci commodo ac. Cras finibus metus in nisi pellentesque, at luctus ex consectetur. Nunc hendrerit sollicitudin commodo.
                    </p>
                    <p class="fw-5 mt-8">Aliquam libero nulla, faucibus eget maximus sit amet, eleifend condimentum est. Sed eleifend volutpat turpis id congue.</p>
                </div>
                <div class="d-flex gap-16 mt-20">
                    <button type="button" class="tf-btn secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="tf-btn primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-16">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title fw-6">Modal Centered</h4>
                   
                </div>
                <div class="modal-body fw-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus.</div>
                <div class="d-flex gap-16 mt-20">
                    <button type="button" class="tf-btn secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="tf-btn primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade small" id="modalSmall">
        <div class="modal-dialog" role="document">
            <div class="modal-content p-16">
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title fw-6">Small modal</h4>
                   
                </div>
                <div class="modal-body fw-5 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus.</div>
                <div class="d-flex gap-16 mt-20">
                    <button type="button" class="tf-btn secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="tf-btn primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    @endsection