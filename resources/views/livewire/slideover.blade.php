<div>    
    <x-slideover wire:model="open">
        <x-slot name="title"> Nuovo ordine </x-slot>
        @if ($step === 1)
          <livewire:create-order :key="1" :step="1"></livewire:create-order>
        @elseif ($step === 2)
          <livewire:create-line-item :key="2" :step="2"></livewire:create-line-item>
        @elseif ($step === 3)
          <livewire:create-creativity  :key="3" :step="3"></livewire:creativity>
        @elseif ($step === 4)
          Record aggiunto!
        @endif
    </x-slideover>
    <button wire:click ="$set('open',true)">Slideover</button>
</div>
