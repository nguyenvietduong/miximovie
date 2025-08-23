@extends('layouts.admin')
@section('adminContent')
<div class="container-xxl">
    <div class="row justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center mb-3">
                            <div class="col">
                                <form id="import-location-form">
                                    @csrf
                                    <button type="submit" class="btn btn-success">
                                        Run Command ImportVietnamLocations
                                    </button>
                                </form>
                            </div>
                            <div class="col text-end">
                                <div id="response-message" class="m-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loading-overlay" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; z-index:9999; background:rgba(0,0,0,0.5);">
        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white;">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <div class="mt-2">{{ config('custom.messages.importing') }}</div>
        </div>
    </div>
@endsection

@push('script')
<script>
    $(function () {
        $('#import-location-form').on('submit', function (e) {
            e.preventDefault();

            if (confirm('Bạn chắc chắn chứ!')) {
                $('#loading-overlay').fadeIn();

                $.ajax({
                    url: "{{ route('admin.config.location.import') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (response) {
                        $('#loading-overlay').fadeOut();
                        $('#response-message')
                            .removeClass('alert-danger')
                            .addClass('alert alert-success')
                            .text(response.message ?? 'Import thành công.');
                    },
                    error: function (xhr) {
                        $('#loading-overlay').fadeOut();
                        let errorMessage = xhr.responseJSON?.message || 'Đã xảy ra lỗi!';
                        $('#response-message')
                            .removeClass('alert-success')
                            .addClass('alert alert-danger')
                            .text(errorMessage);
                    }
                });
            }
        });
    });
</script>
@endpush