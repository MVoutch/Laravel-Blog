
<div class="relative lg:inline-flex bg-gray-100 rounded-xl">
<x-dropdown>
    <x-slot name="trigger">
        <button @click="show = ! show" class="py-2 pl-3 pr-9 test-sm font-semibold w-32 text-left flex lg:inline-flex">{{isset($currentTag) ? ucwords($currentTag->name) : 'Categories'}}</button>
    </x-slot>

        <x-dropdown-link href="/" :active="isset($currentTag) ? false : ''">All</x-dropdown-link>
        @foreach($tags as $tag)
            <x-dropdown-link href="/?tag={{$tag->slug}}&{{http_build_query(request()->except('tag'))}}" :active="isset($currentTag) && $currentTag->is($tag) ? true : ''">{{$tag->name}}</x-dropdown-link>
        @endforeach
</x-dropdown>
</div>
