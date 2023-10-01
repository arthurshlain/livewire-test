<div>

    <label>Default category</label>
    <livewire:category-multi-select wire:model="defaultCategories"/>

    <div class="mt-8">

        <h2>Repeater below</h2>

        @foreach ($items as $index => $item)
            <div wire:key="{{ $index }}" class="border border-gray-500 p-4">

                {{-- Item name --}}
                <div class="mb-4">
                    <label class="font-bold" for="items.{{ $index }}.name">Enter item name</label>
                    <div>
                        <input placeholder="Enter item name"
                               class="border border-gray-500 px-4"
                               wire:model="items.{{ $index }}.name"
                               id="items.{{ $index }}.name"/>
                    </div>

                </div>

                {{-- Category --}}
                <div>
                    <livewire:category-multi-select label="Category"
                                                    wire:model="items.{{ $index }}.categories" />
                </div>

                {{-- Delete item buttn --}}
                <button aria-label="Remove item"
                        wire:click.stop="removeUploadItem({{ $index }})">Delete this item</button>

            </div>
        @endforeach
    </div>

</div>
