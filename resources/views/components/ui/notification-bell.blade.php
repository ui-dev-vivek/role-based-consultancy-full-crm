@props(['notifications' => collect(), 'unreadCount' => 0])

@php
$notificationsData = $notifications->map(function($notification) {
return [
'id' => $notification->id,
'data' => $notification->data,
'created_at' => $notification->created_at->diffForHumans(),
'read_at' => $notification->read_at
];
})->values();
@endphp

<div x-data="notificationBell" x-init="initBell({{ $unreadCount }}, {{ auth()->user()->id }})" class="relative">
    <!-- Bell Icon -->
    <button @click="open = !open"
        class="relative p-2 text-slate-400 hover:text-slate-600 focus:outline-none transition-colors">
        <i class="fas fa-bell text-xl"></i>
        <template x-if="unreadCount > 0">
            <span x-text="unreadCount"
                class="absolute top-1 right-1 flex items-center justify-center px-1.5 py-0.5 text-[10px] font-bold leading-none text-white bg-red-500 rounded-full border-2 border-white">
            </span>
        </template>
    </button>

    <!-- Dropdown -->
    <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute right-0 mt-3 w-80 bg-white rounded-2xl shadow-2xl border border-slate-100 z-50 overflow-hidden"
        style="display: none;">

        <div class="px-4 py-3 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
            <h3 class="text-sm font-bold text-slate-900">Notifications</h3>
            <template x-if="unreadCount > 0">
                <button class="text-xs text-primary-600 hover:text-primary-700 font-semibold transition-colors">
                    Mark all as read
                </button>
            </template>
        </div>

        <div class="max-h-96 overflow-y-auto">
            <template x-if="notifications.length === 0">
                <div class="p-8 text-center">
                    <div class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-bell-slash text-slate-400"></i>
                    </div>
                    <p class="text-sm text-slate-500">No notifications yet</p>
                </div>
            </template>

            <template x-for="notification in notifications" :key="notification.id">
                <div class="p-4 border-b border-slate-50 hover:bg-slate-50 transition-colors cursor-pointer group">
                    <div class="flex gap-3">
                        <div class="shrink-0">
                            <div :class="notification.read_at ? 'bg-slate-100 text-slate-400' : 'bg-primary-100 text-primary-600'"
                                class="w-8 h-8 rounded-lg flex items-center justify-center">
                                <i
                                    :class="notification.data.type === 'user_created' ? 'fas fa-user-plus' : 'fas fa-info-circle'"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <p class="text-sm text-slate-900 font-medium" x-text="notification.data.message"></p>
                            <p class="text-xs text-slate-400 mt-1" x-text="notification.created_at"></p>
                        </div>
                        <template x-if="!notification.read_at">
                            <div class="w-2 h-2 bg-primary-500 rounded-full mt-1.5 ring-4 ring-primary-50"></div>
                        </template>
                    </div>
                </div>
            </template>
        </div>

        <div class="px-4 py-2 bg-slate-50 text-center border-t border-slate-100">
            <a href="#"
                class="text-xs font-bold text-slate-500 hover:text-slate-700 transition-colors uppercase tracking-widest">
                View all activities
            </a>
        </div>
    </div>
</div>

<script>
    window.notificationBellData = @json($notificationsData);

document.addEventListener('alpine:init', () => {
    Alpine.data('notificationBell', () => ({
        open: false,
        unreadCount: 0,
        notifications: [],
        
        initBell(initialUnreadCount, userId) {
            this.unreadCount = initialUnreadCount;
            this.notifications = window.notificationBellData || [];
            
            console.log('Notification Bell Initialized');
            console.log('Echo available:', typeof window.Echo !== 'undefined');
            console.log('Initial notifications:', this.notifications);
            
            // Websockets removed as per request
            // if (typeof window.Echo !== 'undefined') { ... }
        }
    }));
});
</script>