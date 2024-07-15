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
                <div wire:loading wire:target='image'>Image load...</div>
            </div>
            <button type="submit"
                class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                <div wire:loading.delay wire:target='create'>
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                        viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor" />
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill" />
                    </svg>
                    <span class="sr-only">Loading...</span>
                </div>
                <div wire:loading.delay.remove wire:target='create'>Create Post</div>
            </button>
        </form>
    </div>

</div>
