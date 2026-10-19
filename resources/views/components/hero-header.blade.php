@props(['title' => '',
        'description' => ''
    ])

<div class="z-10 absolute inset-0 flex flex-col justify-center items-center px-4 h-full text-white text-center">
    <h1 class="drop-shadow-[0_5px_15px_rgba(0,0,0,0.5)] font-bebas uppercase">
      <span class="block text-6xl md:text-9xl leading-[0.85] tracking-[-0.em]">
        {{$title}}
      </span>
      <span class="block mt-2 md:text-[5.5rem] text-4xl leading-[0.9] tracking-[-0.em]">
        {{$description}}
      </span>
    </h1>
  </div>