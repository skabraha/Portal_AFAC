{{-- @php
$nav_links = [
[
'name' => 'Dashboard',
'route' => route('dashboard'),
'active' => request()->routeIs('dashboard'),
],
[
'name' => 'Admin',
'route' => route('admin.home'),
'active' => request()->routeIs('admin.home'),
],
[
'name' => 'User',
'route' => route('admin.user.home'),
'active' => request()->routeIs('admin.user.home'),
],
];
@endphp --}}

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 shadow">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    @if (Auth()->user()->can('admin.home'))
                    <a href="{{ route('admin.home') }}">
                        <div class="shrink-0 flex items-center">
                            <img class="w-16" src="{{ asset('images/AFAC1.png') }}" alt="AFAC">
                        </div>
                    </a>
                    @else
                    <a href="{{ route('admin.user.home') }}">
                        <div class="shrink-0 flex items-center">
                            <img class="w-16" src="{{ asset('images/AFAC1.png') }}" alt="AFAC">
                        </div>
                    </a>
                    @endif
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                    @if (Auth()->user()->can('admin.home'))
                    <x-jet-nav-link href="{{ route('admin.home') }}" :active="request()->routeIs('admin.home')">
                        {{ __('Admin') }}
                    </x-jet-nav-link>
                    @else
                    <x-jet-nav-link href="{{ route('admin.user.home') }}"
                        :active="request()->routeIs('admin.user.home')">
                        {{ __('User') }}
                    </x-jet-nav-link>
                    @endif

                    {{-- @if (Auth()->user()->can('admin.home'))
                        @foreach ($nav_links as $nav_link)
                            <x-jet-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
                    {{ $nav_link['name'] }}
                    </x-jet-nav-link>
                    @endforeach
                    @else
                    <x-jet-nav-link href="{{ route('admin.user.home') }}"
                        :active="request()->routeIs('admin.user.home')">
                        {{ __('User') }}
                    </x-jet-nav-link>
                    @endif --}}

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="60">
                        <x-slot name="trigger">
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                    {{ Auth::user()->currentTeam->name }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                    {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                <x-jet-switchable-team :team="$team" />
                                @endforeach
                            </div>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @auth
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover"
                                    src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" />
                            </button>
                            @else
                            <span class="inline-flex rounded-md">
                                <button type="button"
                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}

                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Id empleado: {{ Auth::user()->username }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Cambio de Contraseña') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Salir') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endauth
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">

            @if (Auth()->user()->can('admin.home'))
            <x-jet-nav-link href="{{ route('admin.home') }}" :active="request()->routeIs('admin.home')">
                {{ __('Admin') }}
            </x-jet-nav-link>
            @else
            <x-jet-nav-link href="{{ route('admin.user.home') }}" :active="request()->routeIs('admin.user.home')">
                {{ __('User') }}
            </x-jet-nav-link>
            @endif

            {{-- @if (Auth()->user()->can('admin.home'))
                @foreach ($nav_links as $nav_link)
                    <x-jet-responsive-nav-link href="{{ $nav_link['route'] }}" :active="$nav_link['active']">
            {{ $nav_link['name'] }}
            </x-jet-responsive-nav-link>
            @endforeach
            @else
            <x-jet-nav-link href="{{ route('admin.user.home') }}" :active="request()->routeIs('admin.user.home')">
                {{ __('User') }}
            </x-jet-nav-link>
            @endif --}}
        </div>

        <!-- Responsive Settings Options -->
        @auth

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                <div class="shrink-0 mr-3">
                    <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                        alt="{{ Auth::user()->name }}" />
                </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->firstname }}
                        {{ Auth::user()->lastname }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->username }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                    :active="request()->routeIs('profile.show')">
                    {{ __('Cambio de contraseña') }}
                </x-jet-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}"
                    :active="request()->routeIs('api-tokens.index')">
                    {{ __('API Tokens') }}
                </x-jet-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-jet-responsive-nav-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                        {{ __('Salir') }}
                    </x-jet-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                <div class="border-t border-gray-200"></div>

                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <!-- Team Settings -->
                <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                    :active="request()->routeIs('teams.show')">
                    {{ __('Team Settings') }}
                </x-jet-responsive-nav-link>

                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                <x-jet-responsive-nav-link href="{{ route('teams.create') }}"
                    :active="request()->routeIs('teams.create')">
                    {{ __('Create New Team') }}
                </x-jet-responsive-nav-link>
                @endcan

                <div class="border-t border-gray-200"></div>

                <!-- Team Switcher -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Switch Teams') }}
                </div>

                @foreach (Auth::user()->allTeams() as $team)
                <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                @endforeach
                @endif
            </div>
        </div>
        @else
        <div class="py-1 border-t border-gray-200">
            <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                Login
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                Register
            </x-jet-responsive-nav-link>
        </div>
        @endauth

    </div>
</nav>
<div class="bg-blue-900">
    <div class="max-w-7xl mx-auto py-3 px-3 sm:px-4 lg:px-6">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg" style="background:#0813AF">
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                </span>
                <p class="ml-3 font-medium text-white truncate">
                <p class="text-base text-white"> La plataforma cuenta únicamente con recibos a partir de enero de
                    2021. </p>
                </p>
            </div>
        </div>
    </div>
</div>
{{-- <div class="bg-cover bg-center  h-auto text-white py-14 px-10 object-fill"
    style="background-image: url({{ asset('images/img3.jpg') }})">
    <div class="md:w-1/2">
        <p class="text-3xl font-bold">Portal de Autoservicio de los Trabajadores de la AFAC.</p>
    </div>
</div> --}}
<div class="relative py-6 lg:py-4">
    <img class="z-0 w-full h-full absolute inset-0 object-cover" src="{{ asset('images/banner_portal.jpg') }}"
        alt="bg" />
    <div
        class="z-10 relative container px-6 mx-auto flex flex-col md:flex-row items-start md:items-center justify-between">
        <div>
            <h4 tabindex="0" class="focus:outline-none text-2xl font-bold leading-tight text-white">Portal de Autoservicio de los Trabajadores de la AFAC.</h4>
            <ul class="flex flex-col md:flex-row items-start md:items-center text-gray-300 text-sm mt-3">
                <li class="flex items-center mt-4 md:mt-0">
                    <div class="mr-1">
                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/background_with_sub_text-svg3.svg"
                            alt="date">
                    </div>
                    <span tabindex="0" class="focus:outline-none">Started on 29 Jan 2020</span>
                </li>
            </ul>
        </div>
    </div>
</div>