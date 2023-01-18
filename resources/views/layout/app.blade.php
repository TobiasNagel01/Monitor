<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    @livewireStyles
    @vite(['resources/css/app.css'])
</head>
<body class="font-sans antialiased dark">
<div class="min-h-screen bg-gray-100 bg-gray-900">
    @include('layout.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-8 flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight py-2">
                    {{ $header }}
                </h2>

                <div class="flex">
                    {{ $headerButton ?? '' }}
                </div>
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>

    @include('layout.modals.confirm-destroy')
</div>
</body>

<div class="hidden btn-primary-filled btn-secondary-filled btn-danger-filled">Anti Prune</div>

@livewireScripts
@vite(['resources/js/app.js'])
</html>
