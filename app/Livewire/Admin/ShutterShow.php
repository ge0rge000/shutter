<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Shutter;

class ShutterShow extends Component
{
    public $shutters;

    public function mount()
    {
        $this->shutters = Shutter::all();
    }

    public function deleteShutter($shutterId)
    {
        $shutter = Shutter::find($shutterId);
        if ($shutter) {
            $shutter->delete();
            $this->shutters = Shutter::all(); // Refresh the shutters list
        }
    }


    public function stripTagsAndTruncate($text, $length = 50)
    {
        $text = strip_tags($text);
        return strlen($text) > $length ? substr($text, 0, $length) . '...' : $text;
    }

    public function edit($shutterId)
{
  return redirect()->route("edit_shutter",['shutterId'=>$shutterId]);
}

public function addPhotos($shutterId)
{
    return redirect()->route("photo_upload",['shutterId'=>$shutterId]);

}
public function showPhotos($shutterId)
{
    return redirect()->route("photo-list",['shutterId'=>$shutterId]);

}

    public function render()
    {
        return view('livewire.admin.shutter-show')->layout("layouts.admin");
    }
}
