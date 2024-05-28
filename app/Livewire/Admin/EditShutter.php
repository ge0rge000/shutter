<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Shutter;

class EditShutter extends Component
{
    public $shutterId;
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

    public function mount($shutterId)
    {
        $shutter = Shutter::find($shutterId);

        if ($shutter) {
            $this->shutterId = $shutter->id;
            $this->name = $shutter->name;
            $this->name_out = $shutter->name_out;
            $this->tag = $shutter->tag;
            $this->desc = $shutter->desc;
            $this->desc_out = $shutter->desc_out;
            $this->features = $shutter->features;
            $this->key_features = $shutter->key_features;
        } else {
            session()->flash('error', 'Shutter not found.');
            return redirect()->route('admin.shutters');
        }
    }

    public function submit()
    {
        $this->validate();

        $shutter = Shutter::find($this->shutterId);

        if ($shutter) {
            $shutter->update([
                'name' => $this->name,
                'name_out' => $this->name_out,
                'tag' => $this->tag,
                'desc' => $this->desc,
                'desc_out' => $this->desc_out,
                'features' => $this->features,
                'key_features' => $this->key_features,
            ]);

            session()->flash('message', 'Shutter successfully updated.');
        } else {
            session()->flash('error', 'Shutter not found.');
        }

        return redirect()->route('show_shutters');
    }
    public function render()
    {
        return view('livewire.admin.edit-shutter')->layout("layouts.admin");
    }
}
