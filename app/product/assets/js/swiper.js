// Swiper初期化処理
let newsSwiper;
let swiperBool = false;

function initSwiper() {
    const w = window.innerWidth;

    if (swiperBool) {
        newsSwiper.destroy(false,true);
        swiperBool = false;
    }

    if (w > 769) {
        // PC
        const gap = window.innerWidth * 0.018;
        newsSwiper = new Swiper('.blog-swiper', {
            loop: true,
            slidesPerView: 2.5,  // PC
            spaceBetween: gap,
        });
        swiperBool = true;
    } else {
        // SP
        const gap = w * 0.05;
        newsSwiper = new Swiper('.blog-swiper', {
            loop: true,
            slidesPerView: 1.2,
            spaceBetween: gap,
        });
        swiperBool = true;
    }
}
initSwiper();

window.addEventListener('resize', initSwiper);