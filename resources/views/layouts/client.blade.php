<!DOCTYPE html>
<html lang="en">
<head>
    <!-- HEAD SECTION START -->
    @include('client.component.head')
    <!-- HEAD SECTION END -->
</head>
@stack('style')
<body class="dark-mode p-0">
    
    <!-- BACK TO TOP SECTION START -->
    @include('client.component.back-to-top')
    <!-- BACK TO TOP SECTION END -->

    <!-- search modal -->
    <div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
        <button class="ul-search-closer"><i class="flaticon-close-1"></i></button>

        <form action="#" class="ul-search-form">
            <div class="ul-search-form-right">
                <input type="search" name="search" id="ul-search" placeholder="Search Here">
                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
            </div>
        </form>
    </div>
    <!-- search modal -->

    <!-- user profile dropdown -->
    <div class="tt-user-dropdown">
        <!-- heading -->
        <div class="user-account px">
            <div class="img">
                <img src="assets/img/user-dp-2.png" alt="User Profile Picture">
            </div>
            <div>
                <a href="channel.html" class="name">David Hanson</a>
                <span class="username">@David420</span>
            </div>
        </div>

        <!-- account & channel -->
        <div class="account-channel px py">
            <a href="user-settings.html"><i class="flaticon-user"></i> My Account</a>
            <a href="#"><i class="flaticon-premium-quality"></i> Membership Plan</a>
            <a href="#"><i class="flaticon-history"></i> Watch History</a>
            <div class="ul-accordion sa-accordion w-100 d-none">
                <div class="switch-channel tt-single-accordion-item sa-single-accordion-item">
                    <a role="button"><i class="flaticon-dots"></i> Switch Channel</a>

                    <!-- list -->
                    <div class="channel-list">
                        <!-- single channel -->
                        <div class="channel">
                            <div class="left">
                                <div class="img">
                                    <img src="assets/img/user-dp-2.png" alt="User Profile Picture">
                                </div>
                                <div>
                                    <a href="channel.html" class="name">David Hanson</a>
                                    <span class="username">@David420</span>
                                </div>
                            </div>

                            <button><i class="flaticon-right-arrow"></i></button>
                        </div>

                        <!-- single channel -->
                        <div class="channel">
                            <div class="left">
                                <div class="img">
                                    <img src="assets/img/user-dp-2.png" alt="User Profile Picture">
                                </div>
                                <div>
                                    <a href="channel.html" class="name">David Hanson</a>
                                    <span class="username">@David420</span>
                                </div>
                            </div>

                            <button><i class="flaticon-right-arrow"></i></button>
                        </div>

                        <!-- single channel -->
                        <div class="channel">
                            <div class="left">
                                <div class="img">
                                    <img src="assets/img/user-dp-2.png" alt="User Profile Picture">
                                </div>
                                <div>
                                    <a href="channel.html" class="name">David Hanson</a>
                                    <span class="username">@David420</span>
                                </div>
                            </div>

                            <button><i class="flaticon-right-arrow"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- user actions -->
        <div class="account-channel px py border-0 pb-1">
            <a href="#"><i class="flaticon-help"></i> Help</a>
            <a href="#"><i class="flaticon-sign-out"></i> Sign Out</a>
        </div>
    </div>

    <div class="tt-overlay"></div>

    <!-- sidebar -->
    <div class="ul-sidebar">
        <!-- header -->
        <div class="ul-sidebar-header">
            <div class="ul-sidebar-header-logo">
                <a href="index-2.html">
                    <img src="{{ asset(config('app.asset_client_path') . '/image/logo.png') }}" alt="logo" class="logo">
                </a>
            </div>
            <!-- sidebar closer -->
            <button class="ul-sidebar-closer"><i class="flaticon-close-1"></i></button>
        </div>

        <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>


        <!-- sidebar footer -->
        <div class="ul-sidebar-footer d-none">
            <span class="ul-sidebar-footer-title">Follow us</span>

            <div class="ul-sidebar-footer-social">
                <a href="#"><i class="flaticon-facebook"></i></a>
                <a href="#"><i class="flaticon-twitter"></i></a>
                <a href="#"><i class="flaticon-instagram"></i></a>
                <a href="#"><i class="flaticon-linkedin-big-logo"></i></a>
            </div>
        </div>
    </div>

    <!-- HEADER SECTION START -->
    @include('client.component.header')
    <!-- HEADER SECTION END -->

    @yield('clientContent')

    @stack('scripts')

    <!-- HEADER SECTION START -->
    @include('client.component.footer')
    <!-- HEADER SECTION END -->

    <!-- SCRIPT SECTION START -->
    @include('client.component.script')
    <!-- SCRIPT SECTION END -->
</body>
</html>
