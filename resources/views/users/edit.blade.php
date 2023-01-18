<x-app-layout>
    <x-slot name="header">
        {{ __('Users') }}
    </x-slot>

    <x-slot name="headerButton">
        <x-button::outline.dark text="Back" :link="route('users.index')" />
    </x-slot>

    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-2xl px-4 py-8 mx-auto lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Update {{ $user->name }}</h2>
            <form method="POST" action="{{ route('users.update', $user) }}" class="ajax-form">
                @include('users.partials.form')
            </form>
        </div>
    </section>
</x-app-layout>
