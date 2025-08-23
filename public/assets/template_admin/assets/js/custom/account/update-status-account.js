$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.toggle-active').on('change', function () {
        const userId = $(this).data('id');
        const isActive = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: urlUpdateStatusAccount,
            method: 'POST',
            data: {
                id: userId,
                isActive: isActive
            },
            success: function (response) {
                executeExample('success', response.message || 'Cập nhật thành công');
            },
            error: function (xhr) {
                const message = xhr.responseJSON?.message || 'Đã xảy ra lỗi không xác định';
                executeExample('error', message);
                location.reload();
            }
        });
    });
});