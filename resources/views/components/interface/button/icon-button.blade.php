<a href="{{ $route }}">
    <button type="submit" {{ $attributes }}
            class="inline-flex items-center justify-center rounded-md p-2 mx-0.5 text-sm font-medium shadow-sm w-auto select-none {{ $type . ($filled ? '-filled' : '') }}">
        @svg('heroicon-' . $icon, 'w-5 h-5')
    </button>
</a>
