@if(session('success'))
    <div x-data="{show: true}"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="fixed bottom-3 right-3 py-3 px-5 bg-blue-500 rounded-xl">
        <p>{{session('success')}}</p>
    </div>
@endif
