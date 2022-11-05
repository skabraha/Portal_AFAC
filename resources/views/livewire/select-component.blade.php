<div>
    <form wire:submit.prevent='save'>
        <div
            class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
            <div class="relative flex-grow w-full">
                <label for="full-name" class="leading-7 text-lg text-gray-600">Selecciona el año</label>
                <select wire:model="anio"
                    class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <option value="">Seleccione el año</option>
                    @foreach ($anios as $anio)
                        <option value="{{ $anio->id }}">{{ $anio->anio }}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative flex-grow w-full">
                <label for="email" class="leading-7 text-lg text-gray-600">Selecciona la quincena</label>
                <select wire:model="quincena"
                    class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    {{-- <option value="">Seleccione la quincena</option>
            @if ($quincena->count() == 0) --}}
                    <option value="">Seleccione la quincena</option>
                    {{-- @endif --}}
                    @foreach ($quincenas as $quincena)
                        <option value="{{ $quincena->id }}">{{ $quincena->quincena }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button>guardar</button>
    </form>
</div>
