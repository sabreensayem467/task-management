@extends('dashboard.layout')
@section('title','toast')
@section('content')

        <h4>Toast</h4> 
    </div>

    <div class="app-content style-3 pb-32">
        <div class="tf-container">
            <div class="card mt-20">
                <div class="card-header">
                    <h4 class="fw-6">Toast</h4>
                </div>
                <div class="card-body mt-20">
                    <div class="toast fade show bg-white" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt1.jpg" alt="img">
                            </div>
                            <strong class="me-auto ms-2 text-lg-title">Themesflat</strong>
                            <small class="text-5 text-md-start">10:13 PM</small>
                            <a href="javascript:void(0);" class="close-toast icon-close" data-bs-dismiss="toast"
                                aria-label="Close"></a>

                        </div>
                        <div class="toast-body fw-5">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20 bg-dark">
                <div class="card-header">
                    <h4 class="fw-6 text-white">Translucent Toast</h4>
                </div>
                <div class="card-body mt-20">
                    <div class="toast fade show bg-white" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt3.jpg" alt="img">
                            </div>
                            <strong class="me-auto ms-2 text-lg-title">Themesflat</strong>
                            <small class="text-5 text-md-start">10:13 PM</small>
                            <a href="javascript:void(0);" class="close-toast icon-close" data-bs-dismiss="toast"
                                aria-label="Close"></a>
                        </div>
                        <div class="toast-body fw-5">
                            Hello, world! This is a toast message.
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4 class="fw-6">Different Color Toast</h4>
                </div>
                <div class="card-body mt-20">
                    <div class="toast bg-white toast-style1 show" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt3.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title">Toast Default</strong>
                                <small class="text-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close" data-bs-dismiss="toast"
                                aria-label="Close"></a>
                        </div>


                    </div>
                    <div class="mt-20 toast bg-primary toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt4.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <div class="mt-20 toast bg-success toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt5.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <div class="mt-20 toast bg-danger toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt10.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <div class="mt-20 toast bg-warning toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt8.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <div class="mt-20 toast bg-info toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt8.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <div class="mt-20 toast bg-light toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt9.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title">Toast Default</strong>
                                <small class="text-black opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close" data-bs-dismiss="toast"
                                aria-label="Close"></a>
                        </div>

                    </div>
                    <div class="mt-20 toast bg-dark toast-style1 show" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt10.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card mt-20">
                <div class="card-header">
                    <h4 class="fw-6">Live Toast</h4>
                </div>
                <div class="card-body mt-20">
                    <button type="button" class="tf-btn btn-lg primary" data-toast="tfToast1">Show live toast</button>
                    <div id="tfToast1" class="mt-8 toast bg-primary toast-style1 hide" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt3.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg secondary" data-toast="tfToast2">Show live toast</button>
                    <div id="tfToast2" class="mt-8 toast bg-white toast-style1 hide" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt11.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title ">Toast Default</strong>
                                <small class="text-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg success" data-toast="tfToast3">Show live toast</button>
                    <div id="tfToast3" class="mt-8 toast bg-success toast-style1 hide" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="toast-body">
                        <div class="avatar avt-40">
                            <img src="images/avt/avt12.jpg" alt="img">
                        </div>
                        <div class="toast-content">
                            <strong class="text-lg-title text-white">Toast Default</strong>
                            <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                        </div>

                        <a href="javascript:void(0);" class="close-toast icon-close text-white"
                            data-bs-dismiss="toast" aria-label="Close"></a>
                    </div>

                    </div>   
                    <button type="button" class="mt-20 tf-btn btn-lg danger" data-toast="tfToast4">Show live toast</button>
                    <div id="tfToast4" class="mt-8 toast bg-danger toast-style1 hide" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="toast-body">
                        <div class="avatar avt-40">
                            <img src="images/avt/avt13.jpg" alt="img">
                        </div>
                        <div class="toast-content">
                            <strong class="text-lg-title text-white">Toast Default</strong>
                            <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                        </div>

                        <a href="javascript:void(0);" class="close-toast icon-close text-white"
                            data-bs-dismiss="toast" aria-label="Close"></a>
                    </div>

                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg warning" data-toast="tfToast5">Show live toast</button>
                    <div id="tfToast5" class="mt-8 toast bg-warning toast-style1 hide" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="toast-body">
                        <div class="avatar avt-40">
                            <img src="images/avt/avt4.jpg" alt="img">
                        </div>
                        <div class="toast-content">
                            <strong class="text-lg-title text-white">Toast Default</strong>
                            <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                        </div>

                        <a href="javascript:void(0);" class="close-toast icon-close text-white"
                            data-bs-dismiss="toast" aria-label="Close"></a>
                    </div>

                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg info" data-toast="tfToast6">Show live toast</button>
                    <div id="tfToast6" class="mt-8 toast bg-info toast-style1 hide" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                        <div class="avatar avt-40">
                            <img src="images/avt/avt3.jpg" alt="img">
                        </div>
                        <div class="toast-content">
                            <strong class="text-lg-title text-white">Toast Default</strong>
                            <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                        </div>

                        <a href="javascript:void(0);" class="close-toast icon-close text-white"
                            data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>
                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg light" data-toast="tfToast7">Show live toast</button>
                    <div id="tfToast7" class="mt-20 toast bg-light toast-style1 hide" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt3.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title">Toast Default</strong>
                                <small class="text-black opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close" data-bs-dismiss="toast"
                                aria-label="Close"></a>
                        </div>

                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg dark" data-toast="tfToast8">Show live toast</button>
                    <div id="tfToast8" class="mt-20 toast bg-dark toast-style1 hide" role="alert" aria-live="assertive"
                        aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt3.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title text-white">Toast Default</strong>
                                <small class="text-white opacity-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close text-white"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                    <button type="button" class="mt-20 tf-btn btn-lg disable" data-toast="tfToast9">Show live toast</button>
                    <div id="tfToast9" class="mt-8 toast bg-white toast-style1 hide" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-body">
                            <div class="avatar avt-40">
                                <img src="images/avt/avt3.jpg" alt="img">
                            </div>
                            <div class="toast-content">
                                <strong class="text-lg-title ">Toast Default</strong>
                                <small class="text-5 text-md-start d-block">10:13 PM</small>
                            </div>

                            <a href="javascript:void(0);" class="close-toast icon-close"
                                data-bs-dismiss="toast" aria-label="Close"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
<html>
    <body>
    <script>
        var toastTrigger = document.querySelectorAll("[data-toast]");
        if (toastTrigger.length) {
        toastTrigger.forEach((el) =>
            el.addEventListener("click", (event) => {
            var toastData = el.getAttribute("data-toast");
            var notificationToast = document.getElementById(toastData);
            var notificationToast = new bootstrap.Toast(notificationToast);
            notificationToast.show();
            })
            );
        }
    </script>

</body>


<!-- Mirrored from themesflat.co/html/taskose/taskose/ui-toast.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:41 GMT -->
</html>