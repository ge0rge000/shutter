<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Shutter;
use Illuminate\Support\Str;
class HomeComponent extends Component
{
    public function stripTagsAndTruncate($text)
        {
            $text = strip_tags($text);
            $text = str_replace('&nbsp;', ' ', $text); // Replace &nbsp; with a space
            return $text;
        }
    public function render()
    {
        $shutters = Shutter::with(['photos' => function ($query) {
            $query->whereHas('category', function ($query) {
                $query->where('name', 'outphoto');
            });
        }])->get();

        return view('livewire.user.home-component',compact('shutters'))->layout("layouts.user");
    }
}
