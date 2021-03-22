<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WizardTraits;
use Illuminate\Support\Facades\DB;

class Publication extends Component
{

    public $step;

    public function mount($step){
        $this->step = $step;
    }

    public function next(){
        $this->emitUp('next');
    }

    public function previous(){
        $this->emitUp('previous');
    }




    public function render()
    {
        return <<<'HTML'
        <div>
        {{$step}}
        <button wire:click="next">
          Avanti
        </button>
        <button wire:click="previous">
          Indietro pp
        </button>
        </div>
        HTML;
    }
}
