
  <header class="top-0 z-50 absolute justify-center pt-6 w-full">
    <div class="flex justify-between items-center mx-auto px-4 2xl:px-0 container">

    <div class="flex space-x-4">
        <img src="{{ asset('/assets/images/logo.png') }}" alt="Galaxy Traco Logo" />
        <div class="flex flex-col leading-tight">
            <span class="font-goth font-black text-white md:text-[26px] text-xl tracking-tighter">GALAXY</span>
            <span class="font-goth font-black text-white text-xl md:text-3xl tracking-tighter">TRACO</span>
        </div>
    </div>

    <nav class="hidden md:flex flex-1 justify-end items-center space-x-8">
        <a href="{{ route('home') }}" class="px-0.5 py-1.5 text-white font-semibold hover:border-b-2 border-red-600 pb-1 {{ request()->routeIs('home') ? 'border-b-2' : '' }}">HOME</a>
        <a href="{{ route('about') }}" class="px-0.5 py-1.5 text-white font-semibold hover:border-b-2 border-red-600 pb-1 {{ request()->routeIs('about') ? 'border-b-2' : '' }}">ABOUT</a>
        <a href="{{ route('services') }}" class="px-0.5 py-1.5 text-white font-semibold hover:border-b-2 border-red-600 pb-1 {{ request()->routeIs('services') ? 'border-b-2' : '' }}">SERVICES</a>
        <a href="#" class="px-0.5 py-1.5 pb-1 border-red-600 hover:border-b-2 font-semibold text-white whitespace-nowrap">WHY US?</a>
        <a href="#" class="px-0.5 py-1.5 pb-1 border-red-600 hover:border-b-2 font-semibold text-white">WORKFLOW</a>
        <a href="#" class="px-0.5 py-1.5 pb-1 border-red-600 hover:border-b-2 font-semibold text-white">INSIGHTS</a>
        <a href="#" class="px-0.5 py-1.5 pb-1 border-red-600 hover:border-b-2 font-semibold text-white">CONTACT</a>

        <a href="#" class="bg-black hover:bg-black/80 mr-2 px-4 py-2 rounded-lg font-semibold text-white">
            ENG
        </a>

        <a href="https://client.galaxytraco.com/login.html" class="bg-red-600 hover:bg-red-700 px-4 py-2 rounded-2xl font-semibold text-white transition">
            CLIENT AREA
        </a>
    </nav>
</div>

        <div class="lg:hidden flex items-center">
                <button id="mobile-menu-button" class="focus:outline-none text-white">
             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
             </svg>
                </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden top-full left-0 absolute bg-black/90 p-6 w-full transition-all duration-300">
      <div class="flex flex-col space-y-4 text-center">
          <a href="#" class="py-2 border-white/10 border-b text-white">HOME</a>
          <a href="#" class="py-2 border-white/10 border-b text-white">ABOUT</a>
          <a href="#" class="py-2 border-white/10 border-b text-white">SERVICES</a>
          <a href="#" class="bg-red-600 py-3 rounded-xl font-black text-white">CLIENT AREA</a>
      </div>
  </div>
  </header>

