<x-layout>
    <x-setting header="Create Article!">
            <form method="POST" action="/article/create" enctype="multipart/form-data">
                @csrf
                <x-form-input title="title" name="title"/>
                <x-form-input title="thumbnail" name="thumbnail" type="file"/>
                <x-form-textarea title="body" name="body"/>
                <x-form-select :data="\App\Models\Tags::all()" name="tags_id" id="tags_id" />

                <x-form-submit />

                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </form>
    </x-setting>
</x-layout>
