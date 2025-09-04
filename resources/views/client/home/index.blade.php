@extends('layouts.client')

@section('clientContent')
<div class="container-xxl mx-auto px-4">
    <div class="w-full max-w-8xl mx-auto">
        <div class="mb-4">
            <h3 class="text-[25px] font-semibold">Bạn đang quan tâm gì?</h3>
        </div>

        <!-- Topics List -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-4">

            <!-- Topic Item -->
            <a href="/c/marvel-sieu-anh-hung.vhyYAW" class="relative aspect-[16/9] rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                <div class="absolute inset-0 bg-[#324fd1] opacity-60"></div>
                <div class="relative p-4 flex flex-col justify-between h-full">
                    <div class="text-white text-lg font-medium truncate mb-2">Marvel</div>
                    <div>
                        <div class="inline-flex items-center gap-1 text-white px-2 py-1 text-sm transition">
                            <span>Xem chủ đề</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/c/4k.bZE4Tf" class="relative aspect-[16/9] rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                <div class="absolute inset-0 bg-[#666699] opacity-60"></div>
                <div class="relative p-4 flex flex-col justify-between h-full">
                    <div class="text-white text-lg font-medium truncate mb-2">4K</div>
                    <div>
                        <div class="inline-flex items-center gap-1 text-white px-2 py-1 text-sm transition">
                            <span>Xem chủ đề</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/c/sitcom-series-us.SosVge" class="relative aspect-[16/9] rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                <div class="absolute inset-0 bg-[#1b856c] opacity-60"></div>
                <div class="relative p-4 flex flex-col justify-between h-full">
                    <div class="text-white text-lg font-medium truncate mb-2">Sitcom</div>
                    <div>
                        <div class="inline-flex items-center gap-1 text-white px-2 py-1 text-sm transition">
                            <span>Xem chủ đề</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/c/long-tieng-cuc-manh.PGxRUU" class="relative aspect-[16/9] rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                <div class="absolute inset-0 bg-[#7961b4] opacity-60"></div>
                <div class="relative p-4 flex flex-col justify-between h-full">
                    <div class="text-white text-lg font-medium truncate mb-2">Lồng Tiếng Cực Mạnh</div>
                    <div>
                        <div class="inline-flex items-center gap-1 text-white px-2 py-1 text-sm transition">
                            <span>Xem chủ đề</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/c/xuyen-khong.3TQ3S1" class="relative aspect-[16/9] rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                <div class="absolute inset-0 bg-[#cd7e5f] opacity-60"></div>
                <div class="relative p-4 flex flex-col justify-between h-full">
                    <div class="text-white text-lg font-medium truncate mb-2">Xuyên Không</div>
                    <div>
                        <div class="inline-flex items-center gap-1 text-white px-2 py-1 text-sm transition">
                            <span>Xem chủ đề</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/c/co-trang.wCSzYH" class="relative aspect-[16/9] rounded-xl overflow-hidden group transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                <div class="absolute inset-0 bg-[#a73939] opacity-60"></div>
                <div class="relative p-4 flex flex-col justify-between h-full">
                    <div class="text-white text-lg font-medium truncate mb-2">Cổ Trang</div>
                    <div>
                        <div class="inline-flex items-center gap-1 text-white px-2 py-1 text-sm transition">
                            <span>Xem chủ đề</span>
                            <i class="fa-solid fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </a>

            <!-- More Topics -->
            <a href="/chu-de" class="relative aspect-[16/9] rounded-xl overflow-hidden flex items-center justify-center p-4 bg-[#2e3245] text-white text-lg font-medium transform transition duration-300 hover:-translate-y-2 hover:scale-105 shadow-md hover:shadow-xl">
                +4 chủ đề
            </a>
        </div>
    </div>

    <div class="movie-section mt-10">
        <div class="flex flex-col lg:flex-row lg:items-start gap-6 w-full">

            <!-- Tiêu đề -->
            <div class="flex flex-col lg:w-[248px]">
                <h3 class="text-[28px] font-semibold bg-gradient-to-r from-white to-purple-700 bg-clip-text text-transparent">
                    Phim Hàn Quốc
                </h3>
                <a href="/c/phim-han-quoc-moi.3KYr2v" class="flex items-center mt-2 gap-1 text-sm text-gray-300 hover:text-white transition">
                    <span>Xem toàn bộ</span>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <!-- Slider wrapper -->
            <div class="relative w-full mx-auto">
                <!-- Nút Prev -->
                <button id="prevBtn" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-12 h-12 rounded-full bg-black/40 hover:bg-black/70 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Slider container -->
                <div id="slider" class="flex overflow-x-hidden transition-transform duration-500">
                    <!-- Card phim -->
                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
                                opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center 
                                               bg-red-600 hover:bg-red-700 rounded-full shadow-lg 
                                               transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Lặp lại các card khác cũng dùng w-1/2 md:w-1/4 lg:w-1/5 -->
                </div>

                <!-- Nút Next -->
                <button id="nextBtn" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-12 h-12 rounded-full bg-black/40 hover:bg-black/70 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="movie-section mt-10">
        <div class="flex flex-col lg:flex-row lg:items-start gap-6 w-full">

            <!-- Tiêu đề -->
            <div class="flex flex-col lg:w-[248px]">
                <h3 class="text-[28px] font-semibold bg-gradient-to-r from-white to-purple-700 bg-clip-text text-transparent">
                    Phim Trung Quốc
                </h3>
                <a href="/c/phim-han-quoc-moi.3KYr2v" class="flex items-center mt-2 gap-1 text-sm text-gray-300 hover:text-white transition">
                    <span>Xem toàn bộ</span>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <!-- Slider wrapper -->
            <div class="relative w-full mx-auto">
                <!-- Nút Prev -->
                <button id="prevBtn" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-12 h-12 rounded-full bg-black/40 hover:bg-black/70 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Slider container -->
                <div id="slider" class="flex overflow-x-hidden transition-transform duration-500">
                    <!-- Card phim -->
                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 2</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 3</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 4</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 5</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 6</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nút Next -->
                <button id="nextBtn" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-12 h-12 rounded-full bg-black/40 hover:bg-black/70 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="movie-section mt-10">
        <div class="flex flex-col lg:flex-row lg:items-start gap-6 w-full">

            <!-- Tiêu đề -->
            <div class="flex flex-col lg:w-[248px]">
                <h3 class="text-[28px] font-semibold bg-gradient-to-r from-white to-purple-700 bg-clip-text text-transparent">
                    Phim US - UK
                </h3>
                <a href="/c/phim-han-quoc-moi.3KYr2v" class="flex items-center mt-2 gap-1 text-sm text-gray-300 hover:text-white transition">
                    <span>Xem toàn bộ</span>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

            <!-- Slider wrapper -->
            <div class="relative w-full mx-auto">
                <!-- Nút Prev -->
                <button id="prevBtn" class="absolute left-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-12 h-12 rounded-full bg-black/40 hover:bg-black/70 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Slider container -->
                <div id="slider" class="flex overflow-x-hidden transition-transform duration-500">
                    <!-- Card phim -->
                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 1</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 2</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 3</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 4</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 5</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-none w-1/5 p-2">
                        <div class="bg-gray-800 rounded-xl overflow-hidden shadow relative group">
                            <!-- Ảnh -->
                            <img src="https://phunuso.mediacdn.vn/603486343963435008/2025/1/23/1-1737603674770526871157.jpg" class="w-full h-auto object-cover">
                            <p class="text-center text-white text-sm py-2">Phim 6</p>

                            <!-- Overlay Play button -->
                            <div class="absolute inset-0 flex items-center justify-center bg-black/50 
            opacity-0 group-hover:opacity-100 transition">
                                <button class="w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-red-600 hover:bg-red-700 rounded-full shadow-lg transition transform hover:scale-105">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-7 md:h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nút Next -->
                <button id="nextBtn" class="absolute right-2 top-1/2 -translate-y-1/2 z-20 flex items-center justify-center w-12 h-12 rounded-full bg-black/40 hover:bg-black/70 transition">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    const slider = document.getElementById('slider');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');

    // Lấy width của 1 item phim
    const item = slider.querySelector('.flex-none');
    const scrollStep = item.offsetWidth; // scroll mỗi lần 1 phim

    let scrollAmount = 0;
    const maxScroll = slider.scrollWidth - slider.clientWidth;

    nextBtn.addEventListener('click', () => {
        scrollAmount = Math.min(scrollAmount + scrollStep, maxScroll);
        slider.scrollTo({
            left: scrollAmount
            , behavior: 'smooth'
        });
    });

    prevBtn.addEventListener('click', () => {
        scrollAmount = Math.max(scrollAmount - scrollStep, 0);
        slider.scrollTo({
            left: scrollAmount
            , behavior: 'smooth'
        });
    });

</script>
@endsection
