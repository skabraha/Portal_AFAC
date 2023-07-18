<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-cloak x-data="{ open: false }">
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