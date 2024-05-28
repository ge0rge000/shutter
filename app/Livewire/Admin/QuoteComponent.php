<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Quote;
class QuoteComponent extends Component
{
    public function render()
    {
        $quotes=Quote::all();
        return view('livewire.admin.quote-component',compact('quotes'))->layout("layouts.admin");
    }
}
