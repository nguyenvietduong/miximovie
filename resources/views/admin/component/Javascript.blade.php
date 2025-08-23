<!-- Encode translations -->
<script>
    const translations = @json(trans('messages.system', [], app()->getLocale()));

    const language = '{{ App::getLocale() }}';

    $(document).ready(function() {
        @if (session('success'))
            executeExample('success', '{{ session('success') }}', 'Thành công!');
        @elseif (session('error'))
            executeExample('error', '{{ session('error') }}', 'Lỗi xảy ra!');
        @endif
    });

    function executeExample(type, message = '', title = '') {
        if (!title) {
            title = type === 'success' ? translations.successTitle : translations.errorTitle;
        }
        Swal.fire({
            icon: type,
            title: title,
            text: message,
        });
    }
        
    var csrfToken = '{{ csrf_token() }}';

    window.hasImageTemp = @json(session()->has('image_temp'));
</script>

<!-- Bootstrap v5 JS (after jQuery) -->
<script src="{{ asset(config('app.asset_admin_path') . '/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Additional JS libraries -->
<script src="{{ asset(config('app.asset_admin_path') . '/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset(config('app.asset_admin_path') . '/libs/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset(config('app.asset_admin_path') . '/js/pages/sweet-alert.init.js') }}"></script>
<script src="{{ asset(config('app.asset_admin_path') . '/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>

<!-- Custom Scripts -->
<script src="{{ asset(config('app.asset_admin_path') . '/js/app.js') }}"></script>
<script src="{{ asset(config('app.asset_admin_path') . '/libs/uppy/uppy.legacy.min.js') }}"></script>
<script src="{{ asset(config('app.asset_admin_path') . '/js/pages/file-upload.init.js') }}"></script>
<script src="{{ asset(config('app.asset_admin_path') . '/js/pages/form-wizard.js') }}"></script>
@stack('script')