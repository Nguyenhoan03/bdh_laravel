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
                <a href="/" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4 roboto-condensed">TRANG CHỦ</a>
                @php
                    $categories = \App\Models\Category::all();
                @endphp
                @foreach($categories as $category)
                <a href="/danh-muc/{{ $category->slug }}" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4 roboto-condensed">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="/blog-dong-ho-360" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4 roboto-condensed">BLOG ĐỒNG HỒ 360</a>
            </nav>

            <!-- Cart & Mobile Menu -->
            <div class="flex items-center space-x-4">
                <!-- Cart -->
                <div class="flex items-center space-x-2 text-gray-700 hover:text-orange-500 cursor-pointer transition-colors duration-200">
                    
                    <span class="text-sm font-medium">GIỎ HÀNG</span>
                    <span class="bg-orange-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                </div>

                <!-- Mobile menu button -->
                <button class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-orange-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500" onclick="toggleMobileMenu()">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t border-gray-200">
                <a href="/" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">TRANG CHỦ</a>
                @php
                    $categories = \App\Models\Category::all();
                @endphp
                @foreach($categories as $category)
                <a href="/danh-muc/{{ $category->slug }}" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="/blog-dong-ho-360" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">BLOG ĐỒNG HỒ 360</a>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
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