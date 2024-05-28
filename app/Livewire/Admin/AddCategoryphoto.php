<?php

namespace App\Livewire\Admin;

use Livewire\Component;


use App\Models\PhotosCategory;
class AddCategoryphoto extends Component
{
    public $name;
    protected $rules = [
        'name' => 'required|string|max:255',
    ];
    public function submit()
    {
        $this->validate();

        PhotosCategory::create([
            'name' => $this->name,
        ]);

        session()->flash('message', 'Photo category created successfully.');

        $this->reset('name');
    }

    public function render()
    {
        return view('livewire.admin.add-categoryphoto')->layout("layouts.admin");
    }
}
