<div>

    <div x-data="{ showRaw: false }" class="p-4 bg-yellow-100 my-8 rounded-2xl">

        <div x-show="!showRaw" x-collapse>
            <x-button white x-on:click="showRaw = true">Show JSON data</x-button>
        </div>

        <div x-show="showRaw" x-collapse style="display: none">
            <x-button white x-on:click="showRaw = false">Hide JSON data</x-button>
        </div>

        <div x-show="showRaw" style="display: none">

            <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-4">

                <div>
                    <x-textarea label="Export" rows="8">
                        {{ json_encode($items, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) }}
                    </x-textarea>
                </div>

                <div>
                    <x-textarea label="Import" rows="8" placeholder="Paste JSON here to import"
                                wire:change="set('items', JSON.parse($el.value))"/>
                </div>

            </div>

        </div>

    </div>

    <x-button primary wire:click="addItem">Add Item</x-button>

    {{-- Icons Preview --}}
    <div class="mt-4 flex flex-col-reverse gap-4">

        @foreach ($items as $index => $item)

            <div class="relative bg-white p-4 rounded shadow-md" wire:key="{{ $index }}">

                <button aria-label="Remove item"
                        class="absolute text-gray-500 right-0 top-0 p-1 [&_svg]:w-4 [&_svg]:h-auto"
                        wire:click.stop="removeItem({{ $index }})">
                    × Remove
                </button>

                <div class="flex gap-4 items-center">


                    <div class="grow grid grid-cols-1 sm:grid-cols-2 gap-4">

                        <div class="flex gap-4">

                            <div class="grow flex flex-col gap-4">

                                {{-- Item name --}}
                                <div>
                                    <label for="icons.{{ $index }}.term_name"
                                           class="sr-only block text-sm font-medium text-gray-700">

                                        Enter item name

                                    </label>
                                    <x-input class="p-2 block w-full rounded border border-gray-300"
                                             placeholder="Enter item name"
                                             wire:model.live="items.{{ $index }}.name" type="text"
                                             id="items-{{ $index }}-name"/>
                                </div>

                                {{-- Category --}}
                                <div>

                                    <x-select
                                        wire:model.live="items.{{ $index }}.categories"
                                        placeholder="Category"
                                        multiselect
                                        :options="$categories"
                                        option-label="name"
                                        option-value="id"
                                        hide-empty-message>
                                    </x-select>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    @if ($successMessage)
        <div class="text-green-500">{{ $successMessage }}</div>
    @endif
    @if ($errorMessage)
        <div class="text-red-500">{{ $errorMessage }}</div>
    @endif

    @if(!empty($items))
        <div class="mt-4 flex gap-4">

            <x-button primary type="button" wire:click="submitIcons">

                Submit

            </x-button>
        </div>
    @endif

</div>
