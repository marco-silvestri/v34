<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateLineItem extends Component
{
    public $paramLineItem;
    
    public function render()
    {
        return view('livewire.create-line-item');
    }
}
