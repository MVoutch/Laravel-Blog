@props(['title', 'type' => 'text'])
<div class="mb-6">
    <label for="{{$title}}" class="block mb-2 uppercase font-bold text-xs text-white-700">
        {{$title}}
    </label>
    <input class="border border-gray-400 p-2 w-full rounded"
           type="{{$type}}"
           name="{{$title}}"
           id="{{$title}}"
           value="{{ old($title) }}"
           required
    >
    @error($title)
        <p class="text-red-600 text-xs mt-2">{{$message}}</p>
    @enderror
</div>
