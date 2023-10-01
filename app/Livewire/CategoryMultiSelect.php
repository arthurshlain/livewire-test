<?php

namespace App\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class CategoryMultiSelect extends Component
{
    #[Modelable]
    public $categories = [];

    public string $label = '';

    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.category-multi-select');
    }

    /*public function addCategory($categoryName)
    {
        $category = Category::firstOrCreate(
            ['name' => $categoryName],
            ['slug' => Str::of($categoryName)->slug()]
        );

        return [
            'id'   => $category->id,
            'name' => $category->name
        ];
    }*/

    /*public function selectCategory($category_id)
    {
        $this->categories[] = $category_id;
    }*/
}
