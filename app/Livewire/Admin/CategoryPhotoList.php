<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PhotosCategory;
class CategoryPhotoList extends Component
{
    public $categorsphotos;
    public function deleteShutter($categoryphoto_id)
    {
        $category = PhotosCategory::find($categoryphoto_id);
        if ($category) {
            $category->delete();
            $this->categorsphotos = Shutter::all(); // Refresh the shutters list
        }
    }

    public function edit_category($shutterId)
    {

    }




    public function render()
    {
        $this->categorsphotos=PhotosCategory::all();
        return view('livewire.admin.category-photo-list')->layout("layouts.admin");
    }
}
