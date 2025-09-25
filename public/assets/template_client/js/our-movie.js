$(document).ready(function () {
    // 1. Mặc định: chọn "Tất cả"
    $('.filter-row').each(function () {
        const $buttons = $(this).find('button');
        const $allBtn = $buttons.filter(function () {
            return $(this).text().trim() === "Tất cả";
        });
        $allBtn.addClass('active');
    });

    // 2. Click button logic
    $('.filter-row button').on('click', function () {
        const $btn = $(this);
        const $row = $btn.closest('.filter-row');
        const $buttons = $row.find('button');
        const $allBtn = $buttons.filter(function () {
            return $(this).text().trim() === "Tất cả";
        });

        if ($btn.text().trim() === "Tất cả") {
            $buttons.removeClass('active');
            $btn.addClass('active');
        } else {
            $allBtn.removeClass('active');
            $btn.toggleClass('active');
        }

        if ($buttons.not($allBtn).filter('.active').length === 0) {
            $allBtn.addClass('active');
        }
    });

    // --- Định nghĩa loadMovies ngoài ---
    function loadMovies(page = 1, filterData = {}) {
        $.ajax({
            url: '/api/movies/filter',
            type: 'POST',
            data: {
                filters: filterData,
                page: page
            },
            success: function (response) {
                console.log('Phản hồi từ API:', response);
                if (response.success) {
                    $('.tt-inner-movies-row').html(response.html);
                    renderPagination(response.pagination);
                }
            },
            error: function (xhr) {
                console.error('Lỗi API:', xhr.responseText);
            }
        });
    }

    // --- Gọi loadMovies khi vào trang ---
    loadMovies(1);

    // 3a. Click "Lọc kết quả"
    $('.filter-actions .apply').on('click', function (e) {
        e.preventDefault();

        let filterData = {};

        $('.filter-row').each(function () {
            const $row = $(this);
            const $buttons = $row.find('button');
            const name = $buttons.first().attr('name');
            if (!name) return;

            const selectedValues = $buttons.filter('.active').map(function () {
                return $(this).val();
            }).get();

            filterData[name] = selectedValues.length ? selectedValues : [''];
        });

        console.log('Dữ liệu filter gửi đi:', filterData);

        loadMovies(1, filterData); // gọi với filter
    });

    // 3b. Phân trang
    let currentPage = 1; // biến toàn cục để nhớ trang hiện tại

    function renderPagination(pagination) {
        const { current_page, last_page } = pagination;
        currentPage = Number(current_page); // luôn cập nhật lại

        let html = '';

        // Prev
        html += `<a href="#" class="${currentPage <= 1 ? 'disabled' : ''}" data-page="${currentPage - 1}">«</a>`;

        // Trang 1
        html += `<a href="#" class="${currentPage === 1 ? 'active' : ''}" data-page="1">1</a>`;

        if (currentPage > 4) html += `<a href="#" class="disabled">…</a>`;

        // 5 ô quanh currentPage
        const visibleCount = 5;
        let start = Math.max(2, currentPage - 2);
        let end = start + visibleCount - 1;

        if (end >= last_page) {
            end = last_page - 1;
            start = Math.max(2, end - visibleCount + 1);
        }

        for (let i = start; i <= end; i++) {
            html += `<a href="#" class="${i === currentPage ? 'active' : ''}" data-page="${i}">${i}</a>`;
        }

        if (end < last_page - 1) html += `<a href="#" class="disabled">…</a>`;

        if (last_page > 1) {
            html += `<a href="#" class="${currentPage === Number(last_page) ? 'active' : ''}" data-page="${last_page}">${last_page}</a>`;
        }

        // Next
        html += `<a href="#" class="${currentPage >= last_page ? 'disabled' : ''}" data-page="${currentPage + 1}">»</a>`;

        $('.pagination-custom').html(html);

        // Click phân trang
        $('.pagination-custom a').not('.disabled').off('click').on('click', function (e) {
            e.preventDefault();
            const page = Number($(this).data('page'));
            if (!page || page < 1 || page > last_page) return;

            // Lấy filter hiện tại
            let filterData = {};
            $('.filter-row').each(function () {
                const $row = $(this);
                const $buttons = $row.find('button');
                const name = $buttons.first().attr('name');
                if (!name) return;

                const selectedValues = $buttons.filter('.active').map(function () {
                    const val = $(this).val();
                    return val === '' || $(this).text().trim() === 'Tất cả' ? null : val;
                }).get().filter(v => v !== null);

                filterData[name] = selectedValues.length ? selectedValues : [];
            });

            currentPage = page; // cập nhật lại biến toàn cục
            loadMovies(currentPage, filterData);
        });
    }

    // 4. Toggle filter container
    $('#filterToggle').on('click', function () {
        const $filterContainer = $('#filterContainer');
        $(this).toggleClass('active');
        $filterContainer.toggle();
    });

    $('#filterToggleClose').on('click', function () {
        const $filterContainer = $('#filterContainer');
        $('#filterToggle').removeClass('active');
        $filterContainer.hide();
    });
});