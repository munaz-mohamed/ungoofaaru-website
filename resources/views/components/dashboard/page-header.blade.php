@props([
  'kicker' => null,     // small line above title
  'title' => null,
  'subtitle' => null,
])

<div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between mb-6">
    <div>
        @if($kicker)
            <div class="text-sm text-gray-500">{{ $kicker }}</div>
        @endif

        <h1 class="text-2xl font-semibold tracking-tight">{{ $title }}</h1>

        @if($subtitle)
            <p class="text-sm text-gray-500 mt-1">{{ $subtitle }}</p>
        @endif
    </div>

    @if(trim($slot))
        <div class="flex gap-2">
            {{ $slot }}
        </div>
    @endif
</div>
