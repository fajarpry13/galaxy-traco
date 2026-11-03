<footer class="relative bg-red-800 text-white py-6 px-4">

  <div x-data="{hovered: false}" class="fixed bottom-4 right-7 md:right-8 z-30">
        <a href="https://wa.me/6285776582728" @mouseover="hovered = true" @mouseleave="hovered = false"">
        <img class="w-12 h-12 md:w-14 md:h-14 drop-shadow-xl hover:scale-110 transition-transform" 
             src="{{asset ('assets/images/whatsapp.png')}}" 
             alt="whatsapp-image">
      </a>
      <div x-cloak :class="hovered === true ? 'right-20 opacity-100 visible' : 'right-16 opacity-0 invisible'" class="transition-all duration-300 ease-in-out absolute hidden top-1/2 -translate-y-1/2 bg-white shadow-xl rounded-full w-max px-4 py-2 sm:block">
            <p class="text-sm text-black">Need help? <span class="font-bold text-black">+62 577-658-2728</span></p>
        </div>
        </div>

  <div class="container mx-auto flex flex-col items-center text-center">
    <div class="flex flex-col items-center mb-8">
      <img src="{{ asset('/assets/images/logo.png') }}" alt="Galaxy Traco Logo" class="h-20 mb-4" />
      <h2 class="text-lg md:text-2xl font-goth font-bold tracking-tighter uppercase">
        GALAXY TRACO
      </h2>
    </div>

    <div class="mb-12">
      <p class="text-x1 md:text-3xl font-bold italic ">
        {{__('messages.import_made_simple')}}
      </p>
      
    </div>

    <div class="">
      <p class="text-lg opacity-100 tracking-wide">
        {{__('messages.copyright')}}
      </p>
    </div>
  </div>
</footer>