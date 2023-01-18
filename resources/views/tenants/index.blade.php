<x-app-layout>
    <x-slot name="header">
        {{ __('Tenants') }}
    </x-slot>

    <x-slot name="headerButton">
        <x-button::outline.blue text="New Tenant" :link="route('tenants.create')" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm rounded-lg flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-700">
                                <thead class="bg-gray-700 text-gray-400">
                                <tr>
                                    <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold">
                                        Name
                                    </th>
                                    <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold">
                                        Nutzer
                                    </th>
                                    <th class="relative py-3.5 pl-3 pr-4 sm:pr-6"></th>
                                </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-600 bg-gray-800 text-gray-400">
                                @forelse($tenants as $tenant)
                                    <tr>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium">
                                            {{ $tenant->name }}
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium">
                                            {{ $tenant->users()->count() }}
                                        </td>
                                        <td class="relative whitespace-nowrap p-4 text-right text-sm font-medium sm:pr-6 select-none">
                                            <x-interface.button :route="route('tenants.edit', $tenant)" type="btn-secondary" filled icon="o-pencil-square" />
                                            <x-interface.button :route="route('tenants.delete', $tenant)" type="btn-danger" filled confirm-destroy icon="o-trash" />
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-6 text-gray-500 text-center">
                                            Keine Einträge
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
