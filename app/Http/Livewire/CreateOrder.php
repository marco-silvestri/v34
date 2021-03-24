<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateOrder extends Component
{
    public $paramOrder;

    public function render()
    {
        return view('livewire.create-order');
    }
}
