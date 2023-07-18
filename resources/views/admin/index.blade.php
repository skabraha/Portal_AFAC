<x-app-layout>
    {{--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Administrador') }}
    </h2>
    </x-slot>--}}
    <div class="py-2">
        <div class="container px-6 p-y-1 mx-auto">
            <section class="text-gray-600 body-font">
                <div class="container px-6 py-1 mx-auto">
                    <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                        <a href="">
                            <div
                                class="group bg-white h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden transition duration-100 transform hover:scale-105 hover:cursor-pointer">
                                <div class="overflow-hidden bg-cover cursor-pointer lg:h-48 md:h-36 w-full object-cover object-center group"
                                    style="background-image:url('https://img.freepik.com/foto-gratis/primer-plano-manos-contador-contando-calculadora_1262-3170.jpg?size=626&ext=jpg&ga=GA1.1.49596645.1689708146&semt=sph')">
                                    <div
                                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800 group-hover:opacity-70">
                                        <h2 class="mt-4 text-2xl font-semibold text-white capitalize">RECIBOS DE NOMINA
                                        </h2>
                                        <p class="mt-2 text-lg tracking-wider text-blue-300 uppercase ">BUSQUEDA Y DESCARGA</p>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                                        RECIBOS DE NOMINA
                                    </h1>
                                    <div class="flex items-center flex-wrap ">
                                        <p
                                            class="group-hover:animate-pulse text-sky-700 inline-flex items-center md:mb-2 lg:mb-0">
                                            BUSQUEDA DE RECIBOS
                                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor"
                                                stroke-width="2" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5l7 7-7 7"></path>
                                            </svg>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>
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
                                            <h2 class="text-gray-900 text-lg title-font font-medium">Importación de xml y imagenes
                                            </h2>
                                        </div>
                                        <div class="flex-grow">
                                            <p class="leading-relaxed text-base">Importa el archivo xlm de la nomina y administra el carrusel</p>
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
</x-app-layout>