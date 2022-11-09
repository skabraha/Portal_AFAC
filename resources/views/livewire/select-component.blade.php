<div>
    <div
        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
        <div class="relative flex-grow w-full">
            <label for="full-name" class="leading-7 text-lg text-gray-600">Selecciona el año</label>
            <select wire:model="Fecha"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione el año</option>
                @foreach ($Fechas as $Fecha)
                    <option value="{{ $Fecha->Fecha }}"> {{ $Fecha->Fecha }}</option>
                @endforeach
            </select>
            @error('Fecha')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative flex-grow w-full">
            <label for="email" class="leading-7 text-lg text-gray-600">Selecciona el mes</label>
            <select wire:model="FechaInicialPago"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione el mes</option>
                @foreach ($FechaInicialPagos as $FechaInicialPago)
                    <option value="{{ $FechaInicialPago->FechaInicialPago }}"> {{ $FechaInicialPago->FechaInicialPago }}</option>
                @endforeach
            </select>
            @error('FechaInicialPago')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative flex-grow w-full">
            <label for="email" class="leading-7 text-lg text-gray-600">Selecciona la quincena</label>
            <select wire:model="FechaFinalPago"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione la quincena</option>
                @foreach ($FechaFinalPagos as $FechaFinalPago)
                    <option value="{{ $FechaFinalPago->FechaFinalPago }}"> {{ $FechaFinalPago->FechaFinalPago }}</option>
                @endforeach
            </select>
            @error('FechaFinalPago')
            <span
                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
        @enderror
        </div>
    </div>
    <div class="py-4 flex justify-center">
        <button wire:click.prevent="clean"
            class="inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Limpiar</button>
        <button wire:click.prevent="search"
            class="ml-4 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Buscar</button>
    </div>
    <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Periodo de pago</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            Importe neto</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            folio fiscal</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            fecha de emisión</th>
                        {{-- <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            AÑO</th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            QUINCENA</th> --}}
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($nomina as $nominaTable)
                        <tr>
                            <td
                                class="uppercase px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->FechaInicialPago }} - {{ $nominaTable->FechaFinalPago }}</td>                            <td
                                class="uppercase px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->Total }}</td>
                            <td class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->Folio }}</td>
                            <td class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->Fecha }}</td>
                            {{-- <td class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->FechaFinalPago }}</td> --}}

                        </tr>
                    @endforeach
                    {{-- {{ $usuarios->links() }} --}}
                </tbody>
            </table>
            {{-- @else
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>No.</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>NO HAY REGISTROS</td>
                    </tr>
                </tbody>
            </table>
            @endif --}}
        </div>
    </div>
</div>
