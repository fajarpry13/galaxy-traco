@props([
    'hasLine' => true,
])


<div class="relative flex flex-col justify-center items-center mx-auto mt-20 text-center">
    {{ $slot }}

    @if ($hasLine)
            <span {{ $attributes->merge(['class' => 'lg:flex-auto mx-auto mb-16 w-16 h-1 transition-all ease-linear '. $borderClass]) }}></span>
    @endif

</div>