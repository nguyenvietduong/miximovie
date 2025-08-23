<div class="topbar d-print-none">
    <div class="container-xxl">
        <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">

            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                <li>
                    <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                        <i class="iconoir-menu-scale"></i>
                    </button>
                </li>
                <li class="mx-3 welcome-text">
                    <h3 class="mb-0 fw-bold text-truncate">Good Morning, James!</h3>
                    <!-- <h6 class="mb-0 fw-normal text-muted text-truncate fs-14">Here's your overview this week.</h6> -->
                </li>
            </ul>

            <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">

                @include('admin.component.search_all')

                {{-- @include('admin.component.language') --}}

                @include('admin.component.light_dark_mode')

                @include('admin.component.notification')

                @include('admin.component.auth')
            </ul>
            <!--end topbar-nav-->
        </nav>
        <!-- end navbar-->
    </div>
</div>
