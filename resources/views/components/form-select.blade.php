@props(['data', 'name', 'id'])

<select class="border border-gray-400 p-2 w-full rounded bg-gray-100 mb-10"  name="{{$name}}" id="{{$id}}">
    @foreach($data as $query)
        <option value="{{$query->id}}" {{$query->id == old($name) ? 'select': ''}}>{{$query->name}}</option>
    @endforeach
</select>
