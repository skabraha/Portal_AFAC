<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador') }}
    </h2>
    </x-slot>--}}
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-8 py-10 mx-auto">
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 md:w-1/4">
                                <a href="{{ route('busqueda') }}">
                                    <div
                                        class="group flex rounded-lg h-full bg-gray-100 p-8 transition duration-100 transform hover:scale-105 hover:cursor-pointer flex-col">
                                        <div class="flex items-center mb-3">
                                            <div
                                                class="w-8 h-8 mr-3 inline-flex items-center justify-center group-hover:animate-ping rounded-full group-hover:bg-blue-800 bg-gray-400 text-white flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19.5 5.25l-7.5 7.5-7.5-7.5m15 6l-7.5 7.5-7.5-7.5" />
                                                </svg>

                                            </div>
                                            <h2 class="text-gray-900 text-lg title-font font-medium">Comprobantes de
                                                pago</h2>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="leading-relaxed text-base">Descarga y consulta los recibos de
                                                nomina.</p>
                                            <p
                                                class="mt-3 text-gray-100 inline-flex items-center group-hover:text-blue-800">
                                                Ir al
                                                modulo
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                                    viewBox="0 0 24 24">
                                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 md:w-1/4">
                                <a href="{{ route('cuentas') }}">
                                    <div
                                        class="group flex rounded-lg h-full bg-gray-100 p-8 transition duration-100 transform hover:scale-105 hover:cursor-pointer flex-col">
                                        <div class="flex items-center mb-3">
                                            <div
                                                class="w-8 h-8 mr-3 inline-flex items-center justify-center group-hover:animate-ping  rounded-full group-hover:bg-blue-800 bg-gray-400 text-white flex-shrink-0">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-5 h-5"
                                                    viewBox="0 0 24 24">
                                                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg>
                                            </div>
                                            <h2 class="text-gray-900 text-lg title-font font-medium">Administrador de
                                                Accesos</h2>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="leading-relaxed text-base">Registra los usuarios que ingresaran a
                                                al Portal
                                            </p>
                                            <p
                                                class="mt-3 text-gray-100 inline-flex items-center group-hover:text-blue-800">
                                                Ir al
                                                modulo
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                                    viewBox="0 0 24 24">
                                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 md:w-1/4">
                                <a href="{{ route('admin_import') }}">
                                    <div
                                        class="group flex rounded-lg h-full bg-gray-100 p-8 transition duration-100 transform hover:scale-105 hover:cursor-pointer flex-col">
                                        <div class="flex items-center mb-3">
                                            <div
                                                class="w-8 h-8 mr-3 inline-flex items-center justify-center group-hover:animate-ping rounded-full group-hover:bg-blue-800 bg-gray-400 text-white flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3 4.5h14.25M3 9h9.75M3 13.5h5.25m5.25-.75L17.25 9m0 0L21 12.75M17.25 9v12" />
                                                </svg>


                                            </div>
                                            <h2 class="text-gray-900 text-lg title-font font-medium">Importación de xml
                                                y imagenes
                                            </h2>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="leading-relaxed text-base">Importa el archivo xlm de la nomina y
                                                administra el carrusel</p>
                                            <p
                                                class="mt-3 text-gray-100 inline-flex items-center group-hover:text-blue-800">
                                                Ir al
                                                modulo
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                                    viewBox="0 0 24 24">
                                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-4 md:w-1/4">
                                <a href="{{ route('bitacora') }}">
                                    <div
                                        class="group flex rounded-lg h-full bg-gray-100 p-8 transition duration-100 transform hover:scale-105 hover:cursor-pointer flex-col">
                                        <div class="flex items-center mb-3">
                                            <div
                                                class="w-8 h-8 mr-3 inline-flex items-center justify-center group-hover:animate-ping rounded-full group-hover:bg-blue-800 bg-gray-400 text-white flex-shrink-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>

                                            </div>
                                            <h2 class="text-gray-900 text-lg title-font font-medium">Historial de
                                                descarga</h2>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="leading-relaxed text-base">Visualiza los cambios realizados en el
                                                portal</p>
                                            <p
                                                class="mt-3 text-gray-100 inline-flex items-center group-hover:text-blue-800">
                                                Ir al
                                                modulo
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2"
                                                    viewBox="0 0 24 24">
                                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <div x-data="{ isOpen: true }" class="relative flex justify-center">

        <div x-show="isOpen" x-transition:enter="transition duration-300 ease-out"
            x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
            x-transition:leave="transition duration-150 ease-in"
            x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
            x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
            class="fixed inset-0 z-10 overflow-y-auto bg-black bg-opacity-70" aria-labelledby="modal-title"
            role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">

                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                <div
                    class="relative items-center justify-center inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-md sm:w-full sm:p-6">
                    <div>
                        <section class="mx-auto pb-10 flex justify-center">
                            <img class="object-cover items-center justify-center w-40 h-32"
                                src="{{asset('images/AFAC1.png')}}" alt="">
                        </section>
                        <div class="mt-2 text-center">
                            <h3 class="font-semibold leading-6 text-gray-800 capitalize dark:text-white text-lg" id="modal-title">
                                Aviso de privacidad
                            </h3>

                            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                La información recopilada se considera reservada, así como los
                                datos de las personas, no se
                                proporcionará para fines diferentes de acuerdo a Ley de Aviación civil Artículo 78 Bis
                                5, 78
                                BIS
                                6, 78 BIS 7, 78 BIS 8.
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 sm:flex sm:items-center sm:-mx-2 justify-center items-center">
                        <button @click="isOpen = false"
                            class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                            Aceptar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>