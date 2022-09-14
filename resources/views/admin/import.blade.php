<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <h1
                                class="text-xl font-semibold text-center text-gray-800 capitalize xl:text-3xl lg:text-3xl dark:text-white">
                                Importación de Archivos
                            </h1>
                            <div class="flex justify-center mx-auto mt-6">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                            </div>
                        </div>
                    </section>
                    <div class="px-10 mb-10 flex flex-col">
                        <div class="px-2 mb-10 flex flex-col">
                            <nav class="relative z-0 flex border rounded-xl overflow-hidden dark:border-gray-700"
                                aria-label="Tabs" role="tablist">
                                <button type="button"
                                    class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white dark:hs-tab-active:border-b-blue-600 relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400 active"
                                    id="bar-with-underline-item-1" data-hs-tab="#bar-with-underline-1"
                                    aria-controls="bar-with-underline-1" role="tab">
                                    Administrador de xml
                                </button>
                                <button type="button"
                                    class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white dark:hs-tab-active:border-b-blue-600 relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 text-sm font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400 dark:hover:text-gray-300"
                                    id="bar-with-underline-item-2" data-hs-tab="#bar-with-underline-2"
                                    aria-controls="bar-with-underline-2" role="tab">
                                    Administrador de imagenes
                                </button>
                            </nav>
                        </div>
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
                                                    #</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Periodo</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Año</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    N.de registros</th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                    Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                    1</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                    01/01/2022 - 15/01/2022</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                    2022</td>
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                    1345</td>
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