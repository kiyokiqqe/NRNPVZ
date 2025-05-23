<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Лікар - Головний дашборд') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3>{{ __("Вітаємо на дашборді лікаря") }}</h3>
                    <p>{{ __("Тут ви можете переглядати та управляти своїми пацієнтами.") }}</p>
                    <a href="{{ route('patients.index') }}" class="text-blue-500 hover:underline">
                        {{ __('Переглянути пацієнтів') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
