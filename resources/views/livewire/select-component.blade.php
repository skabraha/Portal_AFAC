<div>
    <div
        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
        <div class="relative flex-grow w-full">
            <label for="full-name" class="leading-7 text-lg text-gray-600">Selecciona el año</label>
            <select wire:model="anio"
                class="form-control py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                <option value="">Seleccione el año</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
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
        <button  wire:click.prevent="clean"
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
                            No.</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            NOMBRE</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            EMAIL</th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            AÑO</th>
                        <th scope="col"
                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                            QUINCENA</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($nomina as $nominaTable)
                        <tr>
                            <td
                            class="uppercase px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                           </td>
                            <td
                                class="uppercase px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->name }}</td>
                            <td class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->email }}</td>
                            <td class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->anio }}</td>
                            <td class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                {{ $nominaTable->quincena }}</td>
                            
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
