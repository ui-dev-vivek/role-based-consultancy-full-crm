<x-layouts.dashboard.base>
    <div class="">
        <x-ui.page-header title="Edit Language Details"
            subtitle="Update information for {{ $selectedLL->location->name }} in {{ $selectedLL->language->name }}">
            <x-slot name="actions">
                <x-ui.button
                    href="{{ route('admin.language-locations.index') }}?l={{ $selectedLL->language_id }}&s={{ $selectedLL->location_id }}"
                    variant="outline" icon="fas fa-arrow-left">
                    Back to List
                </x-ui.button>
            </x-slot>
        </x-ui.page-header>

        <x-ui.card class="mt-8">
            <form action="{{ route('admin.language-locations.update', $selectedLL->id) }}" method="POST"
                class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label for="locale_name"
                            class="text-sm font-bold text-slate-700 uppercase tracking-wider">Locale Name</label>
                        <input type="text" name="locale_name" id="locale_name"
                            value="{{ old('locale_name', $selectedLL->locale_name) }}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                            placeholder="e.g. दिल्ली (Hindi)">
                        @error('locale_name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="location_content_id"
                            class="text-sm font-bold text-slate-700 uppercase tracking-wider">Content ID</label>
                        <input type="text" name="location_content_id" id="location_content_id"
                            value="{{ old('location_content_id', $selectedLL->location_content_id) }}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                            placeholder="Optional content identifier">
                        @error('location_content_id')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="speakers" class="text-sm font-bold text-slate-700 uppercase tracking-wider">Speakers
                            Count</label>
                        <input type="number" name="speakers" id="speakers"
                            value="{{ old('speakers', $selectedLL->speakers) }}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                            placeholder="Total speakers">
                        @error('speakers')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="space-y-2">
                        <label for="mt_populations" class="text-sm font-bold text-slate-700 uppercase tracking-wider">MT
                            Population</label>
                        <input type="number" name="mt_populations" id="mt_populations"
                            value="{{ old('mt_populations', $selectedLL->mt_populations) }}"
                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200"
                            placeholder="Mother tongue population">
                        @error('mt_populations')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100 flex justify-end gap-4">
                    <x-ui.button type="submit" variant="primary" icon="fas fa-save">
                        Save Changes
                    </x-ui.button>
                </div>
            </form>
        </x-ui.card>
    </div>
</x-layouts.dashboard.base>
