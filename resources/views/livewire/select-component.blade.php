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
                <label for="email" class="leading-7 text-lg text-gray-600">Selecciona el mes</label>
                <select wire:model="mes"
                    class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <option value="">Seleccione el mes</option>
                    @foreach ($meses as $mes)
                        <option value="{{ $mes->id }}¿">{{ $mes->mes }}</option>
                    @endforeach
                </select>
            </div>
            <div class="relative flex-grow w-full">
                <label for="email" class="leading-7 text-lg text-gray-600">Selecciona la quincena</label>
                <select wire:model="quincena"
                    class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    <option value="">Seleccione la quincena</option>
                    @foreach ($quincenas as $quincena)
                        <option value="{{ $quincena->id }}"> {{ $quincena->quincena }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="py-4 flex justify-center">
            <button x-on:click="open = 'false'"
                class="inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Limpiar</button>
            <button x-on:click="open = 'open'"
                class="ml-4 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Buscar</button>
        </div>
    </form>
</div>
