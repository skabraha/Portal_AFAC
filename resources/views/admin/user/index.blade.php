<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarissso') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <h1
                                class="text-xl font-semibold text-center text-gray-800 capitalize xl:text-3xl lg:text-3xl dark:text-white">
                                Búsqueda de comprobantes de pago de empleados
                            </h1>

                            <div class="flex justify-center mx-auto mt-6">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                            </div>
                            <div class="flex items-start max-w-6xl mx-auto mt-5">
                                <div class="container px-5 py-5 mx-auto">
                                    <div class="flex flex-col  w-full mb-12">
                                        <p class="lg:w-2/3 mx-auto text-center leading-relaxed text-2xl">Criterios de
                                            búsqueda</p>
                                    </div>
                                    <div
                                        class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
                                        <div class="relative flex-grow w-full">
                                            <label for="full-name" class="leading-7 text-lg text-gray-600">Selecciona el
                                                año</label>
                                            <select
                                                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                                <option selected>Año</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                            </select>
                                        </div>
                                        <div class="relative flex-grow w-full">
                                            <label for="email" class="leading-7 text-lg text-gray-600">Selecciona el
                                                mes</label>
                                            <select
                                                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                                <option selected>Mes</option>
                                            </select>
                                        </div>
                                        <div class="relative flex-grow w-full">
                                            <label for="email" class="leading-7 text-lg text-gray-600">Selecciona la
                                                quincena</label>
                                            <select
                                                class="py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                                <option selected>Quincena</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="py-4 flex justify-center">
                                        <button x-on:click="open = 'false'"
                                            class="inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Limpiar</button>
                                        <button x-on:click="open = 'open'"
                                            class="ml-4 inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Buscar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="open=='open'">
                            <div class="px-10 mb-10 flex flex-col">
                                <div class="-m-5 overflow-x-auto">
                                    <label class="p-1.5 text-gray-600 text-2xl">Resultados</label>
                                    <div class="p-1.5 min-w-full inline-block align-middle">
                                        <div
                                            class="border rounded-lg shadow overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                                <thead class="bg-gray-50 dark:bg-gray-700">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                            Periodo de pago</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                            Importe neto</th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
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
                                                    <tr>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                            2022-08-01 - 2022-08-15</td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                            14,557</td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                            4ADBE30C-93F3-4DE9-9E80-753ECCE43676</td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                            2022-08-08T13:12:43 </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <button type="button"
                                                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                                </svg>
                                                            </button>
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <button type="button"
                                                                class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.875rem] w-[2.875rem] rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm  dark:focus:ring-offset-gray-800">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m.75 12l3 3m0 0l3-3m-3 3v-6m-1.5-9H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                                </svg>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>