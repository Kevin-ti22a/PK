<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Review SMK Taruna Bangsa</title>
<style>
    :root{
        --gap: 20px;
        --primary-color: #3b82f6;
        --secondary-color: #e0e0e0;
    }
    * {
        box-sizing: border-box;
    }
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f5;
        margin: 0;
        padding: 20px;
    }

    h2 {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    /* Container */
    .slider-container {
        max-width: 1300px;
        margin: 0 auto;
        position: relative;
    }

    .slider-wrapper {
        overflow: hidden;
        position: relative;
    }

    /* Slider (desktop behavior) */
    .slider {
        display: flex;
        gap: var(--gap);
        transition: transform 0.4s ease;
        will-change: transform;
    }

    .card {
        background: white;
        padding: 20px;
        border-radius: 15px;
        width: 300px;
        min-width: 300px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        position: relative;
        flex-shrink: 0;
    }

    .card h3 {
        margin: 0 0 8px 0;
        font-size: 18px;
        color: #333;
        font-weight: 600;
    }

    .stars {
        color: #ffb400;
        font-size: 18px;
        margin: 8px 0;
        line-height: 1.2;
    }

    .message {
        margin-top: 12px;
        font-size: 15px;
        color: #333;
        line-height: 1.5;
        position: relative;
        overflow: hidden;
    }

    .message.collapsed {
        max-height: 90px;
    }

    .read-more {
        background: linear-gradient(transparent, white);
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 25px 0 8px 0;
        text-align: center;
    }

    .read-more-btn {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 6px 14px;
        border-radius: 12px;
        font-size: 12px;
        cursor: pointer;
        transition: background 0.2s;
        font-weight: 500;
    }

    .read-more-btn:hover {
        background: #2563eb;
    }

    .reply {
        margin-top: 15px;
        padding: 12px;
        background: #eef7ff;
        border-left: 4px solid var(--primary-color);
        border-radius: 8px;
        font-size: 14px;
        line-height: 1.4;
    }

    /* Navigation buttons (desktop) */
    .btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255,255,255,0.8);
        border: none;
        width: 45px;
        height: 45px;
        font-size: 22px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 999;
        box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.25s ease, transform 0.15s ease;
    }

    .btn:hover {
        transform: translateY(-50%) scale(1.08);
        background: white;
    }

    .btn.left { left: 8px; }
    .btn.right { right: 8px; }

    .btn.show {
        opacity: 1;
        pointer-events: auto;
    }

    /* Slidebar (Progress Bar) - HIDDEN ON MOBILE */
    .slidebar-container {
        margin-top: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        width: 100%;
    }

    .slidebar {
        width: 90%;
        max-width: 400px;
        height: 6px;
        background: var(--secondary-color);
        border-radius: 3px;
        position: relative;
        cursor: pointer;
        overflow: visible;
    }

    .slidebar-progress {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background: var(--primary-color);
        border-radius: 3px;
        transition: width 0.3s ease;
    }

    .slidebar-handle {
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        background: var(--primary-color);
        border-radius: 50%;
        cursor: grab;
        box-shadow: 0 2px 8px rgba(59, 130, 246, 0.4);
        transition: all 0.2s ease;
        z-index: 10;
    }

    .slidebar-handle:active {
        cursor: grabbing;
        transform: translate(-50%, -50%) scale(1.2);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.6);
    }

    /* Modal */
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        padding: 20px;
    }

    .modal.show {
        display: flex;
        opacity: 1;
    }

    .modal-content {
        background: white;
        padding: 25px;
        border-radius: 15px;
        max-width: 500px;
        width: 100%;
        max-height: 85vh;
        overflow-y: auto;
        position: relative;
        transform: translateY(20px);
        transition: transform 0.3s ease;
    }

    .modal.show .modal-content {
        transform: translateY(0);
    }

    .modal-close {
        position: absolute;
        top: 15px;
        right: 15px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
        color: #666;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: background 0.2s;
        z-index: 1001;
    }

    .modal-close:hover {
        background: #f0f0f0;
    }

    .modal-header {
        margin-bottom: 15px;
        padding-right: 40px;
    }

    .modal-header h3 {
        margin: 0 0 8px 0;
        font-size: 20px;
        color: #333;
        font-weight: 600;
    }

    .modal-stars {
        color: #ffb400;
        font-size: 18px;
        margin: 8px 0;
    }

    .modal-message {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
        white-space: pre-line;
    }

    .modal-reply {
        padding: 15px;
        background: #eef7ff;
        border-left: 4px solid var(--primary-color);
        border-radius: 8px;
        font-size: 14px;
        white-space: pre-line;
        line-height: 1.5;
    }

    /* MOBILE STYLES - FIXED VERSION */
    @media (max-width: 768px) {
        body {
            padding: 15px;
        }

        h2 {
            font-size: 22px;
            margin-bottom: 15px;
        }

        .slider-container {
            width: 100%;
            overflow: visible;
        }

        .slider-wrapper {
            overflow-x: auto;
            display: block;
            padding-bottom: 15px;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
            scrollbar-width: none;
            margin: 0;
            padding-left: 0;
            padding-right: 0;
        }
        
        .slider-wrapper::-webkit-scrollbar { 
            display: none; 
        }

        .slider {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 5px;
            padding-left: 15px;
            padding-right: 15px;
        }

        .card {
            flex: 0 0 calc(85% - 15px);
            min-width: calc(85% - 15px);
            max-width: calc(85% - 15px);
            scroll-snap-align: start;
            padding: 18px;
            width: auto;
        }

        /* Last card should have extra right padding */
        .slider .card:last-child {
            margin-right: 15px;
        }

        .card h3 {
            font-size: 17px;
            margin-bottom: 6px;
        }

        .stars {
            font-size: 16px;
            margin: 6px 0;
        }

        .message {
            font-size: 14px;
            margin-top: 10px;
        }

        .message.collapsed {
            max-height: 80px;
        }

        .read-more {
            padding: 20px 0 6px 0;
        }

        .read-more-btn {
            padding: 5px 12px;
            font-size: 11px;
        }

        .reply {
            padding: 10px;
            font-size: 13px;
            margin-top: 12px;
        }

        /* hide nav buttons on mobile */
        .btn { 
            display: none !important; 
        }

        /* HIDE SLIDEBAR ON MOBILE */
        .slidebar-container {
            display: none !important;
        }

        /* Modal mobile adjustments */
        .modal {
            padding: 10px;
        }

        .modal-content {
            padding: 20px;
            max-height: 90vh;
        }

        .modal-header h3 {
            font-size: 18px;
        }

        .modal-stars {
            font-size: 16px;
        }

        .modal-message {
            font-size: 15px;
        }

        .modal-reply {
            font-size: 13px;
            padding: 12px;
        }
    }

    /* Very small mobile devices */
    @media (max-width: 360px) {
        .card {
            flex: 0 0 calc(90% - 12px);
            min-width: calc(90% - 12px);
            max-width: calc(90% - 12px);
            padding: 15px;
        }
        
        .slider {
            gap: 12px;
            padding-left: 12px;
            padding-right: 12px;
        }

        .slider .card:last-child {
            margin-right: 12px;
        }
    }
</style>
</head>
<body>

<h2>What our customers say</h2>

<div class="slider-container">
    <button class="btn left" aria-label="prev" id="btnPrev">&#8249;</button>

    <div class="slider-wrapper" id="sliderWrapper">
        <div id="slider" class="slider" role="list"></div>
    </div>

    <button class="btn right" aria-label="next" id="btnNext">&#8250;</button>
    
    <!-- Slidebar Navigation - HIDDEN ON MOBILE -->
    <div class="slidebar-container" id="slidebarContainer">
        <div class="slidebar" id="slidebar">
            <div class="slidebar-progress" id="slidebarProgress"></div>
            <div class="slidebar-handle" id="slidebarHandle"></div>
        </div>
    </div>
</div>

<!-- Modal untuk Lihat Selengkapnya -->
<div class="modal" id="modal">
    <div class="modal-content">
        <button class="modal-close" id="modalClose">&times;</button>
        <div class="modal-header">
            <h3 id="modalUsername">Anonymous</h3>
            <div class="modal-stars" id="modalStars"></div>
        </div>
        <div class="modal-message" id="modalMessage"></div>
        <div class="modal-reply" id="modalReply"></div>
    </div>
</div>

<script>
const url = "https://raw.githubusercontent.com/Kevin-ti22a/PK/refs/heads/main/Review_data.json";

let reviews = [];
let sliderIndex = 0;
let isDragging = false;
let isUpdatingFromSlidebar = false;
const slider = document.getElementById("slider");
const sliderWrapper = document.getElementById("sliderWrapper");
const btnPrev = document.getElementById("btnPrev");
const btnNext = document.getElementById("btnNext");
const slidebarContainer = document.getElementById("slidebarContainer");
const slidebar = document.getElementById("slidebar");
const slidebarProgress = document.getElementById("slidebarProgress");
const slidebarHandle = document.getElementById("slidebarHandle");
const modal = document.getElementById("modal");
const modalClose = document.getElementById("modalClose");
const modalUsername = document.getElementById("modalUsername");
const modalStars = document.getElementById("modalStars");
const modalMessage = document.getElementById("modalMessage");
const modalReply = document.getElementById("modalReply");

// Load reviews from JSON and render cards
async function loadReviews(){
    try {
        const res = await fetch(url);
        reviews = await res.json();
    } catch (err) {
        console.error("Gagal memuat JSON:", err);
        reviews = [];
    }

    slider.innerHTML = "";
    reviews.forEach((r, index) => {
        const card = document.createElement("div");
        card.className = "card";
        
        // Check if message needs "read more"
        const message = r.message_review || "";
        const needsReadMore = message.length > 120 || (message.match(/\n/g) || []).length > 2;
        
        card.innerHTML = `
            <h3>${escapeHtml(r.username_review || "Anonymous")}</h3>
            <div class="stars">${escapeHtml(r.rating_review || "")}</div>
            <div class="message ${needsReadMore ? 'collapsed' : ''}">
                ${escapeHtml(message)}
                ${needsReadMore ? `
                    <div class="read-more">
                        <button class="read-more-btn" onclick="showFullReview(${index})">Lihat Selengkapnya</button>
                    </div>
                ` : ''}
            </div>
            ${r.reply_smk_taruna_bangsa ? `<div class="reply"><strong>Balasan:</strong><br>${escapeHtml(r.reply_smk_taruna_bangsa)}</div>` : ""}
        `;
        slider.appendChild(card);
    });

    // reset transform
    slider.style.transform = "translateX(0px)";
    sliderIndex = 0;
    
    // update slidebar hanya di desktop
    if (window.innerWidth > 768) {
        updateSlidebar();
    }

    // Initialize mobile scroll behavior
    initMobileScroll();
}

// Initialize mobile scroll behavior
function initMobileScroll() {
    if (window.innerWidth <= 768) {
        // Reset any transforms for mobile
        slider.style.transform = 'none';
        
        // Ensure proper scroll behavior
        sliderWrapper.scrollLeft = 0;
    }
}

// Show full review in modal
function showFullReview(index) {
    const review = reviews[index];
    
    modalUsername.textContent = review.username_review || "Anonymous";
    modalStars.innerHTML = escapeHtml(review.rating_review || "");
    modalMessage.textContent = review.message_review || "";
    
    if (review.reply_smk_taruna_bangsa) {
        modalReply.innerHTML = `<strong>Balasan:</strong><br>${escapeHtml(review.reply_smk_taruna_bangsa)}`;
        modalReply.style.display = 'block';
    } else {
        modalReply.style.display = 'none';
    }
    
    // Show modal dengan display: flex dan kemudian tambah class show
    modal.style.display = 'flex';
    // Trigger reflow
    void modal.offsetWidth;
    modal.classList.add('show');
    document.body.style.overflow = 'hidden';
}

// Close modal
function closeModal() {
    modal.classList.remove('show');
    document.body.style.overflow = 'auto';
    
    // Tunggu transisi selesai baru sembunyikan modal
    setTimeout(() => {
        modal.style.display = 'none';
    }, 300);
}

// Modal event listeners
modalClose.addEventListener('click', closeModal);

modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modal.classList.contains('show')) {
        closeModal();
    }
});

// small helper to avoid XSS when injecting text
function escapeHtml(s){
    return (s+"").replaceAll("&","&amp;").replaceAll("<","&lt;").replaceAll(">","&gt;");
}

/* ---------- SLIDEBAR FUNCTIONS (Desktop Only) ---------- */
function updateSlidebar() {
    // Only update if on desktop
    if (window.innerWidth <= 768) return;
    
    const maxIndexValue = maxIndex();
    const progress = maxIndexValue > 0 ? (sliderIndex / maxIndexValue) * 100 : 0;
    
    slidebarProgress.style.width = `${progress}%`;
    slidebarHandle.style.left = `${progress}%`;
}

function goToSlideByProgress(progress, instant = false) {
    // Only work if on desktop
    if (window.innerWidth <= 768) return;
    
    const maxIndexValue = maxIndex();
    const newIndex = Math.round((progress / 100) * maxIndexValue);
    
    if (newIndex !== sliderIndex) {
        sliderIndex = Math.max(0, Math.min(maxIndexValue, newIndex));
        
        if (instant) {
            updateTransform();
        } else {
            updateTransformSmooth();
        }
        
        updateSlidebar();
    }
}

// Real-time update during drag
function updateSliderDuringDrag(progress) {
    // Only work if on desktop
    if (window.innerWidth <= 768) return;
    
    const maxIndexValue = maxIndex();
    const newIndex = Math.round((progress / 100) * maxIndexValue);
    
    if (newIndex !== sliderIndex) {
        sliderIndex = Math.max(0, Math.min(maxIndexValue, newIndex));
        updateTransform();
    }
}

// Slidebar click event
slidebar.addEventListener('click', (e) => {
    if (isDragging || window.innerWidth <= 768) return;
    
    const rect = slidebar.getBoundingClientRect();
    const clickX = e.clientX - rect.left;
    const progress = (clickX / rect.width) * 100;
    
    goToSlideByProgress(progress);
});

// Slidebar drag events
slidebarHandle.addEventListener('mousedown', (e) => {
    if (window.innerWidth <= 768) return;
    
    isDragging = true;
    isUpdatingFromSlidebar = true;
    document.addEventListener('mousemove', handleDrag);
    document.addEventListener('mouseup', stopDrag);
    e.preventDefault();
});

slidebarHandle.addEventListener('touchstart', (e) => {
    if (window.innerWidth <= 768) return;
    
    isDragging = true;
    isUpdatingFromSlidebar = true;
    document.addEventListener('touchmove', handleDrag);
    document.addEventListener('touchend', stopDrag);
    e.preventDefault();
}, { passive: false });

function handleDrag(e) {
    if (!isDragging || window.innerWidth <= 768) return;
    
    const rect = slidebar.getBoundingClientRect();
    let clientX;
    
    if (e.type === 'mousemove') {
        clientX = e.clientX;
    } else if (e.type === 'touchmove') {
        clientX = e.touches[0].clientX;
    }
    
    const dragX = Math.max(0, Math.min(rect.width, clientX - rect.left));
    const progress = (dragX / rect.width) * 100;
    
    // Update slidebar visual
    slidebarProgress.style.width = `${progress}%`;
    slidebarHandle.style.left = `${progress}%`;
    
    // Update slider in real-time during drag
    updateSliderDuringDrag(progress);
}

function stopDrag(e) {
    if (!isDragging || window.innerWidth <= 768) return;
    
    isDragging = false;
    document.removeEventListener('mousemove', handleDrag);
    document.removeEventListener('touchmove', handleDrag);
    document.removeEventListener('mouseup', stopDrag);
    document.removeEventListener('touchend', stopDrag);
    
    const rect = slidebar.getBoundingClientRect();
    let clientX;
    
    if (e.type === 'mouseup') {
        clientX = e.clientX;
    } else if (e.type === 'touchend') {
        clientX = e.changedTouches[0].clientX;
    }
    
    const dragX = Math.max(0, Math.min(rect.width, clientX - rect.left));
    const progress = (dragX / rect.width) * 100;
    
    // Final update to ensure alignment
    goToSlideByProgress(progress);
    isUpdatingFromSlidebar = false;
}

/* ---------- SLIDE FUNCTIONS ---------- */
function getCardWidth(){
    const card = slider.querySelector(".card");
    if (!card) return 320;
    const style = getComputedStyle(card);
    const gap = parseInt(getComputedStyle(slider).gap || 20);
    return card.offsetWidth + gap;
}

function visibleCount(){
    const w = sliderWrapper.offsetWidth;
    const cw = getCardWidth();
    return Math.max(1, Math.floor(w / cw));
}

function maxIndex(){
    return Math.max(0, reviews.length - visibleCount());
}

function updateTransform(){
    const cw = getCardWidth();
    const x = -sliderIndex * cw;
    slider.style.transform = `translateX(${x}px)`;
}

function updateTransformSmooth(){
    const cw = getCardWidth();
    const x = -sliderIndex * cw;
    slider.style.transition = 'transform 0.3s ease';
    slider.style.transform = `translateX(${x}px)`;
    
    // Remove transition after animation completes
    setTimeout(() => {
        slider.style.transition = '';
    }, 300);
}

function nextSlide(){
    sliderIndex = Math.min(maxIndex(), sliderIndex + 1);
    updateTransformSmooth();
    if (window.innerWidth > 768) {
        updateSlidebar();
    }
}

function prevSlide(){
    sliderIndex = Math.max(0, sliderIndex - 1);
    updateTransformSmooth();
    if (window.innerWidth > 768) {
        updateSlidebar();
    }
}

// hook buttons
btnNext.addEventListener("click", nextSlide);
btnPrev.addEventListener("click", prevSlide);

/* ---------- TOUCH SWIPE SUPPORT FOR MAIN SLIDER ---------- */
let touchStartX = 0;
let touchEndX = 0;

sliderWrapper.addEventListener('touchstart', e => {
    touchStartX = e.changedTouches[0].screenX;
}, { passive: true });

sliderWrapper.addEventListener('touchend', e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
}, { passive: true });

function handleSwipe() {
    const swipeThreshold = 50; // minimum distance for a swipe
    
    if (touchEndX < touchStartX - swipeThreshold) {
        // Swipe left - next slide
        nextSlide();
    }
    
    if (touchEndX > touchStartX + swipeThreshold) {
        // Swipe right - previous slide
        prevSlide();
    }
}

/* ---------- SHOW/HIDE BUTTONS BASED ON MOUSE DISTANCE ---------- */
document.addEventListener("mousemove", (e) => {
    // If buttons hidden via CSS (mobile), skip
    if (getComputedStyle(btnNext).display === "none") return;

    // compute distance to button centers
    const mx = e.clientX, my = e.clientY;
    const leftRect = btnPrev.getBoundingClientRect();
    const rightRect = btnNext.getBoundingClientRect();

    // avoid sudden showing when mouse far above or below slider: check within vertical band of slider +/-100px
    const sliderRect = sliderWrapper.getBoundingClientRect();
    if (my < sliderRect.top - 100 || my > sliderRect.bottom + 100) {
        btnPrev.classList.remove("show");
        btnNext.classList.remove("show");
        return;
    }

    const leftCenterX = leftRect.left + leftRect.width/2;
    const leftCenterY = leftRect.top + leftRect.height/2;
    const rightCenterX = rightRect.left + rightRect.width/2;
    const rightCenterY = rightRect.top + rightRect.height/2;

    const distLeft = Math.hypot(mx - leftCenterX, my - leftCenterY);
    const distRight = Math.hypot(mx - rightCenterX, my - rightCenterY);

    const TRIGGER_DISTANCE = 100; // px

    if (distLeft < TRIGGER_DISTANCE) btnPrev.classList.add("show"); else btnPrev.classList.remove("show");
    if (distRight < TRIGGER_DISTANCE) btnNext.classList.add("show"); else btnNext.classList.remove("show");
});

// also hide buttons when mouse leaves slider area completely
sliderWrapper.addEventListener("mouseleave", () => {
    btnPrev.classList.remove("show");
    btnNext.classList.remove("show");
});

/* ---------- RESPONSIVE: recalc on resize ---------- */
window.addEventListener("resize", () => {
    // if mobile (native scroll) ensure transform reset
    if (window.innerWidth <= 768) {
        slider.style.transform = "none";
        sliderIndex = 0;
        // Re-initialize mobile scroll
        setTimeout(initMobileScroll, 100);
    } else {
        updateTransform();
        updateSlidebar();
    }
});

/* ---------- Initialize ---------- */
loadReviews();
</script>
</body>
</html>