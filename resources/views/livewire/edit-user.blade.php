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
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
        <div
            class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full md:max-w-2xl sm:max-w-xs sm:p-6 sm:align-middle">
            <h3 class="text-xl font-medium leading-6 text-gray-800 capitalize dark:text-white" id="modal-title">
                Acceso
            </h3>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400 text-blue-500">
                Todos los campos son obligatorios (*) y no pueden dejarse vacios.
            </p>
            <form class="mt-4">

                <div class="mt-2 grid xl:grid-cols-1 xs:grid-cols-1 xl:gap-6">
                    <div class="relative z-0 w-full mb-2 group">
                        <label for="input-name" class="block text-sm font-medium mb-2 dark:text-white">Selecione nombre</label>                        
                        {{-- <select id="small" wire:model.lazy="firstname"
                        class="block w-full p-2 mb-2 text-base text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Seleccione...</option>
                        @foreach ($peoplegestor as $peoplegestors)
                        <option value="{{ $peoplegestors->gstNmpld }}">
                        {{ $peoplegestors->gstNombr.' '.$peoplegestors->gstApell }}</option>
                        @endforeach
                        </select> --}}
                        <x-select id="small" label="" wire:model.lazy="firstname" placeholder="Seleccione..."
                            wire:model.defer="firstname" min-items-for-search="50">
                            @foreach ($peoplegestor as $peoplegestors)
                                <x-select.option label="{{ $peoplegestors->gstNombr.' '.$peoplegestors->gstApell }}" value="{{ $peoplegestors->gstNmpld }}" />
                                @endforeach
                        </x-select>
                        @error('firstname')
                            <span
                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror


                        
                    </div>
                </div>

                {{-- <label class="text-base text-gray-700 dark:text-gray-200" for="">Nombre(s)</label>
                <label class="block mt-0"> --}}
                    {{-- <input
                        class="uppercase block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                        type="text" wire:model="firstname" />
                </label>
                @error('firstname')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                <br>
                @enderror --}}

                {{-- <label class="text-base text-gray-700 dark:text-gray-200 mt-3" for="">Apellidos</label>
                <label class="block mt-0">
                    <input
                        class="block mt-0 uppercase block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                        type="text" wire:model="lastname" />
                </label>
                @error('lastname')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                <br>
                @enderror --}}
                <label class="text-base text-gray-700 dark:text-gray-200 mt-3" for="">Ingrese Numero de empleado</label>
                <label class="block mt-0">
                    <input disabled
                        class="uppercase block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                        type="text" wire:model="username">                        
                        @error('username')
                            <span
                                class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                        @enderror
                </label>
                <label class="text-base text-gray-700 dark:text-gray-200 mt-3" for="">Ingrese Contraseña</label>
                <label class="block mt-0">
                    <input
                        class="uppercase block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                        type="password" wire:model="password">
                </label>
                @error('password')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                <br>
                @enderror

                <label class="text-base text-gray-700 dark:text-gray-200 mt-3" for="">Confirmar contraseña</label>
                <label class="block mt-0">
                    <input
                        class="uppercase block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300"
                        type="password" wire:model="passwordConfirmation" />
                </label>
                @error('passwordConfirmation')
                <span
                    class="bg-red-100 text-red-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-red-200 dark:text-red-900">{{ $message }}</span>
                <br>
                @enderror

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto bg-blue-500">
                        <x-button wire:click="save" spinner="save" loading-delay="short" blue label="Guardar" />
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