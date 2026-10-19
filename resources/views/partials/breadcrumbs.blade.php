@if (count($breadcrumbs))
    <ul class="flex items-center space-x-2 text-base text-gray-300 p-6">
        @foreach ($breadcrumbs as $breadcrumb)

            @if ($breadcrumb->url && !$loop->last)
                <li class="flex items-center">
                    <a href="{{ $breadcrumb->url }}" class="hover:underline text-gray-300">{{ $breadcrumb->title }}</a>
                    <span class="mx-2 text-gray-400">&gt;</span>
                </li>
            @else
                <li class="text-white font-medium truncate max-w-md">
                    {{ $breadcrumb->title }}
                </li>
            @endif

        @endforeach
    </ul>
@endif