<div class="border-1 border border-gray-500 p-4">
    @if($label)
        <label class="font-bold">{{ $label }}</label>
    @endif
    <div>
        <select wire:model="categories" multiple>
            {{--@foreach(\App\Models\Category::all() as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach--}}
            <option value="1">Example option 1</option>
            <option value="2">Example option 2</option>
            <option value="3">Example option 3</option>
        </select>
    </div>
</div>
