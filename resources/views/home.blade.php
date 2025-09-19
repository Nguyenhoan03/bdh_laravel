@extends('layouts.app')

@section('title', 'Trang Chủ - Daniel Wellington Vietnam')

@section('content')
<!-- Hero Banner -->
@include('components.banner-slide')

<!-- Features Section -->
<section class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 scroll-reveal">
            <!-- Feature 1: Diverse Designs -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex h-20 md:h-24">
                    <!-- Icon Section -->
                    <div class="w-16 md:w-20 h-full bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-white text-lg md:text-2xl"></i>
                    </div>

                    <!-- Text Section -->
                    <div class="flex-1 p-2 md:p-3 bg-gray-50 flex flex-col justify-center">
                        <h3 class="text-xs md:text-sm font-bold text-blue-600 mb-1">Mẫu mã đa dạng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed hidden sm:block">Nhiều sản phẩm mới cập nhật liên tục</p>
                    </div>
                </div>
            </div>

            <!-- Feature 2: Genuine Products -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex h-20 md:h-24">
                    <!-- Icon Section -->
                    <div class="w-16 md:w-20 h-full bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shield-check text-white text-lg md:text-2xl"></i>
                    </div>

                    <!-- Text Section -->
                    <div class="flex-1 p-2 md:p-3 bg-gray-50 flex flex-col justify-center">
                        <h3 class="text-xs md:text-sm font-bold text-blue-600 mb-1">Sản phẩm chính hãng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed hidden sm:block">Hoàn tiền 20 lần nếu phát hiện hàng giả</p>
                    </div>
                </div>
            </div>

            <!-- Feature 3: Fast Delivery -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex h-20 md:h-24">
                    <!-- Icon Section -->
                    <div class="w-16 md:w-20 h-full bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-shipping-fast text-white text-lg md:text-2xl"></i>
                    </div>

                    <!-- Text Section -->
                    <div class="flex-1 p-2 md:p-3 bg-gray-50 flex flex-col justify-center">
                        <h3 class="text-xs md:text-sm font-bold text-blue-600 mb-1">Giao hàng nhanh chóng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed hidden sm:block">Giao hàng nhanh nội thành HCM</p>
                    </div>
                </div>
            </div>

            <!-- Feature 4: Easy Returns -->
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                <div class="flex h-20 md:h-24">
                    <!-- Icon Section -->
                    <div class="w-16 md:w-20 h-full bg-orange-500 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-undo-alt text-white text-lg md:text-2xl"></i>
                    </div>

                    <!-- Text Section -->
                    <div class="flex-1 p-2 md:p-3 bg-gray-50 flex flex-col justify-center">
                        <h3 class="text-xs md:text-sm font-bold text-blue-600 mb-1">Đổi trả dễ dàng</h3>
                        <p class="text-xs text-gray-600 leading-relaxed hidden sm:block">Dễ dàng đổi trả</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Heading Section -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-2xl md:text-4xl font-bold text-gray-900 uppercase tracking-wide scroll-reveal roboto-condensed">
            ĐỒNG HỒ DANIEL WELLINGTON (ĐỒNG HỒ DW)
        </h1>
        <p class="text-lg text-gray-600 mt-4">
            Thương hiệu đồng hồ cao cấp từ Thụy Điển - Phong cách tối giản, sang trọng
        </p>
    </div>
</section>

<!-- Promotional Banner -->
<section class="py-8 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-lg overflow-hidden scroll-reveal" style="background: linear-gradient(to right, #93c5fd, #1e40af);">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\"><defs><pattern id=\"confetti\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\"><circle cx=\"10\" cy=\"10\" r=\"1\" fill=\"%23ffffff\" opacity=\"0.3\" /><circle cx=\"5\" cy=\"5\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\" /><circle cx=\"15\" cy=\"15\" r=\"0.5\" fill=\"%23ffffff\" opacity=\"0.2\" /></pattern></defs><rect width=\"100\" height=\"100\" fill=\"url(%23confetti)\" /></svg>');">
                </div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-center">
                <img src="{{ asset('img/bnn.jpg') }}" alt="Banner Promotional" class="w-full h-auto">
            </div>

            <!-- Products Swiper -->
            <div class="swiper promotional-products-swiper">
                <div class="swiper-wrapper">
                    @forelse($promotionalProducts ?? collect() as $product)
                    <div class="swiper-slide p-3">
                        <x-product-card 
                            :name="$product->name ?? ''"
                            :spec="explode(' - ', $product->description)[1] ?? ''"
                            :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                            :price="number_format($product->sale_price, 0, ',', '.') . '₫'"
                            :discount="'-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%'"
                            :image="$product->images[0] ?? 'DW00100699-247x296.webp'"
                            :size="'normal'"
                        />
                    </div>
                    @empty
                    <div class="swiper-slide p-3">
                        <div class="text-center text-white">
                            <p>Không có sản phẩm khuyến mãi</p>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
            
            <!-- View More Button -->
            <div class="text-center m-4">
                <a href="/products" 
                   class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Decorative Watch Images -->
            <div class="absolute left-0 top-1/2 -translate-y-1/2 opacity-30">
                <img src="{{ asset('img/DW00100699-247x296.webp') }}" alt="Watch" class="w-32 h-auto transform -rotate-12">
            </div>
            <div class="absolute right-0 top-1/2 -translate-y-1/2 opacity-30">
                <img src="{{ asset('img/DW00100699-247x296.webp') }}" alt="Watch" class="w-32 h-auto transform rotate-12">
            </div>
        </div>
    </div>
</section>

<!-- Women's Watches Section -->
<section class="py-16 bg-white scroll-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 womens-watches">
        <!-- Section Header -->
        <div class="relative w-full h-64 bg-gradient-to-r from-pink-100 to-yellow-100 flex items-center justify-end">
            <img src="{{ asset('img/dong-ho-nu-banner.jpg') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover opacity-50">
        </div>
        <div class="text-center mb-12 pt-4">
            <div class="flex items-center justify-center mb-4">
                <!-- Left line -->
                <div class="flex-1 h-px bg-gray-300 mr-4"></div>
                
                <!-- Icon and text -->
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12,6 12,12 16,14"></polyline>
                    </svg>
                    <h2 class="md:text-5xl font-extrabold text-gray-900 uppercase tracking-wider roboto-condensed" style="font-size:22px">ĐỒNG HỒ NỮ</h2>
                </div>
                
                <!-- Right line -->
                <div class="flex-1 h-px bg-gray-300 ml-4"></div>
            </div>
        </div>

        <!-- Products Grid with Navigation -->
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    @forelse($dataWatchWomen ?? collect() as $index => $product)
                        <div class="swiper-slide scroll-reveal" data-delay="{{ $index * 100 }}">
                            <x-product-card 
                                :name="$product->name ?? ''"
                                :spec="explode(' - ', $product->description)[1] ?? ''"
                                :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                                :price="number_format($product->sale_price, 0, ',', '.') . '₫'"
                                :discount="'-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%'"
                                :image="$product->images[0] ?? 'DW00100699-247x296.webp'"
                                :size="'normal'"
                            />
                        </div>
                    @empty
                        <div class="swiper-slide scroll-reveal">
                            <div class="text-center text-gray-500">
                                <p>Không có sản phẩm đồng hồ nữ</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Left Arrow -->
            <button class="swiper-button-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Right Arrow -->
            <button class="swiper-button-next absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-8">
            <a href="/dong-ho-nu" 
               class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Men's Watches Section -->
<section class="bg-white scroll-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 womens-watches">
        <!-- Section Header -->
        <div class="relative w-full h-64 bg-gradient-to-r from-pink-100 to-yellow-100 flex items-center justify-end">
            <img src="{{ asset('img/dong-ho-nam-banner.jpg') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover opacity-50">
        </div>
        <div class="text-center mb-12 pt-4">
            <div class="flex items-center justify-center mb-4">
                <!-- Left line -->
                <div class="flex-1 h-px bg-gray-300 mr-4"></div>
                
                <!-- Icon and text -->
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12,6 12,12 16,14"></polyline>
                    </svg>
                    <h2 class="md:text-5xl font-extrabold text-gray-900 uppercase tracking-wider roboto-condensed" style="font-size: 22px;">ĐỒNG HỒ NAM</h2>
                </div>
                
                <!-- Right line -->
                <div class="flex-1 h-px bg-gray-300 ml-4"></div>
            </div>
        </div>

        <!-- Products Grid with Navigation -->
        <div class="relative">
            <!-- Swiper Container -->
            <div class="swiper products-swiper">
                <div class="swiper-wrapper">
                    @forelse($dataWatchMen ?? collect() as $index => $product)
                        <div class="swiper-slide scroll-reveal" data-delay="{{ $index * 100 }}">
                            <x-product-card 
                                :name="$product->name ?? ''"
                                :spec="explode(' - ', $product->description)[1] ?? ''"
                                :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                                :price="number_format($product->sale_price, 0, ',', '.') . '₫'"
                                :discount="'-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%'"
                                :image="$product->images[0] ?? 'DW00100699-247x296.webp'"
                                :size="'normal'"
                            />
                        </div>
                    @empty
                        <div class="swiper-slide scroll-reveal">
                            <div class="text-center text-gray-500">
                                <p>Không có sản phẩm đồng hồ nam</p>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>

            <!-- Left Arrow -->
            <button class="swiper-button-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Right Arrow -->
            <button class="swiper-button-next absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-white rounded-full p-3 shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 group transform translate-y-8 opacity-0">
            </button>

            <!-- Pagination -->
            <div class="swiper-pagination mt-6"></div>
        </div>

        <!-- View More Button -->
        <div class="text-center mt-8">
            <a href="/dong-ho-nam" 
               class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Best Selling Section -->
<section class="py-6 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-2xl font-extrabold text-gray-900 uppercase tracking-wider mb-4 roboto-condensed">
                BÁN CHẠY NHẤT HỆ THỐNG
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                DONGHODANIELWELLINGTION.VN đang có sẵn hơn 500+ sản phẩm đến và phụ kiện
            </p>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @forelse($bestSellingProducts ?? collect() as $index => $product)
                <div class="scroll-reveal" data-delay="{{ $index * 100 }}">
                    <x-product-card 
                        :name="$product->name ?? ''"
                        :spec="explode(' - ', $product->description)[1] ?? ''"
                        :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                        :price="number_format($product->sale_price, 0, ',', '.') . '₫'"
                        :discount="'-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%'"
                        :image="$product->images[0] ?? 'DW00100699-247x296.webp'"
                        :size="'normal'"
                    />
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500">
                    <p>Không có sản phẩm bán chạy</p>
                </div>
            @endforelse
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="/products" 
               class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-16 bg-white scroll-reveal">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-2xl font-extrabold text-blue-600 uppercase tracking-wider mb-4 roboto-condensed">
                SẢN PHẨM NỔI BẬT
            </h2>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            @forelse($featuredProducts ?? collect() as $index => $product)
                <div class="scroll-reveal" data-delay="{{ $index * 100 }}">
                    <x-product-card 
                        :name="$product->name ?? ''"
                        :spec="explode(' - ', $product->description)[1] ?? ''"
                        :original-price="number_format($product->price, 0, ',', '.') . '₫'"
                        :price="number_format($product->sale_price, 0, ',', '.') . '₫'"
                        :discount="'-' . round((($product->price - $product->sale_price) / $product->price) * 100) . '%'"
                        :image="$product->images[0] ?? 'DW00100699-247x296.webp'"
                        :size="'normal'"
                    />
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500">
                    <p>Không có sản phẩm nổi bật</p>
                </div>
            @endforelse
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="/products" 
               class="inline-block bg-blue-600 text-white px-8 py-2 rounded-lg font-semibold hover:bg-blue-700 transition-all duration-300 text-sm uppercase tracking-wide shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                Xem thêm sản phẩm khác <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Custom Swiper Styles -->
<style>
/* Custom navigation button styles */
.swiper-button-prev,
.swiper-button-next {
    position: absolute !important;
    top: 43% !important;
    width: 48px !important;
    height: 48px !important;
    margin-top: 0 !important;
    background: white !important;
    border-radius: 50% !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1) !important;
    z-index: 10 !important;
    opacity: 0 !important;
    visibility: hidden !important;
    transform: translateY(-50%) translateY(32px) scale(0.8) !important;
}

.womens-watches:hover .swiper-button-prev,
.womens-watches:hover .swiper-button-next {
    opacity: 1 !important;
    visibility: visible !important;
    transform: translateY(-50%) translateY(0) scale(1) !important;
}
.womens-watches:hover .swiper-button-prev:hover,
.womens-watches:hover .swiper-button-next:hover {
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
    transform: translateY(-50%) scale(1.1) !important;
    background: #f9fafb !important;
}

.swiper-button-prev:after,
.swiper-button-next:after {
    font-size: 18px !important;
    color: #6b7280 !important;
    font-weight: bold !important;
}

.swiper-button-prev:hover:after,
.swiper-button-next:hover:after {
    color: #2563eb !important;
}

/* Custom pagination styles */
.swiper-pagination-bullet {
    width: 12px !important;
    height: 12px !important;
    background: #d1d5db !important;
    opacity: 1 !important;
    transition: all 0.3s ease !important;
}

.swiper-pagination-bullet-active {
    background: #2563eb !important;
    transform: scale(1.2) !important;
}

.swiper-pagination-bullet-active-main {
    background: #2563eb !important;
}

.swiper-pagination-bullet-active-prev,
.swiper-pagination-bullet-active-next {
    background: #9ca3af !important;
}

/* Smooth slide transitions */
.swiper-slide {
    transition: transform 0.3s ease !important;
}

/* Hide default swiper navigation */
.swiper-button-disabled {
    opacity: 0.3 !important;
    cursor: not-allowed !important;
}
</style>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Products Swiper
    const productsSwiper = new Swiper('.products-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500, // Auto-slide every 2.5 seconds
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        speed: 800, // Smooth transition speed
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
        // Pause autoplay when hovering over the swiper
        on: {
            init: function() {
                this.el.addEventListener('mouseenter', () => {
                    this.autoplay.stop();
                });
                this.el.addEventListener('mouseleave', () => {
                    this.autoplay.start();
                });
            }
        }
    });

    // Add click handlers for custom navigation buttons
    document.querySelectorAll('.swiper-button-prev').forEach(button => {
        button.addEventListener('click', () => {
            productsSwiper.slidePrev();
        });
    });

    document.querySelectorAll('.swiper-button-next').forEach(button => {
        button.addEventListener('click', () => {
            productsSwiper.slideNext();
        });
    });

    // Initialize Promotional Products Swiper
    const promotionalProductsSwiper = new Swiper('.promotional-products-swiper', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
        speed: 800,
        // Pause autoplay when hovering over the swiper
        on: {
            init: function() {
                this.el.addEventListener('mouseenter', () => {
                    this.autoplay.stop();
                });
                this.el.addEventListener('mouseleave', () => {
                    this.autoplay.start();
                });
            }
        }
    });

    // Scroll Reveal Animation
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const element = entry.target;
                const delay = element.getAttribute('data-delay') || 0;
                
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, delay);
            } else {
                // Reset animation when element goes out of view
                const element = entry.target;
                element.style.opacity = '0';
                element.style.transform = 'translateY(30px)';
            }
        });
    }, observerOptions);

    // Observe all scroll-reveal elements
    document.querySelectorAll('.scroll-reveal').forEach(el => {
        // Set initial state
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        
        // Start observing
        observer.observe(el);
    });
});
</script>

@endsection
