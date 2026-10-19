   <section class="relative bg-cover w-full h-screen overflow-hidden" style="background-image: url('{{ asset('/assets/images/bg.png') }}')">
      @if (!empty($hero?->video_background))
      <video
          autoplay
          muted
          loop
          playsinline
          class="z-0 absolute inset-0 w-full h-full object-cover"
        >
          <source src="{{ asset('storage/' . $hero->video_background) }}" type="video/mp4">
      </video>
        <div class="absolute inset-0 bg-black/30"></div>
        @elseif(!empty($hero?->image_background))
        <div class="z-0 absolute inset-0 w-full h-full bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $hero->image_background) }}')"></div>
    @endif
    <video
          autoplay
          muted
          loop
          playsinline
          class="z-0 absolute inset-0 w-full h-full object-cover"
        >
          <source src="{{ asset('assets/videos/GalaxyTracoVideoBackground.mp4') }}" type="video/mp4">
      </video>
        <div class="absolute inset-0 bg-black/30"></div>
     <x-hero-header 
    title="{{ __('messages.trusted_solution') }}" 
    description="{{ __('messages.to_import') }}" 
/>
  
    </section>

