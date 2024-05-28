<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\ShutterPhotos;
use Illuminate\Support\Facades\Storage;
use App\Models\Shutter;

class PhotoListPage extends Component
{
    public $shutterId;
    public $photos;
    public $shutter;
    public function mount($shutterId)
    {
        $this->shutterId = $shutterId;
        $this->photos = ShutterPhotos::where('shutter_id', $shutterId)->get();
    }

    public function deletePhoto($photoId)
    {
        $photo = ShutterPhotos::find($photoId);

        if ($photo) {
            // Delete the photo from the storage
            Storage::disk('public')->delete($photo->image_url);

            // Delete the photo record from the database
            $photo->delete();

            // Refresh the photos list
            $this->photos = ShutterPhotos::where('shutter_id', $this->shutterId)->get();

            session()->flash('message', 'Photo successfully deleted.');
        }
    }

    public function render()
    {
        $this->shutter=Shutter::where("id",$this->shutterId)->first();
        return view('livewire.admin.photo-list-page')->layout("layouts.admin");
    }
}
