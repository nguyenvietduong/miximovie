<div id="backToTop" 
     class="hidden fixed bottom-5 right-5 z-[9999]">
    <button onclick="scrollToTop()" 
            class="w-10 h-10 flex items-center justify-center 
                   bg-white text-black text-xl 
                   rounded-md shadow-lg 
                   hover:bg-blue-700 transition">
        ↑
    </button>
</div>

<script>
    // Hiện nút khi scroll xuống 200px
    window.addEventListener("scroll", function () {
        const btn = document.getElementById("backToTop");
        if (window.scrollY > 200) {
            btn.classList.remove("hidden");
        } else {
            btn.classList.add("hidden");
        }
    });

    // Xử lý cuộn lên đầu
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
</script>