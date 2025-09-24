@extends('layouts.client')

@section('clientContent')
<main>
    <!-- BANNER SECTION START -->
    @php($bannerSectionStartItems = $bannerSectionStartItems ?? null)
    @include('client.home.banner-section-start', ['bannerSectionStartItems' => $bannerSectionStartItems])
    <!-- BANNER SECTION END -->


    <!-- TOP 10 SECTION START -->
    {{-- <section class="tt-2-top-10 tt-section-spacing">
        <div class="tt-2-container">
            <h2 class="tt-2-section-title">TOP 10 MOVIES TO WATCH</h2>

            <div class="tt-2-top-10-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">01</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">02</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">03</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">04</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">05</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">06</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">07</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">08</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">09</span>
                        </div>
                    </div>

                    <!-- single item -->
                    <div class="swiper-slide">
                        <div class="tt-2-top-10-item">
                            <div class="tt-2-top-10-item-img">
                                <img src="https://i.pinimg.com/736x/dd/3e/24/dd3e24302c74c2d1d2ef6dbc1fe3565d.jpg" alt="movie cover">
                            </div>
                            <span class="number">10</span>
                        </div>
                    </div>
                </div>

                <div class="tt-2-top-10-slider-nav tt-2-slider-nav">
                    <button class="prev"><i class="flaticon-left-arrow"></i></button>
                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- TOP 10 SECTION END -->


    <!-- POPULAR SHOWS SECTION START -->
    {{-- <section class="tt-2-popular-shows tt-section-spacing pt-0">
        <div class="tt-2-container">
            <h2 class="tt-2-section-title text-center">POPULAR TV SHOWS</h2>

            <div class="tt-2-popular-shows-grid">
                <!-- single item -->
                <div class="tt-2-popular-show">
                    <div class="tt-2-popular-show-img"><img src="assets/img/popular-1.jpg" alt="Show Image"></div>
                    <div class="tt-2-popular-show-txt">
                        <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-popular-show-btn" data-fslightbox="popular-shows"><i class="flaticon-play-button"></i></a>
                        <div class="bottom">
                            <a href="channel.html" class="tt-video__author">T-Series</a>
                            <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                            <div class="tt-video__infos">
                                <span><img src="assets/img/view-icon-white.svg" alt="icon"> 16M views</span>
                                <span><img src="assets/img/clock-icon-white.svg" alt="icon"> 49 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="tt-2-popular-show">
                    <div class="tt-2-popular-show-img"><img src="assets/img/popular-2.jpg" alt="Show Image"></div>
                    <div class="tt-2-popular-show-txt">
                        <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-popular-show-btn" data-fslightbox="popular-shows"><i class="flaticon-play-button"></i></a>
                        <div class="bottom">
                            <a href="channel.html" class="tt-video__author">T-Series</a>
                            <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                            <div class="tt-video__infos">
                                <span><img src="assets/img/view-icon-white.svg" alt="icon"> 16M views</span>
                                <span><img src="assets/img/clock-icon-white.svg" alt="icon"> 49 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="tt-2-popular-show">
                    <div class="tt-2-popular-show-img"><img src="assets/img/popular-3.jpg" alt="Show Image"></div>
                    <div class="tt-2-popular-show-txt">
                        <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-popular-show-btn" data-fslightbox="popular-shows"><i class="flaticon-play-button"></i></a>
                        <div class="bottom">
                            <a href="channel.html" class="tt-video__author">T-Series</a>
                            <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                            <div class="tt-video__infos">
                                <span><img src="assets/img/view-icon-white.svg" alt="icon"> 16M views</span>
                                <span><img src="assets/img/clock-icon-white.svg" alt="icon"> 49 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="tt-2-popular-show">
                    <div class="tt-2-popular-show-img"><img src="assets/img/popular-4.jpg" alt="Show Image"></div>
                    <div class="tt-2-popular-show-txt">
                        <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-popular-show-btn" data-fslightbox="popular-shows"><i class="flaticon-play-button"></i></a>
                        <div class="bottom">
                            <a href="channel.html" class="tt-video__author">T-Series</a>
                            <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                            <div class="tt-video__infos">
                                <span><img src="assets/img/view-icon-white.svg" alt="icon"> 16M views</span>
                                <span><img src="assets/img/clock-icon-white.svg" alt="icon"> 49 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="tt-2-popular-show">
                    <div class="tt-2-popular-show-img"><img src="assets/img/popular-5.jpg" alt="Show Image"></div>
                    <div class="tt-2-popular-show-txt">
                        <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-popular-show-btn" data-fslightbox="popular-shows"><i class="flaticon-play-button"></i></a>
                        <div class="bottom">
                            <a href="channel.html" class="tt-video__author">T-Series</a>
                            <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                            <div class="tt-video__infos">
                                <span><img src="assets/img/view-icon-white.svg" alt="icon"> 16M views</span>
                                <span><img src="assets/img/clock-icon-white.svg" alt="icon"> 49 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="tt-2-popular-show">
                    <div class="tt-2-popular-show-img"><img src="assets/img/popular-6.jpg" alt="Show Image"></div>
                    <div class="tt-2-popular-show-txt">
                        <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-popular-show-btn" data-fslightbox="popular-shows"><i class="flaticon-play-button"></i></a>
                        <div class="bottom">
                            <a href="channel.html" class="tt-video__author">T-Series</a>
                            <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                            <div class="tt-video__infos">
                                <span><img src="assets/img/view-icon-white.svg" alt="icon"> 16M views</span>
                                <span><img src="assets/img/clock-icon-white.svg" alt="icon"> 49 minutes ago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- POPULAR SHOWS SECTION END -->


    <!-- UPCOMING MOVIES SECTION START -->
    <section class="tt-2-upcoming-movies tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <div class="tt-2-section-heading d-flex align-items-center justify-content-between gap-4">
                <h2 class="tt-2-section-title mb-0">Phim Hàn Quốc mới</h2>
                <div class="tt-2-slider-nav mt-0 tt-2-upcoming-movies-slider-nav">
                    <button class="prev"><i class="flaticon-left-arrow"></i></button>
                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>

            <!-- slider -->
            <div class="tt-2-upcoming-movies-slider swiper">
                <div class="swiper-wrapper">

                    @foreach ($koreanMoviesHotItems as $item)
                    <!-- single movie -->
                    <div class="swiper-slide">
                        <div class="tt-2-upcoming-movie">
                            <div class="tt-2-upcoming-movie-img">
                                <img src="{{ $item['poster_url'] }}" alt="Image">
                            </div>

                            <div class="tt-2-trending-movie-txt">
                                <div class="bottom">
                                    <h3 class="tt-2-trending-movie-title"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                                    <div class="tt-2-trending-movie-infos">
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/star-icon-line.svg') }}" alt="icon"> {{ parseImdbRating($item['imdb_rating'] ?? null) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/clock-icon-line.svg') }}" alt="icon"> {{ formatRuntime($item['runtime']) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/4k-icon.svg') }}" alt="icon"> {{ $item['quality'] }} Quality</span>
                                    </div>
                                    <span class="tt-2-trending-movie-genres">{{ $item['english_title'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="tt-2-upcoming-movies tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <div class="tt-2-section-heading d-flex align-items-center justify-content-between gap-4">
                <h2 class="tt-2-section-title mb-0">Phim Trung Quốc mới</h2>
                <div class="tt-2-slider-nav mt-0 tt-2-upcoming-movies-slider-nav">
                    <button class="prev"><i class="flaticon-left-arrow"></i></button>
                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>

            <!-- slider -->
            <div class="tt-2-upcoming-movies-slider swiper">
                <div class="swiper-wrapper">

                    @foreach ($chinaMoviesHotItems as $item)
                    <!-- single movie -->
                    <div class="swiper-slide">
                        <div class="tt-2-upcoming-movie">
                            <div class="tt-2-upcoming-movie-img">
                                <img src="{{ $item['poster_url'] }}" alt="Image">
                            </div>

                            <div class="tt-2-trending-movie-txt">
                                <div class="bottom">
                                    <h3 class="tt-2-trending-movie-title"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                                    <div class="tt-2-trending-movie-infos">
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/star-icon-line.svg') }}" alt="icon"> {{ parseImdbRating($item['imdb_rating'] ?? null) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/clock-icon-line.svg') }}" alt="icon"> {{ formatRuntime($item['runtime']) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/4k-icon.svg') }}" alt="icon"> {{ $item['quality'] }} Quality</span>
                                    </div>
                                    <span class="tt-2-trending-movie-genres">{{ $item['english_title'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="tt-2-upcoming-movies tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <div class="tt-2-section-heading d-flex align-items-center justify-content-between gap-4">
                <h2 class="tt-2-section-title mb-0">Phim US-UK mới</h2>
                <div class="tt-2-slider-nav mt-0 tt-2-upcoming-movies-slider-nav">
                    <button class="prev"><i class="flaticon-left-arrow"></i></button>
                    <button class="next"><i class="flaticon-right-arrow"></i></button>
                </div>
            </div>

            <!-- slider -->
            <div class="tt-2-upcoming-movies-slider swiper">
                <div class="swiper-wrapper">

                    @foreach ($chinaMoviesHotItems as $item)
                    <!-- single movie -->
                    <div class="swiper-slide">
                        <div class="tt-2-upcoming-movie">
                            <div class="tt-2-upcoming-movie-img">
                                <img src="{{ $item['poster_url'] }}" alt="Image">
                            </div>

                            <div class="tt-2-trending-movie-txt">
                                <div class="bottom">
                                    <h3 class="tt-2-trending-movie-title"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                                    <div class="tt-2-trending-movie-infos">
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/star-icon-line.svg') }}" alt="icon"> {{ parseImdbRating($item['imdb_rating'] ?? null) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/clock-icon-line.svg') }}" alt="icon"> {{ formatRuntime($item['runtime']) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/4k-icon.svg') }}" alt="icon"> {{ $item['quality'] }} Quality</span>
                                    </div>
                                    <span class="tt-2-trending-movie-genres">{{ $item['english_title'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- UPCOMING MOVIES SECTION END -->

    <!-- TRENDING MOVIES SECTION START -->
    <section class="tt-2-trending-movies tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <div class="tt-2-trending-movies-heading text-center">
                <span class="icon"><img src="{{ asset(config('app.asset_client_path') . '/img/trending-movie-icon.svg') }}" alt="icon"></span>
                <h2 class="tt-2-section-title">Top 10 Phim Bộ Hôm Nay</h2>
            </div>

            <!-- trending movies slider -->
            <div class="swiper tt-2-trending-movies-slider">
                <div class="swiper-wrapper">

                    @foreach ($top10TvSeriesTodayItems as $item)
                    <!-- single movie -->
                    <div class="swiper-slide">
                        <div class="tt-2-trending-movie">
                            <div class="tt-2-trending-movie-img">
                                <img src="{{ $item['poster_url'] }}" alt="Movie Poster">
                            </div>
                            <div class="tt-2-trending-movie-txt">
                                <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-trending-movie-btn tt-2-popular-show-btn" data-fslightbox="trending-movies"><i class="flaticon-play-button"></i></a>
                                <div class="bottom">
                                    <h3 class="tt-2-trending-movie-title"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                                    <div class="tt-2-trending-movie-infos">
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/star-icon-line.svg') }}" alt="icon"> {{ parseImdbRating($item['imdb_rating'] ?? null) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/clock-icon-line.svg') }}" alt="icon"> {{ formatRuntime($item['runtime']) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/4k-icon.svg') }}" alt="icon"> {{ $item['quality'] }} Quality</span>
                                    </div>
                                    <span class="tt-2-trending-movie-genres">{{ $item['english_title'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- TRENDING MOVIES SECTION END -->

    <!-- WEEKLY SHOWS SECTION START -->
    {{-- <section class="tt-2-weekly-shows tt-section-spacing">
        <div class="tt-2-container">
            <h2 class="tt-2-section-title text-center">WEEKLY POPOULAR SHOWS</h2>

            <div class="row tt-2-weekly-shows-row gx-0 gy-3">
                <!-- video player -->
                <div class="col-xl-7 col-lg-6">
                    <div class="tt-2-video-player">
                        <video src="https://videos.pexels.com/video-files/10558703/10558703-uhd_2732_1440_25fps.mp4" autoplay controls loop muted></video>
                    </div>
                </div>

                <!-- videos -->
                <div class="col-xl-5 col-lg-6">
                    <div class="tt-2-weekly-shows-tabs-wrapper tab-group">
                        <div class="tt-2-weekly-shows-tab-navs">
                            <button data-tab="season-1" class="tab-nav active">Season 1</button>
                            <button data-tab="season-2" class="tab-nav">Season 2</button>
                            <button data-tab="season-3" class="tab-nav">Season 3</button>
                        </div>

                        <div class="tt-2-weekly-shows-tabs">
                            <!-- season 1 -->
                            <div class="ul-tab active" id="season-1">
                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-19.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 1</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-21-1.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 2</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-21.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 3</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- season 2 -->
                            <div class="ul-tab" id="season-2">
                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-7.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 1</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-8.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 2</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-9.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 3</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- season 3 -->
                            <div class="ul-tab" id="season-3">
                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-10.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 1</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-11.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 2</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- single episode -->
                                <div class="tt-2-weekly-show-ep">
                                    <div class="tt-2-weekly-show-ep-img">
                                        <img src="assets/img/video-12.jpg" alt="Episode Poster">
                                        <a href="https://www.youtube.com/watch?v=3ha-kqV0P38" data-fslightbox=""><i class="flaticon-play-button"></i></a>
                                    </div>
                                    <div class="tt-2-weekly-show-ep-txt">
                                        <span class="tt-2-weekly-show-ep-title"><a href="#">Episode 3</a></span>
                                        <span class="tt-2-weekly-show-ep-time">02:30</span>
                                        <a href="#" class="tt-2-weekly-show-ep-trailer-link">Watch The Trailer</a>
                                        <div class="tt-2-weekly-show-ep-interactions">
                                            <span><img src="assets/img/thumbs-up.svg" alt="icon"> 555</span>
                                            <span><img src="assets/img/heart-icon.svg" alt="icon"> 22</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- WEEKLY SHOWS SECTION END -->

    <!-- WEB SERIES SECTION START -->
    <section class="tt-2-web-series tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <h2 class="tt-2-section-title text-center">Kho Tàng Anime Mới Nhất</h2>
        </div>

        <!-- slider -->
        <div class="swiper tt-2-web-series-slider">
            <div class="swiper-wrapper">

                @foreach ($latestAnimeCollectionItems as $item)
                <!-- single web series -->
                <div class="swiper-slide">
                    <div class="tt-2-web-series-item">
                        <div class="tt-2-web-series-item-img">
                            <img src="{{ $item['poster_url'] }}" alt="Web Series Poster">
                        </div>
                        <div class="tt-2-web-series-item-txt">
                            <h3 class="tt-2-web-series-item-title" style="
                                       display:-webkit-box;
                                       -webkit-line-clamp:2;
                                       -webkit-box-orient:vertical;
                                       overflow:hidden;
                                       text-overflow:ellipsis;
                                       margin-top: 5px"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                            <p class="tt-2-web-series-item-genres">{{ $item['english_title'] }}</p>

                            @php($stars = (int) round((float)(parseImdbRating($item['imdb_rating'])) / 2))

                            <div class="tt-2-web-series-item-rating">
                                @for ($i = 1; $i <= 5; $i++) @php($fill=$i <=$stars ? '#FF9046' : '#7A7976' ) <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.418 4.85156L14.3555 5.45312C14.7018 5.50781 14.9388 5.69922 15.0664 6.02734C15.1576 6.3737 15.0846 6.67448 14.8477 6.92969L12.0039 9.71875L12.6602 13.7383C12.7148 14.0846 12.5964 14.3672 12.3047 14.5859C12.013 14.7865 11.7122 14.8047 11.4023 14.6406L7.875 12.7812L4.375 14.6406C4.04688 14.8047 3.73698 14.7865 3.44531 14.5859C3.17188 14.3672 3.05339 14.0846 3.08984 13.7383L3.77344 9.71875L0.929688 6.92969C0.674479 6.67448 0.601562 6.3737 0.710938 6.02734C0.820312 5.69922 1.04818 5.50781 1.39453 5.45312L5.33203 4.85156L7.08203 1.24219C7.26432 0.932292 7.52865 0.768229 7.875 0.75C8.23958 0.768229 8.50391 0.932292 8.66797 1.24219L10.418 4.85156Z" fill="{{ $fill }}" />
                                    </svg>
                                    @endfor
                            </div>

                            <a href="https://youtu.be/y8aMrmW4w-E?si=DDz5RGRR0y2rhmZD" data-fslightbox="web-series" class="tt-2-web-series-item-btn"><span class="txt">Watch Now</span><i class="flaticon-play-button"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="tt-2-trending-movies tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <div class="tt-2-trending-movies-heading text-center">
                <span class="icon"><img src="{{ asset(config('app.asset_client_path') . '/img/trending-movie-icon.svg') }}" alt="icon"></span>
                <h2 class="tt-2-section-title">Top 10 phim lẻ hôm nay</h2>
            </div>

            <!-- trending movies slider -->
            <div class="swiper tt-2-trending-movies-slider">
                <div class="swiper-wrapper">

                    @foreach ($top10MoviesTodayItems as $item)
                    <!-- single movie -->
                    <div class="swiper-slide">
                        <div class="tt-2-trending-movie">
                            <div class="tt-2-trending-movie-img">
                                <img src="{{ $item['poster_url'] }}" alt="Movie Poster">
                            </div>
                            <div class="tt-2-trending-movie-txt">
                                <a href="https://youtu.be/oFkbsEKaoSE?si=q7AuCViipRzJNd9q" class="tt-2-trending-movie-btn tt-2-popular-show-btn" data-fslightbox="trending-movies"><i class="flaticon-play-button"></i></a>
                                <div class="bottom">
                                    <h3 class="tt-2-trending-movie-title"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                                    <div class="tt-2-trending-movie-infos">
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/star-icon-line.svg') }}" alt="icon"> {{ parseImdbRating($item['imdb_rating'] ?? null) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/clock-icon-line.svg') }}" alt="icon"> {{ formatRuntime($item['runtime']) }}</span>
                                        <span><img src="{{ asset(config('app.asset_client_path') . '/img/4k-icon.svg') }}" alt="icon"> {{ $item['quality'] }} Quality</span>
                                    </div>
                                    <span class="tt-2-trending-movie-genres">{{ $item['english_title'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <section class="tt-2-web-series tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <h2 class="tt-2-section-title text-center">Bắc Rạp Xem Phim Hàn</h2>
        </div>

        <!-- slider -->
        <div class="swiper tt-2-web-series-slider">
            <div class="swiper-wrapper">

                @foreach ($koreanCinemaScreeningItems as $item)
                <!-- single web series -->
                <div class="swiper-slide">
                    <div class="tt-2-web-series-item">
                        <div class="tt-2-web-series-item-img">
                            <img src="{{ $item['poster_url'] }}" alt="Web Series Poster">
                        </div>
                        <div class="tt-2-web-series-item-txt">
                            <h3 class="tt-2-web-series-item-title" style="
                                       display:-webkit-box;
                                       -webkit-line-clamp:2;
                                       -webkit-box-orient:vertical;
                                       overflow:hidden;
                                       text-overflow:ellipsis;
                                       margin-top: 5px"><a href="video-details.html">{{ $item['title'] }}</a></h3>
                            <p class="tt-2-web-series-item-genres">{{ $item['english_title'] }}</p>

                            @php($stars = (int) round((float)(parseImdbRating($item['imdb_rating'])) / 2))

                            <div class="tt-2-web-series-item-rating">
                                @for ($i = 1; $i <= 5; $i++) @php($fill=$i <=$stars ? '#FF9046' : '#7A7976' ) <svg width="16" height="15" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.418 4.85156L14.3555 5.45312C14.7018 5.50781 14.9388 5.69922 15.0664 6.02734C15.1576 6.3737 15.0846 6.67448 14.8477 6.92969L12.0039 9.71875L12.6602 13.7383C12.7148 14.0846 12.5964 14.3672 12.3047 14.5859C12.013 14.7865 11.7122 14.8047 11.4023 14.6406L7.875 12.7812L4.375 14.6406C4.04688 14.8047 3.73698 14.7865 3.44531 14.5859C3.17188 14.3672 3.05339 14.0846 3.08984 13.7383L3.77344 9.71875L0.929688 6.92969C0.674479 6.67448 0.601562 6.3737 0.710938 6.02734C0.820312 5.69922 1.04818 5.50781 1.39453 5.45312L5.33203 4.85156L7.08203 1.24219C7.26432 0.932292 7.52865 0.768229 7.875 0.75C8.23958 0.768229 8.50391 0.932292 8.66797 1.24219L10.418 4.85156Z" fill="{{ $fill }}" />
                                    </svg>
                                    @endfor
                            </div>

                            <a href="https://youtu.be/y8aMrmW4w-E?si=DDz5RGRR0y2rhmZD" data-fslightbox="web-series" class="tt-2-web-series-item-btn"><span class="txt">Watch Now</span><i class="flaticon-play-button"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- WEB SERIES SECTION END -->


    <!-- POSTS SECTION START -->
    <section class="tt-2-posts tt-section-spacing">
        <div class="tt-2-container">
            <!-- heading -->
            <div class="tt-2-posts-heading d-flex align-items-center justify-content-between gap-4">
                <h2 class="tt-2-section-title mb-0">ĐÁNH GIÁ VỀ WEBSITE</h2>
                <a href="#" class="tt-2-btn">Xem Tất Cả</a>
            </div>

            <!-- posts -->
            <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 g-4">
                <!-- single post -->
                <div class="col">
                    <div class="tt-2-post">
                        <div class="tt-2-post-img">
                            <img src="https://ticstube-html.temptics.com/assets/img/post-1.jpg" alt="Review Image">
                            <span class="date"><span class="number">10</span><span class="txt">Sep</span></span>
                        </div>

                        <div class="tt-2-post-txt">
                            <div class="tt-2-post-infos">
                                <div class="tt-2-post-info"><img src="{{ asset(config('app.asset_client_path') . '/img/user-icon-2.svg') }}" alt="icon"> Người dùng: Minh Anh</div>
                                <div class="tt-2-post-info"><img src="{{ asset(config('app.asset_client_path') . '/img/comment-icon.svg') }}" alt="icon"> 5 Sao</div>
                            </div>
                            <h3 class="tt-2-post-title" style="
                            display:-webkit-box;
                            -webkit-line-clamp:2;
                            -webkit-box-orient:vertical;
                            overflow:hidden;
                            text-overflow:ellipsis;
                            margin-top: 5px">
                                <a href="#">“Xem phim mượt, hình ảnh sắc nét, mình rất hài lòng!”</a>
                            </h3>
                            <a href="#" class="tt-2-post-btn">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>

                <!-- single post -->
                <div class="col">
                    <div class="tt-2-post">
                        <div class="tt-2-post-img">
                            <img src="https://ticstube-html.temptics.com/assets/img/post-1.jpg" alt="Review Image">
                            <span class="date"><span class="number">05</span><span class="txt">Sep</span></span>
                        </div>

                        <div class="tt-2-post-txt">
                            <div class="tt-2-post-infos">
                                <div class="tt-2-post-info"><img src="{{ asset(config('app.asset_client_path') . '/img/user-icon-2.svg') }}" alt="icon"> Người dùng: Quang Huy</div>
                                <div class="tt-2-post-info"><img src="{{ asset(config('app.asset_client_path') . '/img/comment-icon.svg') }}" alt="icon"> 5 Sao</div>
                            </div>
                            <h3 class="tt-2-post-title" style="
                            display:-webkit-box;
                            -webkit-line-clamp:2;
                            -webkit-box-orient:vertical;
                            overflow:hidden;
                            text-overflow:ellipsis;
                            margin-top: 5px">
                                <a href="#">“Website load nhanh, phim cập nhật liên tục, rất đáng trải nghiệm.”</a>
                            </h3>
                            <a href="#" class="tt-2-post-btn">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>

                <!-- single post -->
                <div class="col">
                    <div class="tt-2-post">
                        <div class="tt-2-post-img">
                            <img src="https://ticstube-html.temptics.com/assets/img/post-1.jpg" alt="Review Image">
                            <span class="date"><span class="number">01</span><span class="txt">Sep</span></span>
                        </div>

                        <div class="tt-2-post-txt">
                            <div class="tt-2-post-infos">
                                <div class="tt-2-post-info"><img src="{{ asset(config('app.asset_client_path') . '/img/user-icon-2.svg') }}" alt="icon"> Người dùng: Thu Trang</div>
                                <div class="tt-2-post-info"><img src="{{ asset(config('app.asset_client_path') . '/img/comment-icon.svg') }}" alt="icon"> 4.5 Sao</div>
                            </div>
                            <h3 class="tt-2-post-title" style="
                            display:-webkit-box;
                            -webkit-line-clamp:2;
                            -webkit-box-orient:vertical;
                            overflow:hidden;
                            text-overflow:ellipsis;
                            margin-top: 5px">
                                <a href="#">“Kho phim rất đa dạng, dễ tìm, giao diện đẹp mắt.”</a>
                            </h3>
                            <a href="#" class="tt-2-post-btn">Xem Chi Tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POSTS SECTION END -->


    <!-- APP AD SECTION START -->
    <section class="tt-2-app-ad">
        <div class="tt-2-container">
            <div class="tt-2-app-ad-content">
                <div class="row align-items-center justify-content-between g-4">
                    <!-- txt -->
                    <div class="col-md-7">
                        <div class="tt-2-app-ad-txt">
                            <h2 class="tt-2-app-ad-title">WELCOME TO MIXIMOVIE</h2>
                            <p class="tt-2-app-ad-descr mb-0">
                                Khám phá kho phim trực tuyến khổng lồ với hàng nghìn bộ phim lẻ, phim bộ, hoạt hình và TV Show
                                được cập nhật liên tục mỗi ngày. Trải nghiệm xem phim nhanh, không giật lag,
                                cùng giao diện hiện đại và dễ sử dụng.
                            </p>
                        </div>
                    </div>

                    <!-- buttons -->
                    <div class="col-lg-4 col-md-5">
                        <div class="tt-2-app-ad-btns d-flex align-items-center justify-content-start justify-content-md-end gap-3">
                            <a href="#movies" class="btn btn-primary px-4 py-2">Khám Phá Ngay</a>
                            <a href="#about" class="btn btn-outline-light px-4 py-2">Giới Thiệu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- APP AD SECTION END -->
</main>
@endsection
