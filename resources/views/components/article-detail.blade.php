@props(['article', 'locale','hasPrevious', 'hasNext', 'prevSlug' => null, 'nextSlug' => null])


<div class="bg-white p-8 shadow-sm space-y-6">
    <h1 class="text-2xl font-bold text-green-700 leading-snug">
        {{ $article['title'][$locale] ?? $article['title']['en'] }}
    </h1>

    <div class="text-sm text-gray-500 border-b border-gray-100 pb-4">
        {{ $article['date'] ?? 'Thu, 1 Oct 2026' }} | posted by {{ $article['author'] ?? 'Admin' }}
    </div>

    <div class="overflow-hidden rounded-lg">
        <img src="{{ $article['image'] ?? 'https://via.placeholder.com/600x400' }}" alt="Article Image" class="w-full h-auto object-cover">
    </div>

    <div class="text-gray-700 leading-relaxed space-y-4 text-base">
        <p>
            {!! $article['description'][$locale] ?? $article['description']['en'] !!}
        </p>
    </div>
    <div class="relative flex justify-between flex-row">
@if($prevSlug)
    <a href="{{ route('insight', ['slug' => $prevSlug]) }}" wire:navigate.hover class="btn-green">‹ Prev Article</a>
@else
    <span class="btn-green opacity-50 cursor-not-allowed">‹ Prev Article</span>
@endif

@if($nextSlug)
    <a href="{{ route('insight', ['slug' => $nextSlug]) }}" wire:navigate.hover class="btn-green">Next Article ›</a>
@else
    <span class="btn-green opacity-50 cursor-not-allowed">Next Article ›</span>
@endif
    </div>
</div>