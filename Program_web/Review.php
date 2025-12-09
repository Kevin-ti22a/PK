<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Review SMK Taruna Bangsa</title>
    <style>
        :root {
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
            overflow-x: hidden;
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
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
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
            background: rgba(255, 255, 255, 0.8);
            border: none;
            width: 45px;
            height: 45px;
            font-size: 22px;
            border-radius: 50%;
            cursor: pointer;
            z-index: 999;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
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

        .btn.left {
            left: 8px;
        }

        .btn.right {
            right: 8px;
        }

        .btn.show {
            opacity: 1;
            pointer-events: auto;
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
                overflow-x: hidden;
            }

            h2 {
                font-size: 22px;
                margin-bottom: 15px;
            }

            .slider-container {
                width: 100%;
                overflow: visible;
                position: relative;
            }

            .slider-wrapper {
                overflow-x: auto;
                display: block;
                padding-bottom: 15px;
                -webkit-overflow-scrolling: touch;
                scroll-behavior: smooth;
                scrollbar-width: none;
                margin: 0;
                padding: 0;
                position: relative;
                width: 100%;
                scroll-snap-type: x mandatory;
            }

            .slider-wrapper::-webkit-scrollbar {
                display: none;
            }

            .slider {
                display: flex;
                gap: 15px;
                padding: 0;
                margin: 0;
                width: max-content;
                box-sizing: border-box;
                padding-left: calc(50vw - (85vw - 30px) / 2);
                padding-right: calc(50vw - (85vw - 30px) / 2);
            }

            .card {
                flex: 0 0 auto;
                width: calc(85vw - 30px);
                min-width: calc(85vw - 30px);
                max-width: calc(85vw - 30px);
                scroll-snap-align: center;
                padding: 18px;
                box-sizing: border-box;
                position: relative;
                display: block;
                margin: 0;
            }

            .card h3 {
                font-size: 17px;
                margin-bottom: 6px;
                word-wrap: break-word;
            }

            .stars {
                font-size: 16px;
                margin: 6px 0;
            }

            .message {
                font-size: 14px;
                margin-top: 10px;
                word-wrap: break-word;
                overflow-wrap: break-word;
                width: 100%;
            }

            .message.collapsed {
                max-height: 80px;
                overflow: hidden;
                position: relative;
            }

            .read-more {
                background: linear-gradient(transparent, white);
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                padding: 20px 0 6px 0;
                text-align: center;
            }

            .read-more-btn {
                padding: 5px 12px;
                font-size: 11px;
                display: inline-block;
                z-index: 10;
                position: relative;
            }

            .reply {
                padding: 10px;
                font-size: 13px;
                margin-top: 12px;
                word-wrap: break-word;
            }

            /* TOMBOL NAVIGASI - Hanya sembunyikan di mobile */
            .slider-container .btn {
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
            .slider {
                padding-left: calc(50vw - (90vw - 24px) / 2);
                padding-right: calc(50vw - (90vw - 24px) / 2);
            }

            .card {
                width: calc(90vw - 24px);
                min-width: calc(90vw - 24px);
                max-width: calc(90vw - 24px);
                padding: 15px;
            }

            .slider {
                gap: 12px;
            }
        }
    </style>
</head>

<body>
    <style>
        .container-rating {
            text-align: center;
            font-family: Arial, sans-serif;
            margin-bottom: 25px;
        }

        .rating-wrapper {
            display: inline-flex;
            align-items: center;
            margin-bottom: 8px;
        }

        .rating-number {
            font-size: 24px;
            font-weight: bold;
            margin-right: 4px;
        }

        .stars {
            color: #f4b400;
            font-size: 22px;
            margin-right: 6px;
        }

        .rating-count {
            font-size: 14px;
            color: #555;
        }

        .info-icon {
            margin-left: 6px;
            font-size: 16px;
            color: #777;
            cursor: pointer;
        }

        .review-button {
            display: inline-block;
            margin-top: 6px;
            margin-left: 10px;
            padding: 8px 14px;
            background-color: rgb(22, 173, 54);
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .review-button:hover {
            background-color: #3367D6;
        }
    </style>
    <h2><b>What Our Customers Say</b></h2>
    <div class="container-rating">
        <div class="rating-wrapper">
            <span class="rating-number">4,7</span>
            <span class="stars">★★★★★</span>
            <span class="rating-count">(272 ulasan)</span>
            <span class="info-icon">&#9432;</span>
        </div>

        <a class="review-button" href="https://g.page/r/CRYY32XXaO4dEAE/review" target="_blank">
            Beri Kami Ulasan di Google
        </a>

    </div>

    <div class="slider-container">
        <button class="btn left" aria-label="prev" id="btnPrev">&#8249;</button>

        <div class="slider-wrapper" id="sliderWrapper">
            <div id="slider" class="slider" role="list"></div>
        </div>

        <button class="btn right" aria-label="next" id="btnNext">&#8250;</button>
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
        let isMobile = window.innerWidth <= 768;
        let isScrolling = false;
        let scrollTimeout;
        const slider = document.getElementById("slider");
        const sliderWrapper = document.getElementById("sliderWrapper");
        const btnPrev = document.getElementById("btnPrev");
        const btnNext = document.getElementById("btnNext");
        const modal = document.getElementById("modal");
        const modalClose = document.getElementById("modalClose");
        const modalUsername = document.getElementById("modalUsername");
        const modalStars = document.getElementById("modalStars");
        const modalMessage = document.getElementById("modalMessage");
        const modalReply = document.getElementById("modalReply");

        // Load reviews from JSON and render cards
        async function loadReviews() {
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

            // Initialize mobile scroll behavior
            initMobileScroll();
            
            // Tampilkan tombol navigasi di desktop
            showNavButtonsOnDesktop();
            
            // Center first card on mobile after render
            if (isMobile) {
                setTimeout(centerFirstCard, 300);
            }
        }

        // Initialize mobile scroll behavior
        function initMobileScroll() {
            isMobile = window.innerWidth <= 768;
            
            if (isMobile) {
                // Reset any transforms for mobile
                slider.style.transform = 'none';
                slider.style.transition = 'none';

                // Ensure proper scroll behavior
                sliderWrapper.scrollLeft = 0;
                
                // Remove any existing scroll listeners
                sliderWrapper.removeEventListener('scroll', handleMobileScroll);
                sliderWrapper.removeEventListener('touchend', handleTouchEnd);
                
                // Add new scroll listeners
                sliderWrapper.addEventListener('scroll', handleMobileScroll, { passive: true });
                sliderWrapper.addEventListener('touchend', handleTouchEnd, { passive: true });
                
                // Disable desktop navigation
                btnPrev.style.display = 'none';
                btnNext.style.display = 'none';
            } else {
                // Enable desktop navigation
                btnPrev.style.display = 'flex';
                btnNext.style.display = 'flex';
                
                // Remove mobile scroll listeners
                sliderWrapper.removeEventListener('scroll', handleMobileScroll);
                sliderWrapper.removeEventListener('touchend', handleTouchEnd);
            }
        }
        
        // Center the first card on mobile
        function centerFirstCard() {
            if (!isMobile) return;
            
            const cards = slider.querySelectorAll('.card');
            if (cards.length === 0) return;
            
            const firstCard = cards[0];
            const cardWidth = firstCard.offsetWidth;
            const gap = 15;
            
            // Calculate the position to center the first card
            // Formula: (card width + gap) / 2
            const targetScroll = (cardWidth + gap) / 2;
            
            // Scroll to center the first card
            sliderWrapper.scrollLeft = targetScroll;
            
            console.log("Centered first card, scrollLeft:", targetScroll);
        }
        
        // Handle mobile scroll
        function handleMobileScroll() {
            if (!isMobile) return;
            
            isScrolling = true;
            
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                isScrolling = false;
                snapToNearestCard();
            }, 100);
        }
        
        // Handle touch end for immediate snap
        function handleTouchEnd() {
            if (!isMobile) return;
            
            clearTimeout(scrollTimeout);
            setTimeout(() => {
                snapToNearestCard();
            }, 50);
        }
        
        // Snap to the nearest card
        function snapToNearestCard() {
            if (!isMobile || isScrolling) return;
            
            const cards = slider.querySelectorAll('.card');
            if (cards.length === 0) return;
            
            const wrapperWidth = sliderWrapper.offsetWidth;
            const scrollLeft = sliderWrapper.scrollLeft;
            const wrapperCenter = scrollLeft + (wrapperWidth / 2);
            
            // Find the card that's closest to the center
            let nearestCard = null;
            let minDistance = Infinity;
            
            cards.forEach((card) => {
                const cardRect = card.getBoundingClientRect();
                const wrapperRect = sliderWrapper.getBoundingClientRect();
                
                // Calculate card center relative to wrapper
                const cardCenter = cardRect.left - wrapperRect.left + (cardRect.width / 2);
                const distance = Math.abs(cardCenter - (wrapperWidth / 2));
                
                if (distance < minDistance) {
                    minDistance = distance;
                    nearestCard = card;
                }
            });
            
            if (nearestCard) {
                const cardRect = nearestCard.getBoundingClientRect();
                const wrapperRect = sliderWrapper.getBoundingClientRect();
                const cardLeftRelative = cardRect.left - wrapperRect.left;
                
                // Calculate target scroll position to center this card
                const targetScroll = scrollLeft + cardLeftRelative - (wrapperWidth / 2) + (cardRect.width / 2);
                
                // Snap to the card
                sliderWrapper.scrollTo({
                    left: targetScroll,
                    behavior: 'smooth'
                });
                
                console.log("Snapped to card, targetScroll:", targetScroll);
            }
        }

        // Show navigation buttons on desktop
         function showNavButtonsOnDesktop() {
            if (window.innerWidth > 768) {
                btnPrev.style.display = 'flex';
                btnNext.style.display = 'flex';
            } else {
                btnPrev.style.display = 'none';
                btnNext.style.display = 'none';
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
        function escapeHtml(s) {
            return (s + "").replaceAll("&", "&amp;").replaceAll("<", "&lt;").replaceAll(">", "&gt;");
        }

        /* ---------- SLIDE FUNCTIONS ---------- */
        function getCardWidth() {
            const card = slider.querySelector(".card");
            if (!card) return 320;
            const style = getComputedStyle(card);
            const gap = parseInt(getComputedStyle(slider).gap || 20);
            return card.offsetWidth + gap;
        }

        function visibleCount() {
            const w = sliderWrapper.offsetWidth;
            const cw = getCardWidth();
            return Math.max(1, Math.floor(w / cw));
        }

        function maxIndex() {
            return Math.max(0, reviews.length - visibleCount());
        }

        function updateTransform() {
            const cw = getCardWidth();
            const x = -sliderIndex * cw;
            slider.style.transform = `translateX(${x}px)`;
        }

        function updateTransformSmooth() {
            const cw = getCardWidth();
            const x = -sliderIndex * cw;
            slider.style.transition = 'transform 0.3s ease';
            slider.style.transform = `translateX(${x}px)`;

            // Remove transition after animation completes
            setTimeout(() => {
                slider.style.transition = '';
            }, 300);
        }

        function nextSlide() {
            if (isMobile) return; // Don't use desktop navigation on mobile
            
            sliderIndex = Math.min(maxIndex(), sliderIndex + 1);
            updateTransformSmooth();
        }

        function prevSlide() {
            if (isMobile) return; // Don't use desktop navigation on mobile
            
            sliderIndex = Math.max(0, sliderIndex - 1);
            updateTransformSmooth();
        }

        // hook buttons
        btnNext.addEventListener("click", nextSlide);
        btnPrev.addEventListener("click", prevSlide);

        /* ---------- TOUCH SWIPE SUPPORT ---------- */
        let touchStartX = 0;
        let touchEndX = 0;

        sliderWrapper.addEventListener('touchstart', e => {
            if (!isMobile) return;
            touchStartX = e.touches[0].clientX;
        }, { passive: true });

        sliderWrapper.addEventListener('touchend', e => {
            if (!isMobile) return;
            touchEndX = e.changedTouches[0].clientX;
            handleSwipe();
        }, { passive: true });

        function handleSwipe() {
            if (!isMobile) return;
            
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > swipeThreshold) {
                const cards = slider.querySelectorAll('.card');
                if (cards.length === 0) return;
                
                // Find current centered card
                const wrapperWidth = sliderWrapper.offsetWidth;
                const scrollLeft = sliderWrapper.scrollLeft;
                const wrapperCenter = scrollLeft + (wrapperWidth / 2);
                
                let currentCardIndex = -1;
                cards.forEach((card, index) => {
                    const cardLeft = card.offsetLeft;
                    const cardWidth = card.offsetWidth;
                    const cardCenter = cardLeft + (cardWidth / 2);
                    
                    if (Math.abs(cardCenter - wrapperCenter) < cardWidth) {
                        currentCardIndex = index;
                    }
                });
                
                if (currentCardIndex >= 0) {
                    let targetIndex;
                    
                    if (diff > 0) {
                        // Swipe left - go to next card
                        targetIndex = Math.min(currentCardIndex + 1, cards.length - 1);
                    } else {
                        // Swipe right - go to previous card
                        targetIndex = Math.max(currentCardIndex - 1, 0);
                    }
                    
                    // Scroll to target card
      const targetCard = cards[targetIndex];
                    const cardLeft = targetCard.offsetLeft;
                    const cardWidth = targetCard.offsetWidth;
                    
                    const targetScroll = cardLeft - (wrapperWidth / 2) + (cardWidth / 2);
                    
                    sliderWrapper.scrollTo({
                        left: targetScroll,
                        behavior: 'smooth'
                    });
                }
            }
        }

        /* ---------- SHOW/HIDE BUTTONS BASED ON MOUSE DISTANCE ---------- */
        document.addEventListener("mousemove", (e) => {
            // If buttons hidden via CSS (mobile), skip
            if (getComputedStyle(btnNext).display === "none" || isMobile) return;

            // compute distance to button centers
            const mx = e.clientX,
                my = e.clientY;
            const leftRect = btnPrev.getBoundingClientRect();
            const rightRect = btnNext.getBoundingClientRect();

            // avoid sudden showing when mouse far above or below slider: check within vertical band of slider +/-100px
            const sliderRect = sliderWrapper.getBoundingClientRect();
            if (my < sliderRect.top - 100 || my > sliderRect.bottom + 100) {
                btnPrev.classList.remove("show");
                btnNext.classList.remove("show");
                return;
            }

            const leftCenterX = leftRect.left + leftRect.width / 2;
            const leftCenterY = leftRect.top + leftRect.height / 2;
            const rightCenterX = rightRect.left + rightRect.width / 2;
            const rightCenterY = rightRect.top + rightRect.height / 2;

            const distLeft = Math.hypot(mx - leftCenterX, my - leftCenterY);
            const distRight = Math.hypot(mx - rightCenterX, my - rightCenterY);

            const TRIGGER_DISTANCE = 100; // px

            if (distLeft < TRIGGER_DISTANCE) btnPrev.classList.add("show");
            else btnPrev.classList.remove("show");
            if (distRight < TRIGGER_DISTANCE) btnNext.classList.add("show");
            else btnNext.classList.remove("show");
        });

        // also hide buttons when mouse leaves slider area completely
        sliderWrapper.addEventListener("mouseleave", () => {
            if (isMobile) return;
            btnPrev.classList.remove("show");
            btnNext.classList.remove("show");
        });

        /* ---------- RESPONSIVE: recalc on resize ---------- */
    window.addEventListener("resize", () => {
            isMobile = window.innerWidth <= 768;
            
            if (isMobile) {
                // Mobile: use native scroll
                slider.style.transform = "none";
                sliderIndex = 0;
                // Re-initialize mobile scroll
                setTimeout(() => {
                    initMobileScroll();
                    centerFirstCard();
                }, 100);
            } else {
                // Desktop: use transform
                updateTransform();
                // Tampilkan tombol navigasi di desktop
                showNavButtonsOnDesktop();
            }
        });

        /* ---------- Initialize ---------- */
        loadReviews();
    </script>
</body>

</html>