@extends('layouts.admin')

@section('adminContent')
<div class="container-xxl">

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                            <div class="d-flex align-items-center flex-row flex-wrap">
                                <div class="position-relative me-3">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT18iwsdCCbBfpa50-5BmNa_m_BX087_x1oWQ&s" alt="" height="120" class="rounded-circle">
                                    <a href="#" class="thumb-md justify-content-center d-flex align-items-center bg-primary text-white rounded-circle position-absolute end-0 bottom-0 border border-3 border-card-bg">
                                        <i class="fas fa-camera"></i>
                                    </a>
                                </div>
                                <div class="">
                                    <h5 class="fw-semibold fs-22 mb-1">{{ Auth::check() ? Auth::user()->name : "Null" }}</h5>
                                    <p class="mb-0 text-muted fw-medium">{{ Auth::check() ? Auth::user()->email : "Null" }}</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-lg-4 ms-auto align-self-center">
                            <div class="d-flex justify-content-center">
                                <div class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                    <h5 class="fw-semibold fs-22 mb-1">75</h5>
                                    <p class="text-muted mb-0 fw-medium">Projects</p>
                                </div>
                                <div class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                    <h5 class="fw-semibold fs-22 mb-1">68%</h5>
                                    <p class="text-muted mb-0 fw-medium">Success Rate</p>
                                </div>
                                <div class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                    <h5 class="fw-semibold fs-22 mb-1">$8620</h5>
                                    <p class="text-muted mb-0 fw-medium">Earning</p>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-4 align-self-center">
                            <div class="row row-cols-2">
                                <div class="col text-end">
                                    <div id="complete" class="apex-charts"></div>
                                </div>
                                <div class="col align-self-center">
                                    <button type="button" class="btn btn-primary  d-inline-block">Follow</button>
                                    <button type="button" class="btn btn-light  d-inline-block">Hire Me</button>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <a href="#" class="float-end text-muted d-inline-flex text-decoration-underline"><i class="iconoir-edit-pencil fs-18 me-1"></i>Edit</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body pt-0">
                    <div class="mb-3">
                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Javascript</span>
                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Python</span>
                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Angular</span>
                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Reactjs</span>
                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Flutter</span>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li class=""><i class="las la-birthday-cake me-2 text-secondary fs-22 align-middle"></i> <b> Birth Date </b> : {{ Auth::check() ? Auth::user()->birthday : "Null" }}</li>
                        <li class="mt-2"><i class="las la-phone me-2 text-secondary fs-22 align-middle"></i> <b> Phone </b> : {{ Auth::check() ? Auth::user()->phone : "Null" }}</li>
                        <li class="mt-2"><i class="las la-envelope text-secondary fs-22 align-middle me-2"></i> <b> Email </b> : {{ Auth::check() ? Auth::user()->email : "Null" }}</li>
                    </ul>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-md-8">
            <ul class="nav nav-tabs mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link fw-medium active" data-bs-toggle="tab" href="#post" role="tab" aria-selected="true">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" data-bs-toggle="tab" href="#gallery" role="tab" aria-selected="false">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="post" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 fw-semibold">Views</p>
                                            <h3 class="my-2 fs-24 fw-bold">24k</h3>
                                            <p class="mb-0 text-truncate text-muted"><i class="iconoir-bell text-warning fs-18"></i>
                                                <span class="text-dark fw-semibold">1500</span> New subscribers this week
                                            </p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                                <i class="iconoir-eye fs-30 align-self-center text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center">
                                        <div class="col">
                                            <p class="text-dark mb-1 fw-semibold">Comments</p>
                                            <h3 class="my-2 fs-24 fw-bold">24k</h3>
                                            <p class="mb-0 text-truncate text-muted"><i class="ti ti-thumb-up text-success fs-18"></i>
                                                <span class="text-dark fw-semibold">854</span> New Like this week
                                            </p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                                <i class="iconoir-chat-lines fs-30 align-self-center text-muted"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/users/avatar-10.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                <div class="flex-grow-1 ms-2">
                                                    <h5 class="m-0 fs-14">Anderson Vanhron</h5>
                                                    <p class="text-muted mb-0 fs-12">online</p>
                                                </div>
                                                <!--end media-body-->
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-auto">
                                            <div class="d-none d-sm-inline-block align-self-center">
                                                <a href="#" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" data-bs-custom-class="tooltip-primary"><i class="iconoir-media-image fs-18"></i></a>
                                                <a href="#" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Attachment" data-bs-custom-class="tooltip-primary"><i class="iconoir-attachment fs-18"></i></a>
                                                <a href="#" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" data-bs-custom-class="tooltip-primary"><i class="iconoir-calendar fs-18"></i></a>

                                                <div class="dropdown d-inline-block">
                                                    <a class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                                        <i class="iconoir-more-vert fs-18"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end pb-0">
                                                        <a class="dropdown-item" href="#">Profile</a>
                                                        <a class="dropdown-item" href="#">Add archive</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                        <a class="dropdown-item text-danger" href="#">Block</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end card-header-->
                                <div class="card-body pt-0">
                                    <form action="#">
                                        <div class="">
                                            <textarea class="form-control mb-2" id="post-1" rows="5" placeholder="Write here.."></textarea>
                                            <button type="button" class="btn btn-primary">Post</button>
                                        </div>
                                    </form>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <div class="tab-pane p-3" id="gallery" role="tabpanel">
                    <div id="grid" class="row g-0">
                        <div class="col-md-6 col-lg-4 picture-item">
                            <a href="assets/images/extra/card/img-1.jpg" class="lightbox">
                                <img src="assets/images/extra/card/img-1.jpg" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 picture-item picture-item--overlay">
                            <a href="assets/images/extra/card/img-2.jpg" class="lightbox">
                                <img src="assets/images/extra/card/img-2.jpg" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 picture-item">
                            <a href="assets/images/extra/card/img-3.jpg" class="lightbox">
                                <img src="assets/images/extra/card/img-3.jpg" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 picture-item picture-item--h2">
                            <a href="assets/images/extra/card/img-4.jpg" class="lightbox">
                                <img src="assets/images/extra/card/img-4.jpg" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 picture-item">
                            <a href="assets/images/extra/card/img-5.jpg" class="lightbox">
                                <img src="assets/images/extra/card/img-5.jpg" alt="" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-md-6 col-lg-4 picture-item picture-item--overlay">
                            <a href="assets/images/extra/card/img-6.jpg" class="lightbox">
                                <img src="assets/images/extra/card/img-6.jpg" alt="" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane p-3" id="settings" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First Name</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" type="text" value="Rosa">
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Last Name</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" type="text" value="Dodson">
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Company Name</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" type="text" value="MannatThemes">
                                    <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                <div class="col-lg-9 col-xl-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                        <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                <div class="col-lg-9 col-xl-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                        <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Website Link</label>
                                <div class="col-lg-9 col-xl-8">
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="la la-globe"></i></span>
                                        <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">USA</label>
                                <div class="col-lg-9 col-xl-8">
                                    <select class="form-select">
                                        <option>London</option>
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>Canada</option>
                                        <option>Thailand</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" type="password" placeholder="Password">
                                    <a href="#" class="text-primary font-12">Forgot password ?</a>
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" type="password" placeholder="New Password">
                                </div>
                            </div>
                            <div class="form-group mb-3 row">
                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                <div class="col-lg-9 col-xl-8">
                                    <input class="form-control" type="password" placeholder="Re-Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                    <button type="button" class="btn btn-danger">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Other Settings</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body pt-0">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                <label class="form-check-label" for="Email_Notifications">
                                    Email Notifications
                                </label>
                                <span class="form-text text-muted fs-12 mt-0">Do you need them?</span>
                            </div>
                            <div class="form-check mt-2">
                                <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                <label class="form-check-label" for="API_Access">
                                    API Access
                                </label>
                                <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                            </div>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div><!-- container -->
@endsection
