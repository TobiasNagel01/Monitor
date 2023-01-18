<x-app-layout>
    <x-slot name="header">
        {{ __('Monitors') }}
    </x-slot>

    <x-slot name="headerButton">
        <x-button::outline.dark text="Back" :link="route('monitors.index')" />
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update {{ $monitor->name }}</h2>
            <form method="POST" action="{{ route('monitors.update', $monitor) }}" class="ajax-form">
                @include('monitors.partials.form')
            </form>
        </div>
    </section>
</x-app-layout>
