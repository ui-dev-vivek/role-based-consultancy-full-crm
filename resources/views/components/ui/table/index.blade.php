@props(['headers' => []])

<div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="bg-slate-50/50 border-b border-slate-100">
                @foreach($headers as $header)
                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-wider">
                    {{ $header }}
                </th>
                @endforeach
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            {{ $slot }}
        </tbody>
    </table>
</div>