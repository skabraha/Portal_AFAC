<x-app-layout>
    <div class="relative py-6 lg:py-4">
        <img class="z-0 w-full h-full absolute inset-0 object-cover" src="{{ asset('images/banner_testing.jpg') }}"
            alt="bg" />
        <div
            class="z-10 relative container px-6 mx-auto flex flex-col md:flex-row items-start md:items-center justify-between">
            <div>
                <h4 tabindex="0" class="focus:outline-none text-2xl font-bold leading-tight text-white">Catalogos
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
    <div class="py-4">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-white dark:bg-gray-900">
                    <x-dialog z-index="z-50" blur="md" align="center" />
                    <div class="container px-12 py-12 mx-auto">
                        <div x-data="{ message: 'percepcion' }" x-cloak>
                            <div class="mt-2 xl:mt-4 lg:flex lg:-mx-12">
                                <div class="lg:mx-12">
                                    <div class="mt-4 space-y-4 lg:mt-8">
                                        <a x-on:click="message = 'percepcion'" class="block text-gray-500 dark:text-gray-300 hover:underline hover:cursor-pointer" :class="{ 'text-blue-500': message == 'percepcion' }">Tipo Percepción</a>
                                        <a x-on:click="message = 'deducion'" class="block text-gray-500 dark:text-blue-400 hover:underline hover:cursor-pointer" :class="{ 'text-blue-500': message == 'deducion' }">Tipo Deducción</a>
                                        <a x-on:click="message = 'otros'" class="block text-gray-500 dark:text-gray-300 hover:underline hover:cursor-pointer" :class="{ 'text-blue-500': message == 'otros' }">Tipo Otro Pago</a>      
                                    </div>
                                </div>
                                <div x-show="message === 'percepcion'" class="flex-1 mt-8 lg:mx-12 lg:mt-0">
                                    <section class="text-gray-600 body-font">
                                        <div class="container px-5 py-0 mx-auto">
                                            <div class="lg:w-full w-full mx-auto overflow-auto">
                                                @livewire('catalogs.percepcion.create')
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                {{-- tipo de examen --}}
                                <div x-show="message === 'deducion'" class="flex-1 mt-8 lg:mx-12 lg:mt-0">
                                    <section class="text-gray-600 body-font">
                                        <div class="container px-5 py-0 mx-auto">
                                            <div class="lg:w-full w-full mx-auto overflow-auto">
                                                @livewire('catalogs.deduccion.create')
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                {{-- Especialidad/capacidad --}}
                                <div x-show="message === 'otros'" class="flex-1 mt-8 lg:mx-12 lg:mt-0">
                                    <section class="text-gray-600 body-font">
                                        <div class="container px-5 py-0 mx-auto">
                                            <div class="lg:w-full w-full mx-auto overflow-auto">
                                                @livewire('catalogs.other.create')
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                {{-- tipo de asignatura --}}
                                <div x-show="message === 'typesubject'" class="flex-1 mt-8 lg:mx-12 lg:mt-0">
                                    <section class="text-gray-600 body-font">
                                        <div class="container px-5 py-0 mx-auto">
                                            <div class="lg:w-full w-full mx-auto overflow-auto">
                                                {{-- @livewire('catalogs.type-course.create') --}}
                                            </div>
                                    </section>
                                    </div>
                                    {{-- asignatura --}}
                                    <div x-show="message === 'subject'" class="flex-1 mt-8 lg:mx-12 lg:mt-0">
                                        <section class="text-gray-600 body-font">
                                            <div class="container px-5 py-0 mx-auto">
                                                <div class="lg:w-full w-full mx-auto overflow-auto">
                                                    {{-- @livewire('catalogs.course.create') --}}
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
</x-app-layout>