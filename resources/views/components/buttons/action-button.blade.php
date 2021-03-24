<button type="button"
        class="focus:outline-none text-blue-600 text-sm py-2.5 px-5 mx-2 rounded-md border border-blue-600 hover:bg-blue-50"
        wire:click="$emitUp('{{ $attributes['event'] }}')">
        {{ $slot }}
</button>