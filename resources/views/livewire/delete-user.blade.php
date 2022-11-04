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
    class="fixed inset-0 z-10 overflow-y-auto bg-black bg-opacity-50" aria-labelledby="modal-title" role="dialog"
    aria-modal="true">
    <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-md w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form wire:submit.prevent="saveDelete">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="py-6">
                        <div class="p-6 text-center">
                            <div
                                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-12 sm:w-12">
                                <!-- Heroicon name: outline/exclamation-triangle -->
                                <svg class="h-6 w-6 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 10.5v3.75m-9.303 3.376C1.83 19.126 2.914 21 4.645 21h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 4.88c-.866-1.501-3.032-1.501-3.898 0L2.697 17.626zM12 17.25h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <p class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">¿Deseas eliminar al
                                usuario
                                <span class="font-bold text-red-900">{{ $firstname }}</span>?
                            </p>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="savedelete" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-red-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-red-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Eliminar</button>
                        </span>
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="closeModaldelt" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cerrar</button>
                        </span>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>