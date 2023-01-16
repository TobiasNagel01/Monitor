<a href="{{ $route }}">
    <button type="submit" {{ $attributes }}
            class="inline-flex items-center justify-center rounded-md px-4 py-2 mx-0.5 text-sm font-medium w-auto select-none {{ $type . ($filled ? '-filled' : '') }}">
        @if($icon !== '')
            @svg('heroicon-' . $icon, 'w-5 h-5')
        @endif
        {{ $text }}
    </button>
</a>
