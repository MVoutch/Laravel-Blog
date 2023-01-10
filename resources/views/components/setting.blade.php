@props(['header'])

<section class="max-w-4xl mx-auto border border-gray-200  bg-gray-200 p-6 rounded-xl">
    <h1 class="text-center font-bold text-xl mb-6">{{$header}}</h1>
    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/dashboard" class="{{request()->is('admin/dashboard') ? 'text-blue-500' : ''}}">Dashboard</a>
                </li>
                <li>
                    <a href="/article/create" class="{{request()->is('article/create') ? 'text-blue-500' : ''}}">New Post</a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            {{$slot}}
        </main>
    </div>
</section>
