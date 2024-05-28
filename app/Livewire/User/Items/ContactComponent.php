<?php

namespace App\Livewire\User\Items;

use Livewire\Component;
use App\Models\Quote;

class ContactComponent extends Component
{

    public $name;
    public $contact;
    public $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'message' => 'required|string|max:500',
    ];

    public function submit()
    {
        $this->validate();

        // Save to the database
        $quote = Quote::create([
            'name' => $this->name,
            'contact' => $this->contact,
            'message' => $this->message,
        ]);


        session()->flash('message', 'Your message has been sent successfully.');

        // Reset form fields
        $this->reset();
    }
    public function render()
    {
        return view('livewire.user.items.contact-component');
    }
}
