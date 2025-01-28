<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-3xl text-red-800 font-bold">Bienvenido al panel de control de las tareas {{ Auth::user()->name }}</h1>
                    <h2 class="text-2xl text-red-800 font-bold">Tus tareas pendientes son: </h2>
                    <!-- @foreach ($tasks as $task)
                    <p class="text-purple-600 text-md font-bold">
                        {{ $task->title }}
                    </p>
                    <p class="text-gray-600 text-md">
                        {{ $task->description }}
                    </p>
                    @endforeach -->
                    @livewire('task-component')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>