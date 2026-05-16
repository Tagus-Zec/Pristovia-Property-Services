<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', __('messages.meta_title'))</title>
    <meta name="description" content="@yield('description', __('messages.meta_desc'))">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // Theme initialization
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-theme', savedTheme);
            if (savedTheme === 'dark') document.documentElement.classList.add('dark');
            window.isDark = savedTheme === 'dark';
        })();

        window.translations = {!! json_encode(__('messages')) !!};
    </script>
    @stack('head')
</head>
<body x-data="{ isDark: window.isDark }" @theme-changed.window="isDark = ($event.detail === 'dark')">
    @include('partials.navbar')

    <main class="overflow-x-hidden pt-0">
        @yield('content')
    </main>

    @include('partials.footer')
    
    @include('partials.modals')

    <!-- Floating Actions -->
    <div class="fixed bottom-8 right-8 flex flex-col gap-4 z-[900]">
        <a href="#quote" class="md:hidden w-14 h-14 bg-primary text-white rounded-full flex justify-center items-center text-2xl shadow-2xl animate-bounce">
            <i class="fas fa-file-invoice-dollar"></i>
        </a>
        <a href="https://wa.me/14376611132" target="_blank" class="w-14 h-14 bg-[#25D366] text-white rounded-full flex justify-center items-center text-3xl shadow-2xl hover:scale-110 transition-all duration-500">
            <i class="fab fa-whatsapp"></i>
        </a>
        <button id="scroll-top-btn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="w-14 h-14 bg-navy text-white rounded-full flex justify-center items-center text-2xl shadow-2xl opacity-0 translate-y-10 transition-all duration-500 hover:scale-110 pointer-events-none">
            <i class="fas fa-chevron-up"></i>
        </button>
    </div>

    @stack('scripts')

    <script>
        // Scroll Top Button Visibility
        window.addEventListener('scroll', () => {
            const btn = document.getElementById('scroll-top-btn');
            if (window.pageYOffset > 500) {
                btn.classList.remove('opacity-0', 'translate-y-10', 'pointer-events-none');
            } else {
                btn.classList.add('opacity-0', 'translate-y-10', 'pointer-events-none');
            }
        });
    </script>
</body>
</html>
