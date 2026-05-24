<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/main-style.css') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/logos/icon.png') }}">

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    @else
    @endif

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @yield('head')
</head>

<body class="bg-slate-50 dark:bg-slate-950 text-slate-900 font-sans selection:bg-primary-500 selection:text-white">
    <!-- Navbar -->
    @php
        $navItems = [
            [
                'title' => 'Services',
                'icon' => 'fas fa-university',
                'dropdown' => [
                    ['title' => 'Admissions', 'url' => '/admissions'],
                    ['title' => 'Training & Placements', 'url' => '/training-and-placements'],
                    ['title' => 'Research Support', 'url' => '/research'],
                    ['title' => 'IP & Legal Services', 'url' => '/intellectual-property'],
                ],
            ],
            [
                'title' => 'Admissions',
                'icon' => 'fas fa-university',
                'url' => '/admissions',
                'lable' => 'Choose the Right College & Career Path',
                'text' =>
                    'Confused about courses, colleges, or entrance exams? Get expert guidance for Technical, Management, and Professional Courses/programs.',
                'cta' => 'View More',
            ],

            [
                'title' => 'Training & Placements',
                'icon' => 'fas fa-briefcase',
                'url' => '/training-and-placements',
                'lable' => 'Internships, Training & PPO Support',
                'cta' => 'Explore Training',
                'dropdown' => [['title' => 'Free Courses', 'url' => '/training-placement/free-courses']],
            ],

            [
                'title' => 'Research Support',
                'icon' => 'fas fa-microscope',
                'url' => '/research',
                'lable' => 'Professional Support for Research & Publications',
                'text' =>
                    'Guidance for thesis writing, dissertations, journal publications, research formatting, white papers, and academic documentation.',
                'cta' => 'Explore Research',
                'dropdown' => [
                    [
                        'title' => 'Conference Paper Support',
                        'url' => '/research#conference-papers',
                    ],
                    [
                        'title' => 'Journal Publication Guidance',
                        'url' => '/research#journal-papers',
                    ],
                    [
                        'title' => 'Dissertation Assistance',
                        'url' => '/research#dissertations',
                    ],
                    [
                        'title' => 'Thesis Writing & Formatting',
                        'url' => '/research#thesis',
                    ],
                    [
                        'title' => 'Research Data Analysis',
                        'url' => '/research#data-analysis',
                    ],
                    [
                        'title' => 'Others Academic Supports',
                        'url' => '/research#academic',
                    ],
                ],
            ],

            [
                'title' => 'IP & Legal',
                'icon' => 'fas fa-balance-scale',
                'url' => '/intellectual-property',
                'lable' => 'Protect Your Ideas, Brand & Innovation',
                'text' =>
                    'Trademark registration, patents, copyrights, MSME registration, startup documentation, and legal consultancy services.',
                'cta' => 'View Services',
                'dropdown' => [
                    ['title' => 'Design Patents', 'url' => '/intellectual-property#design-patents'],
                    ['title' => 'Utility Patents', 'url' => '/intellectual-property#utility-patents'],
                    ['title' => 'Copyrights', 'url' => '/intellectual-property#copyrights'],
                    ['title' => 'Trademark', 'url' => '/intellectual-property#trademark'],
                    ['title' => 'MSME/ ISO Registration', 'url' => '/intellectual-property#msme-registration'],
                ],
            ],

            [
                'title' => 'About Us',
                'icon' => 'fas fa-info-circle',
                'url' => '/about-us',
            ],

            [
                'title' => 'Contact Us',
                'icon' => 'fas fa-envelope',
                'url' => '/contact-us',
            ],
        ];
    @endphp
    <nav x-data="{
        mobileMenuOpen: false,
        scrolled: false,
        userDropdownOpen: false
    }" @scroll.window="scrolled = (window.pageYOffset > 20)"
        @click.away="userDropdownOpen = false; mobileMenuOpen = false"
        :class="{
            'bg-white/95 dark:bg-slate-900/95 backdrop-blur-xl border-b border-slate-200/50 dark:border-slate-800/50 shadow-[0_4px_20px_-10px_rgba(0,0,0,0.1)] py-0': scrolled,
            'bg-transparent py-2': !scrolled
        }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="w-full px-4 sm:px-6 lg:px-8 xl:px-12">
            <div class="flex justify-between items-center transition-all duration-300"
                :class="scrolled ? 'h-16' : 'h-20'">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-3 group ">
                    <div
                        class="flex items-center justify-center w-11 h-11 rounded-2xl bg-green-600 dark:bg-white text-white dark:text-slate-900 shadow-xl shadow-slate-200/50 dark:shadow-black/20 group-hover:rotate-6 ">
                        <i class="fas fa-graduation-cap text-xl"></i>
                    </div>
                    <span class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                        {{ env('APP_NAME', 'Acad Next Solutions') }}
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-2">
                    @foreach ($navItems as $item)
                        @if (isset($item['dropdown']) || !empty($item['lable']))
                            <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false"
                                class="relative group py-2">
                                <button
                                    class="group/btn flex items-center gap-1.5 px-3 py-2 text-[15px] font-semibold text-slate-700 dark:text-slate-200 hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-300 relative">
                                    {{ $item['title'] }}
                                    <i class="fas fa-chevron-down text-[10px] text-slate-400 group-hover/btn:text-primary-500 transition-transform duration-300"
                                        :class="{ 'rotate-180': open }"></i>
                                    <span
                                        class="absolute bottom-1 left-3 right-3 h-[2px] rounded-full bg-primary-600 dark:bg-primary-500 scale-x-0 group-hover/btn:scale-x-100 transition-transform duration-300 origin-left"></span>
                                </button>
                                <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 translate-y-3"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-2"
                                    class="absolute top-full mt-2 {{ !empty($item['lable']) ? (isset($item['dropdown']) ? 'left-1/2 -translate-x-1/2 w-[650px] flex overflow-hidden rounded-3xl' : 'left-0 w-[320px] flex overflow-hidden rounded-3xl') : 'left-0 w-[260px] py-3 rounded-2xl' }} bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 shadow-2xl z-50 ring-1 ring-black/5 dark:ring-white/10">

                                    @if (!empty($item['lable']))
                                        <!-- Mega Menu Design -->
                                        <div
                                            class="{{ isset($item['dropdown']) ? 'w-5/12 border-r border-slate-100 dark:border-slate-800' : 'w-full' }} bg-slate-50 dark:bg-slate-800/50 p-6 flex flex-col justify-between">
                                            <div class="flex items-center  gap-2">
                                                <div
                                                    class="w-10 h-10 rounded-xl bg-primary-100 text-primary-600 flex items-center justify-center mb-4 shadow-sm border border-primary-200">
                                                    <i class="{{ $item['icon'] ?? 'fas fa-star' }} text-lg"></i>
                                                </div>
                                                <h3 class="text-base font-bold text-slate-900 dark:text-white ">
                                                    {{ $item['lable'] }}</h3>
                                            </div>
                                            <div class="text-center">
                                                <p class="text-sm text-slate-500 dark:text-slate-400 leading-relaxed">
                                                    {{ $item['text'] ?? '' }}</p>
                                            </div>
                                            @if (!empty($item['cta']))
                                                <div class="flex mt-6 justify-center">
                                                    <a href="{{ $item['url'] ?? '#' }}"
                                                        class="w-max inline-flex items-center gap-2 text-sm font-bold text-white bg-primary-600 hover:bg-primary-700 px-5 py-2.5 rounded-xl shadow-md transition-all group/cta">
                                                        {{ $item['cta'] }}
                                                        <i
                                                            class="fas fa-arrow-right text-xs group-hover/cta:translate-x-1 transition-transform"></i>
                                                    </a>
                                                </div>
                                            @endif
                                        </div>
                                        @if (isset($item['dropdown']))
                                            <div class="w-7/12 p-4 flex flex-col gap-1">
                                                @foreach ($item['dropdown'] as $subItem)
                                                    <a href="{{ $subItem['url'] }}"
                                                        class="group/link flex items-center justify-between p-1 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-300">
                                                        <div class="flex items-center gap-1">
                                                            <div
                                                                class="w-6 h-6 rounded-lg bg-white dark:bg-slate-800 flex items-center justify-center group-hover/link:border-primary-200 dark:group-hover/link:border-primary-800 group-hover/link:bg-primary-50 dark:group-hover/link:bg-primary-900/20 transition-all duration-300">
                                                                <i
                                                                    class="fas fa-arrow-right text-[10px] text-slate-400 group-hover/link:text-primary-500 group-hover/link:-rotate-45 transition-all duration-300"></i>
                                                            </div>
                                                            <span
                                                                class="text-[16px] font-bold text-slate-700 dark:text-slate-200 group-hover/link:text-primary-600 dark:group-hover/link:text-primary-400 transition-colors">{{ $subItem['title'] }}</span>
                                                        </div>
                                                    </a>
                                                @endforeach
                                            </div>
                                        @endif
                                    @else
                                        <!-- Normal Menu Design -->
                                        <div class="w-full p-1 flex flex-col gap-0.5">
                                            @foreach ($item['dropdown'] as $subItem)
                                                <a href="{{ $subItem['url'] }}"
                                                    class="group/link flex items-center justify-between px-3 py-2 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-300">
                                                    <div class="flex items-center gap-2">
                                                        <div
                                                            class="w-6 h-6 rounded-md bg-slate-50 dark:bg-slate-800 flex items-center justify-center group-hover/link:bg-primary-100 dark:group-hover/link:bg-primary-900/30 transition-colors">
                                                            <i
                                                                class="fas fa-chevron-right text-[8px] text-slate-400 group-hover/link:text-primary-500 transition-colors"></i>
                                                        </div>
                                                        <span
                                                            class="text-[13px] font-semibold text-slate-700 dark:text-slate-200 group-hover/link:text-primary-600 dark:group-hover/link:text-primary-400 transition-colors">{{ $subItem['title'] }}
                                                        </span>
                                                    </div>
                                                </a>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @else
                            <div class="py-2">
                                <a href="{{ $item['url'] }}"
                                    class="group/btn relative inline-block px-3 py-2 text-[15px] font-semibold text-slate-700 dark:text-slate-200 hover:text-primary-600 dark:hover:text-primary-400 transition-colors duration-300">
                                    {{ $item['title'] }}
                                    <span
                                        class="absolute bottom-1 left-3 right-3 h-[2px] rounded-full bg-primary-600 dark:bg-primary-500 scale-x-0 group-hover/btn:scale-x-100 transition-transform duration-300 origin-left"></span>
                                </a>
                            </div>
                        @endif
                    @endforeach

                    <div class="flex items-center ml-4 pl-4 border-l border-slate-200 dark:border-slate-800 gap-3">
                        <!-- Search Icon -->
                        <button
                            class="w-9 h-9 flex items-center justify-center rounded-full text-slate-500 hover:text-primary-600 hover:bg-primary-50 dark:hover:bg-primary-900/20 transition-all duration-300">
                            <i class="fas fa-search text-[15px]"></i>
                        </button>

                        @auth
                            <!-- Notifications -->
                            <x-ui.notification-bell :notifications="auth()->user()->notifications()->latest()->take(5)->get()" :unreadCount="auth()->user()->unreadNotifications()->count()" />

                            <!-- User Dropdown -->
                            <div class="relative ml-2">
                                <button @click="userDropdownOpen = !userDropdownOpen"
                                    class="flex items-center gap-2 p-1.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors">
                                    <img class="w-8 h-8 rounded-lg object-cover ring-2 ring-primary-500/20"
                                        src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->email) }}&background=0f172a&color=fff&bold=true"
                                        alt="{{ auth()->user()->email }}">
                                    <i class="fas fa-chevron-down text-[10px] text-slate-400 transition-transform duration-300"
                                        :class="{ 'rotate-180': userDropdownOpen }"></i>
                                </button>

                                <div x-show="userDropdownOpen" x-cloak x-transition:enter="transition ease-out duration-200"
                                    x-transition:enter-start="opacity-0 scale-95 translate-y-2"
                                    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                                    class="absolute right-0 mt-3 w-56 p-2 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/50 dark:border-slate-800/50 shadow-2xl">
                                    <div class="px-3 py-2 border-b border-slate-100 dark:border-slate-800 mb-1">
                                        <p class="text-xs text-slate-500">Signed in as</p>
                                        <p class="text-sm font-bold text-slate-900 dark:text-white truncate">
                                            {{ auth()->user()->email }}</p>
                                    </div>
                                    <a href="/dashboard"
                                        class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">
                                        <i class="fas fa-chart-pie w-4"></i> Dashboard
                                    </a>
                                    <a href="#"
                                        class="flex items-center gap-2 px-3 py-2 text-sm font-medium text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-xl transition-colors">
                                        <i class="fas fa-user-cog w-4"></i> Profile Settings
                                    </a>
                                    <form method="POST" action="{{ route('filament.admin.auth.logout') }}" class="mt-1">
                                        @csrf
                                        <button type="submit"
                                            class="flex items-center gap-2 w-full px-3 py-2 text-sm font-medium text-red-600 hover:bg-red-50 dark:hover:bg-red-900/10 rounded-xl transition-colors">
                                            <i class="fas fa-sign-out-alt w-4"></i> Sign Out
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <x-ui.button href="/admin" size="sm" variant="dark" icon="fas fa-sign-in-alt"
                                className="rounded-xl shadow-lg shadow-slate-900/20">
                                Sign In
                            </x-ui.button>
                        @endauth
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden flex items-center gap-2">
                    @auth
                        <x-ui.notification-bell :notifications="auth()->user()->notifications()->latest()->take(5)->get()" :unreadCount="auth()->user()->unreadNotifications()->count()" />
                    @endauth
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="p-2 text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-xl">
                        <i class="fas" :class="mobileMenuOpen ? 'fa-times' : 'fa-bars-staggered'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-40 lg:hidden">
        </div>

        <!-- Mobile Menu Drawer -->
        <div x-show="mobileMenuOpen" x-cloak @click.away="mobileMenuOpen = false"
            x-transition:enter="transition ease-in-out duration-300 transform"
            x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in-out duration-300 transform"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
            class="fixed inset-y-0 right-0 z-50 w-full h-[100dvh] bg-white dark:bg-slate-900 shadow-2xl overflow-hidden lg:hidden flex flex-col">

            <!-- Drawer Header -->
            <div
                class="px-6 py-5 flex items-center justify-between border-b border-slate-100 dark:border-slate-800 bg-white/95 dark:bg-slate-900/95 backdrop-blur-md shrink-0">
                <span class="text-xl font-extrabold text-slate-900 dark:text-white tracking-tight">Menu</span>
                <button @click="mobileMenuOpen = false"
                    class="w-10 h-10 flex items-center justify-center text-slate-500 hover:text-slate-800 dark:text-slate-400 dark:hover:text-white bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 rounded-full transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Drawer Links -->
            <div class="px-4 py-6 space-y-2 flex-1 overflow-y-auto overscroll-contain">
                @foreach ($navItems as $item)
                    @if (isset($item['dropdown']) || !empty($item['lable']))
                        <div x-data="{ open: false }" class="space-y-1">
                            <button @click="open = !open"
                                class="flex items-center justify-between w-full px-4 py-3.5 text-[15px] font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-2xl transition-colors">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-primary-500">
                                        <i class="{{ $item['icon'] }}"></i>
                                    </div>
                                    <span>{{ $item['title'] }}</span>
                                </div>
                                <i class="fas fa-chevron-down text-sm text-slate-400 transition-transform duration-300"
                                    :class="{ 'rotate-180': open }"></i>
                            </button>
                            <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 -translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="px-4 space-y-1 pb-2 ml-4 pl-4 border-l-2 border-slate-100 dark:border-slate-800">

                                @if (!empty($item['lable']))
                                    <div
                                        class="mb-4 mt-2 p-4 bg-slate-50 dark:bg-slate-800/50 rounded-2xl border border-slate-100 dark:border-slate-800">
                                        <h4 class="text-sm font-bold text-slate-900 dark:text-white mb-1">
                                            {{ $item['lable'] }}</h4>
                                        <p class="text-xs text-slate-500 dark:text-slate-400 mb-3">
                                            {{ $item['text'] ?? '' }}</p>
                                        @if (!empty($item['cta']))
                                            <a href="{{ $item['url'] ?? '#' }}"
                                                class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold text-white bg-primary-600 hover:bg-primary-700 transition-colors rounded-lg shadow-sm">
                                                {{ $item['cta'] }}
                                                <i class="fas fa-arrow-right text-[10px]"></i>
                                            </a>
                                        @endif
                                    </div>
                                @endif

                                @if (isset($item['dropdown']))
                                    <div class="flex flex-col gap-1 mt-1">
                                        @foreach ($item['dropdown'] as $subItem)
                                            <a href="{{ $subItem['url'] }}"
                                                class="group/link flex items-center justify-between p-3 rounded-xl hover:bg-white dark:hover:bg-slate-800 transition-all duration-300 shadow-sm border border-transparent hover:border-slate-100 dark:hover:border-slate-700">
                                                <span
                                                    class="text-[14px] font-bold text-slate-600 dark:text-slate-300 group-hover/link:text-primary-600 dark:group-hover/link:text-primary-400 transition-colors">{{ $subItem['title'] }}</span>
                                                <i
                                                    class="fas fa-arrow-right text-[10px] text-slate-300 group-hover/link:text-primary-500 group-hover/link:-rotate-45 transition-all"></i>
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    @else
                        <a href="{{ $item['url'] }}"
                            class="flex items-center gap-3 px-4 py-3.5 text-[15px] font-bold text-slate-700 dark:text-slate-200 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-2xl transition-colors">
                            <div
                                class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-100 dark:bg-slate-800 text-primary-500">
                                <i class="{{ $item['icon'] }}"></i>
                            </div>
                            {{ $item['title'] }}
                        </a>
                    @endif
                @endforeach
            </div>

            <!-- Auth Section -->
            <div class="px-6 py-4 border-t border-slate-100 dark:border-slate-800">
                @auth
                    <div class="grid grid-cols-2 gap-3">
                        <x-ui.button :href="url('/dashboard')" variant="light" size="sm" className="w-full rounded-xl"
                            icon="fas fa-chart-pie">
                            Dashboard
                        </x-ui.button>
                        <form method="POST" action="{{ route('filament.admin.auth.logout') }}">
                            @csrf
                            <x-ui.button type="submit" variant="danger" outline="true" size="sm"
                                className="w-full rounded-xl" icon="fas fa-sign-out-alt">
                                Logout
                            </x-ui.button>
                        </form>
                    </div>
                @else
                    <x-ui.button href="/admin" size="lg" variant="dark"
                        className="w-full rounded-xl shadow-lg shadow-slate-900/20" icon="fas fa-sign-in-alt">
                        Sign In to Account
                    </x-ui.button>
                @endauth
            </div>

            <!-- Profile & WhatsApp Section -->
            <div class="p-6 bg-slate-50 dark:bg-slate-800/50 mt-auto border-t border-slate-100 dark:border-slate-800">
                <div class="flex items-center gap-4 mb-5">
                    <div class="relative">
                        <img src="https://ui-avatars.com/api/?name=Fate&background=0f172a&color=fff&bold=true"
                            class="w-14 h-14 rounded-full ring-4 ring-white dark:ring-slate-900 shadow-md"
                            alt="Fateh">
                        <span
                            class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 border-2 border-white dark:border-slate-900 rounded-full"></span>
                    </div>
                    <div>
                        <h4 class="text-base font-extrabold text-slate-900 dark:text-white">
                            {{ env('AGENT_NAME', 'Fateh Bahadur Kuwar') }}
                        </h4>
                        <p class="text-sm font-medium text-slate-500 dark:text-slate-400">Available to help</p>
                    </div>
                </div>
                <a href="https://wa.me/{{ env('WA_NUMBER') }}" target="_blank"
                    class="flex items-center justify-center gap-2 w-full px-4 py-3.5 bg-[#25D366] hover:bg-[#1ebd5a] text-white rounded-xl font-bold transition-all duration-300 shadow-lg shadow-[#25D366]/30 hover:shadow-[#25D366]/50 hover:-translate-y-0.5">
                    <i class="fab fa-whatsapp text-xl"></i>
                    Chat on WhatsApp
                </a>
            </div>
        </div>
    </nav>

    <main>
        <div class="relative w-full flex items-center bg-[#f8fafc] dark:bg-[#0b1120] overflow-hidden pt-28 pb-16">

            <!-- Advanced Dynamic Background -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <!-- Glowing Orbs -->
                <div
                    class="absolute -top-[20%] -left-[10%] w-[50%] h-[50%] rounded-full bg-primary-400/20 dark:bg-primary-600/20 blur-[120px] mix-blend-multiply dark:mix-blend-screen animate-blob">
                </div>
                <div
                    class="absolute top-[20%] -right-[10%] w-[40%] h-[60%] rounded-full bg-indigo-400/20 dark:bg-indigo-600/20 blur-[120px] mix-blend-multiply dark:mix-blend-screen animate-blob animation-delay-2000">
                </div>
                <div
                    class="absolute -bottom-[20%] left-[20%] w-[60%] h-[50%] rounded-full bg-cyan-400/20 dark:bg-cyan-600/20 blur-[120px] mix-blend-multiply dark:mix-blend-screen animate-blob animation-delay-4000">
                </div>

                <!-- Premium Grid Pattern Overlay -->
                <div
                    class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgwLDAsMCwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] dark:bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0icmdiYSgyNTUsMjU1LDI1NSwwLjAzKSIgc3Ryb2tlLXdpZHRoPSIxIi8+PC9wYXR0ZXJuPjwvZGVmcz48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSJ1cmwoI2dyaWQpIi8+PC9zdmc+')] [mask-image:radial-gradient(ellipse_at_center,black_50%,transparent_100%)]">
                </div>
            </div>
            @yield('page-hero')
        </div>

        {{ $slot }}

    </main>
    <footer class="bg-slate-950 text-slate-100">
        <div class="container mx-auto px-4 py-12">
            <div class="grid gap-10 lg:grid-cols-3">
                <div class="space-y-4">
                    <a href="/" class="inline-flex items-center gap-3">
                        <div
                            class="flex items-center justify-center w-11 h-11 rounded-2xl bg-primary-600 text-white shadow-lg">
                            <i class="fas fa-ad text-lg"></i>
                        </div>
                        <span class="text-2xl font-extrabold tracking-tight">AdacNext</span>
                    </a>
                    <p class="max-w-md text-sm text-slate-400 leading-relaxed">
                        Empowering students, innovators, and startups with admissions guidance, research support,
                        internships, and intellectual property services.
                    </p>
                    <div class="flex items-center gap-3">
                        <span
                            class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-slate-800 text-primary-400">
                            <i class="fas fa-phone-alt"></i>
                        </span>
                        <div>
                            <p class="text-sm text-slate-400">Need help now?</p>
                            <a href="https://wa.me/{{ env('WA_NUMBER') }}?text=Hello%20AdacNext%2C%20I%20would%20like%20to%20chat%20about%20your%20services."
                                target="_blank" rel="noopener"
                                class="text-sm font-semibold text-white hover:text-primary-300">{{ env('WA_NUMBER') }}</a>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 lg:col-span-2">
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-400 mb-4">Explore</h3>
                        <ul class="space-y-3 text-sm text-slate-300">
                            <li><a href="/admissions" class="hover:text-white transition-colors">Admissions</a></li>
                            <li><a href="/training-and-placements" class="hover:text-white transition-colors">Training
                                    & Placements</a></li>
                            <li><a href="/intellectual-property" class="hover:text-white transition-colors">IP &
                                    Legal</a></li>
                            <li><a href="/research" class="hover:text-white transition-colors">Research & Academic</a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-400 mb-4">Company</h3>
                        <ul class="space-y-3 text-sm text-slate-300">
                            <li><a href="/about-us" class="hover:text-white transition-colors">About Us</a></li>
                            <li><a href="/contact-us" class="hover:text-white transition-colors">Contact</a></li>
                            <li><a href="/privacy-policy" class="hover:text-white transition-colors">Privacy
                                    Policy</a></li>
                            <li><a href="/terms-of-service" class="hover:text-white transition-colors">Terms of
                                    Service</a></li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-400 mb-4">Chat with us
                        </h3>
                        <p class="text-sm text-slate-400 mb-4">Get instant support on WhatsApp for admissions,
                            training, and IP services.</p>
                        <a href="https://wa.me/{{ env('WA_NUMBER') }}?text=Hello%20AdacNext%2C%20I%20need%20help%20with%20your%20services"
                            target="_blank" rel="noopener"
                            class="inline-flex items-center justify-center gap-2 rounded-3xl bg-[#25D366] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-[#25D366]/30 transition-all hover:-translate-y-0.5 hover:bg-[#1ebd5a]">
                            <i class="fab fa-whatsapp text-lg"></i>
                            WhatsApp Chat
                        </a>
                    </div>
                </div>
            </div>

            <div
                class="mt-10 border-t border-slate-800 pt-6 flex flex-col gap-4 md:flex-row md:items-center md:justify-between text-sm text-slate-500">
                <p>© {{ date('Y') }} AdacNext. All rights reserved.</p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="/privacy-policy" class="hover:text-white">Privacy Policy</a>
                    <a href="/terms-of-service" class="hover:text-white">Terms of Service</a>
                    <a href="/contact" class="hover:text-white">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

    @yield('script')
</body>

</html>
