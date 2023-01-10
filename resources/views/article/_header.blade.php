<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">CXC</span> News
    </h1>

    <p class="text-sm mt-14">
        We watch movies with a bitch, for you it's a fucking fantasy
        I'm a player for fun, and I fuck this pts
    </p>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <!--  Category -->
        <x-tag-component />


        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                @if(request('tag'))
                    <input type="hidden" name="tag" value="{{request('tag')}}">
                @endif
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{request('search')}}"
                >
            </form>
        </div>
    </div>
</header>
