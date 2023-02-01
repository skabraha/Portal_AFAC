<style>
    body {
        overflow-x: hidden;
        overflow-y: hidden !important;
    }
</style>
<div x-transition:enter="transition duration-300 ease-out"
    x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
    x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100" x-transition:leave="transition duration-150 ease-in"
    x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
    x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
    class="fixed inset-0 z-[60] overflow-y-auto bg-black bg-opacity-70" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full sm:p-6">
            <div class="mt-4 text-lefth">
                <h3 class="font-medium leading-6 text-xl text-gray-800 capitalize dark:text-white" id="modal-title">
                </h3>
            </div>
            <div class="flex flex-col items-center xl:items-start xl:mx-2">
                <h1 class="text-xl font-medium text-gray-800 capitalize lg:text-2xl dark:text-white">Otros pagos
                </h1>
                <div class="mt-0">
                    <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                </div>
            </div>
            <div class="bg-blue-50 border border-blue-200 rounded-md p-2" role="alert">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-4 w-4 text-blue-600 mt-1" xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg>
                    </div>
                    <div class="ml-4">
                        <h4 class="text-gray-800 font-semibold">
                            Todos los campos son obligatorios
                        </h4>
                    </div>
                </div>
            </div>
            <div class="py-6">
                <div class="mt-2 grid xl:grid-cols-3 xs:grid-cols-1 xl:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <x-input wire:model.lazy="key" label="Clave" placeholder="Ingresa la clave" />
                    </div>
                </div>
                <div class="mt-2 grid xl:grid-cols-1 xs:grid-cols-1 xl:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <x-input wire:model.lazy="name" label="Descripción" placeholder="Ingresa la descripción" />
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto bg-blue-500">
                        <x-button wire:click="save" spinner="save" loading-delay="short" blue label="Guardar" />
                    </span>
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <x-button wire:click="closeModal" spinner="closeModal" loading-delay="short" secondary
                            label="Cerrar" />
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
