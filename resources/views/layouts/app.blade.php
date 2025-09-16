<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

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
    </script>
</body>
</html>
