<?php

namespace App\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ItemUpload extends Component
{
    public array $items = [
        [
            'name' => 'Test Item',
            'categories' => [
                1
            ]
        ]
    ];

    public array $defaultCategories = [
        2
    ];

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.item-upload');
    }

    public function removeUploadItem($index): void
    {
        unset($this->items[$index]);
    }
}
