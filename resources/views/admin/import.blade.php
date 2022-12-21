<x-app-layout>
    <div x-cloak class="py-12" x-data="{ openTab: 0 }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false, isOpen: '' }">
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
                                <button type="button" @click="openTab = 1"
                                    class="hs-tab-active:border-b-blue-600 hs-tab-active:text-gray-900 dark:hs-tab-active:text-white dark:hs-tab-active:border-b-blue-600 relative min-w-0 flex-1 bg-white first:border-l-0 border-l border-b-2 py-4 px-4 text-gray-500 hover:text-gray-700 xs:text-xs text-base font-medium text-center overflow-hidden hover:bg-gray-50 focus:z-10 dark:bg-gray-800 dark:border-l-gray-700 dark:border-b-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-400 active"
                                    id="bar-with-underline-item-1" data-hs-tab="#bar-with-underline-1"
                                    :class="{ 'text-blue-600 border-b-blue-600 text-gray-900': openTab == 1 }"
                                    aria-controls="bar-with-underline-1" role="tab">
                                    Administrador de csv                                </button>
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
                         @livewire('admin.import-component')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>