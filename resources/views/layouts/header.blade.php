<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('img/DW-LOGO.png') }}" alt="Daniel Wellington" id="logo" class="h-16 w-auto transition-all duration-300 ease-in-out">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4 transition-colors duration-300">TRANG CHỦ</a>
                @php
                    $categories = \App\Models\Category::where('is_active', true)->get();
                @endphp
                @foreach($categories as $category)
                <a href="/danh-muc/{{ $category->slug }}" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4 transition-colors duration-300">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="/blog-dong-ho-360" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4 transition-colors duration-300">BLOG ĐỒNG HỒ 360</a>
            </nav>

            <!-- Cart & Mobile Menu -->
            <div class="flex items-center space-x-3 sm:space-x-4">
                <!-- Cart -->
                <a href="/gio-hang" class="relative flex items-center space-x-2 text-gray-700 hover:text-orange-500 cursor-pointer transition-all duration-300 group">
                    <!-- Cart Icon Container -->
                    <div class="cart-icon-container relative p-2 rounded-lg transition-all duration-300 group-hover:bg-orange-50 group-hover:shadow-md animate-bounce-slow">
                        <!-- Cart Icon -->
                        <svg class="w-6 h-6 transition-all duration-300 group-hover:scale-110 group-hover:rotate-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m6-5v6a2 2 0 01-2 2H9a2 2 0 01-2-2v-6m8 0V9a2 2 0 00-2-2H9a2 2 0 00-2 2v4.01"></path>
                        </svg>
                        <!-- Cart Count Badge -->
                        <span class="cart-count absolute -top-1 -right-1 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center shadow-lg transform transition-all duration-300 group-hover:scale-125 group-hover:shadow-xl group-hover:animate-pulse animate-pulse-slow z-10">
                            {{ array_sum(array_column(session('cart', []), 'quantity')) }}
                        </span>
                        
                    </div>
                    <span class="text-sm font-medium hidden sm:block transition-all duration-300 group-hover:font-semibold">GIỎ HÀNG</span>
                </a>

                <!-- Mobile menu button -->
                <button class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-orange-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500 transition-all duration-300 hover:scale-110" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6 transition-all duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden transform transition-all duration-300 ease-in-out">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gray-200 shadow-lg">
                <a href="/" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium transition-colors duration-300 hover:bg-orange-50 rounded-lg">TRANG CHỦ</a>
                @php
                    $categories = \App\Models\Category::where('is_active', true)->get();
                @endphp
                @foreach($categories as $category)
                <a href="/danh-muc/{{ $category->slug }}" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium transition-colors duration-300 hover:bg-orange-50 rounded-lg">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="/blog-dong-ho-360" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium transition-colors duration-300 hover:bg-orange-50 rounded-lg">BLOG ĐỒNG HỒ 360</a>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        const isHidden = mobileMenu.classList.contains('hidden');
        
        if (isHidden) {
            // Show menu with animation
            mobileMenu.classList.remove('hidden');
            mobileMenu.style.transform = 'translateY(-10px)';
            mobileMenu.style.opacity = '0';
            
            // Trigger animation
            setTimeout(() => {
                mobileMenu.style.transform = 'translateY(0)';
                mobileMenu.style.opacity = '1';
            }, 10);
        } else {
            // Hide menu with animation
            mobileMenu.style.transform = 'translateY(-10px)';
            mobileMenu.style.opacity = '0';
            
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }
    }

    // Logo scroll effect
    let lastScrollTop = 0;
    let isScrolling = false;

    window.addEventListener('scroll', function() {
        if (!isScrolling) {
            window.requestAnimationFrame(function() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const logo = document.getElementById('logo');
                
                if (logo) {
                    if (scrollTop > 100) {
                        // Scroll xuống - logo nhỏ lại
                        logo.style.transform = 'scale(1.1)';
                        logo.style.height = '55px';
                    } else {
                        // Scroll lên trên cùng - logo to ra
                        logo.style.transform = 'scale(1)';
                        logo.style.height = '64px';
                    }
                }
                
                lastScrollTop = scrollTop;
                isScrolling = false;
            });
            isScrolling = true;
        }
    });
</script>

<style>
    /* Custom animations for cart icon */
    @keyframes bounce-slow {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-3px);
        }
        60% {
            transform: translateY(-2px);
        }
    }
    
    @keyframes pulse-slow {
        0%, 100% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.8;
            transform: scale(1.05);
        }
    }
    
    .animate-bounce-slow {
        animation: bounce-slow 3s ease-in-out infinite;
    }
    
    .animate-pulse-slow {
        animation: pulse-slow 2s ease-in-out infinite;
    }
    
    /* Mobile responsive fixes */
    @media (max-width: 640px) {
        .cart-count {
            font-size: 10px;
            min-width: 16px;
            min-height: 16px;
        }
        
        /* Ensure cart icon doesn't overlap on mobile */
        .cart-icon-container {
            margin-right: 8px;
        }
    }
    
    /* Cart icon positioning fixes */
    .cart-count {
        z-index: 20;
        pointer-events: none;
    }
    
    .cart-icon-container {
        position: relative;
        z-index: 10;
    }
    
    /* Smooth transitions for all elements */
    * {
        transition: all 0.3s ease;
    }
    
    /* Font support for Vietnamese */
    body, nav, a, span, button {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji';
        font-feature-settings: 'kern' 1;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    
    /* Header animations */
    header {
        backdrop-filter: blur(10px);
        background: rgba(255, 255, 255, 0.95);
    }
    
    /* Logo hover effect */
    #logo:hover {
        transform: scale(1.05) rotate(2deg);
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
    }
    
    /* Navigation link hover effects - removed underline animation */
    nav a {
        position: relative;
    }
    
    /* Mobile menu slide animation */
    #mobile-menu {
        transform-origin: top;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    /* Cart icon floating animation */
    .animate-bounce-slow:hover {
        animation-play-state: paused;
    }
</style>