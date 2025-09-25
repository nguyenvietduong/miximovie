@extends('layouts.client')
@push('style')
    <style>
        .pagination-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }

        .pagination-custom a {
            display: inline-block;
            margin: 0 4px;
            padding: 8px 12px;
            border: 1px solid green;
            /* viền xanh */
            border-radius: 0;
            /* hình vuông */
            color: white;
            /* chữ xanh */
            text-decoration: none;
            font-weight: 500;
            min-width: 36px;
            text-align: center;
            transition: all 0.3s;
            background-color: transparent;
            /* không nền cho ô chưa chọn */
        }

        /* Trang hiện tại (active) */
        .pagination-custom a.active {
            background-color: green !important;
            color: #fff !important;
            border-color: green !important;
            font-weight: 600 !important;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3) !important;
        }

        /* Hover cho ô chưa chọn */
        .pagination-custom a:hover:not(.active):not(.disabled) {
            background-color: green;
            /* nền nhạt khi hover */
            cursor: pointer;
        }

        /* Ô không click được */
        .pagination-custom a.disabled {
            color: #ccc;
            pointer-events: none;
            background-color: transparent;
            border-color: #ccc;
        }
    </style>
@endpush
@section('clientContent')
    <main>
        <!-- BREADCRUMB SECTION START -->
        {{-- <section class="tt-breadcrumb">
            <div class="tt-breadcrumb-container">
                <h1 class="tt-breadcrumb-title">Phim Của Chúng Tôi</h1>
                <div class="tt-breadcrumb-nav">
                    <a href="index-2.html"><i class="flaticon-home"></i>Trang Chủ</a>
                    <span class="separator"><i class="flaticon-right-arrow"></i></span>
                    <span class="current-page">Phim Của Chúng Tôi</span>
                </div>
            </div>
        </section> --}}
        <!-- BREADCRUMB SECTION END -->

        <section class="tt-section-spacing-search">
            <div class="tt-inner-movies-container">
                <div class="filter-toggle" id="filterToggle">
                    <span class="arrow">▶</span> Bộ lọc
                </div>
                <form method="GET" action="" class="filter-container" id="filterContainer">
                    <!-- Nội dung bộ lọc -->
                    <div class="filter-row">
                        <span>Quốc Gia:</span>
                        <button type="button" name="countries" value="" checked>Tất cả</button>
                        <button type="button" name="countries" value="GB">Anh</button>
                        <button type="button" name="countries" value="CA">Canada</button>
                        <button type="button" name="countries" value="KR">Hàn Quốc</button>
                        <button type="button" name="countries" value="HK">Hồng Kông</button>
                        <button type="button" name="countries" value="US">Mỹ</button>
                        <button type="button" name="countries" value="JP">Nhật Bản</button>
                        <button type="button" name="countries" value="FR">Pháp</button>
                        <button type="button" name="countries" value="TH">Thái Lan</button>
                        <button type="button" name="countries" value="CN">Trung Quốc</button>
                        <button type="button" name="countries" value="AU">Úc</button>
                        <button type="button" name="countries" value="TW">Đài Loan</button>
                        <button type="button" name="countries" value="DE">Đức</button>
                        <!-- thêm nữa -->
                    </div>
                    <div class="filter-row">
                        <span>Loại Phim:</span>
                        <button type="button" name="type" value="">Tất cả</button>
                        <button type="button" name="type" value="1">Phim lẻ</button>
                        <button type="button" name="type" value="2">Phim bộ</button>
                    </div>
                    <div class="filter-row">
                        <span>Thể loại:</span>
                        <button type="button" name="genres" value="">Tất cả</button>
                        <button type="button" name="genres" value="TKMmgF">Anime</button>
                        <button type="button" name="genres" value="T6q81e">Bí Ẩn</button>
                        <button type="button" name="genres" value="Pr7kIn">Chiến Tranh</button>
                        <button type="button" name="genres" value="3679nF">Chiếu Rạp</button>
                        <button type="button" name="genres" value="wSzjQd">Chuyển Thể</button>
                        <button type="button" name="genres" value="1gOywM">Chính Kịch</button>
                        <button type="button" name="genres" value="IusvEH">Chính Luận</button>
                        <button type="button" name="genres" value="eF8pjq">Chính Trị</button>
                        <button type="button" name="genres" value="w4NxOV">Cung Đấu</button>
                        <button type="button" name="genres" value="4FLGnx">Cuối Tuần</button>
                        <button type="button" name="genres" value="kXl4k8">Cách Mạng</button>
                        <button type="button" name="genres" value="OGqPaU">Cổ Trang</button>
                        <button type="button" name="genres" value="qEmD7r">Cổ Tích</button>
                        <button type="button" name="genres" value="MKSFtq">Cổ Điển</button>
                        <button type="button" name="genres" value="GNUW6k">DC</button>
                        <button type="button" name="genres" value="MCencW">Disney</button>
                        <button type="button" name="genres" value="3PP9q7">Gay Cấn</button>
                        <button type="button" name="genres" value="8VSWst">Gia Đình</button>
                        <button type="button" name="genres" value="9Pue1r">Giáng Sinh</button>
                        <button type="button" name="genres" value="zUEian">Giả Tưởng</button>
                        <button type="button" name="genres" value="12JqxG">Hoàng Cung</button>
                        <button type="button" name="genres" value="ZERgfX">Hoạt Hình</button>
                        <button type="button" name="genres" value="W8Dn2a">Hài</button>
                        <button type="button" name="genres" value="2xCjTG">Hành Động</button>
                        <button type="button" name="genres" value="IN1LmJ">Hình Sự</button>
                        <button type="button" name="genres" value="n7N6C6">Học Đường</button>
                        <button type="button" name="genres" value="Rqm5ON">Khoa Học</button>
                        <button type="button" name="genres" value="43tNdP">Kinh Dị</button>
                        <button type="button" name="genres" value="ky4BgF">Kinh Điển</button>
                        <button type="button" name="genres" value="ifyky8">Kịch Nói</button>
                        <button type="button" name="genres" value="gVRG25">Kỳ Ảo</button>
                        <button type="button" name="genres" value="J1tgRB">LGBT+</button>
                        <button type="button" name="genres" value="2yxWKe">Live Action</button>
                        <button type="button" name="genres" value="tvr5v7">Lãng Mạn</button>
                        <button type="button" name="genres" value="oWQlWU">Lịch Sử</button>
                        <button type="button" name="genres" value="QriAOn">Marvel</button>
                        <button type="button" name="genres" value="5J36Eg">Miền Viễn Tây</button>
                        <button type="button" name="genres" value="noqlEF">Nghề Nghiệp</button>
                        <button type="button" name="genres" value="xUdGau">Người Mẫu</button>
                        <button type="button" name="genres" value="QyBY48">Nhạc Kịch</button>
                        <button type="button" name="genres" value="wca3Bp">Phiêu Lưu</button>
                        <button type="button" name="genres" value="m62MH1">Phép Thuật</button>
                        <button type="button" name="genres" value="OW2M9i">Siêu Anh Hùng</button>
                        <button type="button" name="genres" value="TVBHfX">Thiếu Nhi</button>
                        <button type="button" name="genres" value="ntFmAk">Thần Thoại</button>
                        <button type="button" name="genres" value="v6YIEt">Thể Thao</button>
                        <button type="button" name="genres" value="iu6SWz">Tuổi Trẻ</button>
                        <button type="button" name="genres" value="8r9bCI">Tài Liệu</button>
                        <button type="button" name="genres" value="epV6Ny">Tâm Lý</button>
                        <button type="button" name="genres" value="4RxsoY">Tình Cảm</button>
                        <button type="button" name="genres" value="qHXC9f">Tập Luyện</button>
                        <button type="button" name="genres" value="wN4Ysm">Viễn Tưởng</button>
                        <button type="button" name="genres" value="s68Tsc">Võ Thuật</button>
                        <button type="button" name="genres" value="ujD7Uu">Xuyên Không</button>
                        <button type="button" name="genres" value="xY58yG">Đau Thương</button>
                        <button type="button" name="genres" value="Lnhyb0">Đời Thường</button>
                        <button type="button" name="genres" value="nYHmnx">Ẩm Thực</button>
                    </div>
                    <div class="filter-row">
                        <span>Phiên Bản:</span>
                        <button type="button" name="versions" value="">Tất cả</button>
                        <button type="button" name="versions" value="1">Phụ Đề</button>
                        <button type="button" name="versions" value="2">Lồng Tiếng</button>
                    </div>
                    <div class="filter-row">
                        <span>Năm Sản Xuất:</span>
                        <button>Tất cả</button>
                        @for ($i = 2025; $i >= 2000; $i--)
                            <button type="button" name="years" value="$i">{{ $i }}</button>
                        @endfor
                    </div>
                    <div class="filter-actions">
                        <button type="button" class="apply" id="apply">Lọc kết quả</button>
                        <button type="button" class="close" id="filterToggleClose">Đóng</button>
                    </div>
                </form>
            </div>
        </section>

        <!-- MOVIES SECTION START -->
        <section class="tt-section-spacing">
            <div class="tt-inner-movies-container">
                <!-- video cards -->
                <div class="row row-cols-xxl-5 row-cols-lg-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 tt-inner-movies-row">
                </div>

            </div>
            <!-- Custom Hard-coded Pagination dạng ô vuông -->

            <div class="pagination-wrapper">
                <div class="pagination-custom">
                    <!-- Pagination sẽ được render bằng JS -->
                </div>
            </div>
        </section>
        <!-- MOVIES SECTION END -->

        <!-- APP AD SECTION START -->
        @include('client.component.app-ad-section-start')
        <!-- APP AD SECTION END -->
    </main>
@endsection
@push('scripts')
    <script src="{{ asset(config('app.asset_client_path') . '/js/our-movie.js') }}"></script>
@endpush
