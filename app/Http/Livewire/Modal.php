<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $open;

    public function mount(){
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.modal');
    }
}
