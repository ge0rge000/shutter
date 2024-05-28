<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Shutter;
use Illuminate\Support\Str;

class SpecificShutterComponent extends Component
{
   public $slug;
    public $shutter;

    public function stripTagsAndTruncate($text)
        {
            $text = strip_tags($text);
            $text = str_replace('&nbsp;', ' ', $text); // Replace &nbsp; with a space
            return $text;
        }

    public function mount($slug)
    {
        $slug = str_replace('-', ' ', $slug);
        $this->slug = $slug;
        $this->shutter = Shutter::where('name', $slug)->firstOrFail();
    }

    public function render()
    {
        $photosshuttersapplication = Shutter::where('name', $this->slug)->with(['photos' => function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'Applications');
            });
        }])->firstOrFail();

        $photosshutterslast = Shutter::where('name', $this->slug)->with(['photos' => function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'Gallary of Our Recent Work');
            });
        }])->firstOrFail();


        $photosshuttershardware = Shutter::where('name', $this->slug)->with(['photos' => function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'Hardware');
            });
        }])->firstOrFail();


        return view('livewire.user.specific-shutter-component',['shutter' => $this->shutter,
        'photosshuttersapplication'=>$photosshuttersapplication->photos,
        'photosshutterslast'=>$photosshutterslast->photos,
        'photosshuttershardware'=>$photosshuttershardware->photos  ])->layout("layouts.user");
    }
}
