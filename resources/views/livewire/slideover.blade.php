<div>    
    <x-slideover wire:model="open">
        <x-slot name="title"> Nuovo ordine </x-slot>


        @if ($step === 0)
        <livewire:publication :key="0" :step="0"></livewire:publication>
      @elseif ($step === 1)
      <livewire:publication :key="1" :step="1"></livewire:publication>
      @elseif ($step === 2)
      <livewire:publication  :key="2" :step="2"></livewire:publication>
      @elseif ($step === 3)
      <livewire:publication  :key="3" :step="3"></livewire:publication>
      @elseif ($step === 4)
        Record aggiunto!
      @endif
    </x-slideover>
    
    <button wire:click ="$set('open',true)">Slideover</button>
</div>
