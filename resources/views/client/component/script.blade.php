<!-- libraries JS -->
<script src="{{ asset(config('app.asset_client_path') . '/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset(config('app.asset_client_path') . '/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset(config('app.asset_client_path') . '/vendor/animate-wow/wow.min.js') }}"></script>
<script src="{{ asset(config('app.asset_client_path') . '/vendor/fslightbox/fslightbox.js') }}"></script>
<script src="../cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>

<!-- custom JS -->
<!-- <script src="assets/js/main.js"></script> -->
<script src="{{ asset(config('app.asset_client_path') . '/js/index-2.js') }}"></script>
<script src="{{ asset(config('app.asset_client_path') . '/js/tab.js') }}"></script>
<!-- <script src="assets/js/header.js"></script> -->
<script src="{{ asset(config('app.asset_client_path') . '/js/accordion.js') }}"></script>

<!-- custom JS -->
<script>
    const player = new Plyr('#player', {
        controls: ['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings',
            'airplay', 'fullscreen'
        ],
        settings: ['captions', 'quality', 'speed', 'loop'],
    });

    // same author videos slider
    new Swiper(".tt-same-author-videos-slider", {
        slidesPerView: "auto",
        spaceBetween: 20,
        navigation: {
            nextEl: ".tt-same-author-videos-slider-nav .next",
            prevEl: ".tt-same-author-videos-slider-nav .prev",
        }
    });

    // video details page categories slider
    new Swiper(".tt-video-details__categories-slider", {
        slidesPerView: "auto",
        spaceBetween: 10,
        navigation: {
            nextEl: ".tt-video-details__categories-slider-nav .next",
            prevEl: ".tt-video-details__categories-slider-nav .prev",
        }
    });
</script>
