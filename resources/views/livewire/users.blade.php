<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
            <div
                class="float-right flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                <div class="flex items-center justify-center w-12 bg-emerald-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
                    </svg>
                </div>
                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-emerald-500 dark:text-emerald-400">Agregado</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
            @endif
            @if ($modal)
            @include('livewire.edit-user')
            @endif
            <div class="px-6 flex items-left justify-left mb-10 ">
                <div class="flex items-left p-1 border border-blue-600 dark:border-blue-400 rounded-xl">
                    <button wire:click.prevent="new" type="button"
                        class="px-4 py-2 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-2 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:py-2 rounded-xl md:px-8">Nuevo
                        Registro</button>
                </div>
            </div>
            @if ($modaldelete)
            @include('livewire.delete-user')
            @endif
            <div class="px-10 mb-10 flex flex-col">
                <div class="-m-5 overflow-x-auto">
                    <label class="p-1.5 text-gray-600 text-2xl">Registros</label>
                    <div class="my-6 float-right relative mt-1">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text" wire:model="search" id="table-search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar...">
                    </div>

                    @if ($usuarios->count())
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
                                            Nombre</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                            Apellidos</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                            Usuario</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                            Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($usuarios as $user)
                                    <tr>
                                        <td
                                            class="uppercase px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                            {{ $user->id }}</td>
                                        <td
                                            class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->firstname }}</td>
                                        <td
                                            class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->lastname }}</td>
                                        <td
                                            class="uppercase px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                            {{ $user->username }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                            <button type="button" wire:click="edit({{ $user->id }})"
                                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </button>
                                            <button type="button" wire:click="delete({{ $user->id }})"
                                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- {{ $usuarios->links() }} --}}
                                </tbody>
                            </table>
                            @else
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
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>