@props([
    'title' => 'Find Your Perfect',
    'highlightText' => 'College & Course',
    'description' => 'Expert guidance for BBA, BCA, B.Tech, MBA & more — with guaranteed placement support.',
    'badge' => 'Admissions Open 2026-27',
    'breadcrumbText' => 'Admissions',
    'primaryBtnText' => 'Apply Now',
    'primaryBtnUrl' => '#apply',
    'primaryBtnOnclick' => '',
    'secondaryBtnText' => 'Chat with Us',
    'secondaryBtnUrl' => 'https://wa.me/' . env('WA_NUMBER'),
    'height' => '350px',
    'stats' => [
        ['icon' => 'fas fa-university', 'color' => 'violet-500', 'text' => '100+ Partner Colleges'],
        ['icon' => 'fas fa-chart-line', 'color' => 'emerald-500', 'text' => '100% Placement Rate'],
        ['icon' => 'fas fa-compass', 'color' => 'cyan-500', 'text' => 'Free Counseling'],
        ['icon' => 'fas fa-users', 'color' => 'indigo-500', 'text' => '5,000+ Students Guided'],
    ],
])

{{-- Reusable Hero Component --}}
<div class="relative w-full overflow-hidden" style="height: {{ $height }};">
    <style>
        main>.overflow-hidden {
            padding-bottom: 0px;
            padding-top: 100px;
        }

        @keyframes spin-hero {
            from {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes pulse-badge {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.4;
            }
        }
    </style>

    {{-- White background + decoration layer --}}
    <div class="absolute inset-0 ">

        {{-- Soft color orbs --}}
        <div class="absolute -top-16 -left-16 w-72 h-72 rounded-full pointer-events-none"
            style="background: rgba(124,58,237,0.08); filter: blur(80px);"></div>
        <div class="absolute -bottom-20 right-10 w-80 h-80 rounded-full pointer-events-none"
            style="background: rgba(99,102,241,0.07); filter: blur(90px);"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-40 rounded-full pointer-events-none"
            style="background: rgba(6,182,212,0.05); filter: blur(70px);"></div>

        {{-- Subtle grid overlay --}}
        <div class="absolute inset-0 pointer-events-none"
            style="opacity: 0.035;
            background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHBhdHRlcm4gaWQ9ImdyaWQiIHdpZHRoPSI0MCIgaGVpZ2h0PSI0MCIgcGF0dGVyblVuaXRzPSJ1c2VyU3BhY2VPblVzZSI+PHBhdGggZD0iTSAwIDEwIEwgNDAgMTAgTSAxMCAwIEwgMTAgNDAiIGZpbGw9Im5vbmUiIHN0cm9rZT0iYmxhY2siIHN0cm9rZS13aWR0aD0iMSIvPjwvcGF0dGVybj48L2RlZnM+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0idXJsKCNncmlkKSIvPjwvc3ZnPg==');">
        </div>

        {{-- Decorative dashed orbit ring --}}
        <div class="absolute top-1/2 left-1/2 w-[220px] h-[220px] rounded-full border border-dashed pointer-events-none"
            style="border-color: rgba(124,58,237,0.12); animation: spin-hero 40s linear infinite;"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10 h-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-center">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-1.5 text-[11px] font-semibold mb-4 tracking-widest uppercase"
            style="color: rgba(0,0,0,0.35);">
            <a href="/" class="hover:text-violet-600 transition-colors" style="color: rgba(0,0,0,0.35);">Home</a>
            <i class="fas fa-chevron-right text-[8px]"></i>
            <span style="color: #7c3aed;">{{ $breadcrumbText }}</span>
        </nav>

        {{-- Badge --}}
        <div class="inline-flex items-center gap-2 mb-4 w-max">
            <span
                class="flex items-center gap-1.5 px-3.5 py-1 rounded-full text-[11px] font-bold tracking-widest uppercase"
                style="background: rgba(124,58,237,0.08); border: 0.5px solid rgba(124,58,237,0.25); color: #6d28d9;">
                <span class="w-1.5 h-1.5 rounded-full"
                    style="background: #7c3aed; animation: pulse-badge 1.8s ease-in-out infinite;"></span>
                {{ $badge }}
            </span>
        </div>

        {{-- Headline + CTAs --}}
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-6">
            <div>
                <h1 class="text-3xl sm:text-5xl font-black leading-tight tracking-tight" style="color: #0f0f0f;">
                    {{ $title }}
                    <span
                        style="background: linear-gradient(90deg, #7c3aed, #0891b2, #4f46e5);
                                 -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                                 background-clip: text;">
                        {{ $highlightText }}
                    </span>
                </h1>
                <p class="mt-2 text-sm sm:text-base font-medium max-w-xl" style="color: rgba(0,0,0,0.5);">
                    {{ $description }}
                </p>
            </div>

            {{-- CTAs --}}
            <div class="flex items-center gap-3 shrink-0">
                @if ($primaryBtnOnclick)
                    <button onclick="{{ $primaryBtnOnclick }}"
                        class="group inline-flex items-center gap-2 px-5 py-2.5 font-extrabold text-sm rounded-xl text-white transition-all duration-300 hover:scale-105"
                        style="background: #7c3aed; box-shadow: 0 4px 20px rgba(124,58,237,0.25);">
                        {{ $primaryBtnText }}
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </button>
                @else
                    <a href="{{ $primaryBtnUrl }}"
                        class="group inline-flex items-center gap-2 px-5 py-2.5 font-extrabold text-sm rounded-xl text-white transition-all duration-300 hover:scale-105"
                        style="background: #7c3aed; box-shadow: 0 4px 20px rgba(124,58,237,0.25);">
                        {{ $primaryBtnText }}
                        <i class="fas fa-arrow-right text-xs group-hover:translate-x-1 transition-transform"></i>
                    </a>
                @endif

                <a href="{{ $secondaryBtnUrl }}" target="_blank"
                    class="group inline-flex items-center gap-2 px-5 py-2.5 font-bold text-sm rounded-xl transition-all duration-300 hover:scale-105"
                    style="background: #fff; border: 0.5px solid rgba(0,0,0,0.15); color: #1a1a1a;
                           box-shadow: 0 1px 4px rgba(0,0,0,0.06);">
                    <i class="fab fa-whatsapp text-base" style="color: #25D366;"></i>
                    {{ $secondaryBtnText }}
                </a>
            </div>
        </div>

        {{-- Stats strip --}}
        <div class="mt-6 flex items-center gap-0 flex-wrap"
            style="border-top: 0.5px solid rgba(0,0,0,0.08); padding-top: 20px;">
            @foreach ($stats as $index => $stat)
                @if ($index > 0)
                    <div class="h-3 w-px hidden sm:block mx-6" style="background: rgba(0,0,0,0.1);"></div>
                @endif
                <div class="flex items-center gap-2 text-xs font-semibold" style="color: rgba(0,0,0,0.5);">
                    <i class="{{ $stat['icon'] }} text-{{ $stat['color'] }}"></i>
                    <span>{{ $stat['text'] }}</span>
                </div>
            @endforeach
        </div>

    </div>
</div>
