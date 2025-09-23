@if(isset($bannerSectionStartItems))
<section class="tt-2-banner">
    <div class="tt-2-banner-slider swiper">
        <div class="swiper-wrapper">

            <!-- single slide -->
            @foreach ($bannerSectionStartItems as $item)
            <div class="swiper-slide banner-slide" style="background: url('{{ $item['backdrop_url'] }}') no-repeat center center;
           background-size: cover; position: relative">

                <!-- overlay mờ -->
                <div style="position: absolute; top:0; left:0; right:0; bottom:0; background: rgba(0,0,0,0.6); z-index:1;"></div>

                <div class="tt-2-banner-slide" style="position: relative; z-index: 2;">
                    <div class="tt-2-banner-slide-container">
                        <div class="row row-cols-md-2 row-cols-1 align-items-center g-5">
                            <!-- txt -->
                            <div class="col">
                                <img src="{{ $item['title_url'] }}" alt="Image" style="margin-bottom: 5px">

                                @if (isset($item['genres']))
                                @foreach ($item['genres'] as $item_genre)   
                                <span class="tt-2-banner-genre">{{ $item_genre['name'] }}</span>
                                @endforeach
                                @endif
                                <p class="tt-2-banner-descr" style="font-size:15px;
                                       display:-webkit-box;
                                       -webkit-line-clamp:3;
                                       -webkit-box-orient:vertical;
                                       overflow:hidden;
                                       text-overflow:ellipsis;
                                       margin-top: 5px">
                                    {{ $item['overview'] }}
                                </p>
                                <div class="tt-2-banner-btns">
                                    <a href="#" class="tt-2-btn">Xem ngay <i class="flaticon-play-button"></i></a>
                                </div>
                            </div>

                            <!-- img -->
                            <div class="col">
                                <div class="tt-2-banner-imgs">
                                    <div class="img-1">
                                        {{-- <img src="{{ $item['title_url'] }}" alt="Image"> --}}
                                    </div>
                                    <img src="{{ $item['poster_url'] }}" alt="Image" class="img-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="tt-2-banner-slider-nav">
            <button class="prev"><i class="flaticon-left-arrow"></i></button>
            <button class="next"><i class="flaticon-right-arrow"></i></button>
        </div>
    </div>
</section>
@endif

@push('style')
<style>
    .tt-2-banner-genre {
        font-size: 8px;
        font-weight: 500;
        background: #ff4757;
        color: #fff;
        padding: 4px 10px;
        border-radius: 20px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

</style>
@endpush
