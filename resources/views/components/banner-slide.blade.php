<!-- Hero Banner với Swiper.js -->
<div class="relative w-full h-[300px] md:h-[400px] overflow-hidden">
    <!-- Swiper Container -->
    <div class="swiper hero-swiper h-full">
        <div class="swiper-wrapper">
            <!-- Slide 1: Daniel Wellington Classic -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-stone-100 to-amber-100">
                    <!-- Marble texture background -->
                    <div class="absolute inset-0 opacity-30" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"marble\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\"><circle cx=\"10\" cy=\"10\" r=\"2\" fill=\"%23d4af37\" opacity=\"0.1\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23marble)\"/></svg></div>
                </div>
                
                <!-- Content -->
                <div class="relative z-10 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <!-- Text Content -->
                            <div class="text-center lg:text-left">
                                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 tracking-wider" 
                                    style="font-family: 'Roboto Condensed', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                                    DANIEL WELLINGTON
                                </h1>
                                <p class="text-xl md:text-2xl text-white/90 mb-8 font-light">
                                    Timeless Elegance, Modern Style
                                </p>
                                <a href="/products" 
                                   class="inline-block bg-white text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                                    Khám Phá Bộ Sưu Tập
                                </a>
                            </div>
                            
                            <!-- Watch Image -->
                            <div class="flex justify-center lg:justify-end">
                                <div class="relative">
                                    <!-- Watch shadow -->
                                    <div class="absolute inset-0 bg-black/20 rounded-full transform rotate-12 scale-110"></div>
                                    <!-- Watch image -->
                                    <img src="{{ asset('img/DW00100699-247x296.webp') }}" 
                                         alt="Daniel Wellington Watch" 
                                         class="relative z-10 w-64 md:w-80 h-auto transform -rotate-12 hover:rotate-0 transition-transform duration-500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Women's Collection -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-br from-rose-50 via-pink-100 to-rose-100">
                    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"marble2\" patternUnits=\"userSpaceOnUse\" width=\"25\" height=\"25\"><circle cx=\"12.5\" cy=\"12.5\" r=\"3\" fill=\"%23ec4899\" opacity=\"0.1\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23marble2)\"/></svg></div>
                </div>
                
                <div class="relative z-10 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div class="text-center lg:text-left">
                                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 tracking-wider" 
                                    style="font-family: 'Roboto Condensed', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                                    ĐỒNG HỒ NỮ
                                </h1>
                                <p class="text-xl md:text-2xl text-white/90 mb-8 font-light">
                                    Thanh lịch và quyến rũ
                                </p>
                                <a href="/dong-ho-nu" 
                                   class="inline-block bg-white text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                                    Xem Bộ Sưu Tập Nữ
                                </a>
                            </div>
                            
                            <div class="flex justify-center lg:justify-end">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-black/20 rounded-full transform rotate-12 scale-110"></div>
                                    <img src="{{ asset('img/dong-ho-nu-banner.jpg') }}" 
                                         alt="Daniel Wellington Women's Watch" 
                                         class="relative z-10 w-64 md:w-80 h-auto transform -rotate-12 hover:rotate-0 transition-transform duration-500 rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Men's Collection -->
            <div class="swiper-slide relative">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-50 via-gray-100 to-slate-100">
                    <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"marble3\" patternUnits=\"userSpaceOnUse\" width=\"30\" height=\"30\"><circle cx=\"15\" cy=\"15\" r=\"4\" fill=\"%236b7280\" opacity=\"0.1\"/></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23marble3)\"/></svg></div>
                </div>
                
                <div class="relative z-10 h-full flex items-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                            <div class="text-center lg:text-left">
                                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 tracking-wider" 
                                    style="font-family: 'Roboto Condensed', sans-serif; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);">
                                    ĐỒNG HỒ NAM
                                </h1>
                                <p class="text-xl md:text-2xl text-white/90 mb-8 font-light">
                                    Mạnh mẽ và sang trọng
                                </p>
                                <a href="/dong-ho-nam" 
                                   class="inline-block bg-white text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                                    Xem Bộ Sưu Tập Nam
                                </a>
                            </div>
                            
                            <div class="flex justify-center lg:justify-end">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-black/20 rounded-full transform rotate-12 scale-110"></div>
                                    <img src="{{ asset('img/dong-ho-nam-banner.jpg') }}" 
                                         alt="Daniel Wellington Men's Watch" 
                                         class="relative z-10 w-64 md:w-80 h-auto transform -rotate-12 hover:rotate-0 transition-transform duration-500 rounded-lg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-next !text-white !w-12 !h-12 !mt-0 !top-1/2 !-translate-y-1/2 !right-4 !bg-black/20 !rounded-full hover:!bg-black/40 transition-all duration-300"></div>
        <div class="swiper-button-prev !text-white !w-12 !h-12 !mt-0 !top-1/2 !-translate-y-1/2 !left-4 !bg-black/20 !rounded-full hover:!bg-black/40 transition-all duration-300"></div>

        <!-- Pagination Dots -->
        <div class="swiper-pagination !bottom-6"></div>
    </div>
</div>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.hero-swiper', {
        // Basic settings
        loop: true,
        loopAdditionalSlides: 1,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: false,
            stopOnLastSlide: false,
            reverseDirection: false,
        },
        speed: 1000,
        
        // Effects
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        
        // Navigation
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        
        // Pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            bulletClass: 'swiper-pagination-bullet !bg-white/50 !w-3 !h-3 !mx-1',
            bulletActiveClass: 'swiper-pagination-bullet-active !bg-white !w-8',
        },
        
        // Responsive breakpoints
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 0,
            },
            1024: {
                slidesPerView: 1,
                spaceBetween: 0,
            }
        },
        
        // Events
        on: {
            init: function () {
                // Start autoplay after initialization
                if (this.autoplay) {
                    this.autoplay.start();
                }
                console.log('Swiper initialized with', this.slides.length, 'slides');
            },
            slideChange: function () {
                // Add any custom logic when slide changes
                console.log('Slide changed to:', this.activeIndex);
                // Ensure autoplay continues
                if (this.autoplay && !this.autoplay.running) {
                    this.autoplay.start();
                }
            },
            autoplayStart: function () {
                console.log('Autoplay started');
            },
            autoplayStop: function () {
                console.log('Autoplay stopped');
            },
        }
    });
    
    // Pause autoplay on hover (optional)
    const swiperContainer = document.querySelector('.hero-swiper');
    if (swiperContainer) {
        swiperContainer.addEventListener('mouseenter', () => {
            if (swiper.autoplay) {
                swiper.autoplay.stop();
            }
        });
        
        swiperContainer.addEventListener('mouseleave', () => {
            if (swiper.autoplay) {
                swiper.autoplay.start();
            }
        });
    }
    
    // Ensure autoplay starts with multiple fallbacks
    setTimeout(() => {
        if (swiper.autoplay) {
            swiper.autoplay.start();
        }
    }, 1000);
    
    // Additional fallback
    setTimeout(() => {
        if (swiper && swiper.autoplay && !swiper.autoplay.running) {
            swiper.autoplay.start();
        }
    }, 2000);
    
    // Force start autoplay if still not working
    setTimeout(() => {
        if (swiper && swiper.autoplay) {
            swiper.autoplay.stop();
            swiper.autoplay.start();
        }
    }, 3000);
    
    // Continuous autoplay monitoring
    setInterval(() => {
        if (swiper && swiper.autoplay) {
            if (!swiper.autoplay.running) {
                console.log('Restarting autoplay...');
                swiper.autoplay.start();
            }
        }
    }, 3000);
    
    // Force restart autoplay every 20 seconds to prevent stuck
    setInterval(() => {
        if (swiper && swiper.autoplay) {
            console.log('Force restarting autoplay...');
            swiper.autoplay.stop();
            setTimeout(() => {
                swiper.autoplay.start();
            }, 100);
        }
    }, 20000);
    
    // Alternative approach: Manual slide progression if autoplay fails
    let manualSlideInterval;
    setTimeout(() => {
        if (swiper && swiper.autoplay && !swiper.autoplay.running) {
            console.log('Starting manual slide progression...');
            manualSlideInterval = setInterval(() => {
                if (swiper && swiper.slideNext) {
                    swiper.slideNext();
                }
            }, 4000);
        }
    }, 10000);
});
</script>

<style>
/* Custom Swiper Styles */
.hero-swiper .swiper-button-next:after,
.hero-swiper .swiper-button-prev:after {
    font-size: 18px;
    font-weight: bold;
}

.hero-swiper .swiper-pagination-bullet {
    transition: all 0.3s ease;
}

.hero-swiper .swiper-pagination-bullet-active {
    border-radius: 4px;
}

/* Smooth transitions for watch images */
.hero-swiper .swiper-slide img {
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
}

/* Ensure autoplay works properly */
.hero-swiper .swiper-slide {
    opacity: 0;
    transition: opacity 1s ease-in-out;
    transform: scale(1.05);
}

.hero-swiper .swiper-slide-active {
    opacity: 1;
    transform: scale(1);
}

/* Smooth fade transitions */
.hero-swiper .swiper-slide-next,
.hero-swiper .swiper-slide-prev {
    opacity: 0.3;
    transform: scale(0.95);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-swiper .swiper-button-next,
    .hero-swiper .swiper-button-prev {
        display: none;
    }
    
    .hero-swiper .swiper-pagination {
        bottom: 20px;
    }
}
</style>