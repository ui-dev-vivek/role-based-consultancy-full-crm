@props([
    'events' => [],
])

<div x-data="{
    currentMonth: new Date().getMonth(),
    currentYear: new Date().getFullYear(),
    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    events: {{ json_encode($events) }},

    getDaysInMonth(month, year) {
        return new Date(year, month + 1, 0).getDate();
    },
    getFirstDayOfMonth(month, year) {
        return new Date(year, month, 1).getDay();
    },
    previousMonth() {
        if (this.currentMonth === 0) {
            this.currentMonth = 11;
            this.currentYear--;
        } else {
            this.currentMonth--;
        }
    },
    nextMonth() {
        if (this.currentMonth === 11) {
            this.currentMonth = 0;
            this.currentYear++;
        } else {
            this.currentMonth++;
        }
    },
    getMonthName() {
        return new Date(this.currentYear, this.currentMonth).toLocaleString('default', { month: 'long' });
    },
    isToday(date) {
        const today = new Date();
        return date === today.getDate() &&
            this.currentMonth === today.getMonth() &&
            this.currentYear === today.getFullYear();
    },
    getEventsForDay(day) {
        const dateStr = `${this.currentYear}-${String(this.currentMonth + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
        return this.events.filter(e => e.date === dateStr);
    }
}" class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
    <!-- Header -->
    <div class="px-6 py-4 flex items-center justify-between border-b border-slate-100 bg-slate-50/50">
        <div>
            <h3 class="text-lg font-bold text-slate-900" x-text="getMonthName() + ' ' + currentYear"></h3>
            <p class="text-xs text-slate-500 font-medium"></p>
        </div>
        <div class="flex items-center gap-2">
            <x-ui.button variant="secondary" size="sm" x-on:click="previousMonth()">
                <i class="fas fa-chevron-left"></i>
            </x-ui.button>
            <x-ui.button variant="secondary" size="sm"
                x-on:click="currentMonth = new Date().getMonth(); currentYear = new Date().getFullYear();">
                Today
            </x-ui.button>
            <x-ui.button variant="secondary" size="sm" x-on:click="nextMonth()">
                <i class="fas fa-chevron-right"></i>
            </x-ui.button>
        </div>
    </div>

    <!-- Calendar Grid -->
    <div class="p-0">
        <!-- Weekdays -->
        <div class="grid grid-cols-7 border-b border-slate-100">
            <template x-for="day in days">
                <div class="py-3 text-center text-[10px] font-bold text-slate-400 uppercase tracking-widest"
                    x-text="day"></div>
            </template>
        </div>

        <!-- Days -->
        <div class="grid grid-cols-7 auto-rows-[120px]">
            <!-- Empty days before month starts -->
            <template x-for="i in getFirstDayOfMonth(currentMonth, currentYear)">
                <div class="border-b border-r border-slate-50 bg-slate-50/10"></div>
            </template>

            <!-- Month days -->
            <template x-for="day in getDaysInMonth(currentMonth, currentYear)">
                <div class="border-b border-r border-slate-50 p-2 hover:bg-slate-50/50 transition-colors flex flex-col gap-1 relative group"
                    :class="{ 'bg-primary-50/30': isToday(day) }">
                    <span class="text-xs font-bold leading-none w-6 h-6 flex items-center justify-center rounded-lg"
                        :class="isToday(day) ? 'bg-primary-600 text-white shadow-sm shadow-primary-100' :
                            'text-slate-500 group-hover:text-slate-900'"
                        x-text="day"></span>

                    <div class="flex flex-col gap-1 overflow-y-auto mt-1 scrollbar-hide">
                        <template x-for="event in getEventsForDay(day)">
                            <div class="px-2 py-0.5 rounded text-[10px] font-bold leading-tight truncate shadow-sm ring-1 ring-inset"
                                :class="{
                                    'bg-blue-50 text-blue-700 ring-blue-600/20': event.color === 'primary',
                                    'bg-emerald-50 text-emerald-700 ring-emerald-600/20': event.color === 'success',
                                    'bg-amber-50 text-amber-700 ring-amber-600/20': event.color === 'warning',
                                    'bg-red-50 text-red-700 ring-red-600/20': event.color === 'error'
                                }"
                                :title="event.title">
                                <span x-text="event.title"></span>
                            </div>
                        </template>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>
