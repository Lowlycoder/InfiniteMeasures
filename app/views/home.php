<div class="container">
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="<?= BASE_URL_ASSETS; ?>images/image1.jpg" alt="Sick boy"></div>
            <div class="swiper-slide"><img src="<?= BASE_URL_ASSETS; ?>images/image2.jpg" alt="Medications"></div>
            <div class="swiper-slide"><img src="<?= BASE_URL_ASSETS; ?>images/image3.jpg" alt="Running"></div>
            <div class="swiper-slide"><img src="<?= BASE_URL_ASSETS; ?>images/image4.jpg" alt="Colibri"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

    </div>
</div>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script>
    const swiper = new Swiper(".swiper", {
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,

        },
        loop: true,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

</script>
