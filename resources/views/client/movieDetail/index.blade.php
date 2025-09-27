@extends('layouts.client')
@push('style')
@endpush
@section('clientContent')
    <main>
        <section class="tt-section-spacing-search"></section>

        <!-- VIDEO DETAILS SECTION START -->
        <div class="tt-video-details-container tt-section-spacing">
            <div class="tt-video-details">
                <div class="d-flex align-items-start">
                    <!-- left video details -->
                    <div class="tt-video-details__left">
                        <div class="tt-video-details__video">
                            <video src="https://videos.pexels.com/video-files/5528003/5528003-uhd_2560_1440_25fps.mp4"
                                playsinline controls id="player"
                                data-poster="../i.ytimg.com/vi/h8-qemIbXbo/maxresdefault.jpg"></video>
                        </div>

                        <div>
                            <div class="tt-video-details__heading">
                                <!-- infos -->
                                <div class="left">
                                    <div class="tt-video-details__info"><img
                                            src="{{ asset(config('app.asset_client_path') . '/img/clock-icon-line.svg') }}"
                                            alt="icon">{{ formatRuntime($movie['runtime']) }}</div>
                                    <div class="tt-video-details__info"><img
                                            src="{{ asset(config('app.asset_client_path') . '/img/4k-icon.svg') }}"
                                            alt="icon">Quality</div>
                                </div>

                                <!-- actions -->
                                <div class="right">
                                    <button><i class="flaticon-like"></i> <span>Like</span></button>
                                    <button><i class="flaticon-dislike"></i> <span>Dislike</span></button>
                                    <button><i class="flaticon-report"></i> <span>Report</span></button>
                                    <button><i class="flaticon-add-1"></i> <span>Add to My List</span></button>
                                    <div class="position-relative share-btn"><i class="flaticon-share"></i>
                                        <span>Share</span>
                                        <div class="share-options">
                                            <a href="#"><i class="flaticon-facebook"></i></a>
                                            <a href="#"><i class="flaticon-twitter"></i></a>
                                            <a href="#"><i class="flaticon-social-media"></i></a>
                                            <a href="#"><i class="flaticon-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h5 class="tt-video-details__title">{{ $movie['title'] }}</h5>

                            <div class="tt-video-details__descr">
                                <p class="mb-0">{!! $movie['overview'] !!}</p>
                            </div>

                            <!-- cast and creator -->
                            <div class="tt-video-details__casts">
                                <h5 class="tt-video-details__inner-title">Diễn Viên</h5>
                                <div class="tt-video-details__cast-list">

                                    @foreach ($movie['casts'] as $key => $cast)
                                        <div class="tt-video-details__cast"><img src="{{ $cast['cast']['profile_path'] }}"
                                                alt="Cast Image">
                                            <span class="name">{{ $cast['cast']['name'] }}</span>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <!-- comment -->
                            <div class="tt-video-details__comment-container">
                                <div class="tt-video-details__comment-form-container">
                                    <div class="heading">
                                        <h5 class="mb-0">04 Comments</h5>
                                        <select name="comment-sort" id="comment-sort">
                                            <option value="none" hidden>Sort by</option>
                                            <option value="Top Comments">Top Comments</option>
                                            <option value="New Comments">New Comments</option>
                                        </select>
                                    </div>
                                    <form action="#" class="tt-video-details__comment-form">
                                        <textarea name="comment" placeholder="Add a comment..."></textarea>
                                        <div class="btns">
                                            <button type="button">Cancel</button>
                                            <button type="submit">Post Comment</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- all comments -->
                                <div class="tt-video-details__comments">
                                    <!-- single comment -->
                                    <div class="tt-video-details__comment">
                                        <div class="tt-video-details__comment-avatar">
                                            <img src="assets/img/user-dp-1.png" alt="Commenter Profile Picture">
                                        </div>
                                        <div class="tt-video-details__comment-text">
                                            <div class="tt-video-details__comment-head">
                                                <a href="#" class="tt-video-details__comment-author">@Puspendrath</a>
                                                <span class="tt-video-details__comment-date">2 days ago</span>
                                            </div>
                                            <p class="mb-0">That's why science should not play with nature</p>
                                        </div>
                                        <button class="tt-video-details__comment-action">Reply</button>
                                    </div>

                                    <!-- single comment -->
                                    <div class="tt-video-details__comment">
                                        <div class="tt-video-details__comment-avatar">
                                            <img src="assets/img/cast-2.png" alt="Commenter Profile Picture">
                                        </div>
                                        <div class="tt-video-details__comment-text">
                                            <div class="tt-video-details__comment-head">
                                                <a href="#" class="tt-video-details__comment-author">@Puspendrath</a>
                                                <span class="tt-video-details__comment-date">2 days ago</span>
                                            </div>
                                            <p class="mb-0">That's why science should not play with nature</p>
                                        </div>
                                        <button class="tt-video-details__comment-action">Reply</button>
                                    </div>

                                    <!-- single comment -->
                                    <div class="tt-video-details__comment">
                                        <div class="tt-video-details__comment-avatar">
                                            <img src="assets/img/cast-8.png" alt="Commenter Profile Picture">
                                        </div>
                                        <div class="tt-video-details__comment-text">
                                            <div class="tt-video-details__comment-head">
                                                <a href="#" class="tt-video-details__comment-author">@Puspendrath</a>
                                                <span class="tt-video-details__comment-date">2 days ago</span>
                                            </div>
                                            <p class="mb-0">That's why science should not play with nature</p>
                                        </div>
                                        <button class="tt-video-details__comment-action">Reply</button>
                                    </div>

                                    <!-- single comment -->
                                    <div class="tt-video-details__comment">
                                        <div class="tt-video-details__comment-avatar">
                                            <img src="assets/img/cast-5.png" alt="Commenter Profile Picture">
                                        </div>
                                        <div class="tt-video-details__comment-text">
                                            <div class="tt-video-details__comment-head">
                                                <a href="#" class="tt-video-details__comment-author">@Puspendrath</a>
                                                <span class="tt-video-details__comment-date">2 days ago</span>
                                            </div>
                                            <p class="mb-0">That's why science should not play with nature</p>
                                        </div>
                                        <button class="tt-video-details__comment-action">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- right side videos -->
                    <div class="tt-video-details__right">

                        <div class="tt-video-details__right-videos">
                            <!-- single video -->
                            <div class="tt-video-horizontal">
                                <div class="thumbnail">
                                    <img src="assets/img/video-12.jpg" alt="Thumbnail">
                                </div>
                                <div>
                                    <a href="channel.html" class="tt-video__author">T-Series</a>
                                    <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                                    <div class="tt-video__infos">
                                        <span><img src="assets/img/view-icon.svg" alt="icon"> 16M views</span>
                                        <span><img src="assets/img/clock-icon.svg" alt="icon"> 49 minutes ago</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single video -->
                            <div class="tt-video-horizontal">
                                <div class="thumbnail">
                                    <img src="assets/img/video-13.jpg" alt="Thumbnail">
                                </div>
                                <div>
                                    <a href="channel.html" class="tt-video__author">T-Series</a>
                                    <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                                    <div class="tt-video__infos">
                                        <span><img src="assets/img/view-icon.svg" alt="icon"> 16M views</span>
                                        <span><img src="assets/img/clock-icon.svg" alt="icon"> 49 minutes ago</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single video -->
                            <div class="tt-video-horizontal">
                                <div class="thumbnail">
                                    <img src="assets/img/video-14.jpg" alt="Thumbnail">
                                </div>
                                <div>
                                    <a href="channel.html" class="tt-video__author">T-Series</a>
                                    <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                                    <div class="tt-video__infos">
                                        <span><img src="assets/img/view-icon.svg" alt="icon"> 16M views</span>
                                        <span><img src="assets/img/clock-icon.svg" alt="icon"> 49 minutes ago</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single video -->
                            <div class="tt-video-horizontal">
                                <div class="thumbnail">
                                    <img src="assets/img/video-15.jpg" alt="Thumbnail">
                                </div>
                                <div>
                                    <a href="channel.html" class="tt-video__author">T-Series</a>
                                    <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                                    <div class="tt-video__infos">
                                        <span><img src="assets/img/view-icon.svg" alt="icon"> 16M views</span>
                                        <span><img src="assets/img/clock-icon.svg" alt="icon"> 49 minutes ago</span>
                                    </div>
                                </div>
                            </div>

                            <!-- single video -->
                            <div class="tt-video-horizontal">
                                <div class="thumbnail">
                                    <img src="assets/img/video-11.jpg" alt="Thumbnail">
                                </div>
                                <div>
                                    <a href="channel.html" class="tt-video__author">T-Series</a>
                                    <a href="video-details.html" class="tt-video__title">What is Lorem Ipsum?</a>
                                    <div class="tt-video__infos">
                                        <span><img src="assets/img/view-icon.svg" alt="icon"> 16M views</span>
                                        <span><img src="assets/img/clock-icon.svg" alt="icon"> 49 minutes ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- VIDEO DETAILS SECTION END -->
    </main>
@endsection
@push('scripts')
@endpush
