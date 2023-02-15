<div>
    <x-notifications position="top-center" />
    @if ($modal)
        @include('livewire.catalogs.percepcion.modal-new')
    @endif
    <div class="p-4">
        <x-button wire:click="addpercepcion" right-icon="plus" blue label="Añadir Percepción" />
        <label for="table-search" class="sr-only">Search</label>
        <div class="my-6 relative mt-1 float-right">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="search" wire:model="search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Buscar...">
        </div>
    </div>
    @if ($perception->count())
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-4 py-3">
                        CLAVE
                    </th>
                    <th scope="col" class="px-4 py-3">
                        DESCRIPCIÓN
                    </th>
                    <th scope="col" class="px-4 py-3">
                    </th>
                    <th scope="col" class="px-4 py-3">
                    </th>
                </tr>
            </thead>
            @foreach ($perception as $perceptions)
                <tbody>
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-4 py-4">
                            {{ $perceptions->id }}
                        </td>
                        <td class="px-4 py-4">
                            {{ $perceptions->codigo }}
                        </td>
                        <td class="px-4 py-4">
                            {{ $perceptions->name  }}
                        </td>
                        <td class="px-4 py-4">
                            <x-button wire:click.prevent="edit({{ $perceptions->id }})" xs rounded blue label="Editar " />
                            <div wire:loading wire:target="edit">
                            </div>
                        </td>
                        <td class="px-4 py-4">
                            <x-button wire:click.prevent="delete({{ $perceptions->id }})" xs rounded white
                                label="Eliminar " />
                            <div wire:loading wire:target="">
                            </div>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="mt-6">
            {{ $paginate->onEachSide(1)->links() }}
        </div>
    @else
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        NO HAY DATOS PARA MOSTRAR
                    </th>
                </tr>
            </tbody>
        </table>
    @endif
</div>
