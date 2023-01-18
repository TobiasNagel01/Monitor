<x-app-layout>
    <x-slot name="header">
        {{ __('Monitors') }}
    </x-slot>

    <x-slot name="headerButton">
        <x-button::outline.dark text="Back" :link="route('monitors.index')" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <livewire:monitors.monitor-details :monitor="$monitor"/>
        </div>
    </div>
</x-app-layout>
