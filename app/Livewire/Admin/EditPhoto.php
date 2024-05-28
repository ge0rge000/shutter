<?php

namespace App\Livewire\Admin;



use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ShutterPhotos;
use App\Models\PhotosCategory;
class EditPhoto extends Component
{

    use WithFileUploads;

    public $photoId;
    public $categoryId;
    public $shutterId;
    public $image;
    public $newPhoto;

    public function mount($photoId)
    {
        $photo = ShutterPhotos::find($photoId);

        $this->photoId = $photo->id;
        $this->categoryId = $photo->category_id;
        $this->shutterId = $photo->shutter_id;
        $this->image = $photo->image_url;
    }

    public function update()
    {


        $photo = ShutterPhotos::find($this->photoId);

        if ($this->newPhoto) {
            $path = $this->newPhoto->store('photos', 'public');
            $photo->image_url = $path;
        }

        $photo->category_id = $this->categoryId;
        $photo->shutter_id = $this->shutterId;
        $photo->save();

        session()->flash('message', 'Photo successfully updated.');

        return redirect()->route('photo-list',['shutterId'=>$this->shutterId]);
    }

    public function render()
    {
        $categories = PhotosCategory::all();

        return view('livewire.admin.edit-photo', compact('categories'))->layout("layouts.admin");
    }
}
