<x-app-layout>
    <div>
        @if (session()->has('success'))
        <div class="alert alert-success">
            <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                role="alert">
                <span class="font-medium"></span> {{ session('success') }}
            </div>
        </div>
    </div>
    @endif
    <nav class="border-b-2 border-gray-200 m:px-6 lg:px-8 flex space-x-8">
        <a class="py-4 px-1 inline-flex items-center gap-2 text-sm whitespace-nowrap text-gray-400 hover:text-blue-600"
            href="{{ route('busqueda') }}">
            Comprobantes de pago
        </a>
        <a class="py-4 px-1 inline-flex items-center gap-2 text-sm font-medium whitespace-nowrap text-gray-400 hover:text-blue-600"
            href="{{ route('admin_import') }}" aria-current="page">
            Importación
        </a>
        <a class="py-4 px-1 inline-flex items-center gap-2 text-sm whitespace-nowrap text-gray-400 hover:text-blue-600"
            href="{{ route('bitacora') }}">
            Historial de descarga
        </a>
    </nav>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div x-data="{ open: false }">
                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <h1
                                class="text-xl font-semibold text-center text-gray-800 capitalize xl:text-3xl lg:text-3xl dark:text-white">
                                Administrador de el Portal
                            </h1>
                            <div class="flex justify-center mx-auto mt-6">
                                <span class="inline-block w-40 h-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-3 h-1 mx-1 bg-blue-500 rounded-full"></span>
                                <span class="inline-block w-1 h-1 bg-blue-500 rounded-full"></span>
                            </div>
                        </div>
                    </section>
                    @livewire('users')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>