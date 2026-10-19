<header 
    x-data="{ 
        isHome: {{ request()->routeIs('home') ? 'true' : 'false' }},
        scrolled: false 
    }"
    x-init="
        if (isHome) {
            window.addEventListener('scroll', () => { scrolled = window.scrollY > 500 });
        }
    "
    :class="{
        'top-0 z-50 justify-center py-6 w-full transition-all duration-300 flex items-center': true,
        'fixed': isHome,
        'sticky bg-white shadow-md': !isHome,
        'bg-transparent': isHome && !scrolled,
        'bg-white shadow-md': isHome && scrolled
    }"
>
    <div class="container mx-auto flex items-center justify-between px-4 md:px-8 2xl:px-16">

        <a href="{{ route('home') }}">
            <img 
                :src="(!isHome || scrolled || {{ request()->routeIs('insight*') ? 'true' : 'false' }}) 
                    ? '{{ asset('assets/icons/font-black-gtraco.png') }}' 
                    : '{{ asset('assets/icons/font-white-gtraco.png') }}'" 
                alt="Galaxy Traco Logo" 
                class="h-auto w-45 2xl:w-60 transition-all duration-300"
            />
        </a>

        <!-- NAVIGATION LINKS -->
        <nav :class="{
            'hidden md:flex flex-1 justify-end items-center uppercase space-x-8': true,
            'text-black': !isHome || scrolled,
            'text-white': isHome && !scrolled
        }">
            <a href="{{ route('home') }}" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('home') ? 'border-b-2' : '' }}">{{ __('messages.home') }}</a>
            <a href="#" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('about') ? 'border-b-2' : '' }}">{{ __('messages.about') }}</a>
            <a href="#" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('services') ? 'border-b-2' : '' }}">{{ __('messages.services') }}</a>
            <a href="#" class="nav-link text-sm 2xl:text-base">{{ __('messages.why_us') }}</a>
            <a href="#" class="nav-link text-sm 2xl:text-base">{{ __('messages.workflow') }}</a>
            <a href="{{ route('insight') }}" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('insight') ? 'border-b-2' : '' }}">{{ __('messages.insights') }}</a>
            <a href="#" class="nav-link text-sm 2xl:text-base">{{ __('messages.contact') }}</a>
        </nav>
        
        <!-- LANGUAGE SWITCHER -->
        <div class="relative inline-block pl-12 pr-2" x-data="{ open: false }">
            <button @click="open = !open" type="button" class="inline-flex cursor-pointer items-center gap-2 rounded-lg bg-black mr-2 px-4 py-2 text-sm font-semibold text-white hover:bg-black/80 focus:outline-none">
                <span>{{ strtoupper(LaravelLocalization::getCurrentLocale()) }}</span>
                <svg class="h-4 w-4 transition-transform duration-200" :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>

            <div x-show="open" 
                 @click.outside="open = false" 
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="transform opacity-0 scale-95"
                 x-transition:enter-end="transform opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-75"
                 x-transition:leave-start="transform opacity-100 scale-100"
                 x-transition:leave-end="transform opacity-0 scale-95"
                 class="absolute right-0 z-50 mt-2 w-32 rounded-lg border border-gray-100 bg-white py-1 shadow-xl overflow-hidden">
                
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">English</a>
                <a href="{{ LaravelLocalization::getLocalizedURL('id', null, [], true) }}" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">Indonesia</a>
                <a href="{{ LaravelLocalization::getLocalizedURL('zh', null, [], true) }}" class="block px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">中文</a>
            </div>
        </div>

        <a href="https://client.galaxytraco.com/login.html" class="rounded-2xl bg-red-600 px-4 py-2 font-semibold text-white transition hover:bg-red-700">
            {{ __('messages.client_area') }}
        </a>
    </div>

    <div class="lg:hidden flex items-center px-4">
        <button id="mobile-menu-button" class="focus:outline-none" :class="(isHome && !scrolled) ? 'text-white' : 'text-black'">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden lg:hidden absolute top-full left-0 w-full bg-black/90 p-6 transition-all duration-300">
        <div class="flex flex-col space-y-4 text-center">
            <a href="#" class="py-2 border-b border-white/10 text-white">{{ __('messages.home') }}</a>
            <a href="#" class="py-2 border-b border-white/10 text-white">{{ __('messages.about') }}</a>
            <a href="#" class="py-2 border-b border-white/10 text-white">{{ __('messages.services') }}</a>
            <a href="https://client.galaxytraco.com/login.html" class="bg-red-600 py-3 rounded-xl font-black text-white">{{ __('messages.client_area') }}</a>
        </div>
    </div>
</header>