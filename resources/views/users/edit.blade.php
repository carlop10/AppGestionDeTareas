<!-- resources/views/users/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1>Editar Usuario</h1>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" value="{{ $user->name }}" required>

                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" value="{{ $user->email }}" required>

                        <label for="password">Contraseña (dejar en blanco para no cambiar):</label>
                        <input type="password" id="password" name="password">

                        <label for="password_confirmation">Confirmar Contraseña:</label>
                        <input type="password" id="password_confirmation" name="password_confirmation">

                        <button type="submit">Actualizar Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
