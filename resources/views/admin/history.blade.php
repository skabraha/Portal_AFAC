<x-app-layout>
    <div class="py-12" x-data="{ openTab:0}">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false, isOpen:'' }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <h1
                                class="text-xl font-semibold text-center text-gray-800 capitalize xl:text-3xl lg:text-3xl dark:text-white">
                                Historial de Cambios
                            </h1>
                            <div class="flex justify-center mx-auto mt-6">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                            </div>
                        </div>
                    </section>
                    <div class="flex items-start max-w-6xl mx-auto mt-0">
                        <div class="container px-5 py-2 mx-auto">
                            <div class="flex flex-col  w-full mb-6">
                                <p class="lg:w-2/3 mx-auto text-center leading-relaxed text-2xl">Criterios de
                                    búsqueda</p>
                            </div>
                            <div
                                class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-2 sm:space-x-4 sm:space-y-0 space-y-0 sm:px-0 items-end">
                                <div class="relative flex-grow w-full">
                                    <label for="full-name" class="leading-7 text-lg text-gray-600">Numero de
                                        empleado</label>
                                    <input type="number "
                                        class="py-2 px-3 block w-full border-gray-200 rounded-md text-base focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                        placeholder="Ingresa el numero de empleado">
                                </div>
                            </div>
                            <div
                                class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-4 py-4 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
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
            </div>
        </div>
    </div>
</x-app-layout>