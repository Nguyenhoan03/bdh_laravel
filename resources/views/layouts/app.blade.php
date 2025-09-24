<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'donghodanielwellington'))</title>
    
    {{-- SEO Meta Tags --}}
    @if(isset($meta))
        <x-seo-meta :meta="$meta" />
    @else
        {{-- Default meta tags --}}
        <meta name="description" content="@yield('description', 'Daniel Wellington Vietnam - Đồng hồ cao cấp, thiết kế tối giản và đa dạng dây đeo')">
        <meta name="keywords" content="@yield('keywords', 'đồng hồ daniel wellington, đồng hồ cao cấp, đồng hồ nam, đồng hồ nữ, dây đeo đồng hồ')">
        
        {{-- Open Graph --}}
        <meta property="og:title" content="@yield('title', config('app.name', 'Daniel Wellington Vietnam'))">
        <meta property="og:description" content="@yield('description', 'Daniel Wellington Vietnam - Đồng hồ cao cấp, thiết kế tối giản và đa dạng dây đeo')">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        @if(isset($ogImage))
            <meta property="og:image" content="{{ $ogImage }}">
        @endif
        
        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', config('app.name', 'Daniel Wellington Vietnam'))">
        <meta name="twitter:description" content="@yield('description', 'Daniel Wellington Vietnam - Đồng hồ cao cấp, thiết kế tối giản và đa dạng dây đeo')">
        @if(isset($ogImage))
            <meta name="twitter:image" content="{{ $ogImage }}">
        @endif
    @endif

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- Force HTTPS for external resources -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Additional Styles -->
    @stack('styles')
</head>
<body class="">
    <div class="min-h-screen bg-gray-100">
        <!-- Header -->
        @include('layouts.header')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    @stack('scripts')
    
    <!-- Font Styles -->
    <style>
        /* Ensure default font for body and general elements */
        body, p, span, div, a, button, input, textarea, select {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif !important;
        }
        
        /* Only apply Roboto Condensed to specific headings */
        .roboto-condensed {
            font-family: 'Roboto Condensed', sans-serif !important;
        }
    </style>
    
    <!-- Scroll Reveal Animation -->
    <style>
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out;
        }
        
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Staggered animation for product cards */
        .scroll-reveal[data-delay] {
            transition-delay: 0ms;
        }
        
        .scroll-reveal.revealed[data-delay="0"] {
            transition-delay: 0ms;
        }
        
        .scroll-reveal.revealed[data-delay="100"] {
            transition-delay: 100ms;
        }
        
        .scroll-reveal.revealed[data-delay="200"] {
            transition-delay: 200ms;
        }
        
        .scroll-reveal.revealed[data-delay="300"] {
            transition-delay: 300ms;
        }
        
        .scroll-reveal.revealed[data-delay="400"] {
            transition-delay: 400ms;
        }
        
        .scroll-reveal.revealed[data-delay="500"] {
            transition-delay: 500ms;
        }
    </style>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Scroll reveal animation
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                    }
                });
            }, observerOptions);
            
            // Observe all scroll-reveal elements
            document.querySelectorAll('.scroll-reveal').forEach(el => {
                observer.observe(el);
            });
            
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        });
        
        // Add to Cart Function
        function addToCart(productId, quantity = 1) {
            console.log('Global addToCart called with:', { productId, quantity, type: typeof productId });
            
            // Check if productId is valid
            if (!productId || productId <= 0) {
                console.log('Global addToCart validation failed:', { productId, type: typeof productId });
                showNotification('Lỗi: Không tìm thấy ID sản phẩm!', 'error');
                return;
            }
            
            // Get quantity from input field if not provided
            if (quantity === 1) {
                const quantityInput = document.getElementById('quantity');
                if (quantityInput) {
                    quantity = parseInt(quantityInput.value) || 1;
                }
            }
            
            const formData = new FormData();
            formData.append('product_id', productId);
            formData.append('quantity', quantity);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            formData.append('debug', 'true');
            
            console.log('Sending request with FormData:', { productId, quantity });
            
            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log('Global addToCart response:', data);
                
                // Debug info is logged to console, no notification needed
                
                if (data.success) {
                    // Update cart count in header
                    const cartCount = document.querySelector('.cart-count');
                    if (cartCount) {
                        cartCount.textContent = data.cart_count;
                    }
                    
                    // Show success notification
                    showNotification(data.message, 'success');
                } else {
                    showNotification(data.message || 'Có lỗi xảy ra!', 'error');
                }
            })
            .catch(error => {
                console.error('Global addToCart Error:', error);
                showNotification('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng!', 'error');
            });
        }
        
        // Notification system
        function showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 z-50 p-4 rounded-lg shadow-lg transition-all duration-300 transform translate-x-full ${
                type === 'success' ? 'bg-green-500 text-white' : 
                type === 'error' ? 'bg-red-500 text-white' : 
                'bg-blue-500 text-white'
            }`;
            notification.innerHTML = `
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>${message}</span>
                </div>
            `;
            
            document.body.appendChild(notification);
            
            // Animate in
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
            }, 100);
            
            // Auto remove after 3 seconds
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    if (document.body.contains(notification)) {
                        document.body.removeChild(notification);
                    }
                }, 300);
            }, 3000);
        }
    </script>
</body>
</html>
