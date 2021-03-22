<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WizardTraits;
class Slideover extends Component
{
    
    use WizardTraits;

    public $open;
    protected $listeners = [
        'next' => 'nextStep',
        'previous' => 'previousStep',
    ];

    public function mount(){
        $this->open = false;
        $this->step = 0;
    }



    public function render()
    {
        
        return view('livewire.slideover', [ 'pippo' => now()]);
    }
}
