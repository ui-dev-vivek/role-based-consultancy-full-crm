<x-layouts.dashboard.base>
    <div class="">
        <x-ui.page-header title="Language & Location" subtitle="Browse locations and details by language">
            <x-slot name="actions">
                {{-- Add actions if needed --}}
            </x-slot>
        </x-ui.page-header>

        @if (session('success'))
            <div
                class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-700 rounded-2xl flex items-center gap-3 animate-fade-in">
                <i class="fas fa-check-circle text-emerald-500"></i>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mt-8">
            <!-- Column 1: Languages -->
            <div class="lg:col-span-3">
                <div
                    class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden h-[calc(100vh-250px)] flex flex-col">
                    <div class="p-4 border-b border-slate-100 bg-slate-50/50">
                        <h3 class="font-bold text-slate-800 flex items-center gap-2">
                            <i class="fas fa-language text-indigo-500"></i>
                            Languages
                        </h3>
                    </div>
                    <div class="flex-1 overflow-y-auto p-2 space-y-1">
                        @foreach ($languages as $lang)
                            <a href="{{ route('admin.language-locations.index', ['l' => $lang->id]) }}"
                                class="flex items-center justify-between px-4 py-3 rounded-xl transition-all duration-200 group {{ $selectedLanguageId == $lang->id ? 'bg-indigo-50 text-indigo-700 ring-1 ring-indigo-100' : 'hover:bg-slate-50 text-slate-600' }}">
                                <div class="flex items-center gap-3">
                                    <span
                                        class="w-8 h-8 rounded-lg bg-white shadow-sm border border-slate-100 flex items-center justify-center font-bold text-xs uppercase {{ $selectedLanguageId == $lang->id ? 'text-indigo-600' : 'text-slate-400' }}">
                                        {{ $lang->code }}
                                    </span>
                                    <span class="font-medium">{{ $lang->name }}</span>
                                </div>
                                <i
                                    class="fas fa-chevron-right text-[10px] transition-transform duration-200 {{ $selectedLanguageId == $lang->id ? 'transform translate-x-1 text-indigo-400' : 'text-slate-300 opacity-0 group-hover:opacity-100' }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Column 2: LocationList -->
            <div class="lg:col-span-4">
                <div
                    class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden h-[calc(100vh-250px)] flex flex-col">
                    <div class="p-4 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center">
                        <h3 class="font-bold text-slate-800 flex items-center gap-2">
                            <i class="fas fa-Locationtext-emerald-500"></i>
                            Location List ({{ $selectedLanguage ? $selectedLanguage->name : 'Select Language' }})
                        </h3>
                    </div>
                    <div class="flex-1 overflow-y-auto p-4">
                        @if ($selectedLanguageId && $locations->isNotEmpty())
                            <div class="grid grid-cols-2 gap-3">
                                @foreach ($locations as $city)
                                    <a href="{{ route('admin.language-locations.index', ['l' => $selectedLanguageId, 's' => $city->id]) }}"
                                        class="flex items-center gap-3 p-3 rounded-xl border transition-all duration-200 {{ $selectedLocationId == $city->id ? 'bg-emerald-50 border-emerald-200 text-emerald-800 shadow-sm' : 'border-slate-100 hover:border-emerald-100 hover:bg-emerald-50/30 text-slate-600' }}">
                                        <div
                                            class="w-2 h-2 rounded-full {{ $selectedLocationId == $city->id ? 'bg-emerald-500 animate-pulse' : 'bg-slate-300' }}">
                                        </div>
                                        <span class="text-sm font-medium">{{ $city->name }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @elseif($selectedLanguageId)
                            <div class="h-full flex flex-col items-center justify-center text-slate-400 space-y-3">
                                <div class="w-16 h-16 rounded-full bg-slate-50 flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-2xl"></i>
                                </div>
                                <p class="text-sm">No locations found for this language</p>
                            </div>
                        @else
                            <div class="h-full flex flex-col items-center justify-center text-slate-400 space-y-3">
                                <div class="w-16 h-16 rounded-full bg-slate-50 flex items-center justify-center">
                                    <i class="fas fa-arrow-left text-2xl"></i>
                                </div>
                                <p class="text-sm">Please select a language first</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Column 3: Location Information -->
            <div class="lg:col-span-5">
                <div
                    class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden h-[calc(100vh-250px)] flex flex-col">
                    <div class="p-4 border-b border-slate-100 bg-slate-50/50 flex justify-between items-center">
                        <h3 class="font-bold text-slate-800 flex items-center gap-2">
                            <i class="fas fa-info-circle text-amber-500"></i>
                            Location Information
                        </h3>
                        @if ($selectedLL)
                            <div class="flex gap-2">
                                <a href="{{ route('admin.language-locations.edit', $selectedLL->id) }}"
                                    class="px-3 py-1.5 bg-white border border-slate-200 text-slate-600 rounded-lg text-xs font-bold hover:bg-slate-50 transition-colors flex items-center gap-2">
                                    <i class="fas fa-edit text-indigo-500"></i>
                                    Edit
                                </a>
                                @if (auth()->user()->hasRole('Admin'))
                                    <form action="{{ route('admin.language-locations.destroy', $selectedLL->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this specific language record for this location?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1.5 bg-white border border-red-100 text-red-600 rounded-lg text-xs font-bold hover:bg-red-50 transition-colors flex items-center gap-2">
                                            <i class="fas fa-trash"></i>
                                            Delete
                                        </button>
                                    </form>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="flex-1 overflow-y-auto p-6">
                        @if ($selectedLL)
                            <div class="space-y-8">
                                <div
                                    class="p-6 rounded-2xl bg-gradient-to-br from-slate-50 to-white border border-slate-100 shadow-sm">
                                    <div class="flex items-start justify-between">
                                        <div>
                                            <h4 class="text-2xl font-bold text-slate-800">
                                                {{ $selectedLL->location->name }}
                                            </h4>
                                            <p class="text-indigo-600 font-semibold mt-1">
                                                {{ $selectedLL->language->name }}
                                                Version</p>
                                        </div>
                                        <div
                                            class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-700 text-xs font-bold uppercase tracking-wider">
                                            Active
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-6 mt-8">
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                                                Locale
                                                Name</p>
                                            <p class="text-lg font-bold text-slate-700">
                                                {{ $selectedLL->locale_name ?? 'N/A' }}</p>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                                                Speakers</p>
                                            <p class="text-lg font-bold text-slate-700">
                                                {{ number_format($selectedLL->speakers ?? 0) }}</p>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">MT
                                                Population</p>
                                            <p class="text-lg font-bold text-slate-700">
                                                {{ number_format($selectedLL->mt_populations ?? 0) }}</p>
                                        </div>
                                        <div class="space-y-1">
                                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">
                                                Content ID</p>
                                            <p class="text-lg font-bold text-slate-700">
                                                {{ $selectedLL->location_content_id ?? 'N/A' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 gap-4">
                                    <div
                                        class="p-4 rounded-xl border border-slate-100 bg-white hover:shadow-md transition-shadow duration-200 flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center text-indigo-600">
                                            <i class="fas fa-globe text-xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                                                Analytics
                                                ID</p>
                                            <p class="font-bold text-slate-700">
                                                {{ $selectedLL->location->analytics_id ?? 'Not Set' }}
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="p-4 rounded-xl border border-slate-100 bg-white hover:shadow-md transition-shadow duration-200 flex items-center gap-4">
                                        <div
                                            class="w-12 h-12 rounded-xl bg-emerald-50 flex items-center justify-center text-emerald-600">
                                            <i class="fas fa-layer-group text-xl"></i>
                                        </div>
                                        <div>
                                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                                                Location
                                                Type</p>
                                            <p class="font-bold text-slate-700 capitalize">
                                                {{ $selectedLL->location->location_type ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @elseif($selectedLocationId)
                            <div class="h-full flex flex-col items-center justify-center text-slate-400 space-y-3">
                                <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-indigo-500"></div>
                                <p class="text-sm">Loading location data...</p>
                            </div>
                        @else
                            <div class="h-full flex flex-col items-center justify-center text-slate-400 space-y-3">
                                <div class="w-20 h-20 rounded-full bg-slate-50 flex items-center justify-center">
                                    <i class="fas fa-file-invoice text-3xl"></i>
                                </div>
                                <p class="text-sm text-center px-8">Select a Locationfrom the list to view its
                                    multi-lingual
                                    details and population statistics.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.dashboard.base>
