<?php

namespace App\Livewire\Admin;

use Livewire\Component;

use App\Models\Shutter;
class AddshutterComponent extends Component
{
    public $name;
    public $name_out;
    public $tag;
    public $desc;
    public $desc_out;
    public $features;
    public $key_features;
    protected $rules = [
        'name' => 'required|string|max:255',
        'name_out' => 'required|string|max:255',
        'tag' => 'nullable|string|max:255',
        'desc' => 'nullable|string',
        'desc_out' => 'nullable|string',
        'features' => 'nullable|string',
        'key_features' => 'nullable|string',
    ];

    public function submit()
    {
        $this->validate();

        Shutter::create([
            'name' => $this->name,
            'name_out' => $this->name,
            'tag' => $this->tag,
            'desc' => $this->desc,
            'desc_out' => $this->desc_out,
            'features' => $this->features,
            'key_features' => $this->key_features,
        ]);

        session()->flash('message', 'Shutter successfully created.');

        $this->reset();
        return redirect()->route('show_shutters');

    }


    public function render()
    {
        return view('livewire.admin.addshutter-component')->layout("layouts.admin");
    }
}
