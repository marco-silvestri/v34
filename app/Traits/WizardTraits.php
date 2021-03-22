<?php

namespace App\Traits;

trait WizardTraits {

    public $step;

    public function nextStep(){
        $this->step ++;
    }
    
    public function previousStep(){
        if ($this->step === 0){
            $this->step = 0;
        } else {
            $this->step --;
        }
    }
}