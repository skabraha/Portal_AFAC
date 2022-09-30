<x-app-layout>
    <div>
        @if (session()->has('success'))
            <div class="alert alert-success">
                <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                    role="alert">
                    <span class="font-medium"></span> {{ session('success') }}
                </div>
            </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <h1
                                class="text-xl font-semibold text-center text-gray-800 capitalize xl:text-3xl lg:text-3xl dark:text-white">
                                Administrador de el Portal
                            </h1>
                            <div class="flex justify-center mx-auto mt-6">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                            </div>
                        </div>
                    </section>
                    {{-- <div class="px-6 flex items-left justify-left mb-10 ">
                        <div class="flex items-left p-1 border border-blue-600 dark:border-blue-400 rounded-xl">
                            <button x-on:click="open = !open"
                                class="px-4 py-2 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-2 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:py-2 rounded-xl md:px-8">Nuevo
                                Registro</button>
                        </div>
                    </div>
                    <div x-show="open" x-transition:enter="transition duration-300 ease-out"
                        x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                        x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                        x-transition:leave="transition duration-150 ease-in"
                        x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                        x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                        class="fixed inset-0 z-10 overflow-y-auto bg-black bg-opacity-50" aria-labelledby="modal-title"
                        role="dialog" aria-modal="true">
                        <div
                            class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                            <span class="hidden sm:inline-block sm:h-screen sm:align-middle"
                                aria-hidden="true">&#8203;</span>

                            <div
                                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full md:max-w-2xl sm:max-w-xs sm:p-6 sm:align-middle">
                                <h3 class="text-xl font-medium leading-6 text-gray-800 capitalize dark:text-white"
                                    id="modal-title">
                                    Nuevo acceso
                                </h3>
                                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 text-blue-500">
                                    Todos los campos son obligatorios (*) y no pueden dejarse en vacios.
                                </p>
                                <form >
                                    <label for="name" class="text-base text-gray-700 dark:text-gray-200">
                                        Nombre(s)
                                    </label>
                                    <input type="text" wire:model="firstname" />
                                    @error('firstname')
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                                    @enderror
                                    <label for="lastname" class="text-base text-gray-700 dark:text-gray-200 mt-3">
                                        Apellidos
                                    </label>
                                    <input type="text" wire:model="lastname" />
                                    @error('lastname')
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                                    @enderror
                                    <label for="user" class="text-base text-gray-700 dark:text-gray-200 mt-3">
                                        Usuario
                                    </label>
                                    <input type="text" wire:model="username">
                                    <label for="password" class="text-base text-gray-700 dark:text-gray-200 mt-3">
                                        Contraseña
                                    </label>
                                    <input type="password" wire:model="password">
                                    <label for="confirmpass" class="text-base text-gray-700 dark:text-gray-200 mt-3">
                                        Confirma Contraseña
                                    </label>
                                    <input type="password" wire:model="passwordConfirmation" />
                                    @error('password')
                                        <span
                                            class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                                    @enderror
                                    <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
                                        <button type="button" @click="open = false"
                                            class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                            Cancel
                                        </button>
                                        <button type="button"
                                            class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" wire:click.prevent="save">
                                            Guardar
                                        </button>
                                        <button wire:click.prevent="save">GUARDAR</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="px-10 mb-10 flex flex-col">
                        <div class="-m-5 overflow-x-auto">
                            <label class="p-1.5 text-gray-600 text-2xl">Registros</label>
                            <div class="p-1.5 min-w-full inline-block align-middle"> --}}
                    @livewire('users')
                    {{-- <div
                                    class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Nombre</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    RFC</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Usuario</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                    LAURA JESSICA SOTO SÁNCHEZ</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                    SOSL891201GQA</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                    7141327</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                    <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                        </svg>

                                                    </button>
                                                    <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>

                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> --}}
                </div>
            </div>
        </div>
</x-app-layout>