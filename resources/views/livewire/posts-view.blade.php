<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    @foreach ($posts as $post)
        <div class="flex items-center">
            @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" class="w-10 h-10 mr-1 rounded">
            @endif
            <div>
                <h2 class="font-bold">{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>
            </div>
        </div>
    @endforeach
</div>
