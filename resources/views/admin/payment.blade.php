<x-app-layout>
    <div class="relative py-6 lg:py-4">
        <img class="z-0 w-full h-full absolute inset-0 object-cover" src="{{ asset('images/banner_testing.jpg') }}"
            alt="bg" />
        <div
            class="z-10 relative container px-6 mx-auto flex flex-col md:flex-row items-start md:items-center justify-between">
            <div>
                <h4 tabindex="0" class="focus:outline-none text-2xl font-bold leading-tight text-white">Búsqueda De Comprobantes De Pago. 
                </h4>
                <ul class="flex flex-col md:flex-row items-start md:items-center text-gray-300 text-sm mt-3">
                    <li class="flex items-center mt-4 md:mt-0">
                        <div class="mr-1">
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg3.svg"
                                alt="date">
                        </div>
                        <span tabindex="0" class="focus:outline-none">
                            {{-- {{ $dateNow }} --}} Miercoles 18 de Julio
                        </span>
                        {{-- <p>Estado de la conexión: <span id="connection-status"></span></p> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-cloak x-data="{ open: false }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-6 mx-auto">
                            <div class="flex items-start max-w-6xl mx-auto mt-5">
                                <div class="container px-5 py-5 mx-auto">
                                    <div class="flex flex-wrap w-full mb-12 flex-col items-center text-center">
                                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Criterios de búsqueda
                                        </h1>
                                        <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">CURP: SOSL891201MMCTNR04</p>
                                    </div>
                                    {{-- <div class="flex flex-col  w-full mb-12">
                                        <p class="lg:w-2/3 mx-auto text-center leading-relaxed text-2xl">Criterios de
                                            búsqueda</p>
                                    </div> --}}
                                    {{-- @livewire('admin.select-component') --}}
                                    @livewire('user.select-component')                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>