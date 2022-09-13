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
                                <a href="">
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
                            <div class="p-4 md:w-1/4">
                                <a href="">
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
                                            <h2 class="text-gray-900 text-lg title-font font-medium">Importar el xml
                                            </h2>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="leading-relaxed text-base">Importa el archivo xlm de la nomina</p>
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
</x-app-layout>