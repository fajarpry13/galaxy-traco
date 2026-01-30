  
  <header class="absolute top-0 w-full z-50 pt-6 justify-center">
    <div class="max-w-full mx-auto px-8 flex items-center ml-30">
    
    <div class="flex space-x-4 mr-20"> 
        <img src="{{ asset('/assets/images/logo.png') }}" alt="Galaxy Traco Logo" />
        <div class="flex flex-col leading-tight">
            <span class="text-white text-xl md:text-2xl font-goth font-black tracking-tighter">GALAXY</span>
            <span class="text-white text-xl md:text-2xl font-goth font-black tracking-tighter">TRACO</span>
        </div>
    </div>

    <nav class="hidden md:flex items-center space-x-8 flex-1">
        <a href="{{ route('home') }}" class="px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1 {{ request()->routeIs('home') ? 'border-b-2' : '' }}">HOME</a>
        <a href="{{ route('about') }}" class="px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1 {{ request()->routeIs('about') ? 'border-b-2' : '' }}">ABOUT</a>
        <a href="{{ route('services') }}" class="px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1 {{ request()->routeIs('services') ? 'border-b-2' : '' }}">SERVICES</a>
        <a href="#" class="whitespace-nowrap px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1">WHY US?</a>
        <a href="#" class="px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1">WORKFLOW</a>
        <a href="#" class="px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1">INSIGHTS</a>
        <a href="#" class="px-0.5 py-1.5 font-black text-white hover:border-b-2 border-red-600 pb-1">CONTACT</a>
        
        <a href="{{ route('login') }}" class=" bg-red-600 text-white px-4 py-2 rounded-2xl font-black hover:bg-red-700 transition">
            CLIENT AREA
        </a>
    </nav>
</div>

        <div class="lg:hidden flex items-center">
                <button id="mobile-menu-button" class="text-white focus:outline-none ">
             <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
             </svg>
                </button>
        </div>

        <div id="mobile-menu" class="hidden lg:hidden bg-black/90 absolute top-full left-0 w-full p-6 transition-all duration-300">
      <div class="flex flex-col space-y-4 text-center">
          <a href="#" class="text-white font-bold py-2 border-b border-white/10">HOME</a>
          <a href="#" class="text-white font-bold py-2 border-b border-white/10">ABOUT</a>
          <a href="#" class="text-white font-bold py-2 border-b border-white/10">SERVICES</a>
          <a href="#" class="bg-red-600 text-white py-3 rounded-xl font-black">CLIENT AREA</a>
      </div>
  </div>
  </header>
 
