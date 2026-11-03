<header 
    x-data="{ 
        isHome: {{ request()->routeIs('home') ? 'true' : 'false' }},
        mobileMenuIsOpen: false,
        scrolled: false 
    }"
    x-init="
            window.addEventListener('scroll', () => { 
                if (window.innerWidth > 768) {
                    scrolled = window.scrollY > 150;
                } else {
                    scrolled = window.scrollY > 100;
                }
            });
    "
    @click.outside="mobileMenuIsOpen = false"
    :class="{
        'top-0 z-50 justify-center  w-full transition-all duration-300 flex items-center': true,
        'fixed': isHome,
        'sticky bg-[rgba(255,255,255,0.75)] shadow-md': !isHome,
        'bg-transparent py-1 md:py-6': isHome && !scrolled,
        'bg-[rgba(255,255,255,0.75)] shadow-md': isHome && scrolled,
        'py-1 md:py-6': !isHome && !scrolled,
        'py-0': !isHome && scrolled,
        'text-white': isHome && !scrolled,
        'text-black': !isHome || scrolled
    }"
>
    <div class="container mx-auto flex items-center justify-between px-4 md:px-8 2xl:px-16">

        <a href="{{ route('home') }}">
            <img 
                :src="(!isHome || scrolled || {{ request()->routeIs('insight*') ? 'true' : 'false' }}) 
                    ? '{{ asset('assets/icons/font-black-gtraco.png') }}' 
                    : '{{ asset('assets/icons/font-white-gtraco.png') }}'" 
                alt="Galaxy Traco Logo" 
                class="h-auto transition-all duration-300 relative z-30"
                :class="{
                    'w-35 md:w-[200px] py-1 md:py-[10px]' : scrolled,
                    'w-35 2xl:w-60' : !scrolled
                }"
            />
        </a>

        <!-- NAVIGATION LINKS -->
        {{-- <nav :class="{
            'hidden md:flex flex-1 justify-end items-center uppercase space-x-8': true,
            'text-black': !isHome || scrolled,
            'text-white': isHome && !scrolled
        }">
            <a href="{{ route('home') }}" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('home') ? 'border-b-2' : '' }}">{{ __('messages.home') }}</a>
            <a href="{{ route('home') }}#about" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('about') ? 'border-b-2' : '' }}">{{ __('messages.about') }}</a>
            <a href="{{ route('home') }}#service" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('services*') ? 'border-b-2' : '' }}">{{ __('messages.services') }}</a>
            <a href="{{ route('home') }}#why" class="nav-link text-sm 2xl:text-base">{{ __('messages.why_us') }}</a>
            <a href="{{ route('home') }}#workflow" class="nav-link text-sm 2xl:text-base">{{ __('messages.workflow') }}</a>
            <a href="{{ route('insight') }}" class="nav-link text-sm 2xl:text-base {{ request()->routeIs('insight') ? 'border-b-2' : '' }}">{{ __('messages.insights') }}</a>
            <a href="#" class="nav-link text-sm 2xl:text-base">{{ __('messages.contact') }}</a>
        </nav> --}}

       <nav class="hidden md:flex flex-1 justify-end items-center uppercase space-x-8" 
     x-data="{ activeSection: 'home' }"
     @@section-change.window="activeSection = $event.detail">
     
     
    <a href="{{ route('home') }}" 
       class="nav-link text-sm 2xl:text-base"
       :class="activeSection === 'home' && {{ request()->routeIs('home') }} ? 'border-b-2 border-red-600' : ''">
        {{ __('messages.home') }}
    </a>
    

    <a href="{{ route('home') }}#about" 
       class="nav-link text-sm 2xl:text-base"
       :class="activeSection === 'about' ? 'border-b-2 border-red-600' : ''">
        {{ __('messages.about') }}
    </a>

    <a href="{{ route('home') }}#service" 
       class="nav-link text-sm 2xl:text-base"
       :class="activeSection === 'service' ? 'border-b-2 border-red-600' : ''">
        {{ __('messages.services') }}
    </a>

    <a href="{{ route('home') }}#why" 
       class="nav-link text-sm 2xl:text-base"
       :class="activeSection === 'why' ? 'border-b-2 border-red-600' : ''">
        {{ __('messages.why_us') }}
    </a>

    <a href="{{ route('home') }}#workflow" 
       class="nav-link text-sm 2xl:text-base"
       :class="activeSection === 'workflow' ? 'border-b-2 border-red-600' : ''">
        {{ __('messages.workflow') }}
    </a>

      <a href="{{ route('home') }}#insight" 
       class="nav-link text-sm 2xl:text-base"
       :class="activeSection === 'insight' || {{ request()->routeIs('insight*') ? 'true' : 'false' }} ? 'border-b-2 border-red-600' : ''">
        {{ __('messages.insights') }}
    </a>

       <a href="#" class="nav-link text-sm 2xl:text-base">{{ __('messages.contact') }}</a>

</nav>


    <!-- LANGUAGE SWITCHER -->
        <div class="relative inline-block pl-12 pr-2" x-data="{ open: false }">
            <button @click="open = !open" type="button" class="hidden md:inline-flex cursor-pointer items-center gap-2 rounded-lg bg-black mr-2 px-4 py-2 text-sm font-semibold text-white hover:bg-black/80 focus:outline-none">
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

        <a href="https://client.galaxytraco.com/login.html" class="hidden md:block rounded-2xl bg-red-600 px-4 py-2 font-semibold text-white transition hover:bg-red-700">
            {{ __('messages.client_area') }}
        </a>
    

    <div class="md:hidden flex items-center px-4 z-50">
        <button id="mobile-menu-button" 
                @click="mobileMenuIsOpen = !mobileMenuIsOpen"
                type="button"
                class="focus:outline-none"
                aria-label="Toggle mobile menu" 
                :class="(isHome && !scrolled && !mobileMenuIsOpen) ? 'text-white' : 'text-black'">
            {{-- <svg x-cloak x-show="!mobileMenuIsOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg> --}}
            <div x-cloak x-show="!mobileMenuIsOpen">
                @svg('ri-menu-3-line','w-8 h-8')
            </div>
                <svg x-cloak x-show="mobileMenuIsOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
        </button>
    </div>

    <div x-cloak 
         x-show="mobileMenuIsOpen"
         x-transition:enter="transition ease-out duration-300 transform"
         x-transition:enter-start="-translate-y-full opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition ease-in duration-200 transform"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="-translate-y-full opacity-0"
         class="md:hidden top-0 right-0 bottom-0 left-0 fixed backdrop-blur-sm w-full bg-primary border-t border-white/10 z-10">
        
        <div class="flex flex-col space-y-4 text-center gap-6 px-6 pt-22 min-h-full z-10">
            <a @click="mobileMenuIsOpen = false" href="{{ route('home') }}" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.home') }}</a>
            <a @click="mobileMenuIsOpen = false" href="{{ route('home') }}#about" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.about') }}</a>
            <a @click="mobileMenuIsOpen = false" href="{{ route('home') }}#service" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.services') }}</a>
            <a @click="mobileMenuIsOpen = false" href="{{ route('home') }}#why" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.why_us') }}</a>
            <a @click="mobileMenuIsOpen = false" href="{{ route('home') }}#workflow" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.workflow') }}</a>
            <a @click="mobileMenuIsOpen = false" href="{{ route('home') }}#insight" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.insights') }}</a>
            <a @click="mobileMenuIsOpen = false" href="#" class="py-2 border-b border-white/10 text-white font-medium hover:text-red-500 transition">{{ __('messages.contact') }}</a>

            <!-- Language Switcher -->
            <div class="py-2 flex justify-center gap-4 text-sm text-gray-300 border-b border-white/10">
                <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}" class="hover:text-white {{ LaravelLocalization::getCurrentLocale() == 'en' ? 'font-bold text-black' : '' }}">EN</a>
                <span>|</span>
                <a href="{{ LaravelLocalization::getLocalizedURL('id', null, [], true) }}" class="hover:text-white {{ LaravelLocalization::getCurrentLocale() == 'id' ? 'font-bold text-black' : '' }}">ID</a>
                <span>|</span>
                <a href="{{ LaravelLocalization::getLocalizedURL('zh', null, [], true) }}" class="hover:text-white {{ LaravelLocalization::getCurrentLocale() == 'zh' ? 'font-bold text-black' : '' }}">ZH</a>
            </div>

            <a href="https://client.galaxytraco.com/login.html" class="bg-red-600 py-3 rounded-xl font-bold text-white hover:bg-red-700 transition mt-2">
                {{ __('messages.client_area') }}
            </a>
        </div>
    </div>
    </div>
</header>