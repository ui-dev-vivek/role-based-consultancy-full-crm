<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') | Partner Portal</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Flatpickr -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
    @yield('head')
    @livewireStyles
</head>

<body class="h-full overflow-hidden">
    <div class="flex h-screen overflow-hidden bg-slate-50">
        <!-- Sidebar -->
        <aside class="hidden lg:flex lg:flex-shrink-0">
            <div class="flex flex-col w-64 pt-5 pb-4 overflow-y-auto bg-white border-r border-slate-200">
                <div class="flex items-center flex-shrink-0 px-6 mb-8 items-baseline">
                    <div class="flex items-center justify-center">
                        <i class="fas fa-ad text-black"></i>
                    </div>
                    <span
                        class="ml-3 text-xl font-bold bg-clip-text text-black ">{{ env('APP_NAME', 'Indoeuropeans') }}</span>
                </div>

                <nav class="flex-1 px-3 space-y-1">
                    <a href="/dashboard"
                        class="flex items-center px-3 py-2 text-sm font-medium {{ request()->is('dashboard') ? 'text-primary-700 bg-primary-50' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900' }} rounded-xl transition-all duration-200">
                        <i
                            class="fas fa-home-alt w-5 h-5 mr-3 {{ request()->is('dashboard') ? 'text-primary-600' : 'text-slate-400 group-hover:text-slate-500' }} flex items-center justify-center"></i>
                        Dashboard
                    </a>

                    <a href="/dashboard/planner"
                        class="flex items-center px-3 py-2 text-sm font-medium {{ request()->is('dashboard/planner') ? 'text-primary-700 bg-primary-50' : 'text-slate-600 hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group' }} rounded-xl">
                        <i
                            class="fas fa-calendar-alt w-5 h-5 mr-3 {{ request()->is('dashboard/planner') ? 'text-primary-600' : 'text-slate-400 group-hover:text-slate-500' }} flex items-center justify-center"></i>
                        Planner
                    </a>

                    @if (auth()->user()->user_type === 'core')
                        <div class="pt-4 pb-2">
                            <p class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">Admin</p>
                        </div>

                        <a href="{{ route('admin.users.index') }}"
                            class="flex items-center px-3 py-2 text-sm font-medium text-slate-600 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group">
                            <i
                                class="fas fa-users w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500 flex items-center justify-center"></i>
                            Users
                        </a>
                        {{-- @permission('can_view_roles') --}}
                        <a href="{{ route('admin.roles.index') }}"
                            class="flex items-center px-3 py-2 text-sm font-medium text-slate-600 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group">
                            <i
                                class="fas fa-user-shield w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500 flex items-center justify-center"></i>
                            Roles
                        </a>
                        {{-- @endpermission --}}

                        <a href="{{ route('admin.permissions.index') }}"
                            class="flex items-center px-3 py-2 text-sm font-medium text-slate-600 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group">
                            <i
                                class="fas fa-key w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500 flex items-center justify-center"></i>
                            Permissions
                        </a>
                    @endif
                    @anyPermission('can_view_partner')
                        <a href="{{ route('admin.partners.index') }}"
                            class="flex items-center px-3 py-2 text-sm font-medium text-slate-600 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group">
                            <i
                                class="fas fa-handshake w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500 flex items-center justify-center"></i>
                            Partners
                        </a>
                    @endanyPermission
                    @if (auth()->user()->user_type === 'core')
                        <div class="pt-4 pb-2">
                            <p class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">Updates</p>
                        </div>
                        <a href="{{ route('admin.language-locations.index') }}"
                            class="flex items-center px-3 py-2 text-sm font-medium text-slate-600 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group">
                            <i
                                class="fas fa-language w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500 flex items-center justify-center"></i>
                            Languages / Locations
                        </a>
                    @endif
                    <div class="pt-4 pb-2">
                        <p class="px-3 text-xs font-semibold text-slate-400 uppercase tracking-wider">General</p>
                    </div>

                    <a href="#"
                        class="flex items-center px-3 py-2 text-sm font-medium text-slate-600 rounded-xl hover:bg-slate-100 hover:text-slate-900 transition-all duration-200 group">
                        <i
                            class="fas fa-cog w-5 h-5 mr-3 text-slate-400 group-hover:text-slate-500 flex items-center justify-center"></i>
                        Settings
                    </a>
                </nav>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <!-- Top Navigation -->
            <header class="relative z-10 flex flex-shrink-0 h-16 bg-white border-b border-slate-200">
                <div class="flex justify-between flex-1 px-4 lg:px-8">
                    <div class="flex flex-1">
                        <form class="flex w-full md:ml-0" action="#" method="GET">
                            <label for="search-field" class="sr-only">Search</label>
                            <div class="relative w-full text-slate-400 focus-within:text-slate-600">
                                <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                                    <i class="fas fa-search w-5 h-5 flex items-center justify-center"></i>
                                </div>
                                <input id="search-field"
                                    class="block w-full h-full py-2 pl-8 pr-3 text-slate-900 placeholder-slate-500 border-transparent focus:outline-none focus:placeholder-slate-400 focus:ring-0 focus:border-transparent sm:text-sm"
                                    placeholder="Search..." type="search">
                            </div>
                        </form>
                    </div>

                    <div class="flex items-center px-4">
                        <div data-component="HeroButton" data-props='{"label": "HeroUI Active", "size": "sm"}'></div>
                    </div>

                    <div class="flex items-center ml-4 md:ml-6">
                        @if (auth()->user()->user_type === 'core')
                            <x-ui.notification-bell :notifications="auth()->user()->notifications()->latest()->take(10)->get()" :unreadCount="auth()->user()->unreadNotifications()->count()" />
                        @endif

                        <div class="relative ml-3">
                            <div class="flex items-center">
                                <button type="button"
                                    class="flex items-center max-w-xs px-2 py-1 space-x-3 text-sm rounded-lg focus:outline-none hover:bg-slate-50 transition-colors"
                                    id="user-menu-button"
                                    onclick="document.getElementById('user-dropdown').classList.toggle('hidden')">
                                    <img class="w-8 h-8 rounded-full border-2 border-primary-100"
                                        src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->email) }}&background=2563eb&color=fff"
                                        alt="">
                                    <span
                                        class="hidden md:block text-slate-700 font-medium">{{ auth()->user()->email }}</span>
                                    <i class="hidden md:block fas fa-chevron-down w-4 h-4 text-slate-400"></i>
                                </button>
                            </div>
                            <!-- Dropdown -->
                            <div id="user-dropdown"
                                class="hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-xl bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                <div class="px-4 py-2 border-b border-slate-100">
                                    <p class="text-xs text-slate-500">Signed in as</p>
                                    <p class="text-sm font-medium text-slate-900 truncate">{{ auth()->user()->email }}
                                    </p>
                                    <p class="text-xs text-primary-600 font-medium mt-1">
                                        {{ ucfirst(auth()->user()->user_type) }}</p>
                                </div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-left px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 transition-colors">
                                        Sign out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Scrollable Content -->
            <main class="relative flex-1 overflow-y-auto focus:outline-none bg-slate-50/50">
                <div class="py-6 lg:py-8 px-4 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>
    @livewireScripts
    <script>
        // Listen for Livewire notify events and show a small toast.
        // Works with `$this->dispatch('notify', variant: 'success', message: '...')`
        window.addEventListener('notify', function(e) {
            const detail = e.detail || {};
            const variant = detail.variant || 'info';
            const message = detail.message || '';

            // Ensure container
            let container = document.getElementById('livewire-toast-container');
            if (!container) {
                container = document.createElement('div');
                container.id = 'livewire-toast-container';
                container.className = 'fixed right-4 top-4 z-50 space-y-2';
                document.body.appendChild(container);
            }

            const toast = document.createElement('div');
            toast.className = 'max-w-sm w-full px-4 py-2 rounded-lg shadow-md text-sm text-white';
            // Basic variant colors
            if (variant === 'success') {
                toast.classList.add('bg-green-600');
            } else if (variant === 'error' || variant === 'danger') {
                toast.classList.add('bg-red-600');
            } else if (variant === 'warning') {
                toast.classList.add('bg-yellow-600', 'text-black');
            } else {
                toast.classList.add('bg-slate-700');
            }

            toast.textContent = message;
            container.appendChild(toast);

            // Auto remove after 4s with fade
            toast.style.opacity = '0';
            toast.style.transition = 'opacity 150ms ease-in-out, transform 150ms ease-in-out';
            requestAnimationFrame(() => {
                toast.style.opacity = '1';
                toast.style.transform = 'translateY(0)';
            });

            setTimeout(() => {
                toast.style.opacity = '0';
                setTimeout(() => toast.remove(), 200);
            }, 4000);
        });
    </script>
    @yield('scripts')
</body>

</html>
