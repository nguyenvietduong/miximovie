@foreach ($movies as $movie)
    <!-- single video -->
    <div class="col">
        <div class="tt-video">
            <a href="{{ route('movie.detail', ['_id' => $movie['_id']]) }}" class="tt-video__thumb"><img
                    src="{{ $movie['poster_url'] }}"
                    alt="{{ $movie['title'] }}"></a>
            <div>
                <a href="{{ route('movie.detail', ['_id' => $movie['_id']]) }}" class="tt-video__author">{{ $movie['english_title'] }}</a>
                <a href="{{ route('movie.detail', ['_id' => $movie['_id']]) }}" class="tt-video__title">{{ $movie['title'] }}</a>
                <div class="tt-video__infos">
                    <span><img src="{{ asset(config('app.asset_client_path') . '/img/view-icon.svg') }}" alt="icon">
                        {{ renderCountryNames($movie['origin_country']) }}</span>
                    <span><img src="{{ asset(config('app.asset_client_path') . '/img/clock-icon.svg') }}"
                            alt="icon"> {{ formatRuntime($movie['runtime']) ?? 'N/A' }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
