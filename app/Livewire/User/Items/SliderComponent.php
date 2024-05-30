<?php

namespace App\Livewire\User\Items;

use Livewire\Component;
use App\Models\Shutter;

class SliderComponent extends Component
{
    public $shutters;

    public function mount()
    {
        $this->shutters = Shutter::with(['photos' => function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'outphoto');
            });
        }])
        ->orderBy('id') // Replace 'id' with the column you want to sort by
        ->limit(5)
        ->get();

    }
    public function stripTagsAndTruncate($text)
    {
        $text = strip_tags($text);
        $text = str_replace('&nbsp;', ' ', $text); // Replace &nbsp; with a space
        return $text;
    }
    public function render()
    {
        return view('livewire.user.items.slider-component');
    }
}
