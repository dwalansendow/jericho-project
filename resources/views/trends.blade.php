
<x-app-layout>
    <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Dashboard - Trends') }}
            </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @livewire('sulut.trends.daily-trends')
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                @livewire('sulut.trends.yearly-trends')
            </div>
        </div>
    </div>
</x-app-layout>
