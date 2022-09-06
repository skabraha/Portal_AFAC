<x-guest-layout>
    <div class="relative">
        <img src="{{ asset('images/img2.jpg') }}" class="static fixed  inset-0 object-cover w-full h-full" alt="" />
        <div class="relative bg-gray-600 bg-opacity-50 inset-0 z-0">
            <div class="relative">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-10 lg:py-18">
                    <div class="flex flex-col items-center justify-between xl:flex-row">
                        <div class="w-full max-w-xl mb-12 xl:mb-0 xl:pr-16 xl:w-7/12">
                            <h1 class="text-gray-800 dark:text-gray-300 md:text-4xl">Bienvenido</h1>
                            <h2
                                class="pt-6 xs:pt-2 max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                                Portal de Autoservicio de los Trabajadores de la <span class="text-blue-900">AFAC</span>
                            </h2>
                            <a href=""
                                class="opacity-80 items-center justify-center flex items-center mb-6 xs:mb-0 text-2xl font-semibold text-gray-900 dark:text-white">
                                <img class="lg:w-52 lg:h-40 w-40 h-30 mr-2" src="{{ asset('images/AFAC1.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                        <div class="w-full max-w-xl xl:px-8 xl:w-5/12 xs:px-2">
                            <div class="bg-white rounded-2xl shadow-2xl p-7 sm:p-10">
                                <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
                                    Ingresar
                                </h3>
                                <x-jet-validation-errors class="mb-4" />
                                @if (session('status'))
                                <div class="mb-4 font-medium text-base text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <form method="POST" action="{{ route('login') }}" class="flex flex-col pt-1 md:pt-1">
                                    @csrf
                                    {{-- <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                        :value="old('email')" required autofocus />
                            </div> --}}
                            {{-- update field login --}}
                            <div class="flex flex-col pt-4" x-data="{ count: 0 }"
                                x-init="count = $refs.countme.value.length">
                                <x-jet-label for="login" class="inline-block mb-1 font-medium text-base"
                                    value="{{ __('Número de empleado') }}" />
                                <x-jet-input id="login"
                                    class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                    type="text" name="username" :value="old('username')" required autofocus />
                            </div>
                            {{-- update field login --}}
                            <div class="flex flex-col pt-4" x-data="{ show: false }">
                                <div class="mb-6">
                                    <x-jet-label for="password" class="text-base" value="{{ __('Contraseña') }}" />
                                    <div class="relative">
                                        <input id="password" :type="show ? 'text' : 'password'"
                                            class="flex-grow w-full h-12 px-4 mb-2 transition duration-200 bg-white border border-gray-300 rounded shadow-sm appearance-none focus:border-deep-purple-accent-400 focus:outline-none focus:shadow-outline"
                                            type="password" id="password" name="password" required
                                            autocomplete="current-password" />
                                        <div
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                                            <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                                :class="{'hidden': !show, 'block':show }"
                                                xmlns="http://www.w3.org/2000/svg" viewbox="0 0 576 512">
                                                <path fill="currentColor"
                                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                                </path>
                                            </svg>
                                            <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                                                :class="{'block': !show, 'hidden':show }"
                                                xmlns="http://www.w3.org/2000/svg" viewbox="0 0 640 512">
                                                <path fill="currentColor"
                                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between items-center mb-6">
                                <div class="form-group form-check">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-base text-gray-600">{{ __('Recuerdame') }}</span>
                                    </label>
                                </div>
                            </div>
                            <x-jet-button
                                class="text-center inline-block px-3 py-2 justify-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                {{ __('Iniciar Sesión') }}
                            </x-jet-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>