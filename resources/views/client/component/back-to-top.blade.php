<!-- Scroll Progress Circle -->
<div id="scroll-to-top" title="Lên đầu trang" class="scroll-btn">
    <div class="scroll-container">
        <svg id="progress-ring" width="48" height="48">
            <!-- Vòng nền -->
            <circle stroke="#e5e7eb" fill="white" stroke-width="4" r="16" cx="24" cy="24"></circle>
            <!-- Vòng tiến độ -->
            <circle id="progress-circle" stroke="#10b981" fill="transparent" stroke-width="4" stroke-linecap="round" r="16" cx="24" cy="24"></circle>
        </svg>

        <!-- Mũi tên -->
        <div class="scroll-arrow">
            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7" />
            </svg>         
        </div>
    </div>
</div>

<style>
/* Nút scroll */
.scroll-btn {
    display: none; /* ẩn mặc định */
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 99999;
    cursor: pointer;
    width: 48px;
    height: 48px;
}

/* Container */
.scroll-container {
    position: relative;
    width: 48px;
    height: 48px;
    transform: rotate(-90deg); /* xoay vòng tròn */
}

/* SVG vòng tròn */
#progress-ring {
    width: 48px;
    height: 48px;
    display: block;
}

/* Mũi tên ở giữa */
.scroll-arrow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(90deg);
}

/* Icon mũi tên */
.arrow-icon {
    width: 16px;
    height: 16px;
    color: #10b981;
    transition: transform 0.3s ease-out;
}

/* Hover */
.scroll-btn:hover .arrow-icon {
    transform: scale(1.1);
}
</style>

<script>
    const radius = 16;
    const circumference = 2 * Math.PI * radius;

    const circle = document.getElementById('progress-circle');
    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = circumference;

    function setProgress(percent) {
        const offset = circumference - (percent / 100) * circumference;
        circle.style.strokeDashoffset = offset;
    }

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = (scrollTop / docHeight) * 100;

        setProgress(progress);

        const btn = document.getElementById('scroll-to-top');
        if (scrollTop > 200) {
            btn.style.display = 'block';
        } else {
            btn.style.display = 'none';
        }
    });

    document.getElementById('scroll-to-top').addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>