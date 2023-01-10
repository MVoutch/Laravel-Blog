@auth
    <form method="POST" action="/article/{{$file->slug}}/comment">
        @csrf
        <header class="flex items-center">
            <img src="http://i.pravatar.cc/100?u={{auth()->id()}}" width="40" height="40" alt="" class="rounded-full mr-5">
            <h2>{{auth()->user()->username}}</h2>
        </header>
        <div class="mt-6">
                        <textarea name="body" rows="5"
                                  class="w-full test-sm focus:outline-none focus:ring bg-gray-200 p-3"></textarea>
        </div>

        <div class="flex justify-end mt-3 pt-3">
            <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-300">Send</button>
        </div>
    </form>
@else
    <h3><a href="/login">Log In</a> or <a href="/register">Register</a> to leave a comments</h3>
@endauth
