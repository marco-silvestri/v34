<div>
    
    <x-table>
        <x-slot name="head">
            <x-table.heading sortable multi-column wire:click="sortBy('id')" :direction="$sorts['id'] ?? null" class="w-full">ID</x-table.heading>
            <x-table.heading sortable multi-column wire:click="sortBy('param1')" :direction="$sorts['param1'] ?? null">Param1</x-table.heading>
            <x-table.heading sortable multi-column wire:click="sortBy('param2')" :direction="$sorts['param2'] ?? null">Param2</x-table.heading>
            <x-table.heading sortable multi-column wire:click="sortBy('param3')" :direction="$sorts['param3'] ?? null">Param3</x-table.heading>
        </x-slot>

        <x-slot name="body">    
            @forelse ($dummies as $dummy)
            <x-table.row wire:loading.class.delay="opacity-50" wire:key="row-{{ $dummy->id }}">
                <x-table.cell class="pr-0">
                    {{ $dummy->id }}
                </x-table.cell>
                
                <x-table.cell>
                    <span class="text-cool-gray-900 font-medium">{{ $dummy->param1 }} </span>
                </x-table.cell>

                <x-table.cell>
                    <span class="text-cool-gray-900 font-medium">{{ $dummy->param2 }} </span
                </x-table.cell>

                <x-table.cell>
                    <span class="text-cool-gray-900 font-medium">{{ $dummy->param3 }} </span>
                </x-table.cell>

            </x-table.row>
            @empty
            <x-table.row>
                <x-table.cell colspan="6">
                    <div class="flex justify-center items-center space-x-2">
                        <span class="font-medium py-8 text-cool-gray-400 text-xl">No transactions found...</span>
                    </div>
                </x-table.cell>
            </x-table.row>
            @endforelse
        </x-slot>
    </x-table>
</div>
