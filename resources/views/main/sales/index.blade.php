<x-layouts.main.base>
    <div x-data="{
        activeScript: 'Hindi',
        selectedCities: [],
        scripts: [{
                name: 'Hindi',
                script: 'Devanagari',
                groups: [
                    { state: 'Maharashtra', cities: ['Mumbai', 'Nagpur', 'Nashik'] },
                    { state: 'Delhi NCR', cities: ['Delhi', 'Gurugram', 'Noida'] },
                    { state: 'Uttar Pradesh', cities: ['Lucknow', 'Kanpur', 'Varanasi'] },
                    { state: 'Rajasthan', cities: ['Jaipur', 'Jodhpur', 'Udaipur'] }
                ]
            },
            {
                name: 'Marathi',
                script: 'Devanagari',
                groups: [
                    { state: 'Maharashtra', cities: ['Mumbai', 'Pune', 'Nagpur', 'Nashik', 'Aurangabad'] }
                ]
            },
            {
                name: 'Punjabi',
                script: 'Gurmukhi',
                groups: [
                    { state: 'Punjab', cities: ['Amritsar', 'Ludhiana', 'Jalandhar', 'Patiala'] },
                    { state: 'Chandigarh', cities: ['Chandigarh'] }
                ]
            },
            {
                name: 'Gujarati',
                script: 'Gujarati',
                groups: [
                    { state: 'Gujarat', cities: ['Ahmedabad', 'Surat', 'Vadodara', 'Rajkot', 'Bhavnagar'] }
                ]
            },
            {

                name: 'Bengali',
                script: 'Bengali',
                groups: [
                    { state: 'West Bengal', cities: ['Kolkata', 'Howrah', 'Durgapur', 'Siliguri', 'Asansol'] }
                ]
            },
            {
                name: 'Odia',
                script: 'Odia',
                groups: [
                    { state: 'Odisha', cities: ['Bhubaneswar', 'Cuttack', 'Rourkela', 'Berhampur', 'Sambalpur'] }
                ]
            },
            {
                name: 'Telugu',
                script: 'Telugu',
                groups: [
                    { state: 'Telangana', cities: ['Hyderabad', 'Warangal', 'Nizamabad'] },
                    { state: 'Andhra Pradesh', cities: ['Visakhapatnam', 'Vijayawada', 'Guntur'] }
                ]
            },
            {
                name: 'Kannada',
                script: 'Kannada',
                groups: [
                    { state: 'Karnataka', cities: ['Bengaluru', 'Mysuru', 'Hubballi', 'Mangaluru', 'Belagavi'] }
                ]
            },
            {
                name: 'Tamil',
                script: 'Tamil',
                groups: [
                    { state: 'Tamil Nadu', cities: ['Chennai', 'Coimbatore', 'Madurai', 'Tiruchirappalli', 'Salem'] }
                ]
            },
            {
                name: 'Malayalam',
                script: 'Malayalam',
                groups: [
                    { state: 'Kerala', cities: ['Kochi', 'Thiruvananthapuram', 'Kozhikode', 'Thrissur', 'Kollam'] }
                ]
            },
            {
                name: 'Urdu',
                script: 'Perso-Arabic',
                groups: [
                    { state: 'Telangana', cities: ['Hyderabad'] },
                    { state: 'Uttar Pradesh', cities: ['Lucknow'] },
                    { state: 'Jammu & Kashmir', cities: ['Srinagar'] }
                ]
            },
            {
                name: 'Assamese',
                script: 'Assamese-Bengali',
                groups: [
                    { state: 'Assam', cities: ['Guwahati', 'Dibrugarh', 'Silchar', 'Jorhat', 'Nagaon'] }
                ]
            },
            {
                name: 'Santali',
                script: 'Ol Chiki',
                groups: [
                    { state: 'Jharkhand', cities: ['Jamshedpur', 'Ranchi', 'Dumka'] },
                    { state: 'West Bengal', cities: ['Purulia'] },
                    { state: 'Odisha', cities: ['Mayurbhanj'] }
                ]
            }
        ],
        get currentScript() {
            return this.scripts.find(s => s.name === this.activeScript);
        },
        toggleCity(city) {
            if (this.selectedCities.includes(city)) {
                this.selectedCities = this.selectedCities.filter(c => c !== city);
            } else {
                this.selectedCities.push(city);
            }
        }
    }" class="max-w-6xl mx-auto">

        <div class="flex flex-col lg:flex-row gap-8 items-start">

            <!-- Left Sidebar: Language Tabs -->
            <aside
                class="w-full lg:w-1/3 bg-white/60 -slate-900/60 backdrop-blur-xl rounded-[2rem] border border-white/20 dark:border-slate-800/50 shadow-xl p-4 sticky top-28">
                <div class="mb-6 px-4 pt-2">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white mb-1">Sales Scripts</h2>
                    <p class="text-xs text-slate-500 font-medium uppercase tracking-wider">Select a Language</p>
                </div>

                <div class="space-y-1">
                    <template x-for="script in scripts" :key="script.name">
                        <button @click="activeScript = script.name"
                            :class="activeScript === script.name ?
                                'bg-primary-600 text-white shadow-lg shadow-primary-200 dark:shadow-none' :
                                'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-slate-900 dark:hover:text-white'"
                            class="w-full flex items-center justify-between px-5 py-3.5 rounded-2xl text-sm font-bold transition-all duration-300">
                            <span x-text="script.name"></span>
                            <i class="fas fa-chevron-right text-[10px] opacity-50"
                                :class="activeScript === script.name ? 'translate-x-1' : ''"></i>
                        </button>
                    </template>
                </div>
            </aside>

            <!-- Right Area: Content -->
            <main class="flex-1 w-full space-y-6">
                <!-- Header Card: White BG, Amber Warning Accents -->
                <div
                    class="bg-white -slate-900 rounded-[2.5rem] p-8 border border-amber-200/50 dark:border-amber-900/30 shadow-2xl relative overflow-hidden group">
                    <!-- Amber Accent Decoration -->
                    <div
                        class="absolute top-0 right-0 w-32 h-32 bg-amber-100 -amber-900/20 rounded-bl-full -z-0 opacity-50">
                    </div>

                    <div class="relative z-10">
                        <div class="flex items-center gap-4 mb-5">
                            <div
                                class="w-12 h-12 rounded-2xl bg-amber-50 -amber-900/30 flex items-center justify-center border border-amber-100 dark:border-amber-800/50">
                                <span class="text-amber-600 dark:text-amber-400 text-2xl font-black"
                                    x-text="activeScript.charAt(0)"></span>
                            </div>
                            <div>
                                <h1 class="text-3xl font-black tracking-tight text-slate-900 dark:text-white"
                                    x-text="activeScript"></h1>
                                <div class="flex items-center gap-2 mt-1">

                                    <p class="text-slate-500 text-sm font-medium italic">Script: <span
                                            x-text="currentScript.script" class="font-bold"></span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Cities List Grouped by State -->
                <div class="space-y-6">
                    <template x-for="group in currentScript.groups" :key="group.state">
                        <div
                            class="bg-white/40 -slate-900/40 backdrop-blur-md rounded-3xl border border-white/20 dark:border-slate-800/50 overflow-hidden">
                            <div
                                class="px-6 py-4 bg-slate-50 -slate-800/50 border-b border-white/20 dark:border-slate-800/50 flex items-center justify-between">
                                <h3 class="text-sm font-black text-slate-900 dark:text-white uppercase tracking-widest"
                                    x-text="group.state"></h3>
                                <span
                                    class="bg-primary-100 -primary-900/30 text-primary-600 dark:text-primary-400 text-[10px] font-bold px-2 py-1 rounded-lg"
                                    x-text="`${group.cities.length} Cities`"></span>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2 p-4">
                                <template x-for="city in group.cities" :key="city">
                                    <label
                                        class="flex items-center gap-3 px-4 py-3 rounded-2xl border border-transparent hover:border-slate-200 dark:hover:border-slate-700 hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all cursor-pointer group shadow-sm bg-white/40 -slate-900/40">
                                        <div class="relative flex items-center">
                                            <input type="checkbox" :value="city" x-model="selectedCities"
                                                class="w-4 h-4 rounded-md border-slate-300 dark:border-slate-700 text-primary-600 focus:ring-primary-500 -slate-900 transition-all cursor-pointer">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-xs font-bold text-slate-900 dark:text-white truncate group-hover:text-primary-600 transition-colors"
                                                x-text="city"></p>
                                        </div>
                                    </label>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Selection Action Bar -->
                <div x-show="selectedCities.length > 0" x-cloak x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-10"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    class="fixed bottom-8 left-1/2 -translate-x-1/2 w-full max-w-lg px-6 z-40">
                    <div
                        class="bg-slate-900 -white text-white dark:text-slate-900 rounded-3xl p-4 shadow-2xl flex items-center justify-between border border-slate-700 dark:border-slate-200">
                        <div class="pl-4">
                            <p class="text-xs font-black uppercase tracking-widest opacity-70">Selection</p>
                            <p class="text-lg font-black"><span x-text="selectedCities.length"></span> <span
                                    class="text-sm font-medium opacity-70">Cities Ready</span></p>
                        </div>
                        <button
                            class="bg-primary-600 hover:bg-primary-500 text-white px-6 py-3 rounded-2xl font-bold text-sm transition-all flex items-center gap-2 shadow-lg shadow-primary-600/20">
                            Download Sales Deck <i class="fas fa-download"></i>
                        </button>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layouts.main.base>
