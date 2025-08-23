<!DOCTYPE html>
<html class="bg-white dark:bg-gray-950 scheme-light dark:scheme-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mixi Movie')</title>
    <link rel="icon" href="{{ asset(config('app.asset_client_path') . '/image/logo_icon.png') }}" type="image/x-icon">

    <!-- TailWind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-[rgb(25_27_36)] text-white">
    @include('client.component.back-to-top')

    @include('client.component.popup')

    @include('client.component.header')

    @include('client.component.slider')

    {{-- @include('client.component.ad-frame-one', [
        'image' => 'https://i.finallygotthexds.site/vpromolink/9b/09/9b09d624b9c8127b0596bf87fce25497/9b09d624b9c8127b0596bf87fce25497.gif',
    ]) --}}

    @yield('clientContent')

    @stack('scripts')

    <script>
        const header = document.getElementById("main-header");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                header.classList.remove("bg-transparent");
                header.classList.add("bg-gray-900/90", "backdrop-blur");
            } else {
                header.classList.add("bg-transparent");
                header.classList.remove("bg-gray-900/90", "backdrop-blur");
            }
        });
    </script>
</body>

</html>
