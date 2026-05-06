<x-layouts.dashboard.base>
    <div class="max-w-3xl mx-auto">
        <div class="mb-8">
            <a href="{{ route('admin.permissions.index') }}"
                class="inline-flex items-center text-sm font-medium text-slate-600 hover:text-slate-900 transition-colors">
                <i class="fas fa-chevron-left w-4 h-4 mr-2"></i>
                Back to Permissions
            </a>
            <h1 class="text-2xl font-bold text-slate-900 tracking-tight mt-4">Create New Permission</h1>
            <p class="text-sm text-slate-500 mt-1">Add a new permission to the system</p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
            <form action="{{ route('admin.permissions.store') }}" method="POST" class="space-y-6">
                @csrf

                <x-forms.ui.input label="Permission Code" name="code" placeholder="e.g., manage_users" required
                    class="font-mono" />

                <x-forms.ui.textarea label="Description" name="description"
                    placeholder="Brief description of what this permission allows" />

                <div class="flex items-center justify-end space-x-3 pt-6 border-t border-slate-100">
                    <a href="{{ route('admin.permissions.index') }}"
                        class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-200 rounded-xl hover:bg-slate-50 transition-all">
                        Cancel
                    </a>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-primary-600 rounded-xl hover:bg-primary-700 shadow-md shadow-primary-100 transition-all">
                        Create Permission
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layouts.dashboard.base>
