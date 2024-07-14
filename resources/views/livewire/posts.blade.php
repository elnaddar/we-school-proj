<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <form wire:submit='create'>
        <p>
            <label for="title">Title: </label>
            <input wire:model='title' id="title" type="text">
            @error('title')
            <div>{{ $message }}</div>
        @enderror
        </p>
        <p>
            <label for="image">Image: </label>
            <input wire:model='image' id="image" type="file" accept="image/png image/jpeg">
        </p>
        <p>
            <label for="content">Content: </label>
            <textarea wire:model='content' id="content"></textarea>
            @error('content')
            <div>{{ $message }}</div>
        @enderror
        </p>
        <input type="submit" value="Create Post">
    </form>
</div>
