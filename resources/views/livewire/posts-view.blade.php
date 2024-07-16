<div class="items-start xl:columns-4 lg:columns-3 md:columns-2">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @foreach ($posts as $post)
        <div class="max-w-sm mb-2 overflow-hidden bg-white rounded shadow-lg lg:mr-2">
            @if ($post->image)
                <img class="w-full" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
            <div class="px-6 py-4">
                <div class="mb-2 text-xl font-bold">{{ $post->title }}</div>
                <p class="text-base text-gray-700">
                    {{ $post->content }}
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#photography</span>
                <span
                    class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#travel</span>
                <span
                    class="inline-block px-3 py-1 mb-2 mr-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-full">#winter</span>
            </div>
        </div>
    @endforeach
</div>
