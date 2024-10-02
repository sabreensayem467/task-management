@extends('dashboard.layout')
@section('title','tree view')
@section('content')

        <h4>Tree View</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4 class="fw-6">Basic Tree View</h4>    
                </div>
                <div class="card-body mt-20">
                    <div id="treeview1">
                        <ul>
                            <li data-jstree='{ "opened" : true }'>Root node
                                <ul>
                                    <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                    <li>Child node 2</li>
                                    <li>Child node 3</li>
                                    <li data-jstree='{ "opened" : true }'>Root node
                                        <ul>
                                            <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                            <li>Child node 2</li>
                                            <li data-jstree='{ "opened" : true }'>Root node
                                                <ul>
                                                    <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                                    <li>Child node 2</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4 class="fw-6">Chackable Tree View</h4>
                </div>
                <div class="card-body mt-20">
                    <div id="treeview2">
                        <ul>
                            <li data-jstree='{ "opened" : true }'>Root node
                                <ul>
                                    <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                    <li>Child node 2</li>
                                    <li> Child node 3</li>
                                    <li data-jstree='{ "opened" : true }'>Root node
                                        <ul>
                                            <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                            <li>Child node 2</li>
                                            <li data-jstree='{ "opened" : true }'>Root node
                                                <ul>
                                                    <li data-jstree='{ "selected" : true }'>Child node 1</li>
                                                    <li>Child node 2</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    
    
    
    <script type="text/javascript" src="{{asset('js/jstree.min.js')}}"></script>
    @endsection

    
  