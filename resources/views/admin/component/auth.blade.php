<li class="dropdown topbar-item">
    <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
        <img src="{{ checkFile(Auth::user()->avatar) }}" alt="" class="thumb-lg rounded-circle">
    </a>
    <div class="dropdown-menu dropdown-menu-end py-0">
        <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
            <div class="flex-shrink-0">
                <img src="{{ checkFile(Auth::user()->avatar) }}" alt="" class="thumb-md rounded-circle">
            </div>
            <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                <h6 class="my-0 fw-medium text-dark fs-13">{{ Auth::check() ? Auth::user()->name : "Null" }}</h6>
                <small class="text-muted mb-0">{{ Auth::check() ? Auth::user()->email : "Null" }}</small>
            </div>
            <!--end media-body-->
        </div>
        <div class="dropdown-divider mt-0"></div>
        <small class="text-muted px-2 pb-1 d-block">Account</small>
        <a class="dropdown-item" href=""><i class="las la-user fs-18 me-1 align-text-bottom"></i> Profile</a>
        <a class="dropdown-item" href="pages-faq.html"><i class="las la-wallet fs-18 me-1 align-text-bottom"></i> Earning</a>
        <small class="text-muted px-2 py-1 d-block">Settings</small>
        <a class="dropdown-item" href="pages-profile.html"><i class="las la-cog fs-18 me-1 align-text-bottom"></i>Account Settings</a>
        <a class="dropdown-item" href="pages-profile.html"><i class="las la-lock fs-18 me-1 align-text-bottom"></i> Security</a>
        <a class="dropdown-item" href="pages-faq.html"><i class="las la-question-circle fs-18 me-1 align-text-bottom"></i> Help Center</a>
        <div class="dropdown-divider mb-0"></div>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            
            <button class="dropdown-item text-danger"><i class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</button>
        </form>
    </div>
</li>
