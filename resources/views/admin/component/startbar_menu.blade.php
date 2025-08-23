<!--start startbar-menu-->
<div class="startbar-menu">
    <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
        <div class="d-flex align-items-start flex-column w-100">
            <!-- Navigation -->
            <ul class="navbar-nav mb-auto w-100">
                <li class="menu-label pt-0 mt-0">
                    <span>Main Menu</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="iconoir-home-simple menu-icon"></i>
                        <span>Dashboards</span>
                    </a>
                    <div class="collapse " id="sidebarDashboards">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Analytics</a>
                            </li>
                            <!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                            </li>
                            <!--end nav-item-->
                        </ul>
                        <!--end nav-->
                    </div>
                    <!--end startbarDashboards-->
                </li>
                <!--end nav-item-->
                <li class="nav-item">
                    {{-- Mục chính: Quản lý tài khoản và vai trò --}}
                    <a class="nav-link" href="#sidebarUserManagement" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUserManagement">
                        <i class="iconoir-view-grid menu-icon"></i>
                        <span>User Management</span>
                    </a>

                    <div class="collapse" id="sidebarUserManagement">
                        <ul class="nav flex-column">
                            {{-- Quản lý vai trò --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.role') }}">
                                    <i class="iconoir-user-square menu-icon"></i>
                                    Role
                                </a>
                            </li>

                            {{-- Quản lý tài khoản --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.account', ['roleId' => 3]) }}">
                                    <i class="iconoir-user-circle menu-icon"></i>
                                    Account
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--end nav-item-->

                {{-- -----------------------------------------  --}}

                @auth
                @if(auth()->user()->role && auth()->user()->role->id == 1)
                <li class="menu-label mt-2">
                    <small class="label-border">
                        <div class="border_left hidden-xs"></div>
                        <div class="border_right"></div>
                    </small>
                    <span>Config</span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="iconoir-settings menu-icon"></i>
                        <span>Command</span>
                    </a>
                    <div class="collapse " id="sidebarPages">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.config.location') }}">Location</a>
                            </li>
                            <!--end nav-item-->
                        </ul>
                        <!--end nav-->
                    </div>
                    <!--end startbarPages-->
                </li>
                <!--end nav-item-->
                @endif
                @endauth
            </ul>
            <!--end navbar-nav--->
        </div>
    </div>
    <!--end startbar-collapse-->
</div>
<!--end startbar-menu-->
