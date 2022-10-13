<x-app-layout>
    <div class="py-12" x-data="{ openTab: 0 }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false, isOpen: '' }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container">
                            <div class="card mt-3 mb-3">
                                <div class="card-header text-center">
                                    <h4>Import 
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('datas.import') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="file" class="form-control">
                                        <br>
                                        <button class="btn btn-primary">Import Data</button>
                                    </form>

                                    {{-- <table class="table table-bordered mt-3">
                                        <tr>
                                            <th colspan="3">
                                                List Of datas
                                                <a class="btn btn-danger float-end"
                                                    href="{{ route('datas.export') }}">Export Data</a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                        </tr>
                                        @foreach ($datas as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                            </tr>
                                        @endforeach
                                    </table> --}}

                                </div>
                            </div>
                        </div>
                        {{-- <div class="container px-6 py-10 mx-auto">
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
                                <button type="button" @click="openTab = 1"
                                    class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white dark:hs-tab-active:border-b-blue-600 relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 xs:text-xs text-base font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400 active"
                                    id="bar-with-underline-item-1" data-hs-tab="#bar-with-underline-1"
                                    :class="{ 'text-blue-600 border-b-blue-600 text-gray-900': openTab == 1 }"
                                    aria-controls="bar-with-underline-1" role="tab">
                                    Administrador de xml
                                </button>
                                <button type="button" @click="openTab = 2"
                                    class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white dark:hs-tab-active:border-b-blue-600 relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 xs:text-xs text-base font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400 dark:hover:text-gray-300"
                                    id="bar-with-underline-item-2" data-hs-tab="#bar-with-underline-2"
                                    :class="{ 'text-blue-600 border-b-blue-600 text-gray-900': openTab == 2 }"
                                    aria-controls="bar-with-underline-2" role="tab">
                                    Administrador de imagenes
                                </button>
                            </nav>
                        </div>
                        <div x-show="openTab === 1">
                            <div class="px-2 overflow-x-auto">
                                <div class="flex items-left justify-left mb-10 ">
                                    <div class="flex items-left p-1">
                                        <button type="button" x-on:click="open = !open"
                                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                            Importar XML
                                        </button>
                                    </div>
                                </div>
                                {{-- importacion masiva --}}
                        {{-- <div x-show="open">
                                    <p class="text-center lg:text-2xl x:text-lg">Importación Masiva</p>
                                    <div class="py-8 relative flex justify-center">
                                        <div class="relative flex flex-col lg:w-3/5 xs:w-1/5">
                                            <form>
                                                <label for="file-input" class="sr-only">Elige un archivo</label>
                                                <input type="file" name="file-input" id="file-input" class="pr-4 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                                    file:bg-transparent file:border-0
                                                    file:bg-gray-100 file:mr-4
                                                    file:py-3 file:px-4
                                                    dark:file:bg-gray-700 dark:file:text-gray-400">
                                            </form>
                                            <div class="py-2 flex justify-center">
                                                <button type="button"
                                                    class="my-2 py-2 px-4 inline-flex justify-right items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                    Cargar
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                    </svg>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative flex justify-center">
                                        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-4 w-4 text-blue-600 mt-1"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                    </svg>
                                                </div>
                                                <div class="ml-4">
                                                    <h3 class="text-gray-800 font-semibold">
                                                        Recuerda que:
                                                    </h3>
                                                    <div class="mt-2 text-sm text-gray-600">
                                                        <li data-v-620f585d="">El archivo deben ser en formato XML</li>
                                                        <li data-v-620f585d="">El nombre de la imagen no debe ser mayor
                                                            a 100 caracteres</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label class="p-1.5 text-gray-600 text-2xl">Registros XML</label>
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
                                        class="px-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                        <div x-show="openTab === 2">
                            <div class="px-2 overflow-x-auto">
                                <div class="flex items-left justify-left mb-10 ">
                                    <div class="flex items-left p-1">
                                        <button type="button" x-on:click="open = !open"
                                            class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                            Importar imagenes
                                        </button>
                                    </div>
                                </div> --}}
                        {{-- importacion de imagenes --}}
                        {{-- <div x-show="open">
                                    <p class="text-center lg:text-2xl x:text-lg">Importación de imagenes</p>
                                    <div class="py-8 relative flex justify-center">
                                        <div class="relative flex flex-col lg:w-3/5 xs:w-1/5">
                                            <form>
                                                <label for="file-input" class="sr-only">Elige un archivo</label>
                                                <input type="file" name="file-input" id="file-input" class="pr-4 block w-full border border-gray-200 shadow-sm rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400
                                                    file:bg-transparent file:border-0
                                                    file:bg-gray-100 file:mr-4
                                                    file:py-3 file:px-4
                                                    dark:file:bg-gray-700 dark:file:text-gray-400">
                                            </form>
                                            <div class="py-0 flex justify-center">
                                                <button type="button"
                                                    class="my-2 py-2 px-4 inline-flex justify-right items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">
                                                    Cargar
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12l-3-3m0 0l-3 3m3-3v6m-1.5-15H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                                    </svg>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative flex justify-center">
                                        <div class="bg-blue-50 border border-blue-200 rounded-md p-4" role="alert">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-4 w-4 text-blue-600 mt-1"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                    </svg>
                                                </div>
                                                <div class="ml-4">
                                                    <h3 class="text-gray-800 font-semibold">
                                                        Recuerda que:
                                                    </h3>
                                                    <div class="mt-2 text-sm text-gray-600">
                                                        <li data-v-620f585d="">Las imágenes deben ser en formato PNG o
                                                            JPG/JPGE</li>
                                                        <li data-v-620f585d="">El tamaño no debe de exceder de los 500
                                                            KB </li>
                                                        <li data-v-620f585d="">El nombre de la imagen no debe ser mayor
                                                            a 100 caracteres</li>
                                                        <li data-v-620f585d="">Las medidas de la imagen serán de 1140px
                                                            X 400px (de lo
                                                            contrario la imagen se distorcionara)</li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <label class="py-4 text-gray-600 text-2xl">Registors de Imagenes</label>
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
                                        class="px-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
                                                        Nombre</th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">
                                                        Vista previa</th>
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
                                                        Imagen 1</td>
                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                    </td>
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
