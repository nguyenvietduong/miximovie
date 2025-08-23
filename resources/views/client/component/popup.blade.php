<!-- Modal ảnh chính giữa -->
<div id="static-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black/70 backdrop-blur-sm">
    <div class="relative w-full max-w-3xl">

        <!-- Ảnh lớn -->
        <img src="https://cdn-media.sforum.vn/storage/app/media/ctv_seo10/background-2-9-1.jpg"
             class="w-full md:w-auto h-auto rounded-xl shadow-lg mx-auto block">

        <!-- Nút X trên ảnh -->
        <button id="modalCloseBtn"
                class="absolute top-3 right-3 text-white hover:text-gray-300 bg-black/40 hover:bg-black/60 rounded-full p-2 shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

    </div>
</div>

<script>
    const modal = document.getElementById("static-modal");
    const modalCloseBtn = document.getElementById("modalCloseBtn");

    // Hiển thị modal nếu chưa lưu trạng thái "không hiển thị nữa"
    window.addEventListener("load", function() {
        if (!localStorage.getItem("hideStaticModal")) {
            modal.classList.remove("hidden");
        }
    });

    // Khi nhấn nút X, ẩn modal
    modalCloseBtn.addEventListener("click", () => {
        modal.classList.add("hidden");
    });
</script>