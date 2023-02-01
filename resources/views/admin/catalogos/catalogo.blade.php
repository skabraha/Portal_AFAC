<x-app-layout>
    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="bg-white dark:bg-gray-900">
                    <x-dialog z-index="z-50" blur="md" align="center" />
                    <div class="container px-12 py-12 mx-auto">
                        <div class="flex flex-col items-center xl:items-start xl:mx-2">
                            <h1 class="text-xl font-medium text-gray-800 capitalize lg:text-3xl dark:text-white">Catalogos</h1>
                            <div class="mt-0">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                            </div>
                        </div>
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