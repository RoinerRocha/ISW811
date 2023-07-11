<x-layout>
    <x-setting heading="publish new post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title" />

                <x-form.input name="slug" />

                <x-form.input name="thumbnail" type="file" />

                <x-form.textarea name="excerpt"/>

                <x-form.textarea name="body"/>


                <x-form.field>
                    <x-form.label name="category" />

                    <select name="category_id" id="category_id">
                        @foreach (\App\Models\Category::all() as $category)
                            <option
                                value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}
                            >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                    <x-form.error name="category" />
                    <x-form.button>Publish</x-form.button>
                </x-form.field>
        </form>
    </x-setting>

    
</x-layout>