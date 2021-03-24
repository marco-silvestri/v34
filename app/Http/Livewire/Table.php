<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Traits\WithSortingTrait;

class Table extends Component
{
    use WithSortingTrait;

    public $search = '';

   //protected $queryString = ['sortField', 'sortDirection'];

    public function render()
    {   
        $dummies = $this->applySorting(DB::table('dummies'))->get();
        return view('livewire.table', compact('dummies'));
    }
}
