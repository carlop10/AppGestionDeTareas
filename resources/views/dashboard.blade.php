<!-- resources/views/dashboard.blade.php -->
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
                    {{ __("You're logged in!") }}

                    <!-- Enlaces a las funcionalidades -->
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900">Gestión de Tareas</h3>
                        <ul>
                            <li>
                                <a href="{{ route('tasks.index') }}" class="text-blue-500 hover:text-blue-700">Ver Tareas</a>
                            </li>
                            <li>
                                <a href="{{ route('tasks.create') }}" class="text-blue-500 hover:text-blue-700">Crear Nueva Tarea</a>
                            </li>
                        </ul>

                        <h3 class="mt-6 text-lg font-medium text-gray-900">Gestión de Usuarios</h3>
                        <ul>
                            <li>
                                <a href="{{ route('users.index') }}" class="text-blue-500 hover:text-blue-700">Ver Usuarios</a>
                            </li>
                            <li>
                                <a href="{{ route('users.create') }}" class="text-blue-500 hover:text-blue-700">Crear Nuevo Usuario</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
