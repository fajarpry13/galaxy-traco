<div class="grid grid-cols-5 gap-6">
    <div class="flex flex-col bg-[#bfbfbf] col-span-2 p-6 text-black space-y-6">
        @foreach($months as $month)
            <div>
                <button 
                    wire:click="changeMonth('{{ $month }}')"
                    class="text-left font-bold transition text-xl w-full text-black mb-3 hover:opacity-80"
                >
                    {{ $month }}
                </button>

                @if($selectedMonth === $month)
                    <div class="space-y-4 pl-2">
                        @forelse($articles as $article)
                            <a 
                                href="{{ route('insight', ['slug' => $article['slug']]) }}"
                                wire:navigate.hover
                                wire:key="article-{{ $article['slug'] }}"
                                class="block text-left font-bold text-sm transition cursor-pointer leading-snug w-full {{ $selectedArticleSlug === $article['slug'] ? 'text-green-700' : 'text-gray-700 hover:text-black' }}"
                            >
                                {{ $article['title'][$locale] ?? $article['title']['en'] }}
                            </a>
                        @empty
                            <p class="text-xs text-gray-500 italic">No articles found in this month.</p>
                        @endforelse
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <div class="col-span-3">
        @if($currentArticle)
            <x-article-detail :article="$currentArticle" :locale="$locale" :hasPrevious="(bool) $hasPrevious" 
                              :hasNext="(bool) $hasNext" :prevSlug="$prevSlug" :nextSlug="$nextSlug"/>
        @else
            <div class="bg-white p-6 rounded-xl text-center text-gray-500 shadow-sm">
                Pilih artikel di sidebar sebelah kiri.
            </div>
        @endif
    </div>
</div>