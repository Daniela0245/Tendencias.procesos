<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between h-16 items-center">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
    <a href="{{ route('dashboard') }}">
        <img src="{{ asset('images/ICESI_Logo.jpg') }}" class="block h-9" alt="ICESI Logo">
    </a>
</div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
            <x-nav-link :href="route('estudiantes.index')" :active="request()->routeIs('estudiantes.index')">
                {{ __('Estudiantes') }}
            </x-nav-link>
            <x-nav-link :href="route('profesores.index')" :active="request()->routeIs('profesores.index')">
                {{ __('Profesores') }}
            </x-nav-link>
            <x-nav-link :href="route('cursos.index')" :active="request()->routeIs('cursos.index')">
                {{ __('Cursos') }}
            </x-nav-link>
            <x-nav-link :href="route('inscripciones.index')" :active="request()->routeIs('inscripciones.index')">
                {{ __('Inscripciones') }}
            </x-nav-link>
            <x-nav-link :href="route('pagos.index')" :active="request()->routeIs('pagos.index')">
                {{ __('Pagos') }}
            </x-nav-link>
            <x-nav-link :href="route('trabajos.index')" :active="request()->routeIs('trabajos.index')">
                {{ __('Trabajos') }}
            </x-nav-link>
            <x-nav-link :href="route('entregas.index')" :active="request()->routeIs('entregas.index')">
                {{ __('Entregas') }}
            </x-nav-link>
            <x-nav-link :href="route('calificaciones.index')" :active="request()->routeIs('calificaciones.index')">
                {{ __('Calificaciones') }}
            </x-nav-link>
        </div>

        <!-- Hamburger -->
        <div class="-mr-2 flex items-center sm:hidden">
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
