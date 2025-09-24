<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Mixi Movie')</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" href="{{ asset(config('app.asset_client_path') . '/image/logo_icon.png') }}" type="image/x-icon">

<!-- libraries CSS -->
<link rel="stylesheet" href="{{ asset(config('app.asset_client_path') . '/font/flaticon_ticstube.css') }}">
<link rel="stylesheet" href="{{ asset(config('app.asset_client_path') . '/vendor/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset(config('app.asset_client_path') . '/vendor/swiper/swiper-bundle.min.css') }}">
<link rel="stylesheet" href="{{ asset(config('app.asset_client_path') . '/vendor/animate-wow/animate.min.css') }}">

<!-- custom CSS -->
<link rel="stylesheet" href="{{ asset(config('app.asset_client_path') . '/css/style.css') }}">
<link rel="stylesheet" href="{{ asset(config('app.asset_client_path') . '/css/dark.css') }}">

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- TailWind -->
{{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}