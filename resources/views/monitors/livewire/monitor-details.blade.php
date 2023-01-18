<div class="grid grid-cols-2 gap-8" wire:poll.1000ms>
    <div>
        <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
            <div class="flex flex-col items-center py-8">
                <div class="w-24 h-24 mb-3 rounded-full shadow-lg @if($lastPings->first()?->state == 200) bg-green-600 @else bg-red-600 @endif"></div>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $lastPings->first()?->state ?? '...' }}</h5>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <x-button::outline.blue text="Run now" :link="route('monitors.runNow', $monitor)" />
                </div>
            </div>
        </div>

    </div>
    <div class="bg-gray-800 overflow-hidden shadow-sm rounded-lg flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-700">
                        <thead class="bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold sm:pl-6">
                                Status
                            </th>
                            <th class="relative py-3.5 pl-3 pr-4 sm:pr-6"></th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-600 bg-gray-800 text-gray-400">
                        @forelse($lastPings as $ping)
                            <tr class="@if($ping->state != 200) text-red-500 @endif">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-6">
                                    {{ $ping->state }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm">
                                    {{ $ping->created_at->diffForHumans() }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2"
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
