<div class="h-16 px-5 flex items-center border-b">
    <div class="font-semibold text-lg tracking-tight">
        {{ config('app.name') }}
    </div>
</div>

<div class="p-3">
    <div class="text-xs uppercase tracking-wide text-gray-500 px-3 mb-2">Menu</div>

    <nav class="space-y-1">
        <a href="#"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('dashboard') ? 'bg-gray-100 font-medium' : '' }}">
            <span>🏠</span> Dashboard
        </a>

        <a href="#"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('posts.*') ? 'bg-gray-100 font-medium' : '' }}">
            <span>📝</span> Posts
        </a>

        <a href="#"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('users.*') ? 'bg-gray-100 font-medium' : '' }}">
            <span>👥</span> Users
        </a>

        <a href="#"
           class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100
           {{ request()->routeIs('settings') ? 'bg-gray-100 font-medium' : '' }}">
            <span>⚙️</span> Settings
        </a>
    </nav>
</div>

<div class="mt-auto border-t p-3">
    <div class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
        <div class="h-9 w-9 rounded-full bg-gray-200"></div>
        <div class="flex-1">
            <div class="text-sm font-medium leading-tight">{{ auth()->user()->name ?? 'User' }}</div>
            <div class="text-xs text-gray-500">{{ auth()->user()->email ?? '' }}</div>
        </div>
        <div class="text-gray-400">⋮</div>
    </div>
</div>
