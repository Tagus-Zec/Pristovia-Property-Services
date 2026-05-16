<nav id="main-nav" class="navbar" x-data="{ mobileMenuOpen: false, scrolled: false }" @scroll.window="scrolled = (window.pageYOffset > 50)" :class="{ 'navbar-hero text-white': !scrolled, 'scrolled dark:text-white': scrolled }">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 flex justify-between items-center relative">
      <!-- Logo -->
<a href="{{ route('home') }}" class="relative z-[2000]">

    <!-- Light mode logo -->
    <img 
        src="{{ asset('assets/img/logo.png') }}" 
        alt="Pristovia Logo"
        class="h-10 md:h-12 w-auto block dark:hidden"
    >

    <!-- Dark mode logo -->
    <img 
        src="{{ asset('assets/img/logofoot.png') }}"
        alt="Pristovia Logo White"
        class="h-10 md:h-12 w-auto hidden dark:block"
    >

</a>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-10 font-montserrat font-bold text-sm tracking-wider uppercase">
            <a href="{{ request()->routeIs('home') ? '#home' : route('home').'#home' }}" class="hover:text-primary transition-colors">{{ __('messages.nav_home') }}</a>
            <a href="{{ request()->routeIs('home') ? '#services' : route('home').'#services' }}" class="hover:text-primary transition-colors">{{ __('messages.nav_services') }}</a>
            <a href="{{ request()->routeIs('home') ? '#about' : route('home').'#about' }}" class="hover:text-primary transition-colors">{{ __('messages.nav_about') }}</a>
            <a href="{{ request()->routeIs('home') ? '#work' : route('home').'#work' }}" class="hover:text-primary transition-colors">{{ __('messages.nav_work') }}</a>
            <a href="{{ request()->routeIs('home') ? '#quote' : route('home').'#quote' }}" class="btn btn-primary !py-3 !px-6 !text-xs">{{ __('messages.nav_quote') }}</a>
            
            <!-- Language Switcher 
            <div class="flex items-center gap-4 border-l border-white/20 pl-6 ml-4" :class="{ 'border-navy/20': scrolled }">
                <a href="{{ route('lang.switch', 'en') }}" class="transition-all" :class="{ 'text-primary scale-110': '{{ app()->getLocale() }}' === 'en', 'opacity-50 hover:opacity-100': '{{ app()->getLocale() }}' !== 'en' }">EN</a>|
                <a href="#" class="transition-all" :class="{ 'text-primary scale-110': '{{ app()->getLocale() }}' === 'fr', 'opacity-50 hover:opacity-100': '{{ app()->getLocale() }}' !== 'fr' }">FR</a>
            </div>-->

            <!-- Theme Toggle -->
            <button @click="toggleTheme()" class="w-10 h-10 rounded-full flex items-center justify-center bg-white/10 hover:bg-white/20 transition-all ml-4" :class="{ 'bg-navy/5 hover:bg-navy/10': scrolled }">
                <i class="fas" :class="isDark ? 'fa-sun' : 'fa-moon'"></i>
            </button>
        </div>

        <!-- Mobile Toggle -->
        <div class="md:hidden flex items-center gap-6 relative z-[2000]">
            <button @click="toggleTheme()" class="w-10 h-10 rounded-full flex items-center justify-center bg-white/10 transition-all">
                <i class="fas" :class="isDark ? 'fa-sun' : 'fa-moon'"></i>
            </button>
             <button
                type="button"
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="w-10 h-10 flex items-center justify-center rounded-full border transition-all
                    bg-white/10 text-slate-700 border-slate-200
                    dark:bg-white/10 dark:text-white dark:border-white/10
                    hover:bg-white/20 dark:hover:bg-white/20"
                :class="{ 'backdrop-blur-xl': scrolled }"
            >
                <i class="fas text-xl"
                :class="mobileMenuOpen ? 'fa-times' : 'fa-bars'">
                </i>
            </button>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="translate-x-full"
             class="fixed inset-0 bg-navy z-[1500] flex flex-col items-center justify-center gap-8 text-2xl font-montserrat font-bold text-white md:hidden">
            <a href="{{ request()->routeIs('home') ? '#home' : route('home').'#home' }}" @click="mobileMenuOpen = false" class="hover:text-primary transition-colors">{{ __('messages.nav_home') }}</a>
            <a href="{{ request()->routeIs('home') ? '#services' : route('home').'#services' }}" @click="mobileMenuOpen = false" class="hover:text-primary transition-colors">{{ __('messages.nav_services') }}</a>
            <a href="{{ request()->routeIs('home') ? '#about' : route('home').'#about' }}" @click="mobileMenuOpen = false" class="hover:text-primary transition-colors">{{ __('messages.nav_about') }}</a>
            <a href="{{ request()->routeIs('home') ? '#work' : route('home').'#work' }}" @click="mobileMenuOpen = false" class="hover:text-primary transition-colors">{{ __('messages.nav_work') }}</a>
            <a href="{{ request()->routeIs('home') ? '#quote' : route('home').'#quote' }}" @click="mobileMenuOpen = false" class="btn btn-primary mt-4">{{ __('messages.nav_quote') }}</a> 
            
            <div class="flex gap-8 mt-8 text-lg border-t border-white/10 pt-8 w-1/2 justify-center">
                <a href="{{ route('lang.switch', 'en') }}" class="{{ app()->getLocale() === 'en' ? 'text-primary' : 'opacity-50' }}">English</a>|
                <a href="#" class="{{ app()->getLocale() === 'fr' ? 'text-primary' : 'opacity-50' }}">Français</a>
            </div>
        </div>
    </div>
</nav>

<script>
    function toggleTheme() {
        const doc = document.documentElement;
        const isDark = doc.classList.contains('dark');
        if (isDark) {
            doc.classList.remove('dark');
            doc.setAttribute('data-theme', 'light');
            localStorage.setItem('theme', 'light');
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: 'light' }));
        } else {
            doc.classList.add('dark');
            doc.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
            window.dispatchEvent(new CustomEvent('theme-changed', { detail: 'dark' }));
        }
    }
</script>
