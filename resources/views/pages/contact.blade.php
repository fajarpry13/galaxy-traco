@extends('layouts.page')

@section('title', 'Galaxy Traco - Trusted Solution to Import Goods Overseas')

@section('content')

@include('main.contact')
<section class="bg-[#cfcfce]">

<section class="container grid grid-cols-12 w-full mx-auto px-8 py-10">
    <div class=" md:col-span-3 flex flex-col">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6458385966257!2d106.70855347573097!3d-6.1781402605396245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f93183fe84f3%3A0xd1ec59e4568df10b!2sGalaxy%20Traco!5e0!3m2!1sid!2sid!4v1793772806891!5m2!1sid!2sid"
      class="w-full flex-1 min-h-64 border-0"
      allowfullscreen=""
      loading="lazy"
      referrerpolicy="strict-origin-when-cross-origin"></iframe>
      <div class="bg-[#082f22] text-white flex flex-col mx-auto p-10 w-full">
        <div class="text-3xl mb-4">
          Kantor Kami
        </div>
        <div class="flex flex-row py-4">
            @svg('heroicon-o-map-pin','size-8')
            <div class="pl-4">
              Green Lake City Ruko CBD <br>
              Blok C No.76, Tangerang 15146
            </div>
        </div>
        <div class="flex flex-row py-4">
            @svg('heroicon-o-phone','size-8')
            <div class="pl-4">
              (+62) 2154315605
            </div>
        </div>
        <div class="flex flex-row py-4">
            @svg('heroicon-o-envelope','size-8')
            <div class="pl-4">
              marketing@mtdpint.com
            </div>
        </div>
        <div class="flex flex-row py-4">
            @svg('heroicon-o-clock','size-8')
            <div class="pl-4">
              Mon-Fri 08.00-17.00 WIB,<br>
              Sat 08.00-14.00 WIB
            </div>
        </div>
      </div>
    </div>
    <div class="col-span-9 bg-white py-6 px-12">
      <form action="" class="flex flex-col h-full">
        <h1 class="text-3xl text-primary text-dark mb-4">
           Hubungi Kami
        </h1>

         <div class="mb-4">
                    <label for="name" class="block mb-2  text-dark">Nama</label>
                    <input type="text" name="name" id="name" class="px-3 py-2 border   rounded focus:outline-none focus:ring w-full" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block mb-2  text-dark">Email</label>
                    <input type="email" name="email" id="email" class="px-3 py-2 border   rounded focus:outline-none focus:ring w-full" required>
                </div>

                <!-- Phone -->
                <div class="mb-4">
                    <label for="phone" class="block mb-2  text-dark">Telepon</label>
                    <input type="text" name="phone" id="phone" class="px-3 py-2 border   rounded focus:outline-none focus:ring w-full" required>
                </div>

                {{-- Office --}}
                <div class="mb-4">
                    <label for="office" class="block mb-2  text-dark">Perusahaan</label>
                    <input type="text" name="office" id="office" class="px-3 py-2 border   rounded focus:outline-none focus:ring w-full" required>
                </div>

                <!-- Pesan -->
                <div class="mb-4 flex flex-col flex-1">
                    <label for="message" class="block mb-2  text-dark">Pesan</label>
                    <textarea name="message" id="message" rows="5" class="px-3 py-2 border   rounded focus:outline-none focus:ring w-full" required></textarea>
                </div>
                <button type="submit"
                class="grid place-self-end uppercase cursor-pointer bg-dark hover:bg-dark/80 px-6 py-2 rounded-lg bg-[#bf021d]  text-white transition duration-300">
                Submit</button>
      </form>
    </div>
</section>

<section class="flex flex-col text-xl gap-8 justify-center items-center mx-auto py-4">
  {{-- <div class="flex flex-row gap-4">
  <span class="text-black">Contact us today for a</span>
  <span class="text-red-600">Free Consultation</span>
  <span class="text-black ">and hassle-free shipping solutions.</span>
</div> --}}
<div class="text-2xl"> Contact us today for a <span class="text-red-600">Free Consultation</span>
    and hassle-free shipping solutions.</div>

<div class="flex flex-row container w-full h-auto px-8 py-10">
    <div class="px-8 py-10 bg-white mx-auto flex flex-row justify-evenly items-center gap-8 container">
    <div class="flex flex-col items-center">
        @svg('heroicon-s-phone','size-10')
        <p class="mt-4 font-bold text-black text-center text-2xl">
          (+62) <br> 2154315605
        </p>
    </div>
    <div class="flex flex-col items-center">
        @svg('gmdi-whatsapp','size-10')
        <p class="mt-4 font-bold text-black text-center text-2xl ">
          (+62) <br> 2154315605
        </p>
    </div>
    <div class="flex flex-col items-center">
        @svg('gmdi-whatsapp','size-10')
        <p class="mt-4 font-bold text-black text-center text-2xl ">
          (+62) <br> 2154315605
        </p>
    </div>
    <div class="flex flex-col items-center">
        @svg('gmdi-whatsapp','size-10')
        <p class="mt-4 font-bold text-black text-center text-2xl">
          (+62) <br> 2154315605
        </p>
    </div>
    </div>
</div>
</section>
</section>



@endsection

