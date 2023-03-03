<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Time Tracker - @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <div class="drawer drawer-mobile">
            <input id="drawer" type="checkbox" class="drawer-toggle"/>
            <div class="drawer-content flex flex-col bg-gray-100">
                <div class="navbar bg-base-100 h-16 border-b-2 px-5">
                    <div class="flex-none lg:hidden">
                        <label for="drawer" class="btn btn-square btn-ghost">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 class="inline-block w-5 h-5 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="flex-1 lg:hidden">
                        <a class="btn btn-ghost normal-case text-xl">️🐇⏱️ Time Tracker</a>
                    </div>
                    @yield('breadcrumb')
                    <div class="flex-none gap-2">
                        <div class="dropdown dropdown-end">
                            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                                <div class="w-10 rounded-full">
                                    <img src="{{ asset('images/profile.png') }}" alt="Profile image"/>
                                </div>
                            </label>
                            <ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                                <li>
                                    <a class="justify-between">
                                        Profil
                                    </a>
                                </li>
                                <li><a>Paramètres</a></li>
                                <li><a>Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5">
                    @yield('breadcrumb_mobile')
                    @yield('content')
                </div>
            </div>
            <div class="drawer-side">
                <label for="drawer" class="drawer-overlay"></label>
                <aside class="bg-base-100 shadow-2xl w-80 border-r-2">
                    <div class="hidden flex-row justify-items-center items-center h-16 border-b-2 border-primary lg:flex">
                        <a class="btn btn-ghost normal-case text-2xl m-2">️🐇⏱️ Time Tracker</a>
                        <div class="text-xs text-opacity-50 text-center h-full flex items-center justify-items-center">
                            <span>v0.0.1</span>
                        </div>
                    </div>
                    <ul class="menu p-4 w-80 text-base-content">
                        <li class="py-1">
                            <a class="flex gap-4" href="{{ route('dashboard') }}">
                                <span class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                    </svg>
                                </span>
                                <span class="flex-1 text-sm">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="py-1">
                            <a class="flex gap-4" href="{{ route('clients.index') }}">
                                <span class="flex-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                </span>
                                <span class="flex-1 text-sm">
                                    Clients
                                </span>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
        </div>
        @livewireScripts
    </body>
</html>
