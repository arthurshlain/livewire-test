<?php

namespace App\Livewire;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class ItemUploadWireUi extends Component
{
    use WithFileUploads;

    public int $maxFileUploads = 1;

    public array $items = [];

    public array $categories = [];

    public string $successMessage = '';
    public string $errorMessage = '';

    public function mount(): void
    {
        $this->categories = [
            ['name' => 'Animals', 'id' => 1],
            ['name' => 'Furniture', 'id' => 2],
            ['name' => 'Web Frameworks', 'id' => 3]
        ];
    }

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.item-upload-wire-ui');
    }

    public function addItem($name = ''): void
    {
        $item_data = [
            'term_id'    => null,
            'name'       => $name,
            'categories' => []
        ];

        $this->items[] = $item_data;
    }

    public function removeItem($index): void
    {
        unset($this->items[$index]);
    }

    public function submit(): void
    {
        $this->successMessage = 'Submit maybe success.';
        $this->errorMessage   = '';
    }
}
