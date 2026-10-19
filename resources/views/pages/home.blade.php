@extends('layouts.page')

@section('title', 'Galaxy Traco - Trusted Solution to Import Goods Overseas')

@section('content')

@include('main.hero')

 <!-- ICONS SECTION -->
    <section class="z-30 relative -mt-24 pb-20"> <div class="mx-auto px-4 container">
    <div class="flex flex-wrap justify-center gap-10 md:gap-20 -translate-y-12">

      <div class="flex flex-col items-center text-center">
        <div class="flex flex-col justify-center items-center bg-red-600 shadow-xl rounded-full w-40 md:w-75 h-40 md:h-75 text-white">
          <img src="{{ asset('assets/icons/icon-3-revisi.png') }}" class="mb-2 w-20 h-auto" />
          <span class="font-bold text-lg uppercase tracking-widest">{{__('messages.since')}}</span>
          <span class="font-bold text-3xl">2013</span>
        </div>
      </div>
      
      <div class="flex flex-col items-center text-center">
        <div class="flex flex-col justify-center items-center bg-red-600 shadow-xl rounded-full w-40 md:w-75 h-40 md:h-75 text-white">
          <img src="{{ asset('assets/icons/icon.png') }}" class="mb-2 w-20 h-auto" />
          <span class="font-bold text-3xl">+300</span>
          <span class="font-bold text-lg uppercase tracking-widest">{{__('messages.clients_served')}}</span>
        </div>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="flex flex-col justify-center items-center bg-red-600 shadow-xl rounded-full w-40 md:w-75 h-40 md:h-75 text-white">
          <img src="{{ asset('assets/icons/icon-1-revisi.png') }}" class="mb-2 w-30 h-auto" />
          <span class="font-bold text-3xl">+250.000</span>
          <span class="font-bold text-lg uppercase tracking-widest">{{__('messages.goods_imported')}}</span>
        </div>
      </div>

    </div>

    <div class="mx-auto mt-20 max-w-4xl text-center">
      <x-section-title border-class="bg-red-600">
          <h2 class="mb-6 font-bold text-primary text-3xl md:text-4xl">
              {{__('messages.title')}}
          </h2>
      </x-section-title>
      <p class="text-black text-base leading-relaxed">
        {{ __('messages.description') }}
      </p>
    </div>
  </div>
</section>
<section class="pb-20">
  <div class="mx-auto px-4 container">
    <div class="group relative shadow-2xl mx-auto rounded-2xl max-w-5xl overflow-hidden">

      <div class="relative aspect-video overflow-hidden cursor-pointer">
        <img
          src="{{ asset('assets/images/vid-thumbs.jpg') }}"
          class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
          alt="Galaxy Traco Video Profile"
        >

        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-500"></div>

        <div class="absolute inset-0 flex flex-col justify-center items-center text-white text-center">

          <div class="flex justify-center items-center bg-white/90 shadow-2xl backdrop-blur-sm mb-4 p-4 rounded-full w-32 md:w-48 h-32 md:h-48">
            <img src="{{ asset('/assets/images/logo.png') }}" class="w-full h-auto" alt="Logo">
          </div>

          <h2 class="drop-shadow-lg font-bebas text-3xl md:text-5xl uppercase tracking-wide">
            GALAXY TRACO
          </h2>
          <p class="opacity-90 drop-shadow-md font-bebas text-lg md:text-2xl uppercase tracking-wide">
            Video Company Profile
          </p>
        </div>

        {{-- Play Button --}}
        <div class="absolute inset-0 flex justify-center items-center">
          <button class="rounded-full transition cursor-pointer">
            <img src="{{ asset('assets/icons/play-button.png') }}" class="size-36" alt="Play Button">
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="z-40 relative w-full">
  <div class="flex md:flex-row flex-col w-full h-100 md:h-125">

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/china-bg.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="China">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative flex flex-col justify-center items-center h-full text-white">
        <img src="https://flagcdn.com/w160/cn.png" class="shadow-lg mb-4 w-16" alt="China Flag">
        <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">China</h3>
      </div>
    </div>

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/singapore-bg.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Singapore">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative flex flex-col justify-center items-center border-white/10 border-x h-full text-white">
        <img src="https://flagcdn.com/w160/sg.png" class="shadow-lg mb-4 w-16" alt="Singapore Flag">
        <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">Singapore</h3>
      </div>
    </div>

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/thailand-bg.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Thailand">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative flex flex-col justify-center items-center h-full text-white">
        <img src="https://flagcdn.com/w160/th.png" class="shadow-lg mb-4 w-16" alt="Thailand Flag">
        <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">Thailand</h3>
      </div>
    </div>
  </div>
<x-section-title border-class="bg-red-600">
          <h2 class="mb-6 font-bold text-primary text-3xl md:text-5xl">
              Our Services
          </h2>
      </x-section-title>
</section>
<section">
  <div class="mx-auto md:mb-16 px-4 container">
    <div class="gap-8 grid md:grid-cols-3">

      <div class="bg-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl overflow-hidden transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/sea-freight.png') }}" class="w-full h-full object-cover" alt="Sea Freight">
          <div class="absolute inset-0 flex justify-center items-center bg-black/20">
             <img src="{{ asset('assets/icons/sea-freight.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="mb-4 font-bold text-green-800 text-2xl">{{__('messages.sea_freight')}}</h3>
          <p class="text-gray-600 leading-relaxed">
              {{ __('messages.desc_sf') }}
          </p>
        </div>
      </div>

      <div class="bg-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl overflow-hidden transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/air-freight.png') }}" class="w-full h-full object-cover" alt="Air Freight">
          <div class="absolute inset-0 flex justify-center items-center bg-black/20">
             <img src="{{ asset('assets/icons/air-freight.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="mb-4 font-bold text-primary text-2xl">{{__('messages.air_freight')}}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ __('messages.desc_af') }}
          </p>
        </div>
      </div>

      <div class="bg-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl overflow-hidden transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/import-custom-clearance.png') }}" class="w-full h-full object-cover" alt="Custom Clearance">
          <div class="absolute inset-0 flex justify-center items-center bg-black/20">
             <img src="{{ asset('assets/icons/import.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="mb-4 font-bold text-primary text-2xl">{{__('messages.import_custom_clearance')}}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ __('messages.desc_icc') }}
          </p>
        </div>
      </div>

      <div class="bg-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl overflow-hidden transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/door-to-door.png') }}" class="w-full h-full object-cover" alt="Door to Door Service">
          <div class="absolute inset-0 flex justify-center items-center bg-black/20">
             <img src="{{ asset('assets/icons/car.png') }}" class="w-26 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="mb-4 font-bold text-primary text-2xl">{{ __('messages.dtd_service') }}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ __('messages.desc_dtd_service') }}
          </p>
        </div>
      </div>

      <div class="bg-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl overflow-hidden transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/warehouse.png') }}" class="w-full h-full object-cover" alt="Warehouse">
          <div class="absolute inset-0 flex justify-center items-center bg-black/20">
             <img src="{{ asset('assets/icons/warehouse.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="mb-4 font-bold text-primary text-2xl">{{__('messages.warehouse')}}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ __('messages.desc_warehouse') }}
          </p>
        </div>
      </div>

      <div class="bg-white shadow-[0_10px_40px_rgba(0,0,0,0.1)] rounded-2xl overflow-hidden transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/lcl-fcl.png') }}" class="w-full h-full object-cover" alt="LCL / FCL">
          <div class="absolute inset-0 flex justify-center items-center bg-black/20">
             <img src="{{ asset('assets/icons/lcl-fcl.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="mb-4 font-bold text-primary text-2xl">{{ __('messages.lcl-fcl') }}</h3>
          <p class="text-gray-600 leading-relaxed">
            {{ __('messages.desc_lcl-fcl') }}
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="relative bg-[#006838] bg-blend-multiply bg-cover bg-center bg-fixed py-20" style="background-image: url('{{ asset('assets/images/bg2.png') }}')">

    <div class="z-10 relative mx-auto px-4 text-white text-center container">
        <x-section-title border-class="bg-white">
          <h2 class="mb-6 font-bold text-white text-3xl md:text-5xl">
              {{__('messages.why_make_us')}}
          </h2>
      </x-section-title>

        <div class="gap-12 grid grid-cols-1 md:grid-cols-4">

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon4.png') }}" class="w-24 h-24" alt="Confidentiality">
                </div>
                <h3 class="mb-3 font-bold text-xl uppercase tracking-wider">{{__('messages.confident')}}</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                  {{ __('messages.desc_confident') }}
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon5.png') }}" class="w-24 h-24" alt="Partnership">
                </div>
                <h3 class="mb-3 font-bold text-xl text-center uppercase tracking-wider">{{ __('messages.partnership') }}</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                  {{ __('messages.desc_partnership') }}
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon6.png') }}" class="w-24 h-24" alt="Continuous Improvement">
                </div>
                <h3 class="mb-3 font-bold text-xl uppercase tracking-wider">{{__('messages.improvement')}}</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                  {{ __('messages.desc_improvement') }}
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon7.png') }}" class="w-24 h-24" alt="Responsibility">
                </div>
                <h3 class="mb-3 font-bold text-xl uppercase tracking-wider">{{__('messages.respons')}}</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                  {{ __('messages.desc_respons') }}
                </p>
            </div>

        </div>
    </div>
</section>

<section class="relative bg-[#8B0000] pt-20 pb-0 overflow-hidden">
  <div class="mx-auto px-4 text-center container">
    <x-section-title border-class="bg-primary">
          <h2 class="mb-4 font-bold text-white text-3xl md:text-5xl">
                  {{ __('messages.galaxy_smart_dashboard') }}
          </h2>
      </x-section-title>

    <p class="mx-auto mb-12 max-w-4xl text-white/90 text-lg leading-relaxed">
      {{ __('messages.desc_galaxy_smart_dashboard') }}
    </p>

    <div class="relative mx-auto mb-10 max-w-5xl">
      <div class="flex justify-center items-end">
        <img
          src="{{ asset('assets/images/laptop-mockup-real.png') }} "
          class="z-10 relative w-full h-auto"
          alt="Dashboard Mockup"
        >
        </div>
    </div>

    <a href="#" class="inline-block bg-green-700 hover:bg-green-800 mb-16 px-10 py-3 rounded-lg font-bold text-white transition duration-300">
      {{__('messages.request_demo')}}
    </a>

  </div>
</section>

<section class="bg-white py-20">
  <div class="mx-auto px-4 container">
    <div class="mb-16 text-center">
    <x-section-title border-class="bg-red-600">
          <h2 class="mb-6 font-bold text-green-900 text-3xl md:text-5xl">
              {{ __('messages.our_workflow') }}
          </h2>
      </x-section-title>
      <img src="{{ 'assets/images/workflow.png' }}" alt="Container-Workflow">

    </div>
  </div>
</section>
<section class="relative bg-cover bg-center py-54" style="background-image: url('{{ asset('assets/images/strategic-warehouse.png') }}')">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="z-10 relative mx-auto px-4 text-white text-center container">
        <x-section-title border-class="bg-red-600">
          <h2 class="mb-6 font-bold text-white text-3xl md:text-5xl">
                    {{__('messages.strategic_warehouse')}}
          </h2>
      </x-section-title>

        <p class="opacity-90 mx-auto max-w-6xl text-lg md:text-xl leading-relaxed">
          {{ __('messages.desc_strategic_warehouse') }}
        </p>

        <p class="mt-8 font-bold text-xl md:text-xl">
          {{ __('messages.desc2_strategic_warehouse') }}
        </p>
    </div>
</section>
<section class="z-40 relative w-full">
  <div class="flex md:flex-row flex-col w-full h-100 md:h-125">

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/guangzhou.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Singapore">
            <div class="relative flex flex-col justify-center items-center border-white/10 border-x h-full text-white">
               <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">Guangzhou, China</h3>
      </div>
    </div>

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/yiwu-city.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="China">
           <div class="relative flex flex-col justify-center items-center h-full text-white">
              <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">Yiwu City, China </h3>
      </div>
    </div>


    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/singapore2.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Thailand">
            <div class="relative flex flex-col justify-center items-center h-full text-white">
               <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">Singapore</h3>
      </div>
    </div>

      <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/bangkok.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Thailand">
            <div class="relative flex flex-col justify-center items-center h-full text-white">
               <h3 class="font-bold md:text-2xl 2xl:text-4xl tracking-wider">Bangkok, Thailand</h3>
      </div>
    </div>
  </div>

</section>

<section class="py-20">
    <div class="mx-auto px-4 container">
        <x-section-title border-class="bg-red-600">
          <h2 class="mb-6 font-bold text-primary text-3xl md:text-5xl">
              {{__('messages.insights')}}
          </h2>
      </x-section-title>
        <div class="gap-10 grid grid-cols-3 md:grid-cols-3">
          @foreach ($articles as $article)
            <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="{{ $article->image }}" alt="{{ $article->title }}" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">{{ $article->title }} </h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">{{ $article->description }} </p>

            </div>  
          @endforeach
            {{-- <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="assets/images/importing-goods.png" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">{{__('messages.title_article1')}} </h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">{{__('messages.desc_article1')}} </p>

            </div>
            <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="assets/images/many-business.png" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">{{ __('messages.title_article2') }}</h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">{{__('messages.desc_article2')}}</p>

            </div>
            <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="assets/images/china-remains.png" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">{{ __('messages.title_article3') }} </h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">{{__('messages.desc_article3')}} </p>
            </div> --}}
            </div>

        <div class="mt-16 text-center">
            <a href="{{ route('insight') }}" class="bg-red-700 hover:bg-red-800 px-8 py-3 rounded-full font-bold text-white transition">{{ __('messages.see_all_articles') }}</a>
        </div>
    </div>
</section>

<section class="relative bg-cover bg-center py-24" style="background-image: url('{{ asset('assets/images/warehouse.png') }}')">
    <div class="absolute inset-0 bg-green-800/90"></div>

    <div class="z-10 relative mx-auto px-4 text-white text-center container">
        <x-section-title border-class="bg-red-600">
          <h2 class="mb-6 font-bold text-white text-3xl md:text-5xl">
            {{ __('messages.testimonial') }}
          </h2>
      </x-section-title>

        <div class="relative mx-auto max-w-280">

            <button class="top-1/2 -left-4 md:-left-16 absolute flex justify-center items-center hover:bg-white/20 border-2 border-white rounded-full w-10 h-10 transition -translate-y-1/2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>

            <div class="bg-white shadow-2xl p-8 md:p-30 rounded-3xl text-gray-800">
                <div class="flex justify-center gap-1 mb-8">
              <img src="assets/icons/star.png" class="w-50 h-6" alt="Star">

            </div>
                <p class="mb-8 font-semibold text-lg md:text-xl italic leading-relaxed">
                    "Galaxy Traco made importing so much easier. I used to feel overwhelmed with customs, documents, and shipping updates. Now, everything is handled from start to finish — with clear communication and no hidden fees."
                </p>

                <div class="flex justify-center items-center gap-2">
                    <div class="bg-green-700 w-8 h-1"></div>
                    <p class="font-bold text-green-900">Jessica A., <span class="font-bold text-black">Online Store Owner</span></p>
                </div>
            </div>

            <button class="top-1/2 -right-4 md:-right-16 absolute flex justify-center items-center hover:bg-white/20 border-2 border-white rounded-full w-10 h-10 transition -translate-y-1/2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

        </div>
    </div>
</section>



@endsection

