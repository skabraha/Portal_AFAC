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
            class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full sm:p-6">
            <div>
                <form>
                    <div class="py-6">
                        <div class="grid xl:grid-cols-2 xs:grid-cols-1 xl:gap-6">
                            <label for="">Ingrese Nombre (s)</label>
                            <input type="text" wire:model="firstname" />
                            @error('firstname')
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                            <label for="">Ingrese Apellidos</label>
                            <input type="text" wire:model="lastname" />
                            @error('lastname')
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="grid xl:grid-cols-2 xs:grid-cols-1 xl:gap-6">
                            <label for="">Ingrese Numero de empleado</label>
                            <input type="text" wire:model="username">
                            <label for="">Ingrese Contraseña</label>
                            <input type="password" wire:model="password">
                        </div>
                        <div class="grid xl:grid-cols-2 xs:grid-cols-1 xl:gap-6">

                            <label for="">Confirmar contraseña</label>
                            <input type="password" wire:model="passwordConfirmation" />
                            @error('password')
                                <span
                                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click.prevent="save" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-sky-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                        </span>

                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                            <button wire:click="closeModal" type="button"
                                class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cerrar</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
