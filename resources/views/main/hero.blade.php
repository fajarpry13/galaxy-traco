   <section class="relative h-screen w-full overflow-hidden bg-cover" style="background-image: url('{{ asset('/assets/images/bg.png') }}')">
      <video 
        autoplay 
        muted 
        loop 
        playsinline 
        class="absolute inset-0 w-full h-full object-cover z-0"
      >
        <source src="{{ asset('videos/cargo-ship.mp4') }}" type="video/mp4">
      </video>

    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center text-white px-4">
  <h1 class="font-bebas uppercase font-bold drop-shadow-[0_5px_15px_rgba(0,0,0,0.5)]">
    <span class="block text-6xl md:text-9xl tracking-[-0.em] leading-[0.85] ">
      TRUSTED SOLUTION
    </span>
    <span class="block text-4xl md:text-[5.5rem] tracking-[-0.em] leading-[0.9] mt-2">
      TO IMPORT GOODS OVERSEAS
    </span>
  </h1>
</div>
    </section>

    <!-- ICONS SECTION -->
    <section class="relative z-30 -mt-24 pb-20"> <div class="container mx-auto px-4">
    <div class="flex flex-wrap justify-center gap-10 md:gap-20 ">
      
      <div class="flex flex-col items-center text-center">
        <div class="w-40 h-40 md:w-56 md:h-56 bg-red-600 rounded-full  flex flex-col items-center justify-center text-white shadow-xl">
          <img src="{{ asset('assets/icons/icon.png') }}" class="w-16 h-16 mb-2 " />
          <span class="text-3xl font-thin">+300</span>
          <span class="font-thin text-xs uppercase tracking-widest">Clients Served</span>
        </div>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="w-40 h-40 md:w-56 md:h-56 bg-red-600 rounded-full  flex flex-col items-center justify-center text-white shadow-xl">
          <img src="{{ asset('assets/icons/icon2.png') }}" class="w-16 h-16 mb-2  " />
          <span class="text-3xl font-thin">+250.000</span>
          <span class="font-thin text-xs uppercase tracking-widest">Goods Imported</span>
        </div>
      </div>

      <div class="flex flex-col items-center text-center">
        <div class="w-40 h-40 md:w-56 md:h-56 bg-red-600 rounded-full flex flex-col items-center justify-center text-white shadow-xl">
          <img src="{{ asset('assets/icons/icon3.png') }}" class="w-16 h-16 mb-2 " />
          <span class="text-3xl font-thin">+1.000.000</span>
          <span class="font-thin text-xs uppercase tracking-widest">Miles Coverage</span>
        </div>
      </div>

    </div>

    <div class="text-center mt-20 max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-5xl font-bold text-green-900 mb-6">
        Simplifying Imports. Empowering Business.
      </h2>
      <div class="w-16 h-1 bg-red-600 mx-auto mb-8"></div>
      <p class="text-gray-600 text-lg leading-relaxed">
        We are an import expedition service committed to making international shipping simple, fast, and secure. With our door-to-door delivery, you can send imported goods without stress — no complicated processes, no wasted time. Safe, timely, and competitively priced shipping made effortless.
      </p>
    </div>
  </div>
</section>
<section class="pb-20">
  <div class="container mx-auto px-4">
    <div class="relative max-w-5xl mx-auto group overflow-hidden rounded-2xl shadow-2xl">
      
      <div class="relative aspect-video overflow-hidden cursor-pointer">
        <img 
          src="{{ asset('assets/images/video-thumbnail.jpg') }}" 
          class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" 
          alt="Galaxy Traco Video Profile"
        >
        
        <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors duration-500"></div>

        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center">
          
          <div class="w-32 h-32 md:w-48 md:h-48 bg-white/90 rounded-full flex items-center justify-center p-4 mb-4 shadow-2xl backdrop-blur-sm">
            <img src="{{ asset('/assets/images/logo.png') }}" class="w-full h-auto" alt="Logo">
          </div>

          <h2 class="text-3xl md:text-5xl font-black tracking-tighter uppercase leading-tight drop-shadow-lg">
            GALAXY TRACO
          </h2>
          <p class="text-lg md:text-xl font-medium tracking-[0.2em] uppercase opacity-90 drop-shadow-md">
            Video Company Profile
          </p>

          <div class="mt-6 w-16 h-16 bg-red-600 rounded-full flex items-center justify-center animate-pulse">
             <svg class="w-8 h-8 text-white fill-current" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
             </svg>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="relative z-40 w-full">
  <div class="flex flex-col md:flex-row w-full h-100 md:h-125">
    
    <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/china-bg.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="China">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative h-full flex flex-col items-center justify-center text-white">
        <img src="https://flagcdn.com/w160/cn.png" class="w-16 mb-4 shadow-lg" alt="China Flag">
        <h3 class="text-4xl font-bold tracking-wider">China</h3>
      </div>
    </div>

    <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/singapore-bg.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Singapore">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative h-full flex flex-col items-center justify-center text-white border-x border-white/10">
        <img src="https://flagcdn.com/w160/sg.png" class="w-16 mb-4 shadow-lg" alt="Singapore Flag">
        <h3 class="text-4xl font-bold tracking-wider">Singapore</h3>
      </div>
    </div>

    <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/thailand-bg.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Thailand">
      <div class="absolute inset-0 bg-black/40 group-hover:bg-black/20 transition-colors"></div>
      <div class="relative h-full flex flex-col items-center justify-center text-white">
        <img src="https://flagcdn.com/w160/th.png" class="w-16 mb-4 shadow-lg" alt="Thailand Flag">
        <h3 class="text-4xl font-bold tracking-wider">Thailand</h3>
      </div>
    </div>
  </div>
  <div class="relative z-10 h-full flex flex-col items-center justify-center text-center text-green-900 px-4 md:mb-14 md:mt-16">
  <h1 class="font-sans font-bold drop-shadow-[0_5px_15px_rgba(0,0,0,0.5)]">
    <span class="block text-6xl md:text-5xl tracking-[-0.em] leading-[0.85]">
          Our Services
    </span>
    <br>
    <div class="w-16 h-1 bg-red-600 mx-auto mb-8"></div>
  </h1>
  </div>
</section>
<section">
  <div class=" container mx-auto px-4">
    <div class="grid md:grid-cols-3 gap-8">
      
      <div class="bg-white rounded-2xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.1)] transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/sea-freight.png') }}" class="w-full h-full object-cover" alt="Sea Freight">
          <div class="absolute inset-0 flex items-center justify-center bg-black/20">
             <img src="{{ asset('assets/icons/sea-freight.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl font-bold text-green-800 mb-4">Sea Freight</h3>
          <p class="text-gray-600 leading-relaxed">
            Shipping by sea is perfect for you who want to send goods in larges size and in large quantities.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.1)] transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/air-freight.png') }}" class="w-full h-full object-cover" alt="Air Freight">
          <div class="absolute inset-0 flex items-center justify-center bg-black/20">
             <img src="{{ asset('assets/icons/air-freight.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl font-bold text-green-800 mb-4">Air Freight</h3>
          <p class="text-gray-600 leading-relaxed">
            Air shipping is very suitable for you who want to send goods with a small size but heavy and fast because it only takes 7-10 days.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.1)] transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/import-custom-clearance.png') }}" class="w-full h-full object-cover" alt="Custom Clearance">
          <div class="absolute inset-0 flex items-center justify-center bg-black/20">
             <img src="{{ asset('assets/icons/import.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl font-bold text-green-800 mb-4">Import Custom Clearance</h3>
          <p class="text-gray-600 leading-relaxed">
            Send anti-complicated imported goods, because we will take care of all the necessary import documents.
          </p>
        </div>
      </div> 

      <div class="bg-white rounded-2xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.1)] transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/door-to-door.png') }}" class="w-full h-full object-cover" alt="Door to Door Service">
          <div class="absolute inset-0 flex items-center justify-center bg-black/20">
             <img src="{{ asset('assets/icons/car.png') }}" class="w-26 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl font-bold text-green-800 mb-4">Door to Door Service</h3>
          <p class="text-gray-600 leading-relaxed">
            Save more your time with door to door service. We will directly send your imported goods to your address.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.1)] transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/warehouse.png') }}" class="w-full h-full object-cover" alt="Warehouse">
          <div class="absolute inset-0 flex items-center justify-center bg-black/20">
             <img src="{{ asset('assets/icons/warehouse.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl font-bold text-green-800 mb-4">Warehouse</h3>
          <p class="text-gray-600 leading-relaxed">
            Our wide warehouse capacity is able to accommodate your imported goods. Your sipmnet is safe in our warehouse.
          </p>
        </div>
      </div>

      <div class="bg-white rounded-2xl overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.1)] transition-transform hover:-translate-y-2 duration-300">
        <div class="relative h-64">
          <img src="{{ asset('assets/images/lcl-fcl.png') }}" class="w-full h-full object-cover" alt="LCL / FCL">
          <div class="absolute inset-0 flex items-center justify-center bg-black/20">
             <img src="{{ asset('assets/icons/lcl-fcl.png') }}" class="w-20 h-20" />
          </div>
        </div>
        <div class="p-8 text-center">
          <h3 class="text-2xl font-bold text-green-800 mb-4">LCL / FCL</h3>
          <p class="text-gray-600 leading-relaxed">
            Send imported goods according to your needs with the LCL or FCL system.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="relative py-20 bg-fixed bg-cover bg-center" style="background-image: url('{{ asset('assets/images/bg2.png') }}')">
    <div class="absolute inset-0 bg-green-900/80 z-0"></div>

    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Why Makes Us Different?</h2>
        <div class="w-20 h-1 bg-white mx-auto mb-16"></div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            
            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon4.png') }}" class="w-24 h-24" alt="Confidentiality">
                </div>
                <h3 class="text-xl font-bold uppercase tracking-wider mb-3">Confidentiality</h3>
                <p class="text-sm font-medium leading-relaxed opacity-90">
                    We safeguard all client and business information with the highest level of discretion and trust.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon5.png') }}" class="w-24 h-24" alt="Partnership">
                </div>
                <h3 class="text-xl font-bold uppercase tracking-wider mb-3 text-center">Partnership-Driven Relationship</h3>
                <p class="text-sm font-medium leading-relaxed opacity-90">
                    We build long-term partnerships by working collaboratively and aligning our goals with our clients' success.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon6.png') }}" class="w-24 h-24" alt="Continuous Improvement">
                </div>
                <h3 class="text-xl font-bold uppercase tracking-wider mb-3">Continuous Improvement</h3>
                <p class="text-sm font-medium leading-relaxed opacity-90">
                    We consistently enhance our processes, knowledge, and capabilities to deliver better results over time.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div>
                    <img src="{{ asset('assets/icons/icon7.png') }}" class="w-24 h-24" alt="Responsibility">
                </div>
                <h3 class="text-xl font-bold uppercase tracking-wider mb-3">Responsibility</h3>
                <p class="text-sm font-medium leading-relaxed opacity-90">
                    We take full ownership of our commitments and actions, ensuring reliability, accountability, and integrity in everything we do.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="relative bg-[#8B0000] pt-20 pb-0 overflow-hidden">
  <div class="container mx-auto px-4 text-center">
    
    <h2 class="text-3xl md:text-5xl font-bold text-white mb-4">
      Galaxy Traco Smart Client Dashboard
    </h2>
    <div class="w-16 h-0.5 bg-green-700 mx-auto mb-10"></div>
    
    <p class="text-white/90 max-w-4xl mx-auto text-lg leading-relaxed mb-12">
      The Galaxy Traco Smart Client Dashboard provides customers with easy and secure access to real-time shipping information.
      Through this dashboard, and stay updated at every stage of the logistics process—accessible seamlessly on both smartphones and desktop devices.      
    </p>

    <div class="relative max-w-5xl mx-auto mb-10 "> 
      <div class="flex justify-center items-end">
        <img 
          src="{{ asset('assets/images/laptop-mockup-real.png') }} " 
          class="relative z-10 w-full h-auto " 
          alt="Dashboard Mockup"
        >
        </div>
    </div>

    <a href="#" class="inline-block bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-10 rounded-lg transition duration-300 mb-16">
      Request Demo
    </a>

  </div>
</section>

<section class="py-20 bg-white">
  <div class=" container mx-auto px-4">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-5xl font-bold text-green-900 mb-6"> Our Workflow</h2>
      <div class="w-20 h-1 bg-red-800 mx-auto mb-16"></div>
      <img src="{{ 'assets/images/workflow.png' }}" alt="Container-Workflow">

    </div>
  </div>
</section>
<section class="relative py-54 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/bg-warehouse.png') }}')">
  

    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Strategic Warehouse Locations</h2>
        <div class="w-16 h-1 bg-red-600 mx-auto mb-8"></div>
        
        <p class="max-w-6xl mx-auto text-lg md:text-xl leading-relaxed opacity-90">
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
<section class="relative z-40 w-full">
  <div class="flex flex-col md:flex-row w-full h-100 md:h-125">
    
    <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/yiwu-city.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="China">
           <div class="relative h-full flex flex-col items-center justify-center text-white">
              <h3 class="text-4xl font-bold tracking-wider">Yiwu City, China </h3>
      </div>
    </div>

    <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/guangzhou.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Singapore">
            <div class="relative h-full flex flex-col items-center justify-center text-white border-x border-white/10">
               <h3 class="text-4xl font-bold tracking-wider">Guangzhou, China</h3>
      </div>
    </div>

    <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/singapore2.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Thailand">
            <div class="relative h-full flex flex-col items-center justify-center text-white">
               <h3 class="text-4xl font-bold tracking-wider">Singapore</h3>
      </div>
    </div>

      <div class="relative flex-1 group overflow-hidden cursor-pointer">
      <img src="{{ asset('assets/images/bangkok.png') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Thailand">
            <div class="relative h-full flex flex-col items-center justify-center text-white">
               <h3 class="text-4xl font-bold tracking-wider">Bangkok, Thailand</h3>
      </div>
    </div>
  </div>

</section>

<section class="py-20">
    <div class="container mx-auto px-4">
        <h2 class=" text-center text-green-900 text-3xl md:text-5xl font-bold mb-10">Insights</h2>
        <div class="w-20 h-1 bg-red-800 mx-auto mb-16"></div>
        <div class="grid grid-cols-3 md:grid-cols-3 gap-10">
            <div class="group cursor-pointer">
                <div class="overflow-hidden rounded-lg mb-4">
                    <img src="assets/images/importing-goods.png" class="aspect-video object-cover ">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">What You Need to Know Before Importing Goods from Overseas </h3>
                <p class="text-gray-500 text-sm mt-2 line-clamp-5">Importing goods can open doors to bigger business opportunities — better pricing, 
                  unique product supply, and access to global manufacturers. However, 
                  before you begin, there are a few key things you must understand   </p>
                
            </div>
            <div class="group cursor-pointer">
                <div class="overflow-hidden rounded-lg mb-4">
                    <img src="assets/images/many-business.png" class=" aspect-video object-cover ">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">The Easiest Way to Import Goods: Door-to-Door Shipping </h3>
                <p class="text-gray-500 text-sm mt-2 line-clamp-5">For many business owners, the most challenging part of importing isn't 
                  finding products — it's handling the process: shipping, customs, paperwork, taxes, and delivery, 
                  That's where door-to-door import services make a </p>
                
            </div>
            <div class="group cursor-pointer">
                <div class="overflow-hidden rounded-lg mb-4">
                    <img src="assets/images/china-remains.png" class=" aspect-video object-cover ">
                </div>
                <h3 class="font-bold text-green-900 group-hover:text-green-600 transition">Trending Products in China: Ideas to Inspire Your Next Business Move </h3>
                <p class="text-gray-500 text-sm mt-2 line-clamp-5">China remains one of the biggest product innovation hubs, and trends change fast — giving 
                  endless opportunities for new business ideas. 
                  If you're planning your next import move, here are some categories currently </p>
                
            </div>
            </div>
        
        <div class="text-center mt-16">
            <button class="bg-red-700 text-white px-8 py-3 rounded-full font-bold hover:bg-red-800 transition">See All Articles</button>
        </div>
    </div>
</section>

<section class="relative py-24 bg-cover bg-center" style="background-image: url('{{ asset('assets/images/warehouse.png') }}')">
    <div class="absolute inset-0 bg-green-800/90"></div>

    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <h2 class="text-4xl md:text-5xl font-bold mb-4">Testimonial</h2>
        <div class="w-16 h-1 bg-red-600 mx-auto mb-16"></div>

        <div class="relative max-w-4xl mx-auto">
            
            <button class="absolute -left-4 md:-left-16 top-1/2 -translate-y-1/2 w-10 h-10 border-2 border-white rounded-full flex items-center justify-center hover:bg-white/20 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>

            <div class="bg-white rounded-3xl p-8 md:p-16 shadow-2xl text-gray-800">
                <div class="flex justify-center gap-1 mb-8">
              <img src="assets/icons/star.png" class="w-50 h-6" alt="Star">
   
            </div>
                <p class="text-lg md:text-xl italic font-semibold leading-relaxed mb-8">
                    "Galaxy Traco made importing so much easier. I used to feel overwhelmed with customs, documents, and shipping updates. Now, everything is handled from start to finish — with clear communication and no hidden fees."
                </p>

                <div class="flex items-center justify-center gap-2">
                    <div class="w-8 h-1 bg-green-700"></div>
                    <p class="font-bold text-green-900">Jessica A., <span class=" text-black font-bold">Online Store Owner</span></p>
                </div>
            </div>

            <button class="absolute -right-4 md:-right-16 top-1/2 -translate-y-1/2 w-10 h-10 border-2 border-white rounded-full flex items-center justify-center hover:bg-white/20 transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

        </div>
    </div>
</section>

