<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @role('admin')
        @livewire('posts')
    @endrole
    @haspermission('read post')
        @livewire('live-search')
        <livewire:posts-view />
    @endhaspermission
</div>
