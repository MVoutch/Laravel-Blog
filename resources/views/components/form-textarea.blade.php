@props(['title'])
<div class="mb-6">
    <label for="{{$title}}" class="block mb-2 uppercase font-bold text-xs text-white-700">
        {{$title}}
    </label>
    <textarea class="border border-gray-400 p-2 w-full rounded bg-gray-100" name="{{$title}}"  id="" rows="5" required>{{old($title)}}</textarea>
    @error($title)
    <p class="text-red-600 text-xs mt-2">{{$message}}</p>
    @enderror
</div>
