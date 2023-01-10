<x-layout>
    @include('article._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($articles->count())
            <x-article-main-card :article="$articles[0]"/>

            <div class="lg:grid lg:grid-cols-6">
                @foreach($articles->skip(1) as $article)
                    <x-article-card :article="$article" class="{{$loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"/>
                @endforeach
            </div>

        @else
            <h1>No post yet</h1>
        @endif

        {{$articles->links()}}
    </main>

</x-layout>


