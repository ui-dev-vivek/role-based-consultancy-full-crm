<x-layouts.dashboard.base>
    <x-ui.page-header title="Dashboard Overview"
        subtitle="Welcome back! Here's what's happening with your partners today.">
        <x-slot name="actions">
            <x-ui.button variant="secondary" icon="fas fa-comment-alt"
                x-on:click="$dispatch('open-modal', 'feedback-modal')">
                Send Feedback
            </x-ui.button>
            <x-ui.button variant="secondary" icon="fas fa-calendar">
                Last 30 Days
            </x-ui.button>
            <x-ui.button icon="fas fa-plus">
                Add Partner
            </x-ui.button>
        </x-slot>
    </x-ui.page-header>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <x-ui.stats-card label="Total Partners" value="1,234" icon="fas fa-handshake" trend="up" trendValue="12%"
            color="primary" />
        <x-ui.stats-card label="Pending Tasks" value="12" icon="fas fa-tasks" trend="down" trendValue="2%"
            color="warning" />
        <x-ui.stats-card label="Performance" value="98.2%" icon="fas fa-chart-line" trend="up" trendValue="3.4%"
            color="success" />
        <x-ui.stats-card label="Active Admins" value="42" icon="fas fa-user-shield" color="primary" />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Recent Partners Table -->
        <div class="lg:col-span-2">
            <x-ui.card padding="p-0">
                <x-slot name="header">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-slate-900">Recent Partners</h3>
                        <x-ui.button variant="ghost" size="sm">View All</x-ui.button>
                    </div>
                </x-slot>

                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50/50 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                <th class="px-6 py-4">Partner</th>
                                <th class="px-6 py-4">Category</th>
                                <th class="px-6 py-4">Status</th>
                                <th class="px-6 py-4 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach ([['name' => 'Acme Corp', 'email' => 'contact@acme.com', 'cat' => 'Technology', 'status' => 'success'], ['name' => 'Global Solutions', 'email' => 'info@global.io', 'cat' => 'Marketing', 'status' => 'warning'], ['name' => 'NexGen Digital', 'email' => 'alex@nexgen.com', 'cat' => 'Infrastructure', 'status' => 'success']] as $p)
                                <tr class="hover:bg-slate-50/50 transition-colors group">
                                    <td class="px-6 py-4">
                                        <p class="text-sm font-semibold text-slate-900">{{ $p['name'] }}</p>
                                        <p class="text-xs text-slate-500">{{ $p['email'] }}</p>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-slate-600">{{ $p['cat'] }}</td>
                                    <td class="px-6 py-4">
                                        <x-ui.badge :variant="$p['status'] === 'success' ? 'success' : 'warning'">
                                            {{ $p['status'] === 'success' ? 'Active' : 'Pending' }}
                                        </x-ui.badge>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <x-ui.button variant="ghost" size="sm" icon="fas fa-chevron-right" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-ui.card>
        </div>

        <!-- Right Sidebar Content -->
        <div class="space-y-6">
            <x-ui.card
                class="bg-primary-600 border-none shadow-lg shadow-primary-100 p-6 text-white overflow-hidden relative">
                <div class="relative z-10">
                    <h3 class="font-bold text-lg mb-2">Upgrade to Pro</h3>
                    <p class="text-primary-100 text-sm mb-4">Get access to advanced analytics and partner automation
                        tools.
                    </p>
                    <x-ui.button variant="secondary" size="sm" class="w-full">Upgrade Now</x-ui.button>
                </div>
                <i class="fas fa-rocket absolute -right-4 -bottom-4 text-white/10 text-8xl transform rotate-12"></i>
            </x-ui.card>

            <x-ui.card>
                <x-slot name="header">
                    <h3 class="font-bold text-slate-900">System Monitoring</h3>
                </x-slot>
                <div class="space-y-4">
                    <div>
                        <div class="flex items-center justify-between text-sm mb-1">
                            <span class="text-slate-500">System Load</span>
                            <span class="font-bold text-slate-900">42%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-1.5">
                            <div class="bg-primary-600 h-1.5 rounded-full" style="width: 42%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center justify-between text-sm mb-1">
                            <span class="text-slate-500">Storage Usage</span>
                            <span class="font-bold text-slate-900">85%</span>
                        </div>
                        <div class="w-full bg-slate-100 rounded-full h-1.5">
                            <div class="bg-red-500 h-1.5 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </x-ui.card>
        </div>
    </div>

    <!-- Demo Modal -->
    <x-ui.modal name="feedback-modal" title="Send Us Your Feedback" maxWidth="lg">
        <div class="space-y-4">
            <p class="text-sm text-slate-600 leading-relaxed">
                We value your feedback! Please let us know if you have any suggestions or if you've encountered any
                issues.
                This modal is centered, scrollable, and features a clean "Google Blue" design.
            </p>

            <x-forms.ui.textarea label="Your Message" name="feedback_message"
                placeholder="Tell us what's on your mind..." rows="5" />

            <x-forms.ui.input label="Email (Optional)" name="feedback_email" type="email"
                placeholder="johndoe@example.com" />

            <div class="p-4 bg-blue-50 rounded-xl border border-blue-100 flex gap-3">
                <i class="fas fa-info-circle text-blue-500 mt-0.5"></i>
                <p class="text-xs text-blue-700 leading-relaxed">
                    Your feedback will be shared with our development team to help improve the platform. We appreciate
                    your
                    time!
                </p>
            </div>
        </div>

        <x-slot name="footer">
            <x-ui.button variant="secondary" x-on:click="$dispatch('close-modal')">Cancel</x-ui.button>
            <x-ui.button x-on:click="$dispatch('close-modal')">Submit Feedback</x-ui.button>
        </x-slot>
    </x-ui.modal>
</x-layouts.dashboard.base>
