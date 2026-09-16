@extends('layouts.page')

@section('title', 'Galaxy Traco - Trusted Solution to Import Goods Overseas')

@section('content')

@include('main.hero')

 <!-- ICONS SECTION -->
    <section class="z-30 relative -mt-24 pb-20"> <div class="mx-auto px-4 container">
    <div class="flex flex-wrap justify-center gap-10 md:gap-20 -translate-y-12">

      <div class="flex flex-col items-center text-center">
        <div class="flex flex-col justify-center items-center bg-red-600 shadow-xl rounded-full w-40 md:w-75 h-40 md:h-75 text-white">
          <img src="{{ asset('assets/icons/icon2.png') }}" class="mb-2 w-16 h-16" />
          <span class="font-bold text-3xl">+250.000</span>
          <span class="font-bold text-xs uppercase tracking-widest">Goods Imported</span>
        </div>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="flex flex-col justify-center items-center bg-red-600 shadow-xl rounded-full w-40 md:w-75 h-40 md:h-75 text-white">
          <img src="{{ asset('assets/icons/icon.png') }}" class="mb-2 w-16 h-16" />
          <span class="font-bold text-3xl">+300</span>
          <span class="font-bold text-xs uppercase tracking-widest">Clients Served</span>
        </div>
      </div>

    <div class="flex flex-col items-center text-center">
        <div class="flex flex-col justify-center items-center bg-red-600 shadow-xl rounded-full w-40 md:w-75 h-40 md:h-75 text-white">
          <img src="{{ asset('assets/icons/icon3.png') }}" class="mb-2 w-16 h-16" />
          <span class="font-bold text-3xl">+1.000.000</span>
          <span class="font-bold text-xs uppercase tracking-widest">Miles Coverage</span>
        </div>
      </div>

    </div>

    <div class="mx-auto mt-20 max-w-4xl text-center">
      <h2 class="mb-6 font-bold text-green-900 text-3xl md:text-5xl">
        Simplifying Imports. Empowering Business.
      </h2>
      <div class="bg-red-600 mx-auto mb-8 w-16 h-1"></div>
      <p class="text-gray-600 text-lg leading-relaxed">
        We are an import expedition service committed to making international shipping simple, fast, and secure. With our door-to-door delivery, you can send imported goods without stress — no complicated processes, no wasted time. Safe, timely, and competitively priced shipping made effortless.
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

          <h2 class="drop-shadow-lg font-black text-3xl md:text-5xl uppercase leading-tight tracking-tighter">
            GALAXY TRACO
          </h2>
          <p class="opacity-90 drop-shadow-md font-medium text-lg md:text-xl uppercase tracking-[0.2em]">
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
        <h3 class="font-bold text-4xl tracking-wider">China</h3>
      </div>
    </div>

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/singapore-bg.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Singapore">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative flex flex-col justify-center items-center border-white/10 border-x h-full text-white">
        <img src="https://flagcdn.com/w160/sg.png" class="shadow-lg mb-4 w-16" alt="Singapore Flag">
        <h3 class="font-bold text-4xl tracking-wider">Singapore</h3>
      </div>
    </div>

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/thailand-bg.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Thailand">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative flex flex-col justify-center items-center h-full text-white">
        <img src="https://flagcdn.com/w160/th.png" class="shadow-lg mb-4 w-16" alt="Thailand Flag">
        <h3 class="font-bold text-4xl tracking-wider">Thailand</h3>
      </div>
    </div>
  </div>
  <div class="z-10 relative flex flex-col justify-center items-center md:mt-16 md:mb-14 px-4 h-full text-green-900 text-center">
  <h1 class="drop-shadow-[0_5px_15px_rgba(0,0,0,0.5)] font-sans font-bold">
    <span class="block md:text-5xl text-6xl leading-[0.85] tracking-[-0.em]">
          Our Services
    </span>
    <br>
    <div class="bg-red-600 mx-auto mb-8 w-16 h-1"></div>
  </h1>
  </div>
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
          <h3 class="mb-4 font-bold text-green-800 text-2xl">Sea Freight</h3>
          <p class="text-gray-600 leading-relaxed">
            Shipping by sea is perfect for you who want to send goods in larges size and in large quantities.
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
          <h3 class="mb-4 font-bold text-green-800 text-2xl">Air Freight</h3>
          <p class="text-gray-600 leading-relaxed">
            Air shipping is very suitable for you who want to send goods with a small size but heavy and fast because it only takes 7-10 days.
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
          <h3 class="mb-4 font-bold text-green-800 text-2xl">Import Custom Clearance</h3>
          <p class="text-gray-600 leading-relaxed">
            Send anti-complicated imported goods, because we will take care of all the necessary import documents.
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
          <h3 class="mb-4 font-bold text-green-800 text-2xl">Door to Door Service</h3>
          <p class="text-gray-600 leading-relaxed">
            Save more your time with door to door service. We will directly send your imported goods to your address.
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
          <h3 class="mb-4 font-bold text-green-800 text-2xl">Warehouse</h3>
          <p class="text-gray-600 leading-relaxed">
            Our wide warehouse capacity is able to accommodate your imported goods. Your sipmnet is safe in our warehouse.
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
          <h3 class="mb-4 font-bold text-green-800 text-2xl">LCL / FCL</h3>
          <p class="text-gray-600 leading-relaxed">
            Send imported goods according to your needs with the LCL or FCL system.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="relative bg-[#006838] bg-blend-multiply bg-cover bg-center bg-fixed py-20" style="background-image: url('{{ asset('assets/images/bg2.png') }}')">

    <div class="z-10 relative mx-auto px-4 text-white text-center container">
        <h2 class="mb-4 font-bold text-4xl md:text-5xl">Why Makes Us Different?</h2>
        <div class="bg-white mx-auto mb-16 w-20 h-1"></div>

        <div class="gap-12 grid grid-cols-1 md:grid-cols-4">

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon4.png') }}" class="w-24 h-24" alt="Confidentiality">
                </div>
                <h3 class="mb-3 font-bold text-xl uppercase tracking-wider">Confidentiality</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                    We safeguard all client and business information with the highest level of discretion and trust.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon5.png') }}" class="w-24 h-24" alt="Partnership">
                </div>
                <h3 class="mb-3 font-bold text-xl text-center uppercase tracking-wider">Partnership-Driven Relationship</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                    We build long-term partnerships by working collaboratively and aligning our goals with our clients' success.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon6.png') }}" class="w-24 h-24" alt="Continuous Improvement">
                </div>
                <h3 class="mb-3 font-bold text-xl uppercase tracking-wider">Continuous Improvement</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                    We consistently enhance our processes, knowledge, and capabilities to deliver better results over time.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon7.png') }}" class="w-24 h-24" alt="Responsibility">
                </div>
                <h3 class="mb-3 font-bold text-xl uppercase tracking-wider">Responsibility</h3>
                <p class="opacity-90 font-medium text-sm leading-relaxed">
                    We take full ownership of our commitments and actions, ensuring reliability, accountability, and integrity in everything we do.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="relative bg-[#8B0000] pt-20 pb-0 overflow-hidden">
  <div class="mx-auto px-4 text-center container">

    <h2 class="mb-4 font-bold text-white text-3xl md:text-5xl">
      Galaxy Traco Smart Client Dashboard
    </h2>
    <div class="bg-green-700 mx-auto mb-10 w-16 h-0.5"></div>

    <p class="mx-auto mb-12 max-w-4xl text-white/90 text-lg leading-relaxed">
      The Galaxy Traco Smart Client Dashboard provides customers with easy and secure access to real-time shipping information.
      Through this dashboard, and stay updated at every stage of the logistics process—accessible seamlessly on both smartphones and desktop devices.
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
      Request Demo
    </a>

  </div>
</section>

<section class="bg-white py-20">
  <div class="mx-auto px-4 container">
    <div class="mb-16 text-center">
      <h2 class="mb-6 font-bold text-green-900 text-3xl md:text-5xl"> Our Workflow</h2>
      <div class="bg-red-800 mx-auto mb-16 w-20 h-1"></div>
      <img src="{{ 'assets/images/workflow.png' }}" alt="Container-Workflow">

    </div>
  </div>
</section>
<section class="relative bg-cover bg-center py-54" style="background-image: url('{{ asset('assets/images/strategic-warehouse.png') }}')">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="z-10 relative mx-auto px-4 text-white text-center container">
        <h2 class="mb-4 font-bold text-4xl md:text-5xl">Strategic Warehouse Locations</h2>
        <div class="bg-red-600 mx-auto mb-8 w-16 h-1"></div>

        <p class="opacity-90 mx-auto max-w-6xl text-lg md:text-xl leading-relaxed">
            Galaxy Traco operates 4 warehouse locations in Guangzhou, Yiwu, Singapore and Bangkok, giving you
            flexibility and faster processing. Suppliers can send goods to the nearest warehouse, reducing domestic
            shipping time and cost. Each warehouse supports secure storage, item checks, consolidation from multiple
            suppliers, and export preparation — ensuring your shipment is processed efficiently and accurately.
        </p>

        <p class="mt-8 font-bold text-xl md:text-xl">
           With this network, your imports move faster, safer, and more smoothly from factory to destination.
        </p>
    </div>
</section>
<section class="z-40 relative w-full">
  <div class="flex md:flex-row flex-col w-full h-100 md:h-125">

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/guangzhou.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Singapore">
            <div class="relative flex flex-col justify-center items-center border-white/10 border-x h-full text-white">
               <h3 class="font-bold text-4xl tracking-wider">Guangzhou, China</h3>
      </div>
    </div>

    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/yiwu-city.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="China">
           <div class="relative flex flex-col justify-center items-center h-full text-white">
              <h3 class="font-bold text-4xl tracking-wider">Yiwu City, China </h3>
      </div>
    </div>


    <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/singapore2.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Thailand">
            <div class="relative flex flex-col justify-center items-center h-full text-white">
               <h3 class="font-bold text-4xl tracking-wider">Singapore</h3>
      </div>
    </div>

      <div class="group relative flex-1 overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/bangkok.png') }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" alt="Thailand">
            <div class="relative flex flex-col justify-center items-center h-full text-white">
               <h3 class="font-bold text-4xl tracking-wider">Bangkok, Thailand</h3>
      </div>
    </div>
  </div>

</section>

<section class="py-20">
    <div class="mx-auto px-4 container">
        <h2 class="mb-10 font-bold text-green-900 text-3xl md:text-5xl text-center">Insights</h2>
        <div class="bg-red-800 mx-auto mb-16 w-20 h-1"></div>
        <div class="gap-10 grid grid-cols-3 md:grid-cols-3">
            <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="assets/images/importing-goods.png" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">What You Need to Know Before Importing Goods from Overseas </h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">Importing goods can open doors to bigger business opportunities — better pricing,
                  unique product supply, and access to global manufacturers. However,
                  before you begin, there are a few key things you must understand   </p>

            </div>
            <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="assets/images/many-business.png" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">The Easiest Way to Import Goods: Door-to-Door Shipping </h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">For many business owners, the most challenging part of importing isn't
                  finding products — it's handling the process: shipping, customs, paperwork, taxes, and delivery,
                  That's where door-to-door import services make a </p>

            </div>
            <div class="group cursor-pointer">
                <div class="mb-4 rounded-lg overflow-hidden">
                    <img src="assets/images/china-remains.png" class="object-cover aspect-video">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">Trending Products in China: Ideas to Inspire Your Next Business Move </h3>
                <p class="mt-2 text-gray-500 text-sm line-clamp-5">China remains one of the biggest product innovation hubs, and trends change fast — giving
                  endless opportunities for new business ideas.
                  If you're planning your next import move, here are some categories currently </p>

            </div>
            </div>

        <div class="mt-16 text-center">
            <a href="{{ route('insight') }}" class="bg-red-700 hover:bg-red-800 px-8 py-3 rounded-full font-bold text-white transition">See All Articles</a>
        </div>
    </div>
</section>

<section class="relative bg-cover bg-center py-24" style="background-image: url('{{ asset('assets/images/warehouse.png') }}')">
    <div class="absolute inset-0 bg-green-800/90"></div>

    <div class="z-10 relative mx-auto px-4 text-white text-center container">
        <h2 class="mb-4 font-bold text-4xl md:text-5xl">Testimonial</h2>
        <div class="bg-red-600 mx-auto mb-16 w-16 h-1"></div>

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

