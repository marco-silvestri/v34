<div>
  @if ($step === 0)
    <label for="param1">Param1</label>
    <input type="text" placeholder="param1" name="param1" wire:model="param1">
  @elseif ($step === 1)
    <label for="param2">Param2</label>
    <input type="text" placeholder="param2" name="param2" wire:model="param2">
  @elseif ($step === 2)
    <label for="param3">Param3</label>
    <input type="text" placeholder="param3" name="param3" wire:model="param3">
  @elseif ($step === 3 && $success === 'nope')
    <button wire:click="save">Salva</button>
  @elseif ($step === 3 && $success === 'ok')
    Record aggiunto!
  @endif

  @if ($success != 'ok')
  <button wire:click="previous">
    Indietro
  </button>
  <button wire:click="next">
    Avanti
  </button>
  @endif
</div>