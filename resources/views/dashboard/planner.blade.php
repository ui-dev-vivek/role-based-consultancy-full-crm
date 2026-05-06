<x-layouts.dashboard.base><x-ui.page-header title="Content Calendar (Monthly)" subtitle="Manage your content calendar.">
        <x-slot name="actions">
            {{-- <x-ui.button variant="secondary" icon="fas fa-filter">Filter</x-ui.button> --}}
            <x-ui.button icon="fas fa-eye">View Default Calender</x-ui.button>
        </x-slot>
    </x-ui.page-header>

    <div class="grid grid-cols-1 xl:grid-cols-4 gap-8">
        <!-- Left Sidebar: Date Inputs -->
        <div class="xl:col-span-1 space-y-6">
            <x-ui.card>
                <x-slot name="header">
                    <h3 class="font-bold text-slate-900">Date Selectors</h3>
                </x-slot>

                <div class="space-y-4">
                    <x-forms.ui.datepicker label="Onboarding Date" name="onboarding_date"
                        placeholder="Single date selection" />

                    <x-forms.ui.datepicker label="Meeting Time" name="meeting_time" enableTime="true"
                        placeholder="Date & Time" />

                    <x-forms.ui.datepicker label="Contract Period" name="contract_range" type="range"
                        placeholder="Select date range" />

                    <x-forms.ui.datepicker label="Holiday Dates" name="holiday_dates" type="multiple"
                        placeholder="Select multiple dates" />
                </div>
            </x-ui.card>

            <x-ui.card class="bg-primary-50 border-primary-100">
                <div class="flex gap-3">
                    <i class="fas fa-lightbulb text-primary-600 mt-1"></i>
                    <div>
                        <h4 class="text-sm font-bold text-primary-900">Pro Tip</h4>
                        <p class="text-xs text-primary-700 leading-relaxed mt-1">
                            Use the date range selector for contract durations to automatically calculate billable days.
                        </p>
                    </div>
                </div>
            </x-ui.card>
        </div>

        <!-- Main Calendar -->
        <div class="xl:col-span-3">
            <x-ui.calendar :events="[
                ['date' => date('Y-m-d'), 'title' => 'Today\'s Review', 'color' => 'primary'],
                ['date' => date('Y-m-d', strtotime('+2 days')), 'title' => 'Partner Onboarding', 'color' => 'success'],
                ['date' => date('Y-m-d', strtotime('+5 days')), 'title' => 'System Maintenance', 'color' => 'warning'],
                ['date' => date('Y-m-d', strtotime('+5 days')), 'title' => 'Security Patch', 'color' => 'error'],
                ['date' => date('Y-m-d', strtotime('+3 days')), 'title' => 'Security Patch', 'color' => 'error'],
                ['date' => date('Y-m-d', strtotime('+3 days')), 'title' => 'Past Deadline', 'color' => 'error'],
                ['date' => date('Y-m-d', strtotime('+10 days')), 'title' => 'Client Demo', 'color' => 'primary'],
            ]" />
        </div>
    </div>
</x-layouts.dashboard.base>
