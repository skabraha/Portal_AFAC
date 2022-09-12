<x-app-layout>
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
                    <div class="flex items-center justify-center mb-10 ">
                        <div class="flex items-center p-1 border border-blue-600 dark:border-blue-400 rounded-xl">
                            <button
                                class="px-4 py-2 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-3 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:py-3 rounded-xl md:px-12">Nuevo
                                Registro</button>
                            <button x-on:click="open = !open"
                                class="px-4 py-2 text-sm font-medium text-blue-600 capitalize transition-colors duration-300 md:py-3 dark:text-blue-400 dark:hover:text-white focus:outline-none hover:bg-blue-600 hover:text-white rounded-xl md:px-12">Importar
                                Registros</button>
                        </div>
                    </div>
                    <div x-show="open">
                        <section class="bg-white dark:bg-gray-900">
                            <div class="container px-6 py-0 mx-auto">
                                <div class="flex items-start max-w-6xl mx-auto mt-5">
                                    <div class="container px-5 py-2 mx-auto">
                                        <div class="flex flex-col  w-full mb-6">
                                            <p class="text-left leading-relaxed text-2xl">Importación Masiva</p>
                                        </div>
                                        <div class="py-4 flex justify-center">
                                            <div class="lg:w-1/2">
                                                <div x-data="{ isOpen: '' }" class="relative flex justify-center">
                                                    <a @click="isOpen = true"
                                                        class="cursor-help text-md text-blue-800 hover:underline">
                                                        Instructivo de importación
                                                    </a>
                                                    <div x-show="isOpen"
                                                        x-transition:enter="transition duration-300 ease-out"
                                                        x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                                        x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                                                        x-transition:leave="transition duration-150 ease-in"
                                                        x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                                                        x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                                        class="fixed inset-0 z-10 overflow-y-auto"
                                                        aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                        <div
                                                            class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                                            <span
                                                                class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                aria-hidden="true">&#8203;</span>
                                                            <div
                                                                class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-gray-50 rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full sm:p-6">
                                                                <div class="mt-5 text-center">
                                                                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white"
                                                                        id="modal-title">
                                                                        Instructivo de llenado
                                                                    </h3>
                                                                </div>
                                                                <br>

                                                                <div class="bg-blue-50 border border-blue-200 rounded-md p-2    "
                                                                    role="alert">
                                                                    <div class="flex">
                                                                        <div class="flex-shrink-0">
                                                                            <svg class="h-4 w-4 text-blue-600 mt-1"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="16" height="16"
                                                                                fill="currentColor" viewBox="0 0 16 16">
                                                                                <path
                                                                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                                            </svg>
                                                                        </div>
                                                                        <div class="ml-4">
                                                                            <div class="mt-2 text-sm text-gray-600">
                                                                                Todos los campos son obligatorios(*)
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="py-2">
                                                                    Preparación del archivo
                                                                    <li
                                                                        class="py-1 flex space-x-3 list-disc list-inside ">
                                                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                                                                fill="blue" fill-opacity="0.1" />
                                                                            <path
                                                                                d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                        <span class="text-gray-600 dark:text-gray-400">
                                                                            El archivo que se desea importar debe de ser
                                                                            de un formato xls.
                                                                        </span>
                                                                    </li>
                                                                    <li
                                                                        class="py-1 flex space-x-3 list-disc list-inside ">
                                                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                                                                fill="blue" fill-opacity="0.1" />
                                                                            <path
                                                                                d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                        <span class="text-gray-600 dark:text-gray-400">
                                                                            Cada columna del archivo tiene un encabezado
                                                                            en la primera fila. Esto
                                                                            permite identificar los datos que se van a
                                                                            mapear durante la
                                                                            importación.
                                                                        </span>
                                                                    </li>
                                                                    <li class="flex space-x-3 list-disc list-inside ">
                                                                        <svg class="flex-shrink-0 h-6 w-6 text-gray-800 dark:text-white"
                                                                            width="16" height="16" viewBox="0 0 16 16"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M15.1965 7.85999C15.1965 3.71785 11.8387 0.359985 7.69653 0.359985C3.5544 0.359985 0.196533 3.71785 0.196533 7.85999C0.196533 12.0021 3.5544 15.36 7.69653 15.36C11.8387 15.36 15.1965 12.0021 15.1965 7.85999Z"
                                                                                fill="blue" fill-opacity="0.1" />
                                                                            <path
                                                                                d="M10.9295 4.88618C11.1083 4.67577 11.4238 4.65019 11.6343 4.82904C11.8446 5.00788 11.8702 5.32343 11.6914 5.53383L7.44139 10.5338C7.25974 10.7475 6.93787 10.77 6.72825 10.5837L4.47825 8.5837C4.27186 8.40024 4.25327 8.0842 4.43673 7.87781C4.62019 7.67142 4.93622 7.65283 5.14261 7.83629L7.01053 9.49669L10.9295 4.88618Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                        <span class="text-gray-600 dark:text-gray-400">
                                                                            El archivo debe tener las siguientes columnas con la siguinte información:
                                                                        </span>
                                                                    </li>
                                                                    <div class="py-2 flex flex-col">
                                                                        <div class="-m-1.5 overflow-x-auto">
                                                                            <div
                                                                                class="p-1.5 min-w-full inline-block align-middle">
                                                                                <div
                                                                                    class="border rounded-lg overflow-hidden dark:border-gray-700">
                                                                                    <table
                                                                                        class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                                                        <thead
                                                                                            class="bg-blue-100 dark:bg-gray-700">
                                                                                            <tr>
                                                                                                <th scope="col"
                                                                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                                                                    Nombre de la columna
                                                                                                </th>
                                                                                                <th scope="col"
                                                                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                                                                    Información a
                                                                                                    Ingresar</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody
                                                                                            class="divide-y divide-gray-200 dark:divide-gray-700">
                                                                                            <tr>
                                                                                                <td
                                                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                                                                    numeber_employ</td>
                                                                                                <td
                                                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                                                                    Numero de Empleado
                                                                                                    (*)
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td
                                                                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                                                                    pasword</td>
                                                                                                <td
                                                                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                                                                    Contraseña(*)</td>
                                                                                            </tr>

                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <button
                                                                        class="py-2 relative group rounded-lg overflow-hidden pl-6 h-10 flex space-x-6 items-center bg-blue-700">
                                                                        <span
                                                                            class="relative text-sm text-white">Descargar
                                                                            Archivo</span>
                                                                        <div aria-hidden="true"
                                                                            class="w-12 bg-blue-600 transition duration-500 -translate-y-7 group-hover:translate-y-7">
                                                                            <div class="h-14 flex">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="h-5 w-5 m-auto fill-white"
                                                                                    viewBox="0 0 20 20"
                                                                                    fill="currentColor">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </div>
                                                                            <div class="h-14 flex">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    class="h-5 w-5 m-auto fill-white"
                                                                                    viewBox="0 0 20 20"
                                                                                    fill="currentColor">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </button>
                                                                </div>
                                                                <div
                                                                    class="mt-4 sm:flex sm:items-center sm:justify-between sm:mt-6 sm:-mx-2">
                                                                    <button @click="isOpen = false"
                                                                        class="px-4 sm:mx-2 w-full py-2.5 text-sm font-medium dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                                                        Cerrar
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form>
                                                    <label for="file-input" class="sr-only">Choose file</label>
                                                    <input type="file" name="file-input" id="file-input" class="pr-4 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                                    file:bg-transparent file:border-0
                                                    file:bg-gray-100 file:mr-4
                                                    file:py-3 file:px-4
                                                    dark:file:bg-gray-700 dark:file:text-gray-400">


                                                </form>
                                            </div>
                                        </div>
                                        <div class="py-4 flex justify-center">
                                            <button type="button"
                                                class="my-2 py-2 px-4 inline-flex justify-right items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                Cargar
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                </svg>

                                            </button>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div
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
                                                    Numero de empleado</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
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
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>