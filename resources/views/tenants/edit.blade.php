<x-app-layout>
    <x-slot name="header">
        {{ __('Tenants') }}
    </x-slot>

    <x-slot name="headerButton">
        <x-interface.button type="btn-secondary" text="Back" :route="route('tenants.index')" />
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update {{ $tenant->name }}</h2>
            <form method="POST" action="{{ route('tenants.update', $tenant) }}" class="ajax-form">
                @include('tenants.partials.form')
            </form>
        </div>
    </section>
</x-app-layout>
