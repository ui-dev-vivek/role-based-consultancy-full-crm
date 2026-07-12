<x-layouts.main.base>

    <div class="py-16 bg-slate-50 -slate-950 min-h-screen relative overflow-hidden" 
         x-data="{ 
            search: '',
            filterLocation: '',
            filterExperience: 'all',
            roleAccent: '{{ $role === 'expert' ? 'blue' : 'emerald' }}',
            suggestions: {{ $role === 'expert' ? json_encode(['Patent', 'Research', 'Career Coach', 'IPR']) : json_encode(['Mathematics', 'Programming', 'Physics', 'Calculus']) }},
            get count() {
                return document.querySelectorAll('.profile-card-item:not([style*=\'display: none\'])').length;
            }
         }">
        
        <!-- Decorative Ambient Light Orbs -->
        <div class="absolute top-0 left-1/4 w-[400px] h-[400px] bg-blue-500/5 -blue-500/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-10 right-1/4 w-[400px] h-[400px] bg-emerald-500/5 -emerald-500/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Page Header -->
            <div class="text-center mb-12">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full text-[10px] font-extrabold uppercase tracking-widest text-blue-700 dark:text-blue-300 bg-blue-100/50 -blue-900/30 mb-4 border border-blue-200/20 dark:border-blue-800/20 animate-fade-in">
                    Ecosystem Directory
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black tracking-tight text-slate-900 dark:text-white leading-tight">
                    Explore Our <span class="text-transparent bg-clip-text bg-gradient-to-r {{ $role === 'expert' ? 'from-blue-600 to-indigo-500 dark:from-blue-400 dark:to-indigo-450' : 'from-emerald-600 to-teal-500 dark:from-emerald-400 dark:to-teal-450' }}">{{ $role === 'expert' ? 'Experts & Mentors' : 'Teachers & Educators' }}</span>
                </h1>
                <p class="text-slate-600 dark:text-slate-400 mt-3 max-w-xl mx-auto text-sm sm:text-base leading-relaxed font-medium">
                    Connect directly with verified specialists across career counseling, admissions, training, research, and academic protection.
                </p>
            </div>

            @php
                $totalExp = 0;
                $activeCount = $users->count();
                $cities = [];
                foreach($users as $u) {
                    $p = $u->profile;
                    if ($p) {
                        if (is_array($p->professional_details)) {
                            $totalExp += collect($p->professional_details)->sum('years_experience');
                        }
                        if (!empty($p->city)) {
                            $cities[] = $p->city;
                        }
                    }
                }
                $avgExp = $activeCount > 0 ? round($totalExp / $activeCount, 1) : 0;
                $uniqueCities = array_unique(array_filter($cities));
                
                $allLocations = [];
                foreach($users as $user) {
                    if ($user->profile && !empty($user->profile->city)) {
                        $allLocations[strtolower($user->profile->city)] = ucwords(strtolower($user->profile->city));
                    }
                }
                asort($allLocations);
            @endphp

            <!-- Stats Dashboard Banner -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
                <div class="bg-white/70 -slate-900/70 backdrop-blur-md p-6 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex items-center gap-4 relative overflow-hidden group hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl {{ $role === 'expert' ? 'bg-blue-100/60 -blue-900/30 text-blue-600 dark:text-blue-400' : 'bg-emerald-100/60 -emerald-900/30 text-emerald-600 dark:text-emerald-450' }} flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users animate-pulse"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ $activeCount }}</div>
                        <div class="text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mt-0.5">Total Active Profiles</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 {{ $role === 'expert' ? 'bg-blue-500/40' : 'bg-emerald-500/40' }}"></div>
                </div>
                
                <div class="bg-white/70 -slate-900/70 backdrop-blur-md p-6 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex items-center gap-4 relative overflow-hidden group hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl {{ $role === 'expert' ? 'bg-blue-100/60 -blue-900/30 text-blue-600 dark:text-blue-400' : 'bg-emerald-100/60 -emerald-900/30 text-emerald-600 dark:text-emerald-450' }} flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ $avgExp }} Years</div>
                        <div class="text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mt-0.5">Average Experience</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 {{ $role === 'expert' ? 'bg-blue-500/40' : 'bg-emerald-500/40' }}"></div>
                </div>

                <div class="bg-white/70 -slate-900/70 backdrop-blur-md p-6 rounded-2xl border border-slate-200/80 dark:border-slate-800/80 shadow-sm flex items-center gap-4 relative overflow-hidden group hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-xl {{ $role === 'expert' ? 'bg-blue-100/60 -blue-900/30 text-blue-600 dark:text-blue-400' : 'bg-emerald-100/60 -emerald-900/30 text-emerald-600 dark:text-emerald-450' }} flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">{{ count($uniqueCities) }}</div>
                        <div class="text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mt-0.5">Active Cities</div>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-0.5 {{ $role === 'expert' ? 'bg-blue-500/40' : 'bg-emerald-500/40' }}"></div>
                </div>
            </div>

            <!-- Control Bar (Tabs & Interactive Multi-Filters) -->
            <div class="bg-white -slate-900 p-6 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm mb-8">
                <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-5">
                    
                    <!-- Role Tabs Switcher -->
                    <div class="flex bg-slate-100 -slate-900 p-1 rounded-xl border border-slate-200/60 dark:border-slate-800 shrink-0">
                        <a href="/explore?r=expert" 
                           class="flex-1 lg:flex-none text-center px-5 py-2.5 rounded-lg text-xs font-extrabold transition-all duration-200 flex items-center justify-center gap-2 {{ $role === 'expert' ? 'bg-white -slate-800 text-blue-600 dark:text-blue-400 shadow-md' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' }}">
                           <i class="fas fa-user-tie text-[10px]"></i> Experts & Mentors
                        </a>
                        <a href="/explore?r=teacher" 
                           class="flex-1 lg:flex-none text-center px-5 py-2.5 rounded-lg text-xs font-extrabold transition-all duration-200 flex items-center justify-center gap-2 {{ $role === 'teacher' ? 'bg-white -slate-800 text-emerald-600 dark:text-emerald-400 shadow-md' : 'text-slate-500 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white' }}">
                           <i class="fas fa-chalkboard-teacher text-[10px]"></i> Teachers & Educators
                        </a>
                    </div>

                    <!-- Multi-Filter Inputs Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 flex-1 lg:max-w-2xl">
                        <!-- Live Search input -->
                        <div class="relative">
                            <input type="text" 
                                   x-model="search" 
                                   placeholder="Name, bio, skills..." 
                                   class="w-full pl-9 pr-8 py-2.5 text-xs rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50 -slate-950 text-slate-850 dark:text-slate-100 focus:outline-none focus:ring-2 {{ $role === 'expert' ? 'focus:ring-blue-500/40 focus:border-blue-500' : 'focus:ring-emerald-500/40 focus:border-emerald-500' }} transition-all font-medium" />
                            <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400 text-xs">
                                <i class="fas fa-search"></i>
                            </span>
                            <button type="button" 
                                    x-show="search.length > 0" 
                                    @click="search = ''" 
                                    class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-450 hover:text-slate-700 dark:hover:text-slate-200 text-xs">
                                <i class="fas fa-xmark"></i>
                            </button>
                        </div>

                        <!-- Location Selector Filter -->
                        <div>
                            <select x-model="filterLocation" 
                                    class="w-full px-3 py-2.5 text-xs rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50 -slate-950 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 {{ $role === 'expert' ? 'focus:ring-blue-500/40 focus:border-blue-500' : 'focus:ring-emerald-500/40 focus:border-emerald-500' }} transition-all font-semibold">
                                <option value="">All Locations</option>
                                @foreach($allLocations as $val => $label)
                                    <option value="{{ $val }}">{{ $label }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Years of Experience Selector Filter -->
                        <div>
                            <select x-model="filterExperience" 
                                    class="w-full px-3 py-2.5 text-xs rounded-xl border border-slate-200 dark:border-slate-800 bg-slate-50 -slate-950 text-slate-800 dark:text-slate-200 focus:outline-none focus:ring-2 {{ $role === 'expert' ? 'focus:ring-blue-500/40 focus:border-blue-500' : 'focus:ring-emerald-500/40 focus:border-emerald-500' }} transition-all font-semibold">
                                <option value="all">Any Experience</option>
                                <option value="1-3">1 - 3 Years</option>
                                <option value="4-7">4 - 7 Years</option>
                                <option value="8+">8+ Years</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Suggested Quick-Filter Tags -->
                <div class="flex flex-wrap gap-2 mt-4 items-center border-t border-slate-100 dark:border-slate-800/80 pt-4">
                    <span class="text-[10px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-widest mr-1 flex items-center gap-1.5">
                        <i class="fas fa-tags text-[9px]"></i> Suggestions:
                    </span>
                    <template x-for="tag in suggestions" :key="tag">
                        <button type="button" 
                                @click="search = (search.toLowerCase() === tag.toLowerCase() ? '' : tag)"
                                class="px-3 py-1 text-[10px] font-extrabold rounded-lg transition-all border"
                                :class="search.toLowerCase() === tag.toLowerCase() 
                                    ? (roleAccent === 'blue' ? 'bg-blue-600 text-white border-blue-600 shadow-sm' : 'bg-emerald-600 text-white border-emerald-600 shadow-sm') 
                                    : 'bg-slate-50 text-slate-600 border-slate-200 -slate-950 dark:text-slate-400 dark:border-slate-800 hover:bg-slate-100 dark:hover:bg-slate-900'">
                            <span x-text="tag"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Dynamic Search Info Header -->
            <div class="flex items-center justify-between mb-6 px-1">
                <div class="text-[10px] font-extrabold text-slate-400 dark:text-slate-500 uppercase tracking-widest flex items-center gap-2">
                    <span class="w-1.5 h-1.5 rounded-full" :class="count > 0 ? (roleAccent === 'blue' ? 'bg-blue-500' : 'bg-emerald-500') : 'bg-slate-300'"></span>
                    Showing <span class="text-slate-700 dark:text-slate-300" x-text="count"></span> active profiles matches
                </div>
            </div>

            <!-- Members Grid -->
            @if($users->isEmpty())
                <div class="text-center py-20 bg-white -slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm max-w-md mx-auto">
                    <div class="w-16 h-16 bg-slate-100 -slate-800/40 rounded-xl flex items-center justify-center mx-auto mb-4 text-slate-400 dark:text-slate-550 text-2xl">
                        <i class="fas fa-users-slash animate-bounce"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-1">No Active Profiles Found</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 max-w-xs mx-auto mb-5">
                        There are currently no active {{ $role === 'expert' ? 'experts' : 'teachers' }} listed.
                    </p>
                    <a href="/" class="inline-flex items-center gap-1.5 text-xs text-blue-650 dark:text-blue-400 font-bold hover:gap-2 transition-all">
                        Go back to home <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            @else
                <!-- The Main Grid Container -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 relative">
                    
                    <!-- Alpine-based client-side fallback empty state when all cards are hidden -->
                    <div x-show="count === 0" 
                         class="col-span-full text-center py-16 bg-white -slate-900 border border-slate-200 dark:border-slate-850 rounded-2xl shadow-sm max-w-md mx-auto w-full"
                         x-cloak>
                        <div class="w-14 h-14 bg-slate-100 -slate-850 rounded-xl flex items-center justify-center mx-auto mb-4 text-slate-400 text-xl">
                            <i class="fas fa-filter"></i>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 dark:text-white mb-1">No Results Match Filters</h3>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400 max-w-xs mx-auto mb-4">
                            Try adjusting your query, changing your location, or clearing search criteria.
                        </p>
                        <button type="button" 
                                @click="search = ''; filterLocation = ''; filterExperience = 'all'"
                                class="inline-flex items-center gap-1.5 text-xs text-blue-650 dark:text-blue-400 font-bold hover:underline">
                            Clear all filters
                        </button>
                    </div>

                    @foreach($users as $user)
                        @php
                            $accent = $role === 'expert' ? 'blue' : 'emerald';
                            $eduList = $user->profile->education_details ?? [];
                            $profList = $user->profile->professional_details ?? [];
                            $socials = $user->profile->social_links ?? [];
                            
                            $latestEdu = is_array($eduList) && count($eduList) ? $eduList[0] : null;
                            $latestProf = is_array($profList) && count($profList) ? $profList[0] : null;
                            $totalYears = is_array($profList) ? collect($profList)->sum('years_experience') : 0;
                            
                            $searchIndex = strtolower(implode(' ', [
                                $user->profile?->full_name ?? $user->name,
                                $latestProf['designation'] ?? '',
                                $latestProf['organization'] ?? '',
                                $latestEdu['qualification'] ?? '',
                                $latestEdu['institution'] ?? '',
                                $user->profile?->city ?? '',
                                $user->profile?->bio ?? '',
                            ]));
                        @endphp
                        
                        <!-- Profile Card -->
                        <div x-data="{ openModal: false, activeTab: 'about' }"
                             x-show="(search === '' || {{ json_encode($searchIndex) }}.includes(search.toLowerCase())) && (filterLocation === '' || '{{ strtolower($user->profile?->city ?? '') }}' === filterLocation) && (filterExperience === 'all' || (filterExperience === '1-3' && {{ $totalYears }} >= 1 && {{ $totalYears }} <= 3) || (filterExperience === '4-7' && {{ $totalYears }} >= 4 && {{ $totalYears }} <= 7) || (filterExperience === '8+' && {{ $totalYears }} >= 8))"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             class="profile-card-item bg-white -slate-900 border border-slate-200 dark:border-slate-800/80 rounded-2xl shadow-sm hover:shadow-xl {{ $role === 'expert' ? 'hover:border-blue-500/40 hover:shadow-blue-500/5' : 'hover:border-emerald-500/40 hover:shadow-emerald-500/5' }} hover:-translate-y-1 transition-all duration-300 flex flex-col overflow-hidden group">
                             
                            <!-- Accent Top Highlight Line -->
                            <div class="h-1 w-full {{ $accent === 'blue' ? 'bg-blue-500' : 'bg-emerald-500' }}"></div>

                            <!-- Header Section -->
                            <div class="p-6 relative flex-1 flex flex-col">
                                <!-- Verified Label -->
                                <span class="absolute top-6 right-6 inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[9px] font-black uppercase tracking-wider bg-emerald-50 -emerald-950/30 text-emerald-600 dark:text-emerald-450 border border-emerald-100/30 dark:border-emerald-900/30 shadow-sm z-10">
                                    <i class="fas fa-check-circle"></i> Verified
                                </span>

                                <div class="flex items-start gap-4">
                                    <!-- Avatar with presence indicator -->
                                    <div class="relative shrink-0">
                                        @if($user->profile && $user->profile->avatar)
                                            <img src="{{ asset('storage/' . $user->profile->avatar) }}" 
                                                 alt="{{ $user->profile->full_name }}" 
                                                 class="w-16 h-16 rounded-xl object-cover ring-4 {{ $accent === 'blue' ? 'ring-blue-50 dark:ring-blue-950/20' : 'ring-emerald-50 dark:ring-emerald-950/20' }} shadow-sm" />
                                        @else
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($user->profile?->full_name ?? $user->name) }}&background={{ $accent === 'blue' ? '2563eb' : '059669' }}&color=fff&bold=true&size=128" 
                                                 alt="{{ $user->name }}" 
                                                 class="w-16 h-16 rounded-xl ring-4 {{ $accent === 'blue' ? 'ring-blue-50 dark:ring-blue-950/20' : 'ring-emerald-50 dark:ring-emerald-950/20' }} shadow-sm" />
                                        @endif
                                        <!-- Pulsing active presence dot -->
                                        <span class="absolute -bottom-1.5 -right-1.5 w-4 h-4 rounded-full border-2 border-white dark:border-slate-900 flex items-center justify-center text-white text-[7px] {{ $accent === 'blue' ? 'bg-blue-600' : 'bg-emerald-600' }} shadow-sm">
                                            <i class="fas {{ $role === 'expert' ? 'fa-user-tie' : 'fa-chalkboard-teacher' }}"></i>
                                        </span>
                                        <span class="absolute -top-1 -left-1 w-2.5 h-2.5 rounded-full bg-emerald-500 border-2 border-white dark:border-slate-900 animate-pulse"></span>
                                    </div>

                                    <div class="flex-1 min-w-0 pt-0.5">
                                        <h3 class="text-base font-bold text-slate-900 dark:text-white leading-tight truncate pr-16">
                                            {{ $user->profile?->full_name ?? $user->name }}
                                        </h3>
                                        @if($latestProf && !empty($latestProf['designation']))
                                            <p class="text-xs font-bold mt-1.5 uppercase tracking-wider {{ $accent === 'blue' ? 'text-blue-600 dark:text-blue-400' : 'text-emerald-600 dark:text-emerald-400' }} truncate">
                                                {{ $latestProf['designation'] }}
                                            </p>
                                        @endif
                                        @if($user->profile && $user->profile->city)
                                            <p class="text-[9px] text-slate-400 dark:text-slate-500 mt-1 font-extrabold uppercase tracking-widest flex items-center gap-1">
                                                <i class="fas fa-location-dot text-slate-400"></i>
                                                {{ $user->profile->city }}{{ $user->profile->state ? ', ' . $user->profile->state : '' }}
                                            </p>
                                        @endif
                                    </div>
                                </div>

                                <!-- Flex Spacer replacing Card Bio -->
                                <div class="flex-grow min-h-[16px]"></div>

                                <!-- Social Links on Card -->
                                @if(is_array($socials) && (isset($socials['linkedin']) || isset($socials['github']) || isset($socials['twitter']) || isset($socials['portfolio'])))
                                    <div class="flex items-center gap-2 mt-4 pt-3 border-t border-slate-100 dark:border-slate-800">
                                        @if(!empty($socials['linkedin']))
                                            <a href="{{ $socials['linkedin'] }}" target="_blank" class="w-6.5 h-6.5 rounded-full bg-slate-50 -slate-950 text-slate-500 dark:text-slate-400 hover:bg-blue-600 hover:text-white flex items-center justify-center text-[10px] transition-all duration-200 hover:-translate-y-0.5 shadow-sm" title="LinkedIn Profile">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        @endif
                                        @if(!empty($socials['github']))
                                            <a href="{{ $socials['github'] }}" target="_blank" class="w-6.5 h-6.5 rounded-full bg-slate-50 -slate-950 text-slate-500 dark:text-slate-400 hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-black flex items-center justify-center text-[10px] transition-all duration-200 hover:-translate-y-0.5 shadow-sm" title="GitHub Profile">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        @endif
                                        @if(!empty($socials['twitter']))
                                            <a href="{{ $socials['twitter'] }}" target="_blank" class="w-6.5 h-6.5 rounded-full bg-slate-50 -slate-950 text-slate-500 dark:text-slate-400 hover:bg-slate-950 hover:text-white flex items-center justify-center text-[10px] transition-all duration-200 hover:-translate-y-0.5 shadow-sm" title="Twitter / X Profile">
                                                <i class="fab fa-x-twitter"></i>
                                            </a>
                                        @endif
                                        @if(!empty($socials['portfolio']))
                                            <a href="{{ $socials['portfolio'] }}" target="_blank" class="w-6.5 h-6.5 rounded-full bg-slate-50 -slate-950 text-slate-500 dark:text-slate-400 hover:bg-indigo-600 hover:text-white flex items-center justify-center text-[10px] transition-all duration-200 hover:-translate-y-0.5 shadow-sm" title="Personal Website">
                                                <i class="fas fa-globe"></i>
                                            </a>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <!-- Showcase Info Badges -->
                            <div class="grid grid-cols-2 gap-3 px-6">
                                <div class="bg-slate-50 -slate-950/60 p-3 rounded-xl border border-slate-100 dark:border-slate-800/80 flex items-center gap-2">
                                    <div class="text-[11px] shrink-0 {{ $accent === 'blue' ? 'text-blue-500' : 'text-emerald-500' }}">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="text-[10px] font-bold text-slate-800 dark:text-slate-200 truncate">
                                            {{ $latestEdu['qualification'] ?? 'Not Specified' }}
                                        </div>
                                        <div class="text-[9px] text-slate-400 font-extrabold uppercase tracking-wider truncate mt-0.5">
                                            {{ $latestEdu['institution'] ?? 'Education' }}
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-slate-50 -slate-950/60 p-3 rounded-xl border border-slate-100 dark:border-slate-800/80 flex items-center gap-2">
                                    <div class="text-[11px] shrink-0 {{ $accent === 'blue' ? 'text-blue-500' : 'text-emerald-500' }}">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="text-[10px] font-bold text-slate-800 dark:text-slate-200 truncate">
                                            {{ $totalYears ? $totalYears . ' Yrs Exp' : 'Professional' }}
                                        </div>
                                        <div class="text-[9px] text-slate-400 font-extrabold uppercase tracking-wider truncate mt-0.5">
                                            {{ $latestProf['organization'] ?? 'Experience' }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- View Profile Trigger -->
                            <div class="px-6 mt-4">
                                <button type="button" 
                                        @click="openModal = true; activeTab = 'about'"
                                         class="w-full flex items-center justify-between text-[10px] font-extrabold uppercase tracking-widest text-slate-400 hover:text-slate-800 dark:text-slate-500 dark:hover:text-slate-300 transition-colors pb-3 border-b border-slate-100 dark:border-slate-800">
                                    <span>View Resume Details</span>
                                    <i class="fas fa-arrow-right transition-transform group-hover:translate-x-1"></i>
                                </button>
                            </div>

                            <!-- Card Footer Action -->
                            <div class="px-6 py-4 bg-slate-50 -slate-950/40 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between gap-3">
                                <span class="text-[10px] font-bold text-slate-400 dark:text-slate-500 flex items-center gap-1.5">
                                    <i class="fas fa-shield-halves {{ $accent === 'blue' ? 'text-blue-500/60' : 'text-emerald-500/60' }}"></i> Secure Link
                                </span>
                                <a href="https://wa.me/{{ config('app.wa_number', '0000000000') }}?text={{ urlencode('Hello AcadNext, I am interested in connecting with ' . ($user->profile?->full_name ?? $user->name) . ' (' . $role . ').') }}" 
                                   target="_blank"
                                   class="px-4 py-2 text-xs font-extrabold text-white rounded-lg transition duration-250 flex items-center gap-1.5 shadow-sm hover:scale-[1.02] {{ $accent === 'blue' ? 'bg-blue-600 hover:bg-blue-700' : 'bg-emerald-600 hover:bg-emerald-700' }}">
                                    <i class="fab fa-whatsapp"></i> Connect
                                </a>
                            </div>

                            <!-- Interactive Teleported Modal (CV layout) -->
                            <template x-teleport="body">
                                <div x-show="openModal" 
                                     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/60 backdrop-blur-sm"
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="transition ease-in duration-200"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0"
                                     x-cloak>
                                    
                                    <!-- Modal Container -->
                                    <div @click.away="openModal = false" 
                                         class="bg-white -slate-900 rounded-2xl w-full max-w-3xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-800 flex flex-col relative animate-scale-up"
                                         x-transition:enter="transition ease-out duration-300"
                                         x-transition:enter-start="opacity-0 translate-y-4 scale-95"
                                         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                                         x-transition:leave="transition ease-in duration-200"
                                         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                                         x-transition:leave-end="opacity-0 translate-y-4 scale-95">
                                         
                                         <!-- Close Icon -->
                                         <button type="button" 
                                                 @click="openModal = false"
                                                 class="absolute top-5 right-5 w-8 h-8 rounded-full bg-slate-100 -slate-800 text-slate-500 dark:text-slate-400 flex items-center justify-center hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors z-30 shadow-sm border border-slate-200/20">
                                             <i class="fas fa-xmark text-xs"></i>
                                         </button>
                                         
                                         <!-- Beautiful CV Split Layout -->
                                         <div class="flex flex-col md:flex-row min-h-[480px]">
                                             <!-- Left Column: Highlights and Social Contact Coordinates -->
                                             <div class="w-full md:w-1/3 bg-slate-50 -slate-950/80 p-8 border-b md:border-b-0 md:border-r border-slate-200/80 dark:border-slate-800 flex flex-col items-center text-center">
                                                 <!-- Centered Circular Big Avatar -->
                                                 <div class="relative w-28 h-28 mx-auto mb-4">
                                                     @if($user->profile && $user->profile->avatar)
                                                         <img src="{{ asset('storage/' . $user->profile->avatar) }}" 
                                                              alt="{{ $user->profile->full_name }}" 
                                                              class="w-28 h-28 rounded-full object-cover ring-4 ring-white dark:ring-slate-800 shadow-md" />
                                                     @else
                                                         <img src="https://ui-avatars.com/api/?name={{ urlencode($user->profile?->full_name ?? $user->name) }}&background={{ $accent === 'blue' ? '2563eb' : '059669' }}&color=fff&bold=true&size=128" 
                                                              alt="{{ $user->name }}" 
                                                              class="w-28 h-28 rounded-full ring-4 ring-white dark:ring-slate-800 shadow-md animate-fade-in" />
                                                     @endif
                                                     <span class="absolute top-1 left-1 w-3.5 h-3.5 rounded-full bg-emerald-500 border-2 border-white dark:border-slate-900 animate-pulse"></span>
                                                 </div>

                                                 <h3 class="text-base font-black text-slate-900 dark:text-white leading-tight">
                                                     {{ $user->profile?->full_name ?? $user->name }}
                                                 </h3>
                                                 @if($latestProf && !empty($latestProf['designation']))
                                                     <p class="text-[11px] font-bold uppercase tracking-wider mt-1.5 {{ $accent === 'blue' ? 'text-blue-600 dark:text-blue-400' : 'text-emerald-600 dark:text-emerald-400' }}">
                                                         {{ $latestProf['designation'] }}
                                                     </p>
                                                 @endif
                                                 @if($user->profile && $user->profile->city)
                                                     <p class="text-[9px] text-slate-400 dark:text-slate-500 mt-2 font-bold uppercase tracking-widest flex items-center justify-center gap-1">
                                                         <i class="fas fa-map-marker-alt"></i>
                                                         {{ $user->profile->city }}{{ $user->profile->state ? ', ' . $user->profile->state : '' }}
                                                     </p>
                                                 @endif

                                                 <hr class="w-full border-slate-200/60 dark:border-slate-850 my-5" />

                                                 <!-- Overview Stats -->
                                                 <div class="w-full space-y-3.5 text-left text-[11px]">
                                                     <div class="flex items-center justify-between">
                                                         <span class="text-slate-400 dark:text-slate-500 font-bold uppercase text-[9px] tracking-wider">Role Type</span>
                                                         <span class="font-extrabold uppercase text-[9px] tracking-wider px-2 py-0.5 rounded-full {{ $accent === 'blue' ? 'bg-blue-50 -blue-950/30 text-blue-600 dark:text-blue-450 border border-blue-100/30 dark:border-blue-900/30' : 'bg-emerald-50 -emerald-950/30 text-emerald-600 dark:text-emerald-450 border border-emerald-100/30 dark:border-emerald-900/30' }}">
                                                             {{ $role === 'expert' ? 'Expert & Advisor' : 'Teacher & Educator' }}
                                                         </span>
                                                     </div>
                                                     <div class="flex items-center justify-between">
                                                         <span class="text-slate-400 dark:text-slate-500 font-bold uppercase text-[9px] tracking-wider">Experience</span>
                                                         <span class="font-extrabold text-slate-800 dark:text-slate-200">{{ $totalYears }} Years Total</span>
                                                     </div>
                                                     <div class="flex items-center justify-between">
                                                         <span class="text-slate-400 dark:text-slate-500 font-bold uppercase text-[9px] tracking-wider">Availability</span>
                                                         <span class="font-extrabold text-emerald-600 dark:text-emerald-450 flex items-center gap-1">
                                                             <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Available Now
                                                         </span>
                                                     </div>
                                                 </div>

                                                 <hr class="w-full border-slate-200/60 dark:border-slate-850 my-5" />

                                                 <!-- Social Profile Coordinates -->
                                                 @if(is_array($socials) && (isset($socials['linkedin']) || isset($socials['github']) || isset($socials['twitter']) || isset($socials['portfolio'])))
                                                     <div class="flex items-center justify-center gap-2.5 w-full mb-6">
                                                         @if(!empty($socials['linkedin']))
                                                             <a href="{{ $socials['linkedin'] }}" target="_blank" class="w-8 h-8 rounded-xl bg-slate-100 -slate-800 hover:bg-blue-600 hover:text-white flex items-center justify-center text-sm text-slate-500 dark:text-slate-400 transition-all duration-200 hover:-translate-y-0.5 shadow-sm">
                                                                 <i class="fab fa-linkedin-in"></i>
                                                             </a>
                                                         @endif
                                                         @if(!empty($socials['github']))
                                                             <a href="{{ $socials['github'] }}" target="_blank" class="w-8 h-8 rounded-xl bg-slate-100 -slate-800 hover:bg-slate-900 hover:text-white dark:hover:bg-white dark:hover:text-black flex items-center justify-center text-sm text-slate-500 dark:text-slate-400 transition-all duration-200 hover:-translate-y-0.5 shadow-sm">
                                                                 <i class="fab fa-github"></i>
                                                             </a>
                                                         @endif
                                                         @if(!empty($socials['twitter']))
                                                             <a href="{{ $socials['twitter'] }}" target="_blank" class="w-8 h-8 rounded-xl bg-slate-100 -slate-800 hover:bg-slate-950 hover:text-white flex items-center justify-center text-sm text-slate-500 dark:text-slate-400 transition-all duration-200 hover:-translate-y-0.5 shadow-sm">
                                                                 <i class="fab fa-x-twitter"></i>
                                                             </a>
                                                         @endif
                                                         @if(!empty($socials['portfolio']))
                                                             <a href="{{ $socials['portfolio'] }}" target="_blank" class="w-8 h-8 rounded-xl bg-slate-100 -slate-800 hover:bg-indigo-600 hover:text-white flex items-center justify-center text-sm text-slate-500 dark:text-slate-400 transition-all duration-200 hover:-translate-y-0.5 shadow-sm">
                                                                 <i class="fas fa-globe"></i>
                                                             </a>
                                                         @endif
                                                     </div>
                                                 @endif

                                                 <div class="mt-auto w-full">
                                                     <!-- Dynamic Clipboard Copy Button -->
                                                     <button type="button" 
                                                             x-data="{ copied: false }"
                                                             @click="navigator.clipboard.writeText('{{ url('/explore?r=' . $role) }}'); copied = true; setTimeout(() => copied = false, 2000)"
                                                             class="w-full py-2.5 rounded-xl border border-slate-200 dark:border-slate-800 text-slate-600 hover:text-slate-900 dark:text-slate-400 dark:hover:text-white hover:bg-slate-100/50 dark:hover:bg-slate-800 text-[10px] font-bold uppercase tracking-widest transition-all flex items-center justify-center gap-2 shadow-sm">
                                                         <i class="fas text-[11px]" :class="copied ? 'fa-check text-emerald-500' : 'fa-share-nodes'"></i>
                                                         <span x-text="copied ? 'Link Copied!' : 'Share Profile'"></span>
                                                     </button>
                                                 </div>
                                             </div>

                                             <!-- Right Column: Scrollable CV timeline Details (Overview, Education, Experience) -->
                                             <div class="w-full md:w-2/3 p-8 flex flex-col justify-between">
                                                 <!-- Unified Scrollable CV Container -->
                                                 <div class="overflow-y-auto h-[420px] pr-3 scrollbar-thin space-y-8">
                                                     
                                                     <!-- Overview / Biography Section -->
                                                     <div>
                                                         <h4 class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 dark:text-slate-500 mb-3 flex items-center gap-1.5">
                                                             <i class="fas fa-user text-[9px] {{ $accent === 'blue' ? 'text-blue-500' : 'text-emerald-500' }}"></i> Biography & Overview
                                                         </h4>
                                                         <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed italic border-l-2 {{ $accent === 'blue' ? 'border-blue-500/40' : 'border-emerald-500/40' }} pl-4 py-1 mb-4">
                                                             "{{ $user->profile?->bio ?? 'Ready to provide consulting support on AcadNext.' }}"
                                                         </p>
                                                         <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                                                             <div class="bg-slate-50 -slate-950/60 p-3.5 rounded-xl border border-slate-100 dark:border-slate-800 flex items-center gap-3">
                                                                 <div class="w-8 h-8 rounded-lg bg-blue-50 -blue-950/20 text-blue-600 dark:text-blue-400 flex items-center justify-center text-sm shrink-0">
                                                                     <i class="fas fa-map-location-dot"></i>
                                                                 </div>
                                                                 <div class="min-w-0">
                                                                     <div class="text-[8px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Postal Location</div>
                                                                     <div class="text-[11px] font-bold text-slate-850 dark:text-slate-350 truncate mt-0.5">
                                                                         {{ $user->profile?->getFullAddressAttribute() ?: 'Not Provided' }}
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="bg-slate-50 -slate-950/60 p-3.5 rounded-xl border border-slate-100 dark:border-slate-850 flex items-center gap-3">
                                                                 <div class="w-8 h-8 rounded-lg bg-emerald-50 -emerald-950/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-sm shrink-0">
                                                                     <i class="fas fa-circle-check animate-pulse"></i>
                                                                 </div>
                                                                 <div class="min-w-0">
                                                                     <div class="text-[8px] font-bold text-slate-400 dark:text-slate-500 uppercase tracking-wider">Ecosystem Status</div>
                                                                     <div class="text-[11px] font-bold text-emerald-600 dark:text-emerald-450 mt-0.5">
                                                                         Active & Verified
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <hr class="border-slate-100 dark:border-slate-850" />

                                                     <!-- Education History Section -->
                                                     <div>
                                                         <h4 class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 dark:text-slate-500 mb-4 flex items-center gap-1.5">
                                                             <i class="fas fa-graduation-cap text-[10px] {{ $accent === 'blue' ? 'text-blue-500' : 'text-emerald-500' }}"></i> Education History
                                                         </h4>
                                                         @if(count($eduList) > 0)
                                                             <div class="relative border-l border-slate-200 dark:border-slate-800 pl-6 ml-2.5 space-y-6">
                                                                 @foreach($eduList as $edu)
                                                                     <div class="relative">
                                                                         <!-- Timeline Dot -->
                                                                         <span class="absolute -left-[31px] top-1.5 w-3 h-3 rounded-full {{ $accent === 'blue' ? 'bg-blue-500 ring-4 ring-blue-50 dark:ring-blue-955' : 'bg-emerald-500 ring-4 ring-emerald-50 dark:ring-emerald-950' }}"></span>
                                                                         
                                                                         <div class="font-bold text-slate-955 dark:text-white text-xs sm:text-sm">
                                                                             {{ $edu['qualification'] ?? 'N/A' }}
                                                                         </div>
                                                                         <div class="text-[11px] font-medium text-slate-500 dark:text-slate-400 mt-0.5">
                                                                             {{ $edu['institution'] ?? 'N/A' }}
                                                                         </div>
                                                                         <div class="inline-flex items-center gap-1.5 mt-2 text-[9px] font-bold text-slate-450 dark:text-slate-500 uppercase tracking-wider bg-slate-550/5 -slate-950/50 px-2 py-0.5 rounded border border-slate-100 dark:border-slate-850">
                                                                             <i class="fas fa-calendar-days text-[8px]"></i>
                                                                             Class of {{ $edu['passing_year'] ?? 'N/A' }}
                                                                             @if(!empty($edu['grade']))
                                                                                 <span class="text-slate-200 dark:text-slate-800">|</span>
                                                                                 <i class="fas fa-award text-[8px]"></i> {{ $edu['grade'] }}
                                                                             @endif
                                                                         </div>
                                                                     </div>
                                                                 @endforeach
                                                             </div>
                                                         @else
                                                             <div class="text-center py-6 bg-slate-50/50 -slate-950/30 rounded-xl border border-dashed border-slate-200 dark:border-slate-800/80">
                                                                 <p class="text-xs italic text-slate-400 dark:text-slate-505">No education entries added.</p>
                                                             </div>
                                                         @endif
                                                     </div>

                                                     <hr class="border-slate-100 dark:border-slate-850" />

                                                     <!-- Experience Section -->
                                                     <div>
                                                         <h4 class="text-[10px] font-extrabold uppercase tracking-widest text-slate-400 dark:text-slate-500 mb-4 flex items-center gap-1.5">
                                                             <i class="fas fa-briefcase text-[9px] {{ $accent === 'blue' ? 'text-blue-500' : 'text-emerald-500' }}"></i> Professional Experience
                                                         </h4>
                                                         @if(count($profList) > 0)
                                                             <div class="relative border-l border-slate-200 dark:border-slate-800 pl-6 ml-2.5 space-y-6">
                                                                 @foreach($profList as $prof)
                                                                     <div class="relative">
                                                                         <!-- Timeline Dot -->
                                                                         <span class="absolute -left-[31px] top-1.5 w-3 h-3 rounded-full {{ $accent === 'blue' ? 'bg-blue-500 ring-4 ring-blue-50 dark:ring-blue-955' : 'bg-emerald-500 ring-4 ring-emerald-50 dark:ring-emerald-950' }}"></span>
                                                                         
                                                                         <div class="font-bold text-slate-955 dark:text-white text-xs sm:text-sm">
                                                                             {{ $prof['designation'] ?? 'N/A' }}
                                                                         </div>
                                                                         <div class="text-[11px] font-medium text-slate-500 dark:text-slate-450 mt-0.5 flex items-center gap-2">
                                                                             <span>{{ $prof['organization'] ?? 'N/A' }}</span>
                                                                             <span class="text-[9px] text-blue-600 dark:text-blue-450 font-extrabold uppercase tracking-widest bg-blue-50 -blue-950/30 px-1.5 py-0.5 rounded">
                                                                                 {{ $prof['years_experience'] ?? '0' }} Yrs Exp
                                                                             </span>
                                                                         </div>
                                                                         @if(!empty($prof['description']))
                                                                             <p class="text-xs text-slate-650 dark:text-slate-400 mt-2.5 leading-relaxed bg-slate-50 -slate-950/60 p-3 rounded-xl border border-slate-100 dark:border-slate-850">
                                                                                 {{ $prof['description'] }}
                                                                             </p>
                                                                         @endif
                                                                     </div>
                                                                 @endforeach
                                                             </div>
                                                         @else
                                                             <div class="text-center py-6 bg-slate-50/50 -slate-950/30 rounded-xl border border-dashed border-slate-200 dark:border-slate-800/80">
                                                                 <p class="text-xs italic text-slate-400 dark:text-slate-505">No experience history added.</p>
                                                             </div>
                                                         @endif
                                                     </div>

                                                 </div>

                                                 <!-- Modal Resume Footer WhatsApp CTA -->
                                                 <div class="pt-4 border-t border-slate-150 dark:border-slate-800 flex items-center justify-between gap-3 mt-4">
                                                     <span class="text-[10px] font-bold text-slate-400 dark:text-slate-500 flex items-center gap-1.5">
                                                         <i class="fas fa-shield-halves {{ $accent === 'blue' ? 'text-blue-500/80' : 'text-emerald-500/80' }}"></i> Secure Link
                                                     </span>
                                                     <a href="https://wa.me/{{ config('app.wa_number', '0000000000') }}?text={{ urlencode('Hello AcadNext, I am interested in connecting with ' . ($user->profile?->full_name ?? $user->name) . ' (' . $role . ').') }}" 
                                                        target="_blank"
                                                        class="px-4 py-2.5 text-xs font-extrabold text-white rounded-lg transition duration-200 flex items-center gap-2 {{ $accent === 'blue' ? 'bg-blue-600 hover:bg-blue-700' : 'bg-emerald-600 hover:bg-emerald-700' }}">
                                                         <i class="fab fa-whatsapp"></i> Connect on WhatsApp
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                         
                                    </div>
                                </div>
                            </template>

                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

</x-layouts.main.base>