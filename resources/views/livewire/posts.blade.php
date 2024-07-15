@php
    function inputStyle($error)
    {
        if ($error) {
            return 'shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline';
        }
        return 'w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline';
    }
@endphp

<div class="flex justify-center px-3 py-10 overflow-hidden">
    <div class="w-full max-w-xs">
        {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded shadow-md" wire:submit='create'>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="title">Title: </label>
                <input class="{{ inputStyle($errors->has('title')) }}" wire:model='title' id="title" type="text">
                @error('title')
                    <div class="text-xs italic text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="content">Content: </label>
                <textarea class="{{ inputStyle($errors->has('content')) }}" wire:model='content' id="content"></textarea>
                @error('content')
                    <div class="text-xs italic text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 text-sm font-bold text-gray-700" for="image">Image: </label>
                <input class="{{ inputStyle($errors->has('image')) }}" wire:model='image' id="image" type="file"
                    accept="image/png image/jpeg">
                @if ($image)
                    <div>
                        <img class="w-20 h-20 mr-1 rounded" src="{{ $image->temporaryUrl() }}">
                    </div>
                @endif
                @error('image')
                    <div class="text-xs italic text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <input
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                type="submit" value="Create Post">
        </form>
    </div>

</div>
