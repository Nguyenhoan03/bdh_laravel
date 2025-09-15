<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('img/DW-LOGO.png') }}" alt="Daniel Wellington" class="h-8 w-auto">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="/" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">TRANG CHỦ</a>
                <a href="/dong-ho-nu" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">ĐỒNG HỒ NỮ</a>
                <a href="/dong-ho-nam" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">ĐỒNG HỒ NAM</a>
                <a href="/dong-ho-cap" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">ĐỒNG HỒ CẶP</a>
                <a href="/day-dong-ho" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">DÂY ĐỒNG HỒ</a>
                <a href="/trang-suc" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">TRANG SỨC</a>
                <a href="/blog" class="text-gray-700 hover:text-orange-500 block text-xs font-bold leading-4" style="font-family: 'Roboto Condensed', sans-serif;">BLOG ĐỒNG HỒ 360</a>
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
                <a href="/dong-ho-nu" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">ĐỒNG HỒ NỮ</a>
                <a href="/dong-ho-nam" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">ĐỒNG HỒ NAM</a>
                <a href="/dong-ho-cap" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">ĐỒNG HỒ CẶP</a>
                <a href="/day-dong-ho" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">DÂY ĐỒNG HỒ</a>
                <a href="/trang-suc" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">TRANG SỨC</a>
                <a href="/blog" class="text-gray-700 hover:text-orange-500 block px-3 py-2 text-base font-medium">BLOG ĐỒNG HỒ 360</a>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMobileMenu() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    }
</script>