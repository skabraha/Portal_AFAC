<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800"
                role="alert">
                <span class="font-medium"></span> {{ session('success') }}
            </div>
        </div>
    @endif
    @if ($modal)
        @include('livewire.edit-user')
    @endif
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
        </svg>
    </div>
    <input type="text" wire:model="search" id="table-search"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Buscar...">
    <button wire:click.prevent="new" type="button"
        class="inline-flex justify-center rounded-md border border-transparent px-4 py-2 bg-sky-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">AÑADIR
        NUEVO</button>
    @if ($usuarios->count())
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>firstname</th>
                    <th>lastname</th>
                    <th>username</th>
                    <th width="150px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->firstname }}</td>
                        <td>{{ $user->lastname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            <button wire:click="edit({{ $user->id }})" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $user->id }})"
                                class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
                {{-- {{ $usuarios->links() }}  --}}
            </tbody>
        </table>
    @else
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No.</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NO HAY REGISTROS</td>
                </tr>
            </tbody>
        </table>
    @endif
</div>
