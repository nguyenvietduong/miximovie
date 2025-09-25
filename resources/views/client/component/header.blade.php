<header class="tt-2-header to-be-sticky">
    <div class="tt-2-header-container">
        <div class="tt-2-header-content">
            <div class="logo-container">
                <a href="index-2.html"><img src="{{ asset(config('app.asset_client_path') . '/image/logo.png') }}"
                        alt="logo"></a>
            </div>

            <div class="tt-2-header-right">
                <div class="tt-2-header-nav-wrapper">
                    <div class="to-go-to-sidebar-in-mobile">
                        <div class="tt-2-header-nav">
                            <a href="{{ route('miximovie') }}">Trang Chủ</a>
                            <a href="{{ route('ourmovie') }}">Danh Sách Phim</a>
                            <a href="contact.html">Phim Lẻ</a>
                            <a href="contact.html">Phim Bộ</a>
                            <a href="contact.html">Quốc Gia</a>
                            <a href="contact.html">Diễn Viên</a>
                            <a href="contact.html">Liên hệ</a>
                        </div>
                    </div>
                </div>
                <button class="tt-2-header-search-btn p-0"><i class="flaticon-loupe"></i></button>
                @if (Auth::check())
                    <div class="user-dropdown-wrapper">
                        <button class="tt-2-btn d-xxs-none" type="button" id="userDropdownBtn">
                            {{ Auth::user()->name }}
                        </button>

                        <!-- Dropdown modal -->
                        <div id="userDropdown" class="user-dropdown">
                            <ul>
                                <li><a href="/profile">👤 Hồ sơ</a></li>
                                <li><a href="/settings">⚙️ Cài đặt</a></li>
                                <li><a href="/logout">🚪 Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="tt-2-btn d-xxs-none">THÀNH VIÊN</a>
                @endif
                <button class="tt-2-header-sidebar-opener d-block d-lg-none"><i class="flaticon-menu"></i></button>
            </div>
        </div>
    </div>
</header>
<style>
    .user-dropdown-wrapper {
        position: relative;
        /* làm gốc cho dropdown */
        display: inline-block;
    }

    .user-dropdown {
        position: absolute;
        top: 100%;
        right: 0;
        margin-top: 8px;
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 6px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        min-width: 100%;
        /* ít nhất bằng chiều rộng của wrapper (button) */
        display: none;
        z-index: 1000;
    }

    .user-dropdown ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .user-dropdown ul li a {
        display: block;
        padding: 10px 15px;
        color: #333;
        text-decoration: none;
        transition: background 0.2s;
    }

    .user-dropdown ul li a:hover {
        background: #f2f2f2;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btn = document.getElementById("userDropdownBtn");
        const dropdown = document.getElementById("userDropdown");

        btn.addEventListener("click", function(e) {
            e.stopPropagation();
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        });

        // Ấn ngoài thì đóng
        document.addEventListener("click", function() {
            dropdown.style.display = "none";
        });
    });
</script>
