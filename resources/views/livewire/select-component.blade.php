<div>
    <div x-cloak
        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
        <div class="relative flex-grow w-full">
            <label for="full-name" class="leading-7 text-lg text-gray-600">Selecciona el año</label>
            <select wire:model="anio"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione el año</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
            @error('anio')
            <span
                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative flex-grow w-full">
            <label for="email" class="leading-7 text-lg text-gray-600">Selecciona el mes</label>
            <select wire:model="mes"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione el mes</option>
                <option value="ENERO">ENERO</option>
                <option value="FEBRERO">FEBRERO</option>
                <option value="MARZO">MARZO</option>
                <option value="ABRIL">ABRIL</option>
                <option value="MAYO">MAYO</option>
            </select>
            @error('mes')
            <span
                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
            @enderror
        </div>
        <div class="relative flex-grow w-full">
            <label for="email" class="leading-7 text-lg text-gray-600">Selecciona la quincena</label>
            <select wire:model="quincena"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione la quincena</option>
                @foreach ($quincenas as $quincena)
                <option value="{{ $quincena->quincena }}"> {{ $quincena->quincena }}</option>
                @endforeach
            </select>
            @error('quincena')
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
    <div>
        <div class="px-10 mb-10 flex flex-col">
            <div class="-m-5 overflow-x-auto">
                <label class="p-1.5 text-gray-600 text-2xl">Resultados</label>
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
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        fecha de emisión</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        PDF</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                        XML</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($nomina as $nominaTable)
                                <tr>
                                    <td
                                        class="uppercase px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                        {{ $nominaTable->name }}</td>
                                    </td>
                                    <td
                                        class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $nominaTable->email }}</td>
                                    <td
                                        class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $nominaTable->anio }}</td>
                                    <td
                                        class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                        {{ $nominaTable->anio }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('imprimir') }}"
                                            class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </a>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <button type="button"
                                            class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                            </svg>
                                        </button>
                                    </td>
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
        </div>
    </div>
</div>