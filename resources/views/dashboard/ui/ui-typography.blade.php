@extends('dashboard.layout')
@section('title','typography')
@section('content')
        <h4>Typography</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header"> 
                    <h4>Typography</h4>
                    <p class="text-5 mt-4">The Use tags <code>h1 to h6 </code> for get desire heading.</p>   
                </div>
                <div class="card-body mt-20">
                    <h1>H1 - Heading</h1>
                    <h2 class="mt-10">H2 - Heading</h2>
                    <h3 class="mt-10">H3 - Heading</h3>
                    <h4 class="mt-10">H4 - Heading</h4>
                    <h5 class="mt-10">H5 - Heading</h5>
                    <h6 class="mt-10">H6 - Heading</h6>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Paragraph with justify</h4>
                    <p class="text-5 mt-4">Use tag <code>text-justify</code> for get desire paragraph</p>
                </div>
                <div class="card-body mt-20">
                    <p class="text-justify">Mauris consectetur, lacus sit amet malesuada convallis, quam erat laoreet turpis, eget dapibus magna erat et turpis. Quisque malesuada nunc justo, laoreet egestas orci commodo ac. Cras finibus metus in nisi pellentesque, at luctus ex consectetur. Nunc hendrerit sollicitudin commodo.</p>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Alignment text</h4>
                    <p class="text-5 mt-4">Use tags <code>text-start, text-center, text-end</code> for get desire text.</p>
                </div>
                <div class="card-body mt-20">
                    <p class="text-start">Left aligned text on all viewport sizes.</p>
                    <p class="text-center mt-20">Left aligned text on all viewport sizes.</p>
                    <p class="text-end mt-20">Left aligned text on all viewport sizes.</p>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>View port text</h4>
                    <p class="text-5 mt-4">Use tags <code>text-sm-start, text-md-start, text-lg-start, text-xl-start</code> for get desire text.</p>
                </div>
                <div class="card-body mt-20">
                    <p>Left aligned text on viewports sized SM (small) or wider.</p>
                    <p class="mt-20">Left aligned text on viewports sized MD (medium) or wider.</p>
                    <p class="mt-20">Left aligned text on viewports sized LG (large) or wider.</p>
                    <p class="mt-20">Left aligned text on viewports sized XL (extra-large) or wider.</p>

                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Font weight and italics</h4>
                    <p class="text-5 mt-4">Use tags <code>fw-bold, fw-normal, fw-italic</code> for get desire text.</p>
                </div>
                <div class="card-body mt-20">
                    <p class="fw-bold">Bold text.</p>
                    <p class="fw-normal mt-20">Normal weight text.</p>
                    <p class="fw-italic mt-20">Italic text.</p>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Text colors</h4>
                    <p class="text-5 mt-4">Use tags below class for get desire text.</p>
                </div>
                <ul class="card-body mt-20">
                    <li>
                        <p class="text-muted">This is an example of muted text.</p>
                        <p>Add class <code>text-muted</code> </p>
                    </li>
                    <li class="mt-20">
                        <p class="text-primary">This is an example of muted text.</p>
                        <p>Add class <code>text-primary</code> </p>
                    </li>
                    <li class="mt-20">
                        <p class="text-success">This is an example of muted text.</p>
                        <p>Add class <code>text-success</code> </p>
                    </li>
                    <li class="mt-20">
                        <p class="text-info">This is an example of muted text.</p>
                        <p>Add class <code>text-info</code> </p>
                    </li>
                    <li class="mt-20">
                        <p class="text-warning">This is an example of muted text.</p>
                        <p>Add class <code>text-warning</code> </p>
                    </li>
                    <li class="mt-20">
                        <p class="text-danger">This is an example of muted text.</p>
                        <p>Add class <code>text-danger</code> </p>
                    </li>
                </ul>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Address</h4>
                    <p class="text-5 mt-4">Use <code>address</code> for get desire address.</p>
                </div>
                <div class="card-body mt-20">
                    <address class="fw-normal">
                        4140 Parker Rd. <br>
                        Allentown, New Mexico 31134
                    </address>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Blockquotes</h4>
                    <p class="text-5 mt-4">Use <code>blockquote</code> for get desire address.</p>
                </div>
                <div class="card-body mt-20">
                    <blockquote class="fw-normal">Mauris consectetur, lacus sit amet malesuada convallis, quam erat laoreet turpis, eget dapibus magna erat et turpis.</blockquote>
                    <p class="fw-normal mt-20 text-1 fw-italic text-sm-start">Someone famous in Source Title</p>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Ul Listing</h4>
                    <p class="text-5 mt-4">Use tags <code>ul > li</code> for get desire ol list.</p>
                </div>
                <ul class="list-style mt-20">
                    <li class="fw-normal">Mauris consectetur, lacus sit amet</li>
                    <li class="mt-10 fw-normal">Malesuada convallis, quam erat laoreet </li>
                    <li class="mt-10 fw-normal">Turpis, eget dapibus magna erat et turpis.</li>
                </ul>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Ol Listing</h4>
                    <p class="text-5 mt-4">Use tags <code>ol > li</code> for get desire ol list.</p>
                </div>
                <ol class="list-style mt-20">
                    <li class="fw-normal">Mauris consectetur, lacus sit amet</li>
                    <li class="mt-10 fw-normal">Malesuada convallis, quam erat laoreet </li>
                    <li class="mt-10 fw-normal">Turpis, eget dapibus magna erat et turpis.</li>
                </ol>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Description Text</h4>
                    <p class="text-5 mt-4">Use tags <code>dl > dt</code> for get desire ol list.</p>
                </div>
                <dl class="mt-20">
                    <dt>Standard Description List</dt>
                    <dd class="mt-8 fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus.</dd>
                    <dt class="mt-20">Description List Title</dt>
                    <dd class="mt-8 fw-normal text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et sodales purus.</dd>
                </dl>

            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Fancy Listing</h4>
                    <p class="text-5 mt-4">Use class <code>list-icons</code>for get desire ol list</p>
                </div>
                <ul class="mt-20 list-icons">
                    <li class="item fw-normal">
                        <span class="icon text-black icon-left-arr"></span>
                        Lorem ipsum dolor sit amet
                    </li>
                    <li class="mt-10 item fw-normal">
                        <span class="icon text-black icon-left-arr"></span>
                        Consectetur adipiscing elit
                    </li>
                    <li class="mt-10 item fw-normal">
                        <span class="icon text-black icon-left-arr"></span>
                        Duis et sodales purus.
                    </li>
                </ul>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4>Fancy Listing with href</h4>
                    <p class="text-5 mt-4">Use class <code>list-icons</code>for get desire ol list</p>
                </div>
                <ul class="mt-20 list-icons">
                    <li>
                        <a href="javascript:void(0);" class="item fw-normal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.354 4.85403L6.35403 12.854C6.30759 12.9005 6.25245 12.9374 6.19175 12.9626C6.13105 12.9877 6.06599 13.0007 6.00028 13.0007C5.93457 13.0007 5.86951 12.9877 5.80881 12.9626C5.74811 12.9374 5.69296 12.9005 5.64653 12.854L2.14653 9.35403C2.05271 9.26021 2 9.13296 2 9.00028C2 8.8676 2.05271 8.74035 2.14653 8.64653C2.24035 8.55271 2.3676 8.5 2.50028 8.5C2.63296 8.5 2.76021 8.55271 2.85403 8.64653L6.00028 11.7934L13.6465 4.14653C13.7403 4.05271 13.8676 4 14.0003 4C14.133 4 14.2602 4.05271 14.354 4.14653C14.4478 4.24035 14.5006 4.3676 14.5006 4.50028C14.5006 4.63296 14.4478 4.76021 14.354 4.85403Z" fill="#1E7F11"/>
                            </svg>
                            Lorem ipsum dolor sit amet
                    </li>
                    <li class="mt-10">
                        <a href="javascript:void(0);" class="item fw-normal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.354 4.85403L6.35403 12.854C6.30759 12.9005 6.25245 12.9374 6.19175 12.9626C6.13105 12.9877 6.06599 13.0007 6.00028 13.0007C5.93457 13.0007 5.86951 12.9877 5.80881 12.9626C5.74811 12.9374 5.69296 12.9005 5.64653 12.854L2.14653 9.35403C2.05271 9.26021 2 9.13296 2 9.00028C2 8.8676 2.05271 8.74035 2.14653 8.64653C2.24035 8.55271 2.3676 8.5 2.50028 8.5C2.63296 8.5 2.76021 8.55271 2.85403 8.64653L6.00028 11.7934L13.6465 4.14653C13.7403 4.05271 13.8676 4 14.0003 4C14.133 4 14.2602 4.05271 14.354 4.14653C14.4478 4.24035 14.5006 4.3676 14.5006 4.50028C14.5006 4.63296 14.4478 4.76021 14.354 4.85403Z" fill="#1E7F11"/>
                            </svg>
                            Consectetur adipiscing elit
                        </a>
                    </li>
                    <li class="mt-10">
                        <a href="javascript:void(0);" class="item fw-normal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M14.354 4.85403L6.35403 12.854C6.30759 12.9005 6.25245 12.9374 6.19175 12.9626C6.13105 12.9877 6.06599 13.0007 6.00028 13.0007C5.93457 13.0007 5.86951 12.9877 5.80881 12.9626C5.74811 12.9374 5.69296 12.9005 5.64653 12.854L2.14653 9.35403C2.05271 9.26021 2 9.13296 2 9.00028C2 8.8676 2.05271 8.74035 2.14653 8.64653C2.24035 8.55271 2.3676 8.5 2.50028 8.5C2.63296 8.5 2.76021 8.55271 2.85403 8.64653L6.00028 11.7934L13.6465 4.14653C13.7403 4.05271 13.8676 4 14.0003 4C14.133 4 14.2602 4.05271 14.354 4.14653C14.4478 4.24035 14.5006 4.3676 14.5006 4.50028C14.5006 4.63296 14.4478 4.76021 14.354 4.85403Z" fill="#1E7F11"/>
                            </svg>
                            Duis et sodales purus.
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    @endsection

    